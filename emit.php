<?php
use App\Events\UserRegistered;
event(new UserRegistered('john_doe'));