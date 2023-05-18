
$(document).ready(function(){

	 $.getJSON('./index.php/apiGetSiteData', function(jsonObj) {

		$('#title_left').html('<h2>' + jsonObj.drinks[0].homeTitle + '<h2>');
		$('#subTitle_left').html('<h3>' + jsonObj.drinks[0].homeSubtitle + '</h3>');
		$('#description_left').html('<p>' + jsonObj.drinks[0].homeDescription + '</p>');	
		$('#title_coke').html('<h2>' + jsonObj.drinks[0].extendedTitle + '<h2>');
		$('#subTitle_coke').html('<h3>' + jsonObj.drinks[0].extendedSubtitle + '</h3>');
		$('#description_coke').html('<p>' + jsonObj.drinks[0].extendedDescription + '</p>');	
		$('#x3dModelTitle_coke').html('<h2>' + jsonObj.drinks[0].x3dTitle + '<h2>');
		$('#x3dCreationMethod_coke').html('<h3>' + jsonObj.drinks[0].x3dDescription + '</h3>');

		$('#title_centre').html('<h2>' + jsonObj.drinks[1].homeTitle + '<h2>');
		$('#subTitle_centre').html('<h3>' + jsonObj.drinks[1].homeSubtitle + '</h3>');
		$('#description_centre').html('<p>' + jsonObj.drinks[1].homeDescription + '</p>');	
		$('#title_sprite').html('<h2>' + jsonObj.drinks[1].extendedTitle + '<h2>');
		$('#subTitle_sprite').html('<h3>' + jsonObj.drinks[1].extendedSubtitle + '</h3>');
		$('#description_sprite').html('<p>' + jsonObj.drinks[1].extendedDescription + '</p>');	
		$('#x3dModelTitle_sprite').html('<h2>' + jsonObj.drinks[1].x3dTitle + '<h2>');
		$('#x3dCreationMethod_sprite').html('<h3>' + jsonObj.drinks[1].x3dDescription + '</h3>');

		$('#title_right').html('<h2>' + jsonObj.drinks[2].homeTitle + '<h2>');
		$('#subTitle_right').html('<h3>' + jsonObj.drinks[2].homeSubtitle + '</h3>');
		$('#description_right').html('<p>' + jsonObj.drinks[2].homeDescription + '</p>');	
		$('#title_pepper').html('<h2>' + jsonObj.drinks[2].extendedTitle + '<h2>');
		$('#subTitle_pepper').html('<h3>' + jsonObj.drinks[2].extendedSubtitle + '</h3>');
		$('#description_pepper').html('<p>' + jsonObj.drinks[2].extendedDescription + '</p>');	
		$('#x3dModelTitle_pepper').html('<h2>' + jsonObj.drinks[2].x3dTitle + '<h2>');
		$('#x3dCreationMethod_pepper').html('<h3>' + jsonObj.drinks[2].x3dDescription + '</h3>');

		$('#title_home').html('<h2>' + jsonObj.sections[0].title + '<h2>');
		$('#subtitle_home').html('<h3>' + jsonObj.sections[0].subtitle + '<h3>');
		$('#description_home').html('<p>' + jsonObj.sections[0].sectionDescription + '<p>');

		$('#x3dCameraTitle').html('<h3>' + jsonObj.sections[1].title + '<h3>');
		$('#x3dCameraDescription').html('<p>' + jsonObj.sections[1].sectionDescription + '<p>');

		$('#animationTitle').html('<h3>' + jsonObj.sections[2].title + '<h3>');
		$('#animationDescription').html('<p>' + jsonObj.sections[2].sectionDescription + '<p>');

		$('#renderTitle').html('<h3>' + jsonObj.sections[3].title + '<h3>');
		$('#renderDescription').html('<p>' + jsonObj.sections[3].sectionDescription + '<p>');

		$('#welcome').html('<h2>' + jsonObj.sections[4].title + '<h2>');
		$('#welcomeText').html('<p>' + jsonObj.sections[4].sectionDescription + '</p>');

		$('#github').html('<h2>' + jsonObj.sections[5].title + '<h2>');
		$('#githubText').html('<p>' + jsonObj.sections[5].sectionDescription + '</p>');

		$('#statement').html('<h2>' + jsonObj.sections[6].title + '<h2>');
		$('#statementText').html('<p>' + jsonObj.sections[6].sectionDescription + '</p>');

	 });
});








