<div class="row">
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('name', __('messages.company.employer_name').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        {{ Form::text('name', null, ['class' => 'form-control','required', 'placeholder' => __('messages.company.employer_name')]) }}
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('email', __('messages.company.email').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        {{ Form::email('email', null, ['class' => 'form-control', 'required', 'placeholder' => __('messages.company.email')]) }}
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('phone', __('messages.user.phone').':', ['class' => 'form-label']) }}
        <br>
        {{ Form::tel('phone', null, ['class' => 'form-control', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")','id'=>'phoneNumber','placeholder' => __('messages.inquiry.phone_no')]) }}
        {{ Form::hidden('region_code',null,['id'=>'prefix_code']) }}
        <p id="valid-msg" class="text-success d-none fw-400 fs-small mt-2">{{__('messages.phone.valid_number')}}</p>
        <p id="error-msg" class="text-danger d-none fw-400 fs-small mt-2"></p>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('ceo', __('messages.company.ceo_name').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        {{ Form::text('ceo', null, ['class' => 'form-control','required', 'placeholder' => __('messages.company.ceo_name')]) }}
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('password', __('messages.company.password').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        <input name="password" type="password" id="password"
               class="form-control"
               {{ (isset($company)) ? '' : 'required' }} placeholder="{{__('messages.company.password')}}">
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('password_confirmation', __('messages.company.confirm_password').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        <input name="password_confirmation" type="password" id="confirmPassword"
               class="form-control"
               {{ (isset($company)) ? '' : 'required' }} placeholder="{{__('messages.company.confirm_password')}}">
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('industry_id', __('messages.company.industry').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        <div class="input-group flex-nowrap">
            {{ Form::select('industry_id', $data['industries'], null, ['id'=>'addEmployerIndustryId','class' => 'form-select','placeholder' => __('messages.company.select_industry'),'required']) }}
            <div class="input-group-text border-0">
                <a href="javascript:void(0)" class="text-gray-500 createEmployerIndustryModal"><i
                            class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('ownership_type_id', __('messages.company.ownership_type').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        <div class="input-group flex-nowrap">
            {{ Form::select('ownership_type_id', $data['ownerShipTypes'], null, ['id'=>'ownershipTypeId','class' => 'form-select','placeholder' => __('messages.company.select_ownership_type'),'required']) }}
            <div class="input-group-text border-0">
                <a href="javascript:void(0)" class="text-gray-500 createEmployerOwnerShipTypeModal"><i
                            class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('country', __('messages.company.country').':', ['class' => 'form-label ']) }}
        <span class="required"></span>
        <div class="input-group flex-nowrap">
            {{ Form::select('country_id', $data['countries'], null, ['id'=>'countryId','class' => 'form-select','placeholder' => __('messages.company.select_country'),'required']) }}
            <div class="input-group-text border-0">
                <a href="javascript:void(0)" class="text-gray-500 createEmployerCountryModal"><i
                            class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('state', __('messages.company.state').':', ['class' => 'form-label ']) }}
        <span class="required"></span>
        <div class="input-group flex-nowrap">
            {{ Form::select('state_id', [], null, ['id'=>'stateId','class' => 'form-select','placeholder' => __('messages.company.select_state'),'required']) }}
            <div class="input-group-text border-0">
                <a href="javascript:void(0)" class="text-gray-500 createEmployerStateModal"><i
                            class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('city', __('messages.company.city').':', ['class' => 'form-label ']) }}
        <span class="required"></span>
        <div class="input-group flex-nowrap">
            {{ Form::select('city_id', [], null, ['id'=>'cityId','class' => 'form-select','placeholder' => __('messages.company.select_city'),'required']) }}
            <div class="input-group-text border-0">
                <a href="javascript:void(0)" class="text-gray-500 createEmployerCityModal"><i
                            class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('company_size_id', __('messages.company.company_size').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        <div class="input-group flex-nowrap">
            {{ Form::select('company_size_id', $data['companySize'], null, ['id'=>'companySizeId','class' => 'form-select','placeholder' => __('messages.company.select_employer_size'),'required']) }}
            <div class="input-group-text border-0">
                <a href="javascript:void(0)" class="text-gray-500 createEmployerCompanySizeModal"><i
                            class="fa fa-plus"></i></a>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('established_in', __('messages.company.established_year').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        {{ Form::selectYear('established_in', date('Y'), 2000, (isset($company->established_in)) ? $company->established_in : '', ['class' => 'form-select', 'id' => 'establishedIn','placeholder'=> __('messages.company.select_established_year'),'required']) }}
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('location', __('messages.company.location').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        {{ Form::text('location', null, ['class' => 'form-control','required','placeholder' => __('messages.company.location')]) }}
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('location2', __('messages.company.location2').':', ['class' => 'form-label ']) }}
        {{ Form::text('location2', null, ['class' => 'form-control', 'placeholder' => __('messages.company.location2')]) }}
    </div>
    <div class="col-xl-12 col-md-12 col-sm-12 mb-5">
        {{ Form::label('details', __('messages.company.employer_details').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        <div id="addAdminEmployerDescriptionQuillData"></div>
        {{ Form::hidden('details', null, ['id' => 'company_desc']) }}
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('no_of_offices', __('messages.company.no_of_offices').':', ['class' => 'form-label']) }}
        <span class="required"></span>
        {{ Form::text('no_of_offices', null, ['class' => 'form-control', 'required', 'onkeyup' => 'if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,"")', 'placeholder' => __('messages.company.no_of_offices')]) }}
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('website', __('messages.company.website').':', ['class' => 'form-label ']) }}
        {{ Form::text('website', null, ['class' => 'form-control','placeholder' => __('messages.company.website')]) }}
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('fax', __('messages.company.fax').':', ['class' => 'form-label ']) }}
        {{ Form::text('fax',null, ['class' => 'form-control', 'placeholder' => __('messages.company.fax')]) }}
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('facebook_url', __('messages.company.facebook_url').':', ['class' => 'form-label ']) }}
        <div class="input-group">
            <div class="input-group-text border-0">
                <i class="fab fa-facebook-f facebook-fa-icon text-primary"></i>
            </div>
            {{ Form::text('facebook_url',null, ['class' => 'form-control','id'=>'facebookUrl','placeholder'=>'https://www.facebook.com']) }}
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('twitter_url', __('messages.company.twitter_url').':', ['class' => 'form-label ']) }}
        <div class="input-group">
            <div class="input-group-text border-0">
                <i class="fab fa-twitter twitter-fa-icon text-primary"></i>
            </div>
            {{ Form::text('twitter_url', null, ['class' => 'form-control','id'=>'twitterUrl','placeholder'=>'https://www.twitter.com']) }}
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('linkedin_url', __('messages.company.linkedin_url').':', ['class' => 'form-label ']) }}
        <div class="input-group">
            <div class="input-group-text border-0">
                <i class="fab fa-linkedin-in linkedin-fa-icon text-primary"></i>
            </div>
            {{ Form::text('linkedin_url', null, ['class' => 'form-control','id'=>'linkedInUrl','placeholder'=>'https://www.linkedin.com']) }}
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('google_plus_url', __('messages.company.google_plus_url').':', ['class' => 'form-label ']) }}
        <div class="input-group">
            <div class="input-group-text border-0">
                <i class="fab fa-google-plus-g google-plus-fa-icon text-danger"></i>
            </div>
            {{ Form::text('google_plus_url', null, ['class' => 'form-control','id'=>'googlePlusUrl','placeholder'=>'https://www.plus.google.com']) }}
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        {{ Form::label('pinterest_url', __('messages.company.pinterest_url').':', ['class' => 'form-label ']) }}
        <div class="input-group">
            <div class="input-group-text border-0">
                <i class="fab fa-pinterest-p pinterest-fa-icon text-danger"></i>
            </div>
            {{ Form::text('pinterest_url', null, ['class' => 'form-control','id'=>'pinterestUrl','placeholder'=>'https://www.pinterest.com']) }}
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5" io-image-input="true">
        <label for="company_logo" class="form-label">
            {{__('messages.company.company_logo').':'}}
            <span class="text-danger">*</span>
            <span data-bs-toggle="tooltip"
                  data-placement="top"
                  data-bs-original-title="{{  __('messages.setting.image_validation') }}">
                  <i class="fas fa-question-circle ml-1  general-question-mark"></i>
            </span>
        </label>
        <div class="d-block">
            <div class="image-picker">
                <div class="image previewImage" id="logoPreview"
                     style="background-image: url({{ asset('assets/img/logos.png') }})">
                </div>
                <span class="picker-edit rounded-circle text-gray-500 fs-small" data-bs-toggle="tooltip"
                      data-placement="top" data-bs-original-title="{{__("messages.tooltip.change_app_logo")}}">
                    <label>
                        <i class="fa-solid fa-pen" id="profileImageIcon"></i>
                        {{ Form::file('image',['class' => 'image-upload d-none', 'accept' => '.png, .jpg, .jpeg']) }}
                    </label>
                </span>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6 col-sm-12 mb-5">
        <label class='form-label '>{{ __('messages.common.status').':' }}</label><br>
        <div class="form-check form-switch mb-3">
            <input class="form-check-input isCreateActive" name="is_active" type="checkbox"
                   role="switch" id="active" value="1"
                    {{  isset($company)?($company->is_active == 1 ?'checked':''):'checked' }}>
        </div>
    </div>

    <!-- Submit Field -->
    <div class="d-flex justify-content-end">
        {{ Form::submit(__('messages.common.save'),['class' => 'btn btn-primary me-3', 'id' => 'btnSave']) }}
        <a href="{{ route('company.index') }}"
           class="btn btn-secondary me-2">{{__('messages.common.cancel')}}</a>
    </div>
</div>
