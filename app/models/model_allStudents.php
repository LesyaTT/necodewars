<?php
class Model_allStudents extends Model{
    public function get_data()
    {
        $result = $this -> get_conn("SELECT * FROM users WHERE `admin_status` = '0'");
        return mysqli_fetch_all($result);
    }
}