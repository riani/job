<div id="contentwrap">
    <div id="page-title">
        <h1>Kasir Area</h1>
        <div class="clearfix"></div>
        <h2>Selamat datang <?php echo $nama_ptgs; ?></h2>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <form method="post" action="<?php echo site_url('petugas/kasir'); ?>">
                        <div class="blocksection">
                            <?php
                            if (!empty($message)) {
                                echo $message;
                            }
                            ?>
                            <input type="hidden" value="company" name="level"/>
                            <div class="blockcontent">
                                <h3>Fill Content</h3>
                                <dl class="form-text">
                                    <dt>
                                    <label for="text_11">ID Jobseeker :</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_11" name="id_jobseeker" value=""/>
                                        <?php echo form_error('id_jobseeker', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">id registrasi jobseeker</p>
                                    </dd>
                                </dl>
                                <dl class="form-text">
                                    <dt>
                                    <label for="text_12">Barcode :</label>
                                    </dt>
                                    <dd>
                                        <input type="barcode" id="text_12" name="barcode" value=""/>
                                        <?php echo form_error('barcode', ' <div class="boxinfo error">', '</div>'); ?>

                                        <p class="description">barcode pada member card</p>
                                    </dd>
                                </dl>
                            </div>

                            <div class="form-button">
                                <input type="submit" value="Submit" name="submit" id="submit"/>
                                <input class="grey" type="reset" value="Reset" name="reset" id="reset"/>
                            </div>
                    </form>
                    <script type="text/javascript">
                        document.getElementById('text_11').focus();
                    </script>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>






