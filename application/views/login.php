<div data-role="page" data-title="Login" id="login" >

    <div data-role="header" data-position="fixed">
        <h1>Login</h1>
    </div>
    <h3>
        <?php echo $this->session->flashdata("notif"); ?>
    </h3>
    <?php echo form_open("home/index"); ?>
        <div data-role="content" id="front">

            <div data-role="fieldcontain" style="margin-top: 50px;">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" value=""  />
            <?php echo form_error("username"); ?>
        </div>
        <div data-role="fieldcontain">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value=""  />
            <?php echo form_error("password"); ?>
        </div>
        <input type="submit" data-role="button" data-icon="check" value="Login" />

        <a href="<?php echo site_url("home/daftar"); ?>"  data-icon="plus">Daftar</a>
        <?php echo form_close(); ?>
    </div>

    <div data-role="footer" data-position="fixed" class="ui-bar">

    </div>
</div>