<div id="contentwrap">
    <div id="page-title">
        <h1>Create Petugas</h1>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">
                <?php
                if (!empty($error)) {
                    echo "<b style='font-size:20px;padding-left: 5px;'>$error</b>";
                }
                ?>
                <div class="content">
                    <form method="post" action="<?php echo site_url('petugas/simpan'); ?>">
                        <div class="blocksection">

                            <div class="blockcontent">
                                <h3>Fill Content</h3>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_11">Username:</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_11" name="username" value=""/>
<?php echo form_error('username', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                            justo.</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_12">Password:</label>
                                    </dt>
                                    <dd>
                                        <input type="password" id="text_12" name="password" value=""/>
<?php echo form_error('password', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                            justo.</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_12">Confirm Password:</label>
                                    </dt>
                                    <dd>
                                        <input type="password" id="text_12" name="password_confirm" value=""/>
<?php echo form_error('password', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                            justo.</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_13">Nama:</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_13" name="nama" value=""/>
<?php echo form_error('nama', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                            justo.</p>
                                    </dd>
                                </dl>
                                <dl class="form-textarea">
                                    <dt>
                                        <label for="textarea_1">Alamat:</label>
                                    </dt>
                                    <dd>
                                        <textarea rows="5" cols="10" id="textarea_1" name="alamat"></textarea>
<?php echo form_error('alamat', ' <div class="boxinfo error">', '</div>'); ?>
                                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_14">No Handphone:</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_14" name="hp" value=""/>
<?php echo form_error('hp', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                            justo.</p>
                                    </dd>
                                </dl>

                                <dl class="form-text">
                                    <dt>
                                        <label for="text_16">Posisi/Jabatan :</label>
                                    </dt>
                                    <dd>
                                        <!--<input type="text" id="text_16" name="level" value=""/>-->

                                        <select name="level">
                                            <option value="1">Administrator</option>
                                            <option value="2">Kasir</option>
                                            <option value="3">Pintu Masuk</option>
                                            <option value="4">Pintu Keluar</option>
                                        </select>
<?php echo form_error('level', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">Posisi/Jabatan.</p>
                                    </dd>
                                </dl>
                            </div>

                            <div class="form-button">
                                <input type="submit" value="Submit" name="submit" id="submit"/>
                                <input class="grey" type="reset" value="Reset" name="reset" id="reset"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>






