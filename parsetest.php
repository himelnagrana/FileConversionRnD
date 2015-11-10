<?php

require_once __DIR__ . '/autoload.php';

use Parse\ParseObject;
use Parse\ParseQuery;
use Parse\ParseACL;
use Parse\ParsePush;
use Parse\ParseUser;
use Parse\ParseInstallation;
use Parse\ParseException;
use Parse\ParseAnalytics;
use Parse\ParseFile;
use Parse\ParseCloud;
use Parse\ParseClient;


ParseClient::initialize(
    'p8hmFEqu0RutUrpuyr6HRwjLMNtHZVeTXKiK5BtR',
    'gj0dPiKxAOKM64l0bl56WLOnoEaCaCqUtyy5V8BS',
    'pwL7PmYY83Z3rX6yiVoren3yQYEf3wUDXSYtuUKz',
    true
);

$data = array(
    "alert" => "Mogs!!!"
);

// Push to Channels
$channelResponse = ParsePush::send(
    array(
        "channels" => ["channel-149"],
        "data"     => $data,
    )
);

var_dump($channelResponse);

// Push to Query
$query = ParseInstallation::query();
$query->notEqualTo('userId', '');
$deviceResponse = ParsePush::send(
    array(
        "where" => $query,
        "data"  => $data,
    )
);

var_dump($deviceResponse);