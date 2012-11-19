<?php //echo isset($template['partials']['slidewrap']) ? $template['partials']['slidewrap'] : '';  ?>
<div id="contentwrap">
    <div id="page-title">
        <h1>Dashboard Petugas Jobforcareer</h1>
        <h2>Selamat datang <?php echo $nama_ptgs; ?></h2>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">
                <?php
                if (isset($error))
                    echo "<span style='color:red;font-size:14px;'>$error</span><br/>";
                if (isset($logout))
                    echo "<span style='color:red;font-size:14px;'>$logout</span><br/>";
                if (isset($message))
                    echo "<span style='color:red;font-size:14px;'>$message</span><br/>";
                ?>

                <?php if ($priv == 1) { ?><a href="<?php echo site_url('petugas/register'); ?>">-Bikin Account Petugas</a><br /><?php } ?>
                <?php if ($priv == 1 || $priv == 2 ){ ?><a href="<?php echo site_url('petugas/kasir'); ?>">-Kasir</a><br /><?php } ?>
                <?php if ($priv == 1 || $priv == 3) { ?><a href="<?php echo site_url('petugas/pintu_masuk'); ?>">-Pintu Masuk</a><br /><?php } ?>
                <?php if ($priv == 1 || $priv == 4) { ?><a href="<?php echo site_url('petugas/pintu_keluar'); ?>">-Pintu Keluar</a><br /><?php } ?>
                <a href="<?php echo site_url('petugas/logout'); ?>">-Log Out</a><br />
            </div>
        </div>
    </div>
</div>