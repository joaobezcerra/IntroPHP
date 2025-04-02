<?php

class minhaExcessao extends Exception
{
    public function teste()
    {
        echo 'teste';
    }
}

try {
    throw new minhaExcessao();
} catch (minhaExcessao $e) {
    $e->teste();
}
