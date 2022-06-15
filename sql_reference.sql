CREATE TABLE derechohabiente(
    apPat varchar(50),
    apMat varchar(50),
    nombre varchar(50),
    calle varchar(80),
    numExt varchar(12),
    numInt varchar(12),
    colonia varchar(80),
    municipio varchar(80),
    entidadfed varchar(80),
    cp int(5),
    telfijo varchar(12),
    telcel varchar(12),
    correo varchar(80),
    ocupacion varchar(60),
    curp varchar(18),
    plaza varchar(30),
    sueldo int(6),
    nemp varchar(8),
    adscripcion varchar(50),
    horario varchar(20),
    extension int(8),
    contrasena varchar(50),
    imagen longblob,
    CONSTRAINT pkderechohabiente PRIMARY KEY(nemp)
);

CREATE TABLE nino(
    apPatN varchar(50),
    apMatN varchar(50),
    nombreN varchar(50),
    fnac date,
    curpN varchar(20),
    imagen longblob,
    folio varchar(10),
    nemp varchar(8),
    cendi varchar(50),
    ciclo varchar(50),
    CONSTRAINT fknino FOREIGN KEY(nemp) REFERENCES derechohabiente(nemp) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT pknino PRIMARY KEY(folio,nemp)
);

CREATE TABLE conyuge(
    apPatC varchar(50),
    apMatC  varchar(50),
    nombreC varchar(50),
    trabajocon varchar(50),
    callecon varchar(80),
    numExtcon varchar(12),
    numIntcon varchar(12),
    coloniacon varchar(80),
    municipiocon varchar(80),
    teltrab varchar(12),
    ext varchar(10),
    curpcon varchar(18),
    nemp varchar(8),
    CONSTRAINT fkcon FOREIGN KEY(nemp) REFERENCES derechohabiente(nemp) ON UPDATE CASCADE ON DELETE CASCADE,
    CONSTRAINT pkcon PRIMARY KEY(nemp)

);

CREATE TABLE administradores(
    usera varchar(50) PRIMARY KEY,
    ctr varchar(50)
);

CREATE TABLE horarios(
    nemp varchar(8),
    horario varchar(50),
    disp int,
    id int PRIMARY KEY not null AUTO_INCREMENT ,
    CONSTRAINT fkhorarios FOREIGN KEY (nemp) REFERENCES derechohabiente(nemp)
);

INSERT into horarios (horario,disp) VALUES("7:00 AM - 7:30 PM","0");
INSERT into horarios (horario,disp) VALUES("7:30 AM - 8:00 PM","0");
INSERT into horarios (horario,disp) VALUES("8:00 AM - 8:30 PM","0");