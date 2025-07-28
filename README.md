# EVC
Un site web créé pour ma chorale, rassemblant les fichiers de travail, les programmes des prochains concerts, les informations pour et sur les choristes, etc.
Ce site était à accès privé : seuls les choristes pouvait accéder à ces fichiers.

Créé via Visual Studio Code, hébergé et accessible pendant 1 an sur la plateforme Hostinger avant de passer à e-monsite pour des soucis de gestions par des néophytes.

Tous les fichiers de travail ont été supprimés par soucis de propriétés, sauf un exemple (Locus iste de Bruckner), la partition étant libre de droit et les fichiers midi fait par mes soins.
Les fichiers restants ont été modifiés et le lien du menu sticky "Retour vers le site du choeur" a été désactivé par soucis de sécurité et d'anonymat.

Ce site utilisait phpMyAdmin pour gérer la base de données, ayant 3 tables : 
- la table des utilisateurs : réduite aujourd'hui à 'Admin' et 'choriste' (mdp : evc)
- la table de l'administratif : elle rassemblait les Comptes Rendus des différentes réunions, rangées par catégorie, nom et date.
- la table des partitions avec pour structure : l'id, la catégorie (rangement comme un classeur), le nom de la partition, l'auteur, la présence ou non de fichiers midi, le type de partitions (nombre de voix),
    le nom des documents liés, la présence ou non de pdf, le format des fichiers d'écoute (.mp3, .midi, etc.), la présence ou non de vidéos youtube, le lien de la dite vidéo, la présence ou nom de fichier texte global (paroles, traduction),
    la présence ou non de fichier texte pour chaque pupitre, et enfin l'inclusion ou non pour le prochain concert.


SUITE DU PROJET : 

La partie "Administration" du site, disponible uniquement par l'Admin, a été rajoutée après la fermeture du site.

Elle sert à ajouter les fichiers directement depuis le site, et à gérer les chants présents ou non dans le prochain concert (par un système de coches visibles uniquement par l'admin à côté des titres).
Mais je n'arrive pas à effectuer cette partie du projet avec mes capacités actuelles (besoin des requêtes AJAX). J'y reviendrai.

DISCLAIMER : 

Me formant en autodidacte depuis peu, je me concentre aujourd'hui sur le côté structurel de mon projet plutôt que sur l'esthétique. Je ne cherche pas du tout à devenir UX/UI Designer Developer !
