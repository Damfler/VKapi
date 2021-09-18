<?
/*---/===/===/===/===/--- VK API ---/===/===/===/===/---*/

/* --- / USER / --- */

/* Get USER access token  */
function getUserToken($login, $password)
{
    $token = file_get_contents("https://oauth.vk.com/token?grant_type=password&client_id=2274003&client_secret=hHbZxrka2uZ6jB1inYsH&username=$login&password=$password&v=5.101");
    $token = json_decode($token, true);
    if (!empty($token['access_token']))
        return $token['access_token'];
    else {
        echo $token['error_description'];
        return false;
    }
}

/* Get USER id */
function getUserId($login, $password)
{
    $token = file_get_contents("https://oauth.vk.com/token?grant_type=password&client_id=2274003&client_secret=hHbZxrka2uZ6jB1inYsH&username=$login&password=$password&v=5.101");
    $token = json_decode($token, true);
    if (!empty($token['user_id']))
        return $token['user_id'];
    else {
        echo $token['error_description'];
        return false;
    }
}

/* Get all followers */
function getFollowersItems($token)
{
    $friends = file_get_contents("https://api.vk.com/method/users.getFollowers?access_token=$token&v=5.131");
    $friends = json_decode($friends, true);
    if (!empty($friends['response']))
        return $friends['response']['items'];
    else {
        echo $friends['error']['error_msg'];
        return false;
    }
}

/* Get count Subscriptions */
function getFollowersCount($token)
{
    $friends = file_get_contents("https://api.vk.com/method/users.getFollowers?access_token=$token&v=5.131");
    $friends = json_decode($friends, true);
    if (!empty($friends['response']))
        return $friends['response']['count'];
    else {
        echo $friends['error']['error_msg'];
        return false;
    }
}

/* Get all Subscriptions */
function getSubscriptionsItems($token)
{
    $friends = file_get_contents("https://api.vk.com/method/users.getSubscriptions?access_token=$token&v=5.131");
    $friends = json_decode($friends, true);
    if (!empty($friends['response']))
        return $friends['response']['items'];
    else {
        echo $friends['error']['error_msg'];
        return false;
    }
}

/* Get count followers */
function getSubscriptionsCount($token)
{
    $friends = file_get_contents("https://api.vk.com/method/users.getSubscriptions?access_token=$token&v=5.131");
    $friends = json_decode($friends, true);
    if (!empty($friends['response']))
        return $friends['response']['count'];
    else {
        echo $friends['error']['error_msg'];
        return false;
    }
}

/* --- / FRIENDS / --- */

/* Get all friend */
function getFriendsItems($token)
{
    $friends = file_get_contents("https://api.vk.com/method/friends.get?access_token=$token&v=5.131");
    $friends = json_decode($friends, true);
    if (!empty($friends['response']))
        return $friends['response']['items'];
    else {
        echo $friends['error']['error_msg'];
        return false;
    }
}

/* Get count friend */
function getFriendsCount($token)
{
    $friends = file_get_contents("https://api.vk.com/method/friends.get?access_token=$token&v=5.131");
    $friends = json_decode($friends, true);
    if (!empty($friends['response']))
        return $friends['response']['count'];
    else {
        echo $friends['error']['error_msg'];
        return false;
    }
}

/* Delete friend as id */
function deleteFriends($id_friend = [], $token)
{
    foreach ($id_friend as $id) {
        $del = file_get_contents("https://api.vk.com/method/friends.delete?user_id=$id&access_token=$token&v=5.131");
        $del = json_decode($del, true);
        if ($del['response']['success'] == 0) {
            echo $id . ' - ERROR';
            return false;
        }
    }
    return true;
}
