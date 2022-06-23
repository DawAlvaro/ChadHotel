<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    private $number = 0;
    private $room_number = 0;

    public function definition()
    {
        $image_room = array(
            'https://images.unsplash.com/photo-1606654810639-76ed5d12737b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1616046229478-9901c5536a45?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1560448205-4d9b3e6bb6db?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1614649024145-7f847b1c803f?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1615873968403-89e068629265?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1606654810639-76ed5d12737b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1616046229478-9901c5536a45?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1560448205-4d9b3e6bb6db?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1614649024145-7f847b1c803f?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1615873968403-89e068629265?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1606654810639-76ed5d12737b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1616046229478-9901c5536a45?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1560448205-4d9b3e6bb6db?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1614649024145-7f847b1c803f?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250',
            'https://images.unsplash.com/photo-1615873968403-89e068629265?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&w=250'
        );

        $rooms = Room::all();

        $room_array = [
            'room_id' => $rooms[$this->room_number]->id,
            'url' => $image_room[$this->number],
        ];

        $this->number++;
        $this->room_number++;

        return $room_array;
    }
}
