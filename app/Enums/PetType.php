<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum PetType: string implements HasLabel
{
    case Dog = 'dog';
    case Cat = 'cat';
    case Lizard = 'lizard';
    case Rat = 'rat';
    case Parrot = 'parrot';
    case Fish = 'fish';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Dog => 'Dog',
            self::Cat => 'Cat',
            self::Lizard => 'Lizard',
            self::Rat => 'Rat',
            self::Parrot => 'Parrot',
            self::Fish => 'Fish',
        };
    }
}