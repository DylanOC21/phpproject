<!-- Creating a session variable and assigning it to txtTotal -->
<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;
$_SESSION['txtNum'] = $Phone;

/*
 * allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        <style>
            
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

 h1{ 
  text-align: center;
  color: white;
 }
 
 
 body {
     background-image: url("backpic.jpg")
 }
 
  h2{ 
      text-align:center;
               color: white;
            }
        </style>
    </head>
    <body>
    
        <h1> O'Callaghan Consulting Services </h1>
        <h2> Checkout </h2>
        <hr/>
        
        <div class ="form">
            <INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);">
            <form Name="details" method="post" action="ebus3.php">
                <center>
                    <table  cellspacing="10">
                        <tr>
       
                            <td><b></b></td>
                            <td><b>Enter your Details </b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><input type ="number" id="txtNum" name ="txtNum" value="" maxlength='10' required/></td>
                        </tr>
                        
                        <tr>
                            <td>PIN</td>
                            <td><input type ="password" id="txtPassword" name="txtPassword" value="" maxlength="4"required/></td>
                            
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value ="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
               
                </div>    
           
                <center>
                <input type="submit" name="btnContinue" id="btnContinue" onClick="" value="Continue" />
                </center>
        
        </body>
</html>

