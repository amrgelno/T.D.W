
@foreach($packages  as $package)

   <div  style='position:absolute' class="card-body modal fade" id="packages_update{{ $package -> packages->id  }}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
                 <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content px-3 rounded-lg shadow">
         <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>
                  <h5 class="m-0">

                 {{ $package -> packages -> triptype  }}-{{ $package -> packages ->package_ID  }}   تعديل بيانات رحلة  - update Client info


                  </h5>



<form  action="{{route('packages.update', $package -> packages -> id)}}#price_offers"  method="post"  enctype="multipart/form-data">
@csrf
@method('PUT')

<!-- end auth username & password -->
<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end" for="triptype">    triptype -   نوع الرحلة        </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='triptype'    placeholder='نوع الرحلة'    value='{{ $package -> packages -> triptype }}' required >
</div>


{{-- <div class="col-md-6">

<select   name='triptype'  class="col-md-6 form-control mx-2">

<option  class="mx-2"  value="{{$package -> packages -> triptype}}"> select - أختر </option>

<option  class="mx-2"  value="{{ $package -> packages -> triptype }}">&check; {{ $package -> packages -> triptype }} </option>


@foreach($packages  as $item)

@if( $item -> packages -> id    !=  $package -> packages -> id  )

<option  class="mx-2"  value="{{ $item -> packages -> triptype }}"> {{ $item -> packages -> triptype }} </option>

@endif


@endforeach

 </option>

</select>

</div>--}}</div>


<div class="row mb-3">
<label class="col-md-3 col-form-label text-md-end"  for="trip_price">    trip_price       </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='number'  name='trip_price'    placeholder='سعر الرحلة'    value='{{ $package ->  Total_price  }}' required >
</div>


</div>


<div class="row mb-3">
<div class="col-md-12 col-form-label text-md-end"  for="trip_price_Details ">    trip_price Details    تفاصيل السعر    </div>


<div class="col-md-12"> <B> Room cost </B> </div>



<label  class="col-md-3 col-form-label text-md-end" for="Single_Room_cost"> Single
       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='Single_Room_cost'    placeholder='الغرفة المفردة'    value='{{ $package ->  Single_Room_cost  }}' required >
</div>

<label  class="col-md-3 col-form-label text-md-end" for="Duplex_Room_cost"> Duplex

       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='Duplex_Room_cost'    placeholder='الغرفة المزدوجة'    value='{{ $package ->  Duplex_Room_cost  }}' required >
</div>


<label  class="col-md-3 col-form-label text-md-end" for="Triple_Room_cost"> Triple
       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='Triple_Room_cost'    placeholder='الغرفة الثلاثية'    value='{{ $package ->  Triple_Room_cost  }}' required >
</div>



<div class="col-md-12">
</div>




<label  class="col-md-4 col-form-label text-md-end" for="triptype">    Cost per person
       </label>



<div class="col-md-6">
<input class='form-control  input-sm mb-2' type='text'  name='Cost_per_person'    placeholder='تكلفة الفرد الواحد'    value='{{ $package ->  costperperson  }}' required >
</div>




<label  class="col-md-4 col-form-label text-md-end" for="Transportation costs">  Transportation costs
       </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Transporter_Cost'    placeholder='تكلفة المواصلات'    value='{{ $package ->  Transporter_Cost  }}' required >
</div>


<div  class="col-md-12 col-form-label text-md-end" for="Cost of additional services">  Cost of additional services
       </div>

<label  class="col-md-3 col-form-label text-md-end" for="visa"> visa
       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='insurance'    placeholder='تأشيرة'    value='{{ $package ->  insurance  }}' required >
</div>

<label  class="col-md-3 col-form-label text-md-end" for="insurance"> insurance

       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='airline'    placeholder='تأمين'    value='{{ $package ->  airline  }}' required >
</div>


<label  class="col-md-3 col-form-label text-md-end" for="airline"> airline
       </label>


<div class="col-md-3">
<input class='form-control  input-sm mb-1' type='number'  name='visa'    placeholder='طيران'    value='{{ $package ->  visa  }}' required >
</div>






</div>


<div class="row mb-3">
<label class="col-md-3 col-form-label text-md-end"  for="Service_level">    hotel/Service_level -  الفندق أو مستوى الأقامة       </label>


<select   name='Service_level'  class="col-md-6 form-control mx-2">
<option  class="mx-2"   value='{{$package -> packages ->Service_level}}'> select - أختر </option>

<option  class="mx-2"  value="economic" >

   @if ($package -> packages ->Service_level == 'economic')
                                         &check; economic - أقتصادي
                                    @else
                                      economic - أقتصادي
                                    @endif


   </option>

<option  class="mx-2"  value="4star" >

  @if ($package -> packages ->Service_level == '4star')
                                         &check; 4 star - أربعة نجوم

                                    @else
                                       4 star - أربعة نجوم
                                    @endif


   </option>

<option  class="mx-2"  value="5star" >

     @if ($package -> packages ->Service_level == '5star')
                                         &check;  5 star - خمسة نجوم

                                    @else
                                    5 star - خمسة نجوم
                                    @endif




   </option>





</select>


</div>






<label   class="col-md-2 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='notes'    placeholder='ملاحظات'   required >{{ $package  -> packages->notes  }}</textarea>

<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>


         </div>
                                            </div>
                                        </div>


@endforeach







