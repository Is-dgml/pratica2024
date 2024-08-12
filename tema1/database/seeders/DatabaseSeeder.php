<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Employee;

class CompanyEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company1 = Company::create([
            'name' => 'TechCorp',
            'address' => '123 Tech Street',
            'email' => 'contact@techcorp.com'
        ]);

        $company2 = Company::create([
            'name' => 'DesignStudio',
            'address' => '456 Design Avenue',
            'email' => 'hello@designstudio.com'
        ]);

        Employee::create([
            'name' => 'John Doe',
            'position' => 'Software Engineer',
            'salary' => 7000.00,
            'company_id' => $company1->id,
        ]);

        Employee::create([
            'name' => 'Jane Smith',
            'position' => 'Product Manager',
            'salary' => 8500.00,
            'company_id' => $company1->id,
        ]);

        Employee::create([
            'name' => 'Alice Johnson',
            'position' => 'Graphic Designer',
            'salary' => 5000.00,
            'company_id' => $company2->id,
        ]);
    }
}
