<div class="page page--flat">
    <div class="container flex-section">
        <div class="flex-section__60 pr-10">
            <div class="flex-section">
                <div class="flex-section__inner-left pr-10">
                    <div class="accountNav">
                        <span class="accountNav__title"><i class="material-icons">account_circle</i>Account Settings</span>

                        <ul class="accountNav__list">
                            <li class="accountNav__list-item">
                                <a href="/create-account" class="accountNav__list-link">Create a new account</a>
                            </li>
                            <li class="accountNav__list-item active">
                                <a href="/login" class="accountNav__list-link">Login to your account</a>
                            </li>
                            <li class="accountNav__list-item">
                                <a href="#" class="accountNav__list-link">Reset password</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex-section__inner-left pl-10">
                    <?php wp_login_form(array('remember' => false, 'redirect' => site_url('/'), 'label_username' => 'Email address')); ?>

                    <a href="<?php echo site_url('/forgot-password'); ?>">Forgot your password?</a>
                </div>
            </div>
        </div>
        <div class="flex-section__40 pl-10"></div>
    </div>
</div>
