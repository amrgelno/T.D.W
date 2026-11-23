

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            company info
                        </h3>
                    </div>
                    <form action="{{ route('company.store') }}#users" method="POST" enctype="multipart/form-data">
                        @csrf


@foreach($company as $item) @endforeach

                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" value="{{  $item->Email ?? ''}}"
                                            name="Email" placeholder="Enter your  email">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="company_name"> Company Name </label>
                                        <input type="text" class="form-control" value='{{ $item->Comp_Name ?? '' }}'
                                            name="comp_Na" placeholder="أسم الشركةاو المؤسسة" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="company_name"> Business Type </label>
                                        <input type="text" class="form-control" value='{{ $item->Business ?? '' }}'
                                            name="Business_Type" placeholder="مجال العمل" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="company_name"> Street Address </label>
                                        <input type="text" class="form-control" value='{{ $item->Address ?? ''}}'
                                            name="streetAddress" placeholder="الشارع" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='Tele_Number'> Tele Number </label>
                                        <input type="text" class="form-control" value='{{ $item->Tele_Number  ?? ''}}'
                                            name="Tele_Number" placeholder="رقم التليفون" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='fax'> Fax </label>
                                        <input type="text" class="form-control" value='{{ $item->fax ?? '' }}'
                                            name="fax" placeholder="الفاكس" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='postalCode'> Postal Code</label>
                                        <input type="postalCode" class="form-control" value='{{ $item->postalCode  ?? ''}}'
                                            name="postalCode" placeholder="رمز البريدي" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='country'> Country </label>
                                        <input type="text" class="form-control" value='{{ $item->country ?? '' }}'
                                            name="country" placeholder="أسم الدولة" />
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for='city'> City </label>
                                        <input type="text" class="form-control" value='{{ $item->city ?? '' }}'
                                            name="city" placeholder="أسم المدينة" />
                                    </div>
                                </div>

                                 <div class="col-4">
                                    <div class="form-group">
                                        <label for='city'> Tax_ID </label>
                                        <input type="text" class="form-control" value='{{ $item->Tax_register ?? '' }}'
                                            name="Tax_register" placeholder="رقم ضريبي" />
                                    </div>
                                </div>

                                {{-- <div class="col-4">
                                    <div class="form-group">
                                        <label class="input-group-text" for='WBDescription'> WBDescription:- </label>
                                        <textarea class="form-control" name="WBDescription" id="WBDescription" placeholder="وصف الموقع" required> {{ $item->WBDescription ?? '' }} </textarea>
                                    </div>
                                </div> --}}

                                <div class="col-10">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Company Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile"
                                                    name="uploadlogo">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button value="حفظ" name="save" type="submit"
                                class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


@if($massage=Session::get('Companysuccess'))



<div class="swal2-container swal2-center swal2-backdrop-show" data-swal2-theme="light" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-success swal2-icon-show" style="display: flex;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
  <span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span>
  <div class="swal2-success-ring"></div>
  <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
  <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
</div><div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: block;">{{$massage}}!</h2><div class="swal2-html-container" id="swal2-html-container" style="display: block;">تم أنشاء/ تحديث بيانات بنجاح!</div><input id="swal2-input" class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select id="swal2-select" class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label class="swal2-checkbox" style="display: none;"><input type="checkbox" id="swal2-checkbox"><span class="swal2-label"></span></label><textarea id="swal2-textarea" class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions" style="display: flex;"><div class="swal2-loader"></div>
<button onclick=" document.querySelector('.swal2-container').style.display='none'" type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(112, 102, 224, 0.5);">OK </button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(220, 55, 65, 0.5);">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(255, 0, 0, 0.5);">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>


                                    @endif

 @if($massage=Session::get('Companyfaild'))


<div class="swal2-container swal2-center swal2-backdrop-show" data-swal2-theme="light" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-html-container" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: grid;"><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: none;">×</button><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon" style="display: none;"></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: block;">{{$massage}}!</h2><div class="swal2-html-container" id="swal2-html-container" style="display: block;">تم تحديث بيانات الشركة بنجاح</div><input id="swal2-input" class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select id="swal2-select" class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label class="swal2-checkbox" style="display: none;"><input type="checkbox" id="swal2-checkbox"><span class="swal2-label"></span></label><textarea id="swal2-textarea" class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div><div class="swal2-actions" style="display: flex;"><div class="swal2-loader"></div><button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(212, 0, 0, 0.5);" onclick=" document.querySelector('.swal2-container').style.display='none'">OK</button><button type="button" class="swal2-deny swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(220, 55, 65, 0.5);">No</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: none; --swal2-action-button-focus-box-shadow: 0 0 0 3px rgba(255, 0, 0, 0.5);">Cancel</button></div><div class="swal2-footer" style="display: none;"></div><div class="swal2-timer-progress-bar-container"><div class="swal2-timer-progress-bar" style="display: none;"></div></div></div></div>



                                    @endif




