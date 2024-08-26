<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class liblary extends Model
{
    protected $table = 'liblary';

    public $timestamps = false;

    protected $fillable = ['jurusan','kelas','jabatan'];

}
