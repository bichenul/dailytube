        <!--Menu horizontal 2-->	
        <div class="container-fluid btn-group-wrap">
            <div class="row no-pad"><div class="hidden-xs col-sm-2 col-md-2 col-lg-2"></div>
                <div class="btn-group hidden-xs col-sm-10 col-md-10 col-lg-10 text-center menu-horizontal2 no-pad" id="accueil">
                    <button type="button" class="btn btn-xs btn-primary">Accueil</button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">
                        Filtres rapides <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Francais</a></li>
                            <li><a href="#">Parus cette semaine</a></li>
                            <li><a href="#">Publié en France</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">
                        Langues <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Francais</a></li>
                            <li><a href="#">Russe</a></li>
                            <li><a href="#">Anglais</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">
                        Zones géographiques <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">France</a></li>
                            <li><a href="#">Europe</a></li>
                            <li><a href="#">Etats-Unis</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">
                        Dates de Publication <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">1 jour</a></li>
                            <li><a href="#">une semaine</a></li>
                            <li><a href="#">un an</a></li>
                        </ul>
                    </div>
                </div>       
            </div>
		</div>	
		<!--DIV PRINCIPALE--> 
		<div class="container-fluid divPrincipale">    
			<div class="row content">
				<!---menu vertical gauche-->
				<nav class=" navbar hidden-xs col-sm-2 col-md-2 col-lg-2" id="myScrollspy">
				  <ul class="nav nav-pills nav-stacked span2">
					<h3>Catégories</h3>
					<HR width="100%">
					<li><a href="#accueil">Accueil</a></li>
					<li><a href="#">Tendances</a></li>
					<li><a href="#">Historique</a></li>
					<HR width="100%">
					<li class="active"><a href="#Films">Films</a></li>
					<li><a href="#Sport">Sport</a></li>
					<li><a href="#Musique">Musique</a></li>
					<li><a href="#Actualites">Actualités</a></li>
					<li><a href="#Series">Series</a></li>
				  </ul>
				</nav>
			

				
				<!--DIV droite contenant les vidéos-->
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
			
					<!-- ROW Films-->
					<div class="row no-padding no-margin-bottom panel-group" id="Films">
						<ul class="list-inline no-margin-bottom">
							<li><h3 class="no-margin-bottom">Films</h3></li>
							<li><button class="btn btn-default btn-sm glyphicon glyphicon-menu-down margin-bottom-10" data-toggle="collapse" data-target="#demo"></button></li>
						</ul>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<!-- modal
							<a href="#" id="pop">
								<img id="imageresource" src="assets/koala.jpg">
								Click to Enlarge
							</a>
							-->
							<a href="/w3images/lights.jpg" data-toggle="modal" data-target="#myModal" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
							  <div class="caption" style="white-space: nowrap;">
								<small>koala, sa vie, son oeuvre.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
							
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>hiroshikoala mon amour.<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le koala tueur.<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le retour de koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Les dessous de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
								<a href="/w3images/lights.jpg" target="_blank">
								  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
								  <div class="caption">
									<small>kokakoala.<br>
									<a href="#">Comments <span class="badge">10</span></a></small>
								  </div>
								</a>
							</div>
						</div>
						<HR width="100%">						
					</div>						
															
					<!--collapse Films-->	
					<div id="demo" class="row no-padding no-margin-bottom collapse">
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/lights.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
							  <div class="caption">
								<small>koala fait du ski.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>koala contre-attaque<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>les 3 koalas<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>bienvenue chez koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption"  style="white-space: nowrap;">
								<small>le fabuleux destin de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>koala driver<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<HR width="100%">
					</div>	

					<!-- ROW Sport-->
					<div class="row no-padding no-margin-bottom" id="Sport">
						<ul class="list-inline no-margin-bottom">
							<li><h3 class="no-margin-bottom">Sport</h3></li>
							<li><button class="btn btn-default btn-sm glyphicon glyphicon-menu-down margin-bottom-10" data-toggle="collapse" data-target="#Sport2"></button></li>
						</ul>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/lights.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
										<!-- style="white-space: nowrap;" : pour forcer le texte a rester sur la meme ligne-->
							  <div class="caption" style="white-space: nowrap;">
								<small>koala, sa vie, son oeuvre.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>hiroshikoala mon amour.<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le koala tueur.<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le retour de koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Les dessous de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
								<a href="/w3images/lights.jpg" target="_blank">
								  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
								  <div class="caption">
									<small>kokakoala.<br>
									<a href="#">Comments <span class="badge">10</span></a></small>
								  </div>
								</a>
							</div>
						</div>
						<HR width="100%">						
					</div>						
															
					<!--collapse Sport-->	
					<div id="Sport2" class="row no-padding no-margin-bottom collapse">
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/lights.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
							  <div class="caption">
								<small>koala fait du ski.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>koala contre-attaque<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>les 3 koalas<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>bienvenue chez koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption"  style="white-space: nowrap;">
								<small>le fabuleux destin de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>koala driver<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<HR width="100%">
					</div>		
					
					<!-- ROW Musique-->
					<div class="row no-padding no-margin-bottom" id="Musique">
						<ul class="list-inline no-margin-bottom">
							<li><h3 class="no-margin-bottom">Musique</h3></li>
							<li><button class="btn btn-default btn-sm glyphicon glyphicon-menu-down margin-bottom-10" data-toggle="collapse" data-target="#Musique2"></button></li>
						</ul>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/lights.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
										<!-- style="white-space: nowrap;" : pour forcer le texte a rester sur la meme ligne-->
							  <div class="caption" style="white-space: nowrap;">
								<small>koala, sa vie, son oeuvre.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>hiroshikoala mon amour.<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le koala tueur.<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le retour de koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Les dessous de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
								<a href="/w3images/lights.jpg" target="_blank">
								  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
								  <div class="caption">
									<small>kokakoala.<br>
									<a href="#">Comments <span class="badge">10</span></a></small>
								  </div>
								</a>
							</div>
						</div>
						<HR width="100%">						
					</div>						
															
					<!--collapse Musique-->	
					<div id="Musique2" class="row no-padding no-margin-bottom collapse">
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/lights.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
							  <div class="caption">
								<small>koala fait du ski.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>koala contre-attaque<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>les 3 koalas<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>bienvenue chez koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption"  style="white-space: nowrap;">
								<small>le fabuleux destin de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>koala driver<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<HR width="100%">
					</div>						

					<!-- ROW Actualites-->
					<div class="row no-padding no-margin-bottom" id="Actualites">
						<ul class="list-inline no-margin-bottom">
							<li><h3 class="no-margin-bottom">Actualités</h3></li>
							<li><button class="btn btn-default btn-sm glyphicon glyphicon-menu-down margin-bottom-10" data-toggle="collapse" data-target="#Actualites2"></button></li>
						</ul>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/lights.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
										<!-- style="white-space: nowrap;" : pour forcer le texte a rester sur la meme ligne-->
							  <div class="caption" style="white-space: nowrap;">
								<small>koala, sa vie, son oeuvre.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>hiroshikoala mon amour.<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le koala tueur.<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le retour de koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Les dessous de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
								<a href="/w3images/lights.jpg" target="_blank">
								  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
								  <div class="caption">
									<small>kokakoala.<br>
									<a href="#">Comments <span class="badge">10</span></a></small>
								  </div>
								</a>
							</div>
						</div>
						<HR width="100%">						
					</div>						
															
					<!--collapse Actualites-->	
					<div id="Actualites2" class="row no-padding no-margin-bottom collapse">
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/lights.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
							  <div class="caption">
								<small>koala fait du ski.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>koala contre-attaque<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>les 3 koalas<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>bienvenue chez koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption"  style="white-space: nowrap;">
								<small>le fabuleux destin de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>koala driver<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<HR width="100%">
					</div>						

					<!-- ROW Series-->
					<div class="row no-padding no-margin-bottom" id="Series">
						<ul class="list-inline no-margin-bottom">
							<li><h3 class="no-margin-bottom">Séries</h3></li>
							<li><button class="btn btn-default btn-sm glyphicon glyphicon-menu-down margin-bottom-10" data-toggle="collapse" data-target="#Series2"></button></li>
						</ul>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/lights.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
										<!-- style="white-space: nowrap;" : pour forcer le texte a rester sur la meme ligne-->
							  <div class="caption" style="white-space: nowrap;">
								<small>koala, sa vie, son oeuvre.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>hiroshikoala mon amour.<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le koala tueur.<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Le retour de koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>Les dessous de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
								<a href="/w3images/lights.jpg" target="_blank">
								  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
								  <div class="caption">
									<small>kokakoala.<br>
									<a href="#">Comments <span class="badge">10</span></a></small>
								  </div>
								</a>
							</div>
						</div>
						<HR width="100%">						
					</div>						
															
					<!--collapse Series-->	
					<div id="Series2" class="row no-padding no-margin-bottom collapse">
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/lights.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Lights" style="width:100%">
							  <div class="caption">
								<small>koala fait du ski.<br>
								<a href="#">Comments <span class="badge">10</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/nature.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Nature" style="width:100%">
							  <div class="caption">
								<small>koala contre-attaque<br>
								<a href="#">Comments <span class="badge">1</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>les 3 koalas<br>
								<a href="#">Comments <span class="badge">0</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>bienvenue chez koala.<br>
								<a href="#">Comments <span class="badge">6</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
						  <div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption"  style="white-space: nowrap;">
								<small>le fabuleux destin de koala.<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<div class="thumbnail">
							<a href="/w3images/fjords.jpg" target="_blank">
							  <img src="assets/koala.jpg" alt="Fjords" style="width:100%">
							  <div class="caption">
								<small>koala driver<br>
								<a href="#">Comments <span class="badge">4</span></a></small>
							  </div>
							</a>
						  </div>
						</div>
						<HR width="100%">
					</div>						
					
					<!-- afficher plus--->
					<div class="row text-center">
					<button type="button" class="btn btn-primary" id="accueil">Afficher plus</button>
					</div>
					
					<!--pagination-->
					<div class="row text-center">
						<ul class="pagination">
						  <li><a href="#">1</a></li>
						  <li><a href="#">2</a></li>
						  <li><a href="#">3</a></li>
						  <li><a href="#">4</a></li>
						  <li><a href="#">5</a></li>
						</ul>
					</div>
							
					<!--menu horizontal fbas-->								
					<div class="row">
                            <div class="btn-group hidden-xs col-sm-12 col-md-12 col-lg-12 no-pad">
                                <nav class="nav navbar center-navbar">
                                  <div class="container">
                                    <ul class="nav navbar center-navbar">
                                      <li class="navbar-header">
                                          <a href="#accueil"><b>Accueil</b></a>
                                      </li> 
                                      <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Langues
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="#">Francais</a></li>
                                          <li><a href="#">Anglais</a></li>
                                          <li><a href="#">Russe</a></li>
                                        </ul>
                                      </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Zones Géographique
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="#">France</a></li>
                                          <li><a href="#">Europe</a></li>
                                          <li><a href="#">Etats-Unis</a></li>
                                        </ul>
                                      </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dates de Parution
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          <li><a href="#">24 h</a></li>
                                          <li><a href="#">une semaine</a></li>
                                          <li><a href="#">un mois</a></li>
                                          <li><a href="#">un an</a></li>
                                        </ul>
                                      </li>
                                      <li><a href="#">Tendances</a></li>
                                    </ul>
                                  </div>
                                </nav>  
                            </div>
					</div>

				</div>
				
			</div>
		</div>
		
				<!-- Modal -->
				<!-- Creates the bootstrap modal where the image will appear -->
				<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						<h4 class="modal-title" id="myModalLabel">Image preview</h4>
					  </div>
					  <div class="modal-body">
						<img src="" id="imagepreview" style="width: 400px; height: 264px;" >
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  </div>
					</div>
				  </div>
				</div>
