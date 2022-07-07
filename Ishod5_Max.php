<?php

class Studenti
{
    var $ime;
    var $prezime;
}

class Queue
{
    private $queue = array();

    public function Enqueue($item)
    {
        $this->queue[] = $item;
    }

    public function Dequeue()
    {
        if($this->Size() < 1)
        {
            return null;
        }
        $last_key = $this->GetLastKey();
        $item = null;

        for($k = 0; $k <= $last_key; $k++)
        {
            if($k == 0)
            {
                $item = $this->queue[$k];
            }
            else
            {
                $new_k = $k - 1;
                $this->queue[$new_k] = $this->queue[$k];
            }
        }
        unset($this->queue[$last_key]);
        return $item;
    }

    private function Size()
    {
        $size = (int)count($this->queue);
        return $size;
    }

    private function GetLastKey()
    {
        $last_key = (int)($this->Size() - 1);

        if($last_key < 0)
        {
            $last_key = 0;
        }
        return $last_key;
    }
}

$q = new Queue();

for($i = 1; $i <= 5; $i++)
{
    $student = new Studenti();
    $student->ime = readline("Unesite ime " . $i . ". studenta: ");
    $student->prezime = readline("Unesite prezime " . $i . ". studenta: ");
    $q->Enqueue($student);
}

echo "\n";
while($b = $q->Dequeue())
{
    echo "Ime: " . $b->ime . ", Prezime: " . $b->prezime . "\n";
}
?>