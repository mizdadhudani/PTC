<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {

        function __construct(){

        parent::__construct();

        $this->load->model('penduduk_model');
        $this->load->model('kuisoner_model');
        $this->load->model('wilayah_model');
        $this->load->model('kesehatan_model');

        $this->load->helper('url');

        }
        public function index(){
            // $this->simple_login->cek_login_user(); 
            $data = array(  

                            'isi'=>'admin/home',
                            'title'=>'Admin PTC',
                            'sehat'=>$this->kuisoner_model->list_admin('sehat'),
                            'ringan'=>$this->kuisoner_model->list_admin('ringan'),
                            'sedang'=>$this->kuisoner_model->list_admin('sedang'),
                            'berat'=>$this->kuisoner_model->list_admin('berat'),
                            'semua'=>$this->kuisoner_model->jumlah()

                          );

            

            $this->load->view('admin/part/include', $data);
        }
        public function ringan(){

        }
        public function sedang(){

        }
        public function berat(){

        }

        public function detailpenduduk($nik=null){
            $dataku = array(    
                                'title' => 'Welcome to MyBlog' ,
                                'isi'=>'admin/detailpenduduk',
                                'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                                'datascore'=>$this->penduduk_model->datadetailpendudukscore($nik),
                      );
        
        $this->load->view('admin/part/include', $dataku);

    }

        public function cekdatatanggal($nik) {
            $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/datakuisoner',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),
                        'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                        'cekdata'=>$this->penduduk_model->cekdata($nik),
                      );
            // if($this->input->post('nik') != NULL ){
            //      $user=$this->input->post('nik');
            //      $cek=$this->modulpenduduk->cekdata($nik);
            //      redirect(base_url('admin/detailpenduduk/').$user);

            // }
        
        $this->load->view('admin/part/include', $dataku);
    }

    public function printdetail($nik){
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/printdetail',

                    'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                    'cekdata'=>$this->penduduk_model->cekdata($nik),

                      );

        
        $this->load->view('admin/part/content', $dataku);
    }

    public function printdata(){

                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/printdata',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),

                      'datao'=>$this->penduduk_model->datalengkapodp(),
                      'dataj'=>$this->penduduk_model->datalengkapodpj(),
                      'datat'=>$this->penduduk_model->datalengkapkert(),
                      'datar'=>$this->penduduk_model->datalengkapkerr(),
                      'datag'=>$this->penduduk_model->datalengkapgejala(),
                      'datas'=>$this->penduduk_model->datalengkapsehat(),
                      'datasemua'=>$this->penduduk_model->datalengkapscore(),

                      //'dataku'=>$this->kuisoner->getdataid($id),

                      );

        
        $this->load->view('admin/part/content', $dataku);
    }

    public function editdata($nik=null){
        $nomorhp=$this->session->userdata('nomorhp');
        $i=$this->input;
        $wilayah=$this->wilayah_model->provinsi();
        $penduduk=$this->penduduk_model->detail($nomorhp);
        $kecamatan=$this->wilayah_model->kecamatan_detail($i->post('kecamatan'));
        $kota=$this->wilayah_model->kabupaten_detail($i->post('kota'));
        $kelurahan=$this->wilayah_model->kelurahan_detail($i->post('kelurahan'));
        $pedukuhan=$this->wilayah_model->pedukuhan_detail($i->post('pedukuhan'));
        $provinsi=$this->wilayah_model->provinsi_detail($i->post('provinsi'));
                     
                $data = array(  
                                'title'     => 'Data Diri - Bantul Tangguh' ,
                                'isi'       =>'admin/editdata',
                                'penduduk'  =>$penduduk,
                                'wilayah'   =>$wilayah,
                                'kota'      =>$kota,
                                'datap'=>$this->penduduk_model->ubahdatadiri($nik),
                              );
                
                $this->load->view('admin/part/include', $data);
            
    }

    public function editdatashelter($nik=null){
        $nomorhp=$this->session->userdata('nomorhp');
        $i=$this->input;
        $wilayah=$this->wilayah_model->provinsi();
        $penduduk=$this->penduduk_model->detail($nomorhp);
        $kecamatan=$this->wilayah_model->kecamatan_detail($i->post('kecamatan'));
        $kota=$this->wilayah_model->kabupaten_detail($i->post('kota'));
        $kelurahan=$this->wilayah_model->kelurahan_detail($i->post('kelurahan'));
        $pedukuhan=$this->wilayah_model->pedukuhan_detail($i->post('pedukuhan'));
        $provinsi=$this->wilayah_model->provinsi_detail($i->post('provinsi'));
        $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/editdatashelter',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),

                        'penduduk'  =>$penduduk,
                        'wilayah'   =>$wilayah,
                        'kota'      =>$kota,
                        'datap'=>$this->penduduk_model->ubahdatadiri($nik)
                      );

        
        $this->load->view('admin/part/include', $dataku);
    }


    public function editdatabaru($nomorhp=null) {
        $nik=$this->input->post('nik');
        $cek = $this->penduduk_model->getdataidnik($nomorhp);
        $link=$this->input->post('link');
        $tambahdata= $this->penduduk_model->updatedataalamatnik();
        redirect('admin/detailpenduduk/'.$nik);
    }

    public function editdatabarushelter($nomorhp=null) {
            $nik=$this->input->post('nik');
            $cek = $this->penduduk_model->getdataidnik($nomorhp);
            $link=$this->input->post('link');
            $tambahdata= $this->penduduk_model->updatedataalamatnik();
            redirect('admin/detailpendudukshelter/'.$nik);
         
    }

    public function isidata($nik){ 
    $cek = $this->penduduk_model->penduduknik($nik);
        $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/isidata',

                      'dataku'=>$this->penduduk_model->penduduknik($nik),
                      'datas'=>$this->kuisoner_model->penduduktanggal($nik),
                      'datap'=>$this->penduduk_model->datadetailhari($nik)
                      //'dataku'=>$this->kuisoner->getdataid($id),

                      );
        if ($cek->alamat_ktp =='' || $cek->gambar_ktp ==''){
            redirect("admin/editdata/".$nik);
        }else {
                
                $this->load->view('admin/part/include', $dataku);
            }
        }

    public function isidatashelter($nik){ 
        $cek = $this->penduduk_model->penduduknik($nik);
        $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/isidatashelter',

                      'dataku'=>$this->penduduk_model->penduduknik($nik),
                      'datas'=>$this->kuisoner_model->penduduktanggal($nik),
                      'datap'=>$this->penduduk_model->datadetailhari($nik)
                      //'dataku'=>$this->kuisoner->getdataid($id),

                      );
        if ($cek->alamat_ktp ==''){
            redirect("admin/editdatashelter/".$nik);
        }else {
                
                $this->load->view('admin/part/include', $dataku);
            }
        }

    public function statuspenduduk($nik=null){
        $datap=$this->penduduk_model->ubahdatadiri($nik);
        //$nik=$datap->nik;
        $dataq=$this->kuisoner_model->getdataidk($nik);
            $dataku = array(    'title' => 'Welcome to MyBlog' ,

                            'isi'=>'admin/statuspenduduk',

                            //'postku'=> $this->tampilan->postku(),

                            // 'rows'=> $this->rows->sliderku(),

                            // 'logo'=>$this->inti->logo(),

                          'data'=>$datap,
                          'datak'=>$dataq
                          );

            
            $this->load->view('admin/part/include', $dataku);

        }

    public function statuspendudukshelter($nik=null){
        $datap=$this->penduduk_model->ubahdatadiri($nik);
        //$nik=$datap->nik;
        $dataq=$this->kuisoner_model->getdataidk($nik);
            $dataku = array(    'title' => 'Welcome to MyBlog' ,

                            'isi'=>'admin/statuspendudukshelter',

                            //'postku'=> $this->tampilan->postku(),

                            // 'rows'=> $this->rows->sliderku(),

                            // 'logo'=>$this->inti->logo(),

                          'data'=>$datap,
                          'datak'=>$dataq
                          );

            
            $this->load->view('admin/part/include', $dataku);

        }

    public function penduduk(){
            $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/penduduk',

                        'datasemua'=>$this->penduduk_model->datalengkappenduduk(),
                      );
        
        $this->load->view('admin/part/include', $dataku);
    }

    public function isianpenduduk($nik=null){
            $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/isianpenduduk',

                        'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                      );

        
        $this->load->view('admin/part/include', $dataku);
    }

    public function shelter(){
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/sheltersmk',

                      'datao'=>$this->penduduk_model->databeratshelter(),
                      'dataj'=>$this->penduduk_model->datasedangshelter(),
                      'datat'=>$this->penduduk_model->dataringanshelter(),
                      'datar'=>$this->penduduk_model->dataotgshelter(),
                      'datasemua'=>$this->penduduk_model->datalengkapshelter(),
                      );

        
        $this->load->view('admin/part/include', $dataku);
    }

    public function detailpendudukshelter($nik=null){
            $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/detailpendudukshelter',

                      'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                      'datascore'=>$this->penduduk_model->datadetailpendudukscore($nik),
                      );
        
        $this->load->view('admin/part/include', $dataku);
    }

    public function cekdatatanggalshelter($nik) {
            $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/datakuisonershelter',

                        'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                      'cekdata'=>$this->penduduk_model->cekdata($nik),
                      );
            
        $this->load->view('admin/part/include', $dataku);
    } 

    public function printdetailshelter($nik){
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/printdetailshelter',

                    'datapenduduk'=>$this->penduduk_model->datadetailpenduduk($nik),
                    'cekdata'=>$this->penduduk_model->cekdata($nik),

                      );

        
        $this->load->view('admin/part/content', $dataku);
    }

    public function sudahsehat($nik){
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        // 'isi'=>'sehatadmin',

                    'ubahsehat'=>$this->penduduk_model->ubahsehat($nik),

                      );
                redirect('admin/detailpenduduk/'.$nik);
        
        $this->load->view('part/admin/include', $dataku);
    }   

    public function sudahsehatshelter($nik){
                $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        // 'isi'=>'admin/sehatshelter',

                    'ubahsehat'=>$this->penduduk_model->ubahsehat($nik),

                      );
                redirect('admin/shelter/');
        
        $this->load->view('admin/part/content', $dataku);
    }    

    public function tambahlistbaru($nomorhp='081234567890') {
        $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/tambahlistadmin',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),

                      'data'=>$this->penduduk_model->getdataid($nomorhp)
                      


                      );
    
        $this->load->view('admin/part/include', $dataku);
    }

    public function submitlistbaru($nomorhp=null) {
            $nik=$this->input->post('nik');
            $link=$this->input->post('link');
            $cek = $this->penduduk_model->getdataidnik($nomorhp);
            if ($cek->nik==$nik ){
                //data sudah ada        
            echo "Link Sudah ada";
            redirect(base_url('admin/sudahada/'));  
            }else {
                //insert
            $tambahdata= $this->penduduk_model->tambahlistbaru($nomorhp);
            $tambahkusioner= $this->kuisoner_model->tambahlistadmin();
            }

            redirect("admin/shelter");
         
    }

    public function printdatashelter(){
                    $dataku = array(    'title' => 'Welcome to MyBlog' ,

                            'isi'=>'admin/printdatashelter',

                          'datasemua'=>$this->penduduk_model->datalengkapshelter(),

                          );

            
            $this->load->view('admin/part/content', $dataku);
        }

    public function laporanharian($nik=null){
            $cek=$this->penduduk_model->detail_nik($nik);
            $kesehatan=$this->kesehatan_model->detail($nik);
            if(!empty($nik) and !empty($cek))
            {   
                $valid=$this->form_validation;
                $i=$this->input;
                $nomorhp=$this->session->userdata('nomorhp');
                $valid->set_rules('ksatu','Kuisoner Harus di Isi', 'required', 
                        array(  'required' => '%s harus diisi',
                                ));
                // if ($cek->penduduk=='' || $cek->alamat=='' || $cek->usia=='' || $cek->mulai_isolasi==''|| $cek->status_dlm_keluarga==''|| $cek->jeniskelamin==''|| $cek->kelurahan==''|| $cek->kecamatan==''|| $cek->status==''|| $cek->tempat_isolasi==''|| $cek->pedukuhan=='') 
                //  {redirect(("ganti/data/").$nik);}
                
                if($valid->run())
                {
                    $gejalarendah=$i->post('ksatu')+$i->post('kdua')+$i->post('ktiga')+$i->post('kempat')+$i->post('klima')+$i->post('kenam')+$i->post('ktujuh')+$i->post('kdelapan')+$i->post('ksembilan')+$i->post('ksepuluh');
                        $gejalasedang=$i->post('ksebelas');
                        $gejalatinggi=$i->post('kduabelas');
                        $saturasi=$i->post('ketujuhbelas');
                        $score=0;
                        if ( ($saturasi<=92 && $saturasi>=1)||($gejalatinggi>0 && $gejalasedang>0 && $saturasi==0) || ($gejalatinggi>0 && $gejalasedang>0 && $gejalarendah>0 && $saturasi==0)||($gejalatinggi>0 && $gejalasedang>0 && $saturasi<=92 && $saturasi>=1) || ($gejalatinggi>0 && $gejalasedang>0 && $gejalarendah>0 && $saturasi<=92 && $saturasi>=1))
                        {
                        $score = '3'; 
                        }
                        else if (($saturasi>=93 && $saturasi<95)||($gejalasedang>0 && $saturasi==0)||($gejalarendah>0 && $gejalasedang>0 && $saturasi==0)||($gejalasedang>0 && $saturasi>=93 && $saturasi<95)||($gejalarendah>0 && $gejalasedang>0 && $saturasi>=93 && $saturasi<95))
                        {
                        $score = '2'; 
                        }
                        else if (
                        ($saturasi>=95) || ($gejalarendah>0 && $saturasi==0)||($gejalarendah>0 && $saturasi>=95))
                        { 
                        $score = '1';  
                        } 
                        elseif (($gejalarendah==0 && $gejalatinggi==0 && $gejalasedang==0 && $saturasi>=95) || ($gejalarendah==0 && $gejalatinggi==0 && $gejalasedang==0 && $saturasi==0))
                        {
                        $score = '0';
                        }
                        $kuisoner=$this->kuisoner_model->tanggal($nik);
                        $tanggal_gejala = array(
                                    'nik' => $nik,
                                    'tgl_gejala' =>$i->post('tgl_gejala')
                        );
                        $this->kesehatan_model->update($tanggal_gejala);
                      $data= array(

                                    'nik'                       =>$nik,
                                    'link'                      =>$nomorhp,
                                    'ksatu'                     =>$i->post('ksatu'),
                                    'kdua'                      =>$i->post('kdua'),
                                    'ktiga'                     =>$i->post('ktiga'),
                                    'kempat'                    =>$i->post('kempat'),
                                    'klima'                     =>$i->post('klima'),
                                    'kenam'                     =>$i->post('kenam'),
                                    'ktujuh'                    =>$i->post('ktujuh'),
                                    'kdelapan'                  =>$i->post('kdelapan'),
                                    'ksembilan'                 =>$i->post('ksembilan'),
                                    'ksepuluh'                  =>$i->post('ksepuluh'),
                                    'ksebelas'                  =>$i->post('ksebelas'),
                                    'kduabelas'                 =>$i->post('kduabelas'),
                                    'ktigabelas'                =>$i->post('ktigabelas'),
                                    'kempatbelas'               =>$i->post('kempatbelas'),
                                    'klimabelas'                =>$i->post('klimabelas'),
                                    'kenambelas'                =>$i->post('kenambelas'),
                                    'ktujuhbelas'               =>$i->post('ktujuhbelas'),
                                    'tanggal'                   =>date("y-m-d"),
                                    'time'                      =>date("h:i"),
                                    'score'                     =>$score,
                                    'data'                      =>'terupdate'
                                    
                                    

                      );
                     
                      if(!empty($kuisoner->tanggal==date("Y-m-d")))
                      {

                        $this->kuisoner_model->edit_hari($data);

                                            
                      }
                      else{
                        
                         $lama=array(
                                    'nik'       =>$nik,
                                    'data'      =>''
                        );
                        $this->kuisoner_model->edit_hari($lama);
                        $this->kuisoner_model->tambah($data);
                        
                      }
                      redirect(base_url('admin'));
                 }

                $data = array(  

                                'isi'=>'user/kuisoner',
                                'title'=>'Login - Bantul Tangguh',
                                'nik'   =>$nik,
                                'kesehatan' => $kesehatan

                              );

                

                $this->load->view('user/part_kuis/content', $data);
            }
            else{
                redirect(base_url('admin'));
            }
        }

    public function laporanharianshelter($nik=null){
            $cek=$this->penduduk_model->detail_nik($nik);
            $kesehatan=$this->kesehatan_model->detail($nik);
            if(!empty($nik) and !empty($cek))
            {   
                $valid=$this->form_validation;
                $i=$this->input;
                $nomorhp=$this->session->userdata('nomorhp');
                $valid->set_rules('ksatu','Kuisoner Harus di Isi', 'required', 
                        array(  'required' => '%s harus diisi',
                                ));
                // if ($cek->penduduk=='' || $cek->alamat=='' || $cek->usia=='' || $cek->mulai_isolasi==''|| $cek->status_dlm_keluarga==''|| $cek->jeniskelamin==''|| $cek->kelurahan==''|| $cek->kecamatan==''|| $cek->status==''|| $cek->tempat_isolasi==''|| $cek->pedukuhan=='') 
                //  {redirect(("ganti/data/").$nik);}
                
                if($valid->run())
                {
                    $gejalarendah=$i->post('ksatu')+$i->post('kdua')+$i->post('ktiga')+$i->post('kempat')+$i->post('klima')+$i->post('kenam')+$i->post('ktujuh')+$i->post('kdelapan')+$i->post('ksembilan')+$i->post('ksepuluh');
                        $gejalasedang=$i->post('ksebelas');
                        $gejalatinggi=$i->post('kduabelas');
                        $saturasi=$i->post('ketujuhbelas');
                        $score=0;
                        if ( ($saturasi<=92 && $saturasi>=1)||($gejalatinggi>0 && $gejalasedang>0 && $saturasi==0) || ($gejalatinggi>0 && $gejalasedang>0 && $gejalarendah>0 && $saturasi==0)||($gejalatinggi>0 && $gejalasedang>0 && $saturasi<=92 && $saturasi>=1) || ($gejalatinggi>0 && $gejalasedang>0 && $gejalarendah>0 && $saturasi<=92 && $saturasi>=1))
                        {
                        $score = '3'; 
                        }
                        else if (($saturasi>=93 && $saturasi<95)||($gejalasedang>0 && $saturasi==0)||($gejalarendah>0 && $gejalasedang>0 && $saturasi==0)||($gejalasedang>0 && $saturasi>=93 && $saturasi<95)||($gejalarendah>0 && $gejalasedang>0 && $saturasi>=93 && $saturasi<95))
                        {
                        $score = '2'; 
                        }
                        else if (
                        ($saturasi>=95) || ($gejalarendah>0 && $saturasi==0)||($gejalarendah>0 && $saturasi>=95))
                        { 
                        $score = '1';  
                        } 
                        elseif (($gejalarendah==0 && $gejalatinggi==0 && $gejalasedang==0 && $saturasi>=95) || ($gejalarendah==0 && $gejalatinggi==0 && $gejalasedang==0 && $saturasi==0))
                        {
                        $score = '0';
                        }
                        $kuisoner=$this->kuisoner_model->tanggal($nik);
                        $tanggal_gejala = array(
                                    'nik' => $nik,
                                    'tgl_gejala' =>$i->post('tgl_gejala')
                        );
                        $this->kesehatan_model->update($tanggal_gejala);
                      $data= array(

                                    'nik'                       =>$nik,
                                    'link'                      =>$nomorhp,
                                    'ksatu'                     =>$i->post('ksatu'),
                                    'kdua'                      =>$i->post('kdua'),
                                    'ktiga'                     =>$i->post('ktiga'),
                                    'kempat'                    =>$i->post('kempat'),
                                    'klima'                     =>$i->post('klima'),
                                    'kenam'                     =>$i->post('kenam'),
                                    'ktujuh'                    =>$i->post('ktujuh'),
                                    'kdelapan'                  =>$i->post('kdelapan'),
                                    'ksembilan'                 =>$i->post('ksembilan'),
                                    'ksepuluh'                  =>$i->post('ksepuluh'),
                                    'ksebelas'                  =>$i->post('ksebelas'),
                                    'kduabelas'                 =>$i->post('kduabelas'),
                                    'ktigabelas'                =>$i->post('ktigabelas'),
                                    'kempatbelas'               =>$i->post('kempatbelas'),
                                    'klimabelas'                =>$i->post('klimabelas'),
                                    'kenambelas'                =>$i->post('kenambelas'),
                                    'ktujuhbelas'               =>$i->post('ktujuhbelas'),
                                    'tanggal'                   =>date("y-m-d"),
                                    'time'                      =>date("h:i"),
                                    'score'                     =>$score,
                                    'data'                      =>'terupdate'
                                    
                                    

                      );
                     
                      if(!empty($kuisoner->tanggal==date("Y-m-d")))
                      {

                        $this->kuisoner_model->edit_hari($data);

                                            
                      }
                      else{
                        
                         $lama=array(
                                    'nik'       =>$nik,
                                    'data'      =>''
                        );
                        $this->kuisoner_model->edit_hari($lama);
                        $this->kuisoner_model->tambah($data);
                        
                      }
                      redirect(base_url('admin/shelter'));
                 }

                $data = array(  

                                'isi'=>'user/kuisoner',
                                'title'=>'Login - Bantul Tangguh',
                                'nik'   =>$nik,
                                'kesehatan' => $kesehatan

                              );

                

                $this->load->view('user/part_kuis/content', $data);
            }
            else{
                redirect(base_url('admin/shelter'));
            }
        }

}