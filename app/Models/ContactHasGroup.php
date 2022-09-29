<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactHasGroup extends Model
{
    use HasFactory;

    public function contact()
    {
        return $this->morphedByMany(Contact::class, 'id_contact');
    }

    public function group()
    {
        return $this->morphedByMany(Group::class, 'id_group');
    }
}
