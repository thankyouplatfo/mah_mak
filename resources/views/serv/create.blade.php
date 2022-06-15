@extends('layouts.app')
@section('title', config('app.name') . ' | إضافة خدمة')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
    <h1>إضافة خدمة</h1>
@endsection
@section('content')
    <div class="w3-container w3-content w3-white" style="max-width:1400px;margin-bottom:86px">
        <form action="" style="margin-bottom: 25px" class="w3-row-padding w3-stretch">
            <p class="w3-col l12 w3-right p-b-0 m-b-0">
                <label for="service_title">عنوان الخدمة</label>

                <input type="text" class="service_title" name="service_title" id="service_title"
                    value="{{ old('service_title') }}">
                @error('service_title')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p class="w3-col l6 w3-right">
                <label for="service_rating">تصنيف الخدمة</label>
                <select class="service_rating" name="service_rating" id="service_rating">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                @error('service_rating')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p class="w3-col l6 w3-right">
                <label for="service_subcategory">التصنيف الفرعي للخدمة</label>
                <select class="service_subcategory" name="service_subcategory" id="service_subcategory">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                @error('service_subcategory')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p class="w3-col l12 w3-right p-b-0 m-b-0">
                <label for="service_description">وصف الخدمة</label>
                <textarea class="service_description" name="service_description" id="service_description" cols="30" rows="10">{{ old('service_description') }}</textarea>
                @error('service_description')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p class="w3-col l12 w3-right p-b-0 m-b-0">
                <label for="service_pictures">صور الخدمة</label>
                <input type="file" class="service_pictures" name="service_pictures" id="service_pictures">
                @error('service_pictures')
                    <b class="err">{{ $message }}</b>
                @enderror
            </p>
            <p class="w3-col l12 w3-right p-b-0 m-b-0">
                <input type="submit">
            </p>
        </form>
    </div>
@endsection
@section('followUs')
    <div class="w3-section">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
