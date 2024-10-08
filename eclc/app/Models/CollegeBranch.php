<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollegeBranch extends Model
{
    // Specify the table name if it doesn't follow Laravel's convention (if it's not 'college_branches')
    protected $table = 'college_branch_t';

    // Specify that the primary key is 'college_id' and not 'id'
    protected $primaryKey = 'college_id';

    // If the primary key is not auto-incrementing, you should set this to false
    public $incrementing = false;

    // If the primary key is not an integer, you need to set this to the correct type (e.g., string)
    protected $keyType = 'string';
}