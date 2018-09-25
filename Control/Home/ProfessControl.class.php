<?php
class ProfessControl extends Control{

    public function condition(){
        $this->view->display('condition.html');
    }

    public function feature(){
        $this->view->display('feature.html');
    }

    public function planning(){
        $this->view->display('planning.html');
    }
}