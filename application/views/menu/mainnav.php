<div id="mainnav">
    <ul>
        <?php
        if (!empty($priv)) {
            if($priv > 0 && $priv < 5) {
                ?>
        <li><a href="<?php echo site_url('petugas'); ?>">Petugas</a> <br /></li>
                <?php
            }
            if($priv == 5) {
                ?>
        <li><a href="<?php echo site_url('company'); ?>">Dashboard Company</a> <br /></li>
        <li><a href="<?php echo site_url('jobpost/show'); ?>">Job Management</a> <br /></li>
                <?php
            }
            if ($priv == 1) {
                ?>
        <li><a href="<?php echo site_url('petugas/register'); ?>">Bikin Account Petugas</a></li>
                <?php
            }
            if ($priv == 1 || $priv == 2) {
                ?>
        <li><a href="<?php echo site_url('petugas/kasir'); ?>">Kasir</a><br /></li>
                <?php
            }
            if($priv == 1 || $priv == 3) {

                ?>
        <li><a href="<?php echo site_url('petugas/pintu_masuk'); ?>">Pintu Masuk</a></li>
                <?php
            }
            if($priv == 1 || $priv == 4) {
                ?>
        <li><a href="<?php echo site_url('petugas/pintu_keluar'); ?>">Pintu Keluar</a></li>
                <?php
            }
            if($priv > 0 && $priv < 5) {
                ?>
        <li><a href="<?php echo site_url('petugas/logout'); ?>">Log Out</a></li>
                <?php
            }
            if($priv == 5) {
                ?>
        <li><a href="<?php echo site_url('company/logout'); ?>">Log Out</a></li>
                <?php
            }
        }
        ?>
        <!--
        <li>
            <a href="#" class="parent">Menu</a>
            <ul class="icon">
                <li class="gears"><a href="<?php echo base_url() ?>index.php/company" ?>Create Company</a></li>

                <li class="geartool"><a href="<?php echo base_url() ?>index.php/petugas">Create Petugas</a></li>
                <li class="desktop"><a href="<?php echo base_url() ?>index.php/jobseeker">Create JobSeeker</a></li>

            </ul>
        </li>

        <li>
            <a href="#" class="parent">Admin Dashboard</a>
            <ul>
                <li><a href="<?php echo base_url() ?>index.php/company/company_management">company</a></li>
                <li><a href="<?php echo base_url() ?>index.php/petugas/petugas_management">petugas</a></li>
                <li><a href="<?php echo base_url() ?>index.php/jobseeker/jobseeker_management">jobseeker</a>
</li>
</ul>
</li>
        -->

    </ul>
</div>