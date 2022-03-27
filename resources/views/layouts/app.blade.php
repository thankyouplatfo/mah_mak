<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
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
            <!---->
            <a title="الرئيسية" href="/" class=" pad-le pad-ri w3-bar-item w3-right w3-button w3-theme-d4"> {{config('app.name')}} <i class="fa fa-home"></i></a>
            <!---->
            <a title="نموذج طلب خدمة" href="/service-request-form" target="_blank" class=" pad-le pad-ri w3-right serviceRequestBtn"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
            <!---->
            <a title="إعدادات الحساب" href="javascript:void(0)" class=" pad-le pad-ri headTab w3-right" id="modalAccSett" onclick="openTab(event,'modal-acc-set','tabcontent','headTab')"><i class="fa fa-user"></i></a>
            <!---->
            <a title="الرسائل الخاصة" href="javascript:void(0)" class=" pad-le pad-ri headTab w3-right" onclick="openTab(event,'msg','tabcontent','headTab')"><i class="fa fa-envelope"></i></a>
            <!---->
            <a title="الإشعارات" href="javascript:void(0)" id="btn-notifi" class=" pad-le pad-ri btn-notifi headTab w3-right" onclick="openTab(event,'notifi','tabcontent','headTab')"><i class="fa fa-bell"></i><span class="w3-badge">3</span></a>
            <!---->
            <a title="التنقل" href="javascript:void(0)" class=" pad-le pad-ri headTab w3-left" onclick="openTab(event,'navbar-all-screens','tabcontent','headTab')"><i class="fa fa-bars"></i></a>
        </div>
    </header>
    <!--container path Or big Title-->
    @yield('containerPath')
    <!-- Modal Account Settings-->
    <div id="modal-acc-set" class="w3-modal">
        <div class="w3-modal-content w3-content w3-card-4 w3-animate-top">
            <header class="w3-container w3-theme w3-display-container">
                <span onclick="closeAndRmColor('modal-acc-set','w3-theme-action')" class="w3-button w3-theme w3-display-topleft"><i class="fa fa-remove"></i></span>
                <h2 class="i-not-head">إعدادات الحساب</h2>
            </header>

            <div id="modal-container" class="w3-container">
                <form enctype="multipart/form-data">
                    <br>
                    <h3>المعلومات الشخصية</h3>
                    <div class="w3-row-padding w3-stretch w3-section">
                        <div class="w3-col l12 w3-right">
                            <div>
                                <label for="personalPicture"><b>الصورة الشخصية</b></label>
                                <input class="personalPicture" name="personalPicture" id="personalPicture" type="file">
                            </div>
                        </div>
                        <div class="w3-col l4 w3-margin-top w3-right">
                            <div>
                                <label for="firstName"><b>الإسم الأول</b></label>
                                <input class="firstName" name="firstName" id="firstName" type="text">
                            </div>
                        </div>
                        <div class="w3-col l4 w3-margin-top w3-right">
                            <div>
                                <label for="familyName"><b>اسم العائلة</b></label>
                                <input class="familyName" name="familyName" id="familyName" type="text">
                            </div>
                        </div>
                        <div class="w3-col l4 w3-margin-top w3-right">
                            <div>
                                <label for="userName"><b>اسم المستخدم</b></label>
                                <input class="userName" name="userName" id="userName" type="text">
                            </div>
                        </div>
                        <div class="w3-col l12 w3-margin-top w3-right">
                            <div>
                                <b class="w3-text-black w3-large">المسميات الوظيفية داخل الموقع</b>
                            </div>
                        </div>
                        <div class="w3-section">
                            <div class="w3-col l4 w3-right">
                                <div>
                                    <label for="jobTransferAnimals"><input class="inline w3-check w3-border " name="jobTransferAnimals" id="jobTransferAnimals" type="checkbox"><b> سائق نقل (أنعام) </b></label>
                                </div>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <div>
                                    <label for="jobTransferAgriculturalProducts"><input class="inline w3-check w3-border " name="jobTransferAgriculturalProducts" id="jobTransferAgriculturalProducts" type="checkbox"><b>
                                            سائق نقل (المنتجات الزراعية) </b></label>
                                </div>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <div>
                                    <label for="jobTransferMerchandise"><input class="inline w3-check w3-border " name="jobTransferMerchandise" id="jobTransferMerchandise" type="checkbox"><b> سائق نقل
                                            (بضائع) </b></label>
                                </div>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <div>
                                    <label for="jobDisassemblyInstallation"><input class="inline w3-check w3-border " name="jobDisassemblyInstallation" id="jobDisassemblyInstallation" type="checkbox"><b> معلم فك وتركيب</b></label>
                                </div>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <div>
                                    <label for="jobUploadDownload"><input class="inline w3-check w3-border " name="jobUploadDownload" id="jobUploadDownload" type="checkbox"><b> عامل تحميل وتنزيل</b></label>
                                </div>
                            </div>
                        </div>

                        <div class="w3-col l6 w3-margin-top w3-right">
                            <div>
                                <label for="phoneContact"><b> التواصل (رقم الهاتف | اختياري) </b></label>
                                <input class="phoneContact" name="phoneContact" id="phoneContact" type="text" placeholder="أدخل رقم هاتفك">
                            </div>
                        </div>
                        <div class="w3-col l6 w3-margin-top w3-right">
                            <div>
                                <label for="emailContact"><b> التواصل (البريد الإلكتروني | اختياري) </b></label>
                                <input class="emailContact" name="emailContact" id="emailContact" type="text" placeholder="أدخل بريدك الإلكتروني للتواصل">
                            </div>
                        </div>
                    </div>
                    <div class="w3-row-padding w3-stretch w3-section">
                        <div class="w3-col l3 w3-right">
                            <div>
                                <label for="country"><b>البلد</b></label>
                                <input class="country" name="country" id="country" type="text">
                            </div>
                        </div>
                        <div class="w3-col l3 w3-right">
                            <div>
                                <label for="region"><b>المنطقة</b></label>
                                <input class="region" name="region" id="region" type="text">
                            </div>
                        </div>
                        <div class="w3-col l3 w3-right">
                            <div>
                                <label for="city"><b>المدينة</b></label>
                                <input class="city" name="city" id="city" type="text">
                            </div>
                        </div>
                        <div class="w3-col l3 w3-right">
                            <div>
                                <label for="district"><b>الحي</b></label>
                                <input class="district" name="district" id="district" type="text">
                            </div>
                        </div>
                        <div class="w3-col l12 w3-margin-top">
                            <div>
                                <input type="submit" class="action-btn" value="أرسل تعديلاتي">
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <form>
                    <h3 class="w3-section">اهتماماتك | <b class="w3-yellow w3-tag w3-medium" style="position: relative;bottom:4.5px;">ستصلك إشعارات حسب إهتماماتك</b> </h3>
                    <div class="w3-row-padding w3-stretch w3-section">
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkAnimals"><input class="inline w3-check w3-border checkAnimals" name="checkAnimals" id="checkAnimals" type="checkbox"><b> خدمات قسم النقل (الحيوانات) </b></label>
                            </div>
                        </div>
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkAgriculturalProducts"><input class="inline w3-check w3-border checkAgriculturalProducts" name="checkAgriculturalProducts" id="checkAgriculturalProducts" type="checkbox"><b>
                                        خدمات قسم النقل (المنتجات الزراعية) </b></label>
                            </div>
                        </div>
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkMerchandise"><input class="inline w3-check w3-border checkMerchandise" name="checkMerchandise" id="checkMerchandise" type="checkbox"><b> خدمات قسم النقل
                                        (بضائع) </b></label>
                            </div>
                        </div>
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkDisassemblyInstallation"><input class="inline w3-check w3-border checkDisassemblyInstallation" name="checkDisassemblyInstallation" id="checkDisassemblyInstallation" type="checkbox"><b> خدمات قسم (معلم/ين الفك والتركيب) </b></label>
                            </div>
                        </div>
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkUploadDownload"><input class="inline w3-check w3-border checkUploadDownload" name="checkUploadDownload" id="checkUploadDownload" type="checkbox"><b> خدمات قسم
                                        (عمال التحميل والتنزيل) </b></label>
                            </div>
                        </div>
                        <div class="w3-col l12 w3-margin-top">
                            <div>
                                <input type="submit" class="action-btn" value="أرسل تعديلاتي">
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <form>
                    <h3 class="w3-section"> معلومات الإشتراكات والمدفوعات</h3>
                    <div class="w3-row-padding w3-stretch w3-section">
                        <div class="w3-col 12 w3-right">
                            <label for="paymentsMail"><b>أدخل البريد الإلكتروني المخصص للمدفوعات</b></label>
                            <input class="paymentsMail" name="paymentsMail" id="paymentsMail" type="text">
                            <ul class="w3-ul w3-section">
                                <li class="w3-border-0 w3-padding-small">
                                    <b>ماهو البريد الإلكتروني المخصص للمدفوعات ؟</b>
                                </li>
                                <li class="w3-opacity">
                                    لاننا نقوم بعالجة مدفوعاتك من خلال بنك إلكتروني عالي الأمان يدعى باي بال وتتم عملية الدفع في
                                    هذا البنك
                                    من
                                    خلال البريد الإلكتروني الذي قمت بالتسجيل من خلاله على موقع البنك لذا نطلب من ذات البريد
                                    الإلكتروني
                                    المرتبط
                                    بالبنك الذي قد يكون مختلفا عن بريدك الإلكتروني الذي قمت بالتسجيل من خلاله على هذا الموقع
                                </li>
                            </ul>
                        </div>
                        <div class="w3-col l12 w3-margin-top">
                            <div>
                                <input type="submit" class="action-btn" value="أرسل تعديلاتي">
                            </div>
                        </div>
                    </div>
                </form>
                <hr>
                <form>
                    <h3>تحدث عن نفسك | <b class="w3-blue w3-tag w3-medium" style="position: relative;bottom:4.5px;">هذا القسم اختياري
                            بالكامل</b></h3>
                    <div class="w3-row-padding w3-stretch w3-section">
                        <div class="w3-col l12 w3-right">
                            <div>
                                <label for="writeAboutYourself"><b>أكتب نبذه عنك</b></label>
                                <textarea class="writeAboutYourself" name="writeAboutYourself" id="writeAboutYourself" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="w3-col l12 w3-margin-top">
                            <div>
                                <input type="submit" class="action-btn" value="أرسل تعديلاتي">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3>الخبرات السابقة | <b class="w3-blue w3-tag w3-medium" style="position: relative;bottom:4.5px;">هذا القسم اختياري
                            بالكامل</b></h3>
                    <div class="w3-row-padding w3-stretch w3-section">
                        <div class="w3-col l3 w3-margin-top w3-right">
                            <div>
                                <label for="employerName"><b>اسم جهة العمل</b></label>
                                <input class="employerName" name="employerName" id="employerName" type="text">
                            </div>
                        </div>
                        <div class="w3-col l3 w3-margin-top w3-right">
                            <div>
                                <label for="jobName"><b>اسم الوظيفة</b></label>
                                <input class="jobName" name="jobName" id="jobName" type="text">
                            </div>
                        </div>
                        <div class="w3-col l3 w3-margin-top w3-right">
                            <div>
                                <label for="beginningThePeriod"><b>بداية الفترة</b></label>
                                <input class="beginningThePeriod" name="beginningThePeriod" id="beginningThePeriod" type="date">
                            </div>
                        </div>
                        <div class="w3-col l3 w3-margin-top w3-right">
                            <div>
                                <label for="endPeriod"><b>نهاية الفترة</b></label>
                                <input class="endPeriod" name="endPeriod" id="endPeriod" type="date">
                            </div>
                        </div>
                        <div class="w3-col l12 w3-margin-top w3-right">
                            <div>
                                <label for="talkMoreAboutYourCareer"><b>تحدث أكثر عن دورك الوظيفي</b></label>
                                <textarea class="talkMoreAboutYourCareer" name="talkMoreAboutYourCareer" id="talkMoreAboutYourCareer" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="w3-col l12 w3-margin-top">
                            <div>
                                <input type="submit" class="action-btn" value="أرسل تعديلاتي">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <footer class="w3-container">
                <p>{{config('app.name')}} </p>
            </footer>
        </div>
    </div>
    <!-- Messages -->
    <div id="msg" class="w3-content w3-theme-d2 w3-medium w3-display-container tabcontent" style="margin-bottom:16px;margin-top: -79px;">
        <span onclick="closeAndRmColor('msg','w3-theme-action')" class=" w3-button w3-theme w3-display-topleft"><i class="fa fa-remove"></i></span>
        <div>
            <div class="w3-container">
                <h2 class="i-not-head">الرسائل</h2>
                <p>ستصلك هنا الردود على عروضك وغير ذلك </p>
            </div>
            <ul class="w3-ul">
                <li class="w3-bar w3-row">
                    <span onclick="this.parentElement.style.display='none'" class="w3-col s2 m1 l1 w3-bar-item w3-button w3-xlarge w3-left w3-center"><i class="fa fa-close"></i></span>
                    <img alt="blablabl" src="{{asset('images/users/profile/avatar_hat.jpg')}}" class="w3-col s2 m2 l2 w3-hide-small w3-right w3-bar-item w3-circle" style="width:85px">
                    <div class="w3-col s10 m9 l9  w3-right w3-bar-item" style="padding-top: 5.5px;">
                        <span class="w3-large"> <a href="#" class="i-not-btn">نشر محمد عبد الله</a> </span><br>
                        <span>إعلانا جديدا في <a href="#" class="i-not-btn">قسم النقل</a> | الحيوانات | <a href="#" class="i-not-btn">بعنوان نقل مواشي من مكة إلى
                                الطائف</a></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Notifications -->
    <div id="notifi" class=" w3-content w3-theme-d2 w3-medium w3-display-container tabcontent" style="margin-bottom:16px;margin-top: -79px;">
        <span onclick="closeAndRmColor('notifi','w3-theme-action')" class="w3-button w3-theme w3-display-topleft"><i class="fa fa-remove"></i></span>
        <div>
            <div class="w3-container">
                <h2 class="i-not-head">الإشعارات</h2>
                <p>ستصلك هنا الردود على عروضك وغير ذلك </p>
            </div>
            <ul class="w3-ul">
                <li class="w3-bar w3-row">
                    <span onclick="this.parentElement.style.display='none'" class="w3-col s2 m1 l1 w3-bar-item w3-button w3-xlarge w3-left w3-center"><i class="fa fa-close"></i></span>
                    <img alt="blablabl" src="{{asset('images/users/profile/avatar_hat.jpg')}}" class="w3-col s2 m2 l2 w3-hide-small w3-right w3-bar-item w3-circle" style="width:85px">
                    <div class="w3-col s10 m9 l9  w3-right w3-bar-item" style="padding-top: 5.5px;">
                        <span class="w3-large"> <a href="#" class="i-not-btn">نشر محمد عبد الله</a> </span><br>
                        <span>إعلانا جديدا في <a href="#" class="i-not-btn">قسم النقل</a> | الحيوانات | <a href="#" class="i-not-btn">بعنوان نقل مواشي من مكة إلى
                                الطائف</a></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Navbar on all screens -->
    <div id="navbar-all-screens" class="w3-bar-block w3-theme-d2 w3-content w3-margin-bottom w3-display-container tabcontent" style="margin-bottom:16px;margin-top: -79px;">
        <span onclick="closeAndRmColor('navbar-all-screens','w3-theme-action')" class="w3-button w3-theme w3-display-topleft"><i class="fa fa-remove"></i></span>
        <div class="w3-container">
            <h2 class="i-not-head">التنقل</h2>
            <p>لتسهيل تسهم هذه النفذة في تبسيط تنقلك داخل الموقع أو لفك الشخصي</p>
        </div>
        <a href="/users" class="w3-button w3-bar-item w3-right-align w3-large">
            <i class="fa fa-user w3-xlarge" aria-hidden="true"></i> لوحة التحكم </i>
        </a>
        <a href="javascript:void(0)" id="section-btn" class="w3-button w3-bar-item w3-right-align w3-large">
            <i class="fa fa-puzzle-piece w3-xlarge" aria-hidden="true"></i> تصفح أقسام الموقع <i class="fa fa-caret-down w3-left w3-large" aria-hidden="true"></i>
        </a>
        <div class="w3-bar-block w3-white" id="section" style="display: none;">
            <a href="/explorer" class="w3-bar-item w3-right-align w3-large"> <img alt="blablabl" src="{{asset('images/design/app/truck.png')}}" class="w3-circle margin-left-small">
                خدمات قسم النقل (مواشي|بضائع|إلخ) </a>
            <a href="/explorer" class="w3-bar-item w3-right-align w3-large"> <img alt="blablabl" src="{{asset('images/design/app/tool-box.png')}}" class="w3-circle margin-left-small"> خدمات قسم (معلم/ين الفك والتركيب)
            </a>
            <a href="/explorer" class="w3-bar-item w3-right-align w3-large"> <img alt="blablabl" src="{{asset('images/design/app/baggage.png')}}" class="w3-circle margin-left-small w3-white"> خدمات قسم (عمال التحميل والتنزيل)
            </a>
        </div>
        <a href="logout" class="w3-button w3-bar-item w3-right-align w3-large">
            <i class="fa fa-sign-out" aria-hidden="true"></i> تسجيل خروج
        </a>
    </div>
    @yield('app')
    <footer id="footer" class="w3-container w3-center w3-animate-bottom">
        @yield('followUs')
        <div class="w3-row-padding w3-section w3-stretch">
            <div class="w3-col l5 w3-hide-small">
                <div class="w3-container"></div>
            </div>
            <div class="w3-col l2">
                <ul class="w3-ul ">
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">facebook/<a href="#" class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">instagram/<a href="#" class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">snapchat/<a href="#" class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">pinterest/<a href="#" class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">twitter/<a href="#" class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                    <li class="w3-border-0 w3-border-bottom w3-hover-border-theme">linkedin/<a href="#" class="i-not-btn cnsb-txt-white">@mah_mak</a></li>
                </ul>
            </div>
            <div class="w3-col l5 w3-hide-small">
                <div class="w3-container"></div>
            </div>
        </div>

        <p class="w3-large">يشكر موقع <span><a class="i-not-btn w3-theme-d3 w3-round w3-padding-small" href="https://mah_mak.com"> {{config('app.name')}} </a></span> موقع <span class="i-not-rtl"><a class="i-not-btn w3-theme-d3 w3-round w3-padding-small" href="https://www.w3schools.com/w3css/default.asp">w3schools</a></span> على إتاحته هذا القالب مجانا والذي تم بنائة بواسطة مكتبة <span class="i-not-rtl"><a class="i-not-btn w3-theme-d3 w3-round w3-padding-small" href="https://www.w3schools.com/w3css/default.asp">w3.css</a></span></p>
        <p class="w3-hide">
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
            </a>
        </p>
        <p class="w3-hide">CSS صالح!</p>
        <p class="w3-hide">
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!2" />
            </a>
        </p>
    </footer>
    <script src="{{asset('js/jq.min.js')}}"></script>
    <script src="{{asset('js/w3.js')}}"></script>
    <script src="{{asset('js/js.js')}}"></script>
</body>

</html>