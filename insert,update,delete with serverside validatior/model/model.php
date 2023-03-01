<?php
class model
{
    public $connection = "";
    public function __construct()
    {
        
        try {
            $this->connection = new mysqli("localhost", "root", "", "db");
            echo "connection successfully";
        } catch (Exception $e) {
            die(mysqli_error($this->connection, $e));
        }
    }
    // insert data
    public function insertdata($table, $data)
    {
        $key = array_keys($data);
        $keynm = implode(",", $key);
        $val = array_values($data);
        $valnm = implode("','", $val);

        // insert
        $insert = "insert into $table($keynm)values('$valnm')";
        $exe = mysqli_query($this->connection, $insert);
        return $exe;
    }
    public function login($table, $em, $pa)
    {    
        $select = "SELECT * FROM $table WHERE email='$em' and pass='$pa'";
        $exe = mysqli_query($this->connection, $select);
        $fatch = mysqli_fetch_array($exe);
        $num_row = mysqli_num_rows($exe);
        if ($num_row == 1) {
            // $_SESSION['id'] = $fatch['id'];
            // $_SESSION['email'] = $fatch['email'];
            return true;
        } else {
            return false;
        }
    }
}
