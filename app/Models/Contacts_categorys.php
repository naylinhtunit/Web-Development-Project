<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacts_categorys extends Model
{
    public function contacts()
    {

        return $this->hasMany(Contacts::class);
    }
}
