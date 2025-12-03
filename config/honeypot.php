<?php

/*
|--------------------------------------------------------------------------
| Honeypot Configurations
|--------------------------------------------------------------------------
|
*/

$config['honeypot'] =  [
    /*
    |--------------------------------------------------------------------------
    | Honeypot Enabled
    |--------------------------------------------------------------------------
    |
    | This is the master switch to enable or disable the honeypot feature.
    | If this is set to false, no honeypot fields will be generated and no
    | checks will be performed.
    |
    */
    'enabled' => getenv('honeypot.enabled', true),

    /*
    |--------------------------------------------------------------------------
    | Honeypot Field Name
    |--------------------------------------------------------------------------
    |
    | This is the name of the honeypot field. Bots will be looking for
    | fields with common names like 'name', 'email', 'comment', etc. So, it's
    | best to use a name that is unlikely to be used by a real field.
    | e.g form-anti-honeypot
    | 
    */
    'name' => 'honeypot',

    /*
    |--------------------------------------------------------------------------
    | Honeypot Time Check Enabled
    |--------------------------------------------------------------------------
    |
    | This enables or disables the time check feature. If this is set to
    | true, the honeypot will check how long it took to submit the form.
    | If the form is submitted too quickly, it will be flagged as spam.
    |
    */
    'time_check_enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Honeypot Time
    |--------------------------------------------------------------------------
    |
    | This is the minimum time (in seconds) that must pass between when the
    | form is loaded and when it's submitted. This is a time-based check
    | to thwart bots that submit forms instantly.
    |
    */
    'time' => 5,

    /*
    |--------------------------------------------------------------------------
    | Honeypot Time Field Name
    |--------------------------------------------------------------------------
    |
    | This is the name of the hidden field that stores the form's load time.
    |
    */
    'timename' => 'honeytime',

    /*
    |--------------------------------------------------------------------------
    | Honeypot Template
    |--------------------------------------------------------------------------
    |
    | This is the HTML template for the honeypot field.
    | Make sure to always use double quotes outside
    |
    */
    'template' => "<input type='hidden' name='{name}' value='' tabindex='-1' autocomplete='off'/>",

    /*
    |--------------------------------------------------------------------------
    | Honeypot Time Field Template
    |--------------------------------------------------------------------------
    |
    | This is the HTML template for the time-tracking field.
    | Make sure to always use double quotes outside
    |
    */
    'timefield' => "<input type='hidden' name='{timename}' value='{honeytime}' tabindex='-1' autocomplete='off'/>",

    /*
    |--------------------------------------------------------------------------
    | Honeypot Container
    |--------------------------------------------------------------------------
    |
    | This is an HTML container to wrap the honeypot and time-tracking fields.
    | This is often used to hide them from users.
    | Make sure to always use double quotes outside
    |
    */
    'container' => "<div style='display:none'>{template} {honeyfield}</div>",

    /*
    |--------------------------------------------------------------------------
    | Honeypot Style
    |--------------------------------------------------------------------------
    |
    | This is the CSS style to hide the honeypot container.
    | Make sure to always use double quotes outside
    |
    */
    'style' => "<style> .honeypot { display:none } </style>",

];
