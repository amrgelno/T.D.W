
<div class="content-wrapper">

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        {{-- <h1 class="m-0">DashBoard-Starter Page</h1> --}}
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#Summary">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="card">
            <div class="card-header">
            <h5 class="m-0"><span class='fas fa-user-cog'></span> permissions    الصلاحيات  </h5>
            </div>


    <div class="card-body">
        <div class='card card-primary card-outline'>


            <hr /> <br />
            <br /> <br />

                <table border="1" class="table table-responsive ">


                    @php

                        $i = 0;

                    @endphp

                    <tr class="trc" align='center'>
                        <th scope="col"> #</th>
                        <th scope="col"> Name أسم مستخدم </th>
                        <th scope="col"> email  الأيميل </th>
                        <th scope="col"> permissions   الصلاحيات </th>
                        <th scope="col"> user_role  الدور الوظيفي </th>
                        <th scope="col"> Job_Position-منصب الوظيفي</th>
                        {{-- <th scope="col"> pic </th> --}}
                        <th scope="col"> Update  التحديث </th>
                        <th scope="col">delete حذف</th>

                                </tr>

  @php   $i=0;   @endphp
   @foreach ($Allpermissions as $permissions)
<tr>



                           <td> {{++$i}}     </td>
                    <td> {{ $permissions->user->Name ??''}} </td>
                    <td> {{ $permissions->user->email ??''}} </td>

                     <td> <a  href="" type="button" class="btn btn-secondary btn-sm shadow-sm px-4 mb-2" data-toggle="modal" data-target="#Permissions-add{{ $permissions->user->id ?? '' }}">
<span class='fas fa-user-cog'></span> Set Permissions   أضافة صلاحيات للمستخدم
                    </a>

                </td>


  <form action="{{ route('user.update', $permissions->user->id) }}?#permissions"     id="update-userform[{{ $permissions->user->id }}]"  method="Post" />

<td>

    @csrf @method('PUT')
                        <select name='SelectRole'   form="update-userform[{{ $permissions->user->id }}]">
                                <option align='center' value="{{$permissions->user->user_role}}"> Select Job-Role </option>
                                <option value="Admin">
                                    @if ($permissions->user->user_role == 'Admin')
                                         &check; Admin
                                    @else

                                    Admin

                                    @endif
                                </option>
                                <option value="supervisor">
                                    @if ($permissions->user->user_role == 'supervisor')
                                         &check; supervisor
                                    @else
                                        supervisor
                                    @endif
                                </option>

                        </select> </td>


            <td>


   <select name='Job_Position'   form="update-userform[{{ $permissions->user->id }}]">
                                <option align='center' value="{{$permissions->user->Job_Position}}"> Select Job-Position </option>
                                <option value="Accountant">
                                    @if ($permissions->user->Job_Position == 'Accountant')
                                         &check; Accountant
                                    @else

                                    Accountant

                                    @endif
                                </option>
                                <option value="Sales&Marketing">
                                    @if ($permissions->user->Job_Position == 'Sales&Marketing')
                                         &check; Sales&Marketing
                                    @else
                                        Sales&Marketing
                                    @endif
                                </option>



                         <option value="GM">
                                    @if ($permissions->user->Job_Position == 'GM')
                                         &check; General-Manager
                                    @else
                                        General-Manager
                                    @endif
                                </option>

                        </select>

            </td>




                    <td>

                   <button type="submit" name="update" VALUE="update" class="btn btn-primary"s
                            style="background:BLUE" onclick="reload()" form="update-userform[{{ $permissions->user->id }}]"  > <i class="fas fa-edit"></i>    update    </button>

                    </td>    </form>
                    <td>
                        <form action="{{ route('user.destroy', $permissions->user->id) }}?#permissions" method="Post">

                            @csrf

                            @method('DELETE')

                            <Button type="SUBMIT" name="DELETE" VALUE="x" class="btn btn-primary"
                                style='background:red'> x DELETE</Button>
                        </form>
                    </td>


                </tr>

@endforeach

                    </table>




@include('Admin.Auth.permission.update')




            </div>
        </div>
    </div>

</div>  </div>  </div>  </div></div>


