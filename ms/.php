<?php

abstract class User {
    private static $calcule = 0;
    public function __construct(){
        static::$calcule++;
    }
	public static function login(){
	return "Welcome";
}
	abstract public function register();
	public static function getCalcule(){
	return static::$calcule;
}
}

class owner extends User {
    public static $calcule = -1;
    public function __construct(){
        parent::__construct();
    }
 	public function register(){
	return "owner registered";
}
}

class Member extends User {
    public function __construct(){
         parent::__construct();
    }
	public function register(){
	return "Member registered";
}
}

$owner1 = new owner();

$member1 = new Member();

echo Member::getCalcule();