<?php

header("content-type:text/html");

$obj=json_decode(file_get_contents('php://input'));

chmod("data.txt",0777);

$f=fopen("data.txt", "w+");

fwrite($f,$obj->data);

fclose($f);

?>
