<?php

namespace App\Services\Admin;

use App\Models\Phong;

class CheckOutServices
{
    protected $room;

    public function __construct(Phong $room)
    {
        $this->room = $room;
    }

    public function CheckOutServices()
    {
        $room_odereds = $this->room->Statusready()->get();
        $room_using = $this->room->Statususing()->get();
        return [
            'room_odereds' => $room_odereds,
            'room_using' => $room_using,
        ];
    }
}
