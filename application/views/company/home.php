<script type="text/javascript">
    <!--
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if(e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }


    //-->
</script>

<?php //echo isset($template['partials']['slidewrap']) ? $template['partials']['slidewrap'] : ''; ?>
<div id="contentwrap">
    <div id="page-title">
        <h1>Dashboard Company</h1>

        <div class="clearfix"></div>
    </div>

    <div id="page-content">
        <div class="columns">
            <div class="column">

                <div class="content">

                    <a href="#" onclick="toggle_visibility('foo');">Apply Lamaran Jobseeker</a>   <br />
                    <!-- <div id="foo" style="display:none";>-->
                    <div id="foo">
                        <form method="post" action="<?php echo site_url('company/proses_jobseeker');?>">
                            <div class="blocksection">
                                <!--                            <h2>Article</h2>-->

                                <div class="blockcontent">
                                    <h3>Apply Jobseeker</h3>
                                    <?php
                                    if (isset($error)) {
                                        echo "<dl><b><span style='color:red;margin-left:15px'>$error</span></b></dl>";
                                    }
                                    ?>
                                    <dl class="form-text">
                                        <dt>
                                            <label for="text_11">Barcode Jobseekeer:</label>
                                        </dt>
                                        <dd>
                                            <input type="text" id="text_11" name="id" value=""/>
                                            <?php echo form_error('id', ' <div class="boxinfo error">', '</div>'); ?>
                                            <p class="description">barcode number milik jobseeker</p>
                                        </dd>
                                    </dl>
                                </div>

                                <div class="form-button">
                                    <input type="submit" value="Submit" name="submit" id="submit"/>
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