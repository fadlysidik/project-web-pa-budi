<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder

{
    public function run()
    {
        Transaction::create([
            'type' => 'income',
            'description' => 'Donation',
            'amount' => 1000.00
        ]);

        Transaction::create([
            'type' => 'expense',
            'description' => 'Office Supplies',
            'amount' => 200.00
        ]);
    }
}
