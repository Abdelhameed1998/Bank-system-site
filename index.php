<?php
    
     $Name =$_POST['username1'];
    $Email =$_POST['email'];
    $Password = $_POST['password'];
  $con = mysqli_connect('localhost','root','');
    
    if(!$con)
    {
    echo 'not connected to server';
    }
    if(!mysqli_select_db($con,'bankusers'))
    {
    echo 'Databse Not Selected';
    }
   
    
    $sql = "INSERT INTO register (username,email,password) values('$Name','$Email','$Password')";
    
    if(!mysqli_query($con,$sql))
    {
    echo 'Not Inserted';
      
    }
    else
    {

    header("location:cong.html");
    
    }

    header("refresh:2; url=about.html");
    ?> 