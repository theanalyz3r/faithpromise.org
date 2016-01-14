<?php

return [
    'title'           => 'Faith Promise Church',
    'description'     => 'A contemporary church with locations in Knoxville, Maryville, Clinton, and La Follette, TN',
    'facebook'        => 'faithpromise',
    'instagram'       => 'faithpromise',
    'twitter'         => 'faithpromise',
    'pinterest'       => 'faithpromise',
    'vimeo'           => 'faithpromise',
    'github'          => 'faithpromise',
    'facebook_app_id' => (env('APP_ENV', 'local') === 'production') ? '1592675454329086' : '1592691894327442',
    'logo'            => 'logo-faith-promise',

    'nav' => [
        [
            'title'  => 'About',
            'subnav' => [
                [
                    'title' => 'What to Expect',
                    'url'   => '/what-to-expect',
                    'id'    => 'whatToExpect'
                ],
                [
                    'title' => 'Meet Our Staff',
                    'url'   => '/staff',
                    'id'    => 'staff'
                ],
                [
                    'title' => 'Beliefs & Values',
                    'url'   => '/beliefs-and-values',
                    'id'    => 'beliefs'
                ],
                [
                    'title' => 'Heart for the Harvest',
                    'url'   => '/h4h',
                    'id'    => 'h4h'
                ]
            ]
        ],
        [
            'title' => 'Locations',
            'url'   => '/locations',
            'id'    => 'locations'
        ],

        [
            'title'  => 'Ministries',
            'subnav' => [
                [
                    'title' => 'Family Ministry',
                    'url'   => '/family',
                    'id'    => 'family'
                ],
                [
                    'title' => 'Children',
                    'url'   => '/fpkids',
                    'id'    => 'fpkids'
                ],
                [
                    'title' => 'Students',
                    'url'   => '/fpstudents',
                    'id'    => 'fpstudents'
                ],
                [
                    'title' => 'Groups',
                    'url'   => '/groups',
                    'id'    => 'groups'
                ],
                [
                    'title' => 'Missions',
                    'url'   => '/missions',
                    'id'    => 'missions'
                ],
                [
                    'title' => 'Prayer Ministry',
                    'url'   => '/prayer',
                    'id'    => 'prayer'
                ],
                [
                    'title' => 'Worship',
                    'url'   => '/worship',
                    'id'    => 'worship'
                ],
                [
                    'title' => 'Care Ministries',
                    'url'   => '/care',
                    'id'    => 'care'
                ],
                [
                    'title' => 'fp Celebrate',
                    'url'   => '/celebrate',
                    'id'    => 'celebrate'
                ]
            ]
        ],
        [
            'title' => 'Next Steps',
            'url'   => '/nextsteps',
            'id'    => 'nextSteps'
        ],
        [
            'title' => 'Sermons',
            'url'   => '/sermons',
            'id'    => 'sermons'
        ],
        [
            'title' => 'Events',
            'url'   => '/events',
            'id'    => 'events'
        ],
        [
            'title' => 'Give',
            'url'   => '/give',
            'id'    => 'give'
        ]
    ]
];