<footer class="footer mt-0">
    <div class="container pb-4 pb-lg-5">
        <div class="row">
            <?php if (isset($_SESSION['user_login']) && $_SESSION['user_login'] == true) { ?>
            <?php if ($array_user['user_type'] == 1) { ?>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h3>For Employers</h3>
                    <ul class="list-unstyled">
                        <li><a href="dashboard-post-job"><span>Post a Job</span></a></li>
                        <li><a href="job-seeker-list">Search Job Seeker</a></li>
                        <li><a href="dashboard-buy-package"><span>Plans & Pricing</span></a></li>
                    </ul>
                </div>
            </div>
            <?php } elseif ($array_user['user_type'] == 0) { ?>
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                <div class="footer-link">
                    <h5 class="text-dark mb-4">For Candidates</h5>
                    <ul class="list-unstyled">
                        <li><a href="jobs"><span>Browse Jobs</span></a></li>
                        <li><a href="companies">Browse Company</a></li>
                    </ul>
                </div>
            </div>
            <?php }} else { ?>
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                <div class="footer-link">
                    <h5 class="text-dark mb-4">For Employers</h5>
                    <ul class="list-unstyled">
                        <li><a href="dashboard-post-job"><span>Post a Job</span></a></li>
                        <li><a href="job-seeker-list">Search Job seeker</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                <div class="footer-link">
                    <h5 class="text-dark mb-4">For Candidates</h5>
                    <ul class="list-unstyled">
                        <li><a href="companies">Browse Company</a></li>
                    </ul>
                </div>
            </div>
            <?php } ?>

            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                <div class="footer-link">
                    <h5 class="text-dark mb-4">Helpful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="contact"><span>Contact</span></a></li>
                        <li><a href="privacy-policy"><span>Privacy Policy</span></a></li>
                        <li><a href="terms-of-use"><span>Terms of Use</span></a></li>
                    </ul>
                </div>
            </div>

            <?php if (!isset($_SESSION['user_login'])) { ?>
            <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                <div class="footer-link">
                    <h5 class="text-dark mb-4">Account</h5>
                    <ul class="list-unstyled">
                        <li><a href="login"><span>Log In</span></a></li>
                        <li><a href="register/employer"><span>Register Company</span></a></li>
                        <li><a href="register/jobseeker"><span>Register JobSeeker</span></a></li>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="border-bottom"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center text-md-left">
                    <p class="mb-0"> &copy; Copyright <span id="copyright">
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date()
                                    .getFullYear()))

                            </script>
                        </span> <a href="#"> Jobers </a> All Rights Reserved </p>
                </div>
                <div class="col-md-4 mt-4 mt-md-0">
                    <div class="social d-flex justify-content-lg-end justify-content-center">
                        <ul class="list-unstyled">
                            <li class="facebook"><a href="https://www.facebook.com/jobersmalaysia">FB</a></li>
                            <li class="instagram"><a href="https://www.instagram.com/jobersmalaysia">IG</a></li>
                            <li class="linkedin"><a
                                    href="https://www.linkedin.com/company/jobers-online-malaysia">IN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div id="back-to-top" class="back-to-top">
    <i class="fas fa-angle-up"></i>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:99999;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header p-4">
                <h4 class="mb-0 text-center">Login to Your Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-register">
                    <fieldset>
                        <legend class="px-2">Choose your Account Type</legend>
                        <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
                            <li class="nav-item mr-4">
                                <a class="nav-link active" data-toggle="tab" href="#candidate" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex">
                                        <div class="tab-icon">
                                            <i class="flaticon-users"></i>
                                        </div>
                                        <div class="ml-3">
                                            <h6 class="mb-0">Candidate</h6>
                                            <p class="mb-0">Log in as Candidate</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#employer" role="tab" aria-selected="false">
                                    <div class="d-flex">
                                        <div class="tab-icon">
                                            <i class="flaticon-suitcase"></i>
                                        </div>
                                        <div class="ml-3">
                                            <h6 class="mb-0">Employer</h6>
                                            <p class="mb-0">Log in as Employer</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </fieldset>
                    <div class="tab-content">
                        <div class="tab-pane active" id="candidate" role="tabpanel">
                            <form class="mt-4" action="post">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="Email2">Username / Email Address:</label>
                                        <input type="text" class="form-control lgemail" id="Email22" required="">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="password2">Password*</label>
                                        <input type="password" class="form-control lgpwd" id="password32" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <a class="btn btn-primary btn-block" href="#" onclick="login()">Sign In</a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ml-md-3 mt-3 mt-md-0 forgot-pass">
                                            <a href="forgot-password">Forgot Password?</a>
                                            <p class="mt-1">Don't have account? <a href="register">Sign Up here</a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="employer" role="tabpanel">
                            <form class="mt-4" action="post">
                                <div class="form-row">
                                    <div class="form-group col-12">
                                        <label for="Email2">Username / Email Address:</label>
                                        <input type="text" class="form-control lgemail" id="Email2">
                                    </div>
                                    <div class="form-group col-12">
                                        <label for="password2">Password *</label>
                                        <input type="password" class="form-control lgpwd" id="password2">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <a class="btn btn-primary btn-block" href="#" onclick="login()">Sign In</a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ml-md-3 mt-3 mt-md-0">
                                            <a href="forgot-password">Forgot Password?</a>
                                            <!-- <div class="custom-control custom-checkbox mt-2">
                          <input type="checkbox" class="custom-control-input" id="Remember-02">
                          <label class="custom-control-label" for="Remember-02">Remember Password</label>
                        </div> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-4">
                        <fieldset>
                            <legend class="px-2">Login or Sign up with</legend>
                            <div class="social-login">
                                <ul class="list-unstyled d-flex mb-0">
                                    <li class="facebook text-center">
                                        <a href="#"> <i class="fab fa-facebook-f mr-3 mr-md-4"></i>Login with
                                            Facebook</a>
                                    </li>
                                    <li class="twitter text-center">
                                        <a href="#"> <i class="fab fa-twitter mr-3 mr-md-4"></i>Login with Twitter</a>
                                    </li>
                                    <li class="google text-center">
                                        <a href="#"> <i class="fab fa-google mr-3 mr-md-4"></i>Login with Google</a>
                                    </li>
                                    <li class="linkedin text-center">
                                        <a href="#"> <i class="fab fa-linkedin-in mr-3 mr-md-4"></i>Login with
                                            Linkedin</a>
                                    </li>
                                </ul>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModalCenter" tabindex="-1" role="dialog" aria-hidden="true" style="z-index:99999;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header p-4">
                <h4 class="mb-0 text-center">Create Your Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-register">
                    <div class="tab-content">
                        <div class="tab-pane active" id="candidate" role="tabpanel">
                            <form class="mt-4" method="action.php">
                                <input type="text" name="user_fb_id" value="<?= isset($user_fbid) ? $user_fbid : '' ?>" hidden>
                  <input type="hidden" id="action" name="action" value="register_user">
                  <input id="jobseeker-radio" style="display:none;" value="0" class="account-type-radio" name="account_type" checked="checked" type="radio">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="firstname">Full Name *</label>
                      <input size="60" placeholder="First Name" maxlength="255" class="form-control with-border" name="first_name" id="first_name" type="text" data-validation="required">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email Address *</label>
                      <input size="60" value="<?= isset($user_email) ? $user_email : '' ?>" placeholder="Email Address" maxlength="255" class="form-control with-border" name="email" id="email" type="email" data-validation="required email" required>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Password *</label>
                      <input type="password" class="form-control">
                    </div>
                    <div class="form-group col-md-6 jobseeker-div">
                      <input type="hidden" id="hiddenDialog" name="hiddenDialogJob" value="">
                      <label for="phone">Phone No:</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-12 select-border mt-1">
                      <label for="sector"><input type="radio" checked name="radio"> Yes <input type="radio" name="radio"> No</label>
                      <div>Are you looking for Internship or Fresh Grad Jobs?</div>
                    </div>
                    <div class="form-group col-12 mt-3">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="accepts-01">
                        <label class="custom-control-label" for="accepts-01">you accept our Terms and Conditions and Privacy Policy</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <a class="btn btn-primary d-block" href="#">Sign up</a>
                    </div>
                    <div class="col-md-6 mt-2">
                      <p>Already registered? <a href="login"> Sign in here</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-4">
              <fieldset>
                <legend class="px-2">Login or Sign up with</legend>
                <div class="social-login">
                  <ul class="list-unstyled d-flex mb-0">
                    <li class="facebook text-center">
                      <a href="#"> <i class="fab fa-facebook-f mr-4"></i>Login with Facebook</a>
                    </li>
                    <li class="twitter text-center">
                      <a href="#"> <i class="fab fa-twitter mr-4"></i>Login with Twitter</a>
                    </li>
                    <li class="google text-center">
                      <a href="#"> <i class="fab fa-google mr-4"></i>Login with Google</a>
                    </li>
                    <li class="linkedin text-center">
                      <a href="#"> <i class="fab fa-linkedin-in mr-4"></i>Login with Linkedin</a>
                    </li>
                  </ul>
                </div>
              </fieldset>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
