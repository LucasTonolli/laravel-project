<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactForTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testVisitContactForm(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contato')
                    ->type('name', 'Lucas T')
                    ->type('email', 'tonolli@teste.com')
                    ->type('message', 'Lucas T Mensagem')
                    ->press('Enviar mensagem');

        });
    }
}
