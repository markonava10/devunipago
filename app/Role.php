<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends \TCG\Voyager\Models\Role
{
    protected $table = 'roles';

    protected $fillable = [
        'name', 'display_name',
    ];
}
