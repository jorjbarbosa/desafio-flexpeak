<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $timestamps = false;
    protected $table = 'professor';
    protected $primaryKey = 'id_professor';
    protected $guarded = [];

    public function cursos()
    {
        return $this->hasMany(Curso::class, 'id_professor');
    }
}
