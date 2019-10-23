<?php
    class User{
        public $name;
        public $email;
        public $password;
        public $phone;
        public $address;
        
        private function add(){
            echo "Add function";
        }
        public function edit(){
            echo "edit function";
        }
        public function register(){
            echo "register function";
        }
        public function login(){
            echo "login function";
        }
        public function view(){
            echo "view function";
        }
        private function list(){
            echo "list function";
        }
    }
?>