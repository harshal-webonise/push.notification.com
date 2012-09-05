<?php
class UsersController extends AppController {

    public function index() {

    }
    public function login() {
        if($this->request->is('POST'))
        {
        pr($this->data);exit;}

    }

}