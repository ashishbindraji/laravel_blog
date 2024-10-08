<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\CommentReply;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'post_id',
        'comment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function commentReplys()
    {
        return $this->hasMany(CommentReply::class);
    }
}
