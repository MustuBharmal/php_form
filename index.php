<?php
$insert=false;
if (isset($_POST['name'])) {
    $server ="localhost";
    $username ="root";
    $password ="";

$con = mysqli_connect($server, $username,$password);

if(!$con)
    die("connection to this database failed due to". mysqli_connect_error());
    
    // echo("Success connecting to the db");
    $insert =true;

    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $year=$_POST['year'];
    $branch=$_POST['branch'];
    $preferableGame=$_POST['preferableGame'];
    $desc=$_POST['desc'];   
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `year`,`branch`, `preferableGame`, `other`, `dt`) VALUES ('$name',
    '$age', '$gender', '$email', '$phone','$year', '$branch', '$preferableGame', '$desc', current_timestamp());";
    // echo $sql;

    if($con->query($sql)== true){
        // echo "Successful inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPORTS Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./testStyleSheet.css">
    <!-- job done brother, you just need to change your css file name then it will work as you want -->
    <!-- okey  -->
    <!-- happy coding  -->
</head>
<body>

    <img class="bg" src="bg1.jfif" alt="Atmiya University">
    <div class= mg>
    <a href="#"> Home </a>
    <a href="#">About us</a>
    <a href="#">Contact us</a>
</div>
    <div class="container">
    <h1>Welcome to Atmiya University Sports Form</h1>
    <p>Enter your detail and submit the form to confirm your participation in the particular sports </p>

    <?php
    if ($insert==true) {
     echo "<p class='submitMsg'>Thanks for submitting your form.</p>";
    }
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <input type="text" name="year" id="year" placeholder="Enter your year">
            <input type="text" name="branch" id="branch" placeholder="Enter your branch">
            <input type="text" name="preferableGame" id="preferableGame" placeholder="Enter your preferable Game">
            <textarea name="desc" id="desc" cols="5" rows="4" 
            placeholder="Write your query, if any"></textarea> 
            <button type="submit" class ="btn">Submit</button>    
        </form>
        <p> NOTE:- This Form is not an Official form from the University. This is the work of a fellow student.</p>
        
    </div>
    <!-- <script src="index.js"></script> -->
</body>
</html> 