<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<!-- end:: Header -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    New Ticket
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Enter the following details and submit </span>
                </div>
            </div>

        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">

                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--mobile">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                Successfully Submitted
                            </h3>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        
                        <center><img width="15%" src="assets/media/logos/check.gif"></center>
                       <br>
<center>
    <h3 class="kt-iconbox__title">Your Ticket was Successfully Submitted.</h3>


                        <p style=" font-size: 14px">Our staff member will get back to you soon.</p>
    <a href="task_add.php" class="btn btn-brand btn-elevate btn-icon-sm">
        <i class="la la-chevron-circle-left"></i>
        Back to Home
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
