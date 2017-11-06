<?php

namespace Common\Model;

use Nen\Model\Model;

/**
 * Class Player
 */
class Player extends Model
{
    /**
     * @var int
     */
    private $player_id;

    /**
     * @var int
     */
    private $user_id;

    /**
     * @var int
     */
    private $game_id;

    /**
     * @return int|null
     */
    public function getPlayerId(): ?int
    {
        return $this->player_id;
    }

    /**
     * @param int|null $player_id
     */
    public function setPlayerId(?int $player_id)
    {
        $this->player_id = $player_id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int
     */
    public function getGameId(): int
    {
        return $this->game_id;
    }

    /**
     * @param int $game_id
     */
    public function setGameId(int $game_id)
    {
        $this->game_id = $game_id;
    }
}
