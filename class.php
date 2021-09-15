<?

function getFriends ($id, $token) { /* Получение всех друзей */

    return file_get_contents("https://api.vk.com/method/friends.get?access_token=$token&v=5.131");

}

function deleteFriends ($id, $token) { /* Удаление друзей по id */

    return file_get_contents("https://api.vk.com/method/friends.delete?user_id=$id&access_token=$token&v=5.131");

}

function getFollowers ($id, $token) { /* Получение всех подписчиков */

    return file_get_contents("https://api.vk.com/method/users.getFollowers?access_token=$token&v=5.131");

}