<?php

namespace App\Settings;

use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Number;
use Stepanenko3\NovaSettings\Types\AbstractType;

class Main extends AbstractType
{
    public function fields(): array
    {
        return [
            new Tabs('Tabs 1', [
                new Tab('Tab 1', [
                    Boolean::make('Param 1', 'param_1'),
                    Boolean::make('Param 2', 'param_2'),
                    Boolean::make('Param 3', 'param_3'),
                ]),
                new Tab('Tab 2', [
                    Boolean::make('Param 1', 'param_1'),
                    Boolean::make('Param 2', 'param_2'),
                    Boolean::make('Param 3', 'param_3'),
                ]),
                new Tab('Tab 3', [
                    Boolean::make('Param 1', 'param_1'),
                    Boolean::make('Param 2', 'param_2'),
                    Boolean::make('Param 3', 'param_3'),
                ]),
            ]),
        ];
    }
}
