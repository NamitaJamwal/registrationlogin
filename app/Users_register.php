<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Users_register extends Authenticatable
{

//class Users_register extends Model
//{
  protected $table="register_users";

    public static function formstore($data){
    $fname=Input::get('firstname');
    //echo $fname." ";
    $lname=Input::get('lastname');
    //echo $lname." ";
    $email=Input::get('email');
    //echo $email." ";
    $pass=Hash::make(Input::get('password'));
    //echo $pass." ";

    $users=new Users_register();

    $users->first_name=$fname;
    $users->last_name=$lname;
    $users->email=$email;
    $users->password=$pass;

    $users->save();
    }
}
