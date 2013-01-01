<?php

namespace Kata\NumberNames;

class NumberName
{
    private $name = '';

    private $index = 0;

    private $requiresAndSeparator = false;

    private $groupNames = array(
        1 => 'thousand',
        2 => 'million',
    );

    public function addGroup(HundredsGroup $group)
    {
        if ($group->isNotEmpty()) {
            $groupName = strval($group);

            if (isset($this->groupNames[$this->index])) {
                $groupName .= ' ' . $this->groupNames[$this->index];
            }

            $separator = ', ';

            if ($this->index > 0 && strpos($this->name, ' and ') === false) {
                $separator = ' and ';
            }

            if ($this->name) {
                $this->name = $separator . $this->name;
            }

            $this->name = $groupName . $this->name;
        }

        $this->index++;
    }

    public function __toString()
    {
        return $this->name;
    }
}