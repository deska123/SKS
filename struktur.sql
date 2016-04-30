CREATE TABLE jenjang(
	kodejenjang INT,
	namajenjang VARCHAR(40) NOT NULL,
	PRIMARY KEY(kodejenjang)
);

CREATE TABLE fakultas(
	kodefakultas INT,
	namafakultas VARCHAR(70) NOT NULL,
	PRIMARY KEY (kodefakultas)
);

CREATE TABLE prodi(
	kodeprodi INT,
	namaprodi VARCHAR(70) NOT NULL,
	PRIMARY KEY (kodeprodi)
);

CREATE TABLE universitas(
	kodeuniv INT,
	namauniversitas VARCHAR(90) NOT NULL,
	PRIMARY KEY (kodeuniv)
);

CREATE TABLE pendidikan(
	id INT,
	kodejen INT,
	kodefak INT,
	kodeprod INT,
	kodeun INT,
	aturan VARCHAR(20) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (kodejen) REFERENCES jenjang(kodejenjang),
	FOREIGN KEY (kodeun) REFERENCES universitas(kodeuniv),
	FOREIGN KEY (kodefak) REFERENCES fakultas(kodefakultas),
	FOREIGN KEY (kodeprod) REFERENCES prodi(kodeprodi)
);

CREATE TABLE pengguna(
	email VARCHAR(45) NOT NULL,
	username VARCHAR(20) NOT NULL,
	password VARCHAR(50) NOT NULL,
	nama VARCHAR(50),
	idjenjang INT,
	idfakultas INT,
	idprodi INT,
	iduniv INT,
	PRIMARY KEY (username),
	FOREIGN KEY (idjenjang) REFERENCES jenjang(kodejenjang),
	FOREIGN KEY (idfakultas) REFERENCES fakultas(kodefakultas),
	FOREIGN KEY (idprodi) REFERENCES prodi(kodeprodi),
	FOREIGN KEY (iduniv) REFERENCES universitas(kodeuniv)
);

