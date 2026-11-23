            <div  style="overflow-x: hidden; overflow-y: auto;" class="card-body modal  show" id="client-add" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">



                       <div class="modal-dialog modal-dialog-centered">


            <div class="modal-content px-3 rounded-lg shadow">

<div>
<button type="button" class="close" data-dismiss="modal" aria-label="إغلاق" >
    <span aria-hidden="true" style="font-size: 1.5rem;" onclick="document.querySelector('#Clientselector').setAttribute('data-target','');">  ×   </span>
</button>  </div>




 <p class="card-text">

<form action="{{ route('customers.store') }}#customers"    method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')

<div>
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
<div class="row mb-3">
<label class="col-md-2 col-form-label text-md-end"  for="Email">     Email       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Email'    placeholder='الأيميل'    value=''  required>

</div></div>

{{--
<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end"  for="Mobile">     Mobile      </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='phone'    placeholder='رقم موبيل'    value='' required >
</div></div> --}}



<label   class="col-md-2 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'    placeholder='ملاحظات'    required > </textarea>



<br/>

<div class="row mb-3 form-group">

<label class="col-md-4 col-form-label text-md-end">Status  -    الحالة</label>

<select   name="status"  class="status"  class="col-md-6 form-control mx-2"
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


</div>     </div>


<br/>


<input type='submit'    name='add-Group_Client'  class="btn btn-primary"   onclick='reload()' >


</form>

</ul>


            </p>
       </div>
        </div>
   </div>
        </div>
