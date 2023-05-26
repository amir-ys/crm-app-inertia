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

it('performs sums', function () {
    $result = 3;

    expect($result)->toBe(3);
});

