<?php
class produk{
    var $cn02670;
    var $tbl= "produk";
    public function __construct(){
            $host='192.168.10.253';
            $user='a221802670';
            $pass='a';
            $dbase='a221802670';
        
            try {
                $this->cn02670 = new PDO("mysql:host=$host;dbname=$dbase", $user, $pass);
                // atur mode pemberitahuan kesalahan
                $this->cn02670->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
            catch(PDOException $e)
                {
                echo "Terdapat kegagalan koneksi karena : " . $e->getMessage();
                }
            return $this->cn02670;	
        }		

// Perintah Fungsi Menampilkan data 
    function tampil_produk($id=''){
		
            $sql="select * from $this->tbl order by id_produk"; 
        
        $stmt=$this->cn02670->prepare($sql);
        $stmt->execute();
        return $stmt;
    }
    function fetch($pqry){
        return $pqry->fetch(PDO::FETCH_ASSOC);
    }
// Akhir Perintah Menampilkan data


//membuat fungsi tambah data mahasiswa
function tambah_produk($sv_id,$sv_nmproduk,$sv_hrgbeli,$sv_hrgjl,$sv_jml){	
			
	//buat perintah sql
	$sql="insert into $this->tbl values('$sv_id','$sv_nmproduk','$sv_hrgbeli','$sv_hrgjl','$sv_jml')";

	//simpan ke database
	$stmt=$this->cn02670->prepare($sql);
	$stmt->execute();
	
	//tutup koneksi
	$this->cn02670 = null;
	
}



//membuat fungsi hapus data mahasiswa
function hapus_produk($id){
	//buat perintah sql
	$sql="delete from $this->tbl where id_produk='$id'";

	//hapus data mahasiswa tsb
	$stmt=$this->cn02670->prepare($sql);
	$stmt->execute();

	    //kembali ke form
	    header ("location: updateProduk.php");
	}

//membuat Fungsi edit 
public function edit_produk($qid){
      
       $sql = "SELECT * FROM $this->tbl WHERE id_produk = '$qid' ";
        $stmt=$this->cn02670->prepare($sql);
        $stmt->execute();
      
        while($data=$stmt->fetch(PDO::FETCH_ASSOC)){
        $hasil[] = $data;
        }
      
      return $hasil;
    }
    
    public function update_produk($up_id,$up_nmproduk,$up_hrgbeli,$up_hrgjl,$up_jml){
      
      $sql="UPDATE $this->tbl SET id_produk='$up_id', nmproduk='$up_nmproduk', hrgbeli='$up_hrgbeli', hrgjual='$up_hrgjl', jmlproduk='$up_jml' WHERE id_produk='$up_id' ";
      $stmt=$this->cn02670->prepare($sql);
      $stmt->execute();
      
     }
      
}

?>