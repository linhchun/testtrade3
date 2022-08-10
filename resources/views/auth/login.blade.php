@extends('layouts.app')

@section('content')


<header class="home main-header">
    <div class="header-bg"></div>


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
    
    
</header>


<div class="container">
    <div class="inner-content login-content">
        <div class="inner-content-header">
            <h4>Access Your Account</h4>
        </div>
        <div class="login-body">
            <ul class="step-nav">
                <li class="complete">
                    <div class="step-icon">
                        <svg class="ended" viewBox="0 0 15.25 19.72">
                            <g id="lock-icon" viewBox="0 0 15.25 19.72">
                                <g clip-path="url(#clip-path)">
                                    <path d="M4,18.37H3.27A2.49,2.49,0,0,1,1,15.88V11.81a2.5,2.5,0,0,1,2.5-2.5H10a2.49,2.49,0,0,1,2.49,2.32" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                    <path d="M2.13,6.11V5.42a4.43,4.43,0,0,1,8.85,0v4" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                    <polyline points="5.64 15.71 8.29 18.37 14.62 13.17" fill="none" stroke-miterlimit="10" stroke-width="2"></polyline>
                                </g>
                            </g>
                        </svg>
                    </div>
                </li>
            </ul>




<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>


<form method=post action="{{ route('login') }}" name=mainform onsubmit="return checkform()">
@csrf	
<input type="hidden" name="form_id" value="16597801647144"><input type="hidden" name="form_token" value="3aaaffac5d8e3377f892947645c6e9dc">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value=''>
<input type=hidden name=follow_id value=''>
<div class="login-form">


	<div class="row-form">
		<div class="input-holder">
              <input type="text" id="name" name="name" value='' placeholder="Username" required autocomplete="name" autofocus> <span class="input-title">Username</span>
			  @error('name')
			  <span class="invalid-feedback" role="alert">
				  <strong>{{ $message }}</strong>
			  </span>
		  @enderror
			  <svg class="error-icon" viewBox="0 0 6.34 6.34">
                  <g id="alert" viewBox="0 0 6.34 6.34">
                      <path d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z" transform="translate(-27.16 -9.13)" fill=""></path>
                  </g>
              </svg>
          </div>
          <div class="input-holder">
              <input type="password" id="password" name=password value='' placeholder="password" required autocomplete="current-password"> <span class="input-title">password</span>
              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror 
			  <svg class="error-icon" viewBox="0 0 6.34 6.34">
                  <g id="alert" viewBox="0 0 6.34 6.34">
                      <path d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z" transform="translate(-27.16 -9.13)" fill=""></path>
                  </g>
              </svg>
          </div>
          
        
      </div>
      @include('message');


   </div>
   <div class="step-control"><a class="btn btn--arrow btn-prev" href="{{ route('password.request') }}"> Forgot your password? Click Here
           <svg id="arrow" viewBox="0 0 83.82 125.21">
               <svg style="transform-origin: 0px 0px;" id="arrow" viewBox="0 0 83.82 125.21">
                   <g id="arrowRight" viewBox="0 0 83.82 125.21">
                       <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                   </g>
               </svg>
           </svg>
       </a>
       <button  type="submit" class="btn btn--twoPart btn-next">Login Now
           <div>
               <svg style="transform-origin: 0px 0px;" id="arrow" viewBox="0 0 83.82 125.21">
                   <g id="arrowRight" viewBox="0 0 83.82 125.21">
                       <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                   </g>
           </div>
       </button>
   </div>

</form>
</div>
<div class="inner-caption"> <span> <a href="{{ route('register') }}">Click here to create a new account</a> </span> phemesafetrade.com  Copyright &copy; <script>document.write(new Date().getFullYear())</script>. All Rights Reserved.</div>
</div>
</div>
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
    @inlcude('menulist')
</div>
@endsection
