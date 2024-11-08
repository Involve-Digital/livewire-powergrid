<?php

namespace PowerComponents\LivewirePowerGrid\Controllers;

use Illuminate\Http\Response;

class InjectController
{
    public function js(): Response
    {
        $html = file_get_contents(
            base_path('vendor/power-components/livewire-powergrid/dist/powergrid.js')
        );

        return response(strval($html))
            ->withHeaders([
                'Content-Type'            => 'text/html; charset=utf-8',
                'Cache-Control'           => 'public, only-if-cached, max-age=31536000',
                'Content-Security-Policy' => "default-src 'self'; script-src 'none';",
            ]);
    }
}
