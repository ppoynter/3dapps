var modelNo = 0;
//functions for selecting each 3d model
function cokeScene(){
    modelNo = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', modelNo);
	document.getElementById('model__frontCam').setAttribute('bind', 'true');
}

function spriteScene(){
    modelNo = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', modelNo);
	document.getElementById('model__frontCam1').setAttribute('bind', 'true');
}

function pepperScene(){
    modelNo = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', modelNo);
	document.getElementById('model__frontCam2').setAttribute('bind', 'true');
}

var shaking = false;

//Make model shake or not, depending on the action by the user
function shake()
{
	if(shaking) 
	{
		shaking = false;
	}
	else
	{
		shaking = true;
	}
	switch (modelNo) {
		case 0:
			document.getElementById('model__ShakeTimer').setAttribute('enabled', shaking.toString());
			break;
		case 1:
			document.getElementById('model__ShakeTimer1').setAttribute('enabled', shaking.toString());
			break;
		case 2:
			document.getElementById('model__Line002-TIMER').setAttribute('enabled', shaking.toString());
			document.getElementById('model__Line003-TIMER').setAttribute('enabled', shaking.toString());
			break;
	}
}

function stopShake()
{
	document.getElementById('model__ShakeTimer').setAttribute('enabled', 'false');
	document.getElementById('model__ShakeTimer1').setAttribute('enabled', 'false');
	document.getElementById('model__Line002-TIMER').setAttribute('enabled', 'false');
	document.getElementById('model__Line003-TIMER').setAttribute('enabled', 'false');
	shaking = false;
}

function wireFrame()
{
	var e = document.getElementById('wireframe');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

//select specific camera depending on which model is being shown
function cameraFront()
{
	switch (modelNo) {
		case 0:
			document.getElementById('model__frontCam').setAttribute('bind', 'true');
			break;
		case 1:
			document.getElementById('model__frontCam1').setAttribute('bind', 'true');
			break;
		case 2:
			document.getElementById('model__frontCam2').setAttribute('bind', 'true');
			break;
	}
}

function cameraBack()
{
	switch (modelNo) {
		case 0:
			document.getElementById('model__backCam').setAttribute('bind', 'true');
			break;
		case 1:
			document.getElementById('model__backCam1').setAttribute('bind', 'true');
			break;
		case 2:
			document.getElementById('model__backCam2').setAttribute('bind', 'true');
			break;
	}
}

function cameraLeft()
{
	switch (modelNo) {
		case 0:
			document.getElementById('model__leftCam').setAttribute('bind', 'true');
			break;
		case 1:
			document.getElementById('model__leftCam1').setAttribute('bind', 'true');
			break;
		case 2:
			document.getElementById('model__leftCam2').setAttribute('bind', 'true');
			break;
	}
}

function cameraRight()
{
	switch (modelNo) {
		case 0:
			document.getElementById('model__rightCam').setAttribute('bind', 'true');
			break;
		case 1:
			document.getElementById('model__rightCam1').setAttribute('bind', 'true');
			break;
		case 2:
			document.getElementById('model__rightCam2').setAttribute('bind', 'true');
			break;
	}
}

function cameraTop()
{
	document.getElementById('model__topCam').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__bottomCam').setAttribute('bind', 'true');
}