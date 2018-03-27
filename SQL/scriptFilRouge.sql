/*==============================================================*/
/* Nom de SGBD :  Microsoft SQL Server 2008                     */
/* Date de création :  05-Jan-18 8:44:56 PM                     */
/*==============================================================*/


if exists (select 1
            from  sysobjects
           where  id = object_id('ACTIVITE2')
            and   type = 'U')
   drop table ACTIVITE2
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('ANIME')
            and   name  = 'ANIME2_FK'
            and   indid > 0
            and   indid < 255)
   drop index ANIME.ANIME2_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('ANIME')
            and   type = 'U')
   drop table ANIME
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('BRACELET')
            and   name  = 'DONNE_ACCES2_FK'
            and   indid > 0
            and   indid < 255)
   drop index BRACELET.DONNE_ACCES2_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('BRACELET')
            and   name  = 'CONFIRME_PAR_FK'
            and   indid > 0
            and   indid < 255)
   drop index BRACELET.CONFIRME_PAR_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('BRACELET')
            and   type = 'U')
   drop table BRACELET
go

if exists (select 1
            from  sysobjects
           where  id = object_id('CLIENT')
            and   type = 'U')
   drop table CLIENT
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('COMPOSE')
            and   name  = 'COMPOSE_FK'
            and   indid > 0
            and   indid < 255)
   drop index COMPOSE.COMPOSE_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('COMPOSE')
            and   name  = 'COMPOSE2_FK'
            and   indid > 0
            and   indid < 255)
   drop index COMPOSE.COMPOSE2_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('COMPOSE')
            and   type = 'U')
   drop table COMPOSE
go

if exists (select 1
            from  sysobjects
           where  id = object_id('ENFANT_DE')
            and   type = 'U')
   drop table ENFANT_DE
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('ENTREEVISITEUR')
            and   name  = 'RESERVE_FK'
            and   indid > 0
            and   indid < 255)
   drop index ENTREEVISITEUR.RESERVE_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('ENTREEVISITEUR')
            and   type = 'U')
   drop table ENTREEVISITEUR
go

if exists (select 1
            from  sysobjects
           where  id = object_id('ENTREPOT')
            and   type = 'U')
   drop table ENTREPOT
go

if exists (select 1
            from  sysobjects
           where  id = object_id('ENVIRONNEMENT')
            and   type = 'U')
   drop table ENVIRONNEMENT
go

if exists (select 1
            from  sysobjects
           where  id = object_id('FAMILLE')
            and   type = 'U')
   drop table FAMILLE
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('FOURNISSEUR')
            and   name  = 'FOURNI_FK'
            and   indid > 0
            and   indid < 255)
   drop index FOURNISSEUR.FOURNI_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('FOURNISSEUR')
            and   type = 'U')
   drop table FOURNISSEUR
go

if exists (select 1
            from  sysobjects
           where  id = object_id('INGREDIENT')
            and   type = 'U')
   drop table INGREDIENT
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('INSCRIT')
            and   name  = 'INSCRIT2_FK'
            and   indid > 0
            and   indid < 255)
   drop index INSCRIT.INSCRIT2_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('INSCRIT')
            and   type = 'U')
   drop table INSCRIT
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('LANCE_COMMANDE')
            and   name  = 'LANCE_COMMANDE_FK'
            and   indid > 0
            and   indid < 255)
   drop index LANCE_COMMANDE.LANCE_COMMANDE_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('LANCE_COMMANDE')
            and   name  = 'LANCE_COMMANDE3_FK'
            and   indid > 0
            and   indid < 255)
   drop index LANCE_COMMANDE.LANCE_COMMANDE3_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('LANCE_COMMANDE')
            and   name  = 'LANCE_COMMANDE2_FK'
            and   indid > 0
            and   indid < 255)
   drop index LANCE_COMMANDE.LANCE_COMMANDE2_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('LANCE_COMMANDE')
            and   type = 'U')
   drop table LANCE_COMMANDE
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('MANGE')
            and   name  = 'MANGE_FK'
            and   indid > 0
            and   indid < 255)
   drop index MANGE.MANGE_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('MANGE')
            and   type = 'U')
   drop table MANGE
go

if exists (select 1
            from  sysobjects
           where  id = object_id('MENU')
            and   type = 'U')
   drop table MENU
go

if exists (select 1
            from  sysobjects
           where  id = object_id('PLAT')
            and   type = 'U')
   drop table PLAT
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('PRIX')
            and   name  = 'S_APPLIQUE_FK'
            and   indid > 0
            and   indid < 255)
   drop index PRIX.S_APPLIQUE_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('PRIX')
            and   name  = 'CORRESPOND_FK'
            and   indid > 0
            and   indid < 255)
   drop index PRIX.CORRESPOND_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('PRIX')
            and   type = 'U')
   drop table PRIX
go

if exists (select 1
            from  sysobjects
           where  id = object_id('PROGRAMMECONSERVATIONESPECE')
            and   type = 'U')
   drop table PROGRAMMECONSERVATIONESPECE
go

if exists (select 1
            from  sysobjects
           where  id = object_id('PROIE_DE')
            and   type = 'U')
   drop table PROIE_DE
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('RAYON')
            and   name  = 'COMPOSE_DE_FK'
            and   indid > 0
            and   indid < 255)
   drop index RAYON.COMPOSE_DE_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('RAYON')
            and   type = 'U')
   drop table RAYON
go

if exists (select 1
            from  sysobjects
           where  id = object_id('REDUCTION')
            and   type = 'U')
   drop table REDUCTION
go

if exists (select 1
            from  sysobjects
           where  id = object_id('REGIME')
            and   type = 'U')
   drop table REGIME
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('RESERVATION')
            and   name  = 'S_APPLIQUE__FK'
            and   indid > 0
            and   indid < 255)
   drop index RESERVATION.S_APPLIQUE__FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('RESERVATION')
            and   name  = 'EFFECTUE_FK'
            and   indid > 0
            and   indid < 255)
   drop index RESERVATION.EFFECTUE_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('RESERVATION')
            and   type = 'U')
   drop table RESERVATION
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('SE_COMPOSE')
            and   name  = 'SE_COMPOSE_FK'
            and   indid > 0
            and   indid < 255)
   drop index SE_COMPOSE.SE_COMPOSE_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('SE_COMPOSE')
            and   name  = 'SE_COMPOSE2_FK'
            and   indid > 0
            and   indid < 255)
   drop index SE_COMPOSE.SE_COMPOSE2_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('SE_COMPOSE')
            and   type = 'U')
   drop table SE_COMPOSE
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('SONT_CUISINES_AVEC')
            and   name  = 'SONT_CUISINES_AVEC_FK'
            and   indid > 0
            and   indid < 255)
   drop index SONT_CUISINES_AVEC.SONT_CUISINES_AVEC_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('SONT_CUISINES_AVEC')
            and   name  = 'SONT_CUISINES_AVEC2_FK'
            and   indid > 0
            and   indid < 255)
   drop index SONT_CUISINES_AVEC.SONT_CUISINES_AVEC2_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('SONT_CUISINES_AVEC')
            and   type = 'U')
   drop table SONT_CUISINES_AVEC
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('STOCKE')
            and   name  = 'STOCKE_FK'
            and   indid > 0
            and   indid < 255)
   drop index STOCKE.STOCKE_FK
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('STOCKE')
            and   name  = 'STOCKE2_FK'
            and   indid > 0
            and   indid < 255)
   drop index STOCKE.STOCKE2_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('STOCKE')
            and   type = 'U')
   drop table STOCKE
go

if exists (select 1
            from  sysobjects
           where  id = object_id('TRAITE')
            and   type = 'U')
   drop table TRAITE
go

if exists (select 1
            from  sysindexes
           where  id    = object_id('ZONE')
            and   name  = 'COMPREND_FK'
            and   indid > 0
            and   indid < 255)
   drop index ZONE.COMPREND_FK
go

if exists (select 1
            from  sysobjects
           where  id = object_id('ZONE')
            and   type = 'U')
   drop table ZONE
go

/*==============================================================*/
/* Table : ACTIVITE2                                            */
/*==============================================================*/
create table ACTIVITE2 (
   CODEACTIVITE         int                  not null,
   LIBELLEACTIVITE      char(50)             null,
   TYPEACTIVITE         char(8)              null,
   DATEDEBUTACTIVITE    datetime             null,
   DATEFINACTIVITE      datetime             null,
   AGEMINACTIVITE       int                  null,
   ACCES                bit                  not null default False,
   constraint PK_ACTIVITE2 primary key nonclustered (CODEACTIVITE)
)
go

/*==============================================================*/
/* Table : ANIME                                                */
/*==============================================================*/
create table ANIME (
   CODEACTIVITE         int                  not null,
   CODESALARIE          int                  not null,
   constraint PK_ANIME primary key nonclustered (CODEACTIVITE, CODESALARIE)
)
go

/*==============================================================*/
/* Index : ANIME2_FK                                            */
/*==============================================================*/
create index ANIME2_FK on ANIME (
CODEACTIVITE ASC
)
go

/*==============================================================*/
/* Table : BRACELET                                             */
/*==============================================================*/
create table BRACELET (
   CODEBRACELET         int                  not null,
   CODEENTREEVISITEUR   int                  not null,
   CODEACTIVITE         int                  not null,
   DATEATTRIBUTION      datetime             null,
   TYPEENTREE           char(256)            null,
   DATEEFFET            datetime             null,
   DATEEXPIRATION       datetime             null,
   COULEUR              char(20)             null,
   constraint PK_BRACELET primary key nonclustered (CODEBRACELET)
)
go
/*==============================================================*/
/* Index : CONFIRME_PAR_FK                                      */
/*==============================================================*/
create index CONFIRME_PAR_FK on BRACELET (
CODEENTREEVISITEUR ASC
)
go

/*==============================================================*/
/* Index : DONNE_ACCES2_FK                                      */
/*==============================================================*/
create index DONNE_ACCES2_FK on BRACELET (
CODEACTIVITE ASC
)
go

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT (
   CODECLIENT           int                  not null,
   NOMCLIENT            char(100)            null,
   PRENOMCLIENT         char(100)            null,
   DATENAISSANCECLIEN   datetime             null,
   ADRESSECLIENT        char(250)            null,
   VILLECLIENT          char(50)             null,
   TEL                  int                  null,
   NEWSLETTERS          bit                  null,
   EMAIL                char(256)            null,
   MOTDEPASSE           char(256)            null,
   constraint PK_CLIENT primary key nonclustered (CODECLIENT)
)
go

/*==============================================================*/
/* Table : COMPOSE                                              */
/*==============================================================*/
create table COMPOSE (
   CODEINGREDIENT       int                  not null,
   CODEREGIME           int                  not null,
   QUANTITEINGREDIENT   float                null,
   constraint PK_COMPOSE primary key nonclustered (CODEINGREDIENT, CODEREGIME)
)
go

/*==============================================================*/
/* Index : COMPOSE2_FK                                          */
/*==============================================================*/
create index COMPOSE2_FK on COMPOSE (
CODEINGREDIENT ASC
)
go

/*==============================================================*/
/* Index : COMPOSE_FK                                           */
/*==============================================================*/
create index COMPOSE_FK on COMPOSE (
CODEREGIME ASC
)
go

/*==============================================================*/
/* Table : ENFANT_DE                                            */
/*==============================================================*/
create table ENFANT_DE (
   CODEANIMAL           int                  not null,
   ANI_CODEANIMAL       int                  not null,
   constraint PK_ENFANT_DE primary key nonclustered (CODEANIMAL, ANI_CODEANIMAL)
)
go

/*==============================================================*/
/* Table : ENTREEVISITEUR                                       */
/*==============================================================*/
create table ENTREEVISITEUR (
   CODEENTREEVISITEUR   int                  not null,
   CODERESERVATION      char(256)            not null,
   NOMVISITEUR          char(100)            null,
   AGEVISITEUR          int                  null,
   DATEENTREE           datetime             null,
   constraint PK_ENTREEVISITEUR primary key nonclustered (CODEENTREEVISITEUR)
)
go

/*==============================================================*/
/* Index : RESERVE_FK                                           */
/*==============================================================*/
create index RESERVE_FK on ENTREEVISITEUR (
CODERESERVATION ASC
)
go

/*==============================================================*/
/* Table : ENTREPOT                                             */
/*==============================================================*/
create table ENTREPOT (
   CODEENTREPOT         int                  not null,
   CODESALARIE          int                  not null,
   ADRESSEENTREPOT      char(256)            null,
   constraint PK_ENTREPOT primary key nonclustered (CODEENTREPOT)
)
go

/*==============================================================*/
/* Table : ENVIRONNEMENT                                        */
/*==============================================================*/
create table ENVIRONNEMENT (
   CODEENVIRONNEMENT    char(256)            not null,
   CODESALARIE          int                  not null,
   LIBELLEENVIRONNEMENT char(256)            null,
   TEMPERATUREENVIRONNEMENT float                null,
   TYPEENVIRONNEMENT    char(256)            null,
   constraint PK_ENVIRONNEMENT primary key nonclustered (CODEENVIRONNEMENT)
)
go

/*==============================================================*/
/* Table : FAMILLE                                              */
/*==============================================================*/
create table FAMILLE (
   RACE                 char(25)             not null,
   ORIGINE              char(25)             not null,
   AMI                  bit                  null,
   constraint PK_FAMILLE primary key nonclustered (ORIGINE, RACE)
)
go

/*==============================================================*/
/* Table : FOURNISSEUR                                          */
/*==============================================================*/
create table FOURNISSEUR (
   CODEFOURNISSEUR      int                  not null,
   CODEINGREDIENT       int                  not null,
   constraint PK_FOURNISSEUR primary key nonclustered (CODEFOURNISSEUR)
)
go

/*==============================================================*/
/* Index : FOURNI_FK                                            */
/*==============================================================*/
create index FOURNI_FK on FOURNISSEUR (
CODEINGREDIENT ASC
)
go

/*==============================================================*/
/* Table : INGREDIENT                                           */
/*==============================================================*/
create table INGREDIENT (
   CODEINGREDIENT       int                  not null,
   CALORIESPARKG        float                null,
   CONDITIONSCONSERVATION char(256)            null,
   constraint PK_INGREDIENT primary key nonclustered (CODEINGREDIENT)
)
go

/*==============================================================*/
/* Table : INSCRIT                                              */
/*==============================================================*/
create table INSCRIT (
   CODEPROGRAMME        int                  not null,
   CODEANIMAL           int                  not null,
   constraint PK_INSCRIT primary key nonclustered (CODEPROGRAMME, CODEANIMAL)
)
go

/*==============================================================*/
/* Index : INSCRIT2_FK                                          */
/*==============================================================*/
create index INSCRIT2_FK on INSCRIT (
CODEPROGRAMME ASC
)
go

/*==============================================================*/
/* Table : LANCE_COMMANDE                                       */
/*==============================================================*/
create table LANCE_COMMANDE (
   CODEENTREPOT         int                  not null,
   CODEFOURNISSEUR      int                  not null,
   CODEINGREDIENT       int                  not null,
   QUANTITECOMMANDE     float                null,
   constraint PK_LANCE_COMMANDE primary key nonclustered (CODEENTREPOT, CODEFOURNISSEUR, CODEINGREDIENT)
)
go

/*==============================================================*/
/* Index : LANCE_COMMANDE2_FK                                   */
/*==============================================================*/
create index LANCE_COMMANDE2_FK on LANCE_COMMANDE (
CODEENTREPOT ASC
)
go

/*==============================================================*/
/* Index : LANCE_COMMANDE3_FK                                   */
/*==============================================================*/
create index LANCE_COMMANDE3_FK on LANCE_COMMANDE (
CODEFOURNISSEUR ASC
)
go

/*==============================================================*/
/* Index : LANCE_COMMANDE_FK                                    */
/*==============================================================*/
create index LANCE_COMMANDE_FK on LANCE_COMMANDE (
CODEINGREDIENT ASC
)
go

/*==============================================================*/
/* Table : MANGE                                                */
/*==============================================================*/
create table MANGE (
   CODEANIMAL           int                  not null,
   CODEMENU             int                  not null,
   constraint PK_MANGE primary key nonclustered (CODEANIMAL, CODEMENU)
)
go

/*==============================================================*/
/* Index : MANGE_FK                                             */
/*==============================================================*/
create index MANGE_FK on MANGE (
CODEMENU ASC
)
go

/*==============================================================*/
/* Table : MENU                                                 */
/*==============================================================*/
create table MENU (
   CODEMENU             int                  not null,
   QTEVIANDE            float                null,
   QTELEGUME            float                null,
   constraint PK_MENU primary key nonclustered (CODEMENU)
)
go

/*==============================================================*/
/* Table : PLAT                                                 */
/*==============================================================*/
create table PLAT (
   CODEPLAT             int                  not null,
   TYPEPLAT             char(15)             null,
   constraint PK_PLAT primary key nonclustered (CODEPLAT)
)
go

/*==============================================================*/
/* Table : PRIX                                                 */
/*==============================================================*/
create table PRIX (
   CODEPRIX             int                  not null,
   CODEENTREEVISITEUR   int                  null,
   CODEACTIVITE         int                  null,
   AGEMINPRIX           int                  null,
   AGEMAXPRIX           int                  null,
   PRIX                 float                null,
   constraint PK_PRIX primary key nonclustered (CODEPRIX)
)
go

/*==============================================================*/
/* Index : CORRESPOND_FK                                        */
/*==============================================================*/
create index CORRESPOND_FK on PRIX (
CODEACTIVITE ASC
)
go

/*==============================================================*/
/* Index : S_APPLIQUE_FK                                        */
/*==============================================================*/
create index S_APPLIQUE_FK on PRIX (
CODEENTREEVISITEUR ASC
)
go

/*==============================================================*/
/* Table : PROGRAMMECONSERVATIONESPECE                          */
/*==============================================================*/
create table PROGRAMMECONSERVATIONESPECE (
   CODEPROGRAMME        int                  not null,
   LIBELLEPROGRAMME     char(256)            null,
   TYPEPROGRAMME        char(256)            null,
   constraint PK_PROGRAMMECONSERVATIONESPECE primary key nonclustered (CODEPROGRAMME)
)
go

/*==============================================================*/
/* Table : PROIE_DE                                             */
/*==============================================================*/
create table PROIE_DE (
   CODEANIMAL           int                  not null,
   ANI_CODEANIMAL       int                  not null,
   constraint PK_PROIE_DE primary key nonclustered (CODEANIMAL, ANI_CODEANIMAL)
)
go

/*==============================================================*/
/* Table : RAYON                                                */
/*==============================================================*/
create table RAYON (
   CODERAYON            int                  not null,
   CODEENTREPOT         int                  not null,
   CODESALARIE          int                  not null,
   LIBELLERAYON         char(256)            null,
   CAPACITESTOCKAGE     float                null,
   TEMPERATURERAYON     float                null,
   constraint PK_RAYON primary key nonclustered (CODERAYON)
)
go

/*==============================================================*/
/* Index : COMPOSE_DE_FK                                        */
/*==============================================================*/
create index COMPOSE_DE_FK on RAYON (
CODEENTREPOT ASC
)
go

/*==============================================================*/
/* Table : REDUCTION                                            */
/*==============================================================*/
create table REDUCTION (
   CODEREDUC            int                  not null,
   FORMULE              bit                  null,
   CODEPROMO            char(256)            null,
   DATEFINPROMO         datetime             null,
   DATEDEBUTPROMO       datetime             null,
   constraint PK_REDUCTION primary key nonclustered (CODEREDUC)
)
go

/*==============================================================*/
/* Table : REGIME                                               */
/*==============================================================*/
create table REGIME (
   CODEREGIME           int                  not null,
   LIBELLEREGIME        char(256)            null,
   constraint PK_REGIME primary key nonclustered (CODEREGIME)
)
go

/*==============================================================*/
/* Table : RESERVATION                                          */
/*==============================================================*/
create table RESERVATION (
   CODERESERVATION      char(256)            not null,
   CODECLIENT           int                  not null,
   CODEREDUC            int                  null,
   ANNULABLE            bit                  null,
   MOYENPAYEMENT        char(256)            null,
   DATEOPERATION        datetime             null,
   DATERESERVATION      datetime             null,
   TOTALPAYE            float                null,
   constraint PK_RESERVATION primary key nonclustered (CODERESERVATION)
)
go

/*==============================================================*/
/* Index : EFFECTUE_FK                                          */
/*==============================================================*/
create index EFFECTUE_FK on RESERVATION (
CODECLIENT ASC
)
go

/*==============================================================*/
/* Index : S_APPLIQUE__FK                                       */
/*==============================================================*/
create index S_APPLIQUE__FK on RESERVATION (
CODEREDUC ASC
)
go

/*==============================================================*/
/* Table : SE_COMPOSE                                           */
/*==============================================================*/
create table SE_COMPOSE (
   CODEMENU             int                  not null,
   CODEPLAT             int                  not null,
   constraint PK_SE_COMPOSE primary key nonclustered (CODEMENU, CODEPLAT)
)
go

/*==============================================================*/
/* Index : SE_COMPOSE2_FK                                       */
/*==============================================================*/
create index SE_COMPOSE2_FK on SE_COMPOSE (
CODEMENU ASC
)
go

/*==============================================================*/
/* Index : SE_COMPOSE_FK                                        */
/*==============================================================*/
create index SE_COMPOSE_FK on SE_COMPOSE (
CODEPLAT ASC
)
go

/*==============================================================*/
/* Table : SONT_CUISINES_AVEC                                   */
/*==============================================================*/
create table SONT_CUISINES_AVEC (
   CODEPLAT             int                  not null,
   CODEINGREDIENT       int                  not null,
   constraint PK_SONT_CUISINES_AVEC primary key nonclustered (CODEPLAT, CODEINGREDIENT)
)
go

/*==============================================================*/
/* Index : SONT_CUISINES_AVEC2_FK                               */
/*==============================================================*/
create index SONT_CUISINES_AVEC2_FK on SONT_CUISINES_AVEC (
CODEPLAT ASC
)
go

/*==============================================================*/
/* Index : SONT_CUISINES_AVEC_FK                                */
/*==============================================================*/
create index SONT_CUISINES_AVEC_FK on SONT_CUISINES_AVEC (
CODEINGREDIENT ASC
)
go

/*==============================================================*/
/* Table : STOCKE                                               */
/*==============================================================*/
create table STOCKE (
   CODERAYON            int                  not null,
   CODEINGREDIENT       int                  not null,
   constraint PK_STOCKE primary key nonclustered (CODERAYON, CODEINGREDIENT)
)
go

/*==============================================================*/
/* Index : STOCKE2_FK                                           */
/*==============================================================*/
create index STOCKE2_FK on STOCKE (
CODERAYON ASC
)
go

/*==============================================================*/
/* Index : STOCKE_FK                                            */
/*==============================================================*/
create index STOCKE_FK on STOCKE (
CODEINGREDIENT ASC
)
go

/*==============================================================*/
/* Table : TRAITE                                               */
/*==============================================================*/
create table TRAITE (
   CODEANIMAL           int                  not null,
   CODESALARIE          int                  not null,
   constraint PK_TRAITE primary key nonclustered (CODEANIMAL, CODESALARIE)
)
go

/*==============================================================*/
/* Table : ZONE                                                 */
/*==============================================================*/
create table ZONE (
   CODEZONE             int                  not null,
   CODEENVIRONNEMENT    char(256)            not null,
   CODESALARIE          int                  not null,
   LARGEUR              float                null,
   HAUTEUR              float                null,
   LONGUEUR             float                null,
   TYPEZONE             char(100)            null,
   constraint PK_ZONE primary key nonclustered (CODEZONE)
)
go

/*==============================================================*/
/* Index : COMPREND_FK                                          */
/*==============================================================*/
create index COMPREND_FK on ZONE (
CODEENVIRONNEMENT ASC
)
go

