<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $category=$this->faker->name;
        return [

            'cat_name'=>$category,
            'slug'=>Str::slug($category),
            'description'=>$this->faker->lexify('???????????????????????????????????????????????????????????????????????????????????????????????????????????????'),
            'image_cat' => 'https://source.unsplash.com/random'
        ];
    }
}
