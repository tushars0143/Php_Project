<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Main page link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 
<!-- CSS link  -->
    <link rel="stylesheet" href="css/cont.css">
    <style>
       label{width:200px;} 
       input[type=text]{width:300px;}
     </style>
    <title>Contact</title>
</head>
<body>
        <?php
        include "header.php";
        ?>


<div class="front">
    <div class="row">
        <div class="col-4">
        <img src="img/contact.webp" alt="">
        </div>
        <div class="col-8">
        <h1>Contact Us</h1>
        </div>
    </div>
</div>

<div class="bottom">   
<div class="last">
<form action="contactreg.php" method="POST">
           
      

            <div class="form-group">
                <label>Full Name :</label>  <input type="text" name="MyName">
            </div>
            
            <div class="form-group">
               <label> Email: </label> <input type="text" name="MyEmail">
            </div>
            
            <div class="form-group">
                <label>Phone Number:</label>  <input type="text" name="MyPhone">
            </div> 
             
            <div class="form-group">
               <label> Gender :</label> 
               <span>  <input type="radio" name="MyGender" > Male &nbsp;&nbsp; <input type="radio" name="MyGender" > Female &nbsp;&nbsp; 
               <input type="radio" name="MyGender" >  Other </span> 
            </div>

            <div class="form-group">
                <label>Address:</label> <input type="text" name="MyAddress">
            </div>
            
            <div class="form-group">
               <label> Message:</label> <textarea type="text" rows="3" cols="35" name="MyMessage"> </textarea>
             </div>
             
<button class="button-primary" type="submit" name="MySubmit">Submit</button>
    </form>
</div>
</div>

</body>
</html>


