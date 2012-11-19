<script type="text/javascript" src="<?php echo base_url() . 'static/'?>js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() . 'static/'?>css/table.css" type="text/css"/>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $('#datatables').dataTable({
                "sPaginationType":"full_numbers"
            }
        );
    });
</script>

<script type="text/javascript">
    function confirm()
    {
        var r=confirm("Press a button");
        if (r==true)
        {
            alert("You pressed OK!");
        }
        else
        {
            alert("You pressed Cancel!");
        }
    }
</script>


<div id="contentwrap">
    <div id="page-title">
        <h1 class="icon gear">Job For Career</h1>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns"> <!-- one column: <div class="columns"> -->
            <!-- three columns: <div class="columns three"> -->
            <div class="column">

                <div class="content">
                    <table cellpadding=0 cellspacing=10 border="0" class="display" id="datatables" width="100%">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Deskripsi</th>

                            <th>Jenis Kelamin</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Umur Minimal</th>
                            <th>Umur Maksimal</th>
                            <th>Minimal Pengalaman</th>

                            <th colspan="2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 0;
                        foreach ($querys as $row) {
                            $i++;
                            echo "<tr class=\"record\">";
                            echo    "<td>$i</td>";
                            echo    "<td>$row->title</td>";
                            echo    "<td>$row->deskripsi</td>";

                            echo    "<td>$row->jenkel</td>";
                            echo    "<td>$row->pendidikan_terakhir</td>";
                            echo    "<td>$row->umur_min</td>";
                            echo    "<td>$row->umur_max</td>";
                            echo    "<td>$row->min_pengalaman</td>";

                            echo    "<td><a href=" . base_url() . "index.php/jobpost/edit/$row->id>Edit</a></td>";
                            echo    "<td><a href=" . base_url() . "index.php/jobpost/delete/$row->id>Delete</a></td>";
                            echo  "</tr>";
                        }
                        ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5"><a href="<?php echo site_url('jobpost/index');?>">Create a new job post</a>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


