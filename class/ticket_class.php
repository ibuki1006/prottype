<?php
  class Ticket {

    private $ticket;

    private $no;
    private $name;
    private $price;
    private $startPoint;
    private $startTime;
    private $endPoint;
    private $endTime;
    private $remainSeats;
    private $DayOrNight;

    function __construct(array $ticketInfo){
      $this->ticket = $ticketInfo;
      $this->no = $this->ticket["f_ticketNo"];
      $this->name = $this->ticket["f_ticketName"];
      $this->price = $this->ticket["f_ticketPrice"];
      $this->startPoint = $this->ticket["f_startPoint"];
      $this->startTime = $this->ticket["f_startTime"];
      $this->endPoint = $this->ticket["f_endPoint"];
      $this->endTime = $this->ticket["f_endTime"];
      $this->remainSeats = $this->ticket["f_remainSeats"];
      $this->DayOrNight = $this->ticket["f_DayOrNight"];
    }

    /* ---セッター定義--- */
    public function setNo($no) {
      $this->no = $no;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function setPrice($price) {
      $this->price = $price;
    }

    public function setStartPoint($startPoint) {
      $this->startPoint = $startPoint;
    }

    public function setStartTime($startTime) {
      $this->startTime = $startTime;
    }

    public function setEndPoint($endPoint) {
      $this->endPoint = $endPoint;
    }

    public function setEndTime($endTime) {
      $this->endTime = $endTime;
    }

    public function setRemainSeats($remainSeats) {
      $this->remainSeats = $remainSeats;
    }

    public function setDayOrNight($DayOrNight) {
      $this->DayOrNight = $DayOrNight;
    }

    /* ---ゲッター定義--- */
    public function getNo() {
      return $this->no;
    }

    public function getName() {
      return $this->name;
    }

    public function getPrice() {
      return $this->price;
    }

    public function getStartPoint() {
      return $this->startPoint;
    }

    public function getStartTime() {
      return $this->startTime;
    }

    public function getEndPoint() {
      return $this->endPoint;
    }

    public function getEndTime() {
      return $this->endTime;
    }

    public function getRemainSeats() {
      return $this->remainSeats;
    }

    public function getDayOrNight() {
      return $this->DayOrNight;
    }
  }
 ?>
