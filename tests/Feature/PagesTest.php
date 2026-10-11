<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Every public page renders. Runs in CI before anything reaches the
 * `deploy` branch, so a broken Blade view never goes live.
 */
class PagesTest extends TestCase
{
    public static function pages(): array
    {
        return [
            'home' => ['/', 'We back founders who'],
            'thesis' => ['/thesis', 'Six questions every company has to pass'],
            'approach' => ['/approach', 'Five stages, join at any of them'],
            'incubator' => ['/incubator', 'Send us a short email'],
            'portfolio' => ['/portfolio', 'Who we work with, and what we hold'],
            'about' => ['/about', 'Straight answers about our status'],
        ];
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('pages')]
    public function test_page_renders(string $url, string $expected): void
    {
        $this->get($url)
            ->assertOk()
            ->assertSee($expected, false)
            // The not-a-fund statement must be on every page.
            ->assertSee('It is not a fund', false);
    }

    public function test_unknown_page_is_404(): void
    {
        $this->get('/does-not-exist')->assertNotFound();
    }
}
