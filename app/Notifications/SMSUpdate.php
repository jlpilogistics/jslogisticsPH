<?php

namespace App\Notifications;

use App\Status;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SMSUpdate extends Notification
{
    use Queueable;
    private $client = '';
    private $location = '';
    private $status = '';


    /**
     * Create a new notification instance.
     *
     * @param $client
     */
    public function __construct($client, $location, $status)
    {
        $this->client = $client;
        $this->location = $location;
        $this->status = $status;


    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['nexmo','mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        $shipper = json_encode($this->client);
        $ship = json_decode($shipper);
        $stats = Status::findOrFail($this->status);
        return (new MailMessage)
                    ->from('jlpilogistics@gmail.com', 'Jexsan Logistics')
                    ->subject('Shipment Tracking')
                    ->line('This message was sent to you at the request of '. $ship->company. ' to notify you that they have shipped a package to you. For details about your shipment
                            or to track your package. Please refer to the information below.')
                    ->line('Shipment Details')
                    ->line('Location: ' . $this->location)
                    ->line('Status: ' . $stats->name)
                    ->action('View All Shipment Updates', url('http://jslogisticsph.test/client-status/' . $ship->id))
                    ->line('Thank you');

    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    public function toNexmo($notifiable)
    {

        $shipper = json_encode($this->client);
        $ship = json_decode($shipper);
//        $loc = json_encode($this->location);
//        $locate = json_decode($loc);
//        $remark = json_encode($this->status);
//        $remarks = json_decode($remark);
        $stats = Status::findOrFail($this->status);
        return (new NexmoMessage)
            ->content( 'Hello ' . $ship->firstName . ' ' .$ship->lastName .' Your shipment is on its way. ' .$stats->name . ' at ' . $this->location);
    }
}
