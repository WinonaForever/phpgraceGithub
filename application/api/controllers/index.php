<?php
class indexController extends grace{
    public function index(){
        $this->json("Hello PhpGrace!");
    }
}