<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professor extends Model
{
    public $timestamps = false;
    protected $table = 'professor';
    protected $primaryKey = 'id_professor';
    protected $guarded = [];

    use SoftDeletes;
    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_professor');
    }
}
