@extends('layouts.dasboard')
   
@section('content')


<script language="javascript"><!--
    function openCalculator(id)
    {
    
      w = 225; h = 400;
      t = (screen.height-h-30)/2;
      l = (screen.width-w-30)/2;
      window.open('?a=calendar&type=' + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");
    
    
      
      for (i = 0; i < document.spendform.h_id.length; i++)
      {
        if (document.spendform.h_id[i].value == id)
        {
          document.spendform.h_id[i].checked = true;
        }
      }
    
      
    
    }
    
    function updateCompound() {
      var id = 0;
      var tt = document.spendform.h_id.type;
      if (tt && tt.toLowerCase() == 'hidden') {
        id = document.spendform.h_id.value;
      } else {
        for (i = 0; i < document.spendform.h_id.length; i++) {
          if (document.spendform.h_id[i].checked) {
            id = document.spendform.h_id[i].value;
          }
        }
      }
    
      var cpObj = document.getElementById('compound_percents');
      if (cpObj) {
        while (cpObj.options.length != 0) {
          cpObj.options[0] = null;
        }
      }
    
      if (cps[id] && cps[id].length > 0) {
        document.getElementById('coumpond_block').style.display = '';
    
        for (i in cps[id]) {
          cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
        }
      } else {
        document.getElementById('coumpond_block').style.display = 'none';
      }
    }
    var cps = {};
    --></script>
    
    
    
    
    
    
    <form method="get" action="#" id="spendform"name="spendform"><input type="hidden" name="form_id" value="16598803215408"><input type="hidden" name="form_token" value="a35d63fa69c26775d8ac499da931fe9a">
    <input type=hidden name=a value=deposit>
    <section class="pricing-section bg-12">
    
    
    
    <br/><h1><p style="color:red"> <b>STEPS TO START INVESTING</h1></b>
    <br/><b>Step 1:</b> To get start with the Plan, Simply click on the <b>"Premium Plan"</b> under Select Plan, so you can access every other plans.<br>
    
    <br/><b>Step 2:</b> To make payment, Click on the <b>"Bitcoin"</b> under Payment Method, to check everyother available payment method of your choice.<br>
    
    <br/><b>Step 3:</b> Under the Enter Deposit Amount click on the <b>"1000000000.00"</b> then input the amount of your choice.<br>
    
    
    
    <br/><b>Step 4:</b> Click on <b>"Spend"</b> to proceed with the payment.<br>
    </p>
    
    </div>
                  <div class="spacer_30"></div>
    <div class="col-lg-6">
                            <div class="form-group">
                    <label for="inputType" class="col-lg-12 control-label"><b>
    <p style="color:blue">Select Plan</label></b>
                        <div class="col-lg-12 select-form">
        <select class="form-control input-type-1" id="inputType" name="h_id">
                        <option value="1">PREMIUM PLAN</option>
                        <option value="2">MINING PLAN</option>
                        <option value="3">GOLD PACK PLAN</option>
                        </select>
                        </div>
    <div class="spacer_30"></div>
    <label for="inputType" class="col-lg-12 control-label"><b>
    <p style="color:red">Payment Method</label></b>
                          <div class="col-lg-12 select-form">
    <select class="form-control input-type-1" id="inputType" name="type">
                                                                                           <option value='process_1000' >Bitcoin</option>
                            <option value='process_1006' >Ethereum</option>
             <option value='process_1007' >Ripple XRP 🏷</option>
             <option value='process_1008' >Usdt</option>
             <option value='process_1011' >SOL</option>
             <option value='process_1012' >DOT</option>
                                                                                                                          </select> 
         </div>
    
     <div class="spacer_30"></div>
         <label for="inputType" class="col-lg-12 control-label"><b>
    <p style="color:green">Your Account Balance ($)</label></b>
                          <div class="col-lg-12">
                    <input type="text" value='$0.00' class="form-control input-type-1" id="inputType" disabled >
                    </div>
    <div class="spacer_30"></div>
         <label for="inputType" class="col-lg-12 control-label"><b>
    <p style="color:purple">Enter Deposit Amount</label></b>
                          <div class="col-lg-12">
    <input type="text" name=amount value='15000' class="form-control input-type-1" id="inputType">
                    </div>
                    
            </div>
    
    
    
    
    
    <tr>
     <td colspan=2><input type=submit value="Spend" class=sbmt></td>
    </tr></table>
                      </div>
     </div>
                  </div>
                  
               </section>
    </form>
    
    <script language=javascript>
    for (i = 0; i<document.spendform.type.length; i++) {
      if ((document.spendform.type[i].value.match(/^process_/))) {
        document.spendform.type[i].checked = true;
        break;
      }
    }
    updateCompound();
    </script>
    
    
            <div class="container">
                <ul class="general-menu">
                    <li> <a href="/">Homepage</a> </li>
                    <li> <a href="?a=profile">Company Profile</a> </li>
                    
                    <li> <a href="?a=support">Help Center</a> </li>
                </ul>
            </div>
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
        <script>
            $(document).ready(function() {
                $( "#spendform" ).submit(function( event ) {
 $('#spendform').hide();


  event.preventDefault();
});
            });
        </script>


@endsection

