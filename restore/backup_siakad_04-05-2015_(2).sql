

#
# TABLE STRUCTURE FOR: agama
#

DROP TABLE IF EXISTS agama;

CREATE TABLE `agama` (
  `id_agama` int(1) NOT NULL AUTO_INCREMENT,
  `agama` varchar(20) NOT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO agama (`id_agama`, `agama`) VALUES ('1', 'Islam');
INSERT INTO agama (`id_agama`, `agama`) VALUES ('2', 'Kristen');
INSERT INTO agama (`id_agama`, `agama`) VALUES ('3', 'Katholik');
INSERT INTO agama (`id_agama`, `agama`) VALUES ('4', 'Hindu');
INSERT INTO agama (`id_agama`, `agama`) VALUES ('5', 'Budha');
INSERT INTO agama (`id_agama`, `agama`) VALUES ('7', 'Kong Hu Cu');


#
# TABLE STRUCTURE FOR: aspek
#

DROP TABLE IF EXISTS aspek;

CREATE TABLE `aspek` (
  `id_aspek` int(1) NOT NULL AUTO_INCREMENT,
  `aspek` varchar(15) NOT NULL,
  `kkm` double(3,2) NOT NULL,
  PRIMARY KEY (`id_aspek`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO aspek (`id_aspek`, `aspek`, `kkm`) VALUES ('1', 'pengetahuan', '2.66');
INSERT INTO aspek (`id_aspek`, `aspek`, `kkm`) VALUES ('2', 'ketrampilan', '2.66');
INSERT INTO aspek (`id_aspek`, `aspek`, `kkm`) VALUES ('3', 'sikap', '2.66');


#
# TABLE STRUCTURE FOR: bagi_kelas
#

DROP TABLE IF EXISTS bagi_kelas;

CREATE TABLE `bagi_kelas` (
  `id_bagikelas` int(10) NOT NULL AUTO_INCREMENT,
  `NIS` int(6) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  PRIMARY KEY (`id_bagikelas`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('1', '5680', '1', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('2', '5681', '1', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('3', '5682', '6', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('4', '5683', '1', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('5', '5686', '5', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('6', '5678', '2', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('7', '5684', '3', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('8', '5685', '3', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('9', '5687', '3', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('11', '5689', '3', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('12', '5691', '1', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('13', '5690', '1', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('14', '5692', '5', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('15', '5693', '5', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('16', '5695', '5', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('17', '5696', '5', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('18', '5694', '6', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('19', '5697', '3', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('20', '5698', '6', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('21', '5699', '6', '2');
INSERT INTO bagi_kelas (`id_bagikelas`, `NIS`, `id_kelas`, `id_thnajaran`) VALUES ('22', '5700', '6', '2');


#
# TABLE STRUCTURE FOR: bobot
#

DROP TABLE IF EXISTS bobot;

CREATE TABLE `bobot` (
  `id_bobot` int(3) NOT NULL AUTO_INCREMENT,
  `id_aspek` int(1) NOT NULL,
  `nama_bobot` varchar(20) NOT NULL,
  `bobot` double(1,0) NOT NULL,
  PRIMARY KEY (`id_bobot`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('1', '1', 'NH', '3');
INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('2', '1', 'UTS', '1');
INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('3', '1', 'UAS', '1');
INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('4', '2', 'UJK', '2');
INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('5', '2', 'PROYEK', '1');
INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('6', '2', 'PORTOFOLIO', '1');
INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('7', '3', 'OBS', '2');
INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('8', '3', 'P.DIRI', '1');
INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('9', '3', 'P.TEMAN', '1');
INSERT INTO bobot (`id_bobot`, `id_aspek`, `nama_bobot`, `bobot`) VALUES ('10', '3', 'JURNAL', '1');


#
# TABLE STRUCTURE FOR: catatan_aspek
#

DROP TABLE IF EXISTS catatan_aspek;

CREATE TABLE `catatan_aspek` (
  `id_catatanaspek` int(6) NOT NULL AUTO_INCREMENT,
  `id_aspek` int(1) NOT NULL,
  `id_mengajar` int(4) NOT NULL,
  `nis` int(6) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `catatan` varchar(160) NOT NULL,
  PRIMARY KEY (`id_catatanaspek`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=latin1;

INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('1', '1', '7', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('2', '1', '7', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('3', '1', '7', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('4', '1', '7', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('5', '1', '7', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('6', '2', '7', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('7', '2', '7', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('8', '2', '7', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('9', '2', '7', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('10', '2', '7', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('11', '1', '4', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('12', '1', '4', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('13', '1', '4', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('14', '1', '4', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('15', '1', '4', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('16', '2', '4', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('17', '2', '4', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('18', '2', '4', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('19', '2', '4', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('20', '2', '4', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik.  Dapat menerapkan materi  dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('21', '3', '4', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('22', '3', '4', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('23', '3', '4', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('24', '3', '4', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('25', '3', '4', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan  dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('26', '1', '1', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('27', '1', '1', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('28', '1', '1', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('29', '1', '1', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('30', '1', '1', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('31', '2', '1', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('32', '2', '1', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('33', '2', '1', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('34', '2', '1', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('35', '2', '1', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('36', '3', '1', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('37', '3', '1', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('38', '3', '1', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('39', '3', '1', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('40', '3', '1', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('41', '1', '2', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('42', '1', '2', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('43', '1', '2', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('44', '1', '2', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('45', '1', '2', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('46', '2', '2', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('47', '2', '2', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('48', '2', '2', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('49', '2', '2', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('50', '2', '2', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('51', '3', '2', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('52', '3', '2', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('53', '3', '2', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('54', '3', '2', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('55', '3', '2', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('56', '1', '3', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('57', '1', '3', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('58', '1', '3', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('59', '1', '3', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('60', '1', '3', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('61', '2', '3', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('62', '2', '3', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('63', '2', '3', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('64', '2', '3', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('65', '2', '3', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('66', '3', '3', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('67', '3', '3', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('68', '3', '3', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('69', '3', '3', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('70', '3', '3', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('71', '1', '6', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('72', '1', '6', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('73', '1', '6', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('74', '1', '6', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('75', '1', '6', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('76', '2', '6', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('77', '2', '6', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('78', '2', '6', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('79', '2', '6', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('80', '2', '6', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('81', '3', '6', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('82', '3', '6', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('83', '3', '6', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('84', '3', '6', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('85', '3', '6', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('86', '3', '7', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('87', '3', '7', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('88', '3', '7', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('89', '3', '7', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('90', '3', '7', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('91', '1', '5', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('92', '1', '5', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('93', '1', '5', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('94', '1', '5', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('95', '1', '5', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('96', '2', '5', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('97', '2', '5', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('98', '2', '5', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('99', '2', '5', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('100', '2', '5', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('101', '3', '5', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('102', '3', '5', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('103', '3', '5', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('104', '3', '5', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('105', '3', '5', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('106', '1', '8', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('107', '1', '8', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('108', '1', '8', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('109', '1', '8', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('110', '1', '8', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('111', '2', '8', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('112', '2', '8', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('113', '2', '8', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('114', '2', '8', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('115', '2', '8', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('116', '3', '8', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('117', '3', '8', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('118', '3', '8', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('119', '3', '8', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('120', '3', '8', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('121', '1', '9', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('122', '1', '9', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('123', '1', '9', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('124', '1', '9', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('125', '1', '9', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('126', '2', '9', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('127', '2', '9', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('128', '2', '9', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('129', '2', '9', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('130', '2', '9', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('131', '3', '9', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('132', '3', '9', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('133', '3', '9', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('134', '3', '9', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('135', '3', '9', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('136', '1', '10', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('137', '1', '10', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('138', '1', '10', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('139', '1', '10', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('140', '1', '10', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1 dan mewakili Kab.Bantul di D.I.Y');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('141', '2', '10', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('142', '2', '10', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('143', '2', '10', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('144', '2', '10', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('145', '2', '10', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan portofolio yang berkualitas baik dan jelas');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('146', '3', '10', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('147', '3', '10', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('148', '3', '10', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('149', '3', '10', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('150', '3', '10', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok dalam mengerjakan tugas dari guru.');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('151', '1', '16', '5680', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('152', '1', '16', '5681', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('153', '1', '16', '5690', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('154', '1', '16', '5683', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('155', '1', '16', '5691', '1', 'menunjukkan kemajuan yang baik di bidang pengetahuan. Mewakili sekolah dalam lks tingkat kabupaten dan berhasil menjad juara 1');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('156', '2', '16', '5680', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan ');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('157', '2', '16', '5681', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan ');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('158', '2', '16', '5690', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan ');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('159', '2', '16', '5683', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan ');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('160', '2', '16', '5691', '1', 'Dalam praktikum menunjukkan kemampuan yang baik. Dapat menerapkan materi dari guru di dalam praktikum. mengumpulkan ');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('161', '3', '16', '5680', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('162', '3', '16', '5681', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('163', '3', '16', '5690', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('164', '3', '16', '5683', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok');
INSERT INTO catatan_aspek (`id_catatanaspek`, `id_aspek`, `id_mengajar`, `nis`, `semester`, `catatan`) VALUES ('165', '3', '16', '5691', '1', 'Menunjukkan sikap spiritual yang baik. dapat berinteraksi dengan teman dan guru dengan sopan dan dapat memimpin kelompok');


#
# TABLE STRUCTURE FOR: catatan_eskul
#

DROP TABLE IF EXISTS catatan_eskul;

CREATE TABLE `catatan_eskul` (
  `id_catatan` int(8) NOT NULL AUTO_INCREMENT,
  `id_siswaeskul` int(6) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `nilai` enum('A','B','C') NOT NULL,
  PRIMARY KEY (`id_catatan`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('27', '6', '1', 'A');
INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('28', '7', '1', 'A');
INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('29', '8', '1', 'B');
INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('30', '16', '1', 'C');
INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('31', '9', '1', 'A');
INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('32', '10', '1', 'B');
INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('33', '11', '1', 'A');
INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('34', '12', '1', 'A');
INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('35', '13', '1', 'A');
INSERT INTO catatan_eskul (`id_catatan`, `id_siswaeskul`, `semester`, `nilai`) VALUES ('36', '14', '1', 'A');


#
# TABLE STRUCTURE FOR: eskul
#

DROP TABLE IF EXISTS eskul;

CREATE TABLE `eskul` (
  `id_eskul` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`id_eskul`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO eskul (`id_eskul`, `nama`, `NIP`, `aktif`) VALUES ('1', 'Seni Tari', '196303041984122003', 'Y');
INSERT INTO eskul (`id_eskul`, `nama`, `NIP`, `aktif`) VALUES ('2', 'Basket', '195704031984011001', 'Y');
INSERT INTO eskul (`id_eskul`, `nama`, `NIP`, `aktif`) VALUES ('3', 'Pramuka', 'EKSTRA1', 'Y');


#
# TABLE STRUCTURE FOR: guru
#

DROP TABLE IF EXISTS guru;

CREATE TABLE `guru` (
  `NIP` varchar(18) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `kota_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_agama` int(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `pend_terakhir` enum('SD','SMP','SMA','SMK','D3','S1','S2','S3') NOT NULL,
  `riwayat_pend` text,
  `jabatan` enum('Kepsek','Guru','TU') NOT NULL,
  `foto` varchar(30) DEFAULT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('1', 'Kamdiyo', 'L', 'Kulon Progo', '1962-03-06', '2', 'Kulon Progo', '081999999999', 'D3', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195208201984012001', 'Dra. Sri Sudarmi', 'P', 'Bantul', '1952-08-20', '1', 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195308011982031017', 'Rusgiyanto, S.Pd', 'L', 'Solo', '1953-08-01', '3', 'Jogja', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195607151977112002', 'Maria Lucia Dri Handayani, S.P ', 'P', 'Sleman', '1956-07-15', '3', 'Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195704031984011001', 'Slamet Raharjo, B.A', 'L', 'Klaten', '1957-04-03', '1', 'Jogja', '081999999999', 'D3', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('19571224198031002', 'Warjiyo, S.Pd', 'L', 'Sleman', '1957-12-24', '1', 'Godean,Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195808011989032003', 'Partini, S.Pd', 'P', 'Bantul', '1961-03-01', '1', 'Sewon, Bantul', '08909999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195902091984122001', 'Siti Dayu Utami, S.Pd', 'P', 'Yogyakarta', '1959-02-09', '1', 'Kotagede, Yogyakarta', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195904131981111002', 'Sukarja B', 'L', 'Sleman', '1959-04-13', '1', 'Sleman', '081999999999', 'SMA', '', 'TU', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195908111984032005', 'Sri Sartiningsih, S.Pd', 'P', 'Wonosobo', '1959-08-11', '1', 'Jogja', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195909151979031001', 'Drs. Sri Indra Dwiyatno, M.Pd', 'L', 'Bantu', '1959-09-15', '1', 'Bantul', '0909090909', 'S2', '', 'Kepsek', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('195912101986031015', 'Raden Hertoto Krishandoyo', 'L', 'Yogyakarta', '1959-12-01', '1', 'Yogyakarta', '1234567890', 'SMA', '', 'TU', 'amcc.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196011201984032004', 'Pudji Rahayu, S.Pd', 'P', 'Ponorogo', '1960-11-20', '1', 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196201151981032001', 'Surti Irianingsih', 'P', 'Yogyakarta', '1962-01-15', '1', 'Yogyakarta', '081999999999', 'SMA', '', 'TU', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196204181994122002', 'L.Prikasih Rita Setiati, S.Pd', 'P', 'Yogyakarta', '1962-04-18', '3', 'Yogyakarta', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196206171986032005', 'Endang Yuni Kusmarwati, SE', 'P', 'Yogyakarta', '1962-06-17', '1', 'Yogyakarta', '081999999999', 'S1', '', 'TU', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196303041984122003', 'F. Romana Sumarjiati, S.Pd', 'P', 'Sleman', '1963-03-04', '3', 'Mejing Kulon, Ambarketawang, Gamping, Sleman', '1234567', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196401091986022001', 'Eka Triwahmiskiatun', 'P', 'Yogyakarta', '1964-01-09', '1', 'Yogyakarta', '081999999999', 'SMA', '', 'TU', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196410181986031010', 'Suhariya, S.Pd', 'L', 'Bantul', '1964-11-18', '1', 'Soboman, Ngestiharjo,Kasihan,Bantul', '434343434', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196411061986012001', 'Sriyanti, S.Pd', 'P', 'Bantul', '1964-11-06', '1', 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196501211995122002', 'Dra. Riyanti Puji Nurweni', 'P', 'Sleman', '1965-01-21', '1', 'Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196512021993022001', 'Sri Zaniyanti, S.Ag', 'P', 'Bantul', '1965-12-02', '1', 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196702021989022001', 'Suhatni, S.Pd', 'P', 'Bantul', '1967-02-02', '1', 'Perum Jati Mas', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196809102007012015', 'Kembariyana, S.Pd', 'P', 'Sleman', '1968-09-10', '1', 'Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('196903151995122006', 'Muslimah, S.Pd', 'P', 'Prembun', '1974-06-11', '1', 'Sewon, Bantul', '87878787878', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('197010251997022003', 'Maria Susanti, S.Pd', 'P', 'Yogyakarta', '1970-11-25', '2', 'Sleman', '08998888', 'S1', '<p>- SD</p>\r\n<p>- SMP</p>\r\n<p>- SMA</p>\r\n<p>- UNY</p>', 'Guru', 'bu_maria_susanti.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('197105022006041014', 'Alfahmi, S.Pd', 'L', 'Bantul', '1971-05-02', '1', 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('197202011998022001', 'Dwi Hartati Ariyani, S.Pd', 'P', 'Banjarnegara', '1972-02-01', '1', 'Gamol, Balecatur,Gamping,Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('197207052006042024', 'Giarti Puspa Ningrum, S.Pd', 'P', 'Pagar Alam', '1972-07-05', '1', 'Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('197502252005011008', 'Garis Gunarto, S.Pd', 'L', 'Bantul', '1975-02-25', '1', 'Pundong,Bantul', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('198108252006042014', 'Fithria Futhihati Agustin, S.Pd', 'P', 'Yogyakarta', '1981-08-25', '1', 'Kotagede, Yogyakarta', '081999999999', 'S1', '', 'Guru', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('2', 'Eko Nurhidayat, S.Sn', 'L', 'Yogyakarta', '1969-03-01', '1', 'Bantul', '081999999999', 'SMA', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('20084', 'Budoyo', 'L', 'Bantul', '1977-02-09', '1', 'Bantul', '081999999999', 'SMA', '', 'TU', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('3', 'Geovani Akbar, S.Pd', 'L', 'Salatiga', '1983-07-31', '1', 'Sleman', '081999999999', 'S1', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('6', 'Siti Rahayu', 'P', 'Sleman', '1970-07-21', '1', 'Sleman', '081999999999', 'SMA', '', 'TU', 'no_image_female.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('7', 'Erfan Heri Jatmika, A.Md', 'L', 'Bantul', '1985-08-21', '1', 'Bantul', '081999999999', 'D3', '', 'Guru', 'no_image_male.jpg', 'Y');
INSERT INTO guru (`NIP`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `telp`, `pend_terakhir`, `riwayat_pend`, `jabatan`, `foto`, `aktif`) VALUES ('EKSTRA1', 'Safari', 'L', 'Bantul', '1969-02-04', '1', 'Bantul', '0909090909', 'SMA', '', 'Guru', 'no_image_male.jpg', 'Y');


#
# TABLE STRUCTURE FOR: kelas
#

DROP TABLE IF EXISTS kelas;

CREATE TABLE `kelas` (
  `id_kelas` int(2) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(6) NOT NULL,
  `jenjang` enum('7','8','9') NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('1', '7A', '7', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('2', '8A', '8', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('3', '7B', '7', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('4', '8B', '8', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('5', '7C', '7', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('6', '7D', '7', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('7', '7E', '7', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('8', '8C', '8', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('9', '8D', '8', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('10', '8E', '8', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('11', '9A', '9', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('12', '9B', '9', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('13', '9C', '9', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('14', '9D', '9', 'Y');
INSERT INTO kelas (`id_kelas`, `kelas`, `jenjang`, `aktif`) VALUES ('15', '9E', '9', 'Y');


#
# TABLE STRUCTURE FOR: ket_keluar
#

DROP TABLE IF EXISTS ket_keluar;

CREATE TABLE `ket_keluar` (
  `nis` int(6) NOT NULL,
  `stts_keluar` enum('do','keluar') NOT NULL,
  `tgl_keluar` date NOT NULL,
  `alasan` varchar(100) NOT NULL,
  PRIMARY KEY (`nis`),
  CONSTRAINT `ket_keluar_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO ket_keluar (`nis`, `stts_keluar`, `tgl_keluar`, `alasan`) VALUES ('5678', 'keluar', '2015-04-13', 'pindah ke luar kota, karna ikut orang tua dinas kerja');


#
# TABLE STRUCTURE FOR: mapel
#

DROP TABLE IF EXISTS mapel;

CREATE TABLE `mapel` (
  `id_mapel` int(2) NOT NULL AUTO_INCREMENT,
  `mapel` varchar(50) NOT NULL,
  `kelompok` enum('A','B') NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('1', 'Matematika', 'A', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('2', 'Bahasa Indonesia', 'A', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('3', 'Prakarya', 'B', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('4', 'Ilmu Pengetahuan Alam', 'A', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('5', 'Seni Budaya', 'B', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('6', 'Bahasa Inggris', 'A', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('7', 'Pendidikan Jasmani, Olahraga, dan Kesehatan', 'B', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('8', 'Ilmu Pengetahuan Sosial', 'A', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('9', 'Pendidikan Agama dan Budi Pekerti', 'A', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('10', 'Pendidikan Pancasila dan Kewarganegaraan', 'A', 'Y');
INSERT INTO mapel (`id_mapel`, `mapel`, `kelompok`, `aktif`) VALUES ('11', 'Bahasa Jawa', 'B', 'Y');


#
# TABLE STRUCTURE FOR: mengajar
#

DROP TABLE IF EXISTS mengajar;

CREATE TABLE `mengajar` (
  `id_mengajar` int(4) NOT NULL AUTO_INCREMENT,
  `NIP` varchar(18) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_mapel` int(2) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  `jml_jam` int(2) NOT NULL,
  PRIMARY KEY (`id_mengajar`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('1', '197010251997022003', '1', '4', '2', '5');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('2', '195704031984011001', '1', '7', '2', '3');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('3', '197202011998022001', '1', '6', '2', '4');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('4', '196702021989022001', '1', '1', '2', '5');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('5', '196903151995122006', '1', '8', '2', '4');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('6', '197502252005011008', '1', '3', '2', '2');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('7', '198108252006042014', '1', '5', '2', '3');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('8', '196501211995122002', '1', '2', '2', '6');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('9', '195908111984032005', '1', '10', '2', '3');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('10', '196512021993022001', '1', '9', '2', '3');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('11', '196809102007012015', '3', '2', '2', '2');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('12', '196303041984122003', '3', '5', '2', '3');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('13', '196702021989022001', '3', '1', '2', '5');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('14', '195909151979031001', '5', '1', '2', '5');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('15', '196410181986031010', '3', '10', '2', '4');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('16', '196303041984122003', '1', '11', '2', '2');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('17', '197010251997022003', '3', '4', '2', '5');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('18', '197010251997022003', '5', '4', '2', '5');
INSERT INTO mengajar (`id_mengajar`, `NIP`, `id_kelas`, `id_mapel`, `id_thnajaran`, `jml_jam`) VALUES ('19', '197010251997022003', '6', '4', '2', '5');


#
# TABLE STRUCTURE FOR: nilai
#

DROP TABLE IF EXISTS nilai;

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_subaspek` int(2) NOT NULL,
  `id_mengajar` int(4) NOT NULL,
  `nis` int(6) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `ke` int(2) NOT NULL,
  `nilai` double(5,2) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB AUTO_INCREMENT=751 DEFAULT CHARSET=latin1;

INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('61', '7', '1', '5680', '1', '1', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('62', '7', '1', '5681', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('63', '7', '1', '5690', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('64', '7', '1', '5683', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('65', '7', '1', '5691', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('66', '7', '1', '5680', '1', '2', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('67', '7', '1', '5681', '1', '2', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('68', '7', '1', '5690', '1', '2', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('69', '7', '1', '5683', '1', '2', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('70', '7', '1', '5691', '1', '2', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('86', '6', '1', '5680', '1', '1', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('87', '6', '1', '5681', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('88', '6', '1', '5690', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('89', '6', '1', '5683', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('90', '6', '1', '5691', '1', '1', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('91', '6', '1', '5680', '1', '2', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('92', '6', '1', '5681', '1', '2', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('93', '6', '1', '5690', '1', '2', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('94', '6', '1', '5683', '1', '2', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('95', '6', '1', '5691', '1', '2', '96.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('116', '5', '1', '5680', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('117', '5', '1', '5681', '1', '1', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('118', '5', '1', '5690', '1', '1', '76.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('119', '5', '1', '5683', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('120', '5', '1', '5691', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('121', '5', '1', '5680', '1', '2', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('122', '5', '1', '5681', '1', '2', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('123', '5', '1', '5690', '1', '2', '76.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('124', '5', '1', '5683', '1', '2', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('125', '5', '1', '5691', '1', '2', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('141', '2', '1', '5680', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('142', '2', '1', '5681', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('143', '2', '1', '5690', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('144', '2', '1', '5683', '1', '1', '76.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('145', '2', '1', '5691', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('146', '2', '1', '5680', '1', '2', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('147', '2', '1', '5681', '1', '2', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('148', '2', '1', '5690', '1', '2', '76.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('149', '2', '1', '5683', '1', '2', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('150', '2', '1', '5691', '1', '2', '80.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('151', '2', '1', '5680', '1', '3', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('152', '2', '1', '5681', '1', '3', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('153', '2', '1', '5690', '1', '3', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('154', '2', '1', '5683', '1', '3', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('155', '2', '1', '5691', '1', '3', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('156', '2', '1', '5680', '1', '4', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('157', '2', '1', '5681', '1', '4', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('158', '2', '1', '5690', '1', '4', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('159', '2', '1', '5683', '1', '4', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('160', '2', '1', '5691', '1', '4', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('161', '2', '1', '5680', '1', '5', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('162', '2', '1', '5681', '1', '5', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('163', '2', '1', '5690', '1', '5', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('164', '2', '1', '5683', '1', '5', '95.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('165', '2', '1', '5691', '1', '5', '97.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('166', '4', '1', '5680', '1', '1', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('167', '4', '1', '5681', '1', '1', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('168', '4', '1', '5690', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('169', '4', '1', '5683', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('170', '4', '1', '5691', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('171', '3', '1', '5680', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('172', '3', '1', '5681', '1', '1', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('173', '3', '1', '5690', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('174', '3', '1', '5683', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('175', '3', '1', '5691', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('176', '1', '1', '5680', '1', '1', '100.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('177', '1', '1', '5681', '1', '1', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('178', '1', '1', '5690', '1', '1', '100.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('179', '1', '1', '5683', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('180', '1', '1', '5691', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('181', '1', '1', '5680', '1', '2', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('182', '1', '1', '5681', '1', '2', '83.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('183', '1', '1', '5690', '1', '2', '78.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('184', '1', '1', '5683', '1', '2', '81.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('185', '1', '1', '5691', '1', '2', '80.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('186', '1', '1', '5680', '1', '3', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('187', '1', '1', '5681', '1', '3', '100.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('188', '1', '1', '5690', '1', '3', '100.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('189', '1', '1', '5683', '1', '3', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('190', '1', '1', '5691', '1', '3', '96.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('191', '1', '1', '5680', '1', '4', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('192', '1', '1', '5681', '1', '4', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('193', '1', '1', '5690', '1', '4', '99.75');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('194', '1', '1', '5683', '1', '4', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('195', '1', '1', '5691', '1', '4', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('196', '1', '1', '5680', '1', '5', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('197', '1', '1', '5681', '1', '5', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('198', '1', '1', '5690', '1', '5', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('199', '1', '1', '5683', '1', '5', '82.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('200', '1', '1', '5691', '1', '5', '84.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('201', '11', '1', '5680', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('202', '11', '1', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('203', '11', '1', '5690', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('204', '11', '1', '5683', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('205', '11', '1', '5691', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('206', '11', '1', '5680', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('207', '11', '1', '5681', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('208', '11', '1', '5690', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('209', '11', '1', '5683', '1', '2', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('210', '11', '1', '5691', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('211', '8', '1', '5680', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('212', '8', '1', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('213', '8', '1', '5690', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('214', '8', '1', '5683', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('215', '8', '1', '5691', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('216', '8', '1', '5680', '1', '2', '2.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('217', '8', '1', '5681', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('218', '8', '1', '5690', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('219', '8', '1', '5683', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('220', '8', '1', '5691', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('221', '10', '1', '5680', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('222', '10', '1', '5681', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('223', '10', '1', '5690', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('224', '10', '1', '5683', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('225', '10', '1', '5691', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('226', '10', '1', '5680', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('227', '10', '1', '5681', '1', '2', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('228', '10', '1', '5690', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('229', '10', '1', '5683', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('230', '10', '1', '5691', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('231', '9', '1', '5680', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('232', '9', '1', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('233', '9', '1', '5690', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('234', '9', '1', '5683', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('235', '9', '1', '5691', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('236', '9', '1', '5680', '1', '2', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('237', '9', '1', '5681', '1', '2', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('238', '9', '1', '5690', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('239', '9', '1', '5683', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('240', '9', '1', '5691', '1', '2', '2.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('241', '7', '2', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('242', '7', '2', '5681', '1', '1', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('243', '7', '2', '5690', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('244', '7', '2', '5683', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('245', '7', '2', '5691', '1', '1', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('246', '7', '2', '5680', '1', '2', '76.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('247', '7', '2', '5681', '1', '2', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('248', '7', '2', '5690', '1', '2', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('249', '7', '2', '5683', '1', '2', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('250', '7', '2', '5691', '1', '2', '84.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('251', '6', '2', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('252', '6', '2', '5681', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('253', '6', '2', '5690', '1', '1', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('254', '6', '2', '5683', '1', '1', '82.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('255', '6', '2', '5691', '1', '1', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('256', '6', '2', '5680', '1', '2', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('257', '6', '2', '5681', '1', '2', '83.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('258', '6', '2', '5690', '1', '2', '81.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('259', '6', '2', '5683', '1', '2', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('260', '6', '2', '5691', '1', '2', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('261', '5', '2', '5680', '1', '1', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('262', '5', '2', '5681', '1', '1', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('263', '5', '2', '5690', '1', '1', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('264', '5', '2', '5683', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('265', '5', '2', '5691', '1', '1', '75.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('266', '5', '2', '5680', '1', '2', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('267', '5', '2', '5681', '1', '2', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('268', '5', '2', '5690', '1', '2', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('269', '5', '2', '5683', '1', '2', '75.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('270', '5', '2', '5691', '1', '2', '73.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('271', '2', '2', '5680', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('272', '2', '2', '5681', '1', '1', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('273', '2', '2', '5690', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('274', '2', '2', '5683', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('275', '2', '2', '5691', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('276', '2', '2', '5680', '1', '2', '70.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('277', '2', '2', '5681', '1', '2', '75.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('278', '2', '2', '5690', '1', '2', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('279', '2', '2', '5683', '1', '2', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('280', '2', '2', '5691', '1', '2', '71.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('281', '2', '2', '5680', '1', '3', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('282', '2', '2', '5681', '1', '3', '90.75');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('283', '2', '2', '5690', '1', '3', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('284', '2', '2', '5683', '1', '3', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('285', '2', '2', '5691', '1', '3', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('286', '2', '2', '5680', '1', '4', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('287', '2', '2', '5681', '1', '4', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('288', '2', '2', '5690', '1', '4', '83.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('289', '2', '2', '5683', '1', '4', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('290', '2', '2', '5691', '1', '4', '82.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('291', '2', '2', '5680', '1', '5', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('292', '2', '2', '5681', '1', '5', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('293', '2', '2', '5690', '1', '5', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('294', '2', '2', '5683', '1', '5', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('295', '2', '2', '5691', '1', '5', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('296', '4', '2', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('297', '4', '2', '5681', '1', '1', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('298', '4', '2', '5690', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('299', '4', '2', '5683', '1', '1', '84.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('300', '4', '2', '5691', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('301', '3', '2', '5680', '1', '1', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('302', '3', '2', '5681', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('303', '3', '2', '5690', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('304', '3', '2', '5683', '1', '1', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('305', '3', '2', '5691', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('306', '1', '2', '5680', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('307', '1', '2', '5681', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('308', '1', '2', '5690', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('309', '1', '2', '5683', '1', '1', '84.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('310', '1', '2', '5691', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('311', '1', '2', '5680', '1', '2', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('312', '1', '2', '5681', '1', '2', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('313', '1', '2', '5690', '1', '2', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('314', '1', '2', '5683', '1', '2', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('315', '1', '2', '5691', '1', '2', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('316', '1', '2', '5680', '1', '3', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('317', '1', '2', '5681', '1', '3', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('318', '1', '2', '5690', '1', '3', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('319', '1', '2', '5683', '1', '3', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('320', '1', '2', '5691', '1', '3', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('321', '1', '2', '5680', '1', '4', '76.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('322', '1', '2', '5681', '1', '4', '75.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('323', '1', '2', '5690', '1', '4', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('324', '1', '2', '5683', '1', '4', '73.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('325', '1', '2', '5691', '1', '4', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('326', '1', '2', '5680', '1', '5', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('327', '1', '2', '5681', '1', '5', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('328', '1', '2', '5690', '1', '5', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('329', '1', '2', '5683', '1', '5', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('330', '1', '2', '5691', '1', '5', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('331', '11', '2', '5680', '1', '1', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('332', '11', '2', '5681', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('333', '11', '2', '5690', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('334', '11', '2', '5683', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('335', '11', '2', '5691', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('336', '11', '2', '5680', '1', '2', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('337', '11', '2', '5681', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('338', '11', '2', '5690', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('339', '11', '2', '5683', '1', '2', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('340', '11', '2', '5691', '1', '2', '3.75');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('341', '8', '2', '5680', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('342', '8', '2', '5681', '1', '1', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('343', '8', '2', '5690', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('344', '8', '2', '5683', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('345', '8', '2', '5691', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('346', '8', '2', '5680', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('347', '8', '2', '5681', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('348', '8', '2', '5690', '1', '2', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('349', '8', '2', '5683', '1', '2', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('350', '8', '2', '5691', '1', '2', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('351', '9', '2', '5680', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('352', '9', '2', '5681', '1', '1', '3.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('353', '9', '2', '5690', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('354', '9', '2', '5683', '1', '1', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('355', '9', '2', '5691', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('356', '9', '2', '5680', '1', '2', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('357', '9', '2', '5681', '1', '2', '3.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('358', '9', '2', '5690', '1', '2', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('359', '9', '2', '5683', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('360', '9', '2', '5691', '1', '2', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('361', '10', '2', '5680', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('362', '10', '2', '5681', '1', '1', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('363', '10', '2', '5690', '1', '1', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('364', '10', '2', '5683', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('365', '10', '2', '5691', '1', '1', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('366', '7', '4', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('367', '7', '4', '5681', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('368', '7', '4', '5690', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('369', '7', '4', '5683', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('370', '7', '4', '5691', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('371', '7', '4', '5680', '1', '2', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('372', '7', '4', '5681', '1', '2', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('373', '7', '4', '5690', '1', '2', '97.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('374', '7', '4', '5683', '1', '2', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('375', '7', '4', '5691', '1', '2', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('376', '6', '4', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('377', '6', '4', '5681', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('378', '6', '4', '5690', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('379', '6', '4', '5683', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('380', '6', '4', '5691', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('381', '6', '4', '5680', '1', '2', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('382', '6', '4', '5681', '1', '2', '76.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('383', '6', '4', '5690', '1', '2', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('384', '6', '4', '5683', '1', '2', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('385', '6', '4', '5691', '1', '2', '80.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('386', '6', '4', '5680', '1', '3', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('387', '6', '4', '5681', '1', '3', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('388', '6', '4', '5690', '1', '3', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('389', '6', '4', '5683', '1', '3', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('390', '6', '4', '5691', '1', '3', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('391', '5', '4', '5680', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('392', '5', '4', '5681', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('393', '5', '4', '5690', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('394', '5', '4', '5683', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('395', '5', '4', '5691', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('396', '5', '4', '5680', '1', '2', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('397', '5', '4', '5681', '1', '2', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('398', '5', '4', '5690', '1', '2', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('399', '5', '4', '5683', '1', '2', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('400', '5', '4', '5691', '1', '2', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('401', '5', '4', '5680', '1', '3', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('402', '5', '4', '5681', '1', '3', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('403', '5', '4', '5690', '1', '3', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('404', '5', '4', '5683', '1', '3', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('405', '5', '4', '5691', '1', '3', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('406', '2', '4', '5680', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('407', '2', '4', '5681', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('408', '2', '4', '5690', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('409', '2', '4', '5683', '1', '1', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('410', '2', '4', '5691', '1', '1', '83.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('411', '2', '4', '5680', '1', '2', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('412', '2', '4', '5681', '1', '2', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('413', '2', '4', '5690', '1', '2', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('414', '2', '4', '5683', '1', '2', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('415', '2', '4', '5691', '1', '2', '80.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('416', '1', '4', '5680', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('417', '1', '4', '5681', '1', '1', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('418', '1', '4', '5690', '1', '1', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('419', '1', '4', '5683', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('420', '1', '4', '5691', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('421', '1', '4', '5680', '1', '2', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('422', '1', '4', '5681', '1', '2', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('423', '1', '4', '5690', '1', '2', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('424', '1', '4', '5683', '1', '2', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('425', '1', '4', '5691', '1', '2', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('426', '3', '4', '5680', '1', '1', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('427', '3', '4', '5681', '1', '1', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('428', '3', '4', '5690', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('429', '3', '4', '5683', '1', '1', '97.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('430', '3', '4', '5691', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('431', '4', '4', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('432', '4', '4', '5681', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('433', '4', '4', '5690', '1', '1', '87.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('434', '4', '4', '5683', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('435', '4', '4', '5691', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('436', '11', '4', '5680', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('437', '11', '4', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('438', '11', '4', '5690', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('439', '11', '4', '5683', '1', '1', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('440', '11', '4', '5691', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('441', '11', '4', '5680', '1', '2', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('442', '11', '4', '5681', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('443', '11', '4', '5690', '1', '2', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('444', '11', '4', '5683', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('445', '11', '4', '5691', '1', '2', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('446', '8', '4', '5680', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('447', '8', '4', '5681', '1', '1', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('448', '8', '4', '5690', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('449', '8', '4', '5683', '1', '1', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('450', '8', '4', '5691', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('451', '8', '4', '5680', '1', '2', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('452', '8', '4', '5681', '1', '2', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('453', '8', '4', '5690', '1', '2', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('454', '8', '4', '5683', '1', '2', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('455', '8', '4', '5691', '1', '2', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('456', '9', '4', '5680', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('457', '9', '4', '5681', '1', '1', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('458', '9', '4', '5690', '1', '1', '3.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('459', '9', '4', '5683', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('460', '9', '4', '5691', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('461', '9', '4', '5680', '1', '2', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('462', '9', '4', '5681', '1', '2', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('463', '9', '4', '5690', '1', '2', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('464', '9', '4', '5683', '1', '2', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('465', '9', '4', '5691', '1', '2', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('466', '10', '4', '5680', '1', '1', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('467', '10', '4', '5681', '1', '1', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('468', '10', '4', '5690', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('469', '10', '4', '5683', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('470', '10', '4', '5691', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('471', '7', '3', '5680', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('472', '7', '3', '5681', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('473', '7', '3', '5690', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('474', '7', '3', '5683', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('475', '7', '3', '5691', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('476', '6', '3', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('477', '6', '3', '5681', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('478', '6', '3', '5690', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('479', '6', '3', '5683', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('480', '6', '3', '5691', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('481', '5', '3', '5680', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('482', '5', '3', '5681', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('483', '5', '3', '5690', '1', '1', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('484', '5', '3', '5683', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('485', '5', '3', '5691', '1', '1', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('486', '2', '3', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('487', '2', '3', '5681', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('488', '2', '3', '5690', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('489', '2', '3', '5683', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('490', '2', '3', '5691', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('491', '4', '3', '5680', '1', '1', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('492', '4', '3', '5681', '1', '1', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('493', '4', '3', '5690', '1', '1', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('494', '4', '3', '5683', '1', '1', '80.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('495', '4', '3', '5691', '1', '1', '81.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('496', '1', '3', '5680', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('497', '1', '3', '5681', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('498', '1', '3', '5690', '1', '1', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('499', '1', '3', '5683', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('500', '1', '3', '5691', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('501', '3', '3', '5680', '1', '1', '82.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('502', '3', '3', '5681', '1', '1', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('503', '3', '3', '5690', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('504', '3', '3', '5683', '1', '1', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('505', '3', '3', '5691', '1', '1', '81.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('506', '11', '3', '5680', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('507', '11', '3', '5681', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('508', '11', '3', '5690', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('509', '11', '3', '5683', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('510', '11', '3', '5691', '1', '1', '3.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('511', '8', '3', '5680', '1', '1', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('512', '8', '3', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('513', '8', '3', '5690', '1', '1', '4.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('514', '8', '3', '5683', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('515', '8', '3', '5691', '1', '1', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('516', '9', '3', '5680', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('517', '9', '3', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('518', '9', '3', '5690', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('519', '9', '3', '5683', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('520', '9', '3', '5691', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('521', '10', '3', '5680', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('522', '10', '3', '5681', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('523', '10', '3', '5690', '1', '1', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('524', '10', '3', '5683', '1', '1', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('525', '10', '3', '5691', '1', '1', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('526', '7', '6', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('527', '7', '6', '5681', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('528', '7', '6', '5690', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('529', '7', '6', '5683', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('530', '7', '6', '5691', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('531', '6', '6', '5680', '1', '1', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('532', '6', '6', '5681', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('533', '6', '6', '5690', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('534', '6', '6', '5683', '1', '1', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('535', '6', '6', '5691', '1', '1', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('536', '5', '6', '5680', '1', '1', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('537', '5', '6', '5681', '1', '1', '80.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('538', '5', '6', '5690', '1', '1', '82.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('539', '5', '6', '5683', '1', '1', '84.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('540', '5', '6', '5691', '1', '1', '81.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('541', '2', '6', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('542', '2', '6', '5681', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('543', '2', '6', '5690', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('544', '2', '6', '5683', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('545', '2', '6', '5691', '1', '1', '82.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('546', '4', '6', '5680', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('547', '4', '6', '5681', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('548', '4', '6', '5690', '1', '1', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('549', '4', '6', '5683', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('550', '4', '6', '5691', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('551', '1', '6', '5680', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('552', '1', '6', '5681', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('553', '1', '6', '5690', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('554', '1', '6', '5683', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('555', '1', '6', '5691', '1', '1', '83.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('556', '3', '6', '5680', '1', '1', '75.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('557', '3', '6', '5681', '1', '1', '77.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('558', '3', '6', '5690', '1', '1', '71.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('559', '3', '6', '5683', '1', '1', '73.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('560', '3', '6', '5691', '1', '1', '70.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('561', '11', '6', '5680', '1', '1', '2.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('562', '11', '6', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('563', '11', '6', '5690', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('564', '11', '6', '5683', '1', '1', '2.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('565', '11', '6', '5691', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('566', '8', '6', '5680', '1', '1', '2.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('567', '8', '6', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('568', '8', '6', '5690', '1', '1', '2.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('569', '8', '6', '5683', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('570', '8', '6', '5691', '1', '1', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('571', '9', '6', '5680', '1', '1', '2.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('572', '9', '6', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('573', '9', '6', '5690', '1', '1', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('574', '9', '6', '5683', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('575', '9', '6', '5691', '1', '1', '2.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('576', '10', '6', '5680', '1', '1', '2.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('577', '10', '6', '5681', '1', '1', '2.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('578', '10', '6', '5690', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('579', '10', '6', '5683', '1', '1', '2.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('580', '10', '6', '5691', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('591', '7', '7', '5680', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('592', '7', '7', '5681', '1', '1', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('593', '7', '7', '5690', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('594', '7', '7', '5683', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('595', '7', '7', '5691', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('596', '6', '7', '5680', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('597', '6', '7', '5681', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('598', '6', '7', '5690', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('599', '6', '7', '5683', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('600', '6', '7', '5691', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('601', '5', '7', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('602', '5', '7', '5681', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('603', '5', '7', '5690', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('604', '5', '7', '5683', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('605', '5', '7', '5691', '1', '1', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('606', '2', '7', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('607', '2', '7', '5681', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('608', '2', '7', '5690', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('609', '2', '7', '5683', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('610', '2', '7', '5691', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('611', '4', '7', '5680', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('612', '4', '7', '5681', '1', '1', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('613', '4', '7', '5690', '1', '1', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('614', '4', '7', '5683', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('615', '4', '7', '5691', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('616', '1', '7', '5680', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('617', '1', '7', '5681', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('618', '1', '7', '5690', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('619', '1', '7', '5683', '1', '1', '82.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('620', '1', '7', '5691', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('621', '3', '7', '5680', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('622', '3', '7', '5681', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('623', '3', '7', '5690', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('624', '3', '7', '5683', '1', '1', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('625', '3', '7', '5691', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('626', '11', '7', '5680', '1', '1', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('627', '11', '7', '5681', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('628', '11', '7', '5690', '1', '1', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('629', '11', '7', '5683', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('630', '11', '7', '5691', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('631', '8', '7', '5680', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('632', '8', '7', '5681', '1', '1', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('633', '8', '7', '5690', '1', '1', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('634', '8', '7', '5683', '1', '1', '3.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('635', '8', '7', '5691', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('636', '9', '7', '5680', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('637', '9', '7', '5681', '1', '1', '3.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('638', '9', '7', '5690', '1', '1', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('639', '9', '7', '5683', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('640', '9', '7', '5691', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('641', '10', '7', '5680', '1', '1', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('642', '10', '7', '5681', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('643', '10', '7', '5690', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('644', '10', '7', '5683', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('645', '10', '7', '5691', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('646', '7', '5', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('647', '7', '5', '5681', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('648', '7', '5', '5690', '1', '1', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('649', '7', '5', '5683', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('650', '7', '5', '5691', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('651', '6', '5', '5680', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('652', '6', '5', '5681', '1', '1', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('653', '6', '5', '5690', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('654', '6', '5', '5683', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('655', '6', '5', '5691', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('656', '5', '5', '5680', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('657', '5', '5', '5681', '1', '1', '82.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('658', '5', '5', '5690', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('659', '5', '5', '5683', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('660', '5', '5', '5691', '1', '1', '81.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('661', '2', '5', '5680', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('662', '2', '5', '5681', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('663', '2', '5', '5690', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('664', '2', '5', '5683', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('665', '2', '5', '5691', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('666', '4', '5', '5680', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('667', '4', '5', '5681', '1', '1', '82.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('668', '4', '5', '5690', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('669', '4', '5', '5683', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('670', '4', '5', '5691', '1', '1', '83.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('671', '1', '5', '5680', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('672', '1', '5', '5681', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('673', '1', '5', '5690', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('674', '1', '5', '5683', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('675', '1', '5', '5691', '1', '1', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('676', '3', '5', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('677', '3', '5', '5681', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('678', '3', '5', '5690', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('679', '3', '5', '5683', '1', '1', '81.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('680', '3', '5', '5691', '1', '1', '79.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('681', '11', '5', '5680', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('682', '11', '5', '5681', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('683', '11', '5', '5690', '1', '1', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('684', '11', '5', '5683', '1', '1', '2.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('685', '11', '5', '5691', '1', '1', '3.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('686', '8', '5', '5680', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('687', '8', '5', '5681', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('688', '8', '5', '5690', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('689', '8', '5', '5683', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('690', '8', '5', '5691', '1', '1', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('691', '9', '5', '5680', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('692', '9', '5', '5681', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('693', '9', '5', '5690', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('694', '9', '5', '5683', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('695', '9', '5', '5691', '1', '1', '3.40');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('696', '10', '5', '5680', '1', '1', '3.70');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('697', '10', '5', '5681', '1', '1', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('698', '10', '5', '5690', '1', '1', '3.57');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('699', '10', '5', '5683', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('700', '10', '5', '5691', '1', '1', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('701', '7', '8', '5680', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('702', '7', '8', '5681', '1', '1', '83.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('703', '7', '8', '5690', '1', '1', '96.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('704', '7', '8', '5683', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('705', '7', '8', '5691', '1', '1', '91.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('706', '2', '9', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('707', '2', '9', '5681', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('708', '2', '9', '5690', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('709', '2', '9', '5683', '1', '1', '85.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('710', '2', '9', '5691', '1', '1', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('711', '1', '9', '5680', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('712', '1', '9', '5681', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('713', '1', '9', '5690', '1', '1', '94.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('714', '1', '9', '5683', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('715', '1', '9', '5691', '1', '1', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('716', '11', '10', '5680', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('717', '11', '10', '5681', '1', '1', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('718', '11', '10', '5690', '1', '1', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('719', '11', '10', '5683', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('720', '11', '10', '5691', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('721', '8', '10', '5680', '1', '1', '3.10');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('722', '8', '10', '5681', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('723', '8', '10', '5690', '1', '1', '2.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('724', '8', '10', '5683', '1', '1', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('725', '8', '10', '5691', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('726', '9', '10', '5680', '1', '1', '3.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('727', '9', '10', '5681', '1', '1', '3.50');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('728', '9', '10', '5690', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('729', '9', '10', '5683', '1', '1', '3.30');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('730', '9', '10', '5691', '1', '1', '3.75');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('731', '10', '10', '5680', '1', '1', '3.80');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('732', '10', '10', '5681', '1', '1', '3.60');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('733', '10', '10', '5690', '1', '1', '3.67');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('734', '10', '10', '5683', '1', '1', '3.20');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('735', '10', '10', '5691', '1', '1', '3.90');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('736', '2', '4', '5680', '1', '3', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('737', '2', '4', '5681', '1', '3', '98.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('738', '2', '4', '5690', '1', '3', '99.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('739', '2', '4', '5683', '1', '3', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('740', '2', '4', '5691', '1', '3', '97.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('741', '7', '16', '5680', '1', '1', '89.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('742', '7', '16', '5681', '1', '1', '87.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('743', '7', '16', '5690', '1', '1', '88.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('744', '7', '16', '5683', '1', '1', '86.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('745', '7', '16', '5691', '1', '1', '78.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('746', '12', '16', '5680', '1', '1', '92.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('747', '12', '16', '5681', '1', '1', '93.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('748', '12', '16', '5690', '1', '1', '95.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('749', '12', '16', '5683', '1', '1', '90.00');
INSERT INTO nilai (`id_nilai`, `id_subaspek`, `id_mengajar`, `nis`, `semester`, `ke`, `nilai`) VALUES ('750', '12', '16', '5691', '1', '1', '89.00');


#
# TABLE STRUCTURE FOR: ortu
#

DROP TABLE IF EXISTS ortu;

CREATE TABLE `ortu` (
  `nis` int(11) NOT NULL,
  `ayah` varchar(40) NOT NULL,
  `ibu` varchar(40) NOT NULL,
  `alamat_ayah` varchar(100) NOT NULL,
  `alamat_ibu` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(25) NOT NULL,
  `pekerjaan_ibu` varchar(25) NOT NULL,
  `telp_ayah` varchar(12) NOT NULL,
  `telp_ibu` varchar(12) NOT NULL,
  `agama_ayah` int(1) NOT NULL,
  `agama_ibu` int(1) NOT NULL,
  PRIMARY KEY (`nis`),
  CONSTRAINT `ortu_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5678', 'Ayah 1', 'Ibu 1', 'alamt ayah', 'alamat ibu', 'PNS', 'PNS', '898989898', '89898989', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5680', 'Ayah 2a', 'Ibu 2a', 'alamt ayah', 'alamat ibu', 'PNS', 'PNS', '898989898', '89898989', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5681', 'Ayah 3', 'Ibu 3', 'alamt ayah', 'alamat ibu', 'PNS', 'PNS', '898989898', '89898989', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5682', 'Ayah 4a', 'Ibu 4a', 'alamat ayah', 'alamat ibu', 'PNS', 'PNS', '5454545', '545454', '1', '2');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5683', 'Ayah 5', 'Ibu 5', 'Alamat ayah', 'Alamat ibu', 'Swasta', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5684', 'Ayah 6', 'Ibu 6', 'Alamat ayah', 'Alamat Ibu', 'TNI', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5685', 'Ayah 7', 'Ibu 7', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5686', 'Irawan', 'Saginem', 'Kwaron, Ngestiharjo, Kasihan, Bantul', 'Kwaron, Ngestiharjo, Kasihan, Bantul', 'PNS', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5687', 'Ayah 8', 'Ibu 8', 'Alamat ayah', 'Alamat ibu', 'Swasta', 'IRT', '08967555555', '08187878787', '2', '2');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5688', 'Ayah 9', 'Ibu 9', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', '2', '2');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5689', 'Ayah 10', 'Ibu 10', 'Alamat ayah', 'Alamat ibu', 'Buruh', 'Buruh', '08967555555', '08187878787', '2', '2');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5690', 'Ayah 10', 'Ibu 10', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5691', 'Ayah 11', 'Ibu 11', 'Alamat ayah', 'Alamat ibu', 'POLRI', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5692', 'Ayah 12', 'Ibu 12', 'Alamat ayah', 'Alamat Ibu', 'Swasta', 'IRT', '08967555555', '08187878787', '3', '3');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5693', 'Ayah 13', 'Ibu 13', 'Alamat ayah', 'Alamat Ibu', 'Wiraswasta', 'Wiraswasta', '08967555555', '08187878787', '3', '3');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5694', 'Ayah 14', 'Ibu 14', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'PNS', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5695', 'Ayah 15', 'Ibu 15', 'Alamat ayah', 'Alamat Ibu', 'TNI', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5696', 'Ayah 16', 'Ibu 16', 'Alamat ayah', 'Alamat Ibu', 'Swasta', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5697', 'Ayah 17', 'Ibu 17', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5698', 'Ayah 18', 'Ayah 18', 'Alamat ayah', 'Alamat ibu', 'Swasta', 'Swasta', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5699', 'Ayah 19', 'Ibu 19', 'Alamat ayah', 'Alamat Ibu', 'Buruh', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5700', 'Ayah 20', 'Ibu 20', 'Alamat ayah', 'Alamat Ibu', 'Buruh', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5701', 'Ayah 21', 'Ibu 21', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'PNS', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5702', 'Ayah 22', 'Ibu 22', 'Alamat ayah', 'Alamat ibu', 'Swasta', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5703', 'Ayah 23', 'Ibu 23', 'Alamat ayah', 'Alamat Ibu', 'POLRI', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5704', 'Ayah 24', 'Ibu 24', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5705', 'Ayah 25', 'Ibu 25', 'Alamat ayah', 'Alamat Ibu', 'Swasta', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5706', 'Ayah 26', 'Ibu 26', 'Alamat ayah', 'Alamat Ibu', 'Swasta', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5707', 'Ayah 29', 'Ibu 29', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5708', 'Ayah 30', 'Ibu 30', 'Alamat ayah', 'Alamat Ibu', 'PNS', 'IRT', '08967555555', '08187878787', '1', '1');
INSERT INTO ortu (`nis`, `ayah`, `ibu`, `alamat_ayah`, `alamat_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `telp_ayah`, `telp_ibu`, `agama_ayah`, `agama_ibu`) VALUES ('5709', 'Ayah 31', 'Ibu 31', 'Alamat ayah', 'Alamat Ibu', 'POLRI', 'IRT', '08967555555', '08187878787', '1', '1');


#
# TABLE STRUCTURE FOR: pelanggaran
#

DROP TABLE IF EXISTS pelanggaran;

CREATE TABLE `pelanggaran` (
  `id_pelanggaran` int(3) NOT NULL AUTO_INCREMENT,
  `nama_pelanggaran` varchar(160) NOT NULL,
  `point` decimal(10,0) NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  PRIMARY KEY (`id_pelanggaran`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO pelanggaran (`id_pelanggaran`, `nama_pelanggaran`, `point`, `aktif`) VALUES ('1', 'Berkelahi di lingkungan sekolah', '120', 'Y');
INSERT INTO pelanggaran (`id_pelanggaran`, `nama_pelanggaran`, `point`, `aktif`) VALUES ('2', 'Mengikuti gank atau organisasi terlarang ', '100', 'Y');
INSERT INTO pelanggaran (`id_pelanggaran`, `nama_pelanggaran`, `point`, `aktif`) VALUES ('3', 'Membolos sekolah', '10', 'Y');
INSERT INTO pelanggaran (`id_pelanggaran`, `nama_pelanggaran`, `point`, `aktif`) VALUES ('4', 'Tidak Mengerjakan PR dari guru', '5', 'Y');
INSERT INTO pelanggaran (`id_pelanggaran`, `nama_pelanggaran`, `point`, `aktif`) VALUES ('5', 'Moncoret dinding sekolahan', '5', 'Y');


#
# TABLE STRUCTURE FOR: pelanggaran_siswa
#

DROP TABLE IF EXISTS pelanggaran_siswa;

CREATE TABLE `pelanggaran_siswa` (
  `id_pointsiswa` int(6) NOT NULL AUTO_INCREMENT,
  `nis` int(6) NOT NULL,
  `id_pelanggaran` int(3) NOT NULL,
  `tgl_point` date NOT NULL,
  `ket` varchar(160) NOT NULL,
  PRIMARY KEY (`id_pointsiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO pelanggaran_siswa (`id_pointsiswa`, `nis`, `id_pelanggaran`, `tgl_point`, `ket`) VALUES ('2', '5681', '1', '2015-04-18', '                                            ');
INSERT INTO pelanggaran_siswa (`id_pointsiswa`, `nis`, `id_pelanggaran`, `tgl_point`, `ket`) VALUES ('3', '5681', '3', '2015-04-18', '');
INSERT INTO pelanggaran_siswa (`id_pointsiswa`, `nis`, `id_pelanggaran`, `tgl_point`, `ket`) VALUES ('4', '5680', '4', '2015-04-18', 'PR Matematika Guru Ibu Maria');
INSERT INTO pelanggaran_siswa (`id_pointsiswa`, `nis`, `id_pelanggaran`, `tgl_point`, `ket`) VALUES ('5', '5680', '2', '2015-04-23', '');
INSERT INTO pelanggaran_siswa (`id_pointsiswa`, `nis`, `id_pelanggaran`, `tgl_point`, `ket`) VALUES ('6', '5682', '4', '2015-04-23', '');
INSERT INTO pelanggaran_siswa (`id_pointsiswa`, `nis`, `id_pelanggaran`, `tgl_point`, `ket`) VALUES ('7', '5692', '2', '2015-04-23', 'ikut vozter');


#
# TABLE STRUCTURE FOR: presensi
#

DROP TABLE IF EXISTS presensi;

CREATE TABLE `presensi` (
  `id_presensi` int(4) NOT NULL AUTO_INCREMENT,
  `nis` int(6) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  `semester` int(1) NOT NULL,
  `tgl_presensi` date NOT NULL,
  `status` enum('S','I','T') NOT NULL,
  `ket` varchar(160) NOT NULL,
  PRIMARY KEY (`id_presensi`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('9', '5681', '2', '1', '2015-04-18', 'S', 'Patah hati');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('10', '5690', '2', '1', '2015-04-18', 'I', 'Ijin kondangan mantan yg nikah');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('11', '5682', '2', '1', '2015-04-18', 'T', 'Gagal move on gak masuk sekolah tanpa keterangan');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('12', '5688', '2', '1', '2015-04-18', 'I', '');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('13', '5689', '2', '1', '2015-04-18', 'T', '');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('15', '5687', '2', '1', '2015-04-18', 'S', 'Sakit hati');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('17', '5680', '2', '1', '2015-04-17', 'S', '');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('18', '5681', '2', '1', '2015-04-23', 'I', 'Surat menyusul');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('19', '5680', '2', '1', '2015-04-24', 'I', '');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('20', '5680', '2', '1', '2015-04-25', 'I', '');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('21', '5681', '2', '1', '2015-04-27', 'S', 'sakit maag');
INSERT INTO presensi (`id_presensi`, `nis`, `id_thnajaran`, `semester`, `tgl_presensi`, `status`, `ket`) VALUES ('22', '5690', '2', '1', '2015-04-27', 'I', 'ijin gak masuk');


#
# TABLE STRUCTURE FOR: profil
#

DROP TABLE IF EXISTS profil;

CREATE TABLE `profil` (
  `id_profil` int(1) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `npsn` varchar(8) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `waktu_kbm` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(30) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO profil (`id_profil`, `nama`, `npsn`, `alamat`, `kode_pos`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `status`, `waktu_kbm`, `telp`, `email`, `website`) VALUES ('1', 'SEKOLAH MENENGAH PERTAMA NEGERI 1 KASIHAN', '20400298', 'Jl.Wates Km.3, Kalibayem', '55182', 'Ngestiharjo', 'Kasihan', 'Bantul', 'D.I.Yogyakarta', 'NEGERI', 'PAGI', '(0274) 618847', 'smp1kasihan_yk@yahoo.com', 'smpn1kasihan.sch.id');


#
# TABLE STRUCTURE FOR: raport
#

DROP TABLE IF EXISTS raport;

CREATE TABLE `raport` (
  `id_raport` int(12) NOT NULL AUTO_INCREMENT,
  `nis` int(6) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  `semester` enum('1','2') NOT NULL,
  `catatan` varchar(200) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `tgl_raport` date NOT NULL,
  `keputusan` enum('belum','naik','tinggal','lulus') NOT NULL,
  PRIMARY KEY (`id_raport`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO raport (`id_raport`, `nis`, `id_thnajaran`, `semester`, `catatan`, `nip`, `tgl_raport`, `keputusan`) VALUES ('1', '5680', '2', '1', 'Kesimpulan dari sikap keseluruhan dalam mapel diputuskan melalui rapat koordinasi  bersama dengan guru mapel dan wali kelas.', '195909151979031001', '2015-04-27', 'tinggal');
INSERT INTO raport (`id_raport`, `nis`, `id_thnajaran`, `semester`, `catatan`, `nip`, `tgl_raport`, `keputusan`) VALUES ('2', '5681', '2', '1', 'jjkgjgjgjhg jhghjghj jhghjgh jhghjghjg hghjgjhg', '195909151979031001', '2015-04-25', 'belum');


#
# TABLE STRUCTURE FOR: rc_groups
#

DROP TABLE IF EXISTS rc_groups;

CREATE TABLE `rc_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('1', 'admin', 'Merupakan akun Super Admin, bisa akses semua');
INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('2', 'member', 'Grup dengan akses limited');
INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('3', 'super_admin', 'Special group for RAI team only');
INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('4', 'ecek_ecek', 'Ecek ecek');
INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('5', 'ra_jelas', 'Ra Jelas');
INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('6', 'kepala_sekolah', '');
INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('7', 'guru', '');
INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('8', 'Siswa', '');
INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('9', 'Guru_BK', '');
INSERT INTO rc_groups (`id`, `name`, `description`) VALUES ('10', 'Wali_Kelas', '');


#
# TABLE STRUCTURE FOR: rc_login_attempts
#

DROP TABLE IF EXISTS rc_login_attempts;

CREATE TABLE `rc_login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# TABLE STRUCTURE FOR: rc_options
#

DROP TABLE IF EXISTS rc_options;

CREATE TABLE `rc_options` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `value` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('1', 'site_title', 'SMP Negeri 1 Kasihan');
INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('2', 'site_tagline', 'Sistem Informasi Akademik SMP Negeri 1 Kasihan');
INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('3', 'site_desc', 'Sistem Informasi Akademik SMP Negeri 1 Kasihan');
INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('4', 'admin_email', 'armisianto@gmail.com');
INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('5', 'super_admin_group', 'super_admin');
INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('6', 'admin_group', 'admin');
INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('7', 'default_group', 'Siswa');
INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('8', 'identity', 'username');
INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('9', 'ta', '2');
INSERT INTO rc_options (`id`, `name`, `value`) VALUES ('10', 'semester', '1');


#
# TABLE STRUCTURE FOR: rc_permissions
#

DROP TABLE IF EXISTS rc_permissions;

CREATE TABLE `rc_permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL,
  `role_id` int(11) unsigned NOT NULL,
  `rule` char(4) NOT NULL DEFAULT '0000',
  PRIMARY KEY (`id`),
  KEY `group_id` (`group_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `rc_permissions_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `rc_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rc_permissions_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `rc_roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=1707 DEFAULT CHARSET=utf8;

INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('54', '2', '45', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('55', '2', '46', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('56', '2', '47', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('57', '2', '48', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('58', '2', '49', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('59', '2', '50', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('60', '2', '41', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1276', '10', '87', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1277', '10', '88', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1345', '8', '77', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1346', '8', '61', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1347', '8', '78', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1348', '8', '79', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1349', '8', '89', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1356', '3', '45', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1357', '3', '46', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1358', '3', '47', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1359', '3', '48', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1360', '3', '49', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1361', '3', '50', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1362', '3', '41', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1363', '3', '51', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1364', '3', '52', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1365', '3', '53', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1366', '3', '60', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1367', '3', '69', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1368', '3', '70', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1369', '3', '71', '0110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1370', '3', '54', '0110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1371', '3', '56', '0110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1372', '3', '57', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1373', '3', '58', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1374', '3', '76', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1375', '3', '84', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1376', '3', '59', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1377', '3', '77', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1378', '3', '61', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1379', '3', '74', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1380', '3', '80', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1381', '3', '87', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1382', '3', '68', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1383', '3', '81', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1384', '3', '72', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1385', '3', '78', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1386', '3', '79', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1387', '3', '90', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1388', '3', '86', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1389', '3', '88', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1611', '6', '54', '0110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1612', '6', '56', '0110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1613', '6', '57', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1614', '6', '76', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1615', '6', '84', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1616', '6', '59', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1617', '6', '61', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1618', '6', '77', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1619', '6', '74', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1620', '6', '80', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1621', '6', '87', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1622', '6', '68', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1623', '6', '81', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1624', '6', '72', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1625', '6', '78', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1626', '6', '79', '01');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1627', '7', '57', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1628', '7', '84', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1629', '7', '59', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1630', '7', '87', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1631', '7', '74', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1632', '7', '81', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1633', '7', '82', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1634', '7', '72', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1635', '7', '83', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1636', '7', '85', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1651', '9', '61', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1652', '9', '77', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1653', '9', '74', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1654', '9', '80', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1655', '9', '87', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1656', '9', '81', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1657', '9', '82', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1658', '9', '78', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1659', '9', '79', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1660', '9', '90', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1661', '9', '83', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1662', '9', '85', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1685', '1', '52', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1686', '1', '53', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1687', '1', '60', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1688', '1', '69', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1689', '1', '70', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1690', '1', '71', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1691', '1', '57', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1692', '1', '58', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1693', '1', '76', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1694', '1', '59', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1695', '1', '80', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1696', '1', '87', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1697', '1', '74', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1698', '1', '68', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1699', '1', '81', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1700', '1', '72', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1701', '1', '78', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1702', '1', '79', '0100');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1703', '1', '86', '1111');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1704', '1', '93', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1705', '1', '91', '1110');
INSERT INTO rc_permissions (`id`, `group_id`, `role_id`, `rule`) VALUES ('1706', '1', '92', '1110');


#
# TABLE STRUCTURE FOR: rc_roles
#

DROP TABLE IF EXISTS rc_roles;

CREATE TABLE `rc_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `url` varchar(70) CHARACTER SET latin1 DEFAULT NULL,
  `desc` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `parent` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `url` (`url`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `rc_roles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `rc_roles_category` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('41', '16', 'Barang', 'master_barang', 'Master Data Barang', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('45', '10', 'Forms', 'forms', 'Desain form general', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('46', '10', 'Radio Checkboxes', 'radio_checks', 'Desain Radio Button dan Checkbox', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('47', '10', 'Buttons', 'buttons', 'Desain berbagai macam tombol', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('48', '10', 'Tables', 'tables', 'Desain berbagai macam tabel', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('49', '10', 'Icons', 'icons', 'Desain berbagai macam ikon', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('50', '10', 'Designs', 'designs', 'Variety of design', '1');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('51', '16', 'Contoh Ajax', 'master_pesan', 'Contoh CRUD menggunakan Ajax', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('52', '19', 'Data Agama', 'agama', 'Mengelola data agama', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('53', '19', 'Profil Sekolah', 'profil_sekolah', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('54', '20', 'Aspek Penilaian', 'aspek', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('56', '20', 'Bobot Penilaian', 'bobot', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('57', '21', 'Data Guru & Karyawan', 'guru_karyawan', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('58', '22', 'Data Kelas', 'kelas', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('59', '23', 'Data Mata Pelajaran', 'mapel', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('60', '19', 'Data Tahun Ajaran', 'thn_ajaran', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('61', '24', 'Data Jenis Pelanggaran', 'pelanggaran', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('68', '26', 'Data Ekstrakurikuler', 'eskul', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('69', '19', 'Setting Tahun Ajaran', 'options/ta', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('70', '19', 'Setting Semester', 'options/semester', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('71', '19', 'options', 'options', '', '1');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('72', '27', 'Data Megajar', 'mengajar', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('74', '25', 'Siswa Aktif', 'siswa', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('76', '22', 'Pembagian Kelas', 'bagikelas', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('77', '24', 'Data Pelanggaran Siswa', 'pelanggaransiswa', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('78', '28', 'Presensi Siswa', 'presensi', '', '1');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('79', '28', 'Data Presensi Siswa', 'presensi/arsip', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('80', '25', 'Siswa Keluar', 'siswa/keluar', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('81', '26', 'Siswa Ekstrakurikuler', 'siswaeskul', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('82', '26', 'Catatan Ekstrakulikuler', 'catataneskul', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('83', '29', 'Input Nilai', 'nilai', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('84', '22', 'Wali Kelas', 'walikelas', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('85', '29', 'Catatan Aspek', 'catatanaspek', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('86', '30', 'Data Users', 'auth/users', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('87', '25', 'SIswa Per Kelas', 'siswa/kelas', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('88', '31', 'Buat Raport', 'raport', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('89', '32', 'Profil', 'profilsiswa', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('90', '28', 'Input Presensi', 'presensi/index', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('91', '33', 'Backup_Restore', 'data', '', '1');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('92', '33', 'Backup', 'data/backup', '', '0');
INSERT INTO rc_roles (`id`, `category_id`, `name`, `url`, `desc`, `parent`) VALUES ('93', '33', 'Restore', 'data/restore', '', '0');


#
# TABLE STRUCTURE FOR: rc_roles_category
#

DROP TABLE IF EXISTS rc_roles_category;

CREATE TABLE `rc_roles_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `icon_code` varchar(50) NOT NULL,
  `order_number` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('10', 'Designs', 'fa fa-leaf', '8');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('16', 'Masters', 'fa fa-bars', '8');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('18', 'Mainan', 'fa fa-anchor', '8');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('19', 'Setup Data', 'glyphicon glyphicon-cog', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('20', 'Instrumen Penilaian', 'glyphicon glyphicon-list-alt', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('21', 'Guru & Karyawan', 'fa fa-users', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('22', 'Kelas', 'fa fa-sitemap', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('23', 'Mata Pelajaran', 'glyphicon glyphicon-book', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('24', 'Pelanggaran Siswa', 'glyphicon glyphicon-warning-sign', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('25', 'Siswa', 'glyphicon glyphicon-user', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('26', 'Ekstrakurikuler', 'fa  fa-trophy', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('27', 'Mengajar', 'fa  fa-comments', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('28', 'Presensi Siswa', 'fa  fa-check-square', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('29', 'Nilai ', 'glyphicon glyphicon-edit', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('30', 'Users', 'fa fa-users', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('31', 'Raport', 'fa fa-book', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('32', 'Menu Siswa', 'fa  fa-user', '0');
INSERT INTO rc_roles_category (`id`, `category`, `icon_code`, `order_number`) VALUES ('33', 'Backup & Restore', 'glyphicon glyphicon-hdd', '0');


#
# TABLE STRUCTURE FOR: rc_users
#

DROP TABLE IF EXISTS rc_users;

CREATE TABLE `rc_users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `ip_address` varchar(15) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `tbl_asal` enum('siswa','guru','super') NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('1', 'Khoiruddins', '127.0.0.1', 'Khoiruddin', 'super', '$2y$08$toHLx3wJBs57J8EalFFXoep4A.JVMCJb4JCn1jHySQ4HZw4FkkPSG', '', 'muhammad@khoiruddin.com', 'super', NULL, 'kNx6Lnfs7271YD56IpdRme0c8f544add9f05c491', '1421251700', 'IdEFjATQ7irgV27f2CWoOO', '1268889823', '1430758250', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('27', 'Maria', '127.0.0.1', 'Susanti', '197010251997022003', '$2y$08$vShPnVWPU8A10O8jIObCnuCdvyG4j7OHi9/d0UNsU5b71gxMg.3q.', NULL, 'maria.susanti@gmail.com', 'guru', NULL, 'ATOw8KDI9fngupFNZYWNnub9b7b58e58d5503f33', '1429717109', NULL, '1422287134', '1430672217', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('29', '0', '::1', '0', '195912101986031015', '$2y$08$.nMfD.JPnQOqBu0DS78ELO3BJa611Sy3nYZRvFHjUPRqcVqbCnoMK', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, 'dhvGxOWaK7s23I8jjWDf2e', '1428499305', '1430752401', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('30', 'Armisianto', '::1', 'Armi', '5682', '$2y$08$9KeVr.HZ48dxWd1HeetOc.ZPaJgSosdXHt2Tuul67sW2/aVoFp61q', NULL, 'armisianto@gmail.com', 'siswa', NULL, NULL, NULL, NULL, '1428678546', '1428678620', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('31', '', '::1', '', '196303041984122003', '$2y$08$JkEZrJQaqn3nRWw9ezW25ukdXGHMjW6Pb8HnwMMjfHiTEKY.bbwXa', NULL, 'fr.romana@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1429535775', '1430695161', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('32', '0', '::1', '0', '5680', '$2y$08$DYZN2O7nePnhMjOGsFhcWeefZHR2NhjhpfIACzh2IKHi2VMEibfiG', NULL, 'armisianto@gmail.com', 'siswa', NULL, NULL, NULL, NULL, '1429759550', '1430376742', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('33', '0', '::1', '0', '197202011998022001', '$2y$08$Sx80WatKvfOauKnOJdWpD.gnNRi6PAR6rXejQ3xIPo5Vq57O8evdm', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1429760625', '1430061968', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('34', '0', '::1', '0', '196410181986031010', '$2y$08$dm0qPFZrXlFgfXwnvEghI.Wi7ZcuSbkad31I45mfAyc7qnq0SK2JC', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1429765531', '1430696175', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('39', '0', '::1', '0', '197502252005011008', '$2y$08$m.n3SceOsJ3ki64XCkehROlcKtsdVxtJZaOr07WDmbu7q/dwCcrBq', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1429766521', '1430062087', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('40', '0', '::1', '0', '195704031984011001', '$2y$08$nG6AsDkf9h96UHpLny9OTu4vlxzFJ/IkO4ynf0dg4CBqzmy1TRqfq', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1429770718', '1430557782', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('41', '0', '::1', '0', '196702021989022001', '$2y$08$Dayc6f6/NYKQz3vph59sNuCJBnG9mJKAd18J7nSY20dtXCut3IPnu', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, 'gpnU0i0EQnU3nLKj617FC.', '1429770746', '1430702367', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('42', '0', '::1', '0', '196903151995122006', '$2y$08$3jRQ6aXBjaqcKbfOD6Qej.nH/GAyZZAVxjBNtYMwWoJIOo17.xb9m', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1429770767', '1430067233', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('43', '0', '::1', '0', '196501211995122002', '$2y$08$81KGJyKvLmMoeU/I1f.Adu6xEcaMJ.FriOHjl74L/UTmSsrEXiHd.', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1429770804', '1430067799', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('44', '0', '::1', '0', '195908111984032005', '$2y$08$gKr32aqkwvB9SEo31p2QLO.Q2wdflurGOeU.N6cMBhhSG61MeqrzG', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1429770820', '1430068137', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('45', '0', '::1', '0', '196512021993022001', '$2y$08$PjHtvHozaiGF8Qjq.hM16.3hJM8fsMvuCh3q3Nu/NS90gk7J0oOHe', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1429770841', '1430068257', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('46', NULL, '::1', NULL, 'EKSTRA1', '$2y$08$ugZiLorVVFxP1J/pos62XObjuBeDvKlK3Grwh4G8z42uLcINKnrfy', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1430068623', '1430384379', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('47', '0', '::1', '0', '195909151979031001', '$2y$08$OQUjVzxnteCWC5bIYyGV2.dE8L9wEV1lapDvhrh9/X8luRJxA9JSe', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1430099707', '1430707951', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('48', '0', '::1', '0', '195308011982031017', '$2y$08$LpoezvTZkpKFlFqe.FP4GOSgl3Jk72oFqqlD3.fOiRKT3/DSA9dRK', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1430556043', '1430556091', '1');
INSERT INTO rc_users (`id`, `first_name`, `ip_address`, `last_name`, `username`, `password`, `salt`, `email`, `tbl_asal`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES ('49', '0', '::1', '0', '198108252006042014', '$2y$08$vYsq9OPE1Foj8CbUBQEA8e1Wup2D1fxeKLa9wl2ths/J4c.hfKUVm', NULL, 'armisianto@gmail.com', 'guru', NULL, NULL, NULL, NULL, '1430570345', '1430570402', '1');


#
# TABLE STRUCTURE FOR: rc_users_groups
#

DROP TABLE IF EXISTS rc_users_groups;

CREATE TABLE `rc_users_groups` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `rc_groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `rc_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=230 DEFAULT CHARSET=utf8;

INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('167', '1', '3');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('182', '27', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('217', '29', '1');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('187', '30', '8');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('188', '31', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('193', '32', '8');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('196', '33', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('198', '34', '9');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('204', '39', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('211', '40', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('218', '41', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('219', '41', '10');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('213', '42', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('214', '43', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('215', '44', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('216', '45', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('221', '46', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('225', '47', '6');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('227', '48', '7');
INSERT INTO rc_users_groups (`id`, `user_id`, `group_id`) VALUES ('229', '49', '7');


#
# TABLE STRUCTURE FOR: sekolah_asal
#

DROP TABLE IF EXISTS sekolah_asal;

CREATE TABLE `sekolah_asal` (
  `nis` int(6) NOT NULL,
  `nama_sekolah` varchar(25) NOT NULL,
  `alasan_pindah` varchar(100) NOT NULL,
  PRIMARY KEY (`nis`),
  CONSTRAINT `sekolah_asal_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO sekolah_asal (`nis`, `nama_sekolah`, `alasan_pindah`) VALUES ('5678', 'SMP N 3 Kasihan', ' Ikut ortu dinas');


#
# TABLE STRUCTURE FOR: siswa
#

DROP TABLE IF EXISTS siswa;

CREATE TABLE `siswa` (
  `nis` int(6) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `kota_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_agama` int(1) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jml_saudara` int(2) NOT NULL,
  `anak_ke` int(2) NOT NULL,
  `status_anak` enum('kandung','tiri','angkat') NOT NULL,
  `asal_sd` varchar(25) NOT NULL,
  `no_sttb` varchar(18) NOT NULL,
  `tahun_sttb` year(4) NOT NULL,
  `kls_diterima` int(1) NOT NULL,
  `tgl_diterima` date NOT NULL,
  `tingkat` int(1) NOT NULL,
  `status` enum('aktif','alumni','keluar') NOT NULL,
  `foto` varchar(25) DEFAULT NULL,
  `pindahan` enum('Y','T') NOT NULL,
  `thn_lulus` year(4) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB AUTO_INCREMENT=5710 DEFAULT CHARSET=latin1;

INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5678', '1234567890', 'Siswa 1', 'L', 'Bantul', '2001-01-01', '1', 'Kwaron, Ngestiharjo, Kasihan, Bantul', '3', '1', 'kandung', 'SDN 2 Kadipiro', 'Dn 1 Dd 0819876543', '0000', '8', '2015-04-10', '8', 'keluar', 'no_image_male.jpg', 'Y', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5680', '9981210705', 'ADHE EKA RETMA YANABUDI', 'L', 'Bantul', '2001-01-18', '1', 'Bantul', '9', '1', 'kandung', 'SDN 2 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'aku.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5681', '9991171904', 'AKHID HAEFANI HILAL', 'L', 'Bantul', '2001-03-02', '1', 'Kwaron, Ngestiharjo, Kasihan, Bantul', '3', '1', 'kandung', 'SDN 2 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5682', '9991176655', 'ALFIA NOORSYANA', 'P', 'Bantul', '2001-08-09', '1', 'Jalan Magelang', '2', '2', 'kandung', 'SD 2 Sleman', 'Dn 1 Dd 0819876544', '2012', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5683', '9992090033', 'ARDHA NURUL AZIZAH', 'P', 'Sleman', '2001-03-01', '1', 'Jl. Wates Km.5', '1', '2', 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5684', '9992076516', 'ARLITA LISTYOWATI', 'P', 'Bantul', '2001-04-05', '1', 'Sonopakis Lor, Ngestiharjo Kasihan Bantul', '2', '2', 'kandung', 'SDN 3 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5685', '9991176799', 'MUHAMMAD GUNTUR SATRIO WIBOWO', 'L', 'Bantul', '2001-06-06', '1', 'Ngewotan, Ngestiharjo, Kasihan, Bantul', '3', '1', 'kandung', 'SDN 1 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5686', '9991397045', 'YUSTINA DHAMAYANTI', 'P', 'Bantul', '2001-06-06', '1', 'Kwaron, Ngestiharjo, Kasihan, Bantul', '2', '3', 'kandung', 'SD Muhamadiyah Tegarejo', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5687', '0004163742', 'MERCELLIUS JANU ARDIAN TURNIP', 'L', 'Sleman', '2001-02-14', '2', 'Sleman', '2', '1', 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5688', '0002318416', 'AGNES JANU DWI WIDAYANTI', 'P', 'Yogyakarta', '2001-11-22', '2', 'Kleben, Wirobrajan, Yogyakarta', '1', '2', 'kandung', 'SDN 1 Tegalrejo', 'Dn 1 Dd 0819876544', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5689', '0000759811', 'AURELIA RETTA', 'P', 'Sleman', '2001-08-10', '2', 'Sleman', '2', '2', 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5690', '9993182301', 'ALFI AINURRAHMA ARIF', 'P', 'Bantul', '2001-04-12', '1', 'Bantul', '1', '2', 'kandung', 'SDN 1 Kadipiro', 'Dn 1 Dd 0819876544', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5691', '0001414269', 'BAHARUDDIN RAMADHAN', 'L', 'Bantul', '2001-01-02', '1', 'Kalibayem, Ngestiharjo, Kasihan, Bantul', '1', '1', 'kandung', 'SDN 3 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2015-04-15', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5692', '9991397444', 'MICHAEL YEREMIA ANTONIO SUSANTO', 'L', 'Bantul', '2001-04-21', '3', 'Bantul', '2', '2', 'kandung', 'SD Kanisius Jomegatan', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5693', '9991399085', 'YOSUA FERDIANTO MAHARDIKA', 'L', 'Yogyakarta', '2001-09-17', '3', 'Kleben, Wirobrajan, Yogyakarta', '2', '1', 'kandung', 'SD Kanisius Wirobrajan', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5694', '9992075970', 'MUHAMMAD DIEFA ABDUL AZIZ', 'L', 'Jepara', '2001-11-16', '1', 'Bantul', '1', '2', 'kandung', 'SD N 2 Sonesewu', 'Dn 1 Dd 0819876544', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5695', '0000756836', 'RYAAS SINTA AINURROHMAH', 'P', 'Kediri', '2000-06-16', '1', 'Sleman', '2', '1', 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5696', '0001416038', 'SASQIA ANNISA BASTIAN', 'P', 'Sleman', '2000-04-08', '1', 'Sleman', '1', '1', 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876544', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5697', '9992277458', 'PUJI PUTRI NURANI', 'P', 'Bantul', '2000-09-12', '1', 'Bantul', '1', '2', 'kandung', 'SDN 3 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5698', '0001414277', 'NURUL QOMARIYAH MAULANI', 'P', 'Sleman', '2000-06-08', '1', 'Sleman', '2', '2', 'kandung', 'SD N 1 Balecatur', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5699', '0000899487', 'IRFAN DWIYOGA YULIAN', 'L', 'Bantul', '2000-07-20', '1', 'Ngewotan, Ngestiharjo, Kasihan, Bantul', '2', '2', 'kandung', 'SDN 1 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5700', '0000772726', 'AJENG KAROLINA', 'P', 'Bantul', '2000-01-30', '1', 'Snosewu, Ngestiharjo,Kasihan,Bantul', '2', '3', 'kandung', 'SDN 1 Sonosewu', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5701', '0000759164', 'GALANG SETIA BUDI', 'L', 'Bantul', '2000-06-09', '1', 'Bantul', '1', '2', 'kandung', 'SDN 2 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5702', '9993293766', 'ILHAM PRADANA KUSUMA', 'L', 'Yogyakarta', '2001-11-07', '1', 'Singosaren,Wirobrajan,Yogyakarta', '2', '2', 'kandung', 'SDN 1 Wirobrajan', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5703', '9991174057', 'ANGGRAENI PUTRI WIDYANINGRUM', 'P', 'Bantul', '2000-10-04', '1', 'Sonopakis Kidul, Ngestiharjo Kasihan Bantul', '1', '1', 'kandung', 'SDN 3 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2015-04-16', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5704', '0004921701', 'NADIA FITRI WIJAYANINGSIH', 'P', 'Sleman', '2000-03-10', '1', 'Dukuh,Banyuraden,Gamping,Sleman', '2', '2', 'kandung', 'SD Muhamadiyah Banyuraden', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5705', '9991171266', 'GUNTUR BAGUS YOGA AJITAMA', 'L', 'Yogyakarta', '2000-05-31', '1', 'Singosaren,Wirobrajan,Yogyakarta', '0', '1', 'kandung', 'SD Muhamadiyah 3 Wirobraj', 'Dn 1 Dd 0819876543', '2014', '7', '2015-04-16', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5706', '0000772235', 'MEI WARDAH PUJI ASTUTI', 'P', 'Bantul', '2000-05-14', '1', 'Soragan,Ngestiharjo,Kasihan,Bantul', '3', '2', 'kandung', 'SDN 1 Kadipiro', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5707', '0002317519', 'SYAHARANI KUSUMANINGTYAS', 'P', 'Bantul', '2000-01-09', '1', 'Soboman, Ngestiharjo,Kasihan,Bantul', '1', '1', 'kandung', 'SDN 1 Sonosewu', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_female.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5708', '9991399882', 'RUDI NUR SETIAWAN', 'L', 'Sleman', '2000-12-09', '1', 'Dukuh,Banyuraden,Gamping,Sleman', '2', '1', 'kandung', 'SD Muhamadiyah Banyuraden', 'Dn 1 Dd 0819876543', '2014', '7', '2015-04-16', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);
INSERT INTO siswa (`nis`, `nisn`, `nama`, `jk`, `kota_lahir`, `tgl_lahir`, `id_agama`, `alamat`, `jml_saudara`, `anak_ke`, `status_anak`, `asal_sd`, `no_sttb`, `tahun_sttb`, `kls_diterima`, `tgl_diterima`, `tingkat`, `status`, `foto`, `pindahan`, `thn_lulus`) VALUES ('5709', '9992799594', 'DIAH PARAMITHA', 'P', 'Gunugkidul', '2000-01-31', '1', 'Ngewotan, Ngestiharjo, Kasihan, Bantul', '3', '2', 'kandung', 'SDN 1 Tepus', 'Dn 1 Dd 0819876543', '2014', '7', '2014-07-07', '7', 'aktif', 'no_image_male.jpg', 'T', NULL);


#
# TABLE STRUCTURE FOR: siswa_eskul
#

DROP TABLE IF EXISTS siswa_eskul;

CREATE TABLE `siswa_eskul` (
  `id_siswaeskul` int(6) NOT NULL AUTO_INCREMENT,
  `id_eskul` int(2) NOT NULL,
  `nis` int(6) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  PRIMARY KEY (`id_siswaeskul`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('1', '1', '5688', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('2', '1', '5700', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('3', '1', '5690', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('4', '1', '5682', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('5', '1', '5703', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('6', '2', '5680', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('7', '2', '5688', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('8', '2', '5681', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('9', '2', '5692', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('10', '2', '5694', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('11', '2', '5685', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('12', '2', '5708', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('13', '2', '5693', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('14', '2', '5686', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('15', '1', '5684', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('16', '2', '5690', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('17', '3', '5680', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('18', '3', '5688', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('19', '3', '5700', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('20', '3', '5681', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('21', '3', '5690', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('22', '3', '5682', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('23', '3', '5703', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('24', '3', '5683', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('25', '3', '5684', '2');
INSERT INTO siswa_eskul (`id_siswaeskul`, `id_eskul`, `nis`, `id_thnajaran`) VALUES ('26', '3', '5689', '2');


#
# TABLE STRUCTURE FOR: sub_aspek
#

DROP TABLE IF EXISTS sub_aspek;

CREATE TABLE `sub_aspek` (
  `id_subaspek` int(2) NOT NULL AUTO_INCREMENT,
  `id_aspek` int(1) NOT NULL,
  `sub_aspek` varchar(35) NOT NULL,
  `max_nilai` double(5,2) NOT NULL,
  PRIMARY KEY (`id_subaspek`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('1', '1', 'Nilai Ulangan Harian', '100.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('2', '1', 'Nilai Tugas / PR', '100.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('3', '1', 'Nilai UTS', '100.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('4', '1', 'Nilai UAS', '100.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('5', '2', 'Unjuk Kerja', '100.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('6', '2', 'Proyek', '100.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('7', '2', 'Portofolio', '100.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('8', '3', 'Observasi', '4.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('9', '3', 'Penilaian Diri', '4.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('10', '3', 'Penilaian Teman', '4.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('11', '3', 'Jurnal', '4.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('12', '2', 'Praktik', '100.00');
INSERT INTO sub_aspek (`id_subaspek`, `id_aspek`, `sub_aspek`, `max_nilai`) VALUES ('13', '2', 'Tulis', '100.00');


#
# TABLE STRUCTURE FOR: tahun
#

DROP TABLE IF EXISTS tahun;

CREATE TABLE `tahun` (
  `id_thnajaran` int(2) NOT NULL AUTO_INCREMENT,
  `thn_ajaran` varchar(9) NOT NULL,
  PRIMARY KEY (`id_thnajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO tahun (`id_thnajaran`, `thn_ajaran`) VALUES ('1', '2011/2012');
INSERT INTO tahun (`id_thnajaran`, `thn_ajaran`) VALUES ('2', '2012/2013');


#
# TABLE STRUCTURE FOR: wali_kelas
#

DROP TABLE IF EXISTS wali_kelas;

CREATE TABLE `wali_kelas` (
  `id_walikelas` int(3) NOT NULL AUTO_INCREMENT,
  `nip` varchar(18) NOT NULL,
  `id_kelas` int(2) NOT NULL,
  `id_thnajaran` int(2) NOT NULL,
  PRIMARY KEY (`id_walikelas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO wali_kelas (`id_walikelas`, `nip`, `id_kelas`, `id_thnajaran`) VALUES ('1', '196702021989022001', '1', '2');
INSERT INTO wali_kelas (`id_walikelas`, `nip`, `id_kelas`, `id_thnajaran`) VALUES ('2', '196903151995122006', '3', '2');
INSERT INTO wali_kelas (`id_walikelas`, `nip`, `id_kelas`, `id_thnajaran`) VALUES ('3', '195902091984122001', '5', '2');
INSERT INTO wali_kelas (`id_walikelas`, `nip`, `id_kelas`, `id_thnajaran`) VALUES ('4', '19571224198031002', '6', '2');


#
# TABLE STRUCTURE FOR: wali_siswa
#

DROP TABLE IF EXISTS wali_siswa;

CREATE TABLE `wali_siswa` (
  `nis` int(6) NOT NULL,
  `nama_wali` varchar(40) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `pekerjaan_wali` varchar(25) NOT NULL,
  `telp_wali` varchar(12) NOT NULL,
  `agama_wali` int(1) NOT NULL,
  `status_wali` enum('ayah','ibu','ol') NOT NULL,
  PRIMARY KEY (`nis`),
  CONSTRAINT `wali_siswa_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5678', 'wali 1', 'alamat wali', 'PNS', '0', '1', 'ol');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5680', 'Ayah 2a', 'alamt ayah', 'PNS', '898989898', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5681', 'Ibu 3', 'alamat ibu', 'PNS', '89898989', '1', 'ibu');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5682', 'Ayah 4a', 'alamat ayah', 'PNS', '5454545', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5683', 'Ayah 5', 'Alamat ayah', 'Swasta', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5684', 'Ayah 6', 'Alamat ayah', 'TNI', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5685', 'Ayah 7', 'Alamat ayah', 'PNS', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5686', 'Irawan', 'Kwaron, Ngestiharjo, Kasihan, Bantul', 'PNS', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5687', 'Ayah 8', 'Alamat ayah', 'Swasta', '08967555555', '2', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5688', 'Ayah 9', 'Alamat ayah', 'PNS', '08967555555', '2', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5689', 'Ayah 10', 'Alamat ayah', 'Buruh', '08967555555', '2', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5690', 'Ayah 10', 'Alamat ayah', 'PNS', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5691', 'Ayah 11', 'Alamat ayah', 'POLRI', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5692', 'Ayah 12', 'Alamat ayah', 'Swasta', '08967555555', '3', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5693', 'Ayah 13', 'Alamat ayah', 'Wiraswasta', '08967555555', '3', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5694', 'Ayah 14', 'Alamat ayah', 'PNS', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5695', 'Ayah 15', 'Alamat ayah', 'TNI', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5696', 'Ayah 16', 'Alamat ayah', 'Swasta', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5697', 'Ayah 17', 'Alamat ayah', 'PNS', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5698', 'Ayah 18', 'Alamat ayah', 'Swasta', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5699', 'Ayah 19', 'Alamat ayah', 'Buruh', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5700', 'Ayah 20', 'Alamat ayah', 'Buruh', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5701', 'Ayah 21', 'Alamat ayah', 'PNS', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5702', 'Ayah 22', 'Alamat ayah', 'Swasta', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5703', 'Ayah 23', 'Alamat ayah', 'POLRI', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5704', 'Ayah 24', 'Alamat ayah', 'PNS', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5705', 'Ayah 25', 'Alamat ayah', 'Swasta', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5706', 'Ayah 26', 'Alamat ayah', 'Swasta', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5707', 'Ayah 29', 'Alamat ayah', 'PNS', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5708', 'Ayah 30', 'Alamat ayah', 'PNS', '08967555555', '1', 'ayah');
INSERT INTO wali_siswa (`nis`, `nama_wali`, `alamat_wali`, `pekerjaan_wali`, `telp_wali`, `agama_wali`, `status_wali`) VALUES ('5709', 'Wali 31', 'Ngewotan, Ngestiharjo, Kasihan, Bantul', 'PNS', '08967555555', '1', 'ol')