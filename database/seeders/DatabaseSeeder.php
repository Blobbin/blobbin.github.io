<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;
use App\Models\Task;
use App\Models\Announcement;
use App\Models\Entry;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)
            ->has(Group::factory(1))
            // ->has(Task::factory()->count(3))
            ->has(Entry::factory()->count(100))
            ->create([
                'name' => 'student person',
                'email' => 'student@test.invalid',
            ]);
        
        User::factory(1)
            ->has(Group::factory(1))
            // ->has(Task::factory()->count(10))
            ->has(Entry::factory()->count(10))
            ->create([
                'name' => 'staff person',
                'email' => 'staff@test.invalid',
                'role' => 'staff',
            ]);
        
        User::factory(1)
            ->has(Group::factory(1))
            ->has(Entry::factory()->count(10))
            ->create([
                'name' => 'admin person',
                'email' => 'admin@test.invalid',
                'role' => 'admin',
            ]);

        // User::factory()
        //     ->count(5)
        //     ->has(Group::factory()->count(2))
        //     ->create();

        Announcement::factory()->count(50)->create();
    }
}
