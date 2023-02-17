<?php


namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Author;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = ucwords($this->faker->catchPhrase .' '.$this->faker->bs);
        return [
            'title' => $title,
            'featured_image_url' => $this->faker->imageUrl(640,480),
            'category_id' => Category::all()->random()->id,
            'author_id' => Author::all()->random()->id,
            'body' => $this->faker->text(),
        ];
    }
}