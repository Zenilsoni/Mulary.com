<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
//use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class MailerController extends Controller
{
    //
    public function basic_email() {
        $data = array('name'=>"Virat Gandhi");
     
        Mail::send(['text'=>'adminPages.mail'], $data, function($message) {
           $message->to('minal26patel@gmail.com', 'Minal Patel')->subject
              ('Laravel Basic Testing Mail');
           $message->from('phptestmail1856@gmail.com','Mulary.com');
        });
        echo "Basic Email Sent. Check your inbox.";
     }

     public function html_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('adminPages.mail', $data, function($message) {
           $message->to('minal26patel@gmail.com', 'Minal Patel')->subject
              ('Laravel HTML Testing Mail');
           $message->from('phptestmail1856@gmail.com','Mulary.com');
        });
        echo "HTML Email Sent. Check your inbox.";
     }

     public function attachment_email() {
        $data = array('name'=>"Virat Gandhi");
        Mail::send('adminPages.mail', $data, function($message) {
           $message->to('minal26patel@gmail.com', 'Minal Patel')->subject
              ('Laravel Testing Mail with Attachment');
           $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
           $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
           $message->from('phptestmail1856@gmail.com','Mulary.com');
        });
        echo "Email Sent with attachment. Check your inbox.";
     }

     public function mail()
     {
        $name = 'Minal Patel';
        Mail::to('minal26patel@gmail.com')->send(new SendMailable($name));        
        return 'Email was sent';
     }
}
