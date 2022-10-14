<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountSetup extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'merchant_legal_business_name',
        'store_name',
        'store_type',
        'residential_address',
        'is_huiospay_user',
        'username',
        'password'
    ];
    public function records()
    {
        return $this->belongsToMany(Business_Detail::class);
    }
}
