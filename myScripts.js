function KeepCount() {

	var NewCount = 0

	if (document.signupForm.aatrox.checked)
		{NewCount = NewCount + 1}

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
		
	if (document.signupForm.annie.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.ashe.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.azir.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.bard.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.blitzcrank.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.brand.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.braum.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.caitlyn.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.cassiopeia.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.chogath.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.corki.checked)
		{NewCount = NewCount + 1}
	
	if (document.signupForm.darius.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.diana.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.draven.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.drmundo.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.elise.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.evelynn.checked)
		{NewCount = NewCount + 1}
		
	if (document.signupForm.ezreal.checked)
		{NewCount = NewCount + 1}
	
	if (NewCount == 6)
	{
		alert('Pick No More Than Five')
		document.signupForm; return false;
	}
}

