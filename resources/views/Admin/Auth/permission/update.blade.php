   @foreach ($Allpermissions as $permissions)

     <form action="{{ route('permission.update', $permissions->user->id) }}?#permissions"  id="myForm" method="Post">
  @csrf

                            @method('PUT')
               <div  style='position:absolute' class="card-body modal fade" id="Permissions-add{{ $permissions->user->id }}" tabindex="-1" aria-labelledby="descAddLabel" aria-hidden="true"  align='center'>
                 <div class="modal-dialog modal-dialog-centered">


                                                <div class="modal-content px-3 rounded-lg shadow">
         <button type="button" class="close" data-dismiss="modal" aria-label="إغلاق">
                                                                <span aria-hidden="true" style="font-size: 1.5rem;">×</span>
                                                            </button>
                  <h5 class="m-0">Set permissions  for  {{ $permissions->user->id }}- {{ $permissions->user->Name }}

                       تحديد الصلاحيات للمستخدم   </h5>


<label>create:-  إضافة بيانات</label>
                            <select name='create'>


       <option    value="{{$permissions->create}}"> select to Active/Disactive </option>


                                <option value="  Active   ">

                                    @if ($permissions->create == 'Active')
                                         &check; Active
                                    @else
                                        Active
                                    @endif


                                </option>
                                <option value=" DisActive">

 @if ($permissions->create == 'DisActive')
                                         &check; DisActive
                                    @else
                                        DisActive
                                    @endif


                                     </option>
                            </select> <br />

                            <label>read:-   عرض البيانات </label> <select name='read'>

                                       <option  value="{{$permissions->read }}"> select to Active/Disactive </option>

                                <option value="  Active   ">
                                           @if ($permissions->read == 'Active')
                                         &check; Active
                                    @else
                                        Active
                                    @endif


                             </option>
                                <option value=" DisActive">

                                      @if ($permissions->read == 'DisActive')
                                         &check; DisActive
                                    @else
                                        DisActive
                                    @endif


                                     </option>
                            </select> <br />

                            <label>update:-     تعديل بيانات   </label>
                            <select name='update'>

                                      <option value="{{$permissions->update}}"> select to Active/Disactive </option>

                                <option value="  Active   ">
                                         @if ($permissions->update == 'Active')
                                         &check; Active
                                    @else
                                        Active
                                    @endif
 </option>
                                <option value=" DisActive">


   @if ($permissions->update == 'DisActive')
                                         &check; DisActive
                                    @else
                                        DisActive
                                    @endif
 </option>
                            </select>

                            <label>	Delete:-     حذف بيانات     </label>
                            <select name='Delete'>

                                      <option value="{{$permissions->Delete}}"> select to Active/Disactive </option>

                                <option value="Active">

                                      @if ($permissions->Delete == 'Active')
                                         &check; Active
                                    @else
                                        Active
                                    @endif
 </option>
                                <option value="DisActive">


                                      @if ($permissions->Delete == 'DisActive')
                                         &check; DisActive
                                    @else
                                        DisActive
                                    @endif



                             </option>
                            </select>



                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" class="btn btn-primary"
                                value="ok" name="Setpermissions" onclick='reload()' />





                                                        </div> </div>
              </div>  </form>
  @endforeach
