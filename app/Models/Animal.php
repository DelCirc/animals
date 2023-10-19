<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model {
  use HasFactory;
  protected $fillable = ['name','color','sound',"type"];

  public function isLitterTrained() : bool {
    return true;
  }
}
