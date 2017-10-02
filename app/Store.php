<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Store
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $address
 * @property string|null $lat
 * @property string|null $lng
 * @property string|null $images
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereImages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Store whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\User $user
 */
class Store extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
