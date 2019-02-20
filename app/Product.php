<?php

namespace App;

use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements HasMedia
{
    protected $guarded = [];

    use HasMediaTrait;
}
