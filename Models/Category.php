<?php

    // definisco la classe Category che viene inglobata dalla classe Product
    class Category {
        public $name;
        public $icon;

        public function __construct($name, $icon) {
            $this->name = $name;
            $this->icon = $icon;
        }
    }

?>