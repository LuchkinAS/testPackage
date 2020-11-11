<?php

namespace src\factories;

interface Factory {

    /**
     * Create object by type
     * @param string $type
     * @return object
     */
    public function create(string $type): object;

}
