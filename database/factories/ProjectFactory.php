<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'subtitle' => $this->faker->sentence(10),
            'url' => $this->faker->url(),
            'thumbnail' => 'mockups/project-placeholder.png',
            'mockup_one' => 'mockups/project-placeholder.png',
            'mockup_two' => 'mockups/project-placeholder.png',
            'company_description' => '<p>'.implode('</p><p>', $this->faker->paragraphs(2)).'</p>',
            'project_description' => '<p>'.implode('</p><p>', $this->faker->paragraphs(2)).'</p>',
            'is_published' => true,
            'sort_order' => 0,
        ];
    }
}
