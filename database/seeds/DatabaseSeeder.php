<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    

    DB::table('users')->insert(
     [
        'name' => 'Animesh Pandey',
        'email' => 'animesh@karkhana.asia',
        'password' => bcrypt("karkhana_admin09wasp"), // secret
        'remember_token' => str_random(10),
    ]);
        DB::table('users')->insert(
     [
        'name' => 'Aakash Raj Dahal',
        'email' => 'aakash@karkhana.asia',
        'password' => bcrypt("karkhana_admin09wasp"), // secret
        'remember_token' => str_random(10),
    ]);
            DB::table('users')->insert(
     [
        'name' => 'William',
        'email' => 'william@karkhana.asia',
        'password' => bcrypt("karkhana_admin09wasp"), // secret
        'remember_token' => str_random(10),
    ]);
                DB::table('users')->insert(
     [
        'name' => 'Suresh Ghimire',
        'email' => 'suresh@karkhana.asia',
        'password' => bcrypt("karkhana_admin09wasp"), // secret
        'remember_token' => str_random(10),
    ]);

        DB::table('users')->insert(
     [
        'name' => 'Prayush Bijukche',
        'email' => 'prayush@karkhana.asia',
        'password' => bcrypt("karkhana_admin09wasp"), // secret
        'remember_token' => str_random(10),
    ]);
          DB::table('categories')->insert([
            'name' => "Posts",
        ]);
            DB::table('categories')->insert([
            'name' => "Documentations",
        ]);
                DB::table('tags')->insert([
            'tag' => "Wasp",
        ]);
          $post= Post::create([
                'title'=>'New Post',
                'content'=>'Lorem Ipsum',
                 'featured'=>'uploads/posts/jungle.jpg',
                'slug' => str_slug('New Post'),
                'category_id'=>1,
                 'user_id'=>1
        ]);
          //$po=Post::where('title','New Post')->get();
          $post->tags()->attach(1);
           
    }
}
