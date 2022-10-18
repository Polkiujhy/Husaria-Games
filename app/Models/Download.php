<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    public static function getMatchingDescription($file_name){
    switch($file_name){
        case 'Woodcutter_Deluxe_Edition.zip':
            $match = 'Woodcutter Deluxe Edition';
            break;
        case 'Space.zip':
            $match = 'Space';
            break;
        case 'Space_shooter.zip':
            $match = 'Space Shooter';
            break;
        case 'Arkona.zip':
            $match = 'Arkona';
            break;
        case 'Cyber_City_Deluxe_Edition.zip':
            $match = 'Cyber City Deluxe Edition';
            break;
        case 'Pixel_Monsters.zip':
            $match = 'Pixel Monsters';
            break;
        default:
            $match = 'invalid';
        }
        return $match;
    }
}
