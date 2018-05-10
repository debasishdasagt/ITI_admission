<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ITI Admission 2018 - 19</title>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        
        <script type="text/javascript">
                var wheight,wwidth;
                $(document).ready(function()
                {    wwidth=$(document).width();

                    wheight=$(document).height();
                });



                $(document).ready(function()
                {
                   $('#maincontainer').css("height",Math.round(wheight*0.82)+"px");
                   $('#maincontainer').css("width",Math.round(wwidth*0.7)+"px");
                   $('#maincontainer').css("margin-left","-"+Math.round((wwidth*0.7)/2)+"px");
                   $('#maincontainer').css("margin-top","-"+Math.round((wheight*0.75)/2)+"px");
                });

</script>
    </head>
    <body style=" margin: 0px" class="bdy">
    <center>
        <div id="head_r">
            
            <table width="70%" border="0">
                <tr>
                    <td valign="bottom"><img src="images/sakhsharata_logo.jpg" class="logo"></td>
                    <td valign="bottom"><img src="images/skill_india_logo.jpg" class="logo"></td>
                    <td valign="top" width="60%"><div style="width: 100%" class="header_txt">
                            <b>Industrial Training Institute</b><br>
                            <span style="font-size: 15px">Dept. of Industries & Commerce, Govt. of Tripura</span>
                            
                            
                            
                            
                        </div></td>
                        
                        <td width="20%" align="right" valign="middle" ><span class="header_txt">Admission 2018</span></td>
                </tr>
                
                
            </table>
            
            
            
            
        </div>
        <div class="m" id="maincontainer">
            <iframe style="width: 100%; height: 100%; border: 0px" name="form_frame" src="pages/start.php"></iframe>
            
            
            
            
        </div>
    </center>
    </body>
</html>
