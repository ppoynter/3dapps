<?php
class Model {
	public $dbhandle;

	//Makes initial connection to database
	public function __construct()
	{
		$dsn = 'sqlite:./db/database.db';

		try {	
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
		}
		catch (PDOEXception $e) {
			echo "Unable to connect to database! ";
        	print new Exception($e->getMessage());
    	}
	}
	
	//validation check to prevent user from creating tables if they are already there
	function tableExists() {

		try {
			$result = $this->dbhandle->query("SELECT 1 FROM drinks LIMIT 1;" . 
			"SELECT 1 from sections;");
		} catch (Exception $e) {
			return FALSE;
		}
		return $result !== FALSE;
	}

	public function dbCreateTables()
	{
		if($this->tableExists() != FALSE)
		{
			return "Tables have already been created!";
		}
		try 
		{
			$this->dbhandle->exec("CREATE TABLE drinks (Id INTEGER PRIMARY KEY, homeTitle TEXT, homeSubtitle TEXT, homeDescription TEXT, extendedTitle TEXT, extendedSubtitle TEXT, extendedDescription TEXT, x3dTitle TEXT, x3dDescription TEXT)");
			$this->dbhandle->exec("CREATE TABLE sections (Id INTEGER PRIMARY KEY, title TEXT, subtitle TEXT, sectionDescription TEXT)");
			return "Drinks and sections tables successfully created inside database.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
	}

	public function dbInsertData()
	{
		//Checks whether there is data already in the tables
		if(($this->dbGetCokeData() != null) || ($this->dbGetSectionData() != null))
		{
			return "The data for the website is already there!";
		}
		try{
			$this->dbhandle->exec(
			"INSERT INTO drinks (Id, homeTitle, homeSubtitle, homeDescription, extendedTitle, extendedSubtitle, extendedDescription, x3dTitle, x3dDescription) VALUES (1, 'Coca-Cola', 'New York Harbour, 1886', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!', 'History of Coca-Cola','Atlanta Beginnings','It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs Pharmacy put it on sale for five cents (about 3p) a glass.', 'Coca-Cola X3D Model', 'This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.'); " .
			"INSERT INTO drinks (Id, homeTitle, homeSubtitle, homeDescription, extendedTitle, extendedSubtitle, extendedDescription, x3dTitle, x3dDescription) VALUES (2, 'Sprite', 'West Germany, 1959', 'First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.', 'Sprite — Fanta Klare Zitrone','First introduced in 1961','Crisp, refreshing, clean-tasting Sprite is now the worlds leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of Coca Colas no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.', 'Sprite X3D Model', 'This X3D model of the sprite bottle has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.'); " .
			"INSERT INTO drinks (Id, homeTitle, homeSubtitle, homeDescription, extendedTitle, extendedSubtitle, extendedDescription, x3dTitle, x3dDescription) VALUES (3, 'Dr Pepper', 'Texas, 1885', 'The unique, sparkling blend of 23 fruit flavours has been around for well over a century and it is still the same, with that distinctive flavour you just cannot quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.', 'Dr Pepper — Liquid Sunshine','23 fruit flavours','The unique, sparkling blend of 23 fruit flavours has been around for well over a century and it is still the same, with that distinctive flavour you just cannot quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.','Dr Pepper X3D Model', 'This X3D model of the Dr Pepper cup has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.'); " .
			"INSERT INTO sections (Id, title, subtitle, sectionDescription) VALUES (1, 'My Coca-Cola 3D Court', 'Founded in 2023 Web 3D Applications', 'The Coca Cola Company is the world leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands. What better way than to create a website with some 3D models of their best products!'); " .
			"INSERT INTO sections (Id, title, subtitle, sectionDescription) VALUES (2, 'Camera Views', 'string', 'These buttons select a range of X3D model viewpoints, try seeing the drinks from all the different views.'); " .
			"INSERT INTO sections (Id, title, subtitle, sectionDescription) VALUES (3, 'Animation Options', 'string', 'Click these buttons if you like your drink fizzy! Listen out for the liquid inside! See the different types of shaking for each drink.'); " .
			"INSERT INTO sections (Id, title, subtitle, sectionDescription) VALUES (4, 'Render Options', 'string', 'Check out the wireframe mode!'); " .
			"INSERT INTO sections (Id, title, subtitle, sectionDescription) VALUES (5, 'About the Site', 'string', 'This site is part of my Web3D applications assignment, check out the models tab to see my 3D models, aswell as the stylish look, and the restyle button at the bottom!'); ".
			"INSERT INTO sections (Id, title, subtitle, sectionDescription) VALUES (6, 'Github Links', 'string', 'Since part of this assignment is to submit links to Github, the buttons below should take you to my Github archives.'); " .
			"INSERT INTO sections (Id, title, subtitle, sectionDescription) VALUES (7, 'Statement of Originality', 'string', 'This assignment is submitted as part requirement for the degree of Computer Science (with an industrial placement) at the University of Sussex. It is the product of my own labour except where indicated in the accompanying codebase. This assignment may be freely copied and distributed provided the source is acknowledged. I hereby give permission for a copy of this assignment to be loaned out to students in future years.'); ");
			return "Drinks and sections data inserted successfully inside database.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbDeleteData()
	{
		try{
			
			$this->dbhandle->exec(
				"DELETE FROM drinks;".
				"DELETE FROM sections");
			return "Data deleted.";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetCokeData(){
		try{
			$sql = 'SELECT * FROM drinks';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;

			while ($data = $stmt->fetch()) {
				$result['drinks'][$i]['homeTitle'] = $data['homeTitle']; 
				$result['drinks'][$i]['homeSubtitle'] = $data['homeSubtitle'];
				$result['drinks'][$i]['homeDescription'] = $data['homeDescription'];
				$result['drinks'][$i]['extendedTitle'] = $data['extendedTitle'];
				$result['drinks'][$i]['extendedSubtitle'] = $data['extendedSubtitle'];
				$result['drinks'][$i]['extendedDescription'] = $data['extendedDescription'];
				$result['drinks'][$i]['x3dTitle'] = $data['x3dTitle'];
				$result['drinks'][$i]['x3dDescription'] = $data['x3dDescription'];
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		return $result;
	}

	public function dbGetSectionData(){
		try{
			$sql = 'SELECT * FROM sections';
			$stmt = $this->dbhandle->query($sql);
			$result = null;
			$i=-0;	
			while ($data = $stmt->fetch()) {
				$result['sections'][$i]['title'] = $data['title']; 
				$result['sections'][$i]['subtitle'] = $data['subtitle'];
				$result['sections'][$i]['sectionDescription'] = $data['sectionDescription'];
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		return $result;
	}
}
?>