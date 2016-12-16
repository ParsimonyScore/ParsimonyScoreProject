var lang ={
	
		"lang" : "FR",
		
		"default" : {
			"title" : "Parcimonie Score",
			"footer" : "©2016 ParsimonyScore, tous droits réservés.",
			"cnx" : "Connexion",
			"allMsg" :"Voir tous les messages"
		},
		
		"menu" : {
				"gest" : [ "Accueil", "À propos", "Contactez-nous" ],
				"admin" : [ "Accueil","","Profile","Mot de passe", "Liste des scores", "Liste des scores temporaire", "Déconnexion"],
				"super_admin" : [ "Accueil","","Profile","Mot de passe","Ajouter un utilisateur", "Liste des utilisateurs ", "Liste des scores", "Liste des scores temporaire", "Déconnexion"]
		},
		
		"tables" : {
			"score" : {
				"title": "",
				"th" : ["Problème","K","L","R","N","G","B","S","RN","RG","RB","NB","NG","GB","Fichier de données"],
				"disc" : ["K : nombre de séquences", "L : longeur de séquence", "", "","","","","","","","","","","" ],
				"options" : {
					"accept" : "Ajouter le score",
					"remove" : "Supprimer",
					"compare" : "Compraison du score"
				},
				"messages" : {
					"accept" : "Etes-vous sur de vouloir ajouter le score",
					"remove" : "Etes-vous sur de vouloir supprimer le score"
				}
			},
			"compare" : {
				"th" : ["Problème","K","L","R","N","G","B","S","RN","RG","RB","NB","NG","GB","RNGS"]
			},
			"messages" : {
				"th" : ["Par", "Reçu le"]
			},
			"users" : {
				"th" : ["Nom", "Email", "Dernière connexion", "Fichier chargé", "Option"]
			}
		},
		
		"pages" : {
			"addScoreFrom" : {
				"title" : "Ajouter un nouveau score",
				"problem" : "Nom de problème",
				"type" : "Choisissez votre format",
				"type_file" : "Fichier",
				"type_text" : "Texte",
				"file" : "Fichier de format (txt, cvg)",
				"text" : "Coller votre text ici",
				"cancel" : "Annuler",
				"submit" : "Envoyer",
				"error" : "Une erreur s'est produite veuillez réessayer ultérieurement",
				"success" : "Score ajouté"
			},

			"loginForm" : {
				"title" : "S'identifier",
				"submit" : "Envoyer",
				"placeholders" : {
					"username" : "Login", 
					"password" : "Mot de passe"
				},
				"username" : "Nom d'utilisateur", 
				"password" : "Mot de passe",
				"keep": "Garder ma session ouverte",
				"nopass" : "Mt de passe oublié?"
			},
			
			"about" : {
				"title" :"À propos",
				"text" : "Ce site est un application web pour la prédiction du score de parcimonie de problèmes en phylogénie.",
				"devloppers" : "Développer par <a href=\"http://elfaqir-ismail.me/\">Ismail ELFAQIR</a>, <a href=\"http://www.doyoubuzz.com/adam-benjbara\">Adam BENJBARA</a>, et <a href=\"http://lahyani-zakaria.com\">Zakaria LAHYANI.</a>"
			}, 
			
			"contactForm" : {
				"title" : "Contactez-nous",
				"email" : "Votre E-mail",
				"msg" : "Votre message",
				"submit" : "Envoyer",
				"error" : "Une erreur s'est produite veuillez réessayer ultérieurement",
				"success" : "Message envoyé"
			},

			"addUserForm" : {
				"title" : "Ajouter un utilisateur",
				"email" : "Email",
				"username" : "Nom d'utilisateur",
				"submit" : "Ajouter"
			},

			"editProfilForm" : {
				"title" : "Modifier votre profil",
				"email" : "Email",
				"username" : "Nom d'utilisateur",
				"currentPassword" : "Mot de passe actuel",
				"submit" : "Envoyer"
			},

			"editPasswordForm" : {
				"title" : "Modifier votre mot de passe",
				"currentPassword" : "Mot de passe actuel",
				"pass" : "Nouveau mot de passe",
				"confpass" : "Confirmer votre mot de passe",
				"submit" : "Submit"
			},
			
			"fileContent" : {
				"download" : "Télécharger",
				"close" : "Fermer"
			},
			"message" : {
				"title" : "Message",
				"print" : "Imprimmer",
				"remove": "Supprimer",
				"obj" : "Message envoyé par le formulaire contactez-nous."
			},
			"calculScore" : {
				"tag" : "Calcul de score",
				"title" : "",
				"show_log" : "Afficher le Log",
				"hide_log" : "Cacher"
			},
			"compScore" : {
				"tag" : "Comparer le score",
				"title" : ""
			},
			"scores" : {
				"title" : "Tous les scores",
				"addOne" : "Ajouter un score",
				"addMany" : "Ajouter plusieurs scores",
				"addOneScoreForm_title" : "Ajouter un score",
				"addOneScoreForm_name" : "Problèm",
				"addOneScoreForm_submit" : "Ajouter",
				"insertionForm_title" : "Inserer un fichier",
				"insertionForm_submit" : "Ajouter"
			},
			"users" : {
				"title" : "Tous les utilisateurs"
			},
			"AlgoInfo" : {
				"K" : "Le nombre de séquences",
				"L" : "La lengeur d'une séquence (tous les séquences ont les même longueurs)",
				"R" : "Le score moyen (plus de 100 exécution) de solutions initiales générées de façon aléatoire",
				"N" : "Le score de l'arbre obtenu à partir de l'algorithme de neighbor joining (un seul arbre). En bio-informatique, le neighbour joining (ou neighbor joining) est une méthode d'élaboration d'arbres de données phylogénétiques. La méthode neighbor joining se base sur les mêmes principes que les méthodes d'analyse de groupe (cluster analysis), telles que la méthode de UPGMA (qui se base sur les distances génétiques pour construire un arbre phylogénétique). La seule différence de la méthode de neighbor joining est qu'elle tient compte des différences de vitesse d'évolution entre les différentes branches de l'arbre phylogénétique. Cette méthode fournit un arbre non polarisé (non enraciné). Utilisée généralement pour les arbres de données basés sur l'ADN ou les séquences de protéines, l'algorithme requiert la connaissance de la distance entre chaque paire de taxons (par. ex. espèces ou séquences) dans l'arbre.",
				"G" : "Le score moyen (plus de 100 exécution) de solutions initiales générées avec un algorithme glouton. En informatique, un algorithme glouton (greedy algorithm en anglais, parfois appelé aussi algorithme gourmand) est un algorithme qui suit le principe de faire, étape par étape, un choix optimum local. Dans certains cas cette approche permet d'arriver à un optimum global, mais dans le cas général c'est une heuristique. L'illustration ci-contre montre un cas où ce principe est mis en échec.",
				"B" : "Le meilleur score connu, considéré comme le score optimal obtenu en utilisant TNT ou SAMPARS"
			}

		}

};



