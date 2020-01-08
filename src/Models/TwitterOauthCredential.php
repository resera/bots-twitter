<?php

namespace Resera\TwitterBot\Models;

use Illuminate\Database\Eloquent\Model;

class TwitterOauthCredential extends Model
{

    protected $guarded = [ 'id' ];
    protected $table = 'twitter_oauth_credentials';

}