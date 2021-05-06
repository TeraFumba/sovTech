<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Balping\HashSlug\HasHashSlug;

class Post extends Model
{
    use HasHashSlug;
    protected $table = 'posts';
    protected $with = ['user'];
    protected $fillable = ['title', 'content','created_by'];

    /**
     * A post belongs to one user.
     * @return [type]
     */
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
