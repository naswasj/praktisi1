<?php
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\Event;

require 'vendor/autoload.php';

// Definisikan Event
class UserRegisteredEvent extends Event {
    public $username;

    public function __construct($username) {
        $this->username = $username;
    }
}

// Listener
function sendWelcomeEmail(UserRegisteredEvent $event) {
    echo "Welcome email sent to " . $event->username . "\n";
}

// Dispatcher
$dispatcher = new EventDispatcher();
$dispatcher->addListener('user.registered', 'sendWelcomeEmail');

// Memicu Event

$event = new UserRegisteredEvent('john_doe');
$dispatcher->dispatch($event, 'user.registered');