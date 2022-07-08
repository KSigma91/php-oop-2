<?php

class Users {
    public $nickname;
    //public $sales = 25;
    public $signin = true;

    public function __construct(string $nickname, bool $signin)
    {
        $this->nickname = $nickname;
        $this->signin = $signin;
        $this->getAccess();
    }

    public function getAccess() {
        if ($this->nickname != $this->signin) {
            return 'Questo nome utente non è registrato';
        } else {
            return 'Accesso completato';
        }
    }
}

?>