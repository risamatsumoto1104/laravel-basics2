<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded =array('id');
    protected $fillable = ['title','author_id'];

    public static $rules = array(
        'author_id' => 'required',
        'title' => 'required'
    );

    public function getTitle(){
        return 'ID'. $this->id . ':' . $this->title;
    }
}
