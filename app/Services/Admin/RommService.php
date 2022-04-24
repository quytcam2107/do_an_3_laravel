<?php

namespace App\Services\Admin;

use App\Models\Phong;

class RommService
{
    protected $room;

    public function __construct(Phong $room)
    {
        $this->customer = $room;
    }
    public function getInfoRoom($params){
       $roomId = $this->customer->find($params);
        return $roomId;
    }


}
