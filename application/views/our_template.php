
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />

<?php
foreach($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

<?php endforeach; ?>
<?php foreach($js_files as $file): ?>

    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>

<style type='text/css'>
body
{
    font-family: Arial;
    font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
    text-decoration: underline;
}
</style>
</head>
<body>
<div id="contentwrap">
    <div id="page-title">
        <h1>Job<span>For Career</span></h1>

        <div class="clearfix"></div>
    </div>
    <div id="page-content">
        <div class="columns">
            <div class="column">

                <?php echo $output; ?>

            </div>
        </div>
    </div>
</div>


</body>
</html>



