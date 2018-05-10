/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function setmsg(id,msg,c )
{
    if(msg!=""){
       msg="<br>"+msg 
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
    }
    else
    {
        setmsg('uid_msg',"","g")
        $.get("../handlers/checkuid.php?can_uid="+u,function(date,status)
        {
            setmsg('uid_msg',data+" Invalid Aadhar Number "+staus,"g")
        }
                
                
                );
        
    }
}