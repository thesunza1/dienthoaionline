var form1 = document.forms[1];
var form2 = document.forms[2];

//sign up form 
var uname = form1['uname'];
var pass = form1['pass'];
var u_name = form1['u_name'];
var phone = form1['phone'];
var address = form1['address'];


var reuname = document.getElementsByName('reuname').item(0);
var repass = document.getElementsByName('repass').item(0);
var rename = document.getElementsByName('rename').item(0);
var rephone = document.getElementsByName('rephone').item(0);
var readdress = document.getElementsByName('readdress').item(0);
//login form 
var u_login = form2['username_login'];
var p_login = form2['password_login'];


console.log(uname);
console.log(pass);
console.log(u_name);
console.log(phone);
console.log(address);


function checkForm(){
  

    if(uname.value.trim() ==""){
        reuname.innerHTML="no username";
        return false;
    }
    else{
        reuname.innerHTML=".";

    }
    if(pass.value.trim() ==""){
        repass.innerHTML="no password";
        return false;
    }
    else{
        repass.innerHTML=".";

    }
    if(u_name.value.trim() ==""){
        rename.innerHTML="no name";
        return false;
    }
    else{
        rename.innerHTML=".";

    }
    if(phone.value.trim() =="" || phone.value == null){
        rephone.innerHTML="no phone";
        return false;
    }
    else{
        rephone.innerHTML=".";

    }
    if(address.value.trim() ==""|| phone.value == null){
        readdress.innerHTML="no address";
        return false;
    }
    else{
        readdress.innerHTML=".";
    }
}

function checkForm2(){
    if(u_login.value.trim() =="") {
        u_login.placeholder =" error  username";
        return false;
    }

    if(p_login.value.trim()== ""){
        p_login.placeholder ="error password";
        return false;
    }
   
}