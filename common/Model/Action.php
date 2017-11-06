<?php

namespace Common\Model;

use Nen\Model\Model;

/**
 * Class Action
 */
class Action extends Model
{
    /**
     * Available types
     */
    public const TYPE_MOVE = 'move';
    public const TYPE_ATTACK = 'attack';
    public const TYPE_BLOCK = 'block';

    /**
     * @var int
     */
    private $action_id;

    /**
     * @var string
     */
    private $type = self::TYPE_MOVE;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @return int|null
     */
    public function getActionId(): ?int
    {
        return $this->action_id;
    }

    /**
     * @param int|null $action_id
     */
    public function setActionId(?int $action_id)
    {
        $this->action_id = $action_id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param null|string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
}
