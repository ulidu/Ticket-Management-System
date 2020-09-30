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
                   class="table table-striped- table-bordered table-hover"
                   id="kt_table_1">
                <thead>
                <tr style="font-size: 14px;" class="kt-label-bg-color-1">
                    <th>No.</th>
                    <th>Actions</th>
                    <th>Ticket ID</th>
                    <th>Date Submitted</th>
                    <th>Status</th>
                    <th>Issue</th>
                    <th>Issue Category</th>
                    <th>Division</th>
                    <th>Applicant Name</th>
                    <th>Employee Code</th>
                    <th>Designation</th>
                    <th>Asset Code</th>
                    <th>Extension No.</th>
                    <th>Priority</th>
                    <th>IP Address</th>
                </tr>
                </thead>
                <tbody>

                <?php

                if (isset($_POST['submit_approve'])) {

                    date_default_timezone_set('Asia/Colombo');
                    $date = date("l jS \of F Y h:i:s A");

                    $ticket_hidden = $_POST['ticket_hidden'];

                    $query_approving = "UPDATE task SET status='Approved' WHERE task_id = '$ticket_hidden'";
                    $query_approvedby = "INSERT INTO approve(task_id, approved_by, approved_date) VALUES ('$ticket_hidden','$logged_user_id','$date')";

                    $create_query_approving = mysqli_query($con, $query_approving);
                    $create_query_approvedby = mysqli_query($con, $query_approvedby);

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

                ?>

                <?php

                if ($acc_type == 'Administrator') {

                    $query = "select * from task where status!='Approval Required' order by task_id desc";
                    $run_query = mysqli_query($con, $query);

                } elseif ($acc_type == 'Administrative Officer') {

                    $query = "select * from task where division='$division' order by task_id desc";
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


                    ?>


                    <tr style="font-weight: 400; background-color: #f8f9fa;">
                        <td><span style="font-weight: 500"
                                  class="kt-badge kt-badge--dark kt-badge--inline kt-badge--pill"><?php echo $i; ?></span>
                        </td>


                        <td style="color: #343a40;">


                            <script>

                                $(document).ready(function() {
                                    $(document).on('change', '#<?= 'staff'.$i ?>', function() {

                                        var staff1 = $(this).val();
                                        var logged_user_id = <?php echo $logged_user_id; ?>;
                                        var ticket_id = $(<?php echo 'row'.$i; ?>).val();

                                        $.ajax({
                                            url: "assign_app.php",
                                            method: "POST",
                                            data: {
                                                staff1: staff1,
                                                ticket_id: ticket_id,
                                                logged_user_id: logged_user_id
                                            },
                                            success: function(data) {
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

    <input type="hidden" value="<?php echo $ticket_id; ?>" name="<?php echo 'row'.$i; ?>"
           id="<?php echo 'row'.$i; ?>">

                                <select <?php if ($acc_type == 'Administrative Officer') { ?> hidden <?php } else {
                                } ?> style="width: 100px; font-weight: 500;" id="<?php echo 'staff'.$i; ?>" name="<?php echo 'staff'.$i; ?>"
                                     class="ui-select form-control dropdown dropdown-menu-anim-down " required>
                                    <option value="" hidden="true">Assign 1</option>

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
                                        <option
                                            <?php if ($userID == 12){ ?>style="font-weight: 500; color: #fd7e14;"
                                            hidden<?php } else {
                                        } ?>
                                            value="<?php echo $userID; ?>"><?php echo $firstName . " " . $lastName; ?></option>
                                        <?php
                                    }
                                    ?>


                                </select>



                            <br <?php if ($acc_type == 'Administrative Officer') { ?> hidden <?php } else {
                            } ?> >


                            <script>

                                $(document).ready(function() {
                                    $(document).on('change', '#<?= 'staff2'.$i ?>', function() {

                                        var staff2 = $(this).val();
                                        var logged_user_id = <?php echo $logged_user_id; ?>;
                                        var ticket_id = $(<?php echo 'row2'.$i; ?>).val();

                                        $.ajax({
                                            url: "assign_app2.php",
                                            method: "POST",
                                            data: {
                                                staff2: staff2,
                                                ticket_id: ticket_id,
                                                logged_user_id: logged_user_id
                                            },
                                            success: function(data) {
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

                            <input type="hidden" value="<?php echo $ticket_id; ?>" name="<?php echo 'row2'.$i; ?>"
                                   id="<?php echo 'row2'.$i; ?>">

                            <select <?php if ($acc_type == 'Administrative Officer') { ?> hidden <?php } else {
                            } ?> style="width: 100px; font-weight: 500;" id="<?php echo 'staff2'.$i; ?>" name="<?php echo 'staff2'.$i; ?>"
                                 class="ui-select form-control dropdown dropdown-menu-anim-down " required>
                                <option value="" hidden="true">Assign 2</option>

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
                                    <option
                                        <?php if ($userID == 12){ ?>style="font-weight: 500; color: #fd7e14;"
                                        hidden<?php } else {
                                    } ?>
                                        value="<?php echo $userID; ?>"><?php echo $firstName . " " . $lastName; ?></option>
                                    <?php
                                }
                                ?>


                            </select>

                            <br <?php if ($acc_type == 'Administrative Officer') { ?> hidden <?php } else {
                            } ?> >

                            <select <?php if ($acc_type == 'Administrative Officer') { ?> hidden <?php } else {
                            } ?> style="width: 100px;" id="status" name="status"
                                 class="ui-select form-control dropdown dropdown-menu-anim-down kt-badge--d22" required>
                                <option value="" hidden="true">Status*</option>
                                <option style="color: #fd7e14; font-weight: 500" value="Approved">New</option>
                                <option style="color: #5867dd; font-weight: 500" value="In Progress">In Progress
                                </option>
                                <option style="color: #1dc9b7; font-weight: 500" value="Completed">Completed</option>

                            </select>
                            <br <?php if ($acc_type == 'Administrative Officer') { ?> hidden <?php } else {
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

                            </form>


                            <button <?php if ($acc_type != 'Administrator') { ?> hidden <?php } else {
                            } ?>onclick="
                                if (confirm('Are you sure you want to delete this ticket ?')) {
            return true;

        } else {
            return false;
        }" type="submit" id="submit_remove" name="submit_remove"
                                                                                 class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                                                                 title="Delete">
                                <i style="font-size: 18px; color: #dc3545; font-weight: 800;"
                                   class="la la-trash"></i>
                            </button>


                        </td>

                        <td><?php echo $ticket_id; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php if ($status12 == "Approval Required") { ?> <span style="font-weight: 500"
                                                                                   class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">Approval Required</span>  <?php } elseif ($status12 == "Approved") { ?>
                                <span style="font-weight: 500"
                                      class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Approved</span>  <?php }
                            ?>
                        </td>
                        <td><?php echo $issue; ?></td>
                        <td><?php echo $cat_issue; ?></td>
                        <td class="kt-font-bold kt-font-brand"><?php echo $division; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $emp_code; ?></td>
                        <td><?php echo $designation; ?></td>
                        <td><?php echo $asst_code; ?></td>
                        <td><?php echo $ext; ?></td>

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
