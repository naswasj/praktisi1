<?php
//  Dispatcher untuk mendaftarkan listener dan menangani event.
class EventDispatcher {
    private $listeners = [];

// Daftarkan listener untuk sebuah event
    public function listen($event, callable $listener) {
        $this->listeners[$event][] = $listener;
    }

// Menjalankan semua listener untuk event tertentu
    public function dispatch($event, $data = null) {
        if (!isset($this->listeners[$event])) {
            return;
        }
        foreach ($this->listeners[$event] as $listener) {
            $listener($data);
        }
    }
}