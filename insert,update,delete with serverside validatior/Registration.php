<?php
$mainurl="http://localhost/kishan/TASK/insert,update,delete%20with%20serverside%20validatior/";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title></title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>

  <style type="text/css">
    .errorMsg {
      border: 1px solid red;
    }

    .message {
      color: red;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
              <?php 
              if (isset($error)) 
              { 
                echo "<p class='message'>" .$error. "</p>" ;
              } 
              ?>
              <form method="post" enctype="multipart/form-data">

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" id="firstName" name="fn" value="<?php if(isset($fn)){echo $fn;} ?>" class="<?php if(isset($code) && $code == 1){echo "errorMsg" ;} ?> form-control form-control-lg" />
                      <label class="form-label" for="firstName">First Name</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4">

                    <div class="form-outline">
                      <input type="text" id="lastName" name="ln" value="<?php if(isset($ln)){echo $ln;} ?>" class="<?php if(isset($code) && $code == 2){echo "errorMsg" ;} ?> form-control form-control-lg" />
                      <label class="form-label" for="lastName">Last Name</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline datepicker w-100">
                      <input type="date" name="dob" value="<?php if(isset($dob)){echo $dob;} ?>" class="<?php if(isset($code) && $code == 3){echo "errorMsg" ;} ?> form-control form-control-lg" id="birthdayDate" />
                      <label for="birthdayDate" class="form-label">Birthday</label>
                    </div>

                  </div>
                  <div class="<?php if(isset($code) && $code == 4){echo "errorMsg" ;} ?> col-md-6 mb-4">

                    <h6 class=" mb-2 pb-1">Gender: </h6>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                        value="Female" checked />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="maleGender"
                        value="Male" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="otherGender"
                        value="Other" />
                      <label class="form-check-label" for="otherGender">Other</label>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <input type="text" id="emailAddress" name="email" value="<?php if(isset($email)){echo $email;} ?>" class="<?php if(isset($code) && $code == 5){echo "errorMsg" ;} ?> form-control form-control-lg" />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>

                  </div>
                  <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                      <input type="tel" id="phoneNumber" name="phone" value="<?php if(isset($phone)){echo $phone;} ?>" class="<?php if(isset($code) && $code == 6){echo "errorMsg" ;} ?> form-control form-control-lg" />
                      <label class="form-label" for="phoneNumber">Phone Number</label>
                    </div>

                  </div>
                </div>

                <div class="row mb-4">
                  <input type="password" name="pass" value="<?php if(isset($pass)){echo $pass;} ?>" class="<?php if(isset($code) && $code == 7){echo "errorMsg" ;} ?> form-control form-control-lg">
                  <label class="form-label">Password</label>
                </div>

                <div class="row">
                  <div class="col-12 mb-4">

                    <select name="city"  class="<?php if(isset($code) && $code == 8){echo "errorMsg" ;} ?> select form-control-lg">
                      <option value="1" disabled>Choose City</option>
                      <option value="Rajkot">Rajkot</option>
                      <option value="Ahemdabad">Ahemdabad</option>
                      <option value="Baroda">Baroda</option>
                    </select>
                    <label class="form-label select-label">Choose City</label>

                  </div>
                </div>

                <div class="<?php if(isset($code) && $code == 9){echo "errorMsg" ;} ?> row  mb-4">
                  <h6 class=" mb-2 pb-1">Subject </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="sub[]" value="CorePHP"
                      checked />
                    <label class="form-check-label">CorePHP</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="sub[]" value="AdvancePHP" />
                    <label class="form-check-label">AdvancePHP</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="sub[]" value="Laravel" />
                    <label class="form-check-label">Laravel</label>
                  </div>
                </div>

                <div class="row">
                  <input type="file" name="ph" class="<?php if(isset($code) && $code == 10){echo "errorMsg" ;} ?> form-control form-control-lg">
                  <label class="form-label">Upload Profile Photo</label>
                </div>

                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit" />
                </div>

                <div class="row mt-5">
                  <h3><a href="<?php echo $mainurl;?>login">Login</a></h3>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>