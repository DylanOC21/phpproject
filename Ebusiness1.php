<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
        
        <style> 
           * {
           box-sizing: border-box;
           }
            
            h1{ text-align:center;
               color: white;
            }
            
            body { background-image: url("backpic.jpg");
           }
            
            h2{ text-align:center;
               color: white;
            }
        
          .pick {       
         width: 30%;
         padding: 1px;
         float: left;
         margin-left: 150px;
         margin-top: 120px;
         border: 2px solid white;
         background-color: white;
         border-radius: 10px
         
         
       }

             .summary {        
         width: 30%;
         padding: 1px;
         float:right; 
         margin-top: 100px;
         border: 2px solid white;
         margin-right: 150px;
         background-color: white;
         border-radius: 10px
         
       }
      
       .row:after {
       content: "";
       display: table;
      clear: both;
      }
      
      
      td {
          font-size: 18px
      }
      

        </style>
            
    </head>
        <body>
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
          
                
                <h1> O'Callaghan Consulting Services</h1>
        <h2>Price Calculation</h2>   
        
        <hr/>
        <INPUT TYPE="button" VALUE="Back" onClick="history.go(-1);">
          <div class ="row">
              
            <div class ="pick">
             
        
            <table cellspacing="10">
            
                <tr>
                    <td><b>Select A Consulting Service</b></td> 
                </tr>
                <tr>
                    <td>Blockchain</td>
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                </tr>
                <tr>
                    <td>Autonomous Things</td>
                    <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Immersive Experience</td>
                    <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                </tr>
            
               <tr>
                    <td><input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/></td>
                    <td><input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/></td>
                    <td><input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/></td>
            </tr>
            </table>
            </div>
  
            
     <br />
             
           <div class ="summary">
                 <table cellspacing="10">
                   
            <tr>
                    <td><b></b></td>
                    <td><b>Summary</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
               
        
      
              </div>
              
        </div> 
            </div>
            
             
        
        
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var CocaCola = parseFloat(document.getElementById('Blockchain').value);
                    var Sprite = parseFloat(document.getElementById('AutonomousThings').value);
                    var Fanta = parseFloat(document.getElementById('ImmersiveExperience').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = CocaCola;
                        subAmount = CocaCola;
                        calculation(subAmount);
                        
                    }
                   else if (document.getElementById('AutonomousThings').checked) {
                        document.intCalc.txtSubTot.value = Sprite;
                        subAmount = Sprite;
                        calculation(subAmount);
                        
                    }
                    else if (document.getElementById('ImmersiveExperience').checked) {
                        document.intCalc.txtSubTot.value = Fanta;
                        subAmount = Fanta;
                        calculation(subAmount);
                    }
                } 
                
                //function for calculationg the values//
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);    
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting thrm intp thr correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
                
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
            </script>
    </body>
    </html>

