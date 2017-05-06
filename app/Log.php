<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Log extends Model{
    protected $table = 'log';
    protected $fillable = ['user_id','log_action','log_content'];
    protected $hidden = ['created_at','updated_at'];
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}