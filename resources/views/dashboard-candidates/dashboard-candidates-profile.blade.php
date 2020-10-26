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

                    <div id="wrapper">

                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-2">
                                <h4>Basic Information</h4>
                            </div>
                            <br>

                            {{-- <div class="form-group" v-for="(input,k) in inputs" :key="k">
                                <input type="text" class="form-control" v-model="input.name">
                                <span>
                                    <i class="fas fa-minus-circle" @click="remove(k)" v-show="k || ( !k && inputs.length > 1)"></i>
                                    <i class="fas fa-plus-circle" @click="add(k)" v-show="k == inputs.length-1"></i>
                                </span>
                            </div> --}}

                            <form @submit="profileSubmit" id="candidate-profile">

                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Full Name</label>
                                        <input type="text" id="candidate_full_name" name="candidate_full_name" v-model="candidate_full_name"
                                            class="form-control @error('candidate_full_name') is-invalid @enderror"
                                            value="{{ old('candidate_full_name') }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" id="candidate_email" name="candidate_email" v-model="candidate_email"
                                            class="form-control  @error('candidate_email') is-invalid @enderror"
                                            value="{{ old('candidate_email') }}">
                                    </div>
                                    <div class="form-group col-md-6 datetimepickers">
                                        <label>Date of birth</label>
                                        <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                                            <input type="text" id="candidate_date_of_birth" name="candidate_date_of_birth" v-model="candidate_date_of_birth"
                                                class="form-control @error('candidate_date_of_birth') is-invalid @enderror datetimepicker-input"
                                                value="{{ old('candidate_date_of_birth') }}"
                                                data-target="#datetimepicker-01">
                                            <div class="input-group-append" data-target="#datetimepicker-01"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Phone No</label><br>
                                        <input type="tel" id="candidate_phone_number" name="candidate_phone_number" v-model="candidate_phone_number"
                                            class="form-control @error('candidate_phone_number') is-invalid @enderror"
                                            value="{{ old('candidate_phone_number') }}">
                                    </div>
                                    <div class="form-group col-12">
                                        <label class="d-block mb-3">Gender</label>
                                        <div class="custom-control custom-radio d-inline">
                                            <input type="radio" id="customRadio1" name="candidate_gender" v-model="candidate_gender"
                                                class="custom-control-input" value="1" checked="checked">
                                            <label class="custom-control-label" for="customRadio1">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio d-inline ml-3">
                                            <input type="radio" id="customRadio2" name="candidate_gender" v-model="candidate_gender"
                                                class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="customRadio2">Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Nationality</label>
                                        <select id="candidate_nationality" name="candidate_nationality"
                                            v-model="nationality"
                                            class="form-control national-country @error('candidate_nationality') is-invalid @enderror"
                                            value="{{ old('candidate_nationality') }}">
                                            <option value="0">Select Country</option>
                                            <option v-for="data in nationalities" :value="data.country_id">
                                                @{{ data . country_name }}</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="visatype">Visa Type</label>
                                        <select id="candidate_visa_type" name="candidate_visa_type" v-model="visa_type"
                                            class="form-control visatype @error('candidate_visa_type') is-invalid @enderror"
                                            value="{{ old('candidate_visa_type') }}">
                                            <option value="0">Select Visa Type</option>
                                            <option v-for="data in arr_visa_type" :value="data.id">@{{ data . visa_type }}
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group col-12">
                                        <label>Current Location</label>
                                        <input type="text" id="candidate_current_location" name="candidate_current_location" v-model="candidate_current_location"
                                            class="form-control @error('candidate_current_location') is-invalid @enderror"
                                            value="{{ old('candidate_current_location') }}"
                                            placeholder="Write your area location (e.g. KLCC)">
                                    </div>
                                </div>
                        </div>

                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-3">
                                <h4>Address</h4>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Country</label>
                                    <select id="candidate_country" name="candidate_country" v-model="country"
                                        @change="getStates()"
                                        class="form-control national-country @error('candidate_country') is-invalid @enderror"
                                        value="{{ old('candidate_country') }}">
                                        <option value="0">Select Country</option>
                                        <option v-for="data in countries" :value="data.id">@{{ data . country_name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>State</label>
                                    <select id="candidate_state" name="candidate_state" v-model="state"
                                        @change="getCities()"
                                        class="form-control national-country @error('candidate_state') is-invalid @enderror"
                                        value="{{ old('candidate_state') }}">
                                        <option value="0">Select State</option>
                                        <option v-for="data in states" :value="data.state_id">@{{ data . state_name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>City</label>
                                    <select id="candidate_city" name="candidate_city" v-model="city"
                                        class="form-control national-country @error('candidate_city') is-invalid @enderror"
                                        value="{{ old('candidate_city') }}">
                                        <option value="0">Select City</option>
                                        <option v-for="data in cities" :value="data.city_id">@{{ data . city_name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label>Postal / Zip Code</label>
                                    <input type="text" id="candidate_postal" name="candidate_postal" v-model="candidate_postal"
                                        class="form-control @error('candidate_postal') is-invalid @enderror"
                                        value="{{ old('candidate_postal') }}" placeholder="Area Postal / Zip Code">
                                </div>
                                <div class="form-group col-12">
                                    <label>Detailed Address</label>
                                    <input type="text" id="candidate_address" name="candidate_address" v-model="candidate_address"
                                        class="form-control @error('candidate_address') is-invalid @enderror"
                                        value="{{ old('candidate_address') }}"
                                        placeholder="Write your Home and Street Address (e.g. B1-18-03, Soho Suites @ KLCC)">
                                </div>
                            </div>
                        </div>


                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-3">
                                <h4>Languages</h4>
                            </div>
                            <div v-for="(input,k) in inputs" :key="k">
                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label>&nbsp;</label>
                                        <div class="mt-3"><strong>Primary</strong></div>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Language</label>
                                        <select id="candidate_lang" name="candidate_lang[]" v-model="language"
                                            class="form-control @error('candidate_lang') is-invalid @enderror"
                                            value="{{ old('candidate_lang') }}">
                                            <option value="0">Select</option>
                                            <option v-for="data in arr_language" :value="data.language_code">@{{ data . language }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Spoken</label>
                                        <select id="candidate_lang_speak" name="candidate_lang_speak[]" v-model="language_level_speak"
                                            class="form-control @error('candidate_lang_speak') is-invalid @enderror"
                                            value="{{ old('candidate_lang_speak[]') }}">
                                            <option value="0">Select</option>
                                            <option v-for="data in arr_language_level_speak" :value="data.id">@{{ data . language_level }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Written</label>
                                        <select id="candidate_lang_write" name="candidate_lang_write[]" v-model="language_level_write"
                                            class="form-control @error('candidate_lang_write') is-invalid @enderror"
                                            value="{{ old('candidate_lang_write') }}">
                                            <option value="0">Select</option>
                                            <option v-for="data in arr_language_level_write" :value="data.id">@{{ data . language_level }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label>Read</label>
                                        <select id="candidate_lang_read" name="candidate_lang_read[]" v-model="language_level_read"
                                            class="form-control @error('candidate_lang_read') is-invalid @enderror"
                                            value="{{ old('candidate_lang_read') }}">
                                            <option value="0">Select</option>
                                            <option v-for="data in arr_language_level_read" :value="data.id">@{{ data . language_level }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <label> &nbsp; </label>
                                        <a href="javascript:void(0)" class="d-block remove" style="padding:8px;" @click="remove(k)" v-show="k || ( !k && inputs.length > 1)">
                                            <i class="fa fa-trash-alt text-danger"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="newlangdiv"></span>
                                <a href="javascript:void(0);" class="add-more-lang" @click="add(k)" v-show="k == inputs.length-1"> <i style="font-size:12px;"
                                        class="fa fa-plus"></i> Add More </a> <span style="display:none;"
                                    id="remaining">6</span>
                            </div>
                        </div>

                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-3">
                                <h4>Social Links</h4>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Facebook</label>
                                    <input type="text" id="candidate_social_facebook" name="candidate_social_facebook" v-model="candidate_social_facebook"
                                        class="form-control" value="{{ old('candidate_social_facebook') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Twitter</label>
                                    <input type="text" id="candidate_social_twitter" name="candidate_social_twitter" v-model="candidate_social_twitter"
                                        class="form-control" value="{{ old('candidate_social_twitter') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Instagram</label>
                                    <input type="text" id="candidate_social_instagram" name="candidate_social_instagram" v-model="candidate_social_instagram"
                                        class="form-control" value="{{ old('candidate_social_instagram') }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Telegram</label>
                                    <input type="text" id="candidate_social_telegram" name="candidate_social_telegram" v-model="candidate_social_telegram"
                                        class="form-control" value="{{ old('candidate_social_telegram') }}">
                                </div>
                                <div class="form-group mb-0 col-md-12">
                                    <label>Linkedin</label>
                                    <input type="text" id="candidate_social_linkedin" name="candidate_social_linkedin" v-model="candidate_social_linkedin"
                                        class="form-control" value="{{ old('candidate_social_linkedin') }}">
                                </div>
                            </div>
                        </div>

                        <div class="user-dashboard-info-box">
                            <div class="section-title-02 mb-3">
                                <h4>About Myself</h4>
                            </div>
                            <div class="form-group mb-0 col-md-12">
                                <textarea id="candidate_about" name="candidate_about"
                                    class="form-control self @error('candidate_about') is-invalid @enderror"
                                    value="{{ old('candidate_about') }}" rows="5" v-model="candidate_about"
                                    placeholder="Please write about your self">
                                </textarea>
                                @error('candidate_about')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button @click="profileSubmit()" class="btn btn-md btn-primary">Save</button>
                        </form>
                    </div>
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

                // $('.add-more-lang').click(function() {
                //     var remind = parseInt($('#remaining').text());
                //     if (remind != 0) {
                //         $(this).before(
                //             '<div><div class="form-row"><div class="form-group col-md-2"><label>&nbsp;</label><div class="mt-1"><strong>Optional</strong></div></div><div class="form-group col-md-2"><label></label><select class="form-control" name="candidate_lang[]"><option>English</option><option>Malay</option><option>Arabic</option></select></div><div class="form-group col-md-2"><label></label><select class="form-control"><option>Expert</option><option>Good</option><option>Average</option><option>Poor</option></select></div><div class="form-group col-md-2"><label></label><select class="form-control"><option>Expert</option><option>Good</option><option>Average</option><option>Poor</option></select></div><div class="form-group col-md-2"><label></label><select class="form-control"><option>Expert</option><option>Good</option><option>Average</option><option>Poor</option></select></div><div class="form-group col-md-1"><label> &nbsp; </label><a href="javascript:void(0)" class="d-block remove" style="padding:8px;"><i class="fa fa-trash-alt text-danger"></i></a></div></div></div>'

                //         );
                //         remind = remind - 1
                //         $('#remaining').text(remind);

                //     } else {
                //         //console.log('All added');
                //         $('.add-more-lang').hide();
                //     }
                // });

                // $(document).on('click', '.remove', function() {
                //     $(this).parent('div').parent('div').remove();
                //     var remind = parseInt($('#remaining').text());
                //     remind = remind + 1
                //     $('#remaining').text(remind);
                //     $('.add-more-lang').show();

                // });
            });

            // $('#candidate_lang').on("click", function() {
            //     var arr = [];
            //     $(".keyword-text").each(function() {
            //         arr.push($.trim($(this).text()))
            //     });
            //     $('#candidate_lang').val(arr);
            // });

            var input = document.querySelector("#candidate_phone_number");
            window.intlTelInput(input, {
                hiddenInput: "candidate_phone_number",
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.min.js" // just for formatting/placeholders etc
            });



            const app = new Vue({
                el: '#wrapper',
                data() {
                    return {
                        addLang: 0,
                        country: 0,
                        countries: [],
                        state: 0,
                        states: [],
                        city: 0,
                        cities: [],
                        nationality: 0,
                        nationalities: [],
                        visa_type: 0,
                        arr_visa_type: [],
                        language: 0,
                        arr_language: [],
                        language_level_speak: 0,
                        arr_language_level_speak: [],
                        language_level_read: 0,
                        arr_language_level_read: [],
                        language_level_write: 0,
                        arr_language_level_write: [],
                        candidate_full_name: '',
                        candidate_email: '',
                        candidate_date_of_birth: '',
                        candidate_phone_number: '',
                        candidate_gender: '',
                        candidate_nationality: '',
                        candidate_visa_type: '',
                        candidate_current_location: '',
                        candidate_city: '',
                        candidate_state: '',
                        candidate_country: '',
                        candidate_address: '',
                        candidate_postal: '',
                        candidate_lang: '',
                        candidate_lang_speak: '',
                        candidate_lang_write: '',
                        candidate_lang_read: '',
                        candidate_social_facebook: '',
                        candidate_social_twitter: '',
                        candidate_social_instagram: '',
                        candidate_social_telegram: '',
                        candidate_social_linkedin: '',
                        candidate_about: '',
                        output: '',
                        inputs: [
                            {
                                name: ''
                            }
                        ]
                    }
                },
                methods: {
                    getNationalities: function() {
                        axios.get('api/getCountries').then(function(response) {
                            this.nationalities = response.data;
                        }.bind(this));
                    },
                    getCountries: function() {
                        axios.get('api/getCountries').then(function(response) {
                            this.countries = response.data;
                        }.bind(this));
                    },
                    getStates: function() {
                        axios.get('api/getStates', {
                            params: {
                                country_id: this.country
                            }
                        }).then(function(response) {
                            this.states = response.data;
                        }.bind(this));
                    },
                    getCities: function() {
                        axios.get('api/getCities', {
                            params: {
                                state_id: this.state
                            }
                        }).then(function(response) {
                            this.cities = response.data;
                        }.bind(this));
                    },
                    getVisaType: function() {
                        axios.get('api/getVisaType').then(function(response) {
                            this.arr_visa_type = response.data;
                        }.bind(this));
                    },
                    getLanguage: function() {
                        axios.get('api/getLanguage').then(function(response) {
                            this.arr_language = response.data;
                        }.bind(this));
                    },
                    getLanguageLevelSpeak: function() {
                        axios.get('api/getLanguageLevel').then(function(response) {
                            this.arr_language_level_speak = response.data;
                        }.bind(this));
                    },
                    getLanguageLevelRead: function() {
                        axios.get('api/getLanguageLevel').then(function(response) {
                            this.arr_language_level_read = response.data;
                        }.bind(this));
                    },
                    getLanguageLevelWrite: function() {
                        axios.get('api/getLanguageLevel').then(function(response) {
                            this.arr_language_level_write = response.data;
                        }.bind(this));
                    },
                    profileSubmit: function() {

                        let currentObj = false;
                        axios.post('dashboard-candidates-profile/submit', {
                            candidate_full_name: this.candidate_full_name,
                            candidate_email: this.candidate_email,
                            candidate_date_of_birth: this.candidate_date_of_birth,
                            candidate_phone_number: this.candidate_phone_number,
                            candidate_gender: this.candidate_gender,
                            candidate_nationality: this.nationality,
                            candidate_visa_type: this.visa_type,
                            candidate_current_location: this.candidate_current_location,
                            candidate_city: this.city,
                            candidate_state: this.state,
                            candidate_country: this.country,
                            candidate_postal: this.candidate_postal,
                            candidate_address: this.candidate_address,
                            candidate_lang: this.language,
                            candidate_lang_speak: this.language_level_speak,
                            candidate_lang_write: this.language_level_write,
                            candidate_lang_read: this.language_level_read,
                            candidate_social_facebook: this.candidate_social_facebook,
                            candidate_social_twitter: this.candidate_social_twitter,
                            candidate_social_instagram: this.candidate_social_instagram,
                            candidate_social_telegram: this.candidate_social_telegram,
                            candidate_social_linkedin: this.candidate_social_linkedin,
                            candidate_about: this.candidate_about

                        }).then(function (response) {
                            currentObj.output = response.data;
                        }).then(response => {
                            window.location = response.data.redirect;
                        }).catch(function (error) {
                            currentObj.output = error;
                        });
                    },
                    add(index) {
                        this.inputs.push({ name: '' });
                    },
                    remove(index) {
                        this.inputs.splice(index, 1);
                    }
                },
                created: function() {
                    this.getNationalities();
                    this.getCountries();
                    this.getVisaType();
                    this.getLanguage();
                    this.getLanguageLevelSpeak();
                    this.getLanguageLevelRead();
                    this.getLanguageLevelWrite();
                }
            });

        </script>

    @endpush

@endsection
