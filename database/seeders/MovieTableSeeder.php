<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemption',
                'slug' => 'the-shawshank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
                'thumbnail' => 'https://i.ytimg.com/vi/6hB3S9bIaco/maxresdefault.jpg',
                'rating' => 4.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=sY1S34973zA',
                'thumbnail' => 'https://i.ytimg.com/vi/sY1S34973zA/maxresdefault.jpg',
                'rating' => 4.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Dark Knight',
                'slug' => 'the-dark-knight',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
                'thumbnail' => 'https://i.ytimg.com/vi/EXeTwQWrcwY/maxresdefault.jpg',
                'rating' => 4.3,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Godfather: Part II',
                'slug' => 'the-godfather-part-ii',
                'category' => 'Crime',
                'video_url' => 'https://www.youtube.com/watch?v=qJr4QZxYjYQ',
                'thumbnail' => 'https://i.ytimg.com/vi/qJr4QZxYjYQ/maxresdefault.jpg',
                'rating' => 4.3,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Lord of the Rings: The Return of the King',
                'slug' => 'the-lord-of-the-rings-the-return-of-the-king',
                'category' => 'Adventure',
                'video_url' => 'https://www.youtube.com/watch?v=r5X-hFf6Bwo',
                'thumbnail' => 'https://i.ytimg.com/vi/r5X-hFf6Bwo/maxresdefault.jpg',
                'rating' => 4.3,
                'is_featured' => 0,
            ],
          
           
        ];
        Movie::insert($movies);
    }
}
