<?php

    class TalentControl extends Control{

        public function introduction(){
            $this->view->display('introduction.html');
        }

        public function program(){
            $this->view->display('program.html');
        }

        public function lab(){
            $this->view->display('lab.html');
        }
    }