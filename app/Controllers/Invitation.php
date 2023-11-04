<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Invitation extends BaseController
{
    public function sahin()
    {
        $data = [
            'title' => 'Sahin',
            'menu' => 'Invitation',
            'kontrak' => $this->InvitationModel->getDetailInvitation($id)
        ];

        return view('kontrak/detail', $data);
    }
}
