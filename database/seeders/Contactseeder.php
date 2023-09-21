<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Contactseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'name'=> "Buttonwood, California",
            'number' =>"00 (440) 9865 562",
            'email' => "support@colorlib.com",
        ]);
    }
}
