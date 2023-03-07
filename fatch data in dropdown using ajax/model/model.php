<?php
class model
{
    public $con="";
    
    public function __construct()
    {
        try{
            $this->con= new mysqli("localhost","root","","db");
            echo "Connection Successfully";
        }catch(Exception $e){
            die(mysqli_error($this->con,$e));
        }
    }

    public function recode($table){
        $select = "select * from $table";
        $exe = mysqli_query($this->con, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }

    public function fatchtable($table,$tblcolnm,$id){
        $select = "select * from $table where $tblcolnm='$id'";
        $exe = mysqli_query($this->con, $select);
        while ($fatch = mysqli_fetch_array($exe)) {
            $arr[] = $fatch;
        }
        return $arr;
    }
}
?>