<?php include 'include/header.php'; ?>
<?php include 'include/aside.php'; ?>

<?php

// Begin - PHPMailer Initialization

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'assets/plugins/PHPMailer/src/Exception.php';
require 'assets/plugins/PHPMailer/src/PHPMailer.php';
require 'assets/plugins/PHPMailer/src/SMTP.php';

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

// End - PHPMailer Initialization

?>

<script type="text/javascript">

    function checkForm(form) {

        var xy = form.empCode.value;
        if (isNaN(xy))
        {
            swal.fire("Check Employee Code !", "Employee code should be a number.", "warning");
            form.empCode.focus();
            return false;
        }

        if (form.password.value != "" && form.password.value == form.pw_cf.value) {
            if (form.password.value.length < 6) {
                swal.fire("Weak Password !", "Your password must contain at least six characters.", "warning");
                form.password.focus();
                return false;
            }
            if (form.password.value == form.firstName.value) {
                swal.fire("Confirm Password !", "Your password must be different from Username.", "warning");
                form.password.focus();
                return false;
            }

        } else {
            swal.fire("Confirm Password !", "Passwords do not match !", "warning");
            form.password.focus();
            return false;
        }

        return true;
    }

</script>

<!-- begin:: Content -->


<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">


    <div class="row">


        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-user-1"></i>
										</span>
                    <h3 class="kt-portlet__head-title kt-font-brand">
                        Add a New User</h3>&nbsp;

                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">
                            <div class="dropdown dropdown-inline">
                                <a href="user_list.php" class="btn btn-brand btn-elevate btn-icon-sm">
                                    <i class="la la-users"></i>
                                    View all Users
                                </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!--begin::Form-->
            <form onsubmit="return checkForm(this);" autocomplete="off" name="user_add" id="user_add" method="post"
                  action="" class="kt-form kt-form--label-right">
                <div class="kt-portlet__body">

                    <div class="row">
                        <div class="col-8">

                            <div class="form-group row form-group-marginless kt-margin-t-20">


                                <label class="col-lg-2 col-form-label">Title <span
                                            style="color: #dc3545; font-size: 18px; ">* </span>:</label>

                                <div class="col-10">
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


                                <label class="col-lg-2 col-form-label">First Name <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-user"></i></span></div>
                                        <input name="firstName" id="firstName" type="text" class="form-control"
                                               placeholder="Enter User's First Name" required>
                                    </div>

                                </div>


                                <label class="col-lg-2 col-form-label">Last Name <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-10">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-user"></i></span></div>

                                        <input name="lastName" type="text" class="form-control"
                                               placeholder="Enter User's Last Name" required>
                                    </div>

                                </div>


                                <label class="col-lg-2 col-form-label">Employee Code <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-10">

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-qrcode"></i></span></div>

                                        <input name="empCode" id="empCode" type="text" class="form-control"
                                               placeholder="Enter User's Employee Code" required>
                                    </div>

                                </div>
                                <label class="col-lg-2 col-form-label">Email <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-10">

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


                                <label class="col-lg-3 col-form-label">Account Type <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-9">
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
                                <label class="col-lg-3 col-form-label">Division <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-9">
                                    <div class="input-group">
                                        <select id="division" name="division"
                                                class="form-control" required>
                                            <option value="" hidden="true">Select Applicant's
                                                Division
                                            </option>
                                            <option value="ITS Division">ITS Division
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
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Password <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>
                                <div class="col-9">

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-unlock"></i></span></div>
                                        <input type="password" name="password" id="password" class="form-control"
                                               placeholder="Enter a Password" required>
                                    </div>


                                </div>
                                <label class="col-lg-3 col-form-label">Confirm Password <span
                                            style="color: #dc3545; font-size: 18px;">* </span>:</label>


                                <div class="col-9">

                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                        class="la la-unlock"></i></span></div>
                                        <input type="password" name="pw_cf" id="pw_cf" class="form-control"
                                               placeholder="Re-type Password" required>
                                    </div>

                                </div>


                            </div>

                            <p>
                                <br>
                                Please note that the fields marked with <span
                                        style="color: #dc3545; font-size: 18px;">* </span>
                                are compulsory.

                            </p>

                        </div>

                        <div class="col-4">


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
                                        <div style="font-weight: 500;" class="kanban-title-board">Account Structure
                                        </div>
                                    </header>

                                    <br>

                                    <div style="margin-left: 8%; font-weight: 400;" id="kt_tree_2" class="tree-demo">
                                        <ul>
                                            <li data-jstree='{ "icon" : "fa fa-city kt-font-danger" }'>
                                                Urban Development Authority
                                                <ul>

                                                    <li data-jstree='{ "opened" : true, "icon" : "fa fa-building kt-font-brand" }'>
                                                        ITS Division
                                                        <ul>
                                                            <li data-jstree='{ "selected" : true, "icon" : "fa fa-user-check kt-font-success" }'>
                                                                <a href="#observer_k">Observer</a>
                                                            </li>
                                                            <li data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-warning" }'>
                                                                <a href="#admin_k">Administrator</a>
                                                            </li>
                                                            <li id="observer_k"
                                                                data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-warning" }'>
                                                                <a href="#it_staff_k">IT Staff</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                                <ul>

                                                    <li data-jstree='{ "opened" : true, "icon" : "fa fa-building kt-font-brand" }'>
                                                        Other Divisions
                                                        <ul>
                                                            <li data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-warning" }'>
                                                                <a href="#ad_off_k">Administrative Officer</a>
                                                            </li>
                                                            <li data-jstree='{ "opened" : true, "icon" : "fa fa-user-circle kt-font-success" }'>
                                                                <a href="#staff_k_a">Staff (No Registration)</a>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </div>


                                    <main class="kanban-drag">
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
                                        <div class="kanban-item">
                                            <div class="kt-kanban__badge">

                                                <div class="kt-kanban__content">
                                                    <span class="kt-badge kt-badge--success kt-badge--inline">Staff - Other Divisions</span>
                                                    <div class="kt-kanban__title">
                                                        <span class="kt-font-success">The Staff of Other Divisions</span>
                                                        are not required to register to the system. They can simply
                                                        submit a ticket without login.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </main>


                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-5"></div>
                                <div class="col-lg-7">
                                    <button type="submit" name="submitUser"
                                            class="btn btn-brand">Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>

            <?php

            if (isset($_POST['submitUser'])) {

                date_default_timezone_set('Asia/Colombo');

                $firstName = $_POST['firstName'];
                $lastName = $_POST['lastName'];
                $empCode = $_POST['empCode'];
                $email = $_POST['email'];
                $acc_type = $_POST['permissions'];
                $password = $_POST['password'];
                $date = date_format($date, 'Y-m-d H:i:s');
                $status = "Active";
                $title = $_POST['title'];
                $division = $_POST['division'];
                $hash = password_hash($password, PASSWORD_DEFAULT);

                $query = "INSERT INTO user(firstName, lastName, employeeCode, email, acc_type, password, date_created, status, title, division) VALUES('$firstName','$lastName','$empCode','$email','$acc_type','$hash','$date','$status','$title','$division')";


                //$url_of_host = 'https://tmsuda.000webhostapp.com'; // Testing - Free hosting

                $url_of_host = 'http://localhost/Ticket%20Management%20System'; // Testing - Localhost
                $url_of_host_mail_images = 'https://tmsuda.000webhostapp.com'; // Testing - Free hosting

                $urlToEmail = $url_of_host;

                // Server settings
                $mail->isSMTP();
                $mail->SMTPDebug = 0;
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
                $mail->Debugoutput = 'html';
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->Username = 'udatmsproject@gmail.com';
                $mail->Password = 'vxhsfyuoygpbtfeo';

                // Sender &amp; Recipient
                $mail->From = 'udatmsproject@gmail.com';
                $mail->FromName = 'UDA-TMS';
                $mail->addAddress($email);

                // Content
                $mail->isHTML(true);
                $mail->CharSet = 'UTF-8';
                $mail->Encoding = 'base64';
                $mail->Subject = 'Welcome to Ticket Management System - UDA';

                $mail->Body = "<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
<head>
    <meta content=\"text/html; charset=UTF-8\" http-equiv=\"Content-Type\" />
    <!-- [ if !mso]> <!-->
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\" />
    <!-- <![endif] -->
    <meta content=\"telephone=no\" name=\"format-detection\" />
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\" />
    <title>Reset Your Password on Ticket Management System at UDA</title>
<link rel=\"stylesheet\"
          href=\"https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700\">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src=\"http://paulgoddarddesign.com/js/ripple.js\"></script>
    <style type=\"text/css\">
        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div,
        .ExternalClass b,
        .ExternalClass br,
        .ExternalClass img {
            line-height: 100% !important;
        }

        /* iOS BLUE LINKS */
        .appleBody a {
            color: #212121;
            text-decoration: none;
        }

        .appleFooter a {
            color: #212121 !important;
            text-decoration: none !important;
        }

        /* END iOS BLUE LINKS */
        img {
            color: #ffffff;
            text-align: center;
            font-family: 'Poppins';
            display: block;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100% !important;
            -ms-text-size-adjust: 100% !important;
            font-family: 'Poppins' !important;
        }

        body,
        #body_style {
            background: #F2F3F4;
        }

        table td {
            border-collapse: collapse;
            border-spacing: 0 !important;
        }

        table tr {
            border-collapse: collapse;
            border-spacing: 0 !important;
        }

        table tbody {
            border-collapse: collapse;
            border-spacing: 0 !important;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0 !important;
        }

        span.yshortcuts,
        a span.yshortcuts {
            color: #000001;
            background-color: none;
            border: none;
        }

        span.yshortcuts:hover,
        span.yshortcuts:active,
        span.yshortcuts:focus {
            color: #000001;
            background-color: none;
            border: none;
        }

        img {
            -ms-interpolation-mode: : bicubic;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /**** My desktop styles ****/
        @media only screen and (min-width: 600px) {
            .noDesk {
               
            }

            .td-padding {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

            .padding-container {
                padding: 0px 15px 0px 15px !important;
                mso-padding-alt: 0px 15px 0px 15px !important;
            }

            .mobile-column-left-padding {
                padding: 0px 0px 0px 0px !important;
                mso-alt-padding: 0px 0px 0px 0px !important;
            }

            .mobile-column-right-padding {
                padding: 0px 0px 0px 0px !important;
                mso-alt-padding: 0px 0px 0px 0px !important;
            }

            .mobile {
             
            }
        }

        /**** My mobile styles ****/
        @media only screen and (max-width: 599px) and (-webkit-min-device-pixel-ratio: 1) {
            *[class].wrapper {
                width: 100% !important;
            }

            *[class].container {
                width: 100% !important;
            }

            *[class].mobile {
                width: 100% !important;
                display: block !important;
            }

            *[class].image {
                width: 100% !important;
                height: auto;
            }

            *[class].center {
                margin: 0 auto !important;
                text-align: center !important;
            }

            *[class=\"mobileOff\"] {
                width: 0px !important;
                
            }

            *[class*=\"mobileOn\"] {
                display: block !important;
                max-height: none !important;
            }

            p[class=\"mobile-padding\"] {
                padding-left: 0px !important;
                padding-top: 10px;
            }

            .padding-container {
                padding: 0px 15px 0px 15px !important;
                mso-padding-alt: 0px 15px 0px 15px !important;
            }

            .hund {
                width: 100% !important;
                height: auto !important;
            }

            .td-padding {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

            .mobile-column-left-padding {
                padding: 18px 0px 18px 0px !important;
                mso-alt-padding: 18px 0px 18px 0px !important;
            }

            .mobile-column-right-padding {
                padding: 18px 0px 0px 0px !important;
                mso-alt-padding: 18px 0px 0px 0px !important;
            }

            .stack {
                width: 100% !important;
            }

            img {
                width: 100% !important;
                height: auto !important;
            }

            *[class=\"hide\"] {
               
            }

            *[class=\"Gmail\"] {
                
            }

            .Gmail {
              
            }

            .bottom-padding-fix {
                padding: 0px 0px 18px 0px !important;
                mso-alt-padding: 0px 0px 18px 0px;
            }
        }

        .social,
        .social:active {
            opacity: 1 !important;
            transform: scale(1);
            transition: all .2s !important;
        }

        .social:hover {
            opacity: 0.8 !important;
            transform: scale(1.1);
            transition: all .2s !important;
        }

        .button.raised {
            transition: box-shadow 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            transition: all .2s;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.26);
        }

        .button.raised:hover {
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);
            transition: all .2s;
            -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);
            transition: all .2s;
            -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2);
            transition: all .2s;
        }

        .card-1 {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
            transition: box-shadow .45s;
        }

        .card-1:hover {
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19);
            -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19);
            -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, .2), 0 6px 20px 0 rgba(0, 0, 0, .19);
            transition: box-shadow .45s;
        }

        .ripplelink {
            display: block color:#fff;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            -webkit-transition: all 0.2s ease;
            -moz-transition: all 0.2s ease;
            -o-transition: all 0.2s ease;
            transition: all 0.2s ease;
            z-index: 0;
        }

        .ripplelink:hover {
            z-index: 1000;
        }

        .ink {
            display: block;
            position: absolute;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 100%;
            -webkit-transform: scale(0);
            -moz-transform: scale(0);
            -o-transform: scale(0);
            transform: scale(0);
        }

        .animate {
            -webkit-animation: ripple 0.65s linear;
            -moz-animation: ripple 0.65s linear;
            -ms-animation: ripple 0.65s linear;
            -o-animation: ripple 0.65s linear;
            animation: ripple 0.65s linear;
        }

        @-webkit-keyframes ripple {
            100% {
                opacity: 0;
                -webkit-transform: scale(2.5);
            }
        }

        @-moz-keyframes ripple {
            100% {
                opacity: 0;
                -moz-transform: scale(2.5);
            }
        }

        @-o-keyframes ripple {
            100% {
                opacity: 0;
                -o-transform: scale(2.5);
            }
        }

        @keyframes ripple {
            100% {
                opacity: 0;
                transform: scale(2.5);
            }
        }
    </style>
    <!--[if gte mso 9]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
</head>

<body style=\"margin:0; padding:0; background-color: #F2F3F4 !important;\" bgcolor=\"#fff\">
    <!--[if mso]>
    <style type=\"text/css\">
    body, table, td {font-family: Arial, Helvetica, sans-serif !important;}
    </style>
    <![endif]-->
    <!-- START EMAIL -->
    <table style=\"background-color: #F2F3F4;\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#fff\">
        <div class=\"Gmail\" style=\"height: 1px !important; margin-top: -1px !important; max-width: 600px !important; min-width: 600px !important; width: 600px !important;\"></div>
        <div style=\"max-height: 0px; overflow: hidden;\">
            Welcome to Ticket Management System at UDA
        </div>
        <!-- Insert &zwnj;&nbsp; hack after hidden preview text -->
        <div style=\"max-height: 0px; overflow: hidden;\">
            &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>




        <!-- START LOGO -->
        <tr>
            <td width=\"100%\" valign=\"top\" align=\"center\" class=\"padding-container\" style=\"padding: 18px 0px 18px 0px!important; mso-padding-alt: 18px 0px 18px 0px;\">
                <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\">
                    <tr>
                        <td align=\"center\">
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                <tr>
                                    <td width=\"100%\" valign=\"top\" align=\"center\">
                                        <table style=\"background-color: #F2F3F4;\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\" bgcolor=\"#eeeeee\">
                                            <tr>
                                                <td align=\"center\">
                                                    <table width=\"600\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"container\" align=\"center\">
                                                        <!-- START HEADER IMAGE -->
                                                        <tr>
                                                            <td align=\"center\" class=\"hund\" width=\"600\">
                                                                <img src=\"$url_of_host_mail_images/assets/media/logos/logo-4.png\" width=\"50\" alt=\"Logo\" border=\"0\" style=\"max-width: 50px; display:block; \">

                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"td-padding\" align=\"center\" style=\" color: #212121!important; font-size: 24px; line-height: 30px; padding-top: 18px; padding-left: 40px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 13px;\">
                                                                Ticket Management System
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"td-padding\" align=\"center\" style=\" color: #212121!important; font-size: 16px; line-height: 24px; padding-top: 8px; padding-left: 40px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 18px;\">
                                                                Urban Development Authority
                                                            </td>
                                                        </tr>
                                                        <!-- END HEADER IMAGE -->
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- END LOGO -->

        <!-- START CARD 1 -->
        <tr>
            <td width=\"100%\" valign=\"top\" align=\"center\" class=\"padding-container\" style=\"padding-top: 0px!important; padding-bottom: 18px!important; mso-padding-alt: 0px 0px 18px 0px;\">
                <table width=\"600\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\">
                    <tr>
                        <td>
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                <tr>
                                    <td style=\"border-radius: 3px; border-bottom: 2px solid #d4d4d4;\" class=\"card-1\" width=\"100%\" valign=\"top\" align=\"center\">
                                        <table style=\"border-radius: 3px;\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\" bgcolor=\"#ffffff\">
                                            <tr>
                                                <td align=\"center\">
                                                    <table width=\"600\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"container\">
                                                        <!-- START HEADER IMAGE -->
                                                        <tr>
                                                            <td align=\"center\" class=\"hund ripplelink\" width=\"600\">
                                                                <img align=\"center\" width=\"600\" style=\"border-radius: 3px 3px 0px 0px; width: 100%; max-width: 600px!important\" class=\"hund\" src=\"$url_of_host_mail_images/assets/media/logos/wel.gif\">
                                                            </td>
                                                        </tr>
                                                        <!-- END HEADER IMAGE -->
                                                        <!-- START BODY COPY -->
                                                        <tr align=\"center\">
                                                            <td class=\"td-padding\" align=\"center\" style=\" color: #212121!important; font-size: 24px; line-height: 30px; padding-top: 18px; padding-left: 40px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 13px;\">
                                                                <br>
                                                                 Welcome Aboard<br>
                                                            </td>
                                                        </tr>
                                                         <tr>
                                                            <td class=\"td-padding\" align=\"left\" style=\"color: #212121!important; font-size: 18px; line-height: 30px; padding-top: 18px; padding-left: 40px!important; padding-right: 40px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 13px;\">
                                                                 Hi $title <span style=\"font-weight: 600; text-transform: uppercase;\">$firstName $lastName,</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"td-padding\" align=\"left\" style=\" color: #212121!important; font-size: 16px; line-height: 24px; padding-top: 18px; padding-left: 40px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 18px;\">
                                                              
                                                              Ticket Management System is a tool for the managing of all IT related troubleshooting tickets 
                                                              among divisions in Urban Development Authority.
                                                              
                                                              <br><br>
                                                              
                                                              First you need to login to the system by selecting your Username which is, <span style=\"font-weight: 600; text-transform: uppercase;\">$firstName $lastName | $empCode - $acc_type</span> and entering your password given by IT Administration.
                                                              
                                                              <br>
                                                              It's highly recommend to change your password after the first time you logged into the system.  
                                                              That can be done by after clicking on top left corner profile icon and navigating to <span style=\"font-weight: 600;\">Account Settings</span> while logged in.
                                                              <br>   <br>      
                                                                 You can simply click on below <span style=\"font-weight: 600;\">Get Started</span> button to manage all of your tickets.
                                                                
                                                            </td>
                                                        </tr>
                                                        <!-- END BODY COPY -->
                                                        <!-- BUTTON -->
                                                        <tr align=\"center\">
                                                            <td align=\"center\" style=\"padding: 18px 18px 18px 18px; mso-alt-padding: 18px 18px 18px 18px!important;\">
                                                                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                    <tr align=\"center\">
                                                                        <td>
                                                                            <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                                                <tr>
                                                                                    <td align=\"center\" style=\"border-radius: 3px;\" bgcolor=\"#2c77f4\">
                                                                                        <a class=\"button raised\" href=\"$urlToEmail\" target=\"_blank\" style=\"font-size: 14px; line-height: 14px; font-weight: 500; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 25px; border: 8px solid #2c77f4; display: inline-block;\">Get Started</a>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"td-padding\" align=\"left\" style=\" color: #212121!important; font-size: 16px; line-height: 24px; padding-top: 18px; padding-left: 40px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 18px;\">
                                                                Cheers.<br><br> <i>This is an auto generated email. Please don't reply.</i>
                                                                <br><br><br>
                                                            </td>
                                                        </tr>
                                                        <!-- END BUTTON -->
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- END CARD 1 -->

        <!-- SPACER -->
        <!--[if gte mso 9]>
      <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">
        <tr>
          <td align=\"center\" valign=\"top\" width=\"600\" height=\"18\">
            <![endif]-->
        <tr>
            <td height=\"18px\"></td>
        </tr>
        <!--[if gte mso 9]>
          </td>
        </tr>
      </table>
      <![endif]-->
        <!-- END SPACER -->

        <!-- FOOTER -->
        <tr>
            <td width=\"100%\" valign=\"top\" align=\"center\" class=\"padding-container\">
                <table width=\"600\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\">
                    <tr>
                        <td width=\"100%\" valign=\"top\" align=\"center\">
                            <table style=\"background-color: #F2F3F4;\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\" bgcolor=\"#eeeeee\">
                                <tr>
                                    <td align=\"center\">
                                        <table style=\"background-color: #F2F3F4;\" width=\"600\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"container\">
                                            <tr>
                                                <!-- SOCIAL -->
                                                <td align=\"center\" width=\"300\" style=\"padding-top: -10px!important; padding-bottom: 18px!important; mso-padding-alt: 0px 0px 18px 0px;\">
                                                    <table style=\"background-color: #F2F3F4;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tr>
                                                        <td class=\"td-padding\" align=\"center\" style=\" color: #212121!important; font-size: 12px; line-height: 24px; padding-top: 0px; padding-left: 0px!important; padding-right: 0px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 0px 0px 0px 0px;\">
                                                    2020 | URBAN DEVELOPMENT AUTHORITY
                                                </td>
                                                        

                                                        </tr>
                                                    </table>
                                                </td>
                                                <!-- END SOCIAL -->
                                            </tr>
                                            <tr>
                                                
                                                <td align=\"center\" valign=\"top\" class=\"social\">
                                                                <a style=\"font-size: 12px; color: black; font-weight: 500; text-decoration: none;\" href=\"$url_of_host/assets/profile/index.php\" target=\"_blank\">
                                                                   <img src=\"$url_of_host_mail_images/assets/media/logos/s_de.png\">
                                                                </a>
                                                            </td>
                                            </tr>

                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- FOOTER -->

        <!-- SPACER -->
        <!--[if gte mso 9]>
      <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"600\">
        <tr>
          <td align=\"center\" valign=\"top\" width=\"600\" height=\"36\">
            <![endif]-->
        <tr>
            <td height=\"36px\"></td>
        </tr>
        <!--[if gte mso 9]>
          </td>
        </tr>
      </table>
      <![endif]-->
        <!-- END SPACER -->

    </table>
    <!-- END EMAIL -->
    <div style=\"white-space:nowrap; font:15px courier; line-height:0;\">
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    </div>
</body>
</html>";

                $mail->AltBody = 'Hi $title $firstName $lastName, Someone requested a new password for your Ticket Management 
            System account at UDA. If that\'s you, you can simply go to following link to reset your password. ' . $urlToEmail . '   If you didn\'t make this 
            request, then you can safely ignore this email. Regards.';

                if ($mail->send()) {

                    echo 'Email Sending Success';


                } else {

                    echo 'Email Sending Failed';


                }


                $string = date("Y-m-d");
                $date = DateTime::createFromFormat("Y-m-d", $string);
                $date = date_format($date, 'Y-m-d H:i:s');
                $query_log_user_add = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$logged_user_id', '$date', 'User ID: $logged_user_id Added a new user (Acc Type: $acc_type) named $firstName $lastName with Employee Code: $empCode')";
                $create_query_query_log_user_add = mysqli_query($con, $query_log_user_add);

                $create_query = mysqli_query($con, $query);

                if ($create_query) {

                    echo '<meta http-equiv=Refresh content="0;url=user_success.php">';

                } else {
                    echo " <div class='alert alert-solid-danger alert-bold' role='alert'>";
                    echo " <div class='alert-text'>Something went wrong.</div>";
                    echo " </div>";
                }
            }

            ?>
            <!--end::Form-->
        </div>

        <!--end::Portlet-->


    </div>


</div>


</div>


<!-- end:: Content -->
</div>


<?php include 'include/footer.php'; ?>
