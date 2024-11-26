<?php
protected $listen = [
    UserRegistered::class => [
        SendWelcomeEmail::class,
    ],
];