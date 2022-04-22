<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookConfigutarionTest extends TestCase
{
    public function testConfigBook() {
        $judul = config("contoh2.books.judul");
        $author = config("contoh2.books.author");
        $category = config("contoh2.category");
        $publishing = config("contoh2.publishing");

        self::assertEquals("self driving", $judul);
        self::assertEquals("Rhenald Kasali", $author);
        self::assertEquals("business", $category);
        self::assertEquals("gramedia", $publishing);
    }
}
