<?php

class Database
{

	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $db = "apotek";
	protected $koneksi;

	public function __construct()
	{
		$this->koneksi = new mysqli($this->host, $this->user, $this->password, $this->db);
		if ($this->koneksi == false) die("Tidak dapat menyambung ke database" . $this->koneksi->connect_error());

		return $this->koneksi;
	}

	// obat 

	public function tampil_data()
	{
		$data = mysqli_query($this->koneksi, "select * from obat");
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
	}

	public function tambah_data($namaObat, $jenisObat, $deskripsi)
	{
		mysqli_query($this->koneksi, "insert into obat values ('','$namaObat','$jenisObat','$deskripsi')");
	}

	function get_by_id($kodeObat)
	{
		$query = mysqli_query($this->koneksi, "select * from obat where kodeObat='$kodeObat'");
		return $query->fetch_array();
	}

	function update_data($namaObat, $jenisObat, $deskripsi, $kodeObat)
	{
		$query = mysqli_query($this->koneksi, "update obat set namaObat='$namaObat',jenisObat='$jenisObat',deskripsi='$deskripsi' where kodeObat='$kodeObat'");
	}

	function delete_data($kodeObat)
	{
		$query = mysqli_query($this->koneksi, "delete from obat where kodeObat='$kodeObat'");
	}


	//  data pembeli

	public function tampil_data_pembeli()
	{
		$data = mysqli_query($this->koneksi, "select * from pembeli");
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
	}

	public function tambah_data_pembeli($nama, $alamat, $jumlah_beli)
	{
		mysqli_query($this->koneksi, "insert into pembeli values ('','$nama','$alamat','$jumlah_beli')");
	}

	function get_by_id_pembeli($id)
	{
		$query = mysqli_query($this->koneksi, "select * from pembeli where id='$id'");
		return $query->fetch_array();
	}

	function update_data_pembeli($nama, $alamat, $jumlah_beli, $id)
	{
		$query = mysqli_query($this->koneksi, "update pembeli set nama='$nama',alamat='$alamat',jumlah_beli='$jumlah_beli' where id='$id'");
	}

	function delete_data_pembeli($id)
	{
		$query = mysqli_query($this->koneksi, "delete from pembeli where id='$id'");
	}

	// data transaksi

	public function tampil_data_transaksi()
	{
		$data = mysqli_query($this->koneksi, "select * from transaksi");
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
	}

	public function tambah_data_transaksi($namaPembeli, $namaObat, $jenisObat, $hargaObat, $jumlahBeli, $diskon, $totalBayar)
	{
		mysqli_query($this->koneksi, "insert into transaksi values ('','$namaPembeli','$namaObat','$jenisObat','$hargaObat','$jumlahBeli','$diskon','$totalBayar')");
	}

	function get_by_id_transaksi($id)
	{
		$query = mysqli_query($this->koneksi, "select * from transaksi where id_transaksi='$id'");
		return $query->fetch_array();
	}

	function update_data_transaksi($namaPembeli, $namaObat, $jenisObat, $hargaObat, $jumlahBeli, $diskon, $totalBayar, $id)
	{
		$query = mysqli_query($this->koneksi, "update transaksi set nama_pembeli='$namaPembeli',nama_obat='$namaObat',jenis_obat='$jenisObat',harga_obat='$hargaObat',jumlah_beli='$jumlahBeli',diskon='$diskon',total_bayar='$totalBayar' where id_transaksi='$id'");
	}

	function delete_data_transaksi($id)
	{
		$query = mysqli_query($this->koneksi, "delete from transaksi where id_transaksi='$id'");
	}

	// data transaksi supplier

	public function tampil_data_transaksi_supplier()
	{
		$data = mysqli_query($this->koneksi, "select * from transaksisupplier");
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
	}

	public function tambah_data_transaksi_supplier($tanggalTransaksi, $namaSupplier, $namaBarang, $jumlahBarang, $hargaBarang, $totalHarga, $kategoriSupplier)
	{
		mysqli_query($this->koneksi, "insert into transaksisupplier values ('','$tanggalTransaksi','$namaSupplier','$namaBarang','$jumlahBarang','$hargaBarang','$totalHarga','$kategoriSupplier')");
	}

	function get_id_transaksi_supplier($id)
	{
		$query = mysqli_query($this->koneksi, "select * from transaksisupplier where kodeNota='$id'");
		return $query->fetch_array();
	}

	function update_transaksi_supplier($tanggalTransaksi, $namaSupplier, $namaBarang, $jumlahBarang, $hargaBarang, $totalHarga, $kategoriSupplier, $id)
	{
		$query = mysqli_query($this->koneksi, "update transaksisupplier set tanggalTransaksi='$tanggalTransaksi',namaSupplier='$namaSupplier',namaBarang='$namaBarang',jumlahBarang='$jumlahBarang',hargaBarang='$hargaBarang',totalHarga='$totalHarga', kategoriSupplier='$kategoriSupplier' where kodeNota='$id'");
	}

	function delete_data_transaksi_supplier($id)
	{
		$query = mysqli_query($this->koneksi, "delete from transaksisupplier where kodeNota='$id'");
	}

	//  data dokter comandee

	public function tampil_data_doktercom()
	{
		$data = mysqli_query($this->koneksi, "select * from doktercom");
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
	}

	public function tambah_data_doktercommand($namaDokter, $alamatDokter, $namaPasien)
	{
		mysqli_query($this->koneksi, "insert into doktercom values ('','$namaDokter','$alamatDokter','$namaPasien')");
	}

	function get_by_id_doktercommand($id)
	{
		$query = mysqli_query($this->koneksi, "select * from doktercom where idDokter='$id'");
		return $query->fetch_array();
	}

	function update_data_doktercommand($namaDokter, $alamatDokter, $namaPasien, $id)
	{
		$query = mysqli_query($this->koneksi, "update doktercom set namaDokter='$namaDokter',alamatDokter='$alamatDokter',namaPasien='$namaPasien' where idDokter='$id'");
	}

	function delete_data_doktercommand($id)
	{
		$query = mysqli_query($this->koneksi, "delete from doktercom where idDokter='$id'");
	}

	// data supplier

	public function tampil_data_supplier()
	{
		$data = mysqli_query($this->koneksi, "select * from supplier");
		while ($row = mysqli_fetch_array($data)) {
			$hasil[] = $row;
		}
		return $hasil;
	}

	public function tambah_data_supplier($namaSupplier, $alamatSupplier)
	{
		mysqli_query($this->koneksi, "insert into supplier values ('','$namaSupplier','$alamatSupplier')");
	}

	function get_by_id_supplier($id)
	{
		$query = mysqli_query($this->koneksi, "select * from supplier where kodeSupplier='$id'");
		return $query->fetch_array();
	}

	function update_data_supplier($namaSupplier, $alamatSupplier, $id)
	{
		$query = mysqli_query($this->koneksi, "update supplier set namaSupplier='$namaSupplier',alamatSupplier='$alamatSupplier' where kodeSupplier='$id'");
	}

	function delete_datasupplier($id)
	{
		$query = mysqli_query($this->koneksi, "delete from supplier where kodeSupplier='$id'");
	}
}
