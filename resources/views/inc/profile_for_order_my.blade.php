 <!-- Profile -->
 <div class="w3-card round w3-white w3-theme-l5 w3-margin-bottom">
     <div class="w3-container">
         <a href="users" class="i-not-btn">
             <h3 class="w3-center">زيارة الملف الشخصي</h3>
         </a>
         <p class="w3-center"><img src="{{ asset('images/users/profile/avatar_hat.jpg') }}" class="w3-circle"
                 style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p> <i class="fa fa-user fa-fw w3-large w3-text-theme"></i> محمد عبد الله </p>
         <p> <i class="fa fa-briefcase fa-fw w3-large w3-text-theme"></i> سائق | معلم فك وتركيب | عامل تحميل
             وتنزيل</p>
         <p> <i class="fa-solid fa-road w3-large w3-text-theme"></i> المسافة: </p>
         <hr>
         <p class="w3-center"><b>تبدأ أسعار مقدم الخدمة هذا من:</b></p>
         <h4 class="w3-center w3-xxlarge bold" style="margin-top: -12px;margin-bottom: -12px;">
             <i id="price">
                 {{ '500.00' }}
             </i>
             <span>ر.س</span>
         </h4>
         <hr>
         <a href="javascript:void(0)"
             class=" w3-bar-item w3-button w3-theme w3-large w3-border-theme w3-left w3-border w3-block"
             id="msg-section">إرسال عرض</a>
     </div>
     <br>
     <div class="w3-container" id="msg-box" style="display: none">
         <hr>
         <h4 class="w3-center w3-text-theme">رسالة لمقدم الخدمة</h4>
         <hr>
         <form action="">
             <p>
                 <label for="serv-msg" class="w3-large w3-text-black">نص الرسالة</label>
                 <textarea class="serv-msg w3-input w3-border w3-hover-border-theme" name="serv-msg" id="serv-msg" cols="30" rows="10"></textarea>
             </p>
             <p>
                 <label for="ok" class="w3-large w3-text-black">
                     <input type="checkbox" class="ok w3-check" name="ok" id="ok"> <a href="javascript:void(0)"
                         class="i-not-btn w3-text-red">الموافقة على شروط
                         الرسائل</a>
                 </label>
             </p>
             <p>
                 <input type="submit" value="إرسال"
                     class="w3-section w3-bar-item w3-button w3-theme w3-large w3-border-theme w3-left w3-border">
             </p>
         </form>
     </div>
 </div>
