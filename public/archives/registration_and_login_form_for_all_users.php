<!DOCTYPE html>
<html style="direction: rtl!important;text-align: right!important;">

<head>
    <!-- METAs -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> خدمة توصيل | الإستمارات</title>
    <!--CSS Files-->
    <link rel="stylesheet" href="../../../../../../resourcesfor/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../../../../resourcesfor/css/w3.css">
    <link rel="stylesheet" href="../../../../../../resourcesfor/css/w3-theme-black.css">
    <link rel="stylesheet" href="../../../../../../resourcesfor/css/cnsb_no_conflict_min.css">
    <!--JS Files-->
    <script src="../../../../../../resourcesfor/10js/w3.js"></script>
    <script src="../../../../../../resourcesfor/10js/jquery.min.js"></script>
    <!--Local Style-->
    <style type="text/css">
     /*form {height: 340px; min-height: 340px; max-height: 340px; overflow-y: auto; /*padding-top: 37px;* / }*/
     #form{height: auto!important;}
     input[type=checkbox], input[type=radio] {display: inline; margin-left: 20px !important; }
     /*input,button:focus{outline: none!important;}*/ </style>
</head>

<body>
    <div class="w3-row-padding w3-padding-64 w3-hide" id="pricing">
        <h2 class="w3-center">التسجيل وتسجيل الدخول</h2>
        <p class="w3-center">اختر خطة التسجيل التي تناسبك أو سجل دخولك إذا كنت تمتلك حسابا لدينا.</p><br>
        <div class="w3-col l12 w3-margin-bottom">
            <ul class="w3-ul w3-border w3-hover-shadow">

                <!-- forms type bar -->
                <li class="w3-theme-l2" style="padding: 0!important;">
                    <div class="w3-bar ">
                        <button class="w3-bar-item w3-button tablink w3-right w3-col l2 m3 s6 w3-theme"
                            onclick="openCity(event,'London')">
                            سجل دخولك
                        </button>
                        <button class="w3-bar-item w3-button  tablink w3-right w3-col l2 m3 s6"
                            onclick="openCity(event,'washington')">
                            سجل كعميل
                        </button>
                        <button class="w3-bar-item w3-button  tablink w3-right w3-col l2 m3 s6"
                            onclick="openCity(event,'Tokyo')">
                            مقدم خدمة - كشركة
                        </button>
                        <button class="w3-bar-item w3-button  tablink w3-right w3-col l2 m3 s6"
                            onclick="openCity(event,'mexico')">
                            مقدم خدمة - كفرد
                        </button>
                    </div>
                </li>
                <!--  Everyone is entering from  LONDON  :) -->
                <!--  Clients register themselves through  WASHINGTON  :) -->
                <!--  Service providers are partners who love a city  TOKYO   :) -->
                <!--  Service providers as individuals love a city  MEXICO  :) -->
                <!--
                    w3-animate-input
                    w3-animate-top
                    w3-animate-left
                    w3-animate-bottom
                    w3-animate-right
                    w3-ani-opa
                    w3-animate-zoom
                    w3-animate-fading
                    w3-animate-input
                -->
                <!--Login form LONDON -->
                <div id="London" class="city w3-animate-top" style="display: block;">
                    <div>
                        <form class="w3-container w3-display-container w3-padding-16" id="LoginFormAllUser"
                            action="/action_page.php">
                            <h3 class=" w3-center">سجل <span class="cnsb-txt-red w3-text-red">دخولك</span></h3>
                            <p class="w3-center">
                                سجل دخولك كعميل أو مقدم خدمة (كفرد) أو مقدم خدمة (كشركة)
                            </p>
                            <p>
                                <label for="UserEmail" id="UserEmailLabel" id="UserEmail">
                                    <b>البريد الالكتروني
                                    </b>
                                </label>
                                <input class="UserEmail" name="UserEmail" id="UserEmail" type="text">
                            </p>
                            <p>
                                <label for="PassWord" id="PassWordLabel" id="PassWord"><b>كلمة المرور
                                    </b>
                                </label>
                                <input class="PassWord" name="PassWord" id="PassWord" type="text">
                            </p>
                        </form>

                        <li class="w3-theme-l5 w3-padding-24">
                            <div class="w3-display-bottom w3-row-padding w3-stretch">
                                <div class="w3-col l4 w3-right w3-padding">
                                    <!--
                                    <button class="w3-btn cnsb-teal w3-block">السابق </button>
                                    -->
                                </div>
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn w3-block cnsb-darkblue" form="LoginFormAllUser">سجل دخولي</button>
                                </div>
                                <div class="w3-col l4 w3-right w3-padding">
                                    <!--
                                    <button class="w3-btn cnsb-teal w3-block">التالي</button>
                                    -->
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
                <!--Customer registration form WASHINGTON -->
                <div id="washington" class="city w3-animate-right" style="display: none;">
                    <div>
                        <form class="w3-container w3-display-container w3-padding-16" id="CustomRegisForm"
                            action="/action_page.php">
                            <h3 class=" w3-center">سجل <span class="cnsb-txt-red w3-text-red">كعميل</span> </h3>
                            <p class="w3-center">
                                يمكنك من خلال هذا الحساب استئجار مقدم الخدمة الذي يناسبك ليقدم لك الخدمة التي تناسبك
                            </p>

                            <div class="part">
                                <h4>البيانات الشخصية</h4>
                                <p class="w3-col l6">
                                    <label for="CustomFirstName" id="CustomFirstNameLabel" class="CustomFirstName">
                                        <b>الاسم
                                        </b>
                                    </label>
                                    <input class="CustomFirstName" id="CustomFirstName" name="CustomFirstName"
                                        id="CustomFirstName" type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="NameCustomFather" id="NameCustomFatherLabel" class="NameCustomFather">
                                        <b>اسم الاب
                                        </b>
                                    </label>
                                    <input class="NameCustomFather" id="NameCustomFather" name="NameCustomFather"
                                        id="NameCustomFather" type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="CustomFamilyName" id="CustomFamilyNameLabel" class="CustomFamilyName">
                                        <b>اسم العائلة
                                        </b>
                                    </label>
                                    <input class="CustomFamilyName" name="CustomFamilyName" id="CustomFamilyName"
                                        type="text">
                                </p>
                                <!--
                                    <p class="w3-col l6">
                                    <label class="">
                                    <b>العمر
                                    </b>
                                    </label>
                                    <input class="" name="last" type="text">
                                    </p>
                                -->
                                <p class="w3-col l6">
                                    <label for="CustomNationality" class="CustomNationality">
                                        <b>الجنسية
                                        </b>
                                    </label>
                                    <select class="CustomNationality" name="CustomNationality" id="CustomNationality"
                                        type="text">
                                        <option>سعودي</option>
                                        <option>غير سعودي</option>
                                    </select>
                                </p>
                            </div>

                            <div class="part">
                                <h4>بيانات التواصل <span class="cnsb-txt-red ">*</span></h4>
                                <p class="w3-col l6">
                                    <label for="CustomEmail" id="CustomEmailLabel" class="CustomEmail">
                                        <b>البريد الإلكتروني
                                        </b>
                                    </label>
                                    <input class="CustomEmail" id="CustomEmail" name="CustomEmail" id="CustomEmail"
                                        type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="CustomUserName" id="CustomUserNameLabel" class="CustomUserName">
                                        <b>اسم المستخدم (اللغة الانجليزية)
                                        </b>
                                    </label>
                                    <input class="CustomUserName" id="CustomUserName" name="CustomUserName"
                                        id="CustomUserName" type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="CustomMobNum" id="CustomMobNumLabel" class="CustomMobNum">
                                        <b>رقم الجوال
                                        </b>
                                    </label>
                                    <input class="CustomMobNum" name="CustomMobNum" id="CustomMobNum" type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="CustomPass" class="CustomPassLabel">
                                        <b>كلمة المرور
                                        </b>
                                    </label>
                                    <input class="CustomPass" name="CustomPass" id="CustomPass" type="text">
                                </p>
                                <span class="cnsb-txt-red">*تستخدم هذه البيانات أيضا لتسجيل حسابك على الموقع</span>
                            </div>

                            <div class="part NameCardCustom" style="text-align: center;direction: ltr;">
                                <h4 dir="rtl"> البيانات المالية *</h4>
                                <p class="w3-col l6">
                                    <label for="NameCardCustom"><b> الاسم على البطاقة **</b></label>
                                    <input type="" class="NameCardCustom" name="NameCardCustom" id="NameCardCustom">
                                </p>
                                <p class="w3-col l6">
                                    <label for="CardNumberCustom"><b>رقم البطاقة</b></label>
                                    <input type="" class="CardNumberCustom" name="CardNumberCustom"
                                        id="CardNumberCustom">
                                </p>
                                <p class="w3-col l6">
                                    <label for="ExpiryDateCardMMCustom" class="w3-block w3-col l12"><b>تاريخ إنتهاء
                                            البطاقة</b></label>
                                    <span class="w3-row-padding w3-stretch w3-col l12">
                                        <span class="w3-col l6 w3-center">
                                            <input type="" class="ExpiryDateCardMM" name="ExpiryDateCardMM"
                                                id="ExpiryDateCardMMCustom" style="text-align: center!important;"
                                                class="MM w3-col l12" name="MM" id="MM" placeholder="شهر">
                                        </span>
                                        <span class="w3-col l6 w3-center">
                                            <input type="" class="ExpiryDateCardYYYY" name="ExpiryDateCardYYYY"
                                                id="ExpiryDateCardYYYY" style="text-align: center!important;"
                                                class="YYYY w3-col l12" name="YYYY" id="YYYY" placeholder="سنة">
                                        </span>
                                    </span>
                                </p>
                                <p class="w3-col l6">
                                    <label for="PasswordIdentificationNumberCustom"><b>الرقم السري أو الرقم التعريفي
                                            ***</b></label>
                                    <input type="" class="PasswordIdentificationNumberCustom"
                                        name="PasswordIdentificationNumberCustom"
                                        id="PasswordIdentificationNumberCustom" name="">
                                </p>
                                <ul class="w3-ul cnsb-txt-red w3-text-red w3-right-align" dir="rtl">
                                    <li>** يقصد بالبطاقة البطاقة البنكية </li>
                                    <li>*** وهي الثلاثة أرقام الأخيرة على اليمين في ظهر البطاقة.</li>
                                </ul>
                            </div>

                            <div class="part">
                                <h4>بيانات العنوان *</h4>
                                <?php require 'kingdom_regions_matrix.php';?>
                            </div>

                            <div class="part">
                                <p>
                                <h4>كراسة الاشتراطات</h4>
                                </p>
                                <div class="w3-row">
                                    <ol class="w3-ul">
                                        <li><label><input class="CustomCondition1Clients" name="CustomCondition1Clients"
                                                    id="CustomCondition1Clients" type="checkbox">عند إجراء طلب ولضمان حق
                                                مقدم
                                                الخدمة سيتم خصم قيمة الخدمة المقدمة مقدما من حسابك البنكي حتى يقوم مقدم
                                                الخدمة بتقديم خدمته اليك وإن حصل بخلاف ذلك سيتم إرجاء كامل المبلغ
                                                إليك.</label></li>

                                        <li><label><input class="CustomCondition2Clients" name="CustomCondition2Clients"
                                                    id="CustomCondition2Clients" type="checkbox">اقر وألتزم بتوفير شرح
                                                مفصل عن
                                                خدمتي التي أريدها ويحق لمقدم الخدمة ان يأخذ فرق السعر ان كانت الخدمة
                                                مطلوبة
                                                بخلاف الخدمة الموصوفة.</label></li>

                                        <li><label><input class="CustomCondition3Clients" name="CustomCondition3Clients"
                                                    id="CustomCondition3Clients" type="checkbox">إذا تلقت إدارة الموقع 5
                                                إنذارات
                                                سيئة عني من خلال مقدمين الخدمة يحق لها حذف حسابي دون سابق إنذار وربما
                                                إستدعائي لتعويض مقدمين الخدمة.</label></li>


                                        <li><label><input class="CustomCondition4Clients" name="CustomCondition4Clients"
                                                    id="CustomCondition4Clients" type="checkbox">المسافة التي يقطعها
                                                مقدموا
                                                الخدمة للوصول إليك مقدر بينكما وليس للموقع أي شأن بذلك بالنسبة لعمال
                                                التحميل والتنزيل ومعلمين الفك والتركيب.</label></li>

                                        <li>
                                            <label><input class="CustomCondition5Client5" name="CustomCondition5Client5"
                                                    id="CustomCondition5Client5" type="checkbox"> تبدأ خدمة مقدم الخدمة
                                                بالنسبة لسائقين النقل فور وصلهم إليك وليس قبل ذلك ويجب ان انتبه لذلك عند
                                                طلب خدمة </label>
                                        </li>

                                        <li><label><input class="CustomCondition5Client6" name="CustomCondition5Client6"
                                                    id="CustomCondition5Client6" type="checkbox">سيتم خصم مبلغ 5 ريالات
                                                سعودية
                                                من
                                                حسابك البنكي فور تسجيلك وسيتم ارجاعها في غضون 24 ساعة للأسباب التالية
                                                <dd>التأكد من سلامة الحساب وأنه ليس روبوتا </dd>
                                                <dd>التأكد من سلامة البطاقة البنكية</dd>
                                            </label>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </form>

                        <li class="w3-theme-l5 w3-padding-24">
                            <div class="w3-display-bottom w3-row-padding w3-stretch">
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn cnsb-teal w3-block" onclick="myShow.previous()">السابق
                                    </button>
                                </div>
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn w3-block cnsb-darkblue" form="CustomRegisForm">سجلني كعميل</button>
                                </div>
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn cnsb-teal w3-block" onclick="myShow.next()">التالي</button>
                                </div>
                            </div>
                        </li>

                    </div>
                </div>
                <!--Service Provider Registration Form - As a Com TOKYO -->
                <div id="Tokyo" class="city w3-animate-bottom" style="display: none;">
                    <div>
                        <form class="w3-container w3-display-container w3-padding-16" name="ComRegisForm"
                            action="/action_page.php">
                            <h3 class=" w3-center">سجل كمقدم خدمة - <span class="cnsb-txt-red">فئة الشركات</span> </h3>
                            <p class="w3-center">

                            </p>
                            <div class="part2" style="display: none;">
                                <h4>بيانات مندوب/معقب الشركة</h4>
                                <p class="w3-col l6">
                                    <label for="NameDelegate">
                                        <b>الاسم
                                        </b>
                                    </label>
                                    <input class="NameDelegate" name="NameDelegate" id="NameDelegate" type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="NameFarDelegate">
                                        <b>اسم الاب
                                        </b>
                                    </label>
                                    <input class="NameFarDelegate" name="NameFarDelegate" id="NameFarDelegate"
                                        type="text">
                                </p>
                                <p class="w3-col l12">
                                    <label for="LastNameDelegate">
                                        <b>اسم العائلة
                                        </b>
                                    </label>
                                    <input class="LastNameDelegate" name="LastNameDelegate" id="LastNameDelegate"
                                        type="text">
                                </p>
                                <!--
                                    <p class="w3-col l6">
                                        <label class="" for="AgeDelegate">
                                            <b>العمر
                                            </b>
                                        </label>
                                        <input class="AgeDelegate" name="AgeDelegate" id="AgeDelegate" type="text">
                                    </p>
                                -->
                                <p class="w3-col l6">
                                    <label for="NationalityDelegate">
                                        <b>الجنسية
                                        </b>
                                    </label>
                                    <select class="NationalityDelegate" name="NationalityDelegate"
                                        id="NationalityDelegate" type="text">
                                        <option>سعودي</option>
                                        <option>غير سعودي</option>
                                    </select>
                                </p>
                                <p class="w3-col l6">
                                    <label class="" for="EmailRepresentative">
                                        <b>البريد الاكتروني
                                        </b>
                                    </label>
                                    <input class="EmailRepresentative" name="EmailRepresentative"
                                        id="EmailRepresentative" type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="UsernameDelegate">
                                        <b>اسم المستخدم (اللغة الانجليزية)
                                        </b>
                                    </label>
                                    <input class="UsernameDelegate" name="UsernameDelegate" id="UsernameDelegate"
                                        type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label class="" for="DelegateJouleNumber">
                                        <b>رقم الجول
                                        </b>
                                    </label>
                                    <input class="DelegateJouleNumber" name="DelegateJouleNumber"
                                        id="DelegateJouleNumber" type="text">
                                </p>
                                <div class="w3-text-red cnsb-txt-red">
                                    <strong>تستخدم هذه البيانات لغرض التواصل بين إدارة الموقع والمؤسسة / الشركة المعنية
                                        عند الضرورة</strong>
                                </div>
                            </div>

                            <div class="part2" style="display: none;">
                                <h4>البيانات الرسمية لــ(الشركة / المؤسسة)</h4>
                                <p class="w3-col l6">
                                    <label for="ComName"><b>اسم الشركة</b></label>
                                    <input type="text" class="ComName" name="ComName" id="ComName">
                                </p>
                                <p class="w3-col l6">
                                    <label for="CommercialRegistrationNo"><b>السجل التجاري</b></label>
                                    <input type="text" class="CommercialRegistrationNo" name="CommercialRegistrationNo"
                                        id="CommercialRegistrationNo">
                                    <span class="ComCivilRegistryOrID"><input type="checkbox"
                                            class="ComCivilRegistryOrID" name="ComCivilRegistryOrID"
                                            id="ComCivilRegistryOrID"
                                            onchange="$('#CommercialRegistrationNo').attr('disabled',true);$('p.NumComCivilRegistryOrID').fadeIn(2500)">
                                        إضغط على هذا الخيار في حال رغبت في إضافة رقم السجل المدني أو الافامة بدل السجل
                                        التجاري</span>
                                </p>
                                <p class="w3-col l12 NumComCivilRegistryOrID" style="display: none;">
                                    <label>أدخل رفم السجل المدني أو الإقامة <span class="w3-small w3-left"><input
                                                type="checkbox" class="ComCivilRegistryOrID" name="ComCivilRegistryOrID"
                                                id="ComCivilRegistryOrID"
                                                onchange="$('#CommercialRegistrationNo').attr('disabled',false);$('p.NumComCivilRegistryOrID').fadeOut(2500);$('span.ComCivilRegistryOrID').fadeOut(2555)">إضغط
                                            على هذا الخيار في حال رغبت في إضافة السجل التجاري بدل رقم السجل المدني أو
                                            الاقامة</span></label>
                                    <input type="number" class="NumComCivilRegistryOrID" name="NumComCivilRegistryOrID"
                                        id="NumComCivilRegistryOrID">
                                </p>
                                <p class="w3-col l6 EconomicFieldCom">
                                    <label for="EconomicFieldCom"><b>النشاط</b></label>
                                    <select class="EconomicFieldCom" name="EconomicFieldCom" id="EconomicFieldCom"
                                        onchange="admSelectCheck(this)">
                                        <option value="1">نقليات</option>
                                        <option value="2">تجارة مواشي</option>
                                        <option value="3">مقاولات عامة</option>
                                        <option value="4">تشغيل وإدارة مزارع</option>
                                        <option value="5">ذو صلة بالخيارات السابقة</option>
                                        <option id="admOption" value="6">أخرى</option>
                                    </select>
                                </p>
                                <p class="w3-col l6" id="WriteMoreAboutYourCom" style="display: none;">
                                    <label for="WriteMoreAboutYourCom"><b>أكتب أكثر عن مجال شركتك
                                            /مؤسستك</b></label>
                                    <input type="tetx" class="WriteMoreAboutYourCom" name="WriteMoreAboutYourCom"
                                        id="WriteMoreAboutYourCom">
                                    <strong class="w3-text-red">* حقل مطلوب</strong>
                                </p>

                                <p class="w3-col l6 CountryOrigin">
                                    <label for="CountryOrigin"><b>بلد المنشأ</b></label>
                                    <select class="CountryOrigin" name="CountryOrigin" id="CountryOrigin"
                                        onchange="getSelectValue()">
                                        <?php include 'inc/CountryOrigin.php';?>
                                    </select>
                                </p>
                                <ul class="w3-ul w3-small cnsb-txt-red w3-text-red w3-center w3-clear"
                                    style="padding: 0!important;margin: 0!important;">
                                    <li class="">التطبيق/الموقع/الشركة غير مهيئين للعمل خارج حدود المملكة العربية السعودية ولكن نرحب بالشركات من خارج المملكة شريطة أن تحدد ميدان عملها داخل المملكة لذا يرجى أختيار المنطقة والمدينة
                                    </li>
                                </ul>
                                <p id="Saudi_address_For_Com"
                                    style="clear: both;padding: 0!important;margin: 0!important;">
                                    <?php include 'inc/kingdom_regions_matrix_for_com.php';?>
                                </p>
                                <p class="w3-col l6">
                                    <label for="DoesComHaveAWebsite" class="w3-block"><b>هل تمتلك الشركة موقعا
                                            إلكترونيا ؟</b></label>
                                    <span class="w3-col l6 w3-blpck">
                                        <span>
                                            <input type="radio" class="Yes" name="Yes" id="Yes"
                                                onclick="$('#ComWebsite').removeAttr('disabled',false);$('strong.ComWebsite').fadeIn(2500)">نعم
                                        </span>
                                    </span>
                                    <span class="w3-col l6 w3-blpck">
                                        <span>
                                            <input type="radio" class="No" name="No" id="No">لا
                                        </span>
                                    </span>
                                </p>
                                <p class="w3-col l6">
                                    <label for="ComWebsite"><b>موقع الشركة على الانترنت *</b></label>
                                    <input type="text" class="ComWebsite" name="ComWebsite" id="ComWebsite" disabled="">
                                    <strong style="display: none;" class="ComWebsite">* الحقل مطلوب</strong>
                                </p>

                                <p class="w3-col l12" id="ComDescription">
                                    <label for="ComDescription"><b>أكتب وصفا مختصرا عن شركتك/مؤسستك (اختياري)
                                        </b></label>
                                    <textarea onkeyup="countChar(this)" class="ComDescription" name="ComDescription"
                                        id="ComDescription" minlength="255" maxlength="500" rows="8">
                                        <br> التأسيس:
                                        <br> مقر الفرع الرئيسي:
                                        <br> الخدمات:
                                        <br> الصناعة:
                                        <br> المنتجات:
                                        <br> مناطق الخدمة:
                                        <br> أهم الشخصيات:
                                        <br> عدد الموظفين:
                                    </textarea>
                                <ul class="w3-ul w3-text-red cnsb-txt-red w3-container">
                                    <li class="w3-clear">
                                        <span class="w3-col sl12">
                                            <span id="charNum2" class="w3-left">0</span>
                                            <span class="w3-left">/</span> <span class="w3-left">500</span></span>
                                    </li>
                                    <li class="w3-clear">
                                        <span class="w3-right">أعلى من 255 حرف وأدنى من 500 حرفا</span>
                                    </li>
                                    <li class="w3-clear">
                                        <strong>تجاهل الرمز البرمجي لن يظهر في ملفك الشخصي </strong>
                                    </li>
                                </ul>
                                </p>
                            </div>

                            <div class="part2" style="display: none;">
                                <h4>بيانات التسجيل * </h4>
                                <p class="w3-col l6">
                                    <label for="EMailCom"><b>البريد الإلكتروني</b></label>
                                    <input type="" class="EMailCom" name="EMailCom" id="EMailCom">
                                </p>
                                <p class="w3-col l6">
                                    <label for="UserNameCom"><b>اسم المستخدم (اللغة الإنجليزية)</b></label>
                                    <input type="" class="UserNameCom" name="UserNameCom" id="UserNameCom">
                                </p>
                                <p class="w3-col l6">
                                    <label for="MobileNumberCom"><b>رقم الجوال أو رقم (واتساب الاعمال)</b></label>
                                    <input type="" class="MobileNumberCom" name="MobileNumberCom" id="MobileNumberCom">
                                </p>
                                <p class="w3-col l6">
                                    <label for="PasswordCom"><b>كلمة المرور</b></label>
                                    <input type="" class="PasswordCom" name="PasswordCom" id="PasswordCom">
                                </p>
                                <p class="w3-col l6">
                                    <strong> * تستخدم هذه البيانات لتسجيل حساب الشركة على الموقع</strong>
                                </p>
                            </div>

                            <div class="part2 NameCard" style="text-align: center;direction: ltr;display: block;">
                                <h4 dir="rtl"> البيانات المالية *</h4>
                                <p class="w3-col l6">
                                    <label for="NameCard"><b> الاسم على البطاقة **</b></label>
                                    <input type="" class="NameCard" name="NameCard" id="NameCard" name="">
                                </p>
                                <p class="w3-col l6">
                                    <label for="CardNumber"><b>رقم البطاقة</b></label>
                                    <input type="" class="CardNumber" name="CardNumber" id="CardNumber" name="">
                                </p>
                                <p class="w3-col l6">
                                    <label for="ExpiryDateCardMM" class="w3-block w3-col l12"><b>تاريخ إنتهاء
                                            البطاقة</b></label>
                                    <span class="w3-row-padding w3-stretch w3-col l12">
                                        <span class="w3-col l6 w3-center">
                                            <input type="" class="ExpiryDateCardMM" name="ExpiryDateCardMM"
                                                id="ExpiryDateCardMM" style="text-align: center!important;"
                                                class="MM w3-col l12" name="MM" id="MM" placeholder="شهر">
                                        </span>
                                        <span class="w3-col l6 w3-center">
                                            <input type="" class="ExpiryDateCardYYYY" name="ExpiryDateCardYYYY"
                                                id="ExpiryDateCardYYYY" style="text-align: center!important;"
                                                class="YYYY w3-col l12" name="YYYY" id="YYYY" placeholder="سنة">
                                        </span>
                                    </span>
                                </p>
                                <p class="w3-col l6" dir="rtl">
                                    <label for="PasswordIdentificationNumber"><b>الرقم السري أو الرقم التعريفي
                                            ***</b></label>
                                    <input type="" class="PasswordIdentificationNumber"
                                        name="PasswordIdentificationNumber" id="PasswordIdentificationNumber" name="">
                                </p>
                                <ul class="w3-ul cnsb-txt-red w3-text-red w3-right-align" dir="rtl">
                                    <li>* تستخدم هذه البيانات لاستقطاع الرسم الشهري مقابل خدماتنا </li>
                                    <li>** يقصد بالبطاقة البطاقة البنكية </li>
                                    <li>*** وهي الثلاثة أرقام الأخيرة على اليمين في ظهر البطاقة.</li>
                                </ul>
                            </div>

                            <div class="part2" style="display: none;">
                                <h4>المجالات التي ترغب الشركة / المؤسسة بالعمل بها</h4>
                                <!-- Trigger/Open the Modal -->
                                <p class="w3-col l12">
                                    <a href="javascript:void(0)"
                                        onclick="document.getElementById('id04').style.display='block'"
                                        class="w3-button w3-clear cnsb-darkred w3-block w3-large">خدمة توصيل خصومات
                                        الشركات</a>
                                </p>
                                <p class="w3-col l6">
                                    <label><input type="checkbox"
                                            onchange="$('#NumberWorkFieldUploadingAndDownloading').fadeIn(2500).removeAttr('disabled',false);"
                                            style="bottom: .6pc;">تحميل وتنزيل</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="NumberWorkFieldUploadingAndDownloading">عدد العاملين في مجال (التحميل و
                                        التنزيل) *</label>
                                    <input type="number" onchange="CalculateMonthlyFeeCom()"
                                        onkeyup="CalculateMonthlyFeeCom()"
                                        class="NumberWorkFieldUploadingAndDownloading"
                                        name="NumberWorkFieldUploadingAndDownloading"
                                        id="NumberWorkFieldUploadingAndDownloading" disabled="">
                                    <strong>* الحقل مطلوب إذا تم اختياره </strong> | <span><input type="checkbox"
                                            onchange="$('#NumberWorkFieldUploadingAndDownloading').val(0);$('#NumberWorkFieldUploadingAndDownloading').attr('disabled',true)">تراجع</span>
                                </p>
                                <p class="w3-col l6">
                                    <label><input type="checkbox"
                                            onchange="$('#NumberWorkFieldTransportingCattle').fadeIn(2500).removeAttr('disabled',false);"
                                            style="bottom: .6pc;">نقل الانعام (طيور مواشي حيوانات اليفة إلخ)</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="NumberWorkFieldTransportingCattle">عدد العاملين في مجال(نقل الانعام
                                        (طيور مواشي حيوانات اليفة إلخ)) *</label>
                                    <input type="number" onchange="CalculateMonthlyFeeCom()"
                                        onkeyup="CalculateMonthlyFeeCom()" class="NumberWorkFieldTransportingCattle"
                                        name="NumberWorkFieldTransportingCattle" id="NumberWorkFieldTransportingCattle"
                                        disabled="">
                                    <strong>* الحقل مطلوب إذا تم اختياره </strong> | <span><input type="checkbox"
                                            onchange="$('#NumberWorkFieldTransportingCattle').val(0);$('#NumberWorkFieldTransportingCattle').attr('disabled',true)">تراجع</span>
                                </p>
                                <p class="w3-col l6">
                                    <label><input type="checkbox"
                                            onchange="$('#NumberWorkFieldTransportingDeliveringFodder').fadeIn(2500).removeAttr('disabled',false);"
                                            style="bottom: .6pc;">نقل وتوصيل الاعلاف (برسيم شعير قصب إلخ)</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="NumberWorkFieldTransportingDeliveringFodder">عدد العاملين في مجال(نقل
                                        وتوصيل الاعلاف (برسيم شعير قصب إلخ)) *</label>
                                    <input type="number" onchange="CalculateMonthlyFeeCom()"
                                        onkeyup="CalculateMonthlyFeeCom()"
                                        class="NumberWorkFieldTransportingDeliveringFodder"
                                        name="NumberWorkFieldTransportingDeliveringFodder"
                                        id="NumberWorkFieldTransportingDeliveringFodder" disabled="">
                                    <strong>* الحقل مطلوب إذا تم اختياره </strong> | <span><input type="checkbox"
                                            onchange="$('#NumberWorkFieldTransportingDeliveringFodder').val(0);$('#NumberWorkFieldTransportingDeliveringFodder').attr('disabled',true)">تراجع</span>
                                </p>
                                <p class="w3-col l6">
                                    <label><input type="checkbox"
                                            onchange="$('#NumberWorkFieldTransportDrivers').fadeIn(2500).removeAttr('disabled',false);"
                                            style="bottom: .6pc;">نقل (بضائع أثاث منزلي أغذية إلخ)</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="NumberWorkFieldTransportDrivers">عدد العاملين في مجال(سواق نقل (بضائع
                                        أثاث منزلي أغذية إلخ)) *</label>
                                    <input type="number" onchange="CalculateMonthlyFeeCom()"
                                        onkeyup="CalculateMonthlyFeeCom()" class="NumberWorkFieldTransportDrivers"
                                        name="NumberWorkFieldTransportDrivers" id="NumberWorkFieldTransportDrivers"
                                        disabled="">
                                    <strong>* الحقل مطلوب إذا تم اختياره </strong> | <span><input type="checkbox"
                                            onchange="$('#NumberWorkFieldTransportDrivers').val(0);$('#NumberWorkFieldTransportDrivers').attr('disabled',true)">تراجع</span>
                                </p>
                                <p class="w3-col l6">
                                    <label><input type="checkbox"
                                            onchange="$('#NumberWorkFieldTeacher').fadeIn(2500).removeAttr('disabled',false);"
                                            style="bottom: .6pc;">معلم/يــن فك وتركيب</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="NumberWorkFieldTeacher">عدد العاملين في مجال(معلم/يــن فك وتركيب)
                                        *</label>
                                    <input type="number" onchange="CalculateMonthlyFeeCom()"
                                        onkeyup="CalculateMonthlyFeeCom()" class="NumberWorkFieldTeacher"
                                        name="NumberWorkFieldTeacher" id="NumberWorkFieldTeacher" disabled="">
                                    <strong>* الحقل مطلوب إذا تم اختياره </strong> | <span><input type="checkbox"
                                            onchange="$('#NumberWorkFieldTeacher').val(0);$('#NumberWorkFieldTeacher').attr('disabled',true)">تراجع</span>
                                </p>
                                <p class="w3-col l6">
                                    <label><input type="checkbox"
                                            onchange="$('#NumberWorkFieldAll').fadeIn(2500).removeAttr('disabled',false);"
                                            style="bottom: .6pc;">كل المجالات السابقة</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="NumberWorkFieldAll">عدد العاملين في مجال(الكل) *</label>
                                    <input type="number" onchange="CalculateMonthlyFeeCom()"
                                        onkeyup="CalculateMonthlyFeeCom()" class="NumberWorkFieldAll"
                                        name="NumberWorkFieldAll" id="NumberWorkFieldAll" disabled="">
                                    <strong>* الحقل مطلوب إذا تم اختياره </strong> | <span><input type="checkbox"
                                            onchange="$('#NumberWorkFieldAll').val(0);$('#NumberWorkFieldAll').attr('disabled',true)">تراجع</span>
                                </p>
                                <p class="w3-col l6">
                                    <label for="ValueMonthlyFee">قيمة الرسم الشهري</label>
                                    <input readonly type="number" class="ValueMonthlyFee" name="ValueMonthlyFee"
                                        id="ValueMonthlyFee" readonly="">
                                    <span class="TamperingPreventionClause"><input type="radio"
                                            class=" w3-hide TamperingPreventionClause" name="TamperingPreventionClause"
                                            id="TamperingPreventionClause" checked> <b
                                            id="TamperingPreventionClauseNOTE"
                                            class="cnsb-yellow cnsb-txt-darkred"></b></span>

                                </p>
                                <p class="w3-col l6">
                                    <label for="TotalMonthlyFeeCompanies">الإجمالي </label>
                                    <input readonly type="number" class="TotalMonthlyFeeCompanies"
                                        name="TotalMonthlyFeeCompanies" id="TotalMonthlyFeeCompanies">
                                    <span style="display: none;" id="TotalMonthlyFeeCompaniesNOTE">القيمة أعلاه تعبر عن
                                        قيمة الرسم الشهري لمدة تبلغ <span><b class="cnsb-darkred"
                                                id="TotalMonthlyFeeCompaniesNOTE2"></b> شهر/أشهر </span></span>
                                </p>
                                <!-- The Modal -->
                                <div id="id04" class="w3-modal">
                                    <div class="w3-modal-content">
                                        <div class="w3-display-container" style="height: 333px">
                                            <span onclick="document.getElementById('id04').style.display='none'"
                                                class="w3-button w3-display-bottomleft w3-xlarge cnsb-red">&times;</span>
                                            <embed src="inc/Corporate_discounts_delivery_service2.pdf"
                                                class="w3-content w3-block" style="display: block;height: 100%"></embed>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="part2" style="display: none;">
                                <h4>كراسة الاشتراطات</h4>
                                <li>
                                    <label for="ConditionCom1"> <input type="checkbox" class="ConditionCom1"
                                            name="ConditionCom1" id="ConditionCom1"> سيتم ايصال الاشعارات إليك فور
                                        خصم مستحقات الموقع من حسابكم البنكي.</label>
                                </li>
                                <li>
                                    <label for="ConditionCom2"><input type="checkbox" class="ConditionCom2"
                                            name="ConditionCom2" id="ConditionCom2"> أقر وألتزم بأن جميع البيانات
                                        الواردة سابقا صحيحة بنسبة 100% وأن أي تعارض فيها سيعرضني إلى عقوبة شطب حسابي دون
                                        سابق إنذار مع خصم المبلغ المترتب</label>
                                </li>
                                <li>
                                    <label for="ConditionCom3"><input type="checkbox" class="ConditionCom3"
                                            name="ConditionCom3" id="ConditionCom3"> اقر وألتزم بتوفير أعلى جودة
                                        ممكنة في مجال خدمتي وأن أتميز على قدر استطاعتي في مجال عملي .</label>
                                </li>
                                <li>
                                    <label for="ConditionCom4"> <input type="checkbox" class="ConditionCom4"
                                            name="ConditionCom4" id="ConditionCom4">يجب الانتباه ان الى ان تفاصيل
                                        الطلبات التي تصل إليك يتحمل مسؤليتها العميل وليس الموقع/الشركة/التطبيق ويحق لك
                                        ان تأخذ فرق السعر إذا كانت الخدمة المطلوبة بخلاف الخدمة الموصوفة أما الموقع
                                        فملزم بتوصيل المبلغ الذي كتبه العميل في ن موذج الطلب فقط.</label>
                                </li>
                                <li>
                                    <label for="ConditionCom5"> <input type="checkbox" class="ConditionCom5"
                                            name="ConditionCom5" id="ConditionCom5"> يجب الانتباه إلى أن المسافة
                                        التي تقطعها للوصول لمقدم الطلب ليست داخل تكاليف الخدمة المقدمة إلا إذا كان في
                                        ذلك خدمة مقدم ة للعميل بشكل أو بأخر.</label>
                                </li>
                                <li>
                                    <label for="ConditionCom6"> <input type="checkbox" class="ConditionCom6"
                                            name="ConditionCom6" id="ConditionCom6"> إذا تلقت إدارة الموقع 5 إنذارات
                                        سيئة عني من خلال العملاء يحق لها حذف حسابي دون سابق إنذار وربما إستدعائي لتعويض
                                        العملاء.</label>
                                </li>
                                <li>
                                    <label for="ConditionCom7"> <input type="checkbox" class="ConditionCom7"
                                            name="ConditionCom7" id="ConditionCom7"> تغييري لمجال عملي يعني علي
                                        الانتضار حتى بداية الشهر القادم وخصم المبلغ المناسب وبعدها أتلقى الاشعارات
                                        المناسبة للمج ال الجديد المضاف.</label>
                                </li>
                                <li>
                                    <label for="ConditionCom8"> <input type="checkbox" class="ConditionCom8"
                                            name="ConditionCom8" id="ConditionCom8"> سيتم خصم مبلغ 5 ريالات سعودية
                                        من حسابك البنكي فور تسجيلك وسيتم ارجاعها في غضون 24 ساعة للأسباب التالية <dd>
                                            التأكد من سلامة الحساب وأنه ليس روبوتا</dd>
                                        <dd> التأكد من سلامة البطاقة البنكية</dd>
                                    </label>
                                </li>
                                <li>
                                    <label for="ConditionCom9"> <input type="checkbox" class="ConditionCom9"
                                            name="ConditionCom9" id="ConditionCom9"> لا يضمن الموقع لي مقدار دخل
                                        معين ولاكن ذلك يرجع الى مدى جدي وإجتهادي في العمل ولكن يتكفل بإصال جميع
                                        الاشعارات إلي بعدل وإنصاف.</label>
                                </li>
                                <li>
                                    <label for="ConditionCom0"> <input type="checkbox" class="ConditionCom0"
                                            name="ConditionCom0" id="ConditionCom0"> لم يأخذ الموقع البيانات
                                        التفصيلية للعمال لأنه يفترض أن المؤسسة الشركة تأمن عمالة سليمة قانونيا . لم يأخذ
                                        الموقع البيانات التفصيلية للمركبات لأنه يفترض أن المؤسسة الشركة تأمن مركبات
                                        سليمة قانونيا علما أن أدنى مودي ل للمركبات يجب ان تكون اعلى من 1999.</label>
                                </li>


                            </div>

                        </form>

                        <li class="w3-theme-l5 w3-padding-24">
                            <div class="w3-display-bottom w3-row-padding w3-stretch">
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn cnsb-teal w3-block" onclick="myShow2.previous()">السابق
                                    </button>
                                </div>
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn w3-block cnsb-darkblue" form="ComRegisForm">سجلني كمقدم خدمة - فئة الشركات</button>
                                </div>
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn cnsb-teal w3-block" onclick="myShow2.next()">التالي</button>
                                </div>
                            </div>
                        </li>

                    </div>
                </div>
                <!--Service Provider Registration Form - As a individual MEXICO -->
                <div id="mexico" class="city w3-animate-left" style="display: none;">
                    <div>
                        <form class="w3-container w3-display-container w3-padding-16" name="IndividualsRegisForm"
                            action="/action_page.php">
                            <h3 class=" w3-center">سجل كمقدم خدمة - <span class="cnsb-txt-red">فئة الأفراد</span> </h3>
                            <p class="w3-center">
                                انت على بعد عدة نقرات لتعريف العميل بنفسك وماذا تقدم
                            </p>
                            <div class="part3" style="display: none;">

                                <h4>البيانات الشخصية وبيانات التسجيل</h4>
                                <p class="w3-col l6">
                                    <label for="NameIndividual" id="Label">
                                        <b>الاسم
                                        </b>
                                    </label>
                                    <input class="NameIndividual" name="NameIndividual" id="NameIndividual" type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="NameFarIndividual" id="Label">
                                        <b>اسم الاب
                                        </b>
                                    </label>
                                    <input class="NameFarIndividual" name="NameFarIndividual" id="NameFarIndividual"
                                        type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="LastNameIndividual" id="Label">
                                        <b>اسم العائلة
                                        </b>
                                    </label>
                                    <input class="LastNameIndividual" name="LastNameIndividual" id="LastNameIndividual"
                                        type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="AgeIndividual">
                                        <b>العمر
                                        </b>
                                    </label>
                                    <input class="AgeIndividual" name="AgeIndividual" id="AgeIndividual" type="text">
                                    <span class="w3-col cnsb-text-red w3-text-red">لا نقبل مقدمين خدمة في فئة الافراد
                                        اقل من سن 18 سنة </span>
                                </p>
                                <p class="w3-col l12">
                                    <label for="NationalityIndividual">
                                        <b>الجنسية
                                        </b>
                                    </label>
                                    <select class="NationalityIndividual" name="NationalityIndividual"
                                        id="NationalityIndividual" type="text">
                                        <option>سعودي</option>
                                        <option>غير سعودي</option>
                                    </select>
                                </p>
                                <p class="w3-col l6">
                                    <label class="" for="EmailRepresentativeIndividual">
                                        <b>البريد الاكتروني
                                        </b>
                                    </label>
                                    <input class="EmailRepresentativeIndividual" name="EmailRepresentativeIndividual"
                                        id="EmailRepresentativeIndividual" type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label class="" for="PassRepresentativeIndividual">
                                        <b>كلمة المرور
                                        </b>
                                    </label>
                                    <input class="PassRepresentativeIndividual" name="PassRepresentativeIndividual"
                                        id="PassRepresentativeIndividual" type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label for="UsernameIndividual">
                                        <b>اسم المستخدم (اللغة الانجليزية)
                                        </b>
                                    </label>
                                    <input class="UsernameIndividual" name="UsernameIndividual" id="UsernameIndividual"
                                        type="text">
                                </p>
                                <p class="w3-col l6">
                                    <label class="" for="IndividualJouleNumber">
                                        <b>رقم الجول
                                        </b>
                                    </label>
                                    <input class="IndividualJouleNumber" name="IndividualJouleNumber"
                                        id="IndividualJouleNumber" type="text">
                                </p>
                                <!--
                                    <div class="w3-text-red cnsb-txt-red">
                                    <strong></strong>
                                </div>
                                -->
                                <p class="w3-col l12">
                                    <label for="IndividualDescription"><b>أكتب وصفا مختصرا عن نفسك </b></label>
                                    <textarea onkeyup="countChar(this)" class="IndividualDescription"
                                        name="IndividualDescription" id="IndividualDescription" minlength="255"
                                        maxlength="500" rows="8" placeholder="أنا اسمي كذا، وأبلغ من العمر كذا، وأسكن في مدينة كذا الواقعة في دولة كذا، وأعمل في شركة كذا
                                    إقرأ المزيد على موضوع.كوم:">
                                    </textarea>
                                    <span class="w3-block cnsb-txt-darkgreen">اذهب الى <a
                                            href="https://mawdoo3.com/%D9%83%D9%8A%D9%81_%D8%A3%D8%B9%D8%B1%D9%81_%D8%B9%D9%86_%D9%86%D9%81%D8%B3%D9%8A_%D8%A8%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A"
                                            target="">صفحة مساعدة </a></span>
                                <ul class="w3-ul w3-text-red cnsb-txt-red w3-container">
                                    <li class="w3-clear">
                                        <span class="w3-col sl12">
                                            <span id="charNum2" class="w3-left">0</span>
                                            <span class="w3-left">/</span> <span class="w3-left">500</span></span>
                                    </li>
                                    <li class="w3-clear">
                                        <span class="w3-right">أعلى من 255 حرف وأدنى من 500 حرفا</span>
                                    </li>
                                </ul>
                                </p>
                            </div>

                            <div class="part3" style="display: none;">
                                <h4>البيانات الرسمية وبيانات العنوان</h4>

                                <p class="w3-col l12">
                                    <label for="CommercialRegistrationNoIndividual"><b>أدخل رفم السجل المدني أو رقم
                                            الإقامة</b></label>
                                    <input type="number" class="CommercialRegistrationNoIndividual"
                                        name="CommercialRegistrationNoIndividual"
                                        id="CommercialRegistrationNoIndividual">
                                </p>

                                <p style="clear: both;padding: 0!important;margin: 0!important;">
                                    <?php include 'inc/kingdom_regions_matrix_for_com.php';?>
                                </p>

                            </div>

                            <div class="part3 NameCardIndividual"
                                style="text-align: center;direction: ltr;display: block;">
                                <h4 dir="rtl"> البيانات المالية *</h4>
                                <p class="w3-col l6">
                                    <label for="NameCardIndividual"><b> الاسم على البطاقة **</b></label>
                                    <input type="" class="NameCardIndividual" name="NameCardIndividual"
                                        id="NameCardIndividual" name="">
                                </p>
                                <p class="w3-col l6">
                                    <label for="CardNumberIndividual"><b>رقم البطاقة</b></label>
                                    <input type="" class="CardNumberIndividual" name="CardNumberIndividual"
                                        id="CardNumberIndividual" name="">
                                </p>
                                <p class="w3-col l6">
                                    <label for="ExpiryDateCardMMIndividual" class="w3-block w3-col l12"><b>تاريخ إنتهاء
                                            البطاقة</b></label>
                                    <span class="w3-row-padding w3-stretch w3-col l12">
                                        <span class="w3-col l6 w3-center">
                                            <input type="" class="ExpiryDateCardMMIndividual"
                                                name="ExpiryDateCardMMIndividual" id="ExpiryDateCardMMIndividual"
                                                style="text-align: center!important;" class="MM w3-col l12" name="MM"
                                                id="MM" placeholder="شهر">
                                        </span>
                                        <span class="w3-col l6 w3-center">
                                            <input type="" class="ExpiryDateCardYYYYIndividual"
                                                name="ExpiryDateCardYYYYIndividual" id="ExpiryDateCardYYYYIndividual"
                                                style="text-align: center!important;" class="YYYY w3-col l12"
                                                name="ExpiryDateCardYYYYIndividual" id="ExpiryDateCardYYYYIndividual"
                                                placeholder="سنة">
                                        </span>
                                    </span>
                                </p>
                                <p class="w3-col l6">
                                    <label for="PasswordIdentificationNumberIndividual"><b>الرقم السري أو الرقم التعريفي
                                            ***</b></label>
                                    <input type="" class="PasswordIdentificationNumberIndividual"
                                        name="PasswordIdentificationNumberIndividual"
                                        id="PasswordIdentificationNumberIndividual" name="">
                                </p>
                                <ul class="w3-ul cnsb-txt-red w3-text-red w3-right-align" dir="rtl">
                                    <li>* تستخدم هذه البيانات لاستقطاع الرسم الشهري مقابل خدماتنا </li>
                                    <li>** يقصد بالبطاقة البطاقة البنكية </li>
                                    <li>*** وهي الثلاثة أرقام الأخيرة على اليمين في ظهر البطاقة.</li>
                                </ul>
                            </div>

                            <div class="part3" style="display: none;">
                                <h4>المجالات التي ترغب بالعمل بها</h4>
                                <!-- Trigger/Open the Modal -->
                                <p class="w3-col l12">
                                    <a href="javascript:void(0)"
                                        onclick="document.getElementById('id06').style.display='block'"
                                        class="w3-button w3-clear cnsb-darkred w3-block w3-large">خدمة توصيل عروض
                                        الافراد</a>
                                </p>


                                <p class="w3-col l6">
                                    <label for="IndividualWorkFieldUploadingAndDownloading"><input
                                            onchange="//CalculateMonthlyFeeindividual()"
                                            onkeyup="//CalculateMonthlyFeeindividual()" type="checkbox"
                                            class="IndividualWorkFieldUploadingAndDownloading"
                                            name="IndividualWorkFieldUploadingAndDownloading"
                                            id="IndividualWorkFieldUploadingAndDownloading">التحميل و التنزيل</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="IndividualWorkFieldTransportingCattle"><input
                                            onchange="$('#id03').fadeIn(2500);//CalculateMonthlyFeeindividual()"
                                            onkeyup="//CalculateMonthlyFeeindividual()" type="checkbox"
                                            class="IndividualWorkFieldTransportingCattle"
                                            name="IndividualWorkFieldTransportingCattle"
                                            id="IndividualWorkFieldTransportingCattle">نقل الانعام (طيور مواشي حيوانات
                                        اليفة إلخ)</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="IndividualWorkFieldTransportingDeliveringFodder"><input
                                            onchange="$('#id03').fadeIn(2500);//CalculateMonthlyFeeindividual()"
                                            onkeyup="//CalculateMonthlyFeeindividual()" type="checkbox"
                                            class="IndividualWorkFieldTransportingDeliveringFodder"
                                            name="IndividualWorkFieldTransportingDeliveringFodder"
                                            id="IndividualWorkFieldTransportingDeliveringFodder">نقل وتوصيل الاعلاف
                                        (برسيم شعير قصب إلخ)</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="IndividualWorkFieldTransportDrivers"><input
                                            onchange="$('#id03').fadeIn(2500);//CalculateMonthlyFeeindividual()"
                                            onkeyup="//CalculateMonthlyFeeindividual()" type="checkbox"
                                            class="IndividualWorkFieldTransportDrivers"
                                            name="IndividualWorkFieldTransportDrivers"
                                            id="IndividualWorkFieldTransportDrivers">سواق نقل (بضائع أثاث منزلي أغذية
                                        إلخ)</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="IndividualWorkFieldTeacher"><input
                                            onchange="//CalculateMonthlyFeeindividual()"
                                            onkeyup="//CalculateMonthlyFeeindividual()" type="checkbox"
                                            class="IndividualWorkFieldTeacher" name="IndividualWorkFieldTeacher"
                                            id="IndividualWorkFieldTeacher">معلم/يــن فك وتركيب</label>
                                </p>
                                <p class="w3-col l6">
                                    <label for="IndividualWorkFieldAll"><input
                                            onchange="$('#id03').fadeIn(2500);//CalculateMonthlyFeeindividual()"
                                            onkeyup="//CalculateMonthlyFeeindividual()" type="checkbox"
                                            class="IndividualWorkFieldAll" name="IndividualWorkFieldAll"
                                            id="IndividualWorkFieldAll">الكل</label>
                                </p>

                                <!-- The Modal -->
                                <div id="id03" class="w3-container " style="display: none;">
                                    <div class="w3-modal-content">
                                        <div class="w3-container">
                                            <span onclick="document.getElementById('id03').style.display='none'"
                                                class="w3-button w3-display-topleft w3-large cnsb-red">&times;</span>
                                            <div class="">
                                                <p>
                                                <h5>بيانات المركبة</h5>
                                                </p>
                                                <div class="w3-row">
                                                    <p class="w3-col w3-right l3 w3-container">
                                                        <label for="Type">النوع</label>
                                                        <select class="CarType" name="CarType" id="CarType">
                                                            <option>دينا</option>
                                                            <option>دباب</option>
                                                            <option>وانيت</option>
                                                            <option>سيارة</option>
                                                        </select>
                                                    </p>
                                                    <p class="w3-col w3-right l3 w3-container">
                                                        <label for="Model">الموديل</label>
                                                        <input class="CarModel" name="CarModel" id="CarModel">
                                                    </p>
                                                    <p class="w3-col w3-right l3 w3-container">
                                                        <label for="LicenseNumber">رقم الرخصة</label>
                                                        <input class="CarLicenseNumber" name="CarLicenseNumber"
                                                            id="CarLicenseNumber">
                                                    </p>
                                                    <p class="w3-col w3-right l3 w3-container">
                                                        <label for="UploadCopyLicense">حمل صورة الرخصة</label>
                                                        <input class="CarUploadCopyLicense" name="CarUploadCopyLicense"
                                                            id="CarUploadCopyLicense">
                                                    </p>
                                                </div>

                                                <p>
                                                    <label for="UserNotOwner"><input type="checkbox"
                                                            class="UserNotOwner" name="UserNotOwner" id="UserNotOwner"
                                                            onchange="
                                                        $('#CarUserNameUser').fadeIn(1250).removeAttr('disabled',false);
                                                        $('#CarUserIDUser').fadeIn(1250).removeAttr('disabled',false);
                                                        $('#CarUploadPhotoUserIDUser').fadeIn(1250).removeAttr('disabled',false)

                                                        $('span.CarUserNameUser').fadeIn(1250).removeClass('w3-hide');
                                                        $('span.CarUserIDUser').fadeIn(1250).removeClass('w3-hide');
                                                        $('span.CarUploadPhotoUserIDUser').fadeIn(1250).removeClass('w3-hide');

                                                        ">المستخدم غير المالك</label>
                                                </p>

                                                <div class="part7_1">
                                                    <p>
                                                    <h3>بيانات المستخدم</h3>
                                                    </p>


                                                    <div class="w3-row">
                                                        <p class="w3-col w3-right l4 w3-container">
                                                            <label for="CarUserNameUser">اسم المستخدم</label>
                                                            <input class="CarUserNameUser" name="CarUserNameUser"
                                                                id="CarUserNameUser" disabled="">
                                                            <span class="cnsb-txt-red w3-text-red"
                                                                class="w3-hide  CarUserNameUser">حقول الزامية إذا تم
                                                                اختيارها</span>
                                                        </p>
                                                        <p class="w3-col w3-right l4 w3-container">
                                                            <label for="CarUserIDUser">هوية المستخدم </label>
                                                            <input class="CarUserIDUser" name="CarUserIDUser"
                                                                id="CarUserIDUser" disabled="">
                                                            <span class="cnsb-txt-red w3-text-red"
                                                                class="w3-hide  CarUserIDUser">حقول الزامية إذا تم
                                                                اختيارها</span>
                                                        </p>
                                                        <p class="w3-col w3-right l4 w3-container">
                                                            <label for="CarUploadPhotoUserIDUser">ارفع صورة عن هوية
                                                                المستخدم</label>
                                                            <input class="CarUploadPhotoUserIDUser"
                                                                name="CarUploadPhotoUserIDUser"
                                                                id="CarUploadPhotoUserIDUser" disabled="">
                                                            <span class="cnsb-txt-red w3-text-red"
                                                                class="w3-hide  CarUploadPhotoUserIDUser">حقول الزامية
                                                                إذا تم اختيارها</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="w3-col l6">
                                    <label for="IndividualValueMonthlyFee">قيمة الرسم الشهري</label>
                                    <input readonly type="number" class="IndividualValueMonthlyFee"
                                        name="IndividualValueMonthlyFee" id="IndividualValueMonthlyFee" readonly="">
                                </p>
                                <p class="w3-col l6">
                                    <label for="IndividualTotalMonthlyFeeCompanies">الإجمالي </label>
                                    <input readonly type="number" class="IndividualTotalMonthlyFeeCompanies"
                                        name="IndividualTotalMonthlyFeeCompanies"
                                        id="IndividualTotalMonthlyFeeCompanies">
                                </p>



                                <!-- The Modal -->
                                <div id="id06" class="w3-modal">
                                    <div class="w3-modal-content">
                                        <div class="w3-display-container" style="height: 333px">
                                            <span onclick="document.getElementById('id06').style.display='none'"
                                                class="w3-button w3-display-bottomleft w3-xlarge cnsb-red">&times;</span>
                                            <embed src="inc/in_discounts_delivery_service2.pdf" class="w3-content w3-block"
                                                style="display: block;height: 100%"></embed>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="part3" style="display: none;">
                                <h4>كراسة الاشتراطات</h4>
                                <ul class="w3-ul">
                                    <li><label for="ConditionsIndividuals1"><input class="ConditionsIndividuals1"
                                                name="ConditionsIndividuals1" id="ConditionsIndividuals1"
                                                type="checkbox">سيتم ايصال الاشعارات إليك فور خصم مستحقات الموقع من
                                            حسابك البنكي.</label> </li>

                                    <li><label for="ConditionsIndividuals2"><input class="ConditionsIndividuals2"
                                                name="ConditionsIndividuals2" id="ConditionsIndividuals2"
                                                type="checkbox">يجب الانتباه ان الى ان تفاصيل الطلبات التي تصل إليك
                                            يتحمل مسؤليتها العميل وليس الموقع/الشركة/التطبيق ويحق لك ان تأخذ فرق السعر
                                            إذا كانت الخدمة المطلوبة بخلاف الخدمة الموصوفة أما الموقع فملزم بتوصيل
                                            المبلغ الذي كتبه العميل في نموذج الطلب فقط.</label> </li>

                                    <li><label for="ConditionsIndividuals3"><input class="ConditionsIndividuals3"
                                                name="ConditionsIndividuals3" id="ConditionsIndividuals3"
                                                type="checkbox">يجب الانتباه إلى أن المسافة التي تقطعها للوصول لمقدم
                                            الطلب ليست داخل تكاليف الخدمة المقدمة إلا إذا كان في ذلك خدمة مقدمة للعميل
                                            بشكل أو بأخر.</label> </li>

                                    <li><label for="ConditionsIndividuals4"><input class="ConditionsIndividuals4"
                                                name="ConditionsIndividuals4" id="ConditionsIndividuals4"
                                                type="checkbox">سيتم خصم مبلغ 5 ريالات سعودية من حسابك البنكي فور تسجيلك
                                            وسيتم ارجاعها في غضون 24 ساعة للأسباب التالية
                                            <dd>التأكد من سلامة الحساب وأنه ليس روبوتا</dd>
                                            <dd>التأكد من سلامة البطاقة البنكية</dd>
                                        </label> </li>
                                    <li><label for="ConditionsIndividuals7"><input class="ConditionsIndividuals7"
                                                name="ConditionsIndividuals7" id="ConditionsIndividuals7"
                                                type="checkbox">تغييري لمجال عملي أو إضافة مهنة يعني علي الانتضار حتى
                                            بداية الشهر القادم وخصم المبلغ المناسب وبعدها أتلقى الاشعارات المناسبة
                                            للمجال الجديد المضاف علما ان قيمة االمجال الواحد 50 ريال كل 30 يوم والمجالين
                                            100ريال كل 30 يوم وهكذا مالم اتلقى عرضا او خصما.</label> </li>

                                    <li><label for="ConditionsIndividuals8"><input class="ConditionsIndividuals8"
                                                name="ConditionsIndividuals8" id="ConditionsIndividuals8"
                                                type="checkbox"> إذا تلقت إدارة الموقع 5 إنذارات سيئة عني من خلال
                                            العملاء يحق لها حذف حسابي دون سابق إنذار وربما إستدعائي لتعويض
                                            العملاء.</label> </li>

                                    <li><label for="ConditionsIndividuals9"><input class="ConditionsIndividuals9"
                                                name="ConditionsIndividuals9" id="ConditionsIndividuals9"
                                                type="checkbox"> اقر وألتزم بتوفير أعلى جودة ممكنة في مجال خدمتي وأن
                                            أتميز على قدر استطاعتي في مجال عملي .</label> </li>

                                    <li><label for="ConditionsIndividuals10"><input class="ConditionsIndividuals10"
                                                name="ConditionsIndividuals10" id="ConditionsIndividuals10"
                                                type="checkbox">أقر وألتزم بأن جميع البيانات الواردة سابقا صحيحة بنسبة
                                            100% وأن أي تعارض فيها سيعرضني إلى عقوبة شطب حسابي دون سابق إنذار مع خصم
                                            المبلغ المترتب</label> </li>

                                    <li><label for="ConditionsIndividuals11"><input class="ConditionsIndividuals11"
                                                name="ConditionsIndividuals11" id="ConditionsIndividuals11"
                                                type="checkbox">لا يضمن الموقع لي مقدار دخل معين ولاكن ذلك يرجع الى مدى
                                            جدي وإجتهادي في العمل ولكن يتكفل بإيصال جميع الاشعارات حسب منطقتي ومجال عملي
                                            أو حسب خيارات العميل.</label> </li>
                                </ul>
                            </div>

                        </form>

                        <li class="w3-theme-l5 w3-padding-24">
                            <div class="w3-display-bottom w3-row-padding w3-stretch">
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn cnsb-teal w3-block" onclick="myShow3.previous()">السابق
                                    </button>
                                </div>
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn w3-block cnsb-darkblue" form="IndividualsRegisForm">سجلني كمقدم خدمة - فئة الأفراد</button>
                                </div>
                                <div class="w3-col l4 w3-right">
                                    <button class="w3-btn cnsb-teal w3-block" onclick="myShow3.next()">التالي</button>
                                </div>
                            </div>
                        </li>

                    </div>
                </div>
            </ul>
        </div>
    </div>

    <div class='w3-content'>
        <h1>نموذج طلب خدمة </h1>
        <form action="#" id="form" class="w3-padding-64 w3-container" style="height: auto!important;">
            <h2>تحديد الخدمة</h2>
            <p>
                <label for="">اسم الخدمة</label>
                <input  type="search" placeholder="ابحث في خدماتنا">
                <br>
                <select name="" id="">
                    <option value="">نقل حيوانات</option>
                    <option value="">نقل اعلاف</option>
                    <option value="">نقل مزروعات</option>
                    <option value="">نقل سيارات</option>
                    <option value="">نقل أثاث منزل</option>
                    <option value="">أخرى</option>
                </select>
            </p>
            <p>
                <label for="">اسم الخدمة (أخرى)</label>
                <input  type="text" placeholder="أكتب طلبك غير المصنف هنا">
            </p>
            <h2>التفاصيل</h2>
            <p>
                <label for="">اسم الحيوان</label>
                <input  type="search" name="" id="" placeholder="ابحث في الحيوانات">
                <br>
                <select name="" id="">
                    <option value="">كلب</option>
                    <option value="">قطة</option>
                    <option value="">حمار</option>
                    <option value="">أخرى</option>
                </select>
            </p>
            <p>
                <label for="">اسم حيوان غير مصنف</label>
                <input  type="text" placeholder="أكتب اسم الحيوان هنا">
            </p>
            <p>
                <label for="">العدد</label>
                <input  type="number" placeholder="كم رأس ترغب في نقله؟">
            </p>
            <p>
                <label for="">نوع العلف</label>
                <input  type="search" name="" id="" placeholder="ابحث في الأعلاف">
                <br>
                <select name="" id="">
                    <option value="">تبن</option>
                    <option value="">شعير</option>
                    <option value="">حبوب</option>
                    <option value="">أخرى</option>
                </select>
            </p>
            <p>
                <label for="">اسم علف غير مصنف</label>
                <input  type="text" placeholder="أكتب اسم العلف هنا">
            </p>
            <p>
                <label for="">الكمية</label>
                <select name="" id="">
                    <option value="">اقل من 1 طن</option>
                    <option value="">1 طن</option>
                    <option value="">أكثر من 1 طن</option>
                </select>
                <small>كم يبلغ وزن المعلوفات التي ترغب في نقلها؟</small>
            </p>
            <p>
                <label for="">نوع المزروعات</label>
                <input  type="search" name="" id="" placeholder="ابحث في الأعلاف">
                <br>
                <select name="" id="">
                    <option value="">نخيل</option>
                    <option value="">أشجار</option>
                    <option value="">أخرى</option>
                </select>
            </p>
            <p>
                <label for="">اسم مزوعات غير مصنف/ة</label>
                <input  type="text" placeholder="أكتب اسم المزروعات هنا">
            </p>

            <p>
                <label for="">نوع السكن</label>
                <input  type="search" name="" id="" placeholder="ابحث في الأعلاف">
                <br>
                <select name="" id="">
                    <option value="">شقة</option>
                    <option value="">فيلا</option>
                    <option value="">قصر</option>
                    <option value="">أخرى</option>
                </select>
            </p>
            <p>
                <label for="">اسم السكن الغير مصنف/ة</label>
                <input  type="text" placeholder="أكتب اسم السكن هنا">
            </p>

            <p>
                <label for="">نوع السيارة</label>
                <input  type="search" name="" id="" placeholder="ابحث في الأعلاف">
                <br>
                <select name="" id="">
                <option value=""> سيارة مايكرو</option>
                <option value=""> سيارة الهاتشباك، سيارة صالون (السيدان)</option>
                <option value=""> سيارة المدينة</option>
                <option value=""> سيارة صغيرة</option>
                <option value=""> سيارة عائلية صغيرة / سيارة مدمجة</option>
                <option value=""> سيارة عائلية كبيرة / سيارة متوسطة الحجم</option>
                <option value=""> سيارة كبيرة</option>
                <option value=""> السيارة التنفيذية المدمجة / السيارات الفاخرة (مستوى دخول)</option>
                <option value=""> سيارة تنفيذية / سيارة فاخرة (مستوى متوسط)</option>
                <option value=""> السيارات الفاخرة الكبيرة</option>
                <option value=""> السيارات الرياضية</option>
                <option value=""> السيارات الرياضية المدمجة</option>
                <option value=""> سيارات صالون الرياضية / سيارات سيدان الرياضية</option>
                <option value=""> سيارة رياضية</option>
                <option value=""> سيارة جراند تورر</option>
                <option value=""> السوبر سيارة</option>
                <option value=""> سيارة العضلات</option>
                <option value=""> سيارة المهر</option>
                <option value=""> سيارة مكشوفة</option>
                <option value=""> سيارة الطرق الوعرة</option>
                <option value=""> سيارة رياضية نفعية</option>
                <option value=""> كروس أوفر اس.يو.في</option>
                <option value=""> سيارة متعددة الأغراض</option>
                <option value=""> فان</option>
                </select>
            </p>
            <p>
                <label for="">اسم سيارة غير مصنف/ة</label>
                <input  type="text" placeholder="أكتب اسم السكن هنا">
            </p>

            <p>
                <label for="">العدد</label>
                <input  type="number" placeholder="كم سيارة/إلخ ترغب في نقلها؟">
            </p>
            <h2>تحديد الحالة</h2>
            <p>
                <label for="">حالة الحيوان</label>
                <select name="" id="">
                    <option value="">سليم</option>
                    <option value="">مريض</option>
                </select>
            </p>
            <p>
                <label for="">اكتب اسم المرض (اختياري)</label>
                <input  type="text" placeholder="اكتب اسم المرض هنا (اختياري)">
            </p>
            <h2>مسار الرحلة</h2>
            <p class="cnsb-txt-red">
                يمكنك اختيار نفس المدينة إذا كان النقل يتم داخل المدينة نفسها
            </p>
            <p>
                <label for="">من</label>
                <select name="" id="">
                    <option value="">مكة</option>
                    <option value="">جدة</option>
                    <option value="">الطايف</option>
                </select>
            </p>
            <p>
                <label for="">إلى</label>
                <select name="" id="">
                    <option value="">مكة</option>
                    <option value="">جدة</option>
                    <option value="">الطايف</option>
                </select>
            </p>
            <h2>التواصل</h2>
            <p>
                <label for="">رقم الجوال</label>
                <input  type="text" placeholder="اكتب رقم جوالك هنا">
                <input  type="checkbox" name="" id="">
                <label for="">تلقي عرض  من خلال التعليقات</label>
            </p>
        </form>
    </div>

    <script type="text/javascript">
        // show and hide by option tag Via JQ and JS
        function admSelectCheck(nameSelect) {
            if (nameSelect) {
                admOptionValue = document.getElementById("admOption").value;
                if (admOptionValue == nameSelect.value) {
                    $("#WriteMoreAboutYourCom").fadeIn(2500);
                    $("#WriteMoreAboutYourCom").addClass('w3-col l12');
                    $("p.EconomicFieldCom").removeClass('l6')
                    $("p.EconomicFieldCom").addClass('l12');
                    $("p.CountryOrigin").removeClass('l6')
                    $("p.CountryOrigin").addClass('l12');
                } else {
                    document.getElementById("WriteMoreAboutYourCom").style.display = "none";
                }
            } else {
                document.getElementById("WriteMoreAboutYourCom").style.display = "none";
            }
        }


        function openCity(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("city");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-theme", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " w3-theme";
        }

        $("input,select,textarea").addClass("w3-input w3-border w3-right-align")
        $("input,select,textarea").attr("dir", "rtl")
        $("input[type=radio]").addClass("w3-radio")
        $("input[type=checkbox]").addClass("w3-check")
        $("input[type=submit]").addClass("w3-button w3-border-0")
        $('strong').addClass('cnsb-txt-red w3-text-red')
        $('*.w3-col').addClass('w3-right')
        //$("input[disabled]").addClass("w3-xlarge")
        //$("strong").addClass("cnsb-txt-red")
        //$("select").addClass("w3-input")
        $("label").addClass("w3-right-align w3-large cnsb-txt-darkblue")
        //$("div#com_form ,div#Custom_form ,div#i_form,div#login").addClass("w3-content w3-container")
        $("div.part,div.part2,div.part3").addClass("w3-row-padding w3-stretch");
        myShow = w3.slideshow(".part", 0);
        myShow2 = w3.slideshow(".part2", 0);
        myShow3 = w3.slideshow(".part3", 0);
        $("div.NameCard,div.NameCardCustom,div.NameCardIndividual h4,label").attr('dir', 'rtl')


        $(document).ready(function () {
            $("button#getListId").click(function () {
                var idArr = [];
                $("input").each(function () {
                    idArr.push($(this).attr("name"));
                });

                //  Join array elements and display in alert
                $("div.getListId").html(idArr.join("<br>"))
            });
        });

        $("#getHTMLFromTag").click(function () {
            $('div#getListId').html($('div.part label')[6].html())
        });

        //countChar
        function countChar(val) {
            var len = val.value.length;
            if (len >= 255) {
                val.value = val.value.substring(len, 255);
            } else {
                if (len == 0) {
                    $('#charNum2').text(0);
                } else {
                    $('#charNum2').text(len);
                }
            }
        };

        function CalculateMonthlyFeeCom() {
            // body...
            var UploadingAndDownloadingVAL = $('#NumberWorkFieldUploadingAndDownloading').val();
            var TransportingCattleVAL = $('#NumberWorkFieldTransportingCattle').val();
            var TransportingDeliveringFodderVAL = $('#NumberWorkFieldTransportingDeliveringFodder').val();
            var TransportDriversVAL = $('#NumberWorkFieldTransportDrivers').val();
            var TeacherVAL = $('#NumberWorkFieldTeacher').val();
            var AllVAL = $('#NumberWorkFieldAll').val();
            var totalWorkers = Number(UploadingAndDownloadingVAL) + Number(TransportingCattleVAL) + Number(TransportingDeliveringFodderVAL) + Number(TransportDriversVAL) + Number(TeacherVAL) + Number(AllVAL);
            //
            var valueMonthlyFee = $("#ValueMonthlyFee");
            switch (totalWorkers > 0 || totalWorkers != 0) {
                case (totalWorkers >= 1 && totalWorkers < 5):
                    valueMonthlyFee.val(totalWorkers * 100)
                    var x = valueMonthlyFee.val();
                    $("#TamperingPreventionClause").removeClass('w3-hide').fadeIn(2500);
                    $("#TamperingPreventionClauseNOTE").html('لا يمكنني إلغاء اشتراكي قبل 1 شهر ')
                    $("#TotalMonthlyFeeCompanies").val(x * Number(1));
                    $('#TotalMonthlyFeeCompaniesNOTE').fadeIn(2500);
                    $('#TotalMonthlyFeeCompaniesNOTE2').html(1);
                    break;
                case (totalWorkers >= 5 && totalWorkers < 11):
                    valueMonthlyFee.val(totalWorkers * 38)
                    var x = valueMonthlyFee.val();
                    $("#TamperingPreventionClause").removeClass('w3-hide').fadeIn(2500);
                    $("#TamperingPreventionClauseNOTE").html('لا يمكنني إلغاء اشتراكي قبل 3 أشهر انضر الإجمالي');
                    $("#TotalMonthlyFeeCompanies").val(x * Number(3));
                    $('#TotalMonthlyFeeCompaniesNOTE').fadeIn(2500);
                    $('#TotalMonthlyFeeCompaniesNOTE2').html(3);
                    break;
                case (totalWorkers >= 11 && totalWorkers < 16):
                    valueMonthlyFee.val(totalWorkers * 25)
                    var x = valueMonthlyFee.val();
                    $("#TamperingPreventionClause").removeClass('w3-hide').fadeIn(2500);
                    $("#TamperingPreventionClauseNOTE").html(' لا يمكنني إلغاء اشتراكي قبل 6 أشهر انضر الإجمالي');
                    $("#TotalMonthlyFeeCompanies").val(x * Number(6));
                    $('#TotalMonthlyFeeCompaniesNOTE').fadeIn(2500);
                    $('#TotalMonthlyFeeCompaniesNOTE2').html(6);
                    break;
                case (totalWorkers >= 16):
                    valueMonthlyFee.val(totalWorkers * 12)
                    var x = valueMonthlyFee.val();
                    $("#TamperingPreventionClause").removeClass('w3-hide').fadeIn(2500);
                    $("#TamperingPreventionClauseNOTE").html(' لا يمكنني إلغاء اشتراكي قبل 9 أشهر انضر الإجمالي');
                    $("#TotalMonthlyFeeCompanies").val(x * Number(9));
                    $('#TotalMonthlyFeeCompaniesNOTE').fadeIn(2500);
                    $('#TotalMonthlyFeeCompaniesNOTE2').html(9);
                    break;
            }



        }
        CalculateMonthlyFeeCom()
        // IndividualWorkFieldUploadingAndDownloading
        // IndividualWorkFieldTransportingCattle
        // IndividualWorkFieldTransportingDeliveringFodder
        // IndividualWorkFieldTransportDrivers
        // IndividualWorkFieldTeacher
        // IndividualWorkFieldAll

        //function CalculateMonthlyFeeindividual() {
        //    var individualWorkFieldUploadingAndDownloading = $("#IndividualWorkFieldUploadingAndDownloading");
        //    var individualWorkFieldTransportingCattle = $("#IndividualWorkFieldTransportingCattle");
        //    var individualWorkFieldTransportingDeliveringFodder = $("#IndividualWorkFieldTransportingDeliveringFodder")//;
        //    var individualWorkFieldTransportDrivers = $("#IndividualWorkFieldTransportDrivers");
        //    var individualWorkFieldTeacher = $("#IndividualWorkFieldTeacher");
        //    var individualWorkFieldAll = $("#IndividualWorkFieldAll");
        //
        //    var totalWorkersindividual =
        //    individualWorkFieldUploadingAndDownloading +
        //    individualWorkFieldTransportingCattle +
        //    individualWorkFieldTransportingDeliveringFodder +
        //    individualWorkFieldTransportDrivers +
        //    individualWorkFieldTeacher +
        //    individualWorkFieldAll
        //    ;

        //    var individualValueMonthlyFee = document.getElementById("IndividualValueMonthlyFee");
        //    individualValueMonthlyFee.value = null;
        //    var individualTotalMonthlyFeeCompanies = document.getElementById(IndividualTotalMonthlyFeeCompanies);

        //     if (individualWorkFieldUploadingAndDownloading.is(':checked')) {individualValueMonthlyFee.value += Number(//50)}
        //      else if (individualWorkFieldUploadingAndDownloading.attr('checked',false)) {individualValueMonthlyFee.//value - Number(50)}
        //      if (individualWorkFieldTransportingCattle.is(':checked')) {individualValueMonthlyFee.value =+ Number(50) //}
        //       else if (individualWorkFieldTransportingCattle.attr('checked',false)) {individualValueMonthlyFee.value -// Number(50)}


        //     // If I could operate the function this way that would be a good thing
        //     //switch (individualValueMonthlyFee.val(0)) {
        //     //  case individualWorkFieldUploadingAndDownloading.attr('checked',true):
        //     //    individualValueMonthlyFee.val(50);
        //     //    break;
        //     //  case individualWorkFieldTransportingCattle.attr('checked',true):
        //     //    individualValueMonthlyFee.val(50);
        //     //    break;
        //     //  case individualWorkFieldTransportingDeliveringFodder.attr('checked',true):
        //     //    individualValueMonthlyFee.val(50);
        //     //    break;
        //     //  case individualWorkFieldTransportDrivers.attr('checked',true):
        //     //    individualValueMonthlyFee.val(50);
        //     //    break;
        //     //  case individualWorkFieldTeacher.attr('checked',true):
        //     //    individualValueMonthlyFee.val(50);
        //     //    break;
        //     //  case individualWorkFieldAll.attr('checked',true):
        //     //    individualValueMonthlyFee.val(50);
        //     //    break;
        //     //
        //     //}

        //}CalculateMonthlyFeeindividual()
        //

        //$("#CountryOrigin option=[value=SaudiArabia]").addAttr('selected','selected')

        //$( "#CustomArea" )
        //  .change(function () {
        //    var str = "";
        //    $( "#CustomArea option:selected" ).each(function() {
        //      str += $( this ).text() + " ";
        //    });
        //    if (str='منطقة الرياض') {$('#Riyadh_Region').fadeIn(1000)}
        //    else if (str='منطقة مكة المكرمة') {$('#Makkah_Region').fadeIn(1000)}
        //    else if (str='منطقة المدينة المنورة') {$('#Madinah_Region').fadeIn(1000)}
        //    else if (str='منطقة القصيم') {$('#Al-Qassim_Region').fadeIn(1000)}
        //    else if (str='منطقة الشرقية') {$('#Eastern_Region').fadeIn(1000)}
        //    else if (str='منطقة عسير') {$('#Asir_Region').fadeIn(1000)}
        //    else if (str='منطقة تبوك') {$('#Tabuk_Region').fadeIn(1000)}
        //    else if (str='منطقة حائل') {$('#Hail_Region').fadeIn(1000)}
        //    else if (str='منطقة الحدود الشمالية') {$('#Northern_Border_Region').fadeIn(1000)}
        //    else if (str='منطقة جازان') {$('#Jizan_Region').fadeIn(1000)}
        //    else if (str='منطقة نجران') {$('#Najran_Region').fadeIn(1000)}
        //    else if (str='منطقة الباحة') {$('#Al_Baha_Area').fadeIn(1000)}
        //    else if (str='منطقة الجوف') {$('#Al-Jouf_Region').fadeIn(1000)}
        //  })
        //.change();

        function openCityCostum(evt, cityName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("cityCostum");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }

            document.getElementById(cityName).style.display = "block";
        }
        //
        //منطقة مكة المكرمة
        //منطقة المدينة المنورة
        //منطقة القصيم
        //منطقة الشرقية
        //منطقة عسير
        //منطقة تبوك
        //منطقة حائل
        //منطقة الحدود الشمالية
        //منطقة جازان
        //منطقة نجران
        //منطقة الباحة
        //
    </script>
</body>

</html>