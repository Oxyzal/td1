<?php

declare(strict_types=1);

namespace Oxyzal\Td1;


class Api{
    
    public function getRandomNumber (): int{
        return rand(0, 100);
    }
}

