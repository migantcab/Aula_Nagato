<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Produtos extends Eloquent
{
    protected $collection = 'produto'; //Nome do banco
    protected $connection = 'mongodb';
    protected $guarded = [];
    protected $dateFormat = 'Y-m-d\TH:i:sP';
}


