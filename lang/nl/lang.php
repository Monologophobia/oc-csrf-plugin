<?php

declare(strict_types=1);

return [
    'plugin' => [
        'name' => 'CSRF',
        'description' => 'Voegt CSRF protectie toe.',
    ],
    'settings' => [
        'description' => 'Routes uitsluiten van CSRF-bescherming.',
        'label' => 'Routes uitsluiten van CSRF-bescherming.',
        'prompt' => 'Voeg route-uitsluiting toe',
        'route_label' => 'Route (api, https://example.tld/api, route/path/url, etc)'
    ],
];
