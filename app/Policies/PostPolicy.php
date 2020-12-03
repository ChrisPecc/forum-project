<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Thread;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // public function before($user, $ability){
    //     error_log($user-> role);
    //     if ($user-> role === 'banni') {
    //         return false;
    //     }
    //     elseif ($user -> role ==='admin') {
    //         return true;
    //     }
    //     elseif ($user -> role ==='moderator') {
    //         return true;
    //     }
    // }

    public function create(User $user, Thread $thread){
        error_log($user." ".$thread);
        if ($user-> role === 'banni') {
            return false;
        }
        elseif ($user -> role ==='admin') {
            return true;
        }
        elseif ($user -> role ==='moderator') {
            return true;
        }
        elseif ($user-> role ==='VIP' && $thread -> section !== 'modérateurs') {
            return true;
        }
        elseif ($user-> role ==='user' && ($thread -> section !== 'modérateurs' && $thread -section !== 'VIP')) {
            return true;
        }
        else {
            return false;
        }

    }
}

