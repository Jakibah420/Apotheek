
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

function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Email mag niet blank zijn!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Email mag geen speciale tekens of spaties bevatten!");
      form.username.focus();
      return false;
    }

    if(form.password.value != "" && form.password.value == form.password2.value) {
      if(form.password.value.length < 6) {
        alert("Wachtwoord moet minimaal 6 karakters bevatten!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.username.value) {
        alert("Email mag NIET hetzelfde zijn als het wachtwoord!");
        form.password.focus();
        return false;
      }
      if(form.password.value != form.password2.value) {
        alert("Wachtwoorden zijn niet hetzelfde!")
        form.password2.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Wachtwoord moet minstens 1 nummer bevatten (0-9)");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Wachtwoord moet minimaal 1 kleine letter bevatten (a-z)");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Wachtwoord moet minimaal 1 hoofd letter bevatten (A-Z)");
        form.password.focus();
        return false;
      }
    } else {
      alert("Wachtwoorden zijn niet hetzelfde!");
      form.password.focus();
      return false;
    }

    alert("You entered a valid password: " + form.password.value);
    return true;
  }

