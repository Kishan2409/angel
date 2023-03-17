<?php
$mainurl="http://localhost/kishan/TASK/MVC/";
?>
<html>

<head>
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

    <!-- datatable cdn -->
    <!-- css -->
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
   
    <!-- jq -->
    <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
    <script src='https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js'></script>
   
    <!-- datatable cdn end-->
    <script>
        
            $(document).ready(function () {
                $('#example').DataTable();
            });
    </script>
</head>

<body>
    <div class="container-fluid mb-5">
        <div class="mt-5 p-5">  
            <a href="<?php echo $mainurl;?>add" class="btn btn-lg bg-primary float-end mb-5">Add Student</a>
            <table id="example" class="mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>City</th>
                        <th>Pincode</th>
                        <th>DOB</th>
                        <th>Email ID</th>
                        <th>Profile</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($fatchusers as $key) { ?>
                        <tr>
                            <td>
                                <?php echo $key['id']; ?>
                            </td>
                            <td>
                                <?php echo $key['firstname']; ?>
                            </td>
                            <td>
                                <?php echo $key['lastname']; ?>
                            </td>
                            <td>
                                <?php echo $key['gender']; ?>
                            </td>
                            <td>
                                <?php echo $key['address']; ?>
                            </td>
                            <td>
                                <?php echo $key['state']; ?>
                            </td>
                            <td>
                                <?php echo $key['city']; ?>
                            </td>
                            <td>
                                <?php echo $key['pincode']; ?>
                            </td>
                            <td>
                                <?php echo $key['dob']; ?>
                            </td>
                            <td><a href="mailto:<?php echo $key['email']; ?>" class="text-decoration-none"><?php echo $key['email']; ?></a></td>
                            <td><img src="<?php echo $key['profile']; ?>" style="height: 80px;"></td>
                            <td><a href="<?php echo $mainurl; ?>update?updateprofile=<?php echo $key['id'];?>" class="text-decoration-none">Edit</a>|
                            <a href="<?php echo $mainurl; ?>?deletestudent=<?php echo $key['id'];?>" onclick="return confirm('Are you sure to Delete data ?')" class="text-decoration-none">Delete</a></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>