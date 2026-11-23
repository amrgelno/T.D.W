  <div style="background: transparent;"class="nav flex-column nav-pills me-3" id="Receiptsguide-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="nav-pills-home-tab" data-bs-toggle="tab" data-bs-target="#Receiptsguide-en-home" type="button" role="tab" aria-controls="Receiptsguide-home" aria-selected="true">Create Receipts</button>
    <button class="nav-link" id="nav-pills-profile-tab" data-bs-toggle="tab" data-bs-target="#Receiptsguide-en-profile" type="button" role="tab" aria-controls="Receiptsguide-profile" aria-selected="false">Integration with receipts and payments</button>
    {{-- <button class="nav-link" id="nav-pills-messages-tab" data-bs-toggle="tab" data-bs-target="#Receiptsguide-en-messages" type="button" role="tab" aria-controls="Receiptsguide-messages" aria-selected="false">Messages</button>
    <button class="nav-link" id="nav-pills-settings-tab" data-bs-toggle="tab" data-bs-target="#Receiptsguide-en-settings" type="button" role="tab" aria-controls="Receiptsguide-settings" aria-selected="false">Settings</button> --}}
  </div>
  <div class="tab-content" id="Receiptsguide-tabContent" style="background:white;">
    <div class="tab-pane fade show active" id="Receiptsguide-en-home" role="tabpanel" aria-labelledby="Receiptsguide-home-tab">

Generate a receipt when: a customer makes a cash payment at the company premises
Receipt details include: receipt number and date; customer name and contact number; amount and payment method (transfer or cash); name of the bank or cash fund where the amount was deposited; and the name of the user who issued the receipt
Upon saving the receipt: the balance in the bank account or cash fund is automatically updated; the receipt is linked to the customer to appear in their payment history; and the receipt can be printed in a ready-to-use format stamped with the company logo

Receipts are of two types: those for clients, and those for partners or company shareholders; these are generated from other receipts.

You can create a receipt directly from the CRM or from a financial system via the receipts tab.


<a href="{{asset('Front/IMG/Screenshot/Receipts/1.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Receipts/1.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>

<a href="{{asset('Front/IMG/Screenshot/Receipts/3.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Receipts/3.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>


    </div>
    <div class="tab-pane fade" id="Receiptsguide-en-profile" role="tabpanel" aria-labelledby="Receiptsguide-profile-tab"> Each receipt is obtained by the client.
● All receipts and payments related to the client are retained for various purposes.
● The system automatically calculates:
○ The total amount to be funded
○ The remaining balance
○ The final payment/settlement method

<a href="{{asset('Front/IMG/Screenshot/Receipts.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Receipts.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>



<a href="{{asset('Front/IMG/Screenshot/Receipts/2.png')}}" data-toggle="lightbox" data-size="xs" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Receipts/2.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>

</div>
    {{-- <div class="tab-pane fade" id="Receiptsguide-en-messages" role="tabpanel" aria-labelledby="Receiptsguide-messages-tab">En-Messages...</div>
    <div class="tab-pane fade" id="Receiptsguide-en-settings" role="tabpanel" aria-labelledby="Receiptsguide-settings-tab">En-Settings...</div> --}}
  </div>
