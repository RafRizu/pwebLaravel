<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $data = [
            [
                'title' => 'Post HTML',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
            ],
            [
                'title' => 'Post HTML 2',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
            ],
            [
                'title' => 'Post HTML 3',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
            ],
            [
                'title' => 'Post CSS 1',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
            ],
            [
                'title' => 'Post CSS 2',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
            ],
            [
                'title' => 'Post PHP',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
            ],
            [
                'title' => 'Post JS',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
            ],
            [
                'title' => 'Post SQL 1',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
            ],
            [
                'title' => 'Post SQL 2',
                'about' => 'lorem ipsum dolor sit amet, consectetur adip loremin',
            ],
        ];
        foreach ($data as $value){
            $rep = strtolower($value['title']);
            Post::insert([
                'id_user' => 2,
                'title' => $value['title'],
                'slug' => str_replace(' ','-',$rep),
                'about' => $value['about'],
                'created_at' => Carbon::now()->format('Y-m-d'),
                'updated_at' => Carbon::now()->format('Y-m-d'),
            ]);
        }
    }
}
