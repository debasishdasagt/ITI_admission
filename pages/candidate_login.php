<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel='stylesheet' href='../css/style.css'>
        <script type="text/javascript" src="../js/jquery-latest.js"></script>
        <script type="text/javascript">
            function checklogin()
            {
                document.getElementById('login_btn').innerHTML="<img src='../images/loading2.gif' width='20' height='20' style='margin-top: 5px'>";
               document.getElementById('login_btn').disabled=true;
                $.post("../handlers/canlogin.php",{'reg':document.getElementById('reg').value,'pass':document.getElementById('pass').value},
                function(data,status)
                {
                   if(data=='1')
                   {
                       document.location="candidate_detail.php";
                   }
                   else if(data=='0')
                   {
                       alert('Wrong Registration Number or Login Password \n\n Please Retry');
                       document.getElementById('login_btn').innerHTML="Login";
                       document.getElementById('login_btn').disabled=false;
                   }
                   else
                   {
                       alert(data);
                       document.getElementById('login_btn').innerHTML="Login";
                       document.getElementById('login_btn').disabled=false;
                   }
                }
        
                )
            }
            </script>
        
        
    </head>
    <body>
    <center>
        
        <br><br><br><br><br>
        <div class='login_box'>
            <span style="font-size: 24px"><b>Candidate Login</b></span>
            <br><br>
            
            <table border='0' cellspacing='0' cellpadding='5' width='300'>
                <tr>
                    <td align='left'>
                        <span style="opacity: 0.5; font-size: 12px" >Candidate's Registration Number</span><br>
                        <input type="text" class='login_txtbx' placeholder="Reistration Number" style="background-image: url('../images/user.png')" id="reg">
                    </td>
                </tr><tr>
                    <td align='left'>
                        <span style="opacity: 0.5 ; font-size: 12px">Login Password</span><br>
                        <input type="password" class='login_txtbx' placeholder="Password" style="background-image: url('../images/password.png')" id="pass">
                    </td>
                    
                </tr>
                <tr>
                    <td align='center'>
                        
                        <div class='login_btn' onclick="checklogin()" id="login_btn">Login</div>
                    </td>
                    
                </tr>
                <tr>
                    <td align='left'>
                        
                        <a href="candidate_reg.php" target="_self">New Candidate Registration</a>
                        <br>
                        Reset Password
                    </td>
                    
                </tr>
            </table>
        </div>
        
    </center>
    </body>
</html>
