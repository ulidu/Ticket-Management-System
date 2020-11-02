<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


    <!-- begin:: Content -->

    <div class="kt-portlet kt-portlet--tabs">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-toolbar">
                <ul class="nav nav-tabs nav-tabs-space-xl nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand"
                    role="tablist">


                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_3" role="tab">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                          fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                          fill="#000000" fill-rule="nonzero"/>
                                </g>
                            </svg>
                            Update Account Information
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="kt-portlet__body">
            <form action="" autocomplete="off" name="user_edit" method="post">
                <div class="tab-content">
                    <div class="tab-pane active" id="kt_user_edit_tab_1" role="tabpanel">
                        <div class="kt-form kt-form--label-right">
                            <div class="kt-form__body">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h3 class="kt-section__title kt-section__title-sm">Edit User Information</h3>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Title <span
                                                        style="color: #dc3545; font-size: 18px; ">* </span>:</label>

                                            <div class="col-lg-9 col-xl-6">
                                                <div class="form-group">


                                                    <div class="kt-radio-inline">


                                                        <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                            <input type="radio" value="Mr." name="title" checked> Mr.
                                                            <span></span>
                                                        </label>


                                                        <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                            <input type="radio" value="Mrs." name="title"> Mrs.
                                                            <span></span>
                                                        </label>


                                                        <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                            <input type="radio" value="Miss." name="title">
                                                            Miss.
                                                            <span></span>
                                                        </label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>







                                        <div class="form-group row">








                                            <label class="col-xl-3 col-lg-3 col-form-label">First Name <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-user"></i></span></div>
                                                    <input name="firstName" id="firstName" type="text" class="form-control"
                                                           placeholder="Enter User's First Name" required>
                                                </div>

                                            </div>


                                            <label class="col-xl-3 col-lg-3 col-form-label">Last Name <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-user"></i></span></div>

                                                    <input name="lastName" type="text" class="form-control"
                                                           placeholder="Enter User's Last Name" required>
                                                </div>

                                            </div>


                                            <label class="col-xl-3 col-lg-3 col-form-label">Employee Code <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">

                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-qrcode"></i></span></div>

                                                    <input name="empCode" type="text" class="form-control"
                                                           placeholder="Enter User's Employee Code" required>
                                                </div>

                                            </div>
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">

                                                <div class="input-group">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i
                                                                    class="la la-at"></i></span></div>

                                                    <input name="email" type="email" class="form-control"
                                                           placeholder="Enter User's Email Address" required>
                                                </div>

                                            </div>


                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>
                                        <div class="form-group row form-group-marginless">


                                            <label class="col-xl-3 col-lg-3 col-form-label">Account Type <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="form-group">

                                                    <div class="kt-radio-list">

                                                        <label class="kt-radio kt-radio--bold kt-radio--brand">
                                                            <input type="radio" value="IT Staff" name="permissions" checked> IT
                                                            Staff
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--danger">
                                                            <input type="radio" value="Administrator" name="permissions">
                                                            Administrator
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--warning">
                                                            <input type="radio" value="Administrative Officer" name="permissions">
                                                            Administrative Officer
                                                            <span></span>
                                                        </label>
                                                        <label class="kt-radio kt-radio--bold kt-radio--success">
                                                            <input type="radio" value="Observer" name="permissions"> Observer
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                    <span class="form-text text-muted">Select the account types with different permissions.</span>
                                                </div>


                                            </div>
                                            <label class="col-xl-3 col-lg-3 col-form-label">Division <span
                                                        style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group">
                                                    <select id="division" name="division"
                                                            class="form-control" required>
                                                        <option value="" hidden="true">Select Applicant's
                                                            Division
                                                        </option>
                                                        <option value="Project Management Division">ITS Division
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


                                        </div>
                                        <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg kt-separator--portlet-fit"></div>


                                        <p>

                                            Please note that the fields marked with <span
                                                    style="color: #dc3545; font-size: 18px;">* </span>
                                            are compulsory.

                                        </p>













                                    </div>


                                </div>
                                <div class="kt-portlet__foot">
                                    <div class="kt-form__actions">
                                        <div class="row">
                                            <div class="col-lg-5"></div>
                                            <div class="col-lg-7">
                                                <button type="submit" name="submitUser"
                                                        class="btn btn-brand">Update Details
                                                </button>&nbsp;
                                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- end:: Content -->


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
            <table style="text-align: center"
                   class="table table-striped- table-bordered table-hover"
                   id="kt_table_1">
                <thead>
                <tr style="font-size: 14px;" class="kt-label-bg-color-1">
                    <th>No.</th>
                    <th style="min-width: 120px;">Actions</th>
                    <th>User ID</th>
                    <th>Employee Code</th>
                    <th>Status</th>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Account Type</th>
                    <th>Division</th>
                    <th>Created Date</th>

                </tr>
                </thead>
                <tbody>

                <?php

                $query = "select * from user";
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

                <tr style="font-weight: 400;">

                    <td>

                             <span style="font-weight: 500"
                                   class="kt-badge kt-badge--dark kt-badge--inline kt-badge--pill"><?php echo $i; ?></span>

                    </td>

                    <td style="min-width: 120px;">




                            <input type="hidden" value="" name="ticket_hidden"
                                   id="ticket_hidden">


                            <button onclick="" id="submit_approve" name="submit_approve" type="submit"
                                 class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--d22 kt-badge--inline kt-badge--pill"
                                 title="Edit User">
                                <i style="font-size: 18px; color: #007bff; font-weight: 800;"
                                   class="la la-edit"></i>
                            </button>
&nbsp;
                        <button onclick="" id="submit_approve" name="submit_approve" type="submit"
                                class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--warn kt-badge--inline kt-badge--pill"
                                title="Disable User">
                            <i style="font-size: 18px; color: #ffb822; font-weight: 800;"
                               class="la la-minus-circle"></i>
                        </button>
                        &nbsp;
                            <button onclick="
                                if (confirm('Are you sure you want to delete this ticket ?')) {
            return true;

        } else {
            return false;
        }" type="submit" id="submit_remove" name="submit_remove"
                                 class="btn btn-sm btn-clean btn-icon btn-icon-md kt-badge kt-badge--33 kt-badge--inline kt-badge--pill"
                                 title="Delete User">
                                <i style="font-size: 18px; color: #dc3545; font-weight: 800;"
                                   class="la la-trash"></i>
                            </button>

                        <hr>

                        <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill kt-font-bold">Password Reset</span>



                    </td>

                    <td><?php echo $userID; ?></td>
                    <td><?php echo $employeeCode; ?></td>
                    <td>
                        <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill kt-font-bold"><?php echo $status; ?></span>
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
