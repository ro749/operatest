<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Unit;
class CotizationMail extends Mailable
{
    use Queueable, SerializesModels;

    public string $unit;
    public string $link;
    /**
     * Create a new message instance.
     */
    public function __construct(string $unit, string $link)
    {
        $this->unit = $unit;
        $this->link = $link;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Cotization Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $unit = Unit::where('id', $this->unit)->first();
        return new Content(
            view: 'listing-utils::Sender.cotization-mail',
            with: [
                'unit_name' => $unit->unit,
                'url' => $this->link,
                'unit_tag' => 'Unidad',
                'buttom_tag' => 'Ver Detalles',
                'title' => 'Soho',
                'image'=>image('Modelos/Planta/'.$unit->tipo.'.jpg'),
                'logo' => image('opera.png')
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
