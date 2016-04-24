<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'The Birth of Tragedy',
            'author' => 'Friedrich Nietzsche',
            'published' => '1872',
            'text' => 'Whatever might have been the basis for this dubious book...'
        ]);

        DB::table('books')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'Beyond Good and Evil',
            'author' => 'Friedrich Nietzsche',
            'published' => '1886',
            'text' => 'Supposing trust to be a woman, what is the suspicion...'
        ]);

        DB::table('books')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'title' => 'All Quiet on the Western Front',
            'author' => 'Erich Maria Remarque',
            'published' => '1929',
            'text' => 'We are at reat five miles behind the front...'
        ]);
    }
}
