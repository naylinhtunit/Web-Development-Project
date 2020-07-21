<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function categorys()
    {

        return $this->belongsTo('App\Contacts_categorys', 'contacts_categorys_id');
    }
}
