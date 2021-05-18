<?php
namespace App\Controller;
use Cake\Event\EventInterface;
class AdminController extends AppController{
    public function beforeFilter(EventInterface $event){
        // debug($event);
        // exit();
        $this->viewBuilder()->setLayout('admin');
    }
    public function home(){
        // exit("hello");
       
    }
}