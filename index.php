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
                   $('#maincontainer').css("height",Math.round(wheight*0.8)+"px");
                   $('#maincontainer').css("width",Math.round(wwidth*0.7)+"px");
                   $('#maincontainer').css("margin-left","-"+Math.round((wwidth*0.7)/2)+"px");
                   $('#maincontainer').css("margin-top","-"+Math.round((wheight*0.7)/2)+"px");
                });

</script>
    </head>
    <body style="background-color: #61bcbc; margin: 0px">
    <center>
        <div id="head_r"></div>
        <div class="m" id="maincontainer">
            <iframe style="width: 100%; height: 100%; border: 0px" name="form_frame" src="pages/start.php"></iframe>
            
            
            
            
        </div>
    </center>
    </body>
</html>
