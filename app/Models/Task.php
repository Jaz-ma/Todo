<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

  protected  $fillable=[
        'taskName',
        'lists_id'
    ];

    public function lists(){
        return $this->belongsTo(Lists::class,'lists_id');
    }
}
