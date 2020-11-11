<?php


namespace src\printerAdapter;

use src\fakeClasses\FakeExcel;

class ExcelAdapter implements PrintebleTemplater {

    private FakeExcel $instance;

    public function __construct(FakeExcel $instance) {
        $this->instance = $instance;
    }

    public function loadTemplate($path) {
        $this->instance->loadTemplate($path);
    }

    public function fillTemplate(array $params) {
        $this->instance->fillTemplate($params);
    }

    public function saveToFile(string $filename) {
        $this->instance->saveToFile($filename);
    }

    public function saveToPhpOutput(string $filename) {
        $this->instance->saveToPhpOutput();
    }
}
