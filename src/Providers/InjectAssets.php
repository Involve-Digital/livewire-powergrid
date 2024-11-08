<?php

namespace PowerComponents\LivewirePowerGrid\Providers;

use Leuverink\AssetInjector\Contracts\AssetInjector;

class InjectAssets implements AssetInjector
{
    public function identifier(): string
    {
        return 'Livewire PowerGrid';
    }

    public function enabled(): bool
    {
        return true;
    }

    public function inject(): string
    {
        $js = route('powergrid.global.js');

        $theme = isTailwind() ? 'tailwind.css' : 'bootstrap.css';

        $css = file_get_contents(
            base_path('vendor/power-components/livewire-powergrid/dist/' . $theme)
        );

        return <<<HTML
            <script src="{$js}"></script>
            <style>{$css}</style>
        HTML;
    }
}
