<?php

namespace app\core;
use ArrayObject;

class Collection extends ArrayObject {
    public function toArray() {
        $values = [];
        foreach ($this as $entity) {
            $values[] = $entity->toArray();
        }
        return $values;
    }
}