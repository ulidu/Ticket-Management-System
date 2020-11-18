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
                        <i class="flaticon2-calendar"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>


    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <!--begin::Entry-->
    <div class="col-12">
        <!--begin::Container-->
        <div class="container col-12">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Card Body-->
                <div class="card-body p-0">
                    <!--begin::Wizard 5-->
                    <div class="wizard wizard-5 d-flex flex-column flex-lg-row flex-row-fluid" id="kt_wizard">
                        <!--begin::Aside-->
                        <div class="wizard-aside bg-white d-flex flex-column flex-row-auto w-100 w-lg-300px w-xl-400px w-xxl-500px">
                            <!--begin::Aside Top-->
                            <div class="d-flex flex-column-fluid flex-column px-xxl-30 px-10">
                                <!--begin: Wizard Nav-->
                                <div class="wizard-nav d-flex d-flex justify-content-center pt-10 pt-lg-20 pb-5">
                                    <!--begin::Wizard Steps-->
                                    <div class="wizard-steps">
                                        <!--begin::Wizard Step 1 Nav-->
                                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                            <div class="wizard-wrapper">
                                                <div class="wizard-icon">
                                                    <i class="wizard-check fa fa-check"></i>
                                                    <span class="wizard-number">1</span>
                                                </div>
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">Applicant Details</h3>
                                                    <div class="wizard-desc">Applicant's Information</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 1 Nav-->
                                        <!--begin::Wizard Step 2 Nav-->
                                        <div class="wizard-step" data-wizard-type="step">
                                            <div class="wizard-wrapper">
                                                <div class="wizard-icon">
                                                    <i class="wizard-check fa fa-check"></i>
                                                    <span class="wizard-number">2</span>
                                                </div>
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">What's Wrong ?</h3>
                                                    <div class="wizard-desc">Tell us What Went Wrong</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 2 Nav-->
                                        <!--begin::Wizard Step 3 Nav-->
                                        <div class="wizard-step" data-wizard-type="step">
                                            <div class="wizard-wrapper">
                                                <div class="wizard-icon">
                                                    <i class="wizard-check fa fa-check"></i>
                                                    <span class="wizard-number">3</span>
                                                </div>
                                                <div class="wizard-label">
                                                    <h3 class="wizard-title">Submit the Ticket</h3>
                                                    <div class="wizard-desc">Review and Submission</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 3 Nav-->
                                    </div>
                                    <!--end::Wizard Steps-->
                                </div>
                                <!--end: Wizard Nav-->
                            </div>
                            <!--end::Aside Top-->
                            <!--begin::Aside Bottom-->
                            <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-y-bottom bgi-position-x-center bgi-size-contain pt-2 pt-lg-5 h-350px"
                                 style="transform: scale(-1,1); background-image: url(assets/media/logos/copy.svg)"></div>
                            <!--end::Aside Bottom-->
                        </div>
                        <!--begin::Aside-->
                        <!--begin::Content-->
                        <div class="wizard-content bg-gray-100 d-flex flex-column flex-row-fluid py-15 px-5 px-lg-10">
                            <!--begin::Title-->

                            <!--end::Title-->
                            <!--begin::Form-->
                            <div class="d-flex justify-content-center flex-row-fluid">
                                <form action="task_add_app.php" method="post" class="pb-5 w-100 w-md-450px w-lg-500px" id="kt_form">
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <!--begin::Title-->
                                        <div class="pb-10 pb-lg-15">
                                            <h3 class="font-weight-bolder text-dark font-size-h2">New Ticket</h3>
                                            <div class="text-muted font-weight-bold font-size-h5">Enter the following
                                                details and
                                                <a href="javascript:;" class="text-primary font-weight-bolder">Submit
                                                    Ticket</a></div>
                                        </div>
                                        <!--begin::Title-->
                                        <!--begin::Form Group-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Applicant
                                                Name <span style="color: #dc3545; font-size: 18px;">* </span></label>

                                            <input id="name" name="name" class="form-control h-auto p-5 border-0 rounded-lg font-size-h6"
                                                   type="text" placeholder="Enter your name"
                                                   required>

                                        </div>
                                        <!--end::Form Group-->


                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <!--end::Form Group-->
                                                <div class="form-group">
                                                    <label class="font-size-h6 font-weight-bolder text-dark">Employee Code <span style="color: #dc3545; font-size: 18px;">* </span></label>


                                                    <input class="form-control h-auto p-5 border-0 rounded-lg font-size-h6" id="emp_code"
                                                           name="emp_code" type="text"
                                                           placeholder="Eg. XXXX" required>

                                                </div>
                                                <!--begin::Form Group-->
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <!--end::Form Group-->
                                                <div class="form-group">

                                                    <label class="font-size-h6 font-weight-bolder text-dark">Extension
                                                        No.</label>

                                                    <input id="ext" name="ext" type="text"
                                                           class="form-control h-auto p-5 border-0 rounded-lg font-size-h6"
                                                           placeholder="Nearest telephone"
                                                           aria-describedby="basic-addon1">



                                                </div>
                                                <!--end::Form Group-->
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Designation <span style="color: #dc3545; font-size: 18px;">* </span></label>

                                            <input class="form-control h-auto p-6 border-0 rounded-lg font-size-h6" id="designation"
                                                   name="designation" type="text"
                                                   placeholder="Applicant's designation" required>

                                        </div>

                                        <!--end::Form Group-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Division <span style="color: #dc3545; font-size: 18px;">* </span></label>

                                            <select id="division" name="division"
                                                    class="form-control h-auto p-5 border-0 rounded-lg font-size-h6" required>
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

                                                    <option value="<?php echo $division_name; ?>"><?php echo $division_name; ?></option>
                                                <?php } ?>
                                            </select>

                                        </div>
                                        <!--end::Form Group-->


                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Title-->
                                        <div class="pb-10 pb-lg-15">
                                            <h3 class="font-weight-bolder text-dark font-size-h2">What's the Issue ?</h3>
                                            <div class="text-muted font-weight-bold font-size-h4">Please tell us what went
                                                <a href="#" class="text-primary font-weight-bolder">wrong</a>
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Form Group-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Issue <span
                                                        style="color: #dc3545; font-size: 18px;">* </span></label>
                                            <input id="issue" name="issue" class="form-control h-auto p-5 border-0 rounded-lg font-size-h6"
                                                   type="text"
                                                   placeholder="Tell us about the issue"
                                                   required>
                                        </div>
                                        <!--begin::Form Group-->
                                        <!--begin::Form Group-->
                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Issue Category <span
                                                        style="color: #dc3545; font-size: 18px;">* </span></label>
                                            <select id="cat_issue" name="cat_issue"
                                                    class="form-control h-auto p-5 border-0 rounded-lg font-size-h6" required>
                                                <option value="" hidden="true">Select Category
                                                </option>
                                                <option value="Software Issue">Software Issue
                                                </option>
                                                <option value="Hardware Issue">Hardware Issue
                                                </option>
                                                <option value="Network Issue">Network Issue</option>
                                                <option value="Printer Issue">Printer Issue</option>
                                                <option value="General Issue">General Issue</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                        <!--begin::Form Group-->
                                        <!--end::Row-->
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <!--end::Form Group-->
                                                <div class="form-group">
                                                    <label class="font-size-h6 font-weight-bolder text-dark">Asset Code
                                                        <span style="color: #dc3545; font-size: 18px;">* </span></label>

                                                    <input name="asst_code" id="asst_code" type="text"
                                                           class="form-control h-auto p-5 border-0 rounded-lg font-size-h6"
                                                           placeholder="Device asset code"
                                                           aria-describedby="basic-addon1" required>

                                                </div>
                                                <!--begin::Form Group-->
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <!--end::Form Group-->
                                                <div class="form-group">
                                                    <label class="font-size-h6 font-weight-bolder text-dark">Priority
                                                        <span style="color: #dc3545; font-size: 18px;">* </span></label>

                                                    <select id="priority" name="priority"
                                                            class="form-control h-auto p-5 border-0 rounded-lg font-size-h6" required>
                                                        <option value="" hidden="true">Select Priority
                                                        </option>
                                                        <option class="kt-font-success font-weight-bold" value="Low">Low</option>
                                                        <option class="kt-font-warning font-weight-bold" value="Medium">Medium</option>
                                                        <option class="kt-font-danger font-weight-bold" value="Critical">Critical</option>
                                                    </select>
                                                </div>
                                                <!--end::Form Group-->
                                            </div>
                                        </div>
                                        <!--begin::Row-->
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Title-->
                                        <div class="pb-10 pb-lg-15">
                                            <h3 class="font-weight-bolder text-dark font-size-h2">Review</h3>
                                            <div class="text-muted font-weight-bold font-size-h4">Review and submit your ticket !
                                            </div>
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Section-->
                                        <h4 class="font-weight-bolder mb-3">Applicant Details :</h4>
                                        <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                                            <div>Applicant Name : <span class="font-weight-bold kt-font-dark" id="app_name_review"></span></div>
                                            <div>Employee Code : <span class="font-weight-bold kt-font-dark" id="emp_code_review"></span></div>
                                            <div>Extension No. : <span class="font-weight-bold kt-font-dark" id="ext_no_review"></span></div>
                                            <div>Designation : <span class="font-weight-bold kt-font-dark" id="designation_review"></span></div>
                                            <div>Division : <span class="font-weight-bold kt-font-dark" id="division_review"></span></div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->
                                        <h4 class="font-weight-bolder mb-3">Issue Details :</h4>
                                        <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                                            <div>Issue : <span class="font-weight-bold kt-font-dark" id="issue_review"></span></div>
                                            <div>Issue Category : <span class="font-weight-bold kt-font-dark" id="issue_cat_review"></span></div>
                                            <div>Asset Code : <span class="font-weight-bold kt-font-dark" id="asset_code_review"></span></div>
                                            <div>Priority : <span class="font-weight-bold kt-font-dark" id="priority_review"></span></div>
                                        </div>
                                        <!--end::Section-->
                                        <!--begin::Section-->

                                        <div class="text-dark-50 font-weight-bold line-height-lg mb-8">
                                            <span style="color: #dc3545; font-size: 14px;">Please note that this ticket should be approved by the Administrative Officer in your division after the submission.</span>

                                        </div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between pt-3">
                                        <div class="mr-2">
                                            <button type="button"
                                                    class="btn btn-light-primary font-weight-bolder font-size-h6 pl-6 pr-8 py-4 my-3 mr-3"
                                                    data-wizard-type="action-prev">
																<span class="svg-icon svg-icon-md mr-1">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Left-2.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"/>
																			<rect fill="#000000" opacity="0.3"
                                                                                  transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)"
                                                                                  x="14" y="7" width="2" height="10"
                                                                                  rx="1"/>
																			<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                                                  fill="#000000" fill-rule="nonzero"
                                                                                  transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)"/>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>Previous
                                            </button>
                                        </div>
                                        <div>
                                            <button type="submit" id="submitTicket" name="submitTicket"
                                                    class="btn btn-primary font-weight-bolder font-size-h6 pl-5 pr-8 py-4 my-3"
                                                    data-wizard-type="action-submit">Submit
                                                <span class="svg-icon svg-icon-md ml-2">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"/>
																			<rect fill="#000000" opacity="0.3"
                                                                                  transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                                                                  x="7.5" y="7.5" width="2" height="9"
                                                                                  rx="1"/>
																			<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                  fill="#000000" fill-rule="nonzero"
                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																		</g>
																	</svg>
                                                    <!--end::Svg Icon-->
																</span></button>
                                            <button type="button" id="action_next"
                                                    class="btn btn-primary font-weight-bolder font-size-h6 pl-8 pr-4 py-4 my-3"
                                                    data-wizard-type="action-next">Next Step
                                                <span class="svg-icon svg-icon-md ml-1">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Right-2.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg"
                                                                         xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                         width="24px" height="24px" viewBox="0 0 24 24"
                                                                         version="1.1">
																		<g stroke="none" stroke-width="1" fill="none"
                                                                           fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"/>
																			<rect fill="#000000" opacity="0.3"
                                                                                  transform="translate(8.500000, 12.000000) rotate(-90.000000) translate(-8.500000, -12.000000)"
                                                                                  x="7.5" y="7.5" width="2" height="9"
                                                                                  rx="1"/>
																			<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z"
                                                                                  fill="#000000" fill-rule="nonzero"
                                                                                  transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"/>
																		</g>
																	</svg>
                                                    <!--end::Svg Icon-->
																</span></button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>

                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Wizard 5-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

    <!-- end:: Content -->
</div>


<?php include 'include/footer.php'; ?>

<script>var KTAppSettings = {"breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400},
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="assets/plugins/wizard/prismjs.bundle.js"></script>
<script src="assets/plugins/wizard/scripts.bundle.js"></script>
<script src="assets/plugins/wizard/plugins.bundle.js"></script>
<script src="assets/js/pages/custom/wizard/wizard-5.js"></script>
