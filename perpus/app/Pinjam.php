<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $table = 'pinjam';

    protected $primaryKey = 'id_pinjam';

    	public function Siswa()
		    {
		        return $this->belongsTo('App\Siswa','nis');
		    }

		public function Buku()
		    {
		        return $this->belongsTo('App\Buku','isbn');
		    }
}
