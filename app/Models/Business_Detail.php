<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business_Detail extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'business_type',
        'type_of_terminal',
        'features_needed',
        'no_terminal_needed',
        'payment_type',
        'business_state',
        'business_address',
        'state_location',
        'main_business_person_name',
        'main_business_person_email',
        'main_business_person_tel',
        'owner_business_person_name',
        'owner_business_person_email',
        'owner_business_person_tel',
        'image_path',
        'new_merchant_legal_name',
        'new_store_name',
        'highest_no_transaction'
    ];

    public function businessRecord()
    {
        return $this->belongsTo(AccountSetup::class,'id','id');
    }
}
