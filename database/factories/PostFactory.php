<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $userId     = DB::table('users')->select('id')->inRandomOrder()->limit(1)->value('id');
        $categoryId = DB::table('categories')->select('id')->inRandomOrder()->limit(1)->value('id');

        return [
            'title'            => $this->faker->text(15),
            'sub_title'        => $this->faker->text(15),
            'description'      => $this->faker->text(200),
            'publication_date' => $this->faker->dateTime,
            'published'        => false,
            'created_at'       => $this->faker->dateTime,
            'updated_at'       => $this->faker->dateTime,
            'user_id'          => $userId,
            'category_id'      => $categoryId
        ];
    }
}
