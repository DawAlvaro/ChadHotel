<?php

namespace Database\Seeders;

use App\Models\RoomStatus;
use Illuminate\Database\Seeder;

class RoomStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            'Vacant',
            'Occupied',
            'Occupied Clean',
            'Occupied Dirty',
            'Vacant Clean Inspected',
            'Vacant Clean',
            'Vacant Dirty',
            'Compliment',
            'House Use',
            'Do not Disturb',
            'Sleep Out',
            'Skipper',
            'Out of Service',
            'Out of Order',
            'Due Out / Expected Departure',
            'Expected Arrival',
            'Check Out',
            'Late Check Out',
            'Occupeid no Luggage',
            'Double Lock',
        ];

        $codes = [
            'V',
            'O',
            'OC',
            'OD',
            'VCI',
            'VC',
            'VD',
            'Comp',
            'HU',
            'DND',
            'SO',
            'Skip',
            'OS',
            'OOO',
            'DO/ED',
            'EA',
            'CO',
            'LCO',
            'ONL',
            'DL',
        ];

        $informations = [
            'Empty room.',
            'A room that is being occupied by someone legally and registered as a hotel guest.',
            'A room that is being occupied by someone legally and registered as a hotel guest in a clean room.',
            'A room that is being occupied by someone legally and registered as a hotel guest in a dirty room. This occurs due to a change in status from OC to OD after a one night stay.',
            'Empty rooms that have been cleaned and checked by the floor supervisor and are ready to receive guests.',
            'Empty room with clean condition.',
            'Empty room with dirty condition. Dirty rooms can occur because of guests who have checked out or the cleaning program from housekeeping.',
            'A room registered by a guest, but the room is free of charge ',
            'Registered rooms but used by hotel management.',
            'Rooms that put this sign mean that guests dont want to be disturbed.',
            'A guest who is still registered, but the room is not used because the guest has to leave the hotel for a few days or the guest is sleeping outside the hotel area.',
            'The guest leaves the hotel before paying all his/her obligations.',
            'Status of rooms under repair.',
            'Rooms that need serious repairs, usually take more than one day to repair. This status can occur due to damage to the room or the cleaning program from housekeeping. Out of order reduces room availability.',
            'List of rooms that are expected to check-out today according to the departure date.',
            'List of names of guests expected to arrive today.',
            'Guests who have left the hotel today after paying all their obligations including handing over the keys used to the front office.',
            'Guest requests to leave the hotel later than the specified check out time.',
            'A guest who is still registered in a room without any items in it.',
            'Guest requests to the hotel to double lock so that no one can enter the room.',
        ];

        for ($i = 0; $i < count($codes); $i++) {
            RoomStatus::create([
                'name' => $names[$i],
                'code' => $codes[$i],
                'information' => $informations[$i]
            ]);
        }
    }
}
