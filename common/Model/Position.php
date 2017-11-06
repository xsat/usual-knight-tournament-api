<?php

namespace Common\Model;

use Nen\Model\Model;

/**
 * Class Position
 */
class Position extends Model
{
    /**
     * @var int
     */
    private $position_id;

    /**
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->position_id;
    }

    /**
     * @param int|null $position_id
     */
    public function setPositionId(?int $position_id)
    {
        $this->position_id = $position_id;
    }

    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @param int $x
     */
    public function setX(int $x)
    {
        $this->x = $x;
    }

    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * @param int $y
     */
    public function setY(int $y)
    {
        $this->y = $y;
    }
}
