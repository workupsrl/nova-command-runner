<?php

return [
    'path' => 'command-runner',

    'commands' => [
        'Route cache' => [
            'run' => 'route:cache',
            'type' => 'info',
            'group' => 'Cache'
        ],
        'Config cache' => [
            'run' => 'config:cache',
            'type' => 'info',
            'group' => 'Cache'
        ],
        'View cache' => [
            'run' => 'view:cache',
            'type' => 'info',
            'group' => 'Cache'
        ],

        'Route clear' => [
            'run' => 'route:clear',
            'type' => 'warning',
            'group' => 'Clear Cache'
        ],
        'Config clear' => [
            'run' => 'config:clear',
            'type' => 'warning',
            'group' => 'Clear Cache'
        ],
        'View clear' => [
            'run' => 'view:clear',
            'type' => 'warning',
            'group' => 'Clear Cache'
        ],
    ],

    // Limit the command run history to latest 10 runs
    'history' => 10,

    // Tool name displayed in the navigation menu
    'navigation_label' => 'Command Runner',

    // Any additional info to display on the tool page. Can contain string and html.
    'help' => '',

    'without_overlapping' => [
        // Blocks running commands simultaneously under the given groups. Use '*' for block all groups
        'groups' => [
            //
        ],

        // Blocks running commands simultaneously. Use '*' for block all groups
        'commands' => [
            //
        ],
    ],

    // Allow running of custom artisan and bash(shell) commands
    'custom_commands' => ['artisan', 'bash'],

    // Allow running of custom artisan commands only(disable custom bash(shell) commands)
    //    'custom_commands' => ['artisan'],

    // Allow running of custom bash(shell) commands only(disable custom artisan commands)
    //    'custom_commands' => ['bash'],

    // Disable running of custom commands.
    //    'custom_commands' => [],

    // Polling commands history. Turns on automatically when you run commands with the progressbar
    'polling_time' => 2500,
];
