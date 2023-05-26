<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/*
 * Use refresh database for truncate database for each test.
 */
uses(RefreshDatabase::class);

/**
 * Use Testcase to add some requirements.
 */
uses(TestCase::class);

it('test register page can be rendered', function () {
    $this->get(route('auth.register'))->assertOk();
});
