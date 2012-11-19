<div id="contentwrap">
    <div id="page-title">
        <h1>Job For Career</h1>

        <div class="clearfix"></div>
    </div>

    <div id="page-content">
        <div class="columns">
            <div class="column">

                <div class="content">
                    <script>
                        // increase the default animation speed to exaggerate the effect
                        $.fx.speeds._default = 1000;
                        $(function () {
                            $(".dialog").dialog({
                                autoOpen:false,
                                show:"blind",
                                hide:"explode",
                                height:500,
                                width:500
                            });

                            $(".opener").click(function () {
                                $(".dialog").dialog("open");
                                return false;
                            });
                        });
                    </script>
                    <h2>Data Jobseeker</h2>
                    <table border="1">
                        <tr>
                            <th>Field</th>
                            <th>Data</th>
                        </tr>
                        <tr>
                            <td>nama</td>
                            <td><?php echo $nama;?></td>

                        </tr>

                        <tr>
                            <td>Nomor KTP</td>
                            <td><?php echo $no_identitas;?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <?php
                                if($jenkel == 'p')echo 'Pria';
                                else if($jenkel == 'w') echo 'Wanita';
                                else echo $jenkel;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><?php echo $tempat_lahir;?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><?php echo $tanggal_lahir;?></td>
                        </tr>
                        <tr>
                            <td>Perguruan Tinggi/Sekolah</td>
                            <td><?php echo $universitas;?></td>
                        </tr>
                        <tr>
                            <td>Jenjang</td>
                            <td><?php echo $jenjang;?></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td><?php echo $jurusan;?></td>
                        </tr>
                        <tr>
                            <td>Nilai</td>
                            <td><?php echo $nilai;?></td>
                        </tr>
                        <tr>
                            <td>Tahun Masuk</td>
                            <td><?php echo $tahun_masuk;?></td>
                        </tr>
                        <tr>
                            <td>Tahun Lulus</td>
                            <td><?php echo $tahun_lulus;?></td>
                        </tr>
                        <!--    <tr>-->
                        <!--        <td>foto</td>-->
                        <!--        <td width="30" height="40">--><?php //echo img('images/uploaded/'.$foto);?><!--</td>-->
                        <!--    </tr>-->

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
                    <div class="list-job-post">
                        <h2>Data Lowongan Pekerjaan <b><?php echo $namaCompany;?></b></h2>
                        <table border="1">
                            <tr>
                                <th>Title Lowongan Pekerjaan</th>
                                <th>Action</th>
                            </tr>
                                <?php
                                foreach ($querys as $jobpost) {
                                    echo "<tr>";
                                    echo "<td>".$jobpost->title."</td>";
                                    echo "<td><a href=" . base_url() . "index.php/company/apply_lamaran/$jobpost->id >apply lamaran</a></td>";
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
