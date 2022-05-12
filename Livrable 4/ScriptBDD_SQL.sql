/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  5/12/2022 1:25:15 PM                     */
/*==============================================================*/


alter table Ajout 
   drop foreign key FK_AJOUT_AJOUTER_PRODUITS;

alter table Ajout 
   drop foreign key FK_AJOUT_AJOUTER_A_PANIER;

alter table Commande 
   drop foreign key FK_COMMANDE_COMMANDER_CLIENT;

alter table Panier 
   drop foreign key FK_PANIER_DONNERLIE_COMMANDE;

alter table Produits 
   drop foreign key FK_PRODUITS_APPARTENI_CATEGORI;

alter table Produits 
   drop foreign key FK_PRODUITS_ASSOCIATI_PROMOTIO;

alter table Produits 
   drop foreign key FK_PRODUITS_GERER_COMPTEAD;


alter table Ajout 
   drop foreign key FK_AJOUT_AJOUTER_PRODUITS;

alter table Ajout 
   drop foreign key FK_AJOUT_AJOUTER_A_PANIER;

drop table if exists Ajout;

drop table if exists Categorie;

drop table if exists Client;


alter table Commande 
   drop foreign key FK_COMMANDE_COMMANDER_CLIENT;

drop table if exists Commande;

drop table if exists CompteAdmin;


alter table Panier 
   drop foreign key FK_PANIER_DONNERLIE_COMMANDE;

drop table if exists Panier;


alter table Produits 
   drop foreign key FK_PRODUITS_APPARTENI_CATEGORI;

alter table Produits 
   drop foreign key FK_PRODUITS_GERER_COMPTEAD;

alter table Produits 
   drop foreign key FK_PRODUITS_ASSOCIATI_PROMOTIO;

drop table if exists Produits;

drop table if exists Promotion;

/*==============================================================*/
/* Table : Ajout                                                */
/*==============================================================*/
create table Ajout
(
   idProduit            int not null  comment '',
   idPanier             int not null  comment '',
   quantite             int  comment '',
   prixUnit             float  comment '',
   primary key (idProduit, idPanier)
);

/*==============================================================*/
/* Table : Categorie                                            */
/*==============================================================*/
create table Categorie
(
   idCat                int not null  comment '',
   nomCat               varchar(254)  comment '',
   description          varchar(254)  comment '',
   primary key (idCat)
);

/*==============================================================*/
/* Table : Client                                               */
/*==============================================================*/
create table Client
(
   idClient             int not null  comment '',
   nom                  varchar(254)  comment '',
   prenom               varchar(254)  comment '',
   email                varchar(254)  comment '',
   adresse              varchar(254)  comment '',
   codePostal           int  comment '',
   ville                varchar(254)  comment '',
   pays                 varchar(254)  comment '',
   numTel               int  comment '',
   passwordC            varchar(254)  comment '',
   primary key (idClient)
);

/*==============================================================*/
/* Table : Commande                                             */
/*==============================================================*/
create table Commande
(
   idCommande           int not null  comment '',
   idClient             int not null  comment '',
   datecommande         datetime  comment '',
   montant              float  comment '',
   livraison            varchar(254)  comment '',
   etat                 Enum  comment '',
   primary key (idCommande)
);

/*==============================================================*/
/* Table : CompteAdmin                                          */
/*==============================================================*/
create table CompteAdmin
(
   idAdmin              int not null  comment '',
   passwordA            varchar(254)  comment '',
   nom                  varchar(254)  comment '',
   prenom               varchar(254)  comment '',
   email                varchar(254)  comment '',
   primary key (idAdmin)
);

/*==============================================================*/
/* Table : Panier                                               */
/*==============================================================*/
create table Panier
(
   idPanier             int not null  comment '',
   idCommande           int  comment '',
   prixTotal            float  comment '',
   primary key (idPanier)
);

/*==============================================================*/
/* Table : Produits                                             */
/*==============================================================*/
create table Produits
(
   idProduit            int not null  comment '',
   idCat                int not null  comment '',
   idPromo              int  comment '',
   idAdmin              int not null  comment '',
   nomProduit           varchar(254)  comment '',
   prix                 float  comment '',
   stock                int  comment '',
   description          varchar(254)  comment '',
   photo                varchar(254)  comment '',
   primary key (idProduit)
);

/*==============================================================*/
/* Table : Promotion                                            */
/*==============================================================*/
create table Promotion
(
   idPromo              int not null  comment '',
   taux                 int  comment '',
   dateDebut            datetime  comment '',
   dateFin              datetime  comment '',
   primary key (idPromo)
);

alter table Ajout add constraint FK_AJOUT_AJOUTER_PRODUITS foreign key (idProduit)
      references Produits (idProduit) on delete restrict on update restrict;

alter table Ajout add constraint FK_AJOUT_AJOUTER_A_PANIER foreign key (idPanier)
      references Panier (idPanier) on delete restrict on update restrict;

alter table Commande add constraint FK_COMMANDE_COMMANDER_CLIENT foreign key (idClient)
      references Client (idClient) on delete restrict on update restrict;

alter table Panier add constraint FK_PANIER_DONNERLIE_COMMANDE foreign key (idCommande)
      references Commande (idCommande) on delete restrict on update restrict;

alter table Produits add constraint FK_PRODUITS_APPARTENI_CATEGORI foreign key (idCat)
      references Categorie (idCat) on delete restrict on update restrict;

alter table Produits add constraint FK_PRODUITS_ASSOCIATI_PROMOTIO foreign key (idPromo)
      references Promotion (idPromo) on delete restrict on update restrict;

alter table Produits add constraint FK_PRODUITS_GERER_COMPTEAD foreign key (idAdmin)
      references CompteAdmin (idAdmin) on delete restrict on update restrict;

