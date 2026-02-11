<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

echo json_encode([
    "keys" => [
        [
            "kty" => "oct",
            "kid" => "9d76aea451d441a4913d4d70c4e586ab",
            "k"   => "051027a6ff54494b949ba792928e9008"
        ]
    ],
    "type" => "temporary"
]);
?>
