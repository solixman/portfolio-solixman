<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // --- USER PROFILE ---
        $userId = DB::table('users')->insertGetId([
            'name' => 'Soulayman Jaafar',
            'email' => 'soulaymanjaa09@gmail.com',
            'password' => bcrypt('password'), // change later
            'job_title' => 'Full-Stack Web Developer',
            'location' => 'Morocco',
            'bio' => "Web development student at YouCode with strong foundations in JavaScript, PHP (Laravel), SQL, Vue.js, and Flutter. Experienced in building practical projects like e-commerce platforms, APIs, and booking systems. Passionate about scalable, user-focused solutions, with leadership experience as Scrum Master and class delegate.",
            'profile_picture' => null,
            'github' => 'https://github.com/solixman',
            'linkedin' => 'https://www.linkedin.com/in/solixman',
            'portfolio_link' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // --- SKILLS ---
        $skills = [
            'PHP', 'Laravel', 'JavaScript', 'SQL', 'HTML', 'CSS',
            'Vue.js', 'React.js', 'Flutter', 'Git', 'GitHub', 'Jira',
            'Agile Methodologies', 'Scrum', 'Project Planning',
            'AI-driven Development', 'Creative Problem Solving',
            'Software Development', 'Problem Solving', 'UML', 'MERISE'
        ];

        foreach ($skills as $skill) {
            DB::table('skills')->insert([
                'user_id' => $userId,
                'name' => $skill,
                'category' => null,
                'level' => 80, // adjust manually if needed
                'icon' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // --- EDUCATION ---
        DB::table('educations')->insert([
            [
                'user_id' => $userId,
                'institution' => 'YouCode – UM6P',
                'degree' => 'Web Development Program',
                'field_of_study' => 'Full-Stack Web Development',
                'start_date' => '2024-01-01',
                'end_date' => null, // ongoing
                'description' => 'Intensive training in modern web technologies including Laravel, Vue.js, SQL, and Agile methodologies.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $userId,
                'institution' => 'Faculté des sciences et techniques, Settat',
                'degree' => 'Génie mécanique et électrique',
                'field_of_study' => 'Engineering Sciences',
                'start_date' => '2022-09-01',
                'end_date' => '2024-06-30',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $userId,
                'institution' => 'Lycée Jaafar Elfassi Elfihri',
                'degree' => 'Baccalauréat sciences et techniques mécanique',
                'field_of_study' => 'Mechanical Sciences',
                'start_date' => '2021-09-01',
                'end_date' => '2022-06-30',
                'description' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // --- EXPERIENCES ---
        DB::table('experiences')->insert([
            [
                'user_id' => $userId,
                'company' => 'YouCode Maroc',
                'role' => 'Web Developer (Student Projects)',
                'description' => 'Worked on multiple team-based projects including an e-commerce platform, an API for hackathons, and a booking system. Leadership roles as Scrum Master and class delegate.',
                'start_date' => '2024-01-01',
                'end_date' => null,
                'location' => 'Morocco',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $userId,
                'company' => 'Marojest',
                'role' => 'Full-Stack Web Developer (Internship)',
                'description' => 'Contributed to full-stack development projects, applying PHP, Laravel, Vue.js, and SQL to build client applications.',
                'start_date' => '2023-06-01',
                'end_date' => '2023-12-01',
                'location' => 'Morocco',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // --- PROJECTS ---
        $projects = [
            [
                'title' => 'Soushope V0.1',
                'description' => 'An e-commerce application built with Laravel and PostgreSQL/MySQL. Features authentication, role management, cart system, order management, and Stripe payment integration.',
                'image' => null,
                'github_link' => 'https://github.com/solixman/SouShopeV0.1',
                'demo_link' => null,
                'tech_stack' => json_encode(['Laravel', 'PostgreSQL', 'MySQL', 'Spatie', 'Breeze', 'Stripe']),
                'is_featured' => true,
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pixelated Hackathons',
                'description' => 'A RESTful API to manage annual hackathon editions for high-school students. Includes participant registration, team creation, and project submissions.',
                'image' => null,
                'github_link' => 'https://github.com/solixman/pixelated-hackaton',
                'demo_link' => null,
                'tech_stack' => json_encode(['Laravel', 'MySQL', 'Postman', 'REST API']),
                'is_featured' => false,
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SalleJS',
                'description' => 'A minimal booking application for conference rooms. Includes authentication and reservation management.',
                'image' => null,
                'github_link' => 'https://github.com/solixman/SalleJS',
                'demo_link' => null,
                'tech_stack' => json_encode(['Laravel', 'PostgreSQL', 'Sanctum', 'Blade']),
                'is_featured' => false,
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
