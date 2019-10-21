<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table ='branches';
    protected $primaryKey ='id';
    protected $fillable=['id','name_branch'];

    public  function  user(){
        return $this->hasmany('App\User','branch_id');
    }


}
