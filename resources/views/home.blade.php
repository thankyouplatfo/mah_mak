@extends('layouts.app')
@section('title', config('app.name') . ' | جميع الأقسام')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
    <h1>جميع الأقسام</h1>
@endsection
@section('content')
    <!-- Page Container -->
    <div class="w3-container w3-content" style="max-width:1400px;">
        <!-- The Grid -->
        <div class="w3-row">
            <!--Basic Categories-->
            <div class="w3-row w3-section w3-light-grey" style="height: 135px;margin-bottom:100px;">
                <div class="w3-col w3-right l12 w3-xlarge w3-light-grey"
                    style="max-width: 100%;overflow-y:hidden;overflow-x:auto;white-space:nowrap;height:inherit">
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h2 class="i-not-head w3-center">
                            <i class="fa fa-truck w3-jumbo" aria-hidden="true"></i><span class="w3-block w3-center"> قسم
                                النقل</span>
                        </h2>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h2 class="i-not-head w3-center">
                            <i class="fa-solid fa-truck-ramp-box w3-jumbo" aria-hidden="true"></i><span
                                class="w3-block w3-center"> قسم التحميل وتنزيل</span>
                        </h2>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h2 class="i-not-head w3-center">
                            <i class="fa-solid fa-screwdriver-wrench w3-jumbo" aria-hidden="true"></i><span
                                class="w3-block w3-center"> قسم الفك والتركيب</span>
                        </h2>
                    </a>
                </div>
            </div>
            <!--Sub Categories-->
            <div class="w3-row w3-section w3-light-grey" style=";margin-bottom:100px;">
                <div class="w3-col w3-right w3-light-grey"
                    style="max-width: 100%;overflow-y:hidden;overflow-x:auto;white-space:nowrap">
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">نقل مواشي </span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">نقل طيور</span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">نقل حيوانات اليفة</span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">نقل حيوانات مفترسة</span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">نقل أشجار</span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">نقل شتلات زراعية</span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">نقل أعلاف </span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">نقل بضائع</span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">نقل أثاث</span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">فك والتركيب</span>
                        </h3>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h3 class="i-not-head w3-center w3-text-black w3-medium">
                            <span class="w3-block w3-center">خدمات التحميل والتنزيل</span>
                        </h3>
                    </a>
                </div>
            </div>
            <!--Sub Categories-->
            <div class="w3-bar w3-theme-l3">
                <a href="javascript:void(0)" onclick="openTab(event,'ads','container','tabLink')"
                    class="w3-right w3-theme-action tabLink w3-bar-item w3-button">
                    الإعلانات
                </a>
                <a href="javascript:void(0)" onclick="openTab(event,'order_my_now','container','tabLink')"
                    class="w3-right tabLink w3-bar-item w3-button">
                    أطلبني الان
                </a>
                <a href="javascript:void(0)" onclick="openTab(event,'service','container','tabLink')"
                    class="w3-right tabLink w3-bar-item w3-button">
                    الخدمات
                </a>
            </div>
            <!---->
            <div class="w3-col w3-right w3-margin-top container" style="display: block" id="ads">
                <div class="w3-margin-bottom leftCloumenAdsPage">
                    <ul class="w3-ul" id="id01">
                        <li
                            class="w3-bar w3-card-4 w3-theme-l5 w3-margin-bottom w3-hover-border-theme w3-border cnsb-hov-bor-large">
                            <span onclick="this.parentElement.style.display='none'"
                                class="w3-bar-item w3-button w3-white w3-xlarge w3-left"><i
                                    class="fa fa-close"></i></span>
                            <img src="{{ asset('images/users/profile/avatar_hat.jpg') }}"
                                class="w3-bar-item w3-circle w3-hide-small w3-right" style="width:85px" alt="blablabla">
                            <div class="w3-bar-item w3-right ">
                                <a href="ads" target="_blank" class="i-not-btn">
                                    <h4 style="color: black!important;font-size:x-large">عنوان الإعلان</h4>
                                </a>
                            </div>
                            <div class="w3-bar-item w3-right w3-row-padding w3-small">
                                <div class="w3-border-top"></div>
                                <div class="w3-col l12 w3-right w3-padding-small" style="padding-top: 13px!important"><i
                                        class="fa fa-user" aria-hidden="true"></i> معرف المستخدم:</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i class="fa-solid fa-puzzle-piece"></i>
                                    القسم:</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i
                                        class="fa-solid fa-file-signature"></i>
                                    اسم الخدمة:{{ '' }}</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small w3-tooltip"><i
                                        class="fa-solid fa-arrow-up-1-9"></i>
                                    <abbr title="">
                                        <span class="w3-text set-tooltip w3-tag cnsb-black w3-small">عدد الحيوانات التي
                                            ستقوم بنقلها</span>
                                        العدد
                                    </abbr>:{{ '' }}
                                </div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i class="fa-solid fa-dog"></i> حالة
                                    القفص:{{ '' }}</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small w3-tooltip"><i
                                        class="fa-solid fa-truck"></i>
                                    <abbr title="">
                                        <span class="w3-text set-tooltip w3-tag cnsb-black w3-small"> نوع المركبة التي يرها
                                            العميل مناسبه لخدمته </span>
                                        نوع المركبة
                                    </abbr>:{{ '' }}
                                </div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small w3-tooltip"><i
                                        class="fa-solid fa-weight-hanging"></i>
                                    <abbr title="">
                                        <span class="w3-text set-tooltip w3-tag cnsb-black w3-small"> هذا هو الوزن التقديري
                                            الذي قام بوضعه المعلن</span>
                                        الوزن 500 {{ 'كيلو' }}
                                    </abbr>
                                    :{{ '' }}
                                </div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i class="fa-solid fa-street-view"></i>
                                    من:
                                </div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i class="fa-solid fa-street-view"></i>
                                    إلى:</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i class="fa-solid fa-road"></i>
                                    المسافة:
                                </div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i
                                        class="fa-solid fa-road-circle-exclamation"></i> يتضمن مسار الرحلة طريق وعرة:</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i
                                        class="fa-solid fa-road-circle-exclamation"></i> يتضمن مسار الرحلة طريق برية:</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i class="fa fa-map-marker"
                                        aria-hidden="true"></i> الموقع:</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i class="fa fa-comments"
                                        aria-hidden="true"></i> عدد المفاوضين:</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small"><i class="fa fa-calendar"
                                        aria-hidden="true"></i> تاريخ النشر:</div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small w3-tooltip"><i
                                        class="fa-solid fa-briefcase"></i>
                                    <abbr title="">
                                        <span class="w3-text set-tooltip w3-tag cnsb-black w3-small"> سيقوم معلم/ين الفك
                                            والتركيب بفك/تركيب/فك وتركيب محتويات {{ 'مقدار العمل' }} </span>
                                        مقدار العمل
                                    </abbr>
                                    :{{ '' }}
                                </div>
                                <div class="w3-col m4 l3 w3-right w3-padding-small w3-clear">
                                    <i class="fa-solid fa-fingerprint"></i>
                                    الرقم المميز للإعلان:
                                </div>
                                <div class="w3-clear"></div>
                                <hr class="w3-clear w3-block">
                                <div class="w3-center w3-xxlarge bold w3-clear w3-text-theme"
                                    style="margin-top: -12px;margin-bottom: 12px;">
                                    <i id="price">
                                        {{ '500.00' }}
                                    </i>
                                    <span>ر.س</span>
                                </div>
                                @include('inc.ads.ads_url_container')
                                <div class="w3-bar w3-theme-d4 w3-large">
                                    <div class="w3-col l3 w3-right">
                                        <a href="ads" target="_blank" style="width:100%"><i
                                                class="fa-solid fa-comments"></i> بدء المفاوضة</a>
                                    </div>
                                    <div class="w3-col l3 w3-right">
                                        <a href="javascript:void(0)" style="width:100%"><i
                                                class="fa-solid fa-thumbs-up"></i> إعجاب</a>
                                    </div>
                                    <div class="w3-col l3 w3-right">
                                        <a href="javascript:void(0)" style="width:100%" id="adsUrlBtn">
                                            <i class="fa-solid fa-share"></i>
                                            شارك الإعلان
                                        </a>
                                    </div>
                                    <div class="w3-col l3 w3-right">
                                        <a href="{{ route('welcome', '#contact') }}" style="width:100%"><i
                                                class="fa-solid fa-flag"></i>
                                            إبلاغ</a>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!---->
            <div class="w3-col w3-right w3-margin-top container" style="display: none" id="order_my_now">
                <div class="w3-margin-bottom leftCloumenAdsPage">
                    <div class="w3-row-padding w3-stretch">
                        <div class="w3-col w3-right l4">
                            @include('inc.profile_for_order_my')
                        </div>
                        <div class="w3-col w3-right l4">
                            @include('inc.profile_for_order_my')
                        </div>
                        <div class="w3-col w3-right l4">
                            @include('inc.profile_for_order_my')
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="w3-col w3-right w3-margin-top container" style="display: none" id="service">
                <div class="w3-row-padding w3-stretch">
                    @include('inc.serv_card')
                    @include('inc.serv_card')
                    @include('inc.serv_card')
                </div>
            </div>
            <!-- End Grid -->
        </div>

        <!-- End Page Container -->
    </div>
    <br>
@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
