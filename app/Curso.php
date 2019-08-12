<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    public $timestamps = false;
    protected $table = 'curso';
    protected $primaryKey = 'id_curso';
    protected $guarded = [];
    use SoftDeletes;
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
    public function alunos()
    {
        return $this->hasMany(Aluno::class, 'id_curso');
    }
}
