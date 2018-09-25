<?php

    class StudentControl extends Control{
        public function style(){
            $this->view->display('style.html');
        }

        public function show(){
            $this->view->display('show.html');
        }

        public function employment(){
            $this->view->display('employment.html');
        }
    }