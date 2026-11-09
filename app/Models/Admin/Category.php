<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\posts;
class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    // protected $fillable = ['CategoryName', 'description', 'image'];
    protected $fillable = ['CategoryName', 'description', 'status'];

    public function posts()
    {
        return $this->hasMany(posts::class, 'cat_id', 'id');
    }
}
