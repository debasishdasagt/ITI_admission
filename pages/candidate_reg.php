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
    </head>
    <body>
    <center>
        <div id="progress" >
            
            <table border="0">
                <tr>
                    <td><div class="cur_status"><b>1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration</b></div></td>
                    <td><div class="pending_status"><b>2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Personal Details</b></div></td>
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
                        <td><input type="text" id="can_name" name="can_name" class="txtbx" placeholder="Full Name" style="margin-right: 30px"></td>
                        <td>Date of Birth</td> 
                        <td><input type="text" id="can_dob" name="can_dob" class="txtbx" placeholder="YYYY-MM-DD"></td>
                    </tr>
                    <tr>
                        <td>Father's Name</td>
                        <td><input type="text" id="can_fname" name="can_fname" class="txtbx" placeholder="Candidate's Father Name" style="margin-right: 30px"></td>
                        <td>UID Number</td> 
                        <td><input type="text" id="can_uid" name="can_uid" class="txtbx" placeholder="Aadhar Number"></td>
                    </tr>
                    
                    <tr>
                        <td>Mobile Number</td>
                        <td><input type="text" id="can_fname" name="can_fname" class="txtbx" placeholder="Primary Mobile number" style="margin-right: 30px"></td>
                        <td>E-Mail Address</td> 
                        <td><input type="text" id="can_uid" name="can_uid" class="txtbx" placeholder="Candidate's E-Mail "></td>
                    </tr>
                    
                </table>
                
            </form>
        </div>
        
        <div id="btn_bar">
            
            <div style="float:right;margin-right: 70px">
                <table border='0'><tr> <td><div class='btn'>Submit</div></td></tr></table>
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