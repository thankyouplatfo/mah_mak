@extends('layouts.app')
@section('title', config('app.name') . ' | الشروط')
@section('themeUrl', asset('css/w3css/lib/w3-theme-blue.css'))
@section('description', 'محمول مكفول صفحة التحكم للمستخدم')
@section('keywords', 'صفحة تحكم المستخدم موقع محمول مكفول')
@section('containerPath')
    <h1>الشروط</h1>
@endsection
@section('content')
    <div class="w3-content w3-white w3-margin-bottom" style="max-width:1400px;">
        <div class="w3-bar w3-theme-l3">
            <div class="w3-responsive p-0 m-0">
                <table class="w3-table p-0 m-0">
                    <tr class="p-0 m-0">
                        <th class="p-0 m-0">
                            <a href="javascript:void(0)"
                                onclick="openTab(event,'cnditions-public','cnditions-container','tabLink')"
                                style="width: 180px!important" class="w3-right w3-theme-action tabLink">عامة</a>
                        </th>
                        <th class="p-0 m-0">
                            <a href="javascript:void(0)"
                                onclick="openTab(event,'cnditions-ads','cnditions-container','tabLink')"
                                style="width: 180px!important" class="w3-right tabLink">الإعلانات</a>
                        </th>
                        <th class="p-0 m-0">
                            <a href="javascript:void(0)"
                                onclick="openTab(event,'cnditions-transport_services','cnditions-container','tabLink')"
                                style="width: 180px!important" class="w3-right tabLink">خدمات النقل</a>
                        </th>
                        <th class="p-0 m-0">
                            <a href="javascript:void(0)"
                                onclick="openTab(event,'cnditions-removal_and_installation_services','cnditions-container','tabLink')"
                                style="width: 180px!important" class="w3-right tabLink">خدمات الفك وتركيب</a>
                        </th>
                        <th class="p-0 m-0">
                            <a href="javascript:void(0)"
                                onclick="openTab(event,'cnditions-upload_and_download_services','cnditions-container','tabLink')"
                                style="width: 180px!important" class="w3-right tabLink">خدمات التحميل والتنزيل</a>
                        </th>
                    </tr>
                </table>
            </div>
        </div>
        <div class="w3-container cnditions-container" id="cnditions-public">
            <h2>الشروط العامة</h2>
            <ul class="w3-ul">
                <li>Ex laboris adipisicing qui adipisicing magna aute consectetur non anim minim culpa mollit nulla.
                    Incididunt</li>
                <li>enim consequat veniam excepteur Lorem proident eu exercitation sunt ipsum dolor. Dolor anim cillum elit
                </li>
                <li>voluptate consequat quis tempor. Ad incididunt dolor cillum nisi deserunt velit. Excepteur et fugiat eu
                </li>
                <li>eiusmod excepteur ipsum sit occaecat ex do non voluptate. Veniam adipisicing ipsum amet mollit laboris
                </li>
                <li>incididunt dolor velit quis exercitation id irure. Ad duis eiusmod mollit et ex consectetur voluptate
                </li>
                <li>Minim eu excepteur veniam ullamco quis est incididunt ex esse esse dolor ad anim. Et excepteur commodo
                </li>
                <li>consequat tempor occaecat aliquip. Cillum in et voluptate cupidatat culpa proident qui nisi mollit est.
                </li>
                <li>Commodo nulla duis eiusmod voluptate adipisicing amet minim ad dolore fugiat ea non.</li>
            </ul>
        </div>
        <div style="display: none" class="w3-container cnditions-container" id="cnditions-ads">
            <h2>شروط الإعلانات</h2>
            <ul class="w3-ul">
                <li>Ex laboris adipisicing qui adipisicing magna aute consectetur non anim minim culpa mollit nulla.
                    Incididunt</li>
                <li>enim consequat veniam excepteur Lorem proident eu exercitation sunt ipsum dolor. Dolor anim cillum elit
                </li>
                <li>voluptate consequat quis tempor. Ad incididunt dolor cillum nisi deserunt velit. Excepteur et fugiat eu
                </li>
                <li>eiusmod excepteur ipsum sit occaecat ex do non voluptate. Veniam adipisicing ipsum amet mollit laboris
                </li>
                <li>incididunt dolor velit quis exercitation id irure. Ad duis eiusmod mollit et ex consectetur voluptate
                </li>
                <li>Minim eu excepteur veniam ullamco quis est incididunt ex esse esse dolor ad anim. Et excepteur commodo
                </li>
                <li>consequat tempor occaecat aliquip. Cillum in et voluptate cupidatat culpa proident qui nisi mollit est.
                </li>
                <li>Commodo nulla duis eiusmod voluptate adipisicing amet minim ad dolore fugiat ea non.</li>
            </ul>
        </div>
        <div style="display: none" class="w3-container cnditions-container" id="cnditions-transport_services">
            <h2>شروط خدمات النقل</h2>
            <ul class="w3-ul">
                <li>Ex laboris adipisicing qui adipisicing magna aute consectetur non anim minim culpa mollit nulla.
                    Incididunt</li>
                <li>enim consequat veniam excepteur Lorem proident eu exercitation sunt ipsum dolor. Dolor anim cillum elit
                </li>
                <li>voluptate consequat quis tempor. Ad incididunt dolor cillum nisi deserunt velit. Excepteur et fugiat eu
                </li>
                <li>eiusmod excepteur ipsum sit occaecat ex do non voluptate. Veniam adipisicing ipsum amet mollit laboris
                </li>
                <li>incididunt dolor velit quis exercitation id irure. Ad duis eiusmod mollit et ex consectetur voluptate
                </li>
                <li>Minim eu excepteur veniam ullamco quis est incididunt ex esse esse dolor ad anim. Et excepteur commodo
                </li>
                <li>consequat tempor occaecat aliquip. Cillum in et voluptate cupidatat culpa proident qui nisi mollit est.
                </li>
                <li>Commodo nulla duis eiusmod voluptate adipisicing amet minim ad dolore fugiat ea non.</li>
            </ul>
        </div>
        <div style="display: none" class="w3-container cnditions-container"
            id="cnditions-removal_and_installation_services">
            <h2>شروط خدمات الفك وتركيب</h2>
            <ul class="w3-ul">
                <li>Ex laboris adipisicing qui adipisicing magna aute consectetur non anim minim culpa mollit nulla.
                    Incididunt</li>
                <li>enim consequat veniam excepteur Lorem proident eu exercitation sunt ipsum dolor. Dolor anim cillum elit
                </li>
                <li>voluptate consequat quis tempor. Ad incididunt dolor cillum nisi deserunt velit. Excepteur et fugiat eu
                </li>
                <li>eiusmod excepteur ipsum sit occaecat ex do non voluptate. Veniam adipisicing ipsum amet mollit laboris
                </li>
                <li>incididunt dolor velit quis exercitation id irure. Ad duis eiusmod mollit et ex consectetur voluptate
                </li>
                <li>Minim eu excepteur veniam ullamco quis est incididunt ex esse esse dolor ad anim. Et excepteur commodo
                </li>
                <li>consequat tempor occaecat aliquip. Cillum in et voluptate cupidatat culpa proident qui nisi mollit est.
                </li>
                <li>Commodo nulla duis eiusmod voluptate adipisicing amet minim ad dolore fugiat ea non.</li>
            </ul>
        </div>
        <div style="display: none" class="w3-container cnditions-container" id="cnditions-upload_and_download_services">
            <h2>شروط خدمات التحميل والتنزيل</h2>
            <ul class="w3-ul">
                <li>Ex laboris adipisicing qui adipisicing magna aute consectetur non anim minim culpa mollit nulla.
                    Incididunt</li>
                <li>enim consequat veniam excepteur Lorem proident eu exercitation sunt ipsum dolor. Dolor anim cillum elit
                </li>
                <li>voluptate consequat quis tempor. Ad incididunt dolor cillum nisi deserunt velit. Excepteur et fugiat eu
                </li>
                <li>eiusmod excepteur ipsum sit occaecat ex do non voluptate. Veniam adipisicing ipsum amet mollit laboris
                </li>
                <li>incididunt dolor velit quis exercitation id irure. Ad duis eiusmod mollit et ex consectetur voluptate
                </li>
                <li>Minim eu excepteur veniam ullamco quis est incididunt ex esse esse dolor ad anim. Et excepteur commodo
                </li>
                <li>consequat tempor occaecat aliquip. Cillum in et voluptate cupidatat culpa proident qui nisi mollit est.
                </li>
                <li>Commodo nulla duis eiusmod voluptate adipisicing amet minim ad dolore fugiat ea non.</li>
            </ul>
        </div>
    </div>
@endsection
@section('followUs')
    <div class="w3-section w3-margin-top" style="margin-top: 100px">
        <h2 class="w3-theme-d3 i-not-head w3-padding w3-large" style="display: inline">قم بتباع الروابط أدناه لإجادنا على
            وسائل التواصل الإجتماعي.</h2>
    </div>
@endsection
