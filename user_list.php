<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<!-- begin:: Content -->
<div id="card" class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


    <!-- begin:: Content -->


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
                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                          fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">

                                    <?php


                                    $count_all = "SELECT * FROM user where status='Active' && acc_type='Administrator'";


                                    if ($count_all_run = mysqli_query($con, $count_all)) {

                                        $count_all_tickets = mysqli_num_rows($count_all_run);

                                        if ($count_all_tickets == 1) {

                                            printf("%d User", $count_all_tickets);

                                        } else {

                                            printf("%d Users", $count_all_tickets);

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
                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                          fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">


                                    <?php


                                    $count_in_progress = "SELECT * FROM user where status='Active' && acc_type='Observer'";


                                    if ($count_in_progress_run = mysqli_query($con, $count_in_progress)) {

                                        $count_in_progress_run_tickets = mysqli_num_rows($count_in_progress_run);

                                        if ($count_in_progress_run_tickets == 1) {

                                            printf("%d User", $count_in_progress_run_tickets);

                                        } else {

                                            printf("%d Users", $count_in_progress_run_tickets);

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
                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                          fill="#000000" opacity="0.3"/>
                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                          fill="#000000" opacity="0.3"/>
                                </g>
                            </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">


                                    <?php

                                    $count_completed = "SELECT * FROM user where status='Active' && acc_type='IT Staff'";

                                    if ($count_completed_run = mysqli_query($con, $count_completed)) {

                                        $count_completed_run_tickets = mysqli_num_rows($count_completed_run);

                                        if ($count_completed_run_tickets == 1) {

                                            printf("%d User", $count_completed_run_tickets);

                                        } else {

                                            printf("%d Users", $count_completed_run_tickets);

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
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                              fill="#000000" opacity="0.3"/>
                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                              fill="#000000" opacity="0.3"/>
                                        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                              fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg>
                        </div>
                        <div class="kt-iconbox__desc">
                            <h3 class="kt-iconbox__title">
                                <a class="kt-link" href="#">


                                    <?php

                                    $count_completed = "SELECT * FROM user where status='Active' && acc_type='Administrative Officer'";

                                    if ($count_completed_run = mysqli_query($con, $count_completed)) {

                                        $count_completed_run_tickets = mysqli_num_rows($count_completed_run);

                                        if ($count_completed_run_tickets == 1) {

                                            printf("%d User", $count_completed_run_tickets);

                                        } else {

                                            printf("%d Users", $count_completed_run_tickets);

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
            <table style="text-align: center;"
                   class="table table-striped- table-bordered table-hover"
                   id="kt_table_1">
                <thead>
                <tr style="font-size: 14px;" class="kt-bg-light-dark">
                    <th class="kt-font-dark">No.</th>
                    <th style="min-width: 120px;" class="kt-font-dark">Actions</th>
                    <th class="kt-font-dark">User ID</th>
                    <th class="kt-font-dark">Employee Code</th>
                    <th class="kt-font-dark">Status</th>
                    <th class="kt-font-dark">Title</th>
                    <th class="kt-font-dark">First Name</th>
                    <th class="kt-font-dark">Last Name</th>
                    <th class="kt-font-dark">Email</th>
                    <th class="kt-font-dark">Account Type</th>
                    <th class="kt-font-dark">Division</th>
                    <th class="kt-font-dark">Created Date</th>

                </tr>
                </thead>
                <tbody>

                <?php

                if (isset($_POST['submit_disable'])) {

                    date_default_timezone_set('Asia/Colombo');
                    $string = date("Y-m-d");
                    $date = DateTime::createFromFormat("Y-m-d", $string);
                    $date = date_format($date, 'Y-m-d H:i:s');

                    $user_hidden = $_POST['user_hidden'];

                    $query_disable = "UPDATE user SET status='Deactivated' WHERE userID = '$user_hidden'";
                    $create_query_disable = mysqli_query($con, $query_disable);

                    $query_log_user_disable = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id Disabled the user with ID: $user_hidden')";
                    $create_query_log_user_disable = mysqli_query($con, $query_log_user_disable);

                    if ($query_disable) {

                        echo '<meta http-equiv=Refresh content="0;url=user_list.php">';

                    }

                }

                if (isset($_POST['submit_activate'])) {

                    date_default_timezone_set('Asia/Colombo');
                    $string = date("Y-m-d");
                    $date = DateTime::createFromFormat("Y-m-d", $string);
                    $date = date_format($date, 'Y-m-d H:i:s');

                    $user_hidden = $_POST['user_hidden'];

                    $query_disable = "UPDATE user SET status='Active' WHERE userID = '$user_hidden'";
                    $create_query_disable = mysqli_query($con, $query_disable);

                    $query_log_user_disable = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id Activated the user with ID: $user_hidden')";
                    $create_query_log_user_disable = mysqli_query($con, $query_log_user_disable);

                    if ($query_disable) {

                        echo '<meta http-equiv=Refresh content="0;url=user_list.php">';

                    }

                }

                if (isset($_POST['submit_delete'])) {

                    date_default_timezone_set('Asia/Colombo');
                    $string = date("Y-m-d");
                    $date = DateTime::createFromFormat("Y-m-d", $string);
                    $date = date_format($date, 'Y-m-d H:i:s');

                    $user_hidden = $_POST['user_hidden'];

                    $query_delete = "DELETE FROM user WHERE userID = '$user_hidden'";
                    $create_query_delete = mysqli_query($con, $query_delete);

                    $query_log_user_delete = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id Deleted the user with ID: $user_hidden')";
                    $create_query_log_user_delete = mysqli_query($con, $query_log_user_delete);

                    if ($query_delete) {

                        echo '<meta http-equiv=Refresh content="0;url=user_list.php">';

                    }

                }

                if (isset($_POST['edit_u'])) {

                    $user_hidden = $_POST['user_hidden'];
                    $url_user_update = '0;url=add_user.php?update='.$user_hidden;

                    echo "<meta http-equiv=Refresh content='".$url_user_update."'>";

                }

                if (isset($_POST['reset_pw_u'])) {

                    $user_hidden = $_POST['user_hidden'];
                    $url_user_reset = '0;url=add_user.php?update='.$user_hidden;

                    echo "<meta http-equiv=Refresh content='".$url_user_reset."'>";

                }

                ?>

                <?php

                $query = "select * from user order by userID desc";
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

                    <tr <?php if ($status == 'Deactivated') { ?> class="greyed_out_deactivated" <?php } ?>
                            style="font-weight: 400;">

                        <td>

                             <span style="font-weight: 500"
                                   class="kt-badge kt-badge--dark kt-badge--inline kt-badge--pill"><?php echo $i; ?></span>

                        </td>

                        <td style="min-width: 120px;">

                            <form name="user_edit" id="user_edit" action="" method="post">

                                <input type="hidden" value="<?php echo $userID; ?>" name="user_hidden"
                                       id="user_hidden">

                                <button data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                        id="edit_u" name="edit_u" type="submit"
                                        class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--d22 kt-badge--inline kt-badge--pill"
                                        title="Edit User">
                                    <i style="font-size: 18px; color: #007bff; font-weight: 800;"
                                       class="la la-edit"></i>
                                </button>
                                &nbsp;
                                <?php if ($status == 'Active') { ?>
                                    <button data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                            id="submit_disable" name="submit_disable" onclick="
                                if (confirm('Are you sure you want to deactivate this user ?')) { return true; } else { return false; }"
                                            type="submit"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--warn kt-badge--inline kt-badge--pill"
                                            title="Disable User">
                                        <i style="font-size: 18px; color: #ffb822; font-weight: 800;"
                                           class="la la-ban"></i>
                                    </button>
                                <?php } ?>

                                <?php if ($status == 'Deactivated') { ?>
                                    <button data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                            id="submit_activate" name="submit_activate" onclick="
                                if (confirm('Are you sure you want to activate this user ?')) { return true; } else { return false; }"
                                            type="submit"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--unified-success kt-badge--inline kt-badge--pill"
                                            title="Activate User">
                                        <i style="font-size: 18px; font-weight: 800;"
                                           class="la la-check kt-font-success"></i>
                                    </button>
                                <?php } ?>

                                &nbsp;
                                <button data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                        onclick="
                                if (confirm('Are you sure you want to delete this user permanently ?')) { return true; } else { return false; }"
                                        type="submit" id="submit_delete" name="submit_delete"
                                        class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                        title="Delete User Permanently">
                                    <i style="font-size: 18px; color: #dc3545; font-weight: 800;"
                                       class="la la-trash"></i>
                                </button>

                                <hr>

                                <button data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                        id="reset_pw_u" name="reset_pw_u" type="submit"
                                        class="btn kt-badge kt-badge--brand kt-badge--inline kt-badge--pill kt-font-bold"
                                        title="Password Reset">
                                    Password Reset
                                </button>

                            </form>

                        </td>

                        <td><?php echo $userID; ?></td>
                        <td><?php echo $employeeCode; ?></td>
                        <td>
                            <?php if ($status == 'Active'){ ?><span
                                    class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill kt-font-bold"><?php } elseif ($status == 'Deactivated'){ ?><span
                                        class="kt-badge kt-badge--dark kt-badge--inline kt-badge--pill kt-font-bold"> <?php } ?><?php echo $status; ?></span>
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


<!-- begin:: Content -->

<?php include 'include/footer.php'; ?>
