<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisoner extends CI_Model{

    private $table = "tb_qusoner";

    public $nik;

    public $id;

    public $ksatu;

    public $kdua;

    public $ktiga;

    public $kempat;

    public $klima;

    public $kenam;

    public $ktujuh;

    public $kdelapan;

    public $ksembilan;

    public $ksepuluh;

    public $ksebelas;

    public $kduabelas;

    public $ktigabelas;

    public $kempatbelas;

    public $kelimabelas;

    public $keenambelas;

    public $ketujuhbelas;

    public $kedelapanbelas;

    public $kesembilanbelas;

    public $keduapuluh;

    public $keduasatu;

    public $keduadua;

    public $keduatiga;

    public $keduaempat;

    public $kedualima;

    public $keduaenam;

    public $keduatujuh;

    public $score;

    public $tanggal;

    public $time;



     function penduduk($nik){

        $tanggalsekarang=date("Y-m-d");

        $this->db->where("nik = '$nik' ");

        $query=$this->db->get("tb_qusoner");

        return $query->row();

    }

     function penduduktanggal($nik){

        $tanggalsekarang=date("Y-m-d");

        $this->db->where("nik = '$nik' ");

        $this->db->where("tanggal = '$tanggalsekarang'");

        $query=$this->db->get("tb_qusoner");

        return $query->row();

    }

     function gantiscore($nik){


        $post = $this->input->post();

        $this->link=$post['link'];

        $this->nik=$post['nik'];

        $this->ksatu = $post["ksatu"];

        $this->kdua = $post["kdua"];

        $this->ktiga = $post["ktiga"];

        $this->kempat = $post["kempat"];

        $this->klima = $post["klima"];

        $this->kenam = $post["kenam"];

        $this->ktujuh = $post["ktujuh"];

        $this->kdelapan = $post["kdelapan"];

        $this->ksembilan = $post["ksembilan"];

        $this->ksepuluh = $post["ksepuluh"];

        $this->ksebelas = $post["ksebelas"];

        $this->kduabelas = $post["kduabelas"];

        $this->ktigabelas=$post['ktigabelas'];

        $this->kempatbelas=$post['kempatbelas'];

        $this->kelimabelas=$post['kelimabelas'];

        $this->keenambelas=$post['keenambelas'];

        $this->ketujuhbelas=$post['ketujuhbelas'];

        $this->kedelapanbelas=$post['kedelapanbelas'];

        $this->kesembilanbelas=$post['kesembilanbelas'];

        $this->keduapuluh=$post['keduapuluh'];

        $this->keduasatu=$post['keduasatu'];

        $this->keduadua=$post['keduadua'];

        $this->keduatiga=$post['keduatiga'];

        $this->keduaempat=$post['keduaempat'];

        $this->kedualima=$post['kedualima'];

        $this->keduaenam=$post['keduaenam'];

        $this->keduatujuh=$post['keduatujuh'];

        $this->score=$post['score'];

        $this->time=$post['time'];

        $this->db->where('tanggal=',$this->tanggal = $post["tanggal"]);

        $this->db->where('id=',$this->id = $post["id"]);

        $this->db->update($this->table,$this); 

    }

    function getdataid($nik){

     return $this->db->get_where("tb_qusoner", ["nik" => $nik])->row();



    }

    function getdataidk($nik){

     return $this->db->get_where("tb_qusoner", ["nik" => $nik])->row();



    }
    function getdataidn($nomorhp){

     return $this->db->get_where("tb_qusoner", ["link" => $nomorhp])->row();



    }
    function tambahlist() {

        $post = $this->input->post();

        $this->id = '';

        $this->link=$post['link'];

        $this->nik = $post['nik'];

        $this->ksatu = '0';

        $this->kdua = '0';

        $this->ktiga = '0';

        $this->kempat = '0';

        $this->klima = '0';

        $this->kenam = '0';

        $this->ktujuh = '0';

        $this->kdelapan = '0';

        $this->ksembilan = '0';

        $this->ksepuluh = '0';

        $this->ksebelas = '0';

        $this->kduabelas = '0';

        $this->ktigabelas = '0';

        $this->kempatbelas = '0';

        $this->kelimabelas = '0';

        $this->keenambelas = '0';

        $this->ketujuhbelas = '0';

        $this->kedelapanbelas = '';

        $this->kesembilanbelas = '';

        $this->keduapuluh = '0';

        $this->keduasatu = '0';

        $this->keduadua = '0';

        $this->keduatiga= '0';

        $this->keduaempat= '';

        $this->kedualima= '0';

        $this->keduaenam= '0';

        $this->keduatujuh= '0';

        $this->tanggal = date("Y-m-d");

        $this->time = date("h:i");

        $this->score = '';

        $this->db->insert($this->table,$this);

    }

    function baru(){

        $post = $this->input->post();

        $this->id = '';

        $this->link=$post['nomorhp'];

        $this->nik = '';

        $this->ksatu = '0';

        $this->kdua = '0';

        $this->ktiga = '0';

        $this->kempat = '0';

        $this->klima = '0';

        $this->kenam = '0';

        $this->ktujuh = '0';

        $this->kdelapan = '0';

        $this->ksembilan = '0';

        $this->ksepuluh = '0';

        $this->ksebelas = '0';

        $this->kduabelas = '0';

        $this->ktigabelas = '0';

        $this->kempatbelas = '0';

        $this->kelimabelas = '0';

        $this->keenambelas = '0';

        $this->ketujuhbelas = '0';

        $this->kedelapanbelas = '';

        $this->kesembilanbelas = '';

        $this->keduapuluh = '0';

        $this->keduasatu = '0';

        $this->keduadua = '0';

        $this->keduatiga= '0';

        $this->keduaempat= '';

        $this->kedualima= '0';

        $this->keduaenam= '0';

        $this->keduatujuh= '0';

        $this->tanggal = date("Y-m-d");

        $this->time = date("h:i");

        $this->score = '';

        $this->db->insert($this->table,$this);

    }

    function updateada(){

        $post = $this->input->post();

        $this->link=$post['link'];

        $this->db->set('link = ',$post['link']);

        $this->db->where('nik=',$this->nik = $post["nik"]);

        $this->db->update($this->table,'link');

    }

    function barunik(){

        $post = $this->input->post();

        $this->link=$post['nomorhp'];

        $this->nik = $post['nik'];

        $this->ksatu = '0';

        $this->kdua = '0';

        $this->ktiga = '0';

        $this->kempat = '0';

        $this->klima = '0';

        $this->kenam = '0';

        $this->ktujuh = '0';

        $this->kdelapan = '0';

        $this->ksembilan = '0';

        $this->ksepuluh = '0';

        $this->ksebelas = '0';

        $this->kduabelas = '0';

        $this->ktigabelas = '0';

        $this->kempatbelas = '0';

        $this->kelimabelas = '0';

        $this->keenambelas = '0';

        $this->ketujuhbelas = '0';

        $this->kedelapanbelas = '';

        $this->kesembilanbelas = '';

        $this->keduapuluh = '0';

        $this->keduasatu = '0';

        $this->keduadua = '0';

        $this->keduatiga= '0';

        $this->keduaempat= '';

        $this->kedualima= '0';

        $this->keduaenam= '0';

        $this->keduatujuh= '0';

        $this->tanggal = date("Y-m-d");

        $this->time = date("h:i");

        $this->score = '';

        $this->db->where('id=',$this->id = $post["idk"]);

        $this->db->update($this->table,$this);

    }

    function updatelanjutan(){

        $post = $this->input->post();

        $this->link=$post['link'];

        $this->nik=$post['nik'];

        $this->ksatu = $post["ksatu"];

        $this->kdua = $post["kdua"];

        $this->ktiga = $post["ktiga"];

        $this->kempat = $post["kempat"];

        $this->klima = $post["klima"];

        $this->kenam = $post["kenam"];

        $this->ktujuh = $post["ktujuh"];

        $this->kdelapan = $post["kdelapan"];

        $this->ksembilan = $post["ksembilan"];

        $this->ksepuluh = $post["ksepuluh"];

        $this->ksebelas = $post["ksebelas"];

        $this->kduabelas = $post["kduabelas"];

        $this->ktigabelas=$post['ktigabelas'];

        $this->kempatbelas=$post['kempatbelas'];

        $this->kelimabelas=$post['kelimabelas'];

        $this->keenambelas=$post['keenambelas'];

        $this->ketujuhbelas=$post['ketujuhbelas'];

        $this->kedelapanbelas=$post['kedelapanbelas'];

        $this->kesembilanbelas=$post['kesembilanbelas'];

        $this->keduapuluh=$post['keduapuluh'];

        $this->keduasatu=$post['keduasatu'];

        $this->keduadua=$post['keduadua'];

        $this->keduatiga=$post['keduatiga'];

        $this->keduaempat=$post['keduaempat'];

        $this->kedualima=$post['kedualima'];

        $this->keduaenam=$post['keduaenam'];

        $this->keduatujuh=$post['keduatujuh'];

        $this->score=$post['score'];

        $this->db->where('tanggal=',$this->tanggal = $post["tanggal"]);

        $this->db->where('id=',$this->id = $post["id"]);

        $this->db->update($this->table,$this);    

    }

    function tambah(){

        $post = $this->input->post();

        $this->id = '';

        $this->link=$post['link'];

        $this->nik = $post["nik"];

        $this->ksatu = $post["ksatu"];

        $this->kdua = $post["kdua"];

        $this->ktiga = $post["ktiga"];

        $this->kempat = $post["kempat"];

        $this->klima = $post["klima"];

        $this->kenam = $post["kenam"];

        $this->ktujuh = $post["ktujuh"];

        $this->kdelapan = $post["kdelapan"];

        $this->ksembilan = $post["ksembilan"];

        $this->ksepuluh = $post["ksepuluh"];

        $this->ksebelas = $post["ksebelas"];

        $this->kduabelas = $post["kduabelas"];
        //$this->score=$post['score'];

        $this->ktigabelas = $post['ktigabelas'];

        $this->kempatbelas = $post['kempatbelas'];

        $this->kelimabelas=$post['kelimabelas'];

        $this->keenambelas=$post['keenambelas'];

        $this->ketujuhbelas=$post['ketujuhbelas'];

        $this->kedelapanbelas=$post['kedelapanbelas'];

        $this->kesembilanbelas=$post['kesembilanbelas'];

        $this->keduapuluh=$post['keduapuluh'];

        $this->keduasatu=$post['keduasatu'];

        $this->keduadua=$post['keduadua'];

        $this->keduatiga=$post['keduatiga'];

        $this->keduaempat=$post['keduaempat'];

        $this->kedualima=$post['kedualima'];

        $this->keduaenam=$post['keduaenam'];

        $this->keduatujuh=$post['keduatujuh'];

        $this->tanggal = $post["tanggal"];

        $this->time = date("h:i");

        //1-6

$gejalarendah=$this->ksatu+$this->kdua+$this->ktiga+$this->kempat+$this->klima+$this->kenam+$this->keduapuluh;
// $gejalarendah=$this->ksatu+$this->kdua+$this->ktiga+$this->kempat+$this->klima+$this->kenam+$this->ksembilan;

        //7-12

$gejalasedang=$this->ktujuh+$this->kdelapan+$this->ksembilan+$this->ksepuluh+$this->ksebelas+$this->kduabelas+$this->ktigabelas+$this->keduasatu+$this->keduadua;
// $gejalatinggi=$this->ktujuh+$this->kdelapan;

        //13-18

$gejalatinggi=$this->kempatbelas+$this->kelimabelas+$this->keenambelas+$this->ketujuhbelas+$this->keduatiga;

        //19

$sembilanbelas=$this->kesembilanbelas;
// $sepuluh=$this->ksepuluh;

        //11
$delapanbelas=$this->kedelapanbelas;
// $sebelas=$this->ksebelas;


// if (
// //gejala rendah + 10 tidak ada karena ODP 1
//     ($gejalarendah>0 && $gejalatinggi>0 && $sepuluh==1 && $sebelas==1 && $duabelas==1) ||
// //gejala rendah + 10 + 11 tidak ada karena ODP 1
//     //gejala rendah   +     10        +   11        +     12
//     ( $gejalarendah>0 && $sepuluh==1 && $sebelas==1 && $duabelas==1) || //ada
//     //gejala rendah    +    10        +     12
//     ( $gejalarendah>0 && $sepuluh==1 && $duabelas==1) || //ada

// //gejala rendah + 11 tidak ada karena ODP 1
    
//     //gejala rendah +    11         +       12
//     ($gejalarendah>0 && $sebelas==1 && $duabelas==1) ||
    
// //gejala rendah + 12 tidak ada karena Resiko
    
//     //gejala tinggi  +    10
//     ($gejalatinggi>0 && $sepuluh==1) || //ada
//     //gejala tinggi  +     10       +     11
//     ($gejalatinggi>0 && $sepuluh==1 && $sebelas==1) || //ada
//     //gejala tinggi  +      10          + 12
//     ($gejalatinggi>0 && $sepuluh==1 && $duabelas==1) ||
//     //gejala tinngi + 10             +      11      +      12
//     ($gejalatinggi>0 && $sepuluh==1 && $sebelas==1 && $duabelas==1 ) || //ada
//     //gejala tinggi  +      11
//     ($gejalatinggi>0 && $sebelas==1) || //ada 
//     //gejala tinggi  +      11      +       12
//     ($gejalatinggi>0 && $sebelas==1 && $duabelas==1) || //ada
//     //gejala tinggi  +      12
//     ($gejalatinggi>0 && $duabelas==1) ||
    

// //10+11 tidak ada karena ODP1

//     //10+11+12
//     ($sepuluh==1 && $sebelas==1 && $duabelas==1) || //ada
//     //10+12
//     ($sepuluh==1 && $duabelas==1) || //ada
//     //11+12
//     ($sebelas==1 && $duabelas==1) //ada

// //12 tidak ada karena Sehat beresiko

// ) {

// $this->score = '6'; 

// }

// else if (

// ($gejalarendah>0 && $sepuluh==1) ||
// ($gejalarendah>0 && $sebelas==1 ) ||
// ($gejalarendah>0 && $sepuluh==1 && $sebelas==1) 

// ){

// //11 sampai 13

// $this->score = '5'; 

// }





// else if (
// ($sepuluh==1 && $sebelas==1) ||
// ($sebelas==1) 


// )

// {

// //kuning

// $this->score = '4';  

// }

 if ( 
        ($gejalatinggi>0) ||
        ($gejalatinggi>0 && $gejalarendah>0) ||
        ($gejalatinggi>0 && $gejalarendah>0 && $gejalasedang>0) ||
        ($gejalatinggi>0 && $gejalasedang>0)
    )

    {

    $this->score = '3'; 

    }
else if (

        ($gejalasedang>0) ||
        ($gejalarendah>0 && $gejalasedang>0) 

    )

    {

    $this->score = '2'; 

    }
else if (

    ($gejalarendah>0)

    )

    { 

    $this->score = '1';  

    }


        $this->db->insert($this->table,$this);

    }   

    function update() {

        $post = $this->input->post();

        $this->nik = $post["nik"];

        $this->link=$post['link'];

        $this->ksatu = $post["ksatu"];

        $this->kdua = $post["kdua"];

        $this->ktiga = $post["ktiga"];

        $this->kempat = $post["kempat"];

        $this->klima = $post["klima"];

        $this->kenam = $post["kenam"];

        $this->ktujuh = $post["ktujuh"];

        $this->kdelapan = $post["kdelapan"];

        $this->ksembilan = $post["ksembilan"];

        $this->ksepuluh = $post["ksepuluh"];

        $this->ksebelas = $post["ksebelas"];

        $this->kduabelas = $post["kduabelas"];

        $this->ktigabelas=$post['ktigabelas'];

        $this->kempatbelas=$post['kempatbelas'];

        $this->kelimabelas=$post['kelimabelas'];

        $this->keenambelas=$post['keenambelas'];

        $this->ketujuhbelas=$post['ketujuhbelas'];

        $this->kedelapanbelas=$post['kedelapanbelas'];

        $this->kesembilanbelas=$post['kesembilanbelas'];

        $this->keduapuluh=$post['keduapuluh'];

        $this->keduasatu=$post['keduasatu'];

        $this->keduadua=$post['keduadua'];

        $this->keduatiga=$post['keduatiga'];

        $this->keduaempat=$post['keduaempat'];

        $this->kedualima=$post['kedualima'];

        $this->keduaenam=$post['keduaenam'];

        $this->keduatujuh=$post['keduatujuh'];

        $this->time = date("h:i");

$gejalarendah=$this->ksatu+$this->kdua+$this->ktiga+$this->kempat+$this->klima+$this->kenam+$this->keduapuluh;
// $gejalarendah=$this->ksatu+$this->kdua+$this->ktiga+$this->kempat+$this->klima+$this->kenam+$this->ksembilan;

        //7-12

$gejalasedang=$this->ktujuh+$this->kdelapan+$this->ksembilan+$this->ksepuluh+$this->ksebelas+$this->kduabelas+$this->ktigabelas+$this->keduasatu+$this->keduadua;
// $gejalatinggi=$this->ktujuh+$this->kdelapan;

        //13-18

$gejalatinggi=$this->kempatbelas+$this->kelimabelas+$this->keenambelas+$this->ketujuhbelas+$this->keduatiga;

        //19

$sembilanbelas=$this->kesembilanbelas;
// $sepuluh=$this->ksepuluh;

        //11
$delapanbelas=$this->kedelapanbelas;



//  if (
//     ($gejalarendah>0 && $gejalatinggi>0 && $sepuluh==1 && $sebelas==1 && $duabelas==1) ||
// //gejala rendah + 10 tidak ada karena ODP 1
    
// //gejala rendah + 10 + 11 tidak ada karena ODP 1
    
//     //gejala rendah   +     10        +   11        +     12
//     ( $gejalarendah>0 && $sepuluh==1 && $sebelas==1 && $duabelas==1) || //ada
//     //gejala rendah    +    10        +     12
//     ( $gejalarendah>0 && $sepuluh==1 && $duabelas==1) || //ada

// //gejala rendah + 11 tidak ada karena ODP 1
    
//     //gejala rendah +    11         +       12
//     ($gejalarendah>0 && $sebelas==1 && $duabelas==1) ||
//     //gejala rendah   +  gejala tinggi   +    10 
//     ($gejalarendah>0 && $gejalatinggi>0 && $sepuluh==1 ) ||
//     //gejala rendah   +  gejala tinggi   +    11 
//     ($gejalarendah>0 && $gejalatinggi>0 && $sebelas==1 ) ||
//     //gejala rendah   +  gejala tinggi   +    10        + 12
//     ($gejalarendah>0 && $gejalatinggi>0 && $sepuluh==1 && $sebelas==1) ||
    
//     //gejala tinggi  +    10
//     ($gejalatinggi>0 && $sepuluh==1) || //ada
//     //gejala tinggi  +     10       +     11
//     ($gejalatinggi>0 && $sepuluh==1 && $sebelas==1) || //ada
//     //gejala tinggi  +      10          + 12
//     ($gejalatinggi>0 && $sepuluh==1 && $duabelas==1) ||
//     //gejala tinngi + 10             +      11      +      12
//     ($gejalatinggi>0 && $sepuluh==1 && $sebelas==1 && $duabelas==1 ) || //ada
//     //gejala tinggi  +      11
//     ($gejalatinggi>0 && $sebelas==1) || //ada 
//     //gejala tinggi  +      11      +       12
//     ($gejalatinggi>0 && $sebelas==1 && $duabelas==1) || //ada

    

// //10+11 tidak ada karena ODP1

//     //10+11+12
//     ($sepuluh==1 && $sebelas==1 && $duabelas==1) || //ada
//     //10+12
//     ($sepuluh==1 && $duabelas==1) || //ada
//     //11+12
//     ($sebelas==1 && $duabelas==1)  //ada

// //12 tidak ada karena Sehat beresiko

// ) {

// $this->score = '6'; 

// }

// else if (
// //gejala rendah+10 
// ($gejalarendah>0 && $sepuluh==1) ||
// //gejala rendah+11 
// ($gejalarendah>0 && $sebelas==1 ) ||
// //gejala rendah+10+11 
// ($gejalarendah>0 && $sepuluh==1 && $sebelas==1) 

// ){

// //11 sampai 13

// $this->score = '5'; 

// }





// else if (
//     //10+11
// ($sepuluh==1 && $sebelas==1) ||
// //11
// ($sebelas==1) 


// )

// {

// //kuning

// $this->score = '4';  

// }
//10
if ( 
        ($gejalatinggi>0) ||
        ($gejalatinggi>0 && $gejalarendah>0) ||
        ($gejalatinggi>0 && $gejalarendah>0 && $gejalasedang>0) ||
        ($gejalatinggi>0 && $gejalasedang>0)
    )

    {

    $this->score = '3'; 

    }
else if (

        ($gejalasedang>0) ||
        ($gejalarendah>0 && $gejalasedang>0) 

    )

    {

    $this->score = '2'; 

    }
    else if (
        
        ($gejalarendah==0 && $gejalatinggi==0 && $gejalasedang==0 && $sembilanbelas==0) ||
        ($gejalarendah>0)
    )

    { 

    $this->score = '1';  

    }
        $this->db->where('tanggal=',$this->tanggal = $post["tanggal"]);

        $this->db->where('id=',$this->id = $post["id"]);

        $this->db->update($this->table,$this);

    }

    function scoreangka() {



    }

    public function deletekuisoner($nik) {
    return $this->db->delete("tb_qusoner",array("nik"=>$nik));
    }

}