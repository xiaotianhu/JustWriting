<?php 
$shell = "cd /opt/wwwroot/blog/posts/;git pull origin master;";
exec($shell, $output);

var_dump($output);
