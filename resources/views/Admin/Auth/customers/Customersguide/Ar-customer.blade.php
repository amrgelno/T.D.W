 <div style="background: transparent;" class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tabpanel" aria-orientation="vertical" >
    <button class="nav-link active" id="crm-home-tab" data-bs-toggle="tab" data-bs-target="#crm-home" type="button" role="tab" aria-controls="crm-home" aria-selected="true">تسجيل بيانات العميل الأساسية </button>
    <button class="nav-link" id="crm-profile-tab" data-bs-toggle="tab" data-bs-target="#crm-profile" type="button" role="tab" aria-controls="crm-profile" aria-selected="false">تسجيل العميل بدون حجز</button>
    <button class="nav-link" id="crm-messages-tab" data-bs-toggle="tab" data-bs-target="#crm-messages" type="button" role="tab" aria-controls="crm-messages" aria-selected="false">إدارة الحجوزات</button>
    {{-- <button class="nav-link" id="crm-settings-tab" data-bs-toggle="tab" data-bs-target="#crm-settings" type="button" role="tab" aria-controls="crm-settings" aria-selected="false">Settings</button> --}}
  </div>


  <div class="tab-content" id="crm-tabContent" style="background:white;">

    <div class="tab-pane fade show active" id="crm-home" role="tabpanel" aria-labelledby="crm-home-tab">
يتيح النظام تسجيل بيانات العميل الأساسية بشكل منظم، وتشمل:
● االسم الرباعي
● الرقم القومي أو رقم الجواز
● رقم الهاتف
● البريد اإللكتروني )اختياري(
● العنوان
● مصدر العميل )مثل: مندوب، تسويق إلكتروني، توصية، إلخ(
● مالحظات عامة

يتم تقسيم العملاء الى نوعين
عملاء فردين  و هم العملاء الذين يحجزون داخل مكتب الشركة مباشرة ويكون مصدرهم من السوشيل ميديا او توصية او بيتوصية مندوب داخل الشركة
والنوع الثاني عميل مجموعات ويتم حجزهم داخل مكتب من قبل المندوب

<a href="{{asset('Front/IMG/Screenshot/Client/1.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Client/1.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>


</div>
    <div class="tab-pane fade" id="crm-profile" role="tabpanel" aria-labelledby="crm-profile-tab">يمكن تسجيل عميل جديد دون ربطه بأي رحلة بهدف حفظ بياناته للتواصل أو التسويق الحً
قا تحويل العميل إلى "عميل حاجز" عند تحديد الرحلة المطلوبة.
● يمكن الحً
● تصنيف العملاء داخل النظام إلى:
○ العملاء حاجزين
○ العملاء محتملين
● إمكانية إرسال عروض تسويقية أو تذكيرات تلقائية لهؤالء العملاء.

<a href="{{asset('Front/IMG/Screenshot/Client/2.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Client/2.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>


</div>
    <div class="tab-pane fade" id="crm-messages" role="tabpanel" aria-labelledby="crm-messages-tab">يمكن ربط الحجز بملف العميل الحالي دون الحاجة إلعادة إدخال بياناته.

● تسجيل تفاصيل الرحلة المرتبطة بالعميل، مثل:
○ نوع الرحلة )عمرة / حج / أخرى(
○ تاريخ السفر والعودة
○ وسيلة السفر )جوي / بري
○ الفندق أو مستوى اإلقامة
○ عدد األفراد المسافرين
○ مالحظات خاصة بالحجز
● عرض سجل الحجوزات السابقة والحالية لكل عميل

<a href="{{asset('Front/IMG/Screenshot/CRM.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/CRM.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>

</div>
    {{-- <div class="tab-pane fade" id="crm-settings" role="tabpanel" aria-labelledby="crm-settings-tab">Settings...</div> --}}
  </div>
