<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Login with Company</title>
    </head>
    <body>
        <center>
            <h2> <b> Login Company </b> </h2>
            <form action="<?php echo base_url()?>index.php/company/proseslogin" method="post">
                <table border="0" align="center">
                    <tr>
                        <td> Username</td>
                        <td colspan="2"> <input name="username" type="text"/> </td>
                    </tr>
                    <tr>
                        <td> Password</td>
                        <td colspan="2"> <input name="password" type="password"/> </td>
                    </tr>
                    <tr>
                        <td> &nbsp; </td>
                        <td> <input name="submit" type="submit" value="login"/> </td>
                        <td> <a href="<?php echo base_url()?>index.php/company/register">Register</a> </td>
                    </tr>
                </table>
            </form>

            <?php if (isset($error)) echo "<b><span style='color:red;'>$error</span></b>";
            if (isset($logout)) echo "<b><span style='color:red;'>$logout</span></b>"; ?>
        </center>
    </body>
</html>