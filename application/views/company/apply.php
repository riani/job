<style type="text/css">
    p {
        color: red;
    }
</style>
<div id="contentwrap">
    <div id="page-title">
        <h1>Job For Career</h1>

        <div class="clearfix"></div>
    </div>

    <div id="page-content">
        <div class="columns">
            <div class="column">

                <div class="content">
                    <h2>
                        <?php
                        echo "Nama Jobseeker : " . $nama;
                        echo "<br />";
                        echo "Title Lowongan Pekerjaan : " . $jtitle;
                        ?>
                    </h2>
                    <br/>Tabel Persyaratan
                    <table border="1">
                        <tr>
                            <th>Field</th>
                            <th>Data Jobseeker</th>
                            <th>Syarat Jobpost</th>
                            <th>&nbsp;</th>
                        </tr>

                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <?php
                                if($jenkel=='a') {
                                    echo 'Pria dan Wanita';
                                }else if($jenkel=='p') {
                                    echo 'Pria';
                                } else if($jenkel=='w') {
                                    echo 'Wanita';
                                }else {
                                    echo $jenkel;
                                }
                                ?></td>
                            <td><?php
                                if($jjenkel=='a') {
                                    echo 'Pria dan Wanita';
                                }
                                else if($jjenkel=='p') {
                                    echo 'Pria';
                                }
                                else if($jjenkel=='w') {
                                    echo 'Wanita';
                                }
                                else {
                                    echo $jjenkel;
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if($jjenkel == 'a') {
                                    echo "<p>Match</p>";
                                }else {
                                    if ($jenkel != $jjenkel) {
                                        echo "<p>Not Match</p>";
                                    }else {
                                        echo "<p>Match</p>";
                                    }
                                }
                                ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Jenjang Pendidikan</td>
                            <td><?php echo $jenjang;?></td>
                            <td><?php 
                                if($jpendidikan_terakhir=='FREE') {
                                    echo 'Semua Jenjang Pendidikan';
                                }
                                else {
                                    echo $jpendidikan_terakhir;
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if($jpendidikan_terakhir=='FREE') {
                                    echo "<p>Match</p>";
                                }else {
                                    if ($jenjang != $jpendidikan_terakhir) {
                                        echo "<p>Not Match</p>";
                                    }else {
                                        echo "<p>Match</p>";
                                    }
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td><?php echo $jurusan;?></td>
                            <td>
                                <?php
                                $matchJur = false;
                                $jobJurAll = "";
                                foreach ($allJobJur as $jobjur) {
                                    if($jobjur->jurusan == $jurusan) {
                                        $matchJur= true;
                                        $jobJurAll .= "<b>".$jobjur->jurusan."</b><br/>";
                                        continue;
                                    }
                                    $jobJurAll .= $jobjur->jurusan."<br/>";
                                }
                                echo $jobJurAll;
                                ?>
                            </td>
                            <td>
                                <?php
                                if($matchJur) {
                                    echo "<p>Match</p>";
                                }else {
                                    echo "<p>Not Match</p>";
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                    <br/>
                    <input type="submit" value="send email">
                </div>
            </div>
        </div>
    </div>
</div>



