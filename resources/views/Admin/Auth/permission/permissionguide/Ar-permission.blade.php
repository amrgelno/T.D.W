 <div style=" background: transparent;"class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="tab" data-bs-target="#permissions-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">إدارة المستخدمين والصالحيات</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="tab" data-bs-target="#permissions-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">    إنشاء المستخدمين
</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="tab" data-bs-target="#permissions-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">الصالحيات</button>
    {{-- <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="tab" data-bs-target="#permissions-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> --}}
  </div>
  <div class="tab-content" id="v-pills-tabContent" style="background:white;">
    <div class="tab-pane fade show active" id="permissions-home" role="tabpanel" aria-labelledby="v-pills-home-tab">النظام يدعم تعدد المستخدمين داخل الشركة، مع تحديد صالحيات واضحة لكل مستخدم بنا ًء على مهامه.
<a href="{{asset('Front/IMG/Screenshot/permissions.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/permissions.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>

    </div>
    <div class="tab-pane fade" id="permissions-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">


1 .إنشاء المستخدمين
● إضافة مستخدم جديد ببياناته
● تفعيل أو إلغاء المستخدم حسب الصالحيات.

<a href='https://traveldynamicwindows.ifree.page/user_reg/user_reg'> أضغط هنا لأنشاء مستخدم جديد </a>
</div>
    <div class="tab-pane fade" id="permissions-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
● تحديد صالحيات المستخدم بالتفصيل:
○ عرض البيانات فقط.
○ إضافة أو تعديل أو حذف.
○ الوصول إلى التقارير.
● المدير العام فقط هو من يمكنه تعديل صالحيات المستخدمين.


<a href="{{asset('Front/IMG/Screenshot/permissions/1.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/permissions/1.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>

</div>
    {{-- <div class="tab-pane fade" id="permissions-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Settings...</div> --}}
  </div>

