<?php

namespace Database\Factories;

use App\Models\Room;
use App\Models\RoomStatus;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Room::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $abcd = array(
            'A',
            'B',
            'C',
            'D'
        );
        $price = array(
            45,
            50,
            65,
            70,
            85,
            95,
            120,
            150,
            175,
            200,
        );

        $info = array(
            'The single rooms, with 18 m2, have a single bed, marble bathroom with bathtub and views of the town. In addition, they welcome you with a welcome drink',
            'Classic and elegant rooms, but with contemporary details and exquisite decoration.',
            'The rooms are between 25 m2 and 35 m2, with views of the hotel garden and the beach',
            'Suites with 38 m2. Room with Queen size bed. Elegant and classic decoration with luxurious fabrics. Separate living room with sofa and armchairs. ',
            'Suites with 38 m2 to 43 m2. Large room with Queen or King size bed, endowed with a careful exquisiteness. ',
            'In the wing of the building that overlooks the garden, connected to the main building of the hotel, are the duplex suites, Rooms with 45 m2, with a living room on the ground floor and the bedroom upstairs.',
            'Suites with 55 m2 to 65 m2. Large room with King size bed, endowed with a careful exquisiteness and decorated with elegant and luxurious textiles. Large living room with a sofa, armchairs and coffee table',
        );

        static $order = 10;
        return [
            'type_id' => Type::all()->random()->id,
            'room_status_id' => '1',
            'number' => $order++.$abcd[array_rand($abcd)],
            'capacity' => $this->faker->numberBetween(1,12),
            'price' => $this->faker->randomElement($price),
            'view' => $this->faker->randomElement($info)
        ];
    }
}
