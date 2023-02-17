<?php
class Model_Lkteacher extends Model{
    public function get_data()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'necodewars');

        $task_title = $_POST['title'];
        $task_desc = $_POST['desc'];
        $task_video = $_POST['video'];
        $test_input = $_POST['input'];
        $test_output = $_POST['output'];

        $query = "INSERT INTO tasks (title, description, video, input, output) VALUES ('$task_title', '$task_desc', '$task_video', '$test_input', '$test_output')";

        mysqli_query($conn, $query);

        return mysqli_error($conn);
    }
}