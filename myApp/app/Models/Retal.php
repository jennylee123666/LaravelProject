<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retal extends Model
{
    use HasFactory;
    
    protected $table = 'retals';
    protected $primaryKey = 'order_id';
    protected $fillable=['order_id','created_at','updated_at','computer_id','rental_user_id','base_price','duration','discount','insurance','total_price','deposit','damage_status','damage_amount','deposit_returned'];

}
