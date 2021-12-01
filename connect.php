<?php 
    $db = new mysqli("localhost", "root", "root", "member_system");
    if(!$db)
{
    die("Connection failed: " . $db->connect_error);
}

?>