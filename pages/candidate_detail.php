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
        <script type="text/javascript" src="../js/dataProcessor.js"></script>
        <script type='text/javascript'>
        
     /*   function refreshCaptcha(){
                var img = document.images['captchaimg'];
                img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
        
        
        $(document).ready(function () {
  //called when key is pressed in textbox
  $("#can_mob").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        
               return false;
    }
   });
}); */
        </script>
        
    </head>
    <body>
    <center>
        <div id="progress" >
            
            <table border="0">
                <tr>
                    <td><div class="done_status"><b>1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registration</b></div></td>
                    <td><div class="cur_status"><b>2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Candidate Details</b></div></td>
                    <td><div class="pending_status"><b>3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload</b></div></td>
                    <td><div class="pending_status"><b>4 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Review & Submit</b></div></td>
                </tr>
            </table>
        </div>
        
        
        
        <div id="form_bg">
            <form name="reg_form" id="reg_form">
                <table border="0" cellspacing="0" cellpadding="3">
                    <tr>
                        <td>Mother's Name</td>
                        <td><input type="text" id="can_name" name="can_name" class="txtbx" placeholder="Candidate's Mother Name"></td>
                        <td width="30"><img id="cnam_s" style="display: none" class="ajax_s"></td>
                        <td rowspan="3" width="50"></td>
                        <td>Nationality</td> 
                        <td><input type="text" id="can_dob" name="can_dob" class="txtbx" placeholder="Candidate's Nationality"></td>
                         <td width="30"><img id="dob_s" style="display: none" class="ajax_s"></td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td align="center" style="border-radius: 3px 0px 0px 3px; background-color: #6192d4">
                            <input type="radio" name='cate' id='cate' value="gen"> <label for="gen">GEN</label>
                            <input type="radio" name='cate' id='cate' value="sc"> <label for="sc">SC</label>
                            <input type="radio" name='cate' id='cate' value="st"> <label for="st">ST</label>
                            
                        </td>
                        <td colspan="4" align="center" style="border-radius: 0px 3px 3px 0px; background-color: #6192d4">
                    <input type="checkbox" id='ph' name="ph"><lable for="ph">PH (40% & Above)</lable>
                            
                            <input type="checkbox" id='ex' name="ex"><lable for="ex">Ex-Serviceman</lable>
                            
                            
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td valign="top" style="padding-top: 10px">Address of Communication<br><span style="font-size: 12px"><i>(Attach scanned copy of Address<br> Proof [PRTC / VOTER ID / AADHAR])</span></i></td>
                        <td valign="top"><textarea class="txtbx" style="height: 100px"></textarea></td>
                         <td width="30"><img id="mob_s" style="display: none" class="ajax_s"></td>
                        <td valign="top" style="padding-top: 10px">PIN Code</td> 
                        <td valign="top"><input type="text" id="can_email" name="can_email" class="txtbx" placeholder="Area PIN Code "></td>
                         <td width="30"><img id="email_s" style="display: none" class="ajax_s"></td>
                    </tr>
                    
                    <tr>
                        <td>Marks Obtained in Madhyamik<br><span style="font-size: 12px"><i>(Attach scanned copy of Marksheet and<br> Pass Certificate)</span></td>
                        <td align="center" style="border-radius: 3px 0px 0px 3px; background-color: #6192d4; font-size: 12px" colspan="3">
                            <table border="0" cellpadding="2">
                                <tr>
                                    <td align="center" width="70">Marks Obtained</td>
                                    <td align="center" width="70">Total Marks</td>
                                    <td align="center" width="70">Percentage of Marks (in %)</td>
                                </tr>
                                <tr>
                                    <td align="center"><input type="text" style="width: 60px; margin-top: 3px" class="txtbx"></td>
                                    <td align="center"><input type="text" style="width: 60px; margin-top: 3px" class="txtbx"></td>
                                    <td align="center"><input type="text" style="width: 60px; margin-top: 3px" class="txtbx"></td>
                                </tr>
                            </table>
                            
                        </td>
                        <td colspan="2" align="center" style="border-radius: 0px 3px 3px 0px; background-color: #6192d4">
                            <table border="0">
                                <tr>
                                    <td align="left">
                                        <span style="font-size: 12px"><b>Whether Mathematics & Science were there<br> in your Madhyamik examination</b></span>
                                    </td>
                                       
                                </tr>
                                <tr>
                                    <td align="right">
                                        <input type="radio" name="MathSc" id="MathSc" value="Y">Yes
                                        <input type="radio" name="MathSc" id="MathSc" value="N">No
                                    </td>
                                       
                                </tr>
                                
                            </table>
                            
                            
                            
                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td>Name of Board</td>
                        <td><input type="text" id="can_name" name="can_name" class="txtbx" placeholder="Madhyamik Board"></td>
                        <td width="30"><img id="cnam_s" style="display: none" class="ajax_s"></td>
                        <td rowspan="2" width="50"></td>
                        <td>Year of Passing</td> 
                        <td><input type="text" id="can_dob" name="can_dob" class="txtbx" placeholder="Passing Year of Madhyamik"></td>
                         <td width="30"><img id="dob_s" style="display: none" class="ajax_s"></td>
                    </tr>
                    
                    <tr>
                        <td>Whether undergone training<br> under any ITI</td>
                        <td><input type="radio" name="MathSc" id="MathSc" value="Y">Yes
                                        <input type="radio" name="MathSc" id="MathSc" value="N">No</td>
                        <td width="30"><img id="cnam_s" style="display: none" class="ajax_s"></td>
                        
                        <td></td> 
                        <td></td>
                         <td width="30"><img id="dob_s" style="display: none" class="ajax_s"></td>
                    </tr>
                    
                    
                </table>
                <br>
                
            </form>
        </div>
        <div style="width:90%;color:red;font-family: 'calibri'" align="left"><i><b>Note:</b> All fields are Mandatory</i></div>
        <div id="btn_bar">
            
            <div style="float:right;margin-right: 70px;" >
                <table border='0' cellpadding="5"><tr>
                        <!-- <td valign="middle" style="background-color: #f2f0f0; border-radius: 5px"><table border="0"><tr>
                                    <td><img src="../phpcaptcha/captcha.php?rand=<?php echo rand();?>" id='captchaimg' style="height: 30px; margin-right: 10px; margin-left: 30px"></td>
                                    <td><a href='javascript: refreshCaptcha();'><img src="../images/refreshicon.png" border="0" height="20" width="20" style="margin-right: 20px"></a> </td>
                                <td><input type="text" id="captcha_txtbx" class="txtbx" placeholder="Captcha Here" style="width: 100px" onchange="chk_captcha()"></td>
                                <td width="30"><img class="ajax_s" src="../images/loading.gif" style="display: none" id="captcha_s"></td></tr></table></td>-->
                                <td><div class='btn' style="margin-left: 50px" onclick="submitreg()" id="submit_btn">Save</div></td></tr></table>
            </div>
        
    </center>
    </body>
    
    <!--<script type="text/javascript">
    $('#can_dob').datetimepicker({
    dayOfWeekStart : 1,
    lang:'en',
    step:5,
    format: 'Y-m-d',
    timepicker: false,
    closeOnDateSelect: true,
    startDate:'1990/1/1'
    });
    
   
        </script> -->
</html>
