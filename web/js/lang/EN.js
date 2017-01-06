var lang ={
	
		"lang" : "EN",
		
		"default" : {
			"title" : "Parcimonie Score",
			"footer" : "©2016 ParsimonyScore, all right reserved.",
			"cnx" : "Sign in",
			"allMsg" :"See all messages"
		},
		
		"menu" : {
				"gest" : [ "Home", "About", "Contact us" ],
				"admin" : [ "Home","","Profile","Password", "Scores list", "temporary scores", "Sign out"],
				"super_admin" : [ "Home","","Profile","Password","Add new user", "Users list", "Scores list", "Temporary scores", "Sign out"]
		},
		
		"tables" : {
			"score" : {
				"title": "All scores",
				"th" : ["Problem","K","L","R","N","G","B","S","RN","RG","RB","NB","NG","GB","Data file"],
				"disc" : ["","K : the number of sequences", "L : length of sequence", "", "","","","","","","","","","","" ],
				"options" : {
					"accept" : "Add score",
					"remove" : "Remove",
					"compare" : "Score compare"
				},
				"messages" : {
					"accept" : "Are you sure about adding the score",
					"remove" : "Are you sure about removing the score"
				}
			},
			"compare" : {
				"th" : ["Problem","K","L","R","N","G","B","S","RN","RG","RB","NB","NG","GB","RNGS"]
			},
			"messages" : {
				"th" : ["From", "Receive"]
			},
			"users" : {
				"th" : ["Name", "Email", "Last login", "File loaded", "Option"]
			}
		},
		
		"pages" : {
			"addScoreFrom" : {
				"title" : "Add new score",
				"problem" : "Problem name",
				"type" : "Format of your resource",
				"type_file" : "File",
				"type_text" : "Text",
				"file" : "File format (txt, cvg)",
				"text" : "Past your text here",
				"cancel" : "Cancel",
				"submit" : "Submit",
				"error" : "An error occurred please try again later",
				"success" : "Score added"
			},

			"loginForm" : {
				"title" : "Log in",
				"submit" : "Submit",
				"placeholders" : {
					"username" : "Username", 
					"password" : "Password"
				},
				"username" : "Username", 
				"password" : "Password",
				"keep": "keep my session",
				"nopass" : "Forgot your password?"
			},
			
			"about" : {
				"title" :"About",
				"text" : "",
				"devloppers" : "Developped by Ismail ELFAQIR, Adam BENJBARA, and Zakaria LAHYANI."
			}, 
			
			"contactForm" : {
				"title" : "Contact us",
				"email" : "Email",
				"msg" : "Your message here",
				"submit" : "Send",
				"error" : "An error occurred please try again later",
				"success" : "Message sent"
			},

			"addUserForm" : {
				"title" : "Add user",
				"email" : "Email",
				"username" : "Username",
				"submit" : "Add"
			},

			"editProfilForm" : {
				"title" : "Edit youre profile",
				"email" : "Email",
				"username" : "Username",
				"currentPassword" : "Current password",
				"submit" : "Submit"
			},

			"editPasswordForm" : {
				"title" : "Edit youre password",
				"currentPassword" : "Current password",
				"pass" : "New password",
				"confpass" : "Confirm password",
				"submit" : "Submit"
			},
			
			"fileContent" : {
				"download" : "Download",
				"close" : "Close"
			},
			
			"message" : {
				"title" : "Message",
				"print" : "Print",
				"remove": "Remove",
				"obj" : "Message sent with contact-us form."
			},
			"calculScore" : {
				"tag" : "Calcul the score",
				"title" : "",
				"show_log" : "Show log",
				"hide_log" : "Hide log"
			},
			"compScore" : {
				"tag" : "Compare the score",
				"title" : ""
			},
			"scores" : {
				"title" : "All scores",
				"addOne" : "Add a score",
				"addMany" : "Add many scores",
				"addOneScoreForm_title" : "Add a score",
				"addOneScoreForm_name" : "Problem",
				"addOneScoreForm_submit" : "Add",
				"insertionForm_title" : "browse a file",
				"insertionForm_submit" : "Add"
			},
			"users" : {
				"title" : "All users"
			},
			"AlgoInfo" : {
				"K" : "The number of sequences",
				"L" : "The length of a sequence or number of residues (all sequences have the same length)",
				"R" : "The average score (over 100 runs) of initial solutions generated randomly",
				"N" : "The score of the tree obtained from the neighbor-joinning algorithm (only one tree). In bioinformatics, neighbor joining is a bottom-up (agglomerative) clustering method for the creation of phylogenetic trees, created by Naruya Saitou and Masatoshi Nei in 1987. Usually used for trees based on DNA or protein sequence data, the algorithm requires knowledge of the distance between each pair of taxa (e.g., species or sequences) to form the tree",
				"G" : "The average score (over 100 runs) of initial solutions generated with a greedy algorithm. A greedy algorithm is an algorithmic paradigm that follows the problem solving heuristic of making the locally optimal choice at each stage with the hope of finding a global optimum.",
				"B" : "The best known score, considered as the optimum score obtained by using TNT or SAMPARS",
				"RN" : "The decrease in percentage from R to N. RN=(R-N)/Rx100",
				"RG" : "The decrease in percentage from R to G. RG=(R-G)/Rx100",
				"RB" : "The decrease in percentage from R to B. RB=(R-B)/Rx100",
				"NB" : "The decrease in percentage from N to B. NB=(N-B)/Nx100",
				"NG" : "The decrease in percentage from N to G. NG=(N-G)/Nx100",
				"GB" : "The decrease in percentage from G to B. GB=(G-B)/Gx100",
				"RNGS" : "if is close to 0 then the problem is close to or problem calculed"
			}
			
		}

};




