<?php

declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'CSRF',
        'description' => 'Adds front-end CSRF protection.',
    ],
    'settings' => [
        'description' => 'Exclude front-end routes from CSRF protection.',
        'label' => 'Exclude front-end routes from CSRF protection.',
        'prompt' => 'Add route exclusion',
        'route_label' => 'Route (api, https://example.tld/api, route/path/url, etc)'
    ],
];
