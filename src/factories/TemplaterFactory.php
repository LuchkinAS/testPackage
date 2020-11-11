<?php

namespace luchkin\test\factories;

use luchkin\test\fakeClasses\FakeExcel;
use luchkin\test\fakeClasses\FakeWord;
use luchkin\test\printerAdapter\EmptyTemplater;
use luchkin\test\printerAdapter\ExcelAdapter;
use luchkin\test\printerAdapter\WordAdapter;
use luchkin\test\printerAdapter\XMLAdapter;

class TemplaterFactory implements Factory {

    const EXCEL_TEMPLATER = 'xlsx';
    const WORD_TEMPLATER = 'docx';
    const XML_TEMPLATER = 'xml';

    /**
     * @inheritDoc
     */
    public function create(string $templaterType): object {
        switch ($templaterType){
            case self::EXCEL_TEMPLATER:
                // creation logic
                return new ExcelAdapter(new FakeExcel());

            case self::WORD_TEMPLATER:
                // creation logic
                return new WordAdapter(new FakeWord());

            case self::XML_TEMPLATER:
                // creation logic
                return new XMLAdapter();

            default:
                return new EmptyTemplater();
        }
    }
}
