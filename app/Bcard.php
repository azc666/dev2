<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bcard extends Model
{
  protected $fillable = [
    'name', 'email', 'password', 'title', 'description', 'property_website', 'direct', 'office', 'cell', 'fax', 'address', 'address2', 'city', 'state', 'zip'
  ];
}