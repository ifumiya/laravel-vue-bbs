<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Model\Thread;

class ThreadTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function testIndex()
    {
        $thread = factory(Thread::class)->create();
        $response = $this->get('/api/threads/');
        $response
            ->assertOk()
            ->assertJson([
                'current_page' => 1,
            ])
            ->assertJson([
                'data' => [
                    [
                        'name' => $thread->name,
                        'message' => $thread->message,
                        'title' => $thread->title,
                    ],
                ],
            ]);
    }

    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
