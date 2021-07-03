$( document ).ready(function() {

  var path=document.getElementById("path").value;
var id_provinces = ''; 
load()
  function load(){
    id_provinces='34';
    $.ajax({
               

               method: "POST",

               url: path+"/wilayah/",

               data: {jenis:'kota',id_provinces:id_provinces},

               success: function(data){

                  $("select#kota").html(data);                                                       

                 

                  getAjaxKota();                                                        

               }

            });
  }
  $("#provinsi").change(function(){

        $("img#load1").show();

        id_provinces = $(this).val(); 

        $.ajax({

             method: "POST",

           url: path+"/wilayah/",

           data: {jenis:'kota',id_provinces:id_provinces},

           success: function(data){

              $("select#kota").html(data);                                                       

              $("img#load1").hide();

              getAjaxKota();                                                        

           }

        });                    

     });  



  $("#kota").change(getAjaxKota);

     function getAjaxKota(){

          $("img#load2").show();

          var id_regencies = $("#kota").val();

          $.ajax({

             method: "POST",

           url: path+"/wilayah/",

             data: {jenis:'kecamatan',id_regencies:id_regencies},

             success: function(data){

                $("select#kecamatan").html(data);                              

                $("img#load2").hide(); 

               getAjaxKecamatan();                                                    

             }

          });

     }



     $("#kecamatan").change(getAjaxKecamatan);

     function getAjaxKecamatan(){

          $("img#load3").show();

          var id_district = $("#kecamatan").val();

          $.ajax({

             method: "POST",

           url: path+"/wilayah/",

             data: {jenis:'kelurahan', id_district:id_district },

             success: function(data){

                $("select#kelurahan").html(data);                              

                $("img#load3").hide();                                                 

             }

          });

     }

     $("#kelurahan").change(getAjaxKelurahan);

     function getAjaxKelurahan(){

          $("img#load3").show();

          var id_villages = $("#kelurahan").val();

          $.ajax({

             method: "POST",

           url: path+"/wilayah/",

             data: {jenis:'pedukuhan', id_villages:id_villages },

             success: function(data){

                $("select#pedukuhan").html(data);                              

                $("img#load3").hide();                                                 

             }

          });

     }

});