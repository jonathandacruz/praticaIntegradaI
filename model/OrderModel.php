<?php

class Order
{
    private $id;
    private $date;
    private $username;
    private $status;

    public function __construct($username)
    {
        $this->username = $username;
        $this->status = OrderStatus::NEW;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date): void
    {
        $this->date = $date;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }
}

enum OrderStatus
{
    case NEW;
    case PENDING_PAYMENT;
    case COMPLETED;
    case CANCELED;
}
