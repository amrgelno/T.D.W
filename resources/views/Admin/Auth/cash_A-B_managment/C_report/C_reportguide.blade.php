<div class="C_report_Guide modal fade"  id="C_report_Guide" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true" >
     <button type="button" class="close" data-dismiss="modal"   aria-label="إغلاق"

         onclick="document.querySelector('.C_Reportguide').setAttribute('style','none');"

         style='color:white'>
                        <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>
 <h1 style="color:white; text-align:center"> Cash Report Guide </h1>


          <div class="modal-dialog modal-dialog-centered">
<div style="background: transparent;"  class="modal-content px-1 rounded-lg shadow">




<div class="d-flex align-items-start" style="background: white;">
<div class="bd-example">

    <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-x-tab" data-bs-toggle="tab"
    data-bs-target="#C_reportguide-Ar-tab" type="button" role="tab"
                aria-controls="C_reportguide-Ar-tab" aria-selected="true">Ar- عربي</button>
            <button class="nav-link" id="nav-z-tab" data-bs-toggle="tab"
                data-bs-target="#C_reportguide-En-tab" type="button" role="tab"
                aria-controls="C_reportguide-En-tab" aria-selected="false" tabindex="-1">En-English</button>

        </div>
    </nav>


       <div class="tab-content" id="nav-tabContent">



<div class="tab-pane fade active show" id="C_reportguide-Ar-tab" role="tabpanel"  aria-labelledby="C_reportguide-tab">
    <div class="d-flex" dir="ltr"  style='padding:0px;'> @include('Admin.Auth.cash_A-B_managment.C_report.C_reportguide.Ar-C_report')  </div>
</div>



  <div class="tab-pane fade" id="C_reportguide-En-tab" role="tabpanel"
            aria-labelledby="C_reportguide-En-tab">
            <div class="d-flex"> @include('Admin.Auth.cash_A-B_managment.C_report.C_reportguide.En-C_report') </div>
       </div>



</div>


</div>






</div>




 </div>  </div>
    </div>
