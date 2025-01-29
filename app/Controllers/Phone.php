<?php
namespace App\Controllers;

use App\Models\Phone\{Model, Response};

class Phone extends BaseController
{
    use Model, Response;

    public function display() 
    {
        $result = Model::display();
        return $this->response
                    ->setHeader('Content-Type', 'text/html')
                    ->setBody(
                        Response::display($result)
                    );
    }

    public function detail(string $id) 
    {
        $data = Model::detail($id);
        return $this->response
                    ->setHeader('Content-Type', 'text/html')
                    ->setBody(
                        Response::detail($data)
                    );
    }
    
    public function insert() 
    {
        return $this->response
                    ->setHeader('Content-Type', 'application/json')
                    ->setBody(json_encode([
                        'ok' => Model::insert(
                            $this->request->getJSON()
                        )]));  
    }

    public function delete(string $id) 
    {
        return $this->response
                    ->setHeader('Content-Type', 'application/json')
                    ->setBody(json_encode([
                        'ok' => Model::delete($id)
                    ]));
    }

    public function update(string $id) 
    {
        return $this->response
                    ->setHeader('Content-Type', 'application/json')
                    ->setBody(json_encode([
                        'ok' => Model::update($id,
                                $this->request->getJSON()
                        )
                    ]));    
    }
}
