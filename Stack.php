<?php 

// Stack.php

class Stack
{
    private $stack = array();

    public function Push($item)
    {
        $this->stack[] = $item;
    }

    public function Pop()
    {
        if($this->Size() < 1)
        {
            return null;
        }

        $lastKey = $this->getLastKey();

        $item = $this->stack[$lastKey];

        unset($this->stack[$lastKey]);

        return $item;
    }

    public function Size()
    {
        return count($this->stack);
    }

    private function getLastKey()
    {
        $lastKey = (int)$this->Size() - 1;

        if($lastKey < 0)
        {
            $lastKey = 0;
        }

        return $lastKey;
    }
}

?>