<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


    <div class="row">

        <div <?php if ($acc_type == 'IT Staff') { ?> class="col-4" <?php }else{ ?> class="col-3" <?php } ?> >
            <div class="kt-portlet kt-iconbox <?php if ($acc_type == 'IT Staff') { ?>kt-iconbox--warning<?php }else{ ?> kt-iconbox--danger <?php } ?> kt-iconbox--animate-slow">
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


                                    if ($acc_type == 'Administrator' || $acc_type == 'Observer') {

                                        $count_all = "SELECT * FROM task where status != 'Approval Required' ORDER BY task_id";

                                    } elseif ($acc_type == 'Administrative Officer') {

                                        $count_all = "SELECT * FROM task where status != 'Approval Required' and division='$division' ORDER BY task_id";

                                    } elseif ($acc_type == 'IT Staff') {

                                        $count_all = "SELECT * FROM assign where userID='$logged_user_id' or userID_2_opt='$logged_user_id' ORDER BY task_id";

                                    }


                                    if ($count_all_run = mysqli_query($con, $count_all)) {

                                        $count_all_tickets = mysqli_num_rows($count_all_run);

                                        if ($count_all_tickets == 1) {

                                            printf("%d Ticket", $count_all_tickets);

                                        } else {

                                            printf("%d Tickets", $count_all_tickets);

                                        }

                                        mysqli_free_result($count_all_run);

                                    }

                                    ?>

                                </a>
                            </h3>
                            <div class="kt-iconbox__content">


                                <?php

                                if ($acc_type == 'Administrator' || $acc_type == 'Administrative Officer' || $acc_type == 'Observer') {

                                    echo 'Approved';

                                } elseif ($acc_type == 'IT Staff') {

                                    echo 'Received';

                                }

                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php if ($acc_type != 'IT Staff') { ?>
        <div <?php if ($acc_type == 'IT Staff') { ?> class="col-4" <?php }else{ ?> class="col-3" <?php } ?> >
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
                                <a class="kt-link" href="#">

                                    <?php

                                    if ($acc_type == 'Administrator' || $acc_type == 'Observer') {

                                        $count_all = "SELECT * FROM task where status = 'Approved' ORDER BY task_id";

                                    } elseif ($acc_type == 'Administrative Officer') {

                                        $count_all = "SELECT * FROM task where status = 'Approved' and division='$division' ORDER BY task_id";

                                    }

                                    if ($count_all_run = mysqli_query($con, $count_all)) {

                                        $count_all_tickets = mysqli_num_rows($count_all_run);

                                        if ($count_all_tickets == 1) {

                                            printf("%d Ticket", $count_all_tickets);

                                        } else {

                                            printf("%d Tickets", $count_all_tickets);

                                        }

                                        mysqli_free_result($count_all_run);

                                    }

                                    ?>

                                </a>
                            </h3>
                            <div class="kt-iconbox__content">
                                Pending Assign
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <div <?php if ($acc_type == 'IT Staff') { ?> class="col-4" <?php }else{ ?> class="col-3" <?php } ?> >
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
                                <a class="kt-link" href="#">


                                    <?php


                                    if ($acc_type == 'Administrator' || $acc_type == 'Observer') {

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
                                In Progress
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div <?php if ($acc_type == 'IT Staff') { ?> class="col-4" <?php }else{ ?> class="col-3" <?php } ?> >
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
                                <a class="kt-link" href="#">


                                    <?php

                                    if ($acc_type == 'Administrator' || $acc_type == 'Observer') {

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
                                Completed
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-list-3"></i>
										</span>
                <h3 class="kt-portlet__head-title kt-font-brand">
                    All Tickets</h3>&nbsp;

            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-wrapper">
                    <div class="kt-portlet__head-actions">
                        <div class="dropdown dropdown-inline">
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
                   class="table table-striped table-bordered table-hover"
                   id="kt_table_1">
                <thead>
                <tr style="font-size: 14px;" class="kt-label-bg-color-1">
                    <th>No.</th>
                    <th>Actions</th>
                    <th>Ticket ID</th>
                    <th>Processed Dates</th>
                    <th>Status</th>
                    <th>Division</th>
                    <th>Issue</th>
                    <th>Issue Category</th>
                    <th>Applicant Name</th>
                    <th>Employee Code</th>
                    <th>Designation</th>
                    <th>Asset Code</th>
                    <th>Extension No.</th>
                    <th>Approved By</th>
                    <th>Since Approved</th>
                    <th>Priority</th>
                    <th>IP Address</th>
                </tr>
                </thead>
                <tbody>

                <?php

                if (isset($_POST['submit_approve'])) {

                    date_default_timezone_set('Asia/Colombo');
                    $date = date_format($date, 'Y-m-d H:i:s');

                    $ticket_hidden = $_POST['ticket_hidden'];

                    $query_approving = "UPDATE task SET status='Approved', approved_by='$logged_user_id', approved_date='$date' WHERE task_id = '$ticket_hidden'";

                    $create_query_approving = mysqli_query($con, $query_approving);

                    if ($create_query_approving) {

                        echo '<meta http-equiv=Refresh content="0;url=task_list.php">';

                    }

                }

                if (isset($_POST['submit_remove'])) {

                    $ticket_hidden = $_POST['ticket_hidden'];

                    $query_removing = "DELETE FROM task WHERE task_id = '$ticket_hidden'";

                    $create_query_removing = mysqli_query($con, $query_removing);

                    if ($create_query_removing) {

                        echo '<meta http-equiv=Refresh content="0;url=task_list.php">';

                    }

                }

                if (isset($_POST['dlt_admin'])) {

                    $ticket_hidden = $_POST['ticket_hidden'];

                    $query_removing = "DELETE FROM task WHERE task_id = '$ticket_hidden'";
                    $query_removing_assign = "DELETE FROM assign WHERE task_id = '$ticket_hidden'";


                    date_default_timezone_set('Asia/Colombo');

                    $string = date("Y-m-d");
                    $date = DateTime::createFromFormat("Y-m-d", $string);

                    $date = date_format($date, 'Y-m-d H:i:s');

                    $query_log_ticket_dlt = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id Deleted the ticket with ID: $ticket_hidden')";


                    $create_query_log_ticket_dlt = mysqli_query($con, $query_log_ticket_dlt);
                    $create_query_removing = mysqli_query($con, $query_removing);
                    $create_query_removing_assign = mysqli_query($con, $query_removing_assign);

                    if ($create_query_removing_assign) {

                        echo '<meta http-equiv=Refresh content="0;url=task_list.php">';

                    }

                }

                if (isset($_POST['undo_assign'])) {

                    $ticket_hidden = $_POST['ticket_hidden'];

                    $query_removing_assign = "DELETE FROM assign WHERE task_id = '$ticket_hidden'";
                    $query_status = "UPDATE task SET status='Approved' where task_id='$ticket_hidden'";

                    date_default_timezone_set('Asia/Colombo');

                    $string = date("Y-m-d");
                    $date = DateTime::createFromFormat("Y-m-d", $string);

                    $date = date_format($date, 'Y-m-d H:i:s');

                    $query_log_assign_undo = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id Removed previously assigned person(s) for the ticket with ID: $ticket_hidden')";

                    $create_query_status = mysqli_query($con, $query_status);
                    $create_query_removing_assign = mysqli_query($con, $query_removing_assign);

                    $create_query_removing_assign_undo = mysqli_query($con, $query_log_assign_undo);

                    if ($create_query_removing_assign_undo) {

                        echo '<meta http-equiv=Refresh content="0;url=task_list.php">';

                    }

                }

                if (isset($_POST['undo_status_staff'])) {

                    $ticket_hidden = $_POST['ticket_hidden'];

                    $queryxys = "UPDATE task SET status='Assigned', task_completed_date='' where task_id='$ticket_hidden'";

                    $create_queryxys = mysqli_query($con, $queryxys);

                    if ($create_queryxys) {

                        echo '<meta http-equiv=Refresh content="0;url=task_list.php">';

                    }

                }
                ?>

                <?php

                if ($acc_type == 'Administrator' || $acc_type == 'Observer') {

                    $query = "SELECT * FROM assign RIGHT JOIN task ON task.task_id = assign.task_id WHERE task.status!='Approval Required' order by task.task_id desc";
                    $run_query = mysqli_query($con, $query);

                } elseif ($acc_type == 'Administrative Officer') {

                    $query = "select * from task where division='$division' order by task_id desc";
                    $run_query = mysqli_query($con, $query);

                } elseif ($acc_type == 'IT Staff') {

                    $query = "SELECT * FROM task t WHERE t.task_id IN (select a.task_id from assign a where a.userID = '$logged_user_id' OR a.userID_2_opt='$logged_user_id') order by task_id desc";
                    $run_query = mysqli_query($con, $query);

                }

                $i = 1;

                while ($row = mysqli_fetch_assoc($run_query)) {

                    $ticket_id = $row['task_id'];
                    $name = $row['assigned_by'];
                    $emp_code = $row['emp_code'];
                    $designation = $row['designation'];
                    $division = $row['division'];
                    $ext = $row['extension_no'];
                    $issue = $row['issue'];
                    $cat_issue = $row['category'];
                    $asst_code = $row['asset_code'];
                    $priority = $row['priority'];
                    $status12 = $row['status'];
                    $date = $row['assigned_date'];
                    $ip_add = $row['ip_address'];

                    $approved_by = $row['approved_by'];
                    $approved_date = $row['approved_date'];

                    $assigned_to_user_date = $row['assigned_to_user_date'];
                    $task_completed_date = $row['task_completed_date'];
                    $userID_a = $row['userID'];
                    $userID_2_opt_a = $row['userID_2_opt'];


                    ?>


                    <tr style="font-weight: 400;">
                        <td>
                            <span style="font-weight: 500"
                                  class="kt-badge kt-badge--dark kt-badge--inline kt-badge--pill"><?php echo $i; ?></span>
                        </td>


                        <td style="color: #343a40;">

                            <script>

                                $(document).ready(function () {

                                    $(document).on('change', '#<?= 'staff' . $i ?>', function () {

                                        var staff1 = $(this).val();
                                        var logged_user_id = <?php echo $logged_user_id; ?>;
                                        var ticket_id = $(<?php echo 'row' . $i; ?>).val();

                                        $.ajax({
                                            url: "assign_app.php",
                                            method: "POST",
                                            data: {
                                                staff1: staff1,
                                                ticket_id: ticket_id,
                                                logged_user_id: logged_user_id
                                            },
                                            success: function (data) {

                                                //$("#aa").load(window.location + " #aa");

                                                swal.fire({
                                                    position: 'top-right',
                                                    type: 'success',
                                                    title: 'Task Assigned Successfully',
                                                    showConfirmButton: false,
                                                    timer: 1000
                                                });

                                                setTimeout(function () {
                                                    location.reload(1);
                                                }, 1200);

                                            }

                                        });

                                    });

                                });

                            </script>

                            <input type="hidden" value="<?php echo $ticket_id; ?>" name="<?php echo 'row' . $i; ?>"
                                   id="<?php echo 'row' . $i; ?>">

                            <select <?php if ($acc_type != 'Administrator') { ?> hidden <?php } else {
                            } ?>
                                <?php if ($status12 == 'In Progress' || $status12 == 'Completed') { ?> disabled <?php } else {
                                } ?>
                                    style="width: 200px; font-weight: 500; color: #2c77f4;"
                                    id="<?php echo 'staff' . $i; ?>"
                                    name="<?php echo 'staff' . $i; ?>"
                                    data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                    title="Assign the Person No. 1"
                                    class="ui-select form-control dropdown dropdown-menu-anim-down" required>
                                <option style="color: grey;" value="" disabled="disabled" selected>Assign Person No. 1*
                                </option>

                                <?php

                                $query3 = "select * from user where acc_type = 'IT Staff'";
                                $run_query3 = mysqli_query($con, $query3);
                                while ($row3 = mysqli_fetch_assoc($run_query3)) {

                                    $userID = $row3['userID'];
                                    $employeeCode = $row3['employeeCode'];
                                    $firstName = $row3['firstName'];
                                    $lastName = $row3['lastName'];
                                    $email = $row3['email'];
                                    $password = $row3['password'];
                                    $date_created = $row3['date_created'];
                                    $status = $row3['status'];
                                    $acc_type111 = $row3['acc_type'];

                                    ?>
                                    <?php if ($userID_a == $userID) {


                                        ?>
                                        <option style="font-weight: 500; color: #2c77f4;" value="<?php echo $userID; ?>"
                                                selected><?php echo strtoupper($firstName . " " . $lastName); ?></option>

                                        <?php

                                    } else {
                                        ?>

                                        <option style="font-weight: 500; color: #2c77f4;"
                                                value="<?php echo $userID; ?>"><?php echo strtoupper($firstName . " " . $lastName); ?></option>
                                        <?php

                                    }
                                    ?>


                                    <?php
                                }
                                ?>


                            </select>


                            <br <?php if ($acc_type != 'Administrator') { ?> hidden <?php } else {
                            } ?> >


                            <script>

                                $(document).ready(function () {

                                    $(document).on('change', '#<?= 'staff2' . $i ?>', function () {

                                        var staff2 = $(this).val();
                                        var logged_user_id = <?php echo $logged_user_id; ?>;
                                        var ticket_id = $(<?php echo 'row2' . $i; ?>).val();

                                        $.ajax({
                                            url: "assign_app2.php",
                                            method: "POST",
                                            data: {
                                                staff2: staff2,
                                                ticket_id: ticket_id,
                                                logged_user_id: logged_user_id
                                            },
                                            success: function (data) {

                                                //$("#aa").load(window.location + " #aa");

                                                swal.fire({
                                                    position: 'top-right',
                                                    type: 'success',
                                                    title: 'Task Assigned Successfully',
                                                    showConfirmButton: false,
                                                    timer: 1000
                                                });

                                                setTimeout(function () {
                                                    location.reload(1);
                                                }, 1200);

                                            }

                                        });

                                    });

                                });

                            </script>


                            <input type="hidden" value="<?php echo $ticket_id; ?>" name="<?php echo 'row2' . $i; ?>"
                                   id="<?php echo 'row2' . $i; ?>">

                            <select <?php if ($acc_type != 'Administrator') { ?> hidden <?php } else {
                            } ?>
                                <?php if ($status12 == 'In Progress' || $status12 == 'Completed') { ?> disabled <?php } else {
                                } ?>
                                    style="width: 200px; font-weight: 400; color: #34bfa3;"
                                    id="<?php echo 'staff2' . $i; ?>"
                                    name="<?php echo 'staff2' . $i; ?>" data-skin="dark" data-toggle="kt-tooltip"
                                    data-placement="top" title="Assign the Person No. 2"
                                    class="ui-select form-control dropdown dropdown-menu-anim-down " required>
                                <option style="color: grey;" value="" disabled="disabled" selected>Assign Person No. 2
                                </option>

                                <?php

                                $query3 = "select * from user where acc_type = 'IT Staff'";
                                $run_query3 = mysqli_query($con, $query3);
                                while ($row3 = mysqli_fetch_assoc($run_query3)) {
                                    $userID = $row3['userID'];
                                    $employeeCode = $row3['employeeCode'];
                                    $firstName = $row3['firstName'];
                                    $lastName = $row3['lastName'];
                                    $email = $row3['email'];
                                    $password = $row3['password'];
                                    $date_created = $row3['date_created'];
                                    $status = $row3['status'];
                                    $acc_type111 = $row3['acc_type'];

                                    ?>

                                    <?php if ($userID_2_opt_a == $userID) {


                                        ?>
                                        <option style="font-weight: 500; color: #34bfa3;" value="<?php echo $userID; ?>"
                                                selected><?php echo strtoupper($firstName . " " . $lastName); ?></option>

                                        <?php

                                    } else {

                                        ?>

                                        <option style="font-weight: 500; color: #34bfa3;"
                                            <?php if ($acc_type111 == 'Administrator') { ?>
                                                hidden<?php } else {
                                            } ?>
                                                value="<?php echo $userID; ?>"><?php echo strtoupper($firstName . " " . $lastName); ?></option>
                                        <?php

                                    }
                                    ?>
                                    <?php
                                }
                                ?>


                            </select>

                            <script>


                                $(document).ready(function () {

                                    var <?= 'staff' . $i ?> =
                                    document.getElementById('<?= 'staff' . $i ?>').value;
                                    var <?= 'staff2' . $i ?> =
                                    document.getElementById('<?= 'staff2' . $i ?>').value;

                                    if (<?= 'staff' . $i ?> == ''
                                )
                                    {

                                        $('#<?= 'staff2' . $i ?>').prop('disabled', true);

                                    }


                                    $('#<?= 'staff' . $i ?>').change(function () {

                                        $('#<?= 'staff2' . $i ?>').prop('disabled', false);

                                    });


                                });

                            </script>

                            <br <?php if ($acc_type == 'Administrative Officer') { ?> hidden <?php } else {
                            } ?> >


                            <script>

                                $(document).ready(function () {

                                    $(document).on('change', '#<?= 'status_s' . $i ?>', function () {

                                        var status = $(this).val();
                                        var logged_user_id = <?php echo $logged_user_id; ?>;
                                        var ticket_id = $(<?php echo 'status' . $i; ?>).val();

                                        $.ajax({
                                            url: "status_app.php",
                                            method: "POST",
                                            data: {
                                                status: status,
                                                ticket_id: ticket_id,
                                                logged_user_id: logged_user_id
                                            },
                                            success: function (data) {

                                                swal.fire({
                                                    position: 'top-right',
                                                    type: 'success',
                                                    title: 'Ticket Status Changed Successfully',
                                                    showConfirmButton: false,
                                                    timer: 1500
                                                });

                                                setTimeout(function () {
                                                    location.reload(1);
                                                }, 1500);

                                            }

                                        });

                                    });

                                });

                            </script>


                            <input type="hidden" value="<?php echo $ticket_id; ?>" name="<?php echo 'status' . $i; ?>"
                                   id="<?php echo 'status' . $i; ?>">


                            <select <?php if ($acc_type !== 'IT Staff') { ?> hidden <?php } else {
                            } ?> style="width: 200px; font-weight: 500; color: #2c77f4;"
                                 id="<?php echo 'status_s' . $i; ?>" name="<?php echo 'status_s' . $i; ?>"
                                 class="ui-select form-control dropdown dropdown-menu-anim-down kt-badge--d22"
                                 data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                 title="Set the Ticket Status" required>
                                <option value="" disabled="true" selected>Ticket Status*</option>


                                <?php

                                $queryqwabc = "SELECT * FROM task WHERE task_id='$ticket_id'";
                                $run_queryqwabc = mysqli_query($con, $queryqwabc);

                                while ($rowqwabc = mysqli_fetch_assoc($run_queryqwabc)) {

                                    $status_b = $rowqwabc['status'];

                                }

                                if ($status_b == 'In Progress') {

                                    ?>

                                    <option style="color: #5867dd; font-weight: 500" value="In Progress" selected>In
                                        Progress
                                    </option>
                                    <option style="color: #1dc9b7; font-weight: 500" value="Completed">Completed
                                    </option>
                                    <?php

                                }
                                if ($status_b == 'Completed') {

                                    ?>

                                    <option style="color: #5867dd; font-weight: 500" value="In Progress">In Progress
                                    </option>
                                    <option style="color: #1dc9b7; font-weight: 500" value="Completed" selected>
                                        Completed
                                    </option>
                                    <?php

                                }
                                if ($status_b == 'Assigned') {

                                    ?>

                                    <option style="color: #5867dd; font-weight: 500" value="In Progress">In Progress
                                    </option>
                                    <option style="color: #1dc9b7; font-weight: 500" value="Completed">Completed
                                    </option>
                                    <?php

                                }

                                ?>


                            </select>
                            <br <?php if ($acc_type == 'Administrative Officer' || $acc_type == 'Administrator') { ?> hidden <?php } else {
                            } ?> >

                            <form name="approve_decline" id="approve_decline" action="" method="post">

                                <input type="hidden" value="<?php echo $ticket_id; ?>" name="ticket_hidden"
                                       id="ticket_hidden">


                                <?php if ($acc_type == 'Administrative Officer') {


                                    if ($status12 == 'Approval Required' || $status12 == 'Approved') {

                                        ?>


                                        <button <?php if ($acc_type != 'Administrative Officer') { ?> hidden <?php } else {
                                        } ?> onclick="
                                if (confirm('Are you sure you want to approve this ticket ?')) {
            return true;

        } else {
            return false;
        }" id="submit_approve" name="submit_approve" type="submit"
                                             class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--d22 kt-badge--inline kt-badge--pill"
                                             data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                             title="Approve Ticket">
                                            <i style="font-size: 18px; color: #007bff; font-weight: 800;"
                                               class="la la-check"></i>
                                        </button>

                                        <button <?php if ($acc_type != 'Administrative Officer') { ?> hidden <?php } else {
                                        } ?> onclick="
                                if (confirm('Are you sure you want to delete this ticket ?')) {
            return true;

        } else {
            return false;
        }" type="submit" id="submit_remove" name="submit_remove"
                                             class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                             data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                             title="Reject and Delete the Ticket">
                                            <i style="font-size: 18px; color: #dc3545; font-weight: 800;"
                                               class="la la-close"></i>
                                        </button>


                                        <?php

                                    } elseif ($status12 == 'Completed') {

                                        echo '<span style="font-weight: 500" class="kt-font-bold kt-font-success">Ticket Already Completed</span>
                            ';

                                    } else {

                                        echo '<span style="font-weight: 500" class="kt-font-bold kt-font-brand">Ticket is in Processing State</span>
                            ';

                                    }

                                } else {
                                }

                                ?>


                                <button <?php if ($acc_type != 'Administrator' || $status12 == 'In Progress' || $status12 == 'Completed') { ?>
                                        hidden <?php } else {
                                } ?>onclick="
                                if (confirm('Are you sure you want to undo assigned staff from this ticket ?')) {
            return true;

        } else {
            return false;
        }" type="submit" id="undo_assign" name="undo_assign"
                                        class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--abc kt-badge--inline kt-badge--pill"
                                        data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                        title="Undo Assigning the Ticket">
                                    <i style="font-size: 18px; color: #343a40; font-weight: 800;"
                                       class="la la-undo"></i>
                                </button>


                                <button <?php if ($acc_type != 'IT Staff' && $status12 != 'In Progress' || $acc_type != 'IT Staff' && $status12 != 'Completed') { ?>
                                        hidden <?php } else {
                                } ?>onclick="
                                if (confirm('Are you sure you want to undo the status of this ticket ?')) {
            return true;

        } else {
            return false;
        }" type="submit" id="undo_status_staff" name="undo_status_staff"
                                        class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--abc kt-badge--inline kt-badge--pill"
                                        data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                        title="Undo the Status of Ticket">
                                    <i style="font-size: 18px; color: #343a40; font-weight: 800;"
                                       class="la la-undo"></i>
                                </button>


                                <button <?php if ($acc_type != 'Administrator' || $status12 == 'In Progress' || $status12 == 'Completed') { ?>
                                        hidden <?php } else {
                                } ?>onclick="
                                if (confirm('Are you sure you want to delete this ticket ?')) {
            return true;

        } else {

            return false;

        }" type="submit" id="dlt_admin" name="dlt_admin"
                                        class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                        data-skin="dark" data-toggle="kt-tooltip" data-placement="top"
                                        title="Delete the Ticket">
                                    <i style="font-size: 18px; color: #dc3545; font-weight: 800;"
                                       class="la la-trash"></i>
                                </button>

                            </form>
                        </td>

                        <td><?php echo $ticket_id; ?></td>
                        <td style="min-width: 180px;">

                            <div class="row">

                                <div class="col">

                                     <span class="kt-font-bold kt-font-brand">
                                <?php echo 'Submitted<br></span><span class="kt-font-bold kt-font-dark">' . $date . '<br>'; ?>
                            </span>
                                    <hr>
                                    <span class="kt-font-bold kt-font-warning">
                            <?php

                            $queryqwa = "SELECT * FROM assign WHERE task_id='$ticket_id'";
                            $run_queryqwa = mysqli_query($con, $queryqwa);

                            while ($rowqwa = mysqli_fetch_assoc($run_queryqwa)) {

                                $assigned_to_user_date = $rowqwa['assigned_to_user_date'];

                            }

                            if ($assigned_to_user_date == '') {

                                $assigned_to_user_date = '-';

                            }
                            echo 'Assigned<br></span><span class="kt-font-bold kt-font-dark">' . $assigned_to_user_date . '<br>'; ?>
                            </span>


                                </div>
                                <div class="col">

                                    <span class="kt-font-bold kt-font-brand">
                            <?php
                            if ($approved_date == '') {

                                $approved_date = '-';

                            }
                            echo 'Approved<br></span><span class="kt-font-bold kt-font-dark">' . $approved_date . '<br>'; ?>
                            </span>

                                    <hr>
                                    <span class="kt-font-bold kt-font-success">
                            <?php
                            if ($task_completed_date == '') {

                                $task_completed_date = '-';

                            }
                            echo 'Completed<br></span><span class="kt-font-bold kt-font-dark">' . $task_completed_date . '<br>'; ?>
                            </span>


                                </div>

                            </div>


                        </td>

                        <td id="aa">

                            <?php if ($status12 == "Approval Required") { ?>
                                <span style="font-weight: 500"
                                      class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Approval Required</span>
                            <?php } elseif ($status12 == "Approved") { ?>
                                <span style="font-weight: 500"
                                      class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Approved by A/O</span>
                            <?php } elseif ($status12 == "Assigned") { ?>
                                <span style="font-weight: 500"
                                      class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">Assigned</span>
                            <?php } elseif ($status12 == "In Progress") { ?>
                                <span style="font-weight: 500"
                                      class="kt-badge kt-badge--dark kt-badge--inline kt-badge--pill">In Progress</span>
                            <?php } elseif ($status12 == "Completed") { ?>
                                <span style="font-weight: 500"
                                      class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">Completed</span>
                            <?php } ?>

                        </td>

                        <td class="kt-font-bold kt-font-brand"><?php echo $division; ?></td>

                        <td><?php echo $issue; ?></td>
                        <td><?php echo $cat_issue; ?></td>

                        <td><?php echo '<span class="kt-font-bold kt-font-brand">' . $name . '</span>'; ?></td>
                        <td><?php echo $emp_code; ?></td>
                        <td><?php echo '<span class="kt-font-bold kt-font-warning">' . $designation . '</span>'; ?></td>
                        <td><?php echo $asst_code; ?></td>
                        <td><?php echo $ext; ?></td>
                        <td><?php

                            $queryqw = "SELECT * FROM user WHERE userID='$approved_by'";
                            $run_queryqw = mysqli_query($con, $queryqw);

                            while ($rowqw = mysqli_fetch_assoc($run_queryqw)) {

                                $employeeCode_disp = $rowqw['employeeCode'];
                                $firstName_disp = $rowqw['firstName'];
                                $lastName_disp = $rowqw['lastName'];

                            }

                            if ($approved_by == '') {

                                echo '-';

                            } else {

                                echo '<span style="font-weight: 500"
                                  class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">' . $employeeCode_disp . '</span><br><span class="kt-font-bold kt-font-brand">' . $firstName_disp . ' ' . $lastName_disp . ' ';

                            }

                            ?></td>

                        <td><?php

                            date_default_timezone_set('Asia/Colombo');

                            $string = date("Y-m-d");
                            $date = DateTime::createFromFormat("Y-m-d", $string);

                            $today_date = date_format($date, 'Y-m-d H:i:s');

                            if ($approved_date != '-' && $approved_date != '' && $today_date != '-' && $today_date != '') {

                                $assigned_time = $approved_date;
                                $completed_time = $today_date;

                                $d1 = new DateTime($assigned_time);
                                $d2 = new DateTime($completed_time);
                                $interval = $d2->diff($d1);

                                echo '<span style="font-weight: 500"
                                  class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">' . $interval->format('%d Day(s)') . '</span>';


                            } else {

                                echo '<span style="font-weight: 500"
                                  class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">Pending Approval</span>';

                            }


                            ?></td>


                        <td><?php if ($priority == "Medium") { ?><span
                                    class="kt-badge kt-badge--warning kt-badge--dot"></span>&nbsp;<span
                                    class="kt-font-bold kt-font-warning">Medium</span><?php } elseif ($priority == "Low") { ?>
                                <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span
                                        class="kt-font-bold kt-font-success">Low</span> <?php } else { ?><span
                                    class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span
                                    class="kt-font-bold kt-font-danger">Critical</span><?php } ?> </td>
                        <td style="font-family: 'Fira Code'"><?php echo $ip_add; ?></td>
                    </tr>

                    <?php $i++;

                }


                ?>

                </tbody>

            </table>
            <!--end: Datatable -->


        </div>
    </div>


</div>
</div>

<!-- end:: Content -->

<!-- begin:: Content -->

<script>

    setTimeout(function () {
        location.reload(1);
    }, 900000);

</script>
<?php include 'include/footer.php'; ?>
