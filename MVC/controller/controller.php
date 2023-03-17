<?php
require_once("model/model.php");

class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        // insert data
        if (isset($_POST["insert"])) {
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $gender = $_POST["gender"];
            $address = $_POST["address"];
            $state = $_POST["State"];
            $city = $_POST["City"];
            $pincode = $_POST["Pincode"];
            $dob = $_POST["DOB"];
            // upload photo
            $tmp_name = $_FILES["Profile"]["tmp_name"];
            $path = "assets/uploads/" . $_FILES["Profile"]["name"];
            move_uploaded_file($tmp_name, $path);
            $email = $_POST["email"];

            if ($firstname == "") {
                $error = "error : You did not enter a First Name.";
                $code = "1";
            } elseif ($lastname == "") {
                $error = "error : You did not enter a Last Name.";
                $code = "2";
            } elseif ($address == "") {
                $error = "error : You did not enter a Address.";
                $code = "3";
            } elseif ($pincode == "") {
                $error = "error : You did not enter a Pincode.";
                $code = "4";
            } elseif ($dob == "") {
                $error = "error : You did not enter a Date of Bith.";
                $code = "5";
            } elseif ($path == "") {
                $error = "error : You did not enter a Profile.";
                $code = "6";
            } elseif ($email == "") {
                $error = "error : You did not enter a Email.";
                $code = "7";
            } else {
                $data = array("firstname" => $firstname, "lastname" => $lastname, "gender" => $gender, "address" => $address, "state" => $state, "city" => $city, "pincode" => $pincode, "dob" => $dob, "profile" => $path, "email" => $email);
                $insertchk = $this->insert('users', $data);
                if ($insertchk) {
                    ?>
                    <script>
                        alert('Data Insert Successfully')
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert('Something was wrong!')
                    </script>
                    <?php
                }
            }

        }
        // select table
        $fatchusers = $this->select('users');
        //select for update user
        if(isset($_GET['updateprofile'])){
            $id=$_GET['updateprofile'];
            $fatchdatastudent=$this->selectupdate('users',$id);
        }
        // update
        if(isset($_POST['update'])){
            $id=$_GET['updateprofile'];
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $gender = $_POST["gender"];
            $address = $_POST["address"];
            $state = $_POST["State"];
            $city = $_POST["City"];
            $pincode = $_POST["Pincode"];
            $dob = $_POST["DOB"];
            // upload photo
            $tmp_name = $_FILES["Profile"]["tmp_name"];
            $path = "assets/uploads/" . $_FILES["Profile"]["name"];
            move_uploaded_file($tmp_name, $path);
            $email = $_POST["email"];
            $chkupdate=$this->update('users',$firstname,$lastname,$gender,$address,$state,$city,$pincode,$dob,$path,$email,$id);
            if ($chkupdate) {
                echo "<script>
                alert('User Profile Update Successfully')
                window.location='/';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong....')
                window.location='/';
                </script>";
            }
        }
        // delete data
        if (isset($_GET['deletestudent'])) {
            $deleteid = $_GET["deletestudent"];
            $id = array("id" => $deleteid);
            $chk = $this->delete('users', $id);
            if ($chk) {
                ?>
                <script>
                    alert('Delete student Successfully.')
                    window.location = 'http://localhost/kishan/TASK/MVC/';
                </script>
            <?php
            } else {
                ?>
                <script>
                    alert('Somthing was wrong try again !')
                    window.location = 'http://localhost/kishan/TASK/MVC/';
                </script>
                <?php   
            }

        }
        // load form
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("view/datatable.php");
                    break;
                case '/add':
                    require_once("index.php");
                    require_once("view/form.php");
                    break;

                case '/update':
                    require_once("index.php");
                    require_once("view/_form.php");
                    break;

                default:
                    echo "Error";
                    break;
            }
        }
    }
}
$obj = new controller();
?>