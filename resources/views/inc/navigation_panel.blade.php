<div id="navbar-all-screens" class="w3-bar-block w3-theme-d2 w3-content w3-margin-bottom w3-display-container tabcontent"
    style="margin-bottom:16px;margin-top: -79px;">
    <span onclick="closeAndRmColor('navbar-all-screens','w3-theme-action')"
        class="w3-button w3-theme w3-display-topleft"><i class="fa fa-remove"></i></span>
    <div class="w3-container">
        <h2 class="i-not-head">التنقل</h2>
        <p>لتسهيل تسهم هذه النفذة في تبسيط تنقلك داخل الموقع أو لفك الشخصي</p>
    </div>
    <!--BUTTONS AUTH-->
    @auth
        <a href="/users" class="w3-right-align w3-large">
            <i class="fa fa-user w3-xlarge" aria-hidden="true"></i>
            الملف الشخصي
        </a>
        <!---->
        <a title="الإعدادات" href="{{ route('acount-setting') }}" class="w3-right-align w3-large" id="modalAccSett"
            onclick="openTab(event,'modal-acc-set','tabcontent','headTab')">
            <i class="fa-solid fa-cog"></i>
            الإعدادات
        </a>
        <hr>
        <a title="المشتريات" href="#contact" class="w3-right-align w3-large">
            <i class="fa-solid fa-money-bill"></i>
            المشتريات
        </a>
        <!---->
        <a title="الطلبات الواردة" href="#contact" class="w3-right-align w3-large">
            <i class="fa-solid fa-truck fa-flip-horizontal"></i>
            الطلبات الواردة
        </a>
        <!---->
        <a title="سلة المشتريات" href="#contact" class="w3-right-align w3-large">
            <i class="fa fa-cart-arrow-down fa-flip-horizontal"></i>
            <span class="w3-badge">3</span>
            سلة المشتريات
        </a>
        <hr>
    @endauth
    <!--BUTTONS NOT AUTH-->
    <!---->
    <a title="الفريق" href="#team" class="w3-right-align w3-large">
        <i class="fas fa-users"></i>
        الفريق
    </a>
    <!---->
    <a title="من نحن" href="#about" class="w3-right-align w3-large">
        <i class="fas fa-info-circle"></i>
        من نحن
    </a>
    <!---->
    <a title="تواصل معنا" href="#contact" class="w3-right-align w3-large">
        <i class="fas fa-phone"></i>
        تواصل معنا
    </a>
    <hr>
    <!--BUTTONS NOT AUTH-->
    <a href="javascript:void(0)" id="section-btn" class="w3-right-align w3-large">
        <i class="fa fa-puzzle-piece w3-xlarge" aria-hidden="true"></i>
        تصفح أقسام الموقع
        <i class="fa fa-caret-down w3-left w3-large" aria-hidden="true"></i>
    </a>
    <div class="w3-bar-block w3-white" id="section" style="display: none;">
        <a href="/explorer" class="w3-bar-item w3-right-align w3-large">
            <i class="fa fa-truck" aria-hidden="true"></i>
            خدمات قسم النقل (مواشي|بضائع|إلخ)
        </a>
        <a href="/explorer" class="w3-bar-item w3-right-align w3-large">
            <i class="fa-solid fa-truck-ramp-box" aria-hidden="true"></i>
            خدمات قسم (معلم/ين الفك والتركيب)
        </a>
        <a href="/explorer" class="w3-bar-item w3-right-align w3-large">
            <i class="fa-solid fa-screwdriver-wrench" aria-hidden="true"></i>
            خدمات قسم (عمال التحميل والتنزيل)
        </a>
    </div>
    <!--BUTTONS AUTH-->
    @auth
        <a href="logout" class="w3-right-align w3-large">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            تسجيل خروج
        </a>
    @endauth
</div>
