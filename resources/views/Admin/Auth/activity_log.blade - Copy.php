
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


<div class='col-12'>


<button href="#User_login">

    سجل دخول المستخدمين - User login


</button>



<button href=" ">

    سجل نشاط المستخدمين - User activity log


</button>


</div>

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
            <h5 class="m-0">activity_log     نشاط مستخدمين  </h5>




            </div>

 </div>


            </div>
        </div>
   </div>
        </div>


        <div   class="card card-primary card-outline">
            <div class="card-header">
            <h5 class="m-0">Featured</h5>
            </div>
            <div class="card-body" >


                    {{-- <h6 class="card-title">You can see All LoginTime  here  :- &nbsp; </h6> --}}



<br/>


<table  border="1"  class="table table-responsive"  id="#User_login" >

<tr class="trc" align='center'>
<th scope="col"><span align='center'> # </span></th>
<th scope="col">UID-رقم مستخدم</th>
<th scope="col">Name-أسم مستخدم</th>
<th scope="col">Transaction- العملية</th>
<th scope="col">Transaction_Type- نوع العملية </th>
<th scope="col">التاريخ</th>

</tr>

<tr>

@php   $i=0;   @endphp

@foreach($activitylogs  as $activitylog)


<td> {{++$i}}     </td>


<input type='text'  name='Name' value='{{ $activitylog -> user()->Name  }}' >  </td>

<td> <input type='text'  name='Email' value='{{ $activitylog -> logintime  }}' >  </td>

<td> <input type='text'  name='phone' value='{{ $activitylog -> logouttime  }}' >  </td>

<td> <input type='text'  name='passport_num' value='{{ $activitylog -> created_at	  }}' >  </td>

</div>
</td>
</tr>
    @endforeach
</table>

            </div>
       </div>



          <div class="card">
            <div class="card-header">
            <h5 class="m-0">user_log    سجل دخول  مستخدمين  </h5>




            </div>

 </div>


<div   class="card card-primary card-outline">
            <div class="card-header">
            <h5 class="m-0">Featured</h5>
            </div>
            <div class="card-body" >


                    {{-- <h6 class="card-title">You can see All LoginTime  here  :- &nbsp; </h6> --}}



<br/>




<table  border="1"  class="table table-responsive"  id="#User_login" >

<tr class="trc" align='center'>
<th scope="col"><span align='center'> # </span></th>
<th scope="col">UID-رقم مستخدم</th>
<th scope="col">Name-أسم مستخدم</th>
<th scope="col">logintime-وقت دخول</th>
<th scope="col">logouttime- وقت خروج </th>
<th scope="col">التاريخ</th>

</tr>

<tr>

@php   $i=0;   @endphp

@foreach($logtimes  as $logtime)


<td> {{++$i}}     </td>


<input type='text'  name='Name' value='{{ $logtime -> user()->Name  }}' >  </td>

<td> <input type='text'  name='Email' value='{{ $logtime -> logintime  }}' >  </td>

<td> <input type='text'  name='phone' value='{{ $logtime -> logouttime  }}' >  </td>

<td> <input type='text'  name='passport_num' value='{{ $logtime -> created_at	  }}' >  </td>

</div>
</td>
</tr>
    @endforeach
</table>

            </div>
       </div>














































    </div>
<!-- /.content -->



