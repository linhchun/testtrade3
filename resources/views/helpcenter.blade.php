@extends('layouts.app')
 
@section('content')
y>
    <header class="news white">

        <div class="header-bg"></div>
        <div class="container">
            <div class="row">
                <div class="top-header" style="padding-right:0; padding-left:0">
                    <div class="col-md-2 col-sm-2 col-xs-2">
                        <div class="logo">
							<a href="/?a=home">
                                <img src="{{asset('img/header-main.png')}}">
							</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        @include('porfoliohelpmenu');
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-4 text-right">
                        
                        @auth

                        @else
                        <div class="login-register">
                                                  <div class="login"> <a href="/login">Login</a> </div>
                                                  <div class="register"> <a href="/register">Register</a> </div>
                                              </div>
                      @endauth
                        <div class="menu-icon">
                            <svg viewBox="0 0 114.03 93">
                                <g id="menuIcon" viewBox="0 0 114.03 93">
                                    <path d="M297.64,371.67h114m-114,39h114m-114,39h114" transform="translate(-297.64 -364.17)" fill="none" stroke-miterlimit="10" stroke-width="15"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
           
        
<style>
    .icon {
        width: 20px;
        height: 20px;
        vertical-align: middle;
        fill: #7d8fab;
        margin-right: 15px;
        transition: all 0.2s;
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
    }

    .icon:hover {
        fill: #4b6573;
    }



    textarea:focus {
        outline: none !important;
        border-color: #f5ab2b!important;
    }


    .codecx {
        position: absolute;
        width: 88px;
        height: 35px;
        right: 35px;
        top: -moz-calc((100% - 35px)/2);
        top: -webkit-calc((100% - 35px)/2);
        top: calc((100% - 35px)/2);
    }

    .inputcx {
        background: #fff !important;
        border: 1px solid rgba(34, 54, 65, 0.1) !important;
    }

    .inputcx:focus {
        border-color: #f5ab2b!important;
    }

    .inputcx:active {
        border-color: #f5ab2b!important;
    }

</style>

<div class="news-intro">
    <div class="intro-title"> <strong>Support Ticket</strong>
        <div> <span>Help Center</span>
        </div>
    </div>
</div>
</div>
</header>
<section class="news-section" style="background: #232527  url({{asset('img/support-bg.png')}}) no-repeat;background-size: cover">

    <div class="container">
        <div class="inner-content signup-content">
            <div class="signup-steps">
                <div class="inner-content-header">
                    <h2>Contact Us</h2>
                </div>
                <div class="signup-body">
                    <ul class="step-nav" style="justify-content: center;">
                        <li class="complete">
                            <div class="step-icon">
                                <svg style="fill: #fff;" class="icon"><svg id="mail" viewBox="0 0 24 24" width="100%" height="100%">
                                        <path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"></path>
                                    </svg></svg>
                            </div>
                        </li>
                    </ul>
                    <div class="step-holder">
                        <div id="step4" class="step-content active">




                            <div class="row">
                                <div class="col-lg-6">
                                    <h4 style="text-align: left!important;font-size: 17px;">Open a Support Ticket</h4>



<script language=javascript>

function checkform() {
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return false;
}

</script>

<form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16601243247125"><input type="hidden" name="form_token" value="5fc7711299a719946698756bf2a34fe2">
<input type=hidden name=a value=support>
<input type=hidden name=action value=send>

 
<div class="row">
    <div class="col-sm-6" style="width: 100%;">
        <div class="input-holder">
            <input type="text" name="name" value="" placeholder="username"> <span style="font-size: 11px;" class="input-title">username</span>
            <svg class="error-icon" viewBox="0 0 6.34 6.34">
                <g id="alert" viewBox="0 0 6.34 6.34">
                    <path d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z" transform="translate(-27.16 -9.13)" fill=""></path>
                </g>
            </svg>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6" style="width: 100%;">
        <div class="input-holder">
            <input type="text" name="email" value="" placeholder="Your Email"> <span style="font-size: 11px;" class="input-title">Your Email</span>
            <svg class="error-icon" viewBox="0 0 6.34 6.34">
                <g id="alert" viewBox="0 0 6.34 6.34">
                    <path d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z" transform="translate(-27.16 -9.13)" fill=""></path>
                </g>
            </svg>
        </div>
    </div>
</div>


<div class="form-group full-width" style="padding-bottom: 25px;">
    <textarea name="message" placeholder="How can we help?"></textarea>
</div>


 <div class="main-link-holder full-width" style="padding-bottom: 25px;">
     <button class="btn btn--twoPart btn-next">Submit Ticket
         <div>
             <svg style="transform-origin: 0px 0px;" id="arrow" viewBox="0 0 83.82 125.21">
                 <g id="arrowRight" viewBox="0 0 83.82 125.21">
                     <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                 </g>
             </svg>
         </div>
     </button>
 </div>

</form>

</div>
<div class="col-lg-6">
    <h4 style="text-align: left!important;font-size: 17px;">24/7 Support</h4>
    <p style="text-align: justify;">While phemesafetrade.com has put forth efforts to ensure that our clients have a memorable and glitch-free experience with the platform, sometimes, you may face some unexpected challenges. If you do, don’t panic.
        Open a support ticket from below and explain the type of assistance you need. Provide your username, email address, and provide details of your complaint or enquiry. Enter Captcha and click “Submit Ticket” when you are done.
        We guarantee you round the clock support via email to ensure that your needs and concerns are adequately taken care of.
    </p>
    <br>
    <br>
    <div class="contact_address" style="text-align: initial!important">
        <svg class="icon">
            <svg id="mail" viewBox="0 0 24 24" width="100%" height="100%">
                <path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"></path>
            </svg>
        </svg> <a>support@phemesafetrade.com</a>

        <br><br>
        <strong>Phone Support:</strong> +1 (262) 346‑4657
        <br>
        <strong>Office Address:</strong> 3400 McCall Ave Selma, CA 93662 USA<br><br>
    </div>

    </a>
    </li>
    </ul>
</div>
</div>

</div>
</div>
</div>

</div>
</div>

</section>


	

	<style>
	    @media only screen and (max-width: 500px){
.about-content .about-atributies .atributies-holder ul li {
    height: auto !important;
    padding: 10px 10px 10px 20px;
}
}
	</style>
@endsection