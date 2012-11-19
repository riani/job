<script>
    $(function () {
        var pickerOpts = {
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd',
            showOn: "button",
            buttonText: "open",
            numberOfMonths: 3,
            yearRange: "-50:+0"
        };
        $(".datepicker").datepicker(pickerOpts);
    });
</script>

<style type="text/css">
    input{
        size: 10px;
    }

</style>


<?php //echo isset($template['partials']['slidewrap']) ? $template['partials']['slidewrap'] : ''; ?>
<div id="contentwrap">
    <div id="page-title">
        <h1>Registration for Job For Career</h1>

        <div class="clearfix"></div>
    </div>

    <div id="page-content">
        <div class="columns">
            <div class="column">
                <div class="content">

                    <?php if (isset($data)) echo "<b><span style='color:red;'>$data</span></b>";?>

                    <!--    <form method="post" action="--><?php //echo site_url('jobseeker/create');?><!--">-->
                    <?php echo form_open_multipart('jobseeker/save_jobseeker');?>
                    <div class="blocksection">
                        <div class="blockcontent">

                            <h3>I. DATA PRIBADI <h4 style="color: red;margin-left: 10px">Semua field wajib di isi</h4></h3>
                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Nama Lengkap :</label>
                                </dt>
                                <dd>
                                    <input type="text" id="text_11" name="nama" value=""/>
                                    <?php echo form_error('nama', ' <div class="boxinfo error">', '</div>'); ?>
                                </dd>
                            </dl>
                            <dl class="form-select">
                                <dt>
                                    <label for="select_1">Jenis Identitas :</label>
                                </dt>
                                <dd>
                                    <select name="jenis_identitas">
                                        <option value="ktp">KTP</option>
                                        <option value="sim">SIM</option>
                                        <option value="other">Other</option>
                                    </select>

                                    <p class="description">jenis identitas yang anda gunakan</p>
                                </dd>
                            </dl>
                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Nomor Identitas :</label>
                                </dt>
                                <dd>
                                    <input type="text" id="text_11" name="no_identitas" value=""/>
                                    <?php echo form_error('no_identitas', ' <div class="boxinfo error">', '</div>'); ?>

                                </dd>
                            </dl>
                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Handphone :</label>
                                </dt>
                                <dd>
                                    <input type="text" id="text_11" name="hp" value=""/>
                                    <?php echo form_error('hp', ' <div class="boxinfo error">', '</div>'); ?>
                                </dd>
                            </dl>
                            <dl class="form-radio">
                                <dt>
                                    <label for="">Jenis Kelamin :</label>
                                </dt>
                                <dd>
                                    <input type="radio" id="radio_1" name="jenkel" value="P" CHECKED/> <label
                                        for="radio_1">Pria</label><br/>
                                    <input type="radio" id="radio_2" name="jenkel" value="W"/> <label
                                        for="radio_2">Wanita</label><br/>
                                </dd>
                            </dl>
                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Tempat Lahir :</label>
                                </dt>
                                <dd>
                                    <input type="text" id="text_11" name="tempat_lahir" value=""/>
                                    <?php echo form_error('tempat_lahir', ' <div class="boxinfo error">', '</div>'); ?>

                                    <p class="description">nama kota kelahiran anda</p>
                                </dd>
                            </dl>

                            <dl class="form-text">
                                <dt>
                                    <label for="tanggal_lahir">Tanggal Lahir:</label>
                                </dt>
                                <dd>
                                    <input type="text" class="datepicker" name="tanggal_lahir" value="" style=""/>
                                    <?php echo form_error('tanggal_lahir', ' <div class="boxinfo error">', '</div>'); ?>

                                    <p class="description">YYYY - DD - MM</p>
                                </dd>
                            </dl>
                            <!--<dl class="form-file">-->
                            <!--    <dt>-->
                            <!--        <label for="file_1">Cover Letter:</label>-->
                            <!--    </dt>-->
                            <!--    <dd>-->
                            <!--        <input type="file" id="file_1" name="cv" value=""/>-->
                            <!---->
                            <!--        <p class="description">Ut eros arcu scelerisque sed congue sed vehicula vel justo.</p>-->
                            <!--        --><?php //echo form_error('cv', ' <div class="boxinfo error">', '</div>'); ?>
                            <!--    </dd>-->
                            <!--</dl>-->
                            <dl class="form-file">
                                <dt>
                                    <label for="file_1">Foto:</label>
                                </dt>
                                <dd>
                                    <input type="file" id="file_1" name="userfile" value=""/>

                                    <p class="description">Ukuran Maksimal 100 kilobytes.</p>
                                    <?php echo form_error('foto', ' <div class="boxinfo error">', '</div>'); ?>
                                </dd>
                            </dl>

                            <dl class="form-file">
                                <dt>
                                    <label for="file_1">Cover Letter:</label>
                                </dt>
                                <dd>
                                    <input type="file" id="file_1" name="userfile1" value=""/>

                                    <p class="description">Ukuran Maksimal 100 kilobytes.</p>
                                    <?php echo form_error('cv', ' <div class="boxinfo error">', '</div>'); ?>
                                </dd>
                            </dl>

                            <h3>II. PENDIDIKAN TERAKHIR <h4 style="color: red;margin-left: 10px;">Semua field wajib di isi</h4></h3>
                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Perguruan Tinggi/Sekolah :</label>
                                </dt>
                                <dd>
                                    <input type="text" id="text_11" name="universitas" value=""/>
                                    <?php echo form_error('universitas', ' <div class="boxinfo error">', '</div>'); ?>

                                    <p class="description">nama perguruan tinggi/sekolah</p>
                                </dd>
                            </dl>
                            <dl class="form-select">
                                <dt>
                                    <label for="select_1">Jenjang :</label>
                                </dt>
                                <dd>
                                    <select name="jenjang" id="select_1">
                                        <option value="SMP">Sekolah Dasar</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMU">SMU/SMK</option>
                                        <option value="D1">Diploma 1</option>
                                        <option value="D2">Diploma 2</option>
                                        <option value="D3">Diploma 3</option>
                                        <option value="D4">Diploma 4</option>
                                        <option value="S1">Strata 1</option>
                                        <option value="S2">Strata 2</option>
                                        <option value="S3">Strata 3</option>
                                    </select>

                                    <p class="description">jenjang pendidikan terakhir yang telah ditempuh</p>
                                </dd>
                            </dl>

                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Jurusan :</label>
                                </dt>
                                <dd>
                                    <select name="jurusan" id="select_1">
                                        <option value="Tekhnik Informatika">Tekhnik Informatika</option>
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                        <option value="Manajemen Infromatika">Manajemen Infromatika</option>
                                        <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                                        <option value="Tekhnik Komputer dan Jaringan">Tekhnik Komputer dan Jaringan</option>
                                        <option value="Akuntansi">Akuntansi</option>
                                        <option value="Ekonomi Manajemen">Ekonomi Manajemen</option>
                                        <option value="Arsitektur">Arsitektur</option>
                                        <option value="Arsitektur Lansekap">Arsitektur Lansekap</option>
                                        <option value="Ilmu Keperawatan">Ilmu Keperawatan</option>
                                        <option value="Astronomi">Astronomi</option>
                                        <option value="Oseanografi">Oseanografi</option>
                                        <option value="Teknik Elektro">Teknik Elektro</option>
                                        <option value="Teknik Fisika">Teknik Fisika</option>
                                        <option value="Teknik Geodesi">Teknik Geodesi</option>
                                        <option value="Teknik Geofisika ">Teknik Geofisika </option>
                                        <option value="Teknik Geologi">Teknik Geologi</option>
                                        <option value="Teknik Industri">Teknik Industri</option>
                                        <option value="Teknik Kimia">Teknik Kimia</option>
                                        <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                        <option value="Teknik Metalaurgi">Teknik Metalaurgi</option>
                                        <option value="Teknik Nuklir">Teknik Nuklir</option>
                                        <option value="Teknik Penerbangan">Teknik Penerbangan</option>
                                        <option value="Teknik Pengairan">Teknik Pengairan</option>
                                        <option value="Teknik Perminyakan">Teknik Perminyakan</option>
                                        <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                        <option value="Teknik Sistem Perkapalan">Teknik Sistem Perkapalan</option>
                                        <option value="Teknologi Hasil Hutan">Teknologi Hasil Hutan</option>
                                        <option value="Teknologi Hasil Perikanan">Teknologi Hasil Perikanan</option>
                                        <option value="Teknologi Hasil Pertanian">Teknologi Hasil Pertanian</option>
                                        <option value="Teknologi Industri Pertanian">Teknologi Industri Pertanian</option>
                                        <option value="Teknologi Pangan">Teknologi Pangan</option>
                                        <option value="Pendidikan">Pendidikan</option>
                                        <option value="Biokimia">Biokimia</option>
                                        <option value="Fisika">Fisika</option>
                                        <option value="Matematika">Matematika</option>
                                        <option value="Biologi">Biologi</option>
                                        <option value="Statitika">Statitika</option>
                                        <option value="Kimia">Kimia</option>
                                        <option value="Farmasi">Farmasi</option>
                                        <option value="Geofisika">Geofisika</option>
                                        <option value="Meteorologi">Meteorologi</option>
                                    </select>                    
                                    <?php echo form_error('jurusan', ' <div class="boxinfo error">', '</div>'); ?>
                                    <p class="description">jurusan pendidikan terakhir</p>
                                </dd>
                            </dl>
                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Nilai/IPK :</label>
                                </dt>
                                <dd>
                                    <input type="text" id="text_11" name="nilai" value=""/>
                                    <?php echo form_error('nilai', ' <div class="boxinfo error">', '</div>'); ?>

                                    <p class="description">nilai/IPK ujian terakhir</p>
                                </dd>
                            </dl>

                            <dl class="form-select">
                                <dt>
                                    <label for="select_1">Tahun Masuk:</label>
                                </dt>
                                <dd>
                                    <select name="tahun_masuk" id="select_2">
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2000">2003</option>
                                        <option value="2001">2004</option>
                                        <option value="2002">2005</option>
                                        <option value="2000">2006</option>
                                        <option value="2001">2007</option>
                                        <option value="2002">2008</option>
                                        <option value="2002">2009</option>
                                        <option value="2000">2010</option>
                                        <option value="2001">2011</option>
                                        <option value="2002">2012</option>
                                    </select>

                                    <p class="description">tahun masuk jenjang pendidikan</p>
                                </dd>
                            </dl>

                            <dl class="form-select">
                                <dt>
                                    <label for="select_1">Tahun Lulus:</label>
                                </dt>
                                <dd>
                                    <select name="tahun_lulus" id="select_3">
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2000">2003</option>
                                        <option value="2001">2004</option>
                                        <option value="2002">2005</option>
                                        <option value="2000">2006</option>
                                        <option value="2001">2007</option>
                                        <option value="2002">2008</option>
                                        <option value="2002">2009</option>
                                        <option value="2000">2010</option>
                                        <option value="2001">2011</option>
                                        <option value="2002">2012</option>
                                    </select>

                                    <p class="description">tahun lulus jenjang pendidikan</p>
                                </dd>
                            </dl>



                            <h3>III. PENGALAMAN KERJA</h3>

                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Instansi/Perusahaan :</label>
                                </dt>
                                <dd>
                                    <input type="text" id="text_11" name="tempat_bekerja" value=""/>
                                    <?php echo form_error('tempat_bekerja', ' <div class="boxinfo error">', '</div>'); ?>

                                    <p class="description">nama instansi/perusahaan</p>
                                </dd>
                            </dl>

                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Posisi/Jabatan :</label>
                                </dt>
                                <dd>
                                    <input type="text" id="text_11" name="jabatan" value=""/>
                                    <?php echo form_error('jabatan', ' <div class="boxinfo error">', '</div>'); ?>
                                </dd>
                            </dl>


                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Dari :</label>
                                </dt>
                                <dd>
                                    <input type="text" class="datepicker" name="date_start" value=""/>
                                    <?php echo form_error('date_start', ' <div class="boxinfo error">', '</div>'); ?>

                                    <p class="description">tahun memulai pekerjaan</p>
                                </dd>
                            </dl>

                            <dl class="form-text">
                                <dt>
                                    <label for="text_11">Sampai :</label>
                                </dt>
                                <dd>
                                    <input type="text" class="datepicker" name="date_end" value=""/>
                                    <?php echo form_error('date_end', ' <div class="boxinfo error">', '</div>'); ?>

                                    <p class="description">tahun keluar dari pekerjaan</p>
                                </dd>
                            </dl>

                            <dl class="form-textarea">
                                <dt>
                                    <label for="textarea_1">Keterangan:</label>
                                </dt>
                                <dd>
                                    <textarea rows="5" cols="10" id="textarea_1" name="keterangan"></textarea>
                                    <?php echo form_error('keterangan', ' <div class="boxinfo error">', '</div>'); ?>
                                </dd>
                            </dl>
                        </div>



                        <div class="form-button">
                            <input type="submit" value="Register" name="register" id="submit"/>
                            <input class="grey" type="reset" value="Reset" name="reset" id="reset"/>
                        </div>

                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

