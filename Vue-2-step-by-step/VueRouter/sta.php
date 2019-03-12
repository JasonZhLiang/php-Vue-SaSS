<?php
//$_GET= json_decode(file_get_contents('php://input'),true);
//echo('<pre>'.' this is php input:'.print_r($_GET,1).'</pre>');
if (!empty($_GET['body'])){
    $status = ['FirstName'=>'Jane', 'LastName'=>'Doe','Email'=>$_GET['body']];

    echo(json_encode($status));
}else{
    echo json_response(422, ['Fields Required!']);
}

function json_response($code = 200, $message = null)
{
    header_remove();
    http_response_code($code);
    header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
    header('Content-Type: application/json');
    $status = array(
        200 => '200 OK',
        400 => '400 Bad Request',
        404 => '404 Not Found',
        422 => 'Unprocessable Entity',
        500 => '500 Internal Server Error'
    );
    header('Status: '.$status[$code]);
    echo('<pre>'.' this is php input:'.print_r($status,1).'</pre>');//seems something issue with changing header of request , so this line cannot executed.
    return json_encode(array(
        'status' => $code < 300, // success or not?
        'body' => $message
    ));
}



