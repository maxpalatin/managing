<?php return [

    'driver' => 'smtp',
    'host' => 'smtp.mailgun.org',
    'port' => 587,
    'from' => ['address' => 'noreply@domain.tld', 'name' => 'ManagingCMS'],
    'encryption' => 'tls',
    'username' => null,
    'password' => null,
    'sendmail' => '/usr/sbin/sendmail -bs',
];
