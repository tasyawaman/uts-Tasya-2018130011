<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['income', 'expense'];
        $incomeCategories = ['wage', 'bonus', 'gift'];
        $expenseCategories = ['food & drinks', 'shopping', 'charity', 'housing', 'insurance', 'taxes', 'transportation'];

        for ($i = 0; $i < 100; $i++) {
            $type = $types[array_rand($types)];
            $category = ($type === 'income') ? $incomeCategories[array_rand($incomeCategories)] : $expenseCategories[array_rand($expenseCategories)];

            Transaction::create([
                'amount' => rand(10, 1000),
                'type' => $type,
                'category' => $category,
                'notes' => 'Lorem ipsum dolor sit amet',
            ]);
        }
    }
}
