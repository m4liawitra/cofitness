<?php

return [
    'common' => [
        'loading' => 'Loading',
        'globe' => 'GLOBE',
        'smart' => 'SMART',
        'email' => 'EMAIL',
        'button' => [
            'search' => 'Search',
            'close' => 'Close',
            'dismiss' => 'Dismiss',
            'register' => 'Register Now',
        ],
        'social' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'telegram' => 'Telegram',
            'tiktok' => 'TikTok',
            'twitter' => 'Twitter',
            'viber' => 'Viber',
            'whatsapp' => 'WhatsApp',
            'youtube' => 'YouTube',
        ]
    ],
    'bmi' => [
        
        'form' => [
            'metric_units' => 'Metric Units',
            'imperial_units' => 'Imperial Units',
            'name' => 'NAME',
            'email' => 'EMAIL',
            'weight' => 'Weight',
            'weight_units' => [
                'metric' => 'kg',
                'imperial' => 'pound',
            ],
            'height' => 'Height',
            'height_units' => [
                'metric' => 'cm',
                'imperial' => 'feet',
            ],
        ],
        'button' => [
            'calculate' => 'Calculate',
        ],
        'success' => [
            'message' => 'Your body mass index is',
            'underweight' => 'Underweight',
            'normal' => 'Normal weight',
            'overweight' => 'Overweight',
            'obesity' => 'Obesity',
        ],
        'error' => [
            'message' => 'Please enter both weight and height to calculate.',
        ],
    ],
    'contact' => [
        'form' => [
            'fullname' => 'Full Name',
            'fullname_placeholder' => 'Enter Name',
            'email' => 'Email',
            'email_placeholder' => 'Enter Email',
            'message' => 'Message',
            'message_placeholder' => 'Message',
        ],
        'button' => [
            'send_message' => 'Send Message',
            'subscribe' => 'Subscribe',
        ],
        'success' => [
            'send_message' => [
                'title' => 'Message sent!',
                'message' => 'We will be in contact with you soon. Thank you!',
            ],
            'subscribe' => [
                'title' => 'Subscription success!',
                'message' => 'Thank you for subscribing to our newsletter!',
            ],
        ],
        'error' => [
            'send_message' => [
                'title' => 'Message failed!',
                'message' => 'Message failed to deliver. Please try again.',
            ],
            'subscribe' => [
                'title' => 'Subscription failed!',
                'message' => 'Subscription failed to be submitted. Please try again.',
            ],
        ],
    ],
];