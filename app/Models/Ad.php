<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ad extends Model
{
    use HasFactory;
    protected $with = ["images", "status", "branch"];
    protected $fillable = ['title',
        'description',
         'price',
        'address',
         'rooms',
        'status_id',
         'users_id',
        'branch_id',
         'gender'];
public function branch(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
return $this->belongsTo(Branch::class,"branch_id");
}
public function status(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
  return $this->belongsTo(Status::class,"status_id");
}
public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
{
  return $this->belongsTo(User::class,"users_id")  ;
}
    public function bookmarkedByUsers(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class, 'bookmarks', 'ad_id', 'user_id');
    }
    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {

        return $this->hasMany(Images::class, 'ad_id','id');
    }
    public function owner()
    {
        return $this->belongsTo(User::class, 'users_id');
    }




}
