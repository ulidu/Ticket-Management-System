<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<!-- begin:: Content -->
<div id="card" class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


    <!-- begin:: Content -->

    <div style="display: none;" id="edit_portlet" class="kt-portlet kt-portlet--tabs">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-toolbar">
                <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand"
                    role="tablist">


                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_3" role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                          fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            Update Account Information
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="kt-portlet__body">
            <form action="" autocomplete="off" name="user_edit" method="post">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Edit User
                                                    Information</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Title <span
                                                        style="color: #dc3545; font-size: 18px; ">* </span>:</label>

                                            <div class="col-lg-9 col-xl-6">
                                                <div class="form-group">


                                                    <div class="kt-radio-inline">


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
                                        </div>


                                        <div class="form-group row">


                                            <label class="col-xl-3 col-lg-3 col-form-label">First Name <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-user"></i></span></div>
                                                    <input name="firstName" id="firstName" type="text"
                                                           class="form-control"
                                                           placeholder="Enter User's First Name" required>
                                                </div>

                                            </div>


                                            <label class="col-xl-3 col-lg-3 col-form-label">Last Name <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-user"></i></span></div>

                                                    <input name="lastName" type="text" class="form-control"
                                                           placeholder="Enter User's Last Name" required>
                                                </div>

                                            </div>


                                            <label class="col-xl-3 col-lg-3 col-form-label">Employee Code <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">

                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-qrcode"></i></span></div>

                                                    <input name="empCode" type="text" class="form-control"
                                                           placeholder="Enter User's Employee Code" required>
                                                </div>

                                            </div>
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">

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


                                            <label class="col-xl-3 col-lg-3 col-form-label">Account Type <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="form-group">

                                                    <div class="kt-radio-list">

                                                        <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                            <input type="radio" value="IT Staff" name="permissions"
                                                                   checked> IT
                                                            Staff
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--danger">
                                                            <input type="radio" value="Administrator"
                                                                   name="permissions">
                                                            Administrator
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--warning">
                                                            <input type="radio" value="Administrative Officer"
                                                                   name="permissions">
                                                            Administrative Officer
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--success">
                                                            <input type="radio" value="Observer" name="permissions">
                                                            Observer
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="form-text text-muted">Select the account types with different permissions.</span>
                                                </div>


                                            </div>
                                            <label class="col-xl-3 col-lg-3 col-form-label">Division <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">
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


                                        <p>

                                            Please note that the fields marked with <span
                                                    style="color: #dc3545; font-size: 18px;">* </span>
                                            are compulsory.

                                        </p>


                                    </div>


                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <div class="row">
                                            <div class="col-lg-5"></div>
                                            <div class="col-lg-7">
                                                <button type="submit" name="submitUser"
                                                        class="btn btn-brand">Update Details
                                                </button>&nbsp;
                                                <button type="reset" onClick="window.location.href=window.location.href" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>





    <div class="row">

        <div class="col-3">
            <div class="kt-portlet kt-iconbox kt-iconbox--danger kt-iconbox--animate-slow">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                          fill="#000000"/>
                                    <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
                                    <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">

                                    <?php



                                    $count_all = "SELECT * FROM user where acc_type='Administrator' ORDER BY userID";



                                    if ($count_all_run = mysqli_query($con, $count_all)) {

                                        $count_all_tickets = mysqli_num_rows($count_all_run);

                                        if ($count_all_tickets == 1) {

                                            printf("%d Account", $count_all_tickets);

                                        } else {

                                            printf("%d Accounts", $count_all_tickets);

                                        }

                                        mysqli_free_result($count_all_run);

                                    }

                                    ?>

                                </a>
                            </h3>
                            <div class="kt-iconbox__content">

                                Administrator

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-3">
            <div class="kt-portlet kt-iconbox kt-iconbox--success kt-iconbox--animate-slow">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                          fill="#000000"/>
                                    <rect fill="#000000" opacity="0.3" x="10" y="9" width="7" height="2" rx="1"/>
                                    <rect fill="#000000" opacity="0.3" x="7" y="9" width="2" height="2" rx="1"/>
                                    <rect fill="#000000" opacity="0.3" x="7" y="13" width="2" height="2" rx="1"/>
                                    <rect fill="#000000" opacity="0.3" x="10" y="13" width="7" height="2" rx="1"/>
                                    <rect fill="#000000" opacity="0.3" x="7" y="17" width="2" height="2" rx="1"/>
                                    <rect fill="#000000" opacity="0.3" x="10" y="17" width="7" height="2" rx="1"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">


                                    <?php


                                    if ($acc_type == 'Administrator') {

                                        $count_in_progress = "SELECT * FROM task where status = 'In Progress' ORDER BY task_id";

                                    } elseif ($acc_type == 'Administrative Officer') {

                                        $count_in_progress = "SELECT * FROM task where status = 'In Progress' and division='$division' ORDER BY task_id";

                                    } elseif ($acc_type == 'IT Staff') {

                                        $count_in_progress = "SELECT * FROM assign a, task t WHERE a.task_id = t.task_id AND t.status='In Progress' and (a.userID = '$logged_user_id' OR a.userID_2_opt = '$logged_user_id')";

                                    }


                                    if ($count_in_progress_run = mysqli_query($con, $count_in_progress)) {

                                        $count_in_progress_run_tickets = mysqli_num_rows($count_in_progress_run);

                                        if ($count_in_progress_run_tickets == 1) {

                                            printf("%d Ticket", $count_in_progress_run_tickets);

                                        } else {

                                            printf("%d Tickets", $count_in_progress_run_tickets);

                                        }


                                        mysqli_free_result($count_in_progress_run);

                                    }

                                    ?>


                                </a>
                            </h3>
                            <div class="kt-iconbox__content">
                                Observer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="kt-portlet kt-iconbox kt-iconbox--brand kt-iconbox--animate-slow">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                          fill="#000000"/>
                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                          fill="#000000"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">


                                    <?php

                                    if ($acc_type == 'Administrator') {

                                        $count_completed = "SELECT * FROM task where status = 'Completed' ORDER BY task_id";

                                    } elseif ($acc_type == 'Administrative Officer') {

                                        $count_completed = "SELECT * FROM task where status = 'Completed' and division='$division' ORDER BY task_id";

                                    } elseif ($acc_type == 'IT Staff') {

                                        $count_completed = "SELECT * FROM assign a, task t WHERE a.task_id = t.task_id AND t.status='Completed' and (a.userID = '$logged_user_id' OR a.userID_2_opt = '$logged_user_id')";

                                    }

                                    if ($count_completed_run = mysqli_query($con, $count_completed)) {

                                        $count_completed_run_tickets = mysqli_num_rows($count_completed_run);

                                        if ($count_completed_run_tickets == 1) {

                                            printf("%d Ticket", $count_completed_run_tickets);

                                        } else {

                                            printf("%d Tickets", $count_completed_run_tickets);

                                        }


                                        mysqli_free_result($count_completed_run);

                                    }

                                    ?>


                                </a>
                            </h3>
                            <div class="kt-iconbox__content">
                                IT Staff
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="kt-portlet kt-iconbox kt-iconbox--warning kt-iconbox--animate-slow">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                          fill="#000000"/>
                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                          fill="#000000"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">


                                    <?php

                                    if ($acc_type == 'Administrator') {

                                        $count_completed = "SELECT * FROM task where status = 'Completed' ORDER BY task_id";

                                    } elseif ($acc_type == 'Administrative Officer') {

                                        $count_completed = "SELECT * FROM task where status = 'Completed' and division='$division' ORDER BY task_id";

                                    } elseif ($acc_type == 'IT Staff') {

                                        $count_completed = "SELECT * FROM assign a, task t WHERE a.task_id = t.task_id AND t.status='Completed' and (a.userID = '$logged_user_id' OR a.userID_2_opt = '$logged_user_id')";

                                    }

                                    if ($count_completed_run = mysqli_query($con, $count_completed)) {

                                        $count_completed_run_tickets = mysqli_num_rows($count_completed_run);

                                        if ($count_completed_run_tickets == 1) {

                                            printf("%d Ticket", $count_completed_run_tickets);

                                        } else {

                                            printf("%d Tickets", $count_completed_run_tickets);

                                        }


                                        mysqli_free_result($count_completed_run);

                                    }

                                    ?>


                                </a>
                            </h3>
                            <div class="kt-iconbox__content">
                                Ad. Officer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- end:: Content -->


    <div id="all_users_portlet" class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-user"></i>
										</span>
                <h3 class="kt-portlet__head-title kt-font-brand">
                    All Users</h3>&nbsp;

            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <div class="dropdown dropdown-inline">
                            <a href="add_user.php" class="btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-user-plus"></i>
                                Add a New User
                            </a>
                            &nbsp;
                            <button type="button"
                                    class="btn btn-default btn-icon-sm dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                <i class="la la-download"></i>
                                Export
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <ul class="kt-nav">
                                    <li class="kt-nav__section kt-nav__section--first">
                                        <span class="kt-nav__section-text">Choose an option</span>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a onclick="window.print()"
                                           class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-print"></i>
                                            <span class="kt-nav__link-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a onclick="generate()"
                                           class="kt-nav__link">
                                            <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                            <span class="kt-nav__link-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="kt-portlet__body kt-font-dark">
            <!--begin: Datatable -->
            <table style="text-align: center"
                   class="table table-striped- table-bordered table-hover"
                   id="kt_table_1">
                <thead>
                <tr style="font-size: 14px;" class="kt-label-bg-color-1">
                    <th>No.</th>
                    <th style="min-width: 120px;">Actions</th>
                    <th>User ID</th>
                    <th>Employee Code</th>
                    <th>Status</th>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Account Type</th>
                    <th>Division</th>
                    <th>Created Date</th>

                </tr>
                </thead>
                <tbody>

                <?php

                $query = "select * from user";
                $run_query = mysqli_query($con, $query);

                $i = 1;

                while ($row = mysqli_fetch_assoc($run_query)) {

                    $userID = $row['userID'];
                    $employeeCode = $row['employeeCode'];
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
                    $date = $row['date_created'];
                    $email = $row['email'];
                    $type = $row['acc_type'];
                    $status = $row['status'];
                    $password = $row['password'];
                    $title = $row['title'];
                    $division = $row['division'];

                    ?>

                    <tr style="font-weight: 400;">

                        <td>

                             <span style="font-weight: 500"
                                   class="kt-badge kt-badge--dark kt-badge--inline kt-badge--pill"><?php echo $i; ?></span>

                        </td>

                        <td style="min-width: 120px;">


                            <input type="hidden" value="" name="ticket_hidden"
                                   id="ticket_hidden">


                            <button onclick="edit_g_r1()" id="edit_u" name="edit_u" type="button"
                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--d22 kt-badge--inline kt-badge--pill"
                                    title="Edit User">
                                <i style="font-size: 18px; color: #007bff; font-weight: 800;"
                                   class="la la-edit"></i>
                            </button>
                            &nbsp;
                            <button onclick="" id="submit_approve" name="submit_approve" type="submit"
                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--warn kt-badge--inline kt-badge--pill"
                                    title="Disable User">
                                <i style="font-size: 18px; color: #ffb822; font-weight: 800;"
                                   class="la la-minus-circle"></i>
                            </button>
                            &nbsp;
                            <button onclick="
                                if (confirm('Are you sure you want to delete this ticket ?')) {
            return true;

        } else {
            return false;
        }" type="submit" id="submit_remove" name="submit_remove"
                                    class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                    title="Delete User">
                                <i style="font-size: 18px; color: #dc3545; font-weight: 800;"
                                   class="la la-trash"></i>
                            </button>

                            <hr>

                            <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill kt-font-bold">Password Reset</span>


                        </td>

                        <td><?php echo $userID; ?></td>
                        <td><?php echo $employeeCode; ?></td>
                        <td>
                            <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill kt-font-bold"><?php echo $status; ?></span>
                        </td>

                        <td><?php echo $title; ?></td>
                        <td><?php echo $firstName; ?></td>
                        <td><?php echo $lastName; ?></td>
                        <td><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></td>
                        <td><?php echo $type; ?></td>
                        <td class="kt-font-bold kt-font-brand"><?php echo $division; ?></td>
                        <td><?php echo $date; ?></td>


                    </tr>

                    <?php

                    $i++;

                } ?>

                </tbody>

            </table>

            <!--end: Datatable -->
        </div>
    </div>


    <div class="col-12">
        <div class="row">

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
                        <div style="font-weight: 500;" class="kanban-title-board">Account Structure</div>
                    </header>

                    <br>

                    <div class="row">

                        <div class="col-4">

                            <div style="margin-top: 6%; font-weight: 400; margin-left: 14%;" id="kt_tree_2"
                                 class="tree-demo">
                                <ul>
                                    <li data-jstree='{ "icon" : "fa fa-city kt-font-danger" }'>
                                        Urban Development Authority
                                        <ul>

                                            <li data-jstree='{ "opened" : true, "icon" : "fa fa-building kt-font-brand" }'>
                                                ITS Division
                                                <ul>
                                                    <li data-jstree='{ "selected" : true, "icon" : "fa fa-user-check kt-font-success" }'>
                                                        Observer
                                                    </li>
                                                    <li data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-warning" }'>
                                                        Administrator
                                                    </li>
                                                    <li id="observer_k"
                                                        data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-warning" }'>
                                                        IT Staff
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                        <ul>

                                            <li data-jstree='{ "opened" : true, "icon" : "fa fa-building kt-font-brand" }'>
                                                Other Divisions
                                                <ul>
                                                    <li data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-warning" }'>
                                                        Administrative Officer
                                                    </li>
                                                    <li data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-success" }'>
                                                        Staff (No Registration)
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>

                                </ul>
                            </div>

                        </div>

                        <div class="col-8">


                            <main class="kanban-drag">

                                <div class="row" style="margin-bottom: 2%;">


                                    <div class="col-6">

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

                                    </div>

                                    <div class="col-6">

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

                                    </div>

                                </div>


                                <div class="row" style="margin-bottom: 2%;">


                                    <div class="col-6">

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
                                    </div>

                                    <div class="col-6">
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
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="kanban-item">
                                            <div class="kt-kanban__badge">

                                                <div class="kt-kanban__content">
                                                    <span class="kt-badge kt-badge--success kt-badge--inline">Staff - Other Divisions</span>
                                                    <div class="kt-kanban__title">
                                                        <span class="kt-font-success">The Staff of Other Divisions</span>
                                                        are not required to register to the system. They can simply
                                                        submit a
                                                        ticket
                                                        without login.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>


</div>
</div>

<!-- end:: Content -->


<script>

    function edit_g_r1() {

        //Form Elements
        //var subject_d = document.getElementById('subject').value;
        //var link_d = document.getElementById('link');

        document.getElementById('edit_portlet').style.display = 'revert';
        document.getElementById('all_users_portlet').style.display = 'none';

        const id = 'card';
        const yOffset = -1000;
        const element = document.getElementById(id);
        const y = element.getBoundingClientRect().top + window.pageYOffset + yOffset;

        window.scrollTo({top: y, behavior: 'smooth'});


    }

</script>


<!-- begin:: Content -->


<?php include 'include/footer.php'; ?>
