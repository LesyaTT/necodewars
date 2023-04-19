<?php

class Model_Task extends Model
{
    public function get_get()
    {
        $getParams = explode('?', $_SERVER['REQUEST_URI']);
        $paramsSeparate = explode('=', $getParams[1]);
        $task_id = $paramsSeparate[1];

        return $task_id;
    }

    public function get_task_id()
    {
        $task_id = $this->get_get();
        $result = ($this -> get_conn("SELECT * FROM tasks where `id` = '$task_id'"));
        return ($arrNums = mysqli_fetch_assoc($result));
    }

    public function send_compile()
    {
        require_once '../NeCodeWars/app/vendor/rmccue/requests/src/Autoload.php';
        WpOrg\Requests\Autoload::register();
        $headers = array('Content-Type' => 'application/json');

        $code = $_POST['code'];
        $arrNums = $this->get_task_id();

        $arrInput = explode(',', $arrNums['input']); // [0] => 1, [1] => 1
        $stdin = implode("\n", $arrInput);

        $arr = array('script' => $code, 'language' => 'php', 'versionIndex' => '4', 'stdin' => $stdin,
            'clientId' => 'd5ef21214f7a8ba8fab9a86a95d23e00', 'clientSecret' => 'b70f913f4030e967f64bfb58c8f00a720cc6b0eed117f80207e1fb28e1bdb264');
        $options = json_encode($arr);
        $request = WpOrg\Requests\Requests::post('https://api.jdoodle.com/v1/execute', $headers, $options);

        $reqRes = json_decode($request->body);
        return ($reqRes->output);
    }

    public function get_data()
    {
        if (isset($_POST['submit'])) {
            return ($this->send_compile());
        }
    }

    public function check_output()
    {
        $output = $this->send_compile();
        $arrNums = $this->get_task_id();

        if(isset($_POST['submit'])){
            if ($output == $arrNums['output']) {
                $message = 'Успешно выполнение автотестов';
                return $message;
            } else {
                $message = 'Ошибка в выполнении автотестов';
                return $message;
            }
        } else { return ''; }
    }

    public function check_plagearism()
    {
        $code = $_POST['code'];
        $trimCode = substr($code, 5);
        $task_id = $this->get_get();

        $result = ($this->get_conn("SELECT code FROM results where `task_id` = '$task_id'"));
        $arr = mysqli_fetch_all($result);

        if(isset($_POST['submit'])){
            $match = [0];
            foreach ($arr as $codeItem){
                similar_text($trimCode, $codeItem[0], $perc);
                array_push($match, $perc);
            }
            $plagiat = max($match);
            return 'Плагиат: ' . $plagiat . '%';
        } else { return ''; }
    }

    public function score_grade(){
        $output = $this->check_output();
        $plagiat = $this -> check_plagearism();

        if(isset($_POST['submit'])){
            if(($output == 'Успешно выполнение автотестов')){
                if($plagiat >= 50 && $plagiat <= 70){
                    return 3;
                } elseif ($plagiat > 70){
                    return 2;
                } elseif ($plagiat < 20){
                    return 4;
                } else {
                    return 5;
                }
            } else {
                return 2;
            }
        } else {
            return '';
        }
    }

    public function send_data()
    {
        $user_id = $_COOKIE['user_id'];
        $code = $_POST['code'];
        $trimCode = substr($code, 5);
        $task_id = $this->get_get();
        $result_autotest = $this->check_output();
        $plagearism_result = $this -> check_plagearism();
        $grade = $this -> score_grade();

        if (isset($_POST['submit'])) {
            $this -> get_conn("INSERT INTO results (`student_id`, `task_id`, `autotest_result`, `plagearism_result`, `code`, `grade`, `status`) VALUES ('$user_id', '$task_id', '$result_autotest', '$plagearism_result', '$trimCode', '$grade', '1')");
        }
    }
}