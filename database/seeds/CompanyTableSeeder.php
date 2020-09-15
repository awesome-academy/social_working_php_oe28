<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Company_User;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = ['Apple', 'Sun', 'Vin'];

        foreach ($companies as $company) {
            if (!DB::table('companies')->where('name', $company)->first()) {
                DB::table('companies')->insertGetId(['name' => $company]);
            }
        }

        $listCompanies = DB::table('companies')->get();

        foreach ($listCompanies as $company) {
            $listUserId = [];
            for ($j = 0; $j < 15; $j++) {
                $randomUserId = User::where('role_id', 3)->inRandomOrder()->first()->id;
                if (!in_array($randomUserId, $listUserId)){
                    DB::table('company_user')->insert([
                        'company_id' => $company->id,
                        'user_id' => $randomUserId,
                    ]);
                    array_push($listUserId, $randomUserId);
                } else {
                    continue;
                }
            }
        }
    }
}
