<?php

    class Login {
        public function index() {
            include_once "views/login.php";
        }

        public function logout() {
            session_unset();
            session_destroy();
        }
    }
