<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class codeassessment extends Model
{
  protected $fillable = ['naam', 'email', 'afstand'];
  public $timestamps = false;
}
