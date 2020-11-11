<?php

namespace src\factories;

use luchkin\test\printerAdapter\EmptyTemplater;
use luchkin\test\printerAdapter\ExcelAdapter;
use luchkin\test\printerAdapter\WordAdapter;
use luchkin\test\printerAdapter\XMLAdapter;
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
