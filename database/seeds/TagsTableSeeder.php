<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'accessibility',
            'opinion',
            'social media',
            'tech',
            'sport',
            'basketball',
            'food',
            'people',
            'photography',
            'art',
            'marketing',
            'blogs',
            'art',
            'travel',
            'design'
        ];

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->tag_name = $tag;
            $newTag->save();
        }

    }
}
