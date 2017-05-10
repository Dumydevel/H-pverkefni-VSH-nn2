<?php $php_array = array(['https://i.ytimg.com/vi/BotfUfyB5iA/maxresdefault.jpg','Fyrsti call of duty leikurinn kom út árið 2003 og geriðist í seinni heimstýriöldini og er með 3 campaigns. Rússarnir, Bretar, og Amerikanar. og allir eru með sama goalið að stoppa naziana'],

['https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR1bbM6a3cHnnKDiVGyot3vs9vu_5-7CJeaauGFTIRojskHwkbIcw','Call Of Duty 2 kom út 25 Október 2005 og er með sama goalið og í fyrsta leikinum eini munurinn er að það er ný saga '],

['https://cdn-mspoweruser.netdna-ssl.com/wp-content/uploads/2016/09/Call-of-Duty-3.png','we do not talk about this game and this is the last time i mention it'],

['http://www.bayvarianben.com/wp-content/uploads/2016/08/699235.jpg','Call Of Duty 4 Mordern Warfare kom út árið 2007 og var fyrsti call of duty leikurinn sem gerist í nútímanum, sagan í leiknum gerist árið 2011.'],

['http://cdn.edgecast.steamstatic.com/steam/apps/10090/header.jpg?t=1492633732','Call Of Duty World At War kom út 11 Nóvember 2008 og gerðist í Seinni heimstyrjaöldinni aðallega í kringum 1943-1945.'],

['http://www.gamepur.com/files/images/2014/call-of-duty-modern-warfare-2.jpg','Call Of Duty Mordern Warfare 2 kom út 11 febrúar 2009 singleplayer campaign leiksins fylgir taskforce 141, sérstakan herliðsþætti framin af Captain Soap MacTavish og Bandaríkjahermenina Rangers og eru að veiða Vladimir Makarov, leiðtogi rússneskra Ultranationalist party'],

['http://cdn2-www.playstationlifestyle.net/assets/uploads/gallery/call-of-duty-series/black-ops.jpg','Call Of Duty Black Ops kom út 30 Apríl 2010 leikurinn gerðist árið 1960 í kalda stíðinu og eltir cia starfsmannin Alex Mason'],

['https://www.digiseller.ru/preview/186848/p1_2068385_d7724291.jpg','Call Of Duty Morden Warfare 3 kom út í Nóvember 2011 singleplayer campaignið gerðist strax á eftir Call Of Duty Moden Warfare 2 og er um Task Force 141'],

['http://media.gamerevolution.com/images/galleries/1041/original.jpg','Call Of Duty Black Ops 2 kom út 13 nóvember 2012 og var fyrsti call of duty leikurinn sem gerðist í framtíðinni og eltir son Alex Mason'],

['http://www.hacksbook.com/wp-content/uploads/2013/11/call-of-duty-ghosts-1080p.png','Call Of Duty Ghost kom út 5 nóvember 2013 og gerist í aðrari tímalínu sem eltir kjarnokueðilengingu mið austur '],

['http://dotageeks.com/wp-content/uploads/2015/10/Call-Of-Duty-Advanced-Warfare-01.jpg','Call Of Duty Advanced Warfare kom út 4 nóvember 2014 og singleplayer campaignið eltir Jack Mitchell og gerðist árið 2054'],

['https://images2.alphacoders.com/597/597965.jpg','Call Of Duty Black Ops 3 kom út 6 nóvember 2015 og gerist árið 2065 40 árum eftir black ops 2'],

['https://resource.supercheats.com/library/2016/1478244285codinfinitewarfare.png',' Call Of Duty Infinite Warfare kom út 4 nóvember 2016 sem gerist í geimnum og öðrum plánetum'],

['https://www.thurrott.com/wp-content/uploads/2017/04/cod-wwii-hero-1024x576.jpg','Call Of Duty World War II kemur út 3 nóvember 2017 og gerist í seinni heimstyrjaöldinni.'],


); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Call of duty</title>
	<link rel="stylesheet"  href="Hópverkefni.css">
	<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body>
<?php foreach ($php_array as $k) {echo("<div><img src='".$k[0]."' width='360px' height='360px'><div class='personur'><p style='max-width: 720px;'>".$k[1]."</p></div></div>");} ?>
</body>