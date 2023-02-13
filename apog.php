<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://img.utdstc.com/icon/163/844/163844fed46d7b335d8a5eac8a94e0203b544ffb44f8934bd94506635e58d4c8:200" type="image/x-icon">
    <style>
      .instruction{color:#d41919}
      .bg-color {background-color: lightblue;}
    </style>
        <title>CD Store</title>
</head>
<body class="bg-color">
<?php
    $numOfCDBought = 100;
    $pricePerCD = 10;
    if($numOfCDBought >= 120){
        $totalAmount = $numOfCDBought * $pricePerCD;
        $discount = $totalAmount * 0.1;
        echo "Num of CDS Bought: $numOfCDBought <br> Discount: $discount <br> Total Amount: PHP " . number_format($totalAmount);
    } elseif ($numOfCDBought >= 50 && $numOfCDBought <= 119){
        $totalAmount = $numOfCDBought * $pricePerCD;
        $discount = $totalAmount * 0.05;
        echo "Num of CDS Bought: $numOfCDBought <br> Discount: $discount <br> Total Amount: PHP " . number_format($totalAmount);
    } elseif ($numOfCDBought >= 15 && $numOfCDBought <= 49){
        $totalAmount = $numOfCDBought * $pricePerCD;
        $discount = $totalAmount * 0.01;
        echo "Num of CDS Bought: $numOfCDBought <br> Discount: $discount <br> Total Amount: PHP " . number_format($totalAmount);
    } elseif ($numOfCDBought <= 14){
        $totalAmount = $numOfCDBought * $pricePerCD;
        echo "Num of CDS Bought: $numOfCDBought <br> Discount: 0 <br> Total Amount: PHP " . number_format($totalAmount);
    }

?>
   <center>
    <p class="instruction">If the Customer Bought 120 cd or More:</p><?php
  $cdBought = 120000;

    if($cdBought >=150){
        echo "<p><b>Congratulations!!</b>, You've reached the 10% Discount for the CD you bought, Thank you for your Purchase.</p>";
      } 
        elseif ($cdBought >=50){
        echo "<p>We at <i><b>Apog's Collection</b></i> Appreciate your Purchase that can be worth a discounted price for <strong>5%,</strong></p> Thank you for your Purchase.";    
    } 
        elseif ($cdBought >=15){
            echo "<p>Thank you for the Purchase at <i><b>Cd's Collection</b></i>, Here's a Special <b>1%</b> Discount for You</p> ";
        }
   else{
    echo "<p>Thank you For your Purchase, Dear Customer.</p> ";  
        } 
  ?> </center>
 
 <br>

<center>
  <p class="instruction">If the Customer Bought 50 cd or More:</p>
  <?php
    $cdBought = 75;

    if($cdBought >=150){
        echo "<p><b>Congratulations!!</b>, You've reached the 10% Discount for the CD you bought Thank you for your Purchase.</p>";
      } 
        elseif ($cdBought >=50){
        echo "<p>We at <i><b>Apog's Collection</b></i> Appreciate your Purchase that can be worth a discounted price for <strong>5%,</strong> Thank you for your Purchase.</p>";    
    } 
        elseif ($cdBought >=15){
            echo "<p>Thank you for the Purchase at <i><b>Cd's Collection</b></i>, Here's a Special <b>1%</b> Discount for You</p> ";
        }
   else{
    echo "<p>Thank you For your Purchase, Dear Customer.</p> ";  
        }
  ?> </center> 

<br>
  
<center>
    <p class="instruction">If the Customer Bought 15 cd or More:</p></p>
<?php
  $cdBought = 20;

    if($cdBought >=150){
        echo "<p><b>Congratulations!!</b>, You've reached the 10% Discount for the CD you bought, Thank you For your Purchase.</p>";
      } 
        elseif ($cdBought >=50){
        echo "<p>We at <i><b>Apog's Collection</b></i> Appreciate your Purchase that can be worth a discounted price for <strong>5%</strong> Thank you For your Purchase.</p>";    
    } 
        elseif ($cdBought >=15){
            echo "<p>Thank you for the Purchase at <i><b>Apog's Collection</b></i> Here's a Special <b>1%</b> Discount for you. Thank you For your Purchase.</p> ";
        }
   else{
    echo "<p>Thank you For your Purchase, <b>Dear Customer.</p> ";  
        } 
  ?> </center>

<br>

<center>
<p class="instruction">If the Customer Bought 14 cd or less:</p>
<?php
  $cdBought = 1;

    if($cdBought >=150){
        echo "<p><b>Congratulations!!</b>, You've reached the 10% Discount for the CD you bought, Thank you For your Purchase.</p>";
      } 
        elseif ($cdBought >=50){
        echo "<p>We at <i><b>Apog's Collection</b></i> Appreciate your Purchase that can be worth a discounted price for <strong>5%</strong> Thank you For your Purchase.</p>";    
    } 
        elseif ($cdBought >=15){
            echo "<p>Thank you for the Purchase at <i><b>Apog's Collection</b></i>, Here's a Special <b>1%</b> Discount for You Thank you For your Purchase.</p> ";
        }
   else{
    echo "<p>Thank you For your Purchase, <b>Dear Customer.</p> ";  
        } 
  ?> 
</center>

</body>
</html>