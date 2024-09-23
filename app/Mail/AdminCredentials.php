<?php

namespace App\Mail;

use App\Models\Admin;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminCredentials extends Mailable
{
    use Queueable, SerializesModels;

    public $admin;

    /**
     * Create a new message instance.
     *
     * @param Admin $admin
     */
    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Admin Credentials',
        );
    }

    /**
     * Get the message content definition.
     */
    public function build()
    {
        return $this->markdown('emails.admin.credentials')
                    ->with([
                        'name' => $this->admin->name,
                        'email' => $this->admin->email,
                        'password' => $this->admin->password,
                    ]);
    }
}
