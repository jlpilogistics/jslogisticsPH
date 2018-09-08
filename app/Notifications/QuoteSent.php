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
    private $invoice = '';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data, $charges, $terms , $invoice)
    {
        $this->data = $data;
        $this->charges = $charges;
        $this->terms = $terms;
        $this->invoice = $invoice;

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
        $invoices = json_encode($this->data);
        $invoice = json_decode($invoices);
        $quotes = json_encode($this->invoice);
        $quote = json_decode($quotes);
        $pdf =  PDF::loadView('admin.billing.invoice', with(['data' => $this->data, 'charges' => $this->charges, 'terms' => $this->terms,'invoice'=>$this->invoice]));
        ini_set('max_execution_time', 300);
        return (new MailMessage)
            ->from('jlpilogistics@gmail.com', 'Jexsan Logistics')
            ->subject('Jexsan Logistics - Quote #' . $invoice->quotenumber)
//            ->markdown('emails.sent-quote', with(['data' => $this->data, 'charges' => $this->charges, 'terms' => $this->terms,'invoice'=>$this->invoice]))
            ->line('Thank for considering our company to cater your needs. We have attached in this email the quote document for the rates we offer. We hope you find it favorable and competitive.')
            ->action('Accept Rates', route('user.login') . '/'. $invoice->quotenumber . '/' . $quote->reference . '/' . $invoice->client_ref)
            ->line('Rates are valid until further notice')
//            ->attachData($this->invoice, 'quote.pdf');
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
