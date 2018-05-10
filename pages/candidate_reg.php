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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/jquery.datetimepicker.css">
        
        
        <script type="text/javascript" src="../js/jquery-latest.js"></script>
        <script type="text/javascript" src="../js/jquery.datetimepicker.full.js"></script>
        <script type="text/javascript" src="../js/validation.js"></script>
        <script type='text/javascript'>
        
        function refreshCaptcha(){
                var img = document.images['captchaimg'];
                img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
        </script>
        
    </head>
    <body>
    <center>
        <div id="progress" >
            
            <table border="0">
                <tr>
                    <td><div class="cur_status"><b>1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration</b></div></td>
                    <td><div class="pending_status"><b>2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Candidate Details</b></div></td>
                    <td><div class="pending_status"><b>3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload</b></div></td>
                    <td><div class="pending_status"><b>4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Review & Submit</b></div></td>
                </tr>
            </table>
        </div>
        
        
        
        <div id="form_bg">
            <form name="reg_form" id="reg_form">
                <table border="0" cellspacing="0" cellpadding="10">
                    <tr>
                        <td>Candidate Name</td>
                        <td><input type="text" id="can_name" name="can_name" class="txtbx" placeholder="Full Name"></td>
                        <td width="30"></td>
                        <td>Date of Birth</td> 
                        <td><input type="text" id="can_dob" name="can_dob" class="txtbx" placeholder="YYYY-MM-DD"></td>
                         <td width="30"></td>
                    </tr>
                    <tr>
                        <td>Father's Name</td>
                        <td><input type="text" id="can_fname" name="can_fname" class="txtbx" placeholder="Candidate's Father Name" ></td>
                         <td width="30"></td>
                        <td>UID Number</td> 
                        <td><input type="text" id="can_uid" name="can_uid" class="txtbx" placeholder="Aadhar Number" onchange="chk_uid()"><span id="uid_msg" class="ajax_msg"></span></td>
                    
                         <td width="30"></td>
                    </tr>
                    
                    <tr>
                        <td>Mobile Number</td>
                        <td><input type="text" id="can_fname" name="can_fname" class="txtbx" placeholder="Primary Mobile number"></td>
                         <td width="30"></td>
                        <td>E-Mail Address</td> 
                        <td><input type="text" id="can_uid" name="can_uid" class="txtbx" placeholder="Candidate's E-Mail "></td>
                         <td width="30"></td>
                    </tr>
                    
                </table>
                
            </form>
        </div>
        
        <div id="btn_bar">
            
            <div style="float:right;margin-right: 70px">
                <table border='0' cellpadding="5"><tr>
                        <td valign="middle" style="background-color: #f2f0f0; border-radius: 5px"><table border="0"><tr>
                                    <td><img src="../phpcaptcha/captcha.php?rand=<?php echo rand();?>" id='captchaimg' style="height: 30px; margin-right: 10px; margin-left: 30px"></td>
                                    <td><a href='javascript: refreshCaptcha();'><img src="../images/refreshicon.png" border="0" height="20" width="20" style="margin-right: 20px"></a> </td>
                                <td><input type="text" class="txtbx" placeholder="Captcha Here" style="width: 100px"></td>
                                <td width="30"><img class="ajax_s" src="../images/loading.gif"></td></tr></table></td>
                        <td><div class='btn' style="margin-left: 50px">Submit</div></td></tr></table>
            </div>
        
    </center>
    </body>
    
    <script type="text/javascript">
    $('#can_dob').datetimepicker({
    dayOfWeekStart : 1,
    lang:'en',
    step:5,
    format: 'Y-m-d',
    timepicker: false,
    closeOnDateSelect: true,
    startDate:'1990/1/1'
    });
    
   
        </script>
</html>
