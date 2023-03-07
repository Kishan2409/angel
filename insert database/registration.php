<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>

            <form method="post" id="commentForm" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="firstName" name="fn" class=" form-control form-control-lg" minlength="3"
                      required />
                    <label class="form-label" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" id="lastName" name="ln" value="" class=" form-control form-control-lg"
                      minlength="3" required />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" name="dob" value="" class=" form-control form-control-lg" id="birthdayDate"
                      required />
                    <label for="birthdayDate" class="form-label">Birthday</label>
                  </div>

                </div>
                <div class=" col-md-6 mb-4">

                  <h6 class=" mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female"
                      checked />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender" value="Other" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="email" id="emailAddress" name="email" value="" class=" form-control form-control-lg"
                      required />
                    <label class="form-label" for="emailAddress">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="tel" id="phone" name="phone" value="" class="chaking form-control form-control-lg"
                      required minlength="10" maxlength="10" />

                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <label id="demo" ></label>
                  </div>

                </div>
              </div>

              <div class="row mb-4">
                <input type="password" autocomplete="off" name="pass" value="" class=" form-control form-control-lg"
                  required>
                <label class="form-label">Password</label>
              </div>


              <div class=" row  mb-4">
                <h6 class=" mb-2 pb-1">Subject </h6>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" name="sub[]" value="CorePHP" checked />
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
                <input type="file" name="ph" class=" form-control form-control-lg" required extension>
                <label class="form-label">Upload Profile Photo</label>
              </div>

              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" id="sub" name="submit" value="Submit" />
              </div>

              <div class="row mt-5">
                <h3><a href="<?php echo $mianurl; ?>show">Show Data</a></h3>
              </div>

            </form>