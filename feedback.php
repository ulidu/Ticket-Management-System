<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<!-- end:: Header -->
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Content Head -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    Feedback
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
										<span class="kt-subheader__desc" id="kt_subheader_total">
											Submit any feedback or a problem with the system </span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">

                    <a class="btn kt-subheader__btn-daterange" id="" data-placement="left">
                                    <span class="kt-subheader__btn-daterange-title"
                                          id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                        <span class="kt-subheader__btn-daterange-date"
                              id="kt_dashboard_daterangepicker_date">: <?php
                            $string = date("Y-m-d");
                            $date = DateTime::createFromFormat("Y-m-d", $string);
                            echo $date->format(" M ");
                            $date = DateTime::createFromFormat("Y-m-d", $string);
                            echo $date->format("d");
                            ?></span>
                        <i class="flaticon2-calendar"></i>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

        <!-- begin:: Section -->
        <div style="margin-top: -10px;" class="kt-sc-faq-3 kt-sc-feedback">
            <div class="kt-sc__title">
                Any feedback on the System ?
            </div>
            <div class="kt-sc__subtitle">
                We value your honest opinion on the Ticket Management System !<br>
            </div>
            <span class="kt-font-lg">Let us know anything we can do for making the system better.</span>
        <!-- end:: Section -->
        </div>

        <br><br>
            <div class="row">

                <div class="col-6">
                    <div class="kt-sc__bg">
                        <br><br>
                        <img width="100%" src="assets/media/logos/wel.gif">
                    </div>
                    <br>
                        <div class="kt-portlet kt-callout kt-callout--success kt-callout--diagonal-bg">
                            <div class="kt-portlet__body">
                                <div class="kt-callout__body">
                                    <div class="kt-callout__content">
                                        <h3 class="kt-callout__title">Phone Call</h3>
                                        <p class="kt-callout__desc">
                                            Here's our ITS Division's extension number for any inquiries or clarifications.
                                        </p>
                                    </div>
                                    <div class="kt-callout__action">
                                        <a href="javascript:;" data-toggle="modal" data-target="#kt_chat_modal" class="btn btn-custom kt-font-lg btn-bold btn-upper btn-font-sm  btn-success">1 2 3 4</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

                <div class="col-6">
                    <!-- begin:: Section -->
                    <div class="kt-portlet kt-margin-top-30">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    Send us your inquiries
                                </h3>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form class="kt-form" id="feedback_form" method="post" >
                            <div class="kt-portlet__body">
                                <div class="row">
                                    <div class="col-xl-3"></div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="name_help" name="name_help" aria-describedby="nameHelp" placeholder="Enter your name">
                                        </div>
                                        <div class="form-group">
                                            <label>Extension No.</label>
                                            <input type="text" class="form-control" id="ext_help" name="ext_help" aria-describedby="nameHelp" placeholder="Enter nearest phone no.">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea">Your Message<span style="color: #dc3545; font-size: 15px;">* </span></label>
                                            <textarea class="form-control" id="message_help" name="message_help" rows="4" required></textarea>
                                            <span class="form-text text-muted">We'll never share your name with anyone else.</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-3"></div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <div class="row">
                                        <div class="col-xl-3"></div>
                                        <div class="col-xl-6">
                                            <input value="Send Feedback" id="send_feedback" name="send_feedback" type="submit" class="btn btn-brand">
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                        <div class="col-xl-3"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <script>

                            $(document).ready(function () {

                                $("#feedback_form").submit(function () {

                                    var name_help = $("#name_help").val();
                                    var ext_help = $("#ext_help").val();
                                    var message_help = $("#message_help").val();

                                    if (ext_help != '' && isNaN(ext_help)) {

                                        swal.fire("Incorrect Extension No. !", "Please enter a valid extension number", "warning");
                                        return false;

                                    }else {

                                        $.ajax({
                                            url: "feedback_app.php",
                                            method: "POST",
                                            data: {
                                                name_help: name_help,
                                                ext_help: ext_help,
                                                message_help: message_help
                                            },
                                            success: function (data) {
                                                //alert(data.toString());

                                                if (data.toString() == 1){

                                                    swal.fire("Feedback Sent Successfully !", "Thank you for your valuable feedback", "success");

                                                    setTimeout(function () {
                                                        location.reload(1);
                                                    }, 1200);

                                                }else {

                                                    swal.fire("Feedback Sending Failed !", "Please check the required fields again", "danger");

                                                }

                                            }
                                        });

                                        event.preventDefault();

                                    }
                            });
                            });
                        </script>
                        <!--end::Form-->
                    </div>
                    <!-- end:: Section -->
                </div>

            </div></div>

    <!-- end:: Content -->
</div>


<?php include 'include/footer.php'; ?>
