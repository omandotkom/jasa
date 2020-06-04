<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Jasa extends Model
{
    protected $table = "services";
    use Searchable;
    public $asYouType = true;
    
}
