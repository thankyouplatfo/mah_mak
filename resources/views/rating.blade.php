@extends('layouts.app')
@section('title', config('app.name') . ' | التقييم')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
    <h1>التقييم</h1>
@endsection
@section('content')
    <div class="w3-container w3-content w3-white" style="max-width:1400px;margin-bottom:32px">
        <form action="" class="w3-container">
            <div class="w3-row-padding w3-section">
                <div class="w3-col">
                    <input type="range" id="professionalToDealWith" name="professionalToDealWith" min="0" max="100"> <label
                        for="professionalToDealWith">الاحترافية بالتعامل</label>
                </div>
                <div class="w3-col">
                    <input type="range" id="communicationAndFollowUp" name="communicationAndFollowUp" min="0" max="100">
                    <label for="communicationAndFollowUp">التواصل والمتابعة</label>
                </div>
                <div class="w3-col">
                    <input type="range" id="qualityOfDeliveredWork" name="qualityOfDeliveredWork" min="0" max="100"> <label
                        for="qualityOfDeliveredWork">جودة العمل المسلّم</label>
                </div>
                <div class="w3-col">
                    <input type="range" id="experienceInTheProjectField" name="experienceInTheProjectField" min="0"
                        max="100">
                    <label for="experienceInTheProjectField">الخبرة بمجال المشروع</label>
                </div>
                <div class="w3-col">
                    <input type="range" id="onTimeDelivery" name="onTimeDelivery" min="0" max="100"> <label
                        for="onTimeDelivery">التسليم فى الموعد</label>
                </div>
                <div class="w3-col">
                    <input type="range" id="dealingWithHimAgain" name="dealingWithHimAgain" min="0" max="100"> <label
                        for="dealingWithHimAgain">التعامل معه مرّة أخرى</label>
                </div>
                <div class="w3-col">
                    <input type="submit" class="w3-light-grey">
                </div>
            </div>
        </form>
    </div>
@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
