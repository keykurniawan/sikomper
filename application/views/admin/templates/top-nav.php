<div class="top-nav ">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder="Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo base_url(); ?>assets/admin/img/avatar1_small.jpg">
                <?php
                if ($this->session->userdata('user_email') != NULL) {
                    $user_name = $this->session->userdata('user_name');
                    ?>
                    <span class="username"><?php echo "$user_name" ?></span>
                <?php } ?>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <div class="log-arrow-up"></div>
                <li><a href="<?php echo base_url(); ?>admin/profiles"><i class=" icon-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                <li><a href="<?php echo base_url(); ?>public/logins/process_logout"><i class="icon-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>

