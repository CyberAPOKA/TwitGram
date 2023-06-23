<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

// Broadcast::channel('posts', function () {
//     // return $user !== null;
//     return true;
// });

Broadcast::channel('channel-publico', function () {
    return true;
});

Broadcast::channel('public-posts', function () {
    return true;
});

Broadcast::channel('public-publications', function () {
    return true;
});
