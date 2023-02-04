<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class DataSet extends Model
{
    use HasFactory;

    protected $guarded= [];

    protected $appends=['image'];

    public function getImageAttribute(){
        return asset('app/public/'.$this->encrypted_id.'/'.$this->image_name);
    }
}
