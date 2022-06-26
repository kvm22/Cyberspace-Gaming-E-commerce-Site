<?php
$insert = false;
if(isset($_POST['fname'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $fname = $_POST['fname'];
    $nname = $_POST['nname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $type = $_POST['type'];
    $pay = $_POST['pay'];
    $cardno = $_POST['cardno'];
    $cardcvc = $_POST['cardcvc'];

    // $sql = "INSERT INTO `trip2`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    $sql = "INSERT INTO `payment`.`details` (`fname`, `nname`, `email`, `dob`, `type`, `pay`, `cardno`, `cardcvc`, `date`) VALUES ('$fname', '$nname', '$email', '$dob', '$type', '$pay', '$cardno', '$cardcvc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
       






    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn" >place order</button> 
        </form>
    </div>
    <script src="index.js" ></script>
    
</body>
</html> -->

<!--  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="paymentform.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="index.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
<form action="index.php" method="post">
            <h4>Account</h4>
<div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name"  name="fname" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
<div class="input-box">
                    <input type="text" placeholder="Nick Name" name="nname" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <input type="email" placeholder="Email Adress" name="email" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <h4>Date of Birth</h4>
<input type="date" placeholder="For Ex: DD/MM/YYYY" name="dob" class="dob">

                </div>
<div class="input-box">
                    <h4>
Type</h4>
<input type="radio" id="b1" name="type" checked class="radio" value="Buy">
                    <label for="b1">Buy</label>
                    <input type="radio" id="b2" name="type" value="Rent" class="radio">
                    <label for="b2">Rent</label>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <h4>
Payment Details</h4>
<input type="radio" name="pay" id="bc1" checked class="radio" value="Credit Card">
                    <label for="bc1"><span><i class="fa fa-cc-visa"></i> Credit Card</span></label>
                    <input type="radio" name="pay" id="bc2" class="radio" value="Paypal">
                    <label for="bc2"><span><i class="fa fa-cc-paypal"></i> Paypal</span></label>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <input type="text" name="cardno" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
</div>
<div class="input-group">
                <div class="input-box">
                    <input type="text" name="cardcvc" placeholder="Card CVC" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>

</div>
<div class="input-group">
                <div class="input-box">
                    <button type="submit">PLACE ORDER</button>
                </div>
<?php
if($insert == true){
   
echo "<script> window.alert('ORDER PLACED')</script>";
} ?>

</div>
</form>
</div>
</body>
</html>
