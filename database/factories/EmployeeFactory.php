<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::pluck('id') ->toArray();
        return [
            'user_id' => $this->faker->randomElement($user),
            'first_name' => $this->faker->text(50),
            'last_name' => $this->faker->text(50),
            'phone_number' => $this->faker->phoneNumber(20),
            'email_adderss' => $this->faker->email(50),
            'id_passport_number' => $this->faker->text(50),
            'city' => $this->faker->text(50),
            'address' => $this->faker->text(50),
            'start_date' => $this->faker->date(50),
            'gender' => $this->faker->text(50)
        ];
    }
}
