<?php
namespace App\Models\Phone;

trait Model
{
    private static string $table = 'phones';
    
    private static function conn() 
    {
        return \Config\Database::connect()->table(self::$table);    
    }

    public static function display(): array 
    {   
        return self::conn()->get()->getResult('array');
    }

    public static function detail(string $id): object 
    {
        return self::conn()->where('id', $id)->get()->getRow();
    }

    public static function delete(string $id): bool 
    {
        return self::conn()->where('id', $id)->delete();
    }

    public static function update(string $id, object $data): bool 
    {
        return self::conn()->where('id', $id)->update([
            'brand'             => $data->brand,
            'model'             => $data->model,
            'release_year'      => $data->release,
            'price'             => $data->price,
            'storage'           => $data->storage,
            'color'             => $data->color,
            'screen_size'       => $data->screen,
            'camera_resolution' => $data->camera
        ]);
    }

    public static function insert(object $data): bool 
    {
        return self::conn()->insert([
                'brand'               => $data->brand,
                'model'               => $data->model,
                'release_year'        => $data->release,
                'price'               => $data->price,
                'storage'             => $data->storage,
                'color'               => $data->color,
                'screen_size'         => $data->screen,
                'camera_resolution'   => $data->camera
            ]
        );
    }
}
