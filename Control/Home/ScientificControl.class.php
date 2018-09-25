<?php

    class ScientificControl extends Control{

        public function project(){
            $this->view->display('project.html');
        }

        public function achievement(){
            $this->view->display('achievement.html');
        }

        public function program(){
            $this->view->display('program.html');
        }

        public function result(){
            $this->view->display('result.html');
        }
    }