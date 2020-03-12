<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 'user_id'
    protected $fillable = ['nome','descricao','quantidade','preco'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'products';

    public function user(){
        return $this->belongsTo('App\User');
    }
}
