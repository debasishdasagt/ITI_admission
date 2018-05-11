/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var namemsg="",dobmsg="",fnamemsg="",uidmsg="",captchamsg="",mobmsg="",emailmsg="",ma="";
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
    if(u!=="")
    {
    if(u.length!==12)
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
            uidmsg="";
            document.getElementById('uid_s').src="../images/tick_ajax.png";
            document.getElementById('uid_msg').style="display:none";
            }
            else if(data == "0")
            {
                uidmsg="Invalid Aadhar Number";
                setmsg('uid_msg',"Invalid Aadhar Number","r");
                document.getElementById('uid_s').src="../images/cross_ajax.png";
                document.getElementById('uid_s').style="display: inline";
            }});}}
    else
    {   uidmsg="Please Enter Aadhar Number";
        setmsg('uid_msg',"Please Enter Aadhar Number","r")
        document.getElementById('uid_s').src="../images/cross_ajax.png";
        document.getElementById('uid_s').style="display: inline";   }
}



function chk_captcha()
{
    var c=document.getElementById('captcha_txtbx').value
    
        if(c!="")
        {
        document.getElementById('captcha_s').src="../images/loading.gif";
        document.getElementById('captcha_s').style="display: inline";
        $.get("../handlers/captchacheck.php?captcha_code="+c,function(data,status)
        {
            if(data=="1")
            {
                captchamsg="";
            document.getElementById('captcha_s').src="../images/tick_ajax.png"
            }
            else if(data == "0")
            {
                captchamsg="Invalid Captcha";
                document.getElementById('captcha_s').src="../images/cross_ajax.png";
                document.getElementById('captcha_s').style="display: inline";
            }
        
        }
                
                
                );
    }
    else
    {
        captchamsg="Please Enter Captcha text as displayed in the Image";
        document.getElementById('captcha_s').src="../images/cross_ajax.png";
        document.getElementById('captcha_s').style="display: inline";
    }
        
    }


function chk_all()
{
    chk_uid();
    chk_captcha();
    
    if(document.getElementById('can_name').value=="")
    {namemsg="Please Enter Candidate Name";}
    else{namemsg="";}
    
    if(document.getElementById('can_dob').value=="")
    {dobmsg="Please Enter Candidate's Date of Birth";}
    else{dobmsg="";}
    
    if(document.getElementById('can_fname').value=="")
    {fnamemsg="Please Enter Candidate's Father Name";}
    else{fnamemsg="";}
    
    if(document.getElementById('can_mob').value=="")
    {mobmsg="Please Enter Candidate's Mobile Number";}
    else{mobmsg="";}
}

function msg_a(m)
{
    if(m!=="")
    return "\u2022 "+m+"\n";
    else
    return "";
}

function submitreg()
{
    chk_all();
    var c=msg_a(namemsg)+msg_a(dobmsg)+msg_a(fnamemsg)+msg_a(uidmsg)+msg_a(captchamsg)+msg_a(mobmsg)+msg_a(emailmsg);
    if(c!="")
    {
        alert(c);
    }
}

