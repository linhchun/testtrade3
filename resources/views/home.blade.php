@extends('layouts.app')
 
@section('content')

<header class="home main-header">
    <div class="image-layer" style="background-image:url({{asset('img/3.jpg')}});"></div>
    <div class="shape-1"></div>
    <div class="shape-2"></div>
                            
    <div class="container">
        <div class="row">
            <div class="top-header" style="padding-right:0; padding-left:0">
                <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="logo">
                        <a href="/"> <img src="{{asset('img/header-main.png')}}"> </a>
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
          
        <div class="home-intro" style="float:left"> <span class="welcome">Join in with the thrilling team of phemesafetrade.com</span>
            <h1 class="page-title" style="font-size: 24px">The way to the future of investing online with safety, security and satisfaction ensured.</h1>
            <p class="page-desc"> Investing online is now simple, comfortable and fun. With a team of experts, we ensure your safety sits on top of the priority list. We use highly proven, safe and modern strategies and methods, allowing investors to make money without any risk whatsoever. </p>
            <a style="width: initial;" class="btn btn--white btn--twoPart" href="/helpcenter"> <span>How phemesafetrade.com can help?</span>
                <div>
                    <svg id="arrow" viewBox="0 0 83.82 125.21">
                        <g id="arrowRight" viewBox="0 0 83.82 125.21">
                            <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                        </g>
                    </svg>
                </div>
            </a>
        </div>
        <div class="home-intro" style="float:right;text-align:right;margin-top: 225px;"> <img src="{{asset('img/bonus.png')}}" style="    width: 290px;
position: absolute;
top: -192px;right:-40px"> <span style="background:#FFAA17;padding:6px 30px" class="welcome">
        <b>$10 SIGNUP BONUS </b> For the first 10,000 INVESTORS <center>
          <br>
          <strong>
            <a href="#">
              <span style="color: #ffffff;">Check terms and conditions here </span></a>
       </strong>
            </center>
        </span></div>
    </div>
        
</header>
<section class="facts-section alternate">
    <div class="auto-container">
        <div class="inner-container">
            <!-- Fact Counter -->
            <div class="fact-counter">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box"> <span class="count-text">787</span> </div>
                                <div class="counter-title">Running Days</div>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box alternate"> <span class="count-text">$955,013+</span> </div>
                                <div class="counter-title">Total Deposit</div>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box"> <span class="count-text">$1,274,318+</span> </div>
                                <div class="counter-title">Total Withdraw</div>
                            </div>
                        </div>
                    </div>
                    <!--Column-->
                    <div class="column counter-column col-lg-3 col-md-6 col-sm-12">
                        <div class="inner">
                            <div class="content">
                                <div class="count-outer count-box"> <span class="count-text">568+</span> </div>
                                <div class="counter-title">Total Investors</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main--content">
    <div class="about--content">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Join a changing world <span class="caption">IN THREE EASY STEPS</span>
          </h2>
                    <p>Welcome to the era of offshore companies, the leading names in the global financial industry. phemesafetrade.com, a United States-based and registered company, is poised to make a lasting impact in the global financial industry as an offshore company.</p>
                    <p>After working in the background for years, we decided to contribute to the online field after extensive market research and internal discussion.
                        <br> It's our little way of achieving our organizational goals. </p>
                </div>
                <div class="col-md-6">
                    <div class="about-page__box">
                        <a class="cab-logo">
                            <div class="cab-logo__icon"> <img src="{{asset('img/about_logo.png')}}" alt="logo"> </div>
                        </a>
                        <div class="about-page__box-text">
                            <p>phemesafetrade.com
                                <br>Registred USA Company Number #13378232 </p> <a href="#" target="_blank" style="color: #ffd834;min-width: 115px;">More information ></a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="get-started"> <span id="started-caption">Start the future today.</span> <a href="/login" class="btn btn--dark"> Get Started </a> </div>
    </div>
    </div>
    <div class="rxava-video">
        <div class="container">
            <div class="video-content">
                <div class="presentation">VIDEO PRESENTATION
                    <svg viewBox="0 0 27.68 17.03">
                        <g id="video-icon" viewBox="0 0 27.68 17.03">
                            <path d="M562.83,693.3v13h-8.16a6.52,6.52,0,1,1,0-13h8.16m2-2H554.67a8.52,8.52,0,1,0,0,17h10.16v-17Z" transform="translate(-546.15 -691.3)" fill="#fed830"></path>
                            <path d="M571.83,694.73v10.18h-2.07l-4.09-4.1a1.41,1.41,0,0,1,0-2l4.09-4.09h2.07m2-2h-4.89l-.59.59-4.09,4.09a3.41,3.41,0,0,0,0,4.82l4.09,4.09.59.59h4.89V692.73Z" transform="translate(-546.15 -691.3)" fill="#fed830"></path>
                        </g>
                    </svg>
                </div>
                <div class="preview-video">
                    <button id="play-video" class="btn btn--arrow btn--green">
                        <video width="400" controls>
                            <source src="styles/pheme.mp4" type="video/mp4"> </video>
                        <svg id="arrow" viewBox="0 0 26.4 30.48">
                            <g id="arrow" viewBox="0 0 26.4 30.48">
                                <polygon points="0 0 0 30.48 26.4 15.24 26.4 15.24 0 0"></polygon>
                            </g>
                        </svg>
                    </button>
                </div> <span>Watch the presentation video</span>
                <h3>Which will help you to understand the idea behind phemesafetrade.com</h3> </div>
        </div>
    </div>
    <section class="services-content">
        <div class="basic-membership" style="margin-top:50px">
            <div class="container">
                <div class="basic-title">
                    <h4>INVESTMENT PLANS</h4> </div>
                <div class="basic-plans">
                    <div id="starter" class="plan-item basic p-one">
                        <div class="plan-item-type">Premium Plan</div>
                        <div class="plan-item-detail"> <strong class="profit-rate">5.0%</strong>After <span> 24 Hours</span>
                            <BR>Minimum - $500 </div>
                        <div class="referral-compound">
                            <div class="referral">4% Referral Commission</div>
                            <div class="compound">Principal Included</div>
                            <br> <b></b> </div>
                        <svg class="wave-svg" viewBox="0 0 620.66 123.81">
                            <defs>
                                <linearGradient id="linear-gradient-starter" x1="-1" y1="87.02" x2="618.66" y2="87.02" gradientTransform="matrix(1, 0, 0, -1, 0, 126)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.16" stop-color="#9ab0bd" stop-opacity="0" />
                                    <stop offset="0.58" stop-color="#27404f" />
                                    <stop offset="0.98" stop-color="#9ab0bd" stop-opacity="0" /> </linearGradient>
                                <linearGradient id="linear-gradient-starter-2" x1="0" y1="87.02" x2="619.66" y2="87.02" xlink:href="#linear-gradient-starter" />
                                <linearGradient id="linear-gradient-starter-3" x1="308.93" y1="97.85" x2="308.93" y2="2.59" gradientTransform="matrix(1, 0, 0, -1, 0, 126)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#9ab0bd" />
                                    <stop offset="1" stop-color="#9ab0bd" stop-opacity="0" /> </linearGradient>
                                <linearGradient id="linear-gradient-starter-4" x1="386.38" y1="61.45" x2="386.38" y2="109.77" gradientTransform="matrix(1, 0, 0, -1, 1, 126)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fff" />
                                    <stop offset="1" stop-color="#b3c2ce" /> </linearGradient>
                                <filter id="NewFilter" name="NewFilter">
                                    <feGaussianBlur stdDeviation="3" in="SourceGraphic" /> </filter>
                            </defs>
                            <title>basic6</title>
                            <g id="Curve">
                                <path class="clBasic1" d="M-.8,23.72c64.4,18.14,108.42,23.08,257.13.38C369.8,6.78,390.14,67.75,484.14,55.28,556,45.75,593.43,21.5,618.66,21.5" transform="translate(1)" fill="none" stroke-miterlimit="10" stroke-width="1.5" opacity="0.6" stroke="url(#linear-gradient-starter)" style="isolation: isolate" />
                                <path class="clBasic" d="M.2,23.72c64.4,18.14,108.42,23.08,257.13.38C370.8,6.78,391.14,67.75,485.14,55.28,557,45.75,594.43,21.5,619.66,21.5" transform="translate(1)" fill="none" stroke-miterlimit="10" stroke-width="1.5" opacity="0.6" stroke="url(#linear-gradient-starter-2)" style="isolation: isolate" />
                                <path d="M.74,24.71-.8,123.81H617.8s.86-83.65.86-101.31c-25.17,0-62.47,24.19-134.18,33.7C390.68,68.63,370.42,7.81,257.23,25.09,108.89,47.74,65,42.81.74,24.71Z" transform="translate(1)" opacity="0.15" fill="url(#linear-gradient-starter-3)" style="isolation: isolate" /> </g>
                            <g id="Circle">
                                <circle class="c4" id="Ellipse_1_copy_10" data-name="Ellipse 1 copy 10" cx="387.38" cy="40.39" r="24.16" fill="url(#linear-gradient-starter-4)" />
                                <g class="c4" opacity="0.6" filter="url(#NewFilter)">
                                    <circle id="Ellipse_1_copy_10-3" data-name="Ellipse 1 copy 10-3" cx="387.36" cy="50.11" r="14.11" fill="#a0c6d4" />
                                    <rect x="360.45" y="23.19" width="53.84" height="53.84" fill="#a0c6d4" opacity="0" /> </g>
                                <circle class="c3" id="Ellipse_1_copy_10-2" data-name="Ellipse 1 copy 10-2" cx="387.89" cy="40.92" r="40.42" fill="none" stroke="#27404f" opacity="0.15" style="isolation: isolate" />
                                <circle class="c2" id="Ellipse_1_copy_10-3-2" data-name="Ellipse 1 copy 10-3-2" cx="387.36" cy="40.39" r="14.11" fill="#27404f" />
                                <circle class="c1" id="Ellipse_1_copy_10-4" data-name="Ellipse 1 copy 10-4" cx="387.35" cy="40.44" r="5.81" fill="#f5ab2b" />
                                <g class="c1" opacity="0.68" filter="url(#NewFilter)">
                                    <circle id="Ellipse_1_copy_10-4-2" data-name="Ellipse 1 copy 10-4-2" cx="387.35" cy="46.25" r="5.81" fill="#f5ab2b" />
                                    <rect x="373.09" y="31.99" width="28.52" height="28.52" fill="#f5ab2b" opacity="0" /> </g>
                            </g>
                        </svg>
                    </div>
                    <div id="starter" class="plan-item basic p-two">
                        <div class="plan-item-type">Mining Plan</div>
                        <div class="plan-item-detail"> <strong class="profit-rate">50.0%</strong>After <span>4 Days</span>
                            <BR>Minimum - $2000 </div>
                        <div class="referral-compound">
                            <div class="referral">5% Referral Commission</div>
                            <div class="compound">Principal Included</div>
                            <br> <b></b> </div>
                        <svg class="wave-svg" data-name="Layer 1" viewBox="0 0 519.45 134.63">
                            <defs>
                                <linearGradient id="linear-gradient-general" x1="260.26" y1="1.37" x2="260.26" y2="117.41" gradientTransform="matrix(1, 0, 0, -1, 0, 136)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#daf4ff" stop-opacity="0" />
                                    <stop offset="1" stop-color="#daf4ff" /> </linearGradient>
                                <linearGradient id="linear-gradient-general-2" y1="81.2" x2="516.63" y2="81.2" gradientTransform="matrix(1, 0, 0, -1, 0, 136)" gradientUnits="userSpaceOnUse">
                                    <stop offset="0.01" stop-color="#fff" stop-opacity="0" />
                                    <stop offset="0.33" stop-color="#f5ab2b" />
                                    <stop offset="0.87" stop-color="#fff" stop-opacity="0" /> </linearGradient>
                                <linearGradient id="linear-gradient-general-3" x1="1" y1="81.2" x2="517.63" y2="81.2" xlink:href="#linear-gradient-general-2" />
                                <filter id="NewFilter" name="NewFilter">
                                    <feGaussianBlur stdDeviation="3" in="SourceGraphic" /> </filter>
                            </defs>
                            <g id="Curve">
                                <path d="M518.16,34.63l1.29,100H1.8s-.72-70-.72-84.77c21.06,0,48.9-23.6,94.45-30.11C166.59,9.61,230.29,68.89,292,84,418.37,114.9,441.87,34.63,518.16,34.63Z" opacity="0.1" fill="url(#linear-gradient-general)" style="isolation: isolate" />
                                <path class="clBasic" d="M0,49.84c21,0,48.86-23.57,94.37-30.08C165.36,9.62,229,68.84,290.69,83.93c126.24,30.88,149.72-49.31,225.94-49.31" fill="none" stroke-miterlimit="10" stroke-width="1.5" stroke="url(#linear-gradient-general-2)" />
                                <path class="clBasic1" d="M1,49.84c21,0,48.86-23.57,94.37-30.08C166.36,9.62,230,68.84,291.69,83.93c126.24,30.88,149.72-49.31,225.94-49.31" fill="none" stroke-miterlimit="10" stroke-width="1.5" stroke="url(#linear-gradient-general-3)" /> </g>
                            <g id="Circle">
                                <g>
                                    <circle class="c4" id="Ellipse_1_copy_7" data-name="Ellipse 1 copy 7" cx="182.13" cy="35.5" r="22.5" fill="#9fc8d1" opacity="0.3" style="isolation: isolate" />
                                    <circle class="c3" id="Ellipse_1_copy_8" data-name="Ellipse 1 copy 8" cx="182.2" cy="35.62" r="35.12" fill="none" stroke="#fff" opacity="0.3" style="isolation: isolate" />
                                    <g class="c4" opacity="0.34" filter="url(#NewFilter)">
                                        <circle id="Ellipse_1_copy_7-2" data-name="Ellipse 1 copy 7-2" cx="182.2" cy="46.42" r="12.25" fill="#a0c6d4" />
                                        <rect x="154.82" y="19.11" width="54.63" height="54.62" fill="#a0c6d4" opacity="0" /> </g>
                                    <circle class="c2" id="Ellipse_1_copy_7-2-2" data-name="Ellipse 1 copy 7-2-2" cx="181.73" cy="35.17" r="12.25" fill="#fff" />
                                    <circle class="c1" id="Ellipse_1_copy_7-3" data-name="Ellipse 1 copy 7-3" cx="181.78" cy="34.68" r="5.06" fill="#f5ab2b" />
                                    <g class="c1" opacity="0.7" filter="url(#NewFilter)">
                                        <circle id="Ellipse_1_copy_7-3-2" data-name="Ellipse 1 copy 7-3-2" cx="181.71" cy="40.55" r="4.06" fill="#f5ab2b" />
                                        <rect x="172.43" y="31.27" width="18.57" height="18.57" fill="#f5ab2b" opacity="0" /> </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="basic-plans">
                        <div id="starter" class="plan-item basic p-one">
                            <div class="plan-item-type">Gold Pack Plan</div>
                            <div class="plan-item-detail"> <strong class="profit-rate">100.0%</strong>After <span> 7 Days</span>
                                <BR>Minimum - $5000 </div>
                            <div class="referral-compound">
                                <div class="referral">5% Referral Commission</div>
                                <div class="compound">Principal Included</div>
                                <br> <b></b> </div>
                            <svg class="wave-svg" viewBox="0 0 620.66 123.81">
                                <defs>
                                    <linearGradient id="linear-gradient-starter" x1="-1" y1="87.02" x2="618.66" y2="87.02" gradientTransform="matrix(1, 0, 0, -1, 0, 126)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0.16" stop-color="#9ab0bd" stop-opacity="0" />
                                        <stop offset="0.58" stop-color="#27404f" />
                                        <stop offset="0.98" stop-color="#9ab0bd" stop-opacity="0" /> </linearGradient>
                                    <linearGradient id="linear-gradient-starter-2" x1="0" y1="87.02" x2="619.66" y2="87.02" xlink:href="#linear-gradient-starter" />
                                    <linearGradient id="linear-gradient-starter-3" x1="308.93" y1="97.85" x2="308.93" y2="2.59" gradientTransform="matrix(1, 0, 0, -1, 0, 126)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#9ab0bd" />
                                        <stop offset="1" stop-color="#9ab0bd" stop-opacity="0" /> </linearGradient>
                                    <linearGradient id="linear-gradient-starter-4" x1="386.38" y1="61.45" x2="386.38" y2="109.77" gradientTransform="matrix(1, 0, 0, -1, 1, 126)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#fff" />
                                        <stop offset="1" stop-color="#b3c2ce" /> </linearGradient>
                                    <filter id="NewFilter" name="NewFilter">
                                        <feGaussianBlur stdDeviation="3" in="SourceGraphic" /> </filter>
                                </defs>
                                <title>basic6</title>
                                <g id="Curve">
                                    <path class="clBasic1" d="M-.8,23.72c64.4,18.14,108.42,23.08,257.13.38C369.8,6.78,390.14,67.75,484.14,55.28,556,45.75,593.43,21.5,618.66,21.5" transform="translate(1)" fill="none" stroke-miterlimit="10" stroke-width="1.5" opacity="0.6" stroke="url(#linear-gradient-starter)" style="isolation: isolate" />
                                    <path class="clBasic" d="M.2,23.72c64.4,18.14,108.42,23.08,257.13.38C370.8,6.78,391.14,67.75,485.14,55.28,557,45.75,594.43,21.5,619.66,21.5" transform="translate(1)" fill="none" stroke-miterlimit="10" stroke-width="1.5" opacity="0.6" stroke="url(#linear-gradient-starter-2)" style="isolation: isolate" />
                                    <path d="M.74,24.71-.8,123.81H617.8s.86-83.65.86-101.31c-25.17,0-62.47,24.19-134.18,33.7C390.68,68.63,370.42,7.81,257.23,25.09,108.89,47.74,65,42.81.74,24.71Z" transform="translate(1)" opacity="0.15" fill="url(#linear-gradient-starter-3)" style="isolation: isolate" /> </g>
                                <g id="Circle">
                                    <circle class="c4" id="Ellipse_1_copy_10" data-name="Ellipse 1 copy 10" cx="387.38" cy="40.39" r="24.16" fill="url(#linear-gradient-starter-4)" />
                                    <g class="c4" opacity="0.6" filter="url(#NewFilter)">
                                        <circle id="Ellipse_1_copy_10-3" data-name="Ellipse 1 copy 10-3" cx="387.36" cy="50.11" r="14.11" fill="#a0c6d4" />
                                        <rect x="360.45" y="23.19" width="53.84" height="53.84" fill="#a0c6d4" opacity="0" /> </g>
                                    <circle class="c3" id="Ellipse_1_copy_10-2" data-name="Ellipse 1 copy 10-2" cx="387.89" cy="40.92" r="40.42" fill="none" stroke="#27404f" opacity="0.15" style="isolation: isolate" />
                                    <circle class="c2" id="Ellipse_1_copy_10-3-2" data-name="Ellipse 1 copy 10-3-2" cx="387.36" cy="40.39" r="14.11" fill="#27404f" />
                                    <circle class="c1" id="Ellipse_1_copy_10-4" data-name="Ellipse 1 copy 10-4" cx="387.35" cy="40.44" r="5.81" fill="#f5ab2b" />
                                    <g class="c1" opacity="0.68" filter="url(#NewFilter)">
                                        <circle id="Ellipse_1_copy_10-4-2" data-name="Ellipse 1 copy 10-4-2" cx="387.35" cy="46.25" r="5.81" fill="#f5ab2b" />
                                        <rect x="373.09" y="31.99" width="28.52" height="28.52" fill="#f5ab2b" opacity="0" /> </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="basic-description">
                    <h1>STARTER PLANS</h1>
                    <p>phemesafetrade.com offers two Starter Plans. These are (Premium Plan) and (Mining Plan).
                        <br>
                        <br> <strong>Premium Plan:</strong> The Premium Plan offers a 5% return on investment after 24hours. For each referral you make, you earn a 4% referral commission outside your daily returns.Note that your daily profit includes your principal
                        <br>
                        <br> <strong>Mining Plan:</strong> You can earn 50% after 4days if you invest in Mining Plan. That aside from the 5% referral commission for each person you refer to our company. Note that your daily profit includes your principal
                        <br>
                        <br> <strong>Gold Pack Plan:</strong> You can earn 100% after 7days if you invest in Gold pack Plan. That aside from the 5% referral commission for each person you refer to our company. Note that your daily profit includes your principal </p>
                    <br> </div>
            </div>
        </div>
        <br> <b></b> </div>
        <svg class="wave-svg" viewBox="0 0 507.5 238.43">
            <defs>
                <linearGradient id="linear-gradient-plan2" y1="169.26" x2="507.51" y2="169.26" gradientTransform="matrix(1, 0, 0, -1, 0, 240)" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#ba8950" stop-opacity="0" />
                    <stop offset="0.25" stop-color="#fff" />
                    <stop offset="0.86" stop-color="#ba8950" stop-opacity="0" /> </linearGradient>
                <linearGradient id="linear-gradient-plan2-3" x1="253.46" y1="1.57" x2="253.46" y2="207.83" gradientTransform="matrix(1, 0, 0, -1, 0, 240)" gradientUnits="userSpaceOnUse">
                    <stop offset="0" stop-color="#e7d1b5" stop-opacity="0" />
                    <stop offset="1" stop-color="#8f5c20" /> </linearGradient>
                <filter id="NewFilter" name="NewFilter">
                    <feGaussianBlur stdDeviation="3" in="SourceGraphic" /> </filter>
            </defs>
            <title>plan22</title>
            <g id="Curve">
                <path class="clVip" d="M.44,50.38s61.7-43.94,162.14,2.87C264.51,100.77,366,127,507.35,97.12" transform="translate(0)" fill="none" stroke-miterlimit="10" stroke-width="1.5" stroke="url(#linear-gradient-plan2)" />
                <path class="clVip1" d="M.44,50.38s61.7-43.94,162.14,2.87C264.51,100.77,366,127,507.35,97.12" transform="translate(0)" fill="none" stroke-miterlimit="10" stroke-width="1.5" stroke="url(#linear-gradient-plan2)" />
                <path d="M506.48,97.5c-141.12,29.86-242.43,3.63-344.18-43.8C62,7,.44,50.83.44,50.83v187.6h506Z" transform="translate(0)" opacity="0.2" fill="url(#linear-gradient-plan2-3)" style="isolation: isolate" /> </g>
            <g id="Circle">
                <circle class="cr4" id="Ellipse_1_copy_11-5" data-name="Ellipse 1 copy 11-5" cx="113.29" cy="36" r="23" fill="#ba8a51" opacity="0.39" style="isolation: isolate" />
                <circle class="cr3" id="Ellipse_1_copy_11-6" data-name="Ellipse 1 copy 11-6" cx="113.85" cy="35.63" r="35.13" fill="none" stroke="#f2e3d1" opacity="0.5" style="isolation: isolate" />
                <g class="cr4" opacity="0.58" filter="url(#NewFilter)">
                    <circle id="Ellipse_1_copy_11-7" data-name="Ellipse 1 copy 11-7" cx="113.29" cy="48.42" r="12.25" fill="#ba8a51" />
                    <rect x="93.59" y="28.72" width="39.4" height="39.4" fill="#ba8a51" opacity="0" /> </g>
                <circle class="cr2" id="Ellipse_1_copy_11-7-2" data-name="Ellipse 1 copy 11-7-2" cx="113.38" cy="36.17" r="12.25" fill="#fff" />
                <g class="cr2" opacity="0.7" filter="url(#NewFilter)">
                    <circle id="Ellipse_1_copy_11-8" data-name="Ellipse 1 copy 11-8" cx="113.29" cy="40.8" r="5.05" fill="#f1cc9d" />
                    <rect x="101.66" y="29.17" width="23.26" height="23.26" fill="#f1cc9d" opacity="0" /> </g>
                <circle class="cr1" id="Ellipse_1_copy_11-8-2" data-name="Ellipse 1 copy 11-8-2" cx="113.37" cy="36.22" r="5.05" fill="#ba8a51" /> </g>
        </svg>
        </div>
        </li>
        <li></li>
        </ul>
        </div>
        </div>
        <br>
        <br>
        <a href="?a=login" class="btn btn--white btn--twoPart"> <span>Start Investing Today</span>
            <div>
                <svg id="arrow" viewBox="0 0 83.82 125.21">
                    <g id="arrowRight" viewBox="0 0 83.82 125.21">
                        <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                    </g>
                </svg>
            </div>
        </a>
        </div>
        </div>
        <div class="payments" style="clear:both;padding:20px 0">
            <div class="row justify-content-center mb-30">
                <div class="col-lg-10 col-md-9 col-sm-10">
                    <div class="section_title">
                        <h2 class="title_text mb-0 c_slide_in is_shown">
              <span class="c_slide_in_wrap1">
                <span class="c_slide_in_wrap2">
                  <span class="c_slide_in_wrap3"> Popular Investment Metods</span>
                </span>
              </span>
            </h2> </div>
                </div>
            </div>
            <br>
            <br>
            <a href="https://bitcoin.org/" target="_blank"> <img src="{{asset('img/Bitcoin.svg')}}" class="Bitcoin">Bitcoin </a>
            <a href="https://www.ethereum.org/" target="_blank"> <img src="{{asset('img/Ethereum.svg')}}" class="Ethereum">Ethereum </a>
            <a href="https://litecoin.org/" target="_blank"> <img src="{{asset('img/Litecoin.svg')}}" class="Litecoin">Litecoin </a>
            <a href="https://www.dash.org/" target="_blank"> <img src="{{asset('img/Dash.svg')}}" class="Dash">Dash </a>
            <a href="https://dogecoin.com/" target="_blank"> <img src="{{asset('img/dogecoin.png')}}" class="Dogecoin">Dogecoin </a>
            <a href="https://perfectmoney.is/" target="_blank"> <img src="{{asset('img/PerfectMoney.svg')}}" class="Perfect Money">Perfect Money </a>
        </div>
    </section>
    <style>
    .payments a:not(.btn),
    .payments label {
        display: inline-flex;
        color: rgb(255, 255, 255);
        margin-bottom: 10px;
        margin-right: 10px;
        line-height: 27px;
        vertical-align: middle;
        transition: .15s all;
        background: #1c1e22;
        padding: 4px 0 4px 4px;
        border-radius: 8px;
        width: calc(16% - 6px);
        color: #fff;
    }
    
    @media only screen and (max-width: 710px) {
        .payments a:not(.btn),
        .payments label {
            width: calc(50% - 14px);
        }
    }
    
    .payments label:last-child {
        margin-right: 0
    }
    
    .payments a:hover img {
        box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.3)
    }
    
    .table.payments a:not(.btn) {
        min-width: 150px;
    }
    
    .payments img {
        border-radius: 8px;
        float: left;
        height: 30px !important;
        width: 30px !important;
        margin-right: 5px !important;
    }
    
    img.Bitcoin {
        background: linear-gradient(#ffc107, #ff9800);
        padding: 2px
    }
    
    img.Litecoin {
        background: linear-gradient(#bfbfbf, #929292)
    }
    
    img.Monero {
        background: linear-gradient(#ff9122, #f26822)
    }
    
    img.Ethereum {
        background: linear-gradient(#72a5ca, #49799c)
    }
    
    img.Bitcoin.Cash {
        background: linear-gradient(#f9bc0a, #ff9200)
    }
    
    img.Dash {
        background: linear-gradient(#1c92f0, #1c75bc)
    }
    
    img.Ripple {
        background: linear-gradient(#00ade6, #005591)
    }
    
    img.Perfect.Money {
        background: linear-gradient(#f44336, #d80000)
    }
    
    img.PerfectMoney {
        background: linear-gradient(#f44336, #d80000)
    }
    
    img.AdvCash {
        background: linear-gradient(#0ddf94, #09b477)
    }
    
    img.Payeer {
        background: linear-gradient(#00e2ff, #2196f3)
    }
    
    img.NixMoney {
        background: linear-gradient(#506aff, #3f51b5)
    }
    </style>
    <div class="rex-machine">
        <div class="left-side">
            <!--<span>Left</span>--></div>
        <div class="right-side">
            <!--<span>Right</span>--></div>
        <div class="container">
            <div class="row">
                <div class="arrow-content">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h2>
              <svg id="" viewBox="0 0 34.91 34.91">
                <g id="question-mark" viewBox="0 0 34.91 34.91">
                  <rect x="1" y="1" width="32.91" height="32.91" rx="5.23" ry="5.23" fill="none" stroke="#fed830" stroke-miterlimit="10" stroke-width="2"></rect>
                  <path d="M-628.95,148.28v-1.93h5.67a3,3,0,0,1,3,3,3,3,0,0,1-.89,2.15l-4.11,3.52v1.62" transform="translate(642.05 -136.59)" fill="none" stroke="#fed830" stroke-miterlimit="10" stroke-width="2"></path>
                  <line x1="16.82" y1="22.69" x2="16.82" y2="25.24" fill="none" stroke="#fed830" stroke-miterlimit="10" stroke-width="2"></line>
                </g>
              </svg> How do we Generate Income?
            </h2> </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <p>If you have no clue about how we make money, let provide an insight into how we make money. At phemesafetrade.com, we help individuals, corporate bodies, and organizations get legal returns online. We let our clients money flow into the country to generate revenues by investing on their behalf.
                            <br>
                            <br> <a class="btn btn--dark btn--arrow" href="/?a=profile">Read more <svg id="arrow" viewBox="0 0 83.82 125.21">
                  <g id="arrowRight" viewBox="0 0 83.82 125.21">
                    <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                  </g>
                </svg>
              </a> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="arrow-holder">
            <div class="stick-left">
                <div class="invest-stick dirty-side">
                    <div class="btn btn--white btn--arrow">Organizations
                        <svg id="arrow" viewBox="0 0 83.82 125.21">
                            <g id="arrowRight" viewBox="0 0 83.82 125.21">
                                <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                            </g>
                        </svg>
                    </div>
                    <p>Organizations who fund their money or enable it to flow into USA</p>
                </div>
            </div>
            <div class="stick-right">
                <div class="invest-stick invest-side">
                    <div class="btn btn--arrow--left btn--green">Individuals
                        <svg id="arrow" viewBox="0 0 83.82 125.21">
                            <g id="arrowRight" viewBox="0 0 83.82 125.21">
                                <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                            </g>
                        </svg>
                    </div>
                    <p>Investors who are investing their funds</p>
                </div>
            </div> <img class="svg-machine" src="{{asset('img/about.png')}}"> </div>
    </div>
    <div class="get--touch white-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h4>Get in touch</h4>
                    <p>If you have a specific request, please contact us using the support center and someone from our support section will follow up with your request shortly.</p>
                </div>
                <div class="col-md-5 ">
                    <div class="help-btn"> <a href="?a=support" class="btn btn--red"> Support Center </a> </div>
                </div>
            </div>
            <div class="pp">
                <div class="pps">
                    <a href="https://www.etrust.pro/info/851.html" target="view" onclick="open('https://www.etrust.pro/info/851.html','view','height=610,width=430,resizable=no,toolbar=no,location=no,scrollbars=yes,status=no')"> <img src="{{asset('img/etrust-logo-2019.png')}}" alt="eTrust Pro Certified" title="eTrust Pro Certified" width="150" height="76" border="0" /> </a>
                    <a>
                        <a>
                            <script type="text/javascript" referrerpolicy="origin" src="https://seal.securetrust.com/seal.js?style=normal"></script>
                        </a>
                        <div id="DigiCertClickID_oQrp8ADS"></div>
                        <script type="text/javascript">
                        var __dcid = __dcid || [];
                        __dcid.push({
                            "cid": "DigiCertClickID_oQrp8ADS",
                            "tag": "oQrp8ADS"
                        });
                        (function() {
                            var cid = document.createElement("script");
                            cid.async = true;
                            cid.src = "//seal.digicert.com/seals/cascade/seal.min.js";
                            var s = document.getElementsByTagName("script");
                            var ls = s[(s.length - 1)];
                            ls.parentNode.insertBefore(cid, ls.nextSibling);
                        }());
                        </script>
                        <script language="JavaScript" type="text/javascript">
                        TrustLogo("https://rxava.com/sectigo.png", "CL1", "none");
                        </script>
                        <a href="#" onclick="window.open('https://www.sitelock.com/verify.php?site=rxava.com','SiteLock','width=600,height=600,left=160,top=170');"> <img class="img-responsive" alt="SiteLock" title="SiteLock" src="//shield.sitelock.com/shield/rxava.com" /> </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="hidden-menu">
    <button class="hidden-menu-close">
        <svg viewBox="0 0 16.85 16.85">
            <g id="close-icon" viewBox="0 0 16.85 16.85">
                <g clip-path="url(#clip-path)">
                    <line x1="1.41" y1="1.41" x2="15.43" y2="15.43" fill="none" stroke-miterlimit="10" stroke-width="4"></line>
                    <line x1="1.41" y1="15.43" x2="15.43" y2="1.41" fill="none" stroke-miterlimit="10" stroke-width="4"></line>
                </g>
            </g>
        </svg>
    </button>
    @include('menulist')
</div>
@endsection