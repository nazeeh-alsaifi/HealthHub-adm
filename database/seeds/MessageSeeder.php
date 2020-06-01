<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('messages')->insert([
            'sent_by' => 2,
            'received_by' => 1,
            'subject' => 'heart disease',
            'body' => 'hey doc, i had a severe heart attack when my girlfriend broke up with me KEKW :D',
            'phone_num' => '134134',
            'age' => 25,
            'sex' => 'male',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'sent_by' => 3,
            'received_by' => 1,
            'subject' => 'heart attack incoming',
            'body' => "hey doc, i think i'm going to have a severe heart attack if my grandmother shouted at me KEKW :D",
            'phone_num' => '567567',
            'age' => 24,
            'sex' => 'male',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'sent_by' => 1,
            'received_by' => 2,
            'subject' => 'heart disease',
            'body' => 'dear nazeeh, thank you for writing to us, i think you are going to be just fine :D',
            'status' => '1',
            'reply_on' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'sent_by' => 1,
            'received_by' => 3,
            'subject' => 'heart attack incoming',
            'body' => 'dear suliman, thank you for writing to us, i think you should shout back at her .lol :D',
            'status' => '1',
            'reply_on' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('messages')->insert([
            'sent_by' => 2,
            'received_by' => 1,
            'subject' => 'headache',
            'body' => 'hey doc, i had a severe headache when i am not having enough sleep  :{',
            'phone_num' => '567567',
            'age' => 24,
            'sex' => 'male',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('messages')->insert([
            'sent_by' => 2,
            'received_by' => 1,
            'subject' => 'blood test',
            'body' => "hey doc, i'm going to have a blood test",
            'phone_num' => '567567',
            'age' => 24,
            'sex' => 'male',
            'status' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
