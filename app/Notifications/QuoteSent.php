<?php

namespace App\Notifications;

use Auth;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use PDF;

class QuoteSent extends Notification
{
    use Queueable;
    private $data = '';
    private $charges = '';
    private $terms = '';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data, $charges, $terms)
    {
        $this->data = $data;
        $this->charges = $charges;
        $this->terms = $terms;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        $pdf =  PDF::loadView('admin.billing.invoice', with(['data' => $this->data, 'charges' => $this->charges, 'terms' => $this->terms]));
        ini_set('max_execution_time', 300);
        return (new MailMessage)
            ->subject('App.dev - Invoice #')
            ->line('Your invoice has been release.')
            ->action('Check Invoice', route('user.login.submit') . '?id='. json_encode($this->data))
            ->line('Make sure you pay the invoice, Check You Email Attachment!')
            ->attachData($pdf->output(), 'quote.pdf');
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
}
