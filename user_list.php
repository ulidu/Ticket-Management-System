<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

    <div class="kt-portlet kt-portlet--mobile">
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
                <tr class="kt-label-bg-color-1">
                    <th>Actions</th>
                    <th>User ID</th>
                    <th>Employee Code</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Division</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Password</th>
                </tr>
                </thead>
                <tbody>

                <?php

                $query = "select * from user";
                $run_query = mysqli_query($con, $query);

                while ($row = mysqli_fetch_assoc($run_query)) {

                    $userID = $row['userID'];
                    $employeeCode = $row['employeeCode'];
                    $firstName = $row['firstName'];
                    $lastName = $row['lastName'];
                    $division = $row['division'];
                    $email = $row['email'];
                    $admin = $row['admin'];
                    $password = $row['password'];

                    ?>

                    <tr>

                        <td>


                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                <i style="font-size: 18px; color: #007bff;" class="la la-check"></i>
                            </a>

                            <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                <i style="font-size: 18px; color: #dc3545;" class="la la-trash"></i>
                            </a>


                        </td>

                        <td><?php echo $userID; ?></td>
                        <td><?php echo $employeeCode; ?></td>
                        <td><?php echo $firstName; ?></td>
                        <td><?php echo $lastName; ?></td>
                        <td><?php echo $division; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $admin; ?></td>
                        <td><?php echo $password; ?></td>

                    </tr>

                <?php } ?>

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
