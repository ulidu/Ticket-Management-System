<!-- begin:: Aside -->
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
     id="kt_aside">

    <!-- begin:: Aside -->
    <div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
        <div class="kt-aside__brand-logo">
            <a href="index.php">
                <img alt="Logo" src="assets/media/logos/logo-4.png"/>
            </a>
        </div>
    </div>

    <!-- end:: Aside -->


    <?php

    $userID = $_SESSION['userID'];
    $employeeCode = $_SESSION['employeeCode'];
    $firstName = $_SESSION['firstName'];
    $lastName = $_SESSION['lastName'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $date_created = $_SESSION['date_created'];
    $status = $_SESSION['status'];
    $acc_type = $_SESSION['acc_type'];
    $title = $_SESSION['title'];
    $division = $_SESSION['division'];

    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/', $link);
    $page = end($link_array);

    if ($page == "task_add.php" || $page == "task_list.php" || $page == "ticket_success.php") {


        ?>

        <!-- begin:: Aside Menu -->
        <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
            <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                 data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                <ul class="kt-menu__nav ">
                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type == 'Administrator') {

                        ?>
                        <li class="kt-menu__item" aria-haspopup="true"><a href="index.php"
                                                                          class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span
                                        class="kt-menu__link-text">Home</span></a></li>
                    <?php } else {

                    } ?>

                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--active" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                              class="kt-menu__link kt-menu__toggle"><i
                                    class="kt-menu__link-icon flaticon2-list-3"></i><span
                                    class="kt-menu__link-text">Tickets</span></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">

                                <li class="kt-menu__item "><a href="task_add.php"
                                                              class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">Add New Ticket</span></a></li>

                                <?php

                                $logged_user_id = $_SESSION['logged_user_id'];

                                if ($logged_user_id != '') {

                                    ?>

                                    <li class="kt-menu__item "><a href="task_list.php"
                                                                  class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">View all Tickets</span></a></li>

                                <?php } else {

                                } ?>
                            </ul>
                        </div>
                    </li>

                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type == 'Administrator') {

                        ?>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-icon flaticon2-user-1"></i><span
                                        class="kt-menu__link-text">Users</span></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Actions</span></span>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a href="add_user.php"
                                                                                       class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add New User</span></a></li>

                                    <li class="kt-menu__item " aria-haspopup="true"><a href="user_list.php"
                                                                                       class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">View all Users</span></a></li>
                                </ul>
                            </div>
                        </li>
                    <?php } else {

                    } ?>

                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type == 'Administrator' || $logged_user_id != '' && $acc_type == 'IT Staff') {

                        ?>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="reports.php" class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-graph"></i><span
                                        class="kt-menu__link-text">Reports</span></a>
                        </li>
                    <?php } else {

                    } ?>
                    <li class="kt-menu__item "><a href="feedback.php" class="kt-menu__link "><i
                                    class="kt-menu__link-icon flaticon2-chat-1"></i><span
                                    class="kt-menu__link-text">Feedback</span></a>
                    </li>

                </ul>
            </div>
        </div>

        <!-- end:: Aside Menu -->

        <?php

    } elseif ($page == "add_user.php" || $page == "user_list.php" || $page == "user_success.php" || $page == "profile.php") {
        ?>
        <!-- begin:: Aside Menu -->
        <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
            <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                 data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                <ul class="kt-menu__nav ">

                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type != 'Administrative Officer' && $acc_type != 'IT Staff') {

                        ?>

                        <li class="kt-menu__item" aria-haspopup="true"><a href="index.php"
                                                                          class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span
                                        class="kt-menu__link-text">Home</span></a></li>
                    <?php } else {

                    } ?>

                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                              class="kt-menu__link kt-menu__toggle"><i
                                    class="kt-menu__link-icon flaticon2-list-3"></i><span
                                    class="kt-menu__link-text">Tickets</span></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">

                                <li class="kt-menu__item "><a href="task_add.php"
                                                              class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">Add New Ticket</span></a></li>

                                <li class="kt-menu__item "><a href="task_list.php"
                                                              class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">View all Tickets</span></a></li>
                            </ul>
                        </div>
                    </li>

                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type != 'Administrative Officer' && $acc_type != 'IT Staff') {

                        ?>
                        <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--active" aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-icon flaticon2-user-1"></i><span
                                        class="kt-menu__link-text">Users</span></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Actions</span></span>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a href="add_user.php"
                                                                                       class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add New User</span></a></li>

                                    <li class="kt-menu__item " aria-haspopup="true"><a href="user_list.php"
                                                                                       class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">View all Users</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <?php

                    } else {
                    }

                    ?>
                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type != 'Administrative Officer') {

                        ?>
                        <li class="kt-menu__item " aria-haspopup="true"><a href="reports.php" class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-graph"></i><span
                                        class="kt-menu__link-text">Reports</span></a>
                        </li>

                    <?php } else {

                    } ?>

                    <li class="kt-menu__item "><a href="feedback.php" class="kt-menu__link "><i
                                    class="kt-menu__link-icon flaticon2-chat-1"></i><span
                                    class="kt-menu__link-text">Feedback</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- end:: Aside Menu -->
        <?php
    } elseif ($page == "reports.php") {

        ?>

        <!-- begin:: Aside Menu -->
        <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
            <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                 data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                <ul class="kt-menu__nav ">
                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type == 'Administrator' || $logged_user_id != '' && $acc_type == 'Observer') {

                        ?>
                        <li class="kt-menu__item" aria-haspopup="true"><a href="index.php"
                                                                          class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span
                                        class="kt-menu__link-text">Home</span></a></li>

                    <?php } else {
                    } ?>
                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                              class="kt-menu__link kt-menu__toggle"><i
                                    class="kt-menu__link-icon flaticon2-list-3"></i><span
                                    class="kt-menu__link-text">Tickets</span></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">


                                <li class="kt-menu__item "><a href="task_add.php"
                                                              class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">Add New Ticket</span></a></li>

                                <li class="kt-menu__item "><a href="task_list.php"
                                                              class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">View all Tickets</span></a></li>
                            </ul>
                        </div>
                    </li>

                    <?php

                    if ($acc_type == 'Administrator' || $acc_type == 'Observer') {

                        ?>
                        <li class="kt-menu__item  kt-menu__item--submenu " aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-icon flaticon2-user-1"></i><span
                                        class="kt-menu__link-text">Users</span></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Actions</span></span>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a href="add_user.php"
                                                                                       class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add New User</span></a></li>

                                    <li class="kt-menu__item " aria-haspopup="true"><a href="user_list.php"
                                                                                       class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">View all Users</span></a></li>
                                </ul>
                            </div>
                        </li>

                    <?php } else {
                    } ?>

                    <li class="kt-menu__item kt-menu__item--active"><a href="reports.php" class="kt-menu__link "><i
                                    class="kt-menu__link-icon flaticon2-graph"></i><span
                                    class="kt-menu__link-text">Reports</span></a>
                    </li>

                    <li class="kt-menu__item "><a href="feedback.php" class="kt-menu__link "><i
                                    class="kt-menu__link-icon flaticon2-chat-1"></i><span
                                    class="kt-menu__link-text">Feedback</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- end:: Aside Menu -->
        <?php
    } elseif ($page == "feedback.php") {

        ?>

        <!-- begin:: Aside Menu -->
        <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
            <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                 data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                <ul class="kt-menu__nav ">
                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type == 'Administrator') {

                        ?>
                        <li class="kt-menu__item" aria-haspopup="true"><a href="index.php"
                                                                          class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span
                                        class="kt-menu__link-text">Home</span></a></li>
                    <?php } else {

                    } ?>

                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                              class="kt-menu__link kt-menu__toggle"><i
                                    class="kt-menu__link-icon flaticon2-list-3"></i><span
                                    class="kt-menu__link-text">Tickets</span></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">

                                <li class="kt-menu__item "><a href="task_add.php"
                                                              class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">Add New Ticket</span></a></li>
                                <?php

                                $logged_user_id = $_SESSION['logged_user_id'];

                                if ($logged_user_id != '') {

                                    ?>
                                    <li class="kt-menu__item "><a href="task_list.php"
                                                                  class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">View all Tickets</span></a></li>

                                <?php } else {

                                } ?>
                            </ul>
                        </div>
                    </li>

                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type == 'Administrator') {

                        ?>
                        <li class="kt-menu__item  kt-menu__item--submenu " aria-haspopup="true"
                            data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                  class="kt-menu__link kt-menu__toggle"><i
                                        class="kt-menu__link-icon flaticon2-user-1"></i><span
                                        class="kt-menu__link-text">Users</span></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                                class="kt-menu__link"><span
                                                    class="kt-menu__link-text">Actions</span></span>
                                    </li>
                                    <li class="kt-menu__item " aria-haspopup="true"><a href="add_user.php"
                                                                                       class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">Add New User</span></a></li>

                                    <li class="kt-menu__item " aria-haspopup="true"><a href="user_list.php"
                                                                                       class="kt-menu__link "><i
                                                    class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                    class="kt-menu__link-text">View all Users</span></a></li>
                                </ul>
                            </div>
                        </li>

                    <?php } else {

                    } ?>
                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '' && $acc_type == 'Administrator' || $logged_user_id != '' && $acc_type == 'IT Staff') {

                        ?>
                        <li class="kt-menu__item "><a href="reports.php" class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-graph"></i><span
                                        class="kt-menu__link-text">Reports</span></a>
                        </li>
                    <?php } else {

                    } ?>
                    <li class="kt-menu__item kt-menu__item--active"><a href="feedback.php" class="kt-menu__link "><i
                                    class="kt-menu__link-icon flaticon2-chat-1"></i><span
                                    class="kt-menu__link-text">Feedback</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- end:: Aside Menu -->


        <?php
    } else {

        ?>
        <!-- begin:: Aside Menu -->
        <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
            <div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1"
                 data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
                <ul class="kt-menu__nav ">
                    <li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true"><a href="index.php"
                                                                                             class="kt-menu__link "><i
                                    class="kt-menu__link-icon flaticon2-architecture-and-city"></i><span
                                    class="kt-menu__link-text">Home</span></a></li>


                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                              class="kt-menu__link kt-menu__toggle"><i
                                    class="kt-menu__link-icon flaticon2-list-3"></i><span
                                    class="kt-menu__link-text">Tickets</span></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">

                                <li class="kt-menu__item "><a href="task_add.php"
                                                              class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">Add New Ticket</span></a></li>

                                <li class="kt-menu__item "><a href="task_list.php"
                                                              class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">View all Tickets</span></a></li>
                            </ul>
                        </div>
                    </li>


                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true"
                        data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                              class="kt-menu__link kt-menu__toggle"><i
                                    class="kt-menu__link-icon flaticon2-user-1"></i><span
                                    class="kt-menu__link-text">Users</span></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span
                                            class="kt-menu__link"><span class="kt-menu__link-text">Actions</span></span>
                                </li>
                                <li class="kt-menu__item " aria-haspopup="true"><a href="add_user.php"
                                                                                   class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">Add New User</span></a></li>

                                <li class="kt-menu__item " aria-haspopup="true"><a href="user_list.php"
                                                                                   class="kt-menu__link "><i
                                                class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                class="kt-menu__link-text">View all Users</span></a></li>
                            </ul>
                        </div>
                    </li>


                    <li class="kt-menu__item "><a href="reports.php" class="kt-menu__link "><i
                                    class="kt-menu__link-icon flaticon2-graph"></i><span
                                    class="kt-menu__link-text">Reports</span></a>
                    </li>
                    <li class="kt-menu__item "><a href="feedback.php" class="kt-menu__link "><i
                                    class="kt-menu__link-icon flaticon2-chat-1"></i><span
                                    class="kt-menu__link-text">Feedback</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- end:: Aside Menu -->
        <?php
    }
    ?>

</div>

<!-- end:: Aside -->

<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

    <!-- begin:: Header -->
    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

        <!-- begin: Header Menu -->
        <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                    class="la la-close"></i></button>
        <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">
            <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-tab ">
                <ul class="kt-menu__nav ">

                    <li class="kt-menu__item  kt-menu__item--active " aria-haspopup="true"><a
                                class="kt-menu__link "><span style="font-size: 20px;font-family: 'Fira Code'"
                                                             class="kt-menu__link-text">Ticket Management System</span></a>
                    </li>
                    <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel "
                        data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a
                                class="kt-menu__link kt-menu__toggle "><span class="kt-menu__link-text">URBAN DEVELOPMENT AUTHORITY</span><i
                                    class="kt-menu__ver-arrow la la-angle-right"></i></a>
                    </li>

                </ul>
            </div>
        </div>

        <!-- end: Header Menu -->


        <!-- begin:: Header Topbar -->
        <div class="kt-header__topbar">

            <!--begin: User Bar -->
            <div class="kt-header__topbar-item kt-header__topbar-item--user">

                <div class="kt-header__topbar-wrapper">
                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id == '' && $page != 'task_add.php') {

                        ?>
                        <div class="kt-header__topbar-user">
                            <a href="login.php" class="btn btn-brand btn-bold"><i
                                        class="la la-user font-weight-bold"></i>
                                Login</a>
                        </div>
                    <?php }elseif ($logged_user_id == '' && $page == 'task_add.php'){

                        ?>

                        <div class="kt-header__topbar-user">
                            <a href="login.php" class="btn kt-bg-brand btn-font-hover-brand btn-hover-brand kt-font-light btn-brand btn-bold"><i
                                        class="fa fa-user-circle kt-font-light kt-font-bold"></i>
                                Login</a>
                        </div>

                        <?php

                    } else {

                    } ?>
                </div>

                <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">

                    <?php

                    $logged_user_id = $_SESSION['logged_user_id'];

                    if ($logged_user_id != '') {

                        ?>
                        <div class="kt-header__topbar-user">

                            <span class="kt-hidden kt-header__topbar-welcome kt-hidden-mobile">Hi,</span>
                            <span class="kt-hidden kt-header__topbar-username kt-hidden-mobile"><?php $firstName = $_SESSION['firstName'];
                                $lastName = $_SESSION['lastName'];
                                echo $firstName . " " . $lastName; ?></span>
                            <img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg"/>

                            <?php if ($page == 'task_add.php'){ ?>

                            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder"><i
                                        style="font-size: 20px" class="fa fa-user-circle kt-font-success font-weight-bold"></i></span>

                            <?php }elseif ($page != 'task_add.php'){ ?>
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bolder"><i
                                            style="font-size: 20px" class="la la-user font-weight-bold"></i></span>
                            <?php } ?>

                        </div>
                    <?php } else {

                    }
                    ?>

                </div>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">

                    <!--begin: Head -->
                    <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                         style="background-image: url(assets/media/misc/bg-1.jpg)">

                        <div class="kt-user-card__avatar">
                            <img class="kt-hidden" alt="Pic" src="assets/media/users/300_25.jpg"/>

                            <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                            <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success"><?php

                                $firstName = $_SESSION['firstName'];
                                //Use mb_substr to get the first character.
                                $firstChar = mb_substr($firstName, 0, 1, "UTF-8");

                                //Print out the first character.
                                echo strtoupper($firstChar); ?></span>
                        </div>
                        <div class="kt-user-card__name">
                            <?php $firstName = $_SESSION['firstName'];
                            $lastName = $_SESSION['lastName'];
                            echo $firstName . " " . $lastName; ?>
                        </div>

                    </div>

                    <!--end: Head -->

                    <!--begin: Navigation -->
                    <div class="kt-notification">
                        <a href="profile.php"
                           class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect opacity="0.200000003" x="0" y="0" width="24" height="24"/>
                                        <path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" fill="#000000" opacity="0.3"/>
                                        <path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" fill="#000000"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title kt-font-bold">
                                    My Profile
                                </div>
                                <div class="kt-notification__item-time">
                                    Account settings and more
                                </div>
                            </div>
                        </a>

                        <div class="kt-notification__custom kt-space-between">
                            <a href="logout.php" class="btn btn-label btn-label-brand btn-sm btn-bold">Sign Out</a>
                        </div>

                    </div>
                    <!--end: Navigation -->
                </div>
            </div>

            <!--end: User Bar -->
        </div>

        <!-- end:: Header Topbar -->
    </div>


    <?php

    $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/', $link);
    $page = end($link_array);

    if ($page == "task_add.php" || $page == "ticket_success.php" || $page == "feedback.php") {

    }else{


    ?>
    <!-- end:: Header -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">
                    <h3 class="kt-subheader__title"> <?php

                        $link = $_SERVER['PHP_SELF'];
                        $link_array = explode('/', $link);
                        $page = end($link_array);

                        if ($page == "task_list.php") { ?>
                            Manage Tickets

                            <?php

                        } else { ?>Dashboard<?php } ?></h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                    <h3 style=" font-size: small"
                        class="kt-animate-fade-in-up kt-subheader__title text-success">
                        Welcome, <?php if ($userID == 12) {
                            echo $firstName . " " . $lastName;
                        } else {
                            echo $title . " " . $firstName . " " . $lastName;
                        } ?></h3>
                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>


                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                        <?php if ($acc_type == 'Administrative Officer') {
                        } else { ?>

                            <?php if ($acc_type == 'Administrator' && $page == 'index.php') {
                            ?>

                            <svg onclick="export_db_pw()" data-skin="dark" data-toggle="kt-tooltip" data-placement="top" title="Export Database" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon ">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"/>
                                    <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-180.000000) translate(-12.000000, -8.000000) " x="11" y="1" width="2" height="14" rx="1"/>
                                    <path d="M7.70710678,15.7071068 C7.31658249,16.0976311 6.68341751,16.0976311 6.29289322,15.7071068 C5.90236893,15.3165825 5.90236893,14.6834175 6.29289322,14.2928932 L11.2928932,9.29289322 C11.6689749,8.91681153 12.2736364,8.90091039 12.6689647,9.25670585 L17.6689647,13.7567059 C18.0794748,14.1261649 18.1127532,14.7584547 17.7432941,15.1689647 C17.3738351,15.5794748 16.7415453,15.6127532 16.3310353,15.2432941 L12.0362375,11.3779761 L7.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000004, 12.499999) rotate(-180.000000) translate(-12.000004, -12.499999) "/>
                                </g>
                            </svg>
                            &nbsp;
<?php } ?>

                            <a href="reports.php"><img class="pointerImageChart" onclick="" style="width: 30px"
                                                              src="assets/media/icons/chart.gif"></a> <?php } ?>
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

        <?php


        }
        ?>
