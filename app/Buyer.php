<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends User
{

    //akta buyer ar onek gulo transaction thakte pare
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
