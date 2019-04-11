<?php

namespace Vcian\EBusinessCard;

use Illuminate\Database\Eloquent\Model;

class EBusinessCard extends Model
{
    protected $table = 'e_business_cards';

    protected $fillable = [
        'name',
    ];
}
