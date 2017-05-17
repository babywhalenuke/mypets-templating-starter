<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();
    
    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Default route
    $f3->route('GET /', function($f3) {
        $f3->set('username','jshmo');
        $f3->set('password',sha1('password01'));
        $f3->set('title','Working with Templates');
        $f3->set('temp', 69);
        $f3->set('color', 'red');
        $f3->set('radius',200);
        $f3->set('books',array('book1','book2','book3','book4'));        
        $f3->set('addresses',array('primary'=>'PrimaryAddress','secondary'=>'Secondary address'));
        
        $f3->set('desserts',array('Chocolate'=>'Chocolate Mouse', 'Vanilla' => 'Vanilla Custard', 'Strawberry'=>'Strawberry shortchake'));
        
        $f3->set('prefcust',true);
        $f3->set('lastlogin',strtotime('-1 week'));

        echo Template::instance()->render('pages/info.html');
        
     
    });

    //Run fat free
    $f3->run();
    