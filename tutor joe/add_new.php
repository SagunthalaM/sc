<?php
include "db_conn.php";

if(isset($_POST['submit']))
{
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  $sql="INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES ('null','$first_name','$last_name','$email','$gender')";
  $result = mysqli_query($conn,$sql);
  if($result){
    header("Location: index.php?msg=New record created succesfully");
  }else{
    echo "failed: ".mysqli_error($conn);
  }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Application</title>
    <!-- Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573">
  PHP Complete CRUD Application
</nav>    

<div class="container">
  <div class="text-center mb-4">
    <h1>Add New User</h1>
    <p class="text-muted">Complete the form below to add a new user</p>
  </div>

  <div class="container d-flex justify-content-center">
    <form action="" method="post" style="width:50vw;min-width:300px;">
    <div class="row mb-3">
      <div class="col">
        <label class="form-label" for="">
          First Name:
        </label>
        <input type="text" class="form-control" name="first_name" placeholder="albert">
      </div>
      <div class="col">
        <label class="form-label" for="">
          Last Name:
        </label>
        <input type="text" class="form-control" name="last_name" placeholder="Einstein">
      </div>
    </div>
   <div class="mb-3">
   <label class="form-label" for="">
         Email:
        </label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
     
   </div>
  <div class="form-group mb-3">
    <label for="">Gender</label>&nbsp;
    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
    <label for="male" class="form-input-label" >Male</label>&nbsp;
  
    <input type="radio" class="form-check-input" name="gender" id="Female" value="Female">
    <label for="Female" class="form-input-label" >Female</label>
    
  </div>
  
  <div>
    <button type="submit" class="btn btn-success" name="submit">
     Save
    </button>
    <a href="index.php" class="btn btn-danger">Cancel</a>
  </div>
  
  </form>
  </div>
</div>



<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>