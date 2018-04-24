<?php

return [
    [
        'title' => 'Personal data',
        'destination' => 'personal',
        'data' => [
            [
                'type' => 'name',
                'label' => 'Name',
                'data' => 'Dmytro Kotenko'
            ]
        ]
    ],
    [
        'title' => 'Contacts',
        'destination' => 'contacts',
        'data' => [
            [
                'type' => 'phone',
                'label' => 'Phone',
                'data' => '+38(050)167-5361'
            ],
            [
                'type' => 'email',
                'label' => 'E-mail',
                'data' => 'd.kotenko@i.ua'
            ],
            [
                'type' => 'skype',
                'label' => 'Skype',
                'data' => 'marty_ny1'
            ],
            [
                'type' => 'linkedin',
                'label' => 'Linked In',
                'data' => 'https://www.linkedin.com/in/dmytro-kotenko-071825b1'
            ],
            [
                'type' => 'facebook',
                'label' => 'Facebook',
                'data' => 'https://www.facebook.com/dmytro.kotenko'
            ],
            [
                'type' => 'address',
                'label' => 'Address',
                'data' => 'Kiev, Bulgakova str., 4a'
            ]
        ]
    ],
    [
        'title' => 'Objective',
        'destination' => 'objective',
        'data' => [
            [
                'type' => 'text',
                'data' => 'Start a junior PHP developer career in Company X ' . PHP_EOL .
                    'and in 5 years to grow to the team lead'
            ]
        ]
    ],
    [
        'title' => 'Summary',
        'destination' => 'summary',
        'data' => [
            [
                'type' => 'text',
                'data' => 'Experience in software development for over 2 years, the last two years ' . PHP_EOL .
                    'as a web-developer Javascript / HTML / CSS / Java. I also have experience ' . PHP_EOL .
                    'programming in C / C ++ / C #, PHP, AS3, SQL and works in graphics packages such ' . PHP_EOL .
                    'as Photoshop, CorelDraw and 3DStudio MAX.' . PHP_EOL .
                    'I have good analytical skills. Easy to train. I work well in a team'
            ]
        ]
    ],
    [
        'title' => 'Skills',
        'destination' => 'skills',
        'data' => [
            [
                'type' => 'item',
                'label' => 'Programming languages',
                'data' => [
                    'PHP',
                    'JavaScript',
                    'C#'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Databases',
                'data' => [
                    'MySQL'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Frontend',
                'data' => [
                    'HTML',
                    'CSS'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Servers',
                'data' => [
                    'Apache',
                    'Nginx'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Subversions',
                'data' => [
                    'Git',
                    'SVN'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Frameworks',
                'data' => [
                    'Yii 2',
                    'Zend 2'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'OS',
                'data' => [
                    'Ubuntu',
                    'Windows'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Other',
                'data' => [
                    'PHP Unit',
                    'XDebug',
                    'Ant',
                    'Jenkins',
                    'Rebmine',
                    'Jira'
                ]
            ]
        ],
    ],
    [
        'title' => 'Experience',
        'destination' => 'experience',
        'data' => [
            [
                'type' => 'list',
                'period' => 'August 2012 - present',
                'company' => 'Govitall',
                'position' => 'TechLead',
                'role' => 'Coding, etc.',
                'projects' => [
                    'CRM',
                    'API',
                    'CMS'
                ],
                'technologies' => [
                    'PHP 5.6',
                    'Javascript',
                    'PHP Unit',
                    'Composer',
                    'Jenkins'
                ]
            ],
            [
                'type' => 'list',
                'period' => 'August 2011 - August 2012',
                'company' => 'WEB-SEO',
                'position' => 'WEB master',
                'role' => 'Coding, etc.',
                'projects' => [
                    'WEB sites'
                ],
                'technologies' => [
                    'Joomla',
                    'WordPress',
                    'Open X',
                    'HTML',
                    'CSS'
                ]
            ]
        ]
    ],
    [
        'title' => 'Education',
        'destination' => 'education',
        'data' => [
            [
                'type' => 'list',
                'period' => '2006 - 2010',
                'institution' => 'National Aviation University',
                'specialty' => 'Computerized equipment of aircraft'
            ],
            [
                'type' => 'list',
                'period' => 'October 2015 - February 2016',
                'institution' => 'Brain Academy',
                'specialty' => 'C#/.NET developer'
            ]
        ]
    ],
    [
        'title' => 'Additional information',
        'destination' => 'additional',
        'data' => [
            [
                'type' => 'item',
                'label' => 'Languages',
                'data' => [
                    'English (Intermediate)'
                ]
            ],
            [
                'type' => 'item',
                'label' => 'Hobbies',
                'data' => [
                    'Football',
                    'Chess',
                    'Gaming'
                ]
            ]
        ]
    ]

];
