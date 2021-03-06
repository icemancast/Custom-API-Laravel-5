<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model {

    protected $table = 'vehicles';

    protected $primaryKey = 'serie';

    protected $fillable = ['color', 'power', 'copacity', 'speed', 'maker_id'];

    protected $hidden = ['serie', 'created_at', 'updated_at'];

    public function maker()
    {
      return $this->belongsTo('App\Models\Maker');
    }

}