<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'kegiatans';
    protected $guarded = [];

    public function generateCode()
    {
        $tanggal = getdate();
        $tahun = substr($tanggal['year'], 2);

        $_kode = "ABEV/camp-c/$tahun";

        $kode = Activity :: where('kode_kegiatan', 'like', 'ABEV/camp-c/'.$tahun."__")->orderBy('kode_kegiatan');

        $kode = $kode->count();

        if($kode == 0){
            $kode = $_kode."001";
        }else{
            $last = $kode+1;

            $kode = "$_kode".str_pad($last, 3, '0', STR_PAD_LEFT);
        }

        return $kode;
       
    }

}