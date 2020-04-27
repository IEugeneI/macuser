<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'surname',
    ];

    public function phones()
    {
        return $this->hasMany('App\Phone', 'contact_id', 'id');
    }
}
