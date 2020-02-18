
    // check = function est la fonction qui fait une vérification
var check = function() {
if (document.getElementById('password').value ==
  document.getElementById('confirm_password').value)
  { //elle vérifie que password et egal a confim_password, juste au dessus
  document.getElementById('message').style.color = 'green';
  document.getElementById('message').innerHTML = 'matching';
  document.getElementById('password').style.border = '2px solid green';
  document.getElementById('confirm_password').style.border = '2px solid green';
  //si les deux sont identique on déclenche ceci
} else {
  document.getElementById('message').style.color = 'red';
  document.getElementById('message').innerHTML = 'not matching';
  document.getElementById('password').style.border = '2px solid red';
  document.getElementById('confirm_password').style.border = '2px solid red';
} //sinon on déclenche sa
}
