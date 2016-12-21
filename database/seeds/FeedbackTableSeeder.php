<?php
use Illuminate\Database\Seeder;
use App\Feedback;
class FeedbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        FeedBack::create([
            'id' => 1,
            'name' => 'Adoption City',
            'email' => 'surf@aol.com',
            'question' => 1,
            'comment' => 'The Doghouse',
        ]);
    }
}
