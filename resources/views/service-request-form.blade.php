@extends('layouts.app')
@section('title',config('app.name').' | لوحة التحكم')
@section('themeUrl',asset('css/w3css/lib/w3-theme-teal.css'))
@section('description','محمول مكفول صفحة التحكم للمستخدم')
@section('keywords','صفحة تحكم المستخدم موقع محمول مكفول')
@section('app')
@section('containerPath')
<div class="w3-container w3-content path-container w3-animate-opacity">
    <h1>نموذج طلب خدمة</h1>
</div>
@endsection
<div class="w3-content w3-container w3-section">
    <form action="" method="get">
        <div id="select-type-service" class="section" style="display: block!important;">
            <h2>حدد نوع الخدمة</h2>
            <p>
                <label for="service_type">اسم الخدمة</label>
                <select class="service_type w3-input" name="service_type" id="service_type">
                    <option value=""></option>
                    <optgroup label="خدمات قسم النقل (الحيوانات)">
                        <option value="1"> نقل مواشي </option>
                        <option value="2">نقل طيور</option>
                        <option value="3">نقل حيوانات اليفة</option>
                        <option value="4">نقل حيوانات مفترسة</option>
                    </optgroup>
                    <optgroup label="خدمات قسم النقل (المنتجات الزراعية)">
                        <option value="5">نقل أشجار</option>
                        <option value="6">نقل أعلاف </option>
                        <option value="7">نقل شتلات زراعية </option>
                    </optgroup>
                    <optgroup label="خدمات قسم النقل (بضائع)">
                        <option value="8">نقل بضائع</option>
                        <option value="9">نقل أثاث منزلي</option>
                        <option value="10">نقل محتويات (مخزن أو دكان وخلافه)</option>
                    </optgroup>
                    <optgroup label="خدمات قسم (معلم/ين الفك والتركيب)">
                        <option value="11">خدمة الفك فقط</option>
                        <option value="12">خدمة التركيب فقط</option>
                        <option value="13">خدمتي الفك والتركيب معا</option>
                    </optgroup>
                    <optgroup label="خدمات قسم (عمال التحميل والتنزيل)">
                        <option value="14">خدمة التحميل فقط</option>
                        <option value="15">خدمة التنزيل فقط</option>
                        <option value="16">خدمتي تحميل والتنزيل معا </option>
                    </optgroup>
                </select>
            </p>
        </div>
        <!--start details-animals مواشي-->
        <div id="details-animals" class="section hide">
            <h2>التفاصيل | <span class="ad-title"></span></h2>
            <p>
                <label for="animalsAdTitle">عنوان الإعلان</label>
                <input class="animalsAdTitle" name="animalsAdTitle" id="animalsAdTitle">
            </p>
            <p>
                <input class="animalsEmphasisConditions" name="animalsEmphasisConditions" id="animalsEmphasisConditions" type="radio">
                <label for="animalsEmphasisConditions">لقد قمت بقراءة <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'" id="animalsEmphasisConditions-modal" class="i-not-btn bold cnsb-txt-red i"> الشروط</a> وأنا موافق عليها
                </label>
            </p>
            <div class="w3-row-padding w3-stretch">
                <p class="w3-col l4 w3-right">
                    <label for="animalsNumber">ما هو عدد الحيوانات التي تريد نقلها ؟</label>
                    <input class="animalsNumber" name="animalsNumber" id="animalsNumber" type="number" min="1">
                </p>
                <!--
                        <p class="w3-col l4 w3-right">
                        <label for="animals-case">حالة الحيوان</label>
                        <input class="animals-case" name="animals-case" id="animals-case">
                        </p>
                    -->
                <p class="w3-col l4 w3-right">
                    <label for="animalsCage">هل تمتلك قفصا للحيوانات المراد نقلها ؟</label>
                    <select class="animalsCage special-selection" name="animalsCage" id="animalsCage">
                        <option value="1">نعم</option>
                        <option value="2">لا</option>
                        <option value="3">لا ينطبق (اختر في حالة المواشي)</option>
                    </select>
                </p>
                <p class="w3-col l4">
                    <label for="animalsVehicle">ماهو نوع المركبة التي تراها مناسبة لخدمتك ؟</label>
                    <select class="animalsVehicle special-selection" name="animalsVehicle" id="animalsVehicle">
                        <option value="1">شاحنة نقل كبيرة جدا</option>
                        <option value="2">شاحنة نقل كبيرة</option>
                        <option value="3">شاحنة نقل صغيرة</option>
                        <option value="4">دباب</option>
                        <option value="5">وانيت</option>
                    </select>

                </p>
            </div>
            <p>
                <label for="animalsDescription">أضف تفاصيل أكثر (اختياري)</label>
                <textarea class="animalsDescription" name="animalsDescription" id="animalsDescription" rows="5"></textarea>
            </p>
            <p>
                <label for="animalsFiles">قم بإضافة صور لإعلانك (اختياري)</label>
                <input class="animalsFiles" name="animalsFiles" id="animalsFiles" type="file">
            </p>
            <a class="steps-button steps-button-3" href="javascript:void(0)">التالي</a>
            <!--end details-animals-->
        </div>
        <!--start details-planting أشجار-->
        <div id="details-planting" class="section hide">
            <h2>التفاصيل | <span class="ad-title"></span></h2>
            <p>
                <label for="plantingAdTitle">عنوان الإعلان</label>
                <input class="plantingAdTitle" name="plantingAdTitle" id="plantingAdTitle">
            </p>
            <p>
                <input class="plantingEmphasisConditions" name="plantingEmphasisConditions" id="plantingEmphasisConditions" type="radio">
                <label for="plantingEmphasisConditions">لقد قمت بقراءة <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'" id="plantingEmphasisConditions-modal" class="i-not-btn"> الشروط</a> وأنا موافق عليها
                </label>
            </p>
            <div class="w3-row-padding w3-stretch">
                <p class="w3-col l5 w3-right">
                    <label for="plantingWeight">ماهو وزن منقولاتك ؟</label>
                    <input class="plantingWeight" name="plantingWeight" id="plantingWeight" type="number" placeholder="أكتب وزن تقديري لمنقولاتك">
                </p>
                <p class="w3-col l2 w3-right">
                    <label for="plantingWeightUnit">وحدة الوزن</label>
                    <select style="padding-top: .6pc;" class="plantingWeightUnit special-selection" name="plantingWeightUnit" id="plantingWeightUnit">
                        <option value="">كيلو جرام</option>
                        <option value="">طن</option>
                    </select>
                </p>
                <!--
                        <p class="w3-col l5 w3-right">
                        <label for="planting-case">حالة الحيوان</label>
                        <input class="planting-case" name="planting-case" id="planting-case">
                        </p>
                    -->
                <p class="w3-col l5">
                    <label for="plantingVehicle">ماهو نوع المركبة التي تراها مناسبة لخدمتك ؟</label>
                    <select class="plantingVehicle special-selection" name="plantingVehicle" id="plantingVehicle">
                        <option value="1">شاحنة نقل كبيرة جدا</option>
                        <option value="2">شاحنة نقل كبيرة</option>
                        <option value="3">شاحنة نقل صغيرة</option>
                        <option value="4">دباب</option>
                        <option value="5">وانيت</option>
                    </select>

                </p>
            </div>
            <p>
                <label for="plantingDescription">أضف تفاصيل أكثر (اختياري)</label>
                <textarea class="plantingDescription" name="plantingDescription" id="plantingDescription" rows="5"></textarea>
            </p>
            <p>
                <label for="plantingFiles">قم بإضافة صور لإعلانك (اختياري)</label>
                <input class="plantingFiles" name="plantingFiles" id="plantingFiles" type="file">
            </p>
            <a class="steps-button steps-button-3" href="javascript:void(0)">التالي</a>
            <!--end details-planting-->
        </div>
        <!--start details-details-merchandise بضائع-->
        <div id="details-merchandise" class="section hide">
            <h2>التفاصيل | <span class="ad-title"></span></h2>
            <p>
                <label for="merchandiseAdTitle">عنوان الإعلان</label>
                <input class="merchandiseAdTitle" name="merchandiseAdTitle" id="merchandiseAdTitle">
            </p>
            <p>
                <input class="merchandiseEmphasisConditions" name="merchandiseEmphasisConditions" id="merchandiseEmphasisConditions" type="radio">
                <label for="merchandiseEmphasisConditions">لقد قمت بقراءة <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'" id="merchandiseEmphasisConditions-modal" class="i-not-btn"> الشروط</a> وأنا موافق
                    عليها
                </label>
            </p>
            <div class="w3-row-padding w3-stretch">
                <p class="w3-col l5 w3-right">
                    <label for="merchandiseWeight">ماهو وزن منقولاتك ؟</label>
                    <input class="merchandiseWeight" name="merchandiseWeight" id="merchandiseWeight" type="number" placeholder="أكتب  تقديري لمنقولاتك">
                </p>
                <p class="w3-col l2 w3-right">
                    <label for="merchandiseWeightUnit">وحدة الوزن</label>
                    <select class="merchandiseWeightUnit special-selection" name="merchandiseWeightUnit" id="merchandiseWeightUnit">
                        <option value="">كيلو جرام</option>
                        <option value="">طن</option>
                    </select>
                </p>
                <!--
                        <p class="w3-col l5 w3-right">
                        <label for="merchandise-case">حالة الحيوان</label>
                        <input class="merchandise-case" name="merchandise-case" id="merchandise-case">
                        </p>
                    -->
                <p class="w3-col l5">
                    <label for="merchandiseVehicle">ماهو نوع المركبة التي تراها مناسبة لخدمتك ؟</label>
                    <select class="merchandiseVehicle special-selection" name="merchandiseVehicle" id="merchandiseVehicle">
                        <option value="1">شاحنة نقل كبيرة جدا</option>
                        <option value="2">شاحنة نقل كبيرة</option>
                        <option value="3">شاحنة نقل صغيرة</option>
                        <option value="4">دباب</option>
                        <option value="5">وانيت</option>
                    </select>

                </p>
            </div>
            <p>
                <label for="merchandiseDescription">أضف تفاصيل أكثر (اختياري)</label>
                <textarea class="merchandiseDescription" name="merchandiseDescription" id="merchandiseDescription" rows="5"></textarea>
            </p>
            <p>
                <label for="merchandiseFiles">قم بإضافة صور لإعلانك (اختياري)</label>
                <input class="merchandiseFiles" name="merchandiseFiles" id="merchandiseFiles" type="file">
            </p>
            <a class="steps-button steps-button-3" href="javascript:void(0)">التالي</a>
            <!--end merchandise-->
        </div>
        <!--start details-dismantling-workers فك تركيب-->
        <div id="details-dismantling-workers" class="section hide">
            <h2>التفاصيل | <span class="ad-title"></span></h2>
            <p>
                <label for="dismantlingWorkersAdTitle">عنوان الإعلان</label>
                <input class="dismantlingWorkersAdTitle" name="dismantlingWorkersAdTitle" id="dismantlingWorkersAdTitle">
            </p>
            <p>
                <input class="dismantlingWorkersEmphasisConditions" name="dismantlingWorkersEmphasisConditions" id="dismantlingWorkersEmphasisConditions" type="radio">
                <label for="dismantlingWorkersEmphasisConditions">لقد قمت بقراءة <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'" id="dismantlingWorkersEmphasisConditions-modal" class="i-not-btn"> الشروط</a> وأنا
                    موافق عليها
                </label>
            </p>
            <div class="w3-row-padding w3-stretch">
                <label for="dismantlingWorkersContents">سيقوم معلم/ين الفك والتركيب بفك/تركيب/فك وتركيب محتويات
                </label>
                <select class="dismantlingWorkersContents" name="dismantlingWorkersContents" id="dismantlingWorkersContents">
                    <option value="1">غرفة</option>
                    <option value="2">عدد من الغرف</option>
                    <option value="3">شقة من غرفتين</option>
                    <option value="4">شقة من 3-5 غرف</option>
                    <option value="5">شقة من 7 غرف أو أكثر</option>
                    <option value="6">بيت شعبي</option>
                    <option value="7">طابق كامل</option>
                    <option value="8">قصر</option>
                    <option value="9">محل تجاري</option>
                    <option value="10">أخرى</option>
                </select>
            </div>
            <p>
                <label for="dismantlingWorkersDescription">أضف تفاصيل أكثر (اختياري)</label>
                <textarea class="dismantlingWorkersDescription" name="dismantlingWorkersDescription" id="dismantlingWorkersDescription" rows="5"></textarea>
            </p>
            <p>
                <label for="dismantlingWorkersFiles">قم بإضافة صور لإعلانك (اختياري)</label>
                <input class="dismantlingWorkersFiles" name="dismantlingWorkersFiles" id="dismantlingWorkersFiles" type="file">
            </p>
            <a class="steps-button steps-button-location" href="javascript:void(0)">التالي</a>
            <!--end details-dismantling-workers-->
        </div>
        <!--start details-upload-download-workers تحميل تنزيل-->
        <div id="details-upload-download-workers" class="section hide">
            <h2>التفاصيل | <span class="ad-title"></span></h2>
            <p>
                <label for="uploadDownloadWorkersAdTitle">عنوان الإعلان</label>
                <input class="uploadDownloadWorkersAdTitle" name="uploadDownloadWorkersAdTitle" id="uploadDownloadWorkersAdTitle">
            </p>
            <p>
                <input class="uploadDownloadWorkersEmphasisConditions" name="uploadDownloadWorkersEmphasisConditions" id="uploadDownloadWorkersEmphasisConditions" type="radio">
                <label for="uploadDownloadWorkersEmphasisConditions">لقد قمت بقراءة <a href="javascript:void(0)" onclick="document.getElementById('id01').style.display='block'" id="uploadDownloadWorkersEmphasisConditions-modal" class="i-not-btn"> الشروط</a>
                    وأنا
                    موافق عليها
                </label>
            </p>
            <div class="w3-row-padding w3-stretch">
                <label for="uploadDownloadWorkersContents">سيقوم عامل/عمال التحميل والتنزيل بتحميل/تنزيل/تحميل
                    وتنزيل محتويات
                </label>
                <select class="uploadDownloadWorkersContents" name="uploadDownloadWorkersContents" id="uploadDownloadWorkersContents">
                    <option value="1">غرفة</option>
                    <option value="2">عدد من الغرف</option>
                    <option value="3">شقة من غرفتين</option>
                    <option value="4">شقة من 3-5 غرف</option>
                    <option value="5">شقة من 7 غرف أو أكثر</option>
                    <option value="6">بيت شعبي</option>
                    <option value="7">طابق كامل</option>
                    <option value="8">قصر</option>
                    <option value="9">محل تجاري</option>
                    <option value="10">أخرى</option>
                </select>
            </div>
            <p>
                <label for="uploadDownloadWorkersDescription">أضف تفاصيل أكثر (اختياري)</label>
                <textarea class="uploadDownloadWorkersDescription" name="uploadDownloadWorkersDescription" id="uploadDownloadWorkersDescription" rows="5"></textarea>
            </p>
            <p>
                <label for="uploadDownloadWorkersFiles">قم بإضافة صور لإعلانك (اختياري)</label>
                <input class="uploadDownloadWorkersFiles" name="uploadDownloadWorkersFiles" id="uploadDownloadWorkersFiles" type="file">
            </p>
            <a class="steps-button steps-button-location" href="javascript:void(0)">التالي</a>
            <!--end details-upload-download-workers-->
        </div>
        <!-- start Terms of Service modal-->
        <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
                <header>
                    <h3>
                        محمول مكفول | نموذج نشر إعلان | شروط تقديم الخدمات
                    </h3>
                </header>
                <div class="w3-container">
                    <span onclick="document.getElementById('id01').style.display='none'" class="w3-display-topleft w3-bar-item w3-grey w3-large w3-button">&times;</span>
                    <ul class="w3-ul w3-text-black">
                        <li>تذكر يمكن لمقدم الخدمة أخذ فرق السعر في حال خالفت الخدمة المطلوبة الخدمة الموصوفة
                            في النموذج أدناه</li>
                        <li>يقوم السائق فقط بنقل المنقولات ولا يقوم بمهمة التحميل والتنزيل وخلاف ذلك.
                        </li>
                        <li>قد أمنت ما أملك من حيوانات بشكل لا يشكل ضرر بتاتا على الناقل</li>
                    </ul>
                </div>
                <footer>
                    <h4>
                        محمول مكفول
                    </h4>
                </footer>
            </div>
            <!-- end Terms of Service -->
        </div>
        <!-- start Payment terms-->
        <div id="id02" class="w3-modal">
            <div class="w3-modal-content">
                <header>
                    <h3>
                        محمول مكفول | نموذج نشر إعلان | شروط المدفوعات
                    </h3>
                </header>
                <div class="w3-container">
                    <span onclick="document.getElementById('id02').style.display='none'" class="w3-display-topleft w3-bar-item w3-grey w3-large w3-button">&times;</span>
                    <ul class="w3-ul">
                        <li>لأننا نتبع سياسة الإعلان الذهبي</li>
                    </ul>
                </div>
                <footer>
                    <h4>
                        محمول مكفول
                    </h4>
                </footer>
            </div>
            <!-- end Payment terms-->
        </div>
        <div id="itinerary" class="section hide">
            <h2>مسار الرحلة</h2>
            <div class="w3-row-padding w3-stretch">
                <p class="w3-col l4 w3-right">
                    <label for="fromArea">من </label>
                    <input class="fromArea" name="fromArea" id="fromArea" type="text" placeholder="من">
                </p>
                <p class="w3-col l4 w3-right">
                    <label for="toArea"> إلى</label>
                    <input class="toArea" name="toArea" id="toArea" type="text" placeholder="إلى">
                </p>
                <p class="w3-col l4 w3-right">
                    <label for="distance">المسافة</label>
                    <input class="distance" name="distance" id="distance" type="text" placeholder="المسافة">
                </p>
                <p id="itineraryRoadCondition1" class="w3-col l6 w3-right">
                    <label for="itineraryRoadCondition1">
                        <input class="itineraryRoadCondition1" name="itineraryRoadCondition1" id="itineraryRoadCondition1" type="checkbox">
                        يتضمن مسار الرحلة طريق برية
                    </label>
                </p>
                <p id="itineraryRoadCondition2" class="w3-col l6 w3-right">
                    <label for="itineraryRoadCondition2">
                        <input class="itineraryRoadCondition2" name="itineraryRoadCondition2" id="itineraryRoadCondition2" type="checkbox">
                        يتضمن مسار الرحلة طريق وعرة
                    </label>
                </p>
                <p class="w3-col" style="margin: 0!important;padding:0!important">
                    <a href="javascript:void(0)" class="steps-button steps-button-4">التالي</a>
                </p>
            </div>
        </div>
        <div id="location" class="section hide">
            <h2>الموقع</h2>
            <p>
                <label for="area">حدد موقعك</label>
                <input class="area" name="area" id="area" type="text" placeholder="حدد موقعك">
            </p>
            <a href="javascript:void(0)" class="steps-button steps-button-4">التالي</a>
        </div>
        <div id="pay-and-post" class="section hide">
            <h2>الدفع والنشر</h2>
            <p style="padding-bottom: 0!important;">
                <label for="price">السعر</label>
                <select class="price" name="price" id="price">
                    <option value="1">100 ريال سعودي</option>
                    <option value="2">200 ريال سعودي</option>
                    <option value="3">400 ريال سعودي</option>
                    <option value="4">800 ريال سعودي</option>
                    <option value="5">1000 ريال سعودي</option>
                    <option value="6">2000 ريال سعودي</option>
                    <option value="7">4000 ريال سعودي</option>
                    <option value="8">6000 ريال سعودي</option>
                    <option value="9">8000 ريال سعودي</option>
                    <option value="10">10000 ريال سعودي</option>
                </select>
            </p>
            <ul class="w3-ul">
                <li><a href="javascript:void(0)" onclick="document.getElementById('id02').style.display='block'" class="i-not-btn bold i cnsb-txt-red">لماذا أقوم بالدفع قبل النشر</a></li>
            </ul>
            <p style="padding-bottom: 0!important;">
                <label for="paymentMail">معالجة المدفوعات</label>
                <input class="paymentMail i-not-btn w3-text-black w3-left-align" name="paymentMail" id="paymentMail" type="email" value="moatazads.795@gmail.com" disabled>
            </p>
            <button type="submit" class="steps-button">النشر</button>
        </div>
    </form>
</div>

@section('followUs')
<div class="w3-section ">
    <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على وسائل التواصل الإجتماعي.</h2>
</div>
@endsection

@endsection