<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogTest extends TestCase
{
    /** @test */
    public function the_blog_home_page_has_correct_header()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
