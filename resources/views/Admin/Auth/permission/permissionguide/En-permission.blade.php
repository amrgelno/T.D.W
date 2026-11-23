 <div style=" background: transparent;"class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="tab" data-bs-target="#permissions-en-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"> User and Permissions Management</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="tab" data-bs-target="#permissions-en-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"> User Creation</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="tab" data-bs-target="#permissions-en-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Permissions</button>
    {{-- <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="tab" data-bs-target="#permissions-en-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> --}}
  </div>
  <div class="tab-content" id="v-pills-tabContent" style="background:white;">
    <div class="tab-pane fade show active" id="permissions-en-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

 The system supports multiple users within the company, with clearly defined permissions for each user based on their specific tasks.


<a href="{{asset('Front/IMG/Screenshot/permissions.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/permissions.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>


</div>
    <div class="tab-pane fade" id="permissions-en-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
● Adding a new user along with their details (name, email, password, and job role).
● Activating or deactivating a user, in accordance with their assigned permissions.
 |<a href='https://traveldynamicwindows.ifree.page/user_reg/user_reg'> you can follow this Link  -> </a>  </div>
    <div class="tab-pane fade" id="permissions-en-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
● Defining user permissions in detail:
○ Viewing data only.
○ Adding, modifying, or deleting data.
○ Accessing reports.
● Only the General Manager has the authority to modify user permissions.

<a href="{{asset('Front/IMG/Screenshot/permissions/1.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake"   src="{{asset('Front/IMG/Screenshot/permissions/1.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>


</div>
    {{-- <div class="tab-pane fade" id="permissions-en-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">En-Settings...</div> --}}
  </div>

