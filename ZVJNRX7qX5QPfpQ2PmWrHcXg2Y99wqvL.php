<?php

function execPrint($command) {
    $result = array();
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "\n");
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Sync repo</title>
</head>
<body>
<div style="text-align: center"><!--  -->
<h2>Sincronizando con el repositorio...</h2>
<!-- // Print the exec output inside of a pre element -->
<pre><?php execPrint("git pull https://github.com/milady495a/landing-marta.git master"); ?></pre>
<h2>Completado!</h2>
</div>
</body>
</html>
