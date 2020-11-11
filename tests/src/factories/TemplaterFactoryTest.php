<?php

namespace src\factories;

use src\printerAdapter\EmptyTemplater;
use src\printerAdapter\ExcelAdapter;
use src\printerAdapter\WordAdapter;
use src\printerAdapter\XMLAdapter;
use PHPUnit\Framework\TestCase;

class TemplaterFactoryTest extends TestCase {

    private Factory $instance;

    public function setUp() {
        $this->instance = new TemplaterFactory();
    }

    public function testCreateExcel(){
        $testValue = $this->instance->create(TemplaterFactory::EXCEL_TEMPLATER);
        $this->assertTrue($testValue instanceof ExcelAdapter);
    }

    public function testCreateWord() {
        $testValue = $this->instance->create(TemplaterFactory::WORD_TEMPLATER);
        $this->assertTrue($testValue instanceof WordAdapter);
    }

    public function testCreateXML() {
        $testValue = $this->instance->create(TemplaterFactory::XML_TEMPLATER);
        $this->assertTrue($testValue instanceof XMLAdapter);
    }

    public function testCreateEmpty() {
        $testValue = $this->instance->create('wrong adapter');
        $this->assertTrue($testValue instanceof EmptyTemplater);
    }
}
