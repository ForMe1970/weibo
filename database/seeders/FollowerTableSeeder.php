<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class FollowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = User::first();
        $userId = $user->id;

        //获取去除掉id为1的所有用户Id数组
        $followers = $users->slice(1);
        $followerIds = $followers->pluck('id')->toArray();

        //关注除了1号用户以外的所有用户
        $user->follow($followerIds);

        //除了1号用户外，所有用户都来关注1号用户
        foreach ($followers as $follower) {
            $follower->follower($userId);
        }
    }
}
