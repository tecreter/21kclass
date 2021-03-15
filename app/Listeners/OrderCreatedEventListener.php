<?php

namespace App\Listeners;

use App\Events\OrderCreatedEvent;
use App\Mail\SendNewOrderNotificationToBackofficeMail;
use App\Mail\SendOrderToCustomerMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class OrderCreatedEventListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderCreatedEvent $event
     * @return void
     */
    public function handle(OrderCreatedEvent $event)
    {
        // Step 1. Send email notification to Customer
        Mail::to($event->order->email)->queue(
            new SendOrderToCustomerMail($event->order)
        );


        // Step 2. Send email notification to Backoffice Team
        Mail::to(env('MAIL_CS_TEAM_ADDRESS'))->queue(
            new SendNewOrderNotificationToBackofficeMail($event->order)
        );
    }
}
