<?php

namespace App\Services\Admin;

use App\Models\Phong;

class Checkout
{
    protected $room;

    public function __construct(Phong $room)
    {
        $this->room = $room;
    }

    public function getListCheckout()
    {
        $room_odereds = $this->room->Statusready()->get();
        return [
            'room_odereds' => $room_odereds,
        ];
    }
}
