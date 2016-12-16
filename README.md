ParsimonyScoreProject
=====================

A Symfony project created on October 17, 2016, 10:16 am.


Pour pouvoir utiliser l'application : 

1. il faut en premier temps installer avec synaptic les packages suivants  
	* libxerces-c-dev et libxerces-c3.1
	* libgsl-dev et libgsl2
	* libboost-regex1.58.0

2. importé le projet au sein de votre éspace de travail

3. Créer une base de données nommée ParsimonyScore, puis importer le fichier database/parsimonyscore.sql

4. modifier les parammétres de connections au base de données MySQL ( app/config/parameters.yml )

5. la base de données est fourni avec le code
	* il contient un compte administrateur avec les identifiants suivant 
		- username : admin
		- password : admin 


à cette étape, vous pouvez exploiter toutes les fonctionnalités de l'application.
