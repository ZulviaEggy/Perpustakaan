<?php

use Illuminate\Database\Seeder;

class SubKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [1,'Publikasi umum dan Informasi umum dan komputer '],
            [1,'Bibiliografi'],
            [1,'Perpustakaan dan informasi'],
            [1,'Ensiklopedia'],
            [1,'Majalah dan jurnal'],
            [1,'Asosiasi, organisasi dan museum'],
            [1,'Media massa, jurnalisme dan publikasi'],
            [1,'kutipan'],
            [1,'Manuskrip dan buku langka'],
            [2,'Filsafat dan psikologi'],
            [2,'Metafisika'],
            [2,'Epistimologi'],
            [2,'Pemikiran filosofis'],
            [2,'Psikologis'],
            [2,'Filosofis logis'],
            [2,'Etik'],
            [2,'Filosofi kuno, zaman pertengahan, dan filosofi ketimuran'],
            [2,'Filosofi barat modern'],
            [3,'Agama'],
            [4,'Ilmu sosial, sosiologi dan antropologi'],
            [4,'Statistik'],
            [4,'Ilmu politik'],
            [4,'Ekonomi'],
            [4,'Hukum'],
            [4,'Administrasi publik dan ilmnu kemiliteran'],
            [4,'Masalah dan layanan sosial'],
            [4,'Pendidikan'],
            [4,'Perdagangan, komunikasi dan transportasi'],
            [4,'Norma, etika dan traisi'],
            [5,'Bahasa'],
            [6,'Sains'],
            [6,'Matematika'],
            [6,'Astronomi'],
            [6,'Fisika'],
            [6,'Kimia'],
            [6,'Ilmu kebumian dan geologi'],
            [6,'Fosil dan kehidupan prasejarah'],
            [6,'Biologi'],
            [6,'Tanaman'],
            [6,'Zoologi'],
            [7,'Teknologi'],
            [7,'Kesehatan dan Obat-obatan'],
            [7,'Teknik'],
            [7,'Pertanian'],
            [7,'Management dan hubungan denga publik'],
            [7,'Teknik Kimia'],
            [7,'Manufactur'],
            [7,'Manufactur untuk keperluan khusus'],
            [7,'Konstruksi'],
            [8,'Kesenian dan rekreasi'],
            [8,'Perencanaan dan arsitektur lengkap'],
            [8,'Arsitektur'],
            [8,'Patung, keramik dan seni metal'],
            [8,'Seni grafis dan dekorasi'],
            [8,'Lukisan'],
            [8,'Percetakan'],
            [8,'Fotografi, film dan video'],
            [8,'Musik'],
            [8,'Olahraga, permainan dan hiburan'],
            [9,'Literatur, sastra, retorika dan kritik'],
            [10,'Sejarah'],
            [10,'Geograf dan perjalanan'],
            [10,'Biografi  dan asal usul'],
            [10,'Sejarah dunia lama'],
            [10,'Asal-usul negara'],
           
        ];
        for ($i = 0; $i < count($data); $i++) {
            $kid = $data[$i][0];
            $subkategori = $data[$i][1];

        DB::table('sub_kategori_buku')->insert([
            'kategori_buku_id' => $kid,
            'nama_sub_kategori' =>  $subkategori,
          
            ]);
        }
    }
}
