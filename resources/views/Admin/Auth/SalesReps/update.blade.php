

   @foreach($selesreps  as $selesrep)

<div   class="card-body modal fade" id="selesrep_update{{ $selesrep ->id  }}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
                 <div class="modal-dialog modal-dialog-centered">


<div class="modal-content px-3 rounded-lg shadow">
<button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
        <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
    </button>
                  <h5 class="m-0">

                  {{ $selesrep ->Name  }}-{{ $selesrep ->id  }}   تعديل بيانات المندوب - update Client info
</h5>


<form  action="{{route('selesreps.update',$selesrep ->id)}}#SalesReps"  method="post"  enctype="multipart/form-data">
@csrf
@method('PUT')


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end" for=" SalesRep_Name">    SalesRep Name       </label>

<div class="col-md-6">

<input class='form-control  input-sm'   type='text'  name='SalesRep_Name'    align='center' placeholder='أسم مندوب مبيعات'    value='{{$selesrep->Name}}'  required>
</div></div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="phone">     Mobile       </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='phone'    placeholder='رقم موبيل'    value='{{$selesrep->phone}}' required >
</div></div>


<div class="row mb-3">
<label  class="col-md-6 col-form-label text-md-end"  for="Address">     Address       </label>
<div class="col-md-6">
<input class='form-control  input-sm' type='text'  name='Address'    placeholder='العنوان'    value='{{$selesrep->Address}}' required >
</div></div>


<label   class="col-md-5 col-form-label text-md-end"   for="Notes">    Notes-ملاحظات	      </label>


<textarea class='form-control form-control  input-sm' type='text'  name='Notes'      placeholder='ملاحظات'    required > {{$selesrep->notes}}</textarea>


<input type='submit'   class="btn btn-primary"   onclick='reload()' >


</form>
 </div></div></div>

@endforeach
