<?php

namespace DE3\Laravel4\Payment;

class Payment
{
    const URL = 'https://de3interactive.com';

    /**
     * Get the specified number of random bytes, using openssl_random_pseudo_bytes().
     * Randomness is returned as a string of bytes.
     *
     * @param $bytes
     * @return mixed
     */
    protected static function hello()
    {
        return 'hello';
    }

    protected static function url()
    {
      return self::URL;
    }
}
