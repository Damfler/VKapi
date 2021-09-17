<?
include_once('class.php');

$token = '';
$id = '';

// Get Freinds
$list = getFriends($id, $token);
// $list = json_decode($list, true);

echo $list;