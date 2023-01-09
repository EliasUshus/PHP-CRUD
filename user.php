<?php 
    include 'connect.php';
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        $sql="INSERT INTO crud (name,email,mobile,password)
        VALUES('$name', '$email', '$mobile', '$password')";
        $result=mysqli_query($con,$sql);
        if($result){
            // echo "Data inserted seccessfully";
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
        <div class="form-group">
            <label>Name</label>
            <input 
            type="text" 
            class="form-control" 
            placeholder="Enter your name"
            name="name"
            autocomplete="off">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input 
            type="email" 
            class="form-control" 
            placeholder="Enter your email"
            name="email"
            autocomplete="off">
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input 
            type="text" 
            class="form-control" 
            placeholder="Enter your mobile number"
            name="mobile"
            autocomplete="off">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input 
            type="text" 
            class="form-control" 
            placeholder="Enter your Password"
            name="password"
            autocomplete="off">
        </div>

        <button 
        type="submit" 
        class="btn btn-primary" 
        name="submit"
        >Submit</button>
    </form>
    </div>

  </body>
</html>