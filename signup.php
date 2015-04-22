<?php 
header('Content-Type: text/html; charset=utf-8');
include 'signupValidation.php'; ?>
<!DOCTYPE HTML>
<html>
<style>

  input[type=checkbox] {
    display:none;
  }

  input[type=checkbox] + label
   {
       background: #1E1E1D;
       height: 50px;
       width: 50px;
       display:inline-block;
       padding: 6px 6px 6px 6px;
   }
   
   input[type=checkbox]:checked + label
    {
        background: #0080FF;
        height: 50px;
        width: 50px;
        padding: 3px 3px 3px 3px;
  		margin: 5px 1px 3px 0px;
  		border: 1px solid rgba(81, 203, 238, 1);
    }
</style>

<script type="text/javascript" src="myScripts.js"></script>

<head>
<img src="head_img.jpg" class="headImg"></img>
<link rel="stylesheet" href="style.css">
<!--<img src="headpic.jpg" class="headImg"></img>-->
<title>Sign up form</title>
</head>

<body>

<h2 class="headText">LOL Buddy Finder </h2>
<form method="post" name="signupForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<p class="align">

<label class="formDescriptionText">Region</label><br>
<label class="formDescriptionText"><input type="radio" id="br" name="region" value="br" />BR</label>
<label class="formDescriptionText"><input type="radio" id="eune" name="region" value="eune" />EUNE</label>
<label class="formDescriptionText"><input type="radio" id="euw" name="region" value="euw" />EUW</label>
<label class="formDescriptionText"><input type="radio" id="kr" name="region" value="kr" />KR</label>
<label class="formDescriptionText"><input type="radio" id="lan" name="region" value="lan" />LAN</label>
<label class="formDescriptionText"><input type="radio" id="las" name="region" value="las" />LAS</label>
<label class="formDescriptionText"><input type="radio" id="na" name="region" value="na" />NA</label>
<label class="formDescriptionText"><input type="radio" id="oce" name="region" value="oce" />OCE</label>
<label class="formDescriptionText"><input type="radio" id="ru" name="region" value="ru" />RU</label>
<label class="formDescriptionText"><input type="radio" id="tr" name="region" value="tr" />TR</label>
<br>

<label class="formDescriptionText">Summoner Name:&nbsp&nbsp</label>

<input class="textbox" type="text" name="sumName" id="sumName" onblur="return summonerLookUp()" placeholder="Summoner Name" value="">
<span class="error">*<?php echo $sumError;?></span><br>

<input type="hidden" name="sumInfo" id="sumInfo" value="">
<input type="hidden" name="sumRegion" id="sumRegion" value="">
<input type="hidden" name="level" id="level" value="">
<input type="hidden" name="sumMatches" id="sumMatches" value="">
<input type="hidden" name="sumId" id="sumId" value="">
<input type="hidden" name="profileId" id="profileId" value="">
<input type="hidden" name="tier" id="tier" value="">

<label class="formDescriptionText">Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>	
<input class="textbox" type="email" name="email" placeholder="Email" value="">
<span class="error">*<?php echo $emailError;?></span><br>

<label class="formDescriptionText">Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
<input class="textbox" type="password" name="password1" placeholder="Password" value="">
<span class="error">*<?php echo $password1Error;?></span><br>

<label class="formDescriptionText">Re-type password:&nbsp&nbsp</label>
<input class="textbox" type="password" name="password2" placeholder="Re-type Password" value="">
<span class="error">*<?php echo $password2Error;?></span><br>

<Label class="formDescriptionText">Select Your Role(s):</label>
<span class="error">*<?php echo $roleError;?></span><br>
<input type="checkbox" name="top" id="top" value="top"><label for="top"><img src="/roles/top.png" height=50 ></img></label></input>
<input type="checkbox" name="mid" id="mid" value="mid"><label for="mid"><img src="/roles/mid.png" height=50 ></img></label></input>
<input type="checkbox" name="jungle" id="jungle" value="jungle"><label for="jungle"><img src="/roles/jungle.png" height=50 ></img></label></input>
<input type="checkbox" name="adc" id="adc" value="adc"><label for="adc"><img src="/roles/adc.png" height=50 ></img></label></input>
<input type="checkbox" name="support" id="support" value="support"><label for="support"><img src="/roles/support.png" height=50 ></img></label></input>
<br>

<label class="formDescriptionText">Select up to 5 champions:</label>
<span class="error">*<?php echo $champError;?></span><br>
<input type="checkbox" name="champions[]" id="aatrox" value="aatrox" onClick="return KeepCount()"><label for="aatrox"><img src="/champion_icons/aatroxsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="ahri" value="ahri" onClick="return KeepCount()"><label for="ahri"><img src="/champion_icons/ahrisquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="akali" value="akali" onClick="return KeepCount()"><label for="akali"><img src="/champion_icons/akalisquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="alistar" value="alistar" onClick="return KeepCount()"><label for="alistar"><img src="/champion_icons/alistarsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="amumu" value="amumu" onClick="return KeepCount()"><label for="amumu"><img src="/champion_icons/amumusquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="anivia" value="anivia" onClick="return KeepCount()"><label for="anivia"><img src="/champion_icons/aniviasquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="annie" value="annie" onClick="return KeepCount()"><label for="annie"><img src="/champion_icons/anniesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="ashe" value="ashe" onClick="return KeepCount()"><label for="ashe"><img src="/champion_icons/ashesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="azir" value="azir" onClick="return KeepCount()"><label for="azir"><img src="/champion_icons/azirsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="bard" value="bard" onClick="return KeepCount()"><label for="bard"><img src="/champion_icons/bardsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="blitzcrank" value="blitzcrank" onClick="return KeepCount()"><label for="blitzcrank"><img src="/champion_icons/blitzcranksquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="brand" value="brand" onClick="return KeepCount()"><label for="brand"><img src="/champion_icons/brandsquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="braum" value="braum" onClick="return KeepCount()"><label for="braum"><img src="/champion_icons/braumsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="caitlyn" value="caitlyn" onClick="return KeepCount()"><label for="caitlyn"><img src="/champion_icons/caitlynsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="cassiopeia" value="cassiopeia" onClick="return KeepCount()"><label for="cassiopeia"><img src="/champion_icons/cassiopeiasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="chogath" value="chogath" onClick="return KeepCount()"><label for="chogath"><img src="/champion_icons/chogathsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="corki" value="corki" onClick="return KeepCount()"><label for="corki"><img src="/champion_icons/corkisquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="darius" value="darius" onClick="return KeepCount()"><label for="darius"><img src="/champion_icons/dariussquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="diana" value="diana" onClick="return KeepCount()"><label for="diana"><img src="/champion_icons/dianasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="draven" value="draven" onClick="return KeepCount()"><label for="draven"><img src="/champion_icons/dravensquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="drmundo" value="drmundo" onClick="return KeepCount()"><label for="drmundo"><img src="/champion_icons/drmundosquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="elise" value="elise" onClick="return KeepCount()"><label for="elise"><img src="/champion_icons/elisesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="evelynn" value="evelynn" onClick="return KeepCount()"><label for="evelynn"><img src="/champion_icons/evelynnsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="ezreal" value="ezreal" onClick="return KeepCount()"><label for="ezreal"><img src="/champion_icons/ezrealsquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="fiddlesticks" value="fiddlesticks" onClick="return KeepCount()"><label for="fiddlesticks"><img src="/champion_icons/fiddlestickssquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="fiora" value="fiora" onClick="return KeepCount()"><label for="fiora"><img src="/champion_icons/fiorasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="fizz" value="fizz" onClick="return KeepCount()"><label for="fizz"><img src="/champion_icons/fizzsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="galio" value="galio" onClick="return KeepCount()"><label for="galio"><img src="/champion_icons/galiosquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="gangplank" value="gangplank" onClick="return KeepCount()"><label for="gangplank"><img src="/champion_icons/gangplanksquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="garen" value="garen" onClick="return KeepCount()"><label for="garen"><img src="/champion_icons/garensquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="gnar" value="gnar" onClick="return KeepCount()"><label for="gnar"><img src="/champion_icons/gnarsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="gragas" value="gragas" onClick="return KeepCount()"><label for="gragas"><img src="/champion_icons/gragassquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="graves" value="graves" onClick="return KeepCount()"><label for="graves"><img src="/champion_icons/gravessquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="hecarim" value="hecarim" onClick="return KeepCount()"><label for="hecarim"><img src="/champion_icons/hecarimsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="heimerdinger" value="heimerdinger" onClick="return KeepCount()"><label for="heimerdinger"><img src="/champion_icons/heimerdingersquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="irelia" value="irelia" onClick="return KeepCount()"><label for="irelia"><img src="/champion_icons/ireliasquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="janna" value="janna" onClick="return KeepCount()"><label for="janna"><img src="/champion_icons/jannasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="jarvaniv" value="jarvaniv" onClick="return KeepCount()"><label for="jarvaniv"><img src="/champion_icons/jarvanivsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="jax" value="jax" onClick="return KeepCount()"><label for="jax"><img src="/champion_icons/jaxsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="jayce" value="jayce" onClick="return KeepCount()"><label for="jayce"><img src="/champion_icons/jaycesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="jinx" value="jinx" onClick="return KeepCount()"><label for="jinx"><img src="/champion_icons/jinxsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="kalista" value="kalista" onClick="return KeepCount()"><label for="kalista"><img src="/champion_icons/kalistasquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="karma" value="karma" onClick="return KeepCount()"><label for="karma"><img src="/champion_icons/karmasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="karthus" value="karthus" onClick="return KeepCount()"><label for="karthus"><img src="/champion_icons/karthussquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="kassadin" value="kassadin" onClick="return KeepCount()"><label for="kassadin"><img src="/champion_icons/kassadinsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="katarina" value="katarina" onClick="return KeepCount()"><label for="katarina"><img src="/champion_icons/katarinasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="kayle" value="kayle" onClick="return KeepCount()"><label for="kayle"><img src="/champion_icons/kaylesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="kennen" value="kennen" onClick="return KeepCount()"><label for="kennen"><img src="/champion_icons/kennensquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="khazix" value="khazix" onClick="return KeepCount()"><label for="khazix"><img src="/champion_icons/khazixsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="kogmaw" value="kogmaw" onClick="return KeepCount()"><label for="kogmaw"><img src="/champion_icons/kogmawsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="leblanc" value="leblanc" onClick="return KeepCount()"><label for="leblanc"><img src="/champion_icons/leblancsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="leesin" value="leesin" onClick="return KeepCount()"><label for="leesin"><img src="/champion_icons/leesinsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="leona" value="leona" onClick="return KeepCount()"><label for="leona"><img src="/champion_icons/leonasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="lissandra" value="lissandra" onClick="return KeepCount()"><label for="lissandra"><img src="/champion_icons/lissandrasquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="lucian" value="lucian" onClick="return KeepCount()"><label for="lucian"><img src="/champion_icons/luciansquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="lulu" value="lulu" onClick="return KeepCount()"><label for="lulu"><img src="/champion_icons/lulusquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="lux" value="lux" onClick="return KeepCount()"><label for="lux"><img src="/champion_icons/luxsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="malphite" value="malphite" onClick="return KeepCount()"><label for="malphite"><img src="/champion_icons/malphitesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="malzahar" value="malzahar" onClick="return KeepCount()"><label for="malzahar"><img src="/champion_icons/malzaharsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="maokai" value="maokai" onClick="return KeepCount()"><label for="maokai"><img src="/champion_icons/maokaisquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="masteryi" value="masteryi" onClick="return KeepCount()"><label for="masteryi"><img src="/champion_icons/masteryisquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="missfortune" value="missfortune" onClick="return KeepCount()"><label for="missfortune"><img src="/champion_icons/missfortunesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="mordekaiser" value="mordekaiser" onClick="return KeepCount()"><label for="mordekaiser"><img src="/champion_icons/mordekaisersquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="morgana" value="morgana" onClick="return KeepCount()"><label for="morgana"><img src="/champion_icons/morganasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="nami" value="nami" onClick="return KeepCount()"><label for="nami"><img src="/champion_icons/namisquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="nasus" value="nasus" onClick="return KeepCount()"><label for="nasus"><img src="/champion_icons/nasussquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="nautilus" value="nautilus" onClick="return KeepCount()"><label for="nautilus"><img src="/champion_icons/nautilussquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="nidalee" value="nidalee" onClick="return KeepCount()"><label for="nidalee"><img src="/champion_icons/nidaleesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="nocturne" value="nocturne" onClick="return KeepCount()"><label for="nocturne"><img src="/champion_icons/nocturnesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="nunu" value="nunu" onClick="return KeepCount()"><label for="nunu"><img src="/champion_icons/nunusquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="olaf" value="olaf" onClick="return KeepCount()"><label for="olaf"><img src="/champion_icons/olafsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="orianna" value="orianna" onClick="return KeepCount()"><label for="orianna"><img src="/champion_icons/oriannasquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="pantheon" value="pantheon" onClick="return KeepCount()"><label for="pantheon"><img src="/champion_icons/pantheonsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="poppy" value="poppy" onClick="return KeepCount()"><label for="poppy"><img src="/champion_icons/poppysquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="quinn" value="quinn" onClick="return KeepCount()"><label for="quinn"><img src="/champion_icons/quinnsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="rammus" value="rammus" onClick="return KeepCount()"><label for="rammus"><img src="/champion_icons/rammussquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="reksai" value="reksai" onClick="return KeepCount()"><label for="reksai"><img src="/champion_icons/reksaisquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="renekton" value="renekton" onClick="return KeepCount()"><label for="renekton"><img src="/champion_icons/renektonsquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="rengar" value="rengar" onClick="return KeepCount()"><label for="rengar"><img src="/champion_icons/rengarsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="riven" value="riven" onClick="return KeepCount()"><label for="riven"><img src="/champion_icons/rivensquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="rumble" value="rumble" onClick="return KeepCount()"><label for="rumble"><img src="/champion_icons/rumblesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="ryze" value="ryze" onClick="return KeepCount()"><label for="ryze"><img src="/champion_icons/ryzesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="sejuani" value="sejuani" onClick="return KeepCount()"><label for="sejuani"><img src="/champion_icons/sejuanisquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="shaco" value="shaco" onClick="return KeepCount()"><label for="shaco"><img src="/champion_icons/shacosquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="shen" value="shen" onClick="return KeepCount()"><label for="shen"><img src="/champion_icons/shensquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="shyvana" value="shyvana" onClick="return KeepCount()"><label for="shyvana"><img src="/champion_icons/shyvanasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="singed" value="singed" onClick="return KeepCount()"><label for="singed"><img src="/champion_icons/singedsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="sion" value="sion" onClick="return KeepCount()"><label for="sion"><img src="/champion_icons/sionsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="sivir" value="sivir" onClick="return KeepCount()"><label for="sivir"><img src="/champion_icons/sivirsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="skarner" value="skarner" onClick="return KeepCount()"><label for="skarner"><img src="/champion_icons/skarnersquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="sona" value="sona" onClick="return KeepCount()"><label for="sona"><img src="/champion_icons/sonasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="soraka" value="soraka" onClick="return KeepCount()"><label for="soraka"><img src="/champion_icons/sorakasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="swain" value="swain" onClick="return KeepCount()"><label for="swain"><img src="/champion_icons/swainsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="syndra" value="syndra" onClick="return KeepCount()"><label for="syndra"><img src="/champion_icons/syndrasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="talon" value="talon" onClick="return KeepCount()"><label for="talon"><img src="/champion_icons/talonsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="taric" value="taric" onClick="return KeepCount()"><label for="taric"><img src="/champion_icons/taricsquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="teemo" value="teemo" onClick="return KeepCount()"><label for="teemo"><img src="/champion_icons/teemosquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="thresh" value="thresh" onClick="return KeepCount()"><label for="thresh"><img src="/champion_icons/threshsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="tristana" value="tristana" onClick="return KeepCount()"><label for="tristana"><img src="/champion_icons/tristanasquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="trundle" value="trundle" onClick="return KeepCount()"><label for="trundle"><img src="/champion_icons/trundlesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="tryndamere" value="tryndamere" onClick="return KeepCount()"><label for="tryndamere"><img src="/champion_icons/tryndameresquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="twistedfate" value="twistedfate" onClick="return KeepCount()"><label for="twistedfate"><img src="/champion_icons/twistedfatesquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="twitch" value="twitch" onClick="return KeepCount()"><label for="twitch"><img src="/champion_icons/twitchsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="udyr" value="udyr" onClick="return KeepCount()"><label for="udyr"><img src="/champion_icons/udyrsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="urgot" value="urgot" onClick="return KeepCount()"><label for="urgot"><img src="/champion_icons/urgotsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="varus" value="varus" onClick="return KeepCount()"><label for="varus"><img src="/champion_icons/varussquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="vayne" value="vayne" onClick="return KeepCount()"><label for="vayne"><img src="/champion_icons/vaynesquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="veigar" value="veigar" onClick="return KeepCount()"><label for="veigar"><img src="/champion_icons/veigarsquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="velkoz" value="velkoz" onClick="return KeepCount()"><label for="velkoz"><img src="/champion_icons/velkozsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="viktor" value="viktor" onClick="return KeepCount()"><label for="viktor"><img src="/champion_icons/viktorsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="vi" value="vi" onClick="return KeepCount()"><label for="vi"><img src="/champion_icons/visquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="vladimir" value="vladimir" onClick="return KeepCount()"><label for="vladimir"><img src="/champion_icons/vladimirsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="volibear" value="volibear" onClick="return KeepCount()"><label for="volibear"><img src="/champion_icons/volibearsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="warwick" value="warwick" onClick="return KeepCount()"><label for="warwick"><img src="/champion_icons/warwicksquare.png" height=50 ></img></label></input>

<input type="checkbox" name="champions[]" id="wukong" value="wukong" onClick="return KeepCount()"><label for="wukong"><img src="/champion_icons/wukongsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="xerath" value="xerath" onClick="return KeepCount()"><label for="xerath"><img src="/champion_icons/xerathsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="xinzhao" value="xinzhao" onClick="return KeepCount()"><label for="xinzhao"><img src="/champion_icons/xinzhaosquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="yasuo" value="yasuo" onClick="return KeepCount()"><label for="yasuo"><img src="/champion_icons/yasuosquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="yorick" value="yorick" onClick="return KeepCount()"><label for="yorick"><img src="/champion_icons/yoricksquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="zac" value="zac" onClick="return KeepCount()"><label for="zac"><img src="/champion_icons/zacsquare.png" height=50 ></img></label></input>
<br>

<input type="checkbox" name="champions[]" id="zed" value="zed" onClick="return KeepCount()"><label for="zed"><img src="/champion_icons/zedsquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="ziggs" value="ziggs" onClick="return KeepCount()"><label for="ziggs"><img src="/champion_icons/ziggssquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="zilean" value="zilean" onClick="return KeepCount()"><label for="zilean"><img src="/champion_icons/zileansquare.png" height=50 ></img></label></input>
<input type="checkbox" name="champions[]" id="zyra" value="zyra" onClick="return KeepCount()"><label for="zyra"><img src="/champion_icons/zyrasquare.png" height=50 ></img></label></input>
<br>

<select name="timezone" class="selectBox">
<option value="American Samoa">(GMT-11:00) American Samoa</option>
<option value="International Date Line West">(GMT-11:00) International Date Line West</option>
<option value="Midway Island">(GMT-11:00) Midway Island</option>
<option value="Samoa">(GMT-11:00) Samoa</option>
<option value="Hawaii">(GMT-10:00) Hawaii</option>
<option value="Alaska">(GMT-09:00) Alaska</option>
<option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
<option value="Tijuana">(GMT-08:00) Tijuana</option>
<option value="Arizona">(GMT-07:00) Arizona</option>
<option value="Chihuahua">(GMT-07:00) Chihuahua</option>
<option value="Mazatlan">(GMT-07:00) Mazatlan</option>
<option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
<option value="Central America">(GMT-06:00) Central America</option>
<option value="Central Time (US &amp; Canada)">(GMT-06:00) Central Time (US &amp; Canada)</option>
<option value="Guadalajara">(GMT-06:00) Guadalajara</option>
<option value="Mexico City">(GMT-06:00) Mexico City</option>
<option value="Monterrey">(GMT-06:00) Monterrey</option>
<option value="Saskatchewan">(GMT-06:00) Saskatchewan</option>
<option value="Bogota">(GMT-05:00) Bogota</option>
<option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
<option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
<option value="Lima">(GMT-05:00) Lima</option>
<option value="Quito">(GMT-05:00) Quito</option>
<option value="Caracas">(GMT-04:30) Caracas</option>
<option value="Atlantic Time (Canada)">(GMT-04:00) Atlantic Time (Canada)</option>
<option value="Georgetown">(GMT-04:00) Georgetown</option>
<option value="La Paz">(GMT-04:00) La Paz</option>
<option value="Santiago">(GMT-04:00) Santiago</option>
<option value="Newfoundland">(GMT-03:30) Newfoundland</option>
<option value="Brasilia">(GMT-03:00) Brasilia</option>
<option value="Buenos Aires">(GMT-03:00) Buenos Aires</option>
<option value="Greenland">(GMT-03:00) Greenland</option>
<option value="Montevideo">(GMT-03:00) Montevideo</option>
<option value="Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>
<option value="Azores">(GMT-01:00) Azores</option>
<option value="Cape Verde Is.">(GMT-01:00) Cape Verde Is.</option>
<option value="Casablanca">(GMT+00:00) Casablanca</option>
<option value="Dublin">(GMT+00:00) Dublin</option>
<option value="Edinburgh">(GMT+00:00) Edinburgh</option>
<option value="Lisbon">(GMT+00:00) Lisbon</option>
<option value="London">(GMT+00:00) London</option>
<option value="Monrovia">(GMT+00:00) Monrovia</option>
<option value="UTC">(GMT+00:00) UTC</option>
<option value="Amsterdam">(GMT+01:00) Amsterdam</option>
<option value="Belgrade">(GMT+01:00) Belgrade</option>
<option value="Berlin">(GMT+01:00) Berlin</option>
<option value="Bern">(GMT+01:00) Bern</option>
<option value="Bratislava">(GMT+01:00) Bratislava</option>
<option value="Brussels">(GMT+01:00) Brussels</option>
<option value="Budapest">(GMT+01:00) Budapest</option>
<option value="Copenhagen">(GMT+01:00) Copenhagen</option>
<option value="Ljubljana">(GMT+01:00) Ljubljana</option>
<option value="Madrid">(GMT+01:00) Madrid</option>
<option value="Paris">(GMT+01:00) Paris</option>
<option value="Prague">(GMT+01:00) Prague</option>
<option value="Rome">(GMT+01:00) Rome</option>
<option value="Sarajevo">(GMT+01:00) Sarajevo</option>
<option value="Skopje">(GMT+01:00) Skopje</option>
<option value="Stockholm">(GMT+01:00) Stockholm</option>
<option value="Vienna">(GMT+01:00) Vienna</option>
<option value="Warsaw">(GMT+01:00) Warsaw</option>
<option value="West Central Africa">(GMT+01:00) West Central Africa</option>
<option value="Zagreb">(GMT+01:00) Zagreb</option>
<option value="Athens">(GMT+02:00) Athens</option>
<option value="Bucharest">(GMT+02:00) Bucharest</option>
<option value="Cairo">(GMT+02:00) Cairo</option>
<option value="Harare">(GMT+02:00) Harare</option>
<option value="Helsinki">(GMT+02:00) Helsinki</option>
<option value="Istanbul">(GMT+02:00) Istanbul</option>
<option value="Jerusalem">(GMT+02:00) Jerusalem</option>
<option value="Kyiv">(GMT+02:00) Kyiv</option>
<option value="Pretoria">(GMT+02:00) Pretoria</option>
<option value="Riga">(GMT+02:00) Riga</option>
<option value="Sofia">(GMT+02:00) Sofia</option>
<option value="Tallinn">(GMT+02:00) Tallinn</option>
<option value="Vilnius">(GMT+02:00) Vilnius</option>
<option value="Baghdad">(GMT+03:00) Baghdad</option>
<option value="Kuwait">(GMT+03:00) Kuwait</option>
<option value="Minsk">(GMT+03:00) Minsk</option>
<option value="Moscow">(GMT+03:00) Moscow</option>
<option value="Nairobi">(GMT+03:00) Nairobi</option>
<option value="Riyadh">(GMT+03:00) Riyadh</option>
<option value="St. Petersburg">(GMT+03:00) St. Petersburg</option>
<option value="Volgograd">(GMT+03:00) Volgograd</option>
<option value="Tehran">(GMT+03:30) Tehran</option>
<option value="Abu Dhabi">(GMT+04:00) Abu Dhabi</option>
<option value="Baku">(GMT+04:00) Baku</option>
<option value="Muscat">(GMT+04:00) Muscat</option>
<option value="Tbilisi">(GMT+04:00) Tbilisi</option>
<option value="Yerevan">(GMT+04:00) Yerevan</option>
<option value="Kabul">(GMT+04:30) Kabul</option>
<option value="Ekaterinburg">(GMT+05:00) Ekaterinburg</option>
<option value="Islamabad">(GMT+05:00) Islamabad</option>
<option value="Karachi">(GMT+05:00) Karachi</option>
<option value="Tashkent">(GMT+05:00) Tashkent</option>
<option value="Chennai">(GMT+05:30) Chennai</option>
<option value="Kolkata">(GMT+05:30) Kolkata</option>
<option value="Mumbai">(GMT+05:30) Mumbai</option>
<option value="New Delhi">(GMT+05:30) New Delhi</option>
<option value="Sri Jayawardenepura">(GMT+05:30) Sri Jayawardenepura</option>
<option value="Kathmandu">(GMT+05:45) Kathmandu</option>
<option value="Almaty">(GMT+06:00) Almaty</option>
<option value="Astana">(GMT+06:00) Astana</option>
<option value="Dhaka">(GMT+06:00) Dhaka</option>
<option value="Novosibirsk">(GMT+06:00) Novosibirsk</option>
<option value="Urumqi">(GMT+06:00) Urumqi</option>
<option value="Rangoon">(GMT+06:30) Rangoon</option>
<option value="Bangkok">(GMT+07:00) Bangkok</option>
<option value="Hanoi">(GMT+07:00) Hanoi</option>
<option value="Jakarta">(GMT+07:00) Jakarta</option>
<option value="Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
<option value="Beijing">(GMT+08:00) Beijing</option>
<option value="Chongqing">(GMT+08:00) Chongqing</option>
<option value="Hong Kong">(GMT+08:00) Hong Kong</option>
<option value="Irkutsk">(GMT+08:00) Irkutsk</option>
<option value="Kuala Lumpur">(GMT+08:00) Kuala Lumpur</option>
<option value="Perth">(GMT+08:00) Perth</option>
<option value="Singapore">(GMT+08:00) Singapore</option>
<option value="Taipei">(GMT+08:00) Taipei</option>
<option value="Ulaanbaatar">(GMT+08:00) Ulaanbaatar</option>
<option value="Osaka">(GMT+09:00) Osaka</option>
<option value="Sapporo">(GMT+09:00) Sapporo</option>
<option value="Seoul">(GMT+09:00) Seoul</option>
<option value="Tokyo">(GMT+09:00) Tokyo</option>
<option value="Yakutsk">(GMT+09:00) Yakutsk</option>
<option value="Adelaide">(GMT+09:30) Adelaide</option>
<option value="Darwin">(GMT+09:30) Darwin</option>
<option value="Brisbane">(GMT+10:00) Brisbane</option>
<option value="Canberra">(GMT+10:00) Canberra</option>
<option value="Guam">(GMT+10:00) Guam</option>
<option value="Hobart">(GMT+10:00) Hobart</option>
<option value="Magadan">(GMT+10:00) Magadan</option>
<option value="Melbourne">(GMT+10:00) Melbourne</option>
<option value="Port Moresby">(GMT+10:00) Port Moresby</option>
<option value="Sydney">(GMT+10:00) Sydney</option>
<option value="Vladivostok">(GMT+10:00) Vladivostok</option>
<option value="New Caledonia">(GMT+11:00) New Caledonia</option>
<option value="Solomon Is.">(GMT+11:00) Solomon Is.</option>
<option value="Auckland">(GMT+12:00) Auckland</option>
<option value="Fiji">(GMT+12:00) Fiji</option>
<option value="Kamchatka">(GMT+12:00) Kamchatka</option>
<option value="Marshall Is.">(GMT+12:00) Marshall Is.</option>
<option value="Wellington">(GMT+12:00) Wellington</option>
<option value="Chatham Is.">(GMT+12:45) Chatham Is.</option>
<option value="Nuku&#39;alofa">(GMT+13:00) Nuku&#39;alofa</option>
<option value="Tokelau Is.">(GMT+13:00) Tokelau Is.</option>
</select><br><br>
<select name="language" class="selectBox">
<option value="english">English</option>
<option value="french">French</option>
<option value="german">German</option>
<option value="spanish">Spanish</option>
<option value="portuguese">Portuguese</option>
<option value="korean">Korean 한국어</option>
<option value="mandarin">Mandarin 中文/国语</option>
<option value="cantonese">Cantonese 廣東話</option>
<option value="japanese">Japanese 日本語</option>
<option value="tagalog">Tagalog</option>
<option value="vietnamese">Vietnamese</option>
<option value="arabic">Arabic</option>
<option value="punjabi">Punjabi</option>
<option value="hindi">Hindi</option>

<option value="penguin">Penguin</option>
</select><br><br>
<input class="submitButton" type="submit" name="submit" value="Submit">
</p>
</form>

<form action="index.html">
    <p class="align">
    <input type="submit" value="Home" class="submitButton">
	</p>
</form>

</div>
</div>
</body>
</html>
