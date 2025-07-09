<?php

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    [
        'BE' => [
            'lockSSL' => true,
        ],
        'DB' => [
            'Connections' => [
                'Default' => [
                    'dbname' => getenv('TYPO3_DB_DBNAME'),
                    'driver' => getenv('TYPO3_DB_DRIVER'),
                    'host' => getenv('TYPO3_DB_HOST'),
                    'password' => getenv('TYPO3_DB_PASSWORD'),
                    'port' => getenv('TYPO3_DB_PORT'),
                    'user' => getenv('TYPO3_DB_USERNAME'),
                    'tableoptions' => [
                        'charset' => 'utf8mb4',
                        'collate' => 'utf8mb4_unicode_ci',
                    ],
                ],
            ],
        ],
        'EXTENSIONS' => [
            'backend' => [
                'backendFavicon' => getenv('TYPO3_BE_FAVICON'),
                'backendLogo' =>  getenv('TYPO3_BE_LOGO') ,
                'loginBackgroundImage' => getenv('TYPO3_BE_LOGINBGIMAGE'),
                'loginFootnote' => getenv('TYPO3_BE_LOGINFOOTNOTE'),
                'loginHighlightColor' => getenv('TYPO3_BE_HIGHLIGHTCOLOR'),
                'loginLogo' => getenv('TYPO3_BE_LOGINLOGO'),
                'loginLogoAlt' => getenv('TYPO3_BE_LOGINLOGOALT'),
            ],
        ],
        'EXTCONF' => [
            'lang' => [
                'availableLanguages' => [
                    'de',
                    'fr',
                    'it'
                ]
            ]
        ],

        // This mail configuration sends all emails to mailpit
        'MAIL' => [
            'transport' => getenv('MAIL_TRANSPORT'),
            'transport_sendmail_command' => getenv('MAIL_SENDMAIL_COMMAND'),
            'defaultMailFromAddress' => getenv('MAIL_DEFAULT_FROM_ADDRESS'),
            'defaultMailFromName' => getenv('MAIL_DEFAULT_FROM_NAME'),
            'defaultMailReplyToAddress' => getenv('MAIL_DEFAULT_REPLAY_ADDRESS'),
            'defaultMailReplyToName' => getenv('MAIL_DEFAULT_REPLAY_NAME'),
            'transport_smtp_domain' => getenv('MAIL_TRANSPORT_SMTP_DOMAIN'),
            'transport_smtp_encrypt' => getenv('MAIL_TRANSPORT_SMTP_ENCRYPT'),
            'transport_smtp_password' => getenv('MAIL_TRANSPORT_SMTP_PASSWORD'),
            'transport_smtp_server' => getenv('MAIL_TRANSPORT_SMTP_SERVER'),
            'transport_smtp_username' => getenv('MAIL_TRANSPORT_SMTP_USERNAME'),
        ],
        'SYS' => [
            'UTF8filesystem' => true,
            'defaultScheme' => 'https',
            'trustedHostsPattern' => getenv('TYPO3_SYS_HOSTPATTERN'),
            'phpTimeZone' => 'Europe/Zurich',
            'ddmmyy' => 'd.m.Y',
            'systemLocale' => 'de_CH.UTF-8',
            'features' => [
                'security.backend.htmlSanitizeRte' => true,
                'security.usePasswordPolicyForFrontendUsers' => true,
            ],
        ],
    ]
);
