<?php
//$insert = false;
if(isset($_POST['name'])){
   //Set Connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // create a database connection
    $con = mysqli_connect($server, $username, $password);

    //check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    //echo "Success connecting to the db";
    // collect post variables
    $name =$_POST['name'];
    $gender =$_POST['gender'];
    $age =$_POST['age'];
    $email=$_POST['email'];
    $phone =$_POST['phone'];
    $desc =$_POST['desc'];
    
    $sql  = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;
    //execute the query
    if($con->query($sql) == true){
        echo "Successfully inserted";
       //$insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    //close the database connection
    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Stint+Ultra+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Bombay">
    <div class="container">
        <h1>Welcome to IIT Bombay US Trip form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <p>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>

        <form action="index.php" method="Post">
            <input type="name" name="name" id="name" placeholder="Enter your name" style="margin: 23px">
            <input type="age" name="age" id="age"  placeholder="Enter your age" style="margin: 23px">
            <input type="gender" name="gender" id="gender"  placeholder="Enter your gender" style="margin: 23px">
            <input type="email" name="email" id="email" placeholder="Enter your email" style="margin: 23px">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone num" style="margin: 23px">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other informations here" style="margin: 23px"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script</script>
   
        

</body>
</html>