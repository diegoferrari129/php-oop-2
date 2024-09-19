<?php

    // definisco la classe Category che viene inglobata dalla classe Product
    class Category {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }
    }

?>