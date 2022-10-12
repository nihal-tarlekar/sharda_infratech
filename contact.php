
<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/contact-form-attachment.html
*/
require_once("./include/fgcontactform.php");
require_once("./include/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('supriya@optimist.co.in','design@optimist.co.in'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('XsHVufPpgD9Epwl');

$formproc->AddFileUploadField('productlist','jpg,jpeg,gif,png,bmp',2024);
$formproc->AddFileUploadField('attachment','doc,docx,pdf,txt',2024);

if(isset($_POST['submitted']))
{
  if($formproc->ProcessForm02())
   {
      $formproc->RedirectToURL("thank-you.php");
   } 
}

?>

<!doctype html>
<html>
<head>
	<meta content="charset=utf-8">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<title>Contact Us</title>
	     <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="font/stylesheet.css">
        <link rel="stylesheet" href="assets/css/all.css">
        <link rel="stylesheet" href="assets/capabilities.css">
        <link rel="stylesheet" href="assets/custom.css">
        <link rel="stylesheet" href="assets/contact.css">
        <link rel="stylesheet" href="assets/responsive/responsive.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

<section class="contact" id="contact">
 <div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src="images/homepage/logo.png" alt="logo" class="img-logo"></a>
            <div class="collapse navbar-collapse d-none d-sm-block d-md-none d-lg-block" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="project.html">PROJECTS</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          ABOUT US
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="our-legacy.html">OUR LEGACY</a>
                        <a class="dropdown-item" href="our-philosophy.html">OUR PHILOSOPHY</a>
                        <a class="dropdown-item" href="our-team.html">OUR TEAM</a>
                      </div>
                    </li> 
                    <li class="nav-item">
                    <a class="nav-link" href="capabilities.html">CAPABILITIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.html">GALLERY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
            <div class="side-navigation">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <li><a href="project.html">PROJECTS</a></li>
                      <li class=" dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          ABOUT US
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="our-legacy.html">OUR LEGACY</a>
                        <a class="dropdown-item" href="our-philosophy.html">OUR PHILOSOPHY</a>
                        <a class="dropdown-item" href="our-team.html">OUR TEAM</a>
                      </div>
                  </li>
                  <li><a href="capabilities.html">CAPABILITIES</a></li>
                  <li><a href="gallery.html">GALLERY</a></li>
                  <li><a href="contact.php">CONTACT</a></li>
                  </div>
                  
                  <span onclick="openNav()"><img src="images/homepage/menu.png" alt="menu-icon" class="img-menu-icon"></span>
            </div>
        </nav>
    </div>
	
<!--Contact-->
    <div class="contact">
        <img src="images/contact/lft-contact.png" alt="image" class="contact-side-img img-fluid d-none d-sm-block">
        <img src="images/contact/lft-contact-2.png" alt="image" class="contact-side-img img-fluid d-block d-sm-none">
		<img src="images/contact/rft-contact.png" alt="image" class="contact-rside-img img-fluid">
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 offset-lg-2 offset-md-2 offset-sm-2 offset-0">
                    <div class="contact-para">
                        <p>Let's discuss your project and<br> find the best solution.</p>
						
                    </div>
                </div>
            </div>
            
        <div class="contact-details">
			<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-12 offset-lg-2 offset-md-2 offset-sm-2 offset-0">
			
			<h2 class="contact-title">Contact us</h2>
	<!-- Form Code Start -->
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' enctype="multipart/form-data" accept-charset='UTF-8' class="needs-validation" novalidate >
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text' style="visibility:hidden" class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<!--<div class='short_explanation'>* required fields</div>-->

		  
		<div class="col-sm-12"  >
            <input type="text" name="name" placeholder="Your Full Name" class="frm-testi bdr-btm" id="validationCustom01" required />
         </div>
	  		
		<div class="col-sm-12">
         <input type="email" name="email_address"  placeholder="Email ID:" class="frm-testi bdr-btm" id="validationCustom02" required />
         </div> 
		
		<div class="col-sm-12">
         <input type="text" name="mobile"  placeholder="Contact Number " class="frm-testi bdr-btm" id="validationCustom03" required />
         </div>
		 <div class="col-sm-12">
         <input type="text" name="Location"  placeholder="Location:" class="frm-testi bdr-btm" id="validationCustom04" required />
         </div>
		 <div class="col-sm-12">
		 <!--<br>
			  <label class="control-label paddright" for="textinput">Purpose of Contact</label>  
              <br>-->
						<select type="text" name="Purposre-of-contact" class="frm-testi bdr-btm" required="required"  id="validationCustom05" placeholder="Purpose of Contact">
						<option value="">Purpose of Contact</option>
							<option class="mt">Official  </option>
							<option>Job Requirement </option>
							<option> Project Execution</option>
							<option>Enquiry</option>
							<option>Other</option>
						  
						</select>
						</div>
        
		
         <div class="col-sm-12">
         <textarea name="message" cols="" rows="5" placeholder="Message:" class="frm-testi " required></textarea><br>
		 	 
		<label for='attachment' >Attachment:</label>&nbsp;
			<input type="file" name='attachment' id='attachment' />
		
         </div>
        
	<div class="col-sm-12">
			<div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
			<label for='scaptcha' >Enter the code here:</label>
			<input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>

<!--
			<div class='short_explanation'>Can't read the image?
			<a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
-->
		</div>


		 <div class="col-sm-12 sumbit-topsp">
         <!-- <a class="share-btn" onclick="this.form.submit()" >SHARE &nbsp;&nbsp;<img src="images/icon/right-arrow.png" alt="arrow" class="img-fluid"></a>
       --> <input type="submit" class="btn btn-about" value="SUBMIT   &nbsp; &nbsp; &rarr;"  />
		</div>
	    <br>
		

</form>
</div>
		<div class="col-lg-3 col-md-3 col-sm-3 col-12">
		<p class="addr">B-204, 2nd Floor, ALTIUS, Space Olympia Complex, Sutgirni Chowk, Garkheda, Aurangabad (MH) - 431 005</p>
		<p class="addr"><span class="color-gray">TEL: </span><a href="tel:+91-240-2983055">+91-240-2983055</a></p>
		<p class="addr"><span class="color-gray">EMAIL: </span><a href="mailto:hoabd@shardainfratech.com">hoabd@shardainfratech.com</a><br><a href="mailto:administration@shardainfratech.com">administration@shardainfratech.com</a></p>
		</div>
    </div>
</div>
	<div class="map">
        <img src="images/contact/map-lft.png" alt="bg-image" class="map-lft img-fluid d-none d-sm-block">
	<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-12 offset-lg-2 offset-md-2 offset-sm-2 offset-0">
			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3752.554153134541!2d75.34308291491348!3d19.85880908664366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x3bdba27e4ed4701d%3A0x6a3f089978edef2!2sOlumpus%2C%20Sut%20Girni%20Rd%2C%20Gadia%20Vihar%2C%20Aurangabad%2C%20Maharashtra%20431005!3m2!1d19.8588091!2d75.34527159999999!5e0!3m2!1sen!2sin!4v1591961857427!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-12">
			<p class="map-subtitle">Map</p>
			<h2 class="map-title">Find us</h2>
			<img src="images/contact/contact-btm.png" alt="img" class="map-hr">
			<p class="map-para">Come meet us. We will greet you with a smile, a hot cup of tea, and productive conversation.</p>
			<a href="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3752.554153134541!2d75.34308291491348!3d19.85880908664366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0x3bdba27e4ed4701d%3A0x6a3f089978edef2!2sOlumpus%2C%20Sut%20Girni%20Rd%2C%20Gadia%20Vihar%2C%20Aurangabad%2C%20Maharashtra%20431005!3m2!1d19.8588091!2d75.34527159999999!5e0!3m2!1sen!2sin!4v1591961857427!5m2!1sen!2sin" target="_blank"class="btn btn-about">FIND US <br> ON GOOGLE MAP</a>
			</div>
    </div>
</div>
	</div>		
  
        
     <!--footer-->
     <div class="footer d-none d-sm-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-md-2 col-12">
                    <a href="index.html"><img src="images/homepage/footer-logo.png" alt="footer-logo" class="img-footer-logo"></a>
                </div>
                <div class="col-lg-7 col-md-7 col-md-7 col-12">
                    <div class="footer-link">
                        <ul class="footer-nav">
                            <li class="footer-nav-item">
                                <a class="footer-nav-link" href="our-legacy.html">ABOUT US</a>
                            </li>
                            <li class="footer-nav-item">
                                <a class="footer-nav-link" href="project.html">PROJECTS</a>
                            </li>
                            <li class="footer-nav-item">
                                <a class="footer-nav-link" href="capabilities.html">CAPABILITIES</a>
                            </li>
                            <li class="footer-nav-item">
                                <a class="footer-nav-link" href="gallery.html">GALLERY</a>
                            </li>
                            <li class="footer-nav-item">
                                <a class="footer-nav-link" href="contact.php">CONTACT</a>
                            </li>
                        </ul>
                    </div>
                    <div class="social-icon">
                        <p>Follow Us</p>
                        <ul>
                            <li><a href="https://www.facebook.com/infratech.sharda/" target="_blank"><i class="fab fa-facebook-square"></i></a></li> 
                            <li><a href=" https://www.instagram.com/sharda_infratech/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <!-- <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-md-3 col-12 no-pad">
                    <div class="get-in-touch">
                        <h3>Get in touch</h3>
                        <img src="images/homepage/footer-bottom-line.png" alt="bottom-line" class="footer-line">
                        <p>B-204, 2nd Floor, ALTIUS, Space Olympia Complex, Sutgirni Chowk, Garkheda, Aurangabad <br>(MH) - 431 005</p>
                        <p>Telefax No: <a href="tel:+91-240-2983055">+91-240-2983055</a></p>
                        <p>Email: <a href="mailto:hoabd@shardainfratech.com 
                            " target="_blank">hoabd@shardainfratech.com</a>
                            <a href="mailto:administration@shardainfratech.com 
                            " target="_blank">administration@shardainfratech.com</a></p>
                            
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <p>&copy; 2020 Sharda Infratech. <span class="vertical-line">&vert;</span> DESIGN BY:&nbsp;<a href="https://www.optimist.co.in/" target="_blank">OPTIMIST BRAND DESIGN LLP.</a> </p>
            </div>
        </div>
    </div>
    <!--mobile-footer-->
    <div class="footer d-block d-sm-none">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-md-6 col-6">
                  <a href="index.html"><img src="images/homepage/footer-logo.png" alt="footer-logo" class="img-footer-logo"></a>
              </div>
              <div class="col-lg-3 col-md-3 col-md-3 col-6">
                <div class="social-icon">
                  <ul>
                      <li><a href="https://www.facebook.com/infratech.sharda/" target="_blank"><i class="fab fa-facebook-square"></i></a></li> 
                      <li><a href=" https://www.instagram.com/sharda_infratech/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                      <!-- <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                      <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li> -->
                  </ul>
              </div>
                  <div class="get-in-touch">
                    <p>B-204, 2nd Floor, ALTIUS, Space Olympia Complex, Sutgirni Chowk, Garkheda, Aurangabad <br>(MH) - 431 005</p>
                        <p>Telefax No: <a href="tel:+91-240-2983055">+91-240-2983055</a></p>
                        <p>Email: <a href="mailto:hoabd@shardainfratech.com 
                            " target="_blank">hoabd@shardainfratech.com</a>
                            <a href="mailto:administration@shardainfratech.com 
                            " target="_blank">administration@shardainfratech.com</a></p>
                  </div>
              </div>
          </div>
          <hr>
          <div class="sub-footer">
            <p>&copy; 2020 Sharda Infratech. </p>
            <p>DESIGNED BY:&nbsp;<a href="https://www.optimist.co.in/" target="_blank">OPTIMIST BRAND DESIGN LLP.</a></p> 
        </div>
      </div>
  </div>   


<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<!---->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
 

//    frmvalidator.addValidation("productlist","file_extn=jpg;jpeg;gif;png;bmp","Upload images only. Supported file types are: jpg,gif,png,bmp");

    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>

</script>

<script>
	


$('.palceholder').click(function() {
  $(this).siblings('input').focus();
});
$('.form-control').focus(function() {
  $(this).siblings('.palceholder').hide();
});
$('.form-control').blur(function() {
  var $this = $(this);
  if ($this.val().length == 0)
    $(this).siblings('.palceholder').show();
});
$('.form-control').blur();	
	
		
</script>
	<script>
		window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "0.5% 0.5%";
    document.getElementById("navbar-brand-img").style.width = "48%";
	document.getElementById("navbar-brand-img").style.marginLeft = "20%";
	document.getElementById("navbar-brand-img").style.marginTop = "2%";
  } else {
    document.getElementById("navbar").style.padding = "2% 2%";
    document.getElementById("navbar-brand-img").style.width = "75%";
document.getElementById("navbar-brand-img").style.marginTop = "-5%";
  }
}
    </script>
    <script>
        function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        }
    </script>
		
	  <script type="text/javascript" src="scripts/gen_validatorv31.js"></script>
      <script type="text/javascript" src="scripts/fg_captcha_validator.js"></script>
	  
	  
<script src="assets/bootstrap/jquery-3.2.1.slim.min.js"></script>
<script src="assets/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/all.js"></script>
</body>
</html>
