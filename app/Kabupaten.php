<?php

namespace App;
use App\Positif;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
	public $timestamps = false;

	protected $table = "tb_kabupaten";

    protected $primaryKey = "id_kabupaten";

    protected $fillable = ['id_kabupaten','nama_kabupaten'];

    // public function jmlpositifs()
    // {
    // return $this->hasMany('App\Positif');
    // }

//     public function pasien()
// {
//     return $this->belongsTo('App\Positif');
// }

}

