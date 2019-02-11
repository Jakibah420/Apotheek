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
        document.getElementById("errform").style.display="none";
        document.getElementById("registerform").style.display="none";
    }
}    

function submit() 
{
    $('form').each(function() {
        $(this).find('input').keypress(function(e) {
            // Enter pressed?
            if(e.which == 10 || e.which == 13) {
                this.form.submit();
            }
        });


    });
};

var AllowedChars = []

function checkForm(form)
  {
    form.username.style.border="2px solid #bbb";
    form.password.style.border="2px solid #bbb";
    form.password2.style.border="2px solid #bbb";
    
    /*if(form.username.value == "") {
      document.getElementById("errform").style.display="block";
      document.getElementById("err1").style.display="block";document.getElementById("err2").style.display="none";document.getElementById("err3").style.display="none";document.getElementById("err4").style.display="none";document.getElementById("err5").style.display="none";document.getElementById("err6").style.display="none";document.getElementById("err7").style.display="none";document.getElementById("err8").style.display="none";document.getElementById("err9").style.display="none";document.getElementById("err10").style.display="none";
      document.getElementById("err1").style.color="red";
      
      form.username.style.border="2px solid rgb(184, 89, 89)";
      return false;
    }

    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      document.getElementById("errform").style.display="block";
      document.getElementById("err2").style.display="block";
      document.getElementById("err2").style.color="red";
      form.username.style.border="2px solid rgb(184, 89, 89)";
      return false;
    }*/

    re = /@./;
    if(!re.test(form.username.value)) {
      document.getElementById("errform").style.display="block";
      document.getElementById("err10").style.display="block";
      document.getElementById("err10").style.color="red";
      form.username.style.border="2px solid rgb(184, 89, 89)";
      return false;
    }

    if(form.password.value != "" && form.password.value == form.password2.value) {
      if(form.password.value.length < 6) {
        document.getElementById("errform").style.display="block";
        document.getElementById("err3").style.display="block";
        document.getElementById("err3").style.color="red";
        form.username.style.border="2px solid rgb(184, 89, 89)";
        return false;
      }
      if(form.username.lenght < 1){
        document.getElementById("errform").style.display="block";
        document.getElementById("err11").style.display="block";
        document.getElementById("err11").style.color="red";
        form.username.style.border="2px solid rgb(184, 89, 89)";
      }
      if(form.password.value == form.username.value) {
        document.getElementById("errform").style.display="block";
        document.getElementById("err4").style.display="block";
        document.getElementById("err4").style.color="red";
        form.password.style.border="2px solid rgb(184, 89, 89)";
        return false;
      }
      if(form.password.value !== form.password2.value) {
        document.getElementById("errform").style.display="block";
        document.getElementById("err5").style.display="block";
        document.getElementById("err5").style.color="red";
        form.password.style.border="2px solid rgb(184, 89, 89)";
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        document.getElementById("errform").style.display="block";
        document.getElementById("err6").style.display="block";
        document.getElementById("err6").style.color="red";
        form.password.style.border="2px solid rgb(184, 89, 89)";
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        document.getElementById("errform").style.display="block";
        document.getElementById("err7").style.display="block";
        document.getElementById("err7").style.color="red";
        form.password.style.border="2px solid rgb(184, 89, 89)";
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        document.getElementById("errform").style.display="block";
        document.getElementById("err8").style.display="block";
        document.getElementById("err8").style.color="red";
        form.password2.style.border="2px solid rgb(184, 89, 89)";
        return false;
      }
    } else {
      document.getElementById("errform").style.display="block";
      document.getElementById("err9").style.display="block";
      document.getElementById("err9").style.color="red";
      form.password2.style.border="2px solid rgb(184, 89, 89)";
      return false;
    }
    return true;
  }

