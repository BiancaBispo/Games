<?php

require_once "../Services/NewsAPI.php";
use Services\NewsAPI;

$act = $_REQUEST['action'];
$api = new NewsAPI();

switch ($act) {
    case 'getNews':
        $res = $api->get();
        echo (json_encode($res));
    break;

    case 'getNewsById':
        $id = $_REQUEST['id'];
        $res = $api->getById($id);
        echo (json_encode($res));
    break;

    case 'getNewsByTitle':
        $id = $_REQUEST['title'];
        $res = $api->getByTitle($title);
        echo (json_encode($res));
    break;
}