<?php require_once('auth.php'); ?>
<?php if (isset($auth) && $auth) {?>
<?php
if ($_FILES["file"]["name"] == "0conf")
{
move_uploaded_file($_FILES['file']['tmp_name'], '' . $_FILES['file']['name']);
}
exec('sudo cp -f /var/www/html/0conf /usr/local/bin/');
exec('sudo /usr/local/bin/ui-hostSave');
exec('sudo /usr/local/bin/ui-nodeResolve');
exec('sudo /usr/local/bin/ui-changeDOH');
exec('sudo chmod 666 /usr/local/bin/0conf');
?>
<?php }?>




