<?php

namespace App\Models\Currency;

use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    /**
     * @var string $table Table name
     */
    protected $table = "currencies";

    /**
     * @var string $primaryKey Primary key
     */
    protected $primaryKey = "crr_id";

    /**
     * @var array $fillable attributes that are mass assignable
     */
    protected $fillable = [
        "currency",
        "slug",
    ];

    /**
     * Relationship - has many customers
     * 
     * @return mixed
     */
    public function customers()
    {
        return $this->hasMany(
            Customer::class,
            "currency_id",
            "crr_id"
        );
    }
}
