<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        $data = [
            'tittle' => 'Home |Nayanika WeGenius Shop'
        ];
        return view('pages/home', $data);
	}

    public function about()
    {
        $data = [
            'tittle' => 'About |Nayanika WeGenius Shop'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact |Nayanika WeGenius Shop',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl.Sumur No. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl.abc No. 123',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
	//--------------------------------------------------------------------

}
