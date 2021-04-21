#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Editor
#------------------------------------------------------------

CREATE TABLE Editor(
        ID   Int  Auto_increment  NOT NULL ,
        Name Varchar (50) NOT NULL
	,CONSTRAINT Editor_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Manga
#------------------------------------------------------------

CREATE TABLE Manga(
        ID            Int  Auto_increment  NOT NULL ,
        Name          Varchar (50) NOT NULL ,
        Author        Varchar (50) NOT NULL ,
        ReleaseDate   Date NOT NULL ,
        AgeLimit      Int NOT NULL ,
        Genre         Varchar (50) NOT NULL ,
        photo         Varchar (250) NOT NULL ,
        StreamingLink Varchar (250) NOT NULL ,
        Synopsis      Varchar (250) NOT NULL ,
        ID_Editor     Int NOT NULL
	,CONSTRAINT Manga_PK PRIMARY KEY (ID)

	,CONSTRAINT Manga_Editor_FK FOREIGN KEY (ID_Editor) REFERENCES Editor(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table:  Volume
#------------------------------------------------------------

CREATE TABLE Volume(
        ID       Int  Auto_increment  NOT NULL ,
        Number   Int NOT NULL ,
        Name     Varchar (50) NOT NULL ,
        Edition  Varchar (50) NOT NULL ,
        ID_Manga Int NOT NULL
	,CONSTRAINT Volume_PK PRIMARY KEY (ID)

	,CONSTRAINT Volume_Manga_FK FOREIGN KEY (ID_Manga) REFERENCES Manga(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Chapter
#------------------------------------------------------------

CREATE TABLE Chapter(
        ID         Int  Auto_increment  NOT NULL ,
        Title      Varchar (50) NOT NULL ,
        Number     Int NOT NULL ,
        photo      Varchar (50) NOT NULL ,
        ID__Volume Int NOT NULL
	,CONSTRAINT Chapter_PK PRIMARY KEY (ID)

	,CONSTRAINT Chapter_Volume_FK FOREIGN KEY (ID__Volume) REFERENCES Volume(ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        ID       Int  Auto_increment  NOT NULL ,
        Firstame Varchar (50) NOT NULL ,
        Password Varchar (50) NOT NULL ,
        Login    Varchar (50) NOT NULL ,
        photo    Varchar (50) NOT NULL
	,CONSTRAINT User_PK PRIMARY KEY (ID)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Pages
#------------------------------------------------------------

CREATE TABLE Pages(
        ID         Int  Auto_increment  NOT NULL ,
        Number     Int NOT NULL ,
        photo      Varchar (50) NOT NULL ,
        ID_Chapter Int NOT NULL
	,CONSTRAINT Pages_PK PRIMARY KEY (ID)

	,CONSTRAINT Pages_Chapter_FK FOREIGN KEY (ID_Chapter) REFERENCES Chapter(ID)
)ENGINE=InnoDB;

