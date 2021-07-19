<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Admin extends CI_Controller {

        function __construct(){

        parent::__construct();

        $this->load->model('penduduk_model');
        $this->load->model('kuisoner_model');
        $this->load->model('wilayah_model');

        $this->load->helper('url');

        }
        public function index(){
            $this->simple_login->cek_login_user(); 
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


    public function editdatabaru($nomorhp=null) {
        $nik=$this->input->post('nik');
        $cek = $this->penduduk_model->getdataidnik($nomorhp);
        $link=$this->input->post('link');
        $tambahdata= $this->penduduk_model->updatedataalamatnik();
        redirect('admin/detailpenduduk/'.$nik);
    }

    public function isidata($nik){ 
    $cek = $this->penduduk_model->penduduknik($nik);
        $dataku = array(    'title' => 'Welcome to MyBlog' ,

                        'isi'=>'admin/isidata',

                        //'postku'=> $this->tampilan->postku(),

                        // 'rows'=> $this->rows->sliderku(),

                        // 'logo'=>$this->inti->logo(),

                      //'data'=>$this->modulpenduduk->penduduk($nik),
                      // 'dataku'=>$this->kuisoner->penduduk($nik),
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

//         public function laporanharian($nik=null) {
//     if($this->session->userdata('masuk') != 'true'){
//             redirect('login/index');
//         } else {
//         $nik=$this->input->post('nik');
//         $id=$this->input->post('id');
//         $cek = $this->kuisoner->penduduktanggal($nik);
//         $tanggal=$cek;
//         $i=$this->input;
//         $gejalarendah=$i->post('ksatu')+$i->post('kdua')+$i->post('ktiga')+$i->post('kempat')+$i->post('klima')+$i->post('kenam')+$i->post('ktujuh')+$i->post('kdelapan')+$i->post('ksembilan')+$i->post('ksepuluh');
//                         $gejalasedang=$i->post('ksebelas');
//                         $gejalatinggi=$i->post('kduabelas');
//                         $saturasi=$i->post('ketujuhbelas');
//                         $score=0;
//                         if ( ($saturasi<=92 && $saturasi>=1)||($gejalatinggi>0  && $gejalasedang>0 && $saturasi==0) || ($gejalatinggi>0  && $gejalasedang>0 && $gejalarendah>0 && $saturasi==0)|| $gejalatinggi>0 && $gejalasedang>0 && $saturasi<=92 && $saturasi>=1) || ($gejalatinggi>0 && $gejalasedang>0 && $gejalarendah>0 && $saturasi<=92 && $saturasi>=1))
//                         {
//                         $score = '3'; 
//                         }
//                         else if (($saturasi>=93 && $saturasi<95)||($gejalasedang>0 && $saturasi==0)||($gejalarendah>0 && $gejalasedang>0 && $saturasi==0)||($gejalasedang>0 && $saturasi>=93 && $saturasi<95)||($gejalarendah>0 && $gejalasedang>0 && $saturasi>=93 && $saturasi<95))
//                         {
//                         $score = '2'; 
//                         }
//                         else if (($gejalarendah>0 && $saturasi==0)||($gejalarendah>0 && $saturasi>=95))
//                         { 
//                         $score = '1';  
//                         } 
//                         elseif (($gejalarendah==0 && $gejalatinggi==0 && $gejalasedang==0 && $saturasi>=95) || ($gejalarendah==0 && $gejalatinggi==0 && $gejalasedang==0 && $saturasi==0))
//                         {
//                         $score = '0';
//                         }
//                                   $data= array(

//                                     'nik'                       =>$nik,
//                                     'link'                      =>$i->post('link'),
//                                     'ksatu'                     =>$i->post('ksatu'),
//                                     'kdua'                      =>$i->post('kdua'),
//                                     'ktiga'                     =>$i->post('ktiga'),
//                                     'kempat'                    =>$i->post('kempat'),
//                                     'klima'                     =>$i->post('klima'),
//                                     'kenam'                     =>$i->post('kenam'),
//                                     'ktujuh'                    =>$i->post('ktujuh'),
//                                     'kdelapan'                  =>$i->post('kdelapan'),
//                                     'ksembilan'                 =>$i->post('ksembilan'),
//                                     'ksepuluh'                  =>$i->post('ksepuluh'),
//                                     'ksebelas'                  =>$i->post('ksebelas'),
//                                     'kduabelas'                 =>$i->post('kduabelas'),
//                                     'ktigabelas'                =>$i->post('ktigabelas'),
//                                     'kempatbelas'               =>$i->post('kempatbelas'),
//                                     'kelimabelas'               =>$i->post('kelimabelas'),
//                                     'keenambelas'               =>$i->post('keenambelas'),
//                                     'ketujuhbelas'              =>$i->post('ketujuhbelas'),
//                                     'tanggal'                   =>date("y-m-d"),
//                                     'time'                      =>date("h:i"),
//                                     'score'                     =>$score,
//                                     'update'                        =>'terupdate'
                                    
                                    

//                       );
//         if (!empty($cek)){
//             echo "tanggal sama";
//             $this->kuisoner->update($data);
//             $this->modulpenduduk->tambahhari($nik);

//         }else {
//             echo "tanggal tidak sama";
//             $lama=array(    'nik'       =>$nik,
//                         'update'    =>'lama'
//                     );
//             $this->kuisoner->update($lama);
//             $this->kuisoner->tambah($data);
//             $this->modulpenduduk->updatehari($nik);
//          }
//         echo 'data tidak ada';redirect("admin");
//     }
// }

}