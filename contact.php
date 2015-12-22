                                                                                                <?php session_start() ?>

<!DOCTYPE html>

<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="author" content="Grace U. Mun"/>
    <meta name="description" content='Rediscover Entertainment with MunCity. Bay Area based, we are focused on connecting entertainers with events...'/>
    <title>Welcome to MunCity: Entertainment, Events, Life</title>
    <link href="http://fonts.googleapis.com/css?family=Tangerine|Cardo|Playfair+Display+SC|" rel="stylesheet" type="text/css">
    <link type="text/css" href="contact.css" rel="stylesheet">
  </head>
  
  <body>

  <div class="container">

  <div id="logo">
    <a href="index.html"><img src="MC Logo.jpg" alt="MunCity Logo" /></a>
  </div>

    <div id="nav">
      <ul>
	<li><a href="http://www.muncity.com">Home</a></li>

	<li class="about"><a href="#">About</a>
          <ul>
            <li><a href="whoweare.html">Who We Are</a></li>
<!--            <li><a href="#">Mission and Vision</a></li>
            <li><a href="#">Services</a></li>   -->
          </ul>
        </li>

	<li class="events"><a href="#">Events</a>
          <ul>
            <li><a href="photos.html">Photos</a></li>
<!--            <li><a href="calendar.html">Calendar</a></li>   -->
          </ul>
        </li>

	<li class="partners"><a href="#">Music</a>
          <ul>
            <li><a href="underconstruction.html">Lessons</a></li>
            <li><a href="groups.html">Groups For Events</a></li>
          </ul>
        </li>

        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>

    <div class="sm"; id="SMIG">
      <a target="_blank" title="follow us on instagram" href="http://www.instagram.com/muncityent/">
      <img alt="follow us on instagram" src="instagram-iso-color 2.png" border=0></a>
    </div>

    <div class="sm"; id="SMTW">
      <a target="_blank" title="follow us on twitter" href="http://www.twitter.com/muncityent">
      <img alt="follow us on twitter" src="twitter-iso-color 2.png" border=0></a>
    </div>

    <div class="sm"; id="SMFB">
      <a target="_blank" title="follow us on facebook" href="http://www.facebook.com/muncity">
      <img alt="follow us on facebook" src="facebook-iso-color 2.png" border=0></a>
    </div>

  <div class="bar"></div>

    <div id="contact-form" class="clearfix">
      <h3>Thank you for your interest in MunCity!</h3>
      <h4>Fill out the form below to get in touch with us!</h4>

<?php
//init variables
$cf = array();
$sr = false;
 
if(isset($_SESSION['cf_returndata'])){
    $cf = $_SESSION['cf_returndata'];
    $sr = true;
}
?>

  <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
    <li id="info">There were some problems with your form submission:</li>
    <?php 
    if(isset($cf['errors']) && count($cf['errors']) > 0) :
        foreach($cf['errors'] as $error) :
    ?>
    <li><?php echo $error ?></li>
    <?php
        endforeach;
    endif;
    ?>
  </ul>

  <p id="success" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">Thank you! We will get back to you as soon as we can!</p>
  <form method="post" action="process.php">

  <label for="name"><span class="required"></span></label>
  <input type="text" id="name" name="name" value="" placeholder="your name" required="required" autofocus="autofocus" />
         
  <label for="email">Email Address: <span class="required">*</span></label>
  <input type="email" id="email" name="email" value="" placeholder="email@aplace.com" required="required" />
         
  <label for="telephone">Phone Number: </label>
  <input type="tel" id="telephone" name="telephone" value="" />
         
  <label for="interest">I would like to: <span class="required">*</span></label>
  <select id="interest" name="interest">
    <option value="ask">Ask A Question</option>
    <option value="event">Have MunCity Music at My Special Event</option>
    <option value="learning">Learn More About MunCity</option>
    <option value="work">Partner With MunCity At My School</option>
    <option value="general">Other</option>
  </select>

  <label for="request">How can we help you? (Check all that apply) </label>
      <input type="checkbox" id="checkbox" name="service" value="lesson"> Lesson
      <input type="checkbox" id="checkbox" name="service" value="arrange"> Arrangement
      <input type="checkbox" id="checkbox" name="service" value="compose"> Composition
      <input type="checkbox" id="checkbox" name="service" value="music"> Music
      <input type="checkbox" id="checkbox" name="service" value="record"> Recording
         
        <label for="message">Message: <span class="required">*</span></label>
        <textarea id="message" name="message" placeholder="Your message must be greater than 20 characters" required="required" data-minlength="20"></textarea>
         
        <span id="loading"></span>
        <input type="submit" value="Submit" id="submit-button" />
        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
      </form>
    </div>

  </body>
</html>
                            
                            
                            
                            
                            
                            
                            
