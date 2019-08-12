<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;
    protected $table = 'aluno';
    protected $primaryKey = 'id_aluno';
    protected $guarded = [];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
