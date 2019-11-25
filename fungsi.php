<?php 
	//koneksi database
$conn = mysqli_connect("localhost","root","","conetour");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) 
	{
		$rows[] = $row;
	}
	return $rows;
}



function tambah($data)
{
	global $conn;
	$username = $data["username"];
	$password = $data["password"];
	$nama = $data["nama"];
	$tempat = $data["tempat"];
	$tgl_lahir = $data["tgl_lahir"];
	$alamat = $data["alamat"];
	$jk = $data["jk"];

 	//query insert
	$query = "INSERT INTO user VALUES ('','$username','$password','$nama',
	'$tempat','$tgl_lahir','$alamat','$jk')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function pesan($data)
{
	global $conn;
	$id_dest = $data["id_dest"];
	$id_user = $data["id_user"];
	$banyak  = $data['banyak'];
	$line = "SELECT harga from destinasi where id_dest='$id_dest'";
	$id_dest=intval($id_dest);
	$id_user=intval($id_user);
	$result = mysqli_query($conn, $line);
	$row = mysqli_fetch_assoc($result);

	$total	= intval($banyak)*intval($row['harga']);
	//echo "  ".$id_user." // ".$id_dest."]]". $row['harga']."*". $banyak. "=".$total."//";
 	//query insert
	$query = "INSERT INTO pemesanan VALUES ('','$id_dest','$id_user','$banyak','$total')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function destinasi($data)
{
	global $conn;
	$nama_dest = $data["nama_dest"];
	$gambar = $data["gambar"];
	$tgl = $data["tgl"];
	$harga = $data["harga"];
	$jum_hari = $data["jum_hari"];
	$info = $data["info"];

 	//query insert
	$query = 
	"INSERT INTO destinasi 
	VALUES 
	('','$nama_dest','$gambar','$tgl','$harga','$jum_hari','$info')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function update($data)
{
	global $conn;
	$id_dest = $data["id_dest"];
	$nama_dest = $data["nama_dest"];
	$gambar = $data["gambar"];
	$tgl = $data["tgl"];
	$harga = $data["harga"];
	$jum_hari = $data["jum_hari"];
	$info = $data["info"];

	//query edit
	$query = "UPDATE destinasi SET
	id_dest='$id_dest',
	nama_dest='$nama_dest',
	gambar='$gambar',
	tgl='$tgl',
	harga='$harga',
	jum_hari='$jum_hari',
	info='$info'
	WHERE id_dest='$id_dest'";

	mysqli_query($conn, $query);
	return 	mysqli_affected_rows($conn);
}

function cari($keyword)
{
	$query_cari = "SELECT * FROM destinasi
				WHERE
				nama_dest LIKE '%$keyword%'";
	return query($query_cari);
}

?>