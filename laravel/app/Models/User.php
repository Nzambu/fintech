<?php

namespace App\Models;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The table name
     * 
     * @var string
     */
    protected $table ="users";

    /**
     * The primary key
     * 
     * @var string
     */
    protected $primaryKey = "usr_id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "first_name", 
        "last_name",  
        "id_number", 
        "system_user",
        "gender_id" 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "password", "remember_token",
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        "email_verified_at" => "datetime",
    ];
    
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return ["userID" => $this->usr_id];
    }

    /**
     * Relationship - has many emails
     * 
     * @return mixed
     */
    public function emails()
    {
        return $this->hasMany(
            Email::class,
            'user_id',
            'usr_id'
        );
    }

    /**
     * Relationship - has many phones
     * 
     * @return mixed
     */
    public function phone()
    {
        return $this->hasMany(
            Phone::class,
            'user_id',
            'usr_id'
        );
    }

    /**
     * Return the user's latest password
     * 
     * Order by descending order and pick the first item
     * 
     * @return mixed
     */
    public function password($userID)
    { 
        return Password::where('user_id', $userID)->orderBy('psw_id', 'DESC')->first();
    }

    /**
     * Relationship - has passwords
     * 
     * @return mixed
     */
    public function passwords() {
        return $this->hasMany(
            Password::class,
            'user_id',
            'usr_id'
        );
    }
    
    /**
     * Primary phone number - select the phone where primary is true or 1
     * 
     * @return mixed
     */
    public function primary_phone($id)
    {
        return Phone::where([
            ['user_id', $id],
            ['primary', 1]
        ])->first();
    }

    /**
     * Primary email - select the email where primary is true or 1
     * 
     * @return mixed
     */
    public function primary_email($id)
    {
        return Email::where([
            ['user_id', $id],
            ['primary', 1]
        ])->first();
    }

    /**
     * Relationship - belongs to Gender
     * 
     * @return mixed
     */
    public function gender()
    {
        return $this->belongsTo(
            Gender::class,
            'gender_id',
            'gnd_id'
        );
    }
}
