<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        $user = $this->select1('user');

        if (!empty($_POST['phone'])) {
            $phone = $_POST['phone'];
            $chkphone = $this->select('user', $phone);
            if ($chkphone != $phone) {
                if (isset($_POST["submit"])) {
                    $fn = $_POST["fn"];
                    $ln = $_POST["ln"];
                    $dob = $_POST["dob"];
                    $gender = $_POST["gender"];
                    $email = $_POST["email"];

                    $phone = $_POST["phone"];

                    $pass = base64_encode($_POST["pass"]);

                    // checkbox
                    $sub = $_POST["sub"];
                    $sub1 = "";
                    foreach ($sub as $sub2) {
                        $sub1 .= $sub2 . ",";
                    }

                    //uplode photo
                    $tmp_name = $_FILES["ph"]["tmp_name"];
                    $path = "uploads/" . $_FILES["ph"]["name"];
                    // $imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    move_uploaded_file($tmp_name, $path);


                    $data = array("fn" => $fn, "ln" => $ln, "dob" => $dob, "gender" => $gender, "email" => $email, "phone" => $phone, "pass" => $pass, "subject" => $sub1, "photo" => $path);
                    $chk = $this->insert('user', $data);
                    if ($chk) {
                        echo "<script>
                alert('User Insert Successfully')
                window.location='./';
                    </script>";
                    } else {
                        echo "<script>
                alert('Something was wrong!')
                window.location='./';
                </script>";
                    }
                }
            } else { ?>

                <script src='https://www.tutorialspoint.com/jquery/jquery-3.6.0.js'></script>
                <script>
                    $(function () {
                       

                            $('#demo').html('Phone Number is already store in database');
                        
                    });
                </script>

            <?php }

        }
        if (isset($_GET['updateuser'])) {
            $id = $_GET['updateuser'];
            $fatchuser = $this->user('user', $id);
        }

        if (isset($_POST['updateud'])) {
            $id = $_GET['updateuser'];
            $fn = $_POST["fn"];
            $ln = $_POST["ln"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];

            $phone = $_POST["phone"];

            $pass = base64_encode($_POST["pass"]);

            // checkbox
            $sub = $_POST["sub"];
            $sub1 = "";
            foreach ($sub as $sub2) {
                $sub1 .= $sub2 . ",";
            }

            //uplode photo
            $tmp_name = $_FILES["ph"]["tmp_name"];
            $path = "uploads/" . $_FILES["ph"]["name"];
            // $imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));
            move_uploaded_file($tmp_name, $path);

            $chk = $this->updprofile('user', $fn, $ln, $dob, $gender, $email, $phone, $pass, $sub1, $path, $id);
            if ($chk) {
                echo "<script>
                alert('User Profile Update Successfully')
                window.location='show';
                </script>";
            } else {
                echo "<script>
                alert('Something was wrong....')
                window.location='./';
                </script>";
            }
        }

        if (isset($_GET["deleteuser"])) {
            $deleteid = $_GET["deleteuser"];
            $id = array("id" => $deleteid);
            $chk = $this->deletedata('user', $id);
            if ($chk) {
                echo "<script>
                alert('Delete User Successfully.')
                window.location='show';
                </script>";
            } else {
                echo "<script>
                alert('Somthing was wrong try again !')
                window.location='./';
                </script>";
            }
        }
        // load
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("registration.php");
                    require_once("footer.php");
                    break;

                case '/show':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("shows.php");
                    require_once("footer.php");
                    break;

                case '/update':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("updateuser.php");
                    require_once("footer.php");
                    break;

                default:
                    echo "404";
                    break;
            }
        }
    }
}
$obj = new controller();