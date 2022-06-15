@extends('layouts.app')
@section('title', config('app.name') . ' | جميع الأقسام')
@section('themeUrl', asset('css/w3css/lib/w3-theme-brown.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('app')
@section('containerPath')
        <h1>جميع الأقسام</h1>
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
                        <h3 class="w3-center w3-section w3-padding-16">بطاقة معلومات الإعلان</h3>
                        <div class="w3-border-bottom">
                            <h4>حالة الإعلان</h4>
                            <hr>
                            <p> <i class="fa fa-comment fa-fw w3-large w3-text-theme"></i> مفاوضة مبدأية </p>
                            <p class="w3-tooltip"> <i class="fa-solid fa-circle-exclamation w3-large w3-text-theme"></i>
                                <abbr title="" class="cnsb-txt-red"> لا يمكن لصاحب الإعلان تلقي عروضك <span
                                        class="w3-text">بسبب انشغاله غي مفاوضة مبدأية مع مقدم خدمة</span></abbr></p>
                        </div>
                        <div>
                            <h4>المعلن</h4>
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
                        <div>
                            <h4>مقدم الخدمة</h4>
                            <p class="w3-center"><img src="{{ asset('images/users/profile/avatar_hat.jpg') }}"
                                    class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                            <hr>
                            <p> <i class="fa fa-user fa-fw w3-large w3-text-theme"></i> محمد عبد الله </p>
                            <p> <i class="fa fa-briefcase fa-fw w3-large w3-text-theme"></i> سائق | معلم فك وتركيب | عامل
                                تحميل وتنزيل</p>
                            <p> <i class="fa fa-home fa-fw w3-large w3-text-theme"></i> مكة, السعودية</p>
                            <p> <i class="fa fa-envelope fa-fw w3-large w3-text-theme"></i> ex@mail.com</p>
                            <p> <i class="fa fa-phone fa-fw w3-large w3-text-theme"></i> 1224435534</p>
                        </div>
                    </div>
                </div>
                <br>
                <!-- End Right Columen -->
            </div>
            <!-- Left Column -->
            <div class="w3-col w3-right m9">
                <div class="w3-container round w3-margin-bottom leftCloumenAdsPage">
                    <div class="w3-col l12 w3-theme-l5 w3-card-4 w3-container w3-row w3-small w3-padding-16">
                        <div class="w3-col l12 w3-right w3-padding-small"><i class="fa fa-user" aria-hidden="true"></i>
                            معرف المستخدم:</div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-puzzle-piece"></i> القسم:
                        </div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-file-signature"></i> اسم
                            الخدمة:{{ '' }}</div>
                        <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                class="fa-solid fa-arrow-up-1-9"></i><abbr title=""><span
                                    class="w3-text set-tooltip w3-tag cnsb-black w3-small">عدد الحيوانات التي ستقوم
                                    بنقلها</span>العدد</abbr>:{{ '' }}</div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-dog"></i> حالة
                            القفص:{{ '' }}</div>
                        <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i class="fa-solid fa-truck"></i> <abbr
                                title=""><span class="w3-text set-tooltip w3-tag cnsb-black w3-small"> نوع المركبة التي يرها
                                    العميل مناسبه لخدمته </span>نوع المركبة </abbr>:{{ '' }}</div>
                        <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i
                                class="fa-solid fa-weight-hanging"></i> <abbr title=""> <span
                                    class="w3-text set-tooltip w3-tag cnsb-black w3-small"> هذا هو الوزن التقديري الذي قام
                                    بوضعه المعلن</span> الوزن 500 {{ 'كيلو' }} </abbr></div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-street-view"></i> من:</div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-street-view"></i> إلى:</div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-road"></i> المسافة:</div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            الموقع:</div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa fa-comments" aria-hidden="true"></i>
                            عدد المفاوضين:</div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa fa-calendar" aria-hidden="true"></i>
                            تاريخ النشر:</div>
                        <div class="w3-col l6 w3-right w3-padding-small w3-tooltip"><i class="fa-solid fa-briefcase"></i>
                            <abbr title=""> <span class="w3-text set-tooltip w3-tag cnsb-black w3-small"> سيقوم معلم/ين الفك
                                    والتركيب بفك/تركيب/فك وتركيب محتويات {{ 'مقدار العمل' }} </span> مقدار العمل </abbr>
                            :{{ '' }} </div>
                        <div class="w3-col l6 w3-right w3-padding-small"><i class="fa-solid fa-fingerprint"></i> الرقم
                            المميز للإعلان:</div>
                    </div>
                    <div class="w3-col l12 w3-theme-l5 w3-card-4 w3-container w3-section">
                        <p>
                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                            التطبيق.
                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص
                            لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                            ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص
                            العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم
                            فيظهر بشكل لا يليق.
                            هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق،
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
                        <h4 class="w3-center w3-xxlarge bold"><i id="price">{{ '500.00' }}</i><span>ر.س</span></h4>
                    </div>
                    <div class="w3-col l12 w3-theme-l5 w3-card-4">
                        <div class="w3-bar w3-col l12 w3-theme-d4">
                            <div class="w3-col l4 w3-right w3-hide">
                                <a href="ads" target="_blank" style="width:100%"><i class="fa-solid fa-comments"></i> بدء
                                    المفاوضة</a>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <a href="#" style="width:100%"><i class="fa-solid fa-thumbs-up"></i> إعجاب</a>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <a href="#" style="width:100%"><i class="fa-solid fa-share"></i> شارك الإعلان</a>
                            </div>
                            <div class="w3-col l4 w3-right">
                                <a href="#" style="width:100%"><i class="fa-solid fa-flag"></i> إبلاغ</a>
                            </div>
                        </div>
                    </div>
                    <div class="none" hidden></div>
                    <div class="w3-col l12 w3-theme-l5 w3-card-4 w3-container w3-section w3-display-container">
                        <span
                            class="w3-button w3-display-topleft fa fa-info-circle w3-xlarge w3-hover-none w3-hover-text-theme tabLink"
                            onclick="openTab(event,'id01','none','tabLink')"></span>
                        <div id="id01" class="w3-modal">
                            <div class="w3-modal-content">
                                <header class="w3-container w3-teal">
                                    <span onclick="closeAndRmColor('id01','w3-theme-action')"
                                        class="w3-button w3-display-topleft w3-large fa fa-close"></span>
                                    <h2 class="i-not-head">تعليمات نموذج تقديم عرض</h2>
                                </header>

                                <div class="w3-container">
                                    <div class="w3-padding-16">
                                        <video src="{{ asset('videos/design/info.mp4') }}" class="w3-image"
                                            controls></video>
                                    </div>
                                </div>

                                <footer class="w3-container w3-teal">
                                    <p>{{ config('app.name') }}</p>
                                </footer>
                            </div>
                        </div>
                        <h4>نموذج تقديم عرض</h4>
                        <form>
                            <div class="w3-row-padding w3-stretch">
                                <div class="w3-col l6 w3-right">
                                    <label for="price">السعر</label>
                                    <input class="price" name="price" id="price" type="number">
                                </div>
                                <div class="w3-col l6 w3-right">
                                    <label for="adjustedPrice">السعر بعد خصم عمولة الموقع (إجمالي مستحقاتك)</label>
                                    <input class="adjustedPrice" name="adjustedPrice" id="adjustedPrice" type="number"
                                        readonly>
                                </div>
                                <div class="w3-col l12">
                                    <label for="details">التفاصيل</label>
                                    <textarea class="details" name="details" id="details" cols="30" rows="10"></textarea>
                                </div>
                                <div class="w3-col l6 w3-right">

                                </div>
                                <div class="w3-col l12 w3-right w3-padding-16">
                                    <input type="submit" value="إرسال العرض">
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="w3-col l12 w3-theme-l5 w3-card-4">
                        <div class="w3-container">
                            <h2>العروض</h2>
                            <p><b><i>أعي أن قبولي لأي عرض يعني توقف (نموذج تقديم عرض) والدخول مع مقدم الخدمة في وضع التفاوض
                                        المبدئي</i></b></p>
                        </div>
                        <ul class=" w3-ul">
                            <li class="w3-bar w3-hover-border-theme w3-border cnsb-hov-bor-large">
                                <span onclick="this.parentElement.style.display='none'"
                                    class="w3-bar-item w3-button w3-white w3-xlarge w3-left"><i
                                        class="fa fa-close"></i></span>
                                <img src="{{ asset('images/users/profile/avatar_hat.jpg') }}"
                                    class="w3-bar-item w3-circle w3-hide-small w3-right" style="width:85px"
                                    alt="blablabla">
                                <div class="w3-bar-item w3-right ">
                                    <a href="ads" target="_blank" class="i-not-btn">
                                        <h4>اسم مقدم العرض</h4>
                                    </a>
                                </div>
                                <div class="w3-bar-item w3-right w3-row w3-small">
                                    <div class="w3-col w3-right l12">
                                        <div class="w3-col w3-right l1">
                                            <div class="w3-container"></div>
                                        </div>
                                        <div class="w3-col w3-right l9">
                                            <div class="w3-col w3-right w3-padding-small"><i
                                                    class="fa fa-briefcase fa-fw"></i>سائق | معلم فك وتركيب | عامل تحميل
                                                وتنزيل</div>
                                            <div class="w3-col w3-right w3-padding-small"><i
                                                    class="fa fa-home fa-fw"></i>مكة, السعودية</div>
                                            <div class="w3-col w3-right w3-padding-small"><i class="fa fa-calendar"
                                                    aria-hidden="true"></i> تاريخ النشر:</div>
                                        </div>
                                        <div class="w3-col w3-right l2">
                                            <div class="w3-container"></div>
                                        </div>

                                    </div>

                                    <div class="w3-col l12 w3-container w3-section">
                                        <p>
                                            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
                                            إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات
                                            كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي
                                            المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة
                                            حقيقية لتصميم الموقع.
                                            ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل
                                            كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له
                                            بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
                                            هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير
                                            منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
                                        </p>
                                    </div>
                                    <div class="w3-border-top w3-col l12 w3-xlarge w3-center bold margin-top-c1">
                                        <p class="w3-center margin-padding-0">
                                            500.00 ر.س
                                        </p>
                                    </div>
                                    <div class="w3-bar w3-col l12 w3-theme-d4">
                                        <div class="w3-col l4 w3-right">
                                            <a href="/chat" target="_blank" style="width:100%"><i
                                                    class="fa-solid fa-comments"></i> قبول العرض</a>
                                        </div>
                                        <div class="w3-col l4 w3-right">
                                            <a href="#" style="width:100%"><i class="fa-solid fa-rectangle-xmark"></i> رفض
                                                وحذف العرض</a>
                                        </div>
                                        <div class="w3-col l4 w3-right">
                                            <a href="#" style="width:100%"><i class="fa-solid fa-flag"></i> إبلاغ</a>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
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
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
@endsection
