<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => '初めてのニュース',
            'content' => 'これはサンプルのニュース本文です。',
            'author' => '山田太郎',
            'published_at' => now(),
        ]);

        News::create([
            'title' => '第二のニュース',
            'content' => '次のニュース記事です。',
            'author' => '佐藤次郎',
            'published_at' => now(),
        ]);
    }
}
