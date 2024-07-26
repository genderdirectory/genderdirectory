<?php

namespace TransgenderHealthcare;

use PicoORM\PicoORM;

class AdminUsers extends PicoORM
{
    public function setPassword($password) {
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $this->password_hash = $hash;
        $this->save();
    }
}