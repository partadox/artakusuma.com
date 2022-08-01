<?php

namespace App\Controllers;

use Config\Services;

class Project extends BaseController
{

    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('home/not_found');
        } else {
            $data = [
                'title' => 'Project Page'
            ];
            return view('auth/project/index', $data);
        }
    }

    public function getdata()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'Project',
                'list' => $this->project->list()


            ];
            $msg = [
                'data' => view('auth/project/list', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function formtambah()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title'         => 'Add New Project',
                'list_category' => $this->project_cat->list(),
            ];
            $msg = [
                'data' => view('auth/project/tambah', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function simpan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'project_name' => [
                    'label' => 'Project Name',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'project_category' => [
                    'label' => 'Project Category',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'project_order' => [
                    'label' => 'Project order',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'project_roles' => [
                    'label' => 'Project roles',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'project_time' => [
                    'label' => 'Project time',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'project_description' => [
                    'label' => 'Deskripsi project',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'project_name'          => $validation->getError('project_name'),
                        'project_category'      => $validation->getError('project_category'),
                        'project_description'   => $validation->getError('project_description'),
                        'project_order'        => $validation->getError('project_order'),
                        'project_roles'         => $validation->getError('project_roles'),
                        'project_time'          => $validation->getError('project_time'),

                    ]
                ];
            } else {

                //Get Datetime now
                $date        = date("Y-m-d");
                $time        = date("H:i:s");
                //Get nama User
                $user_nama      = session()->get('nama');
                $project_name   = $this->request->getVar('project_name');

                $simpandata = [
                    'project_name'          => $project_name,
                    'project_category'      => $this->request->getVar('project_category'),
                    'project_order'         => $this->request->getVar('project_order'),
                    'project_roles'         => $this->request->getVar('project_roles'),
                    'project_time'          => $this->request->getVar('project_time'),
                    'project_cover'        => "default.jpg",
                    'project_slug'          => $this->request->getVar('project_slug'),
                    'project_description'   => $this->request->getVar('project_description'),
                ];  

                $this->project->insert($simpandata);

                $msg = [
                    'sukses' => 'Data Berhasil Disimpan'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function formedit()
    {
        if ($this->request->isAJAX()) {
            $project_id  = $this->request->getVar('project_id');
            $list        =  $this->project->find($project_id);
            $data = [
                'title'                 => 'Edit project',
                'list_category'         => $this->project_category->list(),
                'project_id'            => $project_id ,
                'project_category'      => $list['project_category'],
                'project_subcategory'   => $list['project_subcategory'],
                'project_deskripsi'     => $list['project_deskripsi'],
            ];
            $msg = [
                'sukses' => view('auth/project/edit', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function update()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'project_category' => [
                    'label' => 'category project',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} harus dipilih',
                    ]
                ],
                'project_subcategory' => [
                    'label' => 'Subcategory project',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
                'project_deskripsi' => [
                    'label' => 'Deskripsi project',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'project_category'     => $validation->getError('project_category'),
                        'project_subcategory'  => $validation->getError('project_subcategory'),
                        'project_deskripsi'    => $validation->getError('project_deskripsi'),
                    ]
                ];
            } else {

                //Get Datetime now
                $date        = date("Y-m-d");
                $time        = date("H:i:s");
                //Get nama User
                $user_nama              = session()->get('nama');
                $project_subcategory    = $this->request->getVar('project_subcategory');

                $updatedata = [
                    'project_category'       => $this->request->getVar('project_category'),
                    'project_subcategory'    => $project_subcategory,
                    'project_slug'           => $this->request->getVar('project_slug'),
                    'project_deskripsi'      => $this->request->getVar('project_deskripsi'),
                ];

                $project_id = $this->request->getVar('project_id');
                $this->project->update($project_id, $updatedata);

                // Data Log START
                $log = [
                    'log_user'      => $user_nama,
                    'log_dt'        => $date,
                    'log_tm'        => $time,
                    'log_status'    => 'BERHASIL',
                    'log_aktivitas' => 'Edit Data project - ' . $project_subcategory,
                ];
                $this->log->insert($log);
                // Data Log END

                $msg = [
                    'sukses' => 'Data Berhasil Diupdate'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function hapus()
    {
        if ($this->request->isAJAX()) {

            $project_id = $this->request->getVar('project_id');
            //check
            $cekdata = $this->project->find($project_id);

            // Data Log START
            $date                = date("Y-m-d");
            $time                = date("H:i:s");
            $user_nama           = session()->get('nama');
            $project_subcategory = $cekdata['project_subcategory'];

           $log = [
               'log_user'      => $user_nama,
               'log_dt'        => $date,
               'log_tm'        => $time,
               'log_status'    => 'BERHASIL',
               'log_aktivitas' => 'Hapus project ' . $project_subcategory,
           ];
           $this->log->insert($log);
           // Data Log END

            $this->project->delete($project_id);

            $msg = [
                'sukses' => 'Data project Berhasil Dihapus'
            ];

            echo json_encode($msg);
        }
    }

    public function hapusall()
    {
        if ($this->request->isAJAX()) {
            $project_id = $this->request->getVar('project_id');
            $jmldata = count($project_id);
            for ($i = 0; $i < $jmldata; $i++) {
                //check
                $cekdata = $this->project->find($project_id[$i]);

                // Data Log START
                $date         = date("Y-m-d");
                $time         = date("H:i:s");
                $user_nama    = session()->get('nama');
                $project_subcategory = $cekdata['project_subcategory'];
    
               $log = [
                   'log_user'      => $user_nama,
                   'log_dt'        => $date,
                   'log_tm'        => $time,
                   'log_status'    => 'BERHASIL',
                   'log_aktivitas' => 'Hapus project ' . $project_subcategory,
               ];
               $this->log->insert($log);
               // Data Log END

                $this->project->delete($project_id[$i]);
            }

            $msg = [
                'sukses' => "$jmldata Data project Berhasil Dihapus"
            ];
            echo json_encode($msg);
        }
    }


    //project category
    public function project_category()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('home/not_found');
        } else {
            $data = [
                'title' => 'Project Category'
            ];
            return view('auth/project_category/index', $data);
        }
    }

    public function category_getdata()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'Project Category',
                'list' => $this->project_cat->list()
            ];
            $msg = [
                'data' => view('auth/project_category/list', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function category_formtambah()
    {
        if ($this->request->isAJAX()) {
            $data = [
                'title' => 'Add New Category',
            ];
            $msg = [
                'data' => view('auth/project_category/tambah', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function category_simpan()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'pro_cat_name' => [
                    'label' => 'Nama category project',
                    'rules' => 'required|is_unique[project_category.pro_cat_name]',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                        'is_unique' => '{field} harus berbeda dengan nama category project yang sudah ada!',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'pro_cat_name'  => $validation->getError('pro_cat_name'),
                    ]
                ];
            } else {

                //Get Datetime now
                $date        = date("Y-m-d");
                $time        = date("H:i:s");
                //Get nama User
                $user_nama      = session()->get('nama');
                $pro_cat_name        = $this->request->getVar('pro_cat_name');

                $simpandata = [
                    'pro_cat_name'          => $pro_cat_name,
                    'pro_cat_slug'          => $this->request->getVar('pro_cat_slug'),
                ];

                $this->project_cat->insert($simpandata);

                $msg = [
                    'sukses' => 'Data Berhasil Disimpan'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function category_formedit()
    {
        if ($this->request->isAJAX()) {
            $pro_cat_id  = $this->request->getVar('pro_cat_id');
            $list        =  $this->project_category->find($pro_cat_id);
            $data = [
                'title'         => 'Edit category project',
                'pro_cat_id'    => $list['pro_cat_id'],
                'pro_cat_name'  => $list['pro_cat_name'],
            ];
            
            $msg = [
                'sukses' => view('auth/project_category/edit', $data)
            ];
            echo json_encode($msg);
        }
    }

    public function category_update()
    {
        if ($this->request->isAJAX()) {
            $validation = \Config\Services::validation();
            $valid = $this->validate([
                'LK_nama' => [
                    'label' => 'Nama category project',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} tidak boleh kosong',
                    ]
                ],
            ]);
            if (!$valid) {
                $msg = [
                    'error' => [
                        'LK_nama'  => $validation->getError('LK_nama'),
                    ]
                ];
            } else {

                //Get Datetime now
                $date        = date("Y-m-d");
                $time        = date("H:i:s");
                //Get nama User
                $user_nama      = session()->get('nama');
                $LK_nama   = $this->request->getVar('LK_nama');

                $updatedata = [
                    'LK_nama'          => $LK_nama,
                    'LK_slug'          => $this->request->getVar('LK_slug'),
                ];

                $LK_id = $this->request->getVar('LK_id');
                $this->project_category->update($LK_id, $updatedata);

                // Data Log START
                $log = [
                    'log_user'      => $user_nama,
                    'log_dt'        => $date,
                    'log_tm'        => $time,
                    'log_status'    => 'BERHASIL',
                    'log_aktivitas' => 'Edit Data category project - ' . $LK_nama,
                ];
                $this->log->insert($log);
                // Data Log END

                $msg = [
                    'sukses' => 'Data Berhasil Diupdate'
                ];
            }
            echo json_encode($msg);
        }
    }

    public function category_hapus()
    {
        if ($this->request->isAJAX()) {

            $LK_id = $this->request->getVar('LK_id');
            //check
            $cekdata = $this->project_category->find($LK_id);

            // Data Log START
            $date         = date("Y-m-d");
            $time         = date("H:i:s");
            $user_nama    = session()->get('nama');
            $LK_nama = $cekdata['LK_nama'];

           $log = [
               'log_user'      => $user_nama,
               'log_dt'        => $date,
               'log_tm'        => $time,
               'log_status'    => 'BERHASIL',
               'log_aktivitas' => 'Hapus category project ' . $LK_nama,
           ];
           $this->log->insert($log);
           // Data Log END

            $this->project_category->delete($LK_id);

            $msg = [
                'sukses' => 'Data project Berhasil Dihapus'
            ];

            echo json_encode($msg);
        }
    }

}
