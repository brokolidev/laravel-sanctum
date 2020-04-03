<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Member extends Authenticatable
{
    use Notifiable, HasApiTokens;

    protected $table = 'gr_member';
    protected $primaryKey = 'mb_no';
    const CREATED_AT = 'mb_datetime';
    const UPDATED_AT = null;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mb_id', 'mb_password', 'mb_name', 'mb_nick', 'mb_nick_date', 'mb_email', 'api_token',
        'mb_homepage', 'mb_level', 'mb_sex', 'mb_birth', 'mb_tel', 'mb_hp',
        'mb_certify', 'mb_adult', 'mb_dupinfo', 'mb_zip1', 'mb_zip2', 'mb_addr1',
        'mb_ip', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon', 'mb_signature', 'mb_recommend', 'mb_point',
        'mb_today_login', 'mb_login_ip', 'mb_leave_date', 'mb_intercept_date', 'mb_email_certify', 'mb_email_certify2',
        'mb_memo', 'mb_lost_certify', 'mb_mailling', 'mb_sms', 'mb_open', 'mb_open_date',
        'mb_profile', 'mb_memo_call', 'mb_1', 'mb_2', 'mb_3', 'mb_4',
        'mb_5', 'mb_6', 'mb_7', 'mb_8', 'mb_9', 'mb_10', 'mb_datetime'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'mb_password', 'mb_name', 'mb_nick', 'mb_nick_date',
        'mb_homepage', 'mb_level', 'mb_sex', 'mb_birth', 'mb_tel',
        'mb_certify', 'mb_adult', 'mb_dupinfo', 'mb_zip1', 'mb_zip2', 'mb_addr1',
        'mb_ip', 'mb_addr2', 'mb_addr3', 'mb_addr_jibeon', 'mb_signature', 'mb_recommend', 'mb_point',
        'mb_today_login', 'mb_login_ip', 'mb_leave_date', 'mb_intercept_date', 'mb_email_certify', 'mb_email_certify2',
        'mb_memo', 'mb_lost_certify', 'mb_mailling', 'mb_sms', 'mb_open', 'mb_open_date',
        'mb_profile', 'mb_memo_call', 'mb_1', 'mb_2', 'mb_3', 'mb_4',
        'mb_5', 'mb_6', 'mb_7', 'mb_8', 'mb_9', 'mb_datetime'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'mb_email_certify' => 'datetime',
    ];
}
