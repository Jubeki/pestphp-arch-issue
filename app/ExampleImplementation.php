<?php

namespace App;

class ExampleImplementation implements ExampleContract
{
    public function getClaims(): array
    {
        return [
            'sub' => '1234567890',
            'name' => 'John Doe',
            'admin' => true,
            'scopes' => $scopes,
        ];
    }
}
