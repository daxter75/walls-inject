<?php

class Display
{
    protected array $powerAmount;
    protected array $maxNumbers;

    public function __construct()
    {
        /** every display number put some LEDs on
         * num 1 put on 2 LED segments
         * num 7 put on 3 LED segments
         */
        $this->powerAmount = [
            0 => 6,
            1 => 2,
            2 => 5,
            3 => 5,
            4 => 4,
            5 => 5,
            6 => 6,
            7 => 3,
            8 => 7,
            9 => 6
        ];

        /** max numbers on each clock position */
        $this->maxNumbers = [1 => 2, 2 => 9, 3 => 5, 4 => 9];
    }

    public function clockPowerAmount(): array
    {
        $time = [];
        $sum = 0;

        foreach ($this->maxNumbers as $number) {
            $digit = 0;
            $max = $this->powerAmount[$digit];

            for ($i = 1; $i <= $number; $i++) {
                if ($this->powerAmount[$i] > $max) {
                    $digit = $i;
                    $max = $this->powerAmount[$digit];
                }
            }

            $time[] = $digit;
            $sum += $this->powerAmount[$digit];
        }

        return [
            'timeArray'     => $time,
            'totalSegments' => $sum
        ];
    }

}