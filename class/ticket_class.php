<?php
  class Ticket {

    public $no;
    public $name;
    public $price;
    public $startPoint;
    public $startTime;
    public $endPoint;
    public $endTime;
    public $remainSeats;
    public $DayOrNight;

    public function __construct($result){
      $ticketInfo = mysqli_fetch_array($result);
      $this->no = $ticketInfo["f_ticketNo"];
      $this->name = $ticketInfo["f_ticketName"];
      $this->price = $ticketInfo["f_ticketPrice"];
    }
  }
 ?>
