<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Role extends Model
{
    use HasFactory;
    protected $fillable = ['name','description'];

    ##### Relations #######

    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
