<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us Freely And Be In Touch With Us</title>
    <link rel="stylesheet" href="<?= base_url(); ?>frontcss/styleOlympiad.css">
    <?php $this->load->view('includes/link'); ?>
    <link rel="stylesheet" href="<?= base_url(); ?>frontcss/contactstyle.css" />
    <link rel="canonical" href="https://olympiadfoundation.in/contact-us">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  <?php $this->load->view('includes/header'); ?>
    <div class="container">
      <span class="big-circle"></span>
      <img src="<?= base_url(); ?>frontcss/img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          Olympiad Foundation welcomes you to contact us freely.
          </p>

          <div class="info">
            <div class="information">
              <img src="<?= base_url(); ?>frontcss/img/location.png" class="icon" alt="" />
              <p>155, Shyam Colony, Opp. Panchayat Bhawan, Ballabgarh(FBD.)-121004</p>
            </div>
            <div class="information">
              <img src="<?= base_url(); ?>frontcss/img/email.png" class="icon" alt="" />
              <p><a href="mailto:info@olympiadfoundation.in">info@olympiadfoundation.in</a></p>
            </div>
            <div class="information">
              <img src="<?= base_url(); ?>frontcss/img/phone.png" class="icon" alt="" />
              <p><a href="tel:7982228305">+91-7982228305</a></p>
            </div>  
			<div class="information">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAnBmDmsmu6QGfOF7D4JlrO-2GSgTW4pk8JA&usqp=CAU" style="height:40px;width:40px;" class="icon" alt="" />
              <p><a href="tel:1800-891-3269">1800-891-3269</a></p>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form  action="process.php" method="post">
            <h3 class="title">Contact us</h3>
            <?php 
                $Msg = "";
                if(isset($_GET['error']))
                {
                    $Msg = " Please Fill in the Blanks ";
                    echo '<div class="alert alert-danger">'.$Msg.'</div>';
                }

                if(isset($_GET['success']))
                {
                    $Msg = " Your Message Has Been Sent ";
                    echo '<div class="alert alert-success">'.$Msg.'</div>';
                }
                        
            ?>
            <div class="input-container">
              <input type="text" name="UName" placeholder="Username" class="input" />
            </div>
            <div class="input-container">
              <input type="email" name="Email" placeholder="Email" class="input" />
            </div>
            <div class="input-container">
              <input type="tel" name="Phone" placeholder="Phone" class="input" />
            </div>
            <div class="input-container">
              <input type="text" name="Subject" placeholder="Subject" class="input" />
            </div>
            <div class="input-container textarea">
              <textarea name="msg" class="input" placeholder="Message"></textarea>
            </div>
             <button class="btn btn-success" name="btn-send"> Send </button>
          </form>	
        </div>
      </div>
    </div>
  </body>
</html>