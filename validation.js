/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/javascript.js to edit this template
 */
function isEmpty(value,obj){
    if(value.length==0){
        obj.innerHTML="Cannot Be Blank.";
        return false;
    }
    else if(value.length<3){
        obj.innerHTML="It is Too Short.";
        return false;
    }
    else{
        obj.innerHTML="";
        return true;
    }
}


function validateEmail(email,ob){
    len = email.length;
    x = email.indexOf("@");
    y = email.indexOf(".");
    last = len-1-y;
    if(x>0 && (y-x-1)>0 && last>1 && last<=4){
        ob.innerHTML="";
        return true;
    }
    else{
        ob.innerHTML="Invalid Email Id.";
        return false;
    }
    
}


function validatePassword(pass,ob){
    if(pass.length<8){
        ob.innerHTML="Password must contain 8 Characters.";
        return false;
    }
    else if(pass.search(/[0-9]/)==-1){
        ob.innerHTML="Atleast 1 Number must be entered.";
        return false; 
    }
    else if(pass.search(/[a-z]/)==-1){
        ob.innerHTML="Atleast 1 Lower case alphabet must be entered.";
        return false; 
    }
    else if(pass.search(/[A-Z]/)==-1){
        ob.innerHTML="Atleast 1 Upper case alphabet must be entered.";
        return false; 
    }
    else if(pass.search(/[!\@\#\$\%\^\&\(\)\_\+\-\.\;\:\*]/)==-1){
        ob.innerHTML="Atleast 1 Symbol must be entered.";
        return false; 
    }
    else{
        ob.innerHTML="";
        return true;
    }     
}


function comparePassword(pass1,pass2,obj){
    if(pass1==pass2){
        obj.innerHTML="";
        return true;
    }
    else{
        obj.innerHTML="Password Does not Match.";
        return false;
    }
}


function validateNumber(number,ob){
    number=parseInt(number);
    if(number>=6000000000 && number<=9999999999){
        ob.innerHTML="";
        return true;
    }
    else{
        ob.innerHTML="Invalid Mobile Number.";
        return false;
    }
}


