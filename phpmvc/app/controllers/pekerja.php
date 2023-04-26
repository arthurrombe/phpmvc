<?php

class Pekerja  extends Controller {
    public function index()
    {
        $data['judul']= 'Daftar Pekerja';
        $data['mhs'] = $this->model('Pekerja_model')->getAllPekerja();
        $this->view('templates/header', $data);
        $this->view('pekerja/index', $data);
        $this->view('templates/footer');
    }  
    public function detail($id)
    {
        $data['judul']= 'Detail Pekerja';
        $data['mhs'] = $this->model('Pekerja_model')->getPekerjaById($id);
        $this->view('templates/header', $data);
        $this->view('pekerja/detail', $data);
        $this->view('templates/footer');
    }
}