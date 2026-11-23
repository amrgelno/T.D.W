    <p class="card-text">

<form action="{{route('packages.store')}}#price_offers"    method="post"   enctype="multipart/form-data">

@csrf
@Method('Post')

<!-- end auth username & password -->
{{--<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end" for="triptype">    triptype -   نوع الرحلة        </label>

 <div class="col-md-6">

<select   name='triptype'  class="col-md-6 form-control mx-2">

<option  class="mx-2"> select - أختر </option>

<option  class="mx-2"  value="hajj" > hajj -  رحلة حج</option>

<option  class="mx-2"  value="Umrah" > umrah - رحلة عمرة </option>

</select>

</div></div> --}}

<div class="row mb-3">
<label class="col-md-3 col-form-label text-md-end"  for="triptype">    trip_ type      </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='triptype'    placeholder='نوع الرحلة'    value='' required >
</div>


</div>





<div class="row mb-3">
<label class="col-md-3 col-form-label text-md-end"  for="trip_price">    trip_price       </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='number'  name='trip_price'    placeholder='سعر الرحلة'    value='' required >
</div>


</div>




{{-- <div class="row mb-3">
<label class="col-md-3 col-form-label text-md-end"  for="Number_of_travelers">    Number of travelers
-    عدد أفراد المسافرين   </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='number'  name='Number_of_travelers'    placeholder='عدد األفراد المسافرين'    value='' required >
</div>


</div> --}}


<div class="row mb-3">
<div class="col-md-12 col-form-label text-md-end"  for="trip_price_Details ">    trip_price Details    تفاصيل السعر    </div>


<div class="col-md-12"> <B> Room cost </B> </div>



<label  class="col-md-3 col-form-label text-md-end" for="Single_Room_cost"> Single
       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='Single_Room_cost'    placeholder='الغرفة المفردة'    value='' required >
</div>

<label  class="col-md-3 col-form-label text-md-end" for="Duplex_Room_cost"> Duplex

       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='Duplex_Room_cost'    placeholder='الغرفة المزدوجة'    value='' required >
</div>


<label  class="col-md-3 col-form-label text-md-end" for="Triple_Room_cost"> Triple
       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='Triple_Room_cost'    placeholder='الغرفة الثلاثية'    value='' required >
</div>



<div class="col-md-12">
</div>




<label  class="col-md-4 col-form-label text-md-end" for="triptype">    Cost per person
       </label>



<div class="col-md-6">
<input class='form-control  input-sm mb-2' type='text'  name='Cost_per_person'    placeholder='تكلفة الفرد الواحد'    value='' required >
</div>




<label  class="col-md-4 col-form-label text-md-end" for="Transportation costs">  Transportation costs
       </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Transporter_Cost'    placeholder='تكلفة المواصلات'    value='' required >
</div>


<div  class="col-md-12 col-form-label text-md-end" for="Cost of additional services">  Cost of additional services
       </div>

<label  class="col-md-3 col-form-label text-md-end" for="visa"> visa
       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='insurance'    placeholder='تأشيرة'    value='' required >
</div>

<label  class="col-md-3 col-form-label text-md-end" for="insurance"> insurance

       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='airline'    placeholder='تأمين'    value='' required >
</div>


<label  class="col-md-3 col-form-label text-md-end" for="airline"> airline
       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='visa'    placeholder='طيران'    value='' required >
</div>






</div>


<div class="row mb-3">
<label class="col-md-3 col-form-label text-md-end"  for="Service_level">    hotel/Service_level -  الفندق أو مستوى الأقامة       </label>


<select   name='Service_level'  class="col-md-6 form-control mx-2">
<option  class="mx-2" value=''> select - أختر </option>

<option  class="mx-2"  value="economic" > economic - أقتصادي </option>

<option  class="mx-2"  value="4star" > 4 star - أربعة نجوم</option>

<option  class="mx-2"  value="5star" > 5 star - خمسة نجوم</option>

</select>


</div>






<label   class="col-md-2 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='notes'    placeholder='ملاحظات'    value='' required > </textarea>


{{-- <label for='image'>     image       </label>


<input class='form-control  input-sm'   type='file'  name='upload'   placeholder='uploadimage'  required   >   --}}

<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>
            </p>
