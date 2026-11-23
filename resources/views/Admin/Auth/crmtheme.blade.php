
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light"   style="PADDING-TOP: 20PX;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

     <li class="nav-item col-md-12">

                <img src="{{asset('Front/IMG/TDW-logo.png')}}" class="col-md-12 d-xs-none img-md" alt="IframeCMS" title="IframeCMS">

            </li>

       {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> --}}
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">




@include('Admin.Auth.inputheaders')




      <!-- Navbar Search -->
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a> --}}

        <li class="nav-item">
  <a class="nav-link" data-widget="control-sidebar" href="#" role="button">
<svg title='setting' data-component="Octicon" focusable="false" aria-hidden="true" class="octicon octicon-sliders Primer_Brand__Button-module__Button__icon-visual____qybb" viewBox="0 0 16 16" width="16" height="16" fill="currentColor" display="inline-block" overflow="visible" style="vertical-align:text-bottom"><path d="M15 2.75a.75.75 0 0 1-.75.75h-4a.75.75 0 0 1 0-1.5h4a.75.75 0 0 1 .75.75Zm-8.5.75v1.25a.75.75 0 0 0 1.5 0v-4a.75.75 0 0 0-1.5 0V2H1.75a.75.75 0 0 0 0 1.5H6.5Zm1.25 5.25a.75.75 0 0 0 0-1.5h-6a.75.75 0 0 0 0 1.5h6ZM15 8a.75.75 0 0 1-.75.75H11.5V10a.75.75 0 1 1-1.5 0V6a.75.75 0 0 1 1.5 0v1.25h2.75A.75.75 0 0 1 15 8Zm-9 5.25v-2a.75.75 0 0 0-1.5 0v1.25H1.75a.75.75 0 0 0 0 1.5H4.5v1.25a.75.75 0 0 0 1.5 0v-2Zm9 0a.75.75 0 0 1-.75.75h-6a.75.75 0 0 1 0-1.5h6a.75.75 0 0 1 .75.75Z"></path></svg>
  </a>
</li>

        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">

            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->

            <!-- Message End -->
          </a>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link"
 onclick="document.querySelector('.modal-backdrop').setAttribute('style','none');
document.querySelector('.TosGuide ').style.display='none';"
        data-widget="control-sidebar" data-slide="true"  data-toggle="modal" data-target="#TosGuide" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4"  style="background:#001c38;  overflow-y: scroll;   position: fixed;">
    <!-- Brand Logo -->
    <!-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>

        <font size='+1'><i class="nav-icon fas fa-tachometer-alt"></i></font> &nbsp; &nbsp;

          <a href="#" class="d-block">Tos dashboard</a>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-1">
        <ul class="nav nav-pills nav-sidebar flex-column position-absolute"    data-widget="treeview" role="menu" data-accordion="false">
             <li class="nav-item">
                <a href="#Summary"  aria-label="الملخص"  class="hint--bottom-right summary  nav-link active ">
                  <i class="fas fa-circle nav-icon"></i>
             <p>Summary</p>
                </a>
              </li>
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->



               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-circle nav-icon"></i>
              <p>
              users & permissions
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#users"  aria-label="المستخدمبن"  class="hint--bottom-right users nav-link ">
                  <i class="far fa-circle nav-icon"></i>
             <p>Users</p>
                </a>
              </li>


@if(auth::guard('user')->user()->user_role == 'Admin')

              <li class="nav-item">
                <a href="#permissions" aria-label="الصلاحيات" class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>permissions</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="#activity_log" aria-label="نشاط مستخدمين" class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>activity_log</p>
                </a>
              </li>

              @endif
            </ul>
          </li>




 <li class="nav-item ">
            <a href="#" class="hint--bottom-right nav-link active"   aria-label="الحجوزات">
              <i class="fas fa-circle nav-icon"></i>
              <p>
             CRM
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

@if(auth::guard('user')->user()->Job_Position == 'Sales&Marketing'or auth::guard('user')->user()->Job_Position == 'GM')

@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->read=='Active' )

            <li class="nav-item">
                <a href="#customers" aria-label="العملاء و الحجوزات"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>customers & Books</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="#SalesReps" aria-label="مناديب مبيعات"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sales Reps</p>
                </a>
              </li>
@endif

@endforeach   @endif



              </li>

            </ul>

<li class="nav-item ">
            <a href="#" class="hint--bottom-right nav-link active"   aria-label="العملاء">
              <i class="fas fa-circle nav-icon"></i>
              <p>
              Packages & offers
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
@if(auth::guard('user')->user()->Job_Position == 'Sales&Marketing'or auth::guard('user')->user()->Job_Position == 'GM')

@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->read=='Active' )

            <li class="nav-item">
                <a href="#price_offers" aria-label="عروض والاسعار"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>price &  offers</p>
                </a>
              </li>
@endif


@endforeach  @endif


              </li>
            </ul>
          </li>

<li class="nav-item ">
            <a href="#" class="hint--bottom-right nav-link active"   aria-label="إدارة الحسابات البنكية">
              <i class="fas fa-circle nav-icon"></i>
              <p>
              Bank A/B Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

@if(auth::guard('user')->user()->Job_Position == 'Accountant'or auth::guard('user')->user()->Job_Position == 'GM')

@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->read=='Active' )

            <li class="nav-item">
                <a href="#Bank" aria-label="أضافة حساب بنكي جديد"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Bank Balance</p>
                </a>
              </li>



                <li class="nav-item">
                <a href="#Bank_reports" aria-label="تقارير تفصيلي بحركات كل حساب"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Bank transactions Balances reports</p>
                </a>
              </li>


@endif

@endforeach

@endif

              </li>
            </ul>
          </li>
<li class="nav-item ">
            <a href="#" class="hint--bottom-right nav-link active"   aria-label="إدارة الحسابات النقدية">
              <i class="fas fa-circle nav-icon"></i>
              <p>
              Cash A/B Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

@if(auth::guard('user')->user()->Job_Position == 'Accountant'or auth::guard('user')->user()->Job_Position == 'GM')


@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->read=='Active' )


            <li class="nav-item">
                <a href="#cash" aria-label="أضافة حساب خزينة جديد"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New cash Balance</p>
                </a>
              </li>


                <li class="nav-item">
                <a href="#Cash_reports" aria-label="تقارير تفصيلي بحركات كل حسساب"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Cash transactions Balances reports</p>
                </a>
              </li>
@endif
@endforeach
@endif

              </li>
            </ul>
          </li>


          <li class="nav-item ">
            <a href="#" class="hint--bottom-right nav-link active"   aria-label="أدارة العمليات المالية">
              <i class="fas fa-circle nav-icon"></i>
              <p>
              Accounting transactions Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
@if(auth::guard('user')->user()->Job_Position == 'Accountant'or auth::guard('user')->user()->Job_Position == 'GM')

@foreach($permissionsAthuser    as  $userpermissions    )


@if($userpermissions->read=='Active' )

            <li class="nav-item">
                <a href="#Receipts" aria-label="الأيصالات"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Receipts</p>
                </a>
              </li>


                <li class="nav-item">
                <a href="#Expenses" aria-label="المصروفات"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expenses</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="#journalentiry" aria-label="اليومية  العامة"  class="hint--bottom-right Clients nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> journalentiry </p>
                </a>
              </li>

@endif
@endforeach
@endif

              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('user.LogOut')}}" class="nav-link">
            <!-- <i class="nav-icon fas fa-th"></i>   --> <i class="nav-icon fas fa-window-close"></i>
             logout


                {{-- <span class="right badge badge-danger">New</span> --}}

            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
  </aside>


<div id='users'> @yield('users') </div>
<div id='price_offers'> @yield('price_offers') </div>
<div id='activity_log'> @yield('activity_log') </div>
<div id='customers'> @yield('customers') </div>
<div id='cash'>@yield('cash') </div>
<div id='Bank'>@yield('Bank') </div>
<div id='Expenses'>@yield('Expenses') </div>
<div id='journalentiry'>@yield('journalentiry') </div>
<div id='Cash_reports'>@yield('Cash_reports') </div>
<div id='Bank_reports'>@yield('Bank_reports') </div>
<div id='permissions'> @yield('permissions') </div>
<div id='Summary'>@yield('Summary') </div>
<div id='SalesReps'>@yield('SalesReps') </div>
<div id='Receipts'>@yield('Receipts') </div>

@include('Admin.Auth.Tosguidepages');

<div class="TosGuide modal fade"  id="TosGuide"  tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true" >

<button type="button" class="close" data-dismiss="modal" aria-label="إغلاق"


onclick="document.querySelector('.TosGuide').setAttribute('style','none');

document.querySelector('.modal-backdrop').style.display='none';"  style='color:white'>
    <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
</button>

@include('Admin.Auth.Tos_Guide')


</div>

  <!-- Main Footer -->
  {{-- <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="">AmrGelno</a>.</strong> All rights reserved.
  </footer> --}}
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

@include('Admin.Auth.dashboard_setting');


<script src="{{ asset('Front/JS/jquery.min.js') }}" type="text/javascript"></script>


 {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" defer></script> --}}
<!-- Bootstrap 4 -->
<script src="{{asset('Front/JS/dashboard.js')}}" type="text/javascript"  ></script>

<script src="{{ asset('Front/JS/plugins/Counter/Counter.js')}}"></script>

<script src="{{ asset('Front/JS/plugins/Chart/Chart.js')}}"></script>

<!-- Bootstrap 4 -->
 <script src="{{ asset('Front/JS/bootstrap@4.6.2.js') }}" type="text/javascript" ></script>
<!-- AdminLTE App -->

 <script src="{{ asset('Front/JS/bootstrap.bundle.min.js') }}" type="text/javascript" ></script>


<script src="{{asset('Front/JS/Lightbox.min.js')}}" type="text/javascript"  ></script>

{{-- <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.0/dist/index.bundle.min.js"></script> --}}

 <script src="{{ asset('Front/JS/plugins/datatables/jquery.dataTables.min.js')}}"></script>
 <script src="{{ asset('Front/JS/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('Front/JS/plugins/datatables-responsive/responsive.bootstrap4.min.js')}}"></script>


<script src="{{ asset('Front/JS/adminlte.min.js') }}" type="text/javascript" ></script>

<script src="{{ asset('Front/JS/dashboard_setting.js') }}" type="text/javascript" ></script>

<script src="{{ asset('Front/JS/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('Front/JS/plugins/flot/plugins/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('Front/JS/plugins/flot/plugins/jquery.flot.pie.js')}}"></script>

<script src="{{ asset('Front/JS/sweetalert2@11.js') }}" type="text/javascript" ></script>
<script src="{{ asset('Front/JS/TableFilter.min.js') }}" type="text/javascript" ></script>

<!-- AdminLTE App -->
<script data-config>

      $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

    var filtersConfig = {
        base_path: 'tablefilter/',
        col_0: 'none',
        col_2: 'select',
        col_6: 'select',
        col_7: 'select',
        col_11: 'none',
        col_12: 'none',
        alternate_rows: true,
        rows_counter: true,
        btn_reset: true,
        loader: true,
        status_bar: true,
        mark_active_columns: true,
        highlight_keywords: true,
        col_types: [
            'string', 'string', 'number',
            'number', 'number', 'number',
            'number', 'number', 'number'
        ],
        custom_options: {
            cols:[3],
            texts: [[
                '0 - 25 000',
                '100 000 - 1 500 000'
            ]],
            values: [[
                '>0 && <=25000',
                '>100000 && <=1500000'
            ]],
            sorts: [false]
        },
        col_widths: [
            '150px', '100px', '100px',
            '100px', '100px', '100px',
            '70px', '60px', '60px'
        ],
        extensions:[{ name: 'sort' }]
    };

    var tf = new TableFilter('example1', filtersConfig);
    tf.init();

</script>



<script data-config>



    var filtersConfig = {
        base_path: 'tablefilter/',
        col_0: 'none',
        col_3: 'select',
        alternate_rows: true,
        rows_counter: true,
        btn_reset: true,
        loader: true,
        status_bar: true,
        mark_active_columns: true,
        highlight_keywords: true,
        col_types: [
            'string', 'string', 'number',
            'number', 'number', 'number',
            'number', 'number', 'number'
        ],
        custom_options: {
            cols:[0],
            texts: [[
                '0 - 25 000',
                '100 000 - 1 500 000'
            ]],
            values: [[
                '>0 && <=25000',
                '>100000 && <=1500000'
            ]],
            sorts: [false]
        },

        extensions:[{ name: 'sort' }]
    };

    var tf = new TableFilter('example2', filtersConfig);
    tf.init();

</script>


    <script data-config>

    var filtersConfig = {
        base_path: 'tablefilter/',
        col_0: 'none',
        col_3: 'select',
        alternate_rows: true,
        rows_counter: true,
        btn_reset: true,
        loader: true,
        status_bar: true,
        mark_active_columns: true,
        highlight_keywords: true,
        col_types: [
            'string', 'string', 'number',
            'number', 'number', 'number',
            'number', 'number', 'number'
        ],
        custom_options: {
            cols:[0],
            texts: [[
                '0 - 25 000',
                '100 000 - 1 500 000'
            ]],
            values: [[
                '>0 && <=25000',
                '>100000 && <=1500000'
            ]],
            sorts: [false]
        },

        extensions:[{ name: 'sort' }]
    };

    var tf = new TableFilter('example3', filtersConfig);
    tf.init();

</script>



<script data-config>

    var filtersConfig = {
        base_path: 'tablefilter/',
        col_0: 'none',
        col_3: 'select',
        col_4: 'select',
        col_6: 'select',
        col_7: 'none',
        alternate_rows: true,
        rows_counter: true,
        btn_reset: true,
        loader: true,
        status_bar: true,
        mark_active_columns: true,
        highlight_keywords: true,
        col_types: [
            'string', 'string', 'number',
            'number', 'number', 'number',
            'number', 'number', 'number'
        ],
        custom_options: {
            cols:[0],
            texts: [[
                '0 - 25 000',
                '100 000 - 1 500 000'
            ]],
            values: [[
                '>0 && <=25000',
                '>100000 && <=1500000'
            ]],
            sorts: [false]
        },

        extensions:[{ name: 'sort' }]
    };

    var tf = new TableFilter('example4', filtersConfig);
    tf.init();

</script>







<script>

 $(window).scroll(function(){


    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {
        label: 'cash',
        data :{{$cash_transaction ->sum('Amount')/\App\Models\transaction::sum('Amount')*100}},
        color: '#3c8dbc'
      },
      {
        label: 'Bank',
        data :{{$Bank_transaction ->sum('Amount')/\App\Models\transaction::sum('Amount')*100}},
        color: '#0073b7'
      },
      {
        label: 'Expenses',
        data :{{\App\Models\Expense::sum('Amount')/\App\Models\transaction::sum('Amount')*100}},
        color: '#00c0ef'
      }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });      });


    /*
     * END DONUT CHART
     */

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }









</script>








</body>




</html>
