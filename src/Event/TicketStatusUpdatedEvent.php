<?php
namespace App\Event;

use App\Entity\Tickets;

class TicketStatusUpdatedEvent
{
    private Tickets $ticket;

    public function __construct(Tickets $ticket)
    {
        $this->ticket = $ticket;
    }

    public function getTicket(): Tickets
    {
        return $this->ticket;
    }
}
