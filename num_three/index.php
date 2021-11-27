<?php
// NAME: MUKISA ADRIAN
// REG NO. 2019/A/KCS/0012/G/F
// NO. THREE
$domain = "localhost";
$dbname = "fours";
$username = "root";
$password = "";

//create connection
$con = mysqli_connect($domain, $username, $password, $dbname);

//check connection
if(!$con){
    echo "Database Connection Failed!";
    die ();
}
// else{
//   echo "Database Connection Successful";
// }
//check if the calculate button has been clicked
if(isset($_POST["calculate"])){
    // define variables and set to empty values
  $firstName = $lastName = $assmrks = $testmrks = $exammrks =$assmrk = $testmrk = $exammrk =$totalmrk = $grade = "";
  //connecting form to variables created
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = mysqli_real_escape_string($con, $_POST["firstName"]);
    $lastName = mysqli_real_escape_string($con, $_POST["lastName"]);
    $assmrks = mysqli_real_escape_string($con, $_POST["assmrk"]);
    $testmrks = mysqli_real_escape_string($con, $_POST["testmark"]);
    $exammrks = mysqli_real_escape_string($con, $_POST["exammrk"]);
  }
  //starting calculations
  $assmrk = 0.1 * $assmrks;
  $testmrk = 0.2 * $testmrks;
  $exammrk = 0.7 * $exammrks;
  function totalmark($mrk1, $mrk2, $mrk3){
  $totalmarks = $mrk1 + $mrk2 + $mrk3;
  return $totalmarks;
  }
  $totalmrk = totalmark($assmrk, $testmrk, $exammrk);
  function comment($mrk){
  if($mrk<=54){
    $grades = "Poor";
    return $grades;
  }elseif($mrk<=59){
    $grades = "Fair";
    return $grades;
  }elseif($mrk<=64){
    $grades = "Fairly Good";
    return $grades;
  }elseif($mrk<=69){
    $grades = "Good";
    return $grades;
  }elseif($mrk<=74){
    $grades = "Very Good";
    return $grades;
  }elseif($mrk<=79){
    $grades = "Extremely Good";
    return $grades;
  }else{
    $grades = "Excellent";
    return $grades;
  }
}
$grade = comment($totalmrk);

  $result = mysqli_query($con, "INSERT INTO four (fname, lname, assmrk, testmrk, exammrk, totalmrk, grade) 
                        VALUES ('$firstName', '$lastName', '$assmrk', '$testmrk', '$exammrk', '$totalmrk', '$grade') ");

  
  echo "<style>
  #form #box #results{
    display: block;
  }
  #form #box{
    display: block;
  }
  </style>";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel = "icon" href="logo.png">
    <title>KABALE UNIVERSITY :: Final-Marks Calculator</title>
</head>
<body>
    
    <div id="form">
        <form method="POST" action="index.php">
        <header><img src ="logo.png" id = "logo"></header>
            <legend>Please fill out this form.</legend>
            <input name="firstName" type="text" id="input_field1" placeholder="FIRST NAME..." required><br>
            <input name="lastName" type="text" class="input_field" placeholder="LAST NAME..." required><br>
            <input name="assmrk" type="number" class="input_field" placeholder="ASSIGNMENT MARKS OUT OF 100..." required><br>
            <input name="testmark" type="number" id="input_field1" placeholder="TEST MARKS OUT OF 100... " required><br>
            <input name="exammrk" type="number" id="input_field1" required placeholder="EXAM MARKS OUT OF 100..."><br>
            <input name="calculate" type="submit" id="submit" value="CALCULATE">
            <input name="reset" type="reset" id="reset" value="RESET">
        </form>
        <div id="box">
            <div id="results" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                <p>NAME: <?php echo $firstName." ".$lastName?></p>
                <p>ASSIGNMENT MARK OUT OF 10: <?php echo $assmrk?></p>
                <p>TEST MARK OUT OF 20: <?php echo $testmrk?></p>
                <p>EXAM MARK OUT OF 70: <?php echo $exammrk?></p>
                <p>TOTAL MARK: <?php echo $totalmrk?></p>
                <p>GRADE: <?php echo $grade?></p>
            </div>
        </div>
    </div>
</body>
</html>