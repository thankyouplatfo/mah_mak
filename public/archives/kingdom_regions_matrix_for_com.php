<script src="inc/kingdom_regions_matrix.js"></script>
<p class="w3-col l6">
  <label for="ComArea" id="ComAreaLabel"><b>المنطقة</b></label>
  <select class="ComArea" name="ComArea" id="ComArea" type="" name="ComArea">
    <option value="riyadh_region">منطقة الرياض</option>
    <option value="makkah_region">منطقة مكة المكرمة</option>
    <option value="madinah_region">منطقة المدينة المنورة</option>
    <option value="al_qassim_region">منطقة القصيم</option>
    <option value="eastern_region">منطقة الشرقية</option>
    <option value="asir_region">منطقة عسير</option>
    <option value="tabuk_region">منطقة تبوك</option>
    <option value="hail_region">منطقة حائل</option>
    <option value="northern_border_region">منطقة الحدود الشمالية</option>
    <option value="jizan_region">منطقة جازان</option>
    <option value="najran_region">منطقة نجران</option>
    <option value="al_Baha_area">منطقة الباحة</option>
    <option value="al_jouf_region">منطقة الجوف</option>
  </select>
</p>
<p class="w3-col l6">
  <label for="CityCom" id="CityComLabel"><b>المدينة</b></label>
  <select class="CityCom" name="CityCom" id="CityCom">
    <script type="text/javascript">
      for (var i = riyadh_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="riyadh_region">' + riyadh_region[i] + '</option>')
      }

      for (var i = makkah_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="makkah_region">' + makkah_region[i] + '</option>')
      }

      for (var i = madinah_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="madinah_region">' + madinah_region[i] + '</option>')
      }

      for (var i = al_qassim_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="al_qassim_region">' + al_qassim_region[i] + '</option>')
      }

      for (var i = eastern_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="eastern_region">' + eastern_region[i] + '</option>')
      }

      for (var i = asir_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="asir_region">' + asir_region[i] + '</option>')
      }

      for (var i = tabuk_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="tabuk_region">' + tabuk_region[i] + '</option>')
      }

      for (var i = hail_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="hail_region">' + hail_region[i] + '</option>')
      }

      for (var i = northern_border_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="northern_border_region">' + northern_border_region[i] + '</option>')
      }

      for (var i = jizan_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="jizan_region">' + jizan_region[i] + '</option>')
      }

      for (var i = najran_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="najran_region">' + najran_region[i] + '</option>')
      }

      for (var i = al_Baha_area.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="al_Baha_area">' + al_Baha_area[i] + '</option>')
      }

      for (var i = al_jouf_region.length - 1; i >= 0; i--) {
        $('.CityCom').append('<option value="al_jouf_region">' + al_jouf_region[i] + '</option>')
      }
    </script>
  </select>
</p>

<ul class="w3-ul cnsb-txt-red w3-text-red">
  <li>سنمكنك لاحقا من تجاوز المدينة والعمل على مستوى المنطقة</li>
  <!--<li>يساعدنا هذا في إيصال طلبات العملاء اليك</li>-->
</ul>

<script type="text/javascript">
  $(".ComArea").change(function() {
    if ($(this).data('options') === undefined) {
      /*Taking an array of all options-2 and kind of embedding it on the ComArea*/
      $(this).data('options', $('.CityCom option').clone());
    }
    var id = $(this).val();
    var options = $(this).data('options').filter('[value=' + id + ']');
    $('.CityCom').html(options);
  });
</script>