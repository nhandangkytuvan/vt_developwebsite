<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Setting extends Model{
    protected $table = 'setting';
    public $fillable = ['user_id','web_icon','web_logo','web_name','web_description','web_keyword','web_visitday','web_tuvan','web_dathen'];
    //public $column = ['web_name','web_description','web_keyword'];
    //public $column_avatar = ['web_icon','web_logo']; 
    public static $rules = [
        'web_name' => 'required',
    ];
    public function user(){
    	return $this->belongsTo('App\User','user_id','id');
    }
}