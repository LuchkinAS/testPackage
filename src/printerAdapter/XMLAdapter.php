<?php

namespace src\printerAdapter;

class XMLAdapter implements PrintebleTemplater {

    public function loadTemplate(string $path)
    {
        echo 'xml adapter load template file' . '</br>';
    }

    public function fillTemplate(array $params)
    {
        echo 'xml adapter fill template' . '</br>';
    }

    public function saveToFile(string $filename)
    {
        echo 'xml adapter save to file' . '</br>';
    }

    public function saveToPhpOutput(string $filename)
    {
        echo 'xml adapter save to php outPut' . '</br>';
    }
}
