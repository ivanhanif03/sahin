<?php

namespace App\Controllers;

use App\Models\OrdersModel;

class Order extends BaseController
{
    protected $OrdersModel;

    public function __construct()
    {
        $this->OrdersModel = new OrdersModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Order Invitation',
            'menu' => 'orders',
            'validation' => \Config\Services::validation(),
            'orders' => $this->OrdersModel->getOrder()
        ];

        return view('order/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create New Order',
            'menu' => 'orders',
            'validation' => \Config\Services::validation(),
            'user' => $this->OrdersModel->getOrder()
        ];

        return view('order/create', $data);
    }

    public function save()
    {
        //Validation
        if (!$this->validate([
            'name'     => 'required',
            'phone'    => 'required|min_length[9]|max_length[13]',
            'address'  => 'required',
        ])) {
            return redirect()->to('/user/create')->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->OrdersModel->save([
            'name'    => $this->request->getVar('name'),
            'phone'   => $this->request->getVar('phone'),
            'address' => $this->request->getVar('username'),
            'package' => $this->request->getVar('email'),
        ]);

        session()->setFlashdata('pesan', 'Data updated successfully');

        return redirect()->to('/order');
    }

    public function delete($id)
    {
        $this->OrdersModel->delete($id);
        session()->setFlashdata('pesan', 'Data deleted successfully');
        return redirect()->to('order/index');
    }
}
