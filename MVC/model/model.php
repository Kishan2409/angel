<?php
class model
{
    public $con = "";
    public function __construct()
    {
        try {
            $this->con = new mysqli("localhost", "root", "", "db");
            //echo "Connection_Status_Ok";
        } catch (Exception $e) {
            die(mysqli_error($this->con, $e));
        }
    }
    // this function is select table on database 
    public function select($table)
    {
        $select="SELECT * FROM $table";
        $exe=mysqli_query($this->con,$select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[]=$fatch;
        }
        return $arr;
    }
    // this function is insert data on database
    public function insert($table, $data)
    {
        $key=array_keys($data);
        $keynm=implode(",",$key);
        $val=array_values($data);
        $valnm=implode("','",$val);
        $insert="INSERT INTO $table ($keynm)VALUES('$valnm')";
        $exe=mysqli_query($this->con,$insert);
        return $exe;
    }
    public function selectupdate($table,$id){
        $selectstudent="SELECT * FROM $table WHERE id='$id'";
        $exe=mysqli_query($this->con,$selectstudent);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[]=$fatch;
        }
        return $arr;
    }
    // this function is update data on database
    public function update($table,$firstname,$lastname,$gender,$address,$state,$city,$pincode,$dob,$path,$email,$id)
    {
        $update="UPDATE $table SET firstname='$firstname',lastname='$lastname',gender='$gender',address='$address',state='$state',city='$city',pincode='$pincode',dob='$dob',profile='$path',email='$email' WHERE id='$id'";
        $exe = mysqli_query($this->con,$update);
        return $exe;
    }
    // this function is delete data on database
    public function delete($table,$id)
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