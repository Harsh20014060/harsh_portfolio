<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'sainiharsh754@gmail.com';
// echo "tutuut".$_POST['email'];
  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);
   
  //echo $contact->send();

 // mail($_POST['email'],$_POST['subject'],$_POST['message']); 

    // // Retrieve form data
    // $name = $_POST['name'];
    // $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];

    // // Sanitize inputs
    // $name = htmlspecialchars($name);
    // $email = htmlspecialchars($email);
    // $subject = htmlspecialchars($subject);
    // $message = htmlspecialchars($message);

    // // Construct the mailto link
    // $mailto = "mailto:" . $email . "?subject=" . urlencode($subject) . "&body=" . urlencode("Hello $name,\n\n$message");

    // // Redirect the user to the mailto link
    // header("Location: $mailto");

    // // Stop the script
    // exit();
?>
