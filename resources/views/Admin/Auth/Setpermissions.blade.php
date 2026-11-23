
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

<div class="card">
            <div class="card-header">
            <h5 class="m-0">Set permissions    تحديد الصلاحيات للمستخدم   </h5>
            </div>


    <div class="card-body">

        <div class='Customize Appearance col-md-12' style='display:flex; row:1;'>

            <div class='setting col-md-8'>

                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title" style="color:blue"> permission Setting </h5>
                      
                        <hr>


                        <form name='SEO Customize' action='{{ route('permissions.store') }}' method='POST'
                            enctype="multipart/form-data">

                            @csrf


                            <B style='color:blue'> permissions Setting : </B> <br />



                            <label>create:-</label>
                            <select name='create'>
                                <option value="  Active   "> Active </option>
                                <option value=" DisActive"> DisActive </option>
                            </select> <br />

                            <label>read</label> <select name='read'>
                                <option value="  Active   "> Active </option>
                                <option value=" DisActive"> DisActive </option>
                            </select> <br />

                            <label>update</label>
                            <select name='update'>
                                <option value="  Active   "> Active </option>
                                <option value=" DisActive"> DisActive </option>
                            </select>

                            <label>	Delete  </label>
                            <select name='Delete'>
                                <option value="Active"> Active </option>
                                <option value="DisActive"> DisActive </option>
                            </select>



                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" class="btn btn-primary"
                                value="ok" name="Setpermissions" />


                        </FORM>


                    </div>

                </div>

            </div>

            <div class='input col-md-4'>

                <div class="card card-primary card-outline">
                    <div class="card-body">


                        @foreach ($permissions as $permission)
                            <B style='color:blue'> current Setting </B> <br />

                            <label>create : </labeL> {{ $permission->create }} <br />
                            <label>read :  </labeL> {{ $permission->read }} <br />
                            <label> update:  </labeL> {{ $permission->update }} <br />
                           <label> Delete:  </labeL> {{ $permission->update }} <br />

                        @endforeach


                    </div>

                </div>

            </div>

        </div>

         </div>

</div>
