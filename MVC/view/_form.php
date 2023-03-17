<?php
$mainurl = "http://localhost/kishan/TASK/MVC/";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>_Form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- bootstrape cdn -->
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/main.css'>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
    <!-- bootstrape cdn end -->

    <!-- jquery validater -->
    <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- jquery validater end -->
    <script>
        $(document).ready(function () {
            // $('#example').DataTable();

            $("#update").click(function () {
                $("#form").validate({
                    rules: {
                        firstname: "required",
                        lastname: "required",
                        address: "required",
                        Pincode: "required",
                        DOB: "required",
                        Profile: "required",
                        email: "required",
                    }
                })
            })

        });
    </script>

</head>

<body>
    <section class=" bg-dark">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="assets/image/img4.webp" alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;height:100%" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <form method="post" id="form" enctype="multipart/form-data">
                                        <h3 class="mb-5 text-uppercase">Student Details Update form</h3>
                                        <div class="row">
                                            <div class="col-md-12 mb-4 text-center">
                                                <img src="<?php echo $fatchdatastudent[0]['profile'] ?>"
                                                    style="height: 150px;">
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1m">First
                                                        name</label>
                                                    <input type="text" name="firstname" id="firstname"
                                                        value="<?php echo $fatchdatastudent[0]['firstname']; ?>"
                                                        class="form-control form-control-lg" required/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                    <input type="text" name="lastname" id="lastname"
                                                        value="<?php echo $fatchdatastudent[0]['lastname']; ?>"
                                                        class="form-control form-control-lg" required/>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                            <h6 class="mb-0 me-4">Gender: </h6>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="femaleGender" value="Female" <?php
                                                    if ($fatchdatastudent[0]['gender'] == 'Female') {
                                                        echo "checked";
                                                    } ?> />
                                                <label class="form-check-label" for="femaleGender">Female</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0 me-4">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="maleGender" value="Male" <?php
                                                    if ($fatchdatastudent[0]['gender'] == 'Male') {
                                                        echo "checked";
                                                    } ?> />
                                                <label class="form-check-label" for="maleGender">Male</label>
                                            </div>

                                            <div class="form-check form-check-inline mb-0">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="otherGender" value="Other" <?php
                                                    if ($fatchdatastudent[0]['gender'] == 'Other') {
                                                        echo "checked";
                                                    } ?> />
                                                <label class="form-check-label" for="otherGender">Other</label>
                                            </div>

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example8">Address</label>
                                            <textarea id="address" name="address"
                                                class="form-control form-control-lg" required><?php echo $fatchdatastudent[0]['address']; ?></textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-4">

                                                <select id="State" name="State" class="State form-control">
                                                    <option>State</option>
                                                    <option value="Gujarat" selected>Gujarat</option>
                                                </select>

                                            </div>
                                            <div class="col-md-6 mb-4">

                                                <select id="City" name="City" class="City form-control ">
                                                    <option selected>City</option>
                                                    <option value="Rajkot" <?php if ($fatchdatastudent[0]['city'] == 'Rajkot') {
                                                        echo "selected";
                                                    } ?>>Rajkot</option>
                                                    <option value="Ahemdabad" <?php if ($fatchdatastudent[0]['city'] == 'Ahemdabad') {
                                                        echo "selected";
                                                    } ?>>Ahemdabad</option>
                                                    <option value="Baroda" <?php if ($fatchdatastudent[0]['city'] == 'Baroda') {
                                                        echo "selected";
                                                    } ?>>Baroda</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example90">Pincode</label>
                                            <input type="number" name="Pincode" id="Pincode"
                                                value="<?php echo $fatchdatastudent[0]['pincode']; ?>"
                                                class="form-control form-control-lg" required/>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example9">DOB</label>
                                            <input type="date" name="DOB" id="DOB"
                                                value="<?php echo $fatchdatastudent[0]['dob']; ?>"
                                                class="form-control form-control-lg" required/>
                                        </div>
                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example99">Profile</label>
                                            <input type="file" name="Profile" id="Profile"
                                                class="form-control form-control-lg" required/>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form3Example97">Email ID</label>
                                            <input type="email" name="email"
                                                value="<?php echo $fatchdatastudent[0]['email']; ?>" id="email"
                                                class="form-control form-control-lg" required/>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <input type="submit" name="update" id="update"
                                                class="insert btn btn-warning btn-lg ms-2" value="Update data">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>