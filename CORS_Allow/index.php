<?php
header("Access-Control-Allow-Origin: http://localhost:3000");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");

echo json_encode(array("resp"=> "success"));
