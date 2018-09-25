<?php

    class CooperationControl extends Control{

        public function agreement(){
            $this->view->display('agreement.html');
        }

        public function base(){
            $this->view->display('base.html');
        }
    }