@extends('layouts.app')
@section('title', config('app.name') . ' | تطبيق الدردشة')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('app')
@section('containerPath')
        <h1>تطبيق الدردشة</h1>
@endsection
@section('content')
    <!-- Page Container -->
    <div class="w3-content">
        <!-- The Grid -->
        <div class="w3-row-padding w3-section w3-padding-small">
            <div class="w3-col l8 w3-section">
                <header class="w3-bar">
                    <ul class="w3-ul w3-card-4">
                        <li class="w3-bar">
                            <button onclick="openTab(event, 'id01', 'closeThis', 'tabLink')" class="w3-button tabLink"><i
                                    class="w3-bar-item w3-button w3-xxxlarge w3-left w3-padding-16 fa-solid fa-arrow-up-right-from-square"></i></button>
                            <div id="id01" class="w3-modal">
                                <div class="w3-modal-content">
                                    <div class="w3-container w3-teal header">
                                        <span onclick="closeAndRmColor('id01', 'w3-theme-action')"
                                            class="w3-button w3-display-topleft w3-xlarge"><i
                                                class="fa fa-close"></i></span>
                                        <h2 class="i-not-head">معلومات الإعلان</h2>
                                    </div>
                                    <div class="w3-container w3-padding-16">
                                        <div
                                            class="w3-col l12 w3-theme-l5 w3-card-4 w3-container w3-row w3-small w3-padding-16">
                                            <div class="w3-col l12 w3-right w3-padding-small"><i class="fa fa-user"
                                                    aria-hidden="true"></i> معرف المستخدم:</div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i
                                                    class="fa-solid fa-puzzle-piece"></i> القسم:</div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i
                                                    class="fa-solid fa-file-signature"></i> اسم الخدمة:{{ '' }}
                                            </div>
                                            <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                                    class="fa-solid fa-arrow-up-1-9"></i><abbr title=""><span
                                                        class="w3-text set-tooltip w3-tag cnsb-black w3-small">عدد الحيوانات
                                                        التي ستقوم بنقلها</span>العدد</abbr>:{{ '' }}</div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-dog"></i>
                                                حالة القفص:{{ '' }}</div>
                                            <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                                    class="fa-solid fa-truck"></i> <abbr title=""><span
                                                        class="w3-text set-tooltip w3-tag cnsb-black w3-small"> نوع المركبة
                                                        التي
                                                        يرها العميل مناسبه لخدمته </span>نوع المركبة
                                                </abbr>:{{ '' }}
                                            </div>
                                            <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                                    class="fa-solid fa-weight-hanging"></i> <abbr title=""> <span
                                                        class="w3-text set-tooltip w3-tag cnsb-black w3-small"> هذا هو الوزن
                                                        التقديري الذي قام بوضعه المعلن</span> الوزن 500 {{ 'كيلو' }}
                                                </abbr></div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i
                                                    class="fa-solid fa-street-view"></i> من:</div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i
                                                    class="fa-solid fa-street-view"></i> إلى:</div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i
                                                    class="fa-solid fa-road"></i>
                                                المسافة:</div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i> الموقع:</div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i class="fa fa-comments"
                                                    aria-hidden="true"></i> عدد المفاوضين:</div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i class="fa fa-calendar"
                                                    aria-hidden="true"></i> تاريخ النشر:</div>
                                            <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                                    class="fa-solid fa-briefcase"></i> <abbr title=""> <span
                                                        class="w3-text set-tooltip w3-tag cnsb-black w3-small"> سيقوم
                                                        معلم/ين
                                                        الفك والتركيب بفك/تركيب/فك وتركيب محتويات {{ 'مقدار العمل' }}
                                                    </span>
                                                    مقدار العمل </abbr> :{{ '' }} </div>
                                            <div class="w3-col l6 w3-right w3-padding-small"><i
                                                    class="fa-solid fa-fingerprint"></i> الرقم المميز للإعلان:</div>

                                        </div>
                                    </div>


                                    <div class="w3-container">
                                        <h3>التقييم</h3>
                                    </div>
                                    <form action="" class="w3-container">
                                        <div class="w3-row-padding w3-section">
                                            <div class="w3-col">
                                                <input type="range" id="professionalToDealWith"
                                                    name="professionalToDealWith" min="0" max="100"> <label
                                                    for="professionalToDealWith">الاحترافية
                                                    بالتعامل</label>
                                            </div>
                                            <div class="w3-col">
                                                <input type="range" id="communicationAndFollowUp"
                                                    name="communicationAndFollowUp" min="0" max="100"> <label
                                                    for="communicationAndFollowUp">التواصل والمتابعة</label>
                                            </div>
                                            <div class="w3-col">
                                                <input type="range" id="qualityOfDeliveredWork"
                                                    name="qualityOfDeliveredWork" min="0" max="100"> <label
                                                    for="qualityOfDeliveredWork">جودة العمل
                                                    المسلّم</label>
                                            </div>
                                            <div class="w3-col">
                                                <input type="range" id="experienceInTheProjectField"
                                                    name="experienceInTheProjectField" min="0" max="100"> <label
                                                    for="experienceInTheProjectField">الخبرة بمجال المشروع</label>
                                            </div>
                                            <div class="w3-col">
                                                <input type="range" id="onTimeDelivery" name="onTimeDelivery" min="0"
                                                    max="100">
                                                <label for="onTimeDelivery">التسليم فى الموعد</label>
                                            </div>
                                            <div class="w3-col">
                                                <input type="range" id="dealingWithHimAgain" name="dealingWithHimAgain"
                                                    min="0" max="100"> <label for="dealingWithHimAgain">التعامل معه مرّة
                                                    أخرى</label>
                                            </div>
                                            <div class="w3-col">
                                                <input type="submit" class="w3-light-grey">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="w3-container w3-teal w3-center footer">
                                        <p>{{ config('app.name') }}</p>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('images/users/profile/avatar_hat.jpg') }}"
                                class="w3-right w3-bar-item w3-circle w3-hide-small" alt="blablabla" style="width:95px">
                            <div class="w3-right w3-bar-item">
                                <a href="ads" target="_blank" class="i-not-btn">
                                    <h3 style="color: white!important;">اسم مقدم العرض</h3>
                                </a>
                                <h4 class="w3-right" style="color: white!important;">معلن</h4>
                            </div>
                        </li>
                    </ul>
                </header>
                <div class="cnsb-lightgrey w3-row-padding" style="min-height: 55vh;">
                    <div class="w3-col s7 m7 l7 w3-right">
                        <div
                            class="w3-padding-small w3-margin w3-rightbar w3-border-red w3-border-theme w3-border w3-theme-l3">
                            <p class="w3-right-align">السلام عليكم .</p>
                        </div>
                    </div>
                    <div class="w3-col s7 m7 l7 w3-left">
                        <div
                            class="w3-padding-small w3-margin w3-leftbar w3-border-red w3-border-theme w3-border w3-theme-l5">
                            <p class="w3-left-align">وعليكم السلام.</p>
                        </div>
                    </div>
                </div>
                <footer class="w3-col l12 w3-padding-16">
                    <form action="no-action" class="w3-row-padding padding-0">
                        <div class="w3-col w3-right l11">
                            <input class="w3-right w3-right-align" type="text">
                        </div>
                        <div class="w3-col w3-right l1">
                            <button class="w3-right w3-theme-d1" style="margin-top: 5px;padding-top:10px;width:100%"
                                type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </form>
                </footer>
            </div>
            <div class="w3-col l4 w3-section" style="height: 750px;overflow:auto">
                <div class="w3-container">
                    <h3>هل تم تقديم الخدمة إليك</h3>
                </div>
                <form action="" class="w3-container w3-clear">
                    <p class="w3-col">
                        <input class="w3-radio inline" type="radio" name="gender" value="male" checked>
                        <label>نعم</label>
                    </p>
                    <p class="w3-col">
                        <input class="w3-radio inline" type="radio" name="gender" value="female">
                        <label>لا</label>
                    </p>
                    <p class="w3-col">
                        <input type="submit" class="w3-light-grey">
                    </p>
                </form>
                <hr class="w3-border-red">
                <form action="" class="w3-container w3-clear">
                    <input type="submit" class="w3-block" value="الخروج من وضع التفاوض المبدأي">
                </form>
                <hr class="w3-border-red">
                <div class="w3-section">
                    @include('inc.serv_card2')
                </div>
            </div>
        </div>
        <!-- End Page Container -->
    </div>

@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
