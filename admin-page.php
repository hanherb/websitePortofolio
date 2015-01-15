<!DOCTYPE html>
<html>
<head>
  <?php include 'source.php' ?>;
</head>

<body>
  <?php 
    include 'nav.php'; 
    include 'connection.php';
  ?>
  
  <div class="container col-md-offset-1 col-md-10 admin-page ">
    <h2 class="text-center"> Admin Page </h2>
    <a href="portofolio.php">Go to portofolio <span class="glyphicon glyphicon-chevron-right"></span></a>
    <hr class="col-md-12">

    <div class="admin-page-table col-md-offset-1 col-md-8">
        <table class="col-md-offset-2 col-md-4 table table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>Full Name</th>
              <th>Student ID Number</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $no = 1;
              $sql = "SELECT * FROM user";
              $result = mysql_query($sql);
              if($result === FALSE) { 
                  die(mysql_error());
              }

              while ($row = mysql_fetch_array($result)) {
                echo '<tr>
                        <td>'.$no.'</td>
                        <td><a href ="myprofile.php?id='.$row["username"].'">'.$row["username"].'</a></td>
                        <td>'.$row["fullname"].'</td>
                        <td>'.$row["nim"].'</td>           
                      </tr>';
                $no = $no + 1;
              }
            ?>
          </tbody>
        </table>
      </div>

    <hr class="col-md-12">
  </div>


   <?php include 'footer.php' ?>
</body>

</html>
