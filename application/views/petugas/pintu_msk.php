<?php //echo isset($template['partials']['slidewrap']) ? $template['partials']['slidewrap'] : '';      ?>
<div id="contentwrap">
    <div id="page-title">
        <h1>Pintu Masuk Area</h1>
        <div class="clearfix"></div>
        <h2>Selamat datang <?php echo $nama_ptgs; ?></h2>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <form method="post" action="<?php echo site_url('petugas/pintu_masuk'); ?>">
                        <div class="blocksection">
                            <?php
                            if (!empty($message)) {
                                echo $message;
                            }
                            ?>
                            <div class="blockcontent">
                                <h3>Fill Content</h3>
                                <dl class="form-text">
                                    <dt>
                                    <label for="text_11">Barcode ID :</label>
                                    </dt>
                                    <dd>
                                        <input type="text" id="text_11" name="barcode" value=""/>
                                        <p class="description">barcode pada member card</p>
                                        <?php echo form_error('barcode', ' <div class="boxinfo error">', '</div>'); ?>
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
        </div>
    </div>
</div>
</div>
</div>