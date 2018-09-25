<?php
class ContactControl extends Control{
    
    public function contact(){
        $this->view->display('contact.html');
    }
}