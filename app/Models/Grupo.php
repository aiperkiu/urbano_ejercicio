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
class Grupo extends Model
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

     protected $table = 'grupo';


    protected $fillable = ['nombre'];


    public function contactos()
    {
        return $this->hasMany(Contact::class, 'fk_grupo', 'id');
    }


}
