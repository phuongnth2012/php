<?php
class Heap extends SplMinHeap {
    public function &compare($a, $b) {
        return $a;
    }
}
$h = new Heap;
$h->insert(0);
$h->insert(0);
?>
===DONE===
