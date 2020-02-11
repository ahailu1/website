<?php
session_start(isset($_session[$name]));

$data["login"] = "logout";
$data["session"] = $data["username"];
