<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class Post extends Model
{

    //add consruct function here
    public function __construct()
    {
        $this->collection = (Session::get('collectionName')) ? Session::get('collectionName') : 'live_blog_posts';
    }

    protected $connection = 'mongodb';
    public $collection = 'live_blog_posts';
    protected $fillable = [
        'collection_id', 'blog_name', 'editor',
    ];
    protected $casts = [
        'created_at' => 'datetime:d/m/Y | H:i', // Change your format
        'updated_at' => 'datetime:d/m/Y | H:i',
    ];
}
