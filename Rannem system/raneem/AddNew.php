<?php
header('Content-Type: text/html; charset=utf-8');

if (isset($_POST['Type'])) {

	$con=mysqli_connect("127.0.0.1","root","","raneem");
	mysqli_query($con,"SET NAMES utf8;");
    mysqli_query($con,"SET CHARACTER_SET utf8;");    
	if ($_POST["Type"]=="0")//<-- 0 add new Trader
	 {
		$Sqlstatment="INSERT INTO `trader`( `Name`, `Phone`,`Adreess`, `instalment`, `Type`) 
		VALUES ('".$_POST["Name"] ."','".$_POST["Phone"]."','".$_POST["Address"]."','".$_POST["Instalment"]."','".$_POST["Type"]."')";
		 
		mysqli_query($con,$Sqlstatment);
        $Id="SELECT `Trader.ID` FROM `trader` WHERE `Phone`='".$_POST["Phone"]."'";
        $result= mysqli_query($con,$Id);
	   while($row = mysqli_fetch_array($result)){
         echo $row['Trader.ID'];
        mysqli_close($con);

			//print_r($result);
    }
  }
    if ($_POST["Type"]=="1") //<-- 1 add new Material
    {

	$Sqlstatment="INSERT INTO `material`(`Description`, `Quantity`, `Price`) VALUES ('".$_POST["Des"]."','".$_POST["Quant"]."','".$_POST["Price"]."')";
		 
		mysqli_query($con,$Sqlstatment);
        $Id="SELECT `Material.ID` FROM `material` WHERE `Description`='".$_POST["Des"]."'";
        $result= mysqli_query($con,$Id);
	   while($row = mysqli_fetch_array($result)){
         echo $row['Material.ID'];
        mysqli_close($con);
    }

}
    if ($_POST["Type"]=="2")//<-- 2 add new customer
	 {
		$Sqlstatment="INSERT INTO `customer`( `Name`, `Phone`, `Address`) VALUES ('".$_POST["name"]."','".$_POST["Phone"]."','".$_POST["address"]."')";
		 
		mysqli_query($con,$Sqlstatment);
        $Id="SELECT `Customer.ID` FROM `customer` WHERE `Phone`='".$_POST["Phone"]."'";
        $result= mysqli_query($con,$Id);
	   while($row = mysqli_fetch_array($result)){
         echo $row['Customer.ID'];
        mysqli_close($con);

			//print_r($result);
    }
  }
    if ($_POST["Type"]=="3") //<-- 3 add new prodecut
    {

	$Sqlstatment="INSERT INTO `product`(`Description`, `Quantity`, `Cost-Price`, `Selling-price`) VALUES ('".$_POST["Des"]."','".$_POST["Quant"]."','"
		                                                                                               .$_POST["Cost_P"]."','".$_POST["Sell_P"]."')";
		 
		mysqli_query($con,$Sqlstatment);
		
       $Id="SELECT `Product.ID` FROM `product` WHERE `Description`='".$_POST["Des"]."'";
        $result= mysqli_query($con,$Id);
	   while($row = mysqli_fetch_array($result)){
         echo $row['Product.ID'];
        mysqli_close($con);
    }

       }
       if ($_POST["Type"]=="4")//<-- 4 add new Extra Trader
	 {
		$Sqlstatment="INSERT INTO `trader`( `Name`, `Phone`,`Adreess`, `instalment`, `Type`) 
		VALUES ('".$_POST["Name"] ."','".$_POST["Phone"]."','".$_POST["Address"]."','".$_POST["Instalment"]."','".$_POST["Type"]."')";
		 
		mysqli_query($con,$Sqlstatment);
        $Id="SELECT `Trader.ID` FROM `trader` WHERE `Phone`='".$_POST["Phone"]."'";
        $result= mysqli_query($con,$Id);
	   while($row = mysqli_fetch_array($result)){
         echo $row['Trader.ID'];
        mysqli_close($con);

			//print_r($result);
    }
  }
  if ($_POST["Type"]=="5") //<-- 5 add new Extra
  {
  	$Sqlstatment="INSERT INTO `extra`(`Description`, `Cost`) VALUES ('".$_POST["Name"] ."','".$_POST["Price"]."')";
		 
		mysqli_query($con,$Sqlstatment);
        $Id="SELECT `Printing.ID` FROM `extra` WHERE`Description`='".$_POST["Name"]."'";
        $result= mysqli_query($con,$Id);
	   while($row = mysqli_fetch_array($result)){
         echo $row['Printing.ID'];
        mysqli_close($con);
  }
       
}
if ($_POST["Type"]=="6") //<-- 5 add new Matrial_Order
  {
  	$Sqlstatment="INSERT INTO `extra`(`Description`, `Cost`) VALUES ('".$_POST["Name"] ."','".$_POST["Price"]."')";
		 
		mysqli_query($con,$Sqlstatment);
        $Id="SELECT `Printing.ID` FROM `extra` WHERE`Description`='".$_POST["Name"]."'";
        $result= mysqli_query($con,$Id);
	   while($row = mysqli_fetch_array($result)){
         echo $row['Printing.ID'];
        mysqli_close($con);
  }
       
}
}
else
	{echo "Not set";}

?>