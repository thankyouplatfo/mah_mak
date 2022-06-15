@extends('layouts.app')
@section('title', config('app.name') . ' | استعراض الخدمة')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
        <h1>استعراض الخدمة</h1>
@endsection
@section('content')
    <div class="w3-container w3-content" style="max-width:1400px;">
        <!-- The Grid -->
        <div class="w3-row">
            <!-- Right Column -->
            <div class="w3-col w3-right m3">
                <!-- Profile -->
                <div class="w3-card round w3-white">
                    <div class="w3-container">
                        <div>
                            <h4 class="w3-center">المعلن</h4>
                            <p class="w3-center"><img src="{{ asset('images/users/profile/avatar_hat.jpg') }}"
                                    class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                            <hr>
                            <p> <i class="fa fa-user fa-fw w3-large w3-text-theme"></i> محمد عبد الله </p>
                            <p> <i class="fa fa-briefcase fa-fw w3-large w3-text-theme"></i> سائق | معلم فك وتركيب | عامل
                                تحميل وتنزيل</p>
                            <p> <i class="fa fa-home fa-fw w3-large w3-text-theme"></i> مكة, السعودية</p>
                            <p> <i class="fa fa-envelope fa-fw w3-large w3-text-theme"></i> ex@mail.com</p>
                            <p> <i class="fa fa-phone fa-fw w3-large w3-text-theme"></i> 1224435534</p>
                            <hr>
                        </div>
                        <div class="w3-section">
                            <a href="#" class="inputAsSubmit w3-section" id="msg-section">تواصل</a>
                        </div>
                    </div>
                </div>
                <br>
                <!---->
                <div class="w3-card round w3-white w3-margin-bottom" style="display: none" id="msg-box">
                    <div class="w3-container">
                        <div>
                            <h4 class="w3-center">رسالة لمقدم الخدمة</h4>
                            <hr>
                            <form action="">
                                <p>
                                    <label for="serv-msg">نص الرسالة</label>
                                    <textarea class="serv-msg" name="serv-msg" id="serv-msg" cols="30" rows="10"></textarea>
                                </p>
                                <p>
                                    <label for="ok">
                                        <input type="checkbox" class="ok" name="ok" id="ok"> <a href="#" class="i-not-btn w3-text-red">الموافقة على شروط الرسائل</a>
                                    </label>
                                </p>
                                <p>
                                    <input type="submit" value="إرسال" class="w3-section">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Right Columen -->
            </div>
            <!-- Left Column -->
            <div class="w3-col w3-right m9">
                <div class="w3-container round w3-margin-bottom leftCloumenAdsPage ">
                    <div class="w3-col l12 w3-theme-l5 w3-card-4 w3-container w3-row w3-small w3-padding-16">
                        <p class="w3-col l6 w3-large w3-right">
                            <i class="fa fa-heading fa-fw w3-large w3-text-theme"></i> الإسم:
                            <a href="{{ route('serv.show') }}" target="_blank" class="i-not-btn">moataz moataz
                                moataz</a>
                        </p>
                        <p class="w3-col l6 w3-large w3-right">
                            <i class="fa fa-solid fa-puzzle-piece fa-fw w3-large w3-text-theme"></i>التصنيف:
                        </p>
                        <p class="w3-col l6 w3-large w3-right">
                            <i class="fa-solid fa-hand-holding-dollar w3-text-theme"></i> مرات الشراء
                        </p>
                        <p class="w3-col l6 w3-large w3-right">
                            <i class="fa-solid fa-barcode w3-text-theme"></i> السعر:
                        </p>
                        <div class="w3-large">
                            <i class="fa fa-asterisk fa-fw w3-text-theme"></i> التقييم:
                            <span class="w3-light-grey w3-round-xlarge w3-small inline-block" style="width: 190px">
                                <span class="w3-container w3-center w3-round-xlarge w3-theme"
                                    style="width:90%;display:block">90%</span>
                            </span>
                        </div>
                    </div>
                    <div class="w3-col l12 w3-theme-l5 w3-card-4 w3-container w3-section">
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                            يولدها
                            التطبيق.
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                            النص
                            لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                            ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد
                            النص
                            العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم
                            فيظهر بشكل لا يليق.
                            هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير
                            منسق،
                            أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
                        </p>
                    </div>
                    <div class="w3-col l12 w3-theme-l5 w3-card-4 w3-container w3-padding-16">
                        <div class="w3-responsive">
                            <table class="w3-table-all">
                                <tr>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                    <th><img src="{{ asset('images/design/app/NorthernLights.jpg') }}" id="adImage"
                                            alt="Northern Lights" class="w3-margin-bottom"></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="w3-col l12 w3-theme-l5 w3-card-4 w3-container w3-section w3-panel w3-sand w3-serif">
                        <h4 class="w3-center w3-xxlarge bold"><i id="price">{{ '500.00' }}</i><span>ر.س</span>
                        </h4>
                    </div>
                    <div class="w3-col l12 w3-card-4">
                        <div class="w3-col s6 m6 l6 w3-xxlarge w3-right w3-hide">
                            <a href="{{ route('serv.show') }}" target="_blank"
                                class="w3-xxlarge w3-theme-action w3-block"><i
                                    class="fa-solid fa-arrow-up-right-from-square"></i></a>
                        </div>
                        <div class="w3-col s6 m6 l6 w3-xxlarge w3-right">
                            <a href="{{ route('pay') }}" class="w3-xxlarge w3-theme-action w3-block"><i
                                    class="fa-solid fa-money-bill-1-wave"></i></a>
                        </div>
                        <div class="w3-col s6 m6 l6 w3-xxlarge w3-right">
                            <a href="#" target="_blank" class="w3-xxlarge w3-theme-action w3-block"><i
                                    class="fa-solid fa-cart-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End Left Column -->
            </div>
            <!-- End Grid -->
        </div>
        <!-- End Page Container -->
    </div>
@endsection
@section('followUs')
    <div class="w3-section ">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا
            على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
