 <div style="background: transparent;" class="nav flex-column nav-pills me-3" id="v-pills-tab" aria-orientation="vertical" role="tabpanel">
    <button class="nav-link active" id="crm-en-home-tab" data-bs-toggle="tab" data-bs-target="#crm-en-home" type="button" role="tab" aria-controls="crm-en-home" aria-selected="true">Recording the customer's basic information</button>
    <button class="nav-link" id="crm-en-profile-tab" data-bs-toggle="tab" data-bs-target="#crm-en-profile" type="button" role="tab" aria-controls="crm-en-profile" aria-selected="false">Customer registration without a booking</button>
    <button class="nav-link" id="crm-en-messages-tab" data-bs-toggle="tab" data-bs-target="#crm-en-messages" type="button" role="tab" aria-controls="crm-en-messages" aria-selected="false">Booking Management</button>
    {{-- <button class="nav-link" id="crm-en-settings-tab" data-bs-toggle="tab" data-bs-target="#crm-en-settings" type="button" role="tab" aria-controls="crm-en-settings" aria-selected="false">Settings</button> --}}
  </div>


  <div class="tab-content" id="crm-tabContent" style="background:white;">


    <div class="tab-pane fade show active" id="crm-en-home" role="tabpanel" aria-labelledby="crm-home-tab">

The system allows for the organized recording of a client’s basic information, including:
● Full name (four-part name)
● National ID or passport number
● Phone number
● Email address (optional)
● Address
● Client source (e.g., sales representative, digital marketing, referral, etc.)
● General notes

crm are divided into two categories:
Individual crm—those who make bookings directly at the company’s office, having come via social media, personal recommendations, or referrals from a company representative.
Group crm—those whose bookings are handled at the office by a company representative.


<a href="{{asset('Front/IMG/Screenshot/Client/1.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Client/1.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>


</div>
    <div class="tab-pane fade" id="crm-en-profile" role="tabpanel" aria-labelledby="crm-profile-tab">

        ● A new client can be registered without being linked to any specific trip, allowing their data to be saved for future communication or marketing purposes.
● A client can be converted into a "booked client" once a specific trip is selected.
● Clients within the system are categorized as:
○ Booked clients
○ Potential clients (those who have not yet made a booking)
● The system allows for the automated sending of marketing offers or reminders to these clients.

<a href="{{asset('Front/IMG/Screenshot/Client/2.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/Client/2.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>

</div>
    <div class="tab-pane fade" id="crm-en-messages" role="tabpanel" aria-labelledby="crm-messages-tab">A booking can be linked to an existing client profile without the need to re-enter their information.
\
● Recording trip details associated with the client, such as:
○ Trip type (Umrah / Hajj / Other)
○ Departure and return dates
○ Mode of travel (Air / Land)
○ Hotel or accommodation standard
○ Number of travelers
○ Special booking notes
● Viewing the history of past and current bookings for each client


<a href="{{asset('Front/IMG/Screenshot/CRM.png')}}" data-toggle="lightbox" data-size="sm" class="col-sm-4">

<img class="animation__shake" src="{{asset('Front/IMG/Screenshot/CRM.png')}}"
alt="AdminLTELogo" height="60" width="60">  </a>
</div>
    {{-- <div class="tab-pane fade" id="crm-en-settings" role="tabpanel" aria-labelledby="crm-settings-tab">En-Settings...</div> --}}
  </div>
