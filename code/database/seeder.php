<?php

class GroupSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $groups = [
            [
                'name' => 'Administrator',
                'is_managed' => true,
            ],
            [
                'name' => 'Member',
                'is_managed' => true,
            ],
            [
                'name' => 'Active Member',
                'is_managed' => true,
            ],
            [
                'name' => 'Inactive Member',
                'is_managed' => true,
            ],
        ];

        foreach ($groups as $group) {
            Group::firstOrCreate([
                ...$group,
                'guard_name' => Guard::getDefaultName(User::class),
            ]);
        }
    }
}
