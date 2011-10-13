<div data-role="page" data-title="Daftar" id="daftar" >

    <div data-role="header" data-position="fixed">
        <h1>Daftar</h1>
    </div>

    <div data-role="content">
        <h1>Daftar</h1>
        <?php echo form_open("home/daftar"); ?>
        <div data-role="fieldcontain">
            <label for="username_register">Username</label>
            <input type="text" name="username_register" id="username_register" value=""  />
            <?php echo form_error("username_register"); ?>
        </div>
        <div data-role="fieldcontain" >
            <label for="password_register">Password</label>
            <input type="password" name="password_register" id="password_register" value=""  />
            <?php echo form_error("password_register"); ?>
        </div>
        <div data-role="fieldcontain" >
            <label for="nama_register">Nama</label>
            <input type="text" name="nama_register" id="nama_register" value=""  />
            <?php echo form_error("nama_register"); ?>
        </div>
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
                <legend>Jenis Kelamin</legend>
                <input type="radio" name="kelamin_register" id="kelamin-1" value="1" checked="checked" />
                <label for="kelamin-1">Laki-Laki</label>
                <input type="radio" name="kelamin_register" id="kelamin-2" value="0"  />
                <label for="kelamin-2">Perempuan</label>
                <?php echo form_error("kelamin_register"); ?>
            </fieldset>
        </div>
        <div data-role="fieldcontain" >
            <label for="alamat_register">Alamat</label>
            <textarea name="alamat_register"></textarea>
            <?php echo form_error("alamat_register"); ?>
            </div>
            <div data-role="fieldcontain" >
                <label for="bio_register">Tentang Saya</label>
                <textarea name="bio_register"></textarea>
            <?php echo form_error("bio_register"); ?>
            </div>
            <input type="submit" data-icon="plus" value="Daftar" />
        </div>
    <?php echo form_close(); ?>
                <div data-role="footer" data-position="fixed">
                    <div data-role="navbar"  >
                        <ul>
                            <li><a href="<?php echo site_url("home"); ?>" data-icon="arrow-l">Kembali </a></li>

            </ul>
        </div>
    </div>
</div>