<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\UserSocialAcount
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string $provider
 * @property string $provider_uid
 * @property string $avatar_user
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount whereAvatarUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount whereProviderUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\UserSocialAcount whereUserId($value)
 */
class UserSocialAcount extends Model
{
    //
}
