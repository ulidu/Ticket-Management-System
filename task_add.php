<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<!-- end:: Header -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    New Ticket
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter the following details and submit </span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">

                    <a class="btn kt-subheader__btn-daterange" id="" data-placement="left">
                                    <span class="kt-subheader__btn-daterange-title"
                                          id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                        <span class="kt-subheader__btn-daterange-date"
                              id="kt_dashboard_daterangepicker_date">: <?php
                            $string = date("Y-m-d");
                            $date = DateTime::createFromFormat("Y-m-d", $string);
                            echo $date->format(" M ");
                            $date = DateTime::createFromFormat("Y-m-d", $string);
                            echo $date->format("d");
                            ?></span>
                        <i class="flaticon2-calendar-1"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>


    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-wizard-v4" id="kt_user_add_user" data-ktwizard-state="step-first">

            <!--begin: Form Wizard Nav -->
            <div class="kt-wizard-v4__nav">
                <div class="kt-wizard-v4__nav-items nav">

                    <!--doc: Replace A tag with SPAN tag to disable the step link click -->
                    <div style="cursor: pointer;" class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step"
                         data-ktwizard-state="current">
                        <div class="kt-wizard-v4__nav-body">
                            <div class="kt-wizard-v4__nav-number">
                                1
                            </div>
                            <div class="kt-wizard-v4__nav-label">
                                <div class="kt-wizard-v4__nav-label-title">
                                    Applicant Details
                                </div>
                                <div class="kt-wizard-v4__nav-label-desc">
                                    Applicant's Information
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="cursor: pointer;" class="kt-wizard-v4__nav-item nav-item" data-ktwizard-type="step">
                        <div class="kt-wizard-v4__nav-body">
                            <div class="kt-wizard-v4__nav-number">
                                2
                            </div>
                            <div class="kt-wizard-v4__nav-label">
                                <div class="kt-wizard-v4__nav-label-title">
                                    Issue Details and Submission
                                </div>
                                <div class="kt-wizard-v4__nav-label-desc">
                                    Identifying the Issue and Submitting the Ticket
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!--end: Form Wizard Nav -->
            <div class="kt-portlet">
                <div class="kt-portlet__body kt-portlet__body--fit">
                    <div class="kt-grid">
                        <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v4__wrapper">

                            <!--begin: Form Wizard Form-->
                            <form action="" method="post" class="kt-form" id="kt_user_add_form">

                                <!--begin: Form Wizard Step 1-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content"
                                     data-ktwizard-state="current">
                                    <div class="kt-heading kt-heading--md">Applicant's Details</div>
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-wizard-v4__form">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="kt-section__body">

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Applicant
                                                                Name <span
                                                                        style="color: #dc3545; font-size: 18px;">* </span></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input id="name" name="name" class="form-control"
                                                                       type="text" placeholder="Enter your name"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Employee
                                                                Code <span
                                                                        style="color: #dc3545; font-size: 18px;">* </span></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control" id="emp_code"
                                                                       name="emp_code" type="text"
                                                                       placeholder="Applicant's Employee Code" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Designation
                                                                <span style="color: #dc3545; font-size: 18px;">* </span></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input class="form-control" id="designation"
                                                                       name="designation" type="text"
                                                                       placeholder="Enter your designation" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Division
                                                                <span style="color: #dc3545; font-size: 18px;">* </span></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select id="division" name="division"
                                                                        class="form-control" required>
                                                                    <option value="" hidden="true">Select Applicant's
                                                                        Division
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
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Extension
                                                                No.</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                                class="input-group-text"><i
                                                                                    class="la la-phone"></i></span>
                                                                    </div>
                                                                    <input id="ext" name="ext" type="text"
                                                                           class="form-control"
                                                                           placeholder="Extension Number"
                                                                           aria-describedby="basic-addon1">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 1-->

                                <!--begin: Form Wizard Step 2-->
                                <div class="kt-wizard-v4__content" data-ktwizard-type="step-content">
                                    <div class="kt-section kt-section--first">
                                        <div class="kt-wizard-v4__form">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="kt-section__body">
                                                        <div class="form-group row">
                                                            <div class="col-lg-9 col-xl-6">
                                                                <h3 class="kt-section__title kt-section__title-md">Issue
                                                                    Details and Submission</h3>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">What's the
                                                                Issue ? <span
                                                                        style="color: #dc3545; font-size: 18px;">* </span></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <input id="issue" name="issue" class="form-control"
                                                                       type="text"
                                                                       placeholder="Please tell us what went wrong"
                                                                       required>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Category of
                                                                the Issue <span
                                                                        style="color: #dc3545; font-size: 18px;">* </span></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select id="cat_issue" name="cat_issue"
                                                                        class="form-control" required>
                                                                    <option value="" hidden="true">Select Issue
                                                                        Category
                                                                    </option>
                                                                    <option value="Software Issue">Software Issue</option>
                                                                    <option value="Hardware Issue">Hardware Issue</option>
                                                                    <option value="Network Issue">Network Issue</option>
                                                                    <option value="Printer Issue">Printer Issue</option>
                                                                    <option value="General Issue">General Issue</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Asset Code
                                                                <span style="color: #dc3545; font-size: 18px;">* </span></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                                class="input-group-text"><i
                                                                                    class="la la-cube"></i></span></div>
                                                                    <input name="asst_code" id="asst_code" type="text"
                                                                           class="form-control"
                                                                           placeholder="Enter the asset code"
                                                                           aria-describedby="basic-addon1" required>
                                                                </div>
                                                                <span class="form-text text-muted">Please enter the asset code of the particular device.</span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Priority
                                                                <span style="color: #dc3545; font-size: 18px;">* </span></label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <select id="priority" name="priority"
                                                                        class="form-control" required>
                                                                    <option value="" hidden="true">Select Priority
                                                                    </option>
                                                                    <option value="Low">Low</option>
                                                                    <option value="Medium">Medium</option>
                                                                    <option value="Critical">Critical</option>
                                                                </select>
                                                                <span class="form-text text-muted">Is it an urgent ?</span>
                                                            </div>
                                                        </div>


                                                        <p>
                                                            <br>
                                                            <span style="color: #dc3545; font-size: 14px;">- &nbsp; Note that this ticket should approved by an Authorized Officer in your division after the submission.</span>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--end: Form Wizard Step 2-->


                                <!--begin: Form Actions -->
                                <div class="kt-form__actions">
                                    <div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                         data-ktwizard-type="action-prev">
                                        Previous
                                    </div>

                                    <input type="submit" id="submitTicket" name="submitTicket"
                                           class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u">


                                    <div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"
                                         data-ktwizard-type="action-next">
                                        Next Step
                                    </div>
                                </div>

                                <!--end: Form Actions -->
                            </form>
                            <?php

                            if (isset($_POST['submitTicket'])) {

                                $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
                                socket_connect($sock, "8.8.8.8", 53);
                                socket_getsockname($sock, $name); // $name passed by reference

                                $localAddr = $name;

                                date_default_timezone_set('Asia/Colombo');

                                $name = $_POST['name'];
                                $emp_code = $_POST['emp_code'];
                                $designation = $_POST['designation'];
                                $division = $_POST['division'];
                                $ext = $_POST['ext'];
                                $issue = $_POST['issue'];
                                $cat_issue = $_POST['cat_issue'];
                                $asst_code = $_POST['asst_code'];
                                $priority = $_POST['priority'];
                                $date = date("l jS \of F Y h:i:s A");
                                $status = "Approval Required";

                                $query = "INSERT INTO task(assigned_by, emp_code, assigned_date, issue, category, status, designation, division, extension_no, priority, asset_code, ip_address) VALUES('$name','$emp_code','$date','$issue','$cat_issue','$status','$designation','$division','$ext','$priority','$asst_code','$localAddr')";

                                $create_query = mysqli_query($con, $query);

                                if ($create_query) {

                                    echo '<meta http-equiv=Refresh content="0;url=ticket_success.php">';

                                } else {
                                    echo " <div class='alert alert-solid-danger alert-bold' role='alert'>";
                                    echo " <div class='alert-text'>Something went wrong.</div>";
                                    echo " </div>";
                                }
                            }

                            ?>
                            <!--end: Form Wizard Form-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>


<?php include 'include/footer.php'; ?>
