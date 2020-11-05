<?php

include 'include/db.php';

if (isset($_POST["email"])) {

date_default_timezone_set('Asia/Colombo');

$string = date("Y-m-d");
$date = DateTime::createFromFormat("Y-m-d", $string);

$date = date_format($date, 'Y-m-d H:i:s');

$email = $_POST['email'];


$query_check_email = "SELECT * FROM user WHERE email = '$email'";
$run_query_check_email = mysqli_query($con, $query_check_email);

$count_email = mysqli_num_rows($run_query_check_email);

if ($count_email == 0) {

    echo 0;

}else{

    $query_email = "SELECT * FROM user WHERE email = '$email'";
    $run_query_email = mysqli_query($con, $query_email);

    while ($row_email = mysqli_fetch_assoc($run_query_email)) {

        $userID = $row_email['userID'];
        $employeeCode = $row_email['employeeCode'];
        $firstName = $row_email['firstName'];
        $lastName = $row_email['lastName'];
        $date = $row_email['date_created'];
        $email = $row_email['email'];
        $type = $row_email['acc_type'];
        $status = $row_email['status'];
        $password = $row_email['password'];
        $title = $row_email['title'];
        $division = $row_email['division'];


        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $urlToEmail = 'https://tmsuda.000webhostapp.com/forget.php?'.http_build_query([
                'selector' => $selector,
                'validator' => bin2hex($token)
            ]);

        $expires = new DateTime('NOW');
        $expires->add(new DateInterval('PT03H')); // 3 hours
        $expires->format('Y-m-d\TH:i:s');

        $query_res_token = "INSERT INTO account_recovery(userID, email_reset, selector, token, expires) VALUES('$userID', '$email', '$selector', '$token','$expires')";
        $query_res_log = "INSERT INTO log(log_userID, log_date_time, log_action) VALUES('$userID', '$date', 'User with email : $email has requested a password reset link.')";

        $create_query_res_token = mysqli_query($con, $query_res_token);
        $create_query_res_log = mysqli_query($con, $query_res_log);


        $to = $email;
        $subject = "Reset Your Password. Ticket Management System - UDA";
        $message = "
    <html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">
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
            background: #fff;
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
                display: none !important;
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
                display: none !important
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
                display: none !important;
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
                display: none !important
            }

            *[class=\"Gmail\"] {
                display: none !important
            }

            .Gmail {
                display: none !important
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

<body style=\"margin:0; padding:0; background-color: #fff !important;\" bgcolor=\"#fff\">
    <!--[if mso]>
    <style type=\"text/css\">
    body, table, td {font-family: Arial, Helvetica, sans-serif !important;}
    </style>
    <![endif]-->
    <!-- START EMAIL -->
    <table style=\"background-color: transparent;\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" bgcolor=\"#fff\">
        <div class=\"Gmail\" style=\"height: 1px !important; margin-top: -1px !important; max-width: 600px !important; min-width: 600px !important; width: 600px !important;\"></div>
        <div style=\"display: none; max-height: 0px; overflow: hidden;\">
            Reset Your Password on Ticket Management System at UDA
        </div>
        <!-- Insert &zwnj;&nbsp; hack after hidden preview text -->
        <div style=\"display: none; max-height: 0px; overflow: hidden;\">
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
                                        <table style=\"background-color: transparent;\" width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\" bgcolor=\"#eeeeee\">
                                            <tr>
                                                <td align=\"center\">
                                                    <table width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"container\" align=\"center\">
                                                        <!-- START HEADER IMAGE -->
                                                        <tr>
                                                            <td align=\"center\" class=\"hund\" width=\"800\">
                                                                <img src=\"https://tmsuda.000webhostapp.com/assets/media/logos/logo-4.png\" width=\"50\" alt=\"Logo\" border=\"0\" style=\"max-width: 50px; display:block; \">

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
                <table width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\">
                    <tr>
                        <td>
                            <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
                                <tr>
                                    <td style=\"border-radius: 3px; border-bottom: 2px solid #d4d4d4;\" class=\"card-1\" width=\"100%\" valign=\"top\" align=\"center\">
                                        <table style=\"border-radius: 3px;\" width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\" bgcolor=\"#ffffff\">
                                            <tr>
                                                <td align=\"center\">
                                                    <table width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"container\">
                                                        <!-- START HEADER IMAGE -->
                                                        <tr>
                                                            <td align=\"center\" class=\"hund ripplelink\" width=\"800\">
                                                                <img align=\"center\" width=\"800\" style=\"border-radius: 3px 3px 0px 0px; width: 100%; max-width: 800px!important\" class=\"hund\" src=\"https://www.mygo.ge/uploads/blog/1584024171.jpg\">
                                                            </td>
                                                        </tr>
                                                        <!-- END HEADER IMAGE -->
                                                        <!-- START BODY COPY -->
                                                        <tr align=\"center\">
                                                            <td class=\"td-padding\" align=\"center\" style=\" color: #212121!important; font-size: 24px; line-height: 30px; padding-top: 18px; padding-left: 40px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 13px;\">
                                                                <br>
                                                                 Reset Your Password on Ticket Management System<br>
                                                            </td>
                                                        </tr>
                                                         <tr>
                                                            <td class=\"td-padding\" align=\"left\" style=\"color: #212121!important; font-size: 18px; line-height: 30px; padding-top: 18px; padding-left: 40px!important; padding-right: 40px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 13px;\">
                                                                 Hi $title.' '.$firstName.' '.$lastName,
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class=\"td-padding\" align=\"left\" style=\" color: #212121!important; font-size: 16px; line-height: 24px; padding-top: 18px; padding-left: 40px!important; padding-right: 18px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 18px 18px 0px 18px;\">
                                                              
            
                                                                Someone requested a new password for your Ticket Management System account at UDA. If that's you, you can simply click on below <span style=\"font-weight: 600;\">Reset Password</span> button.
                                                                
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
                                                                                        <a class=\"button raised\" href=\"$urlToEmail\" target=\"_blank\" style=\"font-size: 14px; line-height: 14px; font-weight: 500; font-family: 'Poppins'; color: #ffffff; text-decoration: none; border-radius: 3px; padding: 10px 25px; border: 8px solid #2c77f4; display: inline-block;\">Reset Password</a>
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
                                                                If you didn't make this request, then you can safely ignore this email.
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
      <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"800\">
        <tr>
          <td align=\"center\" valign=\"top\" width=\"800\" height=\"18\">
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
                <table width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\">
                    <tr>
                        <td width=\"100%\" valign=\"top\" align=\"center\">
                            <table style=\"background-color: transparent;\" width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" align=\"center\" class=\"wrapper\" bgcolor=\"#eeeeee\">
                                <tr>
                                    <td align=\"center\">
                                        <table style=\"background-color: transparent;\" width=\"800\" cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"container\">
                                            <tr>
                                                <!-- SOCIAL -->
                                                <td align=\"center\" width=\"300\" style=\"padding-top: 0px!important; padding-bottom: 18px!important; mso-padding-alt: 0px 0px 18px 0px;\">
                                                    <table style=\"background-color: transparent;\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
                                                        <tr>
                                                            <td align=\"right\" valign=\"top\" class=\"social\">
                                                                <a style=\"font-size: 12px; color: black; font-weight: 500; text-decoration: none;\" href=\"https://tmsuda.000webhostapp.com/assets/profile/index.php\" target=\"_blank\">
                                                                   DEVELOPED BY ULIDU T. GUNATHILAKE
                                                                </a>
                                                            </td>

                                                        </tr>
                                                    </table>
                                                </td>
                                                <!-- END SOCIAL -->
                                            </tr>
                                            <tr>
                                                
                                                <td class=\"td-padding\" align=\"center\" style=\" color: #212121!important; font-size: 14px; line-height: 24px; padding-top: 0px; padding-left: 0px!important; padding-right: 0px!important; padding-bottom: 0px!important; mso-line-height-rule: exactly; mso-padding-alt: 0px 0px 0px 0px;\">
                                                    <hr> URBAN DEVELOPMENT AUTHORITY <br> 2020
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
      <table align=\"center\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"800\">
        <tr>
          <td align=\"center\" valign=\"top\" width=\"800\" height=\"36\">
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
    <div style=\"display:none; white-space:nowrap; font:15px courier; line-height:0;\">
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    </div>
</body>

</html>
";

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $headers .= 'From: <TMS-UDA@uda.lk>' . "\r\n";

        mail($to, $subject, $message, $headers);





    }



}


}


?>
