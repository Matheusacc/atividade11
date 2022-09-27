<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

    public function resource() {
        return $this->belongsTo('\App\Models\Resource');
    }

    public function role() {
        return $this->belongsTo('\App\Models\Role');
    }
}
