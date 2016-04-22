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
            'text' => 'Whatever might have been the basis for this dubious book, it must have been a question of the utmost importance and charm, as well as a deeply personal one at the time—testimony to that effect is the period in which it arose, in spite of which it arose, that disturbing era of the Franco-Prussian war of 1870-71.'
        ]);
    }
}
