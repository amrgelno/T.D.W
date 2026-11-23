
<div class="price_offersGuide modal fade"  id="price_offersGuide" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true" >
     <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق"

onclick="document.querySelector('.price_offersGuide').setAttribute('style','none');"
style="color:white">
        <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>
 <h1 style="color:white;  text-align:center"> price_offersGuide  </h1>

          <div class="modal-dialog modal-dialog-centered">
<div   class="modal-content px-1 rounded-lg shadow">

<div class="bd-example">
    <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-x-tab" data-bs-toggle="tab"
                data-bs-target="#price_offers-Ar-tab" type="button" role="tab"
                aria-controls="price_offers-Ar-tab" aria-selected="true">Ar- عربي</button>
            <button class="nav-link" id="nav-z-tab" data-bs-toggle="tab"
                data-bs-target="#price_offers-En-tab" type="button" role="tab"
                aria-controls="price_offers-En-tab" aria-selected="false" tabindex="-1">En-English</button>

        </div>
    </nav>


       <div class="tab-content" id="nav-tabContent">



<div class="tab-pane fade active show" id="price_offers-Ar-tab" role="tabpanel"  aria-labelledby="price_offers-Ar-tab">
    <div class="d-flex" dir="ltr"  style='padding:0px;'> @include('Admin.Auth.price_offers.packages.Ar-package')  </div>
</div>



  <div class="tab-pane fade" id="price_offers-En-tab" role="tabpanel"
            aria-labelledby="price_offers-En-tab">
            <div class="d-flex"> @include('Admin.Auth.price_offers.packages.En-package') </div>
       </div>


</div> </div>


</div>

</div>  </div>

