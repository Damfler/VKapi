<?

function getFriends ($id, $token) {

    return file_get_contents("https://api.vk.com/method/friends.get?user_id=$id&access_token=$token&v=5.131");

}

function delFriends ($id, $token) {

    return file_get_contents("https://api.vk.com/method/friends.delete?user_id=$id&access_token=$token&v=5.131");

}
