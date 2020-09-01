<?php

namespace App;

use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

//TODO Add Doc
class Room extends Model
{
    // Adds soft delete support to the model
    use SoftDeletes;

    /**
     * @inheritdoc
     */
    protected $table = 'rooms';

    /**
     * @inheritdoc
     */
    protected $fillable = [
        'tiles',
    ];
}
