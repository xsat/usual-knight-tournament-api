<?php

namespace Common\Model;

use Nen\Model\Model;

/**
 * Class Game
 */
class Game extends Model
{
    /**
     * Available statuses
     */
    public const STATUS_STARTED = 'started';
    public const STATUS_ENDED = 'ended';

    /**
     * @var int
     */
    private $game_id;

    /**
     * @var string
     */
    private $status = self::STATUS_STARTED;

    /**
     * @var string
     */
    private $started_date;

    /**
     * @var string
     */
    private $ended_date;

    /**
     * @return int|null
     */
    public function getGameId(): ?int
    {
        return $this->game_id;
    }

    /**
     * @param int|null $game_id
     */
    public function setGameId(?int $game_id)
    {
        $this->game_id = $game_id;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    /**
     * @return null|string
     */
    public function getStartedDate(): ?string
    {
        return $this->started_date;
    }

    /**
     * @param null|string $started_date
     */
    public function setStartedDate(?string $started_date)
    {
        $this->started_date = $started_date;
    }

    /**
     * @return null|string
     */
    public function getEndedDate(): ?string
    {
        return $this->ended_date;
    }

    /**
     * @param null|string $ended_date
     */
    public function setEndedDate(?string $ended_date)
    {
        $this->ended_date = $ended_date;
    }
}
