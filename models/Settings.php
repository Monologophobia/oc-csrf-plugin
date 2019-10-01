<?php namespace Vdlp\Csrf\Models;

use Cache;
use Model;

class Settings extends Model
{

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'vdlp_csrf_settings';
    public $settingsFields = 'fields.yaml';

    public function afterSave() : void
    {

        // Generate this data as a simple array [route1, route2, etc]
        $exclude_routes = [];

        if ($this->value['except_routes'] && count($this->value['except_routes']) > 0) {
            foreach ($this->value['except_routes'] as $route) {
                $exclude_routes[] = $route['route'];
            }
        }

        // Store the data in the Cache to avoid additional database lookups in the middleware
        // We don't want this data to expire so use the Forever method
        Cache::forever('except_routes', $exclude_routes);

    }

}
