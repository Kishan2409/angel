<?php
class model
{
    public $con = "";
    public function __construct()
    {
        try {
            $this->con = new mysqli("localhost", "root", "", "db");
            // echo "connection successfully";
        } catch (Exception $e) {
            die(mysqli_error($this->con, $e));
        }
    }
    public function insert($table, $data)
    {
        $key = array_keys($data);
        $keynm = implode(",", $key);
        $val = array_values($data);
        $valnm = implode("','", $val);

        $insert = "insert into $table($keynm)values('$valnm')";
        $exe = mysqli_query($this->con, $insert);
        return $exe;
    }

    public function select($table, $phone)
    {
        $select = "select * from $table where phone='$phone'";
        $exe = mysqli_query($this->con, $select);
        $fatch = mysqli_fetch_array($exe);
        $num_row = mysqli_num_rows($exe);
        if ($num_row > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function select1($table)
    {
        $select = "select * from $table";
        $exe = mysqli_query($this->con, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }

    public function user($table, $id)
    {
        $select = "select * from $table where id='$id'";
        $exe = mysqli_query($this->con, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }

    public function updprofile($table, $fn, $ln, $dob, $gender, $email, $pass, $sub1, $path, $id)
    {
        $update = "update $table set fn='$fn', ln='$ln', dob='$dob',gender='$gender',email='$email',pass='$pass',subject='$sub1',photo='$path' where id='$id'";
        $exe = mysqli_query($this->con, $update);
        return $exe;
    }
    public function deletedata($table, $id)
    {
        $col = array_keys($id);
        $colnm = implode(",", $col);
        $val = array_values($id);
        $valnm = implode("','", $val);

        $delete = "delete from $table where $colnm='$valnm'";
        $exe = mysqli_query($this->con, $delete);
        return $exe;
    }
}
?>