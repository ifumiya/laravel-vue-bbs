<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Model\Thread;

class ThreadTest extends TestCase
{
    use RefreshDatabase;
    const ENDPOINT = '/api/threads/';

    public function testIndex()
    {
        $thread = factory(Thread::class)->create();
        $response = $this->get(self::ENDPOINT);
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

    public function testStore()
    {
        $thread = factory(Thread::class)->make();
        $contents = collect($thread->toArray())
            ->only(['name' , 'message', 'title'])
            ->toArray();
        $response = $this->json('POST', self::ENDPOINT, $contents);
        $response
            ->assertStatus(201);
        $this->assertDatabaseHas(
            'threads',
            $contents
        );
    }
}
