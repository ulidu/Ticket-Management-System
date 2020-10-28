<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

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

                    $create_query_removing = mysqli_query($con, $query_removing);
                    $create_query_removing_assign = mysqli_query($con, $query_removing_assign);

                    if ($create_query_removing) {

                        echo '<meta http-equiv=Refresh content="0;url=task_list.php">';

                    }

                }

                if (isset($_POST['undo_assign'])) {

                    $ticket_hidden = $_POST['ticket_hidden'];

                    $query_removing_assign = "DELETE FROM assign WHERE task_id = '$ticket_hidden'";
                    $query_status = "UPDATE task SET status='Approved' where task_id='$ticket_hidden'";

                    $create_query_status = mysqli_query($con, $query_status);
                    $create_query_removing_assign = mysqli_query($con, $query_removing_assign);

                    if ($create_query_removing_assign) {

                        echo '<meta http-equiv=Refresh content="0;url=task_list.php">';

                    }

                }

                ?>

                <?php

                if ($acc_type == 'Administrator') {

                    $query = "SELECT * FROM assign RIGHT JOIN task ON task.task_id = assign.task_id WHERE task.status!='Approval Required' order by task.task_id desc";
                    $run_query = mysqli_query($con, $query);

                } elseif ($acc_type == 'Administrative Officer') {

                    $query = "select * from task where division='$division' AND status='Approved' OR division='$division' AND status='Approval Required' order by task_id desc";
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
                        <td><span style="font-weight: 500"
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


                                            }

                                        });

                                    });

                                });

                            </script>

                            <input type="hidden" value="<?php echo $ticket_id; ?>" name="<?php echo 'row' . $i; ?>"
                                   id="<?php echo 'row' . $i; ?>">

                            <select <?php if ($acc_type != 'Administrator') { ?> hidden <?php } else {
                            } ?> style="width: 200px; font-weight: 500; color: #2c77f4;"
                                 id="<?php echo 'staff' . $i; ?>"
                                 name="<?php echo 'staff' . $i; ?>"
                                 class="ui-select form-control dropdown dropdown-menu-anim-down " required>
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

                                            }

                                        });

                                    });

                                });

                            </script>


                            <input type="hidden" value="<?php echo $ticket_id; ?>" name="<?php echo 'row2' . $i; ?>"
                                   id="<?php echo 'row2' . $i; ?>">

                            <select <?php if ($acc_type != 'Administrator') { ?> hidden <?php } else {
                            } ?> style="width: 200px; font-weight: 400; color: #34bfa3;"
                                 id="<?php echo 'staff2' . $i; ?>"
                                 name="<?php echo 'staff2' . $i; ?>"
                                 class="ui-select form-control dropdown dropdown-menu-anim-down " required>
                                <option style="color: grey;" value="" disabled="disabled" selected>Assign Person No. 2
                                </option>

                                <?php

                                $query3 = "select * from user where acc_type = 'IT Staff' or acc_type = 'Administrator'";
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
                                        <option style="font-weight: 500; color: #34bfa3;"
                                            <?php if ($acc_type111 == 'Administrator') { ?>
                                                hidden<?php } else {
                                            } ?>
                                                value="<?php echo $userID; ?>"
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

                                    if (<?= 'staff' . $i ?> == '')
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

                                            }

                                        });

                                    });

                                });

                            </script>


                            <input type="hidden" value="<?php echo $ticket_id; ?>" name="<?php echo 'status' . $i; ?>"
                                   id="<?php echo 'status' . $i; ?>">


                            <select <?php if ($acc_type !== 'IT Staff') { ?> hidden <?php } else {
                            } ?> style="width: 200px; font-weight: 500; color: #2c77f4;" id="<?php echo 'status_s' . $i; ?>" name="<?php echo 'status_s' . $i; ?>"
                                 class="ui-select form-control dropdown dropdown-menu-anim-down kt-badge--d22" required>
                                <option value="" disabled="true" selected>Ticket Status*</option>

                                <option style="color: #5867dd; font-weight: 500" value="In Progress">In Progress
                                </option>
                                <option style="color: #1dc9b7; font-weight: 500" value="Completed">Completed</option>

                            </select>
                            <br <?php if ($acc_type == 'Administrative Officer' || $acc_type == 'Administrator') { ?> hidden <?php } else {
                            } ?> >

                            <form name="approve_decline" id="approve_decline" action="" method="post">

                                <input type="hidden" value="<?php echo $ticket_id; ?>" name="ticket_hidden"
                                       id="ticket_hidden">

                                <button <?php if ($acc_type != 'Administrative Officer') { ?> hidden <?php } else {
                                } ?> onclick="
                                if (confirm('Are you sure you want to approve this ticket ?')) {
            return true;

        } else {
            return false;
        }" id="submit_approve" name="submit_approve" type="submit"
                                     class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--d22 kt-badge--inline kt-badge--pill"
                                     title="Approve">
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
                                     title="Delete">
                                    <i style="font-size: 18px; color: #dc3545; font-weight: 800;"
                                       class="la la-close"></i>
                                </button>

                                <button <?php if ($acc_type != 'Administrator') { ?> hidden <?php } else {
                                } ?>onclick="
                                if (confirm('Are you sure you want to undo assigned staff from this ticket ?')) {
            return true;

        } else {
            return false;
        }" type="submit" id="undo_assign" name="undo_assign"
                                                                                     class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--abc kt-badge--inline kt-badge--pill"
                                                                                     title="Undo Assign">
                                    <i style="font-size: 18px; color: #343a40; font-weight: 800;"
                                       class="la la-undo"></i>
                                </button>

                                <button <?php if ($acc_type != 'Administrator') { ?> hidden <?php } else {
                                } ?>onclick="
                                if (confirm('Are you sure you want to delete this ticket ?')) {
            return true;

        } else {
            return false;
        }" type="submit" id="dlt_admin" name="dlt_admin"
                                                                                     class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                                                                     title="Delete">
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
                                      class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">Approval Required</span>
                            <?php } elseif ($status12 == "Approved") { ?>
                                <span style="font-weight: 500"
                                      class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Approved by A/O</span>
                            <?php } elseif ($status12 == "Assigned") { ?>
                                <span style="font-weight: 500"
                                      class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">Assigned</span>
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


<?php include 'include/footer.php'; ?>
