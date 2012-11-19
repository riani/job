<!--<script type="text/javascript">-->
<!--    <!---->
<!--    function toggle_visibility(id) {-->
<!--        var e = document.getElementById(id);-->
<!--        if(e.style.display == 'block')-->
<!--            e.style.display = 'none';-->
<!--        else-->
<!--            e.style.display = 'block';-->
<!--    }-->
<!---->
<!---->
<!--    //-->-->
<!--</script>-->
<!---->
<?php ////echo isset($template['partials']['slidewrap']) ? $template['partials']['slidewrap'] : ''; ?>
<!--<div id="contentwrap">-->
<!--    <div id="page-title">-->
<!--        <h1>Job For Career<span>Company</span></h1>-->
<!---->
<!--        <div class="clearfix"></div>-->
<!--    </div>-->
<!---->
<!--    <div id="page-content">-->
<!--        <div class="columns">-->
<!--            <div class="column">-->
<!---->
<!--                <div class="content">-->
<!--                    --><?php //if (isset($data)) echo "<b><span style='color:red;'>$data</span></b>";
//                    ?>
<!---->
<!---->
<!--                    <a href="--><?php //echo site_url('company/logout');?><!--">- Log Out</a>   <br />-->
<!---->
<!--                    <a href="#" onclick="toggle_visibility('foo');">- apply lamaran jobseeker</a>   <br />-->
<!--                    <div id="foo" style="display:none";>-->
<!--                        <form method="post" action="--><?php //echo site_url('company/proses_jobseeker');?><!--">-->
<!--                            <div class="blocksection">-->
<!--                                <!--                            <h2>Article</h2>-->-->
<!---->
<!--                                <div class="blockcontent">-->
<!--                                    <h3>Apply Jobseeker</h3>-->
<!--                                    <dl class="form-text">-->
<!--                                        <dt>-->
<!--                                            <label for="text_11">Kode Jobseekeer:</label>-->
<!--                                        </dt>-->
<!--                                        <dd>-->
<!--                                            <input type="text" id="text_11" name="id" value=""/>-->
<!--                                            --><?php //echo form_error('username', ' <div class="boxinfo error">', '</div>'); ?>
<!---->
<!--                                            <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel-->
<!--                                                justo.</p>-->
<!--                                        </dd>-->
<!--                                        </dl>-->
<!--                                </div>-->
<!---->
<!--                                <div class="form-button">-->
<!--                                    <input type="submit" value="Submit" name="submit" id="submit"/>-->
<!--                                    <input class="grey" type="reset" value="Reset" name="reset" id="reset"/>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </form>-->
<!---->
<!--                    </div>-->
<!--<!--                    <a href="#" class="">- create job posting</a>-->-->
<!---->
<!--                <a href="#" onclick="toggle_visibility('jobpost');">- create job posting</a>   <br />-->
<!--                <div id="jobpost" style="display:none";>-->
<!--                <form method="post" action="--><?php //echo site_url('jobpost/simpan');?><!--">-->
<!--                    <div class="blocksection">-->
<!--                        <!--                            <h2>Article</h2>-->-->
<!---->
<!--                        <div class="blockcontent">-->
<!--                            <h3>New Post</h3>-->
<!--                            <dl class="form-text">-->
<!--                                <dt>-->
<!--                                    <label for="text_11">title :</label>-->
<!--                                </dt>-->
<!--                                <dd>-->
<!--                                    <input type="text" id="text_11" name="title" value=""/>-->
<!--                                    --><?php //echo form_error('username', ' <div class="boxinfo error">', '</div>'); ?>
<!---->
<!--                                    <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel-->
<!--                                        justo.</p>-->
<!--                                </dd>-->
<!--                               </dl>-->
<!---->
<!--                            <dl class="form-textarea">-->
<!--                                <dt>-->
<!--                                    <label for="textarea_1">deskripsi:</label>-->
<!--                                </dt>-->
<!--                                <dd>-->
<!--                                    <textarea rows="5" cols="10" id="textarea_1" name="deskripsi"></textarea>-->
<!--                                    --><?php //echo form_error('alamat', ' <div class="boxinfo error">', '</div>'); ?>
<!--                                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                                </dd>-->
<!--                            </dl>-->
<!---->
<!---->
<!--                            <dl class="form-text">-->
<!--                                <dt>-->
<!--                                    <label for="text_11">posisi :</label>-->
<!--                                </dt>-->
<!--                                <dd>-->
<!--                                    <input type="text" id="text_11" name="posisi" value=""/>-->
<!--                                    --><?php //echo form_error('username', ' <div class="boxinfo error">', '</div>'); ?>
<!---->
<!--                                    <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel-->
<!--                                        justo.</p>-->
<!--                                </dd>-->
<!--                            </dl>-->
<!--                            <dl class="form-radio">-->
<!--                                <dt>-->
<!--                                    <label for="">jenis kelamin:</label>-->
<!--                                </dt>-->
<!--                                <dd>-->
<!--                                    <input type="radio" id="radio_1" name="jenkel" value="p" /> <label for="radio_1">pria</label><br />-->
<!--                                    <input type="radio" id="radio_2" name="jenkel" value="w" /> <label for="radio_2">wanita</label><br />-->
<!---->
<!--                                    <p class="description">Donec est urna, mattis a convallis suscipit sem Sed ultricies adipiscing lectus ut iaculis.</p>-->
<!--                                </dd>-->
<!--                            </dl>-->
<!--                            <dl class="form-text">-->
<!--                                <dt>-->
<!--                                    <label for="text_11">Pendidikan Terakhir :</label>-->
<!--                                </dt>-->
<!--                                <dd>-->
<!--                                    <input type="text" id="text_11" name="pendidikan_terakhir" value=""/>-->
<!--                                    --><?php //echo form_error('username', ' <div class="boxinfo error">', '</div>'); ?>
<!---->
<!--                                    <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel-->
<!--                                        justo.</p>-->
<!--                                </dd>-->
<!--                            </dl>-->
<!--                            <dl class="form-text">-->
<!--                                <dt>-->
<!--                                    <label for="text_11">Umur Minimal :</label>-->
<!--                                </dt>-->
<!--                                <dd>-->
<!--                                    <input type="text" id="text_11" name="umur_min" value=""/>-->
<!--                                    --><?php //echo form_error('username', ' <div class="boxinfo error">', '</div>'); ?>
<!---->
<!--                                    <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel-->
<!--                                        justo.</p>-->
<!--                                </dd>-->
<!--                            </dl>-->
<!--                            <dl class="form-text">-->
<!--                                <dt>-->
<!--                                    <label for="text_11">Umur Maksimal :</label>-->
<!--                                </dt>-->
<!--                                <dd>-->
<!--                                    <input type="text" id="text_11" name="umur_max" value=""/>-->
<!--                                    --><?php //echo form_error('username', ' <div class="boxinfo error">', '</div>'); ?>
<!---->
<!--                                    <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel-->
<!--                                        justo.</p>-->
<!--                                </dd>-->
<!--                            </dl>-->
<!--                            <dl class="form-text">-->
<!--                                <dt>-->
<!--                                    <label for="text_11">Minimal Pengalaman :</label>-->
<!--                                </dt>-->
<!--                                <dd>-->
<!--                                    <input type="text" id="text_11" name="min_pengalaman" value=""/>-->
<!--                                    --><?php //echo form_error('username', ' <div class="boxinfo error">', '</div>'); ?>
<!---->
<!--                                    <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel-->
<!--                                        justo.</p>-->
<!--                                </dd>-->
<!--                            </dl>-->
<!---->
<!--                        </div>-->
<!---->
<!--                        <div class="form-button">-->
<!--                            <input type="submit" value="Submit" name="submit" id=""/>-->
<!--                            <input class="grey" type="reset" value="Reset" name="reset" id=""/>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </form>-->
<!---->
<!--            </div>-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->