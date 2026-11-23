
  <div style=" background: transparent;" class="nav flex-column nav-pills me-3"  aria-orientation="vertical" role="tabpanel" >
    <button class="nav-link active" id="users_Activity-home-tab" data-bs-toggle="tab" data-bs-target="#users-home" type="button" role="tab" aria-controls="users-home" aria-selected="true">معلومات مستخدم</button>
    <button class="nav-link" id="users_Activity-profile-tab" data-bs-toggle="tab" data-bs-target="#users-profile" type="button" role="tab" aria-controls="users-profile" aria-selected="false">معلومات عن السوفت وير</button>
    <button class="nav-link" id="users_Activity-messages-tab" data-bs-toggle="tab" data-bs-target="#users-messages" type="button" role="tab" aria-controls="users-messages" aria-selected="false">معلومات عن الشركة</button>
    {{-- <button class="nav-link" id="users_Activity-settings-tab" data-bs-toggle="tab" data-bs-target="#users-settings" type="button" role="tab" aria-controls="users-settings" aria-selected="false">Settings</button> --}}
  </div>
  <div class="tab-content" id="users-tabContent" style="background:white;">
    <div class="tab-pane fade show active" id="users-home" role="tabpanel" aria-labelledby="users-home-tab">
في هذا جزء من نافذة النافذة يمكنك تعديل معلومات مستخدم  مثل أسم مستخدم و الباسورد خاص بالدخول

<a href="{{asset('Front/IMG/Screenshot/user-info/1.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/user-info/1.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>

    </div>
    <div class="tab-pane fade" id="users-profile" role="tabpanel" aria-labelledby="users-profile-tab">

 في هذا جزء من النافذة يستعرض اهم معلومات عن السوفت وير

مثل التقنيات المستخدمة و   البنية معمارية الهندسية
لتصميم والبرمجة


<a href="{{asset('Front/IMG/Screenshot/user-info/2.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/user-info/1.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>

    </div>
    <div class="tab-pane fade" id="users-messages" role="tabpanel" aria-labelledby="users-messages-tab">
في هذا جزء من النافذه يمكنك تعديل معلومات خاصة بالشركة
مثل الشعار و رقم الموبيل و السوشيل ميديا للربطها بالفاتورة والتقارير الخاصة بالشركة

<a href="{{asset('Front/IMG/Screenshot/user-info/3.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/user-info/3.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>



<a href="{{asset('Front/IMG/Screenshot/Company_info.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Company_info.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>


<a href="{{asset('Front/IMG/Screenshot/Receipts/2.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Receipts/2.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>

    </div>
    {{-- <div class="tab-pane fade" id="users-settings" role="tabpanel" aria-labelledby="users-settings-tab">Settings...</div>--}}
  </div>

