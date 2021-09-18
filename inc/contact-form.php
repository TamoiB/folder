<?php
  require '../../../composer/vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('c2d29bb7d88e2ac35a5c1721f8324eff','8ea4870174a0ddda796c11cc40a5b162',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "codesbyshadaine@gmail.com",
          'Name' => "Shadaine"
        ],
        'To' => [
          [
            'Email' => "codesbyshadaine@gmail.com",
            'Name' => "Shadaine"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
?>


<div class="container bg-white" id="feedback">
  <h1 class="title">Contact <span>Us</span> </h1>
  <div class="f-wrapper">
    <form class="form" name="contact" method="POST">
      <h1 class="title">
        Share <span><i>your</i></span> views
      </h1>
      <div class="input-group">
        <input type="text" name="name" id="name" placeholder="Fullname" autocomplete="off" />
        <input type="text" name="email" id="email" placeholder="Youremail@gmail.com" autocomplete="email" />
      </div>
      <input type="text" name="subject" id="subject" placeholder="Subject" autocomplete="off" />
      <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"
        style="margin-bottom:30px;"></textarea>
      <?php if( $msg != ''):?>
      <div class="lead <?php echo $msgClass;?>" style="border-radius:4px;"><?php echo $msg; ?></div>
      <?php endif;?>
      <input type="submit" value="Submit" class="btn" id="submit" name="submit" />
    </form>
    <img src="images/ppl-phone.png" alt="Email clipart" />
  </div>
</div>