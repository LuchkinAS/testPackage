<?php

namespace luchkin\test\fakeClasses;

class FakeExcel {
    public function __construct()
    {
        echo 'fake excel create' . '</br>';
    }

    public function loadTemplate(string $path): void {
        echo 'fake excel load template' . '</br>';
    }

    public function fillTemplate(array $params): void {
        foreach ($params as $key => $value) {
            echo 'fake excel set single value:  ' . $key . ' => ' . $value . '</br>';
        }
    }

    public function saveToPhpOutput(): void {
        echo 'fake excel save to output' . '</br>';
    }

    public function saveToFile(string $path): void{
        echo 'fake excel save to file' . '</br>';
    }
}
