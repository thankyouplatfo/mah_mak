<div class="w3-col w3-right l4 w3-margin-bottom">
    <!-- Serv card -->
    <div class="w3-border w3-border-theme w3-white cnsb-hov-bor-lightblue"
        style="height: 610px!important;overflow:auto!important;">
        <p class="w3-center p-y-0 m-y-0">
            <img src="{{ asset('images/users/profile/avatar_hat.jpg') }}" style="height:320px;width:100%"
                alt="Avatar">
        </p>
        <div class="w3-container" style="padding-right:6px!important;padding-left:6px!important">
            <p>
                <i class="fa fa-heading fa-fw w3-large w3-text-theme"></i> الإسم:
                <a href="{{ route('serv.show') }}" target="_blank" class="i-not-btn">moataz moataz moataz</a>
            </p>
            <p>
                <i class="fa fa-solid fa-puzzle-piece fa-fw w3-large w3-text-theme"></i>التصنيف:
            </p>
            <p>
                <i class="fa-solid fa-hand-holding-dollar w3-text-theme"></i> مرات الشراء
            </p>
            <p>
                <i class="fa-solid fa-barcode w3-text-theme"></i>   السعر:
            </p>
            <div>
                <i class="fa fa-asterisk fa-fw w3-large w3-text-theme"></i> التقييم:
                <span class="w3-light-grey w3-round-xlarge w3-small inline-block" style="width: 190px">
                    <span class="w3-container w3-center w3-round-xlarge w3-theme"
                        style="width:90%;display:block">90%</span>
                </span>
            </div>
            <hr>
            <div class="w3-row-padding w3-section">
                <div class="w3-col s4 m4 l4 w3-right">
                    <a href="{{ route('serv.show') }}" target="_blank" class="w3-large w3-theme-action w3-block"><i
                            class="fa-solid fa-arrow-up-right-from-square"></i></a>
                </div>
                <div class="w3-col s4 m4 l4 w3-right">
                    <a href="{{ route('pay') }}" class="w3-large w3-theme-action w3-block"><i
                            class="fa-solid fa-money-bill-1-wave"></i></a>
                </div>
                <div class="w3-col s4 m4 l4 w3-right">
                    <a href="javascript:void(0)" target="_blank" class="w3-large w3-theme-action w3-block"><i
                            class="fa-solid fa-cart-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
