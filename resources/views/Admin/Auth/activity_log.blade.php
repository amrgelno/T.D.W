
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        {{-- <h1 class="m-0">DashBoard-Starter Page</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
        </ol>
        </div><!-- /.col -->

    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        <!-- /.col-md-6 -->
        <div class="card">
            <div class="card-header">
            <h5 class="m-0"><span class="fa fa-history" aria-hidden="true"></span>
                activity_log     نشاط مستخدمين  </h5>
            </div>
 </div>

<div class="bd-example-snippet bd-code-snippet">

<div class="bd-example">
    <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-x-tab" data-bs-toggle="tab"
                data-bs-target="#nav-x" type="button" role="tab"
                aria-controls="nav-x" aria-selected="true">Activitylog-  سجل نشاط مستخدمين</button>
            <button class="nav-link" id="nav-z-tab" data-bs-toggle="tab"
                data-bs-target="#nav-z" type="button" role="tab"
                aria-controls="nav-z" aria-selected="false" tabindex="-1">User_login -  سجل دخول مستخدمين</button>

        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade active show" id="nav-x" role="tabpanel"
            aria-labelledby="nav-x-tab">

@include('Admin.Auth.USER_Activity.Activitylog')


        </div>
        <div class="tab-pane fade" id="nav-z" role="tabpanel"
            aria-labelledby="nav-z-tab">

@include('Admin.Auth.USER_Activity.userlog')


        </div>

    </div>
</div> </div>























            </div>
       </div>  </div></div>

    </div>




