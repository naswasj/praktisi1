<?php
namespace App\Events;

class UserRegistered {
public $username;

public function __construct($username) {
$this->username = $username;
}
}