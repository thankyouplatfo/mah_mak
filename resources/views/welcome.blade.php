@extends('layouts.app')
@section('title',config('app.name').' | لوحة التحكم')
@section('themeUrl',asset('css/w3css/lib/w3-theme-blue.css'))
@section('description','محمول مكفول صفحة التحكم للمستخدم')
@section('keywords','صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
<div class="w3-container w3-content path-container w3-animate-opacity">
    <h1>الرئيسية</h1>
</div>
@endsection
@section('app')

<!-- Image Header -->
<div class=" w3-animate-opacity">
    <div id="image-header" style="background-image:url({{asset('images/design/app/tenor.gif')}})"></div>

    <div class="w3-display-left w3-transparent w3-col s10 m4 l2">
        <div class="w3-display-right w3-padding w3-col">
            <form class="w3-container w3-padding w3-white w3-padding-16 signUp">
                <h2 class="bold">تسجيل</h2>
                <p>
                    <label for="firstName">البريد الإلكتروني</label>
                    <input type="text" class="w3-light-grey" style="border: 0!important;" placeholder="البريد الإلكتروني">
                </p>
                <p>
                    <label for="lastName">كلمة المرور</label>
                    <input type="text" class="w3-light-grey" style="border: 0!important;" placeholder="كلمة المرور">
                </p>
                <p>
                    <input type="submit" class="w3-block w3-theme w3-xlarge w3-border-theme" value="تسجيل">
                </p>
                <a href="javascript:void(0)" class="i-not-btn haveAccountBtn" id="haveAccountBtn">لدي حساب بالفعل</a>
            </form>

            <form class="w3-container w3-padding w3-white w3-padding-16 signIn" style="display: none;">
                <h2 class="bold">تسجيل الدخول</h2>
                <p>
                    <label for="firstName">البريد الإلكتروني</label>
                    <input type="text" class="w3-light-grey" style="border: 0!important;" placeholder="البريد الإلكتروني">
                </p>
                <p>
                    <label for="lastName">كلمة المرور</label>
                    <input type="text" class="w3-light-grey" style="border: 0!important;" placeholder="كلمة المرور">
                </p>
                <p>
                    <input type="submit" class="w3-block w3-theme w3-xlarge w3-border-theme" value="تسجيل دخول">
                </p>
                <a href="javascript:void(0)" class="i-not-btn notHaveAccountBtn" id="notHaveAccountBtn"> ليس لدي حساب </a>
            </form>
        </div>
    </div>
</div>
<!--bar for display all section -->
<div class=" w3-container w3-theme w3-padding-16 w3-right-align" style="max-width: 100%;overflow-y:hidden;overflow-x:auto!important;white-space:nowrap;">
    <a href="#" target="_blank" class="w3-btn w3-hover-theme w3-large"><i class="fa fa-truck" aria-hidden="true"></i> قسم النقل</a>
    <a href="#" target="_blank" class="w3-btn w3-hover-theme w3-large"><i class="fa-solid fa-truck-ramp-box" aria-hidden="true"></i> قسم التحميل وتنزيل</a>
    <a href="#" target="_blank" class="w3-btn w3-hover-theme w3-large"><i class="fa-solid fa-screwdriver-wrench" aria-hidden="true"></i> قسم االفك والتركيب</a>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>فريقنا</h2>
    <p>هذا هو فريقنا الذي نفخربه في محمول مكفول:</p>

    <div class="w3-row"><br>

        <div class="w3-quarter w3-right">
            <img src="{{asset('images/users/profile/avatar_hat.jpg')}}" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
            <a href="" class="i-not-btn">
                <h3>كايد إسحاق</h3>
            </a>
            <p>مدير عام</p>
        </div>

        <div class="w3-quarter w3-right">
            <img src="{{asset('images/users/profile/avatar_hat.jpg')}}" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
            <a href="" class="i-not-btn">
                <h3>معتز المشكلي</h3>
            </a>
            <p>مدير تقني</p>
        </div>

        <div class="w3-quarter w3-right">
            <img src="{{asset('images/users/profile/avatar_hat.jpg')}}" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
            <a href="" class="i-not-btn">
                <h3>شعيب النو</h3>
            </a>
            <p>مدير التسويق</p>
        </div>

        <div class="w3-quarter w3-right">
            <img src="{{asset('images/users/profile/avatar_hat.jpg')}}" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
            <a href="" class="i-not-btn">
                <h3>فلان الفلاني</h3>
            </a>
            <p>الدعم وخدمة العملاء</p>
        </div>

    </div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

    <div class="w3-right">
        <h2 class="w3-center i-not-head">من نحن</h2>
        <p class=" w3-large w3-justify w3-container">
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
            ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
            هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
            ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
            هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
        </p>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
        <div class="w3-col w3-right m5">
            <div class="w3-padding-16"><span class="w3-xlarge w3-border-blue w3-bottombar">اتصل بنا</span></div>
            <h3>العناوين</h3>
            <p>ثق تماما أننا نستمع لشكواك أو مقترحك ونعمل على التجاوب معهما.</p>
            <p><i class="fa fa-map-marker w3-text-blue w3-xlarge"></i> السعودية,مكة</p>
            <p><i class="fa fa-phone w3-text-blue w3-xlarge"></i> +00 1515151515</p>
            <p><i class="fa-solid fa-envelope w3-text-blue w3-xlarge"></i> mah_mak@cs.com</p>
        </div>
        <div class="w3-col w3-right m7">
            <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="https://www.w3schools.com/action_page.php" target="_blank">
                <p>
                    <label for="name">الإسم</label>
                    <input class="name" name="name" id="name" type="text">
                </p>
                <p>
                    <label for="mail">البريد</label>
                    <input class="mail" name="mail" id="mail" type="text">
                </p>
                <p>
                    <label for="type">النوع</label>
                    <select class="type" name="type" id="type">
                        <option value="1">شكوى</option>
                        <option value="1">اقتراح</option>
                        <option value="1">أخرى</option>
                    </select>
                </p>
                <p>
                    <label for="topic">الموضوع</label>
                    <input class="topic" name="topic" id="topic" type="text">
                </p>
                <p>
                    <label for="message">الرسالة</label>
                    <textarea class="message" name="message" id="message" cols="30" rows="10"></textarea>
                </p>
                <p>
                    <label for="reply"><input class="reply w3-check inline" name="reply" id="reply" type="checkbox"> تلقي رد</label>
                </p>
                <p>
                    <input type="submit" class="w3-left w3-large w3-theme w3-border-theme">
                </p>
            </form>
        </div>
    </div>
</div>

<!-- Image of location/map -->
<div class="w3-center">
    <h2 class="w3-center">مكة المكرمة - العزيزية</h2>
    <img src="{{asset('images/design/app/kaaba.png')}}" class="w3-image w3-greyscale-min w3-padding-64" alt="العنوان">
</div>
@section('followUs')
<div class="w3-section ">
    <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على وسائل التواصل الإجتماعي.</h2>
</div>
@endsection
@endsection