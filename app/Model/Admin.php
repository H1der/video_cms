<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user;

class Admin extends user
{
    protected $rememberTokenName = '';
}
