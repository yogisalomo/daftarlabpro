<?php

class DaftarLabpro extends Eloquent {
	protected $fillable = array(
			'email',
            'nama_lengkap',
            'nim',
            'kota_lahir',
            'provinsi_lahir',
            'negara_lahir',
            'tanggallahir',
            'nomor_hp',
            'nilai_pti',
            'nilai_alstrukdat',
            'nilai_oop',
            'apa_kasus',
            'penjelasan_kasus',
            'skill_programming',
            'organisasi',
            'tentang_dosen',
            'punya_barang_1',
            'punya_barang_2',
            'punya_barang_3',
            'punya_barang_4',
            'punya_barang_5',
            'punya_barang_6',
            'punya_barang_7',
            'punya_barang_8',
            'punya_barang_9',
            'punya_barang_10',
            'punya_barang_11',
            'punya_barang_12',
            'punya_barang_13');
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pendaftar_labpro';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	/*public function getAuthIdentifier()
	{
		return $this->getKey();
	}*/

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	/*public function getAuthPassword()
	{
		return $this->password;
	} */

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function setTanggallahirAttribute($tanggallahir) {
	    if ($tanggallahir) {
	        $this->attributes['tanggallahir'] = date('Y-m-d',(strtotime($tanggallahir)));
	    } else {
	        $this->attributes['tanggallahir'] = '';
	    }
	}

	public function getTanggallahirAttribute() {
	    $tmpdate = $this->attributes['tanggallahir'];
	    if ($tmpdate == "0000-00-00" || $tmpdate == "") {
	        return "";
	    } else {
	        return date('m/d/Y',strtotime($tmpdate));
	    }
	}
}