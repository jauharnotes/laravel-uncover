<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertEquals;

class EnvironmentTest extends TestCase
{
  public function testEnv() {
      $appName = env('YOUTUBE');

      self::assertEquals("Jauharuddin", $appName);
  }

  public function testDefaultEnv() {
      $author = env('AUTHOR', 'Johar');

      self::assertEquals('Johar', $author);
  }
}
