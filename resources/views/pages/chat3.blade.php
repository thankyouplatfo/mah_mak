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
                    <div class="w3-card w3-white w3-container w3-padding-16">
                        <h3>المسافة</h3>
                        <div class="w3-center">
                            <b class="w3-jumbo w3-text-grey w3-" style="font-family: monospace;direction: rtl!important">
                                100 Km
                            </b>
                        </div>
                    </div>
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
