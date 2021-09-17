<?php
// Message for success of failure of submission of form
$msg = '';
$msgClass = '';
//Checking for submit
if(filter_has_var(INPUT_POST, 'submit')){
//Form data
$name = htmlspecialchars ($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

// Making each input required
if (!empty($email) && !empty($name) && !empty($subject) && !empty($message)) {

  // Valid Emails
  if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  $msg = 'Please enter valid email';
 $msgClass = 'lead-danger';
  } else {
    //Connecting and adding to Database 
    $conn = mysqli_connect("localhost", "root", "SHADAINE20", "phpblog");
    $sql = " INSERT INTO contact(name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    mysqli_query($conn, $sql);
$email = '';
$name = '';
$subject ='';
$message = '';
//Confirm Message
 $msg = 'Thanks for submitting, we will reach out ASAP';
 $msgClass = 'lead-success';
}
} else {
 $msg = 'Please Fill out all fields';
 $msgClass = 'lead-danger';
}
}
?>
 
 <div class="container bg-white" id="feedback">
    <h1 class="title">Contact <span>Us</span> </h1>
    <div class="f-wrapper">
      <form class="form" name="contact" method="POST">
        <h1 class="title">
          Share <span><i>your</i></span> views
        </h1>
        <div class="input-group">
          <input type="text" name="name" id="name" placeholder="Fullname"  autocomplete="off" />
          <input type="text" name="email" id="email" placeholder="Youremail@gmail.com"  autocomplete="email" />
        </div>
        <input type="text" name="subject" id="subject" placeholder="Subject" autocomplete="off" />
        <textarea name="message" id="message" cols="30" rows="10" placeholder="Message" style="margin-bottom:30px;"></textarea>
         <?php if( $msg != ''):?>
                <div class="lead <?php echo $msgClass;?>" style="border-radius:4px;"><?php echo $msg; ?></div>
                <?php endif;?>
        <input type="submit" value="Submit" class="btn" id="submit" name="submit"/>
      </form>
      <img src="images/ppl-phone.png" alt="Email clipart" />
    </div>
  </div>