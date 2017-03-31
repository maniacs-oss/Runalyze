<?php

namespace Runalyze\Profile\Sport;

use Runalyze\Util\AbstractEnum;
use Runalyze\Util\InterfaceChoosable;

class SportRelevance extends AbstractEnum implements InterfaceChoosable
{
    /** @var int */
    const ALTERNATIVE_SPORT = 0;

    /** @var int */
    const MAIN_SPORT = 1;

    /**
     * @param int $id id from internal enum
     * @return string
     */
    static public function stringFor($id)
    {
        switch ($id) {
            case self::ALTERNATIVE_SPORT:
                return __('Alternative sport');
            case self::MAIN_SPORT:
                return __('Main Sport');
            default:
                throw new \InvalidArgumentException('Invalid sport relevance id "'.$id.'".');
        }
    }

    /**
     * @return array
     */
    static public function getChoices() {
        return array(
            self::stringFor(self::ALTERNATIVE_SPORT) => self::ALTERNATIVE_SPORT,
            self::stringFor(self::MAIN_SPORT) => self::MAIN_SPORT
        );
    }
}