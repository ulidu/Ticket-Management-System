<!-- begin:: Footer -->
<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
    <div class="kt-container  kt-container--fluid ">
        <div class="kt-footer__copyright">
            2020&nbsp;&copy;&nbsp;<a class="kt-link">URBAN DEVELOPMENT AUTHORITY</a>
        </div>
        <div class="kt-footer__menu">

            <a href="assets/profile/index.php" target="_blank" class="kt-footer__menu-link kt-link">
                <svg style="margin-top: -1%;" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24"
                     version="1.1" class="kt-svg-icon">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"/>
                        <path d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z"
                              fill="#000000" fill-rule="nonzero"/>
                        <rect fill="#000000" opacity="0.3"
                              transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) "
                              x="11" y="4" width="2" height="16" rx="1"/>
                    </g>
                </svg> &nbsp; Developed by <span class="kt-badge kt-badge--dark kt-badge--inline kt-badge--pill">ULIDU T GUNATHILAKE</span></a>


        </div>
    </div>
</div>

<!-- end:: Footer -->
</div>
</div>
</div>


<!-- end:: Page -->
<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#2c77f4",
                "light": "#ffffff",
                "dark": "#282a3c",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<script>

    jQuery(document).ready(function() {

        $.sessionTimeout({
            title: 'No activity since 4 hours',
            message: 'You are about to be logged off.',
            keepAliveUrl: '',
            redirUrl: 'logout.php?timeout=true',
            logoutUrl: 'logout.php',
            warnAfter: 14400000, //warn after 4 hours
            redirAfter: 35000, //redirect after 10 seconds,
            ignoreUserActivity: true,
            countdownMessage: 'Signing out in {timer} seconds.',
            countdownBar: true
        });

    });

</script>

<?php

$division_logged_in = $_SESSION['division_logged_in'];
$acc_type_logged = $_SESSION['acc_type_logged'];

?>

<script>

    var div_logged = '<?php echo $division_logged_in; ?>';
    var acc_type_logged = '<?php echo $acc_type_logged; ?>';

    if (window.Notification && Notification.permission !== "granted") {

        Notification.requestPermission(function (status) {
            if (Notification.permission !== status) {
                Notification.permission = status;
            }
        })
    }

    if (acc_type_logged == 'Administrator' && Notification.permission == "granted" || acc_type_logged == 'Observer' && Notification.permission == "granted") {

        setInterval(function () {
            $.ajax({

                url: "notify_app.php", type: "POST", async: true, cache: false, success: function (data) {

                    if (Notification.permission == "granted" && data != '') {

                        var data_arr_big = data.split("{||next_rec||}");
                        data_arr_big.forEach(notify_func)

                        function notify_func(item, index, arr) {
                            if (item != '') {
                                arr[index] = item;

                                var data_arr_sm = item.split("{|same_rec|}");
                                data_arr_sm.forEach(notify_func_sm)

                                function notify_func_sm(item, index, arr) {
                                    if (item != '') {
                                        arr[index] = item;
                                    }
                                }

                                var assigned_name_n = data_arr_sm[0];
                                var issue_n = data_arr_sm[1];
                                var designation_n = data_arr_sm[2];
                                var division_n = data_arr_sm[3];

                                var title = "New ticket received from " + division_n;
                                var dts = Math.floor(Date.now());
                                var img = 'https://i.imgur.com/akcxFXw.png';

                                var options = {
                                    body: "Name : " + assigned_name_n + "\nDesignation : " + designation_n + "\nIssue : " + issue_n,
                                    timestamp: dts,
                                    icon: img
                                }

                                noti = new Notification(title, options);

                                setTimeout(noti.close.bind(noti), 36000000);

                            }
                        }
                    }
                }
            });

        }, 5000);

    }

</script>



<!--begin::Global Theme Bundle(used by all pages) -->
<?php

$link_for_wizard = $_SERVER['PHP_SELF'];
$link_array_wizard = explode('/', $link_for_wizard);
$link_wizard = end($link_array_wizard);

if ($link_wizard == 'task_add.php') { ?>

    <script>
        $(document).ready(function() {
            $.getScript("assets/js/scripts.bundle.js");
        });
    </script>

<?php } ?>

<?php

$link_for_wizard = $_SERVER['PHP_SELF'];
$link_array_wizard = explode('/', $link_for_wizard);
$link_wizard = end($link_array_wizard);

if ($link_wizard != 'task_add.php') { ?>

    <script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>

<?php } ?>

<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>
<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<script src="assets/js/pages/components/extended/blockui.js" type="text/javascript"></script>
<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>
<script src="assets/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
<script src="assets/js/pages/crud/datatables/basic/scrollable.js" type="text/javascript"></script>
<script src="assets/js/pages/custom/user/add-user.js" type="text/javascript"></script>
<script src="assets/js/pages/components/extended/sweetalert2.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-nice-select-1.1.0/js/jquery.nice-select.js"></script>
<script src="assets/plugins/custom/jstree/jstree.bundle.js" type="text/javascript"></script>
<script src="assets/js/pages/components/extended/treeview.js" type="text/javascript"></script>
<!--end::Global Theme Bundle -->

</body>
</html>
