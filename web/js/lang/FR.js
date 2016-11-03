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
				"admin" : [ "Accueil","","Profile","Mot de passe","Profile", "Liste des scores", "Liste des scores temporaire", "Déconnexion"],
				"super_admin" : [ "Accueil","","Profile","Mot de passe","Profile","Ajouter un utilisateur", "Liste des utilisateurs ", "Liste des scores", "Liste des scores temporaire", "Déconnexion"]
		},
		
		"tables" : {
			"score" : {
				"title": "",
				"th" : ["Problème","K","L","R","N","G","B","S","RN","RG","RB","NB","NG","GB","Fichier de données"],
				"disc" : ["K : nombre de séquences", "L : longeur de séquence", "", "","","","","","","","","","","" ],
				"options" : {
					"accept" : "Ajouter le score",
					"remove" : "Supprimer"
				},
				"messages" : {
					"accept" : "Etes-vous sur de vouloir ajouter le score",
					"remove" : "Etes-vous sur de vouloir supprimer le score"
				}
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
				"devloppers" : "Développer par Ismail ELFAQIR, Adam BENJBARA, et Zakaria LAHYANI."
			}, 
			
			"contactForm" : {
				"title" : "Contactez-nous",
				"email" : "Votre E-mail",
				"msg" : "Votre message",
				"submit" : "Envoyer",
				"error" : "Une erreur s'est produite veuillez réessayer ultérieurement",
				"success" : "Message envoyé"
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
			"addUserForm" : {
				"submit" : "Ajouter"
			}

		}

};



