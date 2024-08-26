<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ambil extends Model
{
    protected $table = 'ambil';

    public $timestamps = false;

    protected $fillable = ['nama', 'kelas', 'umur', 'jenis_kelamin', 'jenis', 'jabatan'];

    public function simpan()
    {
        return $this->belongsTo(Simpan::class, 'nama', 'Nama');
    }
}
