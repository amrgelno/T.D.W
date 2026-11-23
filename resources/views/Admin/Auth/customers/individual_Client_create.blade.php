<div  style="overflow-x: hidden; overflow-y: auto;" class="card-body modal  show"
            ? id="customer-add" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">



                       <div class="modal-dialog modal-dialog-centered">


            <div class="modal-content px-3 rounded-lg shadow">

<div>
<button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
    <span aria-hidden="true" style="font-size: 1.5rem;" onclick="document.querySelector('#Clientselector').setAttribute('data-target','');">  ×   </span>
</button>  </div>


 <p class="card-text">

<form action="{{ route('customers.store') }}#customers"    method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')

<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end" for="username">    Name       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='Name'    align='center' placeholder='الأسم'    value=''  required>
</div></div>
<div class="row mb-3">
<label class="col-md-2 col-form-label text-md-end"  for="Email">     Email       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Email'    placeholder='الأيميل'    value=''  required>

</div></div>


<div class="row mb-3">
<label class="col-md-2 col-form-label text-md-end"  for="passport_num">     passport/ID       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='passport_num'    placeholder='جواز السفر أو الرقم القومي '    value=''  required>

</div></div>


<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end"  for="Mobile">     Mobile      </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='phone'    placeholder='رقم موبيل'    value='' required >
</div></div>


<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end" for="Address">     Address	      </label>

<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Address'    placeholder='عنوان المنزل'    value='' required >
</div>

</div>


<div class="row mb-3 form-group"  onchange='showsalesreps()'>

                    <label class="col-md-5   col-form-label text-md-end">Client source -    مصدر العميل</label>


<select   name='Client_source'  id='Client_source'  class="col-md-6 form-control mx-2">
<option  class="mx-2" value=''> select - أختر </option>


<option  class="mx-2"  value="representative" > representative -  مندوب   </option>


<option  class="mx-2"  value="recommendation" > recommendation - توصية </option>

<option  class="mx-2"  value="digital_marketing" > digital marketing  - تسويق إلكتروني </option>


<option  class="mx-2"  value="other_sources" > other sources  - مصادر اخرى </option>


</select>


</div>


<div class='selesRepes' >
<div class="row mb-3 form-group">

                    <label class="col-md-5   col-form-label text-md-end">SalesReps -    أسم مندوب</label>


<select   name='salesrep_id'  class="col-md-6 form-control mx-2">

<option  class="mx-2"  value=''> select - أختر </option>

@foreach($selesreps  as $selesrep)


<option  class="mx-2"  value="{{ $selesrep ->id  }}" >




    {{ $selesrep ->Name  }}  </option>

@endforeach

</select>


</div>

 </div>


<label   class="col-md-2 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'    placeholder='ملاحظات'    required > </textarea>



<br/>

<div class="row mb-3 form-group">

<label class="col-md-4 col-form-label text-md-end">Status  -    الحالة</label>

<select   name="status"  id="status"  class="col-md-6 form-control mx-2"
 onchange="show()" required>

<option  class="mx-2"  value=''> select - أختر </option>

<option  class="mx-2"     value="Booked_Clients"   > Booked Clients - عملاء حاجزين </option>

<option  class="mx-2"     value="Potential_clients" > Potential Clients - عملاء محتملين </option>

</select>


</div>



<div class="Booked_Clients"  >

    this inputs for  Booked Clients - هذه مطلوبات للعملاء حاجزين

<div class="card-body"   tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">
<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end" for="triptype">    triptype        </label>

<div class="col-md-6">

<select   name='triptype'  class="col-md-6 form-control mx-2">
<option  class="mx-2" > select - أختر نوع رحلة  </option>

@foreach($packages  as $package)

@if($package->packages-> status == 'Active')

<option  class="mx-2"  value="{{ $package -> packages -> id }}"> {{ $package -> packages -> triptype }} </option>
@endif

@endforeach



</select>

</div></div>

</div>



   <div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Number_of_travelers">    Number of travelers  </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='number'  name='Number_of_travelers'    placeholder='عدد األفراد المسافرين'    value=''  >
</div>


</div>



   <div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="travelDate">   travelDate  </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='Date'  name='travelDate'    placeholder='تاريخ السفر'    value=''  >
</div>


</div>




   <div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="travelDate">   ReturnDate  </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='Date'  name='ReturnDate'    placeholder='تاريخ العودة'    value=''  >
</div>


</div>





 {{-- <div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Hotel">   Hotel  </label>



<div class="col-md-6">
<input class='form-control  input-sm' type=''  name='hotel_level'    placeholder='تاريخ العودة'    value=''  >
</div>


</div> --}}






<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="Service_level">    hotel/Service_level -        </label>


<select   name="hotel_level"  class="col-md-6 form-control mx-2">
<option  class="mx-2" value=""> select -
   أختر فندق  أو مستوى الأأقامة  </option>

<option  class="mx-2"  value="economic" > economic - أقتصادي </option>

<option  class="mx-2"  value="4star" > 4 star - أربعة نجوم</option>

<option  class="mx-2"  value="5star" > 5 star - خمسة نجوم</option>

</select>


</div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="triptype">    Ways_of_Travel           </label>

<div class="col-md-6">

<select   name='Ways_of_Travel'  class="col-md-6 form-control mx-2">

<option  class="mx-2"  value=''> select -  أختر   وسيلة السفر  </option>

<option  class="mx-2"  value="byair" data-toggle="modal" > byair -  جوي</option>

<option  class="mx-2"  value="byland" data-toggle="modal" > byland - بري</option>

</select>

</div></div>

<div class="row mb-3 form-group">

                    <label class="col-md-5   col-form-label text-md-end">Booking method -    طريقة حجز </label>


<select   name='Booking_method'  class="col-md-6 form-control mx-2">

<option  class="mx-2"  value=''> select - أختر </option>

<option  class="mx-2"  value="Direct_CLient" > Direct CLient -  عميل مباشر   </option>

<option  class="mx-2"  value="via_a_branch" > via a branch - من خلال فرع </option>

<option  class="mx-2"  value="Through_an_intermediary" > Through an intermediary  - عن طريق وسيط</option>


</select>


</div>


</div>


{{-- <label for='image'>     image       </label>


<input class='form-control  input-sm'   type='file'  name='upload'   placeholder='uploadimage'  required   >   --}}

<br/>


<input type="submit"    name='add-individual_Client'  class="btn btn-primary"   onclick='reload();' >


</form>

</ul>


            </p>
       </div>
        </div>
   </div>
        </div>
