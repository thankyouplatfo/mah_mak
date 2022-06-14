@extends('layouts.app')
@section('title', config('app.name') . ' | التسجيل')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
    <h1>التسجيل</h1>
@endsection
@section('content')
    <div class="w3-container w3-content" style="max-width:1400px;">
        <form class="w3-container w3-padding w3-white w3-padding-16 w3-section signIn">
            <p>
                <label for="firstName">الاسم الأول</label>
                <input type="text" class="w3-light-grey firstName" name="firstName" id="firstName"
                    style="border: 0!important;" placeholder="البريد الإلكتروني">
            </p>
            <p>
                <label for="lastName">الاسم الأخير</label>
                <input type="text" class="w3-light-grey lastName" name="lastName" id="lastName" style="border: 0!important;"
                    placeholder="البريد الإلكتروني">
            </p>
            <p>
                <label for="email">البريد الإلكتروني</label>
                <input type="text" class="w3-light-grey email" name="email" id="email" style="border: 0!important;"
                    placeholder="البريد الإلكتروني">
            </p>
            <p>
                <label for="password">كلمة المرور</label>
                <input type="text" class="w3-light-grey password" name="password" id="password" style="border: 0!important;"
                    placeholder="كلمة المرور">
            </p>
            <p>
                <input type="submit" value="تسجيل">
                <a href="{{ route('login') }}" class="i-not-btn w3-xlarge"> هل تمتلك حسابا؟
                </a>
            </p>

        </form>
    </div>
@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
