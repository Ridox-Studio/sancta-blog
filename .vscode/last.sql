CREATE TABLE Pdfs (
	prykey int(11) PRIMARY KEY AUTO_INCREMENT,
    FileId varchar(123) NOT NULL,
    filesName varchar(123) NOT NULL,
    Descriptions varchar(255) NOT NULL,
    Falculty varchar(255) NOT NULL,
    levels varchar(255) NOT NULL,
    Tags varchar(700) NOT NULL,
    Copyright varchar(700) NOT NULL,
    FileDirec varchar(700) NOT NULL,
    DateUpload DATETIME NULL DEFAULT CURRENT_TIMESTAMP
    
    
);

CREATE TABLE unnPdfs (
	prykey int(11) PRIMARY KEY AUTO_INCREMENT,
    FileId varchar(123) NOT NULL,
    filesName varchar(123) NOT NULL,
    Descriptions varchar(255) NOT NULL,
    Falculty varchar(255) NOT NULL,
    levels varchar(255) NOT NULL,
    Tags varchar(700) NOT NULL,
    Copyright varchar(700) NOT NULL,
    FileDirec varchar(700) NOT NULL,
    DateUpload DATETIME NULL DEFAULT CURRENT_TIMESTAMP
    
    
);


CREATE TABLE news (
	NewsNo int(11) PRIMARY KEY AUTO_INCREMENT,
	NewsId varchar(123) NOT NULL,
    Title varchar(123) NOT NULL,
    Description text NOT NULL,
    Cat varchar(255) NOT NULL,
    Img1 varchar(700) NOT NULL,
    Img2 varchar(700) NOT NULL,
    Img3 varchar(700) NOT NULL,
    dateup DATETIME DATE NULL DEFAULT CURRENT_TIMESTAMP
    
    
);
