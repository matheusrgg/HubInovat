<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome','descricao','quantidade','preco','user_id'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'products';

    public function users(){
        return $this->belongsTo('App\User');
    }
}
