<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
    ];

    /**
     * Get all of the employees` for the Department
     *
     * @return \Illuminate\EmployeeEloquent\Relations\HasMany
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'foreign_key', 'local_key');
    }
}
