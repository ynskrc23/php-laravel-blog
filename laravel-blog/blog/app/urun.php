<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class urun extends Model
{
    protected $table ='tbl_urun';
    protected $primaryKey = 'urun_id';
    protected $fillable = ['urun_kategori','urun_marka','urun_islemci','urun_ram','urun_disk',
        'urun_ekran','urun_garanti','urun_durum','urun_kimden','urun_adres','urun_resim'];
}
