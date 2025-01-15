<?php $cookie_consent = $this->customlib->cookie_consent();
if (!empty($cookie_consent)) { ?>
    <div id="cookieConsent" class="cookieConsent">
        <?php echo $cookie_consent; ?> <a href="<?php echo base_url() . "page/cookie-policy" ?>" target="_blank"></a> <a onclick="setsitecookies()" class="cookieConsentOK"><?php echo $this->lang->line('accept') ?></a>
    </div>
<?php } ?>

<footer>
    <?php if ($this->module_lib->hasModule('online_course') && $this->module_lib->hasActive('online_course')) { ?>
        <script src="<?php echo base_url(); ?>backend/js/online_course.js"></script>
    <?php } ?>

    <div class="container">

        <div class="content_area">
            <div class="logo_section">
                <a href="#" class="logo">
                    <img width="179" height="49"
                        src="<?php echo base_url($front_setting->logo); ?>"
                        class="image wp-image-8574 footer-logo attachment-full size-full" alt="logo">

                    <!-- $setting->address -->
                </a>

                <ul>
                    <?php

                    foreach ($feature_menus as $footer_menu_key => $footer_menu_value) {

                        $cls_menu_dropdown = "";
                        if (!empty($footer_menu_value['submenus'])) {

                            $cls_menu_dropdown = "dropdown";
                        }
                    ?>
                        <li>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 6l6 6l-6 6" />
                                </svg>
                            </span>
                            <p><?php echo $footer_menu_value['menu']; ?></p>
                            <?php
                            ?>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>

            <div class="footer_navigation">
                <ul>
                    <?php
                    foreach ($main_menus as $footer_menu_key => $footer_menu_value) {

                        $cls_menu_dropdown = "";
                        if (!empty($footer_menu_value['submenus'])) {

                            $cls_menu_dropdown = "dropdown";
                        }
                    ?>
                        <li>
                            <?php
                            $top_new_tab = '';
                            $url         = '#';
                            if ($footer_menu_value['open_new_tab']) {
                                $top_new_tab = "target='_blank'";
                            }
                            if ($footer_menu_value['ext_url']) {
                                $url = $footer_menu_value['ext_url_link'];
                            } else {
                                $url = site_url($footer_menu_value['page_url']);
                            }
                            ?>
                            <a href="<?php echo $url; ?>" <?php echo $top_new_tab; ?>>  
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg> <?php echo $footer_menu_value['menu']; ?>
                        </a>
                            <?php
                            ?>
                        </li>
                    <?php
                    }
                    ?>
                    <!-- <li>
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M9 6l6 6l-6 6" />
                            </svg>
                            অ্যাফিলিয়েট</a>
                    </li> -->
                </ul>
            </div>

            <div class="location">
                <h3>যোগাযোগ করুন </h3>
                <p><?php echo $school_setting->address; ?></p>
                <ul class="footer_contact_list">
                    <li>
                        <a href="tel:<?php echo $school_setting->phone; ?>">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-phone">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                </svg>
                            </span>
                            <?php echo $school_setting->phone; ?>
                    

                        </a>
                    </li>
                    <li>
                        <a href="mail:info@yourmail.com">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                    <path d="M3 7l9 6l9 -6" />
                                </svg>
                            </span>
                            <?php echo $school_setting->email; ?>

                        </a>

                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>site/login"><i class="fa fa-user"></i><?php echo $this->lang->line('admin_login'); ?> / <?php echo $this->lang->line('teacher_login'); ?></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</footer>
<div class="copy-right text-white" style="background: #13181c;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <p>© 2024. All rights reserved by <a href="https://virtualgarage.io/">Virtual Garage</a>. Privacy Policy.</p>
            </div>
        </div><!--./row-->
    </div><!--./container-->
</div>
<script>
    function setsitecookies() {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>welcome/setsitecookies",
            data: {},
            success: function(data) {
                $('.cookieConsent').hide();
            }
        });
    }

    function check_cookie_name(name) {
        var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        if (match) {
            console.log(match[2]);
            $('.cookieConsent').hide();
        } else {
            $('.cookieConsent').show();
        }
    }
    check_cookie_name('sitecookies');
</script>