<?php

namespace src\fakeClasses;

class FakeWord {
    public function __construct() {
        echo 'fake word create' . '</br>';
    }

    public function loadTemplate(string $path) {
        echo 'fake word load template' . '</br>';
    }

    public function setValue(string $key, string $value){
        echo 'fake word set single value:  ' . $key . ' => ' . $value . '</br>';
    }

    public function save(string $path) {
        echo 'fake word save to file' . '</br>';
    }
}
