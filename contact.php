<?php
// require "PHPMailer/PHPMailerAutoload.php";
use PHPMailer\src\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
function smtpmailer($to, $from, $from_name, $subject, $body)
    {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
 
        $mail->SMTPSecure = 'SMTP'; 
        $mail->Host = 'smtp.hostinger.in';
        $mail->Port = 587;  
        $mail->Username = 'support@softezi.in';
        $mail->Password = 'SoftEzi@123';   
   
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
   
        $mail->IsHTML(true);
        $mail->From="support@softezi.in";
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
    if(isset($_POST['sendenquery'])){
      $name=$_POST['name'];
      $last_name=$_POST['last_name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $company=$_POST['company'];
      $country=$_POST['country'];
      $interest=$_POST['interest'];
      $description=$_POST['description'];
      $to='support@softezi.in';
      $from=$email;
    $name= $name." ".$last_name;
    $subj = $company;
   $msg = $description."<br>Interested:-".$interest."<br>Phone:-".$phone."<br>Company:-".$company; 
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    }
    if(isset($_POST['contactform'])){
      $name=$_POST['name'];
      $last_name=$_POST['last_name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $company=$_POST['company'];
      $country=$_POST['country'];
      $interest=$_POST['interest'];
      $description=$_POST['description'];
      $to='support@softezi.in';
      $from=$email;
    $name= $name." ".$last_name;
    $subj = $company;
   $msg = $description."<br>Interested:-".$interest."<br>Phone:-".$phone."<br>Company:-".$company; 
    $error=smtpmailer($to,$from, $name ,$subj, $msg);
    
    }
?>

 <!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Contacts</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#0072f6">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/icon.png" />


<style>
      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 300;
        src: url(fonts/ProximaNova-Light.html) ;
      }

      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 400;
        src: url(fonts/ProximaNova-Regular.html) ;
      }

      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 600;
        src: url(fonts/ProximaNova-Semibold.html);
      }

      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 700;
        src: url(fonts/ProximaNova-Bold.html);
      }


      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 800;
        src: url(fonts/ProximaNova-Black.html);
      }

      @font-face {
        font-display: swap;
        font-family: ProximaNova;
        font-style: normal;
        font-weight: 900;
        src: url(fonts/ProximaNova-Xbold.html);
      }


    </style>
<meta name="csrf-param" content="">
<meta name="csrf-token" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="">
<meta property="og:image:type" content="image/jpeg">
<meta property="og:image:width" content="1920">
<meta property="og:image:height" content="1280">
<meta property="og:locale" content="en_US">
<meta property="og:url" content="">
<meta property="og:site_name" content="Intellectsoft US">
<meta property="og:type" content="website">
<meta name="twitter:title" content="Contacts | Intellectsoft US">
<meta name="twitter:description" content="Intellectsoft app and software development company. Contact us and get answers to your questions about mobile app development or custom software solutions">
<meta name="twitter:image" content="">
<meta name="twitter:url" content="">
<meta name="twitter:domain" content="Intellectsoft US">
<meta name="twitter:card" content="summary">
<meta name="description" content="Intellectsoft app and software development company. Contact us and get answers to your questions about mobile app development or custom software solutions">
<link href="contacts.html" rel="canonical">
<link href="contacts.html" rel="alternate" hreflang="en-US">
<link href="" rel="alternate" hreflang="en-GB">
<link href="" rel="alternate" hreflang="nb-NO">
<link href="contacts.html" rel="alternate" hreflang="x-default">
<link href="assets/49c5770d/iconsd391.css" rel="stylesheet" position="3">
<link href="assets/49c5770d/bundledb85.css" rel="stylesheet">
<!--[if IE 9]>
<script src="/assets/49c5770d/vendor/ie9-placeholder.js?v=1608714905"></script>
<![endif]-->
<!--[if IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WXTDXX');
</script> 
<style type="text/css">
  .nav__list .menu-item .menu-item-link {
    color: black;
  }
  .block-markdown {
    margin: 79px 0 10px;
  }
</style>
</head>
<body class="pages-contacts">
<?php
require("desktop-nav.php");
?>
<header>
<section class="hero hero--600" style="background-image:url(../upload/images/services/dfcfd4a1cf1d0dbab56ef6f54f0f27b24114a71b98943161775118949312dd4b.jpg);height:400px;">
<div class="container">
<div class="hero__content">
<div class="title__preheader title__preheader--tag">SoftEzi</div>
<h1 class="title title--uppercase">Contact
</h1>
</div>
</div>
</section>
</header>
<section class="form-wrap form-wrap--contact-page">
<div class="container">
<div class="form-wrap__flexbox form-wrap__flexbox--contact-page">
<h2 id="formBottom" class="form-wrap__title form-wrap__title--contact-page"style="display: block;">
Need forward-thinking software? <br>
<span>Get in touch with us.</span>
</h2>
<form id="form-contacts" class="form form--contact form--contact-page" action="contact.php" method="post" enctype="multipart/form-data" data-handler="" data-type="ContactForm" data-url=""style="display: block;">
<div class="form__box form__box--contact-page">
<div class="form__box">
<div class="form-group border">
<input type="text" class="form-control" name="name" maxlength="255" placeholder="First Name">
</div>
<div class="form-group border">
<input type="text" class="form-control" name="last_name" maxlength="255" placeholder="Last Name">
</div>
</div>
<div class="form-group border">
<input type="text" class="form-control" name="email" maxlength="255" placeholder="Email">
</div>
<div class="form-group border">
<input type="text" class="form-control" name="phone" maxlength="50" placeholder="Work Phone">
</div>
<div class="form-group border">
<input type="text" class="form-control" name="company" maxlength="255" placeholder="Company">
</div>
<div class="form-group form__appearance border">
<select class="form__select" name="country">
<option value="">Country</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="The Bahamas">The Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="People &#039;s Republic of China">People &#039;s Republic of China</option>
<option value="Republic of China">Republic of China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos(Keeling) Islands">Cocos(Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote d&#039;Ivoire">Cote d&#039;Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Polynesia">French Polynesia</option>
<option value="Gabon">Gabon</option>
<option value="The Gambia">The Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guernsey">Guernsey</option>
<option value="Guinea">Guinea</option>
<option value="Guinea - Bissau">Guinea - Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jersey">Jersey</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="North Korea">North Korea</option>
<option value="South Korea">South Korea</option>
<option value="Kosovo">Kosovo</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nagorno - Karabakh">Nagorno - Karabakh</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Turkish Republic of Northern Cyprus">Turkish Republic of Northern Cyprus</option>
<option value="Northern Mariana">Northern Mariana</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn Islands">Pitcairn Islands</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Barthelemy">Saint Barthelemy</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Martin">Saint Martin</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="Somaliland">Somaliland</option>
<option value="South Africa">South Africa</option>
<option value="South Ossetia">South Ossetia</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Timor - Leste">Timor - Leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Transnistria Pridnestrovie">Transnistria Pridnestrovie</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tristan da Cunha">Tristan da Cunha</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican City</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="British Virgin Islands">British Virgin Islands</option>
<option value="Isle of Man">Isle of Man</option>
<option value="US Virgin Islands">US Virgin Islands</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select> </div>
<div class="form-group form__appearance border">
<select class="form__select" name="interest">
<option value="">I am interested in</option>
<optgroup label="Services">
<option value="Mobile App Development">Mobile App Development</option>
<option value="Enterprise Software Development">Enterprise Software Development</option>
<option value="Web Development">Web Development</option>
<option value="Dedicated Teams">Dedicated Teams</option>
<option value="IT Consulting">IT Consulting</option>
<option value="Other">Other</option>
</optgroup>
<optgroup label="Technologies">
<option value="Internet of Things">Internet of Things</option>
<option value="Blockchain">Blockchain</option>
<option value="Augmented Reality">Augmented Reality</option>
<option value="Artificial Intelligence">Artificial Intelligence</option>
<option value="Cloud Computing">Cloud Computing</option>
<option value="UX / UI Design">UX / UI Design</option>
</optgroup>
</select> </div>
<div class="form-group border">
<textarea class="form__textarea" name="description" maxlength="65535" placeholder="Project description"></textarea>
</div>
<div class="form__footer">
<!-- <div class="form-group no-validation-icon">
<input type="hidden" name="send_nda" value="0">
<input type="checkbox" id="send_nda" class="form__checkbox" name="send_nda" value="0">
<label class="form__checkbox-label form__checkbox-label--gray" for="send_nda">
Send NDA </label>
</div> -->
<!-- <div class="form-group upload-wrapper js-emptyFiles form-choose-file">
<input type="file" id="attach" name="attach" data-label="Attach file">
<button class="clear-attach">x</button>
<label class="uploaded__label upload__label" for="attach">
<span class="uploaded__text">
<i class="isoi-paper-clip"></i>Attach file </span>
</label>
</div> -->
</div>
<div class="form__footer form__footer_consent">
<div class="form-group no-validation-icon">
<p class="form__inform-data">
I consent to having Intellectsoft collect and process my personal details according to its
<a href="l" class="form__footer_consent-link">Privacy Policy</a>.
</p>
</div>
</div>
<input type="hidden" id="check-browse" class="check-browse" name="check_ad_block">
<!-- <button type="submit" name="" >
</button> -->
<input type="submit" name="sendenquery" class="btn" value="Talk to our team "> 
<div class="agreement__text">
This form collects your personal details so that we can contact you back to raise opportunities for cooperation, and we need your consent on that. You can withdraw your consent at any time by writing to us at EMAIL. Read our
<a href="">Privacy Policy</a> to learn how we protect and manage your data.
</div>
<p class="contact__error">Something went wrong. Send form again, please.</p>
<div class="form-spinner">
<div class="rect1"></div>
<div class="rect2"></div>
<div class="rect3"></div>
<div class="rect4"></div>
<div class="rect5"></div>
</div>
</div>
</form>
<!-- <div class="js-thx thank">
<div class="thank__content">
<h3 class="thank__title">Thank you for your message!</h3>
<p class="thank__text">We will get in touch with you regarding your request within one business day.</p>
<a id="clearStorage" href="#" class="button button--primary">Send again</a>
</div>
</div> -->
</div>
</div>
</section>
<section class="container">
<div class="block-markdown block-markdown--contacts col-3">
<h3>Doing business with us is easy</h3>
<ul>
<li>
<ul>
<li><h4>Pune</h4>
</li>
<li><strong>Atharva Residency, <br>Baner road,<br>Baner Pune - 45</strong></li>
<li><em>+91  860 0732 432</em></li>
</ul>
</li>
<li>
<ul>
<li><h4>Mumbai</h4>
</li>
<li><strong>Runwal Pearl, D2-1503, Manorma Nagar,<br> Thane (W) 400607</strong></li>
<li><em>+91  860 0732 432</em></li>

</ul>
</li>
<li>
<ul>
<li><h4>Trivandrum</h4>
</li>
<li><strong>Pms building, pnra 28, padmanagar, paruthipara,<br> trivandrum -12
</strong></li>
<li><em>+91  860 0732 432</em></li>

</ul>
</li>
</ul>
</div>
</section>
<footer class="footer">
  <div class="row">
<div class="footer__flexbox">
<div class=".col-xs-6 .col-sm-4">
    <div class="footer__about">
<div class="footer__address">
<a class="footer__heading"></a>
<div class="footer__office">
<a href="" class="footer__email"></a>
<div class="footer__address">
<img src="assets/img/logo.png" style="width: 45%;">
</div>
<p>We are a Software Development Company in Pune priding itself on our Website Development services. Our experts help you make a statement by designing and maintaining an attractive and sophisticated platform built to attract more business your way, be it in the form of a website or a mobile application </p>
</div>
</div> </div>
</div>
<div class="col-md-2">
  <div class="footer__about">
<div class="footer__address">
<div class="footer__office">
  <a class="footer__heading">Contacts</a>
<a href="mailto:" class="footer__email"></a>
<div class="footer__address">

+91 860 0732 432<br />
+91 957 9942 949<br />
</div>
<!--<a href="" class="all-link footer__link">-->
<!--More contacts<i class="isoi-angle-right"></i>-->
<!--</a>-->
</div>
</div> </div>
</div>
  <div class="col-md-6"style="display: none;">
    
 
<div id="form-wrap" class="form-wrap__flexbox" >
<form id="form-contacts" class="form form--contact form--contact--rating" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" data-handler="" data-type="ContactForm" data-url="">
<!--  -->
<div class="form__box" data-style="display: flex;">
<div class="form-group">
<input type="text" class="form-control" name="email" maxlength="255" placeholder="Email">
</div>
<div class="form-group">
<input type="text" class="form-control" name="phone" maxlength="50" placeholder="Work Phone">
</div>
</div>
<div class="form__box" data-style="display: flex;">
<div class="form-group">
<input type="text" class="form-control" name="company" maxlength="255" placeholder="Company">
</div>
<div class="form-group form__appearance">
<select class="form__select" name="country">
<option value="">Country</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="The Bahamas">The Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="People &#039;s Republic of China">People &#039;s Republic of China</option>
<option value="Republic of China">Republic of China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos(Keeling) Islands">Cocos(Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote d&#039;Ivoire">Cote d&#039;Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Polynesia">French Polynesia</option>
<option value="Gabon">Gabon</option>
<option value="The Gambia">The Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guernsey">Guernsey</option>
<option value="Guinea">Guinea</option>
<option value="Guinea - Bissau">Guinea - Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jersey">Jersey</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="North Korea">North Korea</option>
<option value="South Korea">South Korea</option>
<option value="Kosovo">Kosovo</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montenegro">Montenegro</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nagorno - Karabakh">Nagorno - Karabakh</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Turkish Republic of Northern Cyprus">Turkish Republic of Northern Cyprus</option>
<option value="Northern Mariana">Northern Mariana</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn Islands">Pitcairn Islands</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Barthelemy">Saint Barthelemy</option>
<option value="Saint Helena">Saint Helena</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
<option value="Saint Lucia">Saint Lucia</option>
<option value="Saint Martin">Saint Martin</option>
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Serbia">Serbia</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="Somaliland">Somaliland</option>
<option value="South Africa">South Africa</option>
<option value="South Ossetia">South Ossetia</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Timor - Leste">Timor - Leste</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Transnistria Pridnestrovie">Transnistria Pridnestrovie</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tristan da Cunha">Tristan da Cunha</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City">Vatican City</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="British Virgin Islands">British Virgin Islands</option>
<option value="Isle of Man">Isle of Man</option>
<option value="US Virgin Islands">US Virgin Islands</option>
<option value="Wallis and Futuna">Wallis and Futuna</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select> </div>
</div>
<div class="form__box" data-style="display: flex;">
<div class="form-group">
<input type="text" class="form-control" name="name" maxlength="255" placeholder="First Name">
</div>

<div class="form-group">
<input type="text" class="form-control" name="last_name" maxlength="255" placeholder="Last Name">
</div>
</div>

<div class="form__box" data-style="display: flex;">
<div class="form-group form__appearance">
<select class="form__select" name="interest">
<option value="">I am interested in</option>
<optgroup label="Services">
<option value="Mobile App Development">Mobile App Development</option>
<option value="Enterprise Software Development">Enterprise Software Development</option>
<option value="Web Development">Web Development</option>
<option value="Dedicated Teams">Dedicated Teams</option>
<option value="IT Consulting">IT Consulting</option>
<option value="Other">Other</option>
</optgroup>
<optgroup label="Technologies">
<option value="Internet of Things">Internet of Things</option>
<option value="Blockchain">Blockchain</option>
<option value="Augmented Reality">Augmented Reality</option>
<option value="Artificial Intelligence">Artificial Intelligence</option>
<option value="Cloud Computing">Cloud Computing</option>
<option value="UX / UI Design">UX / UI Design</option>
</optgroup>
</select> </div>
</div>
<div class="form-group form-group--description">
<textarea class="form__textarea" name="description" maxlength="65535" placeholder="Project description"></textarea>
</div>
<input type="submit" name="contactform" class="form__submit form__submit--contact button--white-green" style="background: #fd7e149c" value="Talk to our team "> 

<!-- <button  >
Talk to our team </button> -->
</form>
</div>
</div>
</div>

<!--</div>-->
<!--<div class="footer__certified">-->
<!--</div>-->
<div class="footer__copyright">
<div class="footer__copy-container">
<span class="footer__year">&copy; 2020 SoftEzi</span>
<!--<a class="footer__privacy" href=""></a>-->
<!--<a class="footer__privacy" href="" rel="nofollow"></a>-->
</div>
<div class="footer__social social-box">
<div class="social-box__list">
<a class="fa fa-linkedin-square" style="font-size:24px" href="" rel="nofollow" target="_blank">
    <!--<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"><path d="M2 .3c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2zM.3 16.9V5.8h3.4v11.1H.3zM5.9 5.8h3.3v1.5c.5-.8 1.6-1.8 3.3-1.8 3.5 0 4.1 2.3 4.1 5.3v6.1h-3.4v-5.4c0-1.3-.1-2.9-1.8-2.9-1.8 0-2.1 1.4-2.1 2.8v5.5H5.9V5.8z" /></svg>-->
    </a>
<a class="fa fa-facebook-square" style="font-size:24px; margin-left:10px" href="" rel="nofollow" target="_blank">
    <!--<svg xmlns="http://www.w3.org/2000/svg" width="10" height="18"><path d="M8 2.9h1.8V.1c-.3 0-.6 0-.9-.1H7.3c-.9 0-1.7.2-2.4.7-.7.6-1.2 1.4-1.3 2.3-.1.4-.1.8-.1 1.2v2.1H.8v3.1h2.6v7.7h3.3V9.4h2.6c.1-1 .2-2 .4-3.1H6.6s0-1.5.1-2.2c0-.9.5-1.2 1.3-1.2" /></svg>-->
    </a>
<a class=" fa fa-instagram " style="font-size:24px; margin-left:10px" href="https://instagram.com" rel="nofollow" target="_blank">
    <!--<svg xmlns="http://www.w3.org/2000/svg" width="19" height="15"><path d="M5.5 11.6C3.6 11.5 2.4 10.1 2 9c.6.1 1.1.1 1.6-.1h.1c-1.1-.2-1.9-.8-2.4-1.7-.4-.6-.6-1.3-.6-2 .5.3 1.1.4 1.7.5-.8-.6-1.3-1.4-1.6-2.3-.2-1 0-1.9.4-2.7 2.1 2.4 4.6 3.7 7.7 3.9v-.4c-.1-.9.1-1.7.5-2.5C10 .8 10.9.2 12 .1c1.2-.2 2.3.1 3.2 1 .1.1.1.1.2.1.8-.2 1.5-.5 2.2-.9h.1c-.3.9-.9 1.5-1.6 2 .7-.1 1.4-.2 2.1-.5-.2.2-.3.4-.5.5-.4.5-.8 1-1.3 1.3-.1.1-.1.1-.1.2v1.6c-.2 1.2-.5 2.3-1 3.3-.5 1.1-1.2 2.1-2 3-1.4 1.4-3.2 2.4-5.2 2.8-.6.2-1.3.3-2 .3-2.2 0-4.2-.5-6-1.6 0 0-.1 0-.1-.1 1.3.2 2.5 0 3.7-.5.7-.2 1.3-.6 1.8-1" /></svg>-->
    </a>
<!--<a class="instagram social-box__icon" href="" rel="nofollow" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="10"><path class="dribble-red" d="M19.3 4.9c0 2.3-1.9 4.2-4.2 4.2-2.4 0-4.2-1.9-4.2-4.2 0-2.3 1.8-4.2 4.2-4.2 2.3 0 4.2 1.9 4.2 4.2" /><path class="dribble-blue" d="M4.2 9.1C1.9 9.1 0 7.2 0 4.9 0 2.6 1.9.7 4.2.7c2.3 0 4.2 1.9 4.2 4.2 0 2.3-1.9 4.2-4.2 4.2z" /></svg></a>-->
<!--<a class="youtube social-box__icon" href="" rel="nofollow" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 20" height="20"><path d="M21.986 4.963a2.745 2.745 0 00-1.931-1.944C18.35 2.56 11.52 2.56 11.52 2.56s-6.831 0-8.535.46c-.94.252-1.68.997-1.931 1.943-.457 1.715-.457 5.293-.457 5.293s0 3.577.457 5.292c.251.946.991 1.66 1.931 1.913 1.704.459 8.535.459 8.535.459s6.831 0 8.535-.46a2.704 2.704 0 001.931-1.912c.457-1.715.457-5.292.457-5.292s0-3.578-.457-5.293zm-12.7 8.54V7.008l5.71 3.249-5.71 3.248z" /></svg></a>-->
</div>
</div> </div>
</footer>
</div>
<?php
require('mobile-nav.php');
?>
<div id="c-mask" class="c-mask"></div>
<script src="assets/d3cdbfb5/jquery.min6b47.js?v=1463765083"></script>
<script src="assets/tr.js"></script>
<script src="assets/49c5770d/vendor/promise.min1a4f.js?v=1608714905"></script>
<script src="assets/49c5770d/vendor/egg.min1a4f.js?v=1608714905"></script>
<script src="../cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js"></script>
<script src="assets/49c5770d/vendor/flickity.pkgd.min5c12.js?v=1608714907"></script>
<script src="assets/49c5770d/vendor/flexibility.min1a4f.js?v=1608714905"></script>
<script src="assets/49c5770d/vendor/validate.min1a4f.js?v=1608714905"></script>
<script src="assets/49c5770d/vendor/validate.additional-methods.min1a4f.js?v=1608714905"></script>
<script src="assets/49c5770d/vendor/skrollr.min1a4f.js?v=1608714905"></script>
<script src="assets/49c5770d/vendor/jquery.svg3dtagcloud.min1a4f.js?v=1608714905"></script>
<script src="assets/49c5770d/vendor/advert1a4f.js?v=1608714905"></script>
<script src="assets/49c5770d/vendor/particles.min1a4f.js?v=1608714905"></script>
<script src="assets/49c5770d/bundle.minb1f5.js?v=1608715491"></script>

</body>
</html>
