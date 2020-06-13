
alert("hiiiii");
function form_val()
{alert("heyyy");

usename=document.regform.name;
var letters = /^[A-Za-z]+$/;
var uid_len = uid.value.length;
if(!usename.value.match(letters)||)
{
  //alert("Enter valid username");
  document.getElementById("use1").innerHTML="enter valid usename";
  document.getElementById("use1").style.color="red";
  return false;

}
mail=document.regform.email;
if( email.value == "" || email.value.indexOf( "@" ) == -1 )
 {
    alert("Enter valid email");
  return false;
 }
no=document.regform.mobile;
console.log(usename);
console.log(mail)
return true;
}
