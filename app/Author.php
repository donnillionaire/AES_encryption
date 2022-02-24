<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use IonGhitun\MysqlEncryption\Models\BaseModel;

class Author extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'github', 'twitter', 'location', 'latest_article_published'
    ];

  

    // protected $casts = [
    //      'email' => 'encrypted',
    //  ];



    

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    /** @var array */
//   protected $encrypted = [
//     'name',
//     'email'
// ];
    // protected $hidden = [];
    // protected $casts = [
    //     'email' => 'encrypted',
    // ];
    
}