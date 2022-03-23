<?php
    // echo '<script> alert("before connection!")</script>';
    $con=mysqli_connect("localhost","root"," ","gym")
    // echo '<script> alert("connection!")</script>';
    or die(mysqli_error($con));
    
    Session_start();

    // include "connection.php";
    $MyName = $MyEmail= $MyPhone = $MyGender = $MyAddress = $MyMessage  = " ";
    if (isset($_Post['MySubmit']))
    {
        // echo '<script> alert("Your Details has been sent || Soon you will get Call from us || Thanks !!")</script>';

      $MyName = $_POST['name'];
      $MyEmail = $_POST['email'];
      $MyPhone = $_POST['phone'];
      $MyGender = $_POST['gender'];
      $MyAddress = $_POST['address'];
      $MyMessage = $_POST['message'];
      $sq ="insert into gymreg(name, email, phone, gender ,address, message)value('$MyName','$MyEmail', $MyPhone,'$MyGender', '$MyAddress','$MyMessage')";
      mysqli_query($con,$sq);
      echo '<script> alert("Your Details has been sent || Soon you will get Call from us || Thanks !!")</script>';
      header ("refresh:0; url=gym.php");
    }

?>