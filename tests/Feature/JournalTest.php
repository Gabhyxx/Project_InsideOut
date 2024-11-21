<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Journal;

class JournalTest extends TestCase
{
    use RefreshDatabase;

    public function test_ListOfEntryCanBeRead(){

        $journals = Journal::all();

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('home');
    }
    public function test_CheckIfReceiveAllEntryOfJournalInJsonFile(){
        $journal = Journal::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
                ->assertJosonCount(2);
    }
    public function test_CheckIfCanDeleteEntryinJournalWithApi(){
        $journal = Journal::factory(2)->create();

        $response = $this->delete(route('apidestroy, 1'));
        $this->assertDatabaseConunt('journals', 1);

        $response = $this->get(route('apihome'));
        $response->assertJsonCount(1);
    }
    public function test_CheckIfCanCreateNewEntryInJournalCheckWithJsonFile(){
        $response = $this->post(route('apistore'), [
            'emtry' => 'Hola mundo',
            'emotion' => 'Emocion de viva el mundo'
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1);
    }
}
