<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\Models\Department;

class Employee extends Model
{
    use HasFactory;
    protected $fillable =['name','phone','address','hiring_date','role_id','salary','dept_id'];

    ##### Relations #######
    
    public function dept(){
        return $this->belongsTo(Department::class,'dept_id');
    }
    public function role(){
        return $this->belongsTo(Role::class,'role_id');
    }
}
