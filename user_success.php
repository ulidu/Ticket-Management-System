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
                            User Account Created Successfully
                        </h3>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <center><img width="22%" src="assets\media\logos\user.gif"></center>
                    <br>
                    <center>

                        <?php

                        $lastRow = "SELECT * FROM user ORDER BY userID DESC LIMIT 1";
                        $run_query_last = mysqli_query($con,$lastRow);

                        while ($lastrow = mysqli_fetch_assoc($run_query_last)) {
                            $firstName = $lastrow['firstName'];
                            $lastName = $lastrow['lastName'];
                            $title= $lastrow['title'];
                        ?>

                        <h3 style="font-size: 20px" class="kt-iconbox__title">Welcome,</h3>

                            <h3 class="kt-iconbox__title"><?php echo $title.' '.$firstName.' '.$lastName; ?></h3>


                        <p style=" font-size: 15px">User Account for <?php echo $title.' '.$firstName.' '.$lastName; ?> Created Successfully.</p>
                        <a href="user_list.php" class="btn btn-success btn-elevate btn-icon-sm">
                            <i class="la la-chevron-circle-left"></i>
                            Users List
                        </a>

                        <?php
                        }
                        ?>
                        <a href="add_user.php" class="btn btn-brand btn-elevate btn-icon-sm">
                            <i class="la la-user-plus"></i>
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
