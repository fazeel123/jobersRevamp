<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/popper/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.appear.js') }}"></script>
<script src="{{ asset('js/counter/jquery.countTo.js') }}"></script>
<script src="{{ asset('js/owl-carousel/owl-carousel.min.js') }}"></script>
<script src="{{ asset('js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/select2/select2.full.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/datetimepicker/moment.min.js') }}"></script>
<script src="{{ asset('js/datetimepicker/datetimepicker.min.js') }}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.tiny.cloud/1/u49bu25q658f0345ypre2ce4zc9lzud8jy1ued4qe5z3aezc/tinymce/5/tinymce.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.js" integrity="sha512-s/q7apy90iY/BCy3HnkSxOxqO30Sto5LnhQorz/ce4O/oBxDi1dKluM6C/SYy1AJ9+6MJfXnQl4mHVmrSYfujQ==" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js" integrity="sha512-quHCp3WbBNkwLfYUMd+KwBAgpVukJu5MncuQaWXgCrfgcxCJAq/fo+oqrRKOj+UKEmyMCG3tb8RB63W+EmrOBg==" crossorigin="anonymous"></script>

<script>
    function login() {
        var email = $(".lgemail").val();
        var password = $(".lgpwd").val();
        if (email == "" || email == null || password == "" || password == null) {
            swal({
                type: 'error',
                title: 'Oops...',
                text: 'Please field the email and password to login!'

            });
        } else {
            var formData = {
                "action": "login",
                "email": email,
                "password": password
            };

            $.post("action.php", formData, function(result) {

                var result_obj = JSON.parse(result);
                if (result_obj.valid) {

                    if (result_obj.valid) {
                        if (result_obj['data'].user_type == 0) {
                            document.location = "jobs";
                        } else {
                            document.location = "dashboard-company-setting";
                        }
                    } else {
                        if (result_obj['data'].user_type == 0) {
                            document.location = "dashboard-profile-account";
                            //document.location = "dashboard-jobseeker-setting.php";
                        } else {
                            document.location = "dashboard-company-setting";
                        }
                    }

                } else {
                    swal({
                        type: 'error',
                        title: 'Oops...',
                        text: result_obj.message
                    });
                }

            });
        }
    }

</script>
