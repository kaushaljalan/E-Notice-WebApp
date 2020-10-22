<?php

    require_once 'vendor/autoload.php';

    $google_client = new Google_Client();

    $google_client->setClientId('193572778996-ndm46v1oc6ovjouoqacvr3iaaq28qoei.apps.googleusercontent.com');

    $google_client->setClientSecret('KvUtegtXrBAN_g81Eev9YGqo');

    $google_client->setRedirectUri('http://localhost/online_notice_board/goo.php');

    $google_client->addScope('email');

    $google_client->addScope('profile');

    session_start();


?>