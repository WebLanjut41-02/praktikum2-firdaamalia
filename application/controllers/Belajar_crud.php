<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar_crud extends CI_Controller {
	public function index()
	{
        $data= $this->mod->GetTable('paketna');
		$this->load->view('viewcrud', array('data'=>$data));
	}
	public function insert()
	{
		//jika sudah sumbit, maka proses insert akan diproses
		if(isset($_POST['submit'])){
			//mengambil post dr form
			$Id_Paket = $this->input->post('Id_Paket');
			$Tgl_Datang = $this->input->post('Tgl_Datang');
			$Sasaran = $this->input->post('Sasaran');
			$Penerima = $this->input->post('Penerima');
			$Isi_Paket= $this->input->post('Isi_Paket');
			$Tgl_Terima= $this->input->post('Tgl_Terima');

			$data = array('Id_Paket'=>$Id_Paket, 'Tgl_Datang'=>$Tgl_Datang, 'Sasaran'=>$Sasaran,'Penerima'=>$Penerima,'Isi_Paket'=>$Isi_Paket,'Tgl_Terima'=>$Tgl_Terima); //data yang akan di insert
			$this->mod->InsertData('paketna', $data); //memasukan data melalui fungsi insertdata pad models mod.php
			redirect('Belajar_crud'); //
		}else{
			$this->load->view('insertcrud'); //menampilkan views insertcrud
		}
	}
	public function update(){
		if(isset($_POST['submit'])){

			//mengambil post dr form
			$Id_Paket = $this->input->post('Id_Paket');
			$Tgl_Datang = $this->input->post('Tgl_Datang');
			$Sasaran = $this->input->post('Sasaran');
			$Penerima = $this->input->post('Penerima');
			$Isi_Paket= $this->input->post('Isi_Paket');
			$Tgl_Terima= $this->input->post('Tgl_Terima');

			$data = array('Id_Paket'=>$Id_Paket, 'Tgl_Datang'=>$Tgl_Datang, 'Sasaran'=>$Sasaran,'Penerima'=>$Penerima,'Isi_Paket'=>$Isi_Paket, 'Tgl_Terima'=>$Tgl_Terima); //data yang akan di update
			$this->mod->UpdateData('paketna', $data,'Id_Paket',$Id_Paket); //mengaupdate data melalui fungsi insertdata pad models mod.php
			redirect('Belajar_crud'); //mengalihkan ke tampbali
		}else{
			$id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
			$data = $this->mod->getByID('paketna','Id_Paket',$id)->row_array(); //menselect data yg akan di update
		
			$this->load->view('updatecrud',array('r'=>$data)); //menampilkan views updatecrud
		}
	}
	public function delete(){
        $id = $this->uri->segment(3); //mengambil primary key melalui link yg ketiga
        $this->mod->DeleteData('paketna','Id_Paket',$id); //menghapus data
        redirect('Belajar_crud'); //mengalihkan ke tampbali
    }
}
