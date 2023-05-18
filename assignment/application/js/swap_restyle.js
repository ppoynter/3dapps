var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});


//Method for showing and hiding various parts of the page depending on what is clicked
function selectPage() {

	$('#home').show();
	$('#about').hide();
	$('#models').hide();
	$('#interaction').hide();
	$('#cokeDescription').hide();
	$('#spriteDescription').hide(); 
	$('#pepperDescription').hide(); 

	$('#logo').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navHome').click(function(){
		$('#home').show();
		$('#about').hide();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navAbout').click(function(){
		$('#home').hide();
		$('#about').show();
		$('#models').hide();
		$('#interaction').hide();
		$('#cokeDescription').hide();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide(); 	  
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#about').hide();
		$('#models').show();
		$('#interaction').show(); 
		cokeScene();
		$('#cokeDescription').show();
		$('#spriteDescription').hide(); 
		$('#pepperDescription').hide();
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();
		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide(); 
	});
}

//Show descriptions for each model when selected
function cokeDescription() {
		$("#cokeDescription").show();
        $("#spriteDescription").hide();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").show();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_coke").show();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").hide();
}

function spriteDescription() {
        $("#cokeDescription").hide();
        $("#spriteDescription").show();
		$("#pepperDescription").hide();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").show();
		$("#x3dModelTitle_pepper").hide();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").show();
		$("#x3dCreationMethod_pepper").hide();
}

function pepperDescription() {
        $("#cokeDescription").hide();
        $("#spriteDescription").hide();
		$("#pepperDescription").show();
		
		$("#x3dModelTitle_coke").hide();
		$("#x3dModelTitle_sprite").hide();
		$("#x3dModelTitle_pepper").show();

		$("#x3dCreationMethod_coke").hide();
		$("#x3dCreationMethod_sprite").hide();
		$("#x3dCreationMethod_pepper").show(); 
}

//Changes the whole look to either a coke, sprite, or dr pepper colour scheme
function changeLook() {
	counter += 1;
	var buttonColor;
	var linkColor;
	switch (counter) {
		case 1:
			document.getElementById('bodyColor').style.backgroundImage = 'linear-gradient(to bottom, rgba(2, 160, 76, 1) 0%, rgba(32,71,149,1) 100%)';
			document.getElementById('header').style.backgroundColor = 'rgba(222, 222, 223, 1)';
			document.getElementById('footer').style.backgroundColor = 'rgba(222, 222, 223, 1)';
			buttonColor='rgba(222, 222, 223, 1)';
			linkColor="rgba(32,71,149,1)";
			var parent = document.getElementsByClassName('navbar-text');
			parent[0].getElementsByTagName('p')[0].style.color = 'rgba(32,71,149,1)';
			parent[1].getElementsByTagName('p')[0].style.color = 'rgba(32,71,149,1)';
			break;
		case 2:
			document.getElementById('bodyColor').style.backgroundImage = 'linear-gradient(to bottom, rgba(213, 17, 67, 1) 0%, rgba(113, 31, 37, 1) 100%)';
			document.getElementById('header').style.backgroundColor = 'rgba(0, 0, 0, 1)';
			document.getElementById('footer').style.backgroundColor = 'rgba(0, 0, 0, 1)';
			buttonColor="rgba(0, 0, 0, 1)";
			linkColor="rgba(213, 17, 67, 1)";
			
			break;
		case 3:
			document.getElementById('bodyColor').style.backgroundImage = 'linear-gradient(to bottom, rgba(255, 0, 0, 1) 0%, rgba(0, 0, 0, 1) 100%)';
			document.getElementById('header').style.backgroundColor = 'rgba(0,0,0,1)';
			document.getElementById('footer').style.backgroundColor = 'rgba(0,0,0,1)';
			buttonColor='rgba(255, 0, 0, 1)';
			linkColor="rgba(255, 255, 255, 1)";
			parent = document.getElementsByClassName('navbar-text');
			parent[0].getElementsByTagName('p')[0].style.color = 'rgba(255, 255, 255, 1)';
			counter = 0;
			break;
	}
	var elements = document.getElementsByClassName('btn-primary');
	for (var i = 0; i < elements.length; i++) 
	{
		elements[i].style.backgroundColor = buttonColor;
		elements[i].style.borderColor= buttonColor;

	}
	elements = document.getElementsByTagName('a');
	for (var i = 0; i < elements.length; i++) {
		if(elements[i].href)
        {
            elements[i].style.color=linkColor;
        }
	}
	parent = document.getElementsByClassName('navbar-text');
	parent[0].getElementsByTagName('p')[0].style.color = linkColor;
	parent[1].getElementsByTagName('p')[0].style.color = linkColor;

}


