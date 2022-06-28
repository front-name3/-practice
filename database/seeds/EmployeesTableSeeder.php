<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // 1レコード
  $employee = new \App\products([
    'id' => '1',
    'company_id' => '10001',
    'product_name' => 'test_company',
    'price' => '100',
    'stock' => '40',
    'comment' => 'テストコメントを挿入',
    'img_path' => 'yahoo.co.jp',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
  ]);
    $employee->save();

  // 2レコード
  $employee = new \App\products([
    'id' => '2',
    'company_id' => '10002',
    'product_name' => 'test_company',
    'price' => '100',
    'stock' => '40',
    'comment' => 'テストコメントを挿入',
    'img_path' => 'yahoo.co.jp',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
  ]);
  $employee->save();

  // 3レコード
  $employee = new \App\products([
    'id' => '3',
    'company_id' => '10003',
    'product_name' => 'test_company',
    'price' => '100',
    'stock' => '40',
    'comment' => 'テストコメントを挿入',
    'img_path' => 'yahoo.co.jp',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
  ]);
  $employee->save();

    }
}
