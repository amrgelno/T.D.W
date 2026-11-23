
<div class="Expenses_Guide modal fade"  id="Expenses_Guide" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true" >
     <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق"

onclick="document.querySelector('.Expenses_Guide').setAttribute('style','none');"
style="color:white">
        <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>
 <h1 style="color:white; text-align:center"> Expenses_guide   </h1>

          <div class="modal-dialog modal-dialog-centered">
<div style="background: transparent;"  class="modal-content px-1 rounded-lg shadow">

<div class="d-flex align-items-start" style="background: white;">

<div class="bd-example">

    <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-x-tab" data-bs-toggle="tab"
    data-bs-target="#Expenses_guide-Ar-tab" type="button" role="tab"
                aria-controls="Expenses_guide-Ar-tab" aria-selected="true">Ar- عربي</button>
            <button class="nav-link" id="nav-z-tab" data-bs-toggle="tab"
                data-bs-target="#Expenses_guide-En-tab" type="button" role="tab"
                aria-controls="Expenses_guide-En-tab" aria-selected="false" tabindex="-1">En-English</button>

        </div>
    </nav>


       <div class="tab-content" id="nav-tabContent">

<div class="tab-pane fade active show" id="Expenses_guide-Ar-tab" role="tabpanel"  aria-labelledby="customers-tab">
    <div class="d-flex" dir="ltr"  style='padding:0px;'> @include('Admin.Auth.Accounting_transactions_Management.Expenses.Expensesguide.Ar-Expenses')  </div>
</div>


  <div class="tab-pane fade" id="Expenses_guide-En-tab" role="tabpanel"
            aria-labelledby="-En-tab">
            <div class="d-flex"> @include('Admin.Auth.Accounting_transactions_Management.Expenses.Expensesguide.En-Expenses') </div>
       </div>


</div>


</div>


</div>

           </div>  </div>
    </div>

