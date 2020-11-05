<?php     
  

  var Name = $_POST('name');
  // grabbing the data from the form when posted
  // make sure to add name="name" or name="email"
  // in the input tag to grab the the specific elements
  // data example <textarea name="message"> or 
// <input type="number name="number">
  
  var Email = $_POST('email');
  var Number = $_POST('number');
  
$to_email = 'Your E-mail';
$subject = 'The Subject of the message';
$message = 'Name'.$name. "email" .$email. "number:" .$number.".";
$headers = 'From: noreply @ company . com'; //optional
mail($to_email,$subject,$message,$headers);
?>