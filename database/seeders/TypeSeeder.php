<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Standard Room',
            'Superior Room',
            'Deluxe Room',
            'Junior Suite Room',
            'Suite Room',
            'Presidential Suite',
            'Single Room',
            'Twin Room',
            'Double Room',
            'Family Room/Triple Room',
            'Connecting Room',
            'Murphy Room',
            'Accessible Room/Disabled Room',
            'Smoking/Non Smoking Room',
            'Cabana Room',
        ];

        $information = [
            'This type of room is priced relatively cheaply. The facilities offered are standard, such as a king size bed or two queen sizes.',
            'The difference from Standard can be from the facilities provided, the interior of the room, or the view from the room.',
            'There is a choice of mattresses that you can choose, double beds or twin beds. The interior looks more luxurious.',
            'The living room is usually limited or insulated with a large wardrobe so that the bed is not visible. ',
            'The living room in this hotel room is separate from the bedroom. This type of hotel room is equipped with a kitchen.',
            'The facilities offered are of course the best, starting from the interior, room views, and many others.',
            'This room type consists of a single bed, sofa, and bathroom. The size of the room is also not too big.',
            'This room type has two separate single beds. This type of hotel room is suitable for husband and wife or staying with friends with 2-3 people.',
            'This type of hotel room usually has a large mattress size such as a king size. This double room is perfect for married couples who want to honeymoon.',
            'This type of family room hotel room is usually available in one place with a king size and one bed with a smaller size.',
            'Your rooms and other family members will be next to each other and there is a door connecting your rooms.',
            'This Murphy room is a type of hotel room that provides a sofa bed in the room. This sofa bed is used as a bed at night and a living room during the day.',
            'This Accessible Room/Disable Room type is available for guests with disabilities.',
            'If you are a smoker, now you can book a smoking room type.',
            'Do you want to swim right away when you open the bedroom door? Or have a private pool? Choose the Cabana Room hotel room type.',
        ];

        for ($i = 0; $i < count($name); $i++) {
            Type::create([
                'name' => $name[$i],
                'information' => $information[$i]
            ]);
        }
    }
}
