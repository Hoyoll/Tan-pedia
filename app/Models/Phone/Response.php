<?php
namespace App\Models\Phone;

trait Response
{
    public static function display(array &$data): string
    {
        $table = implode('', array_map(
                        function (array $data) {
                            return <<<HTML
                            <tr id="{$data['id']}">
                            <td>{$data['brand']}</td>
                            <td>{$data['model']}</td>
                            <td>{$data['release_year']}</td>
                            <td>{$data['price']}</td>
                            <td>{$data['color']}</td>
                            <td>{$data['screen_size']}</td>
                            <td>{$data['camera_resolution']}</td>
                            <td>
                                <button data-bs-toggle="modal" data-bs-target="#edit-modal" data-id = "{$data['id']}" class = "btn-edit btn btn-success">Edit</button>
                                <button data-id = "{$data['id']}" class = "btn-delete btn btn-warning">Delete</button>
                            </td>
                            </tr>
                            HTML;
                        }, $data
                    ));        
        return 
        <<<HTML
        <table class="table table-striped align-middle">
        <thead >
            <tr class = "py-1">
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Release</th>
            <th scope="col">Price</th>
            <th scope="col">Color</th>
            <th scope="col">Screen</th>
            <th scope="col">Camera</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody id="tbody" class="table-group-divider">
            $table
        </tbody>
        </table>
        HTML;
    }

    public static function detail(object &$data): string 
    {
        return
        <<<HTML
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Detail</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" >
        <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" value="{$data->brand}">
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" value="{$data->model}">
            </div>
            <div class="mb-3">
                <label for="release" class="form-label">Release Year</label>
                <input type="text" class="form-control" id="release" value="{$data->release_year}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" value="{$data->price}">
            </div>
            <div class="mb-3">
                <label for="storage" class="form-label">Storage</label>
                <input type="text" class="form-control" id="storage" value="{$data->storage}">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color" value="{$data->color}">
            </div>
            <div class="mb-3">
                <label for="screen" class="form-label">Screen Size</label>
                <input type="text" class="form-control" id="screen" value="{$data->screen_size}">
            </div>
            <div class="mb-3">
                <label for="camera" class="form-label">Camera</label>
                <input type="text" class="form-control" id="camera" value="{$data->camera_resolution}">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" data-id = "{$data->id}" id = "update" class="btn-edit btn btn-primary">Save changes</button>
        </div>
        HTML;
    }
}
