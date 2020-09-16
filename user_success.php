<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>


<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">

            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--mobile">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            User Successfully Created
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <center><img width="20%" src="assets\media\logos\user.gif"></center>
                    <br>
                    <center>
                        <h3 class="kt-iconbox__title">New User Created Successfully.</h3>


                        <p style=" font-size: 14px">Now administrators can assign tasks to Mr. Staff</p>
                        <a href="user_list.php" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-chevron-circle-left"></i>
                            Users List
                        </a>
                        <a href="user_list.php" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la"></i>
                            Add Another User
                        </a>
                    </center>
                </div>
            </div>

            <!--end::Portlet-->
        </div>
    </div>
</div>
</div>


<?php include 'include/footer.php'; ?>
