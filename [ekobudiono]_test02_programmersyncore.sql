-- 1. Menampilkan data member yang berada pada provinsi sumatera utara dan dalam satu kabupaten
SELECT *
FROM mst_member m
JOIN mst_provinsi p ON p.id_provinsi = m.id_provinsi
GROUP BY m.id_kabupaten;

-- 2. Menampilkan data provinsi yang tidak ada dalam data member
SELECT *
FROM mst_provinsi
WHERE id_provinsi NOT IN (SELECT id_provinsi FROM mst_member);


-- 3. Menampilkan data kabupaten yang tidak ada dalam data member
SELECT *
FROM mst_kabupaten
WHERE id_kabupaten NOT IN (SELECT id_kabupaten FROM mst_member);


-- 4. Menampilkan data kecamatan yang tidak ada dalam data member
SELECT *
FROM mst_kecamatan
WHERE id_kecamatan NOT IN (SELECT id_kecamatan FROM mst_member);


-- 5. Menampilkan nama member yang terdapat di Kab. Simalungun
SELECT nama
FROM mst_member m 
JOIN mst_kabupaten k ON m.id_kabupaten = k. id_kabupaten
WHERE k.nama_kabupaten = 'KAB.SIMALUNGUN';

-- 6. Menampilkan jumlah data instansi pada Kab. Bireuen dan Kab. Bener Meriah
SELECT COUNT(nama_kabupaten)
FROM mst_kabupaten
WHERE nama_kabupaten IN ('KAB.BIREUN', 'KAB.BENER MERIAH');


-- 7. Menampilkan data member yang berawalan huruf “M”
SELECT * 
FROM mst_member
WHERE nama LIKE 'M%';

-- 8. Menampilkan alamat email yang mempunyai karakter “no” dan terdapat di provinsi Sumatera Utara
SELECT email
FROM mst_member m 
JOIN mst_provinsi p ON m.id_provinsi = p.id_provinsi
WHERE p.nama_provinsi = 'SUMATERA UTARA'
AND m.email LIKE '%no%';


-- 9. Menampilkan data member yang mempunyai kode instansi “2004”
SELECT *
FROM mst_member
WHERE kode_instansi LIKE '%2004%';

-- 10. Menampilkan data member yang mempunyai karakter kode kecamatan “.08.”
SELECT *
FROM mst_member m 
JOIN mst_kecamatan k ON m.id_kecamatan = k.id_kecamatan
WHERE k.kode_kecamatan LIKE '%.08.%';
