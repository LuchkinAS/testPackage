<?php

namespace luchkin\test\printerAdapter;

interface PrintebleTemplater {

    public function loadTemplate(string $path);

    public function fillTemplate(array $params);

    public function saveToFile(string $filename);

    public function saveToPhpOutput(string $filename);
}
