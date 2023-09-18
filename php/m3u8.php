<?php

$type = intval(@$_REQUEST["type"]);

header("Content-Type: application/json; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$src = "https://bitdash-a.akamaihd.net/content/MI201109210084_1/m3u8s/f08e80da-bf1d-4e3d-8899-f0f6155f6efa.m3u8";
if ($type === 2) {
    $src = "https://test-streams.mux.dev/x36xhzz/x36xhzz.m3u8";
}

$data = array(
    "src" => $src
);
echo json_encode($data);
