<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class simpan extends Model
{
    protected $table = 'simpan';

    public $timestamps = false; 
    protected $fillable = ['Nama', 'kelas', 'umur', 'jenis_kelamin', 'no_hp', 'email'];

    public function simpan()
    {
        return $this->belongsTo(liblary::class, 'kelas', 'kelas');
    }
}
