<?php

namespace App\Controllers;

use Config\Services;

class Profile extends BaseController
{

    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('home/not_found');
        } else {
            
        $profile			= $this->profile->find(1);

            $data = [
            'title'         => 'Arta Kusuma Hernanda Profile',
            'profile'		=> $profile
            ];
            return view('auth/profile/index', $data);
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'about_me' => [
                    'label' => 'about_me',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'city' => [
                    'label' => 'city',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'birthplace' => [
                    'label' => 'birthplace',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'status' => [
                    'label' => 'status',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'email' => [
                    'label' => 'email',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'facebook' => [
                    'label' => 'facebook',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'instagram' => [
                    'label' => 'instagram',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'youtube' => [
                    'label' => 'youtube',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'linkedin' => [
                    'label' => 'linkedin',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'github' => [
                    'label' => 'github',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'kaggle' => [
                    'label' => 'kaggle',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'about_me'      => $validation->getError('about_me'),
                        'city'          => $validation->getError('city'),
                        'birthplace'    => $validation->getError('birthplace'),
                        'status'        => $validation->getError('status'),
                        'facebook'      => $validation->getError('facebook'),
                        'youtube'       => $validation->getError('youtube'),
                        'instagram'     => $validation->getError('instagram'),
                        'linkedin'      => $validation->getError('linkedin'),
                        'email'         => $validation->getError('email'),
                        'github'        => $validation->getError('github'),
                        'kaggle'        => $validation->getError('kaggle'),
                        
                    ]
                ];
            } else {

                $data = [ 
                    'about_me' => $this->request->getVar('about_me'),
                    'city' => $this->request->getVar('city'),
                    'birthplace' => $this->request->getVar('birthplace'),
                    'status' => $this->request->getVar('status'),
                    'email' => $this->request->getVar('email'),
                    'facebook' => $this->request->getVar('facebook'),
                    'instagram' => $this->request->getVar('instagram'),
                    'youtube' => $this->request->getVar('youtube'),
                    'linkedin' => $this->request->getVar('linkedin'),
                    'github' => $this->request->getVar('github'),
                    'kaggle' => $this->request->getVar('kaggle'),
                ];
                $this->profile->update(1, $data);

                $msg = [
                    'sukses' => [
                        'link' => 'profile'
                    ]
                ];
            }
            echo json_encode($msg);
        }
    }

    

}
