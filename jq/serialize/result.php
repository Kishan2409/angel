<?php
if($_REQUEST["name"]){
    $name=$_REQUEST['name'];
    echo "Welcome ".$name."<br>";
    $age=$_REQUEST['age'];
    echo "Your age : ".$age."<br>";
    $gender=$_REQUEST['gender'];
    echo "Your Gender : ".$gender."<br>";
}
?>