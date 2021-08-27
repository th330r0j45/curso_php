<?php

namespace App;

class Validate
{
    public static function email($value)
    {
        return (bool) filter_var($value,FILTER_VALIDATE_EMAIL);
    }
    public static function url($value)
    {
        return (bool) filter_var($value,FILTER_VALIDATE_URL);
    }
    public static function password($value)
    {
        return (bool) preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,}$/', $value);
    }
    
}