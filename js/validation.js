/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function setmsg(id,msg,c )
{
   if(msg=="")
   {
       document.getElementById(id).style="display:none";
   }
   else
   {
        document.getElementById(id).style="display:block";
   }
    
    if(c=="r")
    {
        document.getElementById(id).innerHTML=msg;
        document.getElementById(id).style="background-color: #cc1421"
    }
    
    else if(c=="g")
    {
        document.getElementById(id).innerHTML=msg;
        document.getElementById(id).style="background-color: #387f10"
    }
}
function chk_uid()
{
    var u=document.getElementById('can_uid').value
    if(u.length!=12)
    {
        setmsg('uid_msg',"Invalid Aadhar Number","r")
        document.getElementById('uid_s').src="../images/cross_ajax.png";
        document.getElementById('uid_s').style="display: inline";
    }
    else
    {
        setmsg('uid_msg',"","g")
        document.getElementById('uid_s').src="../images/loading.gif";
        document.getElementById('uid_s').style="display: inline";
        $.get("../handlers/checkuid.php?can_uid="+u,function(data,status)
        {
            if(data=="1")
            {
            document.getElementById('uid_s').src="../images/tick_ajax.png";
            document.getElementById('uid_msg').style="display:none";
            }
            else if(date == "0")
            {
                setmsg('uid_msg',"Invalid Aadhar Number","r")
                document.getElementById('uid_s').src="../images/cross_ajax.png";
                document.getElementById('uid_s').style="display: inline";
            }
        
        }
                
                
                );
        
    }
}



function chk_captcha()
{
    var c=document.getElementById('captcha_txtbx').value
    
        
        document.getElementById('captcha_s').src="../images/loading.gif";
        document.getElementById('captcha_s').style="display: inline";
        $.get("../handlers/captchacheck.php?captcha_code="+c,function(data,status)
        {
            if(data=="1")
            {
            document.getElementById('captcha_s').src="../images/tick_ajax.png"
            }
            else if(data == "0")
            {
                document.getElementById('captcha_s').src="../images/cross_ajax.png";
                document.getElementById('captcha_s').style="display: inline";
            }
        
        }
                
                
                );
        
    }
