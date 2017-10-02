<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Work
 *
 * @property int $id
 * @property string $name
 * @property string $category
 * @property string $image
 * @property int $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Work extends Model
{

    protected $fillable = [
        'name', 'category', 'image', 'amount'
    ];

    //
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
