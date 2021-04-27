<?php

namespace App\Models;

#use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nombre
 * @property string $apellido
 * @property string $edad
 */
class Contact extends Model
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    /**
     * @var array
     */

     #use HasFactory;
     protected $primaryKey = 'id';

    public $timestamps = false;

     protected $table = 'contacts';


    protected $fillable = ['nombre', 'apellido', 'edad'];

}
