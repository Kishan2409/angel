<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>

<script>
  $(document).ready(function () {
    $('#example').DataTable();
  });
</script>

<div class="container-flude mt-5" style="overflow: auto;">
  <table id="example">
    <thead>
      <tr>
        <th>#Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Subject</th>
        <th>Photo</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($user as $row) {
        ?>
        <tr>
          <td>
            <?php echo $row['id']; ?>
          </td>
          <td>
            <?php echo $row['fn']; ?>
          </td>
          <td>
            <?php echo $row['ln']; ?>
          </td>
          <td>
            <?php echo $row['dob']; ?>
          </td>
          <td>
            <?php echo $row['gender']; ?>
          </td>
          <td>
            <?php echo $row['email']; ?>
          </td>
          <td>
            <?php echo $row['phone']; ?>
          </td>
          <td>
            <?php echo $row['pass']; ?>
          </td>
          <td>
            <?php echo $row['subject']; ?>
          </td>
          <td><img src="<?php echo $row['photo']; ?>" style="width: 100px;"></td>
          <td><a class="text-decoration-none fs-5"
              href="<?php echo $mianurl; ?>update?updateuser=<?php echo $row['id']; ?>"> Edit </a>
            |
            <a class="text-decoration-none fs-5" href="<?php echo $mianurl; ?>show?deleteuser=<?php echo $row['id']; ?>"
              onclick="return confirm('Are you sure to Delete data ?')"> Delete </a>
          </td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>

</div>