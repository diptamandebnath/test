<?php
session_start();

$data = json_decode(file_get_contents("php://input"), true);

if(isset($data['sccode'])) {
    $_SESSION['sccode'] = $data['sccode'];
    echo "Session created";
} else {
    http_response_code(400);
    echo "Invalid request";
}
?>