<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    /**
     * @var string $table Table name
     */
    protected $table = "gender";

    /**
     * @var string $primaryKey Primary key
     */
    protected $primaryKey = "gnd_id";

    /**
     * Relationship - has many users
     * 
     * @return mixed
     */
    public function user()
    {
        return $this->hasMany(
            User::class,
            'gender_id',
            'gnd_id'
        );
    }
}
