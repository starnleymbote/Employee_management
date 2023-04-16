<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'state_id',
        'city_id',
        'country_id',
        'address',
        'department_id',
        'zip_code',
        'date_of_birth',
        'date_hired',
    ];

    /**
     * Get the country that owns the Employee
     *
     * @return \Illuminate\Countrybase\El    */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the state that owns the Employee
     *
     * @return \Illuminate\Countrybase\El    */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Get the city that owns the Employee
     *
     * @return \Illuminate\Countrybase\El    */
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Get the department that owns the Employee
     *
     * @return \Illuminate\Countrybase\El    */
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}

