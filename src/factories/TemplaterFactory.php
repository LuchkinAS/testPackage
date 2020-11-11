<?php

namespace src\factories;

use src\fakeClasses\FakeExcel;
use src\fakeClasses\FakeWord;
use src\printerAdapter\EmptyTemplater;
use src\printerAdapter\ExcelAdapter;
use src\printerAdapter\WordAdapter;
use src\printerAdapter\XMLAdapter;

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
