<?php
defined('COREPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Email Configuration (Mailer)
|--------------------------------------------------------------------------
|
| These settings are used to configure how Webby (via CodeIgniter 3's Email
| Library) sends email. It defaults to using SMTP.
|
| For local development, this setup often points to a mail catcher tool
| like MailHog or Mailtrap using 'localhost' and port 1025.
|
*/
$config['mailer'] = [

    /*
    |--------------------------------------------------------------------------
    | Protocol
    |--------------------------------------------------------------------------
    |
    | Specifies the mail sending 
    | protocol (e.g., 'smtp', 'sendmail', or 'mail').
    |
    */
    'protocol' => getenv('mail.protocol') ?: 'smtp',

    /*
    |--------------------------------------------------------------------------
    | Debug Mode Enabled
    |--------------------------------------------------------------------------
    |
    | Specifies the mail debuging mode 
    |
    */
    'debug_mode' => getenv('mail.debug.mode') ?: 0,

    /*
    |--------------------------------------------------------------------------
    | Authentication Enabled
    |--------------------------------------------------------------------------
    |
    | Specifies the mail authentication is expected 
    |
    */
    'auth' => getenv('mail.smtp.auth') ?: true,

    /*
    |--------------------------------------------------------------------------
    | SMTP Host
    |--------------------------------------------------------------------------
    |
    | The address of the SMTP server.
    |
    */
    'smtp_host' => getenv('mail.smtp.host') ?: 'localhost',

    /*
    |--------------------------------------------------------------------------
    | SMTP Host
    |--------------------------------------------------------------------------
    |
    | The port for the SMTP server 
    | (e.g., 25, 587, 465, or 1025 for development).
    |
    */
    'smtp_port' => getenv('mail.smtp.port') ?: 1025,

    /*
    |--------------------------------------------------------------------------
    | SMTP User
    |--------------------------------------------------------------------------
    |
    | The username for SMTP authentication (leave blank if not required).
    |
    */
    'smtp_user' => getenv('mail.server.user') ?: '',

    /*
    |--------------------------------------------------------------------------
    | SMTP Pass
    |--------------------------------------------------------------------------
    |
    | The password for SMTP authentication (leave blank if not required).
    |
    */
    'smtp_pass' => getenv('mail.server.pass') ?: '',

    /*
    |--------------------------------------------------------------------------
    | SMTP Encryption protocol
    |--------------------------------------------------------------------------
    |
    | The encryption protocol: 'ssl', 'tls', or '' for no encryption.
    |
    */
    'smtp_crypto' => getenv('mail.smtp.security') ?: 'tls',

    /*
    |--------------------------------------------------------------------------
    | Character Return
    |--------------------------------------------------------------------------
    |
    | Character Return Line Feed for email headers. 
    | Must be set for protocol compliance.
    |
    */
    'crlf' => "\r\n",

    /*
    |--------------------------------------------------------------------------
    | Character Return
    |--------------------------------------------------------------------------
    |
    | Newline character used in the email body. Should match 'crlf'.
    |
    */
    'newline' => "\r\n"
];
