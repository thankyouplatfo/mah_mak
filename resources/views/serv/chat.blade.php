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
                <div>
                    @include('inc.chat')
                </div>
                <div class="w3-col l4 w3-justify w3-section" style="height: 750px;overflow-y:auto">
                    <div class="w3-margin-bottom">
                        <div class="w3-container">
                            <h3>هل تم تقديم الخدمة إليك</h3>
                        </div>
                        <form action="" class="w3-container">
                            <div class="w3-row-padding w3-section">
                                <p class="">
                                    <input class="w3-radio inline" type="radio" name="gender" value="male" checked>
                                    <label>نعم</label>
                                </p>
                                <p class="">
                                    <input class="w3-radio inline" type="radio" name="gender" value="female">
                                    <label>لا</label>
                                </p>
                                <p class="">
                                    <input type="submit" class="w3-light-grey">
                                </p>
                            </div>
                        </form>
                    </div>
                    <hr class="w3-border-red w3-border">
                    <div class="w3-col l12">
                        <form>
                            <input type="submit" class="w3-block" value="الخروج من وضع التفاوض المبدأي">
                        </form>
                    </div>
                    <div class="w3-clear"></div>
                    <hr class="w3-border-red w3-border">
                    <div class="w3-margin-bottom">
                        @include('inc.serv_card2')
                    </div>
                </div>
            </div>
            <!-- End Page Container -->
        </div>

    @endsection
@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا
            على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
