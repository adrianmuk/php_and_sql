<?php
// NAME: MUKISA ADRIAN
// REG NO. 2019/A/KCS/0012/G/F
// NO. FOUR
$domain = "localhost";
$dbname = "payment";
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
  $firstName = $lastName = $positions = $basicPay = $overtime = "";
  //connecting form to variables created
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = mysqli_real_escape_string($con, $_POST["firstName"]);
    $lastName = mysqli_real_escape_string($con, $_POST["lastName"]);
    $positions = mysqli_real_escape_string($con, $_POST["positions"]);
    $basicPay = mysqli_real_escape_string($con, $_POST["basicPay"]);
    $overtime = mysqli_real_escape_string($con, $_POST["overtime"]);
  }
  //starting calculations
  $overtimePay = "";
  if ($overtime < 10){
    $overtimePay = 0;
  }
  else{
    $overtimePay = $overtime * 30000;
  }
  $totalPay = "";
  if ($positions == "Manager"){
    $totalPay = $basicPay + $overtimePay;
  }
  elseif ($positions == "Marketing-Officer"){
    $totalPay = $basicPay + $overtimePay;
  }
  elseif ($positions == "Sales-Officer"){
    $totalPay = $basicPay + $overtimePay;
  }
  else{
    $totalPay = $basicPay + $overtimePay;
  }

  $HA = 0.08 * $totalPay;
  $TA = 0.05 * $totalPay;
  $MA = 0.06 * $totalPay;
  $grossPay = $totalPay + $HA + $TA + $MA;
  $NSSF = 0.15 * $totalPay;
  

  $PAYEE = "";
  if ($grossPay <= 200000){
    $PAYEE = 0;
  }
  elseif ($grossPay > 200000 && $grossPay <= 350000){
    $PAYEE = 0.1 * ($grossPay - 200000);
  }
  elseif ($grossPay > 350000 && $grossPay <= 500000){
    $PAYEE = 20000 + (0.2 * ($grossPay - 350000));
  }
  else{
    $PAYEE = 60500 + (0.3 * ($grossPay - 500000));
  }
  $netPay = $grossPay - ($NSSF + $PAYEE);
  $totalAllowances = $HA + $TA + $MA;
  $result = mysqli_query($con, "INSERT INTO payroll (firstName, lastName, positions, basicpay, overtime, 
  overtimePay, grossPay,  HA, TA, MA, NSSF, PAYEE, netPay, totalAllowances) VALUES ('$firstName', '$lastName', '$positions', 
  '$basicPay', '$overtime', '$overtimePay', '$grossPay', '$HA', '$TA', '$MA', '$NSSF', '$PAYEE', '$netPay', '$totalAllowances') ");

  
  echo "<style>
  #forms #box #results{
    display: block;
  }
  #forms #box{
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
    <link rel="icon"href="mukwano-logo.jpg">
    <title>MUKWANO INDUSTRIES::Payment</title>
</head>
<body>
    
    <div id="forms">
        <form method="POST" action="index.php">
        <header><img src ="muk-logo.jpg" id = "logo"></header>
            <legend>Please fill out this form.</legend>
            <input name="firstName" type="text" id="input1" placeholder="FIRST NAME..." required><br>
            <input name="lastName" type="text" class="input" placeholder="LAST NAME..." required><br>
            <select name="positions" class="input" required>
                <option value="Choose one...">Choose one...</option>
                <option value="Manager">Manager</option>
                <option value="Marketing-Officer">Marketing Officer</option>
                <option value="Sales-Officer">Sales Officer</option>
                <option value="Other">Others</option>
            </select><br>
            <label>BASIC PAY</label><br>
            <input name="basicPay" type="number" class="input" min="300000" placeholder="300000" required><br>
            <input name="overtime" type="number" id="input1" required placeholder="Enter overtime hours worked.."><br>
            <input name="calculate" type="submit" id="submit" value="CALCULATE">
            <input name="reset" type="reset" id="reset" value="RESET">
        </form>
        <div id="box">
            <div id="results" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                <p>NAME: <?php echo $firstName." ".$lastName?></p>
                <p>POSITION: <?php echo $positions?></p>
                <p>BASIC PAY: shs.<?php echo $basicPay?></p>
                <p>OVERTIME HOURS: <?php echo $overtime?></p>
                <p>OVERTIME PAY: shs.<?php echo $overtimePay?></p>
                <p>HOUSING ALLOWANCE: shs.<?php echo $HA?></p>
                <p>TRANSPORT ALLOWANCE: shs.<?php echo $TA?></p>
                <p>MEDICAL ALLOWANCE: shs.<?php echo $MA?></p>
                <p>NSSF: shs.<?php echo $NSSF?></p>
                <p>PAYEE: shs.<?php echo $PAYEE?></p>
                <p>GROSS PAY: shs.<?php echo $grossPay ?></p>
                <p>TOTAL ALLOWANCES: shs.<?php echo $totalAllowances ?></p>
                <p>NET PAY: shs.<?php echo $netPay ?></p>        
            </div>
        </div>
    </div>
</body>
</html>