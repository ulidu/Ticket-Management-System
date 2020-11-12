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
                            Support Cases <small>premium clients</small>
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
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-download"></i>
                                        <span class="kt-nav__link-text">PDF</span>
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
															Type
														</span>
                                <span class="kt-widget16__amount">
															Amount
														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															EPS
														</span>
                                <span class="kt-widget16__price  kt-font-brand">
															+78,05%
														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															PDO
														</span>
                                <span class="kt-widget16__price  kt-font-success">
															21,700
														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															OPL Status
														</span>
                                <span class="kt-widget16__price  kt-font-danger">
															Negative
														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Priority
														</span>
                                <span class="kt-widget16__price  kt-font-brand">
															+500,200
														</span>
                            </div>
                            <div class="kt-widget16__item">
														<span class="kt-widget16__date">
															Net Prifit
														</span>
                                <span class="kt-widget16__price  kt-font-warning">
															$18,540,60
														</span>
                            </div>
                        </div>
                        <div class="kt-widget16__stats">
                            <div class="kt-widget16__visual">
                                <div id="kt_chart_support_tickets" style="height: 160px; width: 160px;">
                                </div>
                            </div>
                            <div class="kt-widget16__legends">
                                <div class="kt-widget16__legend">
                                    <span class="kt-widget16__bullet kt-bg-info"></span>
                                    <span class="kt-widget16__stat">20% Margins</span>
                                </div>
                                <div class="kt-widget16__legend">
                                    <span class="kt-widget16__bullet kt-bg-success"></span>
                                    <span class="kt-widget16__stat">80% Profit</span>
                                </div>
                                <div class="kt-widget16__legend">
                                    <span class="kt-widget16__bullet kt-bg-danger"></span>
                                    <span class="kt-widget16__stat">10% Lost</span>
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
                                            Daily Tickets
                                        </h3>
                                        <span class="kt-widget14__desc">
															Check out each column for more details
														</span>

                                    </div>
                                    <div class="kt-widget14__chart" style="height:180px;">
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
                            Best Sellers
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
                            <div class="kt-widget5">
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product11.jpg"
                                                 alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Awesome Mobile App
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.Lorem Ipsum Amet
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">210,054</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1103</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product6.jpg"
                                                 alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Great Logo Designn
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic admin themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Keenthemes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">19,200</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">1046</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-widget5__item">
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__pic">
                                            <img class="kt-widget7__img" src="assets/media/products/product10.jpg"
                                                 alt="">
                                        </div>
                                        <div class="kt-widget5__section">
                                            <a href="#" class="kt-widget5__title">
                                                Branding Mockup
                                            </a>
                                            <p class="kt-widget5__desc">
                                                Metronic bootstrap themes.
                                            </p>
                                            <div class="kt-widget5__info">
                                                <span>Author:</span>
                                                <span class="kt-font-info">Fly themes</span>
                                                <span>Released:</span>
                                                <span class="kt-font-info">23.08.17</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget5__content">
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">24,583</span>
                                            <span class="kt-widget5__sales">sales</span>
                                        </div>
                                        <div class="kt-widget5__stats">
                                            <span class="kt-widget5__number">3809</span>
                                            <span class="kt-widget5__votes">votes</span>
                                        </div>
                                    </div>
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
                            Latest Log
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
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget4_tab11_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span
                                                        class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#"
                                                                                                   class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span
                                                        class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span
                                                        class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#"
                                                                                                   class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span
                                                        class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab12_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span
                                                        class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#"
                                                                                                   class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#"
                                                                                                   class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span
                                                        class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab13_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span
                                                        class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span
                                                        class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#"
                                                                                                   class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span
                                                        class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#"
                                                                                                   class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
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
