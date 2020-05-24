<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positif extends Model
{
    protected $table = "tb_positif";

    protected $primaryKey = "id_positif";

    protected $fillable = ['id_positif','tgl','id_kabupaten','ic','tl','dirawat','sembuh','meninggal','jml_positif','wna','wni'];
    public $timestamps = false;

   //  public function getCreatedAtAttribute() {
   //  return \Carbon\Carbon::parse($this->attributes['tgl'])
   //     ->format('d, M Y H:i');
   // }

   public function kabupaten()
{
    return $this->belongsTo('App\Kabupaten', 'id_kabupaten');
}



}