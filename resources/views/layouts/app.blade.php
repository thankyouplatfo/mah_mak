<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="@yield('themeUrl')">
    <!--METAs tag and SEO-->
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="thankYouPlatFormTeam->MOATAZ">
    <style>
        .hide {
            display: none;
        }
    </style>
</head>

<body id="user-page">
    <!-- Navbar -->
    <header class="w3-top">
        <div class="w3-bar w3-large w3-animate-top">
            <!--BUTTONS AUTH AND NOT AUTH-->
            <a title="الرئيسية" href="/" class=" pad-le pad-ri w3-bar-item w3-right w3-button w3-theme-d4">
                <i class="fa fa-home"></i>
                {{ config('app.name') }} </a>
            <!---->
            <a title="أضف اعلانا" href="/service-request-form" target="_blank"
                class=" pad-le pad-ri w3-right serviceRequestBtn">
                أضف اعلانا <i class="fa fa-plus-square" aria-hidden="true"></i>
            </a>
            <!---->
            @auth
                <a title="أضف اعلانا" href="/service-request-form" target="_blank"
                    class=" pad-le pad-ri w3-right serviceRequestBtn">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                </a>
                <a title="الرسائل الخاصة" href="javascript:void(0)" class="pad-le pad-ri headTab w3-right"
                    onclick="openTab(event,'msg','tabcontent','headTab')">
                    <i class="fa fa-envelope"></i>
                    <span class="w3-badge">3</span>
                </a>
                <!---->
                <a title="الإشعارات" href="javascript:void(0)" id="btn-notifi" class="pad-le pad-ri headTab w3-right"
                    onclick="openTab(event,'notifi','tabcontent','headTab')">
                    <i class="fa fa-bell"></i>
                    <span class="w3-badge">3</span>
                </a>
            @endauth
            <!---->
            <a title="التنقل" href="javascript:void(0)" class="pad-le pad-ri headTab w3-left"
                onclick="openTab(event,'navbar-all-screens','tabcontent','headTab')"
                style="padding-right:10px!important;padding-left:10px!important;">
                <i class="fas fa-bars"></i>
            </a>
        </div>
    </header>
    <div class="w3-container w3-content path-container w3-ani-r">
        <div class="w3-container w3-content path-container w3-ani-opa">
            <h1>جميع الأقسام</h1>
        </div>
    </div>
    <!--container path Or big Title-->
    <div class="w3-container w3-content path-container w3-ani-r">
        @yield('containerPath')
    </div>
    <!-- Messages -->
    <div id="msg" class="w3-content w3-theme-d2 w3-medium w3-display-container tabcontent"
        style="margin-bottom:16px;margin-top: -79px;">
        <span onclick="closeAndRmColor('msg','w3-theme-action')" class=" w3-button w3-theme w3-display-topleft"><i
                class="fa fa-remove"></i></span>
        <div>
            <div class="w3-container">
                <h2 class="i-not-head">الرسائل</h2>
                <p>ستصلك هنا الردود على عروضك وغير ذلك </p>
            </div>
            <ul class="w3-ul">
                <li class="w3-bar w3-row">
                    <span onclick="this.parentElement.style.display='none'"
                        class="w3-col s2 m1 l1 w3-bar-item w3-button w3-xlarge w3-left w3-center"><i
                            class="fa fa-close"></i></span>
                    <img alt="blablabl" src="{{ asset('images/users/profile/avatar_hat.jpg') }}"
                        class="w3-col s2 m2 l2 w3-hide-small w3-right w3-bar-item w3-circle" style="width:85px">
                    <div class="w3-col s10 m9 l9  w3-right w3-bar-item" style="padding-top: 5.5px;">
                        <span class="w3-large"> <a href="#" class="i-not-btn">نشر محمد عبد الله</a>
                        </span><br>
                        <span>إعلانا جديدا في <a href="#" class="i-not-btn">قسم النقل</a> | الحيوانات | <a href="#"
                                class="i-not-btn">بعنوان نقل مواشي من مكة إلى
                                الطائف</a></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Notifications -->
    <div id="notifi" class=" w3-content w3-theme-d2 w3-medium w3-display-container tabcontent"
        style="margin-bottom:16px;margin-top: -79px;">
        <span onclick="closeAndRmColor('notifi','w3-theme-action')" class="w3-button w3-theme w3-display-topleft"><i
                class="fa fa-remove"></i></span>
        <div>
            <div class="w3-container">
                <h2 class="i-not-head">الإشعارات</h2>
                <p>ستصلك هنا الردود على عروضك وغير ذلك </p>
            </div>
            <ul class="w3-ul">
                <li class="w3-bar w3-row">
                    <span onclick="this.parentElement.style.display='none'"
                        class="w3-col s2 m1 l1 w3-bar-item w3-button w3-xlarge w3-left w3-center"><i
                            class="fa fa-close"></i></span>
                    <img alt="blablabl" src="{{ asset('images/users/profile/avatar_hat.jpg') }}"
                        class="w3-col s2 m2 l2 w3-hide-small w3-right w3-bar-item w3-circle" style="width:85px">
                    <div class="w3-col s10 m9 l9  w3-right w3-bar-item" style="padding-top: 5.5px;">
                        <span class="w3-large"> <a href="#" class="i-not-btn">نشر محمد عبد الله</a>
                        </span><br>
                        <span>إعلانا جديدا في <a href="#" class="i-not-btn">قسم النقل</a> | الحيوانات | <a href="#"
                                class="i-not-btn">بعنوان نقل مواشي من مكة إلى
                                الطائف</a></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Navigation panel -->
    @include('inc.navigation_panel')
    @yield('content')
    <footer id="footer" class="w3-container w3-center w3-animate-bottom">
        @yield('followUs')
        <div class="w3-row-padding w3-section w3-stretch">
            <div class="w3-col l5 w3-hide-small">
                <div class="w3-container"></div>
            </div>
            <div class="w3-col l2">
                <ul class="w3-ul ">
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">facebook/<a href="#"
                            class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">instagram/<a href="#"
                            class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">snapchat/<a href="#"
                            class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">pinterest/<a href="#"
                            class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">twitter/<a href="#"
                            class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">linkedin/<a href="#"
                            class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                </ul>
            </div>
            <div class="w3-col l5 w3-hide-small">
                <div class="w3-container"></div>
            </div>
        </div>

        <p class="w3-large">يشكر موقع <span><a class="i-not-btn w3-theme-d3 w3-round w3-padding-small"
                    href="https://mah_mak.com"> {{ config('app.name') }} </a></span> موقع <span
                class="i-not-rtl"><a class="i-not-btn w3-theme-d3 w3-round w3-padding-small"
                    href="https://www.w3schools.com/w3css/default.asp">w3schools</a></span> على إتاحته هذا القالب مجانا
            والذي تم بنائة بواسطة مكتبة <span class="i-not-rtl"><a
                    class="i-not-btn w3-theme-d3 w3-round w3-padding-small"
                    href="https://www.w3schools.com/w3css/default.asp">w3.css</a></span></p>
        <p class="w3-hide">
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss"
                    alt="Valid CSS!" />
            </a>
        </p>
        <p class="w3-hide">CSS صالح!</p>
        <p class="w3-hide">
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                    alt="Valid CSS!2" />
            </a>
        </p>
    </footer>
    <script src="{{ asset('js/jq.min.js') }}"></script>
    <script src="{{ asset('js/w3.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
</body>

</html>
