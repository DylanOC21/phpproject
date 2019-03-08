
<!DOCTYPE html>
<html>
    <head>
        <style>
           p {
  border: 2px solid black;
  border-radius: 12px;
  width: 60%;
  font-size: 20px
      
} 
       .button {
  background-color: #317af2; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
  padding: 8px 15px;
}     

body{
   background-image: url("backpic.jpg")
}    

p {
    background-color: white
}
        h1{ text-align:center;
               color: white;
            }
            
            
             h2{ text-align:center;
               color: white;
            }
            
         
        </style>
    </head>
<body>
<center>
    <h1> O'Callaghan Consulting Services</h1>
    <h2> Purchase Receipt </h2>
    <hr />
    <br />
    <br />
    <p>
    
<!--    //Starting session to get the variable from the last page -->
<?php
session_start();

$totalValue = $_POST['txtTotal'];      
$fullNameValue = $_POST['txtName'];
$Phone = $_POST['txtNum'];
        
echo "<br></br>";
echo "The Name is:".$fullNameValue.".";
echo "<br></br>";
echo "Phone Number:".$Phone."";
echo "<br></br>";
echo "The Total Price is $".$totalValue.".";


?>
<br/>
<br/>
<br/>
<button class='button' onclick= 'window.location.href="ConsultancyServices.html"'>Back to O'Callaghan Consulting Services.</button>
<button class='button' onclick= 'window.location.href="Ebus1.php"'>To purchase another package click here!</button>

    </p>
</center>
 
</body>
</html
