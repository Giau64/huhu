<?php 
    $conn = pg_connect('localhost', 'root', '', 'PGASS')
            or die("Can not connect database".pg_connect_error());
?>