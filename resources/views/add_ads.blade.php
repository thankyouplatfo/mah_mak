@extends('layouts.app')
@section('title', config('app.name') . ' | إضافة إعلان')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('app')
@section('containerPath')
    <h1>إضافة إعلان</h1>
@endsection
@section('content')
    <!--start page-->
    <div class="w3-container w3-content" style="max-width:1400px;">
        <form action="" method="get">
            <!--step 1-->
            <div id="select-type-service" class="section w3-row-padding" style="display: block!important;">
                <h2>العنوان والتصنيفات</h2>
                <p class="w3-right w3-col l6">
                    <label for="ad_title">عنوان الإعلان</label>
                    <input class="ad_title" name="ad_title" id="ad_title">
                </p>
                <!---->
                <p class="w3-right w3-col l6">
                    <label for="service_type">اختر تصنيفات الإعلان الفرعي للإعلان</label>
                    <select class="service_type" name="service_type" id="service_type">
                        <optgroup label="خدمات قسم النقل">
                            <option value="1"> نقل مواشي </option>
                            <option value="1">نقل طيور</option>
                            <option value="1">نقل حيوانات اليفة</option>
                            <option value="1">نقل حيوانات مفترسة</option>
                            <option value="1">نقل أشجار</option>
                            <option value="1">نقل شتلات زراعية</option>
                            <!---->
                            <option value="2">نقل أعلاف </option>
                            <option value="2">نقل بضائع</option>
                            <!---->
                            <option value="3">نقل أثاث</option>
                        </optgroup>
                        <optgroup label="خدمات قسم (معلم/ين الفك والتركيب)">
                            <option value="3">فك والتركيب</option>
                        </optgroup>
                        <optgroup label="خدمات قسم (عمال التحميل والتنزيل)">
                            <option value="3">خدمات التحميل والتنزيل</option>
                        </optgroup>
                    </select>
                </p>
            </div>
            <!--step 3-->
            <div id="details" class="section hide">
                <h2>التفاصيل | <span class="ad-title"></span></h2>
                <div class="w3-row-padding">
                    <p class="w3-col w3-right hide rest_fields" id="number">
                        <label for="number">العدد ؟</label>
                        <input class="number" name="number" id="number" type="number" min="1">
                    </p>
                    <p class="w3-col w3-right hide rest_fields" id="vehicle">
                        <label for="vehicle">ماهو نوع المركبة التي تراها مناسبة لخدمتك ؟</label>
                        <select class="vehicle special-selection" name="vehicle" id="vehicle">
                            <option value="1">شاحنة نقل كبيرة جدا</option>
                            <option value="2">شاحنة نقل كبيرة</option>
                            <option value="3">شاحنة نقل صغيرة</option>
                            <option value="4">دباب</option>
                            <option value="5">وانيت</option>
                        </select>
                    </p>
                    <p class="w3-col w3-right hide rest_fields" id="weight">
                        <label for="weight">ماهو وزن منقولاتك ؟</label>
                        <input class="weight" name="weight" id="weight" type="number"
                            placeholder="أكتب وزن تقديري لمنقولاتك">
                    </p>
                    <p class="w3-col w3-right hide rest_fields" id="weight_unit">
                        <label for="weight_unit">وحدة الوزن</label>
                        <select style="padding-top: .6pc;" class="weight_unit special-selection" name="weight_unit"
                            id="weight_unit">
                            <option value="">كيلو جرام</option>
                            <option value="">طن</option>
                        </select>
                    </p>
                    <p class="w3-col w3-right hide rest_fields" id="workers_contents">
                        <label for="workers_contents">مقدار العمل </label>
                        <select class="workers_contents" name="workers_contents" id="workers_contents">
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
                        <span class="w3-section w3-block">
                            <span class="w3-block err">ما المقصود بمقدار العمل ؟</span>
                            <span class="w3-block w3-opacity">
                                Duis commodo laborum pariatur ex ipsum ullamco laborum mollit veniam mollit aliquip enim in
                                esse.
                                Tempor et aliqua dolor dolore. Pariatur fugiat anim ut mollit laborum tempor magna laborum
                                voluptate deserunt.
                                Eiusmod tempor commodo deserunt dolor ut enim quis exercitation amet eiusmod. Fugiat
                                pariatur
                                cupidatat sit pariatur ipsum tempor eiusmod non ea in culpa. Culpa consectetur quis tempor
                                Lorem
                                laborum nostrud sit. Esse consequat sint aliquip elit. Mollit ipsum minim tempor ullamco in
                                commodo
                                excepteur Lorem ex excepteur consequat.
                            </span>
                        </span>
                    </p>
                    <p class="w3-col w3-right">
                        <label for="details">أضف تفاصيل أكثر (اختياري)</label>
                        <textarea class="details" name="details" id="details" rows="5"></textarea>
                    </p>
                    <p class="w3-col w3-right">
                        <label for="images">قم بإضافة صور لإعلانك (اختياري)</label>
                        <input class="images" name="images" id="images" type="file" multiple>
                    </p>
                    <!---->
                    <p class="w3-col">
                        <a class="steps-button steps-button-3" href="javascript:void(0)">التالي</a>
                    </p>
                </div>
            </div>
            <!--step 3-->
            <div id="itinerary" class="section hide">
                <h2>مسار الرحلة</h2>
                <div class="w3-row-padding">
                    <p class="w3-col   w3-right">
                        <label for="fromArea">من </label>
                        <input class="fromArea" name="fromArea" id="fromArea" type="text" placeholder="من">
                    </p>
                    <p class="w3-col   w3-right">
                        <label for="toArea"> إلى</label>
                        <input class="toArea" name="toArea" id="toArea" type="text" placeholder="إلى">
                    </p>
                    <p class="w3-col   w3-right">
                        <label for="distance">المسافة</label>
                        <input class="distance" name="distance" id="distance" type="text" placeholder="المسافة">
                    </p>
                    <p class="w3-col   w3-right ">
                        <label for="itineraryRoadCondition1">
                            <input class="itineraryRoadCondition1" name="itineraryRoadCondition1"
                                id="itineraryRoadCondition1" type="checkbox">
                            يتضمن مسار الرحلة طريق برية
                        </label>
                    </p>
                    <p class="w3-col   w3-right ">
                        <label for="itineraryRoadCondition2">
                            <input class="itineraryRoadCondition2" name="itineraryRoadCondition2"
                                id="itineraryRoadCondition2" type="checkbox">
                            يتضمن مسار الرحلة طريق وعرة
                        </label>
                    </p>
                </div>
                <a href="javascript:void(0)" class="steps-button steps-button-4">التالي</a>
            </div>
            <!--step 3-->
            <div id="location" class="section hide">
                <h2>الموقع</h2>
                <div class="w3-row-padding">
                    <p class="w3-col   w3-right">
                        <label for="city">المدينة</label>
                        <input class="city" name="city" id="city">
                    </p>
                    <p class="w3-col   w3-right">
                        <label for="district">الحي</label>
                        <input class="district" name="district" id="district">
                    </p>
                </div>
                <a href="javascript:void(0)" class="steps-button steps-button-4">التالي</a>
            </div>
            <!--step 4-->
            <div id="post" class="section hide">
                <h2>السعر والشروط والنشر</h2>
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
                @include('inc.cnditions_input')
                <input type="submit">
            </div>
        </form>
        <!--end page-->
    </div>

@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
