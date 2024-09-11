<?php

namespace App;

interface ExampleContract
{
    public function getClaims(array $scopes): array;
}
