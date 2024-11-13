<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['company_id', 'name', 'position', 'email'];

    // Relasi
    public function company(){
       return $this -> belongsTo(Company::class);
    }

    public function services(){
        return $this -> belongsToMany(Service::class, 'company_id');
    }
}
