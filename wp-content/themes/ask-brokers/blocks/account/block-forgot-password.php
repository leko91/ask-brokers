<div class="page page--flat">
    <div class="container flex-section">
        <div class="flex-section__60 pr-10">
            <div class="flex-section">
                <div class="flex-section__inner-left pr-10"></div>

                <div class="flex-section__inner-left pl-10">
                    <form name="lostpasswordform" id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post">
                        <p class="login-username">
                            <label>Email address</label>
                            <input type="text" name="user_login" id="user_login"></label>
                        </p>
                        <input type="hidden" name="redirect_to" value="<?php echo site_url('/'); ?>">
                        <input type="submit" name="wp-submit" id="wp-submit" class="button" value="Get New Password">
                    </form>
                </div>
            </div>
        </div>
        <div class="flex-section__40 pl-10"></div>
    </div>
</div>
