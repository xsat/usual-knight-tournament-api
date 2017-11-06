<?php

namespace Common\Model;

use Nen\Model\Model;

/**
 * Class Turn
 */
class Turn extends Model
{
    /**
     * @var int
     */
    private $turn_id;

    /**
     * @var int
     */
    private $round_id;

    /**
     * @var int
     */
    private $player_id;

    /**
     * @var int
     */
    private $action_id;

    /**
     * @var string
     */
    private $added_date;

    /**
     * @return int|null
     */
    public function getTurnId(): ?int
    {
        return $this->turn_id;
    }

    /**
     * @param int|null $turn_id
     */
    public function setTurnId(?int $turn_id)
    {
        $this->turn_id = $turn_id;
    }

    /**
     * @return int
     */
    public function getRoundId(): int
    {
        return $this->round_id;
    }

    /**
     * @param int $round_id
     */
    public function setRoundId(int $round_id)
    {
        $this->round_id = $round_id;
    }

    /**
     * @return int
     */
    public function getPlayerId(): int
    {
        return $this->player_id;
    }

    /**
     * @param int $player_id
     */
    public function setPlayerId(int $player_id)
    {
        $this->player_id = $player_id;
    }

    /**
     * @return int
     */
    public function getActionId(): int
    {
        return $this->action_id;
    }

    /**
     * @param int $action_id
     */
    public function setActionId(int $action_id)
    {
        $this->action_id = $action_id;
    }

    /**
     * @return null|string
     */
    public function getAddedDate(): ?string
    {
        return $this->added_date;
    }

    /**
     * @param null|string $added_date
     */
    public function setAddedDate(?string $added_date)
    {
        $this->added_date = $added_date;
    }
}
