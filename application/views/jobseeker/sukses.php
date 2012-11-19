<div id="contentwrap">
    <div id="page-title">
        <h1><a href="<?php echo site_url('');?>">Registration Jobforcareer</a></h1>

        <div class="clearfix"></div>
    </div>

    <div id="page-content">
        <div class="columns">
            <div class="column">

                <div class="content">
                    <dl class="form-text">
                        <dt><h1><label for="text_11">Jobseeker ID <span style="color:red;">(wajib dicatat)</span> :</label> <?php echo $jobseeker_id;?></h1></dt>
                    </dl>
                    <table border="1">
                        <tr>
                            <th>item</th>
                            <th>value</th>
                        </tr>
                        <tr>
                            <td>nama</td>
                            <td><?php echo $nama;?></td>
                        </tr>
                        <tr>
                            <td>jenis kelamin</td>
                            <td><?php echo $jenkel;?></td>
                        </tr>
                        <tr>
                            <td>tempat lahir</td>
                            <td><?php echo $tempat_lahir;?></td>
                        </tr>
                        <tr>
                            <td>tanggal lahir</td>
                            <td><?php echo $tanggal_lahir;?></td>
                        </tr>
                        <tr>
                            <td>universitas</td>
                            <td><?php echo $universitas;?></td>
                        </tr>
                        <tr>
                            <td>jurusan</td>
                            <td><?php echo $jurusan;?></td>
                        </tr>
                        <tr>
                            <td>nilai/IPK</td>
                            <td><?php echo $nilai;?></td>
                        </tr>
                        <tr>
                            <td>tahun masuk</td>
                            <td><?php echo $tahun_masuk;?></td>
                        </tr>
                        <tr>
                            <td>tahun lulus</td>
                            <td><?php echo $tahun_lulus;?></td>
                        </tr>
                        <tr>
                            <td>jabatan</td>
                            <td><?php echo $jabatan;?></td>
                        </tr>
                        <tr>
                            <td>tempat bekerja</td>
                            <td><?php echo $tempat_bekerja;?></td>
                        </tr>
                        <tr>
                            <td>tanggal mulai</td>
                            <td><?php echo $date_start;?></td>
                        </tr>
                        <tr>
                            <td>tanggal berhenti kerja</td>
                            <td><?php echo $date_end;?></td>
                        </tr>
                        <tr>
                            <td>keterangan</td>
                            <td><?php echo $keterangan;?></td>
                        </tr>
                        <?php
                        $image_properties = array(
                                'src' => 'images/uploaded/'.$foto,
                                'alt' => 'tidak tersedia',
                                'width' => '90',
                                'height' => '120',

                        );
                        ?>

                        <tr>
                            <td>foto</td>
                            <td><?php echo img($image_properties);?></td>
                        </tr>
                    </table>
                    <input type="submit" value="PRINT" onclick="javascript:window.print()">
                    <a href="<?php echo site_url('');?>">Registration Jobforcareer</a>
                </div>
            </div>
        </div>
    </div>
</div>