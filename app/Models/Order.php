<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'price',
        'description',
        'status',
        'reference_number',
        'email',
        'name',
        'filename'
    ];

    public static function getProductPrice($value){

        switch($value){
            case 'Woodcutter':
                $price = '5.99';
                break;
            case 'Space':
                $price = '2.99';
                break;
            case 'Space-Shooter':
                $price = '2.99';
                break;
            case 'Arkona':
                $price = '8.99';
                break;
            case 'Cyber-City':
                $price = '8.99';
                break;
            case 'Pixel-Monsters':
                $price = '5.99';
                break;
            default:
                $price = '0.50';
        }
        return $price;
    }

    public static function getProductDescription($value){
        switch($value){
            case 'Woodcutter':
                $description = 'Woodcutter Deluxe Edition';
                break;
            case 'Space':
                $description = 'Space';
                break;
            case 'Space-Shooter':
                $description = 'Space Shooter';
                break;
            case 'Arkona':
                $description = 'Arkona';
                break;
            case 'Cyber-City':
                $description = 'Cyber City Deluxe Edition';
                break;
            case 'Pixel-Monsters':
                $description = 'Pixel Monsters';
                break;
            default:
                $description = 'invalid';
        }
        return $description;
    }

    public static function getUserEmail($email){
        return $email;
    }

    public static function getFileName($value){
        switch($value){
            case 'Woodcutter':
                $filename = 'Woodcutter_Deluxe_Edition.zip';
                break;
            case 'Space':
                $filename = 'Space.zip';
                break;
            case 'Space-Shooter':
                $filename = 'Space-Shooter.zip';
                break;
            case 'Arkona':
                $filename = 'Arkona.zip';
                break;
            case 'Cyber-City':
                $filename = 'Cyber_City_Deluxe_Edition.zip';
                break;
            case 'Pixel-Monsters':
                $filename = 'Pixel_Monsters.zip';
                break;
            default:
                $filename = 'invalid';
        }
        return $filename;
    }
}
