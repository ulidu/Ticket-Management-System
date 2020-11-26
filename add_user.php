<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<!-- begin:: Content -->
<?php

$update_userID_hidden = $_GET['update'];

if ($update_userID_hidden != '') {

    $query_get_data = "select * from user where userID='$update_userID_hidden'";
    $run_query_get_data = mysqli_query($con, $query_get_data);

    while ($row_get_data = mysqli_fetch_assoc($run_query_get_data)) {

        $userID_update_get = $row_get_data['userID'];
        $employeeCode_update_get = $row_get_data['employeeCode'];
        $firstName_update_get = $row_get_data['firstName'];
        $lastName_update_get = $row_get_data['lastName'];
        $date_update_get = $row_get_data['date_created'];
        $email_update_get = $row_get_data['email'];
        $type_update_get = $row_get_data['acc_type'];
        $status_update_get = $row_get_data['status'];
        $password_update_get = $row_get_data['password'];
        $title_update_get = $row_get_data['title'];
        $division_update_get = $row_get_data['division'];


    }

}

?>

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

                        <?php if ($update_userID_hidden == '') {

                            echo "Add a New User";

                        } else {

                            echo "Update Existing User";

                        } ?>

                    </h3>&nbsp;

                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <div class="dropdown dropdown-inline">
                                <a href="user_list.php" class="btn btn-brand btn-elevate btn-icon-sm">


                                    <?php if ($update_userID_hidden == '') {

                                        echo "<i class=\"la la-users\"></i>View all Users";

                                    } else {

                                        echo "<i class=\"la la-close\"></i>Cancel";

                                    } ?>

                                </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!--begin::Form-->
            <form autocomplete="off" name="user_add" id="user_add" method="post" action=""
                  class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">

                    <div class="row">
                        <div class="col-8">

                            <div class="form-group row form-group-marginless kt-margin-t-20">


                                <label class="col-lg-2 col-form-label">Title <span
                                            style="color: #dc3545; font-size: 18px; ">* </span>:</label>

                                <div class="col-10">
                                    <div class="form-group">


                                        <div class="kt-radio-inline">

                                            <?php if ($update_userID_hidden != '') {

                                                ?>
                                                <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                    <input type="radio" value="Mr." id="title_up" name="title_up"
                                                        <?php if ($title_update_get == 'Mr.') { ?>
                                                            checked
                                                        <?php } ?>
                                                    >
                                                    Mr.
                                                    <span></span>
                                                </label>


                                                <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                    <input type="radio" value="Mrs." id="title_up" name="title_up"
                                                        <?php if ($title_update_get == 'Mrs.') { ?>
                                                            checked
                                                        <?php } ?>
                                                    > Mrs.
                                                    <span></span>
                                                </label>


                                                <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                    <input type="radio" value="Miss." id="title_up" name="title_up"
                                                        <?php if ($title_update_get == 'Miss.') { ?>
                                                            checked
                                                        <?php } ?>
                                                    >
                                                    Miss.
                                                    <span></span>
                                                </label>


                                                <?php


                                            } elseif ($update_userID_hidden == '') {
                                                ?>
                                                <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                    <input type="radio" value="Mr." id="title" name="title" checked> Mr.
                                                    <span></span>
                                                </label>


                                                <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                    <input type="radio" value="Mrs." id="title" name="title"> Mrs.
                                                    <span></span>
                                                </label>


                                                <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                    <input type="radio" value="Miss." id="title" name="title">
                                                    Miss.
                                                    <span></span>
                                                </label>

                                                <?php
                                            } ?>


                                        </div>
                                    </div>
                                </div>


                                <label class="col-lg-2 col-form-label">First Name <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-user"></i></span></div>
                                        <input name="firstName" id="firstName" type="text" class="form-control"

                                            <?php if ($update_userID_hidden != '') { ?>

                                                value="<?php echo $firstName_update_get; ?>"

                                            <?php } ?>

                                               placeholder="Enter User's First Name" required>
                                    </div>

                                </div>


                                <label class="col-lg-2 col-form-label">Last Name <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-user"></i></span></div>

                                        <input name="lastName" id="lastName" type="text" class="form-control"
                                            <?php if ($update_userID_hidden != '') { ?>

                                                value="<?php echo $lastName_update_get; ?>"

                                            <?php } ?>
                                               placeholder="Enter User's Last Name" required>
                                    </div>

                                </div>


                                <label class="col-lg-2 col-form-label">Employee Code <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-10">

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-qrcode"></i></span></div>

                                        <input name="empCode" autocomplete="off" id="empCode" type="text"
                                               class="form-control"
                                            <?php if ($update_userID_hidden != '') { ?>

                                                value="<?php echo $employeeCode_update_get; ?>"

                                            <?php } ?>
                                               placeholder="Enter User's Employee Code" required>
                                    </div>

                                </div>
                                <label class="col-lg-2 col-form-label">Email <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-10">

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-at"></i></span></div>

                                        <input name="email" id="email" type="email" class="form-control"
                                            <?php if ($update_userID_hidden != '') { ?>

                                                value="<?php echo $email_update_get; ?>"

                                            <?php } ?>
                                               placeholder="Enter User's Email Address" required>
                                    </div>

                                </div>


                            </div>
                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                            <div class="form-group row form-group-marginless">


                                <label class="col-lg-3 col-form-label">Account Type <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-9">
                                    <div class="form-group">

                                        <div class="kt-radio-list">

                                            <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                <input type="radio" value="IT Staff" id="permissions" name="permissions"
                                                    <?php if ($type_update_get == 'IT Staff') { ?>
                                                        checked
                                                    <?php }
                                                    if ($update_userID_hidden == '') { ?> checked
                                                    <?php } ?> > IT Staff
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--bold kt-radio--danger">
                                                <input type="radio" value="Administrator" id="permissions"
                                                       name="permissions"
                                                    <?php if ($type_update_get == 'Administrator') { ?>
                                                        checked
                                                    <?php } ?>
                                                >
                                                Administrator
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--bold kt-radio--warning">
                                                <input type="radio" value="Administrative Officer" id="permissions"
                                                       name="permissions"
                                                    <?php if ($type_update_get == 'Administrative Officer') { ?>
                                                        checked
                                                    <?php } ?> >
                                                Administrative Officer
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--bold kt-radio--success">
                                                <input type="radio" value="Observer" id="permissions"
                                                       name="permissions"
                                                    <?php if ($type_update_get == 'Observer') { ?>
                                                        checked
                                                    <?php } ?> > Observer
                                                <span></span>
                                            </label>
                                        </div>
                                        <span class="form-text text-muted">Select the account types with different permissions.</span>
                                    </div>


                                </div>
                                <label class="col-lg-3 col-form-label">Division <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-9">
                                    <div class="input-group">
                                        <select id="division" name="division"
                                                class="form-control" required>
                                            <option value="" hidden="true">Select Applicant's
                                                Division
                                            </option>

                                            <?php

                                            $query_g_div = "select * from division";
                                            $run_query_g_div = mysqli_query($con, $query_g_div);

                                            while ($row_g_div = mysqli_fetch_assoc($run_query_g_div)) {

                                                $division_id = $row_g_div['division_id'];
                                                $division_name = $row_g_div['division_name'];

                                                ?>

                                                <?php if ($update_userID_hidden != '') {

                                                    ?>
                                                    <option value="<?php echo $division_name; ?>"
                                                        <?php if ($division_update_get == $division_name) { ?> selected <?php } ?>
                                                    ><?php echo $division_name; ?></option>


                                                <?php } else {
                                                    ?>

                                                    <option value="<?php echo $division_name; ?>"><?php echo $division_name; ?></option>

                                                    <?php
                                                } ?>


                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>


                            </div>
                            <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Password


                                    <span style="color: #dc3545; font-size: 18px;">

 <?php if ($update_userID_hidden == '') { ?>
     *
 <?php } ?>
                                    </span>:</label>
                                <div class="col-9">

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-unlock"></i></span></div>
                                        <input autocomplete="new-password" type="password" name="password" id="password"
                                               class="form-control"
                                               placeholder="Enter a Password"
                                            <?php if ($update_userID_hidden == '') { ?>
                                                required
                                            <?php } ?>
                                        >
                                    </div>


                                </div>
                                <label class="col-lg-3 col-form-label">Confirm Password

                                    <?php if ($update_userID_hidden == '') { ?>
                                        <span style="color: #dc3545; font-size: 18px;">* </span>
                                    <?php } ?>
                                    :</label>


                                <div class="col-9">

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-unlock"></i></span></div>
                                        <input autocomplete="new-password" type="password" name="pw_cf" id="pw_cf"
                                               class="form-control"
                                               placeholder="Re-type Password"
                                            <?php if ($update_userID_hidden == '') { ?>
                                                required
                                            <?php } ?>
                                        >
                                    </div>

                                </div>

                                <?php if ($update_userID_hidden != '') { ?>

                                    <span style="margin-left: 26.5%;" class="form-text text-muted">Leave it blank if you don't want to change the password.</span>
                                <?php } ?>

                            </div>

                            <p>
                                <br>
                                Please note that the fields marked with <span
                                        style="color: #dc3545; font-size: 18px;">* </span>
                                are compulsory.

                            </p>

                        </div>

                        <div class="col-4">


                            <div class="kanban-container embed-responsive">
                                <div style="width: 100% !important;" class="kanban-board">
                                    <header class="kanban-board-header brand-light">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                             viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
                                                <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1"/>
                                                <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1"/>
                                            </g>
                                        </svg>
                                        &nbsp;
                                        <div style="font-weight: 500;" class="kanban-title-board">Account Structure
                                        </div>
                                    </header>

                                    <br>

                                    <div style="margin-left: 8%; font-weight: 400;" id="kt_tree_2" class="tree-demo">
                                        <ul>
                                            <li data-jstree='{ "icon" : "fa fa-city kt-font-danger" }'>
                                                Urban Development Authority
                                                <ul>

                                                    <li data-jstree='{ "opened" : true, "icon" : "fa fa-building kt-font-brand" }'>
                                                        ITS Division
                                                        <ul>
                                                            <li data-jstree='{ "selected" : true, "icon" : "fa fa-user-check kt-font-success" }'>
                                                                <a href="#observer_k">Observer</a>
                                                            </li>
                                                            <li data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-warning" }'>
                                                                <a href="#admin_k">Administrator</a>
                                                            </li>
                                                            <li id="observer_k"
                                                                data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-warning" }'>
                                                                <a href="#it_staff_k">IT Staff</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                                <ul>

                                                    <li data-jstree='{ "opened" : true, "icon" : "fa fa-building kt-font-brand" }'>
                                                        Other Divisions
                                                        <ul>
                                                            <li data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-warning" }'>
                                                                <a href="#ad_off_k">Administrative Officer</a>
                                                            </li>
                                                            <li data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-success" }'>
                                                                <a href="#staff_k_a">Staff (No Registration)</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </div>


                                    <main class="kanban-drag">
                                        <div class="kanban-item">
                                            <div class="kt-kanban__badge">
                                                <div class="kt-kanban__content">
                                                    <span class="kt-badge kt-badge--success kt-badge--inline">Observer</span>
                                                    <div id="admin_k" class="kt-kanban__title">User Accounts with <span
                                                                class="kt-font-success">Observer Privileges</span>
                                                        can only view the details of the system.
                                                        These type of users are not allowed to create or modify any data
                                                        within the system.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-item">
                                            <div id="it_staff_k" class="kt-kanban__badge">

                                                <div class="kt-kanban__content">
                                                    <span class="kt-badge kt-badge--warning kt-badge--inline">Administrator</span>
                                                    <div class="kt-kanban__title">User Accounts with <span
                                                                class="kt-font-warning">Administrator Privileges</span>
                                                        has the full access to the system.
                                                        Mainly including user account creation and assigning tickets.
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-item">
                                            <div id="ad_off_k" class="kt-kanban__badge">

                                                <div class="kt-kanban__content">
                                                    <span class="kt-badge kt-badge--warning kt-badge--inline">IT Staff</span>
                                                    <div class="kt-kanban__title">
                                                        <span class="kt-font-warning">IT Staff Accounts</span>
                                                        only able to view and update the status of their tickets.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-item">
                                            <div id="staff_k_a" class="kt-kanban__badge">

                                                <div class="kt-kanban__content">
                                                    <span class="kt-badge kt-badge--warning kt-badge--inline">Administrative Officer</span>
                                                    <div class="kt-kanban__title">
                                                        <span class="kt-font-warning">Administrative Officers</span>
                                                        are only able to view, approve or reject the tickets of their
                                                        division.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-item">
                                            <div class="kt-kanban__badge">

                                                <div class="kt-kanban__content">
                                                    <span class="kt-badge kt-badge--success kt-badge--inline">Staff - Other Divisions</span>
                                                    <div class="kt-kanban__title">
                                                        <span class="kt-font-success">The Staff of Other Divisions</span>
                                                        are not required to register to the system. They can simply
                                                        submit a ticket without login.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </main>


                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">


                                    <?php if ($update_userID_hidden == '') {

                                        echo "<button type=\"submit\" id=\"submitUser\" name=\"submitUser\" class=\"btn btn-brand\">Add new User</button>";

                                    } else {

                                        echo "<button type=\"submit\" id=\"updateUser\" name=\"updateUser\" class=\"btn btn-brand\">Update User</button>";

                                    } ?>

                                    <?php if ($update_userID_hidden == '') {

                                        echo " <button type=\"reset\" class=\"btn btn-secondary\">Cancel</button>";

                                    } else {

                                        echo " <button type=\"button\" onclick=\"location.href='user_list.php'\" class=\"btn btn-secondary\">Cancel</button>";

                                    } ?>

                                </div>
                            </div>
                        </div>
                    </div>
            </form>


            <!--end::Form-->
        </div>

        <!--end::Portlet-->


    </div>


</div>


</div>


<!-- end:: Content -->
</div>

<script>

    $(document).ready(function () {

        window.title_upd = $('input[type=radio][name=title_up]').val();
        window.permissions_upd = $('input[type=radio][name=permissions]').val();

        $('input[type=radio][name=title_up]').change(function () {

            var title_upd = this.value;
            window.title_upd = title_upd;

        });

        $('input[type=radio][name=permissions]').change(function () {

            var permissions_upd = this.value;
            window.permissions_upd = permissions_upd;

        });

        $('#updateUser').click(function (e) {

            e.preventDefault();

            function validateEmail(email) {

                const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
                return re.test(String(email).toLowerCase());

            }

            var logged_user_id = '<?php echo $logged_user_id; ?>';
            var title_updt = title_upd;
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var empCode = $('#empCode').val();
            var email = $('#email').val();
            var permissions = permissions_upd;
            var division = $('#division').val();
            var password = $('#password').val();
            var pw_cf = $('#pw_cf').val();
            var user_id_to_update = '<?php echo $update_userID_hidden; ?>';
            const isEmpty = str => !str.trim().length;

            toastr.options = {
                "newestOnTop": false,
            };

            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: 'Please wait...'
            });

            setTimeout(function () {
                KTApp.unblockPage();
            }, 2000000000);

            if (isEmpty(firstName)) {

                KTApp.unblockPage();
                toastr.warning('Please enter the first name of the user.');
                $('#firstName').focus();

                return false;

            }
            if (isEmpty(lastName)) {

                KTApp.unblockPage();
                toastr.warning('Please enter the last name of the user.');
                $('#lastName').focus();
                return false;

            }

            if (isEmpty(empCode)) {

                KTApp.unblockPage();
                toastr.warning('Please enter the Employee code of the user.');
                $('#empCode').focus();
                return false;

            }

            if (isNaN(empCode)) {

                KTApp.unblockPage();
                toastr.warning('Employee code should be a number.');
                $('#empCode').focus();
                return false;

            }

            if (isEmpty(email)) {

                KTApp.unblockPage();
                toastr.warning('Please enter the email of the user.');
                $('#email').focus();
                return false;

            }
            if (!validateEmail(email)) {

                KTApp.unblockPage();
                toastr.warning('Please enter a valid email address.');
                $('#email').focus();
                return false;

            }
            if (isEmpty(division)) {

                KTApp.unblockPage();
                toastr.warning('Please select the division of the user.');
                $('#division').focus();
                return false;

            }

            if (!isEmpty(password) || !isEmpty(pw_cf)) {

                if (isEmpty(password)) {

                    KTApp.unblockPage();
                    toastr.warning('Please enter a password.');
                    $('#password').focus();
                    return false;

                }

                if (isEmpty(pw_cf)) {

                    KTApp.unblockPage();
                    toastr.warning('Please confirm the password.');
                    $('#pw_cf').focus();
                    return false;

                }

                if (!isEmpty(password) && password == pw_cf) {

                    if (password.length < 6) {

                        KTApp.unblockPage();
                        swal.fire("Weak Password !", "Your password must contain at least six characters.", "warning");
                        $('#password').focus();
                        return false;

                    }
                    if (password == firstName) {

                        KTApp.unblockPage();
                        swal.fire("Confirm Password !", "Your password must be different from Username.", "warning");
                        $('#password').focus();
                        return false;

                    }

                } else {

                    KTApp.unblockPage();
                    swal.fire("Confirm Password !", "Passwords do not match !", "warning");
                    $('#password').focus();
                    return false;

                }
            }

            $.ajax({

                url: "user_update_app.php",
                method: "POST",
                data: {
                    title_up: title_updt,
                    firstName: firstName,
                    lastName: lastName,
                    empCode: empCode,
                    email: email,
                    permissions: permissions,
                    division: division,
                    password: password,
                    logged_user_id: logged_user_id,
                    user_id_to_update: user_id_to_update
                },
                success: function (data) {

                    if (data.toString() == 2) {

                        KTApp.unblockPage();
                        swal.fire("User Already Exists !", "An user with same Employee code or Email already exists.", "error");

                    }

                    if (data.toString() == 1) {
                        KTApp.unblockPage();
                        swal.fire({

                            title: "Updated Successfully !",
                            text: "Selected user updated successfully.",
                            type: "success"

                        }).then(function () {

                            window.location = "user_list.php";

                        });

                    }

                    if (data.toString() == 0) {

                        KTApp.unblockPage();
                        swal.fire("Something went wrong !", "Failed updating the user", "error");

                    }

                }

            });

        });

    });

</script>

<script>

    $(document).ready(function () {

        $('#submitUser').click(function (e) {

            e.preventDefault();

            function validateEmail(email) {

                const re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
                return re.test(String(email).toLowerCase());

            }

            var logged_user_id = '<?php echo $logged_user_id; ?>';
            var title = $('#title').val();
            var firstName = $('#firstName').val();
            var lastName = $('#lastName').val();
            var empCode = $('#empCode').val();
            var email = $('#email').val();
            var permissions = $('#permissions').val();
            var division = $('#division').val();
            var password = $('#password').val();
            var pw_cf = $('#pw_cf').val();

            const isEmpty = str => !str.trim().length;

            toastr.options = {
                "newestOnTop": false,
            };

            KTApp.blockPage({
                overlayColor: '#000000',
                type: 'v2',
                state: 'success',
                message: 'Please wait...'
            });

            setTimeout(function () {
                KTApp.unblockPage();
            }, 2000000000);

            if (isEmpty(firstName)) {

                KTApp.unblockPage();
                toastr.warning('Please enter the first name of the user.');
                $('#firstName').focus();

                return false;

            }
            if (isEmpty(lastName)) {

                KTApp.unblockPage();
                toastr.warning('Please enter the last name of the user.');
                $('#lastName').focus();
                return false;

            }

            if (isEmpty(empCode)) {

                KTApp.unblockPage();
                toastr.warning('Please enter the Employee code of the user.');
                $('#empCode').focus();
                return false;

            }

            if (isNaN(empCode)) {

                KTApp.unblockPage();
                toastr.warning('Employee code should be a number.');
                $('#empCode').focus();
                return false;

            }

            if (isEmpty(email)) {

                KTApp.unblockPage();
                toastr.warning('Please enter the email of the user.');
                $('#email').focus();
                return false;

            }
            if (!validateEmail(email)) {

                KTApp.unblockPage();
                toastr.warning('Please enter a valid email address.');
                $('#email').focus();
                return false;

            }
            if (isEmpty(division)) {

                KTApp.unblockPage();
                toastr.warning('Please select the division of the user.');
                $('#division').focus();
                return false;

            }

            if (isEmpty(password)) {

                KTApp.unblockPage();
                toastr.warning('Please enter a password.');
                $('#password').focus();
                return false;

            }

            if (isEmpty(pw_cf)) {

                KTApp.unblockPage();
                toastr.warning('Please confirm the password.');
                $('#pw_cf').focus();
                return false;

            }

            if (!isEmpty(password) && password == pw_cf) {

                if (password.length < 6) {

                    KTApp.unblockPage();
                    swal.fire("Weak Password !", "Your password must contain at least six characters.", "warning");
                    $('#password').focus();
                    return false;

                }
                if (password == firstName) {

                    KTApp.unblockPage();
                    swal.fire("Confirm Password !", "Your password must be different from Username.", "warning");
                    $('#password').focus();
                    return false;

                }

            } else {

                KTApp.unblockPage();
                swal.fire("Confirm Password !", "Passwords do not match !", "warning");
                $('#password').focus();
                return false;

            }

            $.ajax({

                url: "user_add_app.php",
                method: "POST",
                data: {
                    title: title,
                    firstName: firstName,
                    lastName: lastName,
                    empCode: empCode,
                    email: email,
                    permissions: permissions,
                    division: division,
                    password: password,
                    logged_user_id: logged_user_id
                },
                success: function (data) {

                    if (data.toString() == 2) {

                        KTApp.unblockPage();
                        swal.fire("User Already Exists !", "An user with same Employee code or Email already exists.", "error");

                    }
                    if (data.toString() == 1) {

                        location.href = 'user_success.php';

                    }
                    if (data.toString() == 0) {

                        KTApp.unblockPage();
                        swal.fire("Something went wrong !", "Failed creating the user", "error");

                    }

                }

            });

        });

    });

</script>

<script>

    setTimeout(function () {

        $("#firstName").prop("type", "text");
        $("#lastName").prop("type", "text");
        $("#empCode").prop("type", "text");
        $("#email").prop("type", "email");
        $("#password").prop("type", "password");
        $("#pw_cf").prop("type", "password");

    }, 10);
    // time out required to make sure it is not set as a password field before Google fills it in. You may need to adjust this timeout depending on your page load times.

</script>

<?php include 'include/footer.php'; ?>
