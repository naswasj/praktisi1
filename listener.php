<?php
namespace App\Listeners;
use App\Events\UserRegistered;
class SendWelcomeEmail {
    public function handle(UserRegistered $event) {
        echo "Sending welcome email to " . $event->username;
    }
}