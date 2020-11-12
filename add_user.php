<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

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
                                                       checked> IT
                                                Staff
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--bold kt-radio--danger">
                                                <input type="radio" value="Administrator" id="permissions"
                                                       name="permissions">
                                                Administrator
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--bold kt-radio--warning">
                                                <input type="radio" value="Administrative Officer" id="permissions"
                                                       name="permissions">
                                                Administrative Officer
                                                <span></span>
                                            </label>
                                            <label class="kt-radio kt-radio--bold kt-radio--success">
                                                <input type="radio" value="Observer" id="permissions"
                                                       name="permissions"> Observer
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
                                            <option value="ITS Division">ITS Division
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
                                <label class="col-lg-3 col-form-label">Password <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-9">

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-unlock"></i></span></div>
                                        <input autocomplete="new-password" type="password" name="password" id="password"
                                               class="form-control"
                                               placeholder="Enter a Password" required>
                                    </div>


                                </div>
                                <label class="col-lg-3 col-form-label">Confirm Password <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>


                                <div class="col-9">

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-unlock"></i></span></div>
                                        <input autocomplete="new-password" type="password" name="pw_cf" id="pw_cf"
                                               class="form-control"
                                               placeholder="Re-type Password" required>
                                    </div>

                                </div>


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
                                    <button type="submit" id="submitUser" name="submitUser"
                                            class="btn btn-brand">Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
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
