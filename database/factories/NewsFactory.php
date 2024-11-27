<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),
            'content' => $this->faker->paragraphs(5, true),
            'excerpt' => $this->faker->paragraph,
            'featured_image' => 'https://via.placeholder.com/800x600', // Dummy image
            'category_id' => Category::factory(), // Buat kategori otomatis
            'author_id' => User::factory(), // Buat user otomatis
            'seo_title' => $this->faker->sentence,
            'seo_description' => $this->faker->paragraph,
            'is_published' => $this->faker->boolean,
            'published_at' => $this->faker->dateTime,
        ];
    }
}
