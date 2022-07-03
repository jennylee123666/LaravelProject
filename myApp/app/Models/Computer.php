<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;


protected $table = 'computers';
protected $primaryKey = 'id';
protected $fillable=['id','brand','Operating_system','Display_size','RAM','num_USB_port','HDMI_port','Rental_price','image_path','user_id','availability'];
}


