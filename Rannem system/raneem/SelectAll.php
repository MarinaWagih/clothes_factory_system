<?php
header('Content-Type: text/html; charset=utf-8');

if (isset($_POST['Type'])) {

	$con=mysqli_connect("127.0.0.1","root","","raneem");
	mysqli_query($con,"SET NAMES utf8;");
    mysqli_query($con,"SET CHARACTER_SET utf8;");
    if ($_POST["Type"]=="0")//<-- 0 get all Traders
	 {
		$Sqlstatment="SELECT * FROM `trader` WHERE `Type`='0'";
		 
		$result=mysqli_query($con,$Sqlstatment);
       
	   while($row = mysqli_fetch_array($result)){
         echo '<option value="'.$row['Trader.ID'].'">'.$row['Name'].'</option>';
         //echo
      
			//print_r($result);
    }
   }   
    if ($_POST["Type"]=="1")//<-- 1 get all Material
	 {
		$Sqlstatment="SELECT * FROM `material`";
		 
		$result=mysqli_query($con,$Sqlstatment);
       
	   while($row = mysqli_fetch_array($result)){
         echo '<option value="'.$row['Material.ID'].','.$row['Price'].'">'.$row['Description'].'</option>';
         //echo
      
			//print_r($result);
    }  
}
    if ($_POST["Type"]=="2")//<-- 1 get all Customer
	 {
		$Sqlstatment="SELECT * FROM `customer`";
		 
		$result=mysqli_query($con,$Sqlstatment);
       
	   while($row = mysqli_fetch_array($result)){
         echo '<option value="'.$row['Customer.ID'].'">'.$row['Name'].'</option>';
         //echo
      
			//print_r($result);
        }
     }    
     if ($_POST["Type"]=="3")//<-- 1 get all Customer
	 {
		$Sqlstatment="SELECT * FROM `extra`";
		 
		$result=mysqli_query($con,$Sqlstatment);
       
	   while($row = mysqli_fetch_array($result)){
         echo '<option value="'.$row['Printing.ID'].','.$row['Cost'].'">'.$row['Description'].'</option>';
         //echo
      
			//print_r($result);
        } 
    } 
    if ($_POST["Type"]=="4")//<-- 0 get all Extra Traders
	 {
		qlstatment="SELECT * FROM `trader` WHERE `Type`='4'";
		 
		$result=mysqli_query($con,$Sqlstatment);
       
	   while($row = mysqli_fetch_array($result)){
         echo '<option value="'.$row['Trader.ID'].'">'.$row['Name'].'</option>';
         //echo
      
			//print_r($result);
    }
   }
   if ($_POST["Type"]=="5")//<-- 0 get all Extra
	 {
		$Sqlstatment="SELECT * FROM `extra`";
		 
		$result=mysqli_query($con,$Sqlstatment);
       
	   while($row = mysqli_fetch_array($result)){
         echo '<option value="'.$row['Printing.ID'].','.$row['Cost'].'">'.$row['Description'].'</option>';
         //echo
      
			//print_r($result);
    }
   }   
}
else
{

	echo "Not Working";
}
  mysqli_close($con);


?>