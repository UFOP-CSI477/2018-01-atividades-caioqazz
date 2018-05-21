<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Controller;

use Model\Login;

class LoginController {

    public function show() {
        include './view/login/login.php';
    }

    public function autentication($request) {

        $email = $request['name'];
        $password = $request['password'];

        $login = new Login();
        $login->setAll($email, $password);

        if ($login->autentication()) {
           $this->router($login->getType(), $login->getId());
        } else {
          $this->notlogin();
        }
    }

    public function loggout() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        unset($_SESSION['login']);
        unset($_SESSION['id']);
        header("Location: index.php");
        die();
    }

    public function router($type, $id) {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $_SESSION['login'] = $type;
        $_SESSION['id'] = $id;

        switch ($type) {
            case '1':
                header("Location: router.php?op=1001");
                die();
                break;
            case '2':
                header("Location: router.php?op=1002");
                die();
                break;
            case '3':
                header("Location: router.php?op=1003");
                die();
                break;

            default:
                break;
        }
    }

    public function notlogin() {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        $_SESSION['NOTlogin'] = "Usuario e/ou senha incorreta";
        header("Location: router.php?op=1003");
        die();
    }

}
