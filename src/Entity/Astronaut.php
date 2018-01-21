<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Astronaut
 * @package App\Entity
 *
 * @ApiResource()
 * @ORM\Entity()
 */
class Astronaut
{
    /**
     * @var int $id
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string $name
     *
     * @ORM\Column(type="string")
     */
    public $name;

    /**
     * getId.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * getName.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * setName.
     *
     * @param string $name
     *
     * @return Astronaut
     */
    public function setName(string $name): Astronaut
    {
        $this->name = $name;

        return $this;
    }
}
