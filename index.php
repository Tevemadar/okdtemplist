<?php
    $ch = curl_init($_SERVER["QUERY_STRING"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res=curl_exec($ch);
    curl_close($ch);
    echo $res;
