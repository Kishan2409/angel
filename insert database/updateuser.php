<?php 
                $f=$fatchuser[0]['subject'];
                $l=explode(",","$f");
                ?>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update User Details</h3>
            <img src="<?php echo $fatchuser[0]['photo'];?>" class="mt-1 mb-5 w-100" >

            <form method="post" id="commentForm" class="commentForm" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="fn" value="<?php echo $fatchuser[0]['fn']; ?>"
                      class=" form-control form-control-lg" minlength="3" required />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="ln" value="<?php echo $fatchuser[0]['ln']; ?>"
                      class=" form-control form-control-lg" minlength="3" required />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" name="dob" value="<?php echo $fatchuser[0]['dob']; ?>"
                      class=" form-control form-control-lg" id="birthdayDate" required />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class=" col-md-6 mb-4">

                  <h6 class=" mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female" <?php
                    if ($fatchuser[0]['gender'] == 'Female') {
                      echo "checked";
                    } ?> />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" <?php
                    if ($fatchuser[0]['gender'] == 'Male') {
                      echo "checked";
                    } ?> />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender" value="Other" <?php
                    if ($fatchuser[0]['gender'] == 'Other') {
                      echo "checked";
                    } ?> />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" name="email" value="<?php echo $fatchuser[0]['email']; ?>" class=" form-control form-control-lg"
                      required />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phone" name="phone" value="<?php echo $fatchuser[0]['phone']; ?>" class=" form-control form-control-lg" required
                      minlength="10" maxlength="10" readonly/>
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <p id="demo"></p>
                  </div>

                </div>
              </div>

              <div class="row mb-4">
                <input type="password" autocomplete="off" name="pass" value="<?php echo base64_decode($fatchuser[0]['pass']) ; ?>" class=" form-control form-control-lg"
                  required>
                <label class="form-label">Password</label>
              </div>


              <div class=" row  mb-4">
                <h6 class=" mb-2 pb-1">Subject </h6>
                
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="sub[]" value="CorePHP" <?php 
	if (in_array("CorePHP", $l)) {
		echo "checked";
	}
	?>  />
                  <label class="form-check-label">CorePHP</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="sub[]" value="AdvancePHP" <?php 
	if (in_array("AdvancePHP", $l)) {
		echo "checked";
	}
	?>  />
                  <label class="form-check-label">AdvancePHP</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="sub[]" value="Laravel"
                  <?php 
	if (in_array("Laravel", $l)) {
		echo "checked";
	}
	?>  />
                  <label class="form-check-label">Laravel</label>
                </div>
              </div>

              <div class="row">
                <input type="file" name="ph" class=" form-control form-control-lg" required extension>
                <label class="form-label">Upload Profile Photo</label>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" id="sub" name="updateud"
                  value="Update User Details" />
              </div>



            </form>
