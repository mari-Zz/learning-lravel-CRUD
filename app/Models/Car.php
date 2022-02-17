<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $primeryKey = 'id';

    protected $timstamps = true;

    protected $fillable = [ 'name', 'founded', 'descriotion', 'image_path'];

    // protected $hidden = ['id'];

    public function carModels(){
        return $this->hasMany(carModel::class);
    }

    public function engines(){
        return $this->hasManyThrough(Engine::class, carModel::class, 'car_id', 'model_id');
    }

    public function productionDate() {
        return $this->hasOneThrough(CarProdactionDate::class, carModel::class, 'car_id', 'model_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
