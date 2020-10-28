@extends('layouts/app')

@section('content')

    @include('sections/head-candidate')

    <style>
        .keyword-input-button {
            float: right;
            margin-top: -35px;
            margin-right: 10px;
            background: #ff8a00;
            color: #fff !important;
            padding: 4px 7px 3px 7px;
            border-radius: 3px;
        }

        .keyword-remove i {
            color: #fff;
            padding-left: 7px;
            cursor: pointer;
        }

        .keyword-j {
            background: #ff8a00;
            display: inline-block;
            float: left;
            padding: 0;
            border-radius: 4px;
            cursor: default;
            margin: 7px 7px 5px 0;
            height: 35px;
            line-height: 35px;
            box-sizing: border-box;
            animation: KeywordIn 0.3s ease-in-out;
            animation-fill-mode: both;
            transition: 0.4s;
            overflow: hidden;
            max-width: 100%;
            font-size: 14.7px;
            color: #fff;
        }

        .keyword-text-j {
            padding: 5px;
        }

        .badge span {
            font-size: 14px !important;
        }

        .badge button span {
            color: #f00 !important;
            font-size: 20px !important;
        }

        .dashboardcode-bsmultiselect .dropdown-menu {
            transform: translate3d(4px, 70px, 0px) !important;
            width: 98% !important;
        }

    </style>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sticky-top secondary-menu-sticky-top">
                        <div class="secondary-menu">
                            <ul class="list-unstyled mb-0">
                                <li><a href="dashboard-candidates">Dashboard</a></li>
                                <li><a href="dashboard-candidates-my-profile">My Profile</a></li>
                                <li><a href="dashboard-candidates-my-resume">My Resume</a></li>
                                <li><a class="active" href="dashboard-candidates-job-preferences">Job Preferences</a></li>
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
    <!--=================================
                    Dashboard Nav -->

    <!--=================================
                        Job Preferences -->
    <div id="wrapper">
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="user-dashboard-info-box">
                            <div class="collapse show" id="dateposted">
                                <div class="bg-light p-3 mt-4">
                                    <form @submit.prevent="preferredSalarySubmit" class="form-row">
                                        <div class="form-group col-md-12 mb-0">
                                            <label>Salary *</label>
                                        </div>
                                        <div class="form-group col-md-4 select-border">
                                            <select class="form-control" name="salary" id="salary" v-model="salary">
                                                <option value="0">Select any Salary Type</option>
                                                <option v-for="data in arr_salary" :value="data.salary_id">
                                                    @{{ data . salary_type }}</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <select class="form-control text-center" style="width:86px;"
                                                        name="currency" id="currency" v-model="currency">
                                                        <option value="0">Select any</option>
                                                        <option v-for="data in arr_currency" :value="data.currency_id">
                                                            @{{ data . currency_name + ' (' + data . currency_code + ') ' }}
                                                        </option>
                                                    </select>
                                                </div>
                                                <input type="text" class="form-control" name="salary_min" id="salary_min"
                                                    v-model="salary_min" placeholder="Min" value="{{ old('salary_min') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group mb-2">
                                                <input type="text" class="form-control" name="salary_max" id="salary_max"
                                                    v-model="salary_max" placeholder="Max" value="{{ old('salary_max') }}">
                                            </div>

                                        </div>

                                        <div class="form-group col-md-12 mt-4">
                                            <button @click="preferredSalarySubmit()"
                                                class="btn btn-md btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="collapse show" id="dateposted">
                                <div class="bg-light p-3 mt-4">
                                    <div class="form-group col-12">
                                        <h6>Preferred Work Location</h6>
                                    </div>
                                    <div class="form-row align-items-center">
                                        <div class="form-group col-md-6">
                                            <select class="form-control">
                                                <option>Kuala Lumpur</option>
                                                <option>Shah Alam</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <select class="form-control">
                                                <option>- Add more location (Optional) -</option>
                                                <option>Kuala Lumpur</option>
                                                <option>Shah Alam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="add-more-loc form-group col-12"> <i
                                            style="font-size:12px;" class="fa fa-plus"></i> Add More Locations </a> <span
                                        style="display:none;" id="remaining">2</span>


                                    <div class="form-group col-md-12 mt-4">
                                        <a class="btn btn-md btn-primary" href="#">Save</a>
                                    </div>
                                </div>
                            </div>


                            <div class="collapse show" id="dateposted">
                                <div class="bg-light p-3 mt-4">
                                    <form class="form-row">
                                        <div class="form-group col-12">
                                            <h6>Preferred Skills & Industries</h6>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Skills</label>
                                            <div class="keywords-container submit-field">
                                                <div class="keyword-input-container">
                                                    <input style="height:auto;" type="text"
                                                        class="keyword-input form-control" name="keyword_input"
                                                        id="keyword_input" placeholder="Job Title, Skills Or Keywords">
                                                    <input type="hidden" class="tags" name="resume_skills" id="job_skills">
                                                    <a onclick="addKeyword()"
                                                        class="keyword-input-button ripple-effect"><i
                                                            class="fa fa-plus"></i></a>
                                                </div>
                                                <div class="keywords-list">
                                                    <span class='keyword'>
                                                        <span class='keyword-remove'></span>
                                                        <span class='keyword-text'>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="keywords-list">
                                                <span class='keyword'>
                                                    <span class='keyword-remove'></span>
                                                    <span class='keyword-text'></span>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label>Industry</label><!-- tokenize-sample-demo1 -->
                                            <select class="form-control multi-industry" multiple>
                                                <option value="Accounting / Finance / Banking">Accounting / Finance /
                                                    Banking
                                                </option>
                                                <option value="Admin / Clerical">Admin / Clerical</option>
                                                <option value="Arts / Media / Entertainment / Communication">Arts / Media /
                                                    Entertainment / Communication</option>
                                                <option value="Construction / Engineering / Real State">Construction /
                                                    Engineering / Real State</option>
                                                <option value="Consultancy / Immigration">Consultancy / Immigration</option>
                                                <option value="Education / Training / E-Learning">Education / Training /
                                                    E-Learning</option>
                                                <option value="Government">Government</option>
                                                <option value="Health / Pharmaceuticals / Biotech">Health / Pharmaceuticals
                                                    /
                                                    Biotech</option>
                                                <option value="Hotel / Restaurant / Tourism">Hotel / Restaurant / Tourism
                                                </option>
                                                <option value="IT / Computer / Hardware">IT / Computer / Hardware</option>
                                                <option value="Management / Secretarial Services">Management / Secretarial
                                                    Services</option>
                                                <option value="Manufacturing / Production / FMCG">Manufacturing / Production
                                                    /
                                                    FMCG</option>
                                                <option value="Others">Others</option>
                                                <option value="Recruitment / Staffing / HR">Recruitment / Staffing / HR
                                                </option>
                                                <option value="Retail / Consumer Services">Retail / Consumer Services
                                                </option>
                                                <option value="Sales / Marketing / PR / Advertising">Sales / Marketing / PR
                                                    /
                                                    Advertising</option>
                                                <option value="Sports">Sports</option>
                                                <option value="Wholsale / Distribution">Wholsale / Distribution</option>
                                                <option value="Logistics / Shipping / Storage / Transport">Logistics /
                                                    Shipping
                                                    / Storage / Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6" style="display:none;">
                                            <label>Specialization</label>
                                            <select class="form-control tokenize-sample-demo1" multiple>
                                                <option value="Accounts">Accounts</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Banking">Banking</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Clerical">Clerical</option>
                                                <option value="Arts">Arts</option>
                                                <option value="Media">Media</option>
                                                <option value="Entertainment">Entertainment</option>
                                                <option value="Communication">Communication</option>
                                                <option value="Construction">Construction</option>
                                                <option value="Engineering">Engineering</option>
                                                <option value="Real State">Real State</option>
                                                <option value="Consultancy">Consultancy</option>
                                                <option value="Immigration">Immigration</option>
                                                <option value="Education">Education</option>
                                                <option value="Training">Training</option>
                                                <option value="E-Learning">E-Learning</option>
                                                <option value="Government">Government</option>
                                                <option value="Health">Health</option>
                                                <option value="Pharmaceuticals">Pharmaceuticals</option>
                                                <option value="Biotech">Biotech</option>
                                                <option value="Hotel">Hotel</option>
                                                <option value="Restaurant">Restaurant</option>
                                                <option value="Tourism">Tourism</option>
                                                <option value="IT">IT</option>
                                                <option value="Computer">Computer</option>
                                                <option value="Hardware">Hardware</option>
                                                <option value="Management">Management</option>
                                                <option value="Secretarial Services">Secretarial Services</option>
                                                <option value="Manufacturing">Manufacturing</option>
                                                <option value="Production">Production</option>
                                                <option value="FMCG">FMCG</option>
                                                <option value="Others">Others</option>
                                                <option value="Recruitment">Recruitment</option>
                                                <option value="Staffing">Staffing</option>
                                                <option value="HR">HR</option>
                                                <option value="Retail">Retail</option>
                                                <option value="Consumer Services">Consumer Services</option>
                                                <option value="Sales">Sales</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="PR">PR</option>
                                                <option value="Advertising">Advertising</option>
                                                <option value="Sports">Sports</option>
                                                <option value="Wholsale">Wholsale</option>
                                                <option value="Distribution">Distribution</option>
                                                <option value="Logistics">Logistics</option>
                                                <option value="Shipping">Shipping</option>
                                                <option value="Storage">Storage</option>
                                                <option value="Transport">Transport</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-12 mt-4">
                                            <a class="btn btn-md btn-primary" href="#">Save</a>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <div class="collapse show" id="dateposted">
                                <div class="bg-light p-3 mt-4">
                                    <form class="form-row">
                                        <div class="form-group col-12">
                                            <h6>Preferred Position Level</h6>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="leveloth" class="custom-control-input">
                                                <label class="custom-control-label" for="leveloth">All Levels</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelceo" class="custom-control-input">
                                                <label class="custom-control-label" for="levelceo">Top Management</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levels" checked="checked"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="levels">Senior Manager</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelm" class="custom-control-input">
                                                <label class="custom-control-label" for="levelm">Manager</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levele" class="custom-control-input">
                                                <label class="custom-control-label" for="levele">Senior Executive </label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelj" checked="checked"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="levelj">Junior Executive</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelintern" class="custom-control-input">
                                                <label class="custom-control-label" for="levelintern">Internship/Entry
                                                    Level</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelno" class="custom-control-input">
                                                <label class="custom-control-label" for="levelno">No Experience</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 mt-4">
                                            <a class="btn btn-md btn-primary" href="#">Save</a>
                                        </div>
                                </div>
                                </form>
                            </div>

                            <div class="collapse show" id="dateposted">
                                <div class="bg-light p-3 mt-4">
                                    <form class="form-row">
                                        <div class="form-group col-12">
                                            <h6>Preferred Job Type</h6>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelf" checked="checked"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="levelf">Full Time</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelp" class="custom-control-input">
                                                <label class="custom-control-label" for="levelp">Part Time /
                                                    Temporary</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelwi" class="custom-control-input">
                                                <label class="custom-control-label" for="levelwi">Internship</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelwc" checked="checked"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="levelwc">Contract</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelwv" class="custom-control-input">
                                                <label class="custom-control-label" for="levelwv">Volunteer</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelwf" class="custom-control-input">
                                                <label class="custom-control-label" for="levelwf">Freelance</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelwg" checked="checked"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="levelwg">Fresh Graduate</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 mt-4">
                                            <a class="btn btn-md btn-primary" href="#">Save</a>
                                        </div>
                                </div>
                                </form>
                            </div>


                            <div class="collapse show" id="dateposted">
                                <div class="bg-light p-3 mt-4">
                                    <form class="form-row">
                                        <div class="form-group col-12">
                                            <h6>Preferred Work Type</h6>
                                        </div>
                                        <div class="form-group col-md4">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelwo" checked="checked"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="levelwo">Work at Office</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md4">
                                            <div class="custom-control custom-checkbox d-inline ml-3">
                                                <input type="checkbox" id="levelfl" class="custom-control-input">
                                                <label class="custom-control-label" for="levelfl">Work From Home</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 mt-4">
                                            <a class="btn btn-md btn-primary" href="#">Save</a>
                                        </div>
                                </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

    @push('inline-script')

        <script>
            $(".multi-industry").bsMultiSelect({
                cssPatch: {
                    choices: {
                        columnCount: '1'
                    },
                }
            });

            $(".keywords-container").each(function() {
                var keywordInput = $(this).find(".keyword-input");
                var keywordsList = $(this).find(".keywords-list");

                function addKeyword() {

                    if (!$.trim(keywordInput.val()) == '') {
                        var $newKeyword = $(
                            "<span class='keyword keyword-j'><span class='keyword-remove'><i class='fa fa-window-close'></i></i?</span><span class='keyword-text keyword-text-j'>" +
                            keywordInput.val() + "</span></span>");

                        keywordsList.append($newKeyword).trigger('resizeContainer');

                        keywordInput.val("");
                    }

                }

                keywordInput.on('keyup', function(e) {
                    if ((e.keyCode == 13) && (keywordInput.val() !== "")) {
                        addKeyword();
                    }
                });

                $('.keyword-input-button').on('click', function() {
                    if ((keywordInput.val() !== "")) {
                        addKeyword();
                    }
                });


                $(document).on("click", ".keyword-remove", function() {
                    let stringWithoutLastComma;
                    $(this).parent().addClass('keyword-removed');

                    $(".keyword-removed").remove();
                    keywordsList.css({
                        'height': 'auto'
                    }).height();
                });

                keywordsList.on('resizeContainer', function() {
                    var heightnow = $(this).height();
                    var heightfull = $(this).css({
                        'max-height': 'auto',
                        'height': 'auto'
                    }).height();

                    $(this).css({
                        'height': heightnow
                    }).animate({
                        'height': heightfull
                    }, 200);
                });

                $(window).on('resize', function() {
                    keywordsList.css({
                        'height': 'auto'
                    }).height();
                });

                $(window).on('load', function() {
                    var keywordCount = $('.keywords-list').children("span").length;

                    if (keywordCount > 0) {
                        keywordsList.css({
                            'height': 'auto'
                        }).height();

                    }
                });

            });

            $(document).ready(function() {
                $('.add-more-loc').click(function() {
                    var remind = parseInt($('#remaining').text());
                    if (remind != 0) {
                        $(this).before(
                            '<div class="form-row align-items-center"><div class="form-group col-md-6 "><select class="form-control"><option>- Add more location (Optional) -</option><option>Kuala Lumpur</option><option>Shah Alam</option></select></div><div class="form-group col-md-5"><select class="form-control"><option>- Add more location (Optional) -</option><option>Kuala Lumpur</option><option>Shah Alam</option></select></div><a href="javascript:void(0);" class="form-group col-md-1 d-block remove"><i class="fa fa-trash-alt text-danger"></i></a></div>'
                            );
                        remind = remind - 1
                        $('#remaining').text(remind);

                    } else {
                        //console.log('All added');
                        $('.add-more-loc').hide();
                    }
                });

                $(document).on('click', '.remove', function() {
                    $(this).parent('div').remove();
                    var remind = parseInt($('#remaining').text());
                    remind = remind + 1
                    $('#remaining').text(remind);
                    $('.add-more-loc').show();
                });
            });

            $(document).ready(function() {
                $('.min-select').change(function() {
                    $('.max-select').text($(this).val());
                });
            });

            const app = new Vue({
                el: "#wrapper",
                data() {
                    return {
                        // Preferred Salary Submit
                        salary: 0,
                        arr_salary: [],
                        currency: 0,
                        arr_currency: [],
                        salary_min: '',
                        salary_max: '',
                        salaryOutput: ''
                    }
                },
                methods: {
                    getSalaryType: function() {
                        axios.get('api/getSalaryType').then(function(response) {
                            this.arr_salary = response.data;
                        }.bind(this));
                    },
                    getCurrencyList: function() {
                        axios.get('api/getCurrencyList').then(function(response) {
                            this.arr_currency = response.data;
                        }.bind(this));
                    },
                    preferredSalarySubmit: function() {

                        let currentObj = false;
                        axios.post('dashboard-candidates-job-preferences-salary/submit', {
                            resume_job_preferences_salary: this.salary,
                            resume_job_preferences_currency: this.currency,
                            resume_job_preferences_salary_from: this.salary_min,
                            resume_job_preferences_salary_to: this.salary_max

                        }).then(function(response) {
                            currentObj.salaryOutput = response.data;
                        }).then(response => {
                            window.location = response.data.redirect;
                        }).catch(function(error) {
                            currentObj.salaryOutput = error;
                        });
                    }
                },
                created: function() {
                    this.getSalaryType();
                    this.getCurrencyList();
                }
            });

        </>

    @endpush

@endsection
