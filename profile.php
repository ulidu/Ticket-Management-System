<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--Begin::App-->
    <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

        <!--Begin:: App Aside Mobile Toggle-->
        <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
            <i class="la la-close"></i>
        </button>

        <!--End:: App Aside Mobile Toggle-->

        <!--Begin:: App Aside-->
        <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">

            <!--begin:: Widgets/Applications/User/Profile1-->
            <div class="kt-portlet ">
                <div class="kt-portlet__head  kt-portlet__head--noborder">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                        </h3>
                    </div>

                </div>
                <div class="kt-portlet__body kt-portlet__body--fit-y">

                    <!--begin::Widget -->
                    <div class="kt-widget kt-widget--user-profile-1">
                        <div class="kt-widget__head">
                            <div class="kt-widget__media">
                                <img style="width: 150px !important;" src="assets\media\logos\user.gif" alt="image">
                            </div>
                            <div class="kt-widget__content">
                                <div class="kt-widget__section">
                                     <span class="kt-widget__username">
                                        <?php echo $firstName . ' ' . $lastName; ?>
                                        <i class="flaticon2-correct kt-font-success"></i>
                                    </span>
                                    <span class="kt-widget__subtitle">
                                                            <?php echo $division; ?>
                                                        </span>
                                </div>
                                <div class="kt-widget__action">

                                    <a href="logout.php" type="button" class="btn btn-warning btn-sm">Sign Out</a>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget__body">
                            <div class="kt-widget__content">
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Email :</span>
                                    <span class="kt-widget__data"><?php echo $email; ?></span>
                                </div>
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Employee Code :</span>
                                    <span class="kt-widget__data"><?php echo $employeeCode; ?></span>
                                </div>
                                <div class="kt-widget__info">
                                    <span class="kt-widget__label">Account Type :</span>
                                    <span class="kt-widget__data"><?php echo $acc_type; ?></span>
                                </div>

                            </div>
                            <div class="kt-widget__items">

                                <a href="profile.php"
                                   class="kt-widget__item kt-widget__item--active">
                                                        <span class="kt-widget__section">
                                                            <span class="kt-widget__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1" class="kt-svg-icon">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                                              fill="#000000" opacity="0.3"/>
                                                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                                              fill="#000000" opacity="0.3"/>
                                                                        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                                              fill="#000000" opacity="0.3"/>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="kt-widget__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1" class="kt-svg-icon">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"/>
                                                                        <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z"
                                                                              fill="#000000" opacity="0.3"/>
                                                                        <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z"
                                                                              fill="#000000"/>
                                                                    </g>
                                                                </svg> </span>
                                                            <span class="kt-widget__desc">
                                                                Account Settings
                                                            </span>
                                                        </span>
                                </a>

                            </div>
                        </div>
                    </div>

                    <!--end::Widget -->
                </div>
            </div>

            <!--end:: Widgets/Applications/User/Profile1-->
        </div>

        <!--End:: App Aside-->

        <!--Begin:: App Content-->
        <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
            <div class="row">
                <div class="col-xl-12">
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">Account Information <small>Update your account
                                        information</small></h3>
                            </div>

                        </div>
                        <form id="profile_pw_form" method="post" class="kt-form kt-form--label-right">
                            <div class="kt-portlet__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">User Information
                                                    :</h3>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input name="fname_up" id="fname_up" required class="form-control"
                                                       value="<?php echo $firstName; ?>" type="text"
                                                       placeholder="Update First Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input name="lname_up" id="lname_up" required class="form-control"
                                                       value="<?php echo $lastName; ?>" type="text"
                                                       placeholder="Update Last Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-at"></i></span></div>
                                                    <input name="email_up" id="email_up" required type="text"
                                                           class="form-control"
                                                           value="<?php echo $email; ?>"
                                                           placeholder="Update Email Address"
                                                           aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-10 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Change Password
                                                    :</h3>
                                                <span style="font-size: small;" class="form-text text-muted">Leave this <span
                                                            style="font-weight: 600;">Change Password</span> section blank if you don't want to change your password.</span>
                                                <br>
                                            </div>

                                        </div>
                                        <div class="form-group row">

                                            <label class="col-xl-3 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-lock"></i></span></div>
                                                    <input id="c_pass_up" name="c_pass_up" type="password"
                                                           class="form-control"
                                                           placeholder="Enter Current Password"
                                                           aria-describedby="basic-addon1">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">New Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-lock"></i></span></div>
                                                    <input id="n_pass_up" name="n_pass_up" type="password"
                                                           class="form-control"
                                                           placeholder="Enter a New Password"
                                                           aria-describedby="basic-addon1">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Confirm New Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-lock"></i></span></div>
                                                    <input id="cn_pass_up" name="cn_pass_up" type="password"
                                                           class="form-control"
                                                           placeholder="Re-Enter your New Password"
                                                           aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-lg-3 col-xl-3">
                                        </div>
                                        <div class="col-lg-9 col-xl-9">
                                            <input value="Save" id="save_user_info" name="save_user_info" type="submit"
                                                    class="btn btn-success">
                                            <button onclick="window.location.href='profile.php'" type="button"
                                                    class="btn btn-secondary">Cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script>

            $(document).ready(function () {

                $("#profile_pw_form").submit(function (event) {



                    var logged_user_id = '<?php echo $logged_user_id; ?>';

                    var fname_up = $("#fname_up").val();
                    var lname_up = $("#lname_up").val();
                    var email_up = $("#email_up").val();

                    var c_pass_up = $("#c_pass_up").val();
                    var n_pass_up = $("#n_pass_up").val();
                    var cn_pass_up = $("#cn_pass_up").val();

                    if (fname_up == '' || lname_up == '' || email_up == '') {

                        swal.fire("Empty Fields !", "First Name, Last Name and Email Cannot be Empty.", "warning");
                        return false;

                    } else if (c_pass_up !== '' && n_pass_up !== '' && cn_pass_up !== '') {

                        if (n_pass_up == cn_pass_up) {

                            $.ajax({
                                type: "POST",
                                url: "profile_pw.php",
                                data: {
                                    fname_up: fname_up,
                                    lname_up: lname_up,
                                    email_up: email_up,
                                    c_pass_up: c_pass_up,
                                    n_pass_up: n_pass_up,
                                    logged_user_id: logged_user_id
                                },
                                success: function (data) {

                                    swal.fire("Updated Successfully !", "Account Information and Password Updated Successfully.", "success");

                                }
                            });

                        } else {

                            swal.fire("Passwords do not Match !", "Please Confirm New Password", "warning");
                            return false;

                        }

                    } else if (c_pass_up !== '' && cn_pass_up == '' && n_pass_up == '') {

                        swal.fire("Enter a New Password !", "Please Enter a New Password.", "warning");
                        return false;

                    } else if (c_pass_up !== '' && cn_pass_up == '' && n_pass_up !== '') {

                        swal.fire("Confirm New Password !", "Please Confirm the New Password.", "warning");
                        return false;

                    } else if (c_pass_up !== '' && cn_pass_up !== '' && n_pass_up == '') {

                        swal.fire("Confirm New Password !", "Please Confirm the New Password.", "warning");
                        return false;

                    } else if (c_pass_up == '' && cn_pass_up == '' && n_pass_up == '') {

                        $.ajax({
                            type: "POST",
                            url: "profile_pw.php",
                            data: {
                                fname_up: fname_up,
                                lname_up: lname_up,
                                email_up: email_up,
                                c_pass_up: c_pass_up,
                                n_pass_up: n_pass_up,
                                logged_user_id: logged_user_id
                            },
                            success: function (data) {
                                swal.fire("Updated Successfully !", "Account Information Updated Successfully.", "success");
                            }
                        });

                    }else if (c_pass_up == '' && cn_pass_up !== '' && n_pass_up == '') {

                        swal.fire("Confirm Current Password !", "Please Confirm the Current Password.", "warning");
                        return false;

                    }else if (c_pass_up == '' && cn_pass_up == '' && n_pass_up !== '') {

                        swal.fire("Confirm Current Password !", "Please Confirm the Current Password.", "warning");
                        return false;

                    } else if (c_pass_up == '' && cn_pass_up !== '' && n_pass_up !== '') {

                        swal.fire("Confirm Current Password !", "Please Confirm the Current Password.", "warning");
                        return false;

                    }else {

                        swal.fire("Errors in submission !", "There are errors in your submission. Please correct them before proceeding.", "warning");
                        return false;

                    }

                    event.preventDefault();

                });
            });

        </script>

        <!--End:: App Content-->
    </div>

    <!--End::App-->
</div>

<!-- end:: Content -->
</div>


<?php include 'include/footer.php'; ?>
