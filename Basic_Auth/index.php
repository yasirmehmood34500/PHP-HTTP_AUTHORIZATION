<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="Required"');
    header('HTTP/1.0 401 Unauthorized');
    http_response_code(401);
    echo json_encode(array(
        "status" => 401,
        "response" => 'User Auth Required'
    ));
    exit;
} else {
    if ($_SERVER['PHP_AUTH_USER'] == "yasir" && $_SERVER['PHP_AUTH_PW'] == "123") {
        http_response_code(200);
        echo json_encode(array(
            "status" => 200,
            "response" => 'Successfully Conntect',
            "username" => $_SERVER['PHP_AUTH_USER'],
            "password" => $_SERVER['PHP_AUTH_PW']
        ));
    } else {
        http_response_code(404);
        echo json_encode(array(
            "status" => 404,
            "response" => 'Invalid Auth try again!'
        ));
    }   
}
 ?>