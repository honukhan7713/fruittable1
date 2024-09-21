<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
  protected  $fillable = [ 'product_name' ,'mrp_price' ,'selling_price','short_desc','long_desc','category','tage','vendor_id '];
}
