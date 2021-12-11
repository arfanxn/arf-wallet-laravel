<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // transfer
        // return [
        //     "tx_hash" => strtoupper(Str::random(10)) . preg_replace("/[^0-9]+/",  "", now()->toDateTimeString()),
        //     "from_wallet_id" => 1,
        //     "to_wallet_id" => rand(2, 9),
        //     "amount" => rand(10000, 999999),
        //     "charge" => rand(0, 7000),
        //     "description" => $this->faker->text(100),
        // ];

        // received 
        // return [
        //     "tx_hash" => strtoupper(Str::random(10)) . preg_replace("/[^0-9]+/",  "", now()->toDateTimeString()),
        //     "from_wallet_id" => rand(2, 5),
        //     "to_wallet_id" => 1,
        //     "amount" => rand(10000, 999999),
        //     "charge" => rand(0, 7000),
        //     "description" => $this->faker->text(100),
        // ];

        // random
        $from = rand(1, 10);
        $to = rand(1, 10);
        return [
            "tx_hash" => strtoupper(Str::random(10)) . preg_replace("/[^0-9]+/",  "", now()->toDateTimeString()),
            "from_wallet_id" =>  $from != $to ? $from : $from + 1,
            "to_wallet_id" => $to != $from ? $to : $to + 2,
            "amount" => rand(10000, 9999999),
            "charge" => rand(0, 7000),
            "description" => $this->faker->text(100),
        ];
    }
}
