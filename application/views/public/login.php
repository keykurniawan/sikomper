<?php $this->load->view('public/templates/header'); ?>
<div class="container">

    <div class="row">

        <div class="span9">
            <div class="login">
                <table>
                    <tr>
                        <td width="50%">
                            <h3>New Customer</h3>
                            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                            <a href="<?php echo base_url(); ?>public/registers" class="btn">Register</a>
                        </td>

                        <td width="50%">
                            <h3>Returning Customer</h3>
                            <form method="post" action="<?php echo base_url('public/logins/process_login'); ?>" class="">
                                <?php
                                $message = $this->session->flashdata('message');
                                echo $message == '' ? '' : '<p id="message">' . $message . '</p>';
                                ?>
                                <div class="controls">
                                    <label>Your E-Mail: <span class="text-error">*</span></label>
                                    <input type="text" style="width: 280px" name="user_email" value="<?php echo set_value('user_email'); ?>" placeholder="example@example.com">
                                    <?php echo form_error('user_email', '<p class="field_error">', '</p>'); ?>
                                </div>
                                <div class="controls">
                                    <label>Your Password: <span class="text-error">*</span></label>
                                    <input type="password" style="width: 280px" name="user_password" value="<?php echo set_value('user_password'); ?>" placeholder="**************">
                                    <?php echo form_error('user_password', '<p class="field_error">', '</p>'); ?>
                                </div>
                                <div class="controls">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <span class="pull-right"><a data-toggle="modal" href="#myModal"> Forgot Password?</a></span>
                                </div>
                            </form><!--end form-->
                        </td>
                    </tr>
                </table>
            </div><!--end login-->
        </div><!--end span9-->

    </div><!--end row-->

    <!-- Modal -->
    <form method="post" action="<?php echo base_url('public/logins/doforget'); ?>">
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal hide fade ">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <p><input type="text" name="email" placeholder="Email" id="email" autocomplete="off" style="width: 300px; font-size: 14px;"></p>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-success" name="btnForgot" id="btnForgot" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- modal -->

</div><!--end container-->
<?php $this->load->view('public/templates/footer'); ?>
