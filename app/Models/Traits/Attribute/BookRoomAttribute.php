<?php

namespace App\Models\Traits\Attribute;

use Carbon\Carbon;

trait BookRoomAttribute{
    public function getDateBookAttribute( $value ) {
        return date_format(date_create($this->ngay_di),'m-d-Y');

    }
    public function getCountHouseAttribute( $value ) {
        $howNow =  date('H', time());
        $howIn = date_format(date_create($this->ngay_den),'H');
        return $howIn;
    }
      public function getCountDayAttribute( $value ) {
          $dayOut =  date_format(date_create($this->ngay_di),'d');
          $dayIn = date_format(date_create($this->ngay_den),'d');
          $countDay = $dayOut - $dayIn;
          $name = "Ngày";
          return $countDay." ".$name;
      }
}

