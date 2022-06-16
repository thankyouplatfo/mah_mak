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
            <!--the filter-->
            <div class="w3-row w3-section w3-light-grey" style="height: 135px;margin-bottom:100px;">
                <div class="w3-col w3-right l12 w3-xlarge w3-light-grey"
                    style="max-width: 100%;overflow-y:hidden;overflow-x:auto;white-space:nowrap;height:inherit">
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h2 class="i-not-head w3-center"><i class="fa fa-truck w3-jumbo" aria-hidden="true"></i><span
                                class="w3-block w3-center"> قسم النقل</span></h2>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h2 class="i-not-head w3-center"><i class="fa-solid fa-truck-ramp-box w3-jumbo"
                                aria-hidden="true"></i><span class="w3-block w3-center"> قسم التحميل وتنزيل</span></h2>
                    </a>
                    <a href="javascript:void(0)" target="_blank" class="w3-hover-text-theme w3-hover-none">
                        <h2 class="i-not-head w3-center"><i class="fa-solid fa-screwdriver-wrench w3-jumbo"
                                aria-hidden="true"></i><span class="w3-block w3-center"> قسم االفك والتركيب</span></h2>
                    </a>
                </div>
            </div>
            <div class="w3-col l12 w3-margin-bottom w3-show">
                <input type="text" id="show_only" onchange="w3.filterHTML('#id01', 'li', this.value)"
                    placeholder="القسم | اسم الخدمة | العدد | حالة القفص | نوع المركبة | الوزن | من | إلى | المسافة | الموقع | عدد المفاوضين | تاريخ النشر">
            </div>
            <!-- Right Column -->
            <div class="w3-col w3-right m3">
                <!-- Profile -->
                <div class="w3-card round w3-white">
                    <div class="w3-container">
                        <a href="users" class="i-not-btn">
                            <h3 class="w3-center">ملفي الشخصي</h3>
                        </a>
                        <p class="w3-center"><img src="{{ asset('images/users/profile/avatar_hat.jpg') }}"
                                class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                        <hr>
                        <p> <i class="fa fa-user fa-fw w3-large w3-text-theme"></i> محمد عبد الله </p>
                        <p> <i class="fa fa-briefcase fa-fw w3-large w3-text-theme"></i> سائق | معلم فك وتركيب | عامل تحميل
                            وتنزيل</p>
                        <p> <i class="fa fa-home fa-fw w3-large w3-text-theme"></i> مكة, السعودية</p>
                        <p> <i class="fa fa-envelope fa-fw w3-large w3-text-theme"></i> ex@mail.com</p>
                        <p> <i class="fa fa-phone fa-fw w3-large w3-text-theme"></i> 1224435534</p>
                    </div>
                </div>
                <br>
                <!-- End Right Columen -->
            </div>
            <!-- Left Column -->
            <div class="w3-col w3-right m9">
                <div class="w3-container round w3-margin-bottom leftCloumenAdsPage">
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
                                    <h4>عنوان الإعلان</h4>
                                </a>
                            </div>
                            <div class="w3-bar-item w3-right w3-row w3-small">
                                <div class="w3-col l12 w3-right w3-padding-small"><i class="fa fa-user"
                                        aria-hidden="true"></i> معرف المستخدم:</div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-puzzle-piece"></i>
                                    القسم:</div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-file-signature"></i>
                                    اسم الخدمة:{{ '' }}</div>
                                <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                        class="fa-solid fa-arrow-up-1-9"></i>
                                    <abbr title="">
                                        <span class="w3-text set-tooltip w3-tag cnsb-black w3-small">عدد الحيوانات التي
                                            ستقوم بنقلها</span>
                                        العدد
                                    </abbr>:{{ '' }}
                                </div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-dog"></i> حالة
                                    القفص:{{ '' }}</div>
                                <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                        class="fa-solid fa-truck"></i>
                                    <abbr title="">
                                        <span class="w3-text set-tooltip w3-tag cnsb-black w3-small"> نوع المركبة التي يرها
                                            العميل مناسبه لخدمته </span>
                                        نوع المركبة
                                    </abbr>:{{ '' }}
                                </div>
                                <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                        class="fa-solid fa-weight-hanging"></i>
                                    <abbr title="">
                                        <span class="w3-text set-tooltip w3-tag cnsb-black w3-small"> هذا هو الوزن التقديري
                                            الذي قام بوضعه المعلن</span>
                                        الوزن 500 {{ 'كيلو' }}
                                    </abbr>
                                    :{{ '' }}
                                </div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-street-view"></i> من:
                                </div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-street-view"></i>
                                    إلى:</div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-road"></i> المسافة:
                                </div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i
                                        class="fa-solid fa-road-circle-exclamation"></i> يتضمن مسار الرحلة طريق وعرة:</div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i
                                        class="fa-solid fa-road-circle-exclamation"></i> يتضمن مسار الرحلة طريق برية:</div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa fa-map-marker"
                                        aria-hidden="true"></i> الموقع:</div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa fa-comments"
                                        aria-hidden="true"></i> عدد المفاوضين:</div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa fa-calendar"
                                        aria-hidden="true"></i> تاريخ النشر:</div>
                                <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                        class="fa-solid fa-briefcase"></i>
                                    <abbr title="">
                                        <span class="w3-text set-tooltip w3-tag cnsb-black w3-small"> سيقوم معلم/ين الفك
                                            والتركيب بفك/تركيب/فك وتركيب محتويات {{ 'مقدار العمل' }} </span>
                                        مقدار العمل
                                    </abbr>
                                    :{{ '' }}
                                </div>
                                <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-fingerprint"></i>
                                    الرقم المميز للإعلان:</div>

                                <div class="w3-border-top w3-col l12 w3-xlarge w3-center bold margin-top-c1">
                                    <p class="w3-center margin-padding-0">
                                        500.00 ر.س
                                    </p>
                                </div>
                                <div class="w3-bar w3-col l12 w3-theme-d4">
                                    <div class="w3-col l3 w3-right">
                                        <a href="ads" target="_blank" style="width:100%"><i
                                                class="fa-solid fa-comments"></i> بدء المفاوضة</a>
                                    </div>
                                    <div class="w3-col l3 w3-right">
                                        <a href="javascript:void(0)" style="width:100%"><i class="fa-solid fa-thumbs-up"></i> إعجاب</a>
                                    </div>
                                    <div class="w3-col l3 w3-right">
                                        <a href="javascript:void(0)" style="width:100%"><i class="fa-solid fa-share"></i> شارك الإعلان</a>
                                    </div>
                                    <div class="w3-col l3 w3-right">
                                        <a href="javascript:void(0)" style="width:100%"><i class="fa-solid fa-flag"></i> إبلاغ</a>
                                    </div>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Left Column -->
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
