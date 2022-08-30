<?php
    header("Content-type: text/css; charset: UTF-8");
    include_once "../../Model/FrontEnd.php";
    $infoFrontEnd = new FrontEnd();
    $infoFrontEnd = $infoFrontEnd->infoFrontEnd();
?>

body {
	font-size: 15px;
    line-height: 1.52;
    color: #717f86;
    font-size: 16px;
	font-family: 'Open Sans', sans-serif;
    font-weight: 400;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
.section-padding{
	padding: 60px 0px;
}
h1, h2, h3, h4, h5, h6{
    font-family: Open Sans, sans-serif;
    font-weight: 700;
    color: #4B4B4C;
}
a{
    color: <?php echo $infoFrontEnd['primary_color']; ?>;
}
a:hover, a:focus{
    color: <?php echo $infoFrontEnd['primary_color']; ?>;
}
/***********************************
Menú
************************************/
.navbar-default .navbar-brand {
    color: <?php echo $infoFrontEnd['primary_color']; ?>;
}
.navbar-default {
    background-color: #ffffff;
}
.course-text{
    padding: 84px;
}
.navbar-default .navbar-nav > li > a {
    color: #1F76BB;
    font-size: 14px;
    font-weight: 700;
}
.navbar-nav > li > a{
	padding: 0px;
	margin: 10px 5px;
	padding: 10px 15px;
}
.navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover
{
	color: <?php echo $infoFrontEnd['primary_color']; ?>;
}

.navbar-nav .active a{
    background: none !important;
    color: <?php echo $infoFrontEnd['primary_color']; ?> !important;
    outline: none;
}

.btn-trial a{
	background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
	border-radius: 25px;
	color: #ffffff !important;
	border: 1px solid <?php echo $infoFrontEnd['primary_color']; ?>;
}
.btn-trial a:hover, .btn-trial a:focus{
	border: 1px solid <?php echo $infoFrontEnd['primary_color']; ?>;
	background-color: #fff;
	color: <?php echo $infoFrontEnd['primary_color']; ?> !important;
}
.navbar-default .navbar-brand {
    font-family: 'Dosis', sans-serif !important;
    font-weight: 700;
    text-transform: uppercase;
    padding: 0px;
    height: inherit;
    font-size: 36px;
    margin: 20px 0px;
}
.navbar-default .navbar-brand span{
	font-weight: 100 !important;
}
.navbar {
    margin-bottom: 0px;
}
.padding-zero{
	padding: 0px;
}
.mart20{
	margin-top: 20px;
}
/***********************************
Banner
************************************/
.banner{
	background: url('/<?php echo $infoFrontEnd['slider_img']; ?>') no-repeat center top;
    background-size: cover;
	min-height: 580px;
    position: relative;
}
.bg-color{
	background-color: RGBA(12, 11, 11, 0.82);
	min-height: 580px;
}
.text-dec{
	font-size: 24px;
	padding: 10px 20px;
    margin: 15px 0;
	text-transform: uppercase;
    color: #fff;
}
.text-border{
	border: 5px solid <?php echo $infoFrontEnd['primary_color']; ?>;
	display: inline-block;
	margin-top: 150px;
}
.intro-para{
	font-family: 'Alegreya Sans', sans-serif;
	font-size: 45px;
	color: #fff;
	margin-top: 30px;
}

.modal-dialog {
    width: 600px;
    margin: 150px auto;
}
.mouse {
    width: 25px;
    height: 45px;
    border: 2px solid #fff;
    position: absolute;
    bottom: 40px;
    left: 50%;
    margin-left: -12.5px;
    border-radius: 12px;
}
@-webkit-keyframes rotateplane {
    0%   {top:10px;}
    25%  {top:14px;}
    50%  {top:19px;}
    75%  {top:24px;}
    100% {top:28px;}
}
@-moz-keyframes rotateplane {
    0%   {top:10px;}
    25%  {top:14px;}
    50%  {top:19px;}
    75%  {top:24px;}
    100% {top:28px;}
}
@-o-keyframes rotateplane {
    0%   {top:10px;}
    25%  {top:14px;}
    50%  {top:19px;}
    75%  {top:24px;}
    100% {top:28px;}
}
.mouse::after {
    content: "";
    position: absolute;
    height: 5px;
    width: 5px;
    background-color: #fff;
    border-radius: 100%;
    left: 50%;
    top:10px;
    margin-left: -2.5px;
    transition:all 0.3s ease-in;

     -webkit-animation-name: rotateplane; /* Chrome, Safari, Opera */
    -webkit-animation-duration: 2s; /* Chrome, Safari, Opera */
    animation-name: rotateplane;
    animation-duration: 2s;
    animation-iteration-count: infinite;
}
.modal-content h4 {
    font-size: 1.5em;
    font-weight: 700;
}
.login-box-body {
    padding: 15px 30px;
}
.login-box-msg, .register-box-msg {
    margin: 0px;
    text-align: center;
    padding: 0px 20px 20px;
}
.modal-sm {
    width: 400px;
}
.padleft-right{
    padding-left: 5px;
    padding-right: 0px;
}
.big-text{
    font-size: 35px;
}
.small-text{
    font-size: 16px;
}
.quote .btn{
    background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
    color: #fff;
    -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  margin-top: 10px;
}
.quote .btn:hover, .quote .btn:focus{
    background-color: #fff;
    color: <?php echo $infoFrontEnd['primary_color']; ?>;
    border-color: #fff;
     -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
/***********************************
Características
************************************/
h2{
	font-size: 24px;
	padding-bottom: 15px;
}
.bottom-line{
	width: 25px;
	height: 3px;
	background-color: rgb(99, 122, 145);
}
.fea{
	margin-top: 25px;
}
.fea-img {
  width: 20%;
}
.heading {
    width: 80%;
}
.fea i {
    font-size: 39px;
    color: <?php echo $infoFrontEnd['primary_color']; ?>;
    margin-top: 7px;
}
.heading h4 {
    font-size: 17px;
    line-height: 1.25;
    font-weight: 700;
    color: #000;
    margin: 10px 0px;
    text-align: left;
}
.heading p {
  text-align: left;
}
/***********************************
 Organisations
************************************/
#organisations{
    background-color: rgb(247, 247, 247);
}
.orga-stru
{
    background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
    width: 109px;
    height: auto;
    padding: 10px 10px 25px 10px;
    text-align: center;
    border-radius: 0px 80px 99px 99px;
    -moz-border-radius: 0px 80px 99px 99px;
    -webkit-border-radius: 0px 80px 99px 99px;
    -o-border-radius: 0px 80px 99px 99px;
}
.orga-stru h3 {
    font-size: 36px;
    color: white;
    font-weight: bold;
}
.orga-stru p {
    font-size: 14px;
    color: white;
    font-weight: normal;
    line-height: 20px;
    padding-top: 15px;
}
.orga-stru i
{
    font-size: 100px;
    margin-top: 35px;
    color: rgb(255, 255, 255);
}
h3.det-txt {
    font-size: 40px;
    font-weight: bold;
    text-transform: uppercase;
}
h4.sm-txt {
    color: <?php echo $infoFrontEnd['primary_color']; ?>;
    font-size: 24px;
}
p.det-p {
    padding: 40px 0px;
}
#pricing{
    background: rgb(247, 247, 247);
}
/***********************************
Newsletter
************************************/
#cta-2{
    padding: 100px 0;
}
.cta-2-txt {
    font-size: 24px;
    padding-bottom: 15px;
    text-align: center;
    margin: 0 auto;
    line-height: 34px !important;
}
.cta-2-form input[type="email"] {
    border: 0px solid #CCC;
    padding: 13px 40px;
    font-size: 18px;
    color: #2b5d83;
    font-weight: 100;
    min-width: 280px;
    margin-left: -4px;
    margin-bottom: 2px;
    border: 1px solid <?php echo $infoFrontEnd['primary_color']; ?>;
    background-color: rgb(247, 247, 247);
    border-radius: 30px 0px 0px 30px;
}
.cta-2-form-submit-btn {
    font-size: 18px;
    text-transform: capitalize;
    color: #fff;
    background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
    border: 2px solid #fff;
    padding: 14px 30px;
    margin-left: -4px;
    transition: all 0.3s;
    -moz-transition: all 0.3s;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    border-width: 1px 1px 1px 0px;
    border-radius: 0px 30px 30px 0px;
}
/***********************************
Work Shop
************************************/
#work-shop {
    background-color: rgb(247, 247, 247);
}
.service-box{
    background: #fff;
    padding: 60px 30px 80px;
    box-shadow: 0px 0px 1px 1px rgba(0,0,0,0.1);
}
.icon-box i {
    color: <?php echo $infoFrontEnd['primary_color']; ?>;
    font-size: 65px;
}
.ser-text {
    font-size: 24px;
}
.icon-box, .icon-text {
    padding: 20px 0px 0px;
}
/***********************************
Mentor Team
************************************/
.pm-staff-profile-image{
  width: 150px;
  height: 150px;
  background-color: #C6C6C6;
  border-radius: 50%;
  display: inline-block;
}
.pm-staff-profile-details {
    padding: 20px 20px;
}
.pm-staff-profile-name {
    font-size: 24px;
    text-transform: capitalize;
    color: #2b5d83;
}
.pm-staff-profile-title {
    text-transform: capitalize;
    color: #4b4b4b;
    font-weight: 500;
    padding: 12px 0px;
}
.pm-staff-profile-bio {
  text-transform: capitalize;
  color: #4b4b4b;
  font-weight: 100;
}
/***********************************
Testimonial
************************************/
#testimonial{
    background-color: #1F76BB;
}
.bg-white{
    background-color: #fff !important;
}
.text-comment{
  background-color: rgb(255, 255, 255);
  padding: 20px;
}
.text-par{
  font-size: 20px;
  padding-bottom: 15px;
}
/***********************************
Course
************************************/
[class*=" imghvr-"] figcaption, [class^="imghvr-"] figcaption {
    background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
}
[class*=" imghvr-"], [class^="imghvr-"] {
    background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
    color: #fff;
}
/***********************************
Price Table
************************************/
.price-table {
    box-shadow: 0px 0px 1px 0px RGBA(0, 0, 0, 0.4);
    position: relative;
}
.price-table .pricing-head {
    background: #fff;
    padding: 40px;
    text-align: center;
}
.price-table .pricing-head h4 {
    font-size: 22px;
    color: #232c3b;
    margin-top: 0px;
    letter-spacing: 1px;
    border-bottom: 1px solid #232c3b;
    padding-bottom: 20px;
}
.pricing-head .amount {
    font-size: 60px;
    font-weight: bold;
}
.pricing-head .curency {
    display: inline-block;
    position: relative;
    top: -30px;
    font-size: 20px;
}
.price-in {
    background: #fff;
    text-align: center;
}
.btn-bg {
    border: 0px;
    border-radius: 0px;
    color: #fff !important;
    padding: 20px 0px;
    font-weight: bold !important;
    font-size: 14px;
    background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
}
/***********************************
Contact Us
************************************/
.contact form .form {
    width: 100%;
    height: auto;
    padding: 15px 15px 12px;
    font-size: 18px;
    margin-bottom: 18px;
    color: #7f7f7f;
    letter-spacing: 0.5px;
}
#contact .form-control {
    background: #fafafa;
    border: 1px solid rgba(119, 81, 81, 0.34);
    width: 100%;
	margin-bottom: 15px;
    border-radius: 0;

}
.textarea {
    height: 228px;
    max-width: 100%;
    max-height: 229px;
}
.light {
    font-weight: 100;
}
.white{
    color: #fff !important;
}

.validation {
    color: red;
    display:none;
    margin: 0 0 20px;
    font-weight:400;
    font-size:13px;
}

#sendmessage {
    color: green;
    border:1px solid green;
    display:none;
    text-align:center;
    padding:15px;
    font-weight:600;
    margin-bottom:15px;
}

#errormessage {
    color: red;
    display:none;
    border:1px solid red;
    text-align:center;
    padding:15px;
    font-weight:600;
    margin-bottom:15px;
}

#sendmessage.show, #errormessage.show, .show {
	display:block;
}
/***********************************
Footer
************************************/
.footer {
    padding: 2px 0 20px;
    background: #111;
    color: #ccc;
}
.footer a {
    color: #fff;
}

.footer h3{
	font-weight: 300;
	letter-spacing: 0.05em;
	margin: 0 0 40px;
	font-size: 24px;
}
.footer .form-control {
    border-radius: 30px;
    border: none;
    background: rgba(255,255,255,.1);
    padding-left: 30px;
    color: #e5e6e7;
    margin-bottom: 0;
    height: 48px;
}
.footer .social-links li a {
    color: #fff;
    font-size: 32px;
    line-height: 50px;
    border-radius: 50%;
    text-align: center;
    -webkit-transition: all .3s ease-out;
    transition: all .3s ease-out;
}
.footer .social-links li {
    display: inline-block;
    margin: 0 25px 25px;
    -webkit-transition: all .3s ease-out;
    transition: all .3s ease-out;
}
.footer .mc-trial {
    margin: 20px 0;
}
.footer .social-links {
    list-style: none;
    padding: 0;
    margin: 30px 0 40px;
    padding: 40px 0 0;
    border-bottom: 1px solid rgba(255,255,255,0.2);
}
.btn-submit:hover, .btn-submit:focus{
    background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
    color: #fff;
}
.btn-submit{
	padding: 14px 12px;
	border-radius: 50px;
	text-transform: uppercase;
    background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
    color: #fff;
}
.btn-submit i{
	padding-left: 8px;
}

.btn-sec {
    margin-top: 20px;
}
.ser-btn {
    padding: 10px 18px;
    border: 0px;
    background-color: #222935;
    color: #fff;
    border-radius: 3px;
    display: inline-block;
    margin-bottom: 20px;
}
.mem-info{
    padding: 45px 10px 0px;
    background-color: #eee;
}
.mem-info h4 {
    font-size: 18px;
    padding: 10px 0px;
}
.mem-info h3{
    font-size: 24px;
    padding: 15px 0px;
}
.mem-info h5
{
    margin-top: 10px;
    margin-bottom: 10px;
}
.mem-info p {
    margin: 0 0 10px;
}
.agent-social li {
    display: inline-block;
    padding: 0px 10px 0px 0px;
    margin-bottom: 10px;
}
.btn {
    padding: 10px 20px;
}
.light-form-button{
    background: <?php echo $infoFrontEnd['primary_color']; ?>;
    border: 1px solid rgba(119, 81, 81, 0.34);
    width: 24%;
    padding: 10px 10px;
    margin-bottom: 15px;
    color: #fff;
    border: 1px solid rgba(119, 81, 81, 0.34);
    width: 24%;
    margin-bottom: 15px;
     -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
.btn-green, .btn-green:hover{
    background-color: <?php echo $infoFrontEnd['primary_color']; ?>;
    color: #fff;
}
.footer .form-control:focus{
    box-shadow: none;
}
/***********************************
************************************
Responsive media queries
************************************
***********************************/
@media (min-width: 769px) and (max-width: 980px) {
    .ser-text {
    font-size: 20px;
    }
    .service-box, .feature-info, .orga-stru{
        margin-bottom: 30px;
    }
    .pricing-head .amount {
    font-size: 51px;
    }
    .price-table .pricing-head h4 {
    font-size: 18px;
    }
}
@media (min-width: 451px) and (max-width: 768px) {
    .ser-text {
    font-size: 20px;
    }
    .service-box, .feature-info{
        margin-bottom: 30px;
    }

    .pricing-head .amount {
    font-size: 51px;
    }
    .price-table .pricing-head h4 {
    font-size: 18px;
    }
}
@media (min-width: 20px) and (max-width: 450px) {
    .text-dec {
    font-size: 20px;
    }
    .big-text {
    font-size: 30px;
    }
    .small-text {
    font-size: 14px;
    }
    .intro-para {
    font-size: 30px;
    }
    .header-section p{
        font-size: 14px;
    }
    .heading {
    margin-bottom: 20px;
    }
    .orga-stru i {
    font-size: 72px;
    }
    .orga-stru {
    padding: 5px 5px 15px 5px;
    width: 55px;
    margin-bottom: 20px;
    }
    .orga-stru h3 {
    font-size: 28px;
    }
    .orga-stru p {
    font-size: 13px;
    }
    h3.det-txt {
    font-size: 28px;
    }
    .cta-2-txt {
    font-size: 20px;
    }
    .service-box, .text-comment, .price-table{
        margin-bottom: 30px;
    }
    .contact-form-button{
        width: 40%;
    }
    .footer .social-links li {
    margin: 0 5px 25px;
    }
    .cta-2-form-submit-btn {
    font-size: 10px;
    }
    .cta-2-form input[type="email"] {
    padding: 13px 10px;
    font-size: 10px;
    min-width: 187px;
    }
    .modal-sm {
    width: 300px;
    }
    .login-box-body {
    padding: 15px 20px;
    }
    .navbar-default .navbar-brand{
        margin-left: 10px;
    }
    .navbar-default .navbar-nav > li > a{
        text-align: center;
    }
}
