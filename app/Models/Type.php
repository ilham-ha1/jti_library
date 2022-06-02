<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table='name'; 
    protected $primaryKey = 'id'; 
  
    protected $fillable = [
        //id
       'name',
    ];
    
    public function book(){
        return $this->hasOne(Book::class);
    }
}
