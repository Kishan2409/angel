<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        
        // insert data
        if (isset($_POST["submit"])) {
            $fn = $_POST["fn"];
            $ln = $_POST["ln"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $pass = $_POST["pass"];
            $city = $_POST["city"];

            // checkbox
            $sub = $_POST["sub"];
            $sub1 = "";
            foreach ($sub as $sub2) {
                $sub1 .= $sub2 . ",";
            }

            //uplode photo
            $tmp_name = $_FILES["ph"]["tmp_name"];
            $path = "uploads/" . $_FILES["ph"]["name"];
            $imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));
            move_uploaded_file($tmp_name, $path);

            // server side validation 
            if ($fn == "") {
                $error =  "error : You did not enter a First Name.";
                $code = "1";
            } elseif ($ln == "") {
                $error =  "error : You did not enter a Last Name.";
                $code = "2";
            } elseif ($dob == "") {
                $error =  "error : You did not enter a Date Of Birth.";
                $code = "3";
            } elseif ($gender == "") {
                $error =  "error : You did not enter a Gender.";
                $code = "4";
            } elseif ($email == "") {
                $error =  "error : You did not enter a Email.";
                $code = "5";
            } elseif (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
                $error = 'error : You did not enter a valid email.';
                $code = "5";
            } elseif ($phone == "") {
                $error =  "error : You did not enter a Phone Numbder.";
                $code = "6";
            } elseif (is_numeric(trim($phone)) == false) {
                $error =  "error : Please enter numeric value.";
                $code = "6";
            } elseif (strlen($phone) > 10) {
                $error =  "error : Number should be ten digits.";
                $code = "6";
            } elseif ($pass == "") {
                $error =  "error : You did not enter a Password.";
                $code = "7";
            } elseif (strlen($pass <= '8')) {
                $error = "error : Your Password Must Contain At Least 8 Characters!";
                $code = "7";
            } elseif (!preg_match("#[0-9]+#", $pass)) {
                $error = "Your Password Must Contain At Least 1 Number!";
                $code = "7";
            } elseif (!preg_match("#[A-Z]+#", $pass)) {
                $error = "error : Your Password Must Contain At Least 1 Capital Letter!";
                $code = "7";
            } elseif (!preg_match("#[a-z]+#", $pass)) {
                $error = "error : Your Password Must Contain At Least 1 Lowercase Letter!";
                $code = "7";
            } elseif ($city == "") {
                $error = "error : You did not enter a City";
                $code = "8";
            } elseif ($sub == "") {
                $error =  "error : You did not enter a Subject.";
                $code = "9";
            } elseif ($tmp_name == "") {
                $error =  "error : You did not enter a Profile Photo.";
                $code = "10";
            } elseif ($imageFileType != "jpg" && $imageFileType != "png") {
                $error = "error : Sorry, only JPG & PNG files are allowed";
                $code = "10";
            } else {
                $data = array("fn" => $fn, "ln" => $ln, "dob" => $dob, "gender" => $gender, "email" => $email, "phone" => $phone, "pass" => $pass, "city" => $city, "subject" => $sub1, "photo" => $path);
                $chk = $this->insertdata('user', $data);
                if ($chk) {
                    echo "<script>
                    alert('User Insert Successfully')
                    window.location='login';
                    </script>";
                } else {
                    echo "<script>
                    alert('something was wrong!')
                    window.location='./';
                    </script>";
                }
            }
        }

        //login user
        if(isset($_POST["login"])) {
            $em = $_POST["email"];
            $pa = $_POST["pass"];
            $chk = $this->login('user', $em, $pa);
            if ($chk) {
                echo "<script>
                    alert('User Login Successfully')
                    window.location='home';
                    </script>";
            } else {
                echo "<script>
                    alert('Something was wrong!')
                    window.location='./';
                    </script>";
            }
        }

        // load template
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once("index.php");
                    require_once("Registration.php");
                    break;
                case '/login':
                    require_once("index.php");
                    require_once("Registration.php");
                    break;
                    
                default:
                    echo "404 PAGE NOT FOUND";
                    break;
            }
        }
    }
}
$obj = new controller();