<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model 
{
    protected $table = 'wisata';
    protected $primarykey = 'id_wisata';
    public $timestamps = false;

    protected $fillable = [
        'kota', 'landmark','tarif'
    ];
    protected $hidden= [];
}

?>