<!--
function checkform ( form )
{
  // form.preventDefault();
  // ** START **
  if (form.first_name.value == "") {
    alert( "Please enter your name." );
    form.first_name.focus();
    return false ;
  }
  // ** END **
  // ** START **
  if (form.last_name.value == "") {
    alert( "Please enter your lastname." );
    form.last_name.focus();
    return false ;
  }
  // ** END **
  // ** START **
    if (form.email.value == "") {
   error = "You didn't enter an email address.\n";
	}
	var emailFilter=/^.+@.+\..{2,3}$/;
    if (!(emailFilter.test(form.email.value))) {
       alert( "That email is not valid, please try again." );
    form.email.focus();
    return false ;
    }
    else {
//test email for illegal characters
       var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/
         if (form.email.value.match(illegalChars)) {
         alert( "That email is not valid, please try again." );
    form.email.focus();
    return false ;
       }
    }
  // ** END **
  // ** START **
  if (form.telephone.value == "") {
    alert( "Please enter a contact number." );
    form.telephone.focus();
    return false ;
  }
  // ** END **
  record_analytics_event(form);
  sleep(2000);
  return true;
}
//-->

  

