<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $table = 'journaux';   // sinon Laravel chercherait la table "journals"
    protected $fillable = ['code', 'libelle'];
}