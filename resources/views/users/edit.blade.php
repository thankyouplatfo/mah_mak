@extends('layouts.app')
@section('title', config('app.name') . ' | لوحة التحكم')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
    <h1>إعدادات الحساب</h1>
@endsection
@section('content')
    <div class="w3-container w3-content" style="max-width:1400px;">
        <div class="w3-white">
            <div class="w3-section">
                <div class="w3-bar w3-theme-l3">
                    <a class="w3-right" href="#personalInformation">
                        <i class="fa-solid fa-user"></i>
                    </a>
                    <a class="w3-right" href="#yourInterests">
                        <i class="fa-solid fa-briefcase"></i>
                    </a>
                    <a class="w3-right" href="#settingsCallMeNow">
                        <i class="fa-solid fa-map-pin"></i>
                    </a>
                    <a class="w3-right" href="#subscriptionsAndPaymentsInformation">
                        <i class="fa-solid fa-cash-register"></i>
                    </a>
                    <a class="w3-right" href="#talkAboutYourSelf">
                        <i class="fa-solid fa-address-card"></i>
                    </a>
                    <a class="w3-right" href="#previousExperience">
                        <i class="fa-solid fa-user-doctor"></i>
                    </a>
                </div>
                <form class="w3-container" id="personalInformation" enctype="multipart/form-data">
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
                                    <label for="jobTransferAnimals"><input class="inline w3-check w3-border "
                                            name="jobTransferAnimals" id="jobTransferAnimals" type="checkbox"><b> سائق
                                            نقل (أنعام) </b></label>
                                </div>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <div>
                                    <label for="jobTransferAgriculturalProducts"><input class="inline w3-check w3-border "
                                            name="jobTransferAgriculturalProducts" id="jobTransferAgriculturalProducts"
                                            type="checkbox"><b>
                                            سائق نقل (المنتجات الزراعية) </b></label>
                                </div>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <div>
                                    <label for="jobTransferMerchandise"><input class="inline w3-check w3-border "
                                            name="jobTransferMerchandise" id="jobTransferMerchandise" type="checkbox"><b>
                                            سائق نقل
                                            (بضائع) </b></label>
                                </div>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <div>
                                    <label for="jobDisassemblyInstallation"><input class="inline w3-check w3-border "
                                            name="jobDisassemblyInstallation" id="jobDisassemblyInstallation"
                                            type="checkbox"><b> معلم فك وتركيب</b></label>
                                </div>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <div>
                                    <label for="jobUploadDownload"><input class="inline w3-check w3-border "
                                            name="jobUploadDownload" id="jobUploadDownload" type="checkbox"><b> عامل
                                            تحميل وتنزيل</b></label>
                                </div>
                            </div>
                        </div>

                        <div class="w3-col l6 w3-margin-top w3-right">
                            <div>
                                <label for="phoneContact"><b> التواصل (رقم الهاتف | اختياري) </b></label>
                                <input class="phoneContact" name="phoneContact" id="phoneContact" type="text"
                                    placeholder="أدخل رقم هاتفك">
                            </div>
                        </div>
                        <div class="w3-col l6 w3-margin-top w3-right">
                            <div>
                                <label for="emailContact"><b> التواصل (البريد الإلكتروني | اختياري) </b></label>
                                <input class="emailContact" name="emailContact" id="emailContact" type="text"
                                    placeholder="أدخل بريدك الإلكتروني للتواصل">
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
                <hr id="yourInterests">
                <form class="w3-container">
                    <h3 class="w3-section">اهتماماتك | <b class="w3-yellow w3-tag w3-medium"
                            style="position: relative;bottom:4.5px;">ستصلك إشعارات حسب إهتماماتك</b> </h3>
                    <div class="w3-row-padding w3-stretch w3-section">
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkAnimals"><input class="inline w3-check w3-border checkAnimals"
                                        name="checkAnimals" id="checkAnimals" type="checkbox"><b> خدمات قسم النقل
                                        (الحيوانات) </b></label>
                            </div>
                        </div>
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkAgriculturalProducts"><input
                                        class="inline w3-check w3-border checkAgriculturalProducts"
                                        name="checkAgriculturalProducts" id="checkAgriculturalProducts" type="checkbox"><b>
                                        خدمات قسم النقل (المنتجات الزراعية) </b></label>
                            </div>
                        </div>
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkMerchandise"><input class="inline w3-check w3-border checkMerchandise"
                                        name="checkMerchandise" id="checkMerchandise" type="checkbox"><b> خدمات قسم
                                        النقل
                                        (بضائع) </b></label>
                            </div>
                        </div>
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkDisassemblyInstallation"><input
                                        class="inline w3-check w3-border checkDisassemblyInstallation"
                                        name="checkDisassemblyInstallation" id="checkDisassemblyInstallation"
                                        type="checkbox"><b> خدمات قسم (معلم/ين الفك والتركيب) </b></label>
                            </div>
                        </div>
                        <div class="w3-col l6 w3-right">
                            <div>
                                <label for="checkUploadDownload"><input
                                        class="inline w3-check w3-border checkUploadDownload" name="checkUploadDownload"
                                        id="checkUploadDownload" type="checkbox"><b> خدمات قسم
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
                <hr id="settingsCallMeNow">
                <form class="w3-container" class="w3-display-container">
                    <span
                        class="w3-button w3-display-topleft fa fa-info-circle w3-xlarge w3-hover-none w3-hover-text-theme tabLink"
                        onclick="openTab(event,'id01','none','tabLink')"></span>
                    <div id="id01" class="w3-modal">
                        <div class="w3-modal-content">
                            <header class="w3-container w3-teal">
                                <span onclick="closeAndRmColor('id01','w3-theme-action')"
                                    class="w3-button w3-display-topleft w3-large fa fa-close"></span>
                                <h2 class="i-not-head">تعليمات اعدادات أطلبني الان</h2>
                            </header>

                            <div class="w3-container">
                                <div class="w3-padding-16">
                                    <video src="{{ asset('videos/design/info.mp4') }}" class="w3-image"
                                        controls></video>
                                </div>
                            </div>

                            <footer class="w3-container w3-teal">
                                <p>{{ config('app.name') }}</p>
                            </footer>
                        </div>
                    </div>
                    <h3 class="w3-section">اعدادات أطلبني الان</h3>
                    <div class="w3-row-padding w3-stretch w3-section">
                        <div class="w3-col l4 w3-right">
                            <div>
                                <label for="checkAnimals"><input class="inline w3-check w3-border checkAnimals"
                                        name="checkAnimals" id="checkAnimals" type="checkbox"><b> مقدم خدمة </b></label>
                            </div>
                        </div>
                        <div class="w3-col l4 w3-right">
                            <div>
                                <label for="checkAgriculturalProducts"><input
                                        class="inline w3-check w3-border checkAgriculturalProducts"
                                        name="checkAgriculturalProducts" id="checkAgriculturalProducts" type="checkbox"><b>
                                        عميل </b></label>
                            </div>
                        </div>
                        <div class="w3-col w3-right w3-section">
                            <div>
                                <label for=""><b> ماهو السعر الذي تحدد لنفسك عندما تكون موجودا بشكل مباشر ؟</b></label>
                                <input class="w3-border " name="" id="" type="number">
                            </div>
                        </div>
                        <div class="w3-col l12 w3-margin-top">
                            <div>
                                <input type="submit" class="action-btn" value="أرسل تعديلاتي">
                            </div>
                        </div>
                    </div>
                </form>
                <hr id="subscriptionsAndPaymentsInformation">
                <form class="w3-container">
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
                                    لاننا نقوم بعالجة مدفوعاتك من خلال بنك إلكتروني عالي الأمان يدعى باي بال وتتم عملية
                                    الدفع في
                                    هذا البنك
                                    من
                                    خلال البريد الإلكتروني الذي قمت بالتسجيل من خلاله على موقع البنك لذا نطلب من ذات
                                    البريد
                                    الإلكتروني
                                    المرتبط
                                    بالبنك الذي قد يكون مختلفا عن بريدك الإلكتروني الذي قمت بالتسجيل من خلاله على هذا
                                    الموقع
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
                <hr id="talkAboutYourSelf">
                <form class="w3-container">
                    <h3>تحدث عن نفسك | <b class="w3-blue w3-tag w3-medium" style="position: relative;bottom:4.5px;">هذا
                            القسم اختياري
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
                </form>
                <hr id="previousExperience">
                <form class="w3-container">
                    <h3>الخبرات السابقة | <b class="w3-blue w3-tag w3-medium" style="position: relative;bottom:4.5px;">هذا
                            القسم اختياري
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
                                <input class="beginningThePeriod" name="beginningThePeriod" id="beginningThePeriod"
                                    type="date">
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
                                <textarea class="talkMoreAboutYourCareer" name="talkMoreAboutYourCareer" id="talkMoreAboutYourCareer" cols="30"
                                    rows="5"></textarea>
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
        </div>
    </div>
@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
