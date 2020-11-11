<?php

namespace src\printerAdapter;

use src\fakeClasses\FakeWord;

class WordAdapter implements PrintebleTemplater {
    private FakeWord $instance;

    public function __construct(FakeWord $instance) {
        $this->instance = $instance;
    }

    public function loadTemplate(string $path){
        $this->instance->loadTemplate($path);
    }

    public function fillTemplate(array $params){
        foreach ($params as $key => $value) {
            $this->instance->setValue($key, $value);
        }
    }

    public function saveToFile(string $filename){
        $this->instance->save($filename);
    }

    public function saveToPhpOutput(string $filename){
        $this->instance->save($filename);
        // read
        echo 'word adapter read file' . '</br>';
        // headers
        echo 'word send headers' . '</br>';
        // unlink
        echo 'word adapter unlink file ' . '</br>';
    }
}
