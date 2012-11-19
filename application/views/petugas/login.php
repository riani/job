<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
    <title>Login Petugas</title>
<center>
    <h2> <b> Login Petugas </b> <h2>
        <form action="<?php echo base_url()?>index.php/petugas/proseslogin" method="post">
            <table border="0" align="center">
                <tr>
                    <td> Username</td>
                    <td> <input name="username" type="text"> </td>
                </tr>
                <tr>
                    <td> Password</td>
                    <td> <input name="password" type="password"> </td>
                </tr>
                <tr>
                    <td> &nbsp; </td>
                    <td> <input name="submit" type="submit" value="login"> </td>
                </tr>
            </table>
        </form>

        <?php if (isset($error)) echo "<b><span style='color:red;'>$error</span></b>";
        if (isset($logout)) echo "<b><span style='color:red;'>$logout</span></b>"; ?>
</center>
</body></html>