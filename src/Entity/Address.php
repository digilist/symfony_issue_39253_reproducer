<?php

declare(strict_types=1);

namespace App\Entity;

final class Address
{
    public string $type;
    public ?string $companyName = null;
    public ?string $city = null;

    public function __construct($type = 'personal', ?string $city = null)
    {
        $this->type = $type;
        $this->city = $city;
    }

    public static function forCompany(?string $city = null): self
    {
        return new self('company', $city);
    }
}
