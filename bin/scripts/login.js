
function login(a)
{
    if(a==1)
    {
        document.getElementById("loginform").style.display="none";
        document.getElementById("registerform").style.display="block";   
    } 
    else
    {
        document.getElementById("loginform").style.display="block";
        document.getElementById("registerform").style.display="none";
    }
}