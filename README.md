ParsimonyScoreProject
=====================

A Symfony project created on October 17, 2016, 10:16 am.


Pour pouvoir utiliser l'application : 

1. il faut en premier temps installer avec synaptic les packages suivants  
	* libxerces-c-dev et libxerces-c3.1
	* libgsl-dev et libgsl2
	* libboost-regex1.58.0
	* mysql_server et mysql_client
	* phpMyAdmin
	* Php5

2. importé le projet au sein de votre éspace de travail (/var/www/html)

3. Créer une base de données nommée ParsimonyScore, puis importer le fichier database/ParsimonyScore.sql

4. Modifier les parammétres de connections au base de données MySQL ( app/config/parameters.yml )

5. Executer les commande suivants si sur lunix :
	- sudo chmod -R 777 app/cache
	- sudo chmod -R 777 app/logs
	- sudo chmod -R 777 web

6. La base de données est fourni avec le code
	* il contient un compte administrateur avec les identifiants suivant 
		- username : admin
		- password : admin 


à cette étape, vous pouvez exploiter toutes les fonctionnalités de l'application.
