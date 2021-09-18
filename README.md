<p align="center">
 <img src="https://github.com/Damfler/vk-API/blob/main/assets/vk.png?raw=true" style="height:200px" alt="VKapi"></a>
</p>

<h3 align="center">Instructions for VK API </h3>

<div align="center">

[![Tweet](https://img.shields.io/twitter/url/https/shields.io.svg?style=social)](https://twitter.com/intent/tweet?text=%F0%9F%93%A2%20Various%20README%20templates%20and%20tips%20on%20writing%20high-quality%20documentation%20that%20people%20want%20to%20read.&url=https://github.com/Damfler/vk-API)
[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/v/release/Damfler/VKapi?include_prereleases)](https://github.com/Damfler/vk-API/releases)
 [![GitHub Issues](https://img.shields.io/github/followers/Damfler?label=Follow)](https://github.com/Damfler)

</div>

---

<p align = "center">💡 Instructions using my ready-made solution 💡</p>


## Table of Contents

- [Introduction](#introduction)
- [Users](#user)
    - [users.get](#usersget)
    - [users.getFollowers](#usersgetfollowers)
    - [users.getSubscriptions](#usersgetsubscriptions)
- [Friends](#friends)
    - [friends.get](#friendsget)
    - [friends.delete](#friendsdelete)

## Introduction <a name = "introduction"></a>

All this is a ready-made solution for the VK api. I am providing you with a file, already with ready-made functions for all operations, so far there is only one, this is 
[`class.php`](/class.php).

Connect the file to your project, and then just call all the necessary functions.
An example of the initial page is shown in `index.php`

There are a lot of methods in the VK api, so I have divided the readme into categories, with each addition of a new method, I will add to the description of functions.

**First, get your token!** Go to the description.



## Users<a name = "user"></a>

Methods for working with user data.

### users.get<a name = "#usersget"></a>
Returns extended user information.

For this method, I have two functions:
- The first one returns only the token. `getUserToken`
- The second returns only the id. `getUserId`

In both functions, it is necessary to pass the first parameter to the user's login, often this is a phone number, and the second parameter is the user's password. `($login, $password)`

### users.getFollowers<a name = "#usersgetfollowers"></a>
Returns a list of user IDs that are subscribers of the user.

There are also two functions for this request.
- The first one is necessary to get a lot of subscribers with their ID. `getFollowersItems`
- The second is to get the number of subscribers currently. `getFollowersCount`

To work, you need to pass the token parameter. `($token)`

### users.getSubscriptions<a name = "#usersgetsubscriptions"></a>
Returns a list of user IDs and public pages that are included in the list of user subscriptions.

There are also two functions for this request.
- The first one is necessary to get a lot of subscriptions with their ID. `getSubscriptionsItems`
- The second is to get the number of subscriptions currently. `getSubscriptionsCount`

To work, you need to pass the token parameter. `($token)`


## Friends<a name = "friends"></a>

Methods for working with friends.

### friends.get<a name = "#friendsget"></a>
Returns a list of the user's friend IDs or extended information about the user's friends (when using the fields parameter).

There are also two functions for this request.
- The first one is necessary to get an array of friends with their id. `getFriendsItems`
- The second is to get the number of users currently `getFriendsCount`

To work, you need to pass the token parameter. `($token)`

### friends.delete<a name = "#friendsdelete"></a>
Removes a user from the friends list or rejects a friend request.

The function for deleting friends accepts an array with the user id and a token. `deleteFriends($id_friend = [], $token)`

If an error occurred (invalid id, error in the process,...), an error will appear, otherwise it will output true.
