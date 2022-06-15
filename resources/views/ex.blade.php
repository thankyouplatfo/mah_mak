@extends('layouts.app')
@section('title', config('app.name') . ' | الرئيسية')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
    <div class="w3-container w3-content path-container w3-ani-opa">
        <h1>الرئيسية</h1>
    </div>
@endsection
@section('content')
    <div class="w3-container w3-content" style="max-width:1400px;">
    </div>
@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
