@extends('layouts/app')

@section('content')

    @include('sections/head-candidate')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sticky-top secondary-menu-sticky-top">
                        <div class="secondary-menu">
                            <ul class="list-unstyled mb-0">
                                <li><a href="dashboard-candidates">Dashboard</a></li>
                                <li><a class="active" href="dashboard-candidates-my-profile">My Profile</a></li>
                                <li><a href="dashboard-candidates-my-resume">My Resume</a></li>
                                <li><a href="dashboard-candidates-job-preferences">Job Preferences</a></li>
                                <li><a href="dashboard-candidates-alerts-management">My Job alerts</a></li>
                                <li><a href="dashboard-candidates-manage-jobs">Manage Jobs</a></li>
                                <li><a href="dashboard-candidates-interviews">Interviews</a></li>
                                <li><a href="dashboard-candidates-pricing">Pricing Plan</a></li>
                                <li><a href="dashboard-candidates-settings">Settings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="user-dashboard-info-box">
                        <div class="section-title-02 mb-2">
                            <h4>Basic Information</h4>
                        </div><br>
                        {{-- <div class="cover-photo-contact">
                            <div class="upload-file">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input">
                                    <label class="custom-file-label">Upload Photo</label>
                                </div>
                            </div>
                        </div> --}}
                        <form id="candidate-profile" method="POST" action="{{ url('dashboard-candidates-my-profile/update', [$candidate->id]) }}" class="">

                            @method('PATCH')

                            @csrf

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Full Name</label>
                                    <input type="text" id="candidate_full_name" name="candidate_full_name"
                                        class="form-control @error('candidate_full_name') is-invalid @enderror"
                                        value="{{ $candidate->candidate_full_name }} {{ old('candidate_full_name') }}" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" id="candidate_email" name="candidate_email"
                                        class="form-control  @error('candidate_email') is-invalid @enderror"
                                        value="{{ $candidate->candidate_email }} {{ old('candidate_email') }}">
                                </div>
                                <div class="form-group col-md-6 datetimepickers">
                                    <label>Date of birth</label>
                                    <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                        <input type="text" id="candidate_date_of_birth" name="candidate_date_of_birth"
                                            class="form-control @error('candidate_date_of_birth') is-invalid @enderror datetimepicker-input"
                                            value="{{ $candidate->candidate_date_of_birth }} {{ old('candidate_date_of_birth') }}" data-target="#datetimepicker-01"
                                            >
                                        <div class="input-group-append" data-target="#datetimepicker-01"
                                            data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone No</label>
                                    <input type="text" id="candidate_phone_number" name="candidate_phone_number"
                                        class="form-control @error('candidate_phone_number') is-invalid @enderror"
                                        value="{{ $candidate->candidate_phone_number }} {{ old('candidate_phone_number') }}">
                                </div>
                                <div class="form-group col-12">
                                    <label class="d-block mb-3">Gender</label>
                                    <div class="custom-control custom-radio d-inline">
                                        <input type="radio" id="customRadio1" name="candidate_gender"
                                    class="custom-control-input" value="1" @if($candidate->candidate_gender == 1) checked @endif>
                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                    </div>
                                    <div class="custom-control custom-radio d-inline ml-3">
                                        <input type="radio" id="customRadio2" name="candidate_gender"
                                            class="custom-control-input" value="0" @if($candidate->candidate_gender == 0) checked @endif>
                                        <label class="custom-control-label" for="customRadio2">Female</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nationality</label>
                                    <select id="candidate_nationality" name="candidate_nationality"
                                        class="form-control national-country @error('candidate_nationality') is-invalid @enderror" value="{{ old('candidate_nationality') }}">
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->country_id }}" {{ $candidate->candidate_nationality == $country->country_id ? "selected" : "" }}>{{ $country->country_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label class="visatype">Visa Status</label>
                                    <select id="candidate_visa_status" name="candidate_visa_status"
                                        class="form-control visatype @error('candidate_visa_status') is-invalid @enderror" value="{{ old('candidate_visa_status') }}">
                                        @foreach ($visa_status as $visa_status)
                                            <option value="{{ $visa_status->id }}" {{ $candidate->candidate_visa_status == $visa_status->id ? "selected" : "" }}>{{ $visa_status->visa_status }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group col-12">
                                    <label>Current Location</label>
                                    <input type="text" id="candidate_current_location" name="candidate_current_location"
                                        class="form-control @error('candidate_current_location') is-invalid @enderror" value="{{ $candidate->candidate_current_location }} {{ old('candidate_current_location') }}"
                                        placeholder="Write your area location (e.g. KLCC)">
                                </div>
                                <div class="form-group col-12">
                                    <label>City</label>
                                    <input type="text" id="candidate_city" name="candidate_city" class="form-control @error('candidate_city') is-invalid @enderror"
                                    value="{{ $candidate->candidate_city }} {{ old('candidate_city') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>State</label>
                                    <input type="text" id="candidate_state" name="candidate_state" class="form-control @error('candidate_state') is-invalid @enderror"
                                    value="{{ $candidate->candidate_state }} {{ old('candidate_state') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Country</label>
                                    <select id="candidate_country" name="candidate_country"
                                        class="form-control national-country @error('candidate_country') is-invalid @enderror" value="{{ old('candidate_country') }}">
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->country_id }}" {{ $candidate->candidate_country == $country->country_id ? "selected" : "" }}>{{ $country->country_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12">
                                    <label>Detailed Address</label>
                                    <input type="text" id="candidate_address" name="candidate_address" class="form-control @error('candidate_address') is-invalid @enderror"
                                    value="{{ $candidate->candidate_address }} {{ old('candidate_address') }}" placeholder="Write your home & street address (e.g. B1-18-03, Soho Suites @ KLCC)">
                                </div>
                            </div>

                    </div>

                    <div class="user-dashboard-info-box">
                        <div class="section-title-02 mb-3">
                            <h4>Languages</h4>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label>&nbsp;</label>
                                <div class="mt-3"><strong>Primary</strong></div>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Language</label>
                                <select id="candidate_lang" name="candidate_lang" class="form-control @error('candidate_lang') is-invalid @enderror"
                                value="{{ old('candidate_lang') }}">
                                    @foreach ($language as $language)
                                        <option value="{{ $language->language_code }}" {{ $candidate->candidate_lang == $language->language_code ? "selected" : "" }}>{{ $language->language }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Spoken</label>
                                <select id="candidate_lang_speak" name="candidate_lang_speak" class="form-control @error('candidate_lang_speak') is-invalid @enderror"
                                value="{{ old('candidate_lang_speak[]') }}">
                                    @foreach ($language_level as $language_speak)
                                        <option value="{{ $language_speak->id }}" {{ $candidate->candidate_lang_speak == $language_speak->id ? "selected" : "" }}>{{ $language_speak->language_level }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Written</label>
                                <select id="candidate_lang_write" name="candidate_lang_write" class="form-control @error('candidate_lang_write') is-invalid @enderror"
                                value="{{ old('candidate_lang_write') }}">
                                    @foreach ($language_level as $language_write)
                                        <option value="{{ $language_write->id }}" {{ $candidate->candidate_lang_write == $language_write->id ? "selected" : "" }}>{{ $language_write->language_level }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Read</label>
                                <select id="candidate_lang_read" name="candidate_lang_read" class="form-control @error('candidate_lang_read') is-invalid @enderror"
                                value="{{ old('candidate_lang_read') }}">
                                    @foreach ($language_level as $language_read)
                                        <option value="{{ $language_read->id }}" {{ $candidate->candidate_lang_read == $language_read->id ? "selected" : "" }}>{{ $language_read->language_level }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <span class="newlangdiv"></span>
                        <a href="javascript:void(0);" class="add-more-lang"> <i style="font-size:12px;"
                                class="fa fa-plus"></i> Add More </a> <span style="display:none;" id="remaining">6</span>
                    </div>

                    <div class="user-dashboard-info-box">
                        <div class="section-title-02 mb-3">
                            <h4>Social Links</h4>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Facebook</label>
                                <input type="text" id="candidate_social_facebook" name="candidate_social_facebook"
                                    class="form-control" value="{{ $candidate->candidate_social_facebook }} {{ old('candidate_social_facebook') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Twitter</label>
                                <input type="text" id="candidate_social_twitter" name="candidate_social_twitter"
                                    class="form-control" value="{{ $candidate->candidate_social_twitter }} {{ old('candidate_social_twitter') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Instagram</label>
                                <input type="text" id="candidate_social_instagram" name="candidate_social_instagram"
                                    class="form-control" value="{{ $candidate->candidate_social_instagram }} {{ old('candidate_social_instagram') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Telegram</label>
                                <input type="text" id="candidate_social_telegram" name="candidate_social_telegram"
                                    class="form-control" value="{{ $candidate->candidate_social_telegram }} {{ old('candidate_social_telegram') }}">
                            </div>
                            <div class="form-group mb-0 col-md-12">
                                <label>Linkedin</label>
                                <input type="text" id="candidate_social_linkedin" name="candidate_social_linkedin"
                                    class="form-control" value="{{ $candidate->candidate_social_linkedin }} {{ old('candidate_social_linkedin') }}">
                            </div>
                        </div>
                    </div>

                    <div class="user-dashboard-info-box">
                        <div class="section-title-02 mb-3">
                            <h4>About Myself</h4>
                        </div>
                        <div class="form-group mb-0 col-md-12">
                            <textarea id="candidate_about" name="candidate_about" class="form-control self @error('candidate_about') is-invalid @enderror"
                            value="{{ old('candidate_about') }}" rows="5" placeholder="Please write about your self" >{{ $candidate->candidate_about }} {{ old('candidate_about') }}</textarea>
                            @error('candidate_about')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-md btn-primary">Save</button>
                </form>
                </div>
            </div>
        </div>
    </section>

    @push('inline-script')

        <script src="https://cdn.tiny.cloud/1/u49bu25q658f0345ypre2ce4zc9lzud8jy1ued4qe5z3aezc/tinymce/5/tinymce.min.js">
        </script>
        <script>
            tinymce.init({

                selector: '.self',
                menubar: false,
                branding: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor textcolor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code help wordcount'
                ],
                toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            });

        </script>

        <script>
            $(document).ready(function() {
                $('.national-country').change(function() {
                    if ($(this).val() != 'Malaysia') {
                        $('.visatype').show();
                    } else {
                        $('.visatype').hide();
                    }
                });

                $('.add-more-lang').click(function() {
                    var remind = parseInt($('#remaining').text());
                    if (remind != 0) {
                        $(this).before(
                            '<div><div class="form-row"><div class="form-group col-md-2"><label>&nbsp;</label><div class="mt-1"><strong>Optional</strong></div></div><div class="form-group col-md-2"><label></label><select class="form-control"><option>English</option><option>Malay</option><option>Arabic</option></select></div><div class="form-group col-md-2"><label></label><select class="form-control"><option>Expert</option><option>Good</option><option>Average</option><option>Poor</option></select></div><div class="form-group col-md-2"><label></label><select class="form-control"><option>Expert</option><option>Good</option><option>Average</option><option>Poor</option></select></div><div class="form-group col-md-2"><label></label><select class="form-control"><option>Expert</option><option>Good</option><option>Average</option><option>Poor</option></select></div><div class="form-group col-md-1"><label> &nbsp; </label><a href="javascript:void(0)" class="d-block remove" style="padding:8px;"><i class="fa fa-trash-alt text-danger"></i></a></div></div></div>'
                        );
                        remind = remind - 1
                        $('#remaining').text(remind);

                    } else {
                        //console.log('All added');
                        $('.add-more-lang').hide();
                    }
                });

                $(document).on('click', '.remove', function() {
                    $(this).parent('div').parent('div').remove();
                    var remind = parseInt($('#remaining').text());
                    remind = remind + 1
                    $('#remaining').text(remind);
                    $('.add-more-lang').show();

                });
            });

            // $('#candidate_lang').on("click", function() {
            //     var arr = [];
            //     $(".keyword-text").each(function() {
            //         arr.push($.trim($(this).text()))
            //     });
            //     $('#candidate_lang').val(arr);
            // });

        </script>

    @endpush

@endsection
