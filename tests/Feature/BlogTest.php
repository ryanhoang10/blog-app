<?php

namespace Tests\Feature;

use App\Models\Blog;
use Tests\TestCase;

class BlogTest extends TestCase
{
    /** @test */
    public function the_index_returns_a_200_status()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function a_blog_contains_the_correct_data()
    {
        $blog = Blog::factory()->create([
            'title'     => 'test_title',
            'body'      => 'test_body',
            'user'      => 'test_user',
            'category'  => 'test_category',
            'author'    => 'test_author',
        ]);

        $this->assertEquals('test_title', $blog->title);
        $this->assertEquals('test_body', $blog->body);
        $this->assertEquals('test_user', $blog->user);
        $this->assertEquals('test_category', $blog->category);
        $this->assertEquals('test_author', $blog->author);
    }
}
