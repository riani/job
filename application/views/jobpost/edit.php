<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Data User</title>
    </head>
    <script type="text/javascript">
        <!--
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if(e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }


        //-->
    </script>

    <?php //echo isset($template['partials']['slidewrap']) ? $template['partials']['slidewrap'] : ''; ?>
    <div id="contentwrap">
        <div id="page-title">
            <h1>Job For Career</h1>

            <div class="clearfix"></div>
        </div>

        <div id="page-content">
            <div class="columns">
                <div class="column">

                    <div class="content">
                        <?php if (isset($error)) echo "<b><span style='color:red;'>$error</span></b>";?>

                        <a href="<?php echo site_url('company/logout');?>">- Log Out</a>   <br />


                        <form method="post" action="<?php echo site_url('jobpost/simpan');?>">
                            <div class="blocksection">
                                <!--                            <h2>Article</h2>-->
                                <?php echo form_hidden('id', $id); ?>
                                <div class="blockcontent">
                                    <h3>New Post</h3>
                                    <dl class="form-text">
                                        <dt>
                                            <label for="text_11">title :</label>
                                        </dt>
                                        <dd>
                                            <input type="text" id="text_11" name="title" value="<?php echo "$title"; ?>"/>
                                            <?php echo form_error('title', ' <div class="boxinfo error">', '</div>'); ?>

                                            <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                                justo.</p>
                                        </dd>
                                    </dl>

                                    <dl class="form-textarea">
                                        <dt>
                                            <label for="textarea_1">deskripsi:</label>
                                        </dt>
                                        <dd>
                                            <textarea rows="5" cols="10" id="textarea_1" name="deskripsi"><?php echo "$deskripsi"; ?></textarea>

                                            <?php echo form_error('deskripsi', ' <div class="boxinfo error">', '</div>'); ?>
                                            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </dd>
                                    </dl>



                                    <dl class="form-radio">
                                        <dt>
                                            <label for="">jenis kelamin:</label>
                                        </dt>
                                        <dd>
                                            <input type="radio" id="radio_1" name="jenkel" value="p" <?php if($jenkel=='p') echo "CHECKED"; ?>/> <label for="radio_1">Pria</label><br />
                                            <input type="radio" id="radio_2" name="jenkel" value="w" <?php if($jenkel=='w') echo "CHECKED"; ?>/> <label for="radio_2">Wanita</label><br />
                                            <input type="radio" id="radio_3" name="jenkel" value="a" <?php if($jenkel=='a') echo "CHECKED"; ?>/> <label for="radio_3">Pria dan Wanita</label><br/>
                                        </dd>
                                    </dl>
                                    <dl class="form-text">
                                        <dt>
                                            <label for="text_11">Pendidikan Terakhir :</label>
                                        </dt>
                                        <dd>
                                            <select name="pendidikan_terakhir" id="select_1">
                                                <option value="FREE" <?php if($pendidikan_terakhir=='FREE') echo "selected='true'"; ?> >Semua Jenjang Pendidikan</option>
                                                <option value="SMP" <?php if($pendidikan_terakhir=='SMP') echo "selected='true'"; ?> >SMP</option>
                                                <option value="SMU" <?php if($pendidikan_terakhir=='SMU') echo "selected='true'"; ?> >SMU/SMK</option>
                                                <option value="D1" <?php if($pendidikan_terakhir=='D1') echo "selected='true'"; ?> >Diploma 1</option>
                                                <option value="D2" <?php if($pendidikan_terakhir=='D2') echo "selected='true'"; ?> >Diploma 2</option>
                                                <option value="D3" <?php if($pendidikan_terakhir=='D3') echo "selected='true'"; ?> >Diploma 3</option>
                                                <option value="S1" <?php if($pendidikan_terakhir=='S1') echo "selected='true'"; ?> >Strata 1</option>
                                                <option value="S2" <?php if($pendidikan_terakhir=='S2') echo "selected='true'"; ?> >Strata 2</option>
                                                <option value="S3" <?php if($pendidikan_terakhir=='S3') echo "selected='true'"; ?> >Strata 3</option>
                                            </select>
                                            <p class="description">minimal pendidikan terakhir</p>
                                            <?php echo form_error('pendidikan_terakhir', ' <div class="boxinfo error">', '</div>'); ?>

                                        </dd>
                                    </dl>
                                    <dl class="form-text">
                                        <dt>
                                            <label for="text_11">Umur Minimal :</label>
                                        </dt>
                                        <dd>
                                            <input type="text" id="text_11" name="umur_min" value="<?php echo"$umur_min"; ?>"/>
                                            <?php echo form_error('umur_min', ' <div class="boxinfo error">', '</div>'); ?>

                                            <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                                justo.</p>
                                        </dd>
                                    </dl>
                                    <dl class="form-text">
                                        <dt>
                                            <label for="text_11">Umur Maksimal :</label>
                                        </dt>
                                        <dd>
                                            <input type="text" id="text_11" name="umur_max" value="<?php echo"$umur_max"; ?>"/>
                                            <?php echo form_error('umur_max', ' <div class="boxinfo error">', '</div>'); ?>

                                            <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                                justo.</p>
                                        </dd>
                                    </dl>
                                    <dl class="form-text">
                                        <dt>
                                            <label for="text_11">Minimal Pengalaman :</label>
                                        </dt>
                                        <dd>
                                            <input type="text" id="text_11" name="min_pengalaman" value="<?php echo"$min_pengalaman"; ?>"/>
                                            <?php echo form_error('min_pengalaman', ' <div class="boxinfo error">', '</div>'); ?>

                                            <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel
                                                justo.</p>
                                        </dd>
                                    </dl>

                                </div>

                                <div class="form-button">
                                    <input type="submit" value="Update" name="submit" id=""/>

                                </div>

                            </div>
                        </form>

                    </div>


                </div>
            </div>
        </div>
    </div>
