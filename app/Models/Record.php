<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'records';

    protected $fillable = [
        'name', 'lastname', 'company', 'position', 'email', 'telephone', 'for_email', 'for_telephone',
    ];

    public function scopeName($query, $name)
    {
        if($name):
            return $query->Where('name', 'LIKE', "%$name%");
        endif;
    }

    public function scopeLastName($query, $name)
    {
        if($name):
            return $query->Where('lastname', 'LIKE', "%$name%");
        endif;
    }

    public function scopeCompany($query, $name)
    {
        if($name):
            return $query->Where('company', 'LIKE', "%$name%");
        endif;
    }

    public function scopeStartdate($query, $name)
    {
        if($name):
            return $query->WhereDate('created_at', '>=', "$name");
        endif;
    }

    public function scopeEnddate($query, $name)
    {
        if($name):
            return $query->WhereDate('created_at', '<=', "$name");
        endif;
    }

}
