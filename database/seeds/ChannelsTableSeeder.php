<?php

use App\Channel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create([
            "name"=>"laravel 7" ,
            "slug"=>Str::slug("laravel 7")
        ]) ;
        Channel::create([
            "name"=>"Vue js 3" ,
            "slug"=>Str::slug("Vue js 3")
        ]) ;
        Channel::create([
            "name"=>"Angular 7" ,
            "slug"=>Str::slug("Angular 7")
        ]) ;
        Channel::create([
            "name"=>"Node js" ,
            "slug"=>Str::slug("Node js")
        ]) ;
    }
}
