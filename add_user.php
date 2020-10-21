<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>
<script type="text/javascript">

    function checkForm(form)
    {


        if(form.password.value != "" && form.password.value == form.pw_cf.value) {
            if(form.password.value.length < 6) {
                swal.fire("Confirm Password !", "Your password must contain at least six characters.", "warning");
                form.password.focus();
                return false;
            }
            if(form.password.value == form.firstName.value) {
                swal.fire("Confirm Password !", "Your password must be different from Username.", "warning");
                form.password.focus();
                return false;
            }

        } else {
            swal.fire("Confirm Password !", "Passwords do not match !", "warning");
            form.password.focus();
            return false;
        }

        return true;
    }

</script>

<!-- begin:: Content -->


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


    <div class="row">


        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-user-1"></i>
										</span>
                    <h3 class="kt-portlet__head-title kt-font-brand">
                        Add a New User</h3>&nbsp;

                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <div class="dropdown dropdown-inline">
                                <a href="user_list.php" class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-users"></i>
                                    View all Users
                                </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <!--begin::Form-->
            <form onsubmit="return checkForm(this);" autocomplete="off" name="user_add" id="user_add" method="post" action="" class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">
                    <div class="form-group row form-group-marginless kt-margin-t-20">

                        <label class="col-lg-1 col-form-label">Title <span
                                    style="color: #dc3545; font-size: 18px;">* </span>:</label>
                        <div class="col-lg-3">
                            <div class="form-group">

                                <div class="kt-radio-list">

                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                        <input type="radio" value="Mr." name="title" checked> Mr.
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                        <input type="radio" value="Mrs." name="title"> Mrs.
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                        <input type="radio" value="Miss." name="title">
                                        Miss.
                                        <span></span>
                                    </label>

                                </div>
                            </div>
                        </div>

                        <label class="col-lg-1 col-form-label">First Name <span
                                    style="color: #dc3545; font-size: 18px;">* </span>:</label>
                        <div class="col-lg-3">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-user"></i></span></div>
                                <input name="firstName" id="firstName" type="text" class="form-control"
                                       placeholder="Enter User's First Name" required>
                            </div>

                        </div>


                        <label class="col-lg-1 col-form-label">Last Name <span
                                    style="color: #dc3545; font-size: 18px;">* </span>:</label>
                        <div class="col-lg-3">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-user"></i></span></div>

                                <input name="lastName" type="text" class="form-control"
                                       placeholder="Enter User's Last Name" required>
                            </div>

                        </div>
                        <label class="col-lg-1 col-form-label">Employee Code <span
                                    style="color: #dc3545; font-size: 18px;">* </span>:</label>
                        <div class="col-lg-3">

                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-qrcode"></i></span></div>

                                <input name="empCode" type="text" class="form-control"
                                       placeholder="Enter User's Employee Code" required>
                            </div>

                        </div>
                        <label class="col-lg-1 col-form-label">Email <span
                                    style="color: #dc3545; font-size: 18px;">* </span>:</label>
                        <div class="col-lg-3">

                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-at"></i></span></div>

                                <input name="email" type="email" class="form-control"
                                       placeholder="Enter User's Email Address" required>
                            </div>

                        </div>


                    </div>
                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    <div class="form-group row form-group-marginless">


                        <label class="col-lg-1 col-form-label">Account Type <span
                                    style="color: #dc3545; font-size: 18px;">* </span>:</label>
                        <div class="col-lg-4">
                            <div class="form-group">

                                <div class="kt-radio-list">

                                    <label class="kt-radio kt-radio--bold kt-radio--brand">
                                        <input type="radio" value="IT Staff" name="permissions" checked> IT Staff
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--bold kt-radio--danger">
                                        <input type="radio" value="Administrator" name="permissions"> Administrator
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--bold kt-radio--warning">
                                        <input type="radio" value="Administrative Officer" name="permissions">
                                        Administrative Officer
                                        <span></span>
                                    </label>
                                    <label class="kt-radio kt-radio--bold kt-radio--success">
                                        <input type="radio" value="Observer" name="permissions"> Observer
                                        <span></span>
                                    </label>
                                </div>
                                <span class="form-text text-muted">Select the account types with different permissions.</span>
                            </div>


                        </div><label class="col-lg-1 col-form-label">Division <span
                                    style="color: #dc3545; font-size: 18px;">* </span>:</label>
                        <div class="col-lg-3">
                            <div class="input-group">
                                <select id="division" name="division"
                                        class="form-control" required>
                                    <option value="" hidden="true">Select Applicant's
                                        Division
                                    </option>
                                    <option value="Project Management Division">ITS Division
                                    </option>
                                    <option value="Project Management Division">Project
                                        Management Division
                                    </option>
                                    <option value="Finance Division">Finance Division
                                    </option>
                                    <option value="Landscape Division">Landscape
                                        Division
                                    </option>
                                    <option value="Western Province Division">Western
                                        Province Division
                                    </option>
                                    <option value="GIS Division">GIS Division</option>
                                </select>
                            </div>

                        </div>


                    </div>
                    <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                    <div class="form-group row">
                        <label class="col-lg-1 col-form-label">Password <span
                                    style="color: #dc3545; font-size: 18px;">* </span>:</label>
                        <div class="col-lg-3">

                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-unlock"></i></span></div>
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="Enter a Password" required>
                            </div>


                        </div>
                        <label class="col-lg-1 col-form-label">Confirm Password <span
                                    style="color: #dc3545; font-size: 18px;">* </span>:</label>


                        <div class="col-lg-3">

                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                class="la la-unlock"></i></span></div>
                                <input type="password" name="pw_cf" id="pw_cf" class="form-control"
                                       placeholder="Re-type Password" required>
                            </div>

                        </div>


                    </div>

                    <p>
                        <br>
                        Please note that the fields marked with <span style="color: #dc3545; font-size: 18px;">* </span>
                        are compulsory.

                    </p>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" name="submitUser"
                                            class="btn btn-brand">Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

            <?php

            if (isset($_POST['submitUser'])) {

                date_default_timezone_set('Asia/Colombo');

                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $empCode = $_POST['empCode'];
                $email = $_POST['email'];
                $acc_type = $_POST['permissions'];
                $password = $_POST['password'];
                $date = date("l jS \of F Y h:i:s A");
                $status = "Active";
                $title = $_POST['title'];
                $division = $_POST['division'];

                $hash = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO user(firstName, lastName, employeeCode, email, acc_type, password, date_created, status, title, division) VALUES('$firstName','$lastName','$empCode','$email','$acc_type','$hash','$date','$status','$title','$division')";

                $create_query = mysqli_query($con, $query);

                if ($create_query) {

                    echo '<meta http-equiv=Refresh content="0;url=user_success.php">';

                } else {
                    echo " <div class='alert alert-solid-danger alert-bold' role='alert'>";
                    echo " <div class='alert-text'>Something went wrong.</div>";
                    echo " </div>";
                }
            }

            ?>
            <!--end::Form-->
        </div>

        <!--end::Portlet-->


    </div>


</div>


</div>


<!-- end:: Content -->
</div>


<?php include 'include/footer.php'; ?>
