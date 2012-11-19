<?php
if (isset($querys) && count($querys) > 0) {
    ?>
<h1>Data</h1>
<table width="400" border="1">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Deskripsi</th>
        <th>Posisi</th>
        <th>Jenis Kelamin</th>
        <th>Pendidikan Terakhir</th>
        <th>Umur Minimal</th>
        <th>Umur Maksimal</th>
        <th>Minimal Pengalaman</th>
        <th>Pendidikan Terakhir</th>

        <th colspan="2">Action</th>


    </tr>
    <?php
    $i = 0;
    foreach ($querys as $row) {
        $i++;
        echo "<tr class=\"record\">";
        echo    "<td>$i</td>";
        echo    "<td>$row->title</td>";
        echo    "<td>$row->deskripsi</td>";
        echo    "<td>$row->posisi</td>";
        echo    "<td>$row->jenkel</td>";
        echo    "<td>$row->pendidikan_terakhir</td>";
        echo    "<td>$row->umur_min</td>";
        echo    "<td>$row->umur_max</td>";
        echo    "<td>$row->min_pengalaman</td>";
        echo    "<td>$row->pendidikan_terakhir</td>";
        echo    "<td><a href=".base_url()."index.php/jobpost/edit/$row->id>Edit</a></td>";
        echo    "<td><a href=".base_url()."index.php/jobpost/delete/$row->id>Delete</a></td>";
        echo  "</tr>";
    }
    ?>
</table>
<?php

}
?>

