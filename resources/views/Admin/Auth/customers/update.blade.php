

   @foreach($customers  as $customer)

   <div  style='position: absolute; overflow: auto;'  class="card-body modal fade" id="Booked_Clients_update{{ $customer -> customers ->id  }}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
                 <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">
         <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>
                  <h5 class="m-0">

                  {{ $customer -> customers ->Name  }}-{{ $customer -> customers ->id  }}   تعديل بيانات العميل - update Client info
</h5>


<form  action="{{route('customers.update',$customer -> customers ->id)}}#customers"  method="post"  enctype="multipart/form-data">
@csrf
@method('PUT')


<!-- end auth username & password -->

<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end" for="username">    Name       </label>
@if($customer -> customers ->classify == 'individual_Client')
<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='Name'    align='center' placeholder='الأسم'    value='{{ $customer -> customers ->Name  }}'  required>
</div>
@elseif($customer -> customers ->classify == 'Group_Client')

<div class="row mb-3 form-group">


<select   name='salesrep_id'  class="col-md-6 form-control mx-2">

<option  class="mx-2" value=''> select - أختر </option>

@foreach($selesreps  as $selesrep)


<option  class="mx-2"  value="{{ $selesrep ->id  }}" >

     @if ( $customer -> customers -> salesrep_id ==  $selesrep ->id  )
     &check;
    @endif

     {{ $selesrep ->Name  }}
     </option>

@endforeach

</select>


</div>

@endif

</div>

<div class="row mb-3">
<label class="col-md-2 col-form-label text-md-end"  for="Email">     Email       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='Email'    placeholder='الأيميل'    value='{{ $customer -> customers ->email  }}'  required>

</div></div>


<div class="row mb-3">
<label class="col-md-2 col-form-label text-md-end"  for="passport_num">     passport/ID       </label>

<div class="col-md-6">

<input class='form-control  input-sm' type='text'  name='passport_num'    placeholder='جواز السفر أو الرقم القومي '    @if($customer -> customers ->passport_num !='0')    value='{{ $customer -> customers ->passport_num }}' @endif required>

</div></div>


<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end"  for="Mobile">     Mobile      </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='phone'    placeholder='رقم موبيل'    value='{{ $customer -> customers ->phone  }}' required >
</div></div>


<div class="row mb-3">
<label  class="col-md-2 col-form-label text-md-end" for="Address">     Address	      </label>

<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Address'    placeholder='عنوان المنزل'    value='{{ $customer -> customers ->Address  }}' required >
</div>

</div>




@if($customer -> customers ->classify == 'individual_Client')


<div class="row mb-3 form-group">

                    <label class="col-md-5   col-form-label text-md-end">Client source -    مصدر العميل</label>


<select   name='Client_source'  class="col-md-6 form-control mx-2">
<option  class="mx-2"   value='{{$customer -> customers -> Client_source}}'> select - أختر </option>


<option  class="mx-2"  value="representative" >

      @if ( $customer -> customers -> Client_source == 'representative')
                                         &check; representative -  مندوب
                                    @else
representative -  مندوب

 @endif



      </option>


<option  class="mx-2"  value="recommendation" >

      @if ( $customer -> customers -> Client_source == 'recommendation')

                                           &check; recommendation - توصية

                                  @else
recommendation - توصية



 @endif

   </option>

<option  class="mx-2"  value="digital_marketing" >


  @if ( $customer -> customers -> Client_source == 'digital_marketing')

                                           &check; digital marketing  - تسويق إلكتروني

                                  @else



digital marketing  - تسويق إلكتروني


 @endif

</option>


<option  class="mx-2"  value="other sources" >



  @if ( $customer -> customers -> Client_source == 'other sources')

                                           &check; other sources  - مصادر اخرى

                                  @else



 other sources  - مصادر اخرى

 @endif





    </option>


</select>


</div>


<div class='selesRepes'    @if ( $customer -> customers -> Client_source == 'representative') style='display:block'  @endif>
<div class="row mb-3 form-group">

                    <label class="col-md-5   col-form-label text-md-end">SalesReps -    أسم مندوب</label>


<select   name='salesrep_id'  class="col-md-6 form-control mx-2">

<option  class="mx-2"  value={{$customer -> customers -> salesrep_id ?? '0'}}> select - أختر </option>

@foreach($selesreps  as $selesrep)


<option  class="mx-2"  value="{{ $selesrep ->id  }}" >

     @if ( $customer -> customers -> salesrep_id ==  $selesrep ->id  )
     &check;
    @endif

     {{ $selesrep ->Name  }}
     </option>

@endforeach

</select>


</div>

 </div>


@endif


<label   class="col-md-2 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'   name='Notes'    placeholder='ملاحظات'    required > {{ $customer -> customers ->notes  }}</textarea>



<br/>

<div class="row mb-3 form-group">

<label class="col-md-4 col-form-label text-md-end">Status  -    الحالة</label>

<select   name="status"  class="status"  class="col-md-6 form-control mx-2"
 onchange="show();">

<option  class="mx-2" value="{{ $customer -> customers ->status }}"> select - أختر </option>

<option  class="mx-2"     value="Booked_Clients"   >

@if (  $customer -> customers ->status  == 'Booked_Clients')
                                         &check; Booked Clients - عملاء حاجزين
                                    @else
Booked Clients - عملاء حاجزين

 @endif

    </option>

<option  class="mx-2"     value="Potential_clients" >


@if (  $customer -> customers ->status  == 'Potential_clients')
                                         &check; Potential Clients - عملاء محتملين
                                    @else
Potential Clients - عملاء محتملين

 @endif



    </option>

</select>


</div>



<div    class="Booked_Clients"   @if (  $customer -> customers ->status  == 'Booked_Clients')   style="display:block;"   @endif>

    this inputs for  Booked Clients - هذه مطلوبات للعملاء حاجزين

<div class="card-body"   tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true">
<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="triptype">    triptype           </label>

<div class="col-md-6">

<select   name='triptype'  class="col-md-6 form-control mx-2">

<option  class="mx-2" value="{{$customer ->triptype}}"> select -  أختر   نوع  الرحلة </option>


@if(($customer -> customers ->Balance == (@$customer -> TripPrice -> Total_price * $customer->numbers_of_Travelers) ))

@if($customer -> customers ->status == 'Booked_Clients')

@foreach($packages  as $package)


@if(($package -> packages -> id == $customer -> triptype) & ($package->packages-> status == 'DisActive')   )

<option  class="mx-2"  value="{{ $package -> packages -> id }}">


    @if($package -> packages -> id == $customer -> triptype  ) &check;  @endif


    {{ $package -> packages -> triptype }}  - {{$package->packages-> status}}  </option>


@endif


@if($package->packages-> status == 'Active')

<option  class="mx-2"  value="{{ $package -> packages -> id }}">

    @if($package -> packages -> id == $customer -> triptype)        &check;
@endif
    {{ $package -> packages -> triptype }} </option>


@endif



@endforeach

@else

@foreach($packages  as $package)

@if($package->packages-> status == 'Active')

<option  class="mx-2"  value="{{ $package -> packages -> id }}">

    @if($package -> packages -> id == $customer -> triptype)        &check;
@endif
    {{ $package -> packages -> triptype }} </option>


@endif

@endforeach



@endif

@else


@foreach($packages  as $package)

@if($package->packages-> status == 'Active')

<option  class="mx-2"  value="{{ $package -> packages -> id }}">

    @if($package -> packages -> id == $customer -> triptype)        &check;
@endif
    {{ $package -> packages -> triptype }} </option>


@endif

@endforeach



@endif





</select>

</div></div>

</div>

   <div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="Number_of_travelers">    Number of travelers  </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='number'  name='Number_of_travelers'    placeholder='عدد األفراد المسافرين'    value='{{ $customer -> numbers_of_Travelers  }}' required >
</div>


</div>



   <div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="travelDate">   travelDate  </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='datetime-local'  name='travelDate'    placeholder='تاريخ السفر'    value='{{ $customer -> travelDate  }}' required >
</div>


</div>




   <div class="row mb-3">
<label class="col-md-6 col-form-label text-md-end"  for="travelDate">   ReturnDate  </label>



<div class="col-md-6">
<input class='form-control  input-sm' type='datetime-local'  name='ReturnDate'    placeholder='تاريخ العودة'    value='{{ $customer -> ReturnDate  }}' required >
</div>


</div>




<div class="row mb-3">
<label class="col-md-5 col-form-label text-md-end"  for="Service_level">    hotel/Service_level -        </label>


<select   name="hotel_level"  class="col-md-6 form-control mx-2">
<option  class="mx-2"  value="{{$customer ->hotel_level}}"> select -
   أختر فندق  أو مستوى الأأقامة  </option>

<option  class="mx-2"  value="economic" >

   @if ( $customer ->hotel_level == 'economic')
                                         &check; economic - أقتصادي
                                    @else
                                      economic - أقتصادي
                                    @endif


   </option>

<option  class="mx-2"  value="4star" >

  @if ( $customer ->hotel_level == '4star')
                                         &check; 4 star - أربعة نجوم

                                    @else
                                       4 star - أربعة نجوم
                                    @endif


   </option>

<option  class="mx-2"  value="5star" >

     @if ( $customer ->hotel_level == '5star')
                                         &check;  5 star - خمسة نجوم

                                    @else
                                    5 star - خمسة نجوم
                                    @endif




   </option>

</select>


</div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for="triptype">    Ways_of_Travel           </label>

<div class="col-md-6">

<select   name='Ways_of_Travel'  class="col-md-6 form-control mx-2">

<option  class="mx-2"  value=" {{$customer ->Ways_of_Travel}} "> select -  أختر   وسيلة السفر  </option>

<option  class="mx-2"  value="byair" data-toggle="modal" >

   @if ( $customer ->Ways_of_Travel == 'byair')
                                         &check;   byair -  جوي
                                    @else
                                        byair -  جوي
                                    @endif



     </option>

<option  class="mx-2"  value="byland" data-toggle="modal" >

@if ( $customer ->Ways_of_Travel == 'byland')
                                         &check;    byland - بري
                                    @else
                                         byland - بري
                                    @endif


   </option>

</select>

</div></div>




<div class="row mb-3 form-group">

                    <label class="col-md-5   col-form-label text-md-end">Booking method -    طريقة حجز </label>


<select   name="Booking_method"  class="col-md-6 form-control mx-2">

<option  class="mx-2"  value="{{ $customer ->customers ->booking_method }}"> select - أختر </option>

<option  class="mx-2"  value="Direct_CLient" >

   @if ( $customer ->customers ->booking_method == 'Direct_CLient')
                                         &check;    Direct CLient -  عميل مباشر
                                    @else
                                 Direct CLient -  عميل مباشر
                                    @endif

  </option>

<option  class="mx-2"  value="via_a_branch" >

  @if ( $customer ->customers ->booking_method == 'via_a_branch')
                                         &check;   via a branch - من خلال فرع
                                    @else
 via a branch - من خلال فرع
                                    @endif



    </option>

<option  class="mx-2"  value="Through_an_intermediary" >

 @if ( $customer ->customers ->booking_method == 'Through an intermediary')
                                         &check;   Through an intermediary  - عن طريق وسيط
                                    @else
 Through an intermediary  - عن طريق وسيط
                                    @endif




    </option>


</select>


</div>













</div>







{{-- <label for='image'>     image       </label>


<input class='form-control  input-sm'   type='file'  name='upload'   placeholder='uploadimage'  required   >   --}}

<br/>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>

<br/>


<div align='center'>
@if(($customer -> customers ->Balance ==( @$customer ->TripPrice->Total_price * $customer->numbers_of_Travelers)))
<form action="{{route('customers.destroy',$customer -> customers ->id)}}#customers" method="Post">
@csrf
@method('DELETE')

<!-- <input type="hidden"  name="customers_id"   value="{{ $customer -> customers ->id  }}"/> -->

<input  type="SUBMIT" name="DELETE" VALUE="الغاء حجز"   class="btn btn-primary" style='background:red'>
</form>


@elseif ($customer -> customers ->Balance == Null or $customer -> customers ->Balance == '0'   )

<form action="{{route('customers.destroy',$customer -> customers ->id)}}#customers" method="Post">
@csrf
@method('DELETE')

<!-- <input type="hidden"  name="customers_id"   value="{{ $customer -> customers ->id  }}"/> -->

<input  type="SUBMIT" name="DELETE" VALUE="الغاء حجز"   class="btn btn-primary" style='background:red'>
</form>

@endif</div>
 </div></div></div>

@endforeach
