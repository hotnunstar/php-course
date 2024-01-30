<?php

namespace Client;

class Register extends \Register {
    public function registerSale() {
        echo "A sale was registered for the client " . $this->getName();
    }
}

?>