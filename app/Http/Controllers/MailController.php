<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
  public function basic_email() {
    Mail::send(['text'=>'mail'],['name'=>"Aakash"],function($message){
      $message->to('aakashkumar526@gmail.com','Aakash')->subject
      ('Laravel BAsic Testing Mail');
      $message->from('aakashkumar526@gmail.com','Aakash');
    });
    echo "Basic Email Sent. Check your inbox";
  }
  public function attachment_email(){
    Mail::send('mail',['name'=>"Aakash"],function($message){
      $message->to('aakashkumar526@gmail.com','Aakash')->subject
      ('Laravel Testing mail with attachemnt');
      $message->attach('C:\xampp\htdocs\laravel\public\img\a.jpg');
      $message->from('aakashkumar526@gmail.com','Aakash');
    });
    echo "Email sent with attachment. Check your inbox";
  }
}
