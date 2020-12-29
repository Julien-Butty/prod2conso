<?php

declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Producer extends User
{
    public const ROLE = 'producer';

    public function getRoles()
    {
        return ['ROLE_PRODUCER'];
    }
}
