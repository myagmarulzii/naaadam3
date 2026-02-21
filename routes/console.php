<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function (): void {
    $this->comment('Наадам бол эв нэгдэл, бахархал!');
})->purpose('Display an inspiring quote');
