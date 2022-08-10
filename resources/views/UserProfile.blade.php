@extends('layouts.dasboard')
   
@section('content')

<style>
    .walletsaccount {
        left: 20px;
        position: absolute;
        width: 30px;
        height: 30px;
        top: -moz-calc((100% - 50px)/2);
        top: -webkit-calc((100% - 50px)/2);
        top: calc((100% - 50px)/2);
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
        border-color: #2ad289 !important;
    }

    .inputcx:active {
        border-color: #2ad289 !important;
    }


    @media screen and (min-width: 769px) {
        #payinput {
            padding-bottom: 20px;

        }

        #payinput2 {
            padding-bottom: 20px;

        }
    }

    @media screen and (max-width: 768px) and (min-width: 601px) {
        #payinput {
            padding-bottom: 20px;

        }

        #payinput2 {
            padding-bottom: 20px;

        }

        .walletsaccount {
            left: 10px;
            position: absolute;
            width: 30px;
            height: 30px;
            top: -moz-calc((100% - 50px)/2);
            top: -webkit-calc((100% - 50px)/2);
            top: calc((100% - 50px)/2);
        }
    }


    @media screen and (max-width: 600px) and (min-width: 500px) {
        .walletsaccount {
            left: 10px;
            position: absolute;
            width: 30px;
            height: 30px;
            top: -moz-calc((100% - 30px)/2);
            top: -webkit-calc((100% - 30px)/2);
            top: calc((100% - 30px)/2);
        }
    }

</style>
  <div class="dashboard-content edit-account">
        <div class="container">
            <div class="dashboard-title">
                <svg viewBox="0 0 14.2 14.2">
                    <g id="setting-icon" viewBox="0 0 14.2 14.2">

                        <g clip-path="url(#clip-path)">
                            <path d="M6.25.5H8a.49.49,0,0,1,.33.41c.1.43.21.86.31,1.28a.21.21,0,0,0,.13.16c.22.08.42.17.63.26a.19.19,0,0,0,.19,0l1-.62a.41.41,0,0,1,.58.08l1,1a.42.42,0,0,1,.07.59l-.61,1a.17.17,0,0,0,0,.19c.09.21.18.43.26.64a.2.2,0,0,0,.15.13c.45.1.9.22,1.35.33a.4.4,0,0,1,.35.45V7.81a.4.4,0,0,1-.36.45L12,8.6a.25.25,0,0,0-.13.12c-.09.2-.17.41-.26.62a.17.17,0,0,0,0,.19l.6,1a.43.43,0,0,1-.07.6l-1,1a.42.42,0,0,1-.61.07l-1-.58a.18.18,0,0,0-.21,0c-.21.1-.43.19-.65.27a.2.2,0,0,0-.13.15c-.1.45-.22.9-.33,1.35a.4.4,0,0,1-.45.35H6.39a.4.4,0,0,1-.45-.36c-.11-.45-.22-.9-.34-1.35a.28.28,0,0,0-.11-.13l-.65-.28a.18.18,0,0,0-.19,0l-1,.59a.41.41,0,0,1-.59-.08l-1-1a.43.43,0,0,1-.07-.6c.19-.32.38-.64.58-1a.16.16,0,0,0,0-.19c-.1-.21-.19-.43-.27-.65a.2.2,0,0,0-.16-.13L.89,8.28A.51.51,0,0,1,.5,8V6.25a.48.48,0,0,1,.39-.32l1.3-.32a.2.2,0,0,0,.16-.13,5.25,5.25,0,0,1,.22-.55.19.19,0,0,0,0-.19L1.9,3.64A.42.42,0,0,1,2,3l1-1A.41.41,0,0,1,3.56,2l1,.63a.18.18,0,0,0,.21,0c.21-.1.43-.19.66-.28a.19.19,0,0,0,.14-.16c.1-.43.22-.86.32-1.3A.48.48,0,0,1,6.25.5Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10"></path>
                            <path d="M7.1,6A1.08,1.08,0,1,1,6,7.1,1.08,1.08,0,0,1,7.1,6Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10"></path>
                        </g>
                    </g>
                </svg>
                <h4>Account Settings</h4>
            </div>
        </div>
        <div class="container">





<script language=javascript>
function IsNumeric(sText) {
  var ValidChars = "0123456789.";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
}

function checkform() {
  if (document.editform.fullname.value == '') {
    alert("Please type your full name!");
    document.editform.fullname.focus();
    return false;
  }


  if (document.editform.password.value != document.editform.password2.value) {
    alert("Please check your password!");
    document.editform.fullname.focus();
    return false;
  }




  if (document.editform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.editform.email.focus();
    return false;
  }



  for (i in document.editform.elements) {
    f = document.editform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  return true;
}
</script>



<form action="{{ route('profile_update') }}" method=post onsubmit="return checkform()" name=editform><input type="hidden" name="form_id" value="16600952866391">
    @csrf
    <input type="hidden" name="form_token" value="dae8def5c75561f5cc238584364eeb69">
<input type=hidden name=a value=edit_account>
<input type=hidden name=action value=edit_account>
<input type=hidden name=say value="">


 <div class="edit-account-content">
     <div class="notification" style="margin-bottom:20px"></div>
     <div class="input-group">
        @if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
         <span class="group-title">Account Settings</span>
         
         <div class="input-row">
             
<div class="input-holder">
    <input type="text" name=email value="{{ auth()->user()->email }}" class="active" class="form-control @error('email') is-invalid @enderror"> <span class="input-title">Email Address</span>
    <svg class="error-icon" viewBox="0 0 6.34 6.34">
        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
        <g id="alert" viewBox="0 0 6.34 6.34">
            <path d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z" transform="translate(-27.16 -9.13)" fill=""></path>
        </g>
    </svg>
</div>
</div>


<div class="input-row">
    <div class="input-holder">
        <input type=password name=password class="form-control @error('password') is-invalid @enderror" value="{{ auth()->user()->password }}" placeholder="Change password" > <span class="input-title">Change password</span>
        <svg class="error-icon" viewBox="0 0 6.34 6.34">
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <g id="alert" viewBox="0 0 6.34 6.34">
                <path d="M30.33,9.13A3.17,3.17,0,1,0,33.5,12.3,3.17,3.17,0,0,0,30.33,9.13Zm.5,5h-1v-1h1Zm0-1.75h-1V10.33h1Z" transform="translate(-27.16 -9.13)" fill=""></path>
            </g>
        </svg>
    </div>
    <div class="input-holder">
        <input type=password name=password2 value="{{ auth()->user()->password }}" placeholder="retype password"> <span class="input-title">retype password</span>
    </div>
</div>


</div>
    <div class="input-group account-settings"> <span class="group-title">Payment Wallets</span>
<div class="input-row">                        
<div class="input-holder" id="payinput">
    <input type=text class="ac-address" name="btcwallet" value="{{ auth()->user()->btcwallet }}" placeholder="Bitcoin Wallet Address"></div>
<div class="input-holder" id="payinput">
    <input type=text class="ac-address" name="ethwallet" value="{{ auth()->user()->ethwallet }}" placeholder="Ethereum Wallet Address"></div>
<div class="input-holder" id="payinput">
    <input type=text class="ac-address" name="xrpwallet" value="{{ auth()->user()->xrpwallet }}" placeholder="Ripple XRP 🏷 Account ID"></div>
<div class="input-holder" id="payinput">
    <input type=text class="ac-address" name="usdtwallet" value="{{ auth()->user()->usdtwallet }}" placeholder="Usdt Wallet Address"></div>
<div class="input-holder" id="payinput">
    <input type=text class="ac-address" name="solwallet" value="{{ auth()->user()->solwallet }}" placeholder="SOL Wallet address"></div>
<div class="input-holder" id="payinput">
    <input type=text class="ac-address" name="dotwallet" value="{{ auth()->user()->dotwallet }}" placeholder="DOT Account ID"></div>
</div>



<tr>
 <td>&nbsp;</td>
 <td><input type=submit value="Update" class=sbmt></td>
</tr></table>
</form>

        
    </div>

    <div class="modal-bg"></div>
    <div class="modal-holder">
        <div class="modal-content vip-subscription" style="margin: 4% auto;">
            <button class="modal-close"></button>

            <div class="vip-subscription-top">

                <svg style="width: 54px;height: 39px;" viewBox="0 0 28.47 34.31">
                    <g id="open-vip" viewBox="0 0 28.47 26.31">
                        <rect x="1" y="1" width="26.47" height="24.31" rx="3.42" ry="3.42" fill="none" stroke="#a87c39" stroke-miterlimit="10" stroke-width="2"></rect>
                        <path d="M14.42,10.9l2.27,2.59,2.28-1-1.76,3.63H11.57L9.63,12.33l2.47,1.16Zm0-3-1.5,1.68L11.6,11l-1.11-.52L8.2,9.44A1.14,1.14,0,0,0,6.7,11l1.16,2.24L9.8,17l.56,1.08h8.1L19,17l1.76-3.63,1-2.13a1.14,1.14,0,0,0-1.5-1.54l-2.17,1-.93.42L15.92,9.58Z" transform="translate(0 0)" fill="#a87c39"></path>
                    </g>
                </svg>
                <h2>VIP Subscription</h2>
                <p> VIP upgrade subscription, giving investors na access to the "VIP" Zone. This subscription costs 100 USD and
                    allows you to invest in high-yield plans. VIP Plans are much more profitable than the other two plans in basic
                    membership. </p>
                <div class="vip-wrap">
                    <div class="vip-detail">
                        <div>
                            <svg class="bank-wire" viewBox="0 0 26.77 29.28">
                                <g id="daily-reward" viewBox="0 0 26.77 29.28">
                                    <g>
                                        <path d="M22.63,10.49A9.49,9.49,0,1,1,13.15,1,9.49,9.49,0,0,1,22.63,10.49Z" transform="translate(0.07 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                        <path d="M25.24,28.28l-4.62-12a9.38,9.38,0,0,0,2-5.86A9.59,9.59,0,0,0,13.41,1,9.49,9.49,0,0,0,5.79,16.48L1.37,28.28H7.15a3.26,3.26,0,0,0,3.08-2.21L13,20h.18l.58,0,2.67,6.11a3.25,3.25,0,0,0,3.08,2.23Z" transform="translate(0.07 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                        <path d="M13.85,6.78l.84,1.69a.62.62,0,0,0,.46.34L17,9.08a.62.62,0,0,1,.34,1.05L16,11.44a.63.63,0,0,0-.18.55l.32,1.86a.61.61,0,0,1-.89.65l-1.67-.88a.66.66,0,0,0-.58,0l-1.67.88a.61.61,0,0,1-.89-.65L10.77,12a.63.63,0,0,0-.18-.55L9.24,10.13a.61.61,0,0,1,.34-1.05l1.87-.27a.62.62,0,0,0,.46-.34l.84-1.69A.61.61,0,0,1,13.85,6.78Z" transform="translate(0.07 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                    </g>
                                </g>
                            </svg>
                            <span>Daily reward <b>$1 Lifetime</b> </span>
                        </div>
                        <div>
                            <svg viewBox="0 0 32.75 32.75">
                                <g id="referral-comision" viewBox="0 0 32.75 32.75">
                                    <circle cx="16.37" cy="16.37" r="9.49" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></circle>
                                    <circle cx="1501.97" cy="1111.52" r="15.37" transform="translate(-1831.65 292.46) rotate(-45)" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2" stroke-dasharray="15.45 8.69"></circle>
                                    <line x1="18.94" y1="13.04" x2="13.62" y2="19.84" fill="none" stroke="#405c6b" stroke-linecap="square" stroke-linejoin="bevel" stroke-width="2"></line>
                                    <line x1="14.11" y1="12.38" x2="14.11" y2="14.33" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></line>
                                    <line x1="18.45" y1="18.91" x2="18.45" y2="20.86" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></line>
                                </g>
                            </svg>
                            <span>Referral Bonus <b>Up to 6%</b> </span>
                        </div>
                    </div>
                    <div class="vip-detail">
                        <div>
                            <svg viewBox="0 0 30.3 32.54">
                                <g id="deposit-certification" viewBox="0 0 30.3 32.54">
                                    <g>
                                        <path d="M23.61,10,14.88,6.4a2.87,2.87,0,0,0-3.31,1.39L9.25,12" transform="translate(-4 -5.29)" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></path>
                                        <path d="M15.4,29.48h-8A2.35,2.35,0,0,1,5,27.13V15a2.35,2.35,0,0,1,2.35-2.35H31A2.35,2.35,0,0,1,33.3,15V27.13A2.35,2.35,0,0,1,31,29.48" transform="translate(-4 -5.29)" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></path>
                                        <circle cx="19.43" cy="18.58" r="5.57" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></circle>
                                        <polyline points="18.84 31.7 23.51 28.7 23.51 22.43" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></polyline>
                                        <polyline points="15.07 22.43 15.07 28.7 19.74 31.7" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></polyline>
                                    </g>
                                </g>
                            </svg>
                            <span>Legal Deposit certification</span>
                        </div>
                        <div>
                            <svg viewBox="0 0 28.47 34.31">
                                <g id="open-vip" viewBox="0 0 28.47 26.31">
                                    <rect x="1" y="1" width="26.47" height="24.31" rx="3.42" ry="3.42" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></rect>
                                    <path d="M14.42,10.9l2.27,2.59,2.28-1-1.76,3.63H11.57L9.63,12.33l2.47,1.16Zm0-3-1.5,1.68L11.6,11l-1.11-.52L8.2,9.44A1.14,1.14,0,0,0,6.7,11l1.16,2.24L9.8,17l.56,1.08h8.1L19,17l1.76-3.63,1-2.13a1.14,1.14,0,0,0-1.5-1.54l-2.17,1-.93.42L15.92,9.58Z" transform="translate(0 0)" fill="#405c6b"></path>
                                </g>
                            </svg>
                            <span>Access VIP Plans</span>
                        </div>
                    </div>
                </div>
                <div class="vip-price">
                    <svg viewBox="0 0 25.09 29.77">
                        <g id="dolar-border" viewBox="0 0 25.09 29.77">
                            <g>
                                <path d="M21.13,31.45H4a3,3,0,0,1-3-3V11.87A3,3,0,0,1,2.42,9.34L11,4.11a3,3,0,0,1,3.09,0l8.58,5.23a3,3,0,0,1,1.42,2.53V28.48A3,3,0,0,1,21.13,31.45Z" transform="translate(0 -2.68)" fill="none" stroke="#405c6b" stroke-miterlimit="10" stroke-width="2"></path>
                                <path d="M13.65,10.38V12A3.05,3.05,0,0,1,15,12.7a3.76,3.76,0,0,1,1,2.88H13.47a2,2,0,0,0-.21-1.12.81.81,0,0,0-.71-.31.83.83,0,0,0-.72.33,1.5,1.5,0,0,0-.21.89,1.59,1.59,0,0,0,.16.84,1.52,1.52,0,0,0,.7.47l1.55.63a3.08,3.08,0,0,1,1.6,1.21,5,5,0,0,1,.42,2.38,3.79,3.79,0,0,1-.8,2.76,3.27,3.27,0,0,1-1.6.8v2h-2.2V24.48a3,3,0,0,1-1.59-.81A3.77,3.77,0,0,1,9,20.92h2.48a1.73,1.73,0,0,0,.26,1.13,1,1,0,0,0,.77.3.92.92,0,0,0,.78-.32,1.67,1.67,0,0,0,.24-1,2.27,2.27,0,0,0-.2-1.18,1.84,1.84,0,0,0-.88-.58l-1.57-.65a2.73,2.73,0,0,1-1.37-1.06,4.08,4.08,0,0,1-.41-2.06,3.46,3.46,0,0,1,1.12-2.76,3.54,3.54,0,0,1,1.19-.65V10.38Z" transform="translate(0 -2.68)" fill="#405c6b"></path>
                            </g>
                        </g>
                    </svg>
                    <span>Price <b>100 USD</b> </span>
                </div>
            </div>
            <div class="subscribe-action">

                <a href="?a=deposit" class="btn btn--arrow btn--yellow">Subscribe Now
                    <svg id="arrow" viewBox="0 0 83.82 125.21">
                        <g id="arrowRight" viewBox="0 0 83.82 125.21">
                            <polyline points="10.61 10.61 62.61 62.61 10.61 114.61" fill="none" stroke="" stroke-miterlimit="10" stroke-width="30"></polyline>
                        </g>
                    </svg>
                </a>
                <div class="error-msg hidden">
                    <svg viewBox="0 0 17.63 17.62">
                        <g id="warning-icon" viewBox="0 0 17.63 17.62">
                            <g clip-path="url(#clip-path)">
                                <path d="M16.63,8.81A7.82,7.82,0,1,1,8.81,1,7.81,7.81,0,0,1,16.63,8.81Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                <line x1="8.81" y1="3.92" x2="8.81" y2="10.22" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                                <line x1="8.81" y1="11.69" x2="8.81" y2="13.71" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                            </g>
                        </g>
                    </svg>
                    <span></span>
                </div>
            </div>

        </div>
    </div>


<style>
    .alert.alert-success p {
        font-size: 1.5rem;
        text-align: center;
        font-weight: bold;

    }
    tbody, td, tfoot, th, thead, tr {
        font-size: 15px;
    }
    .sbmt {
            padding: 7px 20px;
    font-size: 17px;
    font-weight: 700;
    background: #F5AB2B;
    color: #fff;
    border-radius: 5px;
    }
</style> 
@endsection