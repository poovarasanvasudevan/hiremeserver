<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserDetail
 *
 * @property-read \App\User $user
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string|null $profile_pic
 * @property string|null $cover_pic
 * @property string|null $about_me
 * @property string $phone
 * @property string $whatsapp
 * @property string|null $others
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereAboutMe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereCoverPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereOthers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereProfilePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserDetail whereWhatsapp($value)
 */
class UserDetail extends Model
{
    //

    protected $fillable = [
        'profile_pic', 'cover_pic', 'about_me', 'phone', 'whatsapp', 'others'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
