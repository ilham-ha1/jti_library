<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table='book'; 
    protected $primaryKey = 'id'; 
  
    protected $fillable = [
        //id
        'title',
        'photo',
        'year',
        'status',
        'stock',
        'author',
        'isbn_issn',
        'type_id',
        'publisher_id',
        'description',
    ];
    
    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function type(){
        return $this->belongsTo(Type::class);
    }

    // public function borrow_transaction(){
    //     return $this->hasMany(Borrow_transaction::class);
    // }

    public function bookborrow_transaction(){
        return $this->hasMany(BookBorrow_transaction::class);
    }

}
