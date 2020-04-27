<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public $timestamps = false;

    public function contact()
    {
        return $this->belongsTo('App\Contact', 'contact_id', 'id');
    }
}
