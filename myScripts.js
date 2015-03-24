function KeepCount() {

	var NewCount = 0

	if (document.signupForm.aatrox.checked)
	{
		NewCount = NewCount + 1;
		alert("true");
	}

	if (document.signupForm.ahri.checked)
		{NewCount = NewCount + 1}

	if (document.signupForm.akali.checked)
		{NewCount = NewCount + 1}

	if (document.signupForm.alistar.checked)
		{NewCount = NewCount + 1}

	if (document.signupForm.amumu.checked)
		{NewCount = NewCount + 1}
	
	if (document.signupForm.anivia.checked)
		{NewCount = NewCount + 1}
	
	if (NewCount == 6)
	{
		alert('Pick No More Than Five')
		document.signupForm; return false;
	}
}

