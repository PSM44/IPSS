<?php
echo'<pre>';
//print_r($_SERVER);
$_host = $_SERVER['HTTP_HOST'];
$_port = $_SERVER['SERVER_PORT'];
$_uri = $_SERVER['REQUEST_URI'];
$_method = $_SERVER['REQUEST_METHOD'];
$_parts = explode('/', $_uri);
/*echo"<p>{$_host}</p>";
echo"<p>{$_port}</p>";*/
echo"<p>{$_uri}</p>";
echo"<p>{$_method}</p>";
echo'<pre>';
