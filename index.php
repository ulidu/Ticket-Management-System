<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<!-- begin:: Content -->

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="row">

        <div style="cursor: pointer;" onclick="location.href='task_add.php';" class="col-lg-3">
            <div class="kt-portlet kt-iconbox kt-iconbox--brand kt-iconbox--animate-slower">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                          fill="#000000"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="task_add.php">Add a New Ticket</a>
                            </h3>
                            <div class="kt-iconbox__content">
                                <a style="color: #9392a0" class="kt-link" href="task_add.php">Add a New Job</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="cursor: pointer;" onclick="location.href='task_list.php';" class="col-lg-3">
            <div class="kt-portlet kt-iconbox kt-iconbox--success kt-iconbox--animate-slower">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
                                    <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="task_list.php">View all Tickets</a>
                            </h3>
                            <div class="kt-iconbox__content">
                                <a style="color: #9392a0" class="kt-link" href="task_list.php">List of all Tickets</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="cursor: pointer;" onclick="location.href='user_list.php';" class="col-lg-3">
            <div class="kt-portlet kt-iconbox kt-iconbox--primary kt-iconbox--animate-slower">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                          fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="user_list.php">Manage Users</a>
                            </h3>
                            <div class="kt-iconbox__content">
                                <a style="color: #9392a0" class="kt-link" href="user_list.php">User Accounts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="cursor: pointer;" onclick="location.href='reports.php';" class="col-lg-3">
            <div class="kt-portlet kt-iconbox kt-iconbox--warning kt-iconbox--animate-slower">
                <div class="kt-portlet__body">
                    <div class="kt-iconbox__body">
                        <div class="kt-iconbox__icon">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                 viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
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
                                <a class="kt-link" href="reports.php">Reports</a>
                            </h3>
                            <div class="kt-iconbox__content">
                                <a style="color: #9392a0" class="kt-link" href="reports.php">Generate a Summary</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-6">

            <!--begin:: Widgets/Support Cases-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Issue Categories <small>Past 3 months</small>
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

                            <!--begin::Nav-->
                            <ul class="kt-nav">


                                <li class="kt-nav__item">
                                    <a onclick="print()" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-printer"></i>
                                        <span class="kt-nav__link-text">Print</span>
                                    </a>
                                </li>

                            </ul>

                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget16">
                        <div class="kt-widget16__items">
                            <div class="kt-widget16__item">
														<span class="kt-widget16__sceduled">
															Category
														</span>
                                <span class="kt-widget16__amount">
															Amount
														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Software
														</span>
                                <span class="kt-widget16__price  kt-font-brand">

                                    <?php

                                    date_default_timezone_set('Asia/Colombo');
                                    $date = date('Y-m-d H:i:s');
                                    $time = date('H:i:s');
                                    $today_d_c1 = $date;
                                    $d2 = date('Y-m-d', strtotime('-90 days'));
                                    $back_3_months = $d2 . ' ' . $time;

                                    $count_all_cat = "SELECT * FROM task where category = 'Software Issue' and assigned_date between '$back_3_months' and '$today_d_c1'";

                                    if ($count_all_cat_run = mysqli_query($con, $count_all_cat)) {

                                        $count_cat_software = mysqli_num_rows($count_all_cat_run);
                                        printf("%d", $count_cat_software);
                                        mysqli_free_result($count_all_cat_run);

                                    }

                                    ?>

														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Hardware
														</span>
                                <span class="kt-widget16__price  kt-font-success">
															<?php

                                                            date_default_timezone_set('Asia/Colombo');
                                                            $date = date('Y-m-d H:i:s');
                                                            $time = date('H:i:s');
                                                            $today_d_c1 = $date;
                                                            $d2 = date('Y-m-d', strtotime('-90 days'));
                                                            $back_3_months = $d2 . ' ' . $time;

                                                            $count_all_cat = "SELECT * FROM task where category = 'Hardware Issue' and assigned_date between '$back_3_months' and '$today_d_c1'";

                                                            if ($count_all_cat_run = mysqli_query($con, $count_all_cat)) {

                                                                $count_cat_hardware = mysqli_num_rows($count_all_cat_run);
                                                                printf("%d", $count_cat_hardware);
                                                                mysqli_free_result($count_all_cat_run);

                                                            }

                                                            ?>
														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Networking
														</span>
                                <span class="kt-widget16__price  kt-font-danger">
															<?php

                                                            date_default_timezone_set('Asia/Colombo');
                                                            $date = date('Y-m-d H:i:s');
                                                            $time = date('H:i:s');
                                                            $today_d_c1 = $date;
                                                            $d2 = date('Y-m-d', strtotime('-90 days'));
                                                            $back_3_months = $d2 . ' ' . $time;

                                                            $count_all_cat = "SELECT * FROM task where category = 'Network Issue' and assigned_date between '$back_3_months' and '$today_d_c1'";

                                                            if ($count_all_cat_run = mysqli_query($con, $count_all_cat)) {

                                                                $count_cat_network = mysqli_num_rows($count_all_cat_run);
                                                                printf("%d", $count_cat_network);
                                                                mysqli_free_result($count_all_cat_run);

                                                            }

                                                            ?>
														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Printers
														</span>
                                <span class="kt-widget16__price  kt-font-warning">
														<?php

                                                        date_default_timezone_set('Asia/Colombo');
                                                        $date = date('Y-m-d H:i:s');
                                                        $time = date('H:i:s');
                                                        $today_d_c1 = $date;
                                                        $d2 = date('Y-m-d', strtotime('-90 days'));
                                                        $back_3_months = $d2 . ' ' . $time;

                                                        $count_all_cat = "SELECT * FROM task where category = 'Printer Issue' and assigned_date between '$back_3_months' and '$today_d_c1'";

                                                        if ($count_all_cat_run = mysqli_query($con, $count_all_cat)) {

                                                            $count_cat_printer = mysqli_num_rows($count_all_cat_run);
                                                            printf("%d", $count_cat_printer);
                                                            mysqli_free_result($count_all_cat_run);

                                                        }

                                                        ?>
														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															General
														</span>
                                <span class="kt-widget16__price  kt-font-primary">
															<?php

                                                            date_default_timezone_set('Asia/Colombo');
                                                            $date = date('Y-m-d H:i:s');
                                                            $time = date('H:i:s');
                                                            $today_d_c1 = $date;
                                                            $d2 = date('Y-m-d', strtotime('-90 days'));
                                                            $back_3_months = $d2 . ' ' . $time;

                                                            $count_all_cat = "SELECT * FROM task where category = 'General Issue' and assigned_date between '$back_3_months' and '$today_d_c1'";

                                                            if ($count_all_cat_run = mysqli_query($con, $count_all_cat)) {

                                                                $count_cat_general = mysqli_num_rows($count_all_cat_run);
                                                                printf("%d", $count_cat_general);
                                                                mysqli_free_result($count_all_cat_run);

                                                            }

                                                            ?>
														</span>

                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Other
														</span>
                                <span class="kt-widget16__price  kt-font-dark">
															<?php

                                                            date_default_timezone_set('Asia/Colombo');
                                                            $date = date('Y-m-d H:i:s');
                                                            $time = date('H:i:s');
                                                            $today_d_c1 = $date;
                                                            $d2 = date('Y-m-d', strtotime('-90 days'));
                                                            $back_3_months = $d2 . ' ' . $time;

                                                            $count_all_cat = "SELECT * FROM task where category = 'Other' and assigned_date between '$back_3_months' and '$today_d_c1'";

                                                            if ($count_all_cat_run = mysqli_query($con, $count_all_cat)) {

                                                                $count_cat_other = mysqli_num_rows($count_all_cat_run);
                                                                printf("%d", $count_cat_other);
                                                                mysqli_free_result($count_all_cat_run);

                                                            }

                                                            ?>
														</span>

                            </div>
                        </div>
                        <div class="kt-widget16__stats">
                            <div class="kt-widget16__visual">
                                <div id="kt_chart_support_tickets" style="height: 160px; width: 160px;">
                                </div>
                            </div>
                            <div class="kt-widget16__legends">
                                <div style="margin-bottom: -5px;" class="kt-widget16__legend">
                                    <span class="kt-widget16__bullet kt-bg-brand"></span>
                                    <span class="kt-widget16__stat kt-font-sm">Software</span>
                                </div>
                                <div style="margin-bottom: -5px;" class="kt-widget16__legend">
                                    <span class="kt-widget16__bullet kt-bg-success"></span>
                                    <span class="kt-widget16__stat kt-font-sm">Hardware</span>
                                </div>
                                <div style="margin-bottom: -5px;" class="kt-widget16__legend">
                                    <span class="kt-widget16__bullet kt-bg-danger"></span>
                                    <span class="kt-widget16__stat kt-font-sm">Networking</span>
                                </div>
                                <div style="margin-bottom: -5px;" class="kt-widget16__legend">
                                    <span class="kt-widget16__bullet kt-bg-warning"></span>
                                    <span class="kt-widget16__stat kt-font-sm">Printer</span>
                                </div>
                                <div style="margin-bottom: -5px;" class="kt-widget16__legend">
                                    <span class="kt-widget16__bullet kt-bg-primary"></span>
                                    <span class="kt-widget16__stat kt-font-sm">General</span>
                                </div>
                                <div style="margin-bottom: -5px;" class="kt-widget16__legend">
                                    <span class="kt-widget16__bullet kt-bg-dark"></span>
                                    <span class="kt-widget16__stat kt-font-sm">Other</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Support Stats-->
        </div>

        <div class="col-6">
            <!--Begin::Section-->
            <div class="kt-portlet">
                <div class="kt-portlet__body  kt-portlet__body--fit">
                    <div class="row row-no-padding ">
                        <div class="col-12">

                            <!--begin:: Widgets/Daily Sales-->
                            <div class="kt-portlet kt-portlet--height-fluid">
                                <div class="kt-widget14">
                                    <div class="kt-widget14__header kt-margin-b-30">
                                        <h3 class="kt-widget14__title">
                                            Daily Tickets for 3 Weeks
                                        </h3>
                                        <span class="kt-widget14__desc">
															Check out each column for more details
														</span>

                                    </div>
                                    <div class="kt-widget14__chart" style="height:215px;">
                                        <canvas id="kt_chart_daily_sales"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!--end:: Widgets/Daily Sales-->
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>


    <div class="row">

        <div class="col-4">
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
                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                          fill="#000000"/>
                                    <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
                                    <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">23 Tickets</a>
                            </h3>
                            <div class="kt-iconbox__content">
                                All Tickets So far
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-4">
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
                                <a class="kt-link" href="#">8 Tickets</a>
                            </h3>
                            <div class="kt-iconbox__content">
                                In Progress
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-4">
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
                                    <path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z"
                                          fill="#000000"/>
                                    <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                          fill="#000000"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">15 Tickets</a>
                            </h3>
                            <div class="kt-iconbox__content">
                                Completed
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="row">

        <div class="col-12">

            <!--begin:: Widgets/Best Sellers-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Latest Feedback
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
                                    All time
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget5_tab3_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-widget5">


                                    <?php

                                    date_default_timezone_set('Asia/Colombo');

                                    $string = date("Y-m-d");
                                    $date = DateTime::createFromFormat("Y-m-d", $string);

                                    $date = date('Y-m-d H:i:s');
                                    $time = date('H:i:s');
                                    $today_d_c1 = $date;

                                    $d2 = date('Y-m-d', strtotime('-30 days'));
                                    $back_30_days = $d2 . ' ' . $time;

                                    $feed_query = "SELECT * FROM feedback ORDER BY feedbackID desc";
                                    $run_feed_query = mysqli_query($con, $feed_query);

                                    while ($row_feed_query = mysqli_fetch_assoc($run_feed_query)) {

                                        $feedbackID = $row_feed_query['feedbackID'];
                                        $name_added = $row_feed_query['name_added'];
                                        $feedback = $row_feed_query['feedback'];
                                        $extension = $row_feed_query['extension'];
                                        $date_feedback = $row_feed_query['date_feedback'];
                                        $client_ip = $row_feed_query['client_ip'];

                                        if ($name_added == '') {
                                            $name_added = 'Anonymous';
                                        }
                                        if ($extension == '') {
                                            $extension = 'Anonymous';
                                        }

                                        ?>


                                        <div class="kt-widget5__item">
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__pic">
                                                    <img class="kt-widget7__img" src="assets/media/logos/fb.png"
                                                         alt="">
                                                </div>
                                                <div class="kt-widget5__section">
                                                    <a href="javascript:;" class="kt-widget5__title">
                                                        By <?php echo $name_added; ?>
                                                    </a>
                                                    <p class="kt-widget5__desc">
                                                        Message : <span class="kt-font-dark"><?php echo $feedback; ?></span>
                                                    </p>
                                                    <div class="kt-widget5__info">
                                                        <span>Date and Time: </span>
                                                        <span class="kt-font-info"> <?php echo $date_feedback; ?></span>
                                                        <span>IP Address : </span>
                                                        <span class="kt-font-info" style="font-family: 'Fira Code'"> <?php echo $client_ip; ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-widget5__content">
                                                <div class="kt-widget5__stats">
                                                    <span class="kt-widget5__number"> <?php echo $extension; ?></span>
                                                    <span class="kt-widget5__votes">Extension No.</span>
                                                </div>
                                            </div>
                                        </div>


                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Best Sellers-->
        </div>

    </div>

    <div class="row">

        <div class="col-12">

            <!--begin:: Widgets/Audit Log-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Event Log
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab11_content"
                                   role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab12_content" role="tab">
                                    Week
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab13_content" role="tab">
                                    Month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab14_content" role="tab">
                                    All
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget4_tab11_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">

                                        <?php

                                        date_default_timezone_set('Asia/Colombo');

                                        $string = date("Y-m-d");
                                        $date = DateTime::createFromFormat("Y-m-d", $string);

                                        $date = date('Y-m-d H:i:s');
                                        $time = date('H:i:s');
                                        $today_d_c1 = $date;

                                        $d2 = date('Y-m-d', strtotime('-1 day'));
                                        $back_1_day = $d2 . ' ' . $time;

                                        $event_log = "SELECT * FROM log where log_date_time between '$back_1_day' and '$today_d_c1' ORDER BY logID desc";
                                        $run_event_log = mysqli_query($con, $event_log);

                                        while ($row_event_log = mysqli_fetch_assoc($run_event_log)) {

                                            $logID = $row_event_log['logID'];
                                            $log_userID = $row_event_log['log_userID'];
                                            $log_date_time = $row_event_log['log_date_time'];
                                            $log_action = $row_event_log['log_action'];
                                            $log_emp_code = $row_event_log['log_emp_code'];

                                            ?>

                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge

                                               <?php if (strpos($log_action, 'Disabled the user') !== false) { ?>
                                                    kt-list-timeline__badge--danger
                                               <?php } elseif (strpos($log_action, 'Updated an existing user') !== false) { ?>
                                                    kt-list-timeline__badge--brand
                                                <?php } elseif (strpos($log_action, 'New ticket added') !== false) { ?>
                                                    kt-list-timeline__badge--success
                                                <?php } elseif (strpos($log_action, 'Rejected and Deleted the ticket') !== false) { ?>
                                                    kt-list-timeline__badge--warning
                                                <?php } elseif (strpos($log_action, 'Updated an existing user') !== false) { ?>
                                                    kt-list-timeline__badge--success
                                                <?php } elseif (strpos($log_action, 're-assigned the previously assigned') !== false) { ?>
                                                    kt-list-timeline__badge--info
                                                <?php } else { ?>
                                                    kt-list-timeline__badge--primary
                                                <?php } ?> ">

                                                </span>
                                                <span href="" class="kt-list-timeline__text"><?php echo $log_action; ?>

                                                    <?php if (strpos($log_action, 'Deleted') !== false) { ?>
                                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Deleted</span>
                                                    <?php } elseif (strpos($log_action, 'Disabled') !== false) { ?>
                                                        <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">Disabled</span>
                                                    <?php } ?>

                                            </span>
                                                <span class="kt-list-timeline__time"><?php echo $log_date_time; ?> </span>
                                            </div>

                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab12_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">

                                        <?php

                                        date_default_timezone_set('Asia/Colombo');

                                        $string = date("Y-m-d");
                                        $date = DateTime::createFromFormat("Y-m-d", $string);

                                        $date = date('Y-m-d H:i:s');
                                        $time = date('H:i:s');
                                        $today_d_c1 = $date;

                                        $d2 = date('Y-m-d', strtotime('-7 days'));
                                        $back_7_days = $d2 . ' ' . $time;

                                        $event_log = "SELECT * FROM log where log_date_time between '$back_7_days' and '$today_d_c1' ORDER BY logID desc";
                                        $run_event_log = mysqli_query($con, $event_log);

                                        while ($row_event_log = mysqli_fetch_assoc($run_event_log)) {

                                            $logID = $row_event_log['logID'];
                                            $log_userID = $row_event_log['log_userID'];
                                            $log_date_time = $row_event_log['log_date_time'];
                                            $log_action = $row_event_log['log_action'];
                                            $log_emp_code = $row_event_log['log_emp_code'];

                                            ?>

                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge

                                               <?php if (strpos($log_action, 'Disabled the user') !== false) { ?>
                                                    kt-list-timeline__badge--danger
                                               <?php } elseif (strpos($log_action, 'Updated an existing user') !== false) { ?>
                                                    kt-list-timeline__badge--brand
                                                <?php } elseif (strpos($log_action, 'New ticket added') !== false) { ?>
                                                    kt-list-timeline__badge--success
                                                <?php } elseif (strpos($log_action, 'Rejected and Deleted the ticket') !== false) { ?>
                                                    kt-list-timeline__badge--warning
                                                <?php } elseif (strpos($log_action, 'Updated an existing user') !== false) { ?>
                                                    kt-list-timeline__badge--success
                                                <?php } elseif (strpos($log_action, 're-assigned the previously assigned') !== false) { ?>
                                                    kt-list-timeline__badge--info
                                                <?php } else { ?>
                                                    kt-list-timeline__badge--primary
                                                <?php } ?> ">

                                                </span>
                                                <span href="" class="kt-list-timeline__text"><?php echo $log_action; ?>

                                                    <?php if (strpos($log_action, 'Deleted') !== false) { ?>
                                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Deleted</span>
                                                    <?php } elseif (strpos($log_action, 'Disabled') !== false) { ?>
                                                        <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">Disabled</span>
                                                    <?php } ?>

                                            </span>
                                                <span class="kt-list-timeline__time"><?php echo $log_date_time; ?> </span>
                                            </div>

                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab13_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">

                                        <?php

                                        date_default_timezone_set('Asia/Colombo');

                                        $string = date("Y-m-d");
                                        $date = DateTime::createFromFormat("Y-m-d", $string);

                                        $date = date('Y-m-d H:i:s');
                                        $time = date('H:i:s');
                                        $today_d_c1 = $date;

                                        $d2 = date('Y-m-d', strtotime('-30 days'));
                                        $back_30_days = $d2 . ' ' . $time;

                                        $event_log = "SELECT * FROM log where log_date_time between '$back_30_days' and '$today_d_c1' ORDER BY logID desc";
                                        $run_event_log = mysqli_query($con, $event_log);

                                        while ($row_event_log = mysqli_fetch_assoc($run_event_log)) {

                                            $logID = $row_event_log['logID'];
                                            $log_userID = $row_event_log['log_userID'];
                                            $log_date_time = $row_event_log['log_date_time'];
                                            $log_action = $row_event_log['log_action'];
                                            $log_emp_code = $row_event_log['log_emp_code'];

                                            ?>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge

                                               <?php if (strpos($log_action, 'Disabled the user') !== false) { ?>
                                                    kt-list-timeline__badge--danger
                                               <?php } elseif (strpos($log_action, 'Updated an existing user') !== false) { ?>
                                                    kt-list-timeline__badge--brand
                                                <?php } elseif (strpos($log_action, 'New ticket added') !== false) { ?>
                                                    kt-list-timeline__badge--success
                                                <?php } elseif (strpos($log_action, 'Rejected and Deleted the ticket') !== false) { ?>
                                                    kt-list-timeline__badge--warning
                                                <?php } elseif (strpos($log_action, 'Updated an existing user') !== false) { ?>
                                                    kt-list-timeline__badge--success
                                                <?php } elseif (strpos($log_action, 're-assigned the previously assigned') !== false) { ?>
                                                    kt-list-timeline__badge--info
                                                <?php } else { ?>
                                                    kt-list-timeline__badge--primary
                                                <?php } ?> ">

                                                </span>
                                                <span href="" class="kt-list-timeline__text"><?php echo $log_action; ?>

                                                    <?php if (strpos($log_action, 'Deleted') !== false) { ?>
                                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Deleted</span>
                                                    <?php } elseif (strpos($log_action, 'Disabled') !== false) { ?>
                                                        <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">Disabled</span>
                                                    <?php } ?>

                                            </span>
                                                <span class="kt-list-timeline__time"><?php echo $log_date_time; ?> </span>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab14_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">

                                        <?php

                                        date_default_timezone_set('Asia/Colombo');

                                        $string = date("Y-m-d");
                                        $date = DateTime::createFromFormat("Y-m-d", $string);

                                        $date = date('Y-m-d H:i:s');
                                        $time = date('H:i:s');
                                        $today_d_c1 = $date;

                                        $d2 = date('Y-m-d', strtotime('-30 days'));
                                        $back_30_days = $d2 . ' ' . $time;

                                        $event_log = "SELECT * FROM log ORDER BY logID desc";
                                        $run_event_log = mysqli_query($con, $event_log);

                                        while ($row_event_log = mysqli_fetch_assoc($run_event_log)) {

                                            $logID = $row_event_log['logID'];
                                            $log_userID = $row_event_log['log_userID'];
                                            $log_date_time = $row_event_log['log_date_time'];
                                            $log_action = $row_event_log['log_action'];
                                            $log_emp_code = $row_event_log['log_emp_code'];

                                            ?>
                                            <div class="kt-list-timeline__item">
                                                <span class="kt-list-timeline__badge

                                               <?php if (strpos($log_action, 'Disabled the user') !== false) { ?>
                                                    kt-list-timeline__badge--danger
                                               <?php } elseif (strpos($log_action, 'Updated an existing user') !== false) { ?>
                                                    kt-list-timeline__badge--brand
                                                <?php } elseif (strpos($log_action, 'New ticket added') !== false) { ?>
                                                    kt-list-timeline__badge--success
                                                <?php } elseif (strpos($log_action, 'Rejected and Deleted the ticket') !== false) { ?>
                                                    kt-list-timeline__badge--warning
                                                <?php } elseif (strpos($log_action, 'Updated an existing user') !== false) { ?>
                                                    kt-list-timeline__badge--success
                                                <?php } elseif (strpos($log_action, 're-assigned the previously assigned') !== false) { ?>
                                                    kt-list-timeline__badge--info
                                                <?php } else { ?>
                                                    kt-list-timeline__badge--primary
                                                <?php } ?> ">

                                                </span>
                                                <span href="" class="kt-list-timeline__text"><?php echo $log_action; ?>

                                                    <?php if (strpos($log_action, 'Deleted') !== false) { ?>
                                                        <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Deleted</span>
                                                    <?php } elseif (strpos($log_action, 'Disabled') !== false) { ?>
                                                        <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">Disabled</span>
                                                    <?php } ?>

                                            </span>
                                                <span class="kt-list-timeline__time"><?php echo $log_date_time; ?> </span>
                                            </div>
                                        <?php } ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Audit Log-->
        </div>
    </div>
</div>
<!-- end:: Content -->
</div>

<?php include 'include/footer.php'; ?>

<script>

    // Support Tickets Chart.
    // Based on Morris plugin - http://morrisjs.github.io/morris.js/
    var supportCases = function () {
        if ($('#kt_chart_support_tickets').length == 0) {
            return;
        }

        var software_tickets = <?php echo $count_cat_software; ?>;
        var hardware_tickets = <?php echo $count_cat_hardware; ?>;
        var network_tickets = <?php echo $count_cat_network; ?>;
        var printer_tickets = <?php echo $count_cat_printer; ?>;
        var general_tickets = <?php echo $count_cat_general; ?>;
        var other_tickets = <?php echo $count_cat_other; ?>;

        var total_tickets = software_tickets + hardware_tickets + network_tickets + printer_tickets + general_tickets + other_tickets;

        var software_percentage = (software_tickets / total_tickets) * 100;
        var hardware_percentage = (hardware_tickets / total_tickets) * 100;
        var network_percentage = (network_tickets / total_tickets) * 100;
        var printer_percentage = (printer_tickets / total_tickets) * 100;
        var general_percentage = (general_tickets / total_tickets) * 100;
        var other_percentage = (other_tickets / total_tickets) * 100;

        Morris.Donut({
            element: 'kt_chart_support_tickets',
            data: [{
                label: "Other %",
                value: other_percentage.toFixed(1)
            },
                {
                    label: "General %",
                    value: general_percentage.toFixed(1)
                },
                {
                    label: "Printers %",
                    value: printer_percentage.toFixed(1)
                },
                {
                    label: "Networking %",
                    value: network_percentage.toFixed(1)
                },
                {
                    label: "Hardware %",
                    value: hardware_percentage.toFixed(1)
                },
                {
                    label: "Software %",
                    value: software_percentage.toFixed(1)
                }
            ],
            labelColor: '#a7a7c2',
            colors: [
                KTApp.getStateColor('dark'),
                KTApp.getStateColor('primary'),
                KTApp.getStateColor('warning'),
                KTApp.getStateColor('danger'),
                KTApp.getStateColor('success'),
                KTApp.getStateColor('brand')
            ]
            //formatter: function (x) { return x + "%"}
        });
    }

</script>

<script>

    <?php

    date_default_timezone_set('Asia/Colombo');
    $date = date('Y-m-d H:i:s');
    $time = date('H:i:s');
    $today_d_c1 = $date;
    $d2 = date('Y-m-d', strtotime('-15 days'));
    $back_15_days = $d2 . ' ' . $time;
    $back_15_days_wt = $d2;

    $dataset_completed_tickets = array();
    $dataset_received_tickets = array();
    $dataset_date_labels = array();

    for ($k = 15; $k > 0; $k--) {

        $back_15 = date('Y-m-d', strtotime(-$k . ' days'));
        $back_15_dates = $back_15 . ' ' . '00:00:00';
        $minus_1 = $k - 1;
        $back_15_minus_1 = date('Y-m-d', strtotime(-$minus_1 . ' days'));
        $back_15_dates_minus = $back_15_minus_1 . ' ' . '00:00:00';

        $back_date = date('Y-m-d', strtotime(-$k . ' days'));

        $count_completed_t = "SELECT * FROM task where status = 'Completed' and assigned_date between '$back_15_dates' and '$back_15_minus_1'";
        $count_received_t = "SELECT * FROM task where status != 'Approval Required' and assigned_date between '$back_15_dates' and '$back_15_minus_1'";

        if ($count_completed_t_run = mysqli_query($con, $count_completed_t)) {
            $completed_tickets_to_push = mysqli_num_rows($count_completed_t_run);
            array_push($dataset_completed_tickets, $completed_tickets_to_push);
        }

        if ($count_received_t_run = mysqli_query($con, $count_received_t)) {
            $received_tickets_to_push = mysqli_num_rows($count_received_t_run);
            array_push($dataset_received_tickets, $received_tickets_to_push);
        }

        array_push($dataset_date_labels, $back_date);

    }

    $js_array_completed = json_encode($dataset_completed_tickets);
    $js_array_received = json_encode($dataset_received_tickets);
    $js_array_labels = json_encode($dataset_date_labels);

    mysqli_free_result($count_completed_t_run);
    mysqli_free_result($count_received_t_run);

    //echo "console.log(".json_encode($js_array_completed).");";
    //echo "console.log(".json_encode($js_array_received).");";
    //echo "console.log(".json_encode($js_array_labels).");";

    ?>

    // Daily Tickets chart.
    // Based on Chartjs plugin - http://www.chartjs.org/
    var dailySales = function () {
        var chartContainer = KTUtil.getByID('kt_chart_daily_sales');

        if (!chartContainer) {
            return;
        }

        var chartData = {
            labels: <?php echo $js_array_labels; ?>,
            datasets: [{
                label: 'Completed Tickets',
                backgroundColor: KTApp.getStateColor('success'),
                data: <?php echo $js_array_completed; ?>,
                type: 'line'
            }, {
                label: 'Received Tickets',
                backgroundColor: 'rgba(217,223,250,0.56)',
                data: <?php echo $js_array_received; ?>,
                type: 'line'
            }]
        };

        var chart = new Chart(chartContainer, {
            type: 'bar',
            data: chartData,
            options: {
                title: {
                    display: false,
                },
                tooltips: {
                    intersect: false,
                    mode: 'nearest',
                    xPadding: 10,
                    yPadding: 10,
                    caretPadding: 10
                },
                legend: {
                    display: true
                },
                responsive: true,
                maintainAspectRatio: false,
                barRadius: 4,
                scales: {
                    xAxes: [{
                        display: false,
                        gridLines: false,
                        stacked: true
                    }],
                    yAxes: [{
                        display: false,
                        stacked: false,
                        gridLines: false
                    }]
                },
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 0,
                        bottom: 0
                    }
                }
            }
        });
    }

</script>