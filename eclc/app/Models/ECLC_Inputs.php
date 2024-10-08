<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ECLC_Inputs extends Model
{
    use HasFactory;

    protected $table = 'eclc_inputs';

    protected $fillable = [
         'user_id', 'pr_id','in_charge','college_id', 'noe', 'date_not', 'Type_PI', 'noc', 'des_out', 'dop', 'tar_ben' , 'wwp', 'expiry_date', "E_NE", 'MOA', "Status"
    ];

}
