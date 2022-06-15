@extends('layouts.app')
@section('title', config('app.name') . ' | لوحة التحكم')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('app')
@section('containerPath')
    <h1 class="inline-block w3-right">الملف الشخصي</h1>
    <a href="#" class="w3-left w3-large w3-blue" style="margin-top: 5px">وظفني</a>
@endsection
@section('content')
    <!-- Page Container -->
    <div class="w3-content">
        <!-- The Grid -->
        <div class="w3-row-padding">
            <!-- right Column -->
            <div class="w3-third w3-right w3-animate-right">
                <div id="right_column" class="w3-white w3-text-grey w3-card-4">

                    <div class="w3-display-container">
                        <img src="{{ asset('images/users/profile/avatar_hat.jpg') }}" style="width:100%" alt="Avatar">
                        <div id="userNameContainer"
                            class="w3-display-bottomleft w3-container w3-text-black w3-center w3-theme-l5 w3-padding-small">
                            <h2 class="i-not-head w3-center cnsb-txt-black">اسم مستخدم {{ config('app.name') }} </h2>
                            <a href="#" class="i-not-btn w3-left-align">
                                <h3 class=" i-not-head w3-center not-rtl cnsb-txt-black w3-left-align">@mahmul_makful</h3>
                            </a>
                        </div>
                    </div>
                    <div class="w3-container">
                        <p> <i class="fa fa-briefcase fa-fw w3-large w3-text-theme"></i> سائق | معلم فك وتركيب | عامل تحميل
                            وتنزيل</p>
                        <p> <i class="fa fa-home fa-fw w3-large w3-text-theme"></i> مكة, السعودية</p>
                        <p> <i class="fa fa-envelope fa-fw w3-large w3-text-theme"></i> ex@mail.com</p>
                        <p> <i class="fa fa-phone fa-fw w3-large w3-text-theme"></i> 1224435534</p>
                        <div>
                            <hr>
                            <p class="w3-large">
                                <b>
                                    <i class="fa fa-asterisk fa-fw w3-text-theme"></i> التقييمات
                                </b>
                            </p>
                            <div class="w3-responsive p-0 m-0">
                                <table class="w3-table">
                                    <th>
                                        <a href="javascript:void(0)"
                                            onclick="openTab(event, 'ads-rating-container', 'rating-container', 'tabLink')"
                                            id="ads-rating" class="tabLink w3-right w3-theme-action">الإعلانات</a>
                                    </th>
                                    <th>
                                        <a href="javascript:void(0)"
                                            onclick="openTab(event, 'order-my-now-container', 'rating-container', 'tabLink')"
                                            id="order-my-now" class="tabLink w3-right">أطلبني الان</a>
                                    </th>
                                    <th>
                                        <a href="javascript:void(0)"
                                            onclick="openTab(event, 'servivess-container', 'rating-container', 'tabLink')"
                                            id="servivess" class="tabLink w3-right">الخدمات</a>
                                    </th>
                                    <th>
                                        <a href="javascript:void(0)"
                                            onclick="openTab(event, 'job-container', 'rating-container', 'tabLink')"
                                            id="job" class="tabLink w3-right">وظفني</a>
                                    </th>
                                </table>
                            </div>
                            <!---->
                            <div class="rating-container" id="ads-rating-container">
                                <p>تقييم المستخدم من قبل العملاء أثناء عمله في الإعلانات</p>
                                <p> الاحترافية بالتعامل </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:90%">90%</div>
                                </div>
                                <p> التواصل والمتابعة </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:80%">
                                        <div class="w3-center w3-text-white">80%</div>
                                    </div>
                                </div>
                                <p>جودة العمل المسلّم </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:75%">75%</div>
                                </div>
                                <p>الخبرة بمجال المشروع </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <p>التسليم فى الموعد</p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <p>التعامل معه مرّة أخرى</p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <br>
                            </div>
                            <div class="rating-container" style="display: none" id="order-my-now-container">
                                <p>تقييم المستخدم من قبل العملاء أثناء عمله في كمقدم خدمة مباشر</p>
                                <p> الاحترافية بالتعامل </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:90%">90%</div>
                                </div>
                                <p> التواصل والمتابعة </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:80%">
                                        <div class="w3-center w3-text-white">80%</div>
                                    </div>
                                </div>
                                <p>جودة العمل المسلّم </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:75%">75%</div>
                                </div>
                                <p>الخبرة بمجال المشروع </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <p>التسليم فى الموعد</p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <p>التعامل معه مرّة أخرى</p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <br>
                            </div>
                            <div class="rating-container" style="display: none" id="servivess-container">
                                <p>تقييم المستخدم من قبل العملاء كصاحب خدمات</p>
                                <p> الاحترافية بالتعامل </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:90%">90%</div>
                                </div>
                                <p> التواصل والمتابعة </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:80%">
                                        <div class="w3-center w3-text-white">80%</div>
                                    </div>
                                </div>
                                <p>جودة العمل المسلّم </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:75%">75%</div>
                                </div>
                                <p>الخبرة بمجال المشروع </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <p>التسليم فى الموعد</p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <p>التعامل معه مرّة أخرى</p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <br>
                            </div>
                            <div class="rating-container" style="display: none" id="job-container">
                                <p>تقييم المستخدم من قبل العملاء أثناء عمله في وظفني الان</p>
                                <p> الاحترافية بالتعامل </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:90%">90%</div>
                                </div>
                                <p> التواصل والمتابعة </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:80%">
                                        <div class="w3-center w3-text-white">80%</div>
                                    </div>
                                </div>
                                <p>جودة العمل المسلّم </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:75%">75%</div>
                                </div>
                                <p>الخبرة بمجال المشروع </p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <p>التسليم فى الموعد</p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <p>التعامل معه مرّة أخرى</p>
                                <div class="w3-light-grey w3-round-xlarge w3-small">
                                    <div class="w3-container w3-center w3-round-xlarge w3-theme" style="width:50%">50%</div>
                                </div>
                                <br>
                            </div>
                        </div>
                    </div>
                </div><br>
                <!-- End right Column -->
            </div>

            <!-- left Column -->
            <div class="w3-twothird w3-left w3-animate-left">
                <div id="origin-left-column" class="w3-container w3-card w3-white w3-margin-bottom">
                    <div class="w3-bar w3-xlarge">
                        <div class="w3-responsive p-0 m-0">
                            <table class="w3-table">
                                <th>
                                    <button class="w3-medium bold tablink w3-right w3-theme-action"
                                        title="مختصر السيرة الذاتية الخاصة بك"
                                        onclick="openTab(event,'my-cv','closeThis','tablink')">عني</button>
                                </th>
                                <th>
                                    <button class="w3-medium bold tablink w3-right" title="إعلاناتك أو طلباتك"
                                        onclick="openTab(event,'my-ad','closeThis','tablink')">إعلاناتي</button>
                                </th>
                                <th>
                                    <button class="w3-medium bold tablink w3-right"
                                        title="الردود التي قمت بكتابتها على إعلانات المستخدمين الأخرين"
                                        onclick="openTab(event,'my-of','closeThis','tablink')">عروضي</button>
                                </th>
                                <th>
                                    <button class="w3-medium bold tablink w3-right" title="السلة"
                                        onclick="openTab(event,'carrier-bag','closeThis','tablink')">السلة</button>
                                </th>
                                <th>
                                    <button class="w3-medium bold tablink w3-right" title="مشترياتك"
                                        onclick="openTab(event,'purchases','closeThis','tablink')">المشتريات</button>
                                </th>
                                <th>
                                    <button class="w3-medium bold tablink w3-right" title="الطلبات الواردة"
                                        onclick="openTab(event,'incoming-requests','closeThis','tablink')">الطلبات
                                        الواردة</button>
                                </th>
                                <th>
                                    <button class="w3-medium bold tablink w3-right" title="الطلبات الواردة"
                                        onclick="openTab(event,'my-serv','closeThis','tablink')">الخدمات</button>
                                </th>
                            </table>
                        </div>
                    </div>
                    <!-- about user container -->
                    <div id="my-cv" class="closeThis w3-clear">
                        <div class="">
                            <h2><i class="fa fa-info-circle fa-fw w3-text-theme"></i>عني</h2>
                        </div>
                        <div class="w3-container">
                            <p>
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                                التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                                النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه
                                الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد
                                النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه
                                التصميم فيظهر بشكل لا يليق.
                                هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير
                                منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
                            </p>
                        </div>
                        <div>
                            <h2><i class="fa fa-suitcase fa-fw w3-text-theme"></i>الخبرات</h2>
                        </div>
                        <div>
                            <div class="w3-container">
                                <h3 class="w3-opacity"><b> سائق / شركة العبد الله </b></h3>
                                <h4><i class="fa fa-calendar fa-fw"></i> 43-8-13 | 22-3-16 <i class="fa fa-arrow-left"
                                        aria-hidden="true"></i> <span class="w3-tag w3-theme w3-round">حاليا </span></h4>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                    العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد
                                    الحروف التى يولدها التطبيق.
                                    إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما
                                    تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على
                                    وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                    ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد
                                    النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه
                                    التصميم فيظهر بشكل لا يليق.
                                    هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم،
                                    غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً..</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- ADS user container -->
                    <div id="my-ad" class="closeThis hide">
                        <div class="">
                            <h2> <i class="fa-solid fa-bullhorn"></i> إعلاناتي</h2>
                        </div>
                        <p class="w3-center"><strong>أنقر اعلاناتك حسب الحالات أدناه :</strong></p>
                        <div class="w3-responsive" style="padding-top: 20px;padding-bottom:20px;">
                            <table class="w3-table">
                                <tr>
                                    <th class="w3-block"><a href="javascript:void(0)"
                                            onclick="openAllTabs(event,'tabContent3','openAdsType')"
                                            class=" w3-block w3-theme openAdsType">الكل</a></th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'openAd','tabContent3','openAdsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-indigo openAdsType">مفتوح</a>
                                    </th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'underwayAd','tabContent3','openAdsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-blue openAdsType">قيد التنفيذ</a>
                                    </th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'completeAd','tabContent3','openAdsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-light-blue openAdsType">مكتمل</a>
                                    </th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'closedAd','tabContent3','openAdsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-cyan openAdsType">مغلق</a></th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'privateAd','tabContent3','openAdsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-blue openAdsType">خاص</a></th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'canceledAd','tabContent3','openAdsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-red openAdsType">ملغي</a></th>
                                </tr>
                            </table>
                        </div>

                        <div class="container-my-of">

                            <div id="openAd" class="tabContent3 w3-container" style="display: block!important;">
                                <h3>
                                    <span class="w3-tag w3-indigo">مفتوح</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="underwayAd" class="tabContent3 w3-container">
                                <h3>
                                    <span class="w3-tag w3-blue ">قيد التنفيذ</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="completeAd" class="tabContent3 w3-container">
                                <h3>
                                    <span class="w3-tag w3-light-blue">مكتمل</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="closedAd" class="tabContent3 w3-container">
                                <h3>
                                    <span class="w3-tag w3-cyan ">مغلق</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="privateAd" class="tabContent3 w3-container">
                                <h3>
                                    <span class="w3-tag w3-blue ">خاص</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="canceledAd" class="tabContent3 w3-container">
                                <h3>
                                    <span class="w3-tag w3-red  ">ملغي</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                        </div>
                    </div>
                    <!-- offer user container -->
                    <div id="my-of" class="closeThis hide">
                        <div class="custom-container-pOfd">
                            <h2> <i class="fa fa-gift" aria-hidden="true"></i> عروضي</h2>
                        </div>
                        <p class="w3-center"><strong>أنقر لعرض ردودك حسب حالات المشاريع أدناه :</strong></p>
                        <div class="w3-responsive" style="padding-top: 20px;padding-bottom:20px;">
                            <table class="w3-table">
                                <tr>
                                    <th class="w3-block"><a href="javascript:void(0)"
                                            onclick="openAllTabs(event,'tabContent4','openProjctsType')"
                                            class=" w3-block w3-theme openProjctsType">الكل</a></th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'openOf','tabContent4','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-indigo openProjctsType">مفتوح</a>
                                    </th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'underwayOf','tabContent4','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-blue openProjctsType">قيد
                                            التنفيذ</a></th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'completeOf','tabContent4','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-light-blue openProjctsType">مكتمل</a>
                                    </th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'closedOf','tabContent4','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-cyan openProjctsType">مغلق</a>
                                    </th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'privateOf','tabContent4','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-blue openProjctsType">خاص</a>
                                    </th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'canceledOf','tabContent4','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-red openProjctsType">ملغي</a>
                                    </th>
                                </tr>
                            </table>
                        </div>

                        <div class="container-my-of">

                            <div id="openOf" class="tabContent4 w3-container" style="display: block!important;">
                                <h3>
                                    <span class="w3-tag w3-indigo">مفتوح</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="underwayOf" class="tabContent4 w3-container">
                                <h3>
                                    <span class="w3-tag w3-blue ">قيد التنفيذ</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="completeOf" class="tabContent4 w3-container">
                                <h3>
                                    <span class="w3-tag w3-light-blue">مكتمل</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="closedOf" class="tabContent4 w3-container">
                                <h3>
                                    <span class="w3-tag w3-cyan ">مغلق</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="privateOf" class="tabContent4 w3-container">
                                <h3>
                                    <span class="w3-tag w3-blue ">خاص</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="canceledOf" class="tabContent4 w3-container">
                                <h3>
                                    <span class="w3-tag w3-red  ">ملغي</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                        </div>
                    </div>
                    <!-- carrier-bag user container -->
                    <div id="carrier-bag" class="closeThis hide">
                        <div class="custom-container-pOfd">
                            <h2> <i class="fa-solid fa-cart-arrow-down"></i> السلة</h2>
                        </div>
                        <div class="container-my-of w3-padding-24">
                            <table class="w3-theme w3-table">
                                <tr>
                                    <th class="w3-center" colspan="2">الخدمة</th>
                                    <th class="w3-center">السعر</th>
                                    <th class="w3-center">حذف</th>
                                </tr>
                                <tr class="w3-topbar">
                                    <td class="w3-center" style="padding: 0!important"><img
                                            src="{{ asset('images/design/app/NorthernLights.jpg') }}" width="100"
                                            height="100"></td>
                                    <td class="w3-center" style="padding-top:33px!important;"><a href="#"
                                            class="i-not-btn">نقل مواشي
                                            بشكل شهري</a></td>
                                    <td class="w3-center" style="padding-top:33px!important;">500.55</td>
                                    <td class="w3-center" style="padding-top:23px!important;">
                                        <button type="submit" id="delOrLogout">حذف</button>
                                    </td>
                                </tr>
                            </table>
                            <div class="w3-section"></div>
                            <table class="w3-table">
                                <tr>
                                    <td class="w3-center">الإجمالي</td>
                                    <td class="w3-center">100.00 ر.س</td>
                                </tr>
                                <tr>
                                    <td class="w3-center">الرسوم</td>
                                    <td class="w3-center">50.00 ر.س</td>
                                </tr>
                                <tr class="bold">
                                    <td class="w3-center">المجموع الكلي</th>
                                    <td class="w3-center">150.00 ر.س</td>
                                </tr>
                            </table>
                            <a href="#"
                                class="w3-theme w3-large w3-border-theme w3-bar-item w3-button w3-left w3-border bold inline-block w3-section"
                                style="width:300px">الدفع</a>
                        </div>
                    </div>
                    <!-- purchases user container -->
                    <div id="purchases" class="closeThis hide">
                        <div class="custom-container-pOfd">
                            <h2> <i class="fa-solid fa-money-bill-1-wave"></i> المشتريات</h2>
                        </div>
                        <p class="w3-center"><strong>أنقر لعرض مشترياتك حسب الحالات أدناه :</strong></p>
                        <div class="w3-responsive" style="padding-top: 20px;padding-bottom:20px;">
                            <table class="w3-table">
                                <tr>
                                    <th class="w3-block"><a href="javascript:void(0)"
                                            onclick="openAllTabs(event,'tabContent5','openProjctsType')"
                                            class=" w3-block w3-theme openProjctsType">الكل</a></th>

                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'purchases-underwayOf','tabContent5','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-blue openProjctsType">قيد
                                            التنفيذ</a></th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'purchases-completeOf','tabContent5','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-light-blue openProjctsType">مكتمل</a>
                                    </th>
                                </tr>
                            </table>
                        </div>

                        <div class="container-my-of">
                            <div id="purchases-underwayOf" class="tabContent5 w3-container">
                                <h3>
                                    <span class="w3-tag w3-blue ">قيد التنفيذ</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="purchases-completeOf" class="tabContent5 w3-container">
                                <h3>
                                    <span class="w3-tag w3-light-blue">مكتمل</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>
                        </div>
                    </div>
                    <!-- incoming-requests user container -->
                    <div id="incoming-requests" class="closeThis hide">
                        <div class="custom-container-pOfd">
                            <h2> <i class="fa-solid fa-truck fa-flip-horizontal"></i> الطلبات الواردة</h2>
                        </div>
                        <p class="w3-center"><strong>أنقر لعرض مشترياتك حسب الحالات أدناه :</strong></p>
                        <div class="w3-responsive" style="padding-top: 20px;padding-bottom:20px;">
                            <table class="w3-table">
                                <tr>
                                    <th class="w3-block"><a href="javascript:void(0)"
                                            onclick="openAllTabs(event,'tabContent6','openProjctsType')"
                                            class=" w3-block w3-theme openProjctsType">الكل</a></th>

                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'incoming-requests-underwayOf','tabContent6','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-blue openProjctsType">قيد
                                            التنفيذ</a></th>
                                    <th><a href="javascript:void(0)"
                                            onclick="openTab(event,'incoming-requests-completeOf','tabContent6','openProjctsType')"
                                            class=" w3-btn w3-medium w3-block w3-right w3-light-blue openProjctsType">مكتمل</a>
                                    </th>
                                </tr>
                            </table>
                        </div>

                        <div class="container-my-of">

                            <div id="incoming-requests-underwayOf" class="tabContent6 w3-container">
                                <h3>
                                    <span class="w3-tag w3-blue ">قيد التنفيذ</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>

                            <div id="incoming-requests-completeOf" class="tabContent6 w3-container">
                                <h3>
                                    <span class="w3-tag w3-light-blue">مكتمل</span>
                                    <a href="#" class="i-not-btn cnsb-txt-black"><b>نقل مواشي من مكة إلى الطائف</b></a>
                                </h3>
                                @include('inc.example_ad')
                            </div>
                        </div>
                    </div>
                    <!-- my-serv user container -->
                    <div id="my-serv" class="closeThis hide w3-display-container">

                        <div class="w3-bar">
                            <h2 style="display: inline-block!important" class="w3-section"> <i
                                    class="fa-solid fa-truck fa-flip-horizontal"></i>
                                الخدمات
                            </h2>
                            <a href="{{ route('serv.create') }}" class="w3-text-theme w3-left w3-xlarge w3-margin-top"
                                title="إضافة خدمة">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="w3-row-padding w3-stretch">
                            @include('inc.serv_card')
                        </div>

                    </div>
                </div>
                <!-- End Right Column -->
            </div>

            <!-- End Grid -->
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
