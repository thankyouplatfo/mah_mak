@extends('layouts.app')
@section('title', config('app.name') . ' | الدفع')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
    <h1>الدفع</h1>
@endsection
@section('content')
    <div class="w3-content w3-white" style="max-width:1400px;margin-bottom:64px!important">
        <div class="w3-bar w3-theme-l3">
            <a href="#" onclick="openTab(event,'pay-by-method-1','pay-by-method','tabLink')"
                class="w3-right w3-theme-action tabLink">بطاقة ائتمانية</a>
            <a href="#" onclick="openTab(event,'pay-by-method-2','pay-by-method','tabLink')" class="w3-right tabLink">باي
                بال</a>
        </div>
        <div class="w3-container pay-by-method" id="pay-by-method-1">
            <h2>نموذج الدفع (بطاقة ائتمانية)</h2>
            <form class="w3-container w3-padding w3-white w3-padding-16 w3-section signIn">
                <p>
                    <label for="firstName">الاسم الأول</label>
                    <input class="firstName" name="firstName" id="firstName" placeholder="البريد الإلكتروني">
                </p>
                <p>
                    <label for="lastName">الاسم الأخير</label>
                    <input class="lastName" name="lastName" id="lastName" placeholder="البريد الإلكتروني">
                </p>
                <p>
                    <label for="email">البريد الإلكتروني</label>
                    <input class="email" name="email" id="email" placeholder="البريد الإلكتروني">
                </p>
                <p>
                    <label for="password">كلمة المرور</label>
                    <input class="password" name="password" id="password" placeholder="كلمة المرور">
                </p>
                <p>
                    <input type="submit" value="دفع">
                </p>
            </form>
        </div>
        <div class="w3-container pay-by-method" style="display: none" id="pay-by-method-2">
            <h2>نموذج الدفع (باي بال)</h2>
            <form class="w3-container w3-padding w3-white w3-padding-16 w3-section signIn">
                <p>
                    <label for="email">البريد الإلكتروني</label>
                    <input class="email" name="email" id="email" placeholder="البريد الإلكتروني">
                </p>
                <p>
                    <input type="submit" value="دفع">
                    <a href="{{ route('login') }}" class="i-not-btn w3-xlarge"> ما هذا ؟
                    </a>
                </p>

            </form>
        </div>
    </div>
@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
