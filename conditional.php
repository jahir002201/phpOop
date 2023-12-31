<?php
$user = "";
$color = "";
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo $color = $color ?? "red";
?>