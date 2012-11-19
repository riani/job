<script type="text/javascript">
    <!--
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }


    //-->
</script>

<style type="text/css">
    dl.form-check {
        border: 1px solid #B0B8BB;
        height: 250px;
        margin: 0;
        overflow: auto;
        position: relative;
        width: 350px;
    }

</style>

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

                    <a href="<?php echo site_url('company/logout');?>">- Log Out</a> <br/>


                    <form method="post" action="<?php echo site_url('jobpost/simpan');?>">
                        <div class="blocksection">
                            <!--                            <h2>Article</h2>-->

                            <div class="blockcontent">
                                <h3>New Post</h3>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_11">title :</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_11" name="title" value=""/>
                                        <?php echo form_error('title', ' <div class="boxinfo error">', '</div>'); ?>

                                    </dd>
                                </dl>

                                <dl class="form-textarea">
                                    <dt>
                                        <label for="textarea_1">deskripsi:</label>
                                    </dt>
                                    <dd>
                                        <textarea rows="5" cols="10" id="textarea_1" name="deskripsi"></textarea>
                                        <?php echo form_error('deskripsi', ' <div class="boxinfo error">', '</div>'); ?>

                                    </dd>
                                </dl>
                                <dl class="form-check">
                                    <div>
                                        <dt>
                                            <label for="">Jurusan:</label>
                                        </dt>
                                        <dd>
                                            Computer : <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Informatika"/>Tekhnik
                                            Informatika<br/>
                                            <input type="checkbox" name="jurusan[]" value="Sistem Informasi"/>Sistem Informasi<br/>
                                            <input type="checkbox" name="jurusan[]" value="Manajemen Infromatika"/>Manajemen
                                            Infromatika<br/>
                                            <input type="checkbox" name="jurusan[]" value="Komputerisasi Akuntansi"/>Komputerisasi
                                            Akuntansi<br/>
                                            <input type="checkbox" name="jurusan[]" value="Ilmu Komputer"/>Ilmu Komputer
                                            <br/>
                                            <input type="checkbox" name="jurusan[]" value="Tekhnik Komputer dan Jaringan"/>Tekhnik
                                            Komputer dan Jaringan<br/>
                                            Ekonomi : <br/>
                                            <input type="checkbox" name="jurusan[]" value="Akuntansi"/>Akuntansi<br/>
                                            <input type="checkbox" name="jurusan[]" value="Manajemen"/>Manajemen<br/>
                                            <input type="checkbox" name="jurusan[]" value="Arsitektur"/>Arsitektur<br/>
                                            <input type="checkbox" name="jurusan[]" value="Arsitektur Lansekap"/>Arsitektur
                                            Lansekap<br/>
                                            <input type="checkbox" name="jurusan[]" value="Ilmu Keperawatan"/>Ilmu Keperawatan<br/>
                                            <input type="checkbox" name="jurusan[]" value="Astronomi"/>Astronomi<br/>
                                            <input type="checkbox" name="jurusan[]" value="Oseanografi"/>Oseanografi<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Elektro"/>Teknik
                                            Elektro<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Fisika"/>Teknik Fisika <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Geodesi"/>Teknik Geodesi
                                            <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Geofisika"/>Teknik Geofisika
                                            <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Geologi"/>Teknik Geologi
                                            <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Industri"/>Teknik Industri
                                            <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Kimia"/>Teknik Kimia<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Lingkungan"/>Teknik
                                            Lingkungan <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Mesin"/>Teknik Mesin<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Metalaurgi"/>Teknik
                                            Metalaurgi<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Nuklir"/>Teknik Nuklir <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Penerbangan"/>Teknik
                                            Penerbangan <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Pengairan"/>Teknik Pengairan
                                            <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Perminyakan"/>Teknik
                                            Perminyakan<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Pertambangan"/>Teknik
                                            Pertambangan<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Sipil"/>Teknik Sipil <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknik Sistem Perkapalan"/>Teknik
                                            Sistem Perkapalan<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknologi Hasil Ternak"/>Teknologi
                                            Hasil Ternak<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknologi Hasil Huta"/>Teknologi
                                            Hasil Hutan<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknologi Hasil Perikanan"/>Teknologi
                                            Hasil Perikanan<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknologi Hasil Pertanian"/>Teknologi
                                            Hasil Pertanian<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknologi Industri Pertanian"/>
                                            Teknologi Industri Pertanian<br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknologi Pangan"/>Teknologi Pangan
                                            <br/>
                                            <input type="checkbox" name="jurusan[]" value="Teknologi Pendidikan"/>Teknologi
                                            Pendidikan <br/>
                                            <input type="checkbox" name="jurusan[]" value="Biokimia"/>Biokimia<br/>
                                            <input type="checkbox" name="jurusan[]" value="Fisika"/> Fisika <br/>
                                            <input type="checkbox" name="jurusan[]" value="Matematika"/>Matematika <br/>
                                            <input type="checkbox" name="jurusan[]" value="Biologi"/>Biologi<br/>
                                            <input type="checkbox" name="jurusan[]" value="Statitika"/>Statitika<br/>
                                            <input type="checkbox" name="jurusan[]" value="Kimia"/>Kimia <br/>
                                            <input type="checkbox" name="jurusan[]" value="Farmasi"/>Farmasi <br/>
                                            <input type="checkbox" name="jurusan[]" value="Geofisika"/>Geofisika <br/>
                                            <input type="checkbox" name="jurusan[]" value="Meteorologi"/>Meteorologi <br/>
                                            <input type="checkbox" name="jurusan[]" value="Geografi"/>Geografi<br/>
                                        </dd>
                                    </div>
                                </dl>

                                <dl class="form-radio">
                                    <dt>
                                        <label for="">jenis kelamin:</label>
                                    </dt>
                                    <dd>
                                        <input type="radio" id="radio_1" name="jenkel" value="p"/> <label for="radio_1">Pria</label><br/>
                                        <input type="radio" id="radio_2" name="jenkel" value="w" checked/> <label for="radio_2">Wanita</label><br/>
                                        <input type="radio" id="radio_3" name="jenkel" value="a" checked/> <label for="radio_3">Pria dan Wanita</label><br/>
                                    </dd>
                                </dl>
                                <dl class="form-select">
                                    <dt>
                                        <label for="select_1">Pendidikan Terakhir:</label>
                                    </dt>
                                    <dd>
                                        <select name="pendidikan_terakhir" id="select_1">
                                            <option value="FREE" selected="true">Semua Jenjang Pendidikan</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMU">SMU/SMK</option>
                                            <option value="D1">Diploma 1</option>
                                            <option value="D2">Diploma 2</option>
                                            <option value="D3">Diploma 3</option>
                                            <option value="S1">Strata 1</option>
                                            <option value="S2">Strata 2</option>
                                            <option value="S3">Strata 3</option>
                                        </select>
                                        <p class="description">minimal pendidikan terakhir</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_11">Umur Minimal :</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_11" name="umur_min" value=""/> tahun
                                        <?php echo form_error('umur_min', ' <div class="boxinfo error">', '</div>'); ?>

                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_11">Umur Maksimal :</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_11" name="umur_max" value=""/>tahun
                                        <?php echo form_error('umur_max', ' <div class="boxinfo error">', '</div>'); ?>

                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                        <label for="text_11">Minimal Pengalaman :</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_11" name="min_pengalaman" value=""/> tahun
                                        <?php echo form_error('min_pengalaman', ' <div class="boxinfo error">', '</div>'); ?>

                                    </dd>
                                </dl>
                            </div>

                            <div class="form-button">
                                <input type="submit" value="Submit" name="submit" id=""/>
                                <input class="grey" type="reset" value="Reset" name="reset" id=""/>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
