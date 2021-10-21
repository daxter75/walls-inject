<?php

class Controller
{
    public function getInject()
    {
        $inject = new Inject(
            INIT_ARRAY,
            AFTER_KEY,
            NEW_KEY,
            NEW_VALUE
        );

        return $inject->getInjected();
    }

    public function getDisplay()
    {
        $display = new Display();
        $displayPower = $display->clockPowerAmount();
        $hours = implode('', array_splice($displayPower['timeArray'], 0, 2));
        $minutes = implode('', $displayPower['timeArray']);
        $totalSegments = $displayPower['totalSegments'];

        return [
            'hours' => $hours,
            'minutes' => $minutes,
            'totalSegments' => $totalSegments
        ];
    }
}