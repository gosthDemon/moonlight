<?php

namespace App\Enums\Types;

enum ExceptionType: int
{
    case GenericException = 1;
    case DBException = 2;
    case PDOException = 3;
    case Unknown = 4;
}
