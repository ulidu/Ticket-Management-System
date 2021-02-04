<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-4">

            <!--begin:: Widgets/Personal Income-->
            <div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--height-fluid">
                <div class="kt-portlet__head kt-portlet__space-x">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title kt-font-light">
                            Total Tickets
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-outline-light btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
                            All Reports
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                        <span class="kt-nav__link-text">Reports Type 1</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                        <span class="kt-nav__link-text">Reports Type 2</span>
                                    </a>
                                </li><li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                        <span class="kt-nav__link-text">Reports Type 3</span>
                                    </a>
                                </li><li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                        <span class="kt-nav__link-text">Reports Type 4</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget27">
                        <div class="kt-widget27__visual">
                            <img src="assets/media/bg/bg-8.jpg" alt="">
                            <h3 class="kt-widget27__title">
                                <span><span></span>

                                     <?php


                                     $count_all = "SELECT task_id FROM task";


                                     if (!empty($con)) {
                                         if ($count_all_run = mysqli_query($con, $count_all)) {

                                             $count_all_tickets = mysqli_num_rows($count_all_run);

                                             if ($count_all_tickets == 1) {

                                                 printf("%d Ticket", $count_all_tickets);

                                             } else {

                                                 printf("%d Tickets", $count_all_tickets);

                                             }

                                             mysqli_free_result($count_all_run);

                                         }
                                     }

                                     ?>

                                </span>
                            </h3>
                            <div class="kt-widget27__btn">
                                <span class="btn btn-pill btn-light btn-elevate btn-bold">No. of all tickets submitted so far</span>
                            </div>
                        </div>
                        <div class="kt-widget27__container kt-portlet__space-x">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#kt_personal_income_quater_1">Quarter 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#kt_personal_income_quater_2">Quarter 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#kt_personal_income_quater_3">Quarter 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#kt_personal_income_quater_4">Quarter 4</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="kt_personal_income_quater_1" class="tab-pane active">
                                    <div class="kt-widget11">
                                        <div class="table-responsive">

                                            <!--begin::Table-->
                                            <table class="table">

                                                <!--begin::Thead-->
                                                <thead>
                                                <tr>
                                                    <td>Categories</td>
                                                    <td>Total</td>
                                                    <td class="kt-align-right">Percentage</td>
                                                </tr>
                                                </thead>

                                                <!--end::Thead-->

                                                <!--begin::Tbody-->
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="kt-widget11__title">Vertex 2.0</a>
                                                        <span class="kt-widget11__sub">Vertex To By Again</span>
                                                    </td>
                                                    <td><span class="kt-badge kt-badge--success kt-badge--inline">pending</span></td>
                                                    <td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="kt-widget11__title">Metronic</a>
                                                        <span class="kt-widget11__sub">Powerful Admin Theme</span>
                                                    </td>
                                                    <td><span class="kt-badge kt-badge--brand kt-badge--inline">new</span></td>
                                                    <td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
                                                </tr>
                                                </tbody>

                                                <!--end::Tbody-->
                                            </table>

                                            <!--end::Table-->
                                        </div>
                                    </div>
                                </div>
                                <div id="kt_personal_income_quater_2" class="tab-pane fade">
                                    <div class="kt-widget11">
                                        <div class="table-responsive">

                                            <!--begin::Table-->
                                            <table class="table">

                                                <!--begin::Thead-->
                                                <thead>
                                                <tr>
                                                    <td>Application</td>
                                                    <td>Status</td>
                                                    <td class="kt-align-right">Total</td>
                                                </tr>
                                                </thead>

                                                <!--end::Thead-->

                                                <!--begin::Tbody-->
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="kt-widget11__title">Vertex 2.0</a>
                                                        <span class="kt-widget11__sub">Vertex To By Again</span>
                                                    </td>
                                                    <td><span class="kt-badge kt-badge--success kt-badge--inline">pending</span></td>
                                                    <td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="kt-widget11__title">Apex</a>
                                                        <span class="kt-widget11__sub">The Best Selling App</span>
                                                    </td>
                                                    <td><span class="kt-badge kt-badge--warning kt-badge--inline">in process</span></td>
                                                    <td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
                                                </tr>
                                                </tbody>

                                                <!--end::Tbody-->
                                            </table>

                                            <!--end::Table-->
                                        </div>
                                    </div>
                                </div>
                                <div id="kt_personal_income_quater_3" class="tab-pane fade">
                                    <div class="kt-widget11">
                                        <div class="table-responsive">

                                            <!--begin::Table-->
                                            <table class="table">

                                                <!--begin::Thead-->
                                                <thead>
                                                <tr>
                                                    <td>Application</td>
                                                    <td>Status</td>
                                                    <td class="kt-align-right">Total</td>
                                                </tr>
                                                </thead>

                                                <!--end::Thead-->

                                                <!--begin::Tbody-->
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="kt-widget11__title">Metronic</a>
                                                        <span class="kt-widget11__sub">Powerful Admin Theme</span>
                                                    </td>
                                                    <td><span class="kt-badge kt-badge--brand kt-badge--inline">new</span></td>
                                                    <td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="kt-widget11__title">Apex</a>
                                                        <span class="kt-widget11__sub">The Best Selling App</span>
                                                    </td>
                                                    <td><span class="kt-badge kt-badge--warning kt-badge--inline">in process</span></td>
                                                    <td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
                                                </tr>
                                                </tbody>

                                                <!--end::Tbody-->
                                            </table>

                                            <!--end::Table-->
                                        </div>
                                    </div>
                                </div>
                                <div id="kt_personal_income_quater_4" class="tab-pane fade">
                                    <div class="kt-widget11">
                                        <div class="table-responsive">

                                            <!--begin::Table-->
                                            <table class="table">

                                                <!--begin::Thead-->
                                                <thead>
                                                <tr>
                                                    <td>Application</td>
                                                    <td>Status</td>
                                                    <td class="kt-align-right">Total</td>
                                                </tr>
                                                </thead>

                                                <!--end::Thead-->

                                                <!--begin::Tbody-->
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="kt-widget11__title">Vertex 2.0</a>
                                                        <span class="kt-widget11__sub">Vertex To By Again</span>
                                                    </td>
                                                    <td><span class="kt-badge kt-badge--success kt-badge--inline">pending</span></td>
                                                    <td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="kt-widget11__title">Metronic</a>
                                                        <span class="kt-widget11__sub">Powerful Admin Theme</span>
                                                    </td>
                                                    <td><span class="kt-badge kt-badge--brand kt-badge--inline">new</span></td>
                                                    <td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
                                                </tr>
                                                </tbody>

                                                <!--end::Tbody-->
                                            </table>

                                            <!--end::Table-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Personal Income-->
        </div>
    </div>

</div>
</div>

<!-- end:: Content -->

<!-- begin:: Content -->


<?php include 'include/footer.php'; ?>
