<?php

/*
Datos de la deuda viva de los ayuntamientos en 2015

VERSIÓN CON CÖDIGOS

Datos de poblacion tomados del INE
   http://www.ine.es/dynt3/inebase/es/index.html?padre=517&dh=1
Datos de deuda municipal tomados de l ministerio de hacienda 
  http://www.minhap.gob.es/es-ES/Areas%20Tematicas/Administracion%20Electronica/OVEELL/Paginas/DeudaViva.aspx


*/

$comunidad[1]='Andalucía';
$comunidad[2]='Aragón';
$comunidad[3]='Principado de Asturias';
$comunidad[4]='Illes Balears';
$comunidad[5]='Canarias';
$comunidad[6]='Cantabria';
$comunidad[7]='Castilla y León';
$comunidad[8]='Castilla-La Mancha';
$comunidad[9]='Cataluña';
$comunidad[10]='Extremadura';
$comunidad[11]='Galicia';
$comunidad[12]='Comunidad de Madrid';
$comunidad[13]='Región de Murcia';
$comunidad[14]='Comunidad Foral de Navarra';
$comunidad[15]='País Vasco';
$comunidad[16]='La Rioja';
$comunidad[17]='Comunitat Valenciana';
$comunidad[18]='Ceuta';
$comunidad[19]='Melilla';

// echo json_encode($comunidad,JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

// print "<pre>\$comunidad:\n".print_r($comunidad,true)."<pre>\n";

$provincia[1][4]='Almería';
$provincia[1][11]='Cádiz';
$provincia[1][14]='Córdoba';
$provincia[1][18]='Granada';
$provincia[1][21]='Huelva';
$provincia[1][23]='Jaén';
$provincia[1][29]='Málaga';
$provincia[1][41]='Sevilla';
$provincia[2][22]='Huesca';
$provincia[2][44]='Teruel';
$provincia[2][50]='Zaragoza';
$provincia[3][33]='Asturias';
$provincia[4][7]='Balears, Illes';
$provincia[5][35]='Palmas, Las';
$provincia[5][38]='Santa Cruz de Tenerife';
$provincia[6][39]='Cantabria';
$provincia[7][5]='Ávila';
$provincia[7][9]='Burgos';
$provincia[7][24]='León';
$provincia[7][34]='Palencia';
$provincia[7][37]='Salamanca';
$provincia[7][40]='Segovia';
$provincia[7][42]='Soria';
$provincia[7][47]='Valladolid';
$provincia[7][49]='Zamora';
$provincia[8][2]='Albacete';
$provincia[8][13]='Ciudad Real';
$provincia[8][16]='Cuenca';
$provincia[8][19]='Guadalajara';
$provincia[8][45]='Toledo';
$provincia[9][8]='Barcelona';
$provincia[9][17]='Girona';
$provincia[9][25]='Lleida';
$provincia[9][43]='Tarragona';
$provincia[10][6]='Badajoz';
$provincia[10][10]='Cáceres';
$provincia[11][15]='Coruña, A';
$provincia[11][27]='Lugo';
$provincia[11][32]='Ourense';
$provincia[11][36]='Pontevedra';
$provincia[12][28]='Madrid';
$provincia[13][30]='Murcia';
$provincia[14][31]='Navarra';
$provincia[15][1]='Araba/Álava';
$provincia[15][20]='Gipuzkoa';
$provincia[15][48]='Bizkaia';
$provincia[16][26]='La Rioja';
$provincia[17][3]='Alicante/Alacant';
$provincia[17][12]='Castellón/Castelló';
$provincia[17][46]='Valencia/València';
$provincia[18][51]='Ceuta';
$provincia[19][52]='Melilla';

// print "<pre>\$provincia:\n".print_r($provincia,true)."<pre>\n";
// print "<pre>\$provincia[7] (Castilla y León):\n".print_r($provincia[7],true)."<pre>\n";

/*
    No puedo hacer un array sólo con los pueblos porque hay nombres que se repiten
    
    Arroyomolinos:          Cáceres y Madrid
    Cabanes:            Castellón/Castelló y Girona
    Campillo, El:           Huelva y Valladolid
    Castejón:          Cuenca y Navarra
    Cieza:              Cantabria y Murcia
    Fonfría:           Teruel y Zamora
    Mieres:             Asturias y Girona
    Molar, El:          Madrid y Tarragona
    Moya:               Cuenca,Palmas y  Las
    Rebollar:           Cáceres y Soria
    Sada:               Coruña, A y Navarra
    Sancti-Spíritus:       Badajoz y Salamanca
    Sobrado:            Coruña, A y León
    Torrent:            Girona y Valencia/València
    Villaescusa:            Cantabria y Zamora
    Villanueva de los Infantes: Ciudad Real y Valladolid
    Zarza, La:          Badajoz y Valladolid
    
*/





$deuda[1][1001]=array(
    'nombre' =>'Alegría-Dulantzi',
    'habitantes' =>'2882',
    'deuda'=>'938'
    );
$deuda[1][1002]=array(
    'nombre' =>'Amurrio',
    'habitantes' =>'10263',
    'deuda'=>'728'
    );
$deuda[1][1003]=array(
    'nombre' =>'Aramaio',
    'habitantes' =>'1518',
    'deuda'=>'180'
    );
$deuda[1][1004]=array(
    'nombre' =>'Artziniega',
    'habitantes' =>'1829',
    'deuda'=>'0'
    );
$deuda[1][1006]=array(
    'nombre' =>'Armiñón',
    'habitantes' =>'244',
    'deuda'=>'0'
    );
$deuda[1][1008]=array(
    'nombre' =>'Arratzua-Ubarrundia',
    'habitantes' =>'997',
    'deuda'=>'0'
    );
$deuda[1][1009]=array(
    'nombre' =>'Asparrena',
    'habitantes' =>'1647',
    'deuda'=>'1122'
    );
$deuda[1][1010]=array(
    'nombre' =>'Ayala/Aiara',
    'habitantes' =>'2927',
    'deuda'=>'0'
    );
$deuda[1][1011]=array(
    'nombre' =>'Baños de Ebro/Mañueta',
    'habitantes' =>'311',
    'deuda'=>'98'
    );
$deuda[1][1013]=array(
    'nombre' =>'Barrundia',
    'habitantes' =>'905',
    'deuda'=>'0'
    );
$deuda[1][1014]=array(
    'nombre' =>'Berantevilla',
    'habitantes' =>'467',
    'deuda'=>'0'
    );
$deuda[1][1016]=array(
    'nombre' =>'Bernedo',
    'habitantes' =>'526',
    'deuda'=>'73'
    );
$deuda[1][1017]=array(
    'nombre' =>'Campezo/Kanpezu',
    'habitantes' =>'1069',
    'deuda'=>'0'
    );
$deuda[1][1018]=array(
    'nombre' =>'Zigoitia',
    'habitantes' =>'1765',
    'deuda'=>'0'
    );
$deuda[1][1019]=array(
    'nombre' =>'Kripan',
    'habitantes' =>'182',
    'deuda'=>'241'
    );
$deuda[1][1020]=array(
    'nombre' =>'Kuartango',
    'habitantes' =>'362',
    'deuda'=>'0'
    );
$deuda[1][1021]=array(
    'nombre' =>'Elburgo/Burgelu',
    'habitantes' =>'608',
    'deuda'=>'0'
    );
$deuda[1][1022]=array(
    'nombre' =>'Elciego',
    'habitantes' =>'1051',
    'deuda'=>'102'
    );
$deuda[1][1023]=array(
    'nombre' =>'Elvillar/Bilar',
    'habitantes' =>'353',
    'deuda'=>'183'
    );
$deuda[1][1027]=array(
    'nombre' =>'Iruraiz-Gauna',
    'habitantes' =>'509',
    'deuda'=>'0'
    );
$deuda[1][1028]=array(
    'nombre' =>'Labastida/Bastida',
    'habitantes' =>'1471',
    'deuda'=>'1073'
    );
$deuda[1][1030]=array(
    'nombre' =>'Lagrán',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[1][1031]=array(
    'nombre' =>'Laguardia',
    'habitantes' =>'1520',
    'deuda'=>'176'
    );
$deuda[1][1032]=array(
    'nombre' =>'Lanciego/Lantziego',
    'habitantes' =>'679',
    'deuda'=>'327'
    );
$deuda[1][1033]=array(
    'nombre' =>'Lapuebla de Labarca',
    'habitantes' =>'860',
    'deuda'=>'58'
    );
$deuda[1][1034]=array(
    'nombre' =>'Leza',
    'habitantes' =>'216',
    'deuda'=>'110'
    );
$deuda[1][1036]=array(
    'nombre' =>'Laudio/Llodio',
    'habitantes' =>'18300',
    'deuda'=>'0'
    );
$deuda[1][1037]=array(
    'nombre' =>'Arraia-Maeztu',
    'habitantes' =>'712',
    'deuda'=>'210'
    );
$deuda[1][1039]=array(
    'nombre' =>'Moreda de Álava/Moreda Araba',
    'habitantes' =>'233',
    'deuda'=>'0'
    );
$deuda[1][1041]=array(
    'nombre' =>'Navaridas',
    'habitantes' =>'231',
    'deuda'=>'40'
    );
$deuda[1][1042]=array(
    'nombre' =>'Okondo',
    'habitantes' =>'1156',
    'deuda'=>'199'
    );
$deuda[1][1043]=array(
    'nombre' =>'Oyón-Oion',
    'habitantes' =>'3320',
    'deuda'=>'931'
    );
$deuda[1][1044]=array(
    'nombre' =>'Peñacerrada-Urizaharra',
    'habitantes' =>'270',
    'deuda'=>'0'
    );
$deuda[1][1046]=array(
    'nombre' =>'Erriberagoitia/Ribera Alta',
    'habitantes' =>'773',
    'deuda'=>'0'
    );
$deuda[1][1047]=array(
    'nombre' =>'Ribera Baja/Erribera Beitia',
    'habitantes' =>'1359',
    'deuda'=>'0'
    );
$deuda[1][1049]=array(
    'nombre' =>'Añana',
    'habitantes' =>'157',
    'deuda'=>'121'
    );
$deuda[1][1051]=array(
    'nombre' =>'Salvatierra/Agurain',
    'habitantes' =>'4986',
    'deuda'=>'5023'
    );
$deuda[1][1052]=array(
    'nombre' =>'Samaniego',
    'habitantes' =>'294',
    'deuda'=>'155'
    );
$deuda[1][1053]=array(
    'nombre' =>'San Millán/Donemiliaga',
    'habitantes' =>'722',
    'deuda'=>'0'
    );
$deuda[1][1054]=array(
    'nombre' =>'Urkabustaiz',
    'habitantes' =>'1300',
    'deuda'=>'0'
    );
$deuda[1][1055]=array(
    'nombre' =>'Valdegovía/Gaubea',
    'habitantes' =>'1013',
    'deuda'=>'1588'
    );
$deuda[1][1056]=array(
    'nombre' =>'Harana/Valle de Arana',
    'habitantes' =>'242',
    'deuda'=>'106'
    );
$deuda[1][1057]=array(
    'nombre' =>'Villabuena de Álava/Eskuernaga',
    'habitantes' =>'306',
    'deuda'=>'66'
    );
$deuda[1][1058]=array(
    'nombre' =>'Legutio',
    'habitantes' =>'1716',
    'deuda'=>'0'
    );
$deuda[1][1059]=array(
    'nombre' =>'Vitoria-Gasteiz',
    'habitantes' =>'243918',
    'deuda'=>'124214'
    );
$deuda[1][1060]=array(
    'nombre' =>'Yécora/Iekora',
    'habitantes' =>'266',
    'deuda'=>'72'
    );
$deuda[1][1061]=array(
    'nombre' =>'Zalduondo',
    'habitantes' =>'196',
    'deuda'=>'0'
    );
$deuda[1][1062]=array(
    'nombre' =>'Zambrana',
    'habitantes' =>'406',
    'deuda'=>'24'
    );
$deuda[1][1063]=array(
    'nombre' =>'Zuia',
    'habitantes' =>'2383',
    'deuda'=>'0'
    );
$deuda[1][1901]=array(
    'nombre' =>'Iruña Oka/Iruña de Oca',
    'habitantes' =>'3172',
    'deuda'=>'0'
    );
$deuda[1][1902]=array(
    'nombre' =>'Lantarón',
    'habitantes' =>'893',
    'deuda'=>'0'
    );
$deuda[2][2001]=array(
    'nombre' =>'Abengibre',
    'habitantes' =>'782',
    'deuda'=>'113'
    );
$deuda[2][2002]=array(
    'nombre' =>'Alatoz',
    'habitantes' =>'610',
    'deuda'=>'417'
    );
$deuda[2][2003]=array(
    'nombre' =>'Albacete',
    'habitantes' =>'172121',
    'deuda'=>'72141'
    );
$deuda[2][2004]=array(
    'nombre' =>'Albatana',
    'habitantes' =>'744',
    'deuda'=>'160'
    );
$deuda[2][2005]=array(
    'nombre' =>'Alborea',
    'habitantes' =>'754',
    'deuda'=>'0'
    );
$deuda[2][2006]=array(
    'nombre' =>'Alcadozo',
    'habitantes' =>'699',
    'deuda'=>'524'
    );
$deuda[2][2007]=array(
    'nombre' =>'Alcalá del Júcar',
    'habitantes' =>'1250',
    'deuda'=>'0'
    );
$deuda[2][2008]=array(
    'nombre' =>'Alcaraz',
    'habitantes' =>'1529',
    'deuda'=>'73'
    );
$deuda[2][2009]=array(
    'nombre' =>'Almansa',
    'habitantes' =>'24837',
    'deuda'=>'14368'
    );
$deuda[2][2010]=array(
    'nombre' =>'Alpera',
    'habitantes' =>'2326',
    'deuda'=>'0'
    );
$deuda[2][2011]=array(
    'nombre' =>'Ayna',
    'habitantes' =>'717',
    'deuda'=>'474'
    );
$deuda[2][2012]=array(
    'nombre' =>'Balazote',
    'habitantes' =>'2378',
    'deuda'=>'274'
    );
$deuda[2][2013]=array(
    'nombre' =>'Balsa de Ves',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[2][2014]=array(
    'nombre' =>'Ballestero, El',
    'habitantes' =>'442',
    'deuda'=>'108'
    );
$deuda[2][2015]=array(
    'nombre' =>'Barrax',
    'habitantes' =>'1915',
    'deuda'=>'1436'
    );
$deuda[2][2016]=array(
    'nombre' =>'Bienservida',
    'habitantes' =>'664',
    'deuda'=>'477'
    );
$deuda[2][2017]=array(
    'nombre' =>'Bogarra',
    'habitantes' =>'947',
    'deuda'=>'344'
    );
$deuda[2][2018]=array(
    'nombre' =>'Bonete',
    'habitantes' =>'1127',
    'deuda'=>'827'
    );
$deuda[2][2019]=array(
    'nombre' =>'Bonillo, El',
    'habitantes' =>'2915',
    'deuda'=>'500'
    );
$deuda[2][2020]=array(
    'nombre' =>'Carcelén',
    'habitantes' =>'546',
    'deuda'=>'352'
    );
$deuda[2][2021]=array(
    'nombre' =>'Casas de Juan Núñez',
    'habitantes' =>'1382',
    'deuda'=>'1200'
    );
$deuda[2][2022]=array(
    'nombre' =>'Casas de Lázaro',
    'habitantes' =>'403',
    'deuda'=>'298'
    );
$deuda[2][2023]=array(
    'nombre' =>'Casas de Ves',
    'habitantes' =>'666',
    'deuda'=>'167'
    );
$deuda[2][2024]=array(
    'nombre' =>'Casas-Ibáñez',
    'habitantes' =>'4658',
    'deuda'=>'0'
    );
$deuda[2][2025]=array(
    'nombre' =>'Caudete',
    'habitantes' =>'10163',
    'deuda'=>'6537'
    );
$deuda[2][2026]=array(
    'nombre' =>'Cenizate',
    'habitantes' =>'1174',
    'deuda'=>'249'
    );
$deuda[2][2027]=array(
    'nombre' =>'Corral-Rubio',
    'habitantes' =>'358',
    'deuda'=>'424'
    );
$deuda[2][2028]=array(
    'nombre' =>'Cotillas',
    'habitantes' =>'141',
    'deuda'=>'317'
    );
$deuda[2][2029]=array(
    'nombre' =>'Chinchilla de Monte-Aragón',
    'habitantes' =>'4169',
    'deuda'=>'0'
    );
$deuda[2][2030]=array(
    'nombre' =>'Elche de la Sierra',
    'habitantes' =>'3761',
    'deuda'=>'1165'
    );
$deuda[2][2031]=array(
    'nombre' =>'Férez',
    'habitantes' =>'705',
    'deuda'=>'833'
    );
$deuda[2][2032]=array(
    'nombre' =>'Fuensanta',
    'habitantes' =>'327',
    'deuda'=>'44'
    );
$deuda[2][2033]=array(
    'nombre' =>'Fuente-Álamo',
    'habitantes' =>'2591',
    'deuda'=>'225'
    );
$deuda[2][2034]=array(
    'nombre' =>'Fuentealbilla',
    'habitantes' =>'1901',
    'deuda'=>'643'
    );
$deuda[2][2035]=array(
    'nombre' =>'Gineta, La',
    'habitantes' =>'2532',
    'deuda'=>'1607'
    );
$deuda[2][2036]=array(
    'nombre' =>'Golosalvo',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[2][2037]=array(
    'nombre' =>'Hellín',
    'habitantes' =>'30592',
    'deuda'=>'22967'
    );
$deuda[2][2038]=array(
    'nombre' =>'Herrera, La',
    'habitantes' =>'347',
    'deuda'=>'0'
    );
$deuda[2][2039]=array(
    'nombre' =>'Higueruela',
    'habitantes' =>'1249',
    'deuda'=>'0'
    );
$deuda[2][2040]=array(
    'nombre' =>'Hoya-Gonzalo',
    'habitantes' =>'706',
    'deuda'=>'0'
    );
$deuda[2][2041]=array(
    'nombre' =>'Jorquera',
    'habitantes' =>'400',
    'deuda'=>'745'
    );
$deuda[2][2042]=array(
    'nombre' =>'Letur',
    'habitantes' =>'987',
    'deuda'=>'1443'
    );
$deuda[2][2043]=array(
    'nombre' =>'Lezuza',
    'habitantes' =>'1483',
    'deuda'=>'60'
    );
$deuda[2][2044]=array(
    'nombre' =>'Liétor',
    'habitantes' =>'1321',
    'deuda'=>'0'
    );
$deuda[2][2045]=array(
    'nombre' =>'Madrigueras',
    'habitantes' =>'4724',
    'deuda'=>'121'
    );
$deuda[2][2046]=array(
    'nombre' =>'Mahora',
    'habitantes' =>'1422',
    'deuda'=>'455'
    );
$deuda[2][2047]=array(
    'nombre' =>'Masegoso',
    'habitantes' =>'121',
    'deuda'=>'0'
    );
$deuda[2][2048]=array(
    'nombre' =>'Minaya',
    'habitantes' =>'1564',
    'deuda'=>'1269'
    );
$deuda[2][2049]=array(
    'nombre' =>'Molinicos',
    'habitantes' =>'917',
    'deuda'=>'892'
    );
$deuda[2][2050]=array(
    'nombre' =>'Montalvos',
    'habitantes' =>'108',
    'deuda'=>'29'
    );
$deuda[2][2051]=array(
    'nombre' =>'Montealegre del Castillo',
    'habitantes' =>'2122',
    'deuda'=>'0'
    );
$deuda[2][2052]=array(
    'nombre' =>'Motilleja',
    'habitantes' =>'555',
    'deuda'=>'686'
    );
$deuda[2][2053]=array(
    'nombre' =>'Munera',
    'habitantes' =>'3643',
    'deuda'=>'1634'
    );
$deuda[2][2054]=array(
    'nombre' =>'Navas de Jorquera',
    'habitantes' =>'524',
    'deuda'=>'73'
    );
$deuda[2][2055]=array(
    'nombre' =>'Nerpio',
    'habitantes' =>'1362',
    'deuda'=>'998'
    );
$deuda[2][2056]=array(
    'nombre' =>'Ontur',
    'habitantes' =>'2141',
    'deuda'=>'1067'
    );
$deuda[2][2057]=array(
    'nombre' =>'Ossa de Montiel',
    'habitantes' =>'2510',
    'deuda'=>'785'
    );
$deuda[2][2058]=array(
    'nombre' =>'Paterna del Madera',
    'habitantes' =>'378',
    'deuda'=>'564'
    );
$deuda[2][2059]=array(
    'nombre' =>'Peñascosa',
    'habitantes' =>'355',
    'deuda'=>'0'
    );
$deuda[2][2060]=array(
    'nombre' =>'Peñas de San Pedro',
    'habitantes' =>'1431',
    'deuda'=>'0'
    );
$deuda[2][2061]=array(
    'nombre' =>'Pétrola',
    'habitantes' =>'737',
    'deuda'=>'0'
    );
$deuda[2][2062]=array(
    'nombre' =>'Povedilla',
    'habitantes' =>'471',
    'deuda'=>'107'
    );
$deuda[2][2063]=array(
    'nombre' =>'Pozohondo',
    'habitantes' =>'1717',
    'deuda'=>'0'
    );
$deuda[2][2064]=array(
    'nombre' =>'Pozo-Lorente',
    'habitantes' =>'415',
    'deuda'=>'137'
    );
$deuda[2][2065]=array(
    'nombre' =>'Pozuelo',
    'habitantes' =>'542',
    'deuda'=>'60'
    );
$deuda[2][2066]=array(
    'nombre' =>'Recueja, La',
    'habitantes' =>'275',
    'deuda'=>'82'
    );
$deuda[2][2067]=array(
    'nombre' =>'Riópar',
    'habitantes' =>'1448',
    'deuda'=>'1542'
    );
$deuda[2][2068]=array(
    'nombre' =>'Robledo',
    'habitantes' =>'405',
    'deuda'=>'30'
    );
$deuda[2][2069]=array(
    'nombre' =>'Roda, La',
    'habitantes' =>'15868',
    'deuda'=>'14645'
    );
$deuda[2][2070]=array(
    'nombre' =>'Salobre',
    'habitantes' =>'554',
    'deuda'=>'0'
    );
$deuda[2][2071]=array(
    'nombre' =>'San Pedro',
    'habitantes' =>'1316',
    'deuda'=>'331'
    );
$deuda[2][2072]=array(
    'nombre' =>'Socovos',
    'habitantes' =>'1832',
    'deuda'=>'825'
    );
$deuda[2][2073]=array(
    'nombre' =>'Tarazona de la Mancha',
    'habitantes' =>'6543',
    'deuda'=>'777'
    );
$deuda[2][2074]=array(
    'nombre' =>'Tobarra',
    'habitantes' =>'7973',
    'deuda'=>'6434'
    );
$deuda[2][2075]=array(
    'nombre' =>'Valdeganga',
    'habitantes' =>'1991',
    'deuda'=>'573'
    );
$deuda[2][2076]=array(
    'nombre' =>'Vianos',
    'habitantes' =>'376',
    'deuda'=>'86'
    );
$deuda[2][2077]=array(
    'nombre' =>'Villa de Ves',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[2][2078]=array(
    'nombre' =>'Villalgordo del Júcar',
    'habitantes' =>'1147',
    'deuda'=>'1498'
    );
$deuda[2][2079]=array(
    'nombre' =>'Villamalea',
    'habitantes' =>'4106',
    'deuda'=>'200'
    );
$deuda[2][2080]=array(
    'nombre' =>'Villapalacios',
    'habitantes' =>'628',
    'deuda'=>'93'
    );
$deuda[2][2081]=array(
    'nombre' =>'Villarrobledo',
    'habitantes' =>'25989',
    'deuda'=>'24747'
    );
$deuda[2][2082]=array(
    'nombre' =>'Villatoya',
    'habitantes' =>'115',
    'deuda'=>'241'
    );
$deuda[2][2083]=array(
    'nombre' =>'Villavaliente',
    'habitantes' =>'238',
    'deuda'=>'45'
    );
$deuda[2][2084]=array(
    'nombre' =>'Villaverde de Guadalimar',
    'habitantes' =>'373',
    'deuda'=>'117'
    );
$deuda[2][2085]=array(
    'nombre' =>'Viveros',
    'habitantes' =>'300',
    'deuda'=>'17'
    );
$deuda[2][2086]=array(
    'nombre' =>'Yeste',
    'habitantes' =>'2869',
    'deuda'=>'4640'
    );
$deuda[2][2901]=array(
    'nombre' =>'Pozo Cañada',
    'habitantes' =>'2811',
    'deuda'=>'247'
    );
$deuda[3][3001]=array(
    'nombre' =>'Adsubia',
    'habitantes' =>'632',
    'deuda'=>'214'
    );
$deuda[3][3002]=array(
    'nombre' =>'Agost',
    'habitantes' =>'4707',
    'deuda'=>'0'
    );
$deuda[3][3003]=array(
    'nombre' =>'Agres',
    'habitantes' =>'574',
    'deuda'=>'0'
    );
$deuda[3][3004]=array(
    'nombre' =>'Aigües',
    'habitantes' =>'937',
    'deuda'=>'878'
    );
$deuda[3][3005]=array(
    'nombre' =>'Albatera',
    'habitantes' =>'11780',
    'deuda'=>'5168'
    );
$deuda[3][3006]=array(
    'nombre' =>'Alcalalí',
    'habitantes' =>'1311',
    'deuda'=>'0'
    );
$deuda[3][3007]=array(
    'nombre' =>'Alcocer de Planes',
    'habitantes' =>'216',
    'deuda'=>'0'
    );
$deuda[3][3008]=array(
    'nombre' =>'Alcoleja',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[3][3009]=array(
    'nombre' =>'Alcoy/Alcoi',
    'habitantes' =>'59567',
    'deuda'=>'24596'
    );
$deuda[3][3010]=array(
    'nombre' =>'Alfafara',
    'habitantes' =>'406',
    'deuda'=>'41'
    );
$deuda[3][3011]=array(
    'nombre' =>'Alfàs del Pi, l\'',
    'habitantes' =>'21700',
    'deuda'=>'14606'
    );
$deuda[3][3012]=array(
    'nombre' =>'Algorfa',
    'habitantes' =>'3693',
    'deuda'=>'2678'
    );
$deuda[3][3013]=array(
    'nombre' =>'Algueña',
    'habitantes' =>'1413',
    'deuda'=>'267'
    );
$deuda[3][3014]=array(
    'nombre' =>'Alicante/Alacant',
    'habitantes' =>'328648',
    'deuda'=>'118859'
    );
$deuda[3][3015]=array(
    'nombre' =>'Almoradí',
    'habitantes' =>'19955',
    'deuda'=>'3883'
    );
$deuda[3][3016]=array(
    'nombre' =>'Almudaina',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[3][3017]=array(
    'nombre' =>'Alqueria d\'Asnar, l\'',
    'habitantes' =>'522',
    'deuda'=>'0'
    );
$deuda[3][3018]=array(
    'nombre' =>'Altea',
    'habitantes' =>'22385',
    'deuda'=>'17952'
    );
$deuda[3][3019]=array(
    'nombre' =>'Aspe',
    'habitantes' =>'20406',
    'deuda'=>'2606'
    );
$deuda[3][3020]=array(
    'nombre' =>'Balones',
    'habitantes' =>'133',
    'deuda'=>'0'
    );
$deuda[3][3021]=array(
    'nombre' =>'Banyeres de Mariola',
    'habitantes' =>'7155',
    'deuda'=>'0'
    );
$deuda[3][3022]=array(
    'nombre' =>'Benasau',
    'habitantes' =>'155',
    'deuda'=>'52'
    );
$deuda[3][3023]=array(
    'nombre' =>'Beneixama',
    'habitantes' =>'1746',
    'deuda'=>'483'
    );
$deuda[3][3024]=array(
    'nombre' =>'Benejúzar',
    'habitantes' =>'5398',
    'deuda'=>'0'
    );
$deuda[3][3025]=array(
    'nombre' =>'Benferri',
    'habitantes' =>'1899',
    'deuda'=>'822'
    );
$deuda[3][3026]=array(
    'nombre' =>'Beniarbeig',
    'habitantes' =>'1926',
    'deuda'=>'373'
    );
$deuda[3][3027]=array(
    'nombre' =>'Beniardá',
    'habitantes' =>'227',
    'deuda'=>'0'
    );
$deuda[3][3028]=array(
    'nombre' =>'Beniarrés',
    'habitantes' =>'1208',
    'deuda'=>'145'
    );
$deuda[3][3029]=array(
    'nombre' =>'Benigembla',
    'habitantes' =>'490',
    'deuda'=>'0'
    );
$deuda[3][3030]=array(
    'nombre' =>'Benidoleig',
    'habitantes' =>'1196',
    'deuda'=>'0'
    );
$deuda[3][3031]=array(
    'nombre' =>'Benidorm',
    'habitantes' =>'69045',
    'deuda'=>'78546'
    );
$deuda[3][3032]=array(
    'nombre' =>'Benifallim',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[3][3033]=array(
    'nombre' =>'Benifato',
    'habitantes' =>'156',
    'deuda'=>'0'
    );
$deuda[3][3034]=array(
    'nombre' =>'Benijófar',
    'habitantes' =>'3655',
    'deuda'=>'1814'
    );
$deuda[3][3035]=array(
    'nombre' =>'Benilloba',
    'habitantes' =>'786',
    'deuda'=>'199'
    );
$deuda[3][3036]=array(
    'nombre' =>'Benillup',
    'habitantes' =>'101',
    'deuda'=>'0'
    );
$deuda[3][3037]=array(
    'nombre' =>'Benimantell',
    'habitantes' =>'501',
    'deuda'=>'0'
    );
$deuda[3][3038]=array(
    'nombre' =>'Benimarfull',
    'habitantes' =>'433',
    'deuda'=>'0'
    );
$deuda[3][3039]=array(
    'nombre' =>'Benimassot',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[3][3040]=array(
    'nombre' =>'Benimeli',
    'habitantes' =>'416',
    'deuda'=>'0'
    );
$deuda[3][3041]=array(
    'nombre' =>'Benissa',
    'habitantes' =>'11598',
    'deuda'=>'108'
    );
$deuda[3][3042]=array(
    'nombre' =>'Benitachell/Poble Nou de Benitatxell, el',
    'habitantes' =>'4690',
    'deuda'=>'102'
    );
$deuda[3][3043]=array(
    'nombre' =>'Biar',
    'habitantes' =>'3657',
    'deuda'=>'0'
    );
$deuda[3][3044]=array(
    'nombre' =>'Bigastro',
    'habitantes' =>'6714',
    'deuda'=>'11364'
    );
$deuda[3][3045]=array(
    'nombre' =>'Bolulla',
    'habitantes' =>'426',
    'deuda'=>'0'
    );
$deuda[3][3046]=array(
    'nombre' =>'Busot',
    'habitantes' =>'3075',
    'deuda'=>'1146'
    );
$deuda[3][3047]=array(
    'nombre' =>'Calp',
    'habitantes' =>'21540',
    'deuda'=>'33902'
    );
$deuda[3][3048]=array(
    'nombre' =>'Callosa d\'en Sarrià',
    'habitantes' =>'7133',
    'deuda'=>'1588'
    );
$deuda[3][3049]=array(
    'nombre' =>'Callosa de Segura',
    'habitantes' =>'18200',
    'deuda'=>'14316'
    );
$deuda[3][3050]=array(
    'nombre' =>'Campello, el',
    'habitantes' =>'27356',
    'deuda'=>'0'
    );
$deuda[3][3051]=array(
    'nombre' =>'Campo de Mirra/Camp de Mirra, el',
    'habitantes' =>'445',
    'deuda'=>'0'
    );
$deuda[3][3052]=array(
    'nombre' =>'Cañada',
    'habitantes' =>'1229',
    'deuda'=>'0'
    );
$deuda[3][3053]=array(
    'nombre' =>'Castalla',
    'habitantes' =>'9994',
    'deuda'=>'0'
    );
$deuda[3][3054]=array(
    'nombre' =>'Castell de Castells',
    'habitantes' =>'431',
    'deuda'=>'41'
    );
$deuda[3][3055]=array(
    'nombre' =>'Catral',
    'habitantes' =>'8690',
    'deuda'=>'3024'
    );
$deuda[3][3056]=array(
    'nombre' =>'Cocentaina',
    'habitantes' =>'11406',
    'deuda'=>'1614'
    );
$deuda[3][3057]=array(
    'nombre' =>'Confrides',
    'habitantes' =>'208',
    'deuda'=>'0'
    );
$deuda[3][3058]=array(
    'nombre' =>'Cox',
    'habitantes' =>'7229',
    'deuda'=>'0'
    );
$deuda[3][3059]=array(
    'nombre' =>'Crevillent',
    'habitantes' =>'28465',
    'deuda'=>'5677'
    );
$deuda[3][3060]=array(
    'nombre' =>'Quatretondeta',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[3][3061]=array(
    'nombre' =>'Daya Nueva',
    'habitantes' =>'1732',
    'deuda'=>'1129'
    );
$deuda[3][3062]=array(
    'nombre' =>'Daya Vieja',
    'habitantes' =>'668',
    'deuda'=>'2846'
    );
$deuda[3][3063]=array(
    'nombre' =>'Dénia',
    'habitantes' =>'41553',
    'deuda'=>'29320'
    );
$deuda[3][3064]=array(
    'nombre' =>'Dolores',
    'habitantes' =>'7246',
    'deuda'=>'2864'
    );
$deuda[3][3065]=array(
    'nombre' =>'Elche/Elx',
    'habitantes' =>'227312',
    'deuda'=>'117244'
    );
$deuda[3][3066]=array(
    'nombre' =>'Elda',
    'habitantes' =>'53248',
    'deuda'=>'6497'
    );
$deuda[3][3067]=array(
    'nombre' =>'Facheca',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[3][3068]=array(
    'nombre' =>'Famorca',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[3][3069]=array(
    'nombre' =>'Finestrat',
    'habitantes' =>'6239',
    'deuda'=>'18166'
    );
$deuda[3][3070]=array(
    'nombre' =>'Formentera del Segura',
    'habitantes' =>'4206',
    'deuda'=>'245'
    );
$deuda[3][3071]=array(
    'nombre' =>'Gata de Gorgos',
    'habitantes' =>'5885',
    'deuda'=>'1682'
    );
$deuda[3][3072]=array(
    'nombre' =>'Gaianes',
    'habitantes' =>'457',
    'deuda'=>'31'
    );
$deuda[3][3073]=array(
    'nombre' =>'Gorga',
    'habitantes' =>'275',
    'deuda'=>'24'
    );
$deuda[3][3074]=array(
    'nombre' =>'Granja de Rocamora',
    'habitantes' =>'2425',
    'deuda'=>'125'
    );
$deuda[3][3075]=array(
    'nombre' =>'Castell de Guadalest, el',
    'habitantes' =>'224',
    'deuda'=>'256'
    );
$deuda[3][3076]=array(
    'nombre' =>'Guardamar del Segura',
    'habitantes' =>'15589',
    'deuda'=>'10875'
    );
$deuda[3][3077]=array(
    'nombre' =>'Fondó de les Neus, el/Hondón de las Nieves',
    'habitantes' =>'2583',
    'deuda'=>'0'
    );
$deuda[3][3078]=array(
    'nombre' =>'Hondón de los Frailes',
    'habitantes' =>'1160',
    'deuda'=>'46'
    );
$deuda[3][3079]=array(
    'nombre' =>'Ibi',
    'habitantes' =>'23321',
    'deuda'=>'7229'
    );
$deuda[3][3080]=array(
    'nombre' =>'Jacarilla',
    'habitantes' =>'1930',
    'deuda'=>'163'
    );
$deuda[3][3081]=array(
    'nombre' =>'Xaló',
    'habitantes' =>'2675',
    'deuda'=>'0'
    );
$deuda[3][3082]=array(
    'nombre' =>'Jávea/Xàbia',
    'habitantes' =>'27681',
    'deuda'=>'22228'
    );
$deuda[3][3083]=array(
    'nombre' =>'Jijona/Xixona',
    'habitantes' =>'7205',
    'deuda'=>'0'
    );
$deuda[3][3084]=array(
    'nombre' =>'Lorcha/Orxa, l\'',
    'habitantes' =>'650',
    'deuda'=>'473'
    );
$deuda[3][3085]=array(
    'nombre' =>'Llíber',
    'habitantes' =>'1099',
    'deuda'=>'543'
    );
$deuda[3][3086]=array(
    'nombre' =>'Millena',
    'habitantes' =>'224',
    'deuda'=>'30'
    );
$deuda[3][3088]=array(
    'nombre' =>'Monforte del Cid',
    'habitantes' =>'7603',
    'deuda'=>'8936'
    );
$deuda[3][3089]=array(
    'nombre' =>'Monóvar/Monòver',
    'habitantes' =>'12381',
    'deuda'=>'13120'
    );
$deuda[3][3090]=array(
    'nombre' =>'Mutxamel',
    'habitantes' =>'24256',
    'deuda'=>'5312'
    );
$deuda[3][3091]=array(
    'nombre' =>'Murla',
    'habitantes' =>'516',
    'deuda'=>'0'
    );
$deuda[3][3092]=array(
    'nombre' =>'Muro de Alcoy',
    'habitantes' =>'9167',
    'deuda'=>'870'
    );
$deuda[3][3093]=array(
    'nombre' =>'Novelda',
    'habitantes' =>'26146',
    'deuda'=>'25693'
    );
$deuda[3][3094]=array(
    'nombre' =>'Nucia, la',
    'habitantes' =>'20039',
    'deuda'=>'10536'
    );
$deuda[3][3095]=array(
    'nombre' =>'Ondara',
    'habitantes' =>'6617',
    'deuda'=>'3206'
    );
$deuda[3][3096]=array(
    'nombre' =>'Onil',
    'habitantes' =>'7548',
    'deuda'=>'1405'
    );
$deuda[3][3097]=array(
    'nombre' =>'Orba',
    'habitantes' =>'2210',
    'deuda'=>'1114'
    );
$deuda[3][3098]=array(
    'nombre' =>'Orxeta',
    'habitantes' =>'850',
    'deuda'=>'230'
    );
$deuda[3][3099]=array(
    'nombre' =>'Orihuela',
    'habitantes' =>'82675',
    'deuda'=>'37981'
    );
$deuda[3][3100]=array(
    'nombre' =>'Parcent',
    'habitantes' =>'997',
    'deuda'=>'0'
    );
$deuda[3][3101]=array(
    'nombre' =>'Pedreguer',
    'habitantes' =>'7337',
    'deuda'=>'2363'
    );
$deuda[3][3102]=array(
    'nombre' =>'Pego',
    'habitantes' =>'10331',
    'deuda'=>'7140'
    );
$deuda[3][3103]=array(
    'nombre' =>'Penàguila',
    'habitantes' =>'353',
    'deuda'=>'123'
    );
$deuda[3][3104]=array(
    'nombre' =>'Petrer',
    'habitantes' =>'34586',
    'deuda'=>'7065'
    );
$deuda[3][3105]=array(
    'nombre' =>'Pinós, el/Pinoso',
    'habitantes' =>'7695',
    'deuda'=>'1851'
    );
$deuda[3][3106]=array(
    'nombre' =>'Planes',
    'habitantes' =>'753',
    'deuda'=>'198'
    );
$deuda[3][3107]=array(
    'nombre' =>'Polop',
    'habitantes' =>'4369',
    'deuda'=>'3477'
    );
$deuda[3][3109]=array(
    'nombre' =>'Rafal',
    'habitantes' =>'4167',
    'deuda'=>'219'
    );
$deuda[3][3110]=array(
    'nombre' =>'Ràfol d\'Almúnia, el',
    'habitantes' =>'635',
    'deuda'=>'44'
    );
$deuda[3][3111]=array(
    'nombre' =>'Redován',
    'habitantes' =>'7706',
    'deuda'=>'3391'
    );
$deuda[3][3112]=array(
    'nombre' =>'Relleu',
    'habitantes' =>'1279',
    'deuda'=>'0'
    );
$deuda[3][3113]=array(
    'nombre' =>'Rojales',
    'habitantes' =>'18127',
    'deuda'=>'0'
    );
$deuda[3][3114]=array(
    'nombre' =>'Romana, la',
    'habitantes' =>'2431',
    'deuda'=>'0'
    );
$deuda[3][3115]=array(
    'nombre' =>'Sagra',
    'habitantes' =>'410',
    'deuda'=>'0'
    );
$deuda[3][3116]=array(
    'nombre' =>'Salinas',
    'habitantes' =>'1597',
    'deuda'=>'0'
    );
$deuda[3][3117]=array(
    'nombre' =>'Sanet y Negrals',
    'habitantes' =>'674',
    'deuda'=>'91'
    );
$deuda[3][3118]=array(
    'nombre' =>'San Fulgencio',
    'habitantes' =>'9021',
    'deuda'=>'6710'
    );
$deuda[3][3119]=array(
    'nombre' =>'Sant Joan d\'Alacant',
    'habitantes' =>'22825',
    'deuda'=>'6550'
    );
$deuda[3][3120]=array(
    'nombre' =>'San Miguel de Salinas',
    'habitantes' =>'6773',
    'deuda'=>'972'
    );
$deuda[3][3121]=array(
    'nombre' =>'Santa Pola',
    'habitantes' =>'31657',
    'deuda'=>'4547'
    );
$deuda[3][3122]=array(
    'nombre' =>'San Vicente del Raspeig/Sant Vicent del Raspeig',
    'habitantes' =>'56302',
    'deuda'=>'8641'
    );
$deuda[3][3123]=array(
    'nombre' =>'Sax',
    'habitantes' =>'9696',
    'deuda'=>'3419'
    );
$deuda[3][3124]=array(
    'nombre' =>'Sella',
    'habitantes' =>'588',
    'deuda'=>'0'
    );
$deuda[3][3125]=array(
    'nombre' =>'Senija',
    'habitantes' =>'610',
    'deuda'=>'0'
    );
$deuda[3][3127]=array(
    'nombre' =>'Tàrbena',
    'habitantes' =>'661',
    'deuda'=>'137'
    );
$deuda[3][3128]=array(
    'nombre' =>'Teulada',
    'habitantes' =>'11460',
    'deuda'=>'3546'
    );
$deuda[3][3129]=array(
    'nombre' =>'Tibi',
    'habitantes' =>'1656',
    'deuda'=>'311'
    );
$deuda[3][3130]=array(
    'nombre' =>'Tollos',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[3][3131]=array(
    'nombre' =>'Tormos',
    'habitantes' =>'312',
    'deuda'=>'0'
    );
$deuda[3][3132]=array(
    'nombre' =>'Torremanzanas/Torre de les Maçanes, la',
    'habitantes' =>'746',
    'deuda'=>'352'
    );
$deuda[3][3133]=array(
    'nombre' =>'Torrevieja',
    'habitantes' =>'88447',
    'deuda'=>'58219'
    );
$deuda[3][3134]=array(
    'nombre' =>'Vall d\'Alcalà, la',
    'habitantes' =>'169',
    'deuda'=>'0'
    );
$deuda[3][3135]=array(
    'nombre' =>'Vall d\'Ebo, la',
    'habitantes' =>'249',
    'deuda'=>'0'
    );
$deuda[3][3136]=array(
    'nombre' =>'Vall de Gallinera',
    'habitantes' =>'609',
    'deuda'=>'4'
    );
$deuda[3][3137]=array(
    'nombre' =>'Vall de Laguar, la',
    'habitantes' =>'826',
    'deuda'=>'160'
    );
$deuda[3][3138]=array(
    'nombre' =>'Verger, el',
    'habitantes' =>'4627',
    'deuda'=>'2909'
    );
$deuda[3][3139]=array(
    'nombre' =>'Villajoyosa/Vila Joiosa, la',
    'habitantes' =>'33878',
    'deuda'=>'15127'
    );
$deuda[3][3140]=array(
    'nombre' =>'Villena',
    'habitantes' =>'34361',
    'deuda'=>'6790'
    );
$deuda[3][3901]=array(
    'nombre' =>'Poblets, els',
    'habitantes' =>'3303',
    'deuda'=>'0'
    );
$deuda[3][3902]=array(
    'nombre' =>'Pilar de la Horadada',
    'habitantes' =>'21629',
    'deuda'=>'6114'
    );
$deuda[3][3903]=array(
    'nombre' =>'Montesinos, Los',
    'habitantes' =>'4921',
    'deuda'=>'227'
    );
$deuda[3][3904]=array(
    'nombre' =>'San Isidro',
    'habitantes' =>'1874',
    'deuda'=>'399'
    );
$deuda[4][4001]=array(
    'nombre' =>'Abla',
    'habitantes' =>'1342',
    'deuda'=>'424'
    );
$deuda[4][4002]=array(
    'nombre' =>'Abrucena',
    'habitantes' =>'1279',
    'deuda'=>'132'
    );
$deuda[4][4003]=array(
    'nombre' =>'Adra',
    'habitantes' =>'24670',
    'deuda'=>'18168'
    );
$deuda[4][4004]=array(
    'nombre' =>'Albánchez',
    'habitantes' =>'805',
    'deuda'=>'92'
    );
$deuda[4][4005]=array(
    'nombre' =>'Alboloduy',
    'habitantes' =>'653',
    'deuda'=>'31'
    );
$deuda[4][4006]=array(
    'nombre' =>'Albox',
    'habitantes' =>'11429',
    'deuda'=>'21003'
    );
$deuda[4][4007]=array(
    'nombre' =>'Alcolea',
    'habitantes' =>'812',
    'deuda'=>'300'
    );
$deuda[4][4008]=array(
    'nombre' =>'Alcóntar',
    'habitantes' =>'570',
    'deuda'=>'293'
    );
$deuda[4][4009]=array(
    'nombre' =>'Alcudia de Monteagud',
    'habitantes' =>'168',
    'deuda'=>'32'
    );
$deuda[4][4010]=array(
    'nombre' =>'Alhabia',
    'habitantes' =>'700',
    'deuda'=>'2828'
    );
$deuda[4][4011]=array(
    'nombre' =>'Alhama de Almería',
    'habitantes' =>'3763',
    'deuda'=>'2427'
    );
$deuda[4][4012]=array(
    'nombre' =>'Alicún',
    'habitantes' =>'220',
    'deuda'=>'248'
    );
$deuda[4][4013]=array(
    'nombre' =>'Almería',
    'habitantes' =>'194203',
    'deuda'=>'103523'
    );
$deuda[4][4014]=array(
    'nombre' =>'Almócita',
    'habitantes' =>'173',
    'deuda'=>'50'
    );
$deuda[4][4015]=array(
    'nombre' =>'Alsodux',
    'habitantes' =>'138',
    'deuda'=>'0'
    );
$deuda[4][4016]=array(
    'nombre' =>'Antas',
    'habitantes' =>'3195',
    'deuda'=>'2013'
    );
$deuda[4][4017]=array(
    'nombre' =>'Arboleas',
    'habitantes' =>'4670',
    'deuda'=>'653'
    );
$deuda[4][4018]=array(
    'nombre' =>'Armuña de Almanzora',
    'habitantes' =>'332',
    'deuda'=>'0'
    );
$deuda[4][4019]=array(
    'nombre' =>'Bacares',
    'habitantes' =>'278',
    'deuda'=>'173'
    );
$deuda[4][4020]=array(
    'nombre' =>'Bayárcal',
    'habitantes' =>'336',
    'deuda'=>'50'
    );
$deuda[4][4021]=array(
    'nombre' =>'Bayarque',
    'habitantes' =>'216',
    'deuda'=>'0'
    );
$deuda[4][4022]=array(
    'nombre' =>'Bédar',
    'habitantes' =>'990',
    'deuda'=>'0'
    );
$deuda[4][4023]=array(
    'nombre' =>'Beires',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[4][4024]=array(
    'nombre' =>'Benahadux',
    'habitantes' =>'4183',
    'deuda'=>'0'
    );
$deuda[4][4026]=array(
    'nombre' =>'Benitagla',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[4][4027]=array(
    'nombre' =>'Benizalón',
    'habitantes' =>'283',
    'deuda'=>'28'
    );
$deuda[4][4028]=array(
    'nombre' =>'Bentarique',
    'habitantes' =>'258',
    'deuda'=>'286'
    );
$deuda[4][4029]=array(
    'nombre' =>'Berja',
    'habitantes' =>'15174',
    'deuda'=>'7964'
    );
$deuda[4][4030]=array(
    'nombre' =>'Canjáyar',
    'habitantes' =>'1342',
    'deuda'=>'77'
    );
$deuda[4][4031]=array(
    'nombre' =>'Cantoria',
    'habitantes' =>'3580',
    'deuda'=>'1656'
    );
$deuda[4][4032]=array(
    'nombre' =>'Carboneras',
    'habitantes' =>'7838',
    'deuda'=>'6315'
    );
$deuda[4][4033]=array(
    'nombre' =>'Castro de Filabres',
    'habitantes' =>'147',
    'deuda'=>'0'
    );
$deuda[4][4034]=array(
    'nombre' =>'Cóbdar',
    'habitantes' =>'183',
    'deuda'=>'0'
    );
$deuda[4][4035]=array(
    'nombre' =>'Cuevas del Almanzora',
    'habitantes' =>'13292',
    'deuda'=>'6841'
    );
$deuda[4][4036]=array(
    'nombre' =>'Chercos',
    'habitantes' =>'275',
    'deuda'=>'0'
    );
$deuda[4][4037]=array(
    'nombre' =>'Chirivel',
    'habitantes' =>'1604',
    'deuda'=>'1467'
    );
$deuda[4][4038]=array(
    'nombre' =>'Dalías',
    'habitantes' =>'3979',
    'deuda'=>'3390'
    );
$deuda[4][4041]=array(
    'nombre' =>'Enix',
    'habitantes' =>'437',
    'deuda'=>'85'
    );
$deuda[4][4043]=array(
    'nombre' =>'Felix',
    'habitantes' =>'688',
    'deuda'=>'181'
    );
$deuda[4][4044]=array(
    'nombre' =>'Fines',
    'habitantes' =>'2143',
    'deuda'=>'1648'
    );
$deuda[4][4045]=array(
    'nombre' =>'Fiñana',
    'habitantes' =>'2134',
    'deuda'=>'293'
    );
$deuda[4][4046]=array(
    'nombre' =>'Fondón',
    'habitantes' =>'1020',
    'deuda'=>'131'
    );
$deuda[4][4047]=array(
    'nombre' =>'Gádor',
    'habitantes' =>'3027',
    'deuda'=>'1135'
    );
$deuda[4][4048]=array(
    'nombre' =>'Gallardos, Los',
    'habitantes' =>'2973',
    'deuda'=>'158'
    );
$deuda[4][4049]=array(
    'nombre' =>'Garrucha',
    'habitantes' =>'8577',
    'deuda'=>'3279'
    );
$deuda[4][4050]=array(
    'nombre' =>'Gérgal',
    'habitantes' =>'1093',
    'deuda'=>'346'
    );
$deuda[4][4051]=array(
    'nombre' =>'Huécija',
    'habitantes' =>'515',
    'deuda'=>'206'
    );
$deuda[4][4052]=array(
    'nombre' =>'Huércal de Almería',
    'habitantes' =>'16823',
    'deuda'=>'0'
    );
$deuda[4][4053]=array(
    'nombre' =>'Huércal-Overa',
    'habitantes' =>'18530',
    'deuda'=>'6963'
    );
$deuda[4][4054]=array(
    'nombre' =>'Illar',
    'habitantes' =>'380',
    'deuda'=>'251'
    );
$deuda[4][4055]=array(
    'nombre' =>'Instinción',
    'habitantes' =>'458',
    'deuda'=>'0'
    );
$deuda[4][4056]=array(
    'nombre' =>'Laroya',
    'habitantes' =>'178',
    'deuda'=>'36'
    );
$deuda[4][4057]=array(
    'nombre' =>'Láujar de Andarax',
    'habitantes' =>'1574',
    'deuda'=>'0'
    );
$deuda[4][4058]=array(
    'nombre' =>'Líjar',
    'habitantes' =>'431',
    'deuda'=>'23'
    );
$deuda[4][4059]=array(
    'nombre' =>'Lubrín',
    'habitantes' =>'1568',
    'deuda'=>'819'
    );
$deuda[4][4060]=array(
    'nombre' =>'Lucainena de las Torres',
    'habitantes' =>'606',
    'deuda'=>'52'
    );
$deuda[4][4061]=array(
    'nombre' =>'Lúcar',
    'habitantes' =>'772',
    'deuda'=>'429'
    );
$deuda[4][4062]=array(
    'nombre' =>'Macael',
    'habitantes' =>'5676',
    'deuda'=>'12234'
    );
$deuda[4][4063]=array(
    'nombre' =>'María',
    'habitantes' =>'1285',
    'deuda'=>'543'
    );
$deuda[4][4064]=array(
    'nombre' =>'Mojácar',
    'habitantes' =>'6825',
    'deuda'=>'3125'
    );
$deuda[4][4065]=array(
    'nombre' =>'Nacimiento',
    'habitantes' =>'501',
    'deuda'=>'0'
    );
$deuda[4][4066]=array(
    'nombre' =>'Níjar',
    'habitantes' =>'28056',
    'deuda'=>'18778'
    );
$deuda[4][4067]=array(
    'nombre' =>'Ohanes',
    'habitantes' =>'669',
    'deuda'=>'72'
    );
$deuda[4][4068]=array(
    'nombre' =>'Olula de Castro',
    'habitantes' =>'190',
    'deuda'=>'115'
    );
$deuda[4][4069]=array(
    'nombre' =>'Olula del Río',
    'habitantes' =>'6259',
    'deuda'=>'2593'
    );
$deuda[4][4070]=array(
    'nombre' =>'Oria',
    'habitantes' =>'2428',
    'deuda'=>'1978'
    );
$deuda[4][4071]=array(
    'nombre' =>'Padules',
    'habitantes' =>'464',
    'deuda'=>'104'
    );
$deuda[4][4072]=array(
    'nombre' =>'Partaloa',
    'habitantes' =>'673',
    'deuda'=>'542'
    );
$deuda[4][4073]=array(
    'nombre' =>'Paterna del Río',
    'habitantes' =>'376',
    'deuda'=>'152'
    );
$deuda[4][4074]=array(
    'nombre' =>'Pechina',
    'habitantes' =>'3860',
    'deuda'=>'45'
    );
$deuda[4][4075]=array(
    'nombre' =>'Pulpí',
    'habitantes' =>'8762',
    'deuda'=>'5415'
    );
$deuda[4][4076]=array(
    'nombre' =>'Purchena',
    'habitantes' =>'1686',
    'deuda'=>'664'
    );
$deuda[4][4077]=array(
    'nombre' =>'Rágol',
    'habitantes' =>'338',
    'deuda'=>'257'
    );
$deuda[4][4078]=array(
    'nombre' =>'Rioja',
    'habitantes' =>'1374',
    'deuda'=>'0'
    );
$deuda[4][4079]=array(
    'nombre' =>'Roquetas de Mar',
    'habitantes' =>'90623',
    'deuda'=>'7000'
    );
$deuda[4][4080]=array(
    'nombre' =>'Santa Cruz de Marchena',
    'habitantes' =>'254',
    'deuda'=>'0'
    );
$deuda[4][4081]=array(
    'nombre' =>'Santa Fe de Mondújar',
    'habitantes' =>'448',
    'deuda'=>'0'
    );
$deuda[4][4082]=array(
    'nombre' =>'Senés',
    'habitantes' =>'330',
    'deuda'=>'63'
    );
$deuda[4][4083]=array(
    'nombre' =>'Serón',
    'habitantes' =>'2167',
    'deuda'=>'432'
    );
$deuda[4][4084]=array(
    'nombre' =>'Sierro',
    'habitantes' =>'392',
    'deuda'=>'61'
    );
$deuda[4][4085]=array(
    'nombre' =>'Somontín',
    'habitantes' =>'492',
    'deuda'=>'0'
    );
$deuda[4][4086]=array(
    'nombre' =>'Sorbas',
    'habitantes' =>'2608',
    'deuda'=>'1906'
    );
$deuda[4][4087]=array(
    'nombre' =>'Suflí',
    'habitantes' =>'252',
    'deuda'=>'90'
    );
$deuda[4][4088]=array(
    'nombre' =>'Tabernas',
    'habitantes' =>'3668',
    'deuda'=>'701'
    );
$deuda[4][4089]=array(
    'nombre' =>'Taberno',
    'habitantes' =>'1000',
    'deuda'=>'96'
    );
$deuda[4][4090]=array(
    'nombre' =>'Tahal',
    'habitantes' =>'396',
    'deuda'=>'125'
    );
$deuda[4][4091]=array(
    'nombre' =>'Terque',
    'habitantes' =>'417',
    'deuda'=>'120'
    );
$deuda[4][4092]=array(
    'nombre' =>'Tíjola',
    'habitantes' =>'3701',
    'deuda'=>'0'
    );
$deuda[4][4093]=array(
    'nombre' =>'Turre',
    'habitantes' =>'3346',
    'deuda'=>'7455'
    );
$deuda[4][4094]=array(
    'nombre' =>'Turrillas',
    'habitantes' =>'242',
    'deuda'=>'167'
    );
$deuda[4][4095]=array(
    'nombre' =>'Uleila del Campo',
    'habitantes' =>'897',
    'deuda'=>'116'
    );
$deuda[4][4096]=array(
    'nombre' =>'Urrácal',
    'habitantes' =>'336',
    'deuda'=>'0'
    );
$deuda[4][4097]=array(
    'nombre' =>'Velefique',
    'habitantes' =>'268',
    'deuda'=>'0'
    );
$deuda[4][4098]=array(
    'nombre' =>'Vélez-Blanco',
    'habitantes' =>'2035',
    'deuda'=>'519'
    );
$deuda[4][4099]=array(
    'nombre' =>'Vélez-Rubio',
    'habitantes' =>'6767',
    'deuda'=>'5861'
    );
$deuda[4][4100]=array(
    'nombre' =>'Vera',
    'habitantes' =>'15108',
    'deuda'=>'7628'
    );
$deuda[4][4101]=array(
    'nombre' =>'Viator',
    'habitantes' =>'5698',
    'deuda'=>'0'
    );
$deuda[4][4102]=array(
    'nombre' =>'Vícar',
    'habitantes' =>'24571',
    'deuda'=>'17010'
    );
$deuda[4][4103]=array(
    'nombre' =>'Zurgena',
    'habitantes' =>'3030',
    'deuda'=>'940'
    );
$deuda[4][4901]=array(
    'nombre' =>'Tres Villas, Las',
    'habitantes' =>'615',
    'deuda'=>'0'
    );
$deuda[4][4902]=array(
    'nombre' =>'Ejido, El',
    'habitantes' =>'85961',
    'deuda'=>'173463'
    );
$deuda[4][4903]=array(
    'nombre' =>'Mojonera, La',
    'habitantes' =>'8963',
    'deuda'=>'4791'
    );
$deuda[5][5001]=array(
    'nombre' =>'Adanero',
    'habitantes' =>'231',
    'deuda'=>'124'
    );
$deuda[5][5002]=array(
    'nombre' =>'Adrada, La',
    'habitantes' =>'2640',
    'deuda'=>'322'
    );
$deuda[5][5005]=array(
    'nombre' =>'Albornos',
    'habitantes' =>'205',
    'deuda'=>'0'
    );
$deuda[5][5007]=array(
    'nombre' =>'Aldeanueva de Santa Cruz',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[5][5008]=array(
    'nombre' =>'Aldeaseca',
    'habitantes' =>'262',
    'deuda'=>'0'
    );
$deuda[5][5010]=array(
    'nombre' =>'Aldehuela, La',
    'habitantes' =>'173',
    'deuda'=>'0'
    );
$deuda[5][5012]=array(
    'nombre' =>'Amavida',
    'habitantes' =>'147',
    'deuda'=>'0'
    );
$deuda[5][5013]=array(
    'nombre' =>'Arenal, El',
    'habitantes' =>'1011',
    'deuda'=>'0'
    );
$deuda[5][5014]=array(
    'nombre' =>'Arenas de San Pedro',
    'habitantes' =>'6671',
    'deuda'=>'3436'
    );
$deuda[5][5015]=array(
    'nombre' =>'Arevalillo',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[5][5016]=array(
    'nombre' =>'Arévalo',
    'habitantes' =>'8172',
    'deuda'=>'2807'
    );
$deuda[5][5017]=array(
    'nombre' =>'Aveinte',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[5][5018]=array(
    'nombre' =>'Avellaneda',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[5][5019]=array(
    'nombre' =>'Ávila',
    'habitantes' =>'58358',
    'deuda'=>'39540'
    );
$deuda[5][5021]=array(
    'nombre' =>'Barco de Ávila, El',
    'habitantes' =>'2576',
    'deuda'=>'335'
    );
$deuda[5][5022]=array(
    'nombre' =>'Barraco, El',
    'habitantes' =>'1968',
    'deuda'=>'0'
    );
$deuda[5][5023]=array(
    'nombre' =>'Barromán',
    'habitantes' =>'196',
    'deuda'=>'0'
    );
$deuda[5][5024]=array(
    'nombre' =>'Becedas',
    'habitantes' =>'236',
    'deuda'=>'0'
    );
$deuda[5][5025]=array(
    'nombre' =>'Becedillas',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[5][5026]=array(
    'nombre' =>'Bercial de Zapardiel',
    'habitantes' =>'221',
    'deuda'=>'39'
    );
$deuda[5][5027]=array(
    'nombre' =>'Berlanas, Las',
    'habitantes' =>'330',
    'deuda'=>'11'
    );
$deuda[5][5029]=array(
    'nombre' =>'Bernuy-Zapardiel',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[5][5030]=array(
    'nombre' =>'Berrocalejo de Aragona',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[5][5033]=array(
    'nombre' =>'Blascomillán',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[5][5034]=array(
    'nombre' =>'Blasconuño de Matacabras',
    'habitantes' =>'15',
    'deuda'=>'0'
    );
$deuda[5][5035]=array(
    'nombre' =>'Blascosancho',
    'habitantes' =>'117',
    'deuda'=>'35'
    );
$deuda[5][5036]=array(
    'nombre' =>'Bohodón, El',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[5][5037]=array(
    'nombre' =>'Bohoyo',
    'habitantes' =>'304',
    'deuda'=>'0'
    );
$deuda[5][5038]=array(
    'nombre' =>'Bonilla de la Sierra',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[5][5039]=array(
    'nombre' =>'Brabos',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[5][5040]=array(
    'nombre' =>'Bularros',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[5][5041]=array(
    'nombre' =>'Burgohondo',
    'habitantes' =>'1228',
    'deuda'=>'817'
    );
$deuda[5][5042]=array(
    'nombre' =>'Cabezas de Alambre',
    'habitantes' =>'168',
    'deuda'=>'0'
    );
$deuda[5][5043]=array(
    'nombre' =>'Cabezas del Pozo',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[5][5044]=array(
    'nombre' =>'Cabezas del Villar',
    'habitantes' =>'261',
    'deuda'=>'0'
    );
$deuda[5][5045]=array(
    'nombre' =>'Cabizuela',
    'habitantes' =>'98',
    'deuda'=>'0'
    );
$deuda[5][5046]=array(
    'nombre' =>'Canales',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[5][5047]=array(
    'nombre' =>'Candeleda',
    'habitantes' =>'5104',
    'deuda'=>'607'
    );
$deuda[5][5048]=array(
    'nombre' =>'Cantiveros',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[5][5049]=array(
    'nombre' =>'Cardeñosa',
    'habitantes' =>'454',
    'deuda'=>'0'
    );
$deuda[5][5051]=array(
    'nombre' =>'Carrera, La',
    'habitantes' =>'201',
    'deuda'=>'0'
    );
$deuda[5][5052]=array(
    'nombre' =>'Casas del Puerto',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[5][5053]=array(
    'nombre' =>'Casasola',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[5][5054]=array(
    'nombre' =>'Casavieja',
    'habitantes' =>'1507',
    'deuda'=>'0'
    );
$deuda[5][5055]=array(
    'nombre' =>'Casillas',
    'habitantes' =>'704',
    'deuda'=>'277'
    );
$deuda[5][5056]=array(
    'nombre' =>'Castellanos de Zapardiel',
    'habitantes' =>'97',
    'deuda'=>'0'
    );
$deuda[5][5057]=array(
    'nombre' =>'Cebreros',
    'habitantes' =>'3232',
    'deuda'=>'339'
    );
$deuda[5][5058]=array(
    'nombre' =>'Cepeda la Mora',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[5][5059]=array(
    'nombre' =>'Cillán',
    'habitantes' =>'110',
    'deuda'=>'33'
    );
$deuda[5][5060]=array(
    'nombre' =>'Cisla',
    'habitantes' =>'118',
    'deuda'=>'0'
    );
$deuda[5][5061]=array(
    'nombre' =>'Colilla, La',
    'habitantes' =>'331',
    'deuda'=>'0'
    );
$deuda[5][5062]=array(
    'nombre' =>'Collado de Contreras',
    'habitantes' =>'192',
    'deuda'=>'0'
    );
$deuda[5][5063]=array(
    'nombre' =>'Collado del Mirón',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[5][5064]=array(
    'nombre' =>'Constanzana',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[5][5065]=array(
    'nombre' =>'Crespos',
    'habitantes' =>'526',
    'deuda'=>'0'
    );
$deuda[5][5066]=array(
    'nombre' =>'Cuevas del Valle',
    'habitantes' =>'516',
    'deuda'=>'317'
    );
$deuda[5][5067]=array(
    'nombre' =>'Chamartín',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[5][5069]=array(
    'nombre' =>'Donjimeno',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[5][5070]=array(
    'nombre' =>'Donvidas',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[5][5072]=array(
    'nombre' =>'Espinosa de los Caballeros',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[5][5073]=array(
    'nombre' =>'Flores de Ávila',
    'habitantes' =>'320',
    'deuda'=>'0'
    );
$deuda[5][5074]=array(
    'nombre' =>'Fontiveros',
    'habitantes' =>'770',
    'deuda'=>'0'
    );
$deuda[5][5075]=array(
    'nombre' =>'Fresnedilla',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[5][5076]=array(
    'nombre' =>'Fresno, El',
    'habitantes' =>'601',
    'deuda'=>'0'
    );
$deuda[5][5077]=array(
    'nombre' =>'Fuente el Saúz',
    'habitantes' =>'182',
    'deuda'=>'0'
    );
$deuda[5][5078]=array(
    'nombre' =>'Fuentes de Año',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[5][5079]=array(
    'nombre' =>'Gallegos de Altamiros',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[5][5080]=array(
    'nombre' =>'Gallegos de Sobrinos',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[5][5081]=array(
    'nombre' =>'Garganta del Villar',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[5][5082]=array(
    'nombre' =>'Gavilanes',
    'habitantes' =>'619',
    'deuda'=>'375'
    );
$deuda[5][5083]=array(
    'nombre' =>'Gemuño',
    'habitantes' =>'169',
    'deuda'=>'0'
    );
$deuda[5][5084]=array(
    'nombre' =>'Gilbuena',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[5][5085]=array(
    'nombre' =>'Gil García',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[5][5086]=array(
    'nombre' =>'Gimialcón',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[5][5087]=array(
    'nombre' =>'Gotarrendura',
    'habitantes' =>'164',
    'deuda'=>'203'
    );
$deuda[5][5088]=array(
    'nombre' =>'Grandes y San Martín',
    'habitantes' =>'30',
    'deuda'=>'0'
    );
$deuda[5][5089]=array(
    'nombre' =>'Guisando',
    'habitantes' =>'534',
    'deuda'=>'0'
    );
$deuda[5][5090]=array(
    'nombre' =>'Gutierre-Muñoz',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[5][5092]=array(
    'nombre' =>'Hernansancho',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[5][5093]=array(
    'nombre' =>'Herradón de Pinares',
    'habitantes' =>'549',
    'deuda'=>'660'
    );
$deuda[5][5094]=array(
    'nombre' =>'Herreros de Suso',
    'habitantes' =>'145',
    'deuda'=>'0'
    );
$deuda[5][5095]=array(
    'nombre' =>'Higuera de las Dueñas',
    'habitantes' =>'302',
    'deuda'=>'0'
    );
$deuda[5][5096]=array(
    'nombre' =>'Hija de Dios, La',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[5][5097]=array(
    'nombre' =>'Horcajada, La',
    'habitantes' =>'525',
    'deuda'=>'0'
    );
$deuda[5][5099]=array(
    'nombre' =>'Horcajo de las Torres',
    'habitantes' =>'556',
    'deuda'=>'0'
    );
$deuda[5][5100]=array(
    'nombre' =>'Hornillo, El',
    'habitantes' =>'317',
    'deuda'=>'271'
    );
$deuda[5][5101]=array(
    'nombre' =>'Hoyocasero',
    'habitantes' =>'369',
    'deuda'=>'0'
    );
$deuda[5][5102]=array(
    'nombre' =>'Hoyo de Pinares, El',
    'habitantes' =>'2308',
    'deuda'=>'1397'
    );
$deuda[5][5103]=array(
    'nombre' =>'Hoyorredondo',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[5][5104]=array(
    'nombre' =>'Hoyos del Collado',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[5][5105]=array(
    'nombre' =>'Hoyos del Espino',
    'habitantes' =>'364',
    'deuda'=>'145'
    );
$deuda[5][5106]=array(
    'nombre' =>'Hoyos de Miguel Muñoz',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[5][5107]=array(
    'nombre' =>'Hurtumpascual',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[5][5108]=array(
    'nombre' =>'Junciana',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[5][5109]=array(
    'nombre' =>'Langa',
    'habitantes' =>'520',
    'deuda'=>'63'
    );
$deuda[5][5110]=array(
    'nombre' =>'Lanzahíta',
    'habitantes' =>'905',
    'deuda'=>'575'
    );
$deuda[5][5112]=array(
    'nombre' =>'Losar del Barco, El',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[5][5113]=array(
    'nombre' =>'Llanos de Tormes, Los',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[5][5114]=array(
    'nombre' =>'Madrigal de las Altas Torres',
    'habitantes' =>'1524',
    'deuda'=>'0'
    );
$deuda[5][5115]=array(
    'nombre' =>'Maello',
    'habitantes' =>'647',
    'deuda'=>'0'
    );
$deuda[5][5116]=array(
    'nombre' =>'Malpartida de Corneja',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[5][5117]=array(
    'nombre' =>'Mamblas',
    'habitantes' =>'220',
    'deuda'=>'0'
    );
$deuda[5][5118]=array(
    'nombre' =>'Mancera de Arriba',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[5][5119]=array(
    'nombre' =>'Manjabálago y Ortigosa de Rioalmar',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[5][5120]=array(
    'nombre' =>'Marlín',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[5][5121]=array(
    'nombre' =>'Martiherrero',
    'habitantes' =>'307',
    'deuda'=>'0'
    );
$deuda[5][5122]=array(
    'nombre' =>'Martínez',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[5][5123]=array(
    'nombre' =>'Mediana de Voltoya',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[5][5124]=array(
    'nombre' =>'Medinilla',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[5][5125]=array(
    'nombre' =>'Mengamuñoz',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[5][5126]=array(
    'nombre' =>'Mesegar de Corneja',
    'habitantes' =>'75',
    'deuda'=>'0'
    );
$deuda[5][5127]=array(
    'nombre' =>'Mijares',
    'habitantes' =>'767',
    'deuda'=>'0'
    );
$deuda[5][5128]=array(
    'nombre' =>'Mingorría',
    'habitantes' =>'407',
    'deuda'=>'0'
    );
$deuda[5][5129]=array(
    'nombre' =>'Mirón, El',
    'habitantes' =>'134',
    'deuda'=>'0'
    );
$deuda[5][5130]=array(
    'nombre' =>'Mironcillo',
    'habitantes' =>'101',
    'deuda'=>'0'
    );
$deuda[5][5131]=array(
    'nombre' =>'Mirueña de los Infanzones',
    'habitantes' =>'98',
    'deuda'=>'0'
    );
$deuda[5][5132]=array(
    'nombre' =>'Mombeltrán',
    'habitantes' =>'1171',
    'deuda'=>'569'
    );
$deuda[5][5133]=array(
    'nombre' =>'Monsalupe',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[5][5134]=array(
    'nombre' =>'Moraleja de Matacabras',
    'habitantes' =>'47',
    'deuda'=>'12'
    );
$deuda[5][5135]=array(
    'nombre' =>'Muñana',
    'habitantes' =>'435',
    'deuda'=>'222'
    );
$deuda[5][5136]=array(
    'nombre' =>'Muñico',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[5][5138]=array(
    'nombre' =>'Muñogalindo',
    'habitantes' =>'374',
    'deuda'=>'0'
    );
$deuda[5][5139]=array(
    'nombre' =>'Muñogrande',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[5][5140]=array(
    'nombre' =>'Muñomer del Peco',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[5][5141]=array(
    'nombre' =>'Muñopepe',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[5][5142]=array(
    'nombre' =>'Muñosancho',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[5][5143]=array(
    'nombre' =>'Muñotello',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[5][5144]=array(
    'nombre' =>'Narrillos del Álamo',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[5][5145]=array(
    'nombre' =>'Narrillos del Rebollar',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[5][5147]=array(
    'nombre' =>'Narros del Castillo',
    'habitantes' =>'180',
    'deuda'=>'0'
    );
$deuda[5][5148]=array(
    'nombre' =>'Narros del Puerto',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[5][5149]=array(
    'nombre' =>'Narros de Saldueña',
    'habitantes' =>'110',
    'deuda'=>'0'
    );
$deuda[5][5151]=array(
    'nombre' =>'Navacepedilla de Corneja',
    'habitantes' =>'109',
    'deuda'=>'28'
    );
$deuda[5][5152]=array(
    'nombre' =>'Nava de Arévalo',
    'habitantes' =>'801',
    'deuda'=>'0'
    );
$deuda[5][5153]=array(
    'nombre' =>'Nava del Barco',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[5][5154]=array(
    'nombre' =>'Navadijos',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[5][5155]=array(
    'nombre' =>'Navaescurial',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[5][5156]=array(
    'nombre' =>'Navahondilla',
    'habitantes' =>'335',
    'deuda'=>'513'
    );
$deuda[5][5157]=array(
    'nombre' =>'Navalacruz',
    'habitantes' =>'259',
    'deuda'=>'0'
    );
$deuda[5][5158]=array(
    'nombre' =>'Navalmoral',
    'habitantes' =>'353',
    'deuda'=>'0'
    );
$deuda[5][5159]=array(
    'nombre' =>'Navalonguilla',
    'habitantes' =>'264',
    'deuda'=>'0'
    );
$deuda[5][5160]=array(
    'nombre' =>'Navalosa',
    'habitantes' =>'333',
    'deuda'=>'0'
    );
$deuda[5][5161]=array(
    'nombre' =>'Navalperal de Pinares',
    'habitantes' =>'867',
    'deuda'=>'0'
    );
$deuda[5][5162]=array(
    'nombre' =>'Navalperal de Tormes',
    'habitantes' =>'98',
    'deuda'=>'36'
    );
$deuda[5][5163]=array(
    'nombre' =>'Navaluenga',
    'habitantes' =>'2017',
    'deuda'=>'248'
    );
$deuda[5][5164]=array(
    'nombre' =>'Navaquesera',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[5][5165]=array(
    'nombre' =>'Navarredonda de Gredos',
    'habitantes' =>'473',
    'deuda'=>'546'
    );
$deuda[5][5166]=array(
    'nombre' =>'Navarredondilla',
    'habitantes' =>'217',
    'deuda'=>'0'
    );
$deuda[5][5167]=array(
    'nombre' =>'Navarrevisca',
    'habitantes' =>'307',
    'deuda'=>'0'
    );
$deuda[5][5168]=array(
    'nombre' =>'Navas del Marqués, Las',
    'habitantes' =>'5420',
    'deuda'=>'643'
    );
$deuda[5][5169]=array(
    'nombre' =>'Navatalgordo',
    'habitantes' =>'239',
    'deuda'=>'66'
    );
$deuda[5][5170]=array(
    'nombre' =>'Navatejares',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[5][5171]=array(
    'nombre' =>'Neila de San Miguel',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[5][5172]=array(
    'nombre' =>'Niharra',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[5][5173]=array(
    'nombre' =>'Ojos-Albos',
    'habitantes' =>'67',
    'deuda'=>'0'
    );
$deuda[5][5174]=array(
    'nombre' =>'Orbita',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[5][5175]=array(
    'nombre' =>'Oso, El',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[5][5176]=array(
    'nombre' =>'Padiernos',
    'habitantes' =>'292',
    'deuda'=>'0'
    );
$deuda[5][5177]=array(
    'nombre' =>'Pajares de Adaja',
    'habitantes' =>'191',
    'deuda'=>'49'
    );
$deuda[5][5178]=array(
    'nombre' =>'Palacios de Goda',
    'habitantes' =>'418',
    'deuda'=>'107'
    );
$deuda[5][5179]=array(
    'nombre' =>'Papatrigo',
    'habitantes' =>'253',
    'deuda'=>'4'
    );
$deuda[5][5180]=array(
    'nombre' =>'Parral, El',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[5][5181]=array(
    'nombre' =>'Pascualcobo',
    'habitantes' =>'39',
    'deuda'=>'28'
    );
$deuda[5][5182]=array(
    'nombre' =>'Pedro Bernardo',
    'habitantes' =>'921',
    'deuda'=>'873'
    );
$deuda[5][5183]=array(
    'nombre' =>'Pedro-Rodríguez',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[5][5184]=array(
    'nombre' =>'Peguerinos',
    'habitantes' =>'312',
    'deuda'=>'1767'
    );
$deuda[5][5185]=array(
    'nombre' =>'Peñalba de Ávila',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[5][5186]=array(
    'nombre' =>'Piedrahíta',
    'habitantes' =>'1884',
    'deuda'=>'1060'
    );
$deuda[5][5187]=array(
    'nombre' =>'Piedralaves',
    'habitantes' =>'2208',
    'deuda'=>'0'
    );
$deuda[5][5188]=array(
    'nombre' =>'Poveda',
    'habitantes' =>'50',
    'deuda'=>'23'
    );
$deuda[5][5189]=array(
    'nombre' =>'Poyales del Hoyo',
    'habitantes' =>'557',
    'deuda'=>'0'
    );
$deuda[5][5190]=array(
    'nombre' =>'Pozanco',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[5][5191]=array(
    'nombre' =>'Pradosegar',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[5][5192]=array(
    'nombre' =>'Puerto Castilla',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[5][5193]=array(
    'nombre' =>'Rasueros',
    'habitantes' =>'201',
    'deuda'=>'0'
    );
$deuda[5][5194]=array(
    'nombre' =>'Riocabado',
    'habitantes' =>'150',
    'deuda'=>'0'
    );
$deuda[5][5195]=array(
    'nombre' =>'Riofrío',
    'habitantes' =>'233',
    'deuda'=>'0'
    );
$deuda[5][5196]=array(
    'nombre' =>'Rivilla de Barajas',
    'habitantes' =>'67',
    'deuda'=>'11'
    );
$deuda[5][5197]=array(
    'nombre' =>'Salobral',
    'habitantes' =>'110',
    'deuda'=>'14'
    );
$deuda[5][5198]=array(
    'nombre' =>'Salvadiós',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[5][5199]=array(
    'nombre' =>'San Bartolomé de Béjar',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[5][5200]=array(
    'nombre' =>'San Bartolomé de Corneja',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[5][5201]=array(
    'nombre' =>'San Bartolomé de Pinares',
    'habitantes' =>'597',
    'deuda'=>'0'
    );
$deuda[5][5204]=array(
    'nombre' =>'Sanchidrián',
    'habitantes' =>'768',
    'deuda'=>'37'
    );
$deuda[5][5205]=array(
    'nombre' =>'Sanchorreja',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[5][5206]=array(
    'nombre' =>'San Esteban de los Patos',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[5][5207]=array(
    'nombre' =>'San Esteban del Valle',
    'habitantes' =>'800',
    'deuda'=>'49'
    );
$deuda[5][5208]=array(
    'nombre' =>'San Esteban de Zapardiel',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[5][5209]=array(
    'nombre' =>'San García de Ingelmos',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[5][5210]=array(
    'nombre' =>'San Juan de la Encinilla',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[5][5211]=array(
    'nombre' =>'San Juan de la Nava',
    'habitantes' =>'518',
    'deuda'=>'0'
    );
$deuda[5][5212]=array(
    'nombre' =>'San Juan del Molinillo',
    'habitantes' =>'227',
    'deuda'=>'0'
    );
$deuda[5][5213]=array(
    'nombre' =>'San Juan del Olmo',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[5][5214]=array(
    'nombre' =>'San Lorenzo de Tormes',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[5][5215]=array(
    'nombre' =>'San Martín de la Vega del Alberche',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[5][5216]=array(
    'nombre' =>'San Martín del Pimpollar',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[5][5217]=array(
    'nombre' =>'San Miguel de Corneja',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[5][5218]=array(
    'nombre' =>'San Miguel de Serrezuela',
    'habitantes' =>'137',
    'deuda'=>'64'
    );
$deuda[5][5219]=array(
    'nombre' =>'San Pascual',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[5][5220]=array(
    'nombre' =>'San Pedro del Arroyo',
    'habitantes' =>'455',
    'deuda'=>'89'
    );
$deuda[5][5221]=array(
    'nombre' =>'Santa Cruz del Valle',
    'habitantes' =>'385',
    'deuda'=>'3895'
    );
$deuda[5][5222]=array(
    'nombre' =>'Santa Cruz de Pinares',
    'habitantes' =>'157',
    'deuda'=>'22'
    );
$deuda[5][5224]=array(
    'nombre' =>'Santa María del Arroyo',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[5][5225]=array(
    'nombre' =>'Santa María del Berrocal',
    'habitantes' =>'391',
    'deuda'=>'132'
    );
$deuda[5][5226]=array(
    'nombre' =>'Santa María de los Caballeros',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[5][5227]=array(
    'nombre' =>'Santa María del Tiétar',
    'habitantes' =>'526',
    'deuda'=>'0'
    );
$deuda[5][5228]=array(
    'nombre' =>'Santiago del Collado',
    'habitantes' =>'183',
    'deuda'=>'0'
    );
$deuda[5][5229]=array(
    'nombre' =>'Santo Domingo de las Posadas',
    'habitantes' =>'78',
    'deuda'=>'13'
    );
$deuda[5][5230]=array(
    'nombre' =>'Santo Tomé de Zabarcos',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[5][5231]=array(
    'nombre' =>'San Vicente de Arévalo',
    'habitantes' =>'190',
    'deuda'=>'0'
    );
$deuda[5][5232]=array(
    'nombre' =>'Serrada, La',
    'habitantes' =>'110',
    'deuda'=>'0'
    );
$deuda[5][5233]=array(
    'nombre' =>'Serranillos',
    'habitantes' =>'262',
    'deuda'=>'0'
    );
$deuda[5][5234]=array(
    'nombre' =>'Sigeres',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[5][5235]=array(
    'nombre' =>'Sinlabajos',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[5][5236]=array(
    'nombre' =>'Solana de Ávila',
    'habitantes' =>'138',
    'deuda'=>'0'
    );
$deuda[5][5237]=array(
    'nombre' =>'Solana de Rioalmar',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[5][5238]=array(
    'nombre' =>'Solosancho',
    'habitantes' =>'905',
    'deuda'=>'82'
    );
$deuda[5][5239]=array(
    'nombre' =>'Sotalbo',
    'habitantes' =>'218',
    'deuda'=>'30'
    );
$deuda[5][5240]=array(
    'nombre' =>'Sotillo de la Adrada',
    'habitantes' =>'4652',
    'deuda'=>'1297'
    );
$deuda[5][5241]=array(
    'nombre' =>'Tiemblo, El',
    'habitantes' =>'4231',
    'deuda'=>'514'
    );
$deuda[5][5242]=array(
    'nombre' =>'Tiñosillos',
    'habitantes' =>'790',
    'deuda'=>'33'
    );
$deuda[5][5243]=array(
    'nombre' =>'Tolbaños',
    'habitantes' =>'95',
    'deuda'=>'0'
    );
$deuda[5][5244]=array(
    'nombre' =>'Tormellas',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[5][5245]=array(
    'nombre' =>'Tornadizos de Ávila',
    'habitantes' =>'432',
    'deuda'=>'0'
    );
$deuda[5][5246]=array(
    'nombre' =>'Tórtoles',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[5][5247]=array(
    'nombre' =>'Torre, La',
    'habitantes' =>'273',
    'deuda'=>'26'
    );
$deuda[5][5249]=array(
    'nombre' =>'Umbrías',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[5][5251]=array(
    'nombre' =>'Vadillo de la Sierra',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[5][5252]=array(
    'nombre' =>'Valdecasa',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[5][5253]=array(
    'nombre' =>'Vega de Santa María',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[5][5254]=array(
    'nombre' =>'Velayos',
    'habitantes' =>'234',
    'deuda'=>'73'
    );
$deuda[5][5256]=array(
    'nombre' =>'Villaflor',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[5][5257]=array(
    'nombre' =>'Villafranca de la Sierra',
    'habitantes' =>'134',
    'deuda'=>'0'
    );
$deuda[5][5258]=array(
    'nombre' =>'Villanueva de Gómez',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[5][5259]=array(
    'nombre' =>'Villanueva del Aceral',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[5][5260]=array(
    'nombre' =>'Villanueva del Campillo',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[5][5261]=array(
    'nombre' =>'Villar de Corneja',
    'habitantes' =>'41',
    'deuda'=>'52'
    );
$deuda[5][5262]=array(
    'nombre' =>'Villarejo del Valle',
    'habitantes' =>'380',
    'deuda'=>'446'
    );
$deuda[5][5263]=array(
    'nombre' =>'Villatoro',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[5][5264]=array(
    'nombre' =>'Viñegra de Moraña',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[5][5265]=array(
    'nombre' =>'Vita',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[5][5266]=array(
    'nombre' =>'Zapardiel de la Cañada',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[5][5267]=array(
    'nombre' =>'Zapardiel de la Ribera',
    'habitantes' =>'111',
    'deuda'=>'11'
    );
$deuda[5][5901]=array(
    'nombre' =>'San Juan de Gredos',
    'habitantes' =>'291',
    'deuda'=>'0'
    );
$deuda[5][5902]=array(
    'nombre' =>'Santa María del Cubillo',
    'habitantes' =>'337',
    'deuda'=>'83'
    );
$deuda[5][5903]=array(
    'nombre' =>'Diego del Carpio',
    'habitantes' =>'161',
    'deuda'=>'0'
    );
$deuda[5][5904]=array(
    'nombre' =>'Santiago del Tormes',
    'habitantes' =>'146',
    'deuda'=>'0'
    );
$deuda[5][5905]=array(
    'nombre' =>'Villanueva de Ávila',
    'habitantes' =>'239',
    'deuda'=>'0'
    );
$deuda[6][6001]=array(
    'nombre' =>'Acedera',
    'habitantes' =>'816',
    'deuda'=>'0'
    );
$deuda[6][6002]=array(
    'nombre' =>'Aceuchal',
    'habitantes' =>'5471',
    'deuda'=>'846'
    );
$deuda[6][6003]=array(
    'nombre' =>'Ahillones',
    'habitantes' =>'960',
    'deuda'=>'0'
    );
$deuda[6][6004]=array(
    'nombre' =>'Alange',
    'habitantes' =>'1914',
    'deuda'=>'1'
    );
$deuda[6][6005]=array(
    'nombre' =>'Albuera, La',
    'habitantes' =>'2046',
    'deuda'=>'2890'
    );
$deuda[6][6006]=array(
    'nombre' =>'Alburquerque',
    'habitantes' =>'5486',
    'deuda'=>'4551'
    );
$deuda[6][6007]=array(
    'nombre' =>'Alconchel',
    'habitantes' =>'1790',
    'deuda'=>'345'
    );
$deuda[6][6008]=array(
    'nombre' =>'Alconera',
    'habitantes' =>'747',
    'deuda'=>'0'
    );
$deuda[6][6009]=array(
    'nombre' =>'Aljucén',
    'habitantes' =>'240',
    'deuda'=>'0'
    );
$deuda[6][6010]=array(
    'nombre' =>'Almendral',
    'habitantes' =>'1296',
    'deuda'=>'38'
    );
$deuda[6][6011]=array(
    'nombre' =>'Almendralejo',
    'habitantes' =>'34265',
    'deuda'=>'22442'
    );
$deuda[6][6012]=array(
    'nombre' =>'Arroyo de San Serván',
    'habitantes' =>'4175',
    'deuda'=>'1879'
    );
$deuda[6][6013]=array(
    'nombre' =>'Atalaya',
    'habitantes' =>'302',
    'deuda'=>'0'
    );
$deuda[6][6014]=array(
    'nombre' =>'Azuaga',
    'habitantes' =>'8031',
    'deuda'=>'1061'
    );
$deuda[6][6015]=array(
    'nombre' =>'Badajoz',
    'habitantes' =>'149892',
    'deuda'=>'37748'
    );
$deuda[6][6016]=array(
    'nombre' =>'Barcarrota',
    'habitantes' =>'3634',
    'deuda'=>'796'
    );
$deuda[6][6017]=array(
    'nombre' =>'Baterno',
    'habitantes' =>'318',
    'deuda'=>'305'
    );
$deuda[6][6018]=array(
    'nombre' =>'Benquerencia de la Serena',
    'habitantes' =>'888',
    'deuda'=>'100'
    );
$deuda[6][6019]=array(
    'nombre' =>'Berlanga',
    'habitantes' =>'2434',
    'deuda'=>'1145'
    );
$deuda[6][6020]=array(
    'nombre' =>'Bienvenida',
    'habitantes' =>'2218',
    'deuda'=>'216'
    );
$deuda[6][6021]=array(
    'nombre' =>'Bodonal de la Sierra',
    'habitantes' =>'1081',
    'deuda'=>'194'
    );
$deuda[6][6022]=array(
    'nombre' =>'Burguillos del Cerro',
    'habitantes' =>'3179',
    'deuda'=>'894'
    );
$deuda[6][6023]=array(
    'nombre' =>'Cabeza del Buey',
    'habitantes' =>'5138',
    'deuda'=>'907'
    );
$deuda[6][6024]=array(
    'nombre' =>'Cabeza la Vaca',
    'habitantes' =>'1391',
    'deuda'=>'495'
    );
$deuda[6][6025]=array(
    'nombre' =>'Calamonte',
    'habitantes' =>'6330',
    'deuda'=>'601'
    );
$deuda[6][6026]=array(
    'nombre' =>'Calera de León',
    'habitantes' =>'1014',
    'deuda'=>'382'
    );
$deuda[6][6027]=array(
    'nombre' =>'Calzadilla de los Barros',
    'habitantes' =>'845',
    'deuda'=>'481'
    );
$deuda[6][6028]=array(
    'nombre' =>'Campanario',
    'habitantes' =>'5150',
    'deuda'=>'0'
    );
$deuda[6][6029]=array(
    'nombre' =>'Campillo de Llerena',
    'habitantes' =>'1414',
    'deuda'=>'772'
    );
$deuda[6][6030]=array(
    'nombre' =>'Capilla',
    'habitantes' =>'191',
    'deuda'=>'0'
    );
$deuda[6][6031]=array(
    'nombre' =>'Carmonita',
    'habitantes' =>'561',
    'deuda'=>'92'
    );
$deuda[6][6032]=array(
    'nombre' =>'Carrascalejo, El',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[6][6033]=array(
    'nombre' =>'Casas de Don Pedro',
    'habitantes' =>'1560',
    'deuda'=>'134'
    );
$deuda[6][6034]=array(
    'nombre' =>'Casas de Reina',
    'habitantes' =>'199',
    'deuda'=>'8'
    );
$deuda[6][6035]=array(
    'nombre' =>'Castilblanco',
    'habitantes' =>'1085',
    'deuda'=>'1129'
    );
$deuda[6][6036]=array(
    'nombre' =>'Castuera',
    'habitantes' =>'6163',
    'deuda'=>'1061'
    );
$deuda[6][6037]=array(
    'nombre' =>'Codosera, La',
    'habitantes' =>'2197',
    'deuda'=>'49'
    );
$deuda[6][6038]=array(
    'nombre' =>'Cordobilla de Lácara',
    'habitantes' =>'960',
    'deuda'=>'0'
    );
$deuda[6][6039]=array(
    'nombre' =>'Coronada, La',
    'habitantes' =>'2195',
    'deuda'=>'17'
    );
$deuda[6][6040]=array(
    'nombre' =>'Corte de Peleas',
    'habitantes' =>'1312',
    'deuda'=>'0'
    );
$deuda[6][6041]=array(
    'nombre' =>'Cristina',
    'habitantes' =>'556',
    'deuda'=>'276'
    );
$deuda[6][6042]=array(
    'nombre' =>'Cheles',
    'habitantes' =>'1221',
    'deuda'=>'709'
    );
$deuda[6][6043]=array(
    'nombre' =>'Don Álvaro',
    'habitantes' =>'781',
    'deuda'=>'0'
    );
$deuda[6][6044]=array(
    'nombre' =>'Don Benito',
    'habitantes' =>'36971',
    'deuda'=>'8154'
    );
$deuda[6][6045]=array(
    'nombre' =>'Entrín Bajo',
    'habitantes' =>'562',
    'deuda'=>'0'
    );
$deuda[6][6046]=array(
    'nombre' =>'Esparragalejo',
    'habitantes' =>'1489',
    'deuda'=>'0'
    );
$deuda[6][6047]=array(
    'nombre' =>'Esparragosa de la Serena',
    'habitantes' =>'1060',
    'deuda'=>'361'
    );
$deuda[6][6048]=array(
    'nombre' =>'Esparragosa de Lares',
    'habitantes' =>'972',
    'deuda'=>'0'
    );
$deuda[6][6049]=array(
    'nombre' =>'Feria',
    'habitantes' =>'1209',
    'deuda'=>'323'
    );
$deuda[6][6050]=array(
    'nombre' =>'Fregenal de la Sierra',
    'habitantes' =>'4968',
    'deuda'=>'58'
    );
$deuda[6][6051]=array(
    'nombre' =>'Fuenlabrada de los Montes',
    'habitantes' =>'1921',
    'deuda'=>'745'
    );
$deuda[6][6052]=array(
    'nombre' =>'Fuente de Cantos',
    'habitantes' =>'4941',
    'deuda'=>'1284'
    );
$deuda[6][6053]=array(
    'nombre' =>'Fuente del Arco',
    'habitantes' =>'709',
    'deuda'=>'0'
    );
$deuda[6][6054]=array(
    'nombre' =>'Fuente del Maestre',
    'habitantes' =>'6856',
    'deuda'=>'1519'
    );
$deuda[6][6055]=array(
    'nombre' =>'Fuentes de León',
    'habitantes' =>'2415',
    'deuda'=>'0'
    );
$deuda[6][6056]=array(
    'nombre' =>'Garbayuela',
    'habitantes' =>'543',
    'deuda'=>'87'
    );
$deuda[6][6057]=array(
    'nombre' =>'Garlitos',
    'habitantes' =>'630',
    'deuda'=>'0'
    );
$deuda[6][6058]=array(
    'nombre' =>'Garrovilla, La',
    'habitantes' =>'2453',
    'deuda'=>'0'
    );
$deuda[6][6059]=array(
    'nombre' =>'Granja de Torrehermosa',
    'habitantes' =>'2160',
    'deuda'=>'378'
    );
$deuda[6][6060]=array(
    'nombre' =>'Guareña',
    'habitantes' =>'7151',
    'deuda'=>'470'
    );
$deuda[6][6061]=array(
    'nombre' =>'Haba, La',
    'habitantes' =>'1286',
    'deuda'=>'25'
    );
$deuda[6][6062]=array(
    'nombre' =>'Helechosa de los Montes',
    'habitantes' =>'716',
    'deuda'=>'922'
    );
$deuda[6][6063]=array(
    'nombre' =>'Herrera del Duque',
    'habitantes' =>'3686',
    'deuda'=>'1187'
    );
$deuda[6][6064]=array(
    'nombre' =>'Higuera de la Serena',
    'habitantes' =>'969',
    'deuda'=>'640'
    );
$deuda[6][6065]=array(
    'nombre' =>'Higuera de Llerena',
    'habitantes' =>'352',
    'deuda'=>'142'
    );
$deuda[6][6066]=array(
    'nombre' =>'Higuera de Vargas',
    'habitantes' =>'2020',
    'deuda'=>'434'
    );
$deuda[6][6067]=array(
    'nombre' =>'Higuera la Real',
    'habitantes' =>'2359',
    'deuda'=>'0'
    );
$deuda[6][6068]=array(
    'nombre' =>'Hinojosa del Valle',
    'habitantes' =>'514',
    'deuda'=>'3988'
    );
$deuda[6][6069]=array(
    'nombre' =>'Hornachos',
    'habitantes' =>'3749',
    'deuda'=>'0'
    );
$deuda[6][6070]=array(
    'nombre' =>'Jerez de los Caballeros',
    'habitantes' =>'9615',
    'deuda'=>'2289'
    );
$deuda[6][6071]=array(
    'nombre' =>'Lapa, La',
    'habitantes' =>'287',
    'deuda'=>'72'
    );
$deuda[6][6072]=array(
    'nombre' =>'Lobón',
    'habitantes' =>'2837',
    'deuda'=>'492'
    );
$deuda[6][6073]=array(
    'nombre' =>'Llera',
    'habitantes' =>'888',
    'deuda'=>'536'
    );
$deuda[6][6074]=array(
    'nombre' =>'Llerena',
    'habitantes' =>'5929',
    'deuda'=>'242'
    );
$deuda[6][6075]=array(
    'nombre' =>'Magacela',
    'habitantes' =>'552',
    'deuda'=>'0'
    );
$deuda[6][6076]=array(
    'nombre' =>'Maguilla',
    'habitantes' =>'1007',
    'deuda'=>'0'
    );
$deuda[6][6077]=array(
    'nombre' =>'Malcocinado',
    'habitantes' =>'395',
    'deuda'=>'0'
    );
$deuda[6][6078]=array(
    'nombre' =>'Malpartida de la Serena',
    'habitantes' =>'599',
    'deuda'=>'50'
    );
$deuda[6][6079]=array(
    'nombre' =>'Manchita',
    'habitantes' =>'760',
    'deuda'=>'587'
    );
$deuda[6][6080]=array(
    'nombre' =>'Medellín',
    'habitantes' =>'2306',
    'deuda'=>'0'
    );
$deuda[6][6081]=array(
    'nombre' =>'Medina de las Torres',
    'habitantes' =>'1280',
    'deuda'=>'145'
    );
$deuda[6][6082]=array(
    'nombre' =>'Mengabril',
    'habitantes' =>'472',
    'deuda'=>'239'
    );
$deuda[6][6083]=array(
    'nombre' =>'Mérida',
    'habitantes' =>'58971',
    'deuda'=>'50863'
    );
$deuda[6][6084]=array(
    'nombre' =>'Mirandilla',
    'habitantes' =>'1349',
    'deuda'=>'0'
    );
$deuda[6][6085]=array(
    'nombre' =>'Monesterio',
    'habitantes' =>'4306',
    'deuda'=>'677'
    );
$deuda[6][6086]=array(
    'nombre' =>'Montemolín',
    'habitantes' =>'1455',
    'deuda'=>'96'
    );
$deuda[6][6087]=array(
    'nombre' =>'Monterrubio de la Serena',
    'habitantes' =>'2490',
    'deuda'=>'773'
    );
$deuda[6][6088]=array(
    'nombre' =>'Montijo',
    'habitantes' =>'15789',
    'deuda'=>'3209'
    );
$deuda[6][6089]=array(
    'nombre' =>'Morera, La',
    'habitantes' =>'736',
    'deuda'=>'18'
    );
$deuda[6][6090]=array(
    'nombre' =>'Nava de Santiago, La',
    'habitantes' =>'1005',
    'deuda'=>'353'
    );
$deuda[6][6091]=array(
    'nombre' =>'Navalvillar de Pela',
    'habitantes' =>'4671',
    'deuda'=>'0'
    );
$deuda[6][6092]=array(
    'nombre' =>'Nogales',
    'habitantes' =>'700',
    'deuda'=>'278'
    );
$deuda[6][6093]=array(
    'nombre' =>'Oliva de la Frontera',
    'habitantes' =>'5403',
    'deuda'=>'2174'
    );
$deuda[6][6094]=array(
    'nombre' =>'Oliva de Mérida',
    'habitantes' =>'1798',
    'deuda'=>'533'
    );
$deuda[6][6095]=array(
    'nombre' =>'Olivenza',
    'habitantes' =>'12090',
    'deuda'=>'389'
    );
$deuda[6][6096]=array(
    'nombre' =>'Orellana de la Sierra',
    'habitantes' =>'245',
    'deuda'=>'113'
    );
$deuda[6][6097]=array(
    'nombre' =>'Orellana la Vieja',
    'habitantes' =>'2836',
    'deuda'=>'344'
    );
$deuda[6][6098]=array(
    'nombre' =>'Palomas',
    'habitantes' =>'697',
    'deuda'=>'160'
    );
$deuda[6][6099]=array(
    'nombre' =>'Parra, La',
    'habitantes' =>'1383',
    'deuda'=>'346'
    );
$deuda[6][6100]=array(
    'nombre' =>'Peñalsordo',
    'habitantes' =>'1042',
    'deuda'=>'0'
    );
$deuda[6][6101]=array(
    'nombre' =>'Peraleda del Zaucejo',
    'habitantes' =>'565',
    'deuda'=>'432'
    );
$deuda[6][6102]=array(
    'nombre' =>'Puebla de Alcocer',
    'habitantes' =>'1240',
    'deuda'=>'1157'
    );
$deuda[6][6103]=array(
    'nombre' =>'Puebla de la Calzada',
    'habitantes' =>'5970',
    'deuda'=>'0'
    );
$deuda[6][6104]=array(
    'nombre' =>'Puebla de la Reina',
    'habitantes' =>'789',
    'deuda'=>'208'
    );
$deuda[6][6105]=array(
    'nombre' =>'Puebla del Maestre',
    'habitantes' =>'759',
    'deuda'=>'162'
    );
$deuda[6][6106]=array(
    'nombre' =>'Puebla del Prior',
    'habitantes' =>'515',
    'deuda'=>'43'
    );
$deuda[6][6107]=array(
    'nombre' =>'Puebla de Obando',
    'habitantes' =>'1894',
    'deuda'=>'117'
    );
$deuda[6][6108]=array(
    'nombre' =>'Puebla de Sancho Pérez',
    'habitantes' =>'2793',
    'deuda'=>'9'
    );
$deuda[6][6109]=array(
    'nombre' =>'Quintana de la Serena',
    'habitantes' =>'4818',
    'deuda'=>'1517'
    );
$deuda[6][6110]=array(
    'nombre' =>'Reina',
    'habitantes' =>'169',
    'deuda'=>'29'
    );
$deuda[6][6111]=array(
    'nombre' =>'Rena',
    'habitantes' =>'655',
    'deuda'=>'505'
    );
$deuda[6][6112]=array(
    'nombre' =>'Retamal de Llerena',
    'habitantes' =>'475',
    'deuda'=>'0'
    );
$deuda[6][6113]=array(
    'nombre' =>'Ribera del Fresno',
    'habitantes' =>'3440',
    'deuda'=>'645'
    );
$deuda[6][6114]=array(
    'nombre' =>'Risco',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[6][6115]=array(
    'nombre' =>'Roca de la Sierra, La',
    'habitantes' =>'1515',
    'deuda'=>'191'
    );
$deuda[6][6116]=array(
    'nombre' =>'Salvaleón',
    'habitantes' =>'1893',
    'deuda'=>'117'
    );
$deuda[6][6117]=array(
    'nombre' =>'Salvatierra de los Barros',
    'habitantes' =>'1712',
    'deuda'=>'475'
    );
$deuda[6][6118]=array(
    'nombre' =>'Sancti-Spíritus',
    'habitantes' =>'227',
    'deuda'=>'0'
    );
$deuda[6][6119]=array(
    'nombre' =>'San Pedro de Mérida',
    'habitantes' =>'877',
    'deuda'=>'265'
    );
$deuda[6][6120]=array(
    'nombre' =>'Santa Amalia',
    'habitantes' =>'4149',
    'deuda'=>'2872'
    );
$deuda[6][6121]=array(
    'nombre' =>'Santa Marta',
    'habitantes' =>'4301',
    'deuda'=>'863'
    );
$deuda[6][6122]=array(
    'nombre' =>'Santos de Maimona, Los',
    'habitantes' =>'8254',
    'deuda'=>'2730'
    );
$deuda[6][6123]=array(
    'nombre' =>'San Vicente de Alcántara',
    'habitantes' =>'5689',
    'deuda'=>'0'
    );
$deuda[6][6124]=array(
    'nombre' =>'Segura de León',
    'habitantes' =>'2012',
    'deuda'=>'35'
    );
$deuda[6][6125]=array(
    'nombre' =>'Siruela',
    'habitantes' =>'2017',
    'deuda'=>'0'
    );
$deuda[6][6126]=array(
    'nombre' =>'Solana de los Barros',
    'habitantes' =>'2692',
    'deuda'=>'0'
    );
$deuda[6][6127]=array(
    'nombre' =>'Talarrubias',
    'habitantes' =>'3576',
    'deuda'=>'0'
    );
$deuda[6][6128]=array(
    'nombre' =>'Talavera la Real',
    'habitantes' =>'5484',
    'deuda'=>'810'
    );
$deuda[6][6129]=array(
    'nombre' =>'Táliga',
    'habitantes' =>'721',
    'deuda'=>'154'
    );
$deuda[6][6130]=array(
    'nombre' =>'Tamurejo',
    'habitantes' =>'225',
    'deuda'=>'30'
    );
$deuda[6][6131]=array(
    'nombre' =>'Torre de Miguel Sesmero',
    'habitantes' =>'1261',
    'deuda'=>'0'
    );
$deuda[6][6132]=array(
    'nombre' =>'Torremayor',
    'habitantes' =>'1049',
    'deuda'=>'0'
    );
$deuda[6][6133]=array(
    'nombre' =>'Torremejía',
    'habitantes' =>'2259',
    'deuda'=>'1664'
    );
$deuda[6][6134]=array(
    'nombre' =>'Trasierra',
    'habitantes' =>'654',
    'deuda'=>'0'
    );
$deuda[6][6135]=array(
    'nombre' =>'Trujillanos',
    'habitantes' =>'1442',
    'deuda'=>'17'
    );
$deuda[6][6136]=array(
    'nombre' =>'Usagre',
    'habitantes' =>'1851',
    'deuda'=>'0'
    );
$deuda[6][6137]=array(
    'nombre' =>'Valdecaballeros',
    'habitantes' =>'1135',
    'deuda'=>'64'
    );
$deuda[6][6138]=array(
    'nombre' =>'Valdetorres',
    'habitantes' =>'1246',
    'deuda'=>'502'
    );
$deuda[6][6139]=array(
    'nombre' =>'Valencia de las Torres',
    'habitantes' =>'645',
    'deuda'=>'168'
    );
$deuda[6][6140]=array(
    'nombre' =>'Valencia del Mombuey',
    'habitantes' =>'766',
    'deuda'=>'90'
    );
$deuda[6][6141]=array(
    'nombre' =>'Valencia del Ventoso',
    'habitantes' =>'2084',
    'deuda'=>'318'
    );
$deuda[6][6142]=array(
    'nombre' =>'Valverde de Burguillos',
    'habitantes' =>'296',
    'deuda'=>'42'
    );
$deuda[6][6143]=array(
    'nombre' =>'Valverde de Leganés',
    'habitantes' =>'4184',
    'deuda'=>'370'
    );
$deuda[6][6144]=array(
    'nombre' =>'Valverde de Llerena',
    'habitantes' =>'645',
    'deuda'=>'854'
    );
$deuda[6][6145]=array(
    'nombre' =>'Valverde de Mérida',
    'habitantes' =>'1086',
    'deuda'=>'0'
    );
$deuda[6][6146]=array(
    'nombre' =>'Valle de la Serena',
    'habitantes' =>'1302',
    'deuda'=>'578'
    );
$deuda[6][6147]=array(
    'nombre' =>'Valle de Matamoros',
    'habitantes' =>'391',
    'deuda'=>'128'
    );
$deuda[6][6148]=array(
    'nombre' =>'Valle de Santa Ana',
    'habitantes' =>'1175',
    'deuda'=>'140'
    );
$deuda[6][6149]=array(
    'nombre' =>'Villafranca de los Barros',
    'habitantes' =>'13289',
    'deuda'=>'2819'
    );
$deuda[6][6150]=array(
    'nombre' =>'Villagarcía de la Torre',
    'habitantes' =>'945',
    'deuda'=>'0'
    );
$deuda[6][6151]=array(
    'nombre' =>'Villagonzalo',
    'habitantes' =>'1295',
    'deuda'=>'0'
    );
$deuda[6][6152]=array(
    'nombre' =>'Villalba de los Barros',
    'habitantes' =>'1574',
    'deuda'=>'0'
    );
$deuda[6][6153]=array(
    'nombre' =>'Villanueva de la Serena',
    'habitantes' =>'26021',
    'deuda'=>'1694'
    );
$deuda[6][6154]=array(
    'nombre' =>'Villanueva del Fresno',
    'habitantes' =>'3489',
    'deuda'=>'1919'
    );
$deuda[6][6155]=array(
    'nombre' =>'Villar del Rey',
    'habitantes' =>'2273',
    'deuda'=>'104'
    );
$deuda[6][6156]=array(
    'nombre' =>'Villar de Rena',
    'habitantes' =>'1413',
    'deuda'=>'117'
    );
$deuda[6][6157]=array(
    'nombre' =>'Villarta de los Montes',
    'habitantes' =>'516',
    'deuda'=>'0'
    );
$deuda[6][6158]=array(
    'nombre' =>'Zafra',
    'habitantes' =>'16857',
    'deuda'=>'6124'
    );
$deuda[6][6159]=array(
    'nombre' =>'Zahínos',
    'habitantes' =>'2844',
    'deuda'=>'312'
    );
$deuda[6][6160]=array(
    'nombre' =>'Zalamea de la Serena',
    'habitantes' =>'3786',
    'deuda'=>'796'
    );
$deuda[6][6161]=array(
    'nombre' =>'Zarza-Capilla',
    'habitantes' =>'359',
    'deuda'=>'0'
    );
$deuda[6][6162]=array(
    'nombre' =>'Zarza, La',
    'habitantes' =>'3586',
    'deuda'=>'0'
    );
$deuda[6][6901]=array(
    'nombre' =>'Valdelacalzada',
    'habitantes' =>'2784',
    'deuda'=>'364'
    );
$deuda[6][6902]=array(
    'nombre' =>'Pueblonuevo del Guadiana',
    'habitantes' =>'2046',
    'deuda'=>'151'
    );
$deuda[6][6903]=array(
    'nombre' =>'Guadiana del Caudillo',
    'habitantes' =>'2527',
    'deuda'=>'144'
    );
$deuda[7][7001]=array(
    'nombre' =>'Alaró',
    'habitantes' =>'5275',
    'deuda'=>'2337'
    );
$deuda[7][7002]=array(
    'nombre' =>'Alaior',
    'habitantes' =>'8997',
    'deuda'=>'6885'
    );
$deuda[7][7003]=array(
    'nombre' =>'Alcúdia',
    'habitantes' =>'19763',
    'deuda'=>'0'
    );
$deuda[7][7004]=array(
    'nombre' =>'Algaida',
    'habitantes' =>'5410',
    'deuda'=>'807'
    );
$deuda[7][7005]=array(
    'nombre' =>'Andratx',
    'habitantes' =>'11093',
    'deuda'=>'467'
    );
$deuda[7][7006]=array(
    'nombre' =>'Artà',
    'habitantes' =>'7381',
    'deuda'=>'4957'
    );
$deuda[7][7007]=array(
    'nombre' =>'Banyalbufar',
    'habitantes' =>'548',
    'deuda'=>'545'
    );
$deuda[7][7008]=array(
    'nombre' =>'Binissalem',
    'habitantes' =>'7850',
    'deuda'=>'5547'
    );
$deuda[7][7009]=array(
    'nombre' =>'Búger',
    'habitantes' =>'1022',
    'deuda'=>'952'
    );
$deuda[7][7010]=array(
    'nombre' =>'Bunyola',
    'habitantes' =>'6706',
    'deuda'=>'4331'
    );
$deuda[7][7011]=array(
    'nombre' =>'Calvià',
    'habitantes' =>'50328',
    'deuda'=>'31415'
    );
$deuda[7][7012]=array(
    'nombre' =>'Campanet',
    'habitantes' =>'2524',
    'deuda'=>'607'
    );
$deuda[7][7013]=array(
    'nombre' =>'Campos',
    'habitantes' =>'9892',
    'deuda'=>'0'
    );
$deuda[7][7014]=array(
    'nombre' =>'Capdepera',
    'habitantes' =>'11420',
    'deuda'=>'7792'
    );
$deuda[7][7015]=array(
    'nombre' =>'Ciutadella de Menorca',
    'habitantes' =>'29098',
    'deuda'=>'11753'
    );
$deuda[7][7016]=array(
    'nombre' =>'Consell',
    'habitantes' =>'3862',
    'deuda'=>'545'
    );
$deuda[7][7017]=array(
    'nombre' =>'Costitx',
    'habitantes' =>'1205',
    'deuda'=>'103'
    );
$deuda[7][7018]=array(
    'nombre' =>'Deià',
    'habitantes' =>'713',
    'deuda'=>'0'
    );
$deuda[7][7019]=array(
    'nombre' =>'Escorca',
    'habitantes' =>'236',
    'deuda'=>'717'
    );
$deuda[7][7020]=array(
    'nombre' =>'Esporles',
    'habitantes' =>'4922',
    'deuda'=>'1685'
    );
$deuda[7][7021]=array(
    'nombre' =>'Estellencs',
    'habitantes' =>'336',
    'deuda'=>'248'
    );
$deuda[7][7022]=array(
    'nombre' =>'Felanitx',
    'habitantes' =>'17412',
    'deuda'=>'3306'
    );
$deuda[7][7023]=array(
    'nombre' =>'Ferreries',
    'habitantes' =>'4571',
    'deuda'=>'1795'
    );
$deuda[7][7024]=array(
    'nombre' =>'Formentera',
    'habitantes' =>'11878',
    'deuda'=>'0'
    );
$deuda[7][7025]=array(
    'nombre' =>'Fornalutx',
    'habitantes' =>'703',
    'deuda'=>'195'
    );
$deuda[7][7026]=array(
    'nombre' =>'Eivissa',
    'habitantes' =>'49975',
    'deuda'=>'19450'
    );
$deuda[7][7027]=array(
    'nombre' =>'Inca',
    'habitantes' =>'30651',
    'deuda'=>'11532'
    );
$deuda[7][7028]=array(
    'nombre' =>'Lloret de Vistalegre',
    'habitantes' =>'1233',
    'deuda'=>'258'
    );
$deuda[7][7029]=array(
    'nombre' =>'Lloseta',
    'habitantes' =>'5639',
    'deuda'=>'884'
    );
$deuda[7][7030]=array(
    'nombre' =>'Llubí',
    'habitantes' =>'2176',
    'deuda'=>'228'
    );
$deuda[7][7031]=array(
    'nombre' =>'Llucmajor',
    'habitantes' =>'34618',
    'deuda'=>'36162'
    );
$deuda[7][7032]=array(
    'nombre' =>'Maó-Mahón',
    'habitantes' =>'28006',
    'deuda'=>'11398'
    );
$deuda[7][7033]=array(
    'nombre' =>'Manacor',
    'habitantes' =>'40170',
    'deuda'=>'1909'
    );
$deuda[7][7034]=array(
    'nombre' =>'Mancor de la Vall',
    'habitantes' =>'1321',
    'deuda'=>'274'
    );
$deuda[7][7035]=array(
    'nombre' =>'Maria de la Salut',
    'habitantes' =>'2113',
    'deuda'=>'303'
    );
$deuda[7][7036]=array(
    'nombre' =>'Marratxí',
    'habitantes' =>'35726',
    'deuda'=>'11188'
    );
$deuda[7][7037]=array(
    'nombre' =>'Mercadal, Es',
    'habitantes' =>'5091',
    'deuda'=>'3073'
    );
$deuda[7][7038]=array(
    'nombre' =>'Montuïri',
    'habitantes' =>'2850',
    'deuda'=>'4581'
    );
$deuda[7][7039]=array(
    'nombre' =>'Muro',
    'habitantes' =>'6723',
    'deuda'=>'570'
    );
$deuda[7][7040]=array(
    'nombre' =>'Palma de Mallorca',
    'habitantes' =>'400578',
    'deuda'=>'315809'
    );
$deuda[7][7041]=array(
    'nombre' =>'Petra',
    'habitantes' =>'2816',
    'deuda'=>'518'
    );
$deuda[7][7042]=array(
    'nombre' =>'Pollença',
    'habitantes' =>'16115',
    'deuda'=>'2753'
    );
$deuda[7][7043]=array(
    'nombre' =>'Porreres',
    'habitantes' =>'5267',
    'deuda'=>'2266'
    );
$deuda[7][7044]=array(
    'nombre' =>'Pobla, Sa',
    'habitantes' =>'12694',
    'deuda'=>'8737'
    );
$deuda[7][7045]=array(
    'nombre' =>'Puigpunyent',
    'habitantes' =>'2018',
    'deuda'=>'1423'
    );
$deuda[7][7046]=array(
    'nombre' =>'Sant Antoni de Portmany',
    'habitantes' =>'23631',
    'deuda'=>'10701'
    );
$deuda[7][7047]=array(
    'nombre' =>'Sencelles',
    'habitantes' =>'3082',
    'deuda'=>'1220'
    );
$deuda[7][7048]=array(
    'nombre' =>'Sant Josep de sa Talaia',
    'habitantes' =>'25674',
    'deuda'=>'6788'
    );
$deuda[7][7049]=array(
    'nombre' =>'Sant Joan',
    'habitantes' =>'2035',
    'deuda'=>'398'
    );
$deuda[7][7050]=array(
    'nombre' =>'Sant Joan de Labritja',
    'habitantes' =>'5872',
    'deuda'=>'164'
    );
$deuda[7][7051]=array(
    'nombre' =>'Sant Llorenç des Cardassar',
    'habitantes' =>'8146',
    'deuda'=>'0'
    );
$deuda[7][7052]=array(
    'nombre' =>'Sant Lluís',
    'habitantes' =>'7521',
    'deuda'=>'2271'
    );
$deuda[7][7053]=array(
    'nombre' =>'Santa Eugènia',
    'habitantes' =>'1638',
    'deuda'=>'379'
    );
$deuda[7][7054]=array(
    'nombre' =>'Santa Eulària des Riu',
    'habitantes' =>'35812',
    'deuda'=>'24120'
    );
$deuda[7][7055]=array(
    'nombre' =>'Santa Margalida',
    'habitantes' =>'11672',
    'deuda'=>'373'
    );
$deuda[7][7056]=array(
    'nombre' =>'Santa María del Camí',
    'habitantes' =>'6685',
    'deuda'=>'88'
    );
$deuda[7][7057]=array(
    'nombre' =>'Santanyí',
    'habitantes' =>'11316',
    'deuda'=>'3605'
    );
$deuda[7][7058]=array(
    'nombre' =>'Selva',
    'habitantes' =>'3890',
    'deuda'=>'0'
    );
$deuda[7][7059]=array(
    'nombre' =>'Salines, Ses',
    'habitantes' =>'5018',
    'deuda'=>'377'
    );
$deuda[7][7060]=array(
    'nombre' =>'Sineu',
    'habitantes' =>'3612',
    'deuda'=>'151'
    );
$deuda[7][7061]=array(
    'nombre' =>'Sóller',
    'habitantes' =>'13648',
    'deuda'=>'14459'
    );
$deuda[7][7062]=array(
    'nombre' =>'Son Servera',
    'habitantes' =>'11449',
    'deuda'=>'10545'
    );
$deuda[7][7063]=array(
    'nombre' =>'Valldemossa',
    'habitantes' =>'2005',
    'deuda'=>'1024'
    );
$deuda[7][7064]=array(
    'nombre' =>'Castell, Es',
    'habitantes' =>'7635',
    'deuda'=>'2325'
    );
$deuda[7][7065]=array(
    'nombre' =>'Vilafranca de Bonany',
    'habitantes' =>'2913',
    'deuda'=>'1459'
    );
$deuda[7][7901]=array(
    'nombre' =>'Ariany',
    'habitantes' =>'871',
    'deuda'=>'0'
    );
$deuda[7][7902]=array(
    'nombre' =>'Migjorn Gran, Es',
    'habitantes' =>'1429',
    'deuda'=>'703'
    );
$deuda[8][8001]=array(
    'nombre' =>'Abrera',
    'habitantes' =>'12071',
    'deuda'=>'22'
    );
$deuda[8][8002]=array(
    'nombre' =>'Aguilar de Segarra',
    'habitantes' =>'246',
    'deuda'=>'1514'
    );
$deuda[8][8003]=array(
    'nombre' =>'Alella',
    'habitantes' =>'9660',
    'deuda'=>'3260'
    );
$deuda[8][8004]=array(
    'nombre' =>'Alpens',
    'habitantes' =>'290',
    'deuda'=>'31'
    );
$deuda[8][8005]=array(
    'nombre' =>'Ametlla del Vallès, L\'',
    'habitantes' =>'8303',
    'deuda'=>'1256'
    );
$deuda[8][8006]=array(
    'nombre' =>'Arenys de Mar',
    'habitantes' =>'15289',
    'deuda'=>'4421'
    );
$deuda[8][8007]=array(
    'nombre' =>'Arenys de Munt',
    'habitantes' =>'8736',
    'deuda'=>'2845'
    );
$deuda[8][8008]=array(
    'nombre' =>'Argençola',
    'habitantes' =>'223',
    'deuda'=>'5'
    );
$deuda[8][8009]=array(
    'nombre' =>'Argentona',
    'habitantes' =>'11978',
    'deuda'=>'4365'
    );
$deuda[8][8010]=array(
    'nombre' =>'Artés',
    'habitantes' =>'5665',
    'deuda'=>'55'
    );
$deuda[8][8011]=array(
    'nombre' =>'Avià',
    'habitantes' =>'2225',
    'deuda'=>'162'
    );
$deuda[8][8012]=array(
    'nombre' =>'Avinyó',
    'habitantes' =>'2248',
    'deuda'=>'0'
    );
$deuda[8][8013]=array(
    'nombre' =>'Avinyonet del Penedès',
    'habitantes' =>'1652',
    'deuda'=>'0'
    );
$deuda[8][8014]=array(
    'nombre' =>'Aiguafreda',
    'habitantes' =>'2465',
    'deuda'=>'938'
    );
$deuda[8][8015]=array(
    'nombre' =>'Badalona',
    'habitantes' =>'215654',
    'deuda'=>'90458'
    );
$deuda[8][8016]=array(
    'nombre' =>'Bagà',
    'habitantes' =>'2188',
    'deuda'=>'209'
    );
$deuda[8][8017]=array(
    'nombre' =>'Balenyà',
    'habitantes' =>'3711',
    'deuda'=>'274'
    );
$deuda[8][8018]=array(
    'nombre' =>'Balsareny',
    'habitantes' =>'3324',
    'deuda'=>'211'
    );
$deuda[8][8019]=array(
    'nombre' =>'Barcelona',
    'habitantes' =>'1604555',
    'deuda'=>'836102'
    );
$deuda[8][8020]=array(
    'nombre' =>'Begues',
    'habitantes' =>'6670',
    'deuda'=>'1774'
    );
$deuda[8][8021]=array(
    'nombre' =>'Bellprat',
    'habitantes' =>'74',
    'deuda'=>'178'
    );
$deuda[8][8022]=array(
    'nombre' =>'Berga',
    'habitantes' =>'16238',
    'deuda'=>'17146'
    );
$deuda[8][8023]=array(
    'nombre' =>'Bigues i Riells',
    'habitantes' =>'8858',
    'deuda'=>'2978'
    );
$deuda[8][8024]=array(
    'nombre' =>'Borredà',
    'habitantes' =>'503',
    'deuda'=>'302'
    );
$deuda[8][8025]=array(
    'nombre' =>'Bruc, El',
    'habitantes' =>'2032',
    'deuda'=>'0'
    );
$deuda[8][8026]=array(
    'nombre' =>'Brull, El',
    'habitantes' =>'254',
    'deuda'=>'0'
    );
$deuda[8][8027]=array(
    'nombre' =>'Cabanyes, Les',
    'habitantes' =>'967',
    'deuda'=>'0'
    );
$deuda[8][8028]=array(
    'nombre' =>'Cabrera d\'Anoia',
    'habitantes' =>'1348',
    'deuda'=>'438'
    );
$deuda[8][8029]=array(
    'nombre' =>'Cabrera de Mar',
    'habitantes' =>'4522',
    'deuda'=>'3216'
    );
$deuda[8][8030]=array(
    'nombre' =>'Cabrils',
    'habitantes' =>'7250',
    'deuda'=>'933'
    );
$deuda[8][8031]=array(
    'nombre' =>'Calaf',
    'habitantes' =>'3426',
    'deuda'=>'2075'
    );
$deuda[8][8032]=array(
    'nombre' =>'Caldes d\'Estrac',
    'habitantes' =>'2717',
    'deuda'=>'3988'
    );
$deuda[8][8033]=array(
    'nombre' =>'Caldes de Montbui',
    'habitantes' =>'17098',
    'deuda'=>'9547'
    );
$deuda[8][8034]=array(
    'nombre' =>'Calders',
    'habitantes' =>'968',
    'deuda'=>'480'
    );
$deuda[8][8035]=array(
    'nombre' =>'Calella',
    'habitantes' =>'18226',
    'deuda'=>'6546'
    );
$deuda[8][8036]=array(
    'nombre' =>'Calonge de Segarra',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[8][8037]=array(
    'nombre' =>'Calldetenes',
    'habitantes' =>'2427',
    'deuda'=>'3149'
    );
$deuda[8][8038]=array(
    'nombre' =>'Callús',
    'habitantes' =>'2024',
    'deuda'=>'40'
    );
$deuda[8][8039]=array(
    'nombre' =>'Campins',
    'habitantes' =>'491',
    'deuda'=>'0'
    );
$deuda[8][8040]=array(
    'nombre' =>'Canet de Mar',
    'habitantes' =>'14177',
    'deuda'=>'8364'
    );
$deuda[8][8041]=array(
    'nombre' =>'Canovelles',
    'habitantes' =>'15906',
    'deuda'=>'6063'
    );
$deuda[8][8042]=array(
    'nombre' =>'Cànoves i Samalús',
    'habitantes' =>'2897',
    'deuda'=>'0'
    );
$deuda[8][8043]=array(
    'nombre' =>'Canyelles',
    'habitantes' =>'4375',
    'deuda'=>'1869'
    );
$deuda[8][8044]=array(
    'nombre' =>'Capellades',
    'habitantes' =>'5268',
    'deuda'=>'2721'
    );
$deuda[8][8045]=array(
    'nombre' =>'Capolat',
    'habitantes' =>'92',
    'deuda'=>'489'
    );
$deuda[8][8046]=array(
    'nombre' =>'Cardedeu',
    'habitantes' =>'17938',
    'deuda'=>'7699'
    );
$deuda[8][8047]=array(
    'nombre' =>'Cardona',
    'habitantes' =>'4898',
    'deuda'=>'2839'
    );
$deuda[8][8048]=array(
    'nombre' =>'Carme',
    'habitantes' =>'792',
    'deuda'=>'365'
    );
$deuda[8][8049]=array(
    'nombre' =>'Casserres',
    'habitantes' =>'1541',
    'deuda'=>'452'
    );
$deuda[8][8050]=array(
    'nombre' =>'Castellar del Riu',
    'habitantes' =>'175',
    'deuda'=>'86'
    );
$deuda[8][8051]=array(
    'nombre' =>'Castellar del Vallès',
    'habitantes' =>'23442',
    'deuda'=>'15078'
    );
$deuda[8][8052]=array(
    'nombre' =>'Castellar de n\'Hug',
    'habitantes' =>'159',
    'deuda'=>'0'
    );
$deuda[8][8053]=array(
    'nombre' =>'Castellbell i el Vilar',
    'habitantes' =>'3566',
    'deuda'=>'568'
    );
$deuda[8][8054]=array(
    'nombre' =>'Castellbisbal',
    'habitantes' =>'12364',
    'deuda'=>'3863'
    );
$deuda[8][8055]=array(
    'nombre' =>'Castellcir',
    'habitantes' =>'694',
    'deuda'=>'0'
    );
$deuda[8][8056]=array(
    'nombre' =>'Castelldefels',
    'habitantes' =>'63891',
    'deuda'=>'31816'
    );
$deuda[8][8057]=array(
    'nombre' =>'Castell de l\'Areny',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[8][8058]=array(
    'nombre' =>'Castellet i la Gornal',
    'habitantes' =>'2212',
    'deuda'=>'642'
    );
$deuda[8][8059]=array(
    'nombre' =>'Castellfollit del Boix',
    'habitantes' =>'434',
    'deuda'=>'0'
    );
$deuda[8][8060]=array(
    'nombre' =>'Castellfollit de Riubregós',
    'habitantes' =>'167',
    'deuda'=>'28'
    );
$deuda[8][8061]=array(
    'nombre' =>'Castellgalí',
    'habitantes' =>'1996',
    'deuda'=>'954'
    );
$deuda[8][8062]=array(
    'nombre' =>'Castellnou de Bages',
    'habitantes' =>'1266',
    'deuda'=>'308'
    );
$deuda[8][8063]=array(
    'nombre' =>'Castellolí',
    'habitantes' =>'574',
    'deuda'=>'221'
    );
$deuda[8][8064]=array(
    'nombre' =>'Castellterçol',
    'habitantes' =>'2368',
    'deuda'=>'928'
    );
$deuda[8][8065]=array(
    'nombre' =>'Castellví de la Marca',
    'habitantes' =>'1540',
    'deuda'=>'76'
    );
$deuda[8][8066]=array(
    'nombre' =>'Castellví de Rosanes',
    'habitantes' =>'1771',
    'deuda'=>'483'
    );
$deuda[8][8067]=array(
    'nombre' =>'Centelles',
    'habitantes' =>'7372',
    'deuda'=>'452'
    );
$deuda[8][8068]=array(
    'nombre' =>'Cervelló',
    'habitantes' =>'8851',
    'deuda'=>'3378'
    );
$deuda[8][8069]=array(
    'nombre' =>'Collbató',
    'habitantes' =>'4389',
    'deuda'=>'1524'
    );
$deuda[8][8070]=array(
    'nombre' =>'Collsuspina',
    'habitantes' =>'343',
    'deuda'=>'0'
    );
$deuda[8][8071]=array(
    'nombre' =>'Copons',
    'habitantes' =>'307',
    'deuda'=>'272'
    );
$deuda[8][8072]=array(
    'nombre' =>'Corbera de Llobregat',
    'habitantes' =>'14240',
    'deuda'=>'10354'
    );
$deuda[8][8073]=array(
    'nombre' =>'Cornellà de Llobregat',
    'habitantes' =>'86376',
    'deuda'=>'66751'
    );
$deuda[8][8074]=array(
    'nombre' =>'Cubelles',
    'habitantes' =>'14420',
    'deuda'=>'3500'
    );
$deuda[8][8075]=array(
    'nombre' =>'Dosrius',
    'habitantes' =>'5215',
    'deuda'=>'1018'
    );
$deuda[8][8076]=array(
    'nombre' =>'Esparreguera',
    'habitantes' =>'21701',
    'deuda'=>'5673'
    );
$deuda[8][8077]=array(
    'nombre' =>'Esplugues de Llobregat',
    'habitantes' =>'45626',
    'deuda'=>'18847'
    );
$deuda[8][8078]=array(
    'nombre' =>'Espunyola, L\'',
    'habitantes' =>'252',
    'deuda'=>'0'
    );
$deuda[8][8079]=array(
    'nombre' =>'Estany, L\'',
    'habitantes' =>'398',
    'deuda'=>'83'
    );
$deuda[8][8080]=array(
    'nombre' =>'Fígols',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[8][8081]=array(
    'nombre' =>'Fogars de Montclús',
    'habitantes' =>'477',
    'deuda'=>'0'
    );
$deuda[8][8082]=array(
    'nombre' =>'Fogars de la Selva',
    'habitantes' =>'1470',
    'deuda'=>'801'
    );
$deuda[8][8083]=array(
    'nombre' =>'Folgueroles',
    'habitantes' =>'2285',
    'deuda'=>'94'
    );
$deuda[8][8084]=array(
    'nombre' =>'Fonollosa',
    'habitantes' =>'1393',
    'deuda'=>'120'
    );
$deuda[8][8085]=array(
    'nombre' =>'Font-rubí',
    'habitantes' =>'1348',
    'deuda'=>'0'
    );
$deuda[8][8086]=array(
    'nombre' =>'Franqueses del Vallès, Les',
    'habitantes' =>'19446',
    'deuda'=>'12098'
    );
$deuda[8][8087]=array(
    'nombre' =>'Gallifa',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[8][8088]=array(
    'nombre' =>'Garriga, La',
    'habitantes' =>'15740',
    'deuda'=>'2580'
    );
$deuda[8][8089]=array(
    'nombre' =>'Gavà',
    'habitantes' =>'46405',
    'deuda'=>'39106'
    );
$deuda[8][8090]=array(
    'nombre' =>'Gaià',
    'habitantes' =>'168',
    'deuda'=>'0'
    );
$deuda[8][8091]=array(
    'nombre' =>'Gelida',
    'habitantes' =>'7253',
    'deuda'=>'3175'
    );
$deuda[8][8092]=array(
    'nombre' =>'Gironella',
    'habitantes' =>'4925',
    'deuda'=>'1652'
    );
$deuda[8][8093]=array(
    'nombre' =>'Gisclareny',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[8][8094]=array(
    'nombre' =>'Granada, La',
    'habitantes' =>'2085',
    'deuda'=>'0'
    );
$deuda[8][8095]=array(
    'nombre' =>'Granera',
    'habitantes' =>'80',
    'deuda'=>'76'
    );
$deuda[8][8096]=array(
    'nombre' =>'Granollers',
    'habitantes' =>'60101',
    'deuda'=>'34507'
    );
$deuda[8][8097]=array(
    'nombre' =>'Gualba',
    'habitantes' =>'1414',
    'deuda'=>'225'
    );
$deuda[8][8098]=array(
    'nombre' =>'Sant Salvador de Guardiola',
    'habitantes' =>'3126',
    'deuda'=>'650'
    );
$deuda[8][8099]=array(
    'nombre' =>'Guardiola de Berguedà',
    'habitantes' =>'930',
    'deuda'=>'218'
    );
$deuda[8][8100]=array(
    'nombre' =>'Gurb',
    'habitantes' =>'2545',
    'deuda'=>'0'
    );
$deuda[8][8101]=array(
    'nombre' =>'Hospitalet de Llobregat, L\'',
    'habitantes' =>'252171',
    'deuda'=>'107135'
    );
$deuda[8][8102]=array(
    'nombre' =>'Igualada',
    'habitantes' =>'38751',
    'deuda'=>'43649'
    );
$deuda[8][8103]=array(
    'nombre' =>'Jorba',
    'habitantes' =>'838',
    'deuda'=>'30'
    );
$deuda[8][8104]=array(
    'nombre' =>'Llacuna, La',
    'habitantes' =>'883',
    'deuda'=>'860'
    );
$deuda[8][8105]=array(
    'nombre' =>'Llagosta, La',
    'habitantes' =>'13252',
    'deuda'=>'3313'
    );
$deuda[8][8106]=array(
    'nombre' =>'Llinars del Vallès',
    'habitantes' =>'9570',
    'deuda'=>'1629'
    );
$deuda[8][8107]=array(
    'nombre' =>'Lliçà d\'Amunt',
    'habitantes' =>'14742',
    'deuda'=>'6136'
    );
$deuda[8][8108]=array(
    'nombre' =>'Lliçà de Vall',
    'habitantes' =>'6383',
    'deuda'=>'1896'
    );
$deuda[8][8109]=array(
    'nombre' =>'Lluçà',
    'habitantes' =>'280',
    'deuda'=>'0'
    );
$deuda[8][8110]=array(
    'nombre' =>'Malgrat de Mar',
    'habitantes' =>'18371',
    'deuda'=>'4454'
    );
$deuda[8][8111]=array(
    'nombre' =>'Malla',
    'habitantes' =>'262',
    'deuda'=>'0'
    );
$deuda[8][8112]=array(
    'nombre' =>'Manlleu',
    'habitantes' =>'20228',
    'deuda'=>'13053'
    );
$deuda[8][8113]=array(
    'nombre' =>'Manresa',
    'habitantes' =>'74655',
    'deuda'=>'80610'
    );
$deuda[8][8114]=array(
    'nombre' =>'Martorell',
    'habitantes' =>'27694',
    'deuda'=>'14239'
    );
$deuda[8][8115]=array(
    'nombre' =>'Martorelles',
    'habitantes' =>'4756',
    'deuda'=>'2338'
    );
$deuda[8][8116]=array(
    'nombre' =>'Masies de Roda, Les',
    'habitantes' =>'715',
    'deuda'=>'0'
    );
$deuda[8][8117]=array(
    'nombre' =>'Masies de Voltregà, Les',
    'habitantes' =>'3165',
    'deuda'=>'463'
    );
$deuda[8][8118]=array(
    'nombre' =>'Masnou, El',
    'habitantes' =>'22923',
    'deuda'=>'8237'
    );
$deuda[8][8119]=array(
    'nombre' =>'Masquefa',
    'habitantes' =>'8335',
    'deuda'=>'5150'
    );
$deuda[8][8120]=array(
    'nombre' =>'Matadepera',
    'habitantes' =>'8900',
    'deuda'=>'1185'
    );
$deuda[8][8121]=array(
    'nombre' =>'Mataró',
    'habitantes' =>'124867',
    'deuda'=>'127781'
    );
$deuda[8][8122]=array(
    'nombre' =>'Mediona',
    'habitantes' =>'2273',
    'deuda'=>'1555'
    );
$deuda[8][8123]=array(
    'nombre' =>'Molins de Rei',
    'habitantes' =>'25155',
    'deuda'=>'16417'
    );
$deuda[8][8124]=array(
    'nombre' =>'Mollet del Vallès',
    'habitantes' =>'51650',
    'deuda'=>'42951'
    );
$deuda[8][8125]=array(
    'nombre' =>'Montcada i Reixac',
    'habitantes' =>'34377',
    'deuda'=>'19116'
    );
$deuda[8][8126]=array(
    'nombre' =>'Montgat',
    'habitantes' =>'11501',
    'deuda'=>'51'
    );
$deuda[8][8127]=array(
    'nombre' =>'Monistrol de Montserrat',
    'habitantes' =>'2901',
    'deuda'=>'220'
    );
$deuda[8][8128]=array(
    'nombre' =>'Monistrol de Calders',
    'habitantes' =>'697',
    'deuda'=>'45'
    );
$deuda[8][8129]=array(
    'nombre' =>'Muntanyola',
    'habitantes' =>'606',
    'deuda'=>'0'
    );
$deuda[8][8130]=array(
    'nombre' =>'Montclar',
    'habitantes' =>'120',
    'deuda'=>'0'
    );
$deuda[8][8131]=array(
    'nombre' =>'Montesquiu',
    'habitantes' =>'943',
    'deuda'=>'257'
    );
$deuda[8][8132]=array(
    'nombre' =>'Montmajor',
    'habitantes' =>'476',
    'deuda'=>'102'
    );
$deuda[8][8133]=array(
    'nombre' =>'Montmaneu',
    'habitantes' =>'156',
    'deuda'=>'0'
    );
$deuda[8][8134]=array(
    'nombre' =>'Figaró-Montmany',
    'habitantes' =>'1094',
    'deuda'=>'2624'
    );
$deuda[8][8135]=array(
    'nombre' =>'Montmeló',
    'habitantes' =>'8835',
    'deuda'=>'6527'
    );
$deuda[8][8136]=array(
    'nombre' =>'Montornès del Vallès',
    'habitantes' =>'16172',
    'deuda'=>'4681'
    );
$deuda[8][8137]=array(
    'nombre' =>'Montseny',
    'habitantes' =>'319',
    'deuda'=>'398'
    );
$deuda[8][8138]=array(
    'nombre' =>'Moià',
    'habitantes' =>'5865',
    'deuda'=>'12945'
    );
$deuda[8][8139]=array(
    'nombre' =>'Mura',
    'habitantes' =>'203',
    'deuda'=>'0'
    );
$deuda[8][8140]=array(
    'nombre' =>'Navarcles',
    'habitantes' =>'6012',
    'deuda'=>'1357'
    );
$deuda[8][8141]=array(
    'nombre' =>'Navàs',
    'habitantes' =>'6103',
    'deuda'=>'2094'
    );
$deuda[8][8142]=array(
    'nombre' =>'Nou de Berguedà, La',
    'habitantes' =>'153',
    'deuda'=>'0'
    );
$deuda[8][8143]=array(
    'nombre' =>'Òdena',
    'habitantes' =>'3623',
    'deuda'=>'849'
    );
$deuda[8][8144]=array(
    'nombre' =>'Olvan',
    'habitantes' =>'856',
    'deuda'=>'345'
    );
$deuda[8][8145]=array(
    'nombre' =>'Olèrdola',
    'habitantes' =>'3518',
    'deuda'=>'7'
    );
$deuda[8][8146]=array(
    'nombre' =>'Olesa de Bonesvalls',
    'habitantes' =>'1715',
    'deuda'=>'0'
    );
$deuda[8][8147]=array(
    'nombre' =>'Olesa de Montserrat',
    'habitantes' =>'23536',
    'deuda'=>'6496'
    );
$deuda[8][8148]=array(
    'nombre' =>'Olivella',
    'habitantes' =>'3569',
    'deuda'=>'875'
    );
$deuda[8][8149]=array(
    'nombre' =>'Olost',
    'habitantes' =>'1182',
    'deuda'=>'120'
    );
$deuda[8][8150]=array(
    'nombre' =>'Orís',
    'habitantes' =>'308',
    'deuda'=>'0'
    );
$deuda[8][8151]=array(
    'nombre' =>'Oristà',
    'habitantes' =>'559',
    'deuda'=>'0'
    );
$deuda[8][8152]=array(
    'nombre' =>'Orpí',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[8][8153]=array(
    'nombre' =>'Òrrius',
    'habitantes' =>'688',
    'deuda'=>'354'
    );
$deuda[8][8154]=array(
    'nombre' =>'Pacs del Penedès',
    'habitantes' =>'893',
    'deuda'=>'0'
    );
$deuda[8][8155]=array(
    'nombre' =>'Palafolls',
    'habitantes' =>'9132',
    'deuda'=>'1931'
    );
$deuda[8][8156]=array(
    'nombre' =>'Palau-solità i Plegamans',
    'habitantes' =>'14457',
    'deuda'=>'4606'
    );
$deuda[8][8157]=array(
    'nombre' =>'Pallejà',
    'habitantes' =>'11298',
    'deuda'=>'7763'
    );
$deuda[8][8158]=array(
    'nombre' =>'Papiol, El',
    'habitantes' =>'4071',
    'deuda'=>'578'
    );
$deuda[8][8159]=array(
    'nombre' =>'Parets del Vallès',
    'habitantes' =>'18901',
    'deuda'=>'6986'
    );
$deuda[8][8160]=array(
    'nombre' =>'Perafita',
    'habitantes' =>'419',
    'deuda'=>'78'
    );
$deuda[8][8161]=array(
    'nombre' =>'Piera',
    'habitantes' =>'14991',
    'deuda'=>'403'
    );
$deuda[8][8162]=array(
    'nombre' =>'Hostalets de Pierola, Els',
    'habitantes' =>'2887',
    'deuda'=>'2653'
    );
$deuda[8][8163]=array(
    'nombre' =>'Pineda de Mar',
    'habitantes' =>'25968',
    'deuda'=>'11466'
    );
$deuda[8][8164]=array(
    'nombre' =>'Pla del Penedès, El',
    'habitantes' =>'1230',
    'deuda'=>'245'
    );
$deuda[8][8165]=array(
    'nombre' =>'Pobla de Claramunt, La',
    'habitantes' =>'2150',
    'deuda'=>'354'
    );
$deuda[8][8166]=array(
    'nombre' =>'Pobla de Lillet, La',
    'habitantes' =>'1139',
    'deuda'=>'1837'
    );
$deuda[8][8167]=array(
    'nombre' =>'Polinyà',
    'habitantes' =>'8226',
    'deuda'=>'4363'
    );
$deuda[8][8168]=array(
    'nombre' =>'Pontons',
    'habitantes' =>'483',
    'deuda'=>'84'
    );
$deuda[8][8169]=array(
    'nombre' =>'Prat de Llobregat, El',
    'habitantes' =>'63014',
    'deuda'=>'7555'
    );
$deuda[8][8170]=array(
    'nombre' =>'Prats de Rei, Els',
    'habitantes' =>'536',
    'deuda'=>'74'
    );
$deuda[8][8171]=array(
    'nombre' =>'Prats de Lluçanès',
    'habitantes' =>'2580',
    'deuda'=>'101'
    );
$deuda[8][8172]=array(
    'nombre' =>'Premià de Mar',
    'habitantes' =>'27944',
    'deuda'=>'4823'
    );
$deuda[8][8174]=array(
    'nombre' =>'Puigdàlber',
    'habitantes' =>'539',
    'deuda'=>'84'
    );
$deuda[8][8175]=array(
    'nombre' =>'Puig-reig',
    'habitantes' =>'4167',
    'deuda'=>'1167'
    );
$deuda[8][8176]=array(
    'nombre' =>'Pujalt',
    'habitantes' =>'198',
    'deuda'=>'817'
    );
$deuda[8][8177]=array(
    'nombre' =>'Quar, La',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[8][8178]=array(
    'nombre' =>'Rajadell',
    'habitantes' =>'524',
    'deuda'=>'300'
    );
$deuda[8][8179]=array(
    'nombre' =>'Rellinars',
    'habitantes' =>'748',
    'deuda'=>'0'
    );
$deuda[8][8180]=array(
    'nombre' =>'Ripollet',
    'habitantes' =>'37445',
    'deuda'=>'4924'
    );
$deuda[8][8181]=array(
    'nombre' =>'Roca del Vallès, La',
    'habitantes' =>'10504',
    'deuda'=>'6178'
    );
$deuda[8][8182]=array(
    'nombre' =>'Pont de Vilomara i Rocafort, El',
    'habitantes' =>'3715',
    'deuda'=>'904'
    );
$deuda[8][8183]=array(
    'nombre' =>'Roda de Ter',
    'habitantes' =>'6122',
    'deuda'=>'1573'
    );
$deuda[8][8184]=array(
    'nombre' =>'Rubí',
    'habitantes' =>'74536',
    'deuda'=>'31568'
    );
$deuda[8][8185]=array(
    'nombre' =>'Rubió',
    'habitantes' =>'229',
    'deuda'=>'0'
    );
$deuda[8][8187]=array(
    'nombre' =>'Sabadell',
    'habitantes' =>'207814',
    'deuda'=>'93742'
    );
$deuda[8][8188]=array(
    'nombre' =>'Sagàs',
    'habitantes' =>'157',
    'deuda'=>'0'
    );
$deuda[8][8189]=array(
    'nombre' =>'Sant Pere Sallavinera',
    'habitantes' =>'167',
    'deuda'=>'0'
    );
$deuda[8][8190]=array(
    'nombre' =>'Saldes',
    'habitantes' =>'288',
    'deuda'=>'297'
    );
$deuda[8][8191]=array(
    'nombre' =>'Sallent',
    'habitantes' =>'6669',
    'deuda'=>'3315'
    );
$deuda[8][8192]=array(
    'nombre' =>'Santpedor',
    'habitantes' =>'7459',
    'deuda'=>'1286'
    );
$deuda[8][8193]=array(
    'nombre' =>'Sant Iscle de Vallalta',
    'habitantes' =>'1308',
    'deuda'=>'0'
    );
$deuda[8][8194]=array(
    'nombre' =>'Sant Adrià de Besòs',
    'habitantes' =>'35814',
    'deuda'=>'5689'
    );
$deuda[8][8195]=array(
    'nombre' =>'Sant Agustí de Lluçanès',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[8][8196]=array(
    'nombre' =>'Sant Andreu de la Barca',
    'habitantes' =>'27340',
    'deuda'=>'5136'
    );
$deuda[8][8197]=array(
    'nombre' =>'Sant Andreu de Llavaneres',
    'habitantes' =>'10493',
    'deuda'=>'2355'
    );
$deuda[8][8198]=array(
    'nombre' =>'Sant Antoni de Vilamajor',
    'habitantes' =>'5789',
    'deuda'=>'436'
    );
$deuda[8][8199]=array(
    'nombre' =>'Sant Bartomeu del Grau',
    'habitantes' =>'863',
    'deuda'=>'160'
    );
$deuda[8][8200]=array(
    'nombre' =>'Sant Boi de Llobregat',
    'habitantes' =>'82195',
    'deuda'=>'29045'
    );
$deuda[8][8201]=array(
    'nombre' =>'Sant Boi de Lluçanès',
    'habitantes' =>'544',
    'deuda'=>'355'
    );
$deuda[8][8202]=array(
    'nombre' =>'Sant Celoni',
    'habitantes' =>'17317',
    'deuda'=>'8149'
    );
$deuda[8][8203]=array(
    'nombre' =>'Sant Cebrià de Vallalta',
    'habitantes' =>'3326',
    'deuda'=>'628'
    );
$deuda[8][8204]=array(
    'nombre' =>'Sant Climent de Llobregat',
    'habitantes' =>'4013',
    'deuda'=>'2555'
    );
$deuda[8][8205]=array(
    'nombre' =>'Sant Cugat del Vallès',
    'habitantes' =>'87830',
    'deuda'=>'61345'
    );
$deuda[8][8206]=array(
    'nombre' =>'Sant Cugat Sesgarrigues',
    'habitantes' =>'978',
    'deuda'=>'0'
    );
$deuda[8][8207]=array(
    'nombre' =>'Sant Esteve de Palautordera',
    'habitantes' =>'2568',
    'deuda'=>'458'
    );
$deuda[8][8208]=array(
    'nombre' =>'Sant Esteve Sesrovires',
    'habitantes' =>'7613',
    'deuda'=>'14535'
    );
$deuda[8][8209]=array(
    'nombre' =>'Sant Fost de Campsentelles',
    'habitantes' =>'8603',
    'deuda'=>'7685'
    );
$deuda[8][8210]=array(
    'nombre' =>'Sant Feliu de Codines',
    'habitantes' =>'5908',
    'deuda'=>'3467'
    );
$deuda[8][8211]=array(
    'nombre' =>'Sant Feliu de Llobregat',
    'habitantes' =>'43800',
    'deuda'=>'18794'
    );
$deuda[8][8212]=array(
    'nombre' =>'Sant Feliu Sasserra',
    'habitantes' =>'628',
    'deuda'=>'109'
    );
$deuda[8][8213]=array(
    'nombre' =>'Sant Fruitós de Bages',
    'habitantes' =>'8351',
    'deuda'=>'1581'
    );
$deuda[8][8214]=array(
    'nombre' =>'Vilassar de Dalt',
    'habitantes' =>'8964',
    'deuda'=>'24563'
    );
$deuda[8][8215]=array(
    'nombre' =>'Sant Hipòlit de Voltregà',
    'habitantes' =>'3429',
    'deuda'=>'650'
    );
$deuda[8][8216]=array(
    'nombre' =>'Sant Jaume de Frontanyà',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[8][8217]=array(
    'nombre' =>'Sant Joan Despí',
    'habitantes' =>'33264',
    'deuda'=>'8732'
    );
$deuda[8][8218]=array(
    'nombre' =>'Sant Joan de Vilatorrada',
    'habitantes' =>'10768',
    'deuda'=>'1812'
    );
$deuda[8][8219]=array(
    'nombre' =>'Vilassar de Mar',
    'habitantes' =>'20447',
    'deuda'=>'20964'
    );
$deuda[8][8220]=array(
    'nombre' =>'Sant Julià de Vilatorta',
    'habitantes' =>'3104',
    'deuda'=>'115'
    );
$deuda[8][8221]=array(
    'nombre' =>'Sant Just Desvern',
    'habitantes' =>'16631',
    'deuda'=>'5713'
    );
$deuda[8][8222]=array(
    'nombre' =>'Sant Llorenç d\'Hortons',
    'habitantes' =>'2557',
    'deuda'=>'87'
    );
$deuda[8][8223]=array(
    'nombre' =>'Sant Llorenç Savall',
    'habitantes' =>'2380',
    'deuda'=>'820'
    );
$deuda[8][8224]=array(
    'nombre' =>'Sant Martí de Centelles',
    'habitantes' =>'1103',
    'deuda'=>'75'
    );
$deuda[8][8225]=array(
    'nombre' =>'Sant Martí d\'Albars',
    'habitantes' =>'110',
    'deuda'=>'21'
    );
$deuda[8][8226]=array(
    'nombre' =>'Sant Martí de Tous',
    'habitantes' =>'1186',
    'deuda'=>'260'
    );
$deuda[8][8227]=array(
    'nombre' =>'Sant Martí Sarroca',
    'habitantes' =>'3092',
    'deuda'=>'0'
    );
$deuda[8][8228]=array(
    'nombre' =>'Sant Martí Sesgueioles',
    'habitantes' =>'378',
    'deuda'=>'150'
    );
$deuda[8][8229]=array(
    'nombre' =>'Sant Mateu de Bages',
    'habitantes' =>'620',
    'deuda'=>'312'
    );
$deuda[8][8230]=array(
    'nombre' =>'Premià de Dalt',
    'habitantes' =>'10392',
    'deuda'=>'1046'
    );
$deuda[8][8231]=array(
    'nombre' =>'Sant Pere de Ribes',
    'habitantes' =>'29666',
    'deuda'=>'128'
    );
$deuda[8][8232]=array(
    'nombre' =>'Sant Pere de Riudebitlles',
    'habitantes' =>'2374',
    'deuda'=>'656'
    );
$deuda[8][8233]=array(
    'nombre' =>'Sant Pere de Torelló',
    'habitantes' =>'2433',
    'deuda'=>'725'
    );
$deuda[8][8234]=array(
    'nombre' =>'Sant Pere de Vilamajor',
    'habitantes' =>'4281',
    'deuda'=>'1019'
    );
$deuda[8][8235]=array(
    'nombre' =>'Sant Pol de Mar',
    'habitantes' =>'5012',
    'deuda'=>'1961'
    );
$deuda[8][8236]=array(
    'nombre' =>'Sant Quintí de Mediona',
    'habitantes' =>'2116',
    'deuda'=>'151'
    );
$deuda[8][8237]=array(
    'nombre' =>'Sant Quirze de Besora',
    'habitantes' =>'2132',
    'deuda'=>'284'
    );
$deuda[8][8238]=array(
    'nombre' =>'Sant Quirze del Vallès',
    'habitantes' =>'19602',
    'deuda'=>'3626'
    );
$deuda[8][8239]=array(
    'nombre' =>'Sant Quirze Safaja',
    'habitantes' =>'622',
    'deuda'=>'107'
    );
$deuda[8][8240]=array(
    'nombre' =>'Sant Sadurní d\'Anoia',
    'habitantes' =>'12689',
    'deuda'=>'3413'
    );
$deuda[8][8241]=array(
    'nombre' =>'Sant Sadurní d\'Osormort',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[8][8242]=array(
    'nombre' =>'Marganell',
    'habitantes' =>'280',
    'deuda'=>'0'
    );
$deuda[8][8243]=array(
    'nombre' =>'Santa Cecília de Voltregà',
    'habitantes' =>'179',
    'deuda'=>'0'
    );
$deuda[8][8244]=array(
    'nombre' =>'Santa Coloma de Cervelló',
    'habitantes' =>'8022',
    'deuda'=>'807'
    );
$deuda[8][8245]=array(
    'nombre' =>'Santa Coloma de Gramenet',
    'habitantes' =>'116950',
    'deuda'=>'82656'
    );
$deuda[8][8246]=array(
    'nombre' =>'Santa Eugènia de Berga',
    'habitantes' =>'2204',
    'deuda'=>'92'
    );
$deuda[8][8247]=array(
    'nombre' =>'Santa Eulàlia de Riuprimer',
    'habitantes' =>'1284',
    'deuda'=>'0'
    );
$deuda[8][8248]=array(
    'nombre' =>'Santa Eulàlia de Ronçana',
    'habitantes' =>'7080',
    'deuda'=>'5386'
    );
$deuda[8][8249]=array(
    'nombre' =>'Santa Fe del Penedès',
    'habitantes' =>'378',
    'deuda'=>'20'
    );
$deuda[8][8250]=array(
    'nombre' =>'Santa Margarida de Montbui',
    'habitantes' =>'9648',
    'deuda'=>'4955'
    );
$deuda[8][8251]=array(
    'nombre' =>'Santa Margarida i els Monjos',
    'habitantes' =>'7332',
    'deuda'=>'352'
    );
$deuda[8][8252]=array(
    'nombre' =>'Barberà del Vallès',
    'habitantes' =>'32545',
    'deuda'=>'15728'
    );
$deuda[8][8253]=array(
    'nombre' =>'Santa Maria de Besora',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[8][8254]=array(
    'nombre' =>'Esquirol, L\'',
    'habitantes' =>'2150',
    'deuda'=>'770'
    );
$deuda[8][8255]=array(
    'nombre' =>'Santa Maria de Merlès',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[8][8256]=array(
    'nombre' =>'Santa Maria de Martorelles',
    'habitantes' =>'853',
    'deuda'=>'0'
    );
$deuda[8][8257]=array(
    'nombre' =>'Santa Maria de Miralles',
    'habitantes' =>'130',
    'deuda'=>'0'
    );
$deuda[8][8258]=array(
    'nombre' =>'Santa Maria d\'Oló',
    'habitantes' =>'1063',
    'deuda'=>'27'
    );
$deuda[8][8259]=array(
    'nombre' =>'Santa Maria de Palautordera',
    'habitantes' =>'9103',
    'deuda'=>'837'
    );
$deuda[8][8260]=array(
    'nombre' =>'Santa Perpètua de Mogoda',
    'habitantes' =>'25466',
    'deuda'=>'9247'
    );
$deuda[8][8261]=array(
    'nombre' =>'Santa Susanna',
    'habitantes' =>'3275',
    'deuda'=>'10332'
    );
$deuda[8][8262]=array(
    'nombre' =>'Sant Vicenç de Castellet',
    'habitantes' =>'9246',
    'deuda'=>'2049'
    );
$deuda[8][8263]=array(
    'nombre' =>'Sant Vicenç dels Horts',
    'habitantes' =>'27983',
    'deuda'=>'4802'
    );
$deuda[8][8264]=array(
    'nombre' =>'Sant Vicenç de Montalt',
    'habitantes' =>'6049',
    'deuda'=>'1596'
    );
$deuda[8][8265]=array(
    'nombre' =>'Sant Vicenç de Torelló',
    'habitantes' =>'2001',
    'deuda'=>'274'
    );
$deuda[8][8266]=array(
    'nombre' =>'Cerdanyola del Vallès',
    'habitantes' =>'57413',
    'deuda'=>'21310'
    );
$deuda[8][8267]=array(
    'nombre' =>'Sentmenat',
    'habitantes' =>'8652',
    'deuda'=>'2992'
    );
$deuda[8][8268]=array(
    'nombre' =>'Cercs',
    'habitantes' =>'1209',
    'deuda'=>'0'
    );
$deuda[8][8269]=array(
    'nombre' =>'Seva',
    'habitantes' =>'3434',
    'deuda'=>'606'
    );
$deuda[8][8270]=array(
    'nombre' =>'Sitges',
    'habitantes' =>'28269',
    'deuda'=>'19998'
    );
$deuda[8][8271]=array(
    'nombre' =>'Sobremunt',
    'habitantes' =>'82',
    'deuda'=>'86'
    );
$deuda[8][8272]=array(
    'nombre' =>'Sora',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[8][8273]=array(
    'nombre' =>'Subirats',
    'habitantes' =>'2988',
    'deuda'=>'31'
    );
$deuda[8][8274]=array(
    'nombre' =>'Súria',
    'habitantes' =>'5927',
    'deuda'=>'2117'
    );
$deuda[8][8275]=array(
    'nombre' =>'Tavèrnoles',
    'habitantes' =>'319',
    'deuda'=>'0'
    );
$deuda[8][8276]=array(
    'nombre' =>'Tagamanent',
    'habitantes' =>'319',
    'deuda'=>'106'
    );
$deuda[8][8277]=array(
    'nombre' =>'Talamanca',
    'habitantes' =>'189',
    'deuda'=>'0'
    );
$deuda[8][8278]=array(
    'nombre' =>'Taradell',
    'habitantes' =>'6262',
    'deuda'=>'3154'
    );
$deuda[8][8279]=array(
    'nombre' =>'Terrassa',
    'habitantes' =>'215214',
    'deuda'=>'180024'
    );
$deuda[8][8280]=array(
    'nombre' =>'Tavertet',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[8][8281]=array(
    'nombre' =>'Teià',
    'habitantes' =>'6238',
    'deuda'=>'2691'
    );
$deuda[8][8282]=array(
    'nombre' =>'Tiana',
    'habitantes' =>'8411',
    'deuda'=>'3606'
    );
$deuda[8][8283]=array(
    'nombre' =>'Tona',
    'habitantes' =>'8021',
    'deuda'=>'2037'
    );
$deuda[8][8284]=array(
    'nombre' =>'Tordera',
    'habitantes' =>'16433',
    'deuda'=>'18104'
    );
$deuda[8][8285]=array(
    'nombre' =>'Torelló',
    'habitantes' =>'13881',
    'deuda'=>'4026'
    );
$deuda[8][8286]=array(
    'nombre' =>'Torre de Claramunt, La',
    'habitantes' =>'3767',
    'deuda'=>'1819'
    );
$deuda[8][8287]=array(
    'nombre' =>'Torrelavit',
    'habitantes' =>'1401',
    'deuda'=>'64'
    );
$deuda[8][8288]=array(
    'nombre' =>'Torrelles de Foix',
    'habitantes' =>'2246',
    'deuda'=>'2936'
    );
$deuda[8][8289]=array(
    'nombre' =>'Torrelles de Llobregat',
    'habitantes' =>'5883',
    'deuda'=>'798'
    );
$deuda[8][8290]=array(
    'nombre' =>'Ullastrell',
    'habitantes' =>'2043',
    'deuda'=>'322'
    );
$deuda[8][8291]=array(
    'nombre' =>'Vacarisses',
    'habitantes' =>'6143',
    'deuda'=>'2046'
    );
$deuda[8][8292]=array(
    'nombre' =>'Vallbona d\'Anoia',
    'habitantes' =>'1417',
    'deuda'=>'7'
    );
$deuda[8][8293]=array(
    'nombre' =>'Vallcebre',
    'habitantes' =>'255',
    'deuda'=>'0'
    );
$deuda[8][8294]=array(
    'nombre' =>'Vallgorguina',
    'habitantes' =>'2749',
    'deuda'=>'0'
    );
$deuda[8][8295]=array(
    'nombre' =>'Vallirana',
    'habitantes' =>'14633',
    'deuda'=>'7859'
    );
$deuda[8][8296]=array(
    'nombre' =>'Vallromanes',
    'habitantes' =>'2543',
    'deuda'=>'234'
    );
$deuda[8][8297]=array(
    'nombre' =>'Veciana',
    'habitantes' =>'175',
    'deuda'=>'0'
    );
$deuda[8][8298]=array(
    'nombre' =>'Vic',
    'habitantes' =>'42498',
    'deuda'=>'28182'
    );
$deuda[8][8299]=array(
    'nombre' =>'Vilada',
    'habitantes' =>'427',
    'deuda'=>'0'
    );
$deuda[8][8300]=array(
    'nombre' =>'Viladecavalls',
    'habitantes' =>'7365',
    'deuda'=>'3958'
    );
$deuda[8][8301]=array(
    'nombre' =>'Viladecans',
    'habitantes' =>'65549',
    'deuda'=>'20741'
    );
$deuda[8][8302]=array(
    'nombre' =>'Vilanova del Camí',
    'habitantes' =>'12452',
    'deuda'=>'4241'
    );
$deuda[8][8303]=array(
    'nombre' =>'Vilanova de Sau',
    'habitantes' =>'312',
    'deuda'=>'0'
    );
$deuda[8][8304]=array(
    'nombre' =>'Vilobí del Penedès',
    'habitantes' =>'1085',
    'deuda'=>'7'
    );
$deuda[8][8305]=array(
    'nombre' =>'Vilafranca del Penedès',
    'habitantes' =>'39224',
    'deuda'=>'17278'
    );
$deuda[8][8306]=array(
    'nombre' =>'Vilalba Sasserra',
    'habitantes' =>'709',
    'deuda'=>'0'
    );
$deuda[8][8307]=array(
    'nombre' =>'Vilanova i la Geltrú',
    'habitantes' =>'65684',
    'deuda'=>'84190'
    );
$deuda[8][8308]=array(
    'nombre' =>'Viver i Serrateix',
    'habitantes' =>'168',
    'deuda'=>'0'
    );
$deuda[8][8901]=array(
    'nombre' =>'Rupit i Pruit',
    'habitantes' =>'281',
    'deuda'=>'0'
    );
$deuda[8][8902]=array(
    'nombre' =>'Vilanova del Vallès',
    'habitantes' =>'5241',
    'deuda'=>'3255'
    );
$deuda[8][8903]=array(
    'nombre' =>'Sant Julià de Cerdanyola',
    'habitantes' =>'242',
    'deuda'=>'0'
    );
$deuda[8][8904]=array(
    'nombre' =>'Badia del Vallès',
    'habitantes' =>'13502',
    'deuda'=>'1957'
    );
$deuda[8][8905]=array(
    'nombre' =>'Palma de Cervelló, La',
    'habitantes' =>'2966',
    'deuda'=>'1942'
    );
$deuda[9][9001]=array(
    'nombre' =>'Abajas',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[9][9003]=array(
    'nombre' =>'Adrada de Haza',
    'habitantes' =>'221',
    'deuda'=>'0'
    );
$deuda[9][9006]=array(
    'nombre' =>'Aguas Cándidas',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[9][9007]=array(
    'nombre' =>'Aguilar de Bureba',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[9][9009]=array(
    'nombre' =>'Albillos',
    'habitantes' =>'221',
    'deuda'=>'52'
    );
$deuda[9][9010]=array(
    'nombre' =>'Alcocero de Mola',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[9][9011]=array(
    'nombre' =>'Alfoz de Bricia',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[9][9012]=array(
    'nombre' =>'Alfoz de Santa Gadea',
    'habitantes' =>'105',
    'deuda'=>'234'
    );
$deuda[9][9013]=array(
    'nombre' =>'Altable',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[9][9014]=array(
    'nombre' =>'Altos, Los',
    'habitantes' =>'190',
    'deuda'=>'0'
    );
$deuda[9][9016]=array(
    'nombre' =>'Ameyugo',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[9][9017]=array(
    'nombre' =>'Anguix',
    'habitantes' =>'134',
    'deuda'=>'0'
    );
$deuda[9][9018]=array(
    'nombre' =>'Aranda de Duero',
    'habitantes' =>'32880',
    'deuda'=>'1467'
    );
$deuda[9][9019]=array(
    'nombre' =>'Arandilla',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[9][9020]=array(
    'nombre' =>'Arauzo de Miel',
    'habitantes' =>'350',
    'deuda'=>'0'
    );
$deuda[9][9021]=array(
    'nombre' =>'Arauzo de Salce',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[9][9022]=array(
    'nombre' =>'Arauzo de Torre',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[9][9023]=array(
    'nombre' =>'Arcos',
    'habitantes' =>'1566',
    'deuda'=>'0'
    );
$deuda[9][9024]=array(
    'nombre' =>'Arenillas de Riopisuerga',
    'habitantes' =>'179',
    'deuda'=>'0'
    );
$deuda[9][9025]=array(
    'nombre' =>'Arija',
    'habitantes' =>'146',
    'deuda'=>'75'
    );
$deuda[9][9026]=array(
    'nombre' =>'Arlanzón',
    'habitantes' =>'429',
    'deuda'=>'0'
    );
$deuda[9][9027]=array(
    'nombre' =>'Arraya de Oca',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[9][9029]=array(
    'nombre' =>'Atapuerca',
    'habitantes' =>'187',
    'deuda'=>'0'
    );
$deuda[9][9030]=array(
    'nombre' =>'Ausines, Los',
    'habitantes' =>'126',
    'deuda'=>'13'
    );
$deuda[9][9032]=array(
    'nombre' =>'Avellanosa de Muñó',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[9][9033]=array(
    'nombre' =>'Bahabón de Esgueva',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[9][9034]=array(
    'nombre' =>'Balbases, Los',
    'habitantes' =>'323',
    'deuda'=>'0'
    );
$deuda[9][9035]=array(
    'nombre' =>'Baños de Valdearados',
    'habitantes' =>'361',
    'deuda'=>'0'
    );
$deuda[9][9036]=array(
    'nombre' =>'Bañuelos de Bureba',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[9][9037]=array(
    'nombre' =>'Barbadillo de Herreros',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[9][9038]=array(
    'nombre' =>'Barbadillo del Mercado',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[9][9039]=array(
    'nombre' =>'Barbadillo del Pez',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[9][9041]=array(
    'nombre' =>'Barrio de Muñó',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[9][9043]=array(
    'nombre' =>'Barrios de Bureba, Los',
    'habitantes' =>'199',
    'deuda'=>'0'
    );
$deuda[9][9044]=array(
    'nombre' =>'Barrios de Colina',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[9][9045]=array(
    'nombre' =>'Basconcillos del Tozo',
    'habitantes' =>'291',
    'deuda'=>'0'
    );
$deuda[9][9046]=array(
    'nombre' =>'Bascuñana',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[9][9047]=array(
    'nombre' =>'Belbimbre',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[9][9048]=array(
    'nombre' =>'Belorado',
    'habitantes' =>'1969',
    'deuda'=>'0'
    );
$deuda[9][9050]=array(
    'nombre' =>'Berberana',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[9][9051]=array(
    'nombre' =>'Berlangas de Roa',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[9][9052]=array(
    'nombre' =>'Berzosa de Bureba',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[9][9054]=array(
    'nombre' =>'Bozoó',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[9][9055]=array(
    'nombre' =>'Brazacorta',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[9][9056]=array(
    'nombre' =>'Briviesca',
    'habitantes' =>'7129',
    'deuda'=>'2095'
    );
$deuda[9][9057]=array(
    'nombre' =>'Bugedo',
    'habitantes' =>'175',
    'deuda'=>'0'
    );
$deuda[9][9058]=array(
    'nombre' =>'Buniel',
    'habitantes' =>'516',
    'deuda'=>'0'
    );
$deuda[9][9059]=array(
    'nombre' =>'Burgos',
    'habitantes' =>'177100',
    'deuda'=>'97506'
    );
$deuda[9][9060]=array(
    'nombre' =>'Busto de Bureba',
    'habitantes' =>'164',
    'deuda'=>'102'
    );
$deuda[9][9061]=array(
    'nombre' =>'Cabañes de Esgueva',
    'habitantes' =>'180',
    'deuda'=>'0'
    );
$deuda[9][9062]=array(
    'nombre' =>'Cabezón de la Sierra',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[9][9063]=array(
    'nombre' =>'Cavia',
    'habitantes' =>'247',
    'deuda'=>'126'
    );
$deuda[9][9064]=array(
    'nombre' =>'Caleruega',
    'habitantes' =>'470',
    'deuda'=>'0'
    );
$deuda[9][9065]=array(
    'nombre' =>'Campillo de Aranda',
    'habitantes' =>'178',
    'deuda'=>'0'
    );
$deuda[9][9066]=array(
    'nombre' =>'Campolara',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[9][9067]=array(
    'nombre' =>'Canicosa de la Sierra',
    'habitantes' =>'514',
    'deuda'=>'0'
    );
$deuda[9][9068]=array(
    'nombre' =>'Cantabrana',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[9][9070]=array(
    'nombre' =>'Carazo',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[9][9071]=array(
    'nombre' =>'Carcedo de Bureba',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[9][9072]=array(
    'nombre' =>'Carcedo de Burgos',
    'habitantes' =>'388',
    'deuda'=>'0'
    );
$deuda[9][9073]=array(
    'nombre' =>'Cardeñadijo',
    'habitantes' =>'1295',
    'deuda'=>'420'
    );
$deuda[9][9074]=array(
    'nombre' =>'Cardeñajimeno',
    'habitantes' =>'1019',
    'deuda'=>'0'
    );
$deuda[9][9075]=array(
    'nombre' =>'Cardeñuela Riopico',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[9][9076]=array(
    'nombre' =>'Carrias',
    'habitantes' =>'23',
    'deuda'=>'0'
    );
$deuda[9][9077]=array(
    'nombre' =>'Cascajares de Bureba',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[9][9078]=array(
    'nombre' =>'Cascajares de la Sierra',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[9][9079]=array(
    'nombre' =>'Castellanos de Castro',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[9][9082]=array(
    'nombre' =>'Castildelgado',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[9][9083]=array(
    'nombre' =>'Castil de Peones',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[9][9084]=array(
    'nombre' =>'Castrillo de la Reina',
    'habitantes' =>'209',
    'deuda'=>'0'
    );
$deuda[9][9085]=array(
    'nombre' =>'Castrillo de la Vega',
    'habitantes' =>'636',
    'deuda'=>'0'
    );
$deuda[9][9086]=array(
    'nombre' =>'Castrillo del Val',
    'habitantes' =>'839',
    'deuda'=>'0'
    );
$deuda[9][9088]=array(
    'nombre' =>'Castrillo de Riopisuerga',
    'habitantes' =>'61',
    'deuda'=>'0'
    );
$deuda[9][9090]=array(
    'nombre' =>'Castrillo Matajudíos',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[9][9091]=array(
    'nombre' =>'Castrojeriz',
    'habitantes' =>'845',
    'deuda'=>'0'
    );
$deuda[9][9093]=array(
    'nombre' =>'Cayuela',
    'habitantes' =>'180',
    'deuda'=>'0'
    );
$deuda[9][9094]=array(
    'nombre' =>'Cebrecos',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[9][9095]=array(
    'nombre' =>'Celada del Camino',
    'habitantes' =>'97',
    'deuda'=>'0'
    );
$deuda[9][9098]=array(
    'nombre' =>'Cerezo de Río Tirón',
    'habitantes' =>'598',
    'deuda'=>'0'
    );
$deuda[9][9100]=array(
    'nombre' =>'Cerratón de Juarros',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[9][9101]=array(
    'nombre' =>'Ciadoncha',
    'habitantes' =>'81',
    'deuda'=>'0'
    );
$deuda[9][9102]=array(
    'nombre' =>'Cillaperlata',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[9][9103]=array(
    'nombre' =>'Cilleruelo de Abajo',
    'habitantes' =>'237',
    'deuda'=>'0'
    );
$deuda[9][9104]=array(
    'nombre' =>'Cilleruelo de Arriba',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[9][9105]=array(
    'nombre' =>'Ciruelos de Cervera',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[9][9108]=array(
    'nombre' =>'Cogollos',
    'habitantes' =>'451',
    'deuda'=>'0'
    );
$deuda[9][9109]=array(
    'nombre' =>'Condado de Treviño',
    'habitantes' =>'1362',
    'deuda'=>'0'
    );
$deuda[9][9110]=array(
    'nombre' =>'Contreras',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[9][9112]=array(
    'nombre' =>'Coruña del Conde',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[9][9113]=array(
    'nombre' =>'Covarrubias',
    'habitantes' =>'585',
    'deuda'=>'113'
    );
$deuda[9][9114]=array(
    'nombre' =>'Cubillo del Campo',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[9][9115]=array(
    'nombre' =>'Cubo de Bureba',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[9][9117]=array(
    'nombre' =>'Cueva de Roa, La',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[9][9119]=array(
    'nombre' =>'Cuevas de San Clemente',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[9][9120]=array(
    'nombre' =>'Encío',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[9][9122]=array(
    'nombre' =>'Espinosa de Cervera',
    'habitantes' =>'100',
    'deuda'=>'74'
    );
$deuda[9][9123]=array(
    'nombre' =>'Espinosa del Camino',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[9][9124]=array(
    'nombre' =>'Espinosa de los Monteros',
    'habitantes' =>'1788',
    'deuda'=>'1241'
    );
$deuda[9][9125]=array(
    'nombre' =>'Estépar',
    'habitantes' =>'664',
    'deuda'=>'0'
    );
$deuda[9][9127]=array(
    'nombre' =>'Fontioso',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[9][9128]=array(
    'nombre' =>'Frandovínez',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[9][9129]=array(
    'nombre' =>'Fresneda de la Sierra Tirón',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[9][9130]=array(
    'nombre' =>'Fresneña',
    'habitantes' =>'87',
    'deuda'=>'0'
    );
$deuda[9][9131]=array(
    'nombre' =>'Fresnillo de las Dueñas',
    'habitantes' =>'636',
    'deuda'=>'0'
    );
$deuda[9][9132]=array(
    'nombre' =>'Fresno de Río Tirón',
    'habitantes' =>'195',
    'deuda'=>'0'
    );
$deuda[9][9133]=array(
    'nombre' =>'Fresno de Rodilla',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[9][9134]=array(
    'nombre' =>'Frías',
    'habitantes' =>'265',
    'deuda'=>'0'
    );
$deuda[9][9135]=array(
    'nombre' =>'Fuentebureba',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[9][9136]=array(
    'nombre' =>'Fuentecén',
    'habitantes' =>'222',
    'deuda'=>'0'
    );
$deuda[9][9137]=array(
    'nombre' =>'Fuentelcésped',
    'habitantes' =>'213',
    'deuda'=>'0'
    );
$deuda[9][9138]=array(
    'nombre' =>'Fuentelisendo',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[9][9139]=array(
    'nombre' =>'Fuentemolinos',
    'habitantes' =>'97',
    'deuda'=>'0'
    );
$deuda[9][9140]=array(
    'nombre' =>'Fuentenebro',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[9][9141]=array(
    'nombre' =>'Fuentespina',
    'habitantes' =>'769',
    'deuda'=>'0'
    );
$deuda[9][9143]=array(
    'nombre' =>'Galbarros',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[9][9144]=array(
    'nombre' =>'Gallega, La',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[9][9148]=array(
    'nombre' =>'Grijalba',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[9][9149]=array(
    'nombre' =>'Grisaleña',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[9][9151]=array(
    'nombre' =>'Gumiel de Izán',
    'habitantes' =>'577',
    'deuda'=>'128'
    );
$deuda[9][9152]=array(
    'nombre' =>'Gumiel de Mercado',
    'habitantes' =>'344',
    'deuda'=>'0'
    );
$deuda[9][9154]=array(
    'nombre' =>'Hacinas',
    'habitantes' =>'166',
    'deuda'=>'6'
    );
$deuda[9][9155]=array(
    'nombre' =>'Haza',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[9][9159]=array(
    'nombre' =>'Hontanas',
    'habitantes' =>'67',
    'deuda'=>'0'
    );
$deuda[9][9160]=array(
    'nombre' =>'Hontangas',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[9][9162]=array(
    'nombre' =>'Hontoria de la Cantera',
    'habitantes' =>'157',
    'deuda'=>'0'
    );
$deuda[9][9163]=array(
    'nombre' =>'Hontoria del Pinar',
    'habitantes' =>'707',
    'deuda'=>'0'
    );
$deuda[9][9164]=array(
    'nombre' =>'Hontoria de Valdearados',
    'habitantes' =>'201',
    'deuda'=>'0'
    );
$deuda[9][9166]=array(
    'nombre' =>'Hormazas, Las',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[9][9167]=array(
    'nombre' =>'Hornillos del Camino',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[9][9168]=array(
    'nombre' =>'Horra, La',
    'habitantes' =>'366',
    'deuda'=>'24'
    );
$deuda[9][9169]=array(
    'nombre' =>'Hortigüela',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[9][9170]=array(
    'nombre' =>'Hoyales de Roa',
    'habitantes' =>'211',
    'deuda'=>'0'
    );
$deuda[9][9172]=array(
    'nombre' =>'Huérmeces',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[9][9173]=array(
    'nombre' =>'Huerta de Arriba',
    'habitantes' =>'128',
    'deuda'=>'0'
    );
$deuda[9][9174]=array(
    'nombre' =>'Huerta de Rey',
    'habitantes' =>'1007',
    'deuda'=>'0'
    );
$deuda[9][9175]=array(
    'nombre' =>'Humada',
    'habitantes' =>'130',
    'deuda'=>'0'
    );
$deuda[9][9176]=array(
    'nombre' =>'Hurones',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[9][9177]=array(
    'nombre' =>'Ibeas de Juarros',
    'habitantes' =>'1400',
    'deuda'=>'60'
    );
$deuda[9][9178]=array(
    'nombre' =>'Ibrillos',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[9][9179]=array(
    'nombre' =>'Iglesiarrubia',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[9][9180]=array(
    'nombre' =>'Iglesias',
    'habitantes' =>'140',
    'deuda'=>'0'
    );
$deuda[9][9181]=array(
    'nombre' =>'Isar',
    'habitantes' =>'331',
    'deuda'=>'0'
    );
$deuda[9][9182]=array(
    'nombre' =>'Itero del Castillo',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[9][9183]=array(
    'nombre' =>'Jaramillo de la Fuente',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[9][9184]=array(
    'nombre' =>'Jaramillo Quemado',
    'habitantes' =>'5',
    'deuda'=>'0'
    );
$deuda[9][9189]=array(
    'nombre' =>'Junta de Traslaloma',
    'habitantes' =>'136',
    'deuda'=>'0'
    );
$deuda[9][9190]=array(
    'nombre' =>'Junta de Villalba de Losa',
    'habitantes' =>'89',
    'deuda'=>'7'
    );
$deuda[9][9191]=array(
    'nombre' =>'Jurisdicción de Lara',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[9][9192]=array(
    'nombre' =>'Jurisdicción de San Zadornil',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[9][9194]=array(
    'nombre' =>'Lerma',
    'habitantes' =>'2703',
    'deuda'=>'268'
    );
$deuda[9][9195]=array(
    'nombre' =>'Llano de Bureba',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[9][9196]=array(
    'nombre' =>'Madrigal del Monte',
    'habitantes' =>'169',
    'deuda'=>'28'
    );
$deuda[9][9197]=array(
    'nombre' =>'Madrigalejo del Monte',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[9][9198]=array(
    'nombre' =>'Mahamud',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[9][9199]=array(
    'nombre' =>'Mambrilla de Castrejón',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[9][9200]=array(
    'nombre' =>'Mambrillas de Lara',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[9][9201]=array(
    'nombre' =>'Mamolar',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[9][9202]=array(
    'nombre' =>'Manciles',
    'habitantes' =>'19',
    'deuda'=>'0'
    );
$deuda[9][9206]=array(
    'nombre' =>'Mazuela',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[9][9208]=array(
    'nombre' =>'Mecerreyes',
    'habitantes' =>'259',
    'deuda'=>'0'
    );
$deuda[9][9209]=array(
    'nombre' =>'Medina de Pomar',
    'habitantes' =>'5983',
    'deuda'=>'1517'
    );
$deuda[9][9211]=array(
    'nombre' =>'Melgar de Fernamental',
    'habitantes' =>'1744',
    'deuda'=>'478'
    );
$deuda[9][9213]=array(
    'nombre' =>'Merindad de Cuesta-Urria',
    'habitantes' =>'366',
    'deuda'=>'0'
    );
$deuda[9][9214]=array(
    'nombre' =>'Merindad de Montija',
    'habitantes' =>'803',
    'deuda'=>'0'
    );
$deuda[9][9215]=array(
    'nombre' =>'Merindad de Sotoscueva',
    'habitantes' =>'436',
    'deuda'=>'0'
    );
$deuda[9][9216]=array(
    'nombre' =>'Merindad de Valdeporres',
    'habitantes' =>'440',
    'deuda'=>'0'
    );
$deuda[9][9217]=array(
    'nombre' =>'Merindad de Valdivielso',
    'habitantes' =>'400',
    'deuda'=>'0'
    );
$deuda[9][9218]=array(
    'nombre' =>'Milagros',
    'habitantes' =>'460',
    'deuda'=>'0'
    );
$deuda[9][9219]=array(
    'nombre' =>'Miranda de Ebro',
    'habitantes' =>'36173',
    'deuda'=>'16959'
    );
$deuda[9][9220]=array(
    'nombre' =>'Miraveche',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[9][9221]=array(
    'nombre' =>'Modúbar de la Emparedada',
    'habitantes' =>'597',
    'deuda'=>'0'
    );
$deuda[9][9223]=array(
    'nombre' =>'Monasterio de la Sierra',
    'habitantes' =>'48',
    'deuda'=>'409'
    );
$deuda[9][9224]=array(
    'nombre' =>'Monasterio de Rodilla',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[9][9225]=array(
    'nombre' =>'Moncalvillo',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[9][9226]=array(
    'nombre' =>'Monterrubio de la Demanda',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[9][9227]=array(
    'nombre' =>'Montorio',
    'habitantes' =>'162',
    'deuda'=>'0'
    );
$deuda[9][9228]=array(
    'nombre' =>'Moradillo de Roa',
    'habitantes' =>'192',
    'deuda'=>'0'
    );
$deuda[9][9229]=array(
    'nombre' =>'Nava de Roa',
    'habitantes' =>'221',
    'deuda'=>'0'
    );
$deuda[9][9230]=array(
    'nombre' =>'Navas de Bureba',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[9][9231]=array(
    'nombre' =>'Nebreda',
    'habitantes' =>'70',
    'deuda'=>'14'
    );
$deuda[9][9232]=array(
    'nombre' =>'Neila',
    'habitantes' =>'173',
    'deuda'=>'0'
    );
$deuda[9][9235]=array(
    'nombre' =>'Olmedillo de Roa',
    'habitantes' =>'199',
    'deuda'=>'0'
    );
$deuda[9][9236]=array(
    'nombre' =>'Olmillos de Muñó',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[9][9238]=array(
    'nombre' =>'Oña',
    'habitantes' =>'1088',
    'deuda'=>'214'
    );
$deuda[9][9239]=array(
    'nombre' =>'Oquillas',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[9][9241]=array(
    'nombre' =>'Orbaneja Riopico',
    'habitantes' =>'243',
    'deuda'=>'0'
    );
$deuda[9][9242]=array(
    'nombre' =>'Padilla de Abajo',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[9][9243]=array(
    'nombre' =>'Padilla de Arriba',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[9][9244]=array(
    'nombre' =>'Padrones de Bureba',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[9][9246]=array(
    'nombre' =>'Palacios de la Sierra',
    'habitantes' =>'744',
    'deuda'=>'0'
    );
$deuda[9][9247]=array(
    'nombre' =>'Palacios de Riopisuerga',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[9][9248]=array(
    'nombre' =>'Palazuelos de la Sierra',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[9][9249]=array(
    'nombre' =>'Palazuelos de Muñó',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[9][9250]=array(
    'nombre' =>'Pampliega',
    'habitantes' =>'332',
    'deuda'=>'0'
    );
$deuda[9][9251]=array(
    'nombre' =>'Pancorbo',
    'habitantes' =>'453',
    'deuda'=>'133'
    );
$deuda[9][9253]=array(
    'nombre' =>'Pardilla',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[9][9255]=array(
    'nombre' =>'Partido de la Sierra en Tobalina',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[9][9256]=array(
    'nombre' =>'Pedrosa de Duero',
    'habitantes' =>'455',
    'deuda'=>'198'
    );
$deuda[9][9257]=array(
    'nombre' =>'Pedrosa del Páramo',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[9][9258]=array(
    'nombre' =>'Pedrosa del Príncipe',
    'habitantes' =>'175',
    'deuda'=>'0'
    );
$deuda[9][9259]=array(
    'nombre' =>'Pedrosa de Río Úrbel',
    'habitantes' =>'249',
    'deuda'=>'0'
    );
$deuda[9][9261]=array(
    'nombre' =>'Peñaranda de Duero',
    'habitantes' =>'552',
    'deuda'=>'0'
    );
$deuda[9][9262]=array(
    'nombre' =>'Peral de Arlanza',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[9][9265]=array(
    'nombre' =>'Piérnigas',
    'habitantes' =>'40',
    'deuda'=>'20'
    );
$deuda[9][9266]=array(
    'nombre' =>'Pineda de la Sierra',
    'habitantes' =>'101',
    'deuda'=>'0'
    );
$deuda[9][9267]=array(
    'nombre' =>'Pineda Trasmonte',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[9][9268]=array(
    'nombre' =>'Pinilla de los Barruecos',
    'habitantes' =>'111',
    'deuda'=>'130'
    );
$deuda[9][9269]=array(
    'nombre' =>'Pinilla de los Moros',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[9][9270]=array(
    'nombre' =>'Pinilla Trasmonte',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[9][9272]=array(
    'nombre' =>'Poza de la Sal',
    'habitantes' =>'337',
    'deuda'=>'0'
    );
$deuda[9][9273]=array(
    'nombre' =>'Prádanos de Bureba',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[9][9274]=array(
    'nombre' =>'Pradoluengo',
    'habitantes' =>'1282',
    'deuda'=>'271'
    );
$deuda[9][9275]=array(
    'nombre' =>'Presencio',
    'habitantes' =>'195',
    'deuda'=>'0'
    );
$deuda[9][9276]=array(
    'nombre' =>'Puebla de Arganzón, La',
    'habitantes' =>'519',
    'deuda'=>'0'
    );
$deuda[9][9277]=array(
    'nombre' =>'Puentedura',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[9][9279]=array(
    'nombre' =>'Quemada',
    'habitantes' =>'259',
    'deuda'=>'0'
    );
$deuda[9][9280]=array(
    'nombre' =>'Quintanabureba',
    'habitantes' =>'30',
    'deuda'=>'0'
    );
$deuda[9][9281]=array(
    'nombre' =>'Quintana del Pidio',
    'habitantes' =>'164',
    'deuda'=>'0'
    );
$deuda[9][9283]=array(
    'nombre' =>'Quintanaélez',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[9][9287]=array(
    'nombre' =>'Quintanaortuño',
    'habitantes' =>'281',
    'deuda'=>'0'
    );
$deuda[9][9288]=array(
    'nombre' =>'Quintanapalla',
    'habitantes' =>'110',
    'deuda'=>'0'
    );
$deuda[9][9289]=array(
    'nombre' =>'Quintanar de la Sierra',
    'habitantes' =>'1845',
    'deuda'=>'0'
    );
$deuda[9][9292]=array(
    'nombre' =>'Quintanavides',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[9][9294]=array(
    'nombre' =>'Quintanilla de la Mata',
    'habitantes' =>'130',
    'deuda'=>'0'
    );
$deuda[9][9295]=array(
    'nombre' =>'Quintanilla del Coco',
    'habitantes' =>'61',
    'deuda'=>'0'
    );
$deuda[9][9297]=array(
    'nombre' =>'Quintanillas, Las',
    'habitantes' =>'391',
    'deuda'=>'0'
    );
$deuda[9][9298]=array(
    'nombre' =>'Quintanilla San García',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[9][9301]=array(
    'nombre' =>'Quintanilla Vivar',
    'habitantes' =>'766',
    'deuda'=>'0'
    );
$deuda[9][9302]=array(
    'nombre' =>'Rabanera del Pinar',
    'habitantes' =>'121',
    'deuda'=>'31'
    );
$deuda[9][9303]=array(
    'nombre' =>'Rábanos',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[9][9304]=array(
    'nombre' =>'Rabé de las Calzadas',
    'habitantes' =>'228',
    'deuda'=>'0'
    );
$deuda[9][9306]=array(
    'nombre' =>'Rebolledo de la Torre',
    'habitantes' =>'122',
    'deuda'=>'0'
    );
$deuda[9][9307]=array(
    'nombre' =>'Redecilla del Camino',
    'habitantes' =>'136',
    'deuda'=>'0'
    );
$deuda[9][9308]=array(
    'nombre' =>'Redecilla del Campo',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[9][9309]=array(
    'nombre' =>'Regumiel de la Sierra',
    'habitantes' =>'367',
    'deuda'=>'36'
    );
$deuda[9][9310]=array(
    'nombre' =>'Reinoso',
    'habitantes' =>'11',
    'deuda'=>'0'
    );
$deuda[9][9311]=array(
    'nombre' =>'Retuerta',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[9][9312]=array(
    'nombre' =>'Revilla y Ahedo, La',
    'habitantes' =>'114',
    'deuda'=>'148'
    );
$deuda[9][9314]=array(
    'nombre' =>'Revilla del Campo',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[9][9315]=array(
    'nombre' =>'Revillarruz',
    'habitantes' =>'512',
    'deuda'=>'0'
    );
$deuda[9][9316]=array(
    'nombre' =>'Revilla Vallejera',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[9][9317]=array(
    'nombre' =>'Rezmondo',
    'habitantes' =>'15',
    'deuda'=>'0'
    );
$deuda[9][9318]=array(
    'nombre' =>'Riocavado de la Sierra',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[9][9321]=array(
    'nombre' =>'Roa',
    'habitantes' =>'2373',
    'deuda'=>'1178'
    );
$deuda[9][9323]=array(
    'nombre' =>'Rojas',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[9][9325]=array(
    'nombre' =>'Royuela de Río Franco',
    'habitantes' =>'212',
    'deuda'=>'0'
    );
$deuda[9][9326]=array(
    'nombre' =>'Rubena',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[9][9327]=array(
    'nombre' =>'Rublacedo de Abajo',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[9][9328]=array(
    'nombre' =>'Rucandio',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[9][9329]=array(
    'nombre' =>'Salas de Bureba',
    'habitantes' =>'133',
    'deuda'=>'0'
    );
$deuda[9][9330]=array(
    'nombre' =>'Salas de los Infantes',
    'habitantes' =>'2091',
    'deuda'=>'0'
    );
$deuda[9][9332]=array(
    'nombre' =>'Saldaña de Burgos',
    'habitantes' =>'203',
    'deuda'=>'0'
    );
$deuda[9][9334]=array(
    'nombre' =>'Salinillas de Bureba',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[9][9335]=array(
    'nombre' =>'San Adrián de Juarros',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[9][9337]=array(
    'nombre' =>'San Juan del Monte',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[9][9338]=array(
    'nombre' =>'San Mamés de Burgos',
    'habitantes' =>'286',
    'deuda'=>'0'
    );
$deuda[9][9339]=array(
    'nombre' =>'San Martín de Rubiales',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[9][9340]=array(
    'nombre' =>'San Millán de Lara',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[9][9343]=array(
    'nombre' =>'Santa Cecilia',
    'habitantes' =>'105',
    'deuda'=>'7'
    );
$deuda[9][9345]=array(
    'nombre' =>'Santa Cruz de la Salceda',
    'habitantes' =>'152',
    'deuda'=>'244'
    );
$deuda[9][9346]=array(
    'nombre' =>'Santa Cruz del Valle Urbión',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[9][9347]=array(
    'nombre' =>'Santa Gadea del Cid',
    'habitantes' =>'155',
    'deuda'=>'75'
    );
$deuda[9][9348]=array(
    'nombre' =>'Santa Inés',
    'habitantes' =>'155',
    'deuda'=>'0'
    );
$deuda[9][9350]=array(
    'nombre' =>'Santa María del Campo',
    'habitantes' =>'595',
    'deuda'=>'0'
    );
$deuda[9][9351]=array(
    'nombre' =>'Santa María del Invierno',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[9][9352]=array(
    'nombre' =>'Santa María del Mercadillo',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[9][9353]=array(
    'nombre' =>'Santa María Rivarredonda',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[9][9354]=array(
    'nombre' =>'Santa Olalla de Bureba',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[9][9355]=array(
    'nombre' =>'Santibáñez de Esgueva',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[9][9356]=array(
    'nombre' =>'Santibáñez del Val',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[9][9358]=array(
    'nombre' =>'Santo Domingo de Silos',
    'habitantes' =>'287',
    'deuda'=>'0'
    );
$deuda[9][9360]=array(
    'nombre' =>'San Vicente del Valle',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[9][9361]=array(
    'nombre' =>'Sargentes de la Lora',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[9][9362]=array(
    'nombre' =>'Sarracín',
    'habitantes' =>'246',
    'deuda'=>'0'
    );
$deuda[9][9363]=array(
    'nombre' =>'Sasamón',
    'habitantes' =>'1073',
    'deuda'=>'0'
    );
$deuda[9][9365]=array(
    'nombre' =>'Sequera de Haza, La',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[9][9366]=array(
    'nombre' =>'Solarana',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[9][9368]=array(
    'nombre' =>'Sordillos',
    'habitantes' =>'24',
    'deuda'=>'0'
    );
$deuda[9][9369]=array(
    'nombre' =>'Sotillo de la Ribera',
    'habitantes' =>'520',
    'deuda'=>'0'
    );
$deuda[9][9372]=array(
    'nombre' =>'Sotragero',
    'habitantes' =>'286',
    'deuda'=>'0'
    );
$deuda[9][9373]=array(
    'nombre' =>'Sotresgudo',
    'habitantes' =>'482',
    'deuda'=>'0'
    );
$deuda[9][9374]=array(
    'nombre' =>'Susinos del Páramo',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[9][9375]=array(
    'nombre' =>'Tamarón',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[9][9377]=array(
    'nombre' =>'Tardajos',
    'habitantes' =>'803',
    'deuda'=>'49'
    );
$deuda[9][9378]=array(
    'nombre' =>'Tejada',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[9][9380]=array(
    'nombre' =>'Terradillos de Esgueva',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[9][9381]=array(
    'nombre' =>'Tinieblas de la Sierra',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[9][9382]=array(
    'nombre' =>'Tobar',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[9][9384]=array(
    'nombre' =>'Tordómar',
    'habitantes' =>'343',
    'deuda'=>'0'
    );
$deuda[9][9386]=array(
    'nombre' =>'Torrecilla del Monte',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[9][9387]=array(
    'nombre' =>'Torregalindo',
    'habitantes' =>'136',
    'deuda'=>'7'
    );
$deuda[9][9388]=array(
    'nombre' =>'Torrelara',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[9][9389]=array(
    'nombre' =>'Torrepadre',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[9][9390]=array(
    'nombre' =>'Torresandino',
    'habitantes' =>'691',
    'deuda'=>'0'
    );
$deuda[9][9391]=array(
    'nombre' =>'Tórtoles de Esgueva',
    'habitantes' =>'498',
    'deuda'=>'0'
    );
$deuda[9][9392]=array(
    'nombre' =>'Tosantos',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[9][9394]=array(
    'nombre' =>'Trespaderne',
    'habitantes' =>'877',
    'deuda'=>'331'
    );
$deuda[9][9395]=array(
    'nombre' =>'Tubilla del Agua',
    'habitantes' =>'154',
    'deuda'=>'0'
    );
$deuda[9][9396]=array(
    'nombre' =>'Tubilla del Lago',
    'habitantes' =>'150',
    'deuda'=>'0'
    );
$deuda[9][9398]=array(
    'nombre' =>'Úrbel del Castillo',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[9][9400]=array(
    'nombre' =>'Vadocondes',
    'habitantes' =>'382',
    'deuda'=>'48'
    );
$deuda[9][9403]=array(
    'nombre' =>'Valdeande',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[9][9405]=array(
    'nombre' =>'Valdezate',
    'habitantes' =>'140',
    'deuda'=>'0'
    );
$deuda[9][9406]=array(
    'nombre' =>'Valdorros',
    'habitantes' =>'332',
    'deuda'=>'0'
    );
$deuda[9][9407]=array(
    'nombre' =>'Valmala',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[9][9408]=array(
    'nombre' =>'Vallarta de Bureba',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[9][9409]=array(
    'nombre' =>'Valle de Manzanedo',
    'habitantes' =>'132',
    'deuda'=>'0'
    );
$deuda[9][9410]=array(
    'nombre' =>'Valle de Mena',
    'habitantes' =>'3826',
    'deuda'=>'1377'
    );
$deuda[9][9411]=array(
    'nombre' =>'Valle de Oca',
    'habitantes' =>'159',
    'deuda'=>'0'
    );
$deuda[9][9412]=array(
    'nombre' =>'Valle de Tobalina',
    'habitantes' =>'1026',
    'deuda'=>'0'
    );
$deuda[9][9413]=array(
    'nombre' =>'Valle de Valdebezana',
    'habitantes' =>'506',
    'deuda'=>'0'
    );
$deuda[9][9414]=array(
    'nombre' =>'Valle de Valdelaguna',
    'habitantes' =>'213',
    'deuda'=>'0'
    );
$deuda[9][9415]=array(
    'nombre' =>'Valle de Valdelucio',
    'habitantes' =>'309',
    'deuda'=>'0'
    );
$deuda[9][9416]=array(
    'nombre' =>'Valle de Zamanzas',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[9][9417]=array(
    'nombre' =>'Vallejera',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[9][9418]=array(
    'nombre' =>'Valles de Palenzuela',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[9][9419]=array(
    'nombre' =>'Valluércanes',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[9][9421]=array(
    'nombre' =>'Vid y Barrios, La',
    'habitantes' =>'274',
    'deuda'=>'0'
    );
$deuda[9][9422]=array(
    'nombre' =>'Vid de Bureba, La',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[9][9423]=array(
    'nombre' =>'Vileña',
    'habitantes' =>'29',
    'deuda'=>'60'
    );
$deuda[9][9424]=array(
    'nombre' =>'Viloria de Rioja',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[9][9425]=array(
    'nombre' =>'Vilviestre del Pinar',
    'habitantes' =>'616',
    'deuda'=>'0'
    );
$deuda[9][9427]=array(
    'nombre' =>'Villadiego',
    'habitantes' =>'1593',
    'deuda'=>'0'
    );
$deuda[9][9428]=array(
    'nombre' =>'Villaescusa de Roa',
    'habitantes' =>'113',
    'deuda'=>'0'
    );
$deuda[9][9429]=array(
    'nombre' =>'Villaescusa la Sombría',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[9][9430]=array(
    'nombre' =>'Villaespasa',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[9][9431]=array(
    'nombre' =>'Villafranca Montes de Oca',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[9][9432]=array(
    'nombre' =>'Villafruela',
    'habitantes' =>'209',
    'deuda'=>'0'
    );
$deuda[9][9433]=array(
    'nombre' =>'Villagalijo',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[9][9434]=array(
    'nombre' =>'Villagonzalo Pedernales',
    'habitantes' =>'1774',
    'deuda'=>'804'
    );
$deuda[9][9437]=array(
    'nombre' =>'Villahoz',
    'habitantes' =>'320',
    'deuda'=>'0'
    );
$deuda[9][9438]=array(
    'nombre' =>'Villalba de Duero',
    'habitantes' =>'683',
    'deuda'=>'0'
    );
$deuda[9][9439]=array(
    'nombre' =>'Villalbilla de Burgos',
    'habitantes' =>'1279',
    'deuda'=>'0'
    );
$deuda[9][9440]=array(
    'nombre' =>'Villalbilla de Gumiel',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[9][9441]=array(
    'nombre' =>'Villaldemiro',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[9][9442]=array(
    'nombre' =>'Villalmanzo',
    'habitantes' =>'450',
    'deuda'=>'43'
    );
$deuda[9][9443]=array(
    'nombre' =>'Villamayor de los Montes',
    'habitantes' =>'202',
    'deuda'=>'0'
    );
$deuda[9][9444]=array(
    'nombre' =>'Villamayor de Treviño',
    'habitantes' =>'76',
    'deuda'=>'0'
    );
$deuda[9][9445]=array(
    'nombre' =>'Villambistia',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[9][9446]=array(
    'nombre' =>'Villamedianilla',
    'habitantes' =>'12',
    'deuda'=>'0'
    );
$deuda[9][9447]=array(
    'nombre' =>'Villamiel de la Sierra',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[9][9448]=array(
    'nombre' =>'Villangómez',
    'habitantes' =>'239',
    'deuda'=>'34'
    );
$deuda[9][9449]=array(
    'nombre' =>'Villanueva de Argaño',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[9][9450]=array(
    'nombre' =>'Villanueva de Carazo',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[9][9451]=array(
    'nombre' =>'Villanueva de Gumiel',
    'habitantes' =>'284',
    'deuda'=>'0'
    );
$deuda[9][9454]=array(
    'nombre' =>'Villanueva de Teba',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[9][9455]=array(
    'nombre' =>'Villaquirán de la Puebla',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[9][9456]=array(
    'nombre' =>'Villaquirán de los Infantes',
    'habitantes' =>'146',
    'deuda'=>'0'
    );
$deuda[9][9458]=array(
    'nombre' =>'Villariezo',
    'habitantes' =>'612',
    'deuda'=>'0'
    );
$deuda[9][9460]=array(
    'nombre' =>'Villasandino',
    'habitantes' =>'192',
    'deuda'=>'0'
    );
$deuda[9][9463]=array(
    'nombre' =>'Villasur de Herreros',
    'habitantes' =>'265',
    'deuda'=>'0'
    );
$deuda[9][9464]=array(
    'nombre' =>'Villatuelda',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[9][9466]=array(
    'nombre' =>'Villaverde del Monte',
    'habitantes' =>'134',
    'deuda'=>'0'
    );
$deuda[9][9467]=array(
    'nombre' =>'Villaverde-Mogina',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[9][9471]=array(
    'nombre' =>'Villayerno Morquillas',
    'habitantes' =>'207',
    'deuda'=>'0'
    );
$deuda[9][9472]=array(
    'nombre' =>'Villazopeque',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[9][9473]=array(
    'nombre' =>'Villegas',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[9][9476]=array(
    'nombre' =>'Villoruebo',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[9][9478]=array(
    'nombre' =>'Vizcaínos',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[9][9480]=array(
    'nombre' =>'Zael',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[9][9482]=array(
    'nombre' =>'Zarzosa de Río Pisuerga',
    'habitantes' =>'31',
    'deuda'=>'26'
    );
$deuda[9][9483]=array(
    'nombre' =>'Zazuar',
    'habitantes' =>'242',
    'deuda'=>'0'
    );
$deuda[9][9485]=array(
    'nombre' =>'Zuñeda',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[9][9901]=array(
    'nombre' =>'Quintanilla del Agua y Tordueles',
    'habitantes' =>'419',
    'deuda'=>'0'
    );
$deuda[9][9902]=array(
    'nombre' =>'Valle de Santibáñez',
    'habitantes' =>'505',
    'deuda'=>'0'
    );
$deuda[9][9903]=array(
    'nombre' =>'Villarcayo de Merindad de Castilla la Vieja',
    'habitantes' =>'4372',
    'deuda'=>'1177'
    );
$deuda[9][9904]=array(
    'nombre' =>'Valle de las Navas',
    'habitantes' =>'533',
    'deuda'=>'0'
    );
$deuda[9][9905]=array(
    'nombre' =>'Valle de Sedano',
    'habitantes' =>'472',
    'deuda'=>'0'
    );
$deuda[9][9906]=array(
    'nombre' =>'Merindad de Río Ubierna',
    'habitantes' =>'1456',
    'deuda'=>'85'
    );
$deuda[9][9907]=array(
    'nombre' =>'Alfoz de Quintanadueñas',
    'habitantes' =>'2019',
    'deuda'=>'293'
    );
$deuda[9][9908]=array(
    'nombre' =>'Valle de Losa',
    'habitantes' =>'538',
    'deuda'=>'0'
    );
$deuda[10][10001]=array(
    'nombre' =>'Abadía',
    'habitantes' =>'336',
    'deuda'=>'0'
    );
$deuda[10][10002]=array(
    'nombre' =>'Abertura',
    'habitantes' =>'429',
    'deuda'=>'0'
    );
$deuda[10][10003]=array(
    'nombre' =>'Acebo',
    'habitantes' =>'569',
    'deuda'=>'167'
    );
$deuda[10][10004]=array(
    'nombre' =>'Acehúche',
    'habitantes' =>'822',
    'deuda'=>'0'
    );
$deuda[10][10005]=array(
    'nombre' =>'Aceituna',
    'habitantes' =>'623',
    'deuda'=>'0'
    );
$deuda[10][10006]=array(
    'nombre' =>'Ahigal',
    'habitantes' =>'1421',
    'deuda'=>'0'
    );
$deuda[10][10007]=array(
    'nombre' =>'Albalá',
    'habitantes' =>'730',
    'deuda'=>'0'
    );
$deuda[10][10008]=array(
    'nombre' =>'Alcántara',
    'habitantes' =>'1571',
    'deuda'=>'0'
    );
$deuda[10][10009]=array(
    'nombre' =>'Alcollarín',
    'habitantes' =>'256',
    'deuda'=>'229'
    );
$deuda[10][10010]=array(
    'nombre' =>'Alcuéscar',
    'habitantes' =>'2759',
    'deuda'=>'420'
    );
$deuda[10][10011]=array(
    'nombre' =>'Aldeacentenera',
    'habitantes' =>'646',
    'deuda'=>'287'
    );
$deuda[10][10012]=array(
    'nombre' =>'Aldea del Cano',
    'habitantes' =>'667',
    'deuda'=>'0'
    );
$deuda[10][10013]=array(
    'nombre' =>'Aldea del Obispo, La',
    'habitantes' =>'331',
    'deuda'=>'40'
    );
$deuda[10][10014]=array(
    'nombre' =>'Aldeanueva de la Vera',
    'habitantes' =>'2155',
    'deuda'=>'0'
    );
$deuda[10][10015]=array(
    'nombre' =>'Aldeanueva del Camino',
    'habitantes' =>'791',
    'deuda'=>'0'
    );
$deuda[10][10016]=array(
    'nombre' =>'Aldehuela de Jerte',
    'habitantes' =>'367',
    'deuda'=>'78'
    );
$deuda[10][10017]=array(
    'nombre' =>'Alía',
    'habitantes' =>'936',
    'deuda'=>'0'
    );
$deuda[10][10018]=array(
    'nombre' =>'Aliseda',
    'habitantes' =>'1957',
    'deuda'=>'0'
    );
$deuda[10][10019]=array(
    'nombre' =>'Almaraz',
    'habitantes' =>'1669',
    'deuda'=>'950'
    );
$deuda[10][10020]=array(
    'nombre' =>'Almoharín',
    'habitantes' =>'1933',
    'deuda'=>'129'
    );
$deuda[10][10021]=array(
    'nombre' =>'Arroyo de la Luz',
    'habitantes' =>'6042',
    'deuda'=>'0'
    );
$deuda[10][10022]=array(
    'nombre' =>'Arroyomolinos de la Vera',
    'habitantes' =>'471',
    'deuda'=>'0'
    );
$deuda[10][10023]=array(
    'nombre' =>'Arroyomolinos',
    'habitantes' =>'787',
    'deuda'=>'0'
    );
$deuda[10][10024]=array(
    'nombre' =>'Baños de Montemayor',
    'habitantes' =>'774',
    'deuda'=>'1268'
    );
$deuda[10][10025]=array(
    'nombre' =>'Barrado',
    'habitantes' =>'434',
    'deuda'=>'0'
    );
$deuda[10][10026]=array(
    'nombre' =>'Belvís de Monroy',
    'habitantes' =>'650',
    'deuda'=>'0'
    );
$deuda[10][10027]=array(
    'nombre' =>'Benquerencia',
    'habitantes' =>'80',
    'deuda'=>'15'
    );
$deuda[10][10028]=array(
    'nombre' =>'Berrocalejo',
    'habitantes' =>'125',
    'deuda'=>'0'
    );
$deuda[10][10029]=array(
    'nombre' =>'Berzocana',
    'habitantes' =>'461',
    'deuda'=>'0'
    );
$deuda[10][10030]=array(
    'nombre' =>'Bohonal de Ibor',
    'habitantes' =>'499',
    'deuda'=>'0'
    );
$deuda[10][10031]=array(
    'nombre' =>'Botija',
    'habitantes' =>'189',
    'deuda'=>'109'
    );
$deuda[10][10032]=array(
    'nombre' =>'Brozas',
    'habitantes' =>'1953',
    'deuda'=>'315'
    );
$deuda[10][10033]=array(
    'nombre' =>'Cabañas del Castillo',
    'habitantes' =>'470',
    'deuda'=>'0'
    );
$deuda[10][10034]=array(
    'nombre' =>'Cabezabellosa',
    'habitantes' =>'381',
    'deuda'=>'0'
    );
$deuda[10][10035]=array(
    'nombre' =>'Cabezuela del Valle',
    'habitantes' =>'2267',
    'deuda'=>'70'
    );
$deuda[10][10036]=array(
    'nombre' =>'Cabrero',
    'habitantes' =>'356',
    'deuda'=>'0'
    );
$deuda[10][10037]=array(
    'nombre' =>'Cáceres',
    'habitantes' =>'95617',
    'deuda'=>'20459'
    );
$deuda[10][10038]=array(
    'nombre' =>'Cachorrilla',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[10][10039]=array(
    'nombre' =>'Cadalso',
    'habitantes' =>'468',
    'deuda'=>'0'
    );
$deuda[10][10040]=array(
    'nombre' =>'Calzadilla',
    'habitantes' =>'501',
    'deuda'=>'0'
    );
$deuda[10][10041]=array(
    'nombre' =>'Caminomorisco',
    'habitantes' =>'1268',
    'deuda'=>'208'
    );
$deuda[10][10042]=array(
    'nombre' =>'Campillo de Deleitosa',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[10][10043]=array(
    'nombre' =>'Campo Lugar',
    'habitantes' =>'916',
    'deuda'=>'146'
    );
$deuda[10][10044]=array(
    'nombre' =>'Cañamero',
    'habitantes' =>'1709',
    'deuda'=>'700'
    );
$deuda[10][10045]=array(
    'nombre' =>'Cañaveral',
    'habitantes' =>'1081',
    'deuda'=>'1469'
    );
$deuda[10][10046]=array(
    'nombre' =>'Carbajo',
    'habitantes' =>'217',
    'deuda'=>'31'
    );
$deuda[10][10047]=array(
    'nombre' =>'Carcaboso',
    'habitantes' =>'1136',
    'deuda'=>'294'
    );
$deuda[10][10048]=array(
    'nombre' =>'Carrascalejo',
    'habitantes' =>'257',
    'deuda'=>'0'
    );
$deuda[10][10049]=array(
    'nombre' =>'Casar de Cáceres',
    'habitantes' =>'4664',
    'deuda'=>'0'
    );
$deuda[10][10050]=array(
    'nombre' =>'Casar de Palomero',
    'habitantes' =>'1245',
    'deuda'=>'693'
    );
$deuda[10][10051]=array(
    'nombre' =>'Casares de las Hurdes',
    'habitantes' =>'449',
    'deuda'=>'90'
    );
$deuda[10][10052]=array(
    'nombre' =>'Casas de Don Antonio',
    'habitantes' =>'204',
    'deuda'=>'56'
    );
$deuda[10][10053]=array(
    'nombre' =>'Casas de Don Gómez',
    'habitantes' =>'301',
    'deuda'=>'8'
    );
$deuda[10][10054]=array(
    'nombre' =>'Casas del Castañar',
    'habitantes' =>'604',
    'deuda'=>'0'
    );
$deuda[10][10055]=array(
    'nombre' =>'Casas del Monte',
    'habitantes' =>'828',
    'deuda'=>'176'
    );
$deuda[10][10056]=array(
    'nombre' =>'Casas de Millán',
    'habitantes' =>'653',
    'deuda'=>'182'
    );
$deuda[10][10057]=array(
    'nombre' =>'Casas de Miravete',
    'habitantes' =>'157',
    'deuda'=>'158'
    );
$deuda[10][10058]=array(
    'nombre' =>'Casatejada',
    'habitantes' =>'1428',
    'deuda'=>'0'
    );
$deuda[10][10059]=array(
    'nombre' =>'Casillas de Coria',
    'habitantes' =>'416',
    'deuda'=>'0'
    );
$deuda[10][10060]=array(
    'nombre' =>'Castañar de Ibor',
    'habitantes' =>'1112',
    'deuda'=>'0'
    );
$deuda[10][10061]=array(
    'nombre' =>'Ceclavín',
    'habitantes' =>'1943',
    'deuda'=>'0'
    );
$deuda[10][10062]=array(
    'nombre' =>'Cedillo',
    'habitantes' =>'490',
    'deuda'=>'0'
    );
$deuda[10][10063]=array(
    'nombre' =>'Cerezo',
    'habitantes' =>'186',
    'deuda'=>'0'
    );
$deuda[10][10064]=array(
    'nombre' =>'Cilleros',
    'habitantes' =>'1757',
    'deuda'=>'0'
    );
$deuda[10][10065]=array(
    'nombre' =>'Collado de la Vera',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[10][10066]=array(
    'nombre' =>'Conquista de la Sierra',
    'habitantes' =>'191',
    'deuda'=>'136'
    );
$deuda[10][10067]=array(
    'nombre' =>'Coria',
    'habitantes' =>'12930',
    'deuda'=>'5657'
    );
$deuda[10][10068]=array(
    'nombre' =>'Cuacos de Yuste',
    'habitantes' =>'865',
    'deuda'=>'0'
    );
$deuda[10][10069]=array(
    'nombre' =>'Cumbre, La',
    'habitantes' =>'914',
    'deuda'=>'0'
    );
$deuda[10][10070]=array(
    'nombre' =>'Deleitosa',
    'habitantes' =>'775',
    'deuda'=>'0'
    );
$deuda[10][10071]=array(
    'nombre' =>'Descargamaría',
    'habitantes' =>'147',
    'deuda'=>'0'
    );
$deuda[10][10072]=array(
    'nombre' =>'Eljas',
    'habitantes' =>'941',
    'deuda'=>'0'
    );
$deuda[10][10073]=array(
    'nombre' =>'Escurial',
    'habitantes' =>'755',
    'deuda'=>'0'
    );
$deuda[10][10075]=array(
    'nombre' =>'Fresnedoso de Ibor',
    'habitantes' =>'293',
    'deuda'=>'61'
    );
$deuda[10][10076]=array(
    'nombre' =>'Galisteo',
    'habitantes' =>'992',
    'deuda'=>'102'
    );
$deuda[10][10077]=array(
    'nombre' =>'Garciaz',
    'habitantes' =>'804',
    'deuda'=>'0'
    );
$deuda[10][10078]=array(
    'nombre' =>'Garganta, La',
    'habitantes' =>'446',
    'deuda'=>'38'
    );
$deuda[10][10079]=array(
    'nombre' =>'Garganta la Olla',
    'habitantes' =>'1010',
    'deuda'=>'0'
    );
$deuda[10][10080]=array(
    'nombre' =>'Gargantilla',
    'habitantes' =>'409',
    'deuda'=>'95'
    );
$deuda[10][10081]=array(
    'nombre' =>'Gargüera',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[10][10082]=array(
    'nombre' =>'Garrovillas de Alconétar',
    'habitantes' =>'2205',
    'deuda'=>'0'
    );
$deuda[10][10083]=array(
    'nombre' =>'Garvín',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[10][10084]=array(
    'nombre' =>'Gata',
    'habitantes' =>'1593',
    'deuda'=>'0'
    );
$deuda[10][10085]=array(
    'nombre' =>'Gordo, El',
    'habitantes' =>'394',
    'deuda'=>'0'
    );
$deuda[10][10086]=array(
    'nombre' =>'Granja, La',
    'habitantes' =>'357',
    'deuda'=>'0'
    );
$deuda[10][10087]=array(
    'nombre' =>'Guadalupe',
    'habitantes' =>'2013',
    'deuda'=>'0'
    );
$deuda[10][10088]=array(
    'nombre' =>'Guijo de Coria',
    'habitantes' =>'216',
    'deuda'=>'0'
    );
$deuda[10][10089]=array(
    'nombre' =>'Guijo de Galisteo',
    'habitantes' =>'1576',
    'deuda'=>'0'
    );
$deuda[10][10090]=array(
    'nombre' =>'Guijo de Granadilla',
    'habitantes' =>'581',
    'deuda'=>'0'
    );
$deuda[10][10091]=array(
    'nombre' =>'Guijo de Santa Bárbara',
    'habitantes' =>'431',
    'deuda'=>'141'
    );
$deuda[10][10092]=array(
    'nombre' =>'Herguijuela',
    'habitantes' =>'336',
    'deuda'=>'236'
    );
$deuda[10][10093]=array(
    'nombre' =>'Hernán-Pérez',
    'habitantes' =>'485',
    'deuda'=>'0'
    );
$deuda[10][10094]=array(
    'nombre' =>'Herrera de Alcántara',
    'habitantes' =>'270',
    'deuda'=>'0'
    );
$deuda[10][10095]=array(
    'nombre' =>'Herreruela',
    'habitantes' =>'375',
    'deuda'=>'177'
    );
$deuda[10][10096]=array(
    'nombre' =>'Hervás',
    'habitantes' =>'4194',
    'deuda'=>'522'
    );
$deuda[10][10097]=array(
    'nombre' =>'Higuera',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[10][10098]=array(
    'nombre' =>'Hinojal',
    'habitantes' =>'417',
    'deuda'=>'18'
    );
$deuda[10][10099]=array(
    'nombre' =>'Holguera',
    'habitantes' =>'692',
    'deuda'=>'29'
    );
$deuda[10][10100]=array(
    'nombre' =>'Hoyos',
    'habitantes' =>'934',
    'deuda'=>'144'
    );
$deuda[10][10101]=array(
    'nombre' =>'Huélaga',
    'habitantes' =>'220',
    'deuda'=>'0'
    );
$deuda[10][10102]=array(
    'nombre' =>'Ibahernando',
    'habitantes' =>'554',
    'deuda'=>'587'
    );
$deuda[10][10103]=array(
    'nombre' =>'Jaraicejo',
    'habitantes' =>'510',
    'deuda'=>'0'
    );
$deuda[10][10104]=array(
    'nombre' =>'Jaraíz de la Vera',
    'habitantes' =>'6481',
    'deuda'=>'1268'
    );
$deuda[10][10105]=array(
    'nombre' =>'Jarandilla de la Vera',
    'habitantes' =>'2955',
    'deuda'=>'466'
    );
$deuda[10][10106]=array(
    'nombre' =>'Jarilla',
    'habitantes' =>'146',
    'deuda'=>'0'
    );
$deuda[10][10107]=array(
    'nombre' =>'Jerte',
    'habitantes' =>'1282',
    'deuda'=>'76'
    );
$deuda[10][10108]=array(
    'nombre' =>'Ladrillar',
    'habitantes' =>'222',
    'deuda'=>'20'
    );
$deuda[10][10109]=array(
    'nombre' =>'Logrosán',
    'habitantes' =>'2068',
    'deuda'=>'1807'
    );
$deuda[10][10110]=array(
    'nombre' =>'Losar de la Vera',
    'habitantes' =>'2833',
    'deuda'=>'265'
    );
$deuda[10][10111]=array(
    'nombre' =>'Madrigal de la Vera',
    'habitantes' =>'1705',
    'deuda'=>'0'
    );
$deuda[10][10112]=array(
    'nombre' =>'Madrigalejo',
    'habitantes' =>'1855',
    'deuda'=>'298'
    );
$deuda[10][10113]=array(
    'nombre' =>'Madroñera',
    'habitantes' =>'2695',
    'deuda'=>'4486'
    );
$deuda[10][10114]=array(
    'nombre' =>'Majadas',
    'habitantes' =>'1343',
    'deuda'=>'0'
    );
$deuda[10][10115]=array(
    'nombre' =>'Malpartida de Cáceres',
    'habitantes' =>'4337',
    'deuda'=>'599'
    );
$deuda[10][10116]=array(
    'nombre' =>'Malpartida de Plasencia',
    'habitantes' =>'4714',
    'deuda'=>'0'
    );
$deuda[10][10117]=array(
    'nombre' =>'Marchagaz',
    'habitantes' =>'220',
    'deuda'=>'40'
    );
$deuda[10][10118]=array(
    'nombre' =>'Mata de Alcántara',
    'habitantes' =>'320',
    'deuda'=>'385'
    );
$deuda[10][10119]=array(
    'nombre' =>'Membrío',
    'habitantes' =>'695',
    'deuda'=>'414'
    );
$deuda[10][10120]=array(
    'nombre' =>'Mesas de Ibor',
    'habitantes' =>'187',
    'deuda'=>'0'
    );
$deuda[10][10121]=array(
    'nombre' =>'Miajadas',
    'habitantes' =>'9944',
    'deuda'=>'0'
    );
$deuda[10][10122]=array(
    'nombre' =>'Millanes',
    'habitantes' =>'257',
    'deuda'=>'139'
    );
$deuda[10][10123]=array(
    'nombre' =>'Mirabel',
    'habitantes' =>'687',
    'deuda'=>'0'
    );
$deuda[10][10124]=array(
    'nombre' =>'Mohedas de Granadilla',
    'habitantes' =>'849',
    'deuda'=>'32'
    );
$deuda[10][10125]=array(
    'nombre' =>'Monroy',
    'habitantes' =>'1037',
    'deuda'=>'0'
    );
$deuda[10][10126]=array(
    'nombre' =>'Montánchez',
    'habitantes' =>'1828',
    'deuda'=>'0'
    );
$deuda[10][10127]=array(
    'nombre' =>'Montehermoso',
    'habitantes' =>'5844',
    'deuda'=>'0'
    );
$deuda[10][10128]=array(
    'nombre' =>'Moraleja',
    'habitantes' =>'6963',
    'deuda'=>'3613'
    );
$deuda[10][10129]=array(
    'nombre' =>'Morcillo',
    'habitantes' =>'407',
    'deuda'=>'0'
    );
$deuda[10][10130]=array(
    'nombre' =>'Navaconcejo',
    'habitantes' =>'2030',
    'deuda'=>'0'
    );
$deuda[10][10131]=array(
    'nombre' =>'Navalmoral de la Mata',
    'habitantes' =>'17156',
    'deuda'=>'1107'
    );
$deuda[10][10132]=array(
    'nombre' =>'Navalvillar de Ibor',
    'habitantes' =>'447',
    'deuda'=>'207'
    );
$deuda[10][10133]=array(
    'nombre' =>'Navas del Madroño',
    'habitantes' =>'1372',
    'deuda'=>'196'
    );
$deuda[10][10134]=array(
    'nombre' =>'Navezuelas',
    'habitantes' =>'664',
    'deuda'=>'204'
    );
$deuda[10][10135]=array(
    'nombre' =>'Nuñomoral',
    'habitantes' =>'1392',
    'deuda'=>'313'
    );
$deuda[10][10136]=array(
    'nombre' =>'Oliva de Plasencia',
    'habitantes' =>'336',
    'deuda'=>'0'
    );
$deuda[10][10137]=array(
    'nombre' =>'Palomero',
    'habitantes' =>'378',
    'deuda'=>'0'
    );
$deuda[10][10138]=array(
    'nombre' =>'Pasarón de la Vera',
    'habitantes' =>'655',
    'deuda'=>'0'
    );
$deuda[10][10139]=array(
    'nombre' =>'Pedroso de Acim',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[10][10140]=array(
    'nombre' =>'Peraleda de la Mata',
    'habitantes' =>'1403',
    'deuda'=>'0'
    );
$deuda[10][10141]=array(
    'nombre' =>'Peraleda de San Román',
    'habitantes' =>'306',
    'deuda'=>'131'
    );
$deuda[10][10142]=array(
    'nombre' =>'Perales del Puerto',
    'habitantes' =>'970',
    'deuda'=>'0'
    );
$deuda[10][10143]=array(
    'nombre' =>'Pescueza',
    'habitantes' =>'165',
    'deuda'=>'0'
    );
$deuda[10][10144]=array(
    'nombre' =>'Pesga, La',
    'habitantes' =>'1130',
    'deuda'=>'0'
    );
$deuda[10][10145]=array(
    'nombre' =>'Piedras Albas',
    'habitantes' =>'156',
    'deuda'=>'0'
    );
$deuda[10][10146]=array(
    'nombre' =>'Pinofranqueado',
    'habitantes' =>'1762',
    'deuda'=>'67'
    );
$deuda[10][10147]=array(
    'nombre' =>'Piornal',
    'habitantes' =>'1555',
    'deuda'=>'571'
    );
$deuda[10][10148]=array(
    'nombre' =>'Plasencia',
    'habitantes' =>'40755',
    'deuda'=>'41522'
    );
$deuda[10][10149]=array(
    'nombre' =>'Plasenzuela',
    'habitantes' =>'501',
    'deuda'=>'608'
    );
$deuda[10][10150]=array(
    'nombre' =>'Portaje',
    'habitantes' =>'397',
    'deuda'=>'45'
    );
$deuda[10][10151]=array(
    'nombre' =>'Portezuelo',
    'habitantes' =>'246',
    'deuda'=>'0'
    );
$deuda[10][10152]=array(
    'nombre' =>'Pozuelo de Zarzón',
    'habitantes' =>'483',
    'deuda'=>'0'
    );
$deuda[10][10153]=array(
    'nombre' =>'Puerto de Santa Cruz',
    'habitantes' =>'363',
    'deuda'=>'170'
    );
$deuda[10][10154]=array(
    'nombre' =>'Rebollar',
    'habitantes' =>'219',
    'deuda'=>'0'
    );
$deuda[10][10155]=array(
    'nombre' =>'Riolobos',
    'habitantes' =>'1310',
    'deuda'=>'0'
    );
$deuda[10][10156]=array(
    'nombre' =>'Robledillo de Gata',
    'habitantes' =>'99',
    'deuda'=>'47'
    );
$deuda[10][10157]=array(
    'nombre' =>'Robledillo de la Vera',
    'habitantes' =>'301',
    'deuda'=>'0'
    );
$deuda[10][10158]=array(
    'nombre' =>'Robledillo de Trujillo',
    'habitantes' =>'372',
    'deuda'=>'0'
    );
$deuda[10][10159]=array(
    'nombre' =>'Robledollano',
    'habitantes' =>'327',
    'deuda'=>'0'
    );
$deuda[10][10160]=array(
    'nombre' =>'Romangordo',
    'habitantes' =>'263',
    'deuda'=>'0'
    );
$deuda[10][10161]=array(
    'nombre' =>'Ruanes',
    'habitantes' =>'75',
    'deuda'=>'53'
    );
$deuda[10][10162]=array(
    'nombre' =>'Salorino',
    'habitantes' =>'630',
    'deuda'=>'627'
    );
$deuda[10][10163]=array(
    'nombre' =>'Salvatierra de Santiago',
    'habitantes' =>'239',
    'deuda'=>'88'
    );
$deuda[10][10164]=array(
    'nombre' =>'San Martín de Trevejo',
    'habitantes' =>'851',
    'deuda'=>'0'
    );
$deuda[10][10165]=array(
    'nombre' =>'Santa Ana',
    'habitantes' =>'276',
    'deuda'=>'56'
    );
$deuda[10][10166]=array(
    'nombre' =>'Santa Cruz de la Sierra',
    'habitantes' =>'329',
    'deuda'=>'0'
    );
$deuda[10][10167]=array(
    'nombre' =>'Santa Cruz de Paniagua',
    'habitantes' =>'326',
    'deuda'=>'0'
    );
$deuda[10][10168]=array(
    'nombre' =>'Santa Marta de Magasca',
    'habitantes' =>'295',
    'deuda'=>'836'
    );
$deuda[10][10169]=array(
    'nombre' =>'Santiago de Alcántara',
    'habitantes' =>'583',
    'deuda'=>'477'
    );
$deuda[10][10170]=array(
    'nombre' =>'Santiago del Campo',
    'habitantes' =>'279',
    'deuda'=>'0'
    );
$deuda[10][10171]=array(
    'nombre' =>'Santibáñez el Alto',
    'habitantes' =>'349',
    'deuda'=>'0'
    );
$deuda[10][10172]=array(
    'nombre' =>'Santibáñez el Bajo',
    'habitantes' =>'738',
    'deuda'=>'0'
    );
$deuda[10][10173]=array(
    'nombre' =>'Saucedilla',
    'habitantes' =>'877',
    'deuda'=>'0'
    );
$deuda[10][10174]=array(
    'nombre' =>'Segura de Toro',
    'habitantes' =>'189',
    'deuda'=>'0'
    );
$deuda[10][10175]=array(
    'nombre' =>'Serradilla',
    'habitantes' =>'1637',
    'deuda'=>'14'
    );
$deuda[10][10176]=array(
    'nombre' =>'Serrejón',
    'habitantes' =>'443',
    'deuda'=>'0'
    );
$deuda[10][10177]=array(
    'nombre' =>'Sierra de Fuentes',
    'habitantes' =>'2040',
    'deuda'=>'807'
    );
$deuda[10][10178]=array(
    'nombre' =>'Talaván',
    'habitantes' =>'887',
    'deuda'=>'26'
    );
$deuda[10][10179]=array(
    'nombre' =>'Talaveruela de la Vera',
    'habitantes' =>'345',
    'deuda'=>'0'
    );
$deuda[10][10180]=array(
    'nombre' =>'Talayuela',
    'habitantes' =>'8240',
    'deuda'=>'3574'
    );
$deuda[10][10181]=array(
    'nombre' =>'Tejeda de Tiétar',
    'habitantes' =>'837',
    'deuda'=>'35'
    );
$deuda[10][10182]=array(
    'nombre' =>'Toril',
    'habitantes' =>'170',
    'deuda'=>'0'
    );
$deuda[10][10183]=array(
    'nombre' =>'Tornavacas',
    'habitantes' =>'1144',
    'deuda'=>'341'
    );
$deuda[10][10184]=array(
    'nombre' =>'Torno, El',
    'habitantes' =>'956',
    'deuda'=>'0'
    );
$deuda[10][10185]=array(
    'nombre' =>'Torrecilla de los Ángeles',
    'habitantes' =>'653',
    'deuda'=>'8'
    );
$deuda[10][10186]=array(
    'nombre' =>'Torrecillas de la Tiesa',
    'habitantes' =>'1134',
    'deuda'=>'0'
    );
$deuda[10][10187]=array(
    'nombre' =>'Torre de Don Miguel',
    'habitantes' =>'503',
    'deuda'=>'0'
    );
$deuda[10][10188]=array(
    'nombre' =>'Torre de Santa María',
    'habitantes' =>'582',
    'deuda'=>'13'
    );
$deuda[10][10189]=array(
    'nombre' =>'Torrejoncillo',
    'habitantes' =>'3184',
    'deuda'=>'206'
    );
$deuda[10][10190]=array(
    'nombre' =>'Torrejón el Rubio',
    'habitantes' =>'628',
    'deuda'=>'54'
    );
$deuda[10][10191]=array(
    'nombre' =>'Torremenga',
    'habitantes' =>'629',
    'deuda'=>'0'
    );
$deuda[10][10192]=array(
    'nombre' =>'Torremocha',
    'habitantes' =>'915',
    'deuda'=>'84'
    );
$deuda[10][10193]=array(
    'nombre' =>'Torreorgaz',
    'habitantes' =>'1695',
    'deuda'=>'21'
    );
$deuda[10][10194]=array(
    'nombre' =>'Torrequemada',
    'habitantes' =>'601',
    'deuda'=>'82'
    );
$deuda[10][10195]=array(
    'nombre' =>'Trujillo',
    'habitantes' =>'9510',
    'deuda'=>'2598'
    );
$deuda[10][10196]=array(
    'nombre' =>'Valdastillas',
    'habitantes' =>'334',
    'deuda'=>'9'
    );
$deuda[10][10197]=array(
    'nombre' =>'Valdecañas de Tajo',
    'habitantes' =>'137',
    'deuda'=>'299'
    );
$deuda[10][10198]=array(
    'nombre' =>'Valdefuentes',
    'habitantes' =>'1293',
    'deuda'=>'268'
    );
$deuda[10][10199]=array(
    'nombre' =>'Valdehúncar',
    'habitantes' =>'187',
    'deuda'=>'16'
    );
$deuda[10][10200]=array(
    'nombre' =>'Valdelacasa de Tajo',
    'habitantes' =>'455',
    'deuda'=>'0'
    );
$deuda[10][10201]=array(
    'nombre' =>'Valdemorales',
    'habitantes' =>'198',
    'deuda'=>'89'
    );
$deuda[10][10202]=array(
    'nombre' =>'Valdeobispo',
    'habitantes' =>'701',
    'deuda'=>'50'
    );
$deuda[10][10203]=array(
    'nombre' =>'Valencia de Alcántara',
    'habitantes' =>'5699',
    'deuda'=>'1245'
    );
$deuda[10][10204]=array(
    'nombre' =>'Valverde de la Vera',
    'habitantes' =>'529',
    'deuda'=>'0'
    );
$deuda[10][10205]=array(
    'nombre' =>'Valverde del Fresno',
    'habitantes' =>'2422',
    'deuda'=>'0'
    );
$deuda[10][10206]=array(
    'nombre' =>'Viandar de la Vera',
    'habitantes' =>'255',
    'deuda'=>'0'
    );
$deuda[10][10207]=array(
    'nombre' =>'Villa del Campo',
    'habitantes' =>'515',
    'deuda'=>'0'
    );
$deuda[10][10208]=array(
    'nombre' =>'Villa del Rey',
    'habitantes' =>'130',
    'deuda'=>'0'
    );
$deuda[10][10209]=array(
    'nombre' =>'Villamesías',
    'habitantes' =>'289',
    'deuda'=>'360'
    );
$deuda[10][10210]=array(
    'nombre' =>'Villamiel',
    'habitantes' =>'518',
    'deuda'=>'408'
    );
$deuda[10][10211]=array(
    'nombre' =>'Villanueva de la Sierra',
    'habitantes' =>'460',
    'deuda'=>'48'
    );
$deuda[10][10212]=array(
    'nombre' =>'Villanueva de la Vera',
    'habitantes' =>'2122',
    'deuda'=>'1037'
    );
$deuda[10][10213]=array(
    'nombre' =>'Villar del Pedroso',
    'habitantes' =>'636',
    'deuda'=>'0'
    );
$deuda[10][10214]=array(
    'nombre' =>'Villar de Plasencia',
    'habitantes' =>'223',
    'deuda'=>'0'
    );
$deuda[10][10215]=array(
    'nombre' =>'Villasbuenas de Gata',
    'habitantes' =>'388',
    'deuda'=>'0'
    );
$deuda[10][10216]=array(
    'nombre' =>'Zarza de Granadilla',
    'habitantes' =>'1843',
    'deuda'=>'0'
    );
$deuda[10][10217]=array(
    'nombre' =>'Zarza de Montánchez',
    'habitantes' =>'594',
    'deuda'=>'0'
    );
$deuda[10][10218]=array(
    'nombre' =>'Zarza la Mayor',
    'habitantes' =>'1359',
    'deuda'=>'0'
    );
$deuda[10][10219]=array(
    'nombre' =>'Zorita',
    'habitantes' =>'1502',
    'deuda'=>'210'
    );
$deuda[10][10901]=array(
    'nombre' =>'Rosalejo',
    'habitantes' =>'1495',
    'deuda'=>'51'
    );
$deuda[10][10902]=array(
    'nombre' =>'Vegaviana',
    'habitantes' =>'863',
    'deuda'=>'65'
    );
$deuda[10][10903]=array(
    'nombre' =>'Alagón del Río',
    'habitantes' =>'923',
    'deuda'=>'6'
    );
$deuda[10][10904]=array(
    'nombre' =>'Tiétar',
    'habitantes' =>'940',
    'deuda'=>'50'
    );
$deuda[11][11001]=array(
    'nombre' =>'Alcalá de los Gazules',
    'habitantes' =>'5326',
    'deuda'=>'4762'
    );
$deuda[11][11002]=array(
    'nombre' =>'Alcalá del Valle',
    'habitantes' =>'5224',
    'deuda'=>'120'
    );
$deuda[11][11003]=array(
    'nombre' =>'Algar',
    'habitantes' =>'1448',
    'deuda'=>'534'
    );
$deuda[11][11004]=array(
    'nombre' =>'Algeciras',
    'habitantes' =>'118920',
    'deuda'=>'182466'
    );
$deuda[11][11005]=array(
    'nombre' =>'Algodonales',
    'habitantes' =>'5649',
    'deuda'=>'6529'
    );
$deuda[11][11006]=array(
    'nombre' =>'Arcos de la Frontera',
    'habitantes' =>'31193',
    'deuda'=>'26101'
    );
$deuda[11][11007]=array(
    'nombre' =>'Barbate',
    'habitantes' =>'22808',
    'deuda'=>'23045'
    );
$deuda[11][11008]=array(
    'nombre' =>'Barrios, Los',
    'habitantes' =>'23167',
    'deuda'=>'133551'
    );
$deuda[11][11009]=array(
    'nombre' =>'Benaocaz',
    'habitantes' =>'720',
    'deuda'=>'40'
    );
$deuda[11][11010]=array(
    'nombre' =>'Bornos',
    'habitantes' =>'7934',
    'deuda'=>'2262'
    );
$deuda[11][11011]=array(
    'nombre' =>'Bosque, El',
    'habitantes' =>'2067',
    'deuda'=>'1127'
    );
$deuda[11][11012]=array(
    'nombre' =>'Cádiz',
    'habitantes' =>'120468',
    'deuda'=>'197214'
    );
$deuda[11][11013]=array(
    'nombre' =>'Castellar de la Frontera',
    'habitantes' =>'3045',
    'deuda'=>'527'
    );
$deuda[11][11014]=array(
    'nombre' =>'Conil de la Frontera',
    'habitantes' =>'22136',
    'deuda'=>'19940'
    );
$deuda[11][11015]=array(
    'nombre' =>'Chiclana de la Frontera',
    'habitantes' =>'82777',
    'deuda'=>'106252'
    );
$deuda[11][11016]=array(
    'nombre' =>'Chipiona',
    'habitantes' =>'19062',
    'deuda'=>'35946'
    );
$deuda[11][11017]=array(
    'nombre' =>'Espera',
    'habitantes' =>'3915',
    'deuda'=>'2023'
    );
$deuda[11][11018]=array(
    'nombre' =>'Gastor, El',
    'habitantes' =>'1809',
    'deuda'=>'0'
    );
$deuda[11][11019]=array(
    'nombre' =>'Grazalema',
    'habitantes' =>'2165',
    'deuda'=>'143'
    );
$deuda[11][11020]=array(
    'nombre' =>'Jerez de la Frontera',
    'habitantes' =>'212876',
    'deuda'=>'515729'
    );
$deuda[11][11021]=array(
    'nombre' =>'Jimena de la Frontera',
    'habitantes' =>'9772',
    'deuda'=>'3880'
    );
$deuda[11][11022]=array(
    'nombre' =>'Línea de la Concepción, La',
    'habitantes' =>'63352',
    'deuda'=>'132411'
    );
$deuda[11][11023]=array(
    'nombre' =>'Medina-Sidonia',
    'habitantes' =>'11749',
    'deuda'=>'4130'
    );
$deuda[11][11024]=array(
    'nombre' =>'Olvera',
    'habitantes' =>'8289',
    'deuda'=>'130'
    );
$deuda[11][11025]=array(
    'nombre' =>'Paterna de Rivera',
    'habitantes' =>'5585',
    'deuda'=>'3871'
    );
$deuda[11][11026]=array(
    'nombre' =>'Prado del Rey',
    'habitantes' =>'5819',
    'deuda'=>'5583'
    );
$deuda[11][11027]=array(
    'nombre' =>'Puerto de Santa María, El',
    'habitantes' =>'88335',
    'deuda'=>'125378'
    );
$deuda[11][11028]=array(
    'nombre' =>'Puerto Real',
    'habitantes' =>'41509',
    'deuda'=>'72325'
    );
$deuda[11][11029]=array(
    'nombre' =>'Puerto Serrano',
    'habitantes' =>'7145',
    'deuda'=>'3152'
    );
$deuda[11][11030]=array(
    'nombre' =>'Rota',
    'habitantes' =>'29123',
    'deuda'=>'37279'
    );
$deuda[11][11031]=array(
    'nombre' =>'San Fernando',
    'habitantes' =>'96131',
    'deuda'=>'44791'
    );
$deuda[11][11032]=array(
    'nombre' =>'Sanlúcar de Barrameda',
    'habitantes' =>'67433',
    'deuda'=>'48444'
    );
$deuda[11][11033]=array(
    'nombre' =>'San Roque',
    'habitantes' =>'29373',
    'deuda'=>'18413'
    );
$deuda[11][11034]=array(
    'nombre' =>'Setenil de las Bodegas',
    'habitantes' =>'2845',
    'deuda'=>'877'
    );
$deuda[11][11035]=array(
    'nombre' =>'Tarifa',
    'habitantes' =>'18011',
    'deuda'=>'8338'
    );
$deuda[11][11036]=array(
    'nombre' =>'Torre Alháquime',
    'habitantes' =>'779',
    'deuda'=>'81'
    );
$deuda[11][11037]=array(
    'nombre' =>'Trebujena',
    'habitantes' =>'7072',
    'deuda'=>'11066'
    );
$deuda[11][11038]=array(
    'nombre' =>'Ubrique',
    'habitantes' =>'16836',
    'deuda'=>'5600'
    );
$deuda[11][11039]=array(
    'nombre' =>'Vejer de la Frontera',
    'habitantes' =>'12812',
    'deuda'=>'6288'
    );
$deuda[11][11040]=array(
    'nombre' =>'Villaluenga del Rosario',
    'habitantes' =>'471',
    'deuda'=>'252'
    );
$deuda[11][11041]=array(
    'nombre' =>'Villamartín',
    'habitantes' =>'12271',
    'deuda'=>'20627'
    );
$deuda[11][11042]=array(
    'nombre' =>'Zahara',
    'habitantes' =>'1436',
    'deuda'=>'1736'
    );
$deuda[11][11901]=array(
    'nombre' =>'Benalup-Casas Viejas',
    'habitantes' =>'7000',
    'deuda'=>'7243'
    );
$deuda[11][11902]=array(
    'nombre' =>'San José del Valle',
    'habitantes' =>'4427',
    'deuda'=>'1186'
    );
$deuda[12][12001]=array(
    'nombre' =>'Atzeneta del Maestrat',
    'habitantes' =>'1307',
    'deuda'=>'0'
    );
$deuda[12][12002]=array(
    'nombre' =>'Aín',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[12][12003]=array(
    'nombre' =>'Albocàsser',
    'habitantes' =>'1334',
    'deuda'=>'503'
    );
$deuda[12][12004]=array(
    'nombre' =>'Alcalà de Xivert',
    'habitantes' =>'7255',
    'deuda'=>'1775'
    );
$deuda[12][12005]=array(
    'nombre' =>'Alcora, l\'',
    'habitantes' =>'10591',
    'deuda'=>'6402'
    );
$deuda[12][12006]=array(
    'nombre' =>'Alcudia de Veo',
    'habitantes' =>'209',
    'deuda'=>'0'
    );
$deuda[12][12007]=array(
    'nombre' =>'Alfondeguilla',
    'habitantes' =>'901',
    'deuda'=>'912'
    );
$deuda[12][12008]=array(
    'nombre' =>'Algimia de Almonacid',
    'habitantes' =>'281',
    'deuda'=>'0'
    );
$deuda[12][12009]=array(
    'nombre' =>'Almazora/Almassora',
    'habitantes' =>'25488',
    'deuda'=>'5248'
    );
$deuda[12][12010]=array(
    'nombre' =>'Almedíjar',
    'habitantes' =>'275',
    'deuda'=>'32'
    );
$deuda[12][12011]=array(
    'nombre' =>'Almenara',
    'habitantes' =>'6031',
    'deuda'=>'2199'
    );
$deuda[12][12012]=array(
    'nombre' =>'Altura',
    'habitantes' =>'3647',
    'deuda'=>'5083'
    );
$deuda[12][12013]=array(
    'nombre' =>'Arañuel',
    'habitantes' =>'171',
    'deuda'=>'0'
    );
$deuda[12][12014]=array(
    'nombre' =>'Ares del Maestrat',
    'habitantes' =>'208',
    'deuda'=>'309'
    );
$deuda[12][12015]=array(
    'nombre' =>'Argelita',
    'habitantes' =>'103',
    'deuda'=>'87'
    );
$deuda[12][12016]=array(
    'nombre' =>'Artana',
    'habitantes' =>'1992',
    'deuda'=>'412'
    );
$deuda[12][12017]=array(
    'nombre' =>'Ayódar',
    'habitantes' =>'175',
    'deuda'=>'0'
    );
$deuda[12][12018]=array(
    'nombre' =>'Azuébar',
    'habitantes' =>'325',
    'deuda'=>'154'
    );
$deuda[12][12020]=array(
    'nombre' =>'Barracas',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[12][12021]=array(
    'nombre' =>'Betxí',
    'habitantes' =>'5763',
    'deuda'=>'2398'
    );
$deuda[12][12022]=array(
    'nombre' =>'Bejís',
    'habitantes' =>'399',
    'deuda'=>'1131'
    );
$deuda[12][12024]=array(
    'nombre' =>'Benafer',
    'habitantes' =>'170',
    'deuda'=>'0'
    );
$deuda[12][12025]=array(
    'nombre' =>'Benafigos',
    'habitantes' =>'156',
    'deuda'=>'167'
    );
$deuda[12][12026]=array(
    'nombre' =>'Benasal',
    'habitantes' =>'1150',
    'deuda'=>'314'
    );
$deuda[12][12027]=array(
    'nombre' =>'Benicarló',
    'habitantes' =>'26403',
    'deuda'=>'7414'
    );
$deuda[12][12028]=array(
    'nombre' =>'Benicasim/Benicàssim',
    'habitantes' =>'18098',
    'deuda'=>'7582'
    );
$deuda[12][12029]=array(
    'nombre' =>'Benlloch',
    'habitantes' =>'1119',
    'deuda'=>'0'
    );
$deuda[12][12031]=array(
    'nombre' =>'Borriol',
    'habitantes' =>'5176',
    'deuda'=>'2988'
    );
$deuda[12][12032]=array(
    'nombre' =>'Borriana/Burriana',
    'habitantes' =>'34708',
    'deuda'=>'13401'
    );
$deuda[12][12033]=array(
    'nombre' =>'Cabanes',
    'habitantes' =>'2939',
    'deuda'=>'636'
    );
$deuda[12][12034]=array(
    'nombre' =>'Càlig',
    'habitantes' =>'2049',
    'deuda'=>'0'
    );
$deuda[12][12036]=array(
    'nombre' =>'Canet lo Roig',
    'habitantes' =>'746',
    'deuda'=>'392'
    );
$deuda[12][12037]=array(
    'nombre' =>'Castell de Cabres',
    'habitantes' =>'16',
    'deuda'=>'0'
    );
$deuda[12][12038]=array(
    'nombre' =>'Castellfort',
    'habitantes' =>'206',
    'deuda'=>'0'
    );
$deuda[12][12039]=array(
    'nombre' =>'Castellnovo',
    'habitantes' =>'1003',
    'deuda'=>'1008'
    );
$deuda[12][12040]=array(
    'nombre' =>'Castellón de la Plana/Castelló de la Plana',
    'habitantes' =>'171669',
    'deuda'=>'91656'
    );
$deuda[12][12041]=array(
    'nombre' =>'Castillo de Villamalefa',
    'habitantes' =>'112',
    'deuda'=>'141'
    );
$deuda[12][12042]=array(
    'nombre' =>'Catí',
    'habitantes' =>'779',
    'deuda'=>'477'
    );
$deuda[12][12043]=array(
    'nombre' =>'Caudiel',
    'habitantes' =>'700',
    'deuda'=>'0'
    );
$deuda[12][12044]=array(
    'nombre' =>'Cervera del Maestre',
    'habitantes' =>'653',
    'deuda'=>'358'
    );
$deuda[12][12045]=array(
    'nombre' =>'Cinctorres',
    'habitantes' =>'424',
    'deuda'=>'0'
    );
$deuda[12][12046]=array(
    'nombre' =>'Cirat',
    'habitantes' =>'233',
    'deuda'=>'0'
    );
$deuda[12][12048]=array(
    'nombre' =>'Cortes de Arenoso',
    'habitantes' =>'308',
    'deuda'=>'416'
    );
$deuda[12][12049]=array(
    'nombre' =>'Costur',
    'habitantes' =>'550',
    'deuda'=>'0'
    );
$deuda[12][12050]=array(
    'nombre' =>'Coves de Vinromà, les',
    'habitantes' =>'1870',
    'deuda'=>'1124'
    );
$deuda[12][12051]=array(
    'nombre' =>'Culla',
    'habitantes' =>'535',
    'deuda'=>'521'
    );
$deuda[12][12052]=array(
    'nombre' =>'Xert',
    'habitantes' =>'779',
    'deuda'=>'124'
    );
$deuda[12][12053]=array(
    'nombre' =>'Chilches/Xilxes',
    'habitantes' =>'2752',
    'deuda'=>'5136'
    );
$deuda[12][12055]=array(
    'nombre' =>'Chodos/Xodos',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[12][12056]=array(
    'nombre' =>'Chóvar',
    'habitantes' =>'327',
    'deuda'=>'0'
    );
$deuda[12][12057]=array(
    'nombre' =>'Eslida',
    'habitantes' =>'833',
    'deuda'=>'0'
    );
$deuda[12][12058]=array(
    'nombre' =>'Espadilla',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[12][12059]=array(
    'nombre' =>'Fanzara',
    'habitantes' =>'314',
    'deuda'=>'0'
    );
$deuda[12][12060]=array(
    'nombre' =>'Figueroles',
    'habitantes' =>'539',
    'deuda'=>'0'
    );
$deuda[12][12061]=array(
    'nombre' =>'Forcall',
    'habitantes' =>'476',
    'deuda'=>'100'
    );
$deuda[12][12063]=array(
    'nombre' =>'Fuente la Reina',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[12][12064]=array(
    'nombre' =>'Fuentes de Ayódar',
    'habitantes' =>'130',
    'deuda'=>'0'
    );
$deuda[12][12065]=array(
    'nombre' =>'Gaibiel',
    'habitantes' =>'205',
    'deuda'=>'341'
    );
$deuda[12][12067]=array(
    'nombre' =>'Geldo',
    'habitantes' =>'651',
    'deuda'=>'0'
    );
$deuda[12][12068]=array(
    'nombre' =>'Herbés',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[12][12069]=array(
    'nombre' =>'Higueras',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[12][12070]=array(
    'nombre' =>'Jana, la',
    'habitantes' =>'714',
    'deuda'=>'466'
    );
$deuda[12][12071]=array(
    'nombre' =>'Jérica',
    'habitantes' =>'1599',
    'deuda'=>'0'
    );
$deuda[12][12072]=array(
    'nombre' =>'Lucena del Cid',
    'habitantes' =>'1385',
    'deuda'=>'2071'
    );
$deuda[12][12073]=array(
    'nombre' =>'Ludiente',
    'habitantes' =>'181',
    'deuda'=>'175'
    );
$deuda[12][12074]=array(
    'nombre' =>'Llosa, la',
    'habitantes' =>'988',
    'deuda'=>'0'
    );
$deuda[12][12075]=array(
    'nombre' =>'Mata de Morella, la',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[12][12076]=array(
    'nombre' =>'Matet',
    'habitantes' =>'95',
    'deuda'=>'152'
    );
$deuda[12][12077]=array(
    'nombre' =>'Moncofa',
    'habitantes' =>'6256',
    'deuda'=>'7574'
    );
$deuda[12][12078]=array(
    'nombre' =>'Montán',
    'habitantes' =>'393',
    'deuda'=>'0'
    );
$deuda[12][12079]=array(
    'nombre' =>'Montanejos',
    'habitantes' =>'549',
    'deuda'=>'222'
    );
$deuda[12][12080]=array(
    'nombre' =>'Morella',
    'habitantes' =>'2575',
    'deuda'=>'1511'
    );
$deuda[12][12081]=array(
    'nombre' =>'Navajas',
    'habitantes' =>'765',
    'deuda'=>'5216'
    );
$deuda[12][12082]=array(
    'nombre' =>'Nules',
    'habitantes' =>'13442',
    'deuda'=>'2202'
    );
$deuda[12][12083]=array(
    'nombre' =>'Olocau del Rey',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[12][12084]=array(
    'nombre' =>'Onda',
    'habitantes' =>'24963',
    'deuda'=>'4308'
    );
$deuda[12][12085]=array(
    'nombre' =>'Oropesa del Mar/Orpesa',
    'habitantes' =>'9493',
    'deuda'=>'0'
    );
$deuda[12][12087]=array(
    'nombre' =>'Palanques',
    'habitantes' =>'31',
    'deuda'=>'55'
    );
$deuda[12][12088]=array(
    'nombre' =>'Pavías',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[12][12089]=array(
    'nombre' =>'Peníscola/Peñíscola',
    'habitantes' =>'7444',
    'deuda'=>'12797'
    );
$deuda[12][12090]=array(
    'nombre' =>'Pina de Montalgrao',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[12][12091]=array(
    'nombre' =>'Portell de Morella',
    'habitantes' =>'218',
    'deuda'=>'47'
    );
$deuda[12][12092]=array(
    'nombre' =>'Puebla de Arenoso',
    'habitantes' =>'141',
    'deuda'=>'0'
    );
$deuda[12][12093]=array(
    'nombre' =>'Pobla de Benifassà, la',
    'habitantes' =>'228',
    'deuda'=>'0'
    );
$deuda[12][12094]=array(
    'nombre' =>'Pobla Tornesa, la',
    'habitantes' =>'1191',
    'deuda'=>'121'
    );
$deuda[12][12095]=array(
    'nombre' =>'Ribesalbes',
    'habitantes' =>'1233',
    'deuda'=>'0'
    );
$deuda[12][12096]=array(
    'nombre' =>'Rossell',
    'habitantes' =>'1020',
    'deuda'=>'867'
    );
$deuda[12][12097]=array(
    'nombre' =>'Sacañet',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[12][12098]=array(
    'nombre' =>'Salzadella, la',
    'habitantes' =>'762',
    'deuda'=>'358'
    );
$deuda[12][12099]=array(
    'nombre' =>'Sant Jordi/San Jorge',
    'habitantes' =>'1020',
    'deuda'=>'0'
    );
$deuda[12][12100]=array(
    'nombre' =>'Sant Mateu',
    'habitantes' =>'1995',
    'deuda'=>'617'
    );
$deuda[12][12101]=array(
    'nombre' =>'San Rafael del Río',
    'habitantes' =>'502',
    'deuda'=>'95'
    );
$deuda[12][12102]=array(
    'nombre' =>'Santa Magdalena de Pulpis',
    'habitantes' =>'810',
    'deuda'=>'663'
    );
$deuda[12][12103]=array(
    'nombre' =>'Serratella, la',
    'habitantes' =>'101',
    'deuda'=>'0'
    );
$deuda[12][12104]=array(
    'nombre' =>'Segorbe',
    'habitantes' =>'9073',
    'deuda'=>'1554'
    );
$deuda[12][12105]=array(
    'nombre' =>'Sierra Engarcerán',
    'habitantes' =>'1018',
    'deuda'=>'174'
    );
$deuda[12][12106]=array(
    'nombre' =>'Soneja',
    'habitantes' =>'1476',
    'deuda'=>'509'
    );
$deuda[12][12107]=array(
    'nombre' =>'Sot de Ferrer',
    'habitantes' =>'428',
    'deuda'=>'0'
    );
$deuda[12][12108]=array(
    'nombre' =>'Sueras/Suera',
    'habitantes' =>'564',
    'deuda'=>'356'
    );
$deuda[12][12109]=array(
    'nombre' =>'Tales',
    'habitantes' =>'836',
    'deuda'=>'0'
    );
$deuda[12][12110]=array(
    'nombre' =>'Teresa',
    'habitantes' =>'277',
    'deuda'=>'0'
    );
$deuda[12][12111]=array(
    'nombre' =>'Tírig',
    'habitantes' =>'489',
    'deuda'=>'289'
    );
$deuda[12][12112]=array(
    'nombre' =>'Todolella',
    'habitantes' =>'140',
    'deuda'=>'0'
    );
$deuda[12][12113]=array(
    'nombre' =>'Toga',
    'habitantes' =>'106',
    'deuda'=>'55'
    );
$deuda[12][12114]=array(
    'nombre' =>'Torás',
    'habitantes' =>'231',
    'deuda'=>'0'
    );
$deuda[12][12115]=array(
    'nombre' =>'Toro, El',
    'habitantes' =>'251',
    'deuda'=>'0'
    );
$deuda[12][12116]=array(
    'nombre' =>'Torralba del Pinar',
    'habitantes' =>'71',
    'deuda'=>'31'
    );
$deuda[12][12117]=array(
    'nombre' =>'Torreblanca',
    'habitantes' =>'5413',
    'deuda'=>'0'
    );
$deuda[12][12118]=array(
    'nombre' =>'Torrechiva',
    'habitantes' =>'81',
    'deuda'=>'13'
    );
$deuda[12][12119]=array(
    'nombre' =>'Torre d\'En Besora, la',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[12][12120]=array(
    'nombre' =>'Torre d\'en Doménec, la',
    'habitantes' =>'217',
    'deuda'=>'0'
    );
$deuda[12][12121]=array(
    'nombre' =>'Traiguera',
    'habitantes' =>'1534',
    'deuda'=>'0'
    );
$deuda[12][12122]=array(
    'nombre' =>'Useras/Useres, les',
    'habitantes' =>'1014',
    'deuda'=>'736'
    );
$deuda[12][12123]=array(
    'nombre' =>'Vallat',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[12][12124]=array(
    'nombre' =>'Vall d\'Alba',
    'habitantes' =>'2844',
    'deuda'=>'399'
    );
$deuda[12][12125]=array(
    'nombre' =>'Vall de Almonacid',
    'habitantes' =>'262',
    'deuda'=>'35'
    );
$deuda[12][12126]=array(
    'nombre' =>'Vall d\'Uixó, la',
    'habitantes' =>'31671',
    'deuda'=>'24247'
    );
$deuda[12][12127]=array(
    'nombre' =>'Vallibona',
    'habitantes' =>'85',
    'deuda'=>'141'
    );
$deuda[12][12128]=array(
    'nombre' =>'Vilafamés',
    'habitantes' =>'1867',
    'deuda'=>'0'
    );
$deuda[12][12129]=array(
    'nombre' =>'Villafranca del Cid/Vilafranca',
    'habitantes' =>'2295',
    'deuda'=>'196'
    );
$deuda[12][12130]=array(
    'nombre' =>'Villahermosa del Río',
    'habitantes' =>'484',
    'deuda'=>'124'
    );
$deuda[12][12131]=array(
    'nombre' =>'Villamalur',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[12][12132]=array(
    'nombre' =>'Vilanova d\'Alcolea',
    'habitantes' =>'603',
    'deuda'=>'254'
    );
$deuda[12][12133]=array(
    'nombre' =>'Villanueva de Viver',
    'habitantes' =>'61',
    'deuda'=>'0'
    );
$deuda[12][12134]=array(
    'nombre' =>'Vilar de Canes',
    'habitantes' =>'175',
    'deuda'=>'98'
    );
$deuda[12][12135]=array(
    'nombre' =>'Vila-real',
    'habitantes' =>'50580',
    'deuda'=>'21082'
    );
$deuda[12][12136]=array(
    'nombre' =>'Vilavella, la',
    'habitantes' =>'3253',
    'deuda'=>'0'
    );
$deuda[12][12137]=array(
    'nombre' =>'Villores',
    'habitantes' =>'37',
    'deuda'=>'116'
    );
$deuda[12][12138]=array(
    'nombre' =>'Vinaròs',
    'habitantes' =>'28190',
    'deuda'=>'8511'
    );
$deuda[12][12139]=array(
    'nombre' =>'Vistabella del Maestrat',
    'habitantes' =>'370',
    'deuda'=>'0'
    );
$deuda[12][12140]=array(
    'nombre' =>'Viver',
    'habitantes' =>'1558',
    'deuda'=>'385'
    );
$deuda[12][12141]=array(
    'nombre' =>'Zorita del Maestrazgo',
    'habitantes' =>'129',
    'deuda'=>'540'
    );
$deuda[12][12142]=array(
    'nombre' =>'Zucaina',
    'habitantes' =>'183',
    'deuda'=>'31'
    );
$deuda[12][12901]=array(
    'nombre' =>'Alquerías del Niño Perdido',
    'habitantes' =>'4503',
    'deuda'=>'1359'
    );
$deuda[12][12902]=array(
    'nombre' =>'Sant Joan de Moró',
    'habitantes' =>'3051',
    'deuda'=>'0'
    );
$deuda[13][13001]=array(
    'nombre' =>'Abenójar',
    'habitantes' =>'1471',
    'deuda'=>'433'
    );
$deuda[13][13002]=array(
    'nombre' =>'Agudo',
    'habitantes' =>'1750',
    'deuda'=>'0'
    );
$deuda[13][13003]=array(
    'nombre' =>'Alamillo',
    'habitantes' =>'531',
    'deuda'=>'420'
    );
$deuda[13][13004]=array(
    'nombre' =>'Albaladejo',
    'habitantes' =>'1323',
    'deuda'=>'0'
    );
$deuda[13][13005]=array(
    'nombre' =>'Alcázar de San Juan',
    'habitantes' =>'31269',
    'deuda'=>'10812'
    );
$deuda[13][13006]=array(
    'nombre' =>'Alcoba',
    'habitantes' =>'637',
    'deuda'=>'471'
    );
$deuda[13][13007]=array(
    'nombre' =>'Alcolea de Calatrava',
    'habitantes' =>'1475',
    'deuda'=>'0'
    );
$deuda[13][13008]=array(
    'nombre' =>'Alcubillas',
    'habitantes' =>'518',
    'deuda'=>'168'
    );
$deuda[13][13009]=array(
    'nombre' =>'Aldea del Rey',
    'habitantes' =>'1823',
    'deuda'=>'0'
    );
$deuda[13][13010]=array(
    'nombre' =>'Alhambra',
    'habitantes' =>'1042',
    'deuda'=>'140'
    );
$deuda[13][13011]=array(
    'nombre' =>'Almadén',
    'habitantes' =>'5794',
    'deuda'=>'9982'
    );
$deuda[13][13012]=array(
    'nombre' =>'Almadenejos',
    'habitantes' =>'456',
    'deuda'=>'125'
    );
$deuda[13][13013]=array(
    'nombre' =>'Almagro',
    'habitantes' =>'9074',
    'deuda'=>'4424'
    );
$deuda[13][13014]=array(
    'nombre' =>'Almedina',
    'habitantes' =>'572',
    'deuda'=>'0'
    );
$deuda[13][13015]=array(
    'nombre' =>'Almodóvar del Campo',
    'habitantes' =>'6477',
    'deuda'=>'0'
    );
$deuda[13][13016]=array(
    'nombre' =>'Almuradiel',
    'habitantes' =>'843',
    'deuda'=>'19'
    );
$deuda[13][13017]=array(
    'nombre' =>'Anchuras',
    'habitantes' =>'343',
    'deuda'=>'0'
    );
$deuda[13][13018]=array(
    'nombre' =>'Arenas de San Juan',
    'habitantes' =>'1067',
    'deuda'=>'0'
    );
$deuda[13][13019]=array(
    'nombre' =>'Argamasilla de Alba',
    'habitantes' =>'7110',
    'deuda'=>'1213'
    );
$deuda[13][13020]=array(
    'nombre' =>'Argamasilla de Calatrava',
    'habitantes' =>'5992',
    'deuda'=>'1350'
    );
$deuda[13][13021]=array(
    'nombre' =>'Arroba de los Montes',
    'habitantes' =>'471',
    'deuda'=>'142'
    );
$deuda[13][13022]=array(
    'nombre' =>'Ballesteros de Calatrava',
    'habitantes' =>'416',
    'deuda'=>'272'
    );
$deuda[13][13023]=array(
    'nombre' =>'Bolaños de Calatrava',
    'habitantes' =>'12001',
    'deuda'=>'6244'
    );
$deuda[13][13024]=array(
    'nombre' =>'Brazatortas',
    'habitantes' =>'1038',
    'deuda'=>'0'
    );
$deuda[13][13025]=array(
    'nombre' =>'Cabezarados',
    'habitantes' =>'328',
    'deuda'=>'122'
    );
$deuda[13][13026]=array(
    'nombre' =>'Cabezarrubias del Puerto',
    'habitantes' =>'521',
    'deuda'=>'350'
    );
$deuda[13][13027]=array(
    'nombre' =>'Calzada de Calatrava',
    'habitantes' =>'4122',
    'deuda'=>'473'
    );
$deuda[13][13028]=array(
    'nombre' =>'Campo de Criptana',
    'habitantes' =>'14126',
    'deuda'=>'1820'
    );
$deuda[13][13029]=array(
    'nombre' =>'Cañada de Calatrava',
    'habitantes' =>'106',
    'deuda'=>'119'
    );
$deuda[13][13030]=array(
    'nombre' =>'Caracuel de Calatrava',
    'habitantes' =>'165',
    'deuda'=>'0'
    );
$deuda[13][13031]=array(
    'nombre' =>'Carrión de Calatrava',
    'habitantes' =>'3090',
    'deuda'=>'314'
    );
$deuda[13][13032]=array(
    'nombre' =>'Carrizosa',
    'habitantes' =>'1331',
    'deuda'=>'9'
    );
$deuda[13][13033]=array(
    'nombre' =>'Castellar de Santiago',
    'habitantes' =>'2055',
    'deuda'=>'15'
    );
$deuda[13][13034]=array(
    'nombre' =>'Ciudad Real',
    'habitantes' =>'74427',
    'deuda'=>'31187'
    );
$deuda[13][13035]=array(
    'nombre' =>'Corral de Calatrava',
    'habitantes' =>'1135',
    'deuda'=>'458'
    );
$deuda[13][13036]=array(
    'nombre' =>'Cortijos, Los',
    'habitantes' =>'961',
    'deuda'=>'0'
    );
$deuda[13][13037]=array(
    'nombre' =>'Cózar',
    'habitantes' =>'1092',
    'deuda'=>'935'
    );
$deuda[13][13038]=array(
    'nombre' =>'Chillón',
    'habitantes' =>'1937',
    'deuda'=>'0'
    );
$deuda[13][13039]=array(
    'nombre' =>'Daimiel',
    'habitantes' =>'18577',
    'deuda'=>'17466'
    );
$deuda[13][13040]=array(
    'nombre' =>'Fernán Caballero',
    'habitantes' =>'1069',
    'deuda'=>'0'
    );
$deuda[13][13041]=array(
    'nombre' =>'Fontanarejo',
    'habitantes' =>'281',
    'deuda'=>'57'
    );
$deuda[13][13042]=array(
    'nombre' =>'Fuencaliente',
    'habitantes' =>'1082',
    'deuda'=>'112'
    );
$deuda[13][13043]=array(
    'nombre' =>'Fuenllana',
    'habitantes' =>'261',
    'deuda'=>'0'
    );
$deuda[13][13044]=array(
    'nombre' =>'Fuente el Fresno',
    'habitantes' =>'3365',
    'deuda'=>'12'
    );
$deuda[13][13045]=array(
    'nombre' =>'Granátula de Calatrava',
    'habitantes' =>'819',
    'deuda'=>'403'
    );
$deuda[13][13046]=array(
    'nombre' =>'Guadalmez',
    'habitantes' =>'813',
    'deuda'=>'238'
    );
$deuda[13][13047]=array(
    'nombre' =>'Herencia',
    'habitantes' =>'8758',
    'deuda'=>'794'
    );
$deuda[13][13048]=array(
    'nombre' =>'Hinojosas de Calatrava',
    'habitantes' =>'499',
    'deuda'=>'0'
    );
$deuda[13][13049]=array(
    'nombre' =>'Horcajo de los Montes',
    'habitantes' =>'959',
    'deuda'=>'37'
    );
$deuda[13][13050]=array(
    'nombre' =>'Labores, Las',
    'habitantes' =>'617',
    'deuda'=>'0'
    );
$deuda[13][13051]=array(
    'nombre' =>'Luciana',
    'habitantes' =>'398',
    'deuda'=>'0'
    );
$deuda[13][13052]=array(
    'nombre' =>'Malagón',
    'habitantes' =>'8280',
    'deuda'=>'3773'
    );
$deuda[13][13053]=array(
    'nombre' =>'Manzanares',
    'habitantes' =>'18642',
    'deuda'=>'5491'
    );
$deuda[13][13054]=array(
    'nombre' =>'Membrilla',
    'habitantes' =>'6168',
    'deuda'=>'422'
    );
$deuda[13][13055]=array(
    'nombre' =>'Mestanza',
    'habitantes' =>'724',
    'deuda'=>'86'
    );
$deuda[13][13056]=array(
    'nombre' =>'Miguelturra',
    'habitantes' =>'15032',
    'deuda'=>'2170'
    );
$deuda[13][13057]=array(
    'nombre' =>'Montiel',
    'habitantes' =>'1450',
    'deuda'=>'0'
    );
$deuda[13][13058]=array(
    'nombre' =>'Moral de Calatrava',
    'habitantes' =>'5429',
    'deuda'=>'0'
    );
$deuda[13][13059]=array(
    'nombre' =>'Navalpino',
    'habitantes' =>'235',
    'deuda'=>'172'
    );
$deuda[13][13060]=array(
    'nombre' =>'Navas de Estena',
    'habitantes' =>'265',
    'deuda'=>'0'
    );
$deuda[13][13061]=array(
    'nombre' =>'Pedro Muñoz',
    'habitantes' =>'7714',
    'deuda'=>'2344'
    );
$deuda[13][13062]=array(
    'nombre' =>'Picón',
    'habitantes' =>'698',
    'deuda'=>'0'
    );
$deuda[13][13063]=array(
    'nombre' =>'Piedrabuena',
    'habitantes' =>'4624',
    'deuda'=>'0'
    );
$deuda[13][13064]=array(
    'nombre' =>'Poblete',
    'habitantes' =>'2334',
    'deuda'=>'717'
    );
$deuda[13][13065]=array(
    'nombre' =>'Porzuna',
    'habitantes' =>'3742',
    'deuda'=>'451'
    );
$deuda[13][13066]=array(
    'nombre' =>'Pozuelo de Calatrava',
    'habitantes' =>'3371',
    'deuda'=>'758'
    );
$deuda[13][13067]=array(
    'nombre' =>'Pozuelos de Calatrava, Los',
    'habitantes' =>'430',
    'deuda'=>'279'
    );
$deuda[13][13068]=array(
    'nombre' =>'Puebla de Don Rodrigo',
    'habitantes' =>'1220',
    'deuda'=>'120'
    );
$deuda[13][13069]=array(
    'nombre' =>'Puebla del Príncipe',
    'habitantes' =>'756',
    'deuda'=>'330'
    );
$deuda[13][13070]=array(
    'nombre' =>'Puerto Lápice',
    'habitantes' =>'955',
    'deuda'=>'0'
    );
$deuda[13][13071]=array(
    'nombre' =>'Puertollano',
    'habitantes' =>'50035',
    'deuda'=>'74299'
    );
$deuda[13][13072]=array(
    'nombre' =>'Retuerta del Bullaque',
    'habitantes' =>'1019',
    'deuda'=>'0'
    );
$deuda[13][13073]=array(
    'nombre' =>'Saceruela',
    'habitantes' =>'617',
    'deuda'=>'141'
    );
$deuda[13][13074]=array(
    'nombre' =>'San Carlos del Valle',
    'habitantes' =>'1184',
    'deuda'=>'101'
    );
$deuda[13][13075]=array(
    'nombre' =>'San Lorenzo de Calatrava',
    'habitantes' =>'231',
    'deuda'=>'0'
    );
$deuda[13][13076]=array(
    'nombre' =>'Santa Cruz de los Cáñamos',
    'habitantes' =>'546',
    'deuda'=>'23'
    );
$deuda[13][13077]=array(
    'nombre' =>'Santa Cruz de Mudela',
    'habitantes' =>'4330',
    'deuda'=>'2272'
    );
$deuda[13][13078]=array(
    'nombre' =>'Socuéllamos',
    'habitantes' =>'12721',
    'deuda'=>'7420'
    );
$deuda[13][13079]=array(
    'nombre' =>'Solana, La',
    'habitantes' =>'15979',
    'deuda'=>'8674'
    );
$deuda[13][13080]=array(
    'nombre' =>'Solana del Pino',
    'habitantes' =>'353',
    'deuda'=>'472'
    );
$deuda[13][13081]=array(
    'nombre' =>'Terrinches',
    'habitantes' =>'782',
    'deuda'=>'258'
    );
$deuda[13][13082]=array(
    'nombre' =>'Tomelloso',
    'habitantes' =>'37645',
    'deuda'=>'7505'
    );
$deuda[13][13083]=array(
    'nombre' =>'Torralba de Calatrava',
    'habitantes' =>'3107',
    'deuda'=>'3825'
    );
$deuda[13][13084]=array(
    'nombre' =>'Torre de Juan Abad',
    'habitantes' =>'1108',
    'deuda'=>'0'
    );
$deuda[13][13085]=array(
    'nombre' =>'Torrenueva',
    'habitantes' =>'2911',
    'deuda'=>'711'
    );
$deuda[13][13086]=array(
    'nombre' =>'Valdemanco del Esteras',
    'habitantes' =>'210',
    'deuda'=>'110'
    );
$deuda[13][13087]=array(
    'nombre' =>'Valdepeñas',
    'habitantes' =>'30514',
    'deuda'=>'25322'
    );
$deuda[13][13088]=array(
    'nombre' =>'Valenzuela de Calatrava',
    'habitantes' =>'706',
    'deuda'=>'319'
    );
$deuda[13][13089]=array(
    'nombre' =>'Villahermosa',
    'habitantes' =>'2014',
    'deuda'=>'1100'
    );
$deuda[13][13090]=array(
    'nombre' =>'Villamanrique',
    'habitantes' =>'1286',
    'deuda'=>'0'
    );
$deuda[13][13091]=array(
    'nombre' =>'Villamayor de Calatrava',
    'habitantes' =>'673',
    'deuda'=>'0'
    );
$deuda[13][13092]=array(
    'nombre' =>'Villanueva de la Fuente',
    'habitantes' =>'2288',
    'deuda'=>'0'
    );
$deuda[13][13093]=array(
    'nombre' =>'Villanueva de los Infantes',
    'habitantes' =>'5373',
    'deuda'=>'0'
    );
$deuda[13][13094]=array(
    'nombre' =>'Villanueva de San Carlos',
    'habitantes' =>'308',
    'deuda'=>'141'
    );
$deuda[13][13095]=array(
    'nombre' =>'Villar del Pozo',
    'habitantes' =>'99',
    'deuda'=>'65'
    );
$deuda[13][13096]=array(
    'nombre' =>'Villarrubia de los Ojos',
    'habitantes' =>'10494',
    'deuda'=>'4871'
    );
$deuda[13][13097]=array(
    'nombre' =>'Villarta de San Juan',
    'habitantes' =>'2953',
    'deuda'=>'433'
    );
$deuda[13][13098]=array(
    'nombre' =>'Viso del Marqués',
    'habitantes' =>'2524',
    'deuda'=>'43'
    );
$deuda[13][13901]=array(
    'nombre' =>'Robledo, El',
    'habitantes' =>'1228',
    'deuda'=>'272'
    );
$deuda[13][13902]=array(
    'nombre' =>'Ruidera',
    'habitantes' =>'608',
    'deuda'=>'868'
    );
$deuda[13][13903]=array(
    'nombre' =>'Arenales de San Gregorio',
    'habitantes' =>'672',
    'deuda'=>'494'
    );
$deuda[13][13904]=array(
    'nombre' =>'Llanos del Caudillo',
    'habitantes' =>'739',
    'deuda'=>'0'
    );
$deuda[14][14001]=array(
    'nombre' =>'Adamuz',
    'habitantes' =>'4317',
    'deuda'=>'1389'
    );
$deuda[14][14002]=array(
    'nombre' =>'Aguilar de la Frontera',
    'habitantes' =>'13551',
    'deuda'=>'86'
    );
$deuda[14][14003]=array(
    'nombre' =>'Alcaracejos',
    'habitantes' =>'1523',
    'deuda'=>'185'
    );
$deuda[14][14004]=array(
    'nombre' =>'Almedinilla',
    'habitantes' =>'2455',
    'deuda'=>'196'
    );
$deuda[14][14005]=array(
    'nombre' =>'Almodóvar del Río',
    'habitantes' =>'7961',
    'deuda'=>'5234'
    );
$deuda[14][14006]=array(
    'nombre' =>'Añora',
    'habitantes' =>'1563',
    'deuda'=>'495'
    );
$deuda[14][14007]=array(
    'nombre' =>'Baena',
    'habitantes' =>'19802',
    'deuda'=>'11106'
    );
$deuda[14][14008]=array(
    'nombre' =>'Belalcázar',
    'habitantes' =>'3437',
    'deuda'=>'1464'
    );
$deuda[14][14009]=array(
    'nombre' =>'Belmez',
    'habitantes' =>'3119',
    'deuda'=>'1537'
    );
$deuda[14][14010]=array(
    'nombre' =>'Benamejí',
    'habitantes' =>'5060',
    'deuda'=>'1968'
    );
$deuda[14][14011]=array(
    'nombre' =>'Blázquez, Los',
    'habitantes' =>'703',
    'deuda'=>'373'
    );
$deuda[14][14012]=array(
    'nombre' =>'Bujalance',
    'habitantes' =>'7693',
    'deuda'=>'1527'
    );
$deuda[14][14013]=array(
    'nombre' =>'Cabra',
    'habitantes' =>'20837',
    'deuda'=>'3727'
    );
$deuda[14][14014]=array(
    'nombre' =>'Cañete de las Torres',
    'habitantes' =>'3010',
    'deuda'=>'1977'
    );
$deuda[14][14015]=array(
    'nombre' =>'Carcabuey',
    'habitantes' =>'2595',
    'deuda'=>'227'
    );
$deuda[14][14016]=array(
    'nombre' =>'Cardeña',
    'habitantes' =>'1604',
    'deuda'=>'0'
    );
$deuda[14][14017]=array(
    'nombre' =>'Carlota, La',
    'habitantes' =>'13929',
    'deuda'=>'5902'
    );
$deuda[14][14018]=array(
    'nombre' =>'Carpio, El',
    'habitantes' =>'4496',
    'deuda'=>'727'
    );
$deuda[14][14019]=array(
    'nombre' =>'Castro del Río',
    'habitantes' =>'7972',
    'deuda'=>'1505'
    );
$deuda[14][14020]=array(
    'nombre' =>'Conquista',
    'habitantes' =>'438',
    'deuda'=>'0'
    );
$deuda[14][14021]=array(
    'nombre' =>'Córdoba',
    'habitantes' =>'327362',
    'deuda'=>'238307'
    );
$deuda[14][14022]=array(
    'nombre' =>'Doña Mencía',
    'habitantes' =>'4882',
    'deuda'=>'1547'
    );
$deuda[14][14023]=array(
    'nombre' =>'Dos Torres',
    'habitantes' =>'2457',
    'deuda'=>'712'
    );
$deuda[14][14024]=array(
    'nombre' =>'Encinas Reales',
    'habitantes' =>'2343',
    'deuda'=>'1018'
    );
$deuda[14][14025]=array(
    'nombre' =>'Espejo',
    'habitantes' =>'3443',
    'deuda'=>'2174'
    );
$deuda[14][14026]=array(
    'nombre' =>'Espiel',
    'habitantes' =>'2508',
    'deuda'=>'785'
    );
$deuda[14][14027]=array(
    'nombre' =>'Fernán-Núñez',
    'habitantes' =>'9713',
    'deuda'=>'123'
    );
$deuda[14][14028]=array(
    'nombre' =>'Fuente la Lancha',
    'habitantes' =>'377',
    'deuda'=>'34'
    );
$deuda[14][14029]=array(
    'nombre' =>'Fuente Obejuna',
    'habitantes' =>'4894',
    'deuda'=>'978'
    );
$deuda[14][14030]=array(
    'nombre' =>'Fuente Palmera',
    'habitantes' =>'10895',
    'deuda'=>'3271'
    );
$deuda[14][14031]=array(
    'nombre' =>'Fuente-Tójar',
    'habitantes' =>'721',
    'deuda'=>'0'
    );
$deuda[14][14032]=array(
    'nombre' =>'Granjuela, La',
    'habitantes' =>'482',
    'deuda'=>'0'
    );
$deuda[14][14033]=array(
    'nombre' =>'Guadalcázar',
    'habitantes' =>'1566',
    'deuda'=>'290'
    );
$deuda[14][14034]=array(
    'nombre' =>'Guijo, El',
    'habitantes' =>'372',
    'deuda'=>'497'
    );
$deuda[14][14035]=array(
    'nombre' =>'Hinojosa del Duque',
    'habitantes' =>'7054',
    'deuda'=>'1498'
    );
$deuda[14][14036]=array(
    'nombre' =>'Hornachuelos',
    'habitantes' =>'4642',
    'deuda'=>'1241'
    );
$deuda[14][14037]=array(
    'nombre' =>'Iznájar',
    'habitantes' =>'4556',
    'deuda'=>'157'
    );
$deuda[14][14038]=array(
    'nombre' =>'Lucena',
    'habitantes' =>'42697',
    'deuda'=>'19691'
    );
$deuda[14][14039]=array(
    'nombre' =>'Luque',
    'habitantes' =>'3127',
    'deuda'=>'683'
    );
$deuda[14][14040]=array(
    'nombre' =>'Montalbán de Córdoba',
    'habitantes' =>'4519',
    'deuda'=>'283'
    );
$deuda[14][14041]=array(
    'nombre' =>'Montemayor',
    'habitantes' =>'3950',
    'deuda'=>'0'
    );
$deuda[14][14042]=array(
    'nombre' =>'Montilla',
    'habitantes' =>'23519',
    'deuda'=>'14170'
    );
$deuda[14][14043]=array(
    'nombre' =>'Montoro',
    'habitantes' =>'9640',
    'deuda'=>'5193'
    );
$deuda[14][14044]=array(
    'nombre' =>'Monturque',
    'habitantes' =>'2007',
    'deuda'=>'0'
    );
$deuda[14][14045]=array(
    'nombre' =>'Moriles',
    'habitantes' =>'3848',
    'deuda'=>'0'
    );
$deuda[14][14046]=array(
    'nombre' =>'Nueva Carteya',
    'habitantes' =>'5470',
    'deuda'=>'1135'
    );
$deuda[14][14047]=array(
    'nombre' =>'Obejo',
    'habitantes' =>'2027',
    'deuda'=>'341'
    );
$deuda[14][14048]=array(
    'nombre' =>'Palenciana',
    'habitantes' =>'1545',
    'deuda'=>'269'
    );
$deuda[14][14049]=array(
    'nombre' =>'Palma del Río',
    'habitantes' =>'21522',
    'deuda'=>'10196'
    );
$deuda[14][14050]=array(
    'nombre' =>'Pedro Abad',
    'habitantes' =>'2927',
    'deuda'=>'639'
    );
$deuda[14][14051]=array(
    'nombre' =>'Pedroche',
    'habitantes' =>'1624',
    'deuda'=>'346'
    );
$deuda[14][14052]=array(
    'nombre' =>'Peñarroya-Pueblonuevo',
    'habitantes' =>'11300',
    'deuda'=>'2902'
    );
$deuda[14][14053]=array(
    'nombre' =>'Posadas',
    'habitantes' =>'7544',
    'deuda'=>'532'
    );
$deuda[14][14054]=array(
    'nombre' =>'Pozoblanco',
    'habitantes' =>'17380',
    'deuda'=>'3993'
    );
$deuda[14][14055]=array(
    'nombre' =>'Priego de Córdoba',
    'habitantes' =>'22936',
    'deuda'=>'12043'
    );
$deuda[14][14056]=array(
    'nombre' =>'Puente Genil',
    'habitantes' =>'30167',
    'deuda'=>'8472'
    );
$deuda[14][14057]=array(
    'nombre' =>'Rambla, La',
    'habitantes' =>'7547',
    'deuda'=>'808'
    );
$deuda[14][14058]=array(
    'nombre' =>'Rute',
    'habitantes' =>'10269',
    'deuda'=>'5811'
    );
$deuda[14][14059]=array(
    'nombre' =>'San Sebastián de los Ballesteros',
    'habitantes' =>'816',
    'deuda'=>'170'
    );
$deuda[14][14060]=array(
    'nombre' =>'Santaella',
    'habitantes' =>'6062',
    'deuda'=>'830'
    );
$deuda[14][14061]=array(
    'nombre' =>'Santa Eufemia',
    'habitantes' =>'859',
    'deuda'=>'146'
    );
$deuda[14][14062]=array(
    'nombre' =>'Torrecampo',
    'habitantes' =>'1177',
    'deuda'=>'0'
    );
$deuda[14][14063]=array(
    'nombre' =>'Valenzuela',
    'habitantes' =>'1241',
    'deuda'=>'317'
    );
$deuda[14][14064]=array(
    'nombre' =>'Valsequillo',
    'habitantes' =>'379',
    'deuda'=>'0'
    );
$deuda[14][14065]=array(
    'nombre' =>'Victoria, La',
    'habitantes' =>'2375',
    'deuda'=>'0'
    );
$deuda[14][14066]=array(
    'nombre' =>'Villa del Río',
    'habitantes' =>'7403',
    'deuda'=>'2482'
    );
$deuda[14][14067]=array(
    'nombre' =>'Villafranca de Córdoba',
    'habitantes' =>'4889',
    'deuda'=>'314'
    );
$deuda[14][14068]=array(
    'nombre' =>'Villaharta',
    'habitantes' =>'703',
    'deuda'=>'226'
    );
$deuda[14][14069]=array(
    'nombre' =>'Villanueva de Córdoba',
    'habitantes' =>'9141',
    'deuda'=>'547'
    );
$deuda[14][14070]=array(
    'nombre' =>'Villanueva del Duque',
    'habitantes' =>'1553',
    'deuda'=>'125'
    );
$deuda[14][14071]=array(
    'nombre' =>'Villanueva del Rey',
    'habitantes' =>'1096',
    'deuda'=>'12'
    );
$deuda[14][14072]=array(
    'nombre' =>'Villaralto',
    'habitantes' =>'1238',
    'deuda'=>'70'
    );
$deuda[14][14073]=array(
    'nombre' =>'Villaviciosa de Córdoba',
    'habitantes' =>'3443',
    'deuda'=>'0'
    );
$deuda[14][14074]=array(
    'nombre' =>'Viso, El',
    'habitantes' =>'2651',
    'deuda'=>'551'
    );
$deuda[14][14075]=array(
    'nombre' =>'Zuheros',
    'habitantes' =>'688',
    'deuda'=>'112'
    );
$deuda[15][15001]=array(
    'nombre' =>'Abegondo',
    'habitantes' =>'5586',
    'deuda'=>'0'
    );
$deuda[15][15002]=array(
    'nombre' =>'Ames',
    'habitantes' =>'30267',
    'deuda'=>'4115'
    );
$deuda[15][15003]=array(
    'nombre' =>'Aranga',
    'habitantes' =>'1997',
    'deuda'=>'0'
    );
$deuda[15][15004]=array(
    'nombre' =>'Ares',
    'habitantes' =>'5743',
    'deuda'=>'3434'
    );
$deuda[15][15005]=array(
    'nombre' =>'Arteixo',
    'habitantes' =>'30950',
    'deuda'=>'82'
    );
$deuda[15][15006]=array(
    'nombre' =>'Arzúa',
    'habitantes' =>'6219',
    'deuda'=>'842'
    );
$deuda[15][15007]=array(
    'nombre' =>'Baña, A',
    'habitantes' =>'3698',
    'deuda'=>'0'
    );
$deuda[15][15008]=array(
    'nombre' =>'Bergondo',
    'habitantes' =>'6700',
    'deuda'=>'0'
    );
$deuda[15][15009]=array(
    'nombre' =>'Betanzos',
    'habitantes' =>'13202',
    'deuda'=>'446'
    );
$deuda[15][15010]=array(
    'nombre' =>'Boimorto',
    'habitantes' =>'2125',
    'deuda'=>'0'
    );
$deuda[15][15011]=array(
    'nombre' =>'Boiro',
    'habitantes' =>'18950',
    'deuda'=>'6128'
    );
$deuda[15][15012]=array(
    'nombre' =>'Boqueixón',
    'habitantes' =>'4321',
    'deuda'=>'337'
    );
$deuda[15][15013]=array(
    'nombre' =>'Brión',
    'habitantes' =>'7564',
    'deuda'=>'516'
    );
$deuda[15][15014]=array(
    'nombre' =>'Cabana de Bergantiños',
    'habitantes' =>'4552',
    'deuda'=>'0'
    );
$deuda[15][15015]=array(
    'nombre' =>'Cabanas',
    'habitantes' =>'3299',
    'deuda'=>'128'
    );
$deuda[15][15016]=array(
    'nombre' =>'Camariñas',
    'habitantes' =>'5577',
    'deuda'=>'1350'
    );
$deuda[15][15017]=array(
    'nombre' =>'Cambre',
    'habitantes' =>'24076',
    'deuda'=>'2412'
    );
$deuda[15][15018]=array(
    'nombre' =>'Capela, A',
    'habitantes' =>'1334',
    'deuda'=>'0'
    );
$deuda[15][15019]=array(
    'nombre' =>'Carballo',
    'habitantes' =>'31283',
    'deuda'=>'1076'
    );
$deuda[15][15020]=array(
    'nombre' =>'Carnota',
    'habitantes' =>'4284',
    'deuda'=>'1686'
    );
$deuda[15][15021]=array(
    'nombre' =>'Carral',
    'habitantes' =>'6180',
    'deuda'=>'2866'
    );
$deuda[15][15022]=array(
    'nombre' =>'Cedeira',
    'habitantes' =>'7062',
    'deuda'=>'13'
    );
$deuda[15][15023]=array(
    'nombre' =>'Cee',
    'habitantes' =>'7723',
    'deuda'=>'1276'
    );
$deuda[15][15024]=array(
    'nombre' =>'Cerceda',
    'habitantes' =>'5076',
    'deuda'=>'489'
    );
$deuda[15][15025]=array(
    'nombre' =>'Cerdido',
    'habitantes' =>'1233',
    'deuda'=>'0'
    );
$deuda[15][15027]=array(
    'nombre' =>'Coirós',
    'habitantes' =>'1757',
    'deuda'=>'0'
    );
$deuda[15][15028]=array(
    'nombre' =>'Corcubión',
    'habitantes' =>'1655',
    'deuda'=>'0'
    );
$deuda[15][15029]=array(
    'nombre' =>'Coristanco',
    'habitantes' =>'6551',
    'deuda'=>'842'
    );
$deuda[15][15030]=array(
    'nombre' =>'Coruña, A',
    'habitantes' =>'243870',
    'deuda'=>'84310'
    );
$deuda[15][15031]=array(
    'nombre' =>'Culleredo',
    'habitantes' =>'29593',
    'deuda'=>'3092'
    );
$deuda[15][15032]=array(
    'nombre' =>'Curtis',
    'habitantes' =>'4015',
    'deuda'=>'0'
    );
$deuda[15][15033]=array(
    'nombre' =>'Dodro',
    'habitantes' =>'2882',
    'deuda'=>'490'
    );
$deuda[15][15034]=array(
    'nombre' =>'Dumbría',
    'habitantes' =>'3077',
    'deuda'=>'0'
    );
$deuda[15][15035]=array(
    'nombre' =>'Fene',
    'habitantes' =>'13385',
    'deuda'=>'815'
    );
$deuda[15][15036]=array(
    'nombre' =>'Ferrol',
    'habitantes' =>'69452',
    'deuda'=>'26262'
    );
$deuda[15][15037]=array(
    'nombre' =>'Fisterra',
    'habitantes' =>'4775',
    'deuda'=>'351'
    );
$deuda[15][15038]=array(
    'nombre' =>'Frades',
    'habitantes' =>'2460',
    'deuda'=>'119'
    );
$deuda[15][15039]=array(
    'nombre' =>'Irixoa',
    'habitantes' =>'1389',
    'deuda'=>'0'
    );
$deuda[15][15040]=array(
    'nombre' =>'Laxe',
    'habitantes' =>'3185',
    'deuda'=>'1459'
    );
$deuda[15][15041]=array(
    'nombre' =>'Laracha, A',
    'habitantes' =>'11402',
    'deuda'=>'0'
    );
$deuda[15][15042]=array(
    'nombre' =>'Lousame',
    'habitantes' =>'3463',
    'deuda'=>'444'
    );
$deuda[15][15043]=array(
    'nombre' =>'Malpica de Bergantiños',
    'habitantes' =>'5666',
    'deuda'=>'46'
    );
$deuda[15][15044]=array(
    'nombre' =>'Mañón',
    'habitantes' =>'1454',
    'deuda'=>'0'
    );
$deuda[15][15045]=array(
    'nombre' =>'Mazaricos',
    'habitantes' =>'4173',
    'deuda'=>'0'
    );
$deuda[15][15046]=array(
    'nombre' =>'Melide',
    'habitantes' =>'7538',
    'deuda'=>'478'
    );
$deuda[15][15047]=array(
    'nombre' =>'Mesía',
    'habitantes' =>'2734',
    'deuda'=>'0'
    );
$deuda[15][15048]=array(
    'nombre' =>'Miño',
    'habitantes' =>'5859',
    'deuda'=>'3124'
    );
$deuda[15][15049]=array(
    'nombre' =>'Moeche',
    'habitantes' =>'1246',
    'deuda'=>'0'
    );
$deuda[15][15050]=array(
    'nombre' =>'Monfero',
    'habitantes' =>'2037',
    'deuda'=>'60'
    );
$deuda[15][15051]=array(
    'nombre' =>'Mugardos',
    'habitantes' =>'5362',
    'deuda'=>'0'
    );
$deuda[15][15052]=array(
    'nombre' =>'Muxía',
    'habitantes' =>'5025',
    'deuda'=>'0'
    );
$deuda[15][15053]=array(
    'nombre' =>'Muros',
    'habitantes' =>'8960',
    'deuda'=>'1872'
    );
$deuda[15][15054]=array(
    'nombre' =>'Narón',
    'habitantes' =>'39565',
    'deuda'=>'7098'
    );
$deuda[15][15055]=array(
    'nombre' =>'Neda',
    'habitantes' =>'5261',
    'deuda'=>'721'
    );
$deuda[15][15056]=array(
    'nombre' =>'Negreira',
    'habitantes' =>'6936',
    'deuda'=>'1890'
    );
$deuda[15][15057]=array(
    'nombre' =>'Noia',
    'habitantes' =>'14472',
    'deuda'=>'0'
    );
$deuda[15][15058]=array(
    'nombre' =>'Oleiros',
    'habitantes' =>'34693',
    'deuda'=>'1767'
    );
$deuda[15][15059]=array(
    'nombre' =>'Ordes',
    'habitantes' =>'12776',
    'deuda'=>'4303'
    );
$deuda[15][15060]=array(
    'nombre' =>'Oroso',
    'habitantes' =>'7413',
    'deuda'=>'600'
    );
$deuda[15][15061]=array(
    'nombre' =>'Ortigueira',
    'habitantes' =>'6136',
    'deuda'=>'2258'
    );
$deuda[15][15062]=array(
    'nombre' =>'Outes',
    'habitantes' =>'6691',
    'deuda'=>'0'
    );
$deuda[15][15064]=array(
    'nombre' =>'Paderne',
    'habitantes' =>'2467',
    'deuda'=>'0'
    );
$deuda[15][15065]=array(
    'nombre' =>'Padrón',
    'habitantes' =>'8643',
    'deuda'=>'689'
    );
$deuda[15][15066]=array(
    'nombre' =>'Pino, O',
    'habitantes' =>'4706',
    'deuda'=>'0'
    );
$deuda[15][15067]=array(
    'nombre' =>'Pobra do Caramiñal, A',
    'habitantes' =>'9623',
    'deuda'=>'2863'
    );
$deuda[15][15068]=array(
    'nombre' =>'Ponteceso',
    'habitantes' =>'5789',
    'deuda'=>'2314'
    );
$deuda[15][15069]=array(
    'nombre' =>'Pontedeume',
    'habitantes' =>'8011',
    'deuda'=>'0'
    );
$deuda[15][15070]=array(
    'nombre' =>'Pontes de García Rodríguez, As',
    'habitantes' =>'10503',
    'deuda'=>'0'
    );
$deuda[15][15071]=array(
    'nombre' =>'Porto do Son',
    'habitantes' =>'9436',
    'deuda'=>'2555'
    );
$deuda[15][15072]=array(
    'nombre' =>'Rianxo',
    'habitantes' =>'11386',
    'deuda'=>'1155'
    );
$deuda[15][15073]=array(
    'nombre' =>'Ribeira',
    'habitantes' =>'27372',
    'deuda'=>'7127'
    );
$deuda[15][15074]=array(
    'nombre' =>'Rois',
    'habitantes' =>'4710',
    'deuda'=>'187'
    );
$deuda[15][15075]=array(
    'nombre' =>'Sada',
    'habitantes' =>'15080',
    'deuda'=>'0'
    );
$deuda[15][15076]=array(
    'nombre' =>'San Sadurniño',
    'habitantes' =>'3009',
    'deuda'=>'0'
    );
$deuda[15][15077]=array(
    'nombre' =>'Santa Comba',
    'habitantes' =>'9635',
    'deuda'=>'274'
    );
$deuda[15][15078]=array(
    'nombre' =>'Santiago de Compostela',
    'habitantes' =>'95612',
    'deuda'=>'41658'
    );
$deuda[15][15079]=array(
    'nombre' =>'Santiso',
    'habitantes' =>'1709',
    'deuda'=>'104'
    );
$deuda[15][15080]=array(
    'nombre' =>'Sobrado',
    'habitantes' =>'1911',
    'deuda'=>'0'
    );
$deuda[15][15081]=array(
    'nombre' =>'Somozas, As',
    'habitantes' =>'1191',
    'deuda'=>'0'
    );
$deuda[15][15082]=array(
    'nombre' =>'Teo',
    'habitantes' =>'18505',
    'deuda'=>'1892'
    );
$deuda[15][15083]=array(
    'nombre' =>'Toques',
    'habitantes' =>'1213',
    'deuda'=>'53'
    );
$deuda[15][15084]=array(
    'nombre' =>'Tordoia',
    'habitantes' =>'3591',
    'deuda'=>'1988'
    );
$deuda[15][15085]=array(
    'nombre' =>'Touro',
    'habitantes' =>'3778',
    'deuda'=>'0'
    );
$deuda[15][15086]=array(
    'nombre' =>'Trazo',
    'habitantes' =>'3263',
    'deuda'=>'0'
    );
$deuda[15][15087]=array(
    'nombre' =>'Valdoviño',
    'habitantes' =>'6753',
    'deuda'=>'306'
    );
$deuda[15][15088]=array(
    'nombre' =>'Val do Dubra',
    'habitantes' =>'4033',
    'deuda'=>'218'
    );
$deuda[15][15089]=array(
    'nombre' =>'Vedra',
    'habitantes' =>'5059',
    'deuda'=>'621'
    );
$deuda[15][15090]=array(
    'nombre' =>'Vilasantar',
    'habitantes' =>'1280',
    'deuda'=>'381'
    );
$deuda[15][15091]=array(
    'nombre' =>'Vilarmaior',
    'habitantes' =>'1233',
    'deuda'=>'0'
    );
$deuda[15][15092]=array(
    'nombre' =>'Vimianzo',
    'habitantes' =>'7520',
    'deuda'=>'715'
    );
$deuda[15][15093]=array(
    'nombre' =>'Zas',
    'habitantes' =>'4846',
    'deuda'=>'0'
    );
$deuda[15][15901]=array(
    'nombre' =>'Cariño',
    'habitantes' =>'4167',
    'deuda'=>'1386'
    );
$deuda[15][15902]=array(
    'nombre' =>'Oza-Cesuras',
    'habitantes' =>'5253',
    'deuda'=>'0'
    );
$deuda[16][16001]=array(
    'nombre' =>'Abia de la Obispalía',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[16][16002]=array(
    'nombre' =>'Acebrón, El',
    'habitantes' =>'241',
    'deuda'=>'0'
    );
$deuda[16][16003]=array(
    'nombre' =>'Alarcón',
    'habitantes' =>'148',
    'deuda'=>'65'
    );
$deuda[16][16004]=array(
    'nombre' =>'Albaladejo del Cuende',
    'habitantes' =>'292',
    'deuda'=>'0'
    );
$deuda[16][16005]=array(
    'nombre' =>'Albalate de las Nogueras',
    'habitantes' =>'272',
    'deuda'=>'29'
    );
$deuda[16][16006]=array(
    'nombre' =>'Albendea',
    'habitantes' =>'134',
    'deuda'=>'51'
    );
$deuda[16][16007]=array(
    'nombre' =>'Alberca de Záncara, La',
    'habitantes' =>'1723',
    'deuda'=>'324'
    );
$deuda[16][16008]=array(
    'nombre' =>'Alcalá de la Vega',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[16][16009]=array(
    'nombre' =>'Alcantud',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[16][16010]=array(
    'nombre' =>'Alcázar del Rey',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[16][16011]=array(
    'nombre' =>'Alcohujate',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[16][16012]=array(
    'nombre' =>'Alconchel de la Estrella',
    'habitantes' =>'111',
    'deuda'=>'57'
    );
$deuda[16][16013]=array(
    'nombre' =>'Algarra',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[16][16014]=array(
    'nombre' =>'Aliaguilla',
    'habitantes' =>'698',
    'deuda'=>'0'
    );
$deuda[16][16015]=array(
    'nombre' =>'Almarcha, La',
    'habitantes' =>'415',
    'deuda'=>'237'
    );
$deuda[16][16016]=array(
    'nombre' =>'Almendros',
    'habitantes' =>'272',
    'deuda'=>'113'
    );
$deuda[16][16017]=array(
    'nombre' =>'Almodóvar del Pinar',
    'habitantes' =>'447',
    'deuda'=>'0'
    );
$deuda[16][16018]=array(
    'nombre' =>'Almonacid del Marquesado',
    'habitantes' =>'458',
    'deuda'=>'290'
    );
$deuda[16][16019]=array(
    'nombre' =>'Altarejos',
    'habitantes' =>'229',
    'deuda'=>'0'
    );
$deuda[16][16020]=array(
    'nombre' =>'Arandilla del Arroyo',
    'habitantes' =>'16',
    'deuda'=>'0'
    );
$deuda[16][16022]=array(
    'nombre' =>'Arcos de la Sierra',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[16][16023]=array(
    'nombre' =>'Chillarón de Cuenca',
    'habitantes' =>'567',
    'deuda'=>'0'
    );
$deuda[16][16024]=array(
    'nombre' =>'Arguisuelas',
    'habitantes' =>'146',
    'deuda'=>'0'
    );
$deuda[16][16025]=array(
    'nombre' =>'Arrancacepas',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[16][16026]=array(
    'nombre' =>'Atalaya del Cañavate',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[16][16027]=array(
    'nombre' =>'Barajas de Melo',
    'habitantes' =>'935',
    'deuda'=>'455'
    );
$deuda[16][16029]=array(
    'nombre' =>'Barchín del Hoyo',
    'habitantes' =>'90',
    'deuda'=>'65'
    );
$deuda[16][16030]=array(
    'nombre' =>'Bascuñana de San Pedro',
    'habitantes' =>'20',
    'deuda'=>'5'
    );
$deuda[16][16031]=array(
    'nombre' =>'Beamud',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[16][16032]=array(
    'nombre' =>'Belinchón',
    'habitantes' =>'356',
    'deuda'=>'0'
    );
$deuda[16][16033]=array(
    'nombre' =>'Belmonte',
    'habitantes' =>'2019',
    'deuda'=>'555'
    );
$deuda[16][16034]=array(
    'nombre' =>'Belmontejo',
    'habitantes' =>'196',
    'deuda'=>'0'
    );
$deuda[16][16035]=array(
    'nombre' =>'Beteta',
    'habitantes' =>'293',
    'deuda'=>'0'
    );
$deuda[16][16036]=array(
    'nombre' =>'Boniches',
    'habitantes' =>'151',
    'deuda'=>'0'
    );
$deuda[16][16038]=array(
    'nombre' =>'Buciegas',
    'habitantes' =>'46',
    'deuda'=>'4'
    );
$deuda[16][16039]=array(
    'nombre' =>'Buenache de Alarcón',
    'habitantes' =>'499',
    'deuda'=>'0'
    );
$deuda[16][16040]=array(
    'nombre' =>'Buenache de la Sierra',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[16][16041]=array(
    'nombre' =>'Buendía',
    'habitantes' =>'425',
    'deuda'=>'15'
    );
$deuda[16][16042]=array(
    'nombre' =>'Campillo de Altobuey',
    'habitantes' =>'1481',
    'deuda'=>'475'
    );
$deuda[16][16043]=array(
    'nombre' =>'Campillos-Paravientos',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[16][16044]=array(
    'nombre' =>'Campillos-Sierra',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[16][16045]=array(
    'nombre' =>'Canalejas del Arroyo',
    'habitantes' =>'289',
    'deuda'=>'54'
    );
$deuda[16][16046]=array(
    'nombre' =>'Cañada del Hoyo',
    'habitantes' =>'280',
    'deuda'=>'0'
    );
$deuda[16][16047]=array(
    'nombre' =>'Cañada Juncosa',
    'habitantes' =>'272',
    'deuda'=>'0'
    );
$deuda[16][16048]=array(
    'nombre' =>'Cañamares',
    'habitantes' =>'500',
    'deuda'=>'0'
    );
$deuda[16][16049]=array(
    'nombre' =>'Cañavate, El',
    'habitantes' =>'165',
    'deuda'=>'52'
    );
$deuda[16][16050]=array(
    'nombre' =>'Cañaveras',
    'habitantes' =>'325',
    'deuda'=>'249'
    );
$deuda[16][16051]=array(
    'nombre' =>'Cañaveruelas',
    'habitantes' =>'151',
    'deuda'=>'0'
    );
$deuda[16][16052]=array(
    'nombre' =>'Cañete',
    'habitantes' =>'802',
    'deuda'=>'0'
    );
$deuda[16][16053]=array(
    'nombre' =>'Cañizares',
    'habitantes' =>'505',
    'deuda'=>'74'
    );
$deuda[16][16055]=array(
    'nombre' =>'Carboneras de Guadazaón',
    'habitantes' =>'810',
    'deuda'=>'76'
    );
$deuda[16][16056]=array(
    'nombre' =>'Cardenete',
    'habitantes' =>'533',
    'deuda'=>'0'
    );
$deuda[16][16057]=array(
    'nombre' =>'Carrascosa',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[16][16058]=array(
    'nombre' =>'Carrascosa de Haro',
    'habitantes' =>'122',
    'deuda'=>'0'
    );
$deuda[16][16060]=array(
    'nombre' =>'Casas de Benítez',
    'habitantes' =>'918',
    'deuda'=>'875'
    );
$deuda[16][16061]=array(
    'nombre' =>'Casas de Fernando Alonso',
    'habitantes' =>'1311',
    'deuda'=>'349'
    );
$deuda[16][16062]=array(
    'nombre' =>'Casas de Garcimolina',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[16][16063]=array(
    'nombre' =>'Casas de Guijarro',
    'habitantes' =>'116',
    'deuda'=>'30'
    );
$deuda[16][16064]=array(
    'nombre' =>'Casas de Haro',
    'habitantes' =>'873',
    'deuda'=>'0'
    );
$deuda[16][16065]=array(
    'nombre' =>'Casas de los Pinos',
    'habitantes' =>'464',
    'deuda'=>'140'
    );
$deuda[16][16066]=array(
    'nombre' =>'Casasimarro',
    'habitantes' =>'3144',
    'deuda'=>'795'
    );
$deuda[16][16067]=array(
    'nombre' =>'Castejón',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[16][16068]=array(
    'nombre' =>'Castillejo de Iniesta',
    'habitantes' =>'189',
    'deuda'=>'123'
    );
$deuda[16][16070]=array(
    'nombre' =>'Castillejo-Sierra',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[16][16071]=array(
    'nombre' =>'Castillo-Albaráñez',
    'habitantes' =>'21',
    'deuda'=>'0'
    );
$deuda[16][16072]=array(
    'nombre' =>'Castillo de Garcimuñoz',
    'habitantes' =>'157',
    'deuda'=>'0'
    );
$deuda[16][16073]=array(
    'nombre' =>'Cervera del Llano',
    'habitantes' =>'231',
    'deuda'=>'0'
    );
$deuda[16][16074]=array(
    'nombre' =>'Cierva, La',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[16][16078]=array(
    'nombre' =>'Cuenca',
    'habitantes' =>'55428',
    'deuda'=>'61570'
    );
$deuda[16][16079]=array(
    'nombre' =>'Cueva del Hierro',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[16][16081]=array(
    'nombre' =>'Chumillas',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[16][16082]=array(
    'nombre' =>'Enguídanos',
    'habitantes' =>'345',
    'deuda'=>'18'
    );
$deuda[16][16083]=array(
    'nombre' =>'Fresneda de Altarejos',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[16][16084]=array(
    'nombre' =>'Fresneda de la Sierra',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[16][16085]=array(
    'nombre' =>'Frontera, La',
    'habitantes' =>'170',
    'deuda'=>'28'
    );
$deuda[16][16086]=array(
    'nombre' =>'Fuente de Pedro Naharro',
    'habitantes' =>'1248',
    'deuda'=>'0'
    );
$deuda[16][16087]=array(
    'nombre' =>'Fuentelespino de Haro',
    'habitantes' =>'280',
    'deuda'=>'0'
    );
$deuda[16][16088]=array(
    'nombre' =>'Fuentelespino de Moya',
    'habitantes' =>'125',
    'deuda'=>'0'
    );
$deuda[16][16089]=array(
    'nombre' =>'Fuentes',
    'habitantes' =>'465',
    'deuda'=>'0'
    );
$deuda[16][16091]=array(
    'nombre' =>'Fuertescusa',
    'habitantes' =>'75',
    'deuda'=>'0'
    );
$deuda[16][16092]=array(
    'nombre' =>'Gabaldón',
    'habitantes' =>'188',
    'deuda'=>'1'
    );
$deuda[16][16093]=array(
    'nombre' =>'Garaballa',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[16][16094]=array(
    'nombre' =>'Gascueña',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[16][16095]=array(
    'nombre' =>'Graja de Campalbo',
    'habitantes' =>'101',
    'deuda'=>'0'
    );
$deuda[16][16096]=array(
    'nombre' =>'Graja de Iniesta',
    'habitantes' =>'370',
    'deuda'=>'227'
    );
$deuda[16][16097]=array(
    'nombre' =>'Henarejos',
    'habitantes' =>'169',
    'deuda'=>'0'
    );
$deuda[16][16098]=array(
    'nombre' =>'Herrumblar, El',
    'habitantes' =>'717',
    'deuda'=>'150'
    );
$deuda[16][16099]=array(
    'nombre' =>'Hinojosa, La',
    'habitantes' =>'214',
    'deuda'=>'37'
    );
$deuda[16][16100]=array(
    'nombre' =>'Hinojosos, Los',
    'habitantes' =>'884',
    'deuda'=>'0'
    );
$deuda[16][16101]=array(
    'nombre' =>'Hito, El',
    'habitantes' =>'173',
    'deuda'=>'27'
    );
$deuda[16][16102]=array(
    'nombre' =>'Honrubia',
    'habitantes' =>'1650',
    'deuda'=>'0'
    );
$deuda[16][16103]=array(
    'nombre' =>'Hontanaya',
    'habitantes' =>'319',
    'deuda'=>'0'
    );
$deuda[16][16104]=array(
    'nombre' =>'Hontecillas',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[16][16106]=array(
    'nombre' =>'Horcajo de Santiago',
    'habitantes' =>'3689',
    'deuda'=>'1590'
    );
$deuda[16][16107]=array(
    'nombre' =>'Huélamo',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[16][16108]=array(
    'nombre' =>'Huelves',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[16][16109]=array(
    'nombre' =>'Huérguina',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[16][16110]=array(
    'nombre' =>'Huerta de la Obispalía',
    'habitantes' =>'133',
    'deuda'=>'0'
    );
$deuda[16][16111]=array(
    'nombre' =>'Huerta del Marquesado',
    'habitantes' =>'210',
    'deuda'=>'0'
    );
$deuda[16][16112]=array(
    'nombre' =>'Huete',
    'habitantes' =>'1862',
    'deuda'=>'2032'
    );
$deuda[16][16113]=array(
    'nombre' =>'Iniesta',
    'habitantes' =>'4382',
    'deuda'=>'338'
    );
$deuda[16][16115]=array(
    'nombre' =>'Laguna del Marquesado',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[16][16116]=array(
    'nombre' =>'Lagunaseca',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[16][16117]=array(
    'nombre' =>'Landete',
    'habitantes' =>'1310',
    'deuda'=>'194'
    );
$deuda[16][16118]=array(
    'nombre' =>'Ledaña',
    'habitantes' =>'1662',
    'deuda'=>'2124'
    );
$deuda[16][16119]=array(
    'nombre' =>'Leganiel',
    'habitantes' =>'189',
    'deuda'=>'7'
    );
$deuda[16][16121]=array(
    'nombre' =>'Majadas, Las',
    'habitantes' =>'284',
    'deuda'=>'512'
    );
$deuda[16][16122]=array(
    'nombre' =>'Mariana',
    'habitantes' =>'320',
    'deuda'=>'202'
    );
$deuda[16][16123]=array(
    'nombre' =>'Masegosa',
    'habitantes' =>'79',
    'deuda'=>'15'
    );
$deuda[16][16124]=array(
    'nombre' =>'Mesas, Las',
    'habitantes' =>'2388',
    'deuda'=>'0'
    );
$deuda[16][16125]=array(
    'nombre' =>'Minglanilla',
    'habitantes' =>'2367',
    'deuda'=>'417'
    );
$deuda[16][16126]=array(
    'nombre' =>'Mira',
    'habitantes' =>'987',
    'deuda'=>'110'
    );
$deuda[16][16128]=array(
    'nombre' =>'Monreal del Llano',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[16][16129]=array(
    'nombre' =>'Montalbanejo',
    'habitantes' =>'118',
    'deuda'=>'61'
    );
$deuda[16][16130]=array(
    'nombre' =>'Montalbo',
    'habitantes' =>'687',
    'deuda'=>'1645'
    );
$deuda[16][16131]=array(
    'nombre' =>'Monteagudo de las Salinas',
    'habitantes' =>'144',
    'deuda'=>'141'
    );
$deuda[16][16132]=array(
    'nombre' =>'Mota de Altarejos',
    'habitantes' =>'31',
    'deuda'=>'10'
    );
$deuda[16][16133]=array(
    'nombre' =>'Mota del Cuervo',
    'habitantes' =>'6172',
    'deuda'=>'1359'
    );
$deuda[16][16134]=array(
    'nombre' =>'Motilla del Palancar',
    'habitantes' =>'5896',
    'deuda'=>'1668'
    );
$deuda[16][16135]=array(
    'nombre' =>'Moya',
    'habitantes' =>'171',
    'deuda'=>'0'
    );
$deuda[16][16137]=array(
    'nombre' =>'Narboneta',
    'habitantes' =>'56',
    'deuda'=>'27'
    );
$deuda[16][16139]=array(
    'nombre' =>'Olivares de Júcar',
    'habitantes' =>'345',
    'deuda'=>'106'
    );
$deuda[16][16140]=array(
    'nombre' =>'Olmeda de la Cuesta',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[16][16141]=array(
    'nombre' =>'Olmeda del Rey',
    'habitantes' =>'135',
    'deuda'=>'21'
    );
$deuda[16][16142]=array(
    'nombre' =>'Olmedilla de Alarcón',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[16][16143]=array(
    'nombre' =>'Olmedilla de Eliz',
    'habitantes' =>'19',
    'deuda'=>'0'
    );
$deuda[16][16145]=array(
    'nombre' =>'Osa de la Vega',
    'habitantes' =>'544',
    'deuda'=>'0'
    );
$deuda[16][16146]=array(
    'nombre' =>'Pajarón',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[16][16147]=array(
    'nombre' =>'Pajaroncillo',
    'habitantes' =>'76',
    'deuda'=>'0'
    );
$deuda[16][16148]=array(
    'nombre' =>'Palomares del Campo',
    'habitantes' =>'680',
    'deuda'=>'52'
    );
$deuda[16][16149]=array(
    'nombre' =>'Palomera',
    'habitantes' =>'186',
    'deuda'=>'0'
    );
$deuda[16][16150]=array(
    'nombre' =>'Paracuellos',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[16][16151]=array(
    'nombre' =>'Paredes',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[16][16152]=array(
    'nombre' =>'Parra de las Vegas, La',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[16][16153]=array(
    'nombre' =>'Pedernoso, El',
    'habitantes' =>'1189',
    'deuda'=>'0'
    );
$deuda[16][16154]=array(
    'nombre' =>'Pedroñeras, Las',
    'habitantes' =>'6816',
    'deuda'=>'2730'
    );
$deuda[16][16155]=array(
    'nombre' =>'Peral, El',
    'habitantes' =>'693',
    'deuda'=>'48'
    );
$deuda[16][16156]=array(
    'nombre' =>'Peraleja, La',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[16][16157]=array(
    'nombre' =>'Pesquera, La',
    'habitantes' =>'248',
    'deuda'=>'0'
    );
$deuda[16][16158]=array(
    'nombre' =>'Picazo, El',
    'habitantes' =>'710',
    'deuda'=>'254'
    );
$deuda[16][16159]=array(
    'nombre' =>'Pinarejo',
    'habitantes' =>'238',
    'deuda'=>'0'
    );
$deuda[16][16160]=array(
    'nombre' =>'Pineda de Gigüela',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[16][16161]=array(
    'nombre' =>'Piqueras del Castillo',
    'habitantes' =>'57',
    'deuda'=>'35'
    );
$deuda[16][16162]=array(
    'nombre' =>'Portalrubio de Guadamejud',
    'habitantes' =>'30',
    'deuda'=>'3'
    );
$deuda[16][16163]=array(
    'nombre' =>'Portilla',
    'habitantes' =>'74',
    'deuda'=>'73'
    );
$deuda[16][16165]=array(
    'nombre' =>'Poyatos',
    'habitantes' =>'67',
    'deuda'=>'79'
    );
$deuda[16][16166]=array(
    'nombre' =>'Pozoamargo',
    'habitantes' =>'311',
    'deuda'=>'57'
    );
$deuda[16][16167]=array(
    'nombre' =>'Pozorrubio de Santiago',
    'habitantes' =>'345',
    'deuda'=>'0'
    );
$deuda[16][16169]=array(
    'nombre' =>'Pozuelo, El',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[16][16170]=array(
    'nombre' =>'Priego',
    'habitantes' =>'1014',
    'deuda'=>'0'
    );
$deuda[16][16171]=array(
    'nombre' =>'Provencio, El',
    'habitantes' =>'2526',
    'deuda'=>'235'
    );
$deuda[16][16172]=array(
    'nombre' =>'Puebla de Almenara',
    'habitantes' =>'416',
    'deuda'=>'0'
    );
$deuda[16][16173]=array(
    'nombre' =>'Valle de Altomira, El',
    'habitantes' =>'246',
    'deuda'=>'0'
    );
$deuda[16][16174]=array(
    'nombre' =>'Puebla del Salvador',
    'habitantes' =>'211',
    'deuda'=>'100'
    );
$deuda[16][16175]=array(
    'nombre' =>'Quintanar del Rey',
    'habitantes' =>'7576',
    'deuda'=>'809'
    );
$deuda[16][16176]=array(
    'nombre' =>'Rada de Haro',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[16][16177]=array(
    'nombre' =>'Reíllo',
    'habitantes' =>'89',
    'deuda'=>'71'
    );
$deuda[16][16181]=array(
    'nombre' =>'Rozalén del Monte',
    'habitantes' =>'75',
    'deuda'=>'0'
    );
$deuda[16][16185]=array(
    'nombre' =>'Saceda-Trasierra',
    'habitantes' =>'51',
    'deuda'=>'37'
    );
$deuda[16][16186]=array(
    'nombre' =>'Saelices',
    'habitantes' =>'553',
    'deuda'=>'259'
    );
$deuda[16][16187]=array(
    'nombre' =>'Salinas del Manzano',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[16][16188]=array(
    'nombre' =>'Salmeroncillos',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[16][16189]=array(
    'nombre' =>'Salvacañete',
    'habitantes' =>'316',
    'deuda'=>'288'
    );
$deuda[16][16190]=array(
    'nombre' =>'San Clemente',
    'habitantes' =>'6754',
    'deuda'=>'4685'
    );
$deuda[16][16191]=array(
    'nombre' =>'San Lorenzo de la Parrilla',
    'habitantes' =>'1153',
    'deuda'=>'557'
    );
$deuda[16][16192]=array(
    'nombre' =>'San Martín de Boniches',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[16][16193]=array(
    'nombre' =>'San Pedro Palmiches',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[16][16194]=array(
    'nombre' =>'Santa Cruz de Moya',
    'habitantes' =>'259',
    'deuda'=>'138'
    );
$deuda[16][16195]=array(
    'nombre' =>'Santa María del Campo Rus',
    'habitantes' =>'626',
    'deuda'=>'0'
    );
$deuda[16][16196]=array(
    'nombre' =>'Santa María de los Llanos',
    'habitantes' =>'721',
    'deuda'=>'0'
    );
$deuda[16][16197]=array(
    'nombre' =>'Santa María del Val',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[16][16198]=array(
    'nombre' =>'Sisante',
    'habitantes' =>'1758',
    'deuda'=>'0'
    );
$deuda[16][16199]=array(
    'nombre' =>'Solera de Gabaldón',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[16][16202]=array(
    'nombre' =>'Talayuelas',
    'habitantes' =>'944',
    'deuda'=>'458'
    );
$deuda[16][16203]=array(
    'nombre' =>'Tarancón',
    'habitantes' =>'14922',
    'deuda'=>'10363'
    );
$deuda[16][16204]=array(
    'nombre' =>'Tébar',
    'habitantes' =>'303',
    'deuda'=>'0'
    );
$deuda[16][16205]=array(
    'nombre' =>'Tejadillos',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[16][16206]=array(
    'nombre' =>'Tinajas',
    'habitantes' =>'221',
    'deuda'=>'95'
    );
$deuda[16][16209]=array(
    'nombre' =>'Torralba',
    'habitantes' =>'127',
    'deuda'=>'11'
    );
$deuda[16][16211]=array(
    'nombre' =>'Torrejoncillo del Rey',
    'habitantes' =>'433',
    'deuda'=>'0'
    );
$deuda[16][16212]=array(
    'nombre' =>'Torrubia del Campo',
    'habitantes' =>'285',
    'deuda'=>'0'
    );
$deuda[16][16213]=array(
    'nombre' =>'Torrubia del Castillo',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[16][16215]=array(
    'nombre' =>'Tragacete',
    'habitantes' =>'288',
    'deuda'=>'0'
    );
$deuda[16][16216]=array(
    'nombre' =>'Tresjuncos',
    'habitantes' =>'343',
    'deuda'=>'15'
    );
$deuda[16][16217]=array(
    'nombre' =>'Tribaldos',
    'habitantes' =>'95',
    'deuda'=>'0'
    );
$deuda[16][16218]=array(
    'nombre' =>'Uclés',
    'habitantes' =>'234',
    'deuda'=>'124'
    );
$deuda[16][16219]=array(
    'nombre' =>'Uña',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[16][16224]=array(
    'nombre' =>'Valdemeca',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[16][16225]=array(
    'nombre' =>'Valdemorillo de la Sierra',
    'habitantes' =>'83',
    'deuda'=>'0'
    );
$deuda[16][16227]=array(
    'nombre' =>'Valdemoro-Sierra',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[16][16228]=array(
    'nombre' =>'Valdeolivas',
    'habitantes' =>'208',
    'deuda'=>'132'
    );
$deuda[16][16231]=array(
    'nombre' =>'Valhermoso de la Fuente',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[16][16234]=array(
    'nombre' =>'Valsalobre',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[16][16236]=array(
    'nombre' =>'Valverde de Júcar',
    'habitantes' =>'1172',
    'deuda'=>'0'
    );
$deuda[16][16237]=array(
    'nombre' =>'Valverdejo',
    'habitantes' =>'101',
    'deuda'=>'23'
    );
$deuda[16][16238]=array(
    'nombre' =>'Vara de Rey',
    'habitantes' =>'561',
    'deuda'=>'0'
    );
$deuda[16][16239]=array(
    'nombre' =>'Vega del Codorno',
    'habitantes' =>'153',
    'deuda'=>'0'
    );
$deuda[16][16240]=array(
    'nombre' =>'Vellisca',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[16][16242]=array(
    'nombre' =>'Villaconejos de Trabaque',
    'habitantes' =>'372',
    'deuda'=>'113'
    );
$deuda[16][16243]=array(
    'nombre' =>'Villaescusa de Haro',
    'habitantes' =>'529',
    'deuda'=>'62'
    );
$deuda[16][16244]=array(
    'nombre' =>'Villagarcía del Llano',
    'habitantes' =>'762',
    'deuda'=>'205'
    );
$deuda[16][16245]=array(
    'nombre' =>'Villalba de la Sierra',
    'habitantes' =>'509',
    'deuda'=>'159'
    );
$deuda[16][16246]=array(
    'nombre' =>'Villalba del Rey',
    'habitantes' =>'566',
    'deuda'=>'19'
    );
$deuda[16][16247]=array(
    'nombre' =>'Villalgordo del Marquesado',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[16][16248]=array(
    'nombre' =>'Villalpardo',
    'habitantes' =>'970',
    'deuda'=>'545'
    );
$deuda[16][16249]=array(
    'nombre' =>'Villamayor de Santiago',
    'habitantes' =>'2617',
    'deuda'=>'0'
    );
$deuda[16][16250]=array(
    'nombre' =>'Villanueva de Guadamejud',
    'habitantes' =>'80',
    'deuda'=>'37'
    );
$deuda[16][16251]=array(
    'nombre' =>'Villanueva de la Jara',
    'habitantes' =>'2304',
    'deuda'=>'345'
    );
$deuda[16][16253]=array(
    'nombre' =>'Villar de Cañas',
    'habitantes' =>'447',
    'deuda'=>'609'
    );
$deuda[16][16254]=array(
    'nombre' =>'Villar de Domingo García',
    'habitantes' =>'218',
    'deuda'=>'32'
    );
$deuda[16][16255]=array(
    'nombre' =>'Villar de la Encina',
    'habitantes' =>'164',
    'deuda'=>'0'
    );
$deuda[16][16258]=array(
    'nombre' =>'Villar del Humo',
    'habitantes' =>'235',
    'deuda'=>'46'
    );
$deuda[16][16259]=array(
    'nombre' =>'Villar del Infantado',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[16][16263]=array(
    'nombre' =>'Villar de Olalla',
    'habitantes' =>'1236',
    'deuda'=>'0'
    );
$deuda[16][16264]=array(
    'nombre' =>'Villarejo de Fuentes',
    'habitantes' =>'488',
    'deuda'=>'375'
    );
$deuda[16][16265]=array(
    'nombre' =>'Villarejo de la Peñuela',
    'habitantes' =>'21',
    'deuda'=>'0'
    );
$deuda[16][16266]=array(
    'nombre' =>'Villarejo-Periesteban',
    'habitantes' =>'324',
    'deuda'=>'0'
    );
$deuda[16][16269]=array(
    'nombre' =>'Villares del Saz',
    'habitantes' =>'517',
    'deuda'=>'14'
    );
$deuda[16][16270]=array(
    'nombre' =>'Villarrubio',
    'habitantes' =>'211',
    'deuda'=>'44'
    );
$deuda[16][16271]=array(
    'nombre' =>'Villarta',
    'habitantes' =>'917',
    'deuda'=>'0'
    );
$deuda[16][16272]=array(
    'nombre' =>'Villas de la Ventosa',
    'habitantes' =>'280',
    'deuda'=>'23'
    );
$deuda[16][16273]=array(
    'nombre' =>'Villaverde y Pasaconsol',
    'habitantes' =>'352',
    'deuda'=>'0'
    );
$deuda[16][16274]=array(
    'nombre' =>'Víllora',
    'habitantes' =>'141',
    'deuda'=>'0'
    );
$deuda[16][16275]=array(
    'nombre' =>'Vindel',
    'habitantes' =>'12',
    'deuda'=>'0'
    );
$deuda[16][16276]=array(
    'nombre' =>'Yémeda',
    'habitantes' =>'23',
    'deuda'=>'0'
    );
$deuda[16][16277]=array(
    'nombre' =>'Zafra de Záncara',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[16][16278]=array(
    'nombre' =>'Zafrilla',
    'habitantes' =>'75',
    'deuda'=>'0'
    );
$deuda[16][16279]=array(
    'nombre' =>'Zarza de Tajo',
    'habitantes' =>'296',
    'deuda'=>'0'
    );
$deuda[16][16280]=array(
    'nombre' =>'Zarzuela',
    'habitantes' =>'204',
    'deuda'=>'0'
    );
$deuda[16][16901]=array(
    'nombre' =>'Campos del Paraíso',
    'habitantes' =>'845',
    'deuda'=>'273'
    );
$deuda[16][16902]=array(
    'nombre' =>'Valdetórtola',
    'habitantes' =>'154',
    'deuda'=>'0'
    );
$deuda[16][16903]=array(
    'nombre' =>'Valeras, Las',
    'habitantes' =>'1632',
    'deuda'=>'0'
    );
$deuda[16][16904]=array(
    'nombre' =>'Fuentenava de Jábaga',
    'habitantes' =>'568',
    'deuda'=>'0'
    );
$deuda[16][16905]=array(
    'nombre' =>'Arcas',
    'habitantes' =>'1605',
    'deuda'=>'870'
    );
$deuda[16][16906]=array(
    'nombre' =>'Valdecolmenas, Los',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[16][16908]=array(
    'nombre' =>'Pozorrubielos de la Mancha',
    'habitantes' =>'211',
    'deuda'=>'0'
    );
$deuda[16][16909]=array(
    'nombre' =>'Sotorribas',
    'habitantes' =>'802',
    'deuda'=>'0'
    );
$deuda[16][16910]=array(
    'nombre' =>'Villar y Velasco',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[17][17001]=array(
    'nombre' =>'Agullana',
    'habitantes' =>'828',
    'deuda'=>'465'
    );
$deuda[17][17002]=array(
    'nombre' =>'Aiguaviva',
    'habitantes' =>'775',
    'deuda'=>'115'
    );
$deuda[17][17003]=array(
    'nombre' =>'Albanyà',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[17][17004]=array(
    'nombre' =>'Albons',
    'habitantes' =>'745',
    'deuda'=>'284'
    );
$deuda[17][17005]=array(
    'nombre' =>'Far d\'Empordà, El',
    'habitantes' =>'552',
    'deuda'=>'55'
    );
$deuda[17][17006]=array(
    'nombre' =>'Alp',
    'habitantes' =>'1595',
    'deuda'=>'94'
    );
$deuda[17][17007]=array(
    'nombre' =>'Amer',
    'habitantes' =>'2250',
    'deuda'=>'755'
    );
$deuda[17][17008]=array(
    'nombre' =>'Anglès',
    'habitantes' =>'5540',
    'deuda'=>'6563'
    );
$deuda[17][17009]=array(
    'nombre' =>'Arbúcies',
    'habitantes' =>'6297',
    'deuda'=>'4934'
    );
$deuda[17][17010]=array(
    'nombre' =>'Argelaguer',
    'habitantes' =>'412',
    'deuda'=>'48'
    );
$deuda[17][17011]=array(
    'nombre' =>'Armentera, L\'',
    'habitantes' =>'907',
    'deuda'=>'9'
    );
$deuda[17][17012]=array(
    'nombre' =>'Avinyonet de Puigventós',
    'habitantes' =>'1565',
    'deuda'=>'72'
    );
$deuda[17][17013]=array(
    'nombre' =>'Begur',
    'habitantes' =>'3985',
    'deuda'=>'3442'
    );
$deuda[17][17014]=array(
    'nombre' =>'Vajol, La',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[17][17015]=array(
    'nombre' =>'Banyoles',
    'habitantes' =>'19299',
    'deuda'=>'8948'
    );
$deuda[17][17016]=array(
    'nombre' =>'Bàscara',
    'habitantes' =>'943',
    'deuda'=>'2380'
    );
$deuda[17][17018]=array(
    'nombre' =>'Bellcaire d\'Empordà',
    'habitantes' =>'652',
    'deuda'=>'0'
    );
$deuda[17][17019]=array(
    'nombre' =>'Besalú',
    'habitantes' =>'2437',
    'deuda'=>'4752'
    );
$deuda[17][17020]=array(
    'nombre' =>'Bescanó',
    'habitantes' =>'4807',
    'deuda'=>'2696'
    );
$deuda[17][17021]=array(
    'nombre' =>'Beuda',
    'habitantes' =>'193',
    'deuda'=>'0'
    );
$deuda[17][17022]=array(
    'nombre' =>'Bisbal d\'Empordà, La',
    'habitantes' =>'10759',
    'deuda'=>'6369'
    );
$deuda[17][17023]=array(
    'nombre' =>'Blanes',
    'habitantes' =>'39132',
    'deuda'=>'31769'
    );
$deuda[17][17024]=array(
    'nombre' =>'Bolvir',
    'habitantes' =>'380',
    'deuda'=>'382'
    );
$deuda[17][17025]=array(
    'nombre' =>'Bordils',
    'habitantes' =>'1710',
    'deuda'=>'538'
    );
$deuda[17][17026]=array(
    'nombre' =>'Borrassà',
    'habitantes' =>'711',
    'deuda'=>'0'
    );
$deuda[17][17027]=array(
    'nombre' =>'Breda',
    'habitantes' =>'3728',
    'deuda'=>'1508'
    );
$deuda[17][17028]=array(
    'nombre' =>'Brunyola',
    'habitantes' =>'394',
    'deuda'=>'0'
    );
$deuda[17][17029]=array(
    'nombre' =>'Boadella i les Escaules',
    'habitantes' =>'261',
    'deuda'=>'525'
    );
$deuda[17][17030]=array(
    'nombre' =>'Cabanes',
    'habitantes' =>'931',
    'deuda'=>'185'
    );
$deuda[17][17031]=array(
    'nombre' =>'Cabanelles',
    'habitantes' =>'237',
    'deuda'=>'0'
    );
$deuda[17][17032]=array(
    'nombre' =>'Cadaqués',
    'habitantes' =>'2840',
    'deuda'=>'2093'
    );
$deuda[17][17033]=array(
    'nombre' =>'Caldes de Malavella',
    'habitantes' =>'7166',
    'deuda'=>'3270'
    );
$deuda[17][17034]=array(
    'nombre' =>'Calonge',
    'habitantes' =>'10520',
    'deuda'=>'9768'
    );
$deuda[17][17035]=array(
    'nombre' =>'Camós',
    'habitantes' =>'683',
    'deuda'=>'0'
    );
$deuda[17][17036]=array(
    'nombre' =>'Campdevànol',
    'habitantes' =>'3352',
    'deuda'=>'1394'
    );
$deuda[17][17037]=array(
    'nombre' =>'Campelles',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[17][17038]=array(
    'nombre' =>'Campllong',
    'habitantes' =>'499',
    'deuda'=>'233'
    );
$deuda[17][17039]=array(
    'nombre' =>'Camprodon',
    'habitantes' =>'2299',
    'deuda'=>'3263'
    );
$deuda[17][17040]=array(
    'nombre' =>'Canet d\'Adri',
    'habitantes' =>'671',
    'deuda'=>'189'
    );
$deuda[17][17041]=array(
    'nombre' =>'Cantallops',
    'habitantes' =>'328',
    'deuda'=>'301'
    );
$deuda[17][17042]=array(
    'nombre' =>'Capmany',
    'habitantes' =>'590',
    'deuda'=>'64'
    );
$deuda[17][17043]=array(
    'nombre' =>'Queralbs',
    'habitantes' =>'173',
    'deuda'=>'140'
    );
$deuda[17][17044]=array(
    'nombre' =>'Cassà de la Selva',
    'habitantes' =>'10030',
    'deuda'=>'6056'
    );
$deuda[17][17046]=array(
    'nombre' =>'Castellfollit de la Roca',
    'habitantes' =>'992',
    'deuda'=>'1322'
    );
$deuda[17][17047]=array(
    'nombre' =>'Castelló d\'Empúries',
    'habitantes' =>'10870',
    'deuda'=>'11563'
    );
$deuda[17][17048]=array(
    'nombre' =>'Castell-Platja d\'Aro',
    'habitantes' =>'10589',
    'deuda'=>'17039'
    );
$deuda[17][17049]=array(
    'nombre' =>'Celrà',
    'habitantes' =>'5155',
    'deuda'=>'665'
    );
$deuda[17][17050]=array(
    'nombre' =>'Cervià de Ter',
    'habitantes' =>'926',
    'deuda'=>'0'
    );
$deuda[17][17051]=array(
    'nombre' =>'Cistella',
    'habitantes' =>'303',
    'deuda'=>'23'
    );
$deuda[17][17052]=array(
    'nombre' =>'Siurana',
    'habitantes' =>'152',
    'deuda'=>'79'
    );
$deuda[17][17054]=array(
    'nombre' =>'Colera',
    'habitantes' =>'533',
    'deuda'=>'624'
    );
$deuda[17][17055]=array(
    'nombre' =>'Colomers',
    'habitantes' =>'189',
    'deuda'=>'0'
    );
$deuda[17][17056]=array(
    'nombre' =>'Cornellà del Terri',
    'habitantes' =>'2236',
    'deuda'=>'1107'
    );
$deuda[17][17057]=array(
    'nombre' =>'Corçà',
    'habitantes' =>'1244',
    'deuda'=>'277'
    );
$deuda[17][17058]=array(
    'nombre' =>'Crespià',
    'habitantes' =>'256',
    'deuda'=>'387'
    );
$deuda[17][17060]=array(
    'nombre' =>'Darnius',
    'habitantes' =>'554',
    'deuda'=>'0'
    );
$deuda[17][17061]=array(
    'nombre' =>'Das',
    'habitantes' =>'222',
    'deuda'=>'0'
    );
$deuda[17][17062]=array(
    'nombre' =>'Escala, L\'',
    'habitantes' =>'10276',
    'deuda'=>'7087'
    );
$deuda[17][17063]=array(
    'nombre' =>'Espinelves',
    'habitantes' =>'196',
    'deuda'=>'0'
    );
$deuda[17][17064]=array(
    'nombre' =>'Espolla',
    'habitantes' =>'415',
    'deuda'=>'83'
    );
$deuda[17][17065]=array(
    'nombre' =>'Esponellà',
    'habitantes' =>'444',
    'deuda'=>'319'
    );
$deuda[17][17066]=array(
    'nombre' =>'Figueres',
    'habitantes' =>'45346',
    'deuda'=>'28312'
    );
$deuda[17][17067]=array(
    'nombre' =>'Flaçà',
    'habitantes' =>'1060',
    'deuda'=>'0'
    );
$deuda[17][17068]=array(
    'nombre' =>'Foixà',
    'habitantes' =>'306',
    'deuda'=>'50'
    );
$deuda[17][17069]=array(
    'nombre' =>'Fontanals de Cerdanya',
    'habitantes' =>'450',
    'deuda'=>'0'
    );
$deuda[17][17070]=array(
    'nombre' =>'Fontanilles',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[17][17071]=array(
    'nombre' =>'Fontcoberta',
    'habitantes' =>'1448',
    'deuda'=>'417'
    );
$deuda[17][17073]=array(
    'nombre' =>'Fornells de la Selva',
    'habitantes' =>'2528',
    'deuda'=>'0'
    );
$deuda[17][17074]=array(
    'nombre' =>'Fortià',
    'habitantes' =>'723',
    'deuda'=>'50'
    );
$deuda[17][17075]=array(
    'nombre' =>'Garrigàs',
    'habitantes' =>'423',
    'deuda'=>'0'
    );
$deuda[17][17076]=array(
    'nombre' =>'Garrigoles',
    'habitantes' =>'160',
    'deuda'=>'0'
    );
$deuda[17][17077]=array(
    'nombre' =>'Garriguella',
    'habitantes' =>'842',
    'deuda'=>'711'
    );
$deuda[17][17078]=array(
    'nombre' =>'Ger',
    'habitantes' =>'430',
    'deuda'=>'148'
    );
$deuda[17][17079]=array(
    'nombre' =>'Girona',
    'habitantes' =>'97586',
    'deuda'=>'52170'
    );
$deuda[17][17080]=array(
    'nombre' =>'Gombrèn',
    'habitantes' =>'185',
    'deuda'=>'251'
    );
$deuda[17][17081]=array(
    'nombre' =>'Gualta',
    'habitantes' =>'368',
    'deuda'=>'0'
    );
$deuda[17][17082]=array(
    'nombre' =>'Guils de Cerdanya',
    'habitantes' =>'523',
    'deuda'=>'0'
    );
$deuda[17][17083]=array(
    'nombre' =>'Hostalric',
    'habitantes' =>'4005',
    'deuda'=>'1117'
    );
$deuda[17][17084]=array(
    'nombre' =>'Isòvol',
    'habitantes' =>'281',
    'deuda'=>'348'
    );
$deuda[17][17085]=array(
    'nombre' =>'Jafre',
    'habitantes' =>'387',
    'deuda'=>'144'
    );
$deuda[17][17086]=array(
    'nombre' =>'Jonquera, La',
    'habitantes' =>'3220',
    'deuda'=>'676'
    );
$deuda[17][17087]=array(
    'nombre' =>'Juià',
    'habitantes' =>'338',
    'deuda'=>'0'
    );
$deuda[17][17088]=array(
    'nombre' =>'Lladó',
    'habitantes' =>'767',
    'deuda'=>'0'
    );
$deuda[17][17089]=array(
    'nombre' =>'Llagostera',
    'habitantes' =>'8224',
    'deuda'=>'2009'
    );
$deuda[17][17090]=array(
    'nombre' =>'Llambilles',
    'habitantes' =>'733',
    'deuda'=>'41'
    );
$deuda[17][17091]=array(
    'nombre' =>'Llanars',
    'habitantes' =>'512',
    'deuda'=>'237'
    );
$deuda[17][17092]=array(
    'nombre' =>'Llançà',
    'habitantes' =>'4985',
    'deuda'=>'2780'
    );
$deuda[17][17093]=array(
    'nombre' =>'Llers',
    'habitantes' =>'1209',
    'deuda'=>'212'
    );
$deuda[17][17094]=array(
    'nombre' =>'Llívia',
    'habitantes' =>'1456',
    'deuda'=>'505'
    );
$deuda[17][17095]=array(
    'nombre' =>'Lloret de Mar',
    'habitantes' =>'37618',
    'deuda'=>'34214'
    );
$deuda[17][17096]=array(
    'nombre' =>'Llosses, Les',
    'habitantes' =>'226',
    'deuda'=>'10'
    );
$deuda[17][17097]=array(
    'nombre' =>'Madremanya',
    'habitantes' =>'276',
    'deuda'=>'301'
    );
$deuda[17][17098]=array(
    'nombre' =>'Maià de Montcal',
    'habitantes' =>'446',
    'deuda'=>'41'
    );
$deuda[17][17099]=array(
    'nombre' =>'Meranges',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[17][17100]=array(
    'nombre' =>'Masarac',
    'habitantes' =>'294',
    'deuda'=>'0'
    );
$deuda[17][17101]=array(
    'nombre' =>'Massanes',
    'habitantes' =>'722',
    'deuda'=>'1349'
    );
$deuda[17][17102]=array(
    'nombre' =>'Maçanet de Cabrenys',
    'habitantes' =>'755',
    'deuda'=>'491'
    );
$deuda[17][17103]=array(
    'nombre' =>'Maçanet de la Selva',
    'habitantes' =>'6887',
    'deuda'=>'3583'
    );
$deuda[17][17105]=array(
    'nombre' =>'Mieres',
    'habitantes' =>'330',
    'deuda'=>'0'
    );
$deuda[17][17106]=array(
    'nombre' =>'Mollet de Peralada',
    'habitantes' =>'180',
    'deuda'=>'310'
    );
$deuda[17][17107]=array(
    'nombre' =>'Molló',
    'habitantes' =>'330',
    'deuda'=>'140'
    );
$deuda[17][17109]=array(
    'nombre' =>'Montagut i Oix',
    'habitantes' =>'949',
    'deuda'=>'85'
    );
$deuda[17][17110]=array(
    'nombre' =>'Mont-ras',
    'habitantes' =>'1710',
    'deuda'=>'0'
    );
$deuda[17][17111]=array(
    'nombre' =>'Navata',
    'habitantes' =>'1323',
    'deuda'=>'116'
    );
$deuda[17][17112]=array(
    'nombre' =>'Ogassa',
    'habitantes' =>'232',
    'deuda'=>'928'
    );
$deuda[17][17114]=array(
    'nombre' =>'Olot',
    'habitantes' =>'33944',
    'deuda'=>'26115'
    );
$deuda[17][17115]=array(
    'nombre' =>'Ordis',
    'habitantes' =>'389',
    'deuda'=>'102'
    );
$deuda[17][17116]=array(
    'nombre' =>'Osor',
    'habitantes' =>'421',
    'deuda'=>'135'
    );
$deuda[17][17117]=array(
    'nombre' =>'Palafrugell',
    'habitantes' =>'22733',
    'deuda'=>'7755'
    );
$deuda[17][17118]=array(
    'nombre' =>'Palamós',
    'habitantes' =>'17911',
    'deuda'=>'11982'
    );
$deuda[17][17119]=array(
    'nombre' =>'Palau de Santa Eulàlia',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[17][17120]=array(
    'nombre' =>'Palau-saverdera',
    'habitantes' =>'1485',
    'deuda'=>'1710'
    );
$deuda[17][17121]=array(
    'nombre' =>'Palau-sator',
    'habitantes' =>'298',
    'deuda'=>'0'
    );
$deuda[17][17123]=array(
    'nombre' =>'Palol de Revardit',
    'habitantes' =>'466',
    'deuda'=>'0'
    );
$deuda[17][17124]=array(
    'nombre' =>'Pals',
    'habitantes' =>'2501',
    'deuda'=>'1194'
    );
$deuda[17][17125]=array(
    'nombre' =>'Pardines',
    'habitantes' =>'155',
    'deuda'=>'334'
    );
$deuda[17][17126]=array(
    'nombre' =>'Parlavà',
    'habitantes' =>'398',
    'deuda'=>'57'
    );
$deuda[17][17128]=array(
    'nombre' =>'Pau',
    'habitantes' =>'557',
    'deuda'=>'584'
    );
$deuda[17][17129]=array(
    'nombre' =>'Pedret i Marzà',
    'habitantes' =>'193',
    'deuda'=>'0'
    );
$deuda[17][17130]=array(
    'nombre' =>'Pera, La',
    'habitantes' =>'441',
    'deuda'=>'490'
    );
$deuda[17][17132]=array(
    'nombre' =>'Peralada',
    'habitantes' =>'1841',
    'deuda'=>'1434'
    );
$deuda[17][17133]=array(
    'nombre' =>'Planes d\'Hostoles, Les',
    'habitantes' =>'1674',
    'deuda'=>'398'
    );
$deuda[17][17134]=array(
    'nombre' =>'Planoles',
    'habitantes' =>'298',
    'deuda'=>'116'
    );
$deuda[17][17135]=array(
    'nombre' =>'Pont de Molins',
    'habitantes' =>'512',
    'deuda'=>'34'
    );
$deuda[17][17136]=array(
    'nombre' =>'Pontós',
    'habitantes' =>'231',
    'deuda'=>'33'
    );
$deuda[17][17137]=array(
    'nombre' =>'Porqueres',
    'habitantes' =>'4521',
    'deuda'=>'1177'
    );
$deuda[17][17138]=array(
    'nombre' =>'Portbou',
    'habitantes' =>'1167',
    'deuda'=>'2922'
    );
$deuda[17][17139]=array(
    'nombre' =>'Preses, Les',
    'habitantes' =>'1764',
    'deuda'=>'0'
    );
$deuda[17][17140]=array(
    'nombre' =>'Port de la Selva, El',
    'habitantes' =>'1002',
    'deuda'=>'1120'
    );
$deuda[17][17141]=array(
    'nombre' =>'Puigcerdà',
    'habitantes' =>'8825',
    'deuda'=>'6905'
    );
$deuda[17][17142]=array(
    'nombre' =>'Quart',
    'habitantes' =>'3448',
    'deuda'=>'309'
    );
$deuda[17][17143]=array(
    'nombre' =>'Rabós',
    'habitantes' =>'182',
    'deuda'=>'82'
    );
$deuda[17][17144]=array(
    'nombre' =>'Regencós',
    'habitantes' =>'285',
    'deuda'=>'99'
    );
$deuda[17][17145]=array(
    'nombre' =>'Ribes de Freser',
    'habitantes' =>'1818',
    'deuda'=>'1428'
    );
$deuda[17][17146]=array(
    'nombre' =>'Riells i Viabrea',
    'habitantes' =>'3945',
    'deuda'=>'1882'
    );
$deuda[17][17147]=array(
    'nombre' =>'Ripoll',
    'habitantes' =>'10632',
    'deuda'=>'8290'
    );
$deuda[17][17148]=array(
    'nombre' =>'Riudarenes',
    'habitantes' =>'2120',
    'deuda'=>'2496'
    );
$deuda[17][17149]=array(
    'nombre' =>'Riudaura',
    'habitantes' =>'461',
    'deuda'=>'22'
    );
$deuda[17][17150]=array(
    'nombre' =>'Riudellots de la Selva',
    'habitantes' =>'2022',
    'deuda'=>'141'
    );
$deuda[17][17151]=array(
    'nombre' =>'Riumors',
    'habitantes' =>'245',
    'deuda'=>'41'
    );
$deuda[17][17152]=array(
    'nombre' =>'Roses',
    'habitantes' =>'19575',
    'deuda'=>'13681'
    );
$deuda[17][17153]=array(
    'nombre' =>'Rupià',
    'habitantes' =>'248',
    'deuda'=>'0'
    );
$deuda[17][17154]=array(
    'nombre' =>'Sales de Llierca',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[17][17155]=array(
    'nombre' =>'Salt',
    'habitantes' =>'29342',
    'deuda'=>'20574'
    );
$deuda[17][17157]=array(
    'nombre' =>'Sant Andreu Salou',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[17][17158]=array(
    'nombre' =>'Sant Climent Sescebes',
    'habitantes' =>'601',
    'deuda'=>'113'
    );
$deuda[17][17159]=array(
    'nombre' =>'Sant Feliu de Buixalleu',
    'habitantes' =>'787',
    'deuda'=>'86'
    );
$deuda[17][17160]=array(
    'nombre' =>'Sant Feliu de Guíxols',
    'habitantes' =>'21586',
    'deuda'=>'9703'
    );
$deuda[17][17161]=array(
    'nombre' =>'Sant Feliu de Pallerols',
    'habitantes' =>'1332',
    'deuda'=>'756'
    );
$deuda[17][17162]=array(
    'nombre' =>'Sant Ferriol',
    'habitantes' =>'239',
    'deuda'=>'0'
    );
$deuda[17][17163]=array(
    'nombre' =>'Sant Gregori',
    'habitantes' =>'3498',
    'deuda'=>'2014'
    );
$deuda[17][17164]=array(
    'nombre' =>'Sant Hilari Sacalm',
    'habitantes' =>'5608',
    'deuda'=>'5525'
    );
$deuda[17][17165]=array(
    'nombre' =>'Sant Jaume de Llierca',
    'habitantes' =>'841',
    'deuda'=>'92'
    );
$deuda[17][17166]=array(
    'nombre' =>'Sant Jordi Desvalls',
    'habitantes' =>'720',
    'deuda'=>'471'
    );
$deuda[17][17167]=array(
    'nombre' =>'Sant Joan de les Abadesses',
    'habitantes' =>'3383',
    'deuda'=>'2570'
    );
$deuda[17][17168]=array(
    'nombre' =>'Sant Joan de Mollet',
    'habitantes' =>'497',
    'deuda'=>'0'
    );
$deuda[17][17169]=array(
    'nombre' =>'Sant Julià de Ramis',
    'habitantes' =>'3415',
    'deuda'=>'1515'
    );
$deuda[17][17170]=array(
    'nombre' =>'Vallfogona de Ripollès',
    'habitantes' =>'205',
    'deuda'=>'491'
    );
$deuda[17][17171]=array(
    'nombre' =>'Sant Llorenç de la Muga',
    'habitantes' =>'255',
    'deuda'=>'37'
    );
$deuda[17][17172]=array(
    'nombre' =>'Sant Martí de Llémena',
    'habitantes' =>'605',
    'deuda'=>'644'
    );
$deuda[17][17173]=array(
    'nombre' =>'Sant Martí Vell',
    'habitantes' =>'248',
    'deuda'=>'0'
    );
$deuda[17][17174]=array(
    'nombre' =>'Sant Miquel de Campmajor',
    'habitantes' =>'219',
    'deuda'=>'77'
    );
$deuda[17][17175]=array(
    'nombre' =>'Sant Miquel de Fluvià',
    'habitantes' =>'756',
    'deuda'=>'270'
    );
$deuda[17][17176]=array(
    'nombre' =>'Sant Mori',
    'habitantes' =>'176',
    'deuda'=>'50'
    );
$deuda[17][17177]=array(
    'nombre' =>'Sant Pau de Segúries',
    'habitantes' =>'682',
    'deuda'=>'0'
    );
$deuda[17][17178]=array(
    'nombre' =>'Sant Pere Pescador',
    'habitantes' =>'2143',
    'deuda'=>'278'
    );
$deuda[17][17180]=array(
    'nombre' =>'Santa Coloma de Farners',
    'habitantes' =>'12681',
    'deuda'=>'8011'
    );
$deuda[17][17181]=array(
    'nombre' =>'Santa Cristina d\'Aro',
    'habitantes' =>'5089',
    'deuda'=>'2410'
    );
$deuda[17][17182]=array(
    'nombre' =>'Santa Llogaia d\'Àlguema',
    'habitantes' =>'339',
    'deuda'=>'105'
    );
$deuda[17][17183]=array(
    'nombre' =>'Sant Aniol de Finestres',
    'habitantes' =>'373',
    'deuda'=>'197'
    );
$deuda[17][17184]=array(
    'nombre' =>'Santa Pau',
    'habitantes' =>'1562',
    'deuda'=>'403'
    );
$deuda[17][17185]=array(
    'nombre' =>'Sant Joan les Fonts',
    'habitantes' =>'2937',
    'deuda'=>'3879'
    );
$deuda[17][17186]=array(
    'nombre' =>'Sarrià de Ter',
    'habitantes' =>'4973',
    'deuda'=>'2155'
    );
$deuda[17][17187]=array(
    'nombre' =>'Saus, Camallera i Llampaies',
    'habitantes' =>'830',
    'deuda'=>'734'
    );
$deuda[17][17188]=array(
    'nombre' =>'Selva de Mar, La',
    'habitantes' =>'184',
    'deuda'=>'244'
    );
$deuda[17][17189]=array(
    'nombre' =>'Cellera de Ter, La',
    'habitantes' =>'2071',
    'deuda'=>'1120'
    );
$deuda[17][17190]=array(
    'nombre' =>'Serinyà',
    'habitantes' =>'1130',
    'deuda'=>'156'
    );
$deuda[17][17191]=array(
    'nombre' =>'Serra de Daró',
    'habitantes' =>'209',
    'deuda'=>'81'
    );
$deuda[17][17192]=array(
    'nombre' =>'Setcases',
    'habitantes' =>'180',
    'deuda'=>'106'
    );
$deuda[17][17193]=array(
    'nombre' =>'Sils',
    'habitantes' =>'5797',
    'deuda'=>'1141'
    );
$deuda[17][17194]=array(
    'nombre' =>'Susqueda',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[17][17195]=array(
    'nombre' =>'Tallada d\'Empordà, La',
    'habitantes' =>'458',
    'deuda'=>'340'
    );
$deuda[17][17196]=array(
    'nombre' =>'Terrades',
    'habitantes' =>'294',
    'deuda'=>'13'
    );
$deuda[17][17197]=array(
    'nombre' =>'Torrent',
    'habitantes' =>'169',
    'deuda'=>'0'
    );
$deuda[17][17198]=array(
    'nombre' =>'Torroella de Fluvià',
    'habitantes' =>'732',
    'deuda'=>'314'
    );
$deuda[17][17199]=array(
    'nombre' =>'Torroella de Montgrí',
    'habitantes' =>'11388',
    'deuda'=>'11147'
    );
$deuda[17][17200]=array(
    'nombre' =>'Tortellà',
    'habitantes' =>'775',
    'deuda'=>'27'
    );
$deuda[17][17201]=array(
    'nombre' =>'Toses',
    'habitantes' =>'155',
    'deuda'=>'60'
    );
$deuda[17][17202]=array(
    'nombre' =>'Tossa de Mar',
    'habitantes' =>'5623',
    'deuda'=>'6057'
    );
$deuda[17][17203]=array(
    'nombre' =>'Ultramort',
    'habitantes' =>'200',
    'deuda'=>'95'
    );
$deuda[17][17204]=array(
    'nombre' =>'Ullà',
    'habitantes' =>'1068',
    'deuda'=>'198'
    );
$deuda[17][17205]=array(
    'nombre' =>'Ullastret',
    'habitantes' =>'295',
    'deuda'=>'0'
    );
$deuda[17][17206]=array(
    'nombre' =>'Urús',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[17][17207]=array(
    'nombre' =>'Vall d\'en Bas, La',
    'habitantes' =>'2966',
    'deuda'=>'1744'
    );
$deuda[17][17208]=array(
    'nombre' =>'Vall de Bianya, La',
    'habitantes' =>'1297',
    'deuda'=>'0'
    );
$deuda[17][17209]=array(
    'nombre' =>'Vall-llobrega',
    'habitantes' =>'915',
    'deuda'=>'54'
    );
$deuda[17][17210]=array(
    'nombre' =>'Ventalló',
    'habitantes' =>'830',
    'deuda'=>'122'
    );
$deuda[17][17211]=array(
    'nombre' =>'Verges',
    'habitantes' =>'1197',
    'deuda'=>'374'
    );
$deuda[17][17212]=array(
    'nombre' =>'Vidrà',
    'habitantes' =>'173',
    'deuda'=>'25'
    );
$deuda[17][17213]=array(
    'nombre' =>'Vidreres',
    'habitantes' =>'7741',
    'deuda'=>'1500'
    );
$deuda[17][17214]=array(
    'nombre' =>'Vilabertran',
    'habitantes' =>'902',
    'deuda'=>'0'
    );
$deuda[17][17215]=array(
    'nombre' =>'Vilablareix',
    'habitantes' =>'2559',
    'deuda'=>'1682'
    );
$deuda[17][17216]=array(
    'nombre' =>'Viladasens',
    'habitantes' =>'221',
    'deuda'=>'90'
    );
$deuda[17][17217]=array(
    'nombre' =>'Viladamat',
    'habitantes' =>'441',
    'deuda'=>'113'
    );
$deuda[17][17218]=array(
    'nombre' =>'Vilademuls',
    'habitantes' =>'834',
    'deuda'=>'561'
    );
$deuda[17][17220]=array(
    'nombre' =>'Viladrau',
    'habitantes' =>'1035',
    'deuda'=>'854'
    );
$deuda[17][17221]=array(
    'nombre' =>'Vilafant',
    'habitantes' =>'5543',
    'deuda'=>'2045'
    );
$deuda[17][17222]=array(
    'nombre' =>'Vilaür',
    'habitantes' =>'159',
    'deuda'=>'0'
    );
$deuda[17][17223]=array(
    'nombre' =>'Vilajuïga',
    'habitantes' =>'1169',
    'deuda'=>'1485'
    );
$deuda[17][17224]=array(
    'nombre' =>'Vilallonga de Ter',
    'habitantes' =>'398',
    'deuda'=>'22'
    );
$deuda[17][17225]=array(
    'nombre' =>'Vilamacolum',
    'habitantes' =>'294',
    'deuda'=>'246'
    );
$deuda[17][17226]=array(
    'nombre' =>'Vilamalla',
    'habitantes' =>'1133',
    'deuda'=>'0'
    );
$deuda[17][17227]=array(
    'nombre' =>'Vilamaniscle',
    'habitantes' =>'179',
    'deuda'=>'270'
    );
$deuda[17][17228]=array(
    'nombre' =>'Vilanant',
    'habitantes' =>'399',
    'deuda'=>'419'
    );
$deuda[17][17230]=array(
    'nombre' =>'Vila-sacra',
    'habitantes' =>'670',
    'deuda'=>'563'
    );
$deuda[17][17232]=array(
    'nombre' =>'Vilopriu',
    'habitantes' =>'199',
    'deuda'=>'40'
    );
$deuda[17][17233]=array(
    'nombre' =>'Vilobí d\'Onyar',
    'habitantes' =>'3166',
    'deuda'=>'296'
    );
$deuda[17][17234]=array(
    'nombre' =>'Biure',
    'habitantes' =>'242',
    'deuda'=>'68'
    );
$deuda[17][17901]=array(
    'nombre' =>'Cruïlles, Monells i Sant Sadurní de l\'Heura',
    'habitantes' =>'1304',
    'deuda'=>'517'
    );
$deuda[17][17902]=array(
    'nombre' =>'Forallac',
    'habitantes' =>'1705',
    'deuda'=>'948'
    );
$deuda[17][17903]=array(
    'nombre' =>'Sant Julià del Llor i Bonmatí',
    'habitantes' =>'1272',
    'deuda'=>'319'
    );
$deuda[18][18001]=array(
    'nombre' =>'Agrón',
    'habitantes' =>'310',
    'deuda'=>'0'
    );
$deuda[18][18002]=array(
    'nombre' =>'Alamedilla',
    'habitantes' =>'637',
    'deuda'=>'297'
    );
$deuda[18][18003]=array(
    'nombre' =>'Albolote',
    'habitantes' =>'18464',
    'deuda'=>'2720'
    );
$deuda[18][18004]=array(
    'nombre' =>'Albondón',
    'habitantes' =>'782',
    'deuda'=>'36'
    );
$deuda[18][18005]=array(
    'nombre' =>'Albuñán',
    'habitantes' =>'420',
    'deuda'=>'0'
    );
$deuda[18][18006]=array(
    'nombre' =>'Albuñol',
    'habitantes' =>'6948',
    'deuda'=>'6366'
    );
$deuda[18][18007]=array(
    'nombre' =>'Albuñuelas',
    'habitantes' =>'893',
    'deuda'=>'0'
    );
$deuda[18][18010]=array(
    'nombre' =>'Aldeire',
    'habitantes' =>'631',
    'deuda'=>'364'
    );
$deuda[18][18011]=array(
    'nombre' =>'Alfacar',
    'habitantes' =>'5445',
    'deuda'=>'3145'
    );
$deuda[18][18012]=array(
    'nombre' =>'Algarinejo',
    'habitantes' =>'2813',
    'deuda'=>'1502'
    );
$deuda[18][18013]=array(
    'nombre' =>'Alhama de Granada',
    'habitantes' =>'6126',
    'deuda'=>'2071'
    );
$deuda[18][18014]=array(
    'nombre' =>'Alhendín',
    'habitantes' =>'8503',
    'deuda'=>'9547'
    );
$deuda[18][18015]=array(
    'nombre' =>'Alicún de Ortega',
    'habitantes' =>'523',
    'deuda'=>'0'
    );
$deuda[18][18016]=array(
    'nombre' =>'Almegíjar',
    'habitantes' =>'376',
    'deuda'=>'0'
    );
$deuda[18][18017]=array(
    'nombre' =>'Almuñécar',
    'habitantes' =>'27391',
    'deuda'=>'40983'
    );
$deuda[18][18018]=array(
    'nombre' =>'Alquife',
    'habitantes' =>'718',
    'deuda'=>'371'
    );
$deuda[18][18020]=array(
    'nombre' =>'Arenas del Rey',
    'habitantes' =>'1865',
    'deuda'=>'38'
    );
$deuda[18][18021]=array(
    'nombre' =>'Armilla',
    'habitantes' =>'23623',
    'deuda'=>'19530'
    );
$deuda[18][18022]=array(
    'nombre' =>'Atarfe',
    'habitantes' =>'17792',
    'deuda'=>'20067'
    );
$deuda[18][18023]=array(
    'nombre' =>'Baza',
    'habitantes' =>'20668',
    'deuda'=>'25553'
    );
$deuda[18][18024]=array(
    'nombre' =>'Beas de Granada',
    'habitantes' =>'1012',
    'deuda'=>'0'
    );
$deuda[18][18025]=array(
    'nombre' =>'Beas de Guadix',
    'habitantes' =>'363',
    'deuda'=>'0'
    );
$deuda[18][18027]=array(
    'nombre' =>'Benalúa',
    'habitantes' =>'3298',
    'deuda'=>'288'
    );
$deuda[18][18028]=array(
    'nombre' =>'Benalúa de las Villas',
    'habitantes' =>'1148',
    'deuda'=>'370'
    );
$deuda[18][18029]=array(
    'nombre' =>'Benamaurel',
    'habitantes' =>'2378',
    'deuda'=>'910'
    );
$deuda[18][18030]=array(
    'nombre' =>'Bérchules',
    'habitantes' =>'739',
    'deuda'=>'293'
    );
$deuda[18][18032]=array(
    'nombre' =>'Bubión',
    'habitantes' =>'309',
    'deuda'=>'239'
    );
$deuda[18][18033]=array(
    'nombre' =>'Busquístar',
    'habitantes' =>'289',
    'deuda'=>'71'
    );
$deuda[18][18034]=array(
    'nombre' =>'Cacín',
    'habitantes' =>'589',
    'deuda'=>'0'
    );
$deuda[18][18035]=array(
    'nombre' =>'Cádiar',
    'habitantes' =>'1554',
    'deuda'=>'1223'
    );
$deuda[18][18036]=array(
    'nombre' =>'Cájar',
    'habitantes' =>'4909',
    'deuda'=>'0'
    );
$deuda[18][18037]=array(
    'nombre' =>'Calicasas',
    'habitantes' =>'606',
    'deuda'=>'434'
    );
$deuda[18][18038]=array(
    'nombre' =>'Campotéjar',
    'habitantes' =>'1301',
    'deuda'=>'180'
    );
$deuda[18][18039]=array(
    'nombre' =>'Caniles',
    'habitantes' =>'4351',
    'deuda'=>'1537'
    );
$deuda[18][18040]=array(
    'nombre' =>'Cáñar',
    'habitantes' =>'405',
    'deuda'=>'0'
    );
$deuda[18][18042]=array(
    'nombre' =>'Capileira',
    'habitantes' =>'508',
    'deuda'=>'13'
    );
$deuda[18][18043]=array(
    'nombre' =>'Carataunas',
    'habitantes' =>'210',
    'deuda'=>'0'
    );
$deuda[18][18044]=array(
    'nombre' =>'Cástaras',
    'habitantes' =>'250',
    'deuda'=>'0'
    );
$deuda[18][18045]=array(
    'nombre' =>'Castilléjar',
    'habitantes' =>'1400',
    'deuda'=>'1495'
    );
$deuda[18][18046]=array(
    'nombre' =>'Castril',
    'habitantes' =>'2276',
    'deuda'=>'881'
    );
$deuda[18][18047]=array(
    'nombre' =>'Cenes de la Vega',
    'habitantes' =>'7942',
    'deuda'=>'1645'
    );
$deuda[18][18048]=array(
    'nombre' =>'Cijuela',
    'habitantes' =>'3221',
    'deuda'=>'492'
    );
$deuda[18][18049]=array(
    'nombre' =>'Cogollos de Guadix',
    'habitantes' =>'718',
    'deuda'=>'582'
    );
$deuda[18][18050]=array(
    'nombre' =>'Cogollos de la Vega',
    'habitantes' =>'2099',
    'deuda'=>'1270'
    );
$deuda[18][18051]=array(
    'nombre' =>'Colomera',
    'habitantes' =>'1416',
    'deuda'=>'318'
    );
$deuda[18][18053]=array(
    'nombre' =>'Cortes de Baza',
    'habitantes' =>'2058',
    'deuda'=>'1099'
    );
$deuda[18][18054]=array(
    'nombre' =>'Cortes y Graena',
    'habitantes' =>'1043',
    'deuda'=>'1170'
    );
$deuda[18][18056]=array(
    'nombre' =>'Cúllar',
    'habitantes' =>'4351',
    'deuda'=>'1122'
    );
$deuda[18][18057]=array(
    'nombre' =>'Cúllar Vega',
    'habitantes' =>'7128',
    'deuda'=>'4815'
    );
$deuda[18][18059]=array(
    'nombre' =>'Chauchina',
    'habitantes' =>'5428',
    'deuda'=>'1359'
    );
$deuda[18][18061]=array(
    'nombre' =>'Chimeneas',
    'habitantes' =>'1360',
    'deuda'=>'0'
    );
$deuda[18][18062]=array(
    'nombre' =>'Churriana de la Vega',
    'habitantes' =>'13907',
    'deuda'=>'3732'
    );
$deuda[18][18063]=array(
    'nombre' =>'Darro',
    'habitantes' =>'1545',
    'deuda'=>'174'
    );
$deuda[18][18064]=array(
    'nombre' =>'Dehesas de Guadix',
    'habitantes' =>'454',
    'deuda'=>'0'
    );
$deuda[18][18065]=array(
    'nombre' =>'Dehesas Viejas',
    'habitantes' =>'783',
    'deuda'=>'155'
    );
$deuda[18][18066]=array(
    'nombre' =>'Deifontes',
    'habitantes' =>'2624',
    'deuda'=>'141'
    );
$deuda[18][18067]=array(
    'nombre' =>'Diezma',
    'habitantes' =>'780',
    'deuda'=>'27'
    );
$deuda[18][18068]=array(
    'nombre' =>'Dílar',
    'habitantes' =>'1838',
    'deuda'=>'184'
    );
$deuda[18][18069]=array(
    'nombre' =>'Dólar',
    'habitantes' =>'621',
    'deuda'=>'15'
    );
$deuda[18][18070]=array(
    'nombre' =>'Dúdar',
    'habitantes' =>'348',
    'deuda'=>'136'
    );
$deuda[18][18071]=array(
    'nombre' =>'Dúrcal',
    'habitantes' =>'7123',
    'deuda'=>'4201'
    );
$deuda[18][18072]=array(
    'nombre' =>'Escúzar',
    'habitantes' =>'791',
    'deuda'=>'625'
    );
$deuda[18][18074]=array(
    'nombre' =>'Ferreira',
    'habitantes' =>'314',
    'deuda'=>'0'
    );
$deuda[18][18076]=array(
    'nombre' =>'Fonelas',
    'habitantes' =>'1054',
    'deuda'=>'367'
    );
$deuda[18][18078]=array(
    'nombre' =>'Freila',
    'habitantes' =>'950',
    'deuda'=>'1202'
    );
$deuda[18][18079]=array(
    'nombre' =>'Fuente Vaqueros',
    'habitantes' =>'4457',
    'deuda'=>'2388'
    );
$deuda[18][18082]=array(
    'nombre' =>'Galera',
    'habitantes' =>'1150',
    'deuda'=>'1130'
    );
$deuda[18][18083]=array(
    'nombre' =>'Gobernador',
    'habitantes' =>'298',
    'deuda'=>'165'
    );
$deuda[18][18084]=array(
    'nombre' =>'Gójar',
    'habitantes' =>'5410',
    'deuda'=>'3258'
    );
$deuda[18][18085]=array(
    'nombre' =>'Gor',
    'habitantes' =>'777',
    'deuda'=>'31'
    );
$deuda[18][18086]=array(
    'nombre' =>'Gorafe',
    'habitantes' =>'420',
    'deuda'=>'47'
    );
$deuda[18][18087]=array(
    'nombre' =>'Granada',
    'habitantes' =>'235800',
    'deuda'=>'256635'
    );
$deuda[18][18088]=array(
    'nombre' =>'Guadahortuna',
    'habitantes' =>'1989',
    'deuda'=>'1107'
    );
$deuda[18][18089]=array(
    'nombre' =>'Guadix',
    'habitantes' =>'18928',
    'deuda'=>'7658'
    );
$deuda[18][18093]=array(
    'nombre' =>'Gualchos',
    'habitantes' =>'4849',
    'deuda'=>'712'
    );
$deuda[18][18094]=array(
    'nombre' =>'Güejar Sierra',
    'habitantes' =>'2953',
    'deuda'=>'675'
    );
$deuda[18][18095]=array(
    'nombre' =>'Güevéjar',
    'habitantes' =>'2540',
    'deuda'=>'603'
    );
$deuda[18][18096]=array(
    'nombre' =>'Huélago',
    'habitantes' =>'430',
    'deuda'=>'288'
    );
$deuda[18][18097]=array(
    'nombre' =>'Huéneja',
    'habitantes' =>'1168',
    'deuda'=>'0'
    );
$deuda[18][18098]=array(
    'nombre' =>'Huéscar',
    'habitantes' =>'7677',
    'deuda'=>'1482'
    );
$deuda[18][18099]=array(
    'nombre' =>'Huétor de Santillán',
    'habitantes' =>'1872',
    'deuda'=>'615'
    );
$deuda[18][18100]=array(
    'nombre' =>'Huétor Tájar',
    'habitantes' =>'10147',
    'deuda'=>'1936'
    );
$deuda[18][18101]=array(
    'nombre' =>'Huétor Vega',
    'habitantes' =>'11849',
    'deuda'=>'0'
    );
$deuda[18][18102]=array(
    'nombre' =>'Illora',
    'habitantes' =>'10423',
    'deuda'=>'8440'
    );
$deuda[18][18103]=array(
    'nombre' =>'Itrabo',
    'habitantes' =>'1018',
    'deuda'=>'0'
    );
$deuda[18][18105]=array(
    'nombre' =>'Iznalloz',
    'habitantes' =>'6016',
    'deuda'=>'5094'
    );
$deuda[18][18107]=array(
    'nombre' =>'Jayena',
    'habitantes' =>'1178',
    'deuda'=>'207'
    );
$deuda[18][18108]=array(
    'nombre' =>'Jerez del Marquesado',
    'habitantes' =>'1021',
    'deuda'=>'276'
    );
$deuda[18][18109]=array(
    'nombre' =>'Jete',
    'habitantes' =>'908',
    'deuda'=>'0'
    );
$deuda[18][18111]=array(
    'nombre' =>'Jun',
    'habitantes' =>'3620',
    'deuda'=>'1507'
    );
$deuda[18][18112]=array(
    'nombre' =>'Juviles',
    'habitantes' =>'153',
    'deuda'=>'0'
    );
$deuda[18][18114]=array(
    'nombre' =>'Calahorra, La',
    'habitantes' =>'719',
    'deuda'=>'170'
    );
$deuda[18][18115]=array(
    'nombre' =>'Láchar',
    'habitantes' =>'3263',
    'deuda'=>'3116'
    );
$deuda[18][18116]=array(
    'nombre' =>'Lanjarón',
    'habitantes' =>'3715',
    'deuda'=>'3615'
    );
$deuda[18][18117]=array(
    'nombre' =>'Lanteira',
    'habitantes' =>'546',
    'deuda'=>'126'
    );
$deuda[18][18119]=array(
    'nombre' =>'Lecrín',
    'habitantes' =>'2138',
    'deuda'=>'0'
    );
$deuda[18][18120]=array(
    'nombre' =>'Lentegí',
    'habitantes' =>'346',
    'deuda'=>'0'
    );
$deuda[18][18121]=array(
    'nombre' =>'Lobras',
    'habitantes' =>'166',
    'deuda'=>'0'
    );
$deuda[18][18122]=array(
    'nombre' =>'Loja',
    'habitantes' =>'20893',
    'deuda'=>'17148'
    );
$deuda[18][18123]=array(
    'nombre' =>'Lugros',
    'habitantes' =>'320',
    'deuda'=>'101'
    );
$deuda[18][18124]=array(
    'nombre' =>'Lújar',
    'habitantes' =>'517',
    'deuda'=>'210'
    );
$deuda[18][18126]=array(
    'nombre' =>'Malahá, La',
    'habitantes' =>'1834',
    'deuda'=>'130'
    );
$deuda[18][18127]=array(
    'nombre' =>'Maracena',
    'habitantes' =>'21816',
    'deuda'=>'14855'
    );
$deuda[18][18128]=array(
    'nombre' =>'Marchal',
    'habitantes' =>'427',
    'deuda'=>'0'
    );
$deuda[18][18132]=array(
    'nombre' =>'Moclín',
    'habitantes' =>'3976',
    'deuda'=>'1110'
    );
$deuda[18][18133]=array(
    'nombre' =>'Molvízar',
    'habitantes' =>'2895',
    'deuda'=>'195'
    );
$deuda[18][18134]=array(
    'nombre' =>'Monachil',
    'habitantes' =>'7538',
    'deuda'=>'4325'
    );
$deuda[18][18135]=array(
    'nombre' =>'Montefrío',
    'habitantes' =>'5720',
    'deuda'=>'3452'
    );
$deuda[18][18136]=array(
    'nombre' =>'Montejícar',
    'habitantes' =>'2230',
    'deuda'=>'194'
    );
$deuda[18][18137]=array(
    'nombre' =>'Montillana',
    'habitantes' =>'1330',
    'deuda'=>'298'
    );
$deuda[18][18138]=array(
    'nombre' =>'Moraleda de Zafayona',
    'habitantes' =>'3200',
    'deuda'=>'663'
    );
$deuda[18][18140]=array(
    'nombre' =>'Motril',
    'habitantes' =>'60777',
    'deuda'=>'20065'
    );
$deuda[18][18141]=array(
    'nombre' =>'Murtas',
    'habitantes' =>'524',
    'deuda'=>'33'
    );
$deuda[18][18143]=array(
    'nombre' =>'Nigüelas',
    'habitantes' =>'1214',
    'deuda'=>'0'
    );
$deuda[18][18144]=array(
    'nombre' =>'Nívar',
    'habitantes' =>'922',
    'deuda'=>'197'
    );
$deuda[18][18145]=array(
    'nombre' =>'Ogíjares',
    'habitantes' =>'13719',
    'deuda'=>'5448'
    );
$deuda[18][18146]=array(
    'nombre' =>'Orce',
    'habitantes' =>'1226',
    'deuda'=>'1168'
    );
$deuda[18][18147]=array(
    'nombre' =>'Órgiva',
    'habitantes' =>'5483',
    'deuda'=>'1525'
    );
$deuda[18][18148]=array(
    'nombre' =>'Otívar',
    'habitantes' =>'1093',
    'deuda'=>'0'
    );
$deuda[18][18149]=array(
    'nombre' =>'Villa de Otura',
    'habitantes' =>'6783',
    'deuda'=>'11321'
    );
$deuda[18][18150]=array(
    'nombre' =>'Padul',
    'habitantes' =>'8407',
    'deuda'=>'1381'
    );
$deuda[18][18151]=array(
    'nombre' =>'Pampaneira',
    'habitantes' =>'315',
    'deuda'=>'250'
    );
$deuda[18][18152]=array(
    'nombre' =>'Pedro Martínez',
    'habitantes' =>'1150',
    'deuda'=>'550'
    );
$deuda[18][18153]=array(
    'nombre' =>'Peligros',
    'habitantes' =>'11154',
    'deuda'=>'7772'
    );
$deuda[18][18154]=array(
    'nombre' =>'Peza, La',
    'habitantes' =>'1250',
    'deuda'=>'95'
    );
$deuda[18][18157]=array(
    'nombre' =>'Pinos Genil',
    'habitantes' =>'1438',
    'deuda'=>'201'
    );
$deuda[18][18158]=array(
    'nombre' =>'Pinos Puente',
    'habitantes' =>'10605',
    'deuda'=>'3335'
    );
$deuda[18][18159]=array(
    'nombre' =>'Píñar',
    'habitantes' =>'1209',
    'deuda'=>'717'
    );
$deuda[18][18161]=array(
    'nombre' =>'Polícar',
    'habitantes' =>'235',
    'deuda'=>'17'
    );
$deuda[18][18162]=array(
    'nombre' =>'Polopos',
    'habitantes' =>'1680',
    'deuda'=>'2204'
    );
$deuda[18][18163]=array(
    'nombre' =>'Pórtugos',
    'habitantes' =>'409',
    'deuda'=>'79'
    );
$deuda[18][18164]=array(
    'nombre' =>'Puebla de Don Fadrique',
    'habitantes' =>'2329',
    'deuda'=>'354'
    );
$deuda[18][18165]=array(
    'nombre' =>'Pulianas',
    'habitantes' =>'5366',
    'deuda'=>'558'
    );
$deuda[18][18167]=array(
    'nombre' =>'Purullena',
    'habitantes' =>'2399',
    'deuda'=>'1728'
    );
$deuda[18][18168]=array(
    'nombre' =>'Quéntar',
    'habitantes' =>'974',
    'deuda'=>'204'
    );
$deuda[18][18170]=array(
    'nombre' =>'Rubite',
    'habitantes' =>'392',
    'deuda'=>'540'
    );
$deuda[18][18171]=array(
    'nombre' =>'Salar',
    'habitantes' =>'2712',
    'deuda'=>'1303'
    );
$deuda[18][18173]=array(
    'nombre' =>'Salobreña',
    'habitantes' =>'12429',
    'deuda'=>'12500'
    );
$deuda[18][18174]=array(
    'nombre' =>'Santa Cruz del Comercio',
    'habitantes' =>'549',
    'deuda'=>'33'
    );
$deuda[18][18175]=array(
    'nombre' =>'Santa Fe',
    'habitantes' =>'15067',
    'deuda'=>'5479'
    );
$deuda[18][18176]=array(
    'nombre' =>'Soportújar',
    'habitantes' =>'296',
    'deuda'=>'12'
    );
$deuda[18][18177]=array(
    'nombre' =>'Sorvilán',
    'habitantes' =>'552',
    'deuda'=>'527'
    );
$deuda[18][18178]=array(
    'nombre' =>'Torre-Cardela',
    'habitantes' =>'847',
    'deuda'=>'477'
    );
$deuda[18][18179]=array(
    'nombre' =>'Torvizcón',
    'habitantes' =>'708',
    'deuda'=>'0'
    );
$deuda[18][18180]=array(
    'nombre' =>'Trevélez',
    'habitantes' =>'786',
    'deuda'=>'87'
    );
$deuda[18][18181]=array(
    'nombre' =>'Turón',
    'habitantes' =>'265',
    'deuda'=>'0'
    );
$deuda[18][18182]=array(
    'nombre' =>'Ugíjar',
    'habitantes' =>'2560',
    'deuda'=>'1574'
    );
$deuda[18][18183]=array(
    'nombre' =>'Válor',
    'habitantes' =>'654',
    'deuda'=>'126'
    );
$deuda[18][18184]=array(
    'nombre' =>'Vélez de Benaudalla',
    'habitantes' =>'2903',
    'deuda'=>'791'
    );
$deuda[18][18185]=array(
    'nombre' =>'Ventas de Huelma',
    'habitantes' =>'661',
    'deuda'=>'36'
    );
$deuda[18][18187]=array(
    'nombre' =>'Villanueva de las Torres',
    'habitantes' =>'661',
    'deuda'=>'89'
    );
$deuda[18][18188]=array(
    'nombre' =>'Villanueva Mesía',
    'habitantes' =>'2013',
    'deuda'=>'951'
    );
$deuda[18][18189]=array(
    'nombre' =>'Víznar',
    'habitantes' =>'971',
    'deuda'=>'260'
    );
$deuda[18][18192]=array(
    'nombre' =>'Zafarraya',
    'habitantes' =>'2040',
    'deuda'=>'222'
    );
$deuda[18][18193]=array(
    'nombre' =>'Zubia, La',
    'habitantes' =>'18675',
    'deuda'=>'3321'
    );
$deuda[18][18194]=array(
    'nombre' =>'Zújar',
    'habitantes' =>'2777',
    'deuda'=>'1100'
    );
$deuda[18][18901]=array(
    'nombre' =>'Taha, La',
    'habitantes' =>'643',
    'deuda'=>'1655'
    );
$deuda[18][18902]=array(
    'nombre' =>'Valle, El',
    'habitantes' =>'1013',
    'deuda'=>'640'
    );
$deuda[18][18903]=array(
    'nombre' =>'Nevada',
    'habitantes' =>'1123',
    'deuda'=>'528'
    );
$deuda[18][18904]=array(
    'nombre' =>'Alpujarra de la Sierra',
    'habitantes' =>'1041',
    'deuda'=>'332'
    );
$deuda[18][18905]=array(
    'nombre' =>'Gabias, Las',
    'habitantes' =>'19603',
    'deuda'=>'4122'
    );
$deuda[18][18906]=array(
    'nombre' =>'Guajares, Los',
    'habitantes' =>'1087',
    'deuda'=>'57'
    );
$deuda[18][18907]=array(
    'nombre' =>'Valle del Zalabí',
    'habitantes' =>'2229',
    'deuda'=>'1155'
    );
$deuda[18][18908]=array(
    'nombre' =>'Villamena',
    'habitantes' =>'1016',
    'deuda'=>'81'
    );
$deuda[18][18909]=array(
    'nombre' =>'Morelábor',
    'habitantes' =>'693',
    'deuda'=>'0'
    );
$deuda[18][18910]=array(
    'nombre' =>'Pinar, El',
    'habitantes' =>'996',
    'deuda'=>'139'
    );
$deuda[18][18911]=array(
    'nombre' =>'Vegas del Genil',
    'habitantes' =>'10423',
    'deuda'=>'6761'
    );
$deuda[18][18912]=array(
    'nombre' =>'Cuevas del Campo',
    'habitantes' =>'1882',
    'deuda'=>'1846'
    );
$deuda[18][18913]=array(
    'nombre' =>'Zagra',
    'habitantes' =>'899',
    'deuda'=>'142'
    );
$deuda[18][18914]=array(
    'nombre' =>'Valderrubio',
    'habitantes' =>'2111',
    'deuda'=>'0'
    );
$deuda[19][19001]=array(
    'nombre' =>'Abánades',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[19][19002]=array(
    'nombre' =>'Ablanque',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[19][19003]=array(
    'nombre' =>'Adobes',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[19][19004]=array(
    'nombre' =>'Alaminos',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[19][19005]=array(
    'nombre' =>'Alarilla',
    'habitantes' =>'90',
    'deuda'=>'20'
    );
$deuda[19][19006]=array(
    'nombre' =>'Albalate de Zorita',
    'habitantes' =>'997',
    'deuda'=>'128'
    );
$deuda[19][19007]=array(
    'nombre' =>'Albares',
    'habitantes' =>'589',
    'deuda'=>'0'
    );
$deuda[19][19008]=array(
    'nombre' =>'Albendiego',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[19][19009]=array(
    'nombre' =>'Alcocer',
    'habitantes' =>'360',
    'deuda'=>'0'
    );
$deuda[19][19010]=array(
    'nombre' =>'Alcolea de las Peñas',
    'habitantes' =>'13',
    'deuda'=>'0'
    );
$deuda[19][19011]=array(
    'nombre' =>'Alcolea del Pinar',
    'habitantes' =>'343',
    'deuda'=>'0'
    );
$deuda[19][19013]=array(
    'nombre' =>'Alcoroches',
    'habitantes' =>'141',
    'deuda'=>'0'
    );
$deuda[19][19015]=array(
    'nombre' =>'Aldeanueva de Guadalajara',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[19][19016]=array(
    'nombre' =>'Algar de Mesa',
    'habitantes' =>'67',
    'deuda'=>'6'
    );
$deuda[19][19017]=array(
    'nombre' =>'Algora',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[19][19018]=array(
    'nombre' =>'Alhóndiga',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[19][19019]=array(
    'nombre' =>'Alique',
    'habitantes' =>'18',
    'deuda'=>'0'
    );
$deuda[19][19020]=array(
    'nombre' =>'Almadrones',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[19][19021]=array(
    'nombre' =>'Almoguera',
    'habitantes' =>'1401',
    'deuda'=>'141'
    );
$deuda[19][19022]=array(
    'nombre' =>'Almonacid de Zorita',
    'habitantes' =>'760',
    'deuda'=>'0'
    );
$deuda[19][19023]=array(
    'nombre' =>'Alocén',
    'habitantes' =>'168',
    'deuda'=>'15'
    );
$deuda[19][19024]=array(
    'nombre' =>'Alovera',
    'habitantes' =>'12247',
    'deuda'=>'4455'
    );
$deuda[19][19027]=array(
    'nombre' =>'Alustante',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[19][19031]=array(
    'nombre' =>'Angón',
    'habitantes' =>'15',
    'deuda'=>'0'
    );
$deuda[19][19032]=array(
    'nombre' =>'Anguita',
    'habitantes' =>'205',
    'deuda'=>'0'
    );
$deuda[19][19033]=array(
    'nombre' =>'Anquela del Ducado',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[19][19034]=array(
    'nombre' =>'Anquela del Pedregal',
    'habitantes' =>'19',
    'deuda'=>'0'
    );
$deuda[19][19036]=array(
    'nombre' =>'Aranzueque',
    'habitantes' =>'436',
    'deuda'=>'67'
    );
$deuda[19][19037]=array(
    'nombre' =>'Arbancón',
    'habitantes' =>'157',
    'deuda'=>'119'
    );
$deuda[19][19038]=array(
    'nombre' =>'Arbeteta',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[19][19039]=array(
    'nombre' =>'Argecilla',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[19][19040]=array(
    'nombre' =>'Armallones',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[19][19041]=array(
    'nombre' =>'Armuña de Tajuña',
    'habitantes' =>'240',
    'deuda'=>'0'
    );
$deuda[19][19042]=array(
    'nombre' =>'Arroyo de las Fraguas',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[19][19043]=array(
    'nombre' =>'Atanzón',
    'habitantes' =>'81',
    'deuda'=>'65'
    );
$deuda[19][19044]=array(
    'nombre' =>'Atienza',
    'habitantes' =>'458',
    'deuda'=>'0'
    );
$deuda[19][19045]=array(
    'nombre' =>'Auñón',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[19][19046]=array(
    'nombre' =>'Azuqueca de Henares',
    'habitantes' =>'34896',
    'deuda'=>'11981'
    );
$deuda[19][19047]=array(
    'nombre' =>'Baides',
    'habitantes' =>'73',
    'deuda'=>'59'
    );
$deuda[19][19048]=array(
    'nombre' =>'Baños de Tajo',
    'habitantes' =>'17',
    'deuda'=>'0'
    );
$deuda[19][19049]=array(
    'nombre' =>'Bañuelos',
    'habitantes' =>'17',
    'deuda'=>'0'
    );
$deuda[19][19050]=array(
    'nombre' =>'Barriopedro',
    'habitantes' =>'19',
    'deuda'=>'0'
    );
$deuda[19][19051]=array(
    'nombre' =>'Berninches',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[19][19052]=array(
    'nombre' =>'Bodera, La',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[19][19053]=array(
    'nombre' =>'Brihuega',
    'habitantes' =>'2538',
    'deuda'=>'1090'
    );
$deuda[19][19054]=array(
    'nombre' =>'Budia',
    'habitantes' =>'231',
    'deuda'=>'0'
    );
$deuda[19][19055]=array(
    'nombre' =>'Bujalaro',
    'habitantes' =>'67',
    'deuda'=>'0'
    );
$deuda[19][19057]=array(
    'nombre' =>'Bustares',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[19][19058]=array(
    'nombre' =>'Cabanillas del Campo',
    'habitantes' =>'9707',
    'deuda'=>'4086'
    );
$deuda[19][19059]=array(
    'nombre' =>'Campillo de Dueñas',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[19][19060]=array(
    'nombre' =>'Campillo de Ranas',
    'habitantes' =>'186',
    'deuda'=>'0'
    );
$deuda[19][19061]=array(
    'nombre' =>'Campisábalos',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[19][19064]=array(
    'nombre' =>'Canredondo',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[19][19065]=array(
    'nombre' =>'Cantalojas',
    'habitantes' =>'166',
    'deuda'=>'0'
    );
$deuda[19][19066]=array(
    'nombre' =>'Cañizar',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[19][19067]=array(
    'nombre' =>'Cardoso de la Sierra, El',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[19][19070]=array(
    'nombre' =>'Casa de Uceda',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[19][19071]=array(
    'nombre' =>'Casar, El',
    'habitantes' =>'11606',
    'deuda'=>'4648'
    );
$deuda[19][19073]=array(
    'nombre' =>'Casas de San Galindo',
    'habitantes' =>'24',
    'deuda'=>'0'
    );
$deuda[19][19074]=array(
    'nombre' =>'Caspueñas',
    'habitantes' =>'97',
    'deuda'=>'0'
    );
$deuda[19][19075]=array(
    'nombre' =>'Castejón de Henares',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[19][19076]=array(
    'nombre' =>'Castellar de la Muela',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[19][19078]=array(
    'nombre' =>'Castilforte',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[19][19079]=array(
    'nombre' =>'Castilnuevo',
    'habitantes' =>'8',
    'deuda'=>'0'
    );
$deuda[19][19080]=array(
    'nombre' =>'Cendejas de Enmedio',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[19][19081]=array(
    'nombre' =>'Cendejas de la Torre',
    'habitantes' =>'30',
    'deuda'=>'0'
    );
$deuda[19][19082]=array(
    'nombre' =>'Centenera',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[19][19086]=array(
    'nombre' =>'Cifuentes',
    'habitantes' =>'1920',
    'deuda'=>'2329'
    );
$deuda[19][19087]=array(
    'nombre' =>'Cincovillas',
    'habitantes' =>'22',
    'deuda'=>'0'
    );
$deuda[19][19088]=array(
    'nombre' =>'Ciruelas',
    'habitantes' =>'101',
    'deuda'=>'31'
    );
$deuda[19][19089]=array(
    'nombre' =>'Ciruelos del Pinar',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[19][19090]=array(
    'nombre' =>'Cobeta',
    'habitantes' =>'121',
    'deuda'=>'0'
    );
$deuda[19][19091]=array(
    'nombre' =>'Cogollor',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[19][19092]=array(
    'nombre' =>'Cogolludo',
    'habitantes' =>'600',
    'deuda'=>'298'
    );
$deuda[19][19095]=array(
    'nombre' =>'Condemios de Abajo',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[19][19096]=array(
    'nombre' =>'Condemios de Arriba',
    'habitantes' =>'128',
    'deuda'=>'0'
    );
$deuda[19][19097]=array(
    'nombre' =>'Congostrina',
    'habitantes' =>'21',
    'deuda'=>'0'
    );
$deuda[19][19098]=array(
    'nombre' =>'Copernal',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[19][19099]=array(
    'nombre' =>'Corduente',
    'habitantes' =>'365',
    'deuda'=>'0'
    );
$deuda[19][19102]=array(
    'nombre' =>'Cubillo de Uceda, El',
    'habitantes' =>'145',
    'deuda'=>'0'
    );
$deuda[19][19103]=array(
    'nombre' =>'Checa',
    'habitantes' =>'289',
    'deuda'=>'70'
    );
$deuda[19][19104]=array(
    'nombre' =>'Chequilla',
    'habitantes' =>'21',
    'deuda'=>'5'
    );
$deuda[19][19105]=array(
    'nombre' =>'Chiloeches',
    'habitantes' =>'3291',
    'deuda'=>'228'
    );
$deuda[19][19106]=array(
    'nombre' =>'Chillarón del Rey',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[19][19107]=array(
    'nombre' =>'Driebes',
    'habitantes' =>'375',
    'deuda'=>'0'
    );
$deuda[19][19108]=array(
    'nombre' =>'Durón',
    'habitantes' =>'129',
    'deuda'=>'25'
    );
$deuda[19][19109]=array(
    'nombre' =>'Embid',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[19][19110]=array(
    'nombre' =>'Escamilla',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[19][19111]=array(
    'nombre' =>'Escariche',
    'habitantes' =>'187',
    'deuda'=>'17'
    );
$deuda[19][19112]=array(
    'nombre' =>'Escopete',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[19][19113]=array(
    'nombre' =>'Espinosa de Henares',
    'habitantes' =>'696',
    'deuda'=>'0'
    );
$deuda[19][19114]=array(
    'nombre' =>'Esplegares',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[19][19115]=array(
    'nombre' =>'Establés',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[19][19116]=array(
    'nombre' =>'Estriégana',
    'habitantes' =>'21',
    'deuda'=>'0'
    );
$deuda[19][19117]=array(
    'nombre' =>'Fontanar',
    'habitantes' =>'2338',
    'deuda'=>'555'
    );
$deuda[19][19118]=array(
    'nombre' =>'Fuembellida',
    'habitantes' =>'13',
    'deuda'=>'0'
    );
$deuda[19][19119]=array(
    'nombre' =>'Fuencemillán',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[19][19120]=array(
    'nombre' =>'Fuentelahiguera de Albatages',
    'habitantes' =>'136',
    'deuda'=>'0'
    );
$deuda[19][19121]=array(
    'nombre' =>'Fuentelencina',
    'habitantes' =>'332',
    'deuda'=>'119'
    );
$deuda[19][19122]=array(
    'nombre' =>'Fuentelsaz',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[19][19123]=array(
    'nombre' =>'Fuentelviejo',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[19][19124]=array(
    'nombre' =>'Fuentenovilla',
    'habitantes' =>'543',
    'deuda'=>'471'
    );
$deuda[19][19125]=array(
    'nombre' =>'Gajanejos',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[19][19126]=array(
    'nombre' =>'Galápagos',
    'habitantes' =>'2368',
    'deuda'=>'0'
    );
$deuda[19][19127]=array(
    'nombre' =>'Galve de Sorbe',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[19][19129]=array(
    'nombre' =>'Gascueña de Bornova',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[19][19130]=array(
    'nombre' =>'Guadalajara',
    'habitantes' =>'83391',
    'deuda'=>'27784'
    );
$deuda[19][19132]=array(
    'nombre' =>'Henche',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[19][19133]=array(
    'nombre' =>'Heras de Ayuso',
    'habitantes' =>'252',
    'deuda'=>'0'
    );
$deuda[19][19134]=array(
    'nombre' =>'Herrería',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[19][19135]=array(
    'nombre' =>'Hiendelaencina',
    'habitantes' =>'133',
    'deuda'=>'5'
    );
$deuda[19][19136]=array(
    'nombre' =>'Hijes',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[19][19138]=array(
    'nombre' =>'Hita',
    'habitantes' =>'358',
    'deuda'=>'0'
    );
$deuda[19][19139]=array(
    'nombre' =>'Hombrados',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[19][19142]=array(
    'nombre' =>'Hontoba',
    'habitantes' =>'314',
    'deuda'=>'0'
    );
$deuda[19][19143]=array(
    'nombre' =>'Horche',
    'habitantes' =>'2544',
    'deuda'=>'582'
    );
$deuda[19][19145]=array(
    'nombre' =>'Hortezuela de Océn',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[19][19146]=array(
    'nombre' =>'Huerce, La',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[19][19147]=array(
    'nombre' =>'Huérmeces del Cerro',
    'habitantes' =>'43',
    'deuda'=>'108'
    );
$deuda[19][19148]=array(
    'nombre' =>'Huertahernando',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[19][19150]=array(
    'nombre' =>'Hueva',
    'habitantes' =>'140',
    'deuda'=>'49'
    );
$deuda[19][19151]=array(
    'nombre' =>'Humanes',
    'habitantes' =>'1485',
    'deuda'=>'267'
    );
$deuda[19][19152]=array(
    'nombre' =>'Illana',
    'habitantes' =>'775',
    'deuda'=>'110'
    );
$deuda[19][19153]=array(
    'nombre' =>'Iniéstola',
    'habitantes' =>'24',
    'deuda'=>'0'
    );
$deuda[19][19154]=array(
    'nombre' =>'Inviernas, Las',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[19][19155]=array(
    'nombre' =>'Irueste',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[19][19156]=array(
    'nombre' =>'Jadraque',
    'habitantes' =>'1504',
    'deuda'=>'496'
    );
$deuda[19][19157]=array(
    'nombre' =>'Jirueque',
    'habitantes' =>'68',
    'deuda'=>'19'
    );
$deuda[19][19159]=array(
    'nombre' =>'Ledanca',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[19][19160]=array(
    'nombre' =>'Loranca de Tajuña',
    'habitantes' =>'1275',
    'deuda'=>'0'
    );
$deuda[19][19161]=array(
    'nombre' =>'Lupiana',
    'habitantes' =>'256',
    'deuda'=>'0'
    );
$deuda[19][19162]=array(
    'nombre' =>'Luzaga',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[19][19163]=array(
    'nombre' =>'Luzón',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[19][19165]=array(
    'nombre' =>'Majaelrayo',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[19][19166]=array(
    'nombre' =>'Málaga del Fresno',
    'habitantes' =>'194',
    'deuda'=>'0'
    );
$deuda[19][19167]=array(
    'nombre' =>'Malaguilla',
    'habitantes' =>'154',
    'deuda'=>'22'
    );
$deuda[19][19168]=array(
    'nombre' =>'Mandayona',
    'habitantes' =>'339',
    'deuda'=>'0'
    );
$deuda[19][19169]=array(
    'nombre' =>'Mantiel',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[19][19170]=array(
    'nombre' =>'Maranchón',
    'habitantes' =>'247',
    'deuda'=>'0'
    );
$deuda[19][19171]=array(
    'nombre' =>'Marchamalo',
    'habitantes' =>'6750',
    'deuda'=>'1366'
    );
$deuda[19][19172]=array(
    'nombre' =>'Masegoso de Tajuña',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[19][19173]=array(
    'nombre' =>'Matarrubia',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[19][19174]=array(
    'nombre' =>'Matillas',
    'habitantes' =>'149',
    'deuda'=>'26'
    );
$deuda[19][19175]=array(
    'nombre' =>'Mazarete',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[19][19176]=array(
    'nombre' =>'Mazuecos',
    'habitantes' =>'307',
    'deuda'=>'22'
    );
$deuda[19][19177]=array(
    'nombre' =>'Medranda',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[19][19178]=array(
    'nombre' =>'Megina',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[19][19179]=array(
    'nombre' =>'Membrillera',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[19][19181]=array(
    'nombre' =>'Miedes de Atienza',
    'habitantes' =>'67',
    'deuda'=>'0'
    );
$deuda[19][19182]=array(
    'nombre' =>'Mierla, La',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[19][19183]=array(
    'nombre' =>'Milmarcos',
    'habitantes' =>'98',
    'deuda'=>'0'
    );
$deuda[19][19184]=array(
    'nombre' =>'Millana',
    'habitantes' =>'126',
    'deuda'=>'30'
    );
$deuda[19][19185]=array(
    'nombre' =>'Miñosa, La',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[19][19186]=array(
    'nombre' =>'Mirabueno',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[19][19187]=array(
    'nombre' =>'Miralrío',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[19][19188]=array(
    'nombre' =>'Mochales',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[19][19189]=array(
    'nombre' =>'Mohernando',
    'habitantes' =>'180',
    'deuda'=>'0'
    );
$deuda[19][19190]=array(
    'nombre' =>'Molina de Aragón',
    'habitantes' =>'3468',
    'deuda'=>'410'
    );
$deuda[19][19191]=array(
    'nombre' =>'Monasterio',
    'habitantes' =>'13',
    'deuda'=>'0'
    );
$deuda[19][19192]=array(
    'nombre' =>'Mondéjar',
    'habitantes' =>'2579',
    'deuda'=>'936'
    );
$deuda[19][19193]=array(
    'nombre' =>'Montarrón',
    'habitantes' =>'28',
    'deuda'=>'50'
    );
$deuda[19][19194]=array(
    'nombre' =>'Moratilla de los Meleros',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[19][19195]=array(
    'nombre' =>'Morenilla',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[19][19196]=array(
    'nombre' =>'Muduex',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[19][19197]=array(
    'nombre' =>'Navas de Jadraque, Las',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[19][19198]=array(
    'nombre' =>'Negredo',
    'habitantes' =>'21',
    'deuda'=>'0'
    );
$deuda[19][19199]=array(
    'nombre' =>'Ocentejo',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[19][19200]=array(
    'nombre' =>'Olivar, El',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[19][19201]=array(
    'nombre' =>'Olmeda de Cobeta',
    'habitantes' =>'73',
    'deuda'=>'63'
    );
$deuda[19][19202]=array(
    'nombre' =>'Olmeda de Jadraque, La',
    'habitantes' =>'16',
    'deuda'=>'0'
    );
$deuda[19][19203]=array(
    'nombre' =>'Ordial, El',
    'habitantes' =>'31',
    'deuda'=>'121'
    );
$deuda[19][19204]=array(
    'nombre' =>'Orea',
    'habitantes' =>'203',
    'deuda'=>'283'
    );
$deuda[19][19208]=array(
    'nombre' =>'Pálmaces de Jadraque',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[19][19209]=array(
    'nombre' =>'Pardos',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[19][19210]=array(
    'nombre' =>'Paredes de Sigüenza',
    'habitantes' =>'22',
    'deuda'=>'0'
    );
$deuda[19][19211]=array(
    'nombre' =>'Pareja',
    'habitantes' =>'468',
    'deuda'=>'0'
    );
$deuda[19][19212]=array(
    'nombre' =>'Pastrana',
    'habitantes' =>'978',
    'deuda'=>'252'
    );
$deuda[19][19213]=array(
    'nombre' =>'Pedregal, El',
    'habitantes' =>'83',
    'deuda'=>'0'
    );
$deuda[19][19214]=array(
    'nombre' =>'Peñalén',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[19][19215]=array(
    'nombre' =>'Peñalver',
    'habitantes' =>'187',
    'deuda'=>'0'
    );
$deuda[19][19216]=array(
    'nombre' =>'Peralejos de las Truchas',
    'habitantes' =>'153',
    'deuda'=>'0'
    );
$deuda[19][19217]=array(
    'nombre' =>'Peralveche',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[19][19218]=array(
    'nombre' =>'Pinilla de Jadraque',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[19][19219]=array(
    'nombre' =>'Pinilla de Molina',
    'habitantes' =>'17',
    'deuda'=>'0'
    );
$deuda[19][19220]=array(
    'nombre' =>'Pioz',
    'habitantes' =>'3544',
    'deuda'=>'6414'
    );
$deuda[19][19221]=array(
    'nombre' =>'Piqueras',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[19][19222]=array(
    'nombre' =>'Pobo de Dueñas, El',
    'habitantes' =>'134',
    'deuda'=>'0'
    );
$deuda[19][19223]=array(
    'nombre' =>'Poveda de la Sierra',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[19][19224]=array(
    'nombre' =>'Pozo de Almoguera',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[19][19225]=array(
    'nombre' =>'Pozo de Guadalajara',
    'habitantes' =>'1249',
    'deuda'=>'0'
    );
$deuda[19][19226]=array(
    'nombre' =>'Prádena de Atienza',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[19][19227]=array(
    'nombre' =>'Prados Redondos',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[19][19228]=array(
    'nombre' =>'Puebla de Beleña',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[19][19229]=array(
    'nombre' =>'Puebla de Valles',
    'habitantes' =>'74',
    'deuda'=>'91'
    );
$deuda[19][19230]=array(
    'nombre' =>'Quer',
    'habitantes' =>'747',
    'deuda'=>'0'
    );
$deuda[19][19231]=array(
    'nombre' =>'Rebollosa de Jadraque',
    'habitantes' =>'14',
    'deuda'=>'0'
    );
$deuda[19][19232]=array(
    'nombre' =>'Recuenco, El',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[19][19233]=array(
    'nombre' =>'Renera',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[19][19234]=array(
    'nombre' =>'Retiendas',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[19][19235]=array(
    'nombre' =>'Riba de Saelices',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[19][19237]=array(
    'nombre' =>'Rillo de Gallo',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[19][19238]=array(
    'nombre' =>'Riofrío del Llano',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[19][19239]=array(
    'nombre' =>'Robledillo de Mohernando',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[19][19240]=array(
    'nombre' =>'Robledo de Corpes',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[19][19241]=array(
    'nombre' =>'Romanillos de Atienza',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[19][19242]=array(
    'nombre' =>'Romanones',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[19][19243]=array(
    'nombre' =>'Rueda de la Sierra',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[19][19244]=array(
    'nombre' =>'Sacecorbo',
    'habitantes' =>'93',
    'deuda'=>'336'
    );
$deuda[19][19245]=array(
    'nombre' =>'Sacedón',
    'habitantes' =>'1605',
    'deuda'=>'495'
    );
$deuda[19][19246]=array(
    'nombre' =>'Saelices de la Sal',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[19][19247]=array(
    'nombre' =>'Salmerón',
    'habitantes' =>'177',
    'deuda'=>'0'
    );
$deuda[19][19248]=array(
    'nombre' =>'San Andrés del Congosto',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[19][19249]=array(
    'nombre' =>'San Andrés del Rey',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[19][19250]=array(
    'nombre' =>'Santiuste',
    'habitantes' =>'19',
    'deuda'=>'0'
    );
$deuda[19][19251]=array(
    'nombre' =>'Saúca',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[19][19252]=array(
    'nombre' =>'Sayatón',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[19][19254]=array(
    'nombre' =>'Selas',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[19][19255]=array(
    'nombre' =>'Setiles',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[19][19256]=array(
    'nombre' =>'Sienes',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[19][19257]=array(
    'nombre' =>'Sigüenza',
    'habitantes' =>'4648',
    'deuda'=>'2565'
    );
$deuda[19][19258]=array(
    'nombre' =>'Solanillos del Extremo',
    'habitantes' =>'104',
    'deuda'=>'90'
    );
$deuda[19][19259]=array(
    'nombre' =>'Somolinos',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[19][19260]=array(
    'nombre' =>'Sotillo, El',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[19][19261]=array(
    'nombre' =>'Sotodosos',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[19][19262]=array(
    'nombre' =>'Tamajón',
    'habitantes' =>'148',
    'deuda'=>'208'
    );
$deuda[19][19263]=array(
    'nombre' =>'Taragudo',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[19][19264]=array(
    'nombre' =>'Taravilla',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[19][19265]=array(
    'nombre' =>'Tartanedo',
    'habitantes' =>'150',
    'deuda'=>'0'
    );
$deuda[19][19266]=array(
    'nombre' =>'Tendilla',
    'habitantes' =>'339',
    'deuda'=>'100'
    );
$deuda[19][19267]=array(
    'nombre' =>'Terzaga',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[19][19268]=array(
    'nombre' =>'Tierzo',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[19][19269]=array(
    'nombre' =>'Toba, La',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[19][19270]=array(
    'nombre' =>'Tordelrábano',
    'habitantes' =>'21',
    'deuda'=>'0'
    );
$deuda[19][19271]=array(
    'nombre' =>'Tordellego',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[19][19272]=array(
    'nombre' =>'Tordesilos',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[19][19274]=array(
    'nombre' =>'Torija',
    'habitantes' =>'1453',
    'deuda'=>'850'
    );
$deuda[19][19277]=array(
    'nombre' =>'Torrecuadrada de Molina',
    'habitantes' =>'23',
    'deuda'=>'0'
    );
$deuda[19][19278]=array(
    'nombre' =>'Torrecuadradilla',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[19][19279]=array(
    'nombre' =>'Torre del Burgo',
    'habitantes' =>'228',
    'deuda'=>'65'
    );
$deuda[19][19280]=array(
    'nombre' =>'Torrejón del Rey',
    'habitantes' =>'5064',
    'deuda'=>'1629'
    );
$deuda[19][19281]=array(
    'nombre' =>'Torremocha de Jadraque',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[19][19282]=array(
    'nombre' =>'Torremocha del Campo',
    'habitantes' =>'200',
    'deuda'=>'0'
    );
$deuda[19][19283]=array(
    'nombre' =>'Torremocha del Pinar',
    'habitantes' =>'40',
    'deuda'=>'32'
    );
$deuda[19][19284]=array(
    'nombre' =>'Torremochuela',
    'habitantes' =>'11',
    'deuda'=>'8'
    );
$deuda[19][19285]=array(
    'nombre' =>'Torrubia',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[19][19286]=array(
    'nombre' =>'Tórtola de Henares',
    'habitantes' =>'990',
    'deuda'=>'350'
    );
$deuda[19][19287]=array(
    'nombre' =>'Tortuera',
    'habitantes' =>'207',
    'deuda'=>'0'
    );
$deuda[19][19288]=array(
    'nombre' =>'Tortuero',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[19][19289]=array(
    'nombre' =>'Traíd',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[19][19290]=array(
    'nombre' =>'Trijueque',
    'habitantes' =>'1256',
    'deuda'=>'910'
    );
$deuda[19][19291]=array(
    'nombre' =>'Trillo',
    'habitantes' =>'1436',
    'deuda'=>'0'
    );
$deuda[19][19293]=array(
    'nombre' =>'Uceda',
    'habitantes' =>'2602',
    'deuda'=>'1819'
    );
$deuda[19][19294]=array(
    'nombre' =>'Ujados',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[19][19296]=array(
    'nombre' =>'Utande',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[19][19297]=array(
    'nombre' =>'Valdarachas',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[19][19298]=array(
    'nombre' =>'Valdearenas',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[19][19299]=array(
    'nombre' =>'Valdeavellano',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[19][19300]=array(
    'nombre' =>'Valdeaveruelo',
    'habitantes' =>'1048',
    'deuda'=>'670'
    );
$deuda[19][19301]=array(
    'nombre' =>'Valdeconcha',
    'habitantes' =>'41',
    'deuda'=>'11'
    );
$deuda[19][19302]=array(
    'nombre' =>'Valdegrudas',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[19][19303]=array(
    'nombre' =>'Valdelcubo',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[19][19304]=array(
    'nombre' =>'Valdenuño Fernández',
    'habitantes' =>'270',
    'deuda'=>'0'
    );
$deuda[19][19305]=array(
    'nombre' =>'Valdepeñas de la Sierra',
    'habitantes' =>'192',
    'deuda'=>'34'
    );
$deuda[19][19306]=array(
    'nombre' =>'Valderrebollo',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[19][19307]=array(
    'nombre' =>'Valdesotos',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[19][19308]=array(
    'nombre' =>'Valfermoso de Tajuña',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[19][19309]=array(
    'nombre' =>'Valhermoso',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[19][19310]=array(
    'nombre' =>'Valtablado del Río',
    'habitantes' =>'12',
    'deuda'=>'0'
    );
$deuda[19][19311]=array(
    'nombre' =>'Valverde de los Arroyos',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[19][19314]=array(
    'nombre' =>'Viana de Jadraque',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[19][19317]=array(
    'nombre' =>'Villanueva de Alcorón',
    'habitantes' =>'193',
    'deuda'=>'0'
    );
$deuda[19][19318]=array(
    'nombre' =>'Villanueva de Argecilla',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[19][19319]=array(
    'nombre' =>'Villanueva de la Torre',
    'habitantes' =>'6443',
    'deuda'=>'241'
    );
$deuda[19][19321]=array(
    'nombre' =>'Villares de Jadraque',
    'habitantes' =>'54',
    'deuda'=>'9'
    );
$deuda[19][19322]=array(
    'nombre' =>'Villaseca de Henares',
    'habitantes' =>'33',
    'deuda'=>'2'
    );
$deuda[19][19323]=array(
    'nombre' =>'Villaseca de Uceda',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[19][19324]=array(
    'nombre' =>'Villel de Mesa',
    'habitantes' =>'207',
    'deuda'=>'90'
    );
$deuda[19][19325]=array(
    'nombre' =>'Viñuelas',
    'habitantes' =>'151',
    'deuda'=>'0'
    );
$deuda[19][19326]=array(
    'nombre' =>'Yebes',
    'habitantes' =>'2741',
    'deuda'=>'0'
    );
$deuda[19][19327]=array(
    'nombre' =>'Yebra',
    'habitantes' =>'539',
    'deuda'=>'400'
    );
$deuda[19][19329]=array(
    'nombre' =>'Yélamos de Abajo',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[19][19330]=array(
    'nombre' =>'Yélamos de Arriba',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[19][19331]=array(
    'nombre' =>'Yunquera de Henares',
    'habitantes' =>'3755',
    'deuda'=>'1989'
    );
$deuda[19][19332]=array(
    'nombre' =>'Yunta, La',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[19][19333]=array(
    'nombre' =>'Zaorejas',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[19][19334]=array(
    'nombre' =>'Zarzuela de Jadraque',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[19][19335]=array(
    'nombre' =>'Zorita de los Canes',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[19][19901]=array(
    'nombre' =>'Semillas',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[20][20001]=array(
    'nombre' =>'Abaltzisketa',
    'habitantes' =>'329',
    'deuda'=>'11'
    );
$deuda[20][20002]=array(
    'nombre' =>'Aduna',
    'habitantes' =>'470',
    'deuda'=>'357'
    );
$deuda[20][20003]=array(
    'nombre' =>'Aizarnazabal',
    'habitantes' =>'775',
    'deuda'=>'666'
    );
$deuda[20][20004]=array(
    'nombre' =>'Albiztur',
    'habitantes' =>'320',
    'deuda'=>'0'
    );
$deuda[20][20005]=array(
    'nombre' =>'Alegia',
    'habitantes' =>'1741',
    'deuda'=>'167'
    );
$deuda[20][20006]=array(
    'nombre' =>'Alkiza',
    'habitantes' =>'362',
    'deuda'=>'0'
    );
$deuda[20][20007]=array(
    'nombre' =>'Altzo',
    'habitantes' =>'405',
    'deuda'=>'0'
    );
$deuda[20][20008]=array(
    'nombre' =>'Amezketa',
    'habitantes' =>'942',
    'deuda'=>'193'
    );
$deuda[20][20009]=array(
    'nombre' =>'Andoain',
    'habitantes' =>'14668',
    'deuda'=>'2922'
    );
$deuda[20][20010]=array(
    'nombre' =>'Anoeta',
    'habitantes' =>'1959',
    'deuda'=>'1601'
    );
$deuda[20][20011]=array(
    'nombre' =>'Antzuola',
    'habitantes' =>'2193',
    'deuda'=>'1561'
    );
$deuda[20][20012]=array(
    'nombre' =>'Arama',
    'habitantes' =>'210',
    'deuda'=>'0'
    );
$deuda[20][20013]=array(
    'nombre' =>'Aretxabaleta',
    'habitantes' =>'6974',
    'deuda'=>'4959'
    );
$deuda[20][20014]=array(
    'nombre' =>'Asteasu',
    'habitantes' =>'1525',
    'deuda'=>'920'
    );
$deuda[20][20015]=array(
    'nombre' =>'Ataun',
    'habitantes' =>'1674',
    'deuda'=>'670'
    );
$deuda[20][20016]=array(
    'nombre' =>'Aia',
    'habitantes' =>'2051',
    'deuda'=>'0'
    );
$deuda[20][20017]=array(
    'nombre' =>'Azkoitia',
    'habitantes' =>'11566',
    'deuda'=>'6251'
    );
$deuda[20][20018]=array(
    'nombre' =>'Azpeitia',
    'habitantes' =>'14675',
    'deuda'=>'4185'
    );
$deuda[20][20019]=array(
    'nombre' =>'Beasain',
    'habitantes' =>'13980',
    'deuda'=>'4233'
    );
$deuda[20][20020]=array(
    'nombre' =>'Beizama',
    'habitantes' =>'165',
    'deuda'=>'111'
    );
$deuda[20][20021]=array(
    'nombre' =>'Belauntza',
    'habitantes' =>'248',
    'deuda'=>'58'
    );
$deuda[20][20022]=array(
    'nombre' =>'Berastegi',
    'habitantes' =>'1061',
    'deuda'=>'739'
    );
$deuda[20][20023]=array(
    'nombre' =>'Berrobi',
    'habitantes' =>'583',
    'deuda'=>'320'
    );
$deuda[20][20024]=array(
    'nombre' =>'Bidania-Goiatz',
    'habitantes' =>'526',
    'deuda'=>'185'
    );
$deuda[20][20025]=array(
    'nombre' =>'Zegama',
    'habitantes' =>'1517',
    'deuda'=>'0'
    );
$deuda[20][20026]=array(
    'nombre' =>'Zerain',
    'habitantes' =>'255',
    'deuda'=>'103'
    );
$deuda[20][20027]=array(
    'nombre' =>'Zestoa',
    'habitantes' =>'3714',
    'deuda'=>'735'
    );
$deuda[20][20028]=array(
    'nombre' =>'Zizurkil',
    'habitantes' =>'3010',
    'deuda'=>'1612'
    );
$deuda[20][20029]=array(
    'nombre' =>'Deba',
    'habitantes' =>'5463',
    'deuda'=>'1958'
    );
$deuda[20][20030]=array(
    'nombre' =>'Eibar',
    'habitantes' =>'27414',
    'deuda'=>'4197'
    );
$deuda[20][20031]=array(
    'nombre' =>'Elduain',
    'habitantes' =>'244',
    'deuda'=>'33'
    );
$deuda[20][20032]=array(
    'nombre' =>'Elgoibar',
    'habitantes' =>'11589',
    'deuda'=>'144'
    );
$deuda[20][20033]=array(
    'nombre' =>'Elgeta',
    'habitantes' =>'1116',
    'deuda'=>'626'
    );
$deuda[20][20034]=array(
    'nombre' =>'Eskoriatza',
    'habitantes' =>'4085',
    'deuda'=>'999'
    );
$deuda[20][20035]=array(
    'nombre' =>'Ezkio-Itsaso',
    'habitantes' =>'619',
    'deuda'=>'0'
    );
$deuda[20][20036]=array(
    'nombre' =>'Hondarribia',
    'habitantes' =>'16945',
    'deuda'=>'0'
    );
$deuda[20][20037]=array(
    'nombre' =>'Gaintza',
    'habitantes' =>'122',
    'deuda'=>'18'
    );
$deuda[20][20038]=array(
    'nombre' =>'Gabiria',
    'habitantes' =>'491',
    'deuda'=>'281'
    );
$deuda[20][20039]=array(
    'nombre' =>'Getaria',
    'habitantes' =>'2783',
    'deuda'=>'1476'
    );
$deuda[20][20040]=array(
    'nombre' =>'Hernani',
    'habitantes' =>'19600',
    'deuda'=>'1460'
    );
$deuda[20][20041]=array(
    'nombre' =>'Hernialde',
    'habitantes' =>'331',
    'deuda'=>'0'
    );
$deuda[20][20042]=array(
    'nombre' =>'Ibarra',
    'habitantes' =>'4278',
    'deuda'=>'1948'
    );
$deuda[20][20043]=array(
    'nombre' =>'Idiazabal',
    'habitantes' =>'2308',
    'deuda'=>'709'
    );
$deuda[20][20044]=array(
    'nombre' =>'Ikaztegieta',
    'habitantes' =>'486',
    'deuda'=>'375'
    );
$deuda[20][20045]=array(
    'nombre' =>'Irun',
    'habitantes' =>'61481',
    'deuda'=>'27290'
    );
$deuda[20][20046]=array(
    'nombre' =>'Irura',
    'habitantes' =>'1690',
    'deuda'=>'0'
    );
$deuda[20][20047]=array(
    'nombre' =>'Itsasondo',
    'habitantes' =>'675',
    'deuda'=>'33'
    );
$deuda[20][20048]=array(
    'nombre' =>'Larraul',
    'habitantes' =>'249',
    'deuda'=>'22'
    );
$deuda[20][20049]=array(
    'nombre' =>'Lazkao',
    'habitantes' =>'5456',
    'deuda'=>'982'
    );
$deuda[20][20050]=array(
    'nombre' =>'Leaburu',
    'habitantes' =>'368',
    'deuda'=>'0'
    );
$deuda[20][20051]=array(
    'nombre' =>'Legazpi',
    'habitantes' =>'8521',
    'deuda'=>'748'
    );
$deuda[20][20052]=array(
    'nombre' =>'Legorreta',
    'habitantes' =>'1441',
    'deuda'=>'225'
    );
$deuda[20][20053]=array(
    'nombre' =>'Lezo',
    'habitantes' =>'5990',
    'deuda'=>'2450'
    );
$deuda[20][20054]=array(
    'nombre' =>'Lizartza',
    'habitantes' =>'624',
    'deuda'=>'55'
    );
$deuda[20][20055]=array(
    'nombre' =>'Arrasate/Mondragón',
    'habitantes' =>'22055',
    'deuda'=>'2329'
    );
$deuda[20][20056]=array(
    'nombre' =>'Mutriku',
    'habitantes' =>'5313',
    'deuda'=>'2822'
    );
$deuda[20][20057]=array(
    'nombre' =>'Mutiloa',
    'habitantes' =>'266',
    'deuda'=>'707'
    );
$deuda[20][20058]=array(
    'nombre' =>'Olaberria',
    'habitantes' =>'932',
    'deuda'=>'0'
    );
$deuda[20][20059]=array(
    'nombre' =>'Oñati',
    'habitantes' =>'11276',
    'deuda'=>'2056'
    );
$deuda[20][20060]=array(
    'nombre' =>'Orexa',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[20][20061]=array(
    'nombre' =>'Orio',
    'habitantes' =>'5805',
    'deuda'=>'0'
    );
$deuda[20][20062]=array(
    'nombre' =>'Ormaiztegi',
    'habitantes' =>'1304',
    'deuda'=>'136'
    );
$deuda[20][20063]=array(
    'nombre' =>'Oiartzun',
    'habitantes' =>'10148',
    'deuda'=>'3815'
    );
$deuda[20][20064]=array(
    'nombre' =>'Pasaia',
    'habitantes' =>'16012',
    'deuda'=>'3083'
    );
$deuda[20][20065]=array(
    'nombre' =>'Soraluze-Placencia de las Armas',
    'habitantes' =>'3947',
    'deuda'=>'1258'
    );
$deuda[20][20066]=array(
    'nombre' =>'Errezil',
    'habitantes' =>'593',
    'deuda'=>'433'
    );
$deuda[20][20067]=array(
    'nombre' =>'Errenteria',
    'habitantes' =>'39276',
    'deuda'=>'13550'
    );
$deuda[20][20068]=array(
    'nombre' =>'Leintz-Gatzaga',
    'habitantes' =>'241',
    'deuda'=>'0'
    );
$deuda[20][20069]=array(
    'nombre' =>'Donostia/San Sebastián',
    'habitantes' =>'186095',
    'deuda'=>'81332'
    );
$deuda[20][20070]=array(
    'nombre' =>'Segura',
    'habitantes' =>'1476',
    'deuda'=>'756'
    );
$deuda[20][20071]=array(
    'nombre' =>'Tolosa',
    'habitantes' =>'19113',
    'deuda'=>'9048'
    );
$deuda[20][20072]=array(
    'nombre' =>'Urnieta',
    'habitantes' =>'6239',
    'deuda'=>'883'
    );
$deuda[20][20073]=array(
    'nombre' =>'Usurbil',
    'habitantes' =>'6183',
    'deuda'=>'1497'
    );
$deuda[20][20074]=array(
    'nombre' =>'Bergara',
    'habitantes' =>'14780',
    'deuda'=>'6938'
    );
$deuda[20][20075]=array(
    'nombre' =>'Villabona',
    'habitantes' =>'5862',
    'deuda'=>'2266'
    );
$deuda[20][20076]=array(
    'nombre' =>'Ordizia',
    'habitantes' =>'9846',
    'deuda'=>'4626'
    );
$deuda[20][20077]=array(
    'nombre' =>'Urretxu',
    'habitantes' =>'6908',
    'deuda'=>'1739'
    );
$deuda[20][20078]=array(
    'nombre' =>'Zaldibia',
    'habitantes' =>'1577',
    'deuda'=>'0'
    );
$deuda[20][20079]=array(
    'nombre' =>'Zarautz',
    'habitantes' =>'22988',
    'deuda'=>'13497'
    );
$deuda[20][20080]=array(
    'nombre' =>'Zumarraga',
    'habitantes' =>'9921',
    'deuda'=>'1265'
    );
$deuda[20][20081]=array(
    'nombre' =>'Zumaia',
    'habitantes' =>'9798',
    'deuda'=>'2783'
    );
$deuda[20][20901]=array(
    'nombre' =>'Mendaro',
    'habitantes' =>'2026',
    'deuda'=>'244'
    );
$deuda[20][20902]=array(
    'nombre' =>'Lasarte-Oria',
    'habitantes' =>'18093',
    'deuda'=>'2233'
    );
$deuda[20][20903]=array(
    'nombre' =>'Astigarraga',
    'habitantes' =>'5688',
    'deuda'=>'560'
    );
$deuda[20][20904]=array(
    'nombre' =>'Baliarrain',
    'habitantes' =>'147',
    'deuda'=>'24'
    );
$deuda[20][20905]=array(
    'nombre' =>'Orendain',
    'habitantes' =>'193',
    'deuda'=>'112'
    );
$deuda[20][20906]=array(
    'nombre' =>'Altzaga',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[20][20907]=array(
    'nombre' =>'Gaztelu',
    'habitantes' =>'164',
    'deuda'=>'81'
    );
$deuda[21][21001]=array(
    'nombre' =>'Alájar',
    'habitantes' =>'813',
    'deuda'=>'295'
    );
$deuda[21][21002]=array(
    'nombre' =>'Aljaraque',
    'habitantes' =>'20357',
    'deuda'=>'12597'
    );
$deuda[21][21003]=array(
    'nombre' =>'Almendro, El',
    'habitantes' =>'829',
    'deuda'=>'0'
    );
$deuda[21][21004]=array(
    'nombre' =>'Almonaster la Real',
    'habitantes' =>'1861',
    'deuda'=>'0'
    );
$deuda[21][21005]=array(
    'nombre' =>'Almonte',
    'habitantes' =>'23254',
    'deuda'=>'37445'
    );
$deuda[21][21006]=array(
    'nombre' =>'Alosno',
    'habitantes' =>'4038',
    'deuda'=>'1782'
    );
$deuda[21][21007]=array(
    'nombre' =>'Aracena',
    'habitantes' =>'7972',
    'deuda'=>'3708'
    );
$deuda[21][21008]=array(
    'nombre' =>'Aroche',
    'habitantes' =>'3183',
    'deuda'=>'5107'
    );
$deuda[21][21009]=array(
    'nombre' =>'Arroyomolinos de León',
    'habitantes' =>'1018',
    'deuda'=>'585'
    );
$deuda[21][21010]=array(
    'nombre' =>'Ayamonte',
    'habitantes' =>'20357',
    'deuda'=>'35039'
    );
$deuda[21][21011]=array(
    'nombre' =>'Beas',
    'habitantes' =>'4304',
    'deuda'=>'2942'
    );
$deuda[21][21012]=array(
    'nombre' =>'Berrocal',
    'habitantes' =>'345',
    'deuda'=>'268'
    );
$deuda[21][21013]=array(
    'nombre' =>'Bollullos Par del Condado',
    'habitantes' =>'14324',
    'deuda'=>'13938'
    );
$deuda[21][21014]=array(
    'nombre' =>'Bonares',
    'habitantes' =>'6090',
    'deuda'=>'0'
    );
$deuda[21][21015]=array(
    'nombre' =>'Cabezas Rubias',
    'habitantes' =>'744',
    'deuda'=>'0'
    );
$deuda[21][21016]=array(
    'nombre' =>'Cala',
    'habitantes' =>'1252',
    'deuda'=>'956'
    );
$deuda[21][21017]=array(
    'nombre' =>'Calañas',
    'habitantes' =>'4238',
    'deuda'=>'1172'
    );
$deuda[21][21018]=array(
    'nombre' =>'Campillo, El',
    'habitantes' =>'2122',
    'deuda'=>'542'
    );
$deuda[21][21019]=array(
    'nombre' =>'Campofrío',
    'habitantes' =>'643',
    'deuda'=>'654'
    );
$deuda[21][21020]=array(
    'nombre' =>'Cañaveral de León',
    'habitantes' =>'409',
    'deuda'=>'289'
    );
$deuda[21][21021]=array(
    'nombre' =>'Cartaya',
    'habitantes' =>'19164',
    'deuda'=>'16751'
    );
$deuda[21][21022]=array(
    'nombre' =>'Castaño del Robledo',
    'habitantes' =>'211',
    'deuda'=>'0'
    );
$deuda[21][21023]=array(
    'nombre' =>'Cerro de Andévalo, El',
    'habitantes' =>'2495',
    'deuda'=>'0'
    );
$deuda[21][21024]=array(
    'nombre' =>'Corteconcepción',
    'habitantes' =>'552',
    'deuda'=>'22'
    );
$deuda[21][21025]=array(
    'nombre' =>'Cortegana',
    'habitantes' =>'4931',
    'deuda'=>'5213'
    );
$deuda[21][21026]=array(
    'nombre' =>'Cortelazor',
    'habitantes' =>'283',
    'deuda'=>'241'
    );
$deuda[21][21027]=array(
    'nombre' =>'Cumbres de Enmedio',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[21][21028]=array(
    'nombre' =>'Cumbres de San Bartolomé',
    'habitantes' =>'421',
    'deuda'=>'311'
    );
$deuda[21][21029]=array(
    'nombre' =>'Cumbres Mayores',
    'habitantes' =>'1848',
    'deuda'=>'744'
    );
$deuda[21][21030]=array(
    'nombre' =>'Chucena',
    'habitantes' =>'2122',
    'deuda'=>'439'
    );
$deuda[21][21031]=array(
    'nombre' =>'Encinasola',
    'habitantes' =>'1326',
    'deuda'=>'1649'
    );
$deuda[21][21032]=array(
    'nombre' =>'Escacena del Campo',
    'habitantes' =>'2095',
    'deuda'=>'1532'
    );
$deuda[21][21033]=array(
    'nombre' =>'Fuenteheridos',
    'habitantes' =>'641',
    'deuda'=>'380'
    );
$deuda[21][21034]=array(
    'nombre' =>'Galaroza',
    'habitantes' =>'1486',
    'deuda'=>'1336'
    );
$deuda[21][21035]=array(
    'nombre' =>'Gibraleón',
    'habitantes' =>'12508',
    'deuda'=>'9045'
    );
$deuda[21][21036]=array(
    'nombre' =>'Granada de Río-Tinto, La',
    'habitantes' =>'202',
    'deuda'=>'76'
    );
$deuda[21][21037]=array(
    'nombre' =>'Granado, El',
    'habitantes' =>'540',
    'deuda'=>'0'
    );
$deuda[21][21038]=array(
    'nombre' =>'Higuera de la Sierra',
    'habitantes' =>'1327',
    'deuda'=>'850'
    );
$deuda[21][21039]=array(
    'nombre' =>'Hinojales',
    'habitantes' =>'273',
    'deuda'=>'202'
    );
$deuda[21][21040]=array(
    'nombre' =>'Hinojos',
    'habitantes' =>'3862',
    'deuda'=>'679'
    );
$deuda[21][21041]=array(
    'nombre' =>'Huelva',
    'habitantes' =>'146318',
    'deuda'=>'220617'
    );
$deuda[21][21042]=array(
    'nombre' =>'Isla Cristina',
    'habitantes' =>'21193',
    'deuda'=>'22254'
    );
$deuda[21][21043]=array(
    'nombre' =>'Jabugo',
    'habitantes' =>'2267',
    'deuda'=>'249'
    );
$deuda[21][21044]=array(
    'nombre' =>'Lepe',
    'habitantes' =>'27675',
    'deuda'=>'31484'
    );
$deuda[21][21045]=array(
    'nombre' =>'Linares de la Sierra',
    'habitantes' =>'272',
    'deuda'=>'122'
    );
$deuda[21][21046]=array(
    'nombre' =>'Lucena del Puerto',
    'habitantes' =>'3046',
    'deuda'=>'964'
    );
$deuda[21][21047]=array(
    'nombre' =>'Manzanilla',
    'habitantes' =>'2108',
    'deuda'=>'1986'
    );
$deuda[21][21048]=array(
    'nombre' =>'Marines, Los',
    'habitantes' =>'273',
    'deuda'=>'133'
    );
$deuda[21][21049]=array(
    'nombre' =>'Minas de Riotinto',
    'habitantes' =>'4063',
    'deuda'=>'2626'
    );
$deuda[21][21050]=array(
    'nombre' =>'Moguer',
    'habitantes' =>'21383',
    'deuda'=>'7271'
    );
$deuda[21][21051]=array(
    'nombre' =>'Nava, La',
    'habitantes' =>'289',
    'deuda'=>'1055'
    );
$deuda[21][21052]=array(
    'nombre' =>'Nerva',
    'habitantes' =>'5514',
    'deuda'=>'5382'
    );
$deuda[21][21053]=array(
    'nombre' =>'Niebla',
    'habitantes' =>'3999',
    'deuda'=>'1091'
    );
$deuda[21][21054]=array(
    'nombre' =>'Palma del Condado, La',
    'habitantes' =>'10662',
    'deuda'=>'9366'
    );
$deuda[21][21055]=array(
    'nombre' =>'Palos de la Frontera',
    'habitantes' =>'10365',
    'deuda'=>'0'
    );
$deuda[21][21056]=array(
    'nombre' =>'Paterna del Campo',
    'habitantes' =>'3554',
    'deuda'=>'0'
    );
$deuda[21][21057]=array(
    'nombre' =>'Paymogo',
    'habitantes' =>'1238',
    'deuda'=>'693'
    );
$deuda[21][21058]=array(
    'nombre' =>'Puebla de Guzmán',
    'habitantes' =>'3143',
    'deuda'=>'0'
    );
$deuda[21][21059]=array(
    'nombre' =>'Puerto Moral',
    'habitantes' =>'288',
    'deuda'=>'0'
    );
$deuda[21][21060]=array(
    'nombre' =>'Punta Umbría',
    'habitantes' =>'14996',
    'deuda'=>'21147'
    );
$deuda[21][21061]=array(
    'nombre' =>'Rociana del Condado',
    'habitantes' =>'7643',
    'deuda'=>'721'
    );
$deuda[21][21062]=array(
    'nombre' =>'Rosal de la Frontera',
    'habitantes' =>'1750',
    'deuda'=>'882'
    );
$deuda[21][21063]=array(
    'nombre' =>'San Bartolomé de la Torre',
    'habitantes' =>'3608',
    'deuda'=>'183'
    );
$deuda[21][21064]=array(
    'nombre' =>'San Juan del Puerto',
    'habitantes' =>'8832',
    'deuda'=>'2832'
    );
$deuda[21][21065]=array(
    'nombre' =>'Sanlúcar de Guadiana',
    'habitantes' =>'443',
    'deuda'=>'226'
    );
$deuda[21][21066]=array(
    'nombre' =>'San Silvestre de Guzmán',
    'habitantes' =>'634',
    'deuda'=>'0'
    );
$deuda[21][21067]=array(
    'nombre' =>'Santa Ana la Real',
    'habitantes' =>'523',
    'deuda'=>'238'
    );
$deuda[21][21068]=array(
    'nombre' =>'Santa Bárbara de Casa',
    'habitantes' =>'1113',
    'deuda'=>'0'
    );
$deuda[21][21069]=array(
    'nombre' =>'Santa Olalla del Cala',
    'habitantes' =>'2010',
    'deuda'=>'1262'
    );
$deuda[21][21070]=array(
    'nombre' =>'Trigueros',
    'habitantes' =>'7746',
    'deuda'=>'1679'
    );
$deuda[21][21071]=array(
    'nombre' =>'Valdelarco',
    'habitantes' =>'225',
    'deuda'=>'0'
    );
$deuda[21][21072]=array(
    'nombre' =>'Valverde del Camino',
    'habitantes' =>'12766',
    'deuda'=>'35778'
    );
$deuda[21][21073]=array(
    'nombre' =>'Villablanca',
    'habitantes' =>'2880',
    'deuda'=>'640'
    );
$deuda[21][21074]=array(
    'nombre' =>'Villalba del Alcor',
    'habitantes' =>'3320',
    'deuda'=>'0'
    );
$deuda[21][21075]=array(
    'nombre' =>'Villanueva de las Cruces',
    'habitantes' =>'379',
    'deuda'=>'0'
    );
$deuda[21][21076]=array(
    'nombre' =>'Villanueva de los Castillejos',
    'habitantes' =>'2747',
    'deuda'=>'228'
    );
$deuda[21][21077]=array(
    'nombre' =>'Villarrasa',
    'habitantes' =>'2162',
    'deuda'=>'236'
    );
$deuda[21][21078]=array(
    'nombre' =>'Zalamea la Real',
    'habitantes' =>'3210',
    'deuda'=>'1295'
    );
$deuda[21][21079]=array(
    'nombre' =>'Zufre',
    'habitantes' =>'886',
    'deuda'=>'0'
    );
$deuda[22][22001]=array(
    'nombre' =>'Abiego',
    'habitantes' =>'253',
    'deuda'=>'43'
    );
$deuda[22][22002]=array(
    'nombre' =>'Abizanda',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[22][22003]=array(
    'nombre' =>'Adahuesca',
    'habitantes' =>'173',
    'deuda'=>'0'
    );
$deuda[22][22004]=array(
    'nombre' =>'Agüero',
    'habitantes' =>'145',
    'deuda'=>'112'
    );
$deuda[22][22006]=array(
    'nombre' =>'Aisa',
    'habitantes' =>'358',
    'deuda'=>'127'
    );
$deuda[22][22007]=array(
    'nombre' =>'Albalate de Cinca',
    'habitantes' =>'1151',
    'deuda'=>'248'
    );
$deuda[22][22008]=array(
    'nombre' =>'Albalatillo',
    'habitantes' =>'205',
    'deuda'=>'10'
    );
$deuda[22][22009]=array(
    'nombre' =>'Albelda',
    'habitantes' =>'750',
    'deuda'=>'289'
    );
$deuda[22][22011]=array(
    'nombre' =>'Albero Alto',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[22][22012]=array(
    'nombre' =>'Albero Bajo',
    'habitantes' =>'138',
    'deuda'=>'0'
    );
$deuda[22][22013]=array(
    'nombre' =>'Alberuela de Tubo',
    'habitantes' =>'314',
    'deuda'=>'102'
    );
$deuda[22][22014]=array(
    'nombre' =>'Alcalá de Gurrea',
    'habitantes' =>'273',
    'deuda'=>'0'
    );
$deuda[22][22015]=array(
    'nombre' =>'Alcalá del Obispo',
    'habitantes' =>'342',
    'deuda'=>'0'
    );
$deuda[22][22016]=array(
    'nombre' =>'Alcampell',
    'habitantes' =>'697',
    'deuda'=>'203'
    );
$deuda[22][22017]=array(
    'nombre' =>'Alcolea de Cinca',
    'habitantes' =>'1125',
    'deuda'=>'555'
    );
$deuda[22][22018]=array(
    'nombre' =>'Alcubierre',
    'habitantes' =>'399',
    'deuda'=>'0'
    );
$deuda[22][22019]=array(
    'nombre' =>'Alerre',
    'habitantes' =>'209',
    'deuda'=>'0'
    );
$deuda[22][22020]=array(
    'nombre' =>'Alfántega',
    'habitantes' =>'128',
    'deuda'=>'66'
    );
$deuda[22][22021]=array(
    'nombre' =>'Almudévar',
    'habitantes' =>'2501',
    'deuda'=>'1242'
    );
$deuda[22][22022]=array(
    'nombre' =>'Almunia de San Juan',
    'habitantes' =>'679',
    'deuda'=>'82'
    );
$deuda[22][22023]=array(
    'nombre' =>'Almuniente',
    'habitantes' =>'522',
    'deuda'=>'560'
    );
$deuda[22][22024]=array(
    'nombre' =>'Alquézar',
    'habitantes' =>'297',
    'deuda'=>'31'
    );
$deuda[22][22025]=array(
    'nombre' =>'Altorricón',
    'habitantes' =>'1469',
    'deuda'=>'0'
    );
$deuda[22][22027]=array(
    'nombre' =>'Angüés',
    'habitantes' =>'391',
    'deuda'=>'81'
    );
$deuda[22][22028]=array(
    'nombre' =>'Ansó',
    'habitantes' =>'426',
    'deuda'=>'30'
    );
$deuda[22][22029]=array(
    'nombre' =>'Antillón',
    'habitantes' =>'159',
    'deuda'=>'25'
    );
$deuda[22][22032]=array(
    'nombre' =>'Aragüés del Puerto',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[22][22035]=array(
    'nombre' =>'Arén',
    'habitantes' =>'328',
    'deuda'=>'96'
    );
$deuda[22][22036]=array(
    'nombre' =>'Argavieso',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[22][22037]=array(
    'nombre' =>'Arguis',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[22][22039]=array(
    'nombre' =>'Ayerbe',
    'habitantes' =>'1116',
    'deuda'=>'431'
    );
$deuda[22][22040]=array(
    'nombre' =>'Azanuy-Alins',
    'habitantes' =>'173',
    'deuda'=>'61'
    );
$deuda[22][22041]=array(
    'nombre' =>'Azara',
    'habitantes' =>'189',
    'deuda'=>'0'
    );
$deuda[22][22042]=array(
    'nombre' =>'Azlor',
    'habitantes' =>'141',
    'deuda'=>'0'
    );
$deuda[22][22043]=array(
    'nombre' =>'Baélls',
    'habitantes' =>'106',
    'deuda'=>'18'
    );
$deuda[22][22044]=array(
    'nombre' =>'Bailo',
    'habitantes' =>'288',
    'deuda'=>'118'
    );
$deuda[22][22045]=array(
    'nombre' =>'Baldellou',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[22][22046]=array(
    'nombre' =>'Ballobar',
    'habitantes' =>'838',
    'deuda'=>'98'
    );
$deuda[22][22047]=array(
    'nombre' =>'Banastás',
    'habitantes' =>'305',
    'deuda'=>'0'
    );
$deuda[22][22048]=array(
    'nombre' =>'Barbastro',
    'habitantes' =>'17020',
    'deuda'=>'4303'
    );
$deuda[22][22049]=array(
    'nombre' =>'Barbués',
    'habitantes' =>'87',
    'deuda'=>'0'
    );
$deuda[22][22050]=array(
    'nombre' =>'Barbuñales',
    'habitantes' =>'99',
    'deuda'=>'7'
    );
$deuda[22][22051]=array(
    'nombre' =>'Bárcabo',
    'habitantes' =>'117',
    'deuda'=>'8'
    );
$deuda[22][22052]=array(
    'nombre' =>'Belver de Cinca',
    'habitantes' =>'1312',
    'deuda'=>'435'
    );
$deuda[22][22053]=array(
    'nombre' =>'Benabarre',
    'habitantes' =>'1127',
    'deuda'=>'1371'
    );
$deuda[22][22054]=array(
    'nombre' =>'Benasque',
    'habitantes' =>'2090',
    'deuda'=>'3510'
    );
$deuda[22][22055]=array(
    'nombre' =>'Berbegal',
    'habitantes' =>'378',
    'deuda'=>'327'
    );
$deuda[22][22057]=array(
    'nombre' =>'Bielsa',
    'habitantes' =>'488',
    'deuda'=>'106'
    );
$deuda[22][22058]=array(
    'nombre' =>'Bierge',
    'habitantes' =>'244',
    'deuda'=>'138'
    );
$deuda[22][22059]=array(
    'nombre' =>'Biescas',
    'habitantes' =>'1487',
    'deuda'=>'0'
    );
$deuda[22][22060]=array(
    'nombre' =>'Binaced',
    'habitantes' =>'1507',
    'deuda'=>'0'
    );
$deuda[22][22061]=array(
    'nombre' =>'Binéfar',
    'habitantes' =>'9439',
    'deuda'=>'1458'
    );
$deuda[22][22062]=array(
    'nombre' =>'Bisaurri',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[22][22063]=array(
    'nombre' =>'Biscarrués',
    'habitantes' =>'202',
    'deuda'=>'54'
    );
$deuda[22][22064]=array(
    'nombre' =>'Blecua y Torres',
    'habitantes' =>'200',
    'deuda'=>'0'
    );
$deuda[22][22066]=array(
    'nombre' =>'Boltaña',
    'habitantes' =>'981',
    'deuda'=>'507'
    );
$deuda[22][22067]=array(
    'nombre' =>'Bonansa',
    'habitantes' =>'81',
    'deuda'=>'0'
    );
$deuda[22][22068]=array(
    'nombre' =>'Borau',
    'habitantes' =>'95',
    'deuda'=>'0'
    );
$deuda[22][22069]=array(
    'nombre' =>'Broto',
    'habitantes' =>'532',
    'deuda'=>'412'
    );
$deuda[22][22072]=array(
    'nombre' =>'Caldearenas',
    'habitantes' =>'210',
    'deuda'=>'0'
    );
$deuda[22][22074]=array(
    'nombre' =>'Campo',
    'habitantes' =>'437',
    'deuda'=>'625'
    );
$deuda[22][22075]=array(
    'nombre' =>'Camporrélls',
    'habitantes' =>'138',
    'deuda'=>'126'
    );
$deuda[22][22076]=array(
    'nombre' =>'Canal de Berdún',
    'habitantes' =>'367',
    'deuda'=>'0'
    );
$deuda[22][22077]=array(
    'nombre' =>'Candasnos',
    'habitantes' =>'330',
    'deuda'=>'0'
    );
$deuda[22][22078]=array(
    'nombre' =>'Canfranc',
    'habitantes' =>'560',
    'deuda'=>'316'
    );
$deuda[22][22079]=array(
    'nombre' =>'Capdesaso',
    'habitantes' =>'172',
    'deuda'=>'134'
    );
$deuda[22][22080]=array(
    'nombre' =>'Capella',
    'habitantes' =>'361',
    'deuda'=>'24'
    );
$deuda[22][22081]=array(
    'nombre' =>'Casbas de Huesca',
    'habitantes' =>'291',
    'deuda'=>'77'
    );
$deuda[22][22082]=array(
    'nombre' =>'Castejón del Puente',
    'habitantes' =>'340',
    'deuda'=>'89'
    );
$deuda[22][22083]=array(
    'nombre' =>'Castejón de Monegros',
    'habitantes' =>'568',
    'deuda'=>'589'
    );
$deuda[22][22084]=array(
    'nombre' =>'Castejón de Sos',
    'habitantes' =>'740',
    'deuda'=>'51'
    );
$deuda[22][22085]=array(
    'nombre' =>'Castelflorite',
    'habitantes' =>'120',
    'deuda'=>'8'
    );
$deuda[22][22086]=array(
    'nombre' =>'Castiello de Jaca',
    'habitantes' =>'251',
    'deuda'=>'0'
    );
$deuda[22][22087]=array(
    'nombre' =>'Castigaleu',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[22][22088]=array(
    'nombre' =>'Castillazuelo',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[22][22089]=array(
    'nombre' =>'Castillonroy',
    'habitantes' =>'343',
    'deuda'=>'67'
    );
$deuda[22][22090]=array(
    'nombre' =>'Colungo',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[22][22094]=array(
    'nombre' =>'Chalamera',
    'habitantes' =>'111',
    'deuda'=>'55'
    );
$deuda[22][22095]=array(
    'nombre' =>'Chía',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[22][22096]=array(
    'nombre' =>'Chimillas',
    'habitantes' =>'358',
    'deuda'=>'0'
    );
$deuda[22][22099]=array(
    'nombre' =>'Esplús',
    'habitantes' =>'619',
    'deuda'=>'191'
    );
$deuda[22][22102]=array(
    'nombre' =>'Estada',
    'habitantes' =>'210',
    'deuda'=>'0'
    );
$deuda[22][22103]=array(
    'nombre' =>'Estadilla',
    'habitantes' =>'819',
    'deuda'=>'1624'
    );
$deuda[22][22105]=array(
    'nombre' =>'Estopiñán del Castillo',
    'habitantes' =>'147',
    'deuda'=>'30'
    );
$deuda[22][22106]=array(
    'nombre' =>'Fago',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[22][22107]=array(
    'nombre' =>'Fanlo',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[22][22109]=array(
    'nombre' =>'Fiscal',
    'habitantes' =>'361',
    'deuda'=>'108'
    );
$deuda[22][22110]=array(
    'nombre' =>'Fonz',
    'habitantes' =>'944',
    'deuda'=>'349'
    );
$deuda[22][22111]=array(
    'nombre' =>'Foradada del Toscar',
    'habitantes' =>'187',
    'deuda'=>'0'
    );
$deuda[22][22112]=array(
    'nombre' =>'Fraga',
    'habitantes' =>'14921',
    'deuda'=>'3959'
    );
$deuda[22][22113]=array(
    'nombre' =>'Fueva, La',
    'habitantes' =>'622',
    'deuda'=>'292'
    );
$deuda[22][22114]=array(
    'nombre' =>'Gistaín',
    'habitantes' =>'138',
    'deuda'=>'76'
    );
$deuda[22][22115]=array(
    'nombre' =>'Grado, El',
    'habitantes' =>'433',
    'deuda'=>'265'
    );
$deuda[22][22116]=array(
    'nombre' =>'Grañén',
    'habitantes' =>'1859',
    'deuda'=>'1136'
    );
$deuda[22][22117]=array(
    'nombre' =>'Graus',
    'habitantes' =>'3371',
    'deuda'=>'2081'
    );
$deuda[22][22119]=array(
    'nombre' =>'Gurrea de Gállego',
    'habitantes' =>'1545',
    'deuda'=>'143'
    );
$deuda[22][22122]=array(
    'nombre' =>'Hoz de Jaca',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[22][22124]=array(
    'nombre' =>'Huerto',
    'habitantes' =>'238',
    'deuda'=>'5'
    );
$deuda[22][22125]=array(
    'nombre' =>'Huesca',
    'habitantes' =>'52239',
    'deuda'=>'22395'
    );
$deuda[22][22126]=array(
    'nombre' =>'Ibieca',
    'habitantes' =>'110',
    'deuda'=>'0'
    );
$deuda[22][22127]=array(
    'nombre' =>'Igriés',
    'habitantes' =>'692',
    'deuda'=>'0'
    );
$deuda[22][22128]=array(
    'nombre' =>'Ilche',
    'habitantes' =>'208',
    'deuda'=>'0'
    );
$deuda[22][22129]=array(
    'nombre' =>'Isábena',
    'habitantes' =>'276',
    'deuda'=>'84'
    );
$deuda[22][22130]=array(
    'nombre' =>'Jaca',
    'habitantes' =>'13088',
    'deuda'=>'5845'
    );
$deuda[22][22131]=array(
    'nombre' =>'Jasa',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[22][22133]=array(
    'nombre' =>'Labuerda',
    'habitantes' =>'167',
    'deuda'=>'190'
    );
$deuda[22][22135]=array(
    'nombre' =>'Laluenga',
    'habitantes' =>'213',
    'deuda'=>'0'
    );
$deuda[22][22136]=array(
    'nombre' =>'Lalueza',
    'habitantes' =>'997',
    'deuda'=>'244'
    );
$deuda[22][22137]=array(
    'nombre' =>'Lanaja',
    'habitantes' =>'1268',
    'deuda'=>'0'
    );
$deuda[22][22139]=array(
    'nombre' =>'Laperdiguera',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[22][22141]=array(
    'nombre' =>'Lascellas-Ponzano',
    'habitantes' =>'138',
    'deuda'=>'0'
    );
$deuda[22][22142]=array(
    'nombre' =>'Lascuarre',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[22][22143]=array(
    'nombre' =>'Laspaúles',
    'habitantes' =>'281',
    'deuda'=>'36'
    );
$deuda[22][22144]=array(
    'nombre' =>'Laspuña',
    'habitantes' =>'290',
    'deuda'=>'98'
    );
$deuda[22][22149]=array(
    'nombre' =>'Loarre',
    'habitantes' =>'335',
    'deuda'=>'60'
    );
$deuda[22][22150]=array(
    'nombre' =>'Loporzano',
    'habitantes' =>'532',
    'deuda'=>'0'
    );
$deuda[22][22151]=array(
    'nombre' =>'Loscorrales',
    'habitantes' =>'106',
    'deuda'=>'14'
    );
$deuda[22][22155]=array(
    'nombre' =>'Monesma y Cajigar',
    'habitantes' =>'87',
    'deuda'=>'0'
    );
$deuda[22][22156]=array(
    'nombre' =>'Monflorite-Lascasas',
    'habitantes' =>'313',
    'deuda'=>'42'
    );
$deuda[22][22157]=array(
    'nombre' =>'Montanuy',
    'habitantes' =>'221',
    'deuda'=>'0'
    );
$deuda[22][22158]=array(
    'nombre' =>'Monzón',
    'habitantes' =>'17260',
    'deuda'=>'9585'
    );
$deuda[22][22160]=array(
    'nombre' =>'Naval',
    'habitantes' =>'259',
    'deuda'=>'0'
    );
$deuda[22][22162]=array(
    'nombre' =>'Novales',
    'habitantes' =>'183',
    'deuda'=>'0'
    );
$deuda[22][22163]=array(
    'nombre' =>'Nueno',
    'habitantes' =>'552',
    'deuda'=>'0'
    );
$deuda[22][22164]=array(
    'nombre' =>'Olvena',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[22][22165]=array(
    'nombre' =>'Ontiñena',
    'habitantes' =>'569',
    'deuda'=>'0'
    );
$deuda[22][22167]=array(
    'nombre' =>'Osso de Cinca',
    'habitantes' =>'746',
    'deuda'=>'75'
    );
$deuda[22][22168]=array(
    'nombre' =>'Palo',
    'habitantes' =>'24',
    'deuda'=>'121'
    );
$deuda[22][22170]=array(
    'nombre' =>'Panticosa',
    'habitantes' =>'762',
    'deuda'=>'1516'
    );
$deuda[22][22172]=array(
    'nombre' =>'Peñalba',
    'habitantes' =>'695',
    'deuda'=>'0'
    );
$deuda[22][22173]=array(
    'nombre' =>'Peñas de Riglos, Las',
    'habitantes' =>'264',
    'deuda'=>'0'
    );
$deuda[22][22174]=array(
    'nombre' =>'Peralta de Alcofea',
    'habitantes' =>'602',
    'deuda'=>'534'
    );
$deuda[22][22175]=array(
    'nombre' =>'Peralta de Calasanz',
    'habitantes' =>'233',
    'deuda'=>'49'
    );
$deuda[22][22176]=array(
    'nombre' =>'Peraltilla',
    'habitantes' =>'201',
    'deuda'=>'0'
    );
$deuda[22][22177]=array(
    'nombre' =>'Perarrúa',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[22][22178]=array(
    'nombre' =>'Pertusa',
    'habitantes' =>'124',
    'deuda'=>'178'
    );
$deuda[22][22181]=array(
    'nombre' =>'Piracés',
    'habitantes' =>'107',
    'deuda'=>'0'
    );
$deuda[22][22182]=array(
    'nombre' =>'Plan',
    'habitantes' =>'303',
    'deuda'=>'83'
    );
$deuda[22][22184]=array(
    'nombre' =>'Poleñino',
    'habitantes' =>'217',
    'deuda'=>'104'
    );
$deuda[22][22186]=array(
    'nombre' =>'Pozán de Vero',
    'habitantes' =>'221',
    'deuda'=>'0'
    );
$deuda[22][22187]=array(
    'nombre' =>'Puebla de Castro, La',
    'habitantes' =>'383',
    'deuda'=>'151'
    );
$deuda[22][22188]=array(
    'nombre' =>'Puente de Montañana',
    'habitantes' =>'107',
    'deuda'=>'85'
    );
$deuda[22][22189]=array(
    'nombre' =>'Puértolas',
    'habitantes' =>'207',
    'deuda'=>'274'
    );
$deuda[22][22190]=array(
    'nombre' =>'Pueyo de Araguás, El',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[22][22193]=array(
    'nombre' =>'Pueyo de Santa Cruz',
    'habitantes' =>'328',
    'deuda'=>'15'
    );
$deuda[22][22195]=array(
    'nombre' =>'Quicena',
    'habitantes' =>'286',
    'deuda'=>'61'
    );
$deuda[22][22197]=array(
    'nombre' =>'Robres',
    'habitantes' =>'586',
    'deuda'=>'0'
    );
$deuda[22][22199]=array(
    'nombre' =>'Sabiñánigo',
    'habitantes' =>'9598',
    'deuda'=>'3752'
    );
$deuda[22][22200]=array(
    'nombre' =>'Sahún',
    'habitantes' =>'308',
    'deuda'=>'108'
    );
$deuda[22][22201]=array(
    'nombre' =>'Salas Altas',
    'habitantes' =>'313',
    'deuda'=>'80'
    );
$deuda[22][22202]=array(
    'nombre' =>'Salas Bajas',
    'habitantes' =>'168',
    'deuda'=>'0'
    );
$deuda[22][22203]=array(
    'nombre' =>'Salillas',
    'habitantes' =>'101',
    'deuda'=>'0'
    );
$deuda[22][22204]=array(
    'nombre' =>'Sallent de Gállego',
    'habitantes' =>'1441',
    'deuda'=>'0'
    );
$deuda[22][22205]=array(
    'nombre' =>'San Esteban de Litera',
    'habitantes' =>'498',
    'deuda'=>'0'
    );
$deuda[22][22206]=array(
    'nombre' =>'Sangarrén',
    'habitantes' =>'235',
    'deuda'=>'38'
    );
$deuda[22][22207]=array(
    'nombre' =>'San Juan de Plan',
    'habitantes' =>'148',
    'deuda'=>'194'
    );
$deuda[22][22208]=array(
    'nombre' =>'Santa Cilia',
    'habitantes' =>'207',
    'deuda'=>'70'
    );
$deuda[22][22209]=array(
    'nombre' =>'Santa Cruz de la Serós',
    'habitantes' =>'186',
    'deuda'=>'0'
    );
$deuda[22][22212]=array(
    'nombre' =>'Santaliestra y San Quílez',
    'habitantes' =>'104',
    'deuda'=>'439'
    );
$deuda[22][22213]=array(
    'nombre' =>'Sariñena',
    'habitantes' =>'4223',
    'deuda'=>'3423'
    );
$deuda[22][22214]=array(
    'nombre' =>'Secastilla',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[22][22215]=array(
    'nombre' =>'Seira',
    'habitantes' =>'147',
    'deuda'=>'0'
    );
$deuda[22][22217]=array(
    'nombre' =>'Sena',
    'habitantes' =>'515',
    'deuda'=>'0'
    );
$deuda[22][22218]=array(
    'nombre' =>'Senés de Alcubierre',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[22][22220]=array(
    'nombre' =>'Sesa',
    'habitantes' =>'190',
    'deuda'=>'0'
    );
$deuda[22][22221]=array(
    'nombre' =>'Sesué',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[22][22222]=array(
    'nombre' =>'Siétamo',
    'habitantes' =>'672',
    'deuda'=>'313'
    );
$deuda[22][22223]=array(
    'nombre' =>'Sopeira',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[22][22225]=array(
    'nombre' =>'Tamarite de Litera',
    'habitantes' =>'3538',
    'deuda'=>'89'
    );
$deuda[22][22226]=array(
    'nombre' =>'Tardienta',
    'habitantes' =>'985',
    'deuda'=>'547'
    );
$deuda[22][22227]=array(
    'nombre' =>'Tella-Sin',
    'habitantes' =>'249',
    'deuda'=>'291'
    );
$deuda[22][22228]=array(
    'nombre' =>'Tierz',
    'habitantes' =>'742',
    'deuda'=>'189'
    );
$deuda[22][22229]=array(
    'nombre' =>'Tolva',
    'habitantes' =>'137',
    'deuda'=>'48'
    );
$deuda[22][22230]=array(
    'nombre' =>'Torla-Ordesa',
    'habitantes' =>'306',
    'deuda'=>'0'
    );
$deuda[22][22232]=array(
    'nombre' =>'Torralba de Aragón',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[22][22233]=array(
    'nombre' =>'Torre la Ribera',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[22][22234]=array(
    'nombre' =>'Torrente de Cinca',
    'habitantes' =>'1187',
    'deuda'=>'10'
    );
$deuda[22][22235]=array(
    'nombre' =>'Torres de Alcanadre',
    'habitantes' =>'107',
    'deuda'=>'26'
    );
$deuda[22][22236]=array(
    'nombre' =>'Torres de Barbués',
    'habitantes' =>'283',
    'deuda'=>'50'
    );
$deuda[22][22239]=array(
    'nombre' =>'Tramaced',
    'habitantes' =>'110',
    'deuda'=>'32'
    );
$deuda[22][22242]=array(
    'nombre' =>'Valfarta',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[22][22243]=array(
    'nombre' =>'Valle de Bardají',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[22][22244]=array(
    'nombre' =>'Valle de Lierp',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[22][22245]=array(
    'nombre' =>'Velilla de Cinca',
    'habitantes' =>'442',
    'deuda'=>'62'
    );
$deuda[22][22246]=array(
    'nombre' =>'Beranuy',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[22][22247]=array(
    'nombre' =>'Viacamp y Litera',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[22][22248]=array(
    'nombre' =>'Vicién',
    'habitantes' =>'126',
    'deuda'=>'40'
    );
$deuda[22][22249]=array(
    'nombre' =>'Villanova',
    'habitantes' =>'157',
    'deuda'=>'0'
    );
$deuda[22][22250]=array(
    'nombre' =>'Villanúa',
    'habitantes' =>'435',
    'deuda'=>'88'
    );
$deuda[22][22251]=array(
    'nombre' =>'Villanueva de Sigena',
    'habitantes' =>'442',
    'deuda'=>'20'
    );
$deuda[22][22252]=array(
    'nombre' =>'Yebra de Basa',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[22][22253]=array(
    'nombre' =>'Yésero',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[22][22254]=array(
    'nombre' =>'Zaidín',
    'habitantes' =>'1852',
    'deuda'=>'266'
    );
$deuda[22][22901]=array(
    'nombre' =>'Valle de Hecho',
    'habitantes' =>'880',
    'deuda'=>'338'
    );
$deuda[22][22902]=array(
    'nombre' =>'Puente la Reina de Jaca',
    'habitantes' =>'261',
    'deuda'=>'0'
    );
$deuda[22][22903]=array(
    'nombre' =>'San Miguel del Cinca',
    'habitantes' =>'857',
    'deuda'=>'294'
    );
$deuda[22][22904]=array(
    'nombre' =>'Sotonera, La',
    'habitantes' =>'990',
    'deuda'=>'19'
    );
$deuda[22][22905]=array(
    'nombre' =>'Lupiñén-Ortilla',
    'habitantes' =>'364',
    'deuda'=>'0'
    );
$deuda[22][22906]=array(
    'nombre' =>'Santa María de Dulcis',
    'habitantes' =>'221',
    'deuda'=>'10'
    );
$deuda[22][22907]=array(
    'nombre' =>'Aínsa-Sobrarbe',
    'habitantes' =>'2220',
    'deuda'=>'1077'
    );
$deuda[22][22908]=array(
    'nombre' =>'Hoz y Costean',
    'habitantes' =>'230',
    'deuda'=>'87'
    );
$deuda[22][22909]=array(
    'nombre' =>'Vencillón',
    'habitantes' =>'411',
    'deuda'=>'0'
    );
$deuda[23][23001]=array(
    'nombre' =>'Albanchez de Mágina',
    'habitantes' =>'1186',
    'deuda'=>'963'
    );
$deuda[23][23002]=array(
    'nombre' =>'Alcalá la Real',
    'habitantes' =>'22036',
    'deuda'=>'8544'
    );
$deuda[23][23003]=array(
    'nombre' =>'Alcaudete',
    'habitantes' =>'10779',
    'deuda'=>'2564'
    );
$deuda[23][23004]=array(
    'nombre' =>'Aldeaquemada',
    'habitantes' =>'531',
    'deuda'=>'443'
    );
$deuda[23][23005]=array(
    'nombre' =>'Andújar',
    'habitantes' =>'38246',
    'deuda'=>'31447'
    );
$deuda[23][23006]=array(
    'nombre' =>'Arjona',
    'habitantes' =>'5692',
    'deuda'=>'601'
    );
$deuda[23][23007]=array(
    'nombre' =>'Arjonilla',
    'habitantes' =>'3729',
    'deuda'=>'423'
    );
$deuda[23][23008]=array(
    'nombre' =>'Arquillos',
    'habitantes' =>'1872',
    'deuda'=>'764'
    );
$deuda[23][23009]=array(
    'nombre' =>'Baeza',
    'habitantes' =>'16163',
    'deuda'=>'11033'
    );
$deuda[23][23010]=array(
    'nombre' =>'Bailén',
    'habitantes' =>'18243',
    'deuda'=>'7179'
    );
$deuda[23][23011]=array(
    'nombre' =>'Baños de la Encina',
    'habitantes' =>'2672',
    'deuda'=>'0'
    );
$deuda[23][23012]=array(
    'nombre' =>'Beas de Segura',
    'habitantes' =>'5439',
    'deuda'=>'2180'
    );
$deuda[23][23014]=array(
    'nombre' =>'Begíjar',
    'habitantes' =>'3133',
    'deuda'=>'0'
    );
$deuda[23][23015]=array(
    'nombre' =>'Bélmez de la Moraleda',
    'habitantes' =>'1693',
    'deuda'=>'0'
    );
$deuda[23][23016]=array(
    'nombre' =>'Benatae',
    'habitantes' =>'487',
    'deuda'=>'214'
    );
$deuda[23][23017]=array(
    'nombre' =>'Cabra del Santo Cristo',
    'habitantes' =>'1937',
    'deuda'=>'0'
    );
$deuda[23][23018]=array(
    'nombre' =>'Cambil',
    'habitantes' =>'2857',
    'deuda'=>'2556'
    );
$deuda[23][23019]=array(
    'nombre' =>'Campillo de Arenas',
    'habitantes' =>'1941',
    'deuda'=>'4125'
    );
$deuda[23][23020]=array(
    'nombre' =>'Canena',
    'habitantes' =>'1959',
    'deuda'=>'0'
    );
$deuda[23][23021]=array(
    'nombre' =>'Carboneros',
    'habitantes' =>'641',
    'deuda'=>'249'
    );
$deuda[23][23024]=array(
    'nombre' =>'Carolina, La',
    'habitantes' =>'15673',
    'deuda'=>'11043'
    );
$deuda[23][23025]=array(
    'nombre' =>'Castellar',
    'habitantes' =>'3440',
    'deuda'=>'1233'
    );
$deuda[23][23026]=array(
    'nombre' =>'Castillo de Locubín',
    'habitantes' =>'4293',
    'deuda'=>'1395'
    );
$deuda[23][23027]=array(
    'nombre' =>'Cazalilla',
    'habitantes' =>'872',
    'deuda'=>'69'
    );
$deuda[23][23028]=array(
    'nombre' =>'Cazorla',
    'habitantes' =>'7692',
    'deuda'=>'6215'
    );
$deuda[23][23029]=array(
    'nombre' =>'Chiclana de Segura',
    'habitantes' =>'1023',
    'deuda'=>'604'
    );
$deuda[23][23030]=array(
    'nombre' =>'Chilluévar',
    'habitantes' =>'1509',
    'deuda'=>'0'
    );
$deuda[23][23031]=array(
    'nombre' =>'Escañuela',
    'habitantes' =>'953',
    'deuda'=>'401'
    );
$deuda[23][23032]=array(
    'nombre' =>'Espelúy',
    'habitantes' =>'699',
    'deuda'=>'373'
    );
$deuda[23][23033]=array(
    'nombre' =>'Frailes',
    'habitantes' =>'1651',
    'deuda'=>'692'
    );
$deuda[23][23034]=array(
    'nombre' =>'Fuensanta de Martos',
    'habitantes' =>'3160',
    'deuda'=>'198'
    );
$deuda[23][23035]=array(
    'nombre' =>'Fuerte del Rey',
    'habitantes' =>'1409',
    'deuda'=>'0'
    );
$deuda[23][23037]=array(
    'nombre' =>'Génave',
    'habitantes' =>'618',
    'deuda'=>'174'
    );
$deuda[23][23038]=array(
    'nombre' =>'Guardia de Jaén, La',
    'habitantes' =>'4832',
    'deuda'=>'1505'
    );
$deuda[23][23039]=array(
    'nombre' =>'Guarromán',
    'habitantes' =>'2876',
    'deuda'=>'592'
    );
$deuda[23][23040]=array(
    'nombre' =>'Lahiguera',
    'habitantes' =>'1783',
    'deuda'=>'461'
    );
$deuda[23][23041]=array(
    'nombre' =>'Higuera de Calatrava',
    'habitantes' =>'649',
    'deuda'=>'235'
    );
$deuda[23][23042]=array(
    'nombre' =>'Hinojares',
    'habitantes' =>'355',
    'deuda'=>'196'
    );
$deuda[23][23043]=array(
    'nombre' =>'Hornos',
    'habitantes' =>'657',
    'deuda'=>'304'
    );
$deuda[23][23044]=array(
    'nombre' =>'Huelma',
    'habitantes' =>'6089',
    'deuda'=>'101'
    );
$deuda[23][23045]=array(
    'nombre' =>'Huesa',
    'habitantes' =>'2584',
    'deuda'=>'1412'
    );
$deuda[23][23046]=array(
    'nombre' =>'Ibros',
    'habitantes' =>'2973',
    'deuda'=>'80'
    );
$deuda[23][23047]=array(
    'nombre' =>'Iruela, La',
    'habitantes' =>'1999',
    'deuda'=>'1175'
    );
$deuda[23][23048]=array(
    'nombre' =>'Iznatoraf',
    'habitantes' =>'1016',
    'deuda'=>'471'
    );
$deuda[23][23049]=array(
    'nombre' =>'Jabalquinto',
    'habitantes' =>'2201',
    'deuda'=>'465'
    );
$deuda[23][23050]=array(
    'nombre' =>'Jaén',
    'habitantes' =>'115395',
    'deuda'=>'403094'
    );
$deuda[23][23051]=array(
    'nombre' =>'Jamilena',
    'habitantes' =>'3404',
    'deuda'=>'6010'
    );
$deuda[23][23052]=array(
    'nombre' =>'Jimena',
    'habitantes' =>'1344',
    'deuda'=>'1263'
    );
$deuda[23][23053]=array(
    'nombre' =>'Jódar',
    'habitantes' =>'12022',
    'deuda'=>'5451'
    );
$deuda[23][23054]=array(
    'nombre' =>'Larva',
    'habitantes' =>'487',
    'deuda'=>'14'
    );
$deuda[23][23055]=array(
    'nombre' =>'Linares',
    'habitantes' =>'59737',
    'deuda'=>'28936'
    );
$deuda[23][23056]=array(
    'nombre' =>'Lopera',
    'habitantes' =>'3779',
    'deuda'=>'373'
    );
$deuda[23][23057]=array(
    'nombre' =>'Lupión',
    'habitantes' =>'910',
    'deuda'=>'0'
    );
$deuda[23][23058]=array(
    'nombre' =>'Mancha Real',
    'habitantes' =>'11212',
    'deuda'=>'221'
    );
$deuda[23][23059]=array(
    'nombre' =>'Marmolejo',
    'habitantes' =>'7089',
    'deuda'=>'4431'
    );
$deuda[23][23060]=array(
    'nombre' =>'Martos',
    'habitantes' =>'24398',
    'deuda'=>'6025'
    );
$deuda[23][23061]=array(
    'nombre' =>'Mengíbar',
    'habitantes' =>'9935',
    'deuda'=>'2366'
    );
$deuda[23][23062]=array(
    'nombre' =>'Montizón',
    'habitantes' =>'1815',
    'deuda'=>'611'
    );
$deuda[23][23063]=array(
    'nombre' =>'Navas de San Juan',
    'habitantes' =>'4712',
    'deuda'=>'914'
    );
$deuda[23][23064]=array(
    'nombre' =>'Noalejo',
    'habitantes' =>'2000',
    'deuda'=>'2005'
    );
$deuda[23][23065]=array(
    'nombre' =>'Orcera',
    'habitantes' =>'1919',
    'deuda'=>'4592'
    );
$deuda[23][23066]=array(
    'nombre' =>'Peal de Becerro',
    'habitantes' =>'5410',
    'deuda'=>'1181'
    );
$deuda[23][23067]=array(
    'nombre' =>'Pegalajar',
    'habitantes' =>'3032',
    'deuda'=>'2862'
    );
$deuda[23][23069]=array(
    'nombre' =>'Porcuna',
    'habitantes' =>'6567',
    'deuda'=>'366'
    );
$deuda[23][23070]=array(
    'nombre' =>'Pozo Alcón',
    'habitantes' =>'4892',
    'deuda'=>'1422'
    );
$deuda[23][23071]=array(
    'nombre' =>'Puente de Génave',
    'habitantes' =>'2221',
    'deuda'=>'3843'
    );
$deuda[23][23072]=array(
    'nombre' =>'Puerta de Segura, La',
    'habitantes' =>'2503',
    'deuda'=>'4683'
    );
$deuda[23][23073]=array(
    'nombre' =>'Quesada',
    'habitantes' =>'5585',
    'deuda'=>'2494'
    );
$deuda[23][23074]=array(
    'nombre' =>'Rus',
    'habitantes' =>'3728',
    'deuda'=>'65'
    );
$deuda[23][23075]=array(
    'nombre' =>'Sabiote',
    'habitantes' =>'4073',
    'deuda'=>'1571'
    );
$deuda[23][23076]=array(
    'nombre' =>'Santa Elena',
    'habitantes' =>'986',
    'deuda'=>'852'
    );
$deuda[23][23077]=array(
    'nombre' =>'Santiago de Calatrava',
    'habitantes' =>'797',
    'deuda'=>'0'
    );
$deuda[23][23079]=array(
    'nombre' =>'Santisteban del Puerto',
    'habitantes' =>'4666',
    'deuda'=>'2228'
    );
$deuda[23][23080]=array(
    'nombre' =>'Santo Tomé',
    'habitantes' =>'2303',
    'deuda'=>'122'
    );
$deuda[23][23081]=array(
    'nombre' =>'Segura de la Sierra',
    'habitantes' =>'1916',
    'deuda'=>'3682'
    );
$deuda[23][23082]=array(
    'nombre' =>'Siles',
    'habitantes' =>'2345',
    'deuda'=>'1543'
    );
$deuda[23][23084]=array(
    'nombre' =>'Sorihuela del Guadalimar',
    'habitantes' =>'1248',
    'deuda'=>'641'
    );
$deuda[23][23085]=array(
    'nombre' =>'Torreblascopedro',
    'habitantes' =>'2742',
    'deuda'=>'297'
    );
$deuda[23][23086]=array(
    'nombre' =>'Torredelcampo',
    'habitantes' =>'14605',
    'deuda'=>'4667'
    );
$deuda[23][23087]=array(
    'nombre' =>'Torredonjimeno',
    'habitantes' =>'14011',
    'deuda'=>'3386'
    );
$deuda[23][23088]=array(
    'nombre' =>'Torreperogil',
    'habitantes' =>'7548',
    'deuda'=>'6265'
    );
$deuda[23][23090]=array(
    'nombre' =>'Torres',
    'habitantes' =>'1516',
    'deuda'=>'456'
    );
$deuda[23][23091]=array(
    'nombre' =>'Torres de Albánchez',
    'habitantes' =>'877',
    'deuda'=>'2079'
    );
$deuda[23][23092]=array(
    'nombre' =>'Úbeda',
    'habitantes' =>'34930',
    'deuda'=>'18112'
    );
$deuda[23][23093]=array(
    'nombre' =>'Valdepeñas de Jaén',
    'habitantes' =>'3926',
    'deuda'=>'1547'
    );
$deuda[23][23094]=array(
    'nombre' =>'Vilches',
    'habitantes' =>'4689',
    'deuda'=>'3759'
    );
$deuda[23][23095]=array(
    'nombre' =>'Villacarrillo',
    'habitantes' =>'11040',
    'deuda'=>'8535'
    );
$deuda[23][23096]=array(
    'nombre' =>'Villanueva de la Reina',
    'habitantes' =>'3245',
    'deuda'=>'406'
    );
$deuda[23][23097]=array(
    'nombre' =>'Villanueva del Arzobispo',
    'habitantes' =>'8484',
    'deuda'=>'6507'
    );
$deuda[23][23098]=array(
    'nombre' =>'Villardompardo',
    'habitantes' =>'1029',
    'deuda'=>'125'
    );
$deuda[23][23099]=array(
    'nombre' =>'Villares, Los',
    'habitantes' =>'5999',
    'deuda'=>'9534'
    );
$deuda[23][23101]=array(
    'nombre' =>'Villarrodrigo',
    'habitantes' =>'438',
    'deuda'=>'31'
    );
$deuda[23][23901]=array(
    'nombre' =>'Cárcheles',
    'habitantes' =>'1425',
    'deuda'=>'909'
    );
$deuda[23][23902]=array(
    'nombre' =>'Bedmar y Garcíez',
    'habitantes' =>'2871',
    'deuda'=>'2012'
    );
$deuda[23][23903]=array(
    'nombre' =>'Villatorres',
    'habitantes' =>'4412',
    'deuda'=>'1293'
    );
$deuda[23][23904]=array(
    'nombre' =>'Santiago-Pontones',
    'habitantes' =>'3338',
    'deuda'=>'1335'
    );
$deuda[23][23905]=array(
    'nombre' =>'Arroyo del Ojanco',
    'habitantes' =>'2373',
    'deuda'=>'491'
    );
$deuda[24][24001]=array(
    'nombre' =>'Acebedo',
    'habitantes' =>'225',
    'deuda'=>'0'
    );
$deuda[24][24002]=array(
    'nombre' =>'Algadefe',
    'habitantes' =>'284',
    'deuda'=>'0'
    );
$deuda[24][24003]=array(
    'nombre' =>'Alija del Infantado',
    'habitantes' =>'715',
    'deuda'=>'0'
    );
$deuda[24][24004]=array(
    'nombre' =>'Almanza',
    'habitantes' =>'596',
    'deuda'=>'14'
    );
$deuda[24][24005]=array(
    'nombre' =>'Antigua, La',
    'habitantes' =>'418',
    'deuda'=>'0'
    );
$deuda[24][24006]=array(
    'nombre' =>'Ardón',
    'habitantes' =>'596',
    'deuda'=>'0'
    );
$deuda[24][24007]=array(
    'nombre' =>'Arganza',
    'habitantes' =>'822',
    'deuda'=>'0'
    );
$deuda[24][24008]=array(
    'nombre' =>'Astorga',
    'habitantes' =>'11387',
    'deuda'=>'2427'
    );
$deuda[24][24009]=array(
    'nombre' =>'Balboa',
    'habitantes' =>'321',
    'deuda'=>'0'
    );
$deuda[24][24010]=array(
    'nombre' =>'Bañeza, La',
    'habitantes' =>'10443',
    'deuda'=>'4092'
    );
$deuda[24][24011]=array(
    'nombre' =>'Barjas',
    'habitantes' =>'201',
    'deuda'=>'17'
    );
$deuda[24][24012]=array(
    'nombre' =>'Barrios de Luna, Los',
    'habitantes' =>'331',
    'deuda'=>'0'
    );
$deuda[24][24014]=array(
    'nombre' =>'Bembibre',
    'habitantes' =>'9568',
    'deuda'=>'1573'
    );
$deuda[24][24015]=array(
    'nombre' =>'Benavides',
    'habitantes' =>'2616',
    'deuda'=>'0'
    );
$deuda[24][24016]=array(
    'nombre' =>'Benuza',
    'habitantes' =>'507',
    'deuda'=>'82'
    );
$deuda[24][24017]=array(
    'nombre' =>'Bercianos del Páramo',
    'habitantes' =>'618',
    'deuda'=>'0'
    );
$deuda[24][24018]=array(
    'nombre' =>'Bercianos del Real Camino',
    'habitantes' =>'196',
    'deuda'=>'0'
    );
$deuda[24][24019]=array(
    'nombre' =>'Berlanga del Bierzo',
    'habitantes' =>'392',
    'deuda'=>'0'
    );
$deuda[24][24020]=array(
    'nombre' =>'Boca de Huérgano',
    'habitantes' =>'487',
    'deuda'=>'71'
    );
$deuda[24][24021]=array(
    'nombre' =>'Boñar',
    'habitantes' =>'1947',
    'deuda'=>'0'
    );
$deuda[24][24022]=array(
    'nombre' =>'Borrenes',
    'habitantes' =>'368',
    'deuda'=>'0'
    );
$deuda[24][24023]=array(
    'nombre' =>'Brazuelo',
    'habitantes' =>'307',
    'deuda'=>'11'
    );
$deuda[24][24024]=array(
    'nombre' =>'Burgo Ranero, El',
    'habitantes' =>'767',
    'deuda'=>'0'
    );
$deuda[24][24025]=array(
    'nombre' =>'Burón',
    'habitantes' =>'325',
    'deuda'=>'0'
    );
$deuda[24][24026]=array(
    'nombre' =>'Bustillo del Páramo',
    'habitantes' =>'1311',
    'deuda'=>'117'
    );
$deuda[24][24027]=array(
    'nombre' =>'Cabañas Raras',
    'habitantes' =>'1337',
    'deuda'=>'0'
    );
$deuda[24][24028]=array(
    'nombre' =>'Cabreros del Río',
    'habitantes' =>'431',
    'deuda'=>'0'
    );
$deuda[24][24029]=array(
    'nombre' =>'Cabrillanes',
    'habitantes' =>'828',
    'deuda'=>'19'
    );
$deuda[24][24030]=array(
    'nombre' =>'Cacabelos',
    'habitantes' =>'5318',
    'deuda'=>'5272'
    );
$deuda[24][24031]=array(
    'nombre' =>'Calzada del Coto',
    'habitantes' =>'253',
    'deuda'=>'12'
    );
$deuda[24][24032]=array(
    'nombre' =>'Campazas',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[24][24033]=array(
    'nombre' =>'Campo de Villavidel',
    'habitantes' =>'212',
    'deuda'=>'0'
    );
$deuda[24][24034]=array(
    'nombre' =>'Camponaraya',
    'habitantes' =>'4086',
    'deuda'=>'616'
    );
$deuda[24][24036]=array(
    'nombre' =>'Candín',
    'habitantes' =>'297',
    'deuda'=>'0'
    );
$deuda[24][24037]=array(
    'nombre' =>'Cármenes',
    'habitantes' =>'396',
    'deuda'=>'290'
    );
$deuda[24][24038]=array(
    'nombre' =>'Carracedelo',
    'habitantes' =>'3575',
    'deuda'=>'485'
    );
$deuda[24][24039]=array(
    'nombre' =>'Carrizo',
    'habitantes' =>'2357',
    'deuda'=>'116'
    );
$deuda[24][24040]=array(
    'nombre' =>'Carrocera',
    'habitantes' =>'514',
    'deuda'=>'0'
    );
$deuda[24][24041]=array(
    'nombre' =>'Carucedo',
    'habitantes' =>'583',
    'deuda'=>'0'
    );
$deuda[24][24042]=array(
    'nombre' =>'Castilfalé',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[24][24043]=array(
    'nombre' =>'Castrillo de Cabrera',
    'habitantes' =>'134',
    'deuda'=>'0'
    );
$deuda[24][24044]=array(
    'nombre' =>'Castrillo de la Valduerna',
    'habitantes' =>'183',
    'deuda'=>'0'
    );
$deuda[24][24046]=array(
    'nombre' =>'Castrocalbón',
    'habitantes' =>'1051',
    'deuda'=>'142'
    );
$deuda[24][24047]=array(
    'nombre' =>'Castrocontrigo',
    'habitantes' =>'839',
    'deuda'=>'0'
    );
$deuda[24][24049]=array(
    'nombre' =>'Castropodame',
    'habitantes' =>'1728',
    'deuda'=>'71'
    );
$deuda[24][24050]=array(
    'nombre' =>'Castrotierra de Valmadrigal',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[24][24051]=array(
    'nombre' =>'Cea',
    'habitantes' =>'460',
    'deuda'=>'0'
    );
$deuda[24][24052]=array(
    'nombre' =>'Cebanico',
    'habitantes' =>'174',
    'deuda'=>'0'
    );
$deuda[24][24053]=array(
    'nombre' =>'Cebrones del Río',
    'habitantes' =>'512',
    'deuda'=>'0'
    );
$deuda[24][24054]=array(
    'nombre' =>'Cimanes de la Vega',
    'habitantes' =>'500',
    'deuda'=>'0'
    );
$deuda[24][24055]=array(
    'nombre' =>'Cimanes del Tejar',
    'habitantes' =>'763',
    'deuda'=>'434'
    );
$deuda[24][24056]=array(
    'nombre' =>'Cistierna',
    'habitantes' =>'3351',
    'deuda'=>'2404'
    );
$deuda[24][24057]=array(
    'nombre' =>'Congosto',
    'habitantes' =>'1591',
    'deuda'=>'21'
    );
$deuda[24][24058]=array(
    'nombre' =>'Corbillos de los Oteros',
    'habitantes' =>'208',
    'deuda'=>'0'
    );
$deuda[24][24059]=array(
    'nombre' =>'Corullón',
    'habitantes' =>'990',
    'deuda'=>'139'
    );
$deuda[24][24060]=array(
    'nombre' =>'Crémenes',
    'habitantes' =>'589',
    'deuda'=>'0'
    );
$deuda[24][24061]=array(
    'nombre' =>'Cuadros',
    'habitantes' =>'1999',
    'deuda'=>'0'
    );
$deuda[24][24062]=array(
    'nombre' =>'Cubillas de los Oteros',
    'habitantes' =>'147',
    'deuda'=>'0'
    );
$deuda[24][24063]=array(
    'nombre' =>'Cubillas de Rueda',
    'habitantes' =>'466',
    'deuda'=>'0'
    );
$deuda[24][24064]=array(
    'nombre' =>'Cubillos del Sil',
    'habitantes' =>'1821',
    'deuda'=>'0'
    );
$deuda[24][24065]=array(
    'nombre' =>'Chozas de Abajo',
    'habitantes' =>'2496',
    'deuda'=>'1166'
    );
$deuda[24][24066]=array(
    'nombre' =>'Destriana',
    'habitantes' =>'549',
    'deuda'=>'6'
    );
$deuda[24][24067]=array(
    'nombre' =>'Encinedo',
    'habitantes' =>'797',
    'deuda'=>'0'
    );
$deuda[24][24068]=array(
    'nombre' =>'Ercina, La',
    'habitantes' =>'490',
    'deuda'=>'81'
    );
$deuda[24][24069]=array(
    'nombre' =>'Escobar de Campos',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[24][24070]=array(
    'nombre' =>'Fabero',
    'habitantes' =>'4818',
    'deuda'=>'1978'
    );
$deuda[24][24071]=array(
    'nombre' =>'Folgoso de la Ribera',
    'habitantes' =>'1153',
    'deuda'=>'0'
    );
$deuda[24][24073]=array(
    'nombre' =>'Fresno de la Vega',
    'habitantes' =>'560',
    'deuda'=>'62'
    );
$deuda[24][24074]=array(
    'nombre' =>'Fuentes de Carbajal',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[24][24076]=array(
    'nombre' =>'Garrafe de Torío',
    'habitantes' =>'1457',
    'deuda'=>'0'
    );
$deuda[24][24077]=array(
    'nombre' =>'Gordaliza del Pino',
    'habitantes' =>'272',
    'deuda'=>'0'
    );
$deuda[24][24078]=array(
    'nombre' =>'Gordoncillo',
    'habitantes' =>'473',
    'deuda'=>'39'
    );
$deuda[24][24079]=array(
    'nombre' =>'Gradefes',
    'habitantes' =>'997',
    'deuda'=>'0'
    );
$deuda[24][24080]=array(
    'nombre' =>'Grajal de Campos',
    'habitantes' =>'242',
    'deuda'=>'0'
    );
$deuda[24][24081]=array(
    'nombre' =>'Gusendos de los Oteros',
    'habitantes' =>'148',
    'deuda'=>'0'
    );
$deuda[24][24082]=array(
    'nombre' =>'Hospital de Órbigo',
    'habitantes' =>'995',
    'deuda'=>'700'
    );
$deuda[24][24083]=array(
    'nombre' =>'Igüeña',
    'habitantes' =>'1262',
    'deuda'=>'39'
    );
$deuda[24][24084]=array(
    'nombre' =>'Izagre',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[24][24086]=array(
    'nombre' =>'Joarilla de las Matas',
    'habitantes' =>'318',
    'deuda'=>'0'
    );
$deuda[24][24087]=array(
    'nombre' =>'Laguna Dalga',
    'habitantes' =>'703',
    'deuda'=>'0'
    );
$deuda[24][24088]=array(
    'nombre' =>'Laguna de Negrillos',
    'habitantes' =>'1098',
    'deuda'=>'130'
    );
$deuda[24][24089]=array(
    'nombre' =>'León',
    'habitantes' =>'127817',
    'deuda'=>'230291'
    );
$deuda[24][24090]=array(
    'nombre' =>'Lucillo',
    'habitantes' =>'413',
    'deuda'=>'0'
    );
$deuda[24][24091]=array(
    'nombre' =>'Luyego',
    'habitantes' =>'717',
    'deuda'=>'0'
    );
$deuda[24][24092]=array(
    'nombre' =>'Llamas de la Ribera',
    'habitantes' =>'885',
    'deuda'=>'0'
    );
$deuda[24][24093]=array(
    'nombre' =>'Magaz de Cepeda',
    'habitantes' =>'396',
    'deuda'=>'0'
    );
$deuda[24][24094]=array(
    'nombre' =>'Mansilla de las Mulas',
    'habitantes' =>'1805',
    'deuda'=>'0'
    );
$deuda[24][24095]=array(
    'nombre' =>'Mansilla Mayor',
    'habitantes' =>'344',
    'deuda'=>'55'
    );
$deuda[24][24096]=array(
    'nombre' =>'Maraña',
    'habitantes' =>'138',
    'deuda'=>'0'
    );
$deuda[24][24097]=array(
    'nombre' =>'Matadeón de los Oteros',
    'habitantes' =>'254',
    'deuda'=>'0'
    );
$deuda[24][24098]=array(
    'nombre' =>'Matallana de Torío',
    'habitantes' =>'1345',
    'deuda'=>'484'
    );
$deuda[24][24099]=array(
    'nombre' =>'Matanza',
    'habitantes' =>'197',
    'deuda'=>'71'
    );
$deuda[24][24100]=array(
    'nombre' =>'Molinaseca',
    'habitantes' =>'892',
    'deuda'=>'41'
    );
$deuda[24][24101]=array(
    'nombre' =>'Murias de Paredes',
    'habitantes' =>'426',
    'deuda'=>'64'
    );
$deuda[24][24102]=array(
    'nombre' =>'Noceda del Bierzo',
    'habitantes' =>'727',
    'deuda'=>'0'
    );
$deuda[24][24103]=array(
    'nombre' =>'Oencia',
    'habitantes' =>'310',
    'deuda'=>'117'
    );
$deuda[24][24104]=array(
    'nombre' =>'Omañas, Las',
    'habitantes' =>'291',
    'deuda'=>'0'
    );
$deuda[24][24105]=array(
    'nombre' =>'Onzonilla',
    'habitantes' =>'1758',
    'deuda'=>'0'
    );
$deuda[24][24106]=array(
    'nombre' =>'Oseja de Sajambre',
    'habitantes' =>'279',
    'deuda'=>'7'
    );
$deuda[24][24107]=array(
    'nombre' =>'Pajares de los Oteros',
    'habitantes' =>'308',
    'deuda'=>'327'
    );
$deuda[24][24108]=array(
    'nombre' =>'Palacios de la Valduerna',
    'habitantes' =>'425',
    'deuda'=>'0'
    );
$deuda[24][24109]=array(
    'nombre' =>'Palacios del Sil',
    'habitantes' =>'1090',
    'deuda'=>'125'
    );
$deuda[24][24110]=array(
    'nombre' =>'Páramo del Sil',
    'habitantes' =>'1403',
    'deuda'=>'0'
    );
$deuda[24][24112]=array(
    'nombre' =>'Peranzanes',
    'habitantes' =>'327',
    'deuda'=>'0'
    );
$deuda[24][24113]=array(
    'nombre' =>'Pobladura de Pelayo García',
    'habitantes' =>'396',
    'deuda'=>'106'
    );
$deuda[24][24114]=array(
    'nombre' =>'Pola de Gordón, La',
    'habitantes' =>'3522',
    'deuda'=>'1940'
    );
$deuda[24][24115]=array(
    'nombre' =>'Ponferrada',
    'habitantes' =>'66884',
    'deuda'=>'35970'
    );
$deuda[24][24116]=array(
    'nombre' =>'Posada de Valdeón',
    'habitantes' =>'477',
    'deuda'=>'12'
    );
$deuda[24][24117]=array(
    'nombre' =>'Pozuelo del Páramo',
    'habitantes' =>'478',
    'deuda'=>'0'
    );
$deuda[24][24118]=array(
    'nombre' =>'Prado de la Guzpeña',
    'habitantes' =>'140',
    'deuda'=>'0'
    );
$deuda[24][24119]=array(
    'nombre' =>'Priaranza del Bierzo',
    'habitantes' =>'802',
    'deuda'=>'368'
    );
$deuda[24][24120]=array(
    'nombre' =>'Prioro',
    'habitantes' =>'376',
    'deuda'=>'205'
    );
$deuda[24][24121]=array(
    'nombre' =>'Puebla de Lillo',
    'habitantes' =>'715',
    'deuda'=>'384'
    );
$deuda[24][24122]=array(
    'nombre' =>'Puente de Domingo Flórez',
    'habitantes' =>'1574',
    'deuda'=>'452'
    );
$deuda[24][24123]=array(
    'nombre' =>'Quintana del Castillo',
    'habitantes' =>'810',
    'deuda'=>'0'
    );
$deuda[24][24124]=array(
    'nombre' =>'Quintana del Marco',
    'habitantes' =>'407',
    'deuda'=>'0'
    );
$deuda[24][24125]=array(
    'nombre' =>'Quintana y Congosto',
    'habitantes' =>'372',
    'deuda'=>'0'
    );
$deuda[24][24127]=array(
    'nombre' =>'Regueras de Arriba',
    'habitantes' =>'326',
    'deuda'=>'0'
    );
$deuda[24][24129]=array(
    'nombre' =>'Reyero',
    'habitantes' =>'125',
    'deuda'=>'0'
    );
$deuda[24][24130]=array(
    'nombre' =>'Riaño',
    'habitantes' =>'490',
    'deuda'=>'46'
    );
$deuda[24][24131]=array(
    'nombre' =>'Riego de la Vega',
    'habitantes' =>'835',
    'deuda'=>'0'
    );
$deuda[24][24132]=array(
    'nombre' =>'Riello',
    'habitantes' =>'676',
    'deuda'=>'0'
    );
$deuda[24][24133]=array(
    'nombre' =>'Rioseco de Tapia',
    'habitantes' =>'372',
    'deuda'=>'0'
    );
$deuda[24][24134]=array(
    'nombre' =>'Robla, La',
    'habitantes' =>'4302',
    'deuda'=>'1788'
    );
$deuda[24][24136]=array(
    'nombre' =>'Roperuelos del Páramo',
    'habitantes' =>'592',
    'deuda'=>'0'
    );
$deuda[24][24137]=array(
    'nombre' =>'Sabero',
    'habitantes' =>'1246',
    'deuda'=>'98'
    );
$deuda[24][24139]=array(
    'nombre' =>'Sahagún',
    'habitantes' =>'2709',
    'deuda'=>'1361'
    );
$deuda[24][24141]=array(
    'nombre' =>'San Adrián del Valle',
    'habitantes' =>'112',
    'deuda'=>'54'
    );
$deuda[24][24142]=array(
    'nombre' =>'San Andrés del Rabanedo',
    'habitantes' =>'31745',
    'deuda'=>'50842'
    );
$deuda[24][24143]=array(
    'nombre' =>'Sancedo',
    'habitantes' =>'569',
    'deuda'=>'0'
    );
$deuda[24][24144]=array(
    'nombre' =>'San Cristóbal de la Polantera',
    'habitantes' =>'800',
    'deuda'=>'0'
    );
$deuda[24][24145]=array(
    'nombre' =>'San Emiliano',
    'habitantes' =>'694',
    'deuda'=>'95'
    );
$deuda[24][24146]=array(
    'nombre' =>'San Esteban de Nogales',
    'habitantes' =>'281',
    'deuda'=>'20'
    );
$deuda[24][24148]=array(
    'nombre' =>'San Justo de la Vega',
    'habitantes' =>'1949',
    'deuda'=>'0'
    );
$deuda[24][24149]=array(
    'nombre' =>'San Millán de los Caballeros',
    'habitantes' =>'190',
    'deuda'=>'0'
    );
$deuda[24][24150]=array(
    'nombre' =>'San Pedro Bercianos',
    'habitantes' =>'263',
    'deuda'=>'0'
    );
$deuda[24][24151]=array(
    'nombre' =>'Santa Colomba de Curueño',
    'habitantes' =>'547',
    'deuda'=>'0'
    );
$deuda[24][24152]=array(
    'nombre' =>'Santa Colomba de Somoza',
    'habitantes' =>'567',
    'deuda'=>'0'
    );
$deuda[24][24153]=array(
    'nombre' =>'Santa Cristina de Valmadrigal',
    'habitantes' =>'271',
    'deuda'=>'0'
    );
$deuda[24][24154]=array(
    'nombre' =>'Santa Elena de Jamuz',
    'habitantes' =>'1135',
    'deuda'=>'45'
    );
$deuda[24][24155]=array(
    'nombre' =>'Santa María de la Isla',
    'habitantes' =>'522',
    'deuda'=>'0'
    );
$deuda[24][24156]=array(
    'nombre' =>'Santa María del Monte de Cea',
    'habitantes' =>'256',
    'deuda'=>'0'
    );
$deuda[24][24157]=array(
    'nombre' =>'Santa María del Páramo',
    'habitantes' =>'3128',
    'deuda'=>'572'
    );
$deuda[24][24158]=array(
    'nombre' =>'Santa María de Ordás',
    'habitantes' =>'340',
    'deuda'=>'0'
    );
$deuda[24][24159]=array(
    'nombre' =>'Santa Marina del Rey',
    'habitantes' =>'2029',
    'deuda'=>'45'
    );
$deuda[24][24160]=array(
    'nombre' =>'Santas Martas',
    'habitantes' =>'809',
    'deuda'=>'0'
    );
$deuda[24][24161]=array(
    'nombre' =>'Santiago Millas',
    'habitantes' =>'330',
    'deuda'=>'22'
    );
$deuda[24][24162]=array(
    'nombre' =>'Santovenia de la Valdoncina',
    'habitantes' =>'2006',
    'deuda'=>'0'
    );
$deuda[24][24163]=array(
    'nombre' =>'Sariegos',
    'habitantes' =>'4826',
    'deuda'=>'0'
    );
$deuda[24][24164]=array(
    'nombre' =>'Sena de Luna',
    'habitantes' =>'402',
    'deuda'=>'0'
    );
$deuda[24][24165]=array(
    'nombre' =>'Sobrado',
    'habitantes' =>'363',
    'deuda'=>'15'
    );
$deuda[24][24166]=array(
    'nombre' =>'Soto de la Vega',
    'habitantes' =>'1641',
    'deuda'=>'0'
    );
$deuda[24][24167]=array(
    'nombre' =>'Soto y Amío',
    'habitantes' =>'853',
    'deuda'=>'0'
    );
$deuda[24][24168]=array(
    'nombre' =>'Toral de los Guzmanes',
    'habitantes' =>'533',
    'deuda'=>'0'
    );
$deuda[24][24169]=array(
    'nombre' =>'Toreno',
    'habitantes' =>'3380',
    'deuda'=>'0'
    );
$deuda[24][24170]=array(
    'nombre' =>'Torre del Bierzo',
    'habitantes' =>'2265',
    'deuda'=>'0'
    );
$deuda[24][24171]=array(
    'nombre' =>'Trabadelo',
    'habitantes' =>'394',
    'deuda'=>'252'
    );
$deuda[24][24172]=array(
    'nombre' =>'Truchas',
    'habitantes' =>'454',
    'deuda'=>'0'
    );
$deuda[24][24173]=array(
    'nombre' =>'Turcia',
    'habitantes' =>'1057',
    'deuda'=>'0'
    );
$deuda[24][24174]=array(
    'nombre' =>'Urdiales del Páramo',
    'habitantes' =>'515',
    'deuda'=>'0'
    );
$deuda[24][24175]=array(
    'nombre' =>'Valdefresno',
    'habitantes' =>'2149',
    'deuda'=>'0'
    );
$deuda[24][24176]=array(
    'nombre' =>'Valdefuentes del Páramo',
    'habitantes' =>'347',
    'deuda'=>'0'
    );
$deuda[24][24177]=array(
    'nombre' =>'Valdelugueros',
    'habitantes' =>'533',
    'deuda'=>'0'
    );
$deuda[24][24178]=array(
    'nombre' =>'Valdemora',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[24][24179]=array(
    'nombre' =>'Valdepiélago',
    'habitantes' =>'338',
    'deuda'=>'0'
    );
$deuda[24][24180]=array(
    'nombre' =>'Valdepolo',
    'habitantes' =>'1274',
    'deuda'=>'0'
    );
$deuda[24][24181]=array(
    'nombre' =>'Valderas',
    'habitantes' =>'1819',
    'deuda'=>'254'
    );
$deuda[24][24182]=array(
    'nombre' =>'Valderrey',
    'habitantes' =>'461',
    'deuda'=>'0'
    );
$deuda[24][24183]=array(
    'nombre' =>'Valderrueda',
    'habitantes' =>'923',
    'deuda'=>'33'
    );
$deuda[24][24184]=array(
    'nombre' =>'Valdesamario',
    'habitantes' =>'215',
    'deuda'=>'0'
    );
$deuda[24][24185]=array(
    'nombre' =>'Val de San Lorenzo',
    'habitantes' =>'542',
    'deuda'=>'461'
    );
$deuda[24][24187]=array(
    'nombre' =>'Valdevimbre',
    'habitantes' =>'997',
    'deuda'=>'0'
    );
$deuda[24][24188]=array(
    'nombre' =>'Valencia de Don Juan',
    'habitantes' =>'5181',
    'deuda'=>'1572'
    );
$deuda[24][24189]=array(
    'nombre' =>'Valverde de la Virgen',
    'habitantes' =>'7435',
    'deuda'=>'3296'
    );
$deuda[24][24190]=array(
    'nombre' =>'Valverde-Enrique',
    'habitantes' =>'175',
    'deuda'=>'0'
    );
$deuda[24][24191]=array(
    'nombre' =>'Vallecillo',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[24][24193]=array(
    'nombre' =>'Vecilla, La',
    'habitantes' =>'408',
    'deuda'=>'0'
    );
$deuda[24][24194]=array(
    'nombre' =>'Vegacervera',
    'habitantes' =>'314',
    'deuda'=>'311'
    );
$deuda[24][24196]=array(
    'nombre' =>'Vega de Espinareda',
    'habitantes' =>'2281',
    'deuda'=>'262'
    );
$deuda[24][24197]=array(
    'nombre' =>'Vega de Infanzones',
    'habitantes' =>'905',
    'deuda'=>'109'
    );
$deuda[24][24198]=array(
    'nombre' =>'Vega de Valcarce',
    'habitantes' =>'669',
    'deuda'=>'0'
    );
$deuda[24][24199]=array(
    'nombre' =>'Vegaquemada',
    'habitantes' =>'465',
    'deuda'=>'0'
    );
$deuda[24][24201]=array(
    'nombre' =>'Vegas del Condado',
    'habitantes' =>'1163',
    'deuda'=>'0'
    );
$deuda[24][24202]=array(
    'nombre' =>'Villablino',
    'habitantes' =>'9509',
    'deuda'=>'9161'
    );
$deuda[24][24203]=array(
    'nombre' =>'Villabraz',
    'habitantes' =>'113',
    'deuda'=>'0'
    );
$deuda[24][24205]=array(
    'nombre' =>'Villadangos del Páramo',
    'habitantes' =>'1103',
    'deuda'=>'0'
    );
$deuda[24][24206]=array(
    'nombre' =>'Toral de los Vados',
    'habitantes' =>'2024',
    'deuda'=>'310'
    );
$deuda[24][24207]=array(
    'nombre' =>'Villademor de la Vega',
    'habitantes' =>'349',
    'deuda'=>'0'
    );
$deuda[24][24209]=array(
    'nombre' =>'Villafranca del Bierzo',
    'habitantes' =>'3160',
    'deuda'=>'2293'
    );
$deuda[24][24210]=array(
    'nombre' =>'Villagatón',
    'habitantes' =>'617',
    'deuda'=>'9'
    );
$deuda[24][24211]=array(
    'nombre' =>'Villamandos',
    'habitantes' =>'310',
    'deuda'=>'0'
    );
$deuda[24][24212]=array(
    'nombre' =>'Villamañán',
    'habitantes' =>'1194',
    'deuda'=>'0'
    );
$deuda[24][24213]=array(
    'nombre' =>'Villamartín de Don Sancho',
    'habitantes' =>'164',
    'deuda'=>'0'
    );
$deuda[24][24214]=array(
    'nombre' =>'Villamejil',
    'habitantes' =>'746',
    'deuda'=>'0'
    );
$deuda[24][24215]=array(
    'nombre' =>'Villamol',
    'habitantes' =>'173',
    'deuda'=>'0'
    );
$deuda[24][24216]=array(
    'nombre' =>'Villamontán de la Valduerna',
    'habitantes' =>'804',
    'deuda'=>'0'
    );
$deuda[24][24217]=array(
    'nombre' =>'Villamoratiel de las Matas',
    'habitantes' =>'155',
    'deuda'=>'0'
    );
$deuda[24][24218]=array(
    'nombre' =>'Villanueva de las Manzanas',
    'habitantes' =>'507',
    'deuda'=>'0'
    );
$deuda[24][24219]=array(
    'nombre' =>'Villaobispo de Otero',
    'habitantes' =>'604',
    'deuda'=>'252'
    );
$deuda[24][24221]=array(
    'nombre' =>'Villaquejida',
    'habitantes' =>'912',
    'deuda'=>'0'
    );
$deuda[24][24222]=array(
    'nombre' =>'Villaquilambre',
    'habitantes' =>'18615',
    'deuda'=>'9724'
    );
$deuda[24][24223]=array(
    'nombre' =>'Villarejo de Órbigo',
    'habitantes' =>'3112',
    'deuda'=>'124'
    );
$deuda[24][24224]=array(
    'nombre' =>'Villares de Órbigo',
    'habitantes' =>'685',
    'deuda'=>'0'
    );
$deuda[24][24225]=array(
    'nombre' =>'Villasabariego',
    'habitantes' =>'1175',
    'deuda'=>'0'
    );
$deuda[24][24226]=array(
    'nombre' =>'Villaselán',
    'habitantes' =>'210',
    'deuda'=>'0'
    );
$deuda[24][24227]=array(
    'nombre' =>'Villaturiel',
    'habitantes' =>'1947',
    'deuda'=>'0'
    );
$deuda[24][24228]=array(
    'nombre' =>'Villazala',
    'habitantes' =>'749',
    'deuda'=>'0'
    );
$deuda[24][24229]=array(
    'nombre' =>'Villazanzo de Valderaduey',
    'habitantes' =>'475',
    'deuda'=>'0'
    );
$deuda[24][24230]=array(
    'nombre' =>'Zotes del Páramo',
    'habitantes' =>'454',
    'deuda'=>'0'
    );
$deuda[24][24901]=array(
    'nombre' =>'Villamanín',
    'habitantes' =>'1029',
    'deuda'=>'0'
    );
$deuda[24][24902]=array(
    'nombre' =>'Villaornate y Castro',
    'habitantes' =>'377',
    'deuda'=>'194'
    );
$deuda[25][25001]=array(
    'nombre' =>'Abella de la Conca',
    'habitantes' =>'170',
    'deuda'=>'0'
    );
$deuda[25][25002]=array(
    'nombre' =>'Àger',
    'habitantes' =>'613',
    'deuda'=>'38'
    );
$deuda[25][25003]=array(
    'nombre' =>'Agramunt',
    'habitantes' =>'5491',
    'deuda'=>'2176'
    );
$deuda[25][25004]=array(
    'nombre' =>'Alamús, Els',
    'habitantes' =>'778',
    'deuda'=>'298'
    );
$deuda[25][25005]=array(
    'nombre' =>'Alàs i Cerc',
    'habitantes' =>'356',
    'deuda'=>'185'
    );
$deuda[25][25006]=array(
    'nombre' =>'Albagés, L\'',
    'habitantes' =>'419',
    'deuda'=>'54'
    );
$deuda[25][25007]=array(
    'nombre' =>'Albatàrrec',
    'habitantes' =>'2214',
    'deuda'=>'736'
    );
$deuda[25][25008]=array(
    'nombre' =>'Albesa',
    'habitantes' =>'1624',
    'deuda'=>'339'
    );
$deuda[25][25009]=array(
    'nombre' =>'Albi, L\'',
    'habitantes' =>'819',
    'deuda'=>'0'
    );
$deuda[25][25010]=array(
    'nombre' =>'Alcanó',
    'habitantes' =>'246',
    'deuda'=>'0'
    );
$deuda[25][25011]=array(
    'nombre' =>'Alcarràs',
    'habitantes' =>'9372',
    'deuda'=>'4863'
    );
$deuda[25][25012]=array(
    'nombre' =>'Alcoletge',
    'habitantes' =>'3285',
    'deuda'=>'0'
    );
$deuda[25][25013]=array(
    'nombre' =>'Alfarràs',
    'habitantes' =>'2976',
    'deuda'=>'1195'
    );
$deuda[25][25014]=array(
    'nombre' =>'Alfés',
    'habitantes' =>'326',
    'deuda'=>'0'
    );
$deuda[25][25015]=array(
    'nombre' =>'Algerri',
    'habitantes' =>'422',
    'deuda'=>'213'
    );
$deuda[25][25016]=array(
    'nombre' =>'Alguaire',
    'habitantes' =>'3002',
    'deuda'=>'1511'
    );
$deuda[25][25017]=array(
    'nombre' =>'Alins',
    'habitantes' =>'288',
    'deuda'=>'197'
    );
$deuda[25][25019]=array(
    'nombre' =>'Almacelles',
    'habitantes' =>'6766',
    'deuda'=>'3178'
    );
$deuda[25][25020]=array(
    'nombre' =>'Almatret',
    'habitantes' =>'326',
    'deuda'=>'0'
    );
$deuda[25][25021]=array(
    'nombre' =>'Almenar',
    'habitantes' =>'3525',
    'deuda'=>'468'
    );
$deuda[25][25022]=array(
    'nombre' =>'Alòs de Balaguer',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[25][25023]=array(
    'nombre' =>'Alpicat',
    'habitantes' =>'6275',
    'deuda'=>'1146'
    );
$deuda[25][25024]=array(
    'nombre' =>'Alt Àneu',
    'habitantes' =>'407',
    'deuda'=>'0'
    );
$deuda[25][25025]=array(
    'nombre' =>'Naut Aran',
    'habitantes' =>'1760',
    'deuda'=>'0'
    );
$deuda[25][25027]=array(
    'nombre' =>'Anglesola',
    'habitantes' =>'1378',
    'deuda'=>'295'
    );
$deuda[25][25029]=array(
    'nombre' =>'Arbeca',
    'habitantes' =>'2278',
    'deuda'=>'696'
    );
$deuda[25][25030]=array(
    'nombre' =>'Pont de Bar, El',
    'habitantes' =>'159',
    'deuda'=>'0'
    );
$deuda[25][25031]=array(
    'nombre' =>'Arres',
    'habitantes' =>'67',
    'deuda'=>'0'
    );
$deuda[25][25032]=array(
    'nombre' =>'Arsèguel',
    'habitantes' =>'79',
    'deuda'=>'95'
    );
$deuda[25][25033]=array(
    'nombre' =>'Artesa de Lleida',
    'habitantes' =>'1517',
    'deuda'=>'837'
    );
$deuda[25][25034]=array(
    'nombre' =>'Artesa de Segre',
    'habitantes' =>'3614',
    'deuda'=>'2345'
    );
$deuda[25][25035]=array(
    'nombre' =>'Sentiu de Sió, La',
    'habitantes' =>'459',
    'deuda'=>'93'
    );
$deuda[25][25036]=array(
    'nombre' =>'Aspa',
    'habitantes' =>'218',
    'deuda'=>'81'
    );
$deuda[25][25037]=array(
    'nombre' =>'Avellanes i Santa Linya, Les',
    'habitantes' =>'473',
    'deuda'=>'74'
    );
$deuda[25][25038]=array(
    'nombre' =>'Aitona',
    'habitantes' =>'2456',
    'deuda'=>'946'
    );
$deuda[25][25039]=array(
    'nombre' =>'Baix Pallars',
    'habitantes' =>'350',
    'deuda'=>'404'
    );
$deuda[25][25040]=array(
    'nombre' =>'Balaguer',
    'habitantes' =>'16479',
    'deuda'=>'15086'
    );
$deuda[25][25041]=array(
    'nombre' =>'Barbens',
    'habitantes' =>'900',
    'deuda'=>'138'
    );
$deuda[25][25042]=array(
    'nombre' =>'Baronia de Rialb, La',
    'habitantes' =>'245',
    'deuda'=>'636'
    );
$deuda[25][25043]=array(
    'nombre' =>'Vall de Boí, La',
    'habitantes' =>'1004',
    'deuda'=>'504'
    );
$deuda[25][25044]=array(
    'nombre' =>'Bassella',
    'habitantes' =>'234',
    'deuda'=>'0'
    );
$deuda[25][25045]=array(
    'nombre' =>'Bausen',
    'habitantes' =>'58',
    'deuda'=>'135'
    );
$deuda[25][25046]=array(
    'nombre' =>'Belianes',
    'habitantes' =>'555',
    'deuda'=>'165'
    );
$deuda[25][25047]=array(
    'nombre' =>'Bellcaire d\'Urgell',
    'habitantes' =>'1296',
    'deuda'=>'17'
    );
$deuda[25][25048]=array(
    'nombre' =>'Bell-lloc d\'Urgell',
    'habitantes' =>'2329',
    'deuda'=>'0'
    );
$deuda[25][25049]=array(
    'nombre' =>'Bellmunt d\'Urgell',
    'habitantes' =>'188',
    'deuda'=>'98'
    );
$deuda[25][25050]=array(
    'nombre' =>'Bellpuig',
    'habitantes' =>'4989',
    'deuda'=>'2632'
    );
$deuda[25][25051]=array(
    'nombre' =>'Bellver de Cerdanya',
    'habitantes' =>'2028',
    'deuda'=>'140'
    );
$deuda[25][25052]=array(
    'nombre' =>'Bellvís',
    'habitantes' =>'2270',
    'deuda'=>'519'
    );
$deuda[25][25053]=array(
    'nombre' =>'Benavent de Segrià',
    'habitantes' =>'1506',
    'deuda'=>'749'
    );
$deuda[25][25055]=array(
    'nombre' =>'Biosca',
    'habitantes' =>'199',
    'deuda'=>'64'
    );
$deuda[25][25056]=array(
    'nombre' =>'Bovera',
    'habitantes' =>'275',
    'deuda'=>'427'
    );
$deuda[25][25057]=array(
    'nombre' =>'Bòrdes, Es',
    'habitantes' =>'237',
    'deuda'=>'0'
    );
$deuda[25][25058]=array(
    'nombre' =>'Borges Blanques, Les',
    'habitantes' =>'6019',
    'deuda'=>'3442'
    );
$deuda[25][25059]=array(
    'nombre' =>'Bossòst',
    'habitantes' =>'1137',
    'deuda'=>'0'
    );
$deuda[25][25060]=array(
    'nombre' =>'Cabanabona',
    'habitantes' =>'82',
    'deuda'=>'93'
    );
$deuda[25][25061]=array(
    'nombre' =>'Cabó',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[25][25062]=array(
    'nombre' =>'Camarasa',
    'habitantes' =>'903',
    'deuda'=>'940'
    );
$deuda[25][25063]=array(
    'nombre' =>'Canejan',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[25][25064]=array(
    'nombre' =>'Castellar de la Ribera',
    'habitantes' =>'150',
    'deuda'=>'0'
    );
$deuda[25][25067]=array(
    'nombre' =>'Castelldans',
    'habitantes' =>'981',
    'deuda'=>'681'
    );
$deuda[25][25068]=array(
    'nombre' =>'Castellnou de Seana',
    'habitantes' =>'736',
    'deuda'=>'424'
    );
$deuda[25][25069]=array(
    'nombre' =>'Castelló de Farfanya',
    'habitantes' =>'547',
    'deuda'=>'45'
    );
$deuda[25][25070]=array(
    'nombre' =>'Castellserà',
    'habitantes' =>'1044',
    'deuda'=>'263'
    );
$deuda[25][25071]=array(
    'nombre' =>'Cava',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[25][25072]=array(
    'nombre' =>'Cervera',
    'habitantes' =>'8956',
    'deuda'=>'3150'
    );
$deuda[25][25073]=array(
    'nombre' =>'Cervià de les Garrigues',
    'habitantes' =>'695',
    'deuda'=>'125'
    );
$deuda[25][25074]=array(
    'nombre' =>'Ciutadilla',
    'habitantes' =>'217',
    'deuda'=>'58'
    );
$deuda[25][25075]=array(
    'nombre' =>'Clariana de Cardener',
    'habitantes' =>'140',
    'deuda'=>'0'
    );
$deuda[25][25076]=array(
    'nombre' =>'Cogul, El',
    'habitantes' =>'181',
    'deuda'=>'8'
    );
$deuda[25][25077]=array(
    'nombre' =>'Coll de Nargó',
    'habitantes' =>'575',
    'deuda'=>'68'
    );
$deuda[25][25078]=array(
    'nombre' =>'Corbins',
    'habitantes' =>'1394',
    'deuda'=>'2944'
    );
$deuda[25][25079]=array(
    'nombre' =>'Cubells',
    'habitantes' =>'378',
    'deuda'=>'104'
    );
$deuda[25][25081]=array(
    'nombre' =>'Espluga Calba, L\'',
    'habitantes' =>'387',
    'deuda'=>'340'
    );
$deuda[25][25082]=array(
    'nombre' =>'Espot',
    'habitantes' =>'362',
    'deuda'=>'0'
    );
$deuda[25][25085]=array(
    'nombre' =>'Estaràs',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[25][25086]=array(
    'nombre' =>'Esterri d\'Àneu',
    'habitantes' =>'804',
    'deuda'=>'0'
    );
$deuda[25][25087]=array(
    'nombre' =>'Esterri de Cardós',
    'habitantes' =>'73',
    'deuda'=>'43'
    );
$deuda[25][25088]=array(
    'nombre' =>'Estamariu',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[25][25089]=array(
    'nombre' =>'Farrera',
    'habitantes' =>'118',
    'deuda'=>'0'
    );
$deuda[25][25092]=array(
    'nombre' =>'Floresta, La',
    'habitantes' =>'160',
    'deuda'=>'0'
    );
$deuda[25][25093]=array(
    'nombre' =>'Fondarella',
    'habitantes' =>'831',
    'deuda'=>'80'
    );
$deuda[25][25094]=array(
    'nombre' =>'Foradada',
    'habitantes' =>'174',
    'deuda'=>'169'
    );
$deuda[25][25096]=array(
    'nombre' =>'Fuliola, La',
    'habitantes' =>'1291',
    'deuda'=>'725'
    );
$deuda[25][25097]=array(
    'nombre' =>'Fulleda',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[25][25098]=array(
    'nombre' =>'Gavet de la Conca',
    'habitantes' =>'287',
    'deuda'=>'0'
    );
$deuda[25][25099]=array(
    'nombre' =>'Golmés',
    'habitantes' =>'1770',
    'deuda'=>'98'
    );
$deuda[25][25100]=array(
    'nombre' =>'Gósol',
    'habitantes' =>'226',
    'deuda'=>'361'
    );
$deuda[25][25101]=array(
    'nombre' =>'Granadella, La',
    'habitantes' =>'712',
    'deuda'=>'517'
    );
$deuda[25][25102]=array(
    'nombre' =>'Granja d\'Escarp, La',
    'habitantes' =>'1001',
    'deuda'=>'470'
    );
$deuda[25][25103]=array(
    'nombre' =>'Granyanella',
    'habitantes' =>'146',
    'deuda'=>'62'
    );
$deuda[25][25104]=array(
    'nombre' =>'Granyena de Segarra',
    'habitantes' =>'139',
    'deuda'=>'45'
    );
$deuda[25][25105]=array(
    'nombre' =>'Granyena de les Garrigues',
    'habitantes' =>'161',
    'deuda'=>'24'
    );
$deuda[25][25109]=array(
    'nombre' =>'Guimerà',
    'habitantes' =>'277',
    'deuda'=>'148'
    );
$deuda[25][25110]=array(
    'nombre' =>'Guissona',
    'habitantes' =>'6862',
    'deuda'=>'1343'
    );
$deuda[25][25111]=array(
    'nombre' =>'Guixers',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[25][25112]=array(
    'nombre' =>'Ivars de Noguera',
    'habitantes' =>'346',
    'deuda'=>'16'
    );
$deuda[25][25113]=array(
    'nombre' =>'Ivars d\'Urgell',
    'habitantes' =>'1591',
    'deuda'=>'416'
    );
$deuda[25][25114]=array(
    'nombre' =>'Ivorra',
    'habitantes' =>'106',
    'deuda'=>'70'
    );
$deuda[25][25115]=array(
    'nombre' =>'Isona i Conca Dellà',
    'habitantes' =>'1064',
    'deuda'=>'124'
    );
$deuda[25][25118]=array(
    'nombre' =>'Juncosa',
    'habitantes' =>'421',
    'deuda'=>'0'
    );
$deuda[25][25119]=array(
    'nombre' =>'Juneda',
    'habitantes' =>'3384',
    'deuda'=>'400'
    );
$deuda[25][25120]=array(
    'nombre' =>'Lleida',
    'habitantes' =>'138542',
    'deuda'=>'174476'
    );
$deuda[25][25121]=array(
    'nombre' =>'Les',
    'habitantes' =>'953',
    'deuda'=>'0'
    );
$deuda[25][25122]=array(
    'nombre' =>'Linyola',
    'habitantes' =>'2652',
    'deuda'=>'53'
    );
$deuda[25][25123]=array(
    'nombre' =>'Lladorre',
    'habitantes' =>'229',
    'deuda'=>'0'
    );
$deuda[25][25124]=array(
    'nombre' =>'Lladurs',
    'habitantes' =>'193',
    'deuda'=>'0'
    );
$deuda[25][25125]=array(
    'nombre' =>'Llardecans',
    'habitantes' =>'491',
    'deuda'=>'57'
    );
$deuda[25][25126]=array(
    'nombre' =>'Llavorsí',
    'habitantes' =>'354',
    'deuda'=>'319'
    );
$deuda[25][25127]=array(
    'nombre' =>'Lles de Cerdanya',
    'habitantes' =>'257',
    'deuda'=>'70'
    );
$deuda[25][25128]=array(
    'nombre' =>'Llimiana',
    'habitantes' =>'158',
    'deuda'=>'175'
    );
$deuda[25][25129]=array(
    'nombre' =>'Llobera',
    'habitantes' =>'202',
    'deuda'=>'7'
    );
$deuda[25][25130]=array(
    'nombre' =>'Maldà',
    'habitantes' =>'228',
    'deuda'=>'166'
    );
$deuda[25][25131]=array(
    'nombre' =>'Massalcoreig',
    'habitantes' =>'564',
    'deuda'=>'0'
    );
$deuda[25][25132]=array(
    'nombre' =>'Massoteres',
    'habitantes' =>'189',
    'deuda'=>'29'
    );
$deuda[25][25133]=array(
    'nombre' =>'Maials',
    'habitantes' =>'941',
    'deuda'=>'476'
    );
$deuda[25][25134]=array(
    'nombre' =>'Menàrguens',
    'habitantes' =>'849',
    'deuda'=>'0'
    );
$deuda[25][25135]=array(
    'nombre' =>'Miralcamp',
    'habitantes' =>'1390',
    'deuda'=>'542'
    );
$deuda[25][25136]=array(
    'nombre' =>'Molsosa, La',
    'habitantes' =>'113',
    'deuda'=>'0'
    );
$deuda[25][25137]=array(
    'nombre' =>'Mollerussa',
    'habitantes' =>'14900',
    'deuda'=>'11745'
    );
$deuda[25][25138]=array(
    'nombre' =>'Montgai',
    'habitantes' =>'663',
    'deuda'=>'229'
    );
$deuda[25][25139]=array(
    'nombre' =>'Montellà i Martinet',
    'habitantes' =>'586',
    'deuda'=>'255'
    );
$deuda[25][25140]=array(
    'nombre' =>'Montferrer i Castellbò',
    'habitantes' =>'1010',
    'deuda'=>'0'
    );
$deuda[25][25141]=array(
    'nombre' =>'Montoliu de Segarra',
    'habitantes' =>'194',
    'deuda'=>'0'
    );
$deuda[25][25142]=array(
    'nombre' =>'Montoliu de Lleida',
    'habitantes' =>'514',
    'deuda'=>'128'
    );
$deuda[25][25143]=array(
    'nombre' =>'Montornès de Segarra',
    'habitantes' =>'101',
    'deuda'=>'9'
    );
$deuda[25][25145]=array(
    'nombre' =>'Nalec',
    'habitantes' =>'95',
    'deuda'=>'15'
    );
$deuda[25][25146]=array(
    'nombre' =>'Navès',
    'habitantes' =>'281',
    'deuda'=>'0'
    );
$deuda[25][25148]=array(
    'nombre' =>'Odèn',
    'habitantes' =>'253',
    'deuda'=>'419'
    );
$deuda[25][25149]=array(
    'nombre' =>'Oliana',
    'habitantes' =>'1842',
    'deuda'=>'1100'
    );
$deuda[25][25150]=array(
    'nombre' =>'Oliola',
    'habitantes' =>'233',
    'deuda'=>'0'
    );
$deuda[25][25151]=array(
    'nombre' =>'Olius',
    'habitantes' =>'910',
    'deuda'=>'0'
    );
$deuda[25][25152]=array(
    'nombre' =>'Oluges, Les',
    'habitantes' =>'161',
    'deuda'=>'0'
    );
$deuda[25][25153]=array(
    'nombre' =>'Omellons, Els',
    'habitantes' =>'226',
    'deuda'=>'102'
    );
$deuda[25][25154]=array(
    'nombre' =>'Omells de na Gaia, Els',
    'habitantes' =>'136',
    'deuda'=>'543'
    );
$deuda[25][25155]=array(
    'nombre' =>'Organyà',
    'habitantes' =>'845',
    'deuda'=>'9'
    );
$deuda[25][25156]=array(
    'nombre' =>'Os de Balaguer',
    'habitantes' =>'995',
    'deuda'=>'150'
    );
$deuda[25][25157]=array(
    'nombre' =>'Ossó de Sió',
    'habitantes' =>'213',
    'deuda'=>'200'
    );
$deuda[25][25158]=array(
    'nombre' =>'Palau d\'Anglesola, El',
    'habitantes' =>'2136',
    'deuda'=>'23'
    );
$deuda[25][25161]=array(
    'nombre' =>'Conca de Dalt',
    'habitantes' =>'446',
    'deuda'=>'0'
    );
$deuda[25][25163]=array(
    'nombre' =>'Coma i la Pedra, La',
    'habitantes' =>'270',
    'deuda'=>'98'
    );
$deuda[25][25164]=array(
    'nombre' =>'Penelles',
    'habitantes' =>'482',
    'deuda'=>'161'
    );
$deuda[25][25165]=array(
    'nombre' =>'Peramola',
    'habitantes' =>'343',
    'deuda'=>'0'
    );
$deuda[25][25166]=array(
    'nombre' =>'Pinell de Solsonès',
    'habitantes' =>'207',
    'deuda'=>'0'
    );
$deuda[25][25167]=array(
    'nombre' =>'Pinós',
    'habitantes' =>'305',
    'deuda'=>'0'
    );
$deuda[25][25168]=array(
    'nombre' =>'Poal, El',
    'habitantes' =>'668',
    'deuda'=>'0'
    );
$deuda[25][25169]=array(
    'nombre' =>'Pobla de Cérvoles, La',
    'habitantes' =>'222',
    'deuda'=>'0'
    );
$deuda[25][25170]=array(
    'nombre' =>'Bellaguarda',
    'habitantes' =>'308',
    'deuda'=>'178'
    );
$deuda[25][25171]=array(
    'nombre' =>'Pobla de Segur, La',
    'habitantes' =>'3016',
    'deuda'=>'1113'
    );
$deuda[25][25172]=array(
    'nombre' =>'Ponts',
    'habitantes' =>'2632',
    'deuda'=>'1042'
    );
$deuda[25][25173]=array(
    'nombre' =>'Pont de Suert, El',
    'habitantes' =>'2314',
    'deuda'=>'3681'
    );
$deuda[25][25174]=array(
    'nombre' =>'Portella, La',
    'habitantes' =>'731',
    'deuda'=>'69'
    );
$deuda[25][25175]=array(
    'nombre' =>'Prats i Sansor',
    'habitantes' =>'251',
    'deuda'=>'0'
    );
$deuda[25][25176]=array(
    'nombre' =>'Preixana',
    'habitantes' =>'407',
    'deuda'=>'205'
    );
$deuda[25][25177]=array(
    'nombre' =>'Preixens',
    'habitantes' =>'458',
    'deuda'=>'294'
    );
$deuda[25][25179]=array(
    'nombre' =>'Prullans',
    'habitantes' =>'206',
    'deuda'=>'0'
    );
$deuda[25][25180]=array(
    'nombre' =>'Puiggròs',
    'habitantes' =>'295',
    'deuda'=>'47'
    );
$deuda[25][25181]=array(
    'nombre' =>'Puigverd d\'Agramunt',
    'habitantes' =>'244',
    'deuda'=>'132'
    );
$deuda[25][25182]=array(
    'nombre' =>'Puigverd de Lleida',
    'habitantes' =>'1405',
    'deuda'=>'111'
    );
$deuda[25][25183]=array(
    'nombre' =>'Rialp',
    'habitantes' =>'655',
    'deuda'=>'327'
    );
$deuda[25][25185]=array(
    'nombre' =>'Ribera d\'Urgellet',
    'habitantes' =>'978',
    'deuda'=>'0'
    );
$deuda[25][25186]=array(
    'nombre' =>'Riner',
    'habitantes' =>'267',
    'deuda'=>'0'
    );
$deuda[25][25189]=array(
    'nombre' =>'Rosselló',
    'habitantes' =>'3043',
    'deuda'=>'386'
    );
$deuda[25][25190]=array(
    'nombre' =>'Salàs de Pallars',
    'habitantes' =>'359',
    'deuda'=>'74'
    );
$deuda[25][25191]=array(
    'nombre' =>'Sanaüja',
    'habitantes' =>'427',
    'deuda'=>'72'
    );
$deuda[25][25192]=array(
    'nombre' =>'Sant Guim de Freixenet',
    'habitantes' =>'1078',
    'deuda'=>'1677'
    );
$deuda[25][25193]=array(
    'nombre' =>'Sant Llorenç de Morunys',
    'habitantes' =>'977',
    'deuda'=>'187'
    );
$deuda[25][25194]=array(
    'nombre' =>'Sant Ramon',
    'habitantes' =>'506',
    'deuda'=>'6'
    );
$deuda[25][25196]=array(
    'nombre' =>'Sant Esteve de la Sarga',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[25][25197]=array(
    'nombre' =>'Sant Guim de la Plana',
    'habitantes' =>'174',
    'deuda'=>'0'
    );
$deuda[25][25200]=array(
    'nombre' =>'Sarroca de Lleida',
    'habitantes' =>'387',
    'deuda'=>'0'
    );
$deuda[25][25201]=array(
    'nombre' =>'Sarroca de Bellera',
    'habitantes' =>'125',
    'deuda'=>'128'
    );
$deuda[25][25202]=array(
    'nombre' =>'Senterada',
    'habitantes' =>'133',
    'deuda'=>'10'
    );
$deuda[25][25203]=array(
    'nombre' =>'Seu d\'Urgell, La',
    'habitantes' =>'12249',
    'deuda'=>'10585'
    );
$deuda[25][25204]=array(
    'nombre' =>'Seròs',
    'habitantes' =>'1886',
    'deuda'=>'4416'
    );
$deuda[25][25205]=array(
    'nombre' =>'Sidamon',
    'habitantes' =>'732',
    'deuda'=>'68'
    );
$deuda[25][25206]=array(
    'nombre' =>'Soleràs, El',
    'habitantes' =>'342',
    'deuda'=>'95'
    );
$deuda[25][25207]=array(
    'nombre' =>'Solsona',
    'habitantes' =>'9004',
    'deuda'=>'3806'
    );
$deuda[25][25208]=array(
    'nombre' =>'Soriguera',
    'habitantes' =>'385',
    'deuda'=>'351'
    );
$deuda[25][25209]=array(
    'nombre' =>'Sort',
    'habitantes' =>'2199',
    'deuda'=>'489'
    );
$deuda[25][25210]=array(
    'nombre' =>'Soses',
    'habitantes' =>'1728',
    'deuda'=>'0'
    );
$deuda[25][25211]=array(
    'nombre' =>'Sudanell',
    'habitantes' =>'847',
    'deuda'=>'0'
    );
$deuda[25][25212]=array(
    'nombre' =>'Sunyer',
    'habitantes' =>'325',
    'deuda'=>'99'
    );
$deuda[25][25215]=array(
    'nombre' =>'Talarn',
    'habitantes' =>'582',
    'deuda'=>'0'
    );
$deuda[25][25216]=array(
    'nombre' =>'Talavera',
    'habitantes' =>'262',
    'deuda'=>'172'
    );
$deuda[25][25217]=array(
    'nombre' =>'Tàrrega',
    'habitantes' =>'16444',
    'deuda'=>'18227'
    );
$deuda[25][25218]=array(
    'nombre' =>'Tarrés',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[25][25219]=array(
    'nombre' =>'Tarroja de Segarra',
    'habitantes' =>'178',
    'deuda'=>'50'
    );
$deuda[25][25220]=array(
    'nombre' =>'Térmens',
    'habitantes' =>'1531',
    'deuda'=>'439'
    );
$deuda[25][25221]=array(
    'nombre' =>'Tírvia',
    'habitantes' =>'153',
    'deuda'=>'13'
    );
$deuda[25][25222]=array(
    'nombre' =>'Tiurana',
    'habitantes' =>'72',
    'deuda'=>'220'
    );
$deuda[25][25223]=array(
    'nombre' =>'Torà',
    'habitantes' =>'1232',
    'deuda'=>'1106'
    );
$deuda[25][25224]=array(
    'nombre' =>'Torms, Els',
    'habitantes' =>'147',
    'deuda'=>'0'
    );
$deuda[25][25225]=array(
    'nombre' =>'Tornabous',
    'habitantes' =>'885',
    'deuda'=>'1470'
    );
$deuda[25][25226]=array(
    'nombre' =>'Torrebesses',
    'habitantes' =>'286',
    'deuda'=>'135'
    );
$deuda[25][25227]=array(
    'nombre' =>'Torre de Cabdella, La',
    'habitantes' =>'762',
    'deuda'=>'0'
    );
$deuda[25][25228]=array(
    'nombre' =>'Torrefarrera',
    'habitantes' =>'4611',
    'deuda'=>'2318'
    );
$deuda[25][25230]=array(
    'nombre' =>'Torregrossa',
    'habitantes' =>'2255',
    'deuda'=>'307'
    );
$deuda[25][25231]=array(
    'nombre' =>'Torrelameu',
    'habitantes' =>'706',
    'deuda'=>'105'
    );
$deuda[25][25232]=array(
    'nombre' =>'Torres de Segre',
    'habitantes' =>'2271',
    'deuda'=>'788'
    );
$deuda[25][25233]=array(
    'nombre' =>'Torre-serona',
    'habitantes' =>'379',
    'deuda'=>'142'
    );
$deuda[25][25234]=array(
    'nombre' =>'Tremp',
    'habitantes' =>'6175',
    'deuda'=>'3264'
    );
$deuda[25][25238]=array(
    'nombre' =>'Vallbona de les Monges',
    'habitantes' =>'256',
    'deuda'=>'353'
    );
$deuda[25][25239]=array(
    'nombre' =>'Valls de Valira, Les',
    'habitantes' =>'845',
    'deuda'=>'0'
    );
$deuda[25][25240]=array(
    'nombre' =>'Vallfogona de Balaguer',
    'habitantes' =>'1880',
    'deuda'=>'168'
    );
$deuda[25][25242]=array(
    'nombre' =>'Verdú',
    'habitantes' =>'947',
    'deuda'=>'351'
    );
$deuda[25][25243]=array(
    'nombre' =>'Vielha e Mijaran',
    'habitantes' =>'5450',
    'deuda'=>'26'
    );
$deuda[25][25244]=array(
    'nombre' =>'Vilagrassa',
    'habitantes' =>'522',
    'deuda'=>'461'
    );
$deuda[25][25245]=array(
    'nombre' =>'Vilaller',
    'habitantes' =>'566',
    'deuda'=>'1138'
    );
$deuda[25][25247]=array(
    'nombre' =>'Vilamòs',
    'habitantes' =>'164',
    'deuda'=>'0'
    );
$deuda[25][25248]=array(
    'nombre' =>'Vilanova de Bellpuig',
    'habitantes' =>'1175',
    'deuda'=>'128'
    );
$deuda[25][25249]=array(
    'nombre' =>'Vilanova de l\'Aguda',
    'habitantes' =>'218',
    'deuda'=>'0'
    );
$deuda[25][25250]=array(
    'nombre' =>'Vilanova de Meià',
    'habitantes' =>'424',
    'deuda'=>'102'
    );
$deuda[25][25251]=array(
    'nombre' =>'Vilanova de Segrià',
    'habitantes' =>'940',
    'deuda'=>'75'
    );
$deuda[25][25252]=array(
    'nombre' =>'Vila-sana',
    'habitantes' =>'718',
    'deuda'=>'123'
    );
$deuda[25][25253]=array(
    'nombre' =>'Vilosell, El',
    'habitantes' =>'187',
    'deuda'=>'66'
    );
$deuda[25][25254]=array(
    'nombre' =>'Vilanova de la Barca',
    'habitantes' =>'1099',
    'deuda'=>'105'
    );
$deuda[25][25255]=array(
    'nombre' =>'Vinaixa',
    'habitantes' =>'526',
    'deuda'=>'214'
    );
$deuda[25][25901]=array(
    'nombre' =>'Vall de Cardós',
    'habitantes' =>'368',
    'deuda'=>'320'
    );
$deuda[25][25902]=array(
    'nombre' =>'Sant Martí de Riucorb',
    'habitantes' =>'689',
    'deuda'=>'247'
    );
$deuda[25][25903]=array(
    'nombre' =>'Guingueta d\'Àneu, La',
    'habitantes' =>'315',
    'deuda'=>'48'
    );
$deuda[25][25904]=array(
    'nombre' =>'Castell de Mur',
    'habitantes' =>'188',
    'deuda'=>'0'
    );
$deuda[25][25905]=array(
    'nombre' =>'Ribera d\'Ondara',
    'habitantes' =>'429',
    'deuda'=>'325'
    );
$deuda[25][25906]=array(
    'nombre' =>'Valls d\'Aguilar, Les',
    'habitantes' =>'302',
    'deuda'=>'132'
    );
$deuda[25][25907]=array(
    'nombre' =>'Torrefeta i Florejacs',
    'habitantes' =>'604',
    'deuda'=>'0'
    );
$deuda[25][25908]=array(
    'nombre' =>'Fígols i Alinyà',
    'habitantes' =>'261',
    'deuda'=>'55'
    );
$deuda[25][25909]=array(
    'nombre' =>'Vansa i Fórnols, La',
    'habitantes' =>'210',
    'deuda'=>'148'
    );
$deuda[25][25910]=array(
    'nombre' =>'Josa i Tuixén',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[25][25911]=array(
    'nombre' =>'Plans de Sió, Els',
    'habitantes' =>'528',
    'deuda'=>'125'
    );
$deuda[25][25912]=array(
    'nombre' =>'Gimenells i el Pla de la Font',
    'habitantes' =>'1151',
    'deuda'=>'154'
    );
$deuda[25][25913]=array(
    'nombre' =>'Riu de Cerdanya',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[26][26001]=array(
    'nombre' =>'Ábalos',
    'habitantes' =>'252',
    'deuda'=>'0'
    );
$deuda[26][26002]=array(
    'nombre' =>'Agoncillo',
    'habitantes' =>'1123',
    'deuda'=>'0'
    );
$deuda[26][26003]=array(
    'nombre' =>'Aguilar del Río Alhama',
    'habitantes' =>'509',
    'deuda'=>'214'
    );
$deuda[26][26004]=array(
    'nombre' =>'Ajamil de Cameros',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[26][26005]=array(
    'nombre' =>'Albelda de Iregua',
    'habitantes' =>'3284',
    'deuda'=>'0'
    );
$deuda[26][26006]=array(
    'nombre' =>'Alberite',
    'habitantes' =>'2456',
    'deuda'=>'542'
    );
$deuda[26][26007]=array(
    'nombre' =>'Alcanadre',
    'habitantes' =>'710',
    'deuda'=>'66'
    );
$deuda[26][26008]=array(
    'nombre' =>'Aldeanueva de Ebro',
    'habitantes' =>'2779',
    'deuda'=>'1974'
    );
$deuda[26][26009]=array(
    'nombre' =>'Alesanco',
    'habitantes' =>'505',
    'deuda'=>'0'
    );
$deuda[26][26010]=array(
    'nombre' =>'Alesón',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[26][26011]=array(
    'nombre' =>'Alfaro',
    'habitantes' =>'9568',
    'deuda'=>'1256'
    );
$deuda[26][26012]=array(
    'nombre' =>'Almarza de Cameros',
    'habitantes' =>'22',
    'deuda'=>'0'
    );
$deuda[26][26013]=array(
    'nombre' =>'Anguciana',
    'habitantes' =>'453',
    'deuda'=>'0'
    );
$deuda[26][26014]=array(
    'nombre' =>'Anguiano',
    'habitantes' =>'537',
    'deuda'=>'15'
    );
$deuda[26][26015]=array(
    'nombre' =>'Arenzana de Abajo',
    'habitantes' =>'232',
    'deuda'=>'0'
    );
$deuda[26][26016]=array(
    'nombre' =>'Arenzana de Arriba',
    'habitantes' =>'33',
    'deuda'=>'4'
    );
$deuda[26][26017]=array(
    'nombre' =>'Arnedillo',
    'habitantes' =>'468',
    'deuda'=>'0'
    );
$deuda[26][26018]=array(
    'nombre' =>'Arnedo',
    'habitantes' =>'14597',
    'deuda'=>'1250'
    );
$deuda[26][26019]=array(
    'nombre' =>'Arrúbal',
    'habitantes' =>'481',
    'deuda'=>'0'
    );
$deuda[26][26020]=array(
    'nombre' =>'Ausejo',
    'habitantes' =>'796',
    'deuda'=>'720'
    );
$deuda[26][26021]=array(
    'nombre' =>'Autol',
    'habitantes' =>'4427',
    'deuda'=>'557'
    );
$deuda[26][26022]=array(
    'nombre' =>'Azofra',
    'habitantes' =>'205',
    'deuda'=>'0'
    );
$deuda[26][26023]=array(
    'nombre' =>'Badarán',
    'habitantes' =>'534',
    'deuda'=>'0'
    );
$deuda[26][26024]=array(
    'nombre' =>'Bañares',
    'habitantes' =>'284',
    'deuda'=>'0'
    );
$deuda[26][26025]=array(
    'nombre' =>'Baños de Rioja',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[26][26026]=array(
    'nombre' =>'Baños de Río Tobía',
    'habitantes' =>'1621',
    'deuda'=>'151'
    );
$deuda[26][26027]=array(
    'nombre' =>'Berceo',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[26][26028]=array(
    'nombre' =>'Bergasa',
    'habitantes' =>'152',
    'deuda'=>'172'
    );
$deuda[26][26029]=array(
    'nombre' =>'Bergasillas Bajera',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[26][26030]=array(
    'nombre' =>'Bezares',
    'habitantes' =>'15',
    'deuda'=>'0'
    );
$deuda[26][26031]=array(
    'nombre' =>'Bobadilla',
    'habitantes' =>'120',
    'deuda'=>'0'
    );
$deuda[26][26032]=array(
    'nombre' =>'Brieva de Cameros',
    'habitantes' =>'53',
    'deuda'=>'36'
    );
$deuda[26][26033]=array(
    'nombre' =>'Briñas',
    'habitantes' =>'210',
    'deuda'=>'114'
    );
$deuda[26][26034]=array(
    'nombre' =>'Briones',
    'habitantes' =>'835',
    'deuda'=>'0'
    );
$deuda[26][26035]=array(
    'nombre' =>'Cabezón de Cameros',
    'habitantes' =>'16',
    'deuda'=>'0'
    );
$deuda[26][26036]=array(
    'nombre' =>'Calahorra',
    'habitantes' =>'23955',
    'deuda'=>'7635'
    );
$deuda[26][26037]=array(
    'nombre' =>'Camprovín',
    'habitantes' =>'154',
    'deuda'=>'46'
    );
$deuda[26][26038]=array(
    'nombre' =>'Canales de la Sierra',
    'habitantes' =>'97',
    'deuda'=>'112'
    );
$deuda[26][26039]=array(
    'nombre' =>'Canillas de Río Tuerto',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[26][26040]=array(
    'nombre' =>'Cañas',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[26][26041]=array(
    'nombre' =>'Cárdenas',
    'habitantes' =>'162',
    'deuda'=>'130'
    );
$deuda[26][26042]=array(
    'nombre' =>'Casalarreina',
    'habitantes' =>'1190',
    'deuda'=>'692'
    );
$deuda[26][26043]=array(
    'nombre' =>'Castañares de Rioja',
    'habitantes' =>'439',
    'deuda'=>'0'
    );
$deuda[26][26044]=array(
    'nombre' =>'Castroviejo',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[26][26045]=array(
    'nombre' =>'Cellorigo',
    'habitantes' =>'12',
    'deuda'=>'0'
    );
$deuda[26][26046]=array(
    'nombre' =>'Cenicero',
    'habitantes' =>'2028',
    'deuda'=>'1493'
    );
$deuda[26][26047]=array(
    'nombre' =>'Cervera del Río Alhama',
    'habitantes' =>'2427',
    'deuda'=>'2012'
    );
$deuda[26][26048]=array(
    'nombre' =>'Cidamón',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[26][26049]=array(
    'nombre' =>'Cihuri',
    'habitantes' =>'226',
    'deuda'=>'0'
    );
$deuda[26][26050]=array(
    'nombre' =>'Cirueña',
    'habitantes' =>'130',
    'deuda'=>'0'
    );
$deuda[26][26051]=array(
    'nombre' =>'Clavijo',
    'habitantes' =>'307',
    'deuda'=>'57'
    );
$deuda[26][26052]=array(
    'nombre' =>'Cordovín',
    'habitantes' =>'167',
    'deuda'=>'0'
    );
$deuda[26][26053]=array(
    'nombre' =>'Corera',
    'habitantes' =>'253',
    'deuda'=>'0'
    );
$deuda[26][26054]=array(
    'nombre' =>'Cornago',
    'habitantes' =>'355',
    'deuda'=>'41'
    );
$deuda[26][26055]=array(
    'nombre' =>'Corporales',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[26][26056]=array(
    'nombre' =>'Cuzcurrita de Río Tirón',
    'habitantes' =>'507',
    'deuda'=>'585'
    );
$deuda[26][26057]=array(
    'nombre' =>'Daroca de Rioja',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[26][26058]=array(
    'nombre' =>'Enciso',
    'habitantes' =>'166',
    'deuda'=>'0'
    );
$deuda[26][26059]=array(
    'nombre' =>'Entrena',
    'habitantes' =>'1489',
    'deuda'=>'907'
    );
$deuda[26][26060]=array(
    'nombre' =>'Estollo',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[26][26061]=array(
    'nombre' =>'Ezcaray',
    'habitantes' =>'2050',
    'deuda'=>'165'
    );
$deuda[26][26062]=array(
    'nombre' =>'Foncea',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[26][26063]=array(
    'nombre' =>'Fonzaleche',
    'habitantes' =>'146',
    'deuda'=>'40'
    );
$deuda[26][26064]=array(
    'nombre' =>'Fuenmayor',
    'habitantes' =>'3146',
    'deuda'=>'1205'
    );
$deuda[26][26065]=array(
    'nombre' =>'Galbárruli',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[26][26066]=array(
    'nombre' =>'Galilea',
    'habitantes' =>'363',
    'deuda'=>'22'
    );
$deuda[26][26067]=array(
    'nombre' =>'Gallinero de Cameros',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[26][26068]=array(
    'nombre' =>'Gimileo',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[26][26069]=array(
    'nombre' =>'Grañón',
    'habitantes' =>'279',
    'deuda'=>'0'
    );
$deuda[26][26070]=array(
    'nombre' =>'Grávalos',
    'habitantes' =>'208',
    'deuda'=>'15'
    );
$deuda[26][26071]=array(
    'nombre' =>'Haro',
    'habitantes' =>'11414',
    'deuda'=>'2330'
    );
$deuda[26][26072]=array(
    'nombre' =>'Herce',
    'habitantes' =>'340',
    'deuda'=>'302'
    );
$deuda[26][26073]=array(
    'nombre' =>'Herramélluri',
    'habitantes' =>'109',
    'deuda'=>'40'
    );
$deuda[26][26074]=array(
    'nombre' =>'Hervías',
    'habitantes' =>'118',
    'deuda'=>'0'
    );
$deuda[26][26075]=array(
    'nombre' =>'Hormilla',
    'habitantes' =>'455',
    'deuda'=>'0'
    );
$deuda[26][26076]=array(
    'nombre' =>'Hormilleja',
    'habitantes' =>'150',
    'deuda'=>'0'
    );
$deuda[26][26077]=array(
    'nombre' =>'Hornillos de Cameros',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[26][26078]=array(
    'nombre' =>'Hornos de Moncalvillo',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[26][26079]=array(
    'nombre' =>'Huércanos',
    'habitantes' =>'852',
    'deuda'=>'193'
    );
$deuda[26][26080]=array(
    'nombre' =>'Igea',
    'habitantes' =>'612',
    'deuda'=>'0'
    );
$deuda[26][26081]=array(
    'nombre' =>'Jalón de Cameros',
    'habitantes' =>'18',
    'deuda'=>'11'
    );
$deuda[26][26082]=array(
    'nombre' =>'Laguna de Cameros',
    'habitantes' =>'128',
    'deuda'=>'199'
    );
$deuda[26][26083]=array(
    'nombre' =>'Lagunilla del Jubera',
    'habitantes' =>'327',
    'deuda'=>'0'
    );
$deuda[26][26084]=array(
    'nombre' =>'Lardero',
    'habitantes' =>'9448',
    'deuda'=>'3083'
    );
$deuda[26][26086]=array(
    'nombre' =>'Ledesma de la Cogolla',
    'habitantes' =>'18',
    'deuda'=>'0'
    );
$deuda[26][26087]=array(
    'nombre' =>'Leiva',
    'habitantes' =>'277',
    'deuda'=>'29'
    );
$deuda[26][26088]=array(
    'nombre' =>'Leza de Río Leza',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[26][26089]=array(
    'nombre' =>'Logroño',
    'habitantes' =>'151344',
    'deuda'=>'32421'
    );
$deuda[26][26091]=array(
    'nombre' =>'Lumbreras',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[26][26092]=array(
    'nombre' =>'Manjarrés',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[26][26093]=array(
    'nombre' =>'Mansilla de la Sierra',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[26][26094]=array(
    'nombre' =>'Manzanares de Rioja',
    'habitantes' =>'83',
    'deuda'=>'0'
    );
$deuda[26][26095]=array(
    'nombre' =>'Matute',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[26][26096]=array(
    'nombre' =>'Medrano',
    'habitantes' =>'316',
    'deuda'=>'0'
    );
$deuda[26][26098]=array(
    'nombre' =>'Munilla',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[26][26099]=array(
    'nombre' =>'Murillo de Río Leza',
    'habitantes' =>'1708',
    'deuda'=>'2417'
    );
$deuda[26][26100]=array(
    'nombre' =>'Muro de Aguas',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[26][26101]=array(
    'nombre' =>'Muro en Cameros',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[26][26102]=array(
    'nombre' =>'Nájera',
    'habitantes' =>'8185',
    'deuda'=>'2900'
    );
$deuda[26][26103]=array(
    'nombre' =>'Nalda',
    'habitantes' =>'952',
    'deuda'=>'0'
    );
$deuda[26][26104]=array(
    'nombre' =>'Navajún',
    'habitantes' =>'16',
    'deuda'=>'0'
    );
$deuda[26][26105]=array(
    'nombre' =>'Navarrete',
    'habitantes' =>'2928',
    'deuda'=>'0'
    );
$deuda[26][26106]=array(
    'nombre' =>'Nestares',
    'habitantes' =>'97',
    'deuda'=>'0'
    );
$deuda[26][26107]=array(
    'nombre' =>'Nieva de Cameros',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[26][26108]=array(
    'nombre' =>'Ocón',
    'habitantes' =>'282',
    'deuda'=>'0'
    );
$deuda[26][26109]=array(
    'nombre' =>'Ochánduri',
    'habitantes' =>'98',
    'deuda'=>'422'
    );
$deuda[26][26110]=array(
    'nombre' =>'Ojacastro',
    'habitantes' =>'187',
    'deuda'=>'0'
    );
$deuda[26][26111]=array(
    'nombre' =>'Ollauri',
    'habitantes' =>'281',
    'deuda'=>'405'
    );
$deuda[26][26112]=array(
    'nombre' =>'Ortigosa de Cameros',
    'habitantes' =>'260',
    'deuda'=>'379'
    );
$deuda[26][26113]=array(
    'nombre' =>'Pazuengos',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[26][26114]=array(
    'nombre' =>'Pedroso',
    'habitantes' =>'81',
    'deuda'=>'0'
    );
$deuda[26][26115]=array(
    'nombre' =>'Pinillos',
    'habitantes' =>'15',
    'deuda'=>'0'
    );
$deuda[26][26117]=array(
    'nombre' =>'Pradejón',
    'habitantes' =>'3976',
    'deuda'=>'2445'
    );
$deuda[26][26118]=array(
    'nombre' =>'Pradillo',
    'habitantes' =>'61',
    'deuda'=>'37'
    );
$deuda[26][26119]=array(
    'nombre' =>'Préjano',
    'habitantes' =>'244',
    'deuda'=>'68'
    );
$deuda[26][26120]=array(
    'nombre' =>'Quel',
    'habitantes' =>'1996',
    'deuda'=>'291'
    );
$deuda[26][26121]=array(
    'nombre' =>'Rabanera',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[26][26122]=array(
    'nombre' =>'Rasillo de Cameros, El',
    'habitantes' =>'151',
    'deuda'=>'0'
    );
$deuda[26][26123]=array(
    'nombre' =>'Redal, El',
    'habitantes' =>'143',
    'deuda'=>'60'
    );
$deuda[26][26124]=array(
    'nombre' =>'Ribafrecha',
    'habitantes' =>'1021',
    'deuda'=>'739'
    );
$deuda[26][26125]=array(
    'nombre' =>'Rincón de Soto',
    'habitantes' =>'3729',
    'deuda'=>'641'
    );
$deuda[26][26126]=array(
    'nombre' =>'Robres del Castillo',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[26][26127]=array(
    'nombre' =>'Rodezno',
    'habitantes' =>'274',
    'deuda'=>'60'
    );
$deuda[26][26128]=array(
    'nombre' =>'Sajazarra',
    'habitantes' =>'125',
    'deuda'=>'0'
    );
$deuda[26][26129]=array(
    'nombre' =>'San Asensio',
    'habitantes' =>'1183',
    'deuda'=>'329'
    );
$deuda[26][26130]=array(
    'nombre' =>'San Millán de la Cogolla',
    'habitantes' =>'244',
    'deuda'=>'0'
    );
$deuda[26][26131]=array(
    'nombre' =>'San Millán de Yécora',
    'habitantes' =>'35',
    'deuda'=>'9'
    );
$deuda[26][26132]=array(
    'nombre' =>'San Román de Cameros',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[26][26134]=array(
    'nombre' =>'Santa Coloma',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[26][26135]=array(
    'nombre' =>'Santa Engracia del Jubera',
    'habitantes' =>'181',
    'deuda'=>'28'
    );
$deuda[26][26136]=array(
    'nombre' =>'Santa Eulalia Bajera',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[26][26138]=array(
    'nombre' =>'Santo Domingo de la Calzada',
    'habitantes' =>'6401',
    'deuda'=>'885'
    );
$deuda[26][26139]=array(
    'nombre' =>'San Torcuato',
    'habitantes' =>'62',
    'deuda'=>'457'
    );
$deuda[26][26140]=array(
    'nombre' =>'Santurde de Rioja',
    'habitantes' =>'293',
    'deuda'=>'0'
    );
$deuda[26][26141]=array(
    'nombre' =>'Santurdejo',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[26][26142]=array(
    'nombre' =>'San Vicente de la Sonsierra',
    'habitantes' =>'1007',
    'deuda'=>'213'
    );
$deuda[26][26143]=array(
    'nombre' =>'Sojuela',
    'habitantes' =>'282',
    'deuda'=>'372'
    );
$deuda[26][26144]=array(
    'nombre' =>'Sorzano',
    'habitantes' =>'239',
    'deuda'=>'47'
    );
$deuda[26][26145]=array(
    'nombre' =>'Sotés',
    'habitantes' =>'292',
    'deuda'=>'0'
    );
$deuda[26][26146]=array(
    'nombre' =>'Soto en Cameros',
    'habitantes' =>'112',
    'deuda'=>'58'
    );
$deuda[26][26147]=array(
    'nombre' =>'Terroba',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[26][26148]=array(
    'nombre' =>'Tirgo',
    'habitantes' =>'211',
    'deuda'=>'177'
    );
$deuda[26][26149]=array(
    'nombre' =>'Tobía',
    'habitantes' =>'61',
    'deuda'=>'17'
    );
$deuda[26][26150]=array(
    'nombre' =>'Tormantos',
    'habitantes' =>'137',
    'deuda'=>'80'
    );
$deuda[26][26151]=array(
    'nombre' =>'Torrecilla en Cameros',
    'habitantes' =>'519',
    'deuda'=>'140'
    );
$deuda[26][26152]=array(
    'nombre' =>'Torrecilla sobre Alesanco',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[26][26153]=array(
    'nombre' =>'Torre en Cameros',
    'habitantes' =>'12',
    'deuda'=>'0'
    );
$deuda[26][26154]=array(
    'nombre' =>'Torremontalbo',
    'habitantes' =>'14',
    'deuda'=>'1'
    );
$deuda[26][26155]=array(
    'nombre' =>'Treviana',
    'habitantes' =>'179',
    'deuda'=>'102'
    );
$deuda[26][26157]=array(
    'nombre' =>'Tricio',
    'habitantes' =>'390',
    'deuda'=>'166'
    );
$deuda[26][26158]=array(
    'nombre' =>'Tudelilla',
    'habitantes' =>'376',
    'deuda'=>'215'
    );
$deuda[26][26160]=array(
    'nombre' =>'Uruñuela',
    'habitantes' =>'958',
    'deuda'=>'335'
    );
$deuda[26][26161]=array(
    'nombre' =>'Valdemadera',
    'habitantes' =>'8',
    'deuda'=>'0'
    );
$deuda[26][26162]=array(
    'nombre' =>'Valgañón',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[26][26163]=array(
    'nombre' =>'Ventosa',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[26][26164]=array(
    'nombre' =>'Ventrosa',
    'habitantes' =>'67',
    'deuda'=>'177'
    );
$deuda[26][26165]=array(
    'nombre' =>'Viguera',
    'habitantes' =>'437',
    'deuda'=>'0'
    );
$deuda[26][26166]=array(
    'nombre' =>'Villalba de Rioja',
    'habitantes' =>'125',
    'deuda'=>'194'
    );
$deuda[26][26167]=array(
    'nombre' =>'Villalobar de Rioja',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[26][26168]=array(
    'nombre' =>'Villamediana de Iregua',
    'habitantes' =>'7643',
    'deuda'=>'811'
    );
$deuda[26][26169]=array(
    'nombre' =>'Villanueva de Cameros',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[26][26170]=array(
    'nombre' =>'Villar de Arnedo, El',
    'habitantes' =>'629',
    'deuda'=>'0'
    );
$deuda[26][26171]=array(
    'nombre' =>'Villar de Torre',
    'habitantes' =>'188',
    'deuda'=>'15'
    );
$deuda[26][26172]=array(
    'nombre' =>'Villarejo',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[26][26173]=array(
    'nombre' =>'Villarroya',
    'habitantes' =>'8',
    'deuda'=>'0'
    );
$deuda[26][26174]=array(
    'nombre' =>'Villarta-Quintana',
    'habitantes' =>'155',
    'deuda'=>'72'
    );
$deuda[26][26175]=array(
    'nombre' =>'Villavelayo',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[26][26176]=array(
    'nombre' =>'Villaverde de Rioja',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[26][26177]=array(
    'nombre' =>'Villoslada de Cameros',
    'habitantes' =>'354',
    'deuda'=>'26'
    );
$deuda[26][26178]=array(
    'nombre' =>'Viniegra de Abajo',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[26][26179]=array(
    'nombre' =>'Viniegra de Arriba',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[26][26180]=array(
    'nombre' =>'Zarratón',
    'habitantes' =>'268',
    'deuda'=>'231'
    );
$deuda[26][26181]=array(
    'nombre' =>'Zarzosa',
    'habitantes' =>'15',
    'deuda'=>'24'
    );
$deuda[26][26183]=array(
    'nombre' =>'Zorraquín',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[27][27001]=array(
    'nombre' =>'Abadín',
    'habitantes' =>'2612',
    'deuda'=>'0'
    );
$deuda[27][27002]=array(
    'nombre' =>'Alfoz',
    'habitantes' =>'1846',
    'deuda'=>'245'
    );
$deuda[27][27003]=array(
    'nombre' =>'Antas de Ulla',
    'habitantes' =>'2109',
    'deuda'=>'1318'
    );
$deuda[27][27004]=array(
    'nombre' =>'Baleira',
    'habitantes' =>'1380',
    'deuda'=>'0'
    );
$deuda[27][27005]=array(
    'nombre' =>'Barreiros',
    'habitantes' =>'3021',
    'deuda'=>'2430'
    );
$deuda[27][27006]=array(
    'nombre' =>'Becerreá',
    'habitantes' =>'2987',
    'deuda'=>'0'
    );
$deuda[27][27007]=array(
    'nombre' =>'Begonte',
    'habitantes' =>'3160',
    'deuda'=>'420'
    );
$deuda[27][27008]=array(
    'nombre' =>'Bóveda',
    'habitantes' =>'1545',
    'deuda'=>'8'
    );
$deuda[27][27009]=array(
    'nombre' =>'Carballedo',
    'habitantes' =>'2351',
    'deuda'=>'252'
    );
$deuda[27][27010]=array(
    'nombre' =>'Castro de Rei',
    'habitantes' =>'5153',
    'deuda'=>'1034'
    );
$deuda[27][27011]=array(
    'nombre' =>'Castroverde',
    'habitantes' =>'2802',
    'deuda'=>'0'
    );
$deuda[27][27012]=array(
    'nombre' =>'Cervantes',
    'habitantes' =>'1487',
    'deuda'=>'0'
    );
$deuda[27][27013]=array(
    'nombre' =>'Cervo',
    'habitantes' =>'4336',
    'deuda'=>'894'
    );
$deuda[27][27014]=array(
    'nombre' =>'Corgo, O',
    'habitantes' =>'3646',
    'deuda'=>'0'
    );
$deuda[27][27015]=array(
    'nombre' =>'Cospeito',
    'habitantes' =>'4827',
    'deuda'=>'2501'
    );
$deuda[27][27016]=array(
    'nombre' =>'Chantada',
    'habitantes' =>'8493',
    'deuda'=>'3361'
    );
$deuda[27][27017]=array(
    'nombre' =>'Folgoso do Courel',
    'habitantes' =>'1089',
    'deuda'=>'0'
    );
$deuda[27][27018]=array(
    'nombre' =>'Fonsagrada, A',
    'habitantes' =>'3838',
    'deuda'=>'337'
    );
$deuda[27][27019]=array(
    'nombre' =>'Foz',
    'habitantes' =>'9891',
    'deuda'=>'0'
    );
$deuda[27][27020]=array(
    'nombre' =>'Friol',
    'habitantes' =>'3942',
    'deuda'=>'0'
    );
$deuda[27][27021]=array(
    'nombre' =>'Xermade',
    'habitantes' =>'1985',
    'deuda'=>'108'
    );
$deuda[27][27022]=array(
    'nombre' =>'Guitiriz',
    'habitantes' =>'5520',
    'deuda'=>'0'
    );
$deuda[27][27023]=array(
    'nombre' =>'Guntín',
    'habitantes' =>'2881',
    'deuda'=>'0'
    );
$deuda[27][27024]=array(
    'nombre' =>'Incio, O',
    'habitantes' =>'1777',
    'deuda'=>'142'
    );
$deuda[27][27025]=array(
    'nombre' =>'Xove',
    'habitantes' =>'3424',
    'deuda'=>'0'
    );
$deuda[27][27026]=array(
    'nombre' =>'Láncara',
    'habitantes' =>'2764',
    'deuda'=>'201'
    );
$deuda[27][27027]=array(
    'nombre' =>'Lourenzá',
    'habitantes' =>'2301',
    'deuda'=>'526'
    );
$deuda[27][27028]=array(
    'nombre' =>'Lugo',
    'habitantes' =>'98134',
    'deuda'=>'16233'
    );
$deuda[27][27029]=array(
    'nombre' =>'Meira',
    'habitantes' =>'1749',
    'deuda'=>'448'
    );
$deuda[27][27030]=array(
    'nombre' =>'Mondoñedo',
    'habitantes' =>'3876',
    'deuda'=>'1271'
    );
$deuda[27][27031]=array(
    'nombre' =>'Monforte de Lemos',
    'habitantes' =>'19061',
    'deuda'=>'1438'
    );
$deuda[27][27032]=array(
    'nombre' =>'Monterroso',
    'habitantes' =>'3778',
    'deuda'=>'641'
    );
$deuda[27][27033]=array(
    'nombre' =>'Muras',
    'habitantes' =>'684',
    'deuda'=>'0'
    );
$deuda[27][27034]=array(
    'nombre' =>'Navia de Suarna',
    'habitantes' =>'1211',
    'deuda'=>'0'
    );
$deuda[27][27035]=array(
    'nombre' =>'Negueira de Muñiz',
    'habitantes' =>'214',
    'deuda'=>'0'
    );
$deuda[27][27037]=array(
    'nombre' =>'Nogais, As',
    'habitantes' =>'1191',
    'deuda'=>'105'
    );
$deuda[27][27038]=array(
    'nombre' =>'Ourol',
    'habitantes' =>'1055',
    'deuda'=>'0'
    );
$deuda[27][27039]=array(
    'nombre' =>'Outeiro de Rei',
    'habitantes' =>'5068',
    'deuda'=>'651'
    );
$deuda[27][27040]=array(
    'nombre' =>'Palas de Rei',
    'habitantes' =>'3588',
    'deuda'=>'1439'
    );
$deuda[27][27041]=array(
    'nombre' =>'Pantón',
    'habitantes' =>'2674',
    'deuda'=>'78'
    );
$deuda[27][27042]=array(
    'nombre' =>'Paradela',
    'habitantes' =>'1934',
    'deuda'=>'183'
    );
$deuda[27][27043]=array(
    'nombre' =>'Páramo, O',
    'habitantes' =>'1474',
    'deuda'=>'42'
    );
$deuda[27][27044]=array(
    'nombre' =>'Pastoriza, A',
    'habitantes' =>'3274',
    'deuda'=>'738'
    );
$deuda[27][27045]=array(
    'nombre' =>'Pedrafita do Cebreiro',
    'habitantes' =>'1119',
    'deuda'=>'0'
    );
$deuda[27][27046]=array(
    'nombre' =>'Pol',
    'habitantes' =>'1732',
    'deuda'=>'569'
    );
$deuda[27][27047]=array(
    'nombre' =>'Pobra do Brollón, A',
    'habitantes' =>'1794',
    'deuda'=>'709'
    );
$deuda[27][27048]=array(
    'nombre' =>'Pontenova, A',
    'habitantes' =>'2470',
    'deuda'=>'549'
    );
$deuda[27][27049]=array(
    'nombre' =>'Portomarín',
    'habitantes' =>'1557',
    'deuda'=>'0'
    );
$deuda[27][27050]=array(
    'nombre' =>'Quiroga',
    'habitantes' =>'3424',
    'deuda'=>'1128'
    );
$deuda[27][27051]=array(
    'nombre' =>'Ribadeo',
    'habitantes' =>'9929',
    'deuda'=>'2037'
    );
$deuda[27][27052]=array(
    'nombre' =>'Ribas de Sil',
    'habitantes' =>'1001',
    'deuda'=>'13'
    );
$deuda[27][27053]=array(
    'nombre' =>'Ribeira de Piquín',
    'habitantes' =>'580',
    'deuda'=>'0'
    );
$deuda[27][27054]=array(
    'nombre' =>'Riotorto',
    'habitantes' =>'1364',
    'deuda'=>'558'
    );
$deuda[27][27055]=array(
    'nombre' =>'Samos',
    'habitantes' =>'1425',
    'deuda'=>'0'
    );
$deuda[27][27056]=array(
    'nombre' =>'Rábade',
    'habitantes' =>'1549',
    'deuda'=>'186'
    );
$deuda[27][27057]=array(
    'nombre' =>'Sarria',
    'habitantes' =>'13393',
    'deuda'=>'1813'
    );
$deuda[27][27058]=array(
    'nombre' =>'Saviñao, O',
    'habitantes' =>'4056',
    'deuda'=>'0'
    );
$deuda[27][27059]=array(
    'nombre' =>'Sober',
    'habitantes' =>'2400',
    'deuda'=>'253'
    );
$deuda[27][27060]=array(
    'nombre' =>'Taboada',
    'habitantes' =>'3032',
    'deuda'=>'936'
    );
$deuda[27][27061]=array(
    'nombre' =>'Trabada',
    'habitantes' =>'1178',
    'deuda'=>'301'
    );
$deuda[27][27062]=array(
    'nombre' =>'Triacastela',
    'habitantes' =>'699',
    'deuda'=>'0'
    );
$deuda[27][27063]=array(
    'nombre' =>'Valadouro, O',
    'habitantes' =>'2048',
    'deuda'=>'0'
    );
$deuda[27][27064]=array(
    'nombre' =>'Vicedo, O',
    'habitantes' =>'1820',
    'deuda'=>'0'
    );
$deuda[27][27065]=array(
    'nombre' =>'Vilalba',
    'habitantes' =>'14645',
    'deuda'=>'2648'
    );
$deuda[27][27066]=array(
    'nombre' =>'Viveiro',
    'habitantes' =>'15735',
    'deuda'=>'12905'
    );
$deuda[27][27901]=array(
    'nombre' =>'Baralla',
    'habitantes' =>'2724',
    'deuda'=>'0'
    );
$deuda[27][27902]=array(
    'nombre' =>'Burela',
    'habitantes' =>'9580',
    'deuda'=>'1413'
    );
$deuda[28][28001]=array(
    'nombre' =>'Acebeda, La',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[28][28002]=array(
    'nombre' =>'Ajalvir',
    'habitantes' =>'4343',
    'deuda'=>'1715'
    );
$deuda[28][28003]=array(
    'nombre' =>'Alameda del Valle',
    'habitantes' =>'217',
    'deuda'=>'0'
    );
$deuda[28][28004]=array(
    'nombre' =>'Álamo, El',
    'habitantes' =>'8965',
    'deuda'=>'11251'
    );
$deuda[28][28005]=array(
    'nombre' =>'Alcalá de Henares',
    'habitantes' =>'198750',
    'deuda'=>'156132'
    );
$deuda[28][28006]=array(
    'nombre' =>'Alcobendas',
    'habitantes' =>'113055',
    'deuda'=>'11194'
    );
$deuda[28][28007]=array(
    'nombre' =>'Alcorcón',
    'habitantes' =>'167136',
    'deuda'=>'364891'
    );
$deuda[28][28008]=array(
    'nombre' =>'Aldea del Fresno',
    'habitantes' =>'2535',
    'deuda'=>'327'
    );
$deuda[28][28009]=array(
    'nombre' =>'Algete',
    'habitantes' =>'20148',
    'deuda'=>'33676'
    );
$deuda[28][28010]=array(
    'nombre' =>'Alpedrete',
    'habitantes' =>'14248',
    'deuda'=>'0'
    );
$deuda[28][28011]=array(
    'nombre' =>'Ambite',
    'habitantes' =>'618',
    'deuda'=>'430'
    );
$deuda[28][28012]=array(
    'nombre' =>'Anchuelo',
    'habitantes' =>'1200',
    'deuda'=>'267'
    );
$deuda[28][28013]=array(
    'nombre' =>'Aranjuez',
    'habitantes' =>'58168',
    'deuda'=>'82515'
    );
$deuda[28][28014]=array(
    'nombre' =>'Arganda del Rey',
    'habitantes' =>'54533',
    'deuda'=>'103908'
    );
$deuda[28][28015]=array(
    'nombre' =>'Arroyomolinos',
    'habitantes' =>'26846',
    'deuda'=>'1661'
    );
$deuda[28][28016]=array(
    'nombre' =>'Atazar, El',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[28][28017]=array(
    'nombre' =>'Batres',
    'habitantes' =>'1568',
    'deuda'=>'536'
    );
$deuda[28][28018]=array(
    'nombre' =>'Becerril de la Sierra',
    'habitantes' =>'5396',
    'deuda'=>'55'
    );
$deuda[28][28019]=array(
    'nombre' =>'Belmonte de Tajo',
    'habitantes' =>'1625',
    'deuda'=>'17'
    );
$deuda[28][28020]=array(
    'nombre' =>'Berzosa del Lozoya',
    'habitantes' =>'202',
    'deuda'=>'175'
    );
$deuda[28][28021]=array(
    'nombre' =>'Berrueco, El',
    'habitantes' =>'618',
    'deuda'=>'0'
    );
$deuda[28][28022]=array(
    'nombre' =>'Boadilla del Monte',
    'habitantes' =>'48775',
    'deuda'=>'0'
    );
$deuda[28][28023]=array(
    'nombre' =>'Boalo, El',
    'habitantes' =>'7157',
    'deuda'=>'2523'
    );
$deuda[28][28024]=array(
    'nombre' =>'Braojos',
    'habitantes' =>'203',
    'deuda'=>'0'
    );
$deuda[28][28025]=array(
    'nombre' =>'Brea de Tajo',
    'habitantes' =>'560',
    'deuda'=>'0'
    );
$deuda[28][28026]=array(
    'nombre' =>'Brunete',
    'habitantes' =>'10398',
    'deuda'=>'6605'
    );
$deuda[28][28027]=array(
    'nombre' =>'Buitrago del Lozoya',
    'habitantes' =>'1865',
    'deuda'=>'322'
    );
$deuda[28][28028]=array(
    'nombre' =>'Bustarviejo',
    'habitantes' =>'2367',
    'deuda'=>'1115'
    );
$deuda[28][28029]=array(
    'nombre' =>'Cabanillas de la Sierra',
    'habitantes' =>'733',
    'deuda'=>'0'
    );
$deuda[28][28030]=array(
    'nombre' =>'Cabrera, La',
    'habitantes' =>'2574',
    'deuda'=>'1'
    );
$deuda[28][28031]=array(
    'nombre' =>'Cadalso de los Vidrios',
    'habitantes' =>'2767',
    'deuda'=>'302'
    );
$deuda[28][28032]=array(
    'nombre' =>'Camarma de Esteruelas',
    'habitantes' =>'7134',
    'deuda'=>'1976'
    );
$deuda[28][28033]=array(
    'nombre' =>'Campo Real',
    'habitantes' =>'5854',
    'deuda'=>'2232'
    );
$deuda[28][28034]=array(
    'nombre' =>'Canencia',
    'habitantes' =>'464',
    'deuda'=>'0'
    );
$deuda[28][28035]=array(
    'nombre' =>'Carabaña',
    'habitantes' =>'2017',
    'deuda'=>'1043'
    );
$deuda[28][28036]=array(
    'nombre' =>'Casarrubuelos',
    'habitantes' =>'3548',
    'deuda'=>'6988'
    );
$deuda[28][28037]=array(
    'nombre' =>'Cenicientos',
    'habitantes' =>'2035',
    'deuda'=>'4565'
    );
$deuda[28][28038]=array(
    'nombre' =>'Cercedilla',
    'habitantes' =>'6781',
    'deuda'=>'0'
    );
$deuda[28][28039]=array(
    'nombre' =>'Cervera de Buitrago',
    'habitantes' =>'164',
    'deuda'=>'0'
    );
$deuda[28][28040]=array(
    'nombre' =>'Ciempozuelos',
    'habitantes' =>'23696',
    'deuda'=>'18034'
    );
$deuda[28][28041]=array(
    'nombre' =>'Cobeña',
    'habitantes' =>'6983',
    'deuda'=>'1087'
    );
$deuda[28][28042]=array(
    'nombre' =>'Colmenar del Arroyo',
    'habitantes' =>'1611',
    'deuda'=>'47'
    );
$deuda[28][28043]=array(
    'nombre' =>'Colmenar de Oreja',
    'habitantes' =>'8071',
    'deuda'=>'8991'
    );
$deuda[28][28044]=array(
    'nombre' =>'Colmenarejo',
    'habitantes' =>'8934',
    'deuda'=>'2165'
    );
$deuda[28][28045]=array(
    'nombre' =>'Colmenar Viejo',
    'habitantes' =>'47601',
    'deuda'=>'0'
    );
$deuda[28][28046]=array(
    'nombre' =>'Collado Mediano',
    'habitantes' =>'6599',
    'deuda'=>'2499'
    );
$deuda[28][28047]=array(
    'nombre' =>'Collado Villalba',
    'habitantes' =>'62056',
    'deuda'=>'64819'
    );
$deuda[28][28048]=array(
    'nombre' =>'Corpa',
    'habitantes' =>'669',
    'deuda'=>'0'
    );
$deuda[28][28049]=array(
    'nombre' =>'Coslada',
    'habitantes' =>'86919',
    'deuda'=>'31922'
    );
$deuda[28][28050]=array(
    'nombre' =>'Cubas de la Sagra',
    'habitantes' =>'5875',
    'deuda'=>'1368'
    );
$deuda[28][28051]=array(
    'nombre' =>'Chapinería',
    'habitantes' =>'2158',
    'deuda'=>'568'
    );
$deuda[28][28052]=array(
    'nombre' =>'Chinchón',
    'habitantes' =>'5436',
    'deuda'=>'3119'
    );
$deuda[28][28053]=array(
    'nombre' =>'Daganzo de Arriba',
    'habitantes' =>'9919',
    'deuda'=>'7777'
    );
$deuda[28][28054]=array(
    'nombre' =>'Escorial, El',
    'habitantes' =>'15342',
    'deuda'=>'0'
    );
$deuda[28][28055]=array(
    'nombre' =>'Estremera',
    'habitantes' =>'1350',
    'deuda'=>'575'
    );
$deuda[28][28056]=array(
    'nombre' =>'Fresnedillas de la Oliva',
    'habitantes' =>'1554',
    'deuda'=>'1226'
    );
$deuda[28][28057]=array(
    'nombre' =>'Fresno de Torote',
    'habitantes' =>'2041',
    'deuda'=>'764'
    );
$deuda[28][28058]=array(
    'nombre' =>'Fuenlabrada',
    'habitantes' =>'195180',
    'deuda'=>'28814'
    );
$deuda[28][28059]=array(
    'nombre' =>'Fuente el Saz de Jarama',
    'habitantes' =>'6440',
    'deuda'=>'7733'
    );
$deuda[28][28060]=array(
    'nombre' =>'Fuentidueña de Tajo',
    'habitantes' =>'1954',
    'deuda'=>'0'
    );
$deuda[28][28061]=array(
    'nombre' =>'Galapagar',
    'habitantes' =>'32294',
    'deuda'=>'24116'
    );
$deuda[28][28062]=array(
    'nombre' =>'Garganta de los Montes',
    'habitantes' =>'367',
    'deuda'=>'360'
    );
$deuda[28][28063]=array(
    'nombre' =>'Gargantilla del Lozoya y Pinilla de Buitrago',
    'habitantes' =>'351',
    'deuda'=>'0'
    );
$deuda[28][28064]=array(
    'nombre' =>'Gascones',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[28][28065]=array(
    'nombre' =>'Getafe',
    'habitantes' =>'174921',
    'deuda'=>'32152'
    );
$deuda[28][28066]=array(
    'nombre' =>'Griñón',
    'habitantes' =>'9918',
    'deuda'=>'7521'
    );
$deuda[28][28067]=array(
    'nombre' =>'Guadalix de la Sierra',
    'habitantes' =>'6039',
    'deuda'=>'169'
    );
$deuda[28][28068]=array(
    'nombre' =>'Guadarrama',
    'habitantes' =>'15538',
    'deuda'=>'1367'
    );
$deuda[28][28069]=array(
    'nombre' =>'Hiruela, La',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[28][28070]=array(
    'nombre' =>'Horcajo de la Sierra-Aoslos',
    'habitantes' =>'159',
    'deuda'=>'24'
    );
$deuda[28][28071]=array(
    'nombre' =>'Horcajuelo de la Sierra',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[28][28072]=array(
    'nombre' =>'Hoyo de Manzanares',
    'habitantes' =>'7880',
    'deuda'=>'138'
    );
$deuda[28][28073]=array(
    'nombre' =>'Humanes de Madrid',
    'habitantes' =>'19413',
    'deuda'=>'21383'
    );
$deuda[28][28074]=array(
    'nombre' =>'Leganés',
    'habitantes' =>'186907',
    'deuda'=>'47827'
    );
$deuda[28][28075]=array(
    'nombre' =>'Loeches',
    'habitantes' =>'8212',
    'deuda'=>'5389'
    );
$deuda[28][28076]=array(
    'nombre' =>'Lozoya',
    'habitantes' =>'594',
    'deuda'=>'0'
    );
$deuda[28][28078]=array(
    'nombre' =>'Madarcos',
    'habitantes' =>'45',
    'deuda'=>'29'
    );
$deuda[28][28079]=array(
    'nombre' =>'Madrid',
    'habitantes' =>'3141991',
    'deuda'=>'4767315'
    );
$deuda[28][28080]=array(
    'nombre' =>'Majadahonda',
    'habitantes' =>'70800',
    'deuda'=>'13162'
    );
$deuda[28][28082]=array(
    'nombre' =>'Manzanares el Real',
    'habitantes' =>'8309',
    'deuda'=>'1192'
    );
$deuda[28][28083]=array(
    'nombre' =>'Meco',
    'habitantes' =>'13269',
    'deuda'=>'1014'
    );
$deuda[28][28084]=array(
    'nombre' =>'Mejorada del Campo',
    'habitantes' =>'22902',
    'deuda'=>'7452'
    );
$deuda[28][28085]=array(
    'nombre' =>'Miraflores de la Sierra',
    'habitantes' =>'5807',
    'deuda'=>'3449'
    );
$deuda[28][28086]=array(
    'nombre' =>'Molar, El',
    'habitantes' =>'8036',
    'deuda'=>'1070'
    );
$deuda[28][28087]=array(
    'nombre' =>'Molinos, Los',
    'habitantes' =>'4349',
    'deuda'=>'950'
    );
$deuda[28][28088]=array(
    'nombre' =>'Montejo de la Sierra',
    'habitantes' =>'374',
    'deuda'=>'0'
    );
$deuda[28][28089]=array(
    'nombre' =>'Moraleja de Enmedio',
    'habitantes' =>'5046',
    'deuda'=>'21762'
    );
$deuda[28][28090]=array(
    'nombre' =>'Moralzarzal',
    'habitantes' =>'12213',
    'deuda'=>'2907'
    );
$deuda[28][28091]=array(
    'nombre' =>'Morata de Tajuña',
    'habitantes' =>'7453',
    'deuda'=>'605'
    );
$deuda[28][28092]=array(
    'nombre' =>'Móstoles',
    'habitantes' =>'206263',
    'deuda'=>'132827'
    );
$deuda[28][28093]=array(
    'nombre' =>'Navacerrada',
    'habitantes' =>'2855',
    'deuda'=>'0'
    );
$deuda[28][28094]=array(
    'nombre' =>'Navalafuente',
    'habitantes' =>'1201',
    'deuda'=>'39'
    );
$deuda[28][28095]=array(
    'nombre' =>'Navalagamella',
    'habitantes' =>'2462',
    'deuda'=>'160'
    );
$deuda[28][28096]=array(
    'nombre' =>'Navalcarnero',
    'habitantes' =>'26672',
    'deuda'=>'91626'
    );
$deuda[28][28097]=array(
    'nombre' =>'Navarredonda y San Mamés',
    'habitantes' =>'136',
    'deuda'=>'0'
    );
$deuda[28][28099]=array(
    'nombre' =>'Navas del Rey',
    'habitantes' =>'2628',
    'deuda'=>'0'
    );
$deuda[28][28100]=array(
    'nombre' =>'Nuevo Baztán',
    'habitantes' =>'6098',
    'deuda'=>'240'
    );
$deuda[28][28101]=array(
    'nombre' =>'Olmeda de las Fuentes',
    'habitantes' =>'338',
    'deuda'=>'127'
    );
$deuda[28][28102]=array(
    'nombre' =>'Orusco de Tajuña',
    'habitantes' =>'1260',
    'deuda'=>'869'
    );
$deuda[28][28104]=array(
    'nombre' =>'Paracuellos de Jarama',
    'habitantes' =>'22293',
    'deuda'=>'0'
    );
$deuda[28][28106]=array(
    'nombre' =>'Parla',
    'habitantes' =>'125056',
    'deuda'=>'383805'
    );
$deuda[28][28107]=array(
    'nombre' =>'Patones',
    'habitantes' =>'524',
    'deuda'=>'0'
    );
$deuda[28][28108]=array(
    'nombre' =>'Pedrezuela',
    'habitantes' =>'5271',
    'deuda'=>'658'
    );
$deuda[28][28109]=array(
    'nombre' =>'Pelayos de la Presa',
    'habitantes' =>'2455',
    'deuda'=>'0'
    );
$deuda[28][28110]=array(
    'nombre' =>'Perales de Tajuña',
    'habitantes' =>'2871',
    'deuda'=>'185'
    );
$deuda[28][28111]=array(
    'nombre' =>'Pezuela de las Torres',
    'habitantes' =>'783',
    'deuda'=>'411'
    );
$deuda[28][28112]=array(
    'nombre' =>'Pinilla del Valle',
    'habitantes' =>'200',
    'deuda'=>'0'
    );
$deuda[28][28113]=array(
    'nombre' =>'Pinto',
    'habitantes' =>'48660',
    'deuda'=>'21802'
    );
$deuda[28][28114]=array(
    'nombre' =>'Piñuécar-Gandullas',
    'habitantes' =>'175',
    'deuda'=>'0'
    );
$deuda[28][28115]=array(
    'nombre' =>'Pozuelo de Alarcón',
    'habitantes' =>'84558',
    'deuda'=>'10499'
    );
$deuda[28][28116]=array(
    'nombre' =>'Pozuelo del Rey',
    'habitantes' =>'1071',
    'deuda'=>'592'
    );
$deuda[28][28117]=array(
    'nombre' =>'Prádena del Rincón',
    'habitantes' =>'122',
    'deuda'=>'0'
    );
$deuda[28][28118]=array(
    'nombre' =>'Puebla de la Sierra',
    'habitantes' =>'73',
    'deuda'=>'541'
    );
$deuda[28][28119]=array(
    'nombre' =>'Quijorna',
    'habitantes' =>'3196',
    'deuda'=>'4038'
    );
$deuda[28][28120]=array(
    'nombre' =>'Rascafría',
    'habitantes' =>'1739',
    'deuda'=>'153'
    );
$deuda[28][28121]=array(
    'nombre' =>'Redueña',
    'habitantes' =>'259',
    'deuda'=>'30'
    );
$deuda[28][28122]=array(
    'nombre' =>'Ribatejada',
    'habitantes' =>'707',
    'deuda'=>'0'
    );
$deuda[28][28123]=array(
    'nombre' =>'Rivas-Vaciamadrid',
    'habitantes' =>'81473',
    'deuda'=>'116007'
    );
$deuda[28][28124]=array(
    'nombre' =>'Robledillo de la Jara',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[28][28125]=array(
    'nombre' =>'Robledo de Chavela',
    'habitantes' =>'3955',
    'deuda'=>'0'
    );
$deuda[28][28126]=array(
    'nombre' =>'Robregordo',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[28][28127]=array(
    'nombre' =>'Rozas de Madrid, Las',
    'habitantes' =>'93520',
    'deuda'=>'32490'
    );
$deuda[28][28128]=array(
    'nombre' =>'Rozas de Puerto Real',
    'habitantes' =>'523',
    'deuda'=>'306'
    );
$deuda[28][28129]=array(
    'nombre' =>'San Agustín del Guadalix',
    'habitantes' =>'12982',
    'deuda'=>'0'
    );
$deuda[28][28130]=array(
    'nombre' =>'San Fernando de Henares',
    'habitantes' =>'40188',
    'deuda'=>'22215'
    );
$deuda[28][28131]=array(
    'nombre' =>'San Lorenzo de El Escorial',
    'habitantes' =>'18191',
    'deuda'=>'4360'
    );
$deuda[28][28132]=array(
    'nombre' =>'San Martín de la Vega',
    'habitantes' =>'18835',
    'deuda'=>'13632'
    );
$deuda[28][28133]=array(
    'nombre' =>'San Martín de Valdeiglesias',
    'habitantes' =>'8463',
    'deuda'=>'7169'
    );
$deuda[28][28134]=array(
    'nombre' =>'San Sebastián de los Reyes',
    'habitantes' =>'84944',
    'deuda'=>'11536'
    );
$deuda[28][28135]=array(
    'nombre' =>'Santa María de la Alameda',
    'habitantes' =>'1199',
    'deuda'=>'322'
    );
$deuda[28][28136]=array(
    'nombre' =>'Santorcaz',
    'habitantes' =>'849',
    'deuda'=>'0'
    );
$deuda[28][28137]=array(
    'nombre' =>'Santos de la Humosa, Los',
    'habitantes' =>'2389',
    'deuda'=>'1295'
    );
$deuda[28][28138]=array(
    'nombre' =>'Serna del Monte, La',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[28][28140]=array(
    'nombre' =>'Serranillos del Valle',
    'habitantes' =>'3994',
    'deuda'=>'4277'
    );
$deuda[28][28141]=array(
    'nombre' =>'Sevilla la Nueva',
    'habitantes' =>'8902',
    'deuda'=>'2762'
    );
$deuda[28][28143]=array(
    'nombre' =>'Somosierra',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[28][28144]=array(
    'nombre' =>'Soto del Real',
    'habitantes' =>'8456',
    'deuda'=>'2342'
    );
$deuda[28][28145]=array(
    'nombre' =>'Talamanca de Jarama',
    'habitantes' =>'3371',
    'deuda'=>'71'
    );
$deuda[28][28146]=array(
    'nombre' =>'Tielmes',
    'habitantes' =>'2585',
    'deuda'=>'0'
    );
$deuda[28][28147]=array(
    'nombre' =>'Titulcia',
    'habitantes' =>'1234',
    'deuda'=>'798'
    );
$deuda[28][28148]=array(
    'nombre' =>'Torrejón de Ardoz',
    'habitantes' =>'126934',
    'deuda'=>'143143'
    );
$deuda[28][28149]=array(
    'nombre' =>'Torrejón de la Calzada',
    'habitantes' =>'7901',
    'deuda'=>'15215'
    );
$deuda[28][28150]=array(
    'nombre' =>'Torrejón de Velasco',
    'habitantes' =>'4224',
    'deuda'=>'8991'
    );
$deuda[28][28151]=array(
    'nombre' =>'Torrelaguna',
    'habitantes' =>'4788',
    'deuda'=>'1814'
    );
$deuda[28][28152]=array(
    'nombre' =>'Torrelodones',
    'habitantes' =>'23117',
    'deuda'=>'6574'
    );
$deuda[28][28153]=array(
    'nombre' =>'Torremocha de Jarama',
    'habitantes' =>'948',
    'deuda'=>'1815'
    );
$deuda[28][28154]=array(
    'nombre' =>'Torres de la Alameda',
    'habitantes' =>'7877',
    'deuda'=>'3008'
    );
$deuda[28][28155]=array(
    'nombre' =>'Valdaracete',
    'habitantes' =>'639',
    'deuda'=>'348'
    );
$deuda[28][28156]=array(
    'nombre' =>'Valdeavero',
    'habitantes' =>'1451',
    'deuda'=>'0'
    );
$deuda[28][28157]=array(
    'nombre' =>'Valdelaguna',
    'habitantes' =>'837',
    'deuda'=>'0'
    );
$deuda[28][28158]=array(
    'nombre' =>'Valdemanco',
    'habitantes' =>'922',
    'deuda'=>'249'
    );
$deuda[28][28159]=array(
    'nombre' =>'Valdemaqueda',
    'habitantes' =>'786',
    'deuda'=>'232'
    );
$deuda[28][28160]=array(
    'nombre' =>'Valdemorillo',
    'habitantes' =>'12173',
    'deuda'=>'5220'
    );
$deuda[28][28161]=array(
    'nombre' =>'Valdemoro',
    'habitantes' =>'72854',
    'deuda'=>'89962'
    );
$deuda[28][28162]=array(
    'nombre' =>'Valdeolmos-Alalpardo',
    'habitantes' =>'3785',
    'deuda'=>'0'
    );
$deuda[28][28163]=array(
    'nombre' =>'Valdepiélagos',
    'habitantes' =>'566',
    'deuda'=>'0'
    );
$deuda[28][28164]=array(
    'nombre' =>'Valdetorres de Jarama',
    'habitantes' =>'4234',
    'deuda'=>'0'
    );
$deuda[28][28165]=array(
    'nombre' =>'Valdilecha',
    'habitantes' =>'2838',
    'deuda'=>'0'
    );
$deuda[28][28166]=array(
    'nombre' =>'Valverde de Alcalá',
    'habitantes' =>'441',
    'deuda'=>'173'
    );
$deuda[28][28167]=array(
    'nombre' =>'Velilla de San Antonio',
    'habitantes' =>'12382',
    'deuda'=>'3464'
    );
$deuda[28][28168]=array(
    'nombre' =>'Vellón, El',
    'habitantes' =>'1803',
    'deuda'=>'219'
    );
$deuda[28][28169]=array(
    'nombre' =>'Venturada',
    'habitantes' =>'1991',
    'deuda'=>'1248'
    );
$deuda[28][28170]=array(
    'nombre' =>'Villaconejos',
    'habitantes' =>'3405',
    'deuda'=>'3829'
    );
$deuda[28][28171]=array(
    'nombre' =>'Villa del Prado',
    'habitantes' =>'6414',
    'deuda'=>'0'
    );
$deuda[28][28172]=array(
    'nombre' =>'Villalbilla',
    'habitantes' =>'12351',
    'deuda'=>'4852'
    );
$deuda[28][28173]=array(
    'nombre' =>'Villamanrique de Tajo',
    'habitantes' =>'720',
    'deuda'=>'159'
    );
$deuda[28][28174]=array(
    'nombre' =>'Villamanta',
    'habitantes' =>'2525',
    'deuda'=>'804'
    );
$deuda[28][28175]=array(
    'nombre' =>'Villamantilla',
    'habitantes' =>'1292',
    'deuda'=>'759'
    );
$deuda[28][28176]=array(
    'nombre' =>'Villanueva de la Cañada',
    'habitantes' =>'19250',
    'deuda'=>'0'
    );
$deuda[28][28177]=array(
    'nombre' =>'Villanueva del Pardillo',
    'habitantes' =>'16797',
    'deuda'=>'6688'
    );
$deuda[28][28178]=array(
    'nombre' =>'Villanueva de Perales',
    'habitantes' =>'1441',
    'deuda'=>'2543'
    );
$deuda[28][28179]=array(
    'nombre' =>'Villar del Olmo',
    'habitantes' =>'2058',
    'deuda'=>'64'
    );
$deuda[28][28180]=array(
    'nombre' =>'Villarejo de Salvanés',
    'habitantes' =>'7288',
    'deuda'=>'97'
    );
$deuda[28][28181]=array(
    'nombre' =>'Villaviciosa de Odón',
    'habitantes' =>'27075',
    'deuda'=>'14566'
    );
$deuda[28][28182]=array(
    'nombre' =>'Villavieja del Lozoya',
    'habitantes' =>'280',
    'deuda'=>'0'
    );
$deuda[28][28183]=array(
    'nombre' =>'Zarzalejo',
    'habitantes' =>'1546',
    'deuda'=>'0'
    );
$deuda[28][28901]=array(
    'nombre' =>'Lozoyuela-Navas-Sieteiglesias',
    'habitantes' =>'1203',
    'deuda'=>'0'
    );
$deuda[28][28902]=array(
    'nombre' =>'Puentes Viejas',
    'habitantes' =>'644',
    'deuda'=>'0'
    );
$deuda[28][28903]=array(
    'nombre' =>'Tres Cantos',
    'habitantes' =>'43309',
    'deuda'=>'7831'
    );
$deuda[29][29001]=array(
    'nombre' =>'Alameda',
    'habitantes' =>'5403',
    'deuda'=>'636'
    );
$deuda[29][29002]=array(
    'nombre' =>'Alcaucín',
    'habitantes' =>'2375',
    'deuda'=>'0'
    );
$deuda[29][29003]=array(
    'nombre' =>'Alfarnate',
    'habitantes' =>'1159',
    'deuda'=>'0'
    );
$deuda[29][29004]=array(
    'nombre' =>'Alfarnatejo',
    'habitantes' =>'463',
    'deuda'=>'163'
    );
$deuda[29][29005]=array(
    'nombre' =>'Algarrobo',
    'habitantes' =>'6013',
    'deuda'=>'2602'
    );
$deuda[29][29006]=array(
    'nombre' =>'Algatocín',
    'habitantes' =>'834',
    'deuda'=>'250'
    );
$deuda[29][29007]=array(
    'nombre' =>'Alhaurín de la Torre',
    'habitantes' =>'38523',
    'deuda'=>'6543'
    );
$deuda[29][29008]=array(
    'nombre' =>'Alhaurín el Grande',
    'habitantes' =>'24338',
    'deuda'=>'11311'
    );
$deuda[29][29009]=array(
    'nombre' =>'Almáchar',
    'habitantes' =>'1867',
    'deuda'=>'264'
    );
$deuda[29][29010]=array(
    'nombre' =>'Almargen',
    'habitantes' =>'2081',
    'deuda'=>'0'
    );
$deuda[29][29011]=array(
    'nombre' =>'Almogía',
    'habitantes' =>'3826',
    'deuda'=>'1223'
    );
$deuda[29][29012]=array(
    'nombre' =>'Álora',
    'habitantes' =>'13003',
    'deuda'=>'3490'
    );
$deuda[29][29013]=array(
    'nombre' =>'Alozaina',
    'habitantes' =>'2082',
    'deuda'=>'5285'
    );
$deuda[29][29014]=array(
    'nombre' =>'Alpandeire',
    'habitantes' =>'257',
    'deuda'=>'99'
    );
$deuda[29][29015]=array(
    'nombre' =>'Antequera',
    'habitantes' =>'41141',
    'deuda'=>'20410'
    );
$deuda[29][29016]=array(
    'nombre' =>'Árchez',
    'habitantes' =>'436',
    'deuda'=>'0'
    );
$deuda[29][29017]=array(
    'nombre' =>'Archidona',
    'habitantes' =>'8490',
    'deuda'=>'1995'
    );
$deuda[29][29018]=array(
    'nombre' =>'Ardales',
    'habitantes' =>'2527',
    'deuda'=>'1528'
    );
$deuda[29][29019]=array(
    'nombre' =>'Arenas',
    'habitantes' =>'1219',
    'deuda'=>'88'
    );
$deuda[29][29020]=array(
    'nombre' =>'Arriate',
    'habitantes' =>'4157',
    'deuda'=>'879'
    );
$deuda[29][29021]=array(
    'nombre' =>'Atajate',
    'habitantes' =>'158',
    'deuda'=>'215'
    );
$deuda[29][29022]=array(
    'nombre' =>'Benadalid',
    'habitantes' =>'253',
    'deuda'=>'0'
    );
$deuda[29][29023]=array(
    'nombre' =>'Benahavís',
    'habitantes' =>'7105',
    'deuda'=>'0'
    );
$deuda[29][29024]=array(
    'nombre' =>'Benalauría',
    'habitantes' =>'470',
    'deuda'=>'141'
    );
$deuda[29][29025]=array(
    'nombre' =>'Benalmádena',
    'habitantes' =>'66598',
    'deuda'=>'115586'
    );
$deuda[29][29026]=array(
    'nombre' =>'Benamargosa',
    'habitantes' =>'1568',
    'deuda'=>'1042'
    );
$deuda[29][29027]=array(
    'nombre' =>'Benamocarra',
    'habitantes' =>'3047',
    'deuda'=>'3101'
    );
$deuda[29][29028]=array(
    'nombre' =>'Benaoján',
    'habitantes' =>'1513',
    'deuda'=>'70'
    );
$deuda[29][29029]=array(
    'nombre' =>'Benarrabá',
    'habitantes' =>'521',
    'deuda'=>'208'
    );
$deuda[29][29030]=array(
    'nombre' =>'Borge, El',
    'habitantes' =>'963',
    'deuda'=>'1027'
    );
$deuda[29][29031]=array(
    'nombre' =>'Burgo, El',
    'habitantes' =>'1929',
    'deuda'=>'393'
    );
$deuda[29][29032]=array(
    'nombre' =>'Campillos',
    'habitantes' =>'8524',
    'deuda'=>'2763'
    );
$deuda[29][29033]=array(
    'nombre' =>'Canillas de Aceituno',
    'habitantes' =>'1737',
    'deuda'=>'688'
    );
$deuda[29][29034]=array(
    'nombre' =>'Canillas de Albaida',
    'habitantes' =>'842',
    'deuda'=>'820'
    );
$deuda[29][29035]=array(
    'nombre' =>'Cañete la Real',
    'habitantes' =>'1738',
    'deuda'=>'2134'
    );
$deuda[29][29036]=array(
    'nombre' =>'Carratraca',
    'habitantes' =>'775',
    'deuda'=>'53'
    );
$deuda[29][29037]=array(
    'nombre' =>'Cartajima',
    'habitantes' =>'247',
    'deuda'=>'0'
    );
$deuda[29][29038]=array(
    'nombre' =>'Cártama',
    'habitantes' =>'24592',
    'deuda'=>'264'
    );
$deuda[29][29039]=array(
    'nombre' =>'Casabermeja',
    'habitantes' =>'3418',
    'deuda'=>'656'
    );
$deuda[29][29040]=array(
    'nombre' =>'Casarabonela',
    'habitantes' =>'2599',
    'deuda'=>'2454'
    );
$deuda[29][29041]=array(
    'nombre' =>'Casares',
    'habitantes' =>'5954',
    'deuda'=>'2054'
    );
$deuda[29][29042]=array(
    'nombre' =>'Coín',
    'habitantes' =>'21561',
    'deuda'=>'18595'
    );
$deuda[29][29043]=array(
    'nombre' =>'Colmenar',
    'habitantes' =>'3444',
    'deuda'=>'2100'
    );
$deuda[29][29044]=array(
    'nombre' =>'Comares',
    'habitantes' =>'1385',
    'deuda'=>'0'
    );
$deuda[29][29045]=array(
    'nombre' =>'Cómpeta',
    'habitantes' =>'3503',
    'deuda'=>'860'
    );
$deuda[29][29046]=array(
    'nombre' =>'Cortes de la Frontera',
    'habitantes' =>'3304',
    'deuda'=>'4275'
    );
$deuda[29][29047]=array(
    'nombre' =>'Cuevas Bajas',
    'habitantes' =>'1431',
    'deuda'=>'61'
    );
$deuda[29][29048]=array(
    'nombre' =>'Cuevas del Becerro',
    'habitantes' =>'1643',
    'deuda'=>'572'
    );
$deuda[29][29049]=array(
    'nombre' =>'Cuevas de San Marcos',
    'habitantes' =>'3884',
    'deuda'=>'810'
    );
$deuda[29][29050]=array(
    'nombre' =>'Cútar',
    'habitantes' =>'605',
    'deuda'=>'85'
    );
$deuda[29][29051]=array(
    'nombre' =>'Estepona',
    'habitantes' =>'67080',
    'deuda'=>'77628'
    );
$deuda[29][29052]=array(
    'nombre' =>'Faraján',
    'habitantes' =>'265',
    'deuda'=>'0'
    );
$deuda[29][29053]=array(
    'nombre' =>'Frigiliana',
    'habitantes' =>'3065',
    'deuda'=>'935'
    );
$deuda[29][29054]=array(
    'nombre' =>'Fuengirola',
    'habitantes' =>'77525',
    'deuda'=>'38013'
    );
$deuda[29][29055]=array(
    'nombre' =>'Fuente de Piedra',
    'habitantes' =>'2613',
    'deuda'=>'1290'
    );
$deuda[29][29056]=array(
    'nombre' =>'Gaucín',
    'habitantes' =>'1670',
    'deuda'=>'1889'
    );
$deuda[29][29057]=array(
    'nombre' =>'Genalguacil',
    'habitantes' =>'456',
    'deuda'=>'0'
    );
$deuda[29][29058]=array(
    'nombre' =>'Guaro',
    'habitantes' =>'2060',
    'deuda'=>'3961'
    );
$deuda[29][29059]=array(
    'nombre' =>'Humilladero',
    'habitantes' =>'3364',
    'deuda'=>'1763'
    );
$deuda[29][29060]=array(
    'nombre' =>'Igualeja',
    'habitantes' =>'816',
    'deuda'=>'0'
    );
$deuda[29][29061]=array(
    'nombre' =>'Istán',
    'habitantes' =>'1388',
    'deuda'=>'564'
    );
$deuda[29][29062]=array(
    'nombre' =>'Iznate',
    'habitantes' =>'899',
    'deuda'=>'230'
    );
$deuda[29][29063]=array(
    'nombre' =>'Jimera de Líbar',
    'habitantes' =>'415',
    'deuda'=>'0'
    );
$deuda[29][29064]=array(
    'nombre' =>'Jubrique',
    'habitantes' =>'638',
    'deuda'=>'0'
    );
$deuda[29][29065]=array(
    'nombre' =>'Júzcar',
    'habitantes' =>'238',
    'deuda'=>'85'
    );
$deuda[29][29066]=array(
    'nombre' =>'Macharaviaya',
    'habitantes' =>'477',
    'deuda'=>'66'
    );
$deuda[29][29067]=array(
    'nombre' =>'Málaga',
    'habitantes' =>'569130',
    'deuda'=>'595100'
    );
$deuda[29][29068]=array(
    'nombre' =>'Manilva',
    'habitantes' =>'14587',
    'deuda'=>'4352'
    );
$deuda[29][29069]=array(
    'nombre' =>'Marbella',
    'habitantes' =>'139537',
    'deuda'=>'24018'
    );
$deuda[29][29070]=array(
    'nombre' =>'Mijas',
    'habitantes' =>'79483',
    'deuda'=>'7240'
    );
$deuda[29][29071]=array(
    'nombre' =>'Moclinejo',
    'habitantes' =>'1255',
    'deuda'=>'1356'
    );
$deuda[29][29072]=array(
    'nombre' =>'Mollina',
    'habitantes' =>'4901',
    'deuda'=>'1479'
    );
$deuda[29][29073]=array(
    'nombre' =>'Monda',
    'habitantes' =>'2382',
    'deuda'=>'228'
    );
$deuda[29][29074]=array(
    'nombre' =>'Montejaque',
    'habitantes' =>'984',
    'deuda'=>'580'
    );
$deuda[29][29075]=array(
    'nombre' =>'Nerja',
    'habitantes' =>'21185',
    'deuda'=>'5351'
    );
$deuda[29][29076]=array(
    'nombre' =>'Ojén',
    'habitantes' =>'3353',
    'deuda'=>'0'
    );
$deuda[29][29077]=array(
    'nombre' =>'Parauta',
    'habitantes' =>'249',
    'deuda'=>'0'
    );
$deuda[29][29079]=array(
    'nombre' =>'Periana',
    'habitantes' =>'3231',
    'deuda'=>'162'
    );
$deuda[29][29080]=array(
    'nombre' =>'Pizarra',
    'habitantes' =>'9148',
    'deuda'=>'4149'
    );
$deuda[29][29081]=array(
    'nombre' =>'Pujerra',
    'habitantes' =>'294',
    'deuda'=>'15'
    );
$deuda[29][29082]=array(
    'nombre' =>'Rincón de la Victoria',
    'habitantes' =>'43135',
    'deuda'=>'57949'
    );
$deuda[29][29083]=array(
    'nombre' =>'Riogordo',
    'habitantes' =>'2936',
    'deuda'=>'755'
    );
$deuda[29][29084]=array(
    'nombre' =>'Ronda',
    'habitantes' =>'35676',
    'deuda'=>'16418'
    );
$deuda[29][29085]=array(
    'nombre' =>'Salares',
    'habitantes' =>'207',
    'deuda'=>'0'
    );
$deuda[29][29086]=array(
    'nombre' =>'Sayalonga',
    'habitantes' =>'1505',
    'deuda'=>'137'
    );
$deuda[29][29087]=array(
    'nombre' =>'Sedella',
    'habitantes' =>'692',
    'deuda'=>'0'
    );
$deuda[29][29088]=array(
    'nombre' =>'Sierra de Yeguas',
    'habitantes' =>'3398',
    'deuda'=>'1628'
    );
$deuda[29][29089]=array(
    'nombre' =>'Teba',
    'habitantes' =>'3973',
    'deuda'=>'184'
    );
$deuda[29][29090]=array(
    'nombre' =>'Tolox',
    'habitantes' =>'2186',
    'deuda'=>'1970'
    );
$deuda[29][29091]=array(
    'nombre' =>'Torrox',
    'habitantes' =>'15117',
    'deuda'=>'4794'
    );
$deuda[29][29092]=array(
    'nombre' =>'Totalán',
    'habitantes' =>'710',
    'deuda'=>'214'
    );
$deuda[29][29093]=array(
    'nombre' =>'Valle de Abdalajís',
    'habitantes' =>'2615',
    'deuda'=>'1219'
    );
$deuda[29][29094]=array(
    'nombre' =>'Vélez-Málaga',
    'habitantes' =>'78166',
    'deuda'=>'65773'
    );
$deuda[29][29095]=array(
    'nombre' =>'Villanueva de Algaidas',
    'habitantes' =>'4337',
    'deuda'=>'3175'
    );
$deuda[29][29096]=array(
    'nombre' =>'Villanueva del Rosario',
    'habitantes' =>'3508',
    'deuda'=>'2318'
    );
$deuda[29][29097]=array(
    'nombre' =>'Villanueva del Trabuco',
    'habitantes' =>'5246',
    'deuda'=>'0'
    );
$deuda[29][29098]=array(
    'nombre' =>'Villanueva de Tapia',
    'habitantes' =>'1544',
    'deuda'=>'464'
    );
$deuda[29][29099]=array(
    'nombre' =>'Viñuela',
    'habitantes' =>'2013',
    'deuda'=>'926'
    );
$deuda[29][29100]=array(
    'nombre' =>'Yunquera',
    'habitantes' =>'2983',
    'deuda'=>'0'
    );
$deuda[29][29901]=array(
    'nombre' =>'Torremolinos',
    'habitantes' =>'67492',
    'deuda'=>'57984'
    );
$deuda[29][29902]=array(
    'nombre' =>'Villanueva de la Concepción',
    'habitantes' =>'3341',
    'deuda'=>'1288'
    );
$deuda[30][30001]=array(
    'nombre' =>'Abanilla',
    'habitantes' =>'6347',
    'deuda'=>'4991'
    );
$deuda[30][30002]=array(
    'nombre' =>'Abarán',
    'habitantes' =>'13179',
    'deuda'=>'9650'
    );
$deuda[30][30003]=array(
    'nombre' =>'Águilas',
    'habitantes' =>'34772',
    'deuda'=>'663'
    );
$deuda[30][30004]=array(
    'nombre' =>'Albudeite',
    'habitantes' =>'1374',
    'deuda'=>'225'
    );
$deuda[30][30005]=array(
    'nombre' =>'Alcantarilla',
    'habitantes' =>'41021',
    'deuda'=>'49308'
    );
$deuda[30][30006]=array(
    'nombre' =>'Aledo',
    'habitantes' =>'984',
    'deuda'=>'3288'
    );
$deuda[30][30007]=array(
    'nombre' =>'Alguazas',
    'habitantes' =>'9544',
    'deuda'=>'4487'
    );
$deuda[30][30008]=array(
    'nombre' =>'Alhama de Murcia',
    'habitantes' =>'21351',
    'deuda'=>'796'
    );
$deuda[30][30009]=array(
    'nombre' =>'Archena',
    'habitantes' =>'18559',
    'deuda'=>'19186'
    );
$deuda[30][30010]=array(
    'nombre' =>'Beniel',
    'habitantes' =>'11096',
    'deuda'=>'12321'
    );
$deuda[30][30011]=array(
    'nombre' =>'Blanca',
    'habitantes' =>'6521',
    'deuda'=>'4063'
    );
$deuda[30][30012]=array(
    'nombre' =>'Bullas',
    'habitantes' =>'11753',
    'deuda'=>'7872'
    );
$deuda[30][30013]=array(
    'nombre' =>'Calasparra',
    'habitantes' =>'10423',
    'deuda'=>'9036'
    );
$deuda[30][30014]=array(
    'nombre' =>'Campos del Río',
    'habitantes' =>'2083',
    'deuda'=>'1794'
    );
$deuda[30][30015]=array(
    'nombre' =>'Caravaca de la Cruz',
    'habitantes' =>'25851',
    'deuda'=>'31631'
    );
$deuda[30][30016]=array(
    'nombre' =>'Cartagena',
    'habitantes' =>'216301',
    'deuda'=>'131002'
    );
$deuda[30][30017]=array(
    'nombre' =>'Cehegín',
    'habitantes' =>'15794',
    'deuda'=>'11208'
    );
$deuda[30][30018]=array(
    'nombre' =>'Ceutí',
    'habitantes' =>'11227',
    'deuda'=>'25472'
    );
$deuda[30][30019]=array(
    'nombre' =>'Cieza',
    'habitantes' =>'35115',
    'deuda'=>'8596'
    );
$deuda[30][30020]=array(
    'nombre' =>'Fortuna',
    'habitantes' =>'9814',
    'deuda'=>'773'
    );
$deuda[30][30021]=array(
    'nombre' =>'Fuente Álamo de Murcia',
    'habitantes' =>'16284',
    'deuda'=>'17779'
    );
$deuda[30][30022]=array(
    'nombre' =>'Jumilla',
    'habitantes' =>'25484',
    'deuda'=>'5273'
    );
$deuda[30][30023]=array(
    'nombre' =>'Librilla',
    'habitantes' =>'5016',
    'deuda'=>'3451'
    );
$deuda[30][30024]=array(
    'nombre' =>'Lorca',
    'habitantes' =>'91714',
    'deuda'=>'61096'
    );
$deuda[30][30025]=array(
    'nombre' =>'Lorquí',
    'habitantes' =>'7020',
    'deuda'=>'4576'
    );
$deuda[30][30026]=array(
    'nombre' =>'Mazarrón',
    'habitantes' =>'32150',
    'deuda'=>'4795'
    );
$deuda[30][30027]=array(
    'nombre' =>'Molina de Segura',
    'habitantes' =>'69331',
    'deuda'=>'18449'
    );
$deuda[30][30028]=array(
    'nombre' =>'Moratalla',
    'habitantes' =>'8189',
    'deuda'=>'9801'
    );
$deuda[30][30029]=array(
    'nombre' =>'Mula',
    'habitantes' =>'16805',
    'deuda'=>'9848'
    );
$deuda[30][30030]=array(
    'nombre' =>'Murcia',
    'habitantes' =>'439889',
    'deuda'=>'166054'
    );
$deuda[30][30031]=array(
    'nombre' =>'Ojós',
    'habitantes' =>'504',
    'deuda'=>'600'
    );
$deuda[30][30032]=array(
    'nombre' =>'Pliego',
    'habitantes' =>'3973',
    'deuda'=>'2200'
    );
$deuda[30][30033]=array(
    'nombre' =>'Puerto Lumbreras',
    'habitantes' =>'14694',
    'deuda'=>'12348'
    );
$deuda[30][30034]=array(
    'nombre' =>'Ricote',
    'habitantes' =>'1369',
    'deuda'=>'599'
    );
$deuda[30][30035]=array(
    'nombre' =>'San Javier',
    'habitantes' =>'31915',
    'deuda'=>'10889'
    );
$deuda[30][30036]=array(
    'nombre' =>'San Pedro del Pinatar',
    'habitantes' =>'24339',
    'deuda'=>'29271'
    );
$deuda[30][30037]=array(
    'nombre' =>'Torre-Pacheco',
    'habitantes' =>'34469',
    'deuda'=>'27642'
    );
$deuda[30][30038]=array(
    'nombre' =>'Torres de Cotillas, Las',
    'habitantes' =>'21399',
    'deuda'=>'5813'
    );
$deuda[30][30039]=array(
    'nombre' =>'Totana',
    'habitantes' =>'30916',
    'deuda'=>'74467'
    );
$deuda[30][30040]=array(
    'nombre' =>'Ulea',
    'habitantes' =>'906',
    'deuda'=>'0'
    );
$deuda[30][30041]=array(
    'nombre' =>'Unión, La',
    'habitantes' =>'19572',
    'deuda'=>'11721'
    );
$deuda[30][30042]=array(
    'nombre' =>'Villanueva del Río Segura',
    'habitantes' =>'2524',
    'deuda'=>'8172'
    );
$deuda[30][30043]=array(
    'nombre' =>'Yecla',
    'habitantes' =>'34100',
    'deuda'=>'17167'
    );
$deuda[30][30901]=array(
    'nombre' =>'Santomera',
    'habitantes' =>'16012',
    'deuda'=>'7892'
    );
$deuda[30][30902]=array(
    'nombre' =>'Alcázares, Los',
    'habitantes' =>'15605',
    'deuda'=>'10277'
    );
$deuda[31][31001]=array(
    'nombre' =>'Abáigar',
    'habitantes' =>'97',
    'deuda'=>'0'
    );
$deuda[31][31002]=array(
    'nombre' =>'Abárzuza/Abartzuza',
    'habitantes' =>'556',
    'deuda'=>'50'
    );
$deuda[31][31003]=array(
    'nombre' =>'Abaurregaina/Abaurrea Alta',
    'habitantes' =>'127',
    'deuda'=>'161'
    );
$deuda[31][31004]=array(
    'nombre' =>'Abaurrepea/Abaurrea Baja',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[31][31005]=array(
    'nombre' =>'Aberin',
    'habitantes' =>'376',
    'deuda'=>'0'
    );
$deuda[31][31006]=array(
    'nombre' =>'Ablitas',
    'habitantes' =>'2520',
    'deuda'=>'1235'
    );
$deuda[31][31007]=array(
    'nombre' =>'Adiós',
    'habitantes' =>'170',
    'deuda'=>'136'
    );
$deuda[31][31008]=array(
    'nombre' =>'Aguilar de Codés',
    'habitantes' =>'83',
    'deuda'=>'0'
    );
$deuda[31][31009]=array(
    'nombre' =>'Aibar/Oibar',
    'habitantes' =>'832',
    'deuda'=>'777'
    );
$deuda[31][31010]=array(
    'nombre' =>'Altsasu/Alsasua',
    'habitantes' =>'7490',
    'deuda'=>'1997'
    );
$deuda[31][31011]=array(
    'nombre' =>'Allín/Allin',
    'habitantes' =>'848',
    'deuda'=>'0'
    );
$deuda[31][31012]=array(
    'nombre' =>'Allo',
    'habitantes' =>'1012',
    'deuda'=>'0'
    );
$deuda[31][31013]=array(
    'nombre' =>'Améscoa Baja',
    'habitantes' =>'774',
    'deuda'=>'0'
    );
$deuda[31][31014]=array(
    'nombre' =>'Ancín/Antzin',
    'habitantes' =>'376',
    'deuda'=>'195'
    );
$deuda[31][31015]=array(
    'nombre' =>'Andosilla',
    'habitantes' =>'2753',
    'deuda'=>'1936'
    );
$deuda[31][31016]=array(
    'nombre' =>'Ansoáin/Antsoain',
    'habitantes' =>'10830',
    'deuda'=>'994'
    );
$deuda[31][31017]=array(
    'nombre' =>'Anue',
    'habitantes' =>'464',
    'deuda'=>'269'
    );
$deuda[31][31018]=array(
    'nombre' =>'Añorbe',
    'habitantes' =>'539',
    'deuda'=>'721'
    );
$deuda[31][31019]=array(
    'nombre' =>'Aoiz/Agoitz',
    'habitantes' =>'2601',
    'deuda'=>'1064'
    );
$deuda[31][31020]=array(
    'nombre' =>'Araitz',
    'habitantes' =>'522',
    'deuda'=>'0'
    );
$deuda[31][31021]=array(
    'nombre' =>'Aranarache/Aranaratxe',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[31][31022]=array(
    'nombre' =>'Arantza',
    'habitantes' =>'638',
    'deuda'=>'339'
    );
$deuda[31][31023]=array(
    'nombre' =>'Aranguren',
    'habitantes' =>'9398',
    'deuda'=>'0'
    );
$deuda[31][31024]=array(
    'nombre' =>'Arano',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[31][31025]=array(
    'nombre' =>'Arakil',
    'habitantes' =>'955',
    'deuda'=>'0'
    );
$deuda[31][31026]=array(
    'nombre' =>'Aras',
    'habitantes' =>'172',
    'deuda'=>'378'
    );
$deuda[31][31027]=array(
    'nombre' =>'Arbizu',
    'habitantes' =>'1111',
    'deuda'=>'1035'
    );
$deuda[31][31028]=array(
    'nombre' =>'Arce/Artzi',
    'habitantes' =>'264',
    'deuda'=>'0'
    );
$deuda[31][31029]=array(
    'nombre' =>'Arcos, Los',
    'habitantes' =>'1136',
    'deuda'=>'1158'
    );
$deuda[31][31030]=array(
    'nombre' =>'Arellano',
    'habitantes' =>'164',
    'deuda'=>'0'
    );
$deuda[31][31031]=array(
    'nombre' =>'Areso',
    'habitantes' =>'260',
    'deuda'=>'229'
    );
$deuda[31][31032]=array(
    'nombre' =>'Arguedas',
    'habitantes' =>'2295',
    'deuda'=>'320'
    );
$deuda[31][31033]=array(
    'nombre' =>'Aria',
    'habitantes' =>'52',
    'deuda'=>'30'
    );
$deuda[31][31034]=array(
    'nombre' =>'Aribe',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[31][31035]=array(
    'nombre' =>'Armañanzas',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[31][31036]=array(
    'nombre' =>'Arróniz',
    'habitantes' =>'1068',
    'deuda'=>'233'
    );
$deuda[31][31037]=array(
    'nombre' =>'Arruazu',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[31][31038]=array(
    'nombre' =>'Artajona',
    'habitantes' =>'1680',
    'deuda'=>'206'
    );
$deuda[31][31039]=array(
    'nombre' =>'Artazu',
    'habitantes' =>'112',
    'deuda'=>'98'
    );
$deuda[31][31040]=array(
    'nombre' =>'Atez/Atetz',
    'habitantes' =>'232',
    'deuda'=>'100'
    );
$deuda[31][31041]=array(
    'nombre' =>'Ayegui/Aiegi',
    'habitantes' =>'2217',
    'deuda'=>'923'
    );
$deuda[31][31042]=array(
    'nombre' =>'Azagra',
    'habitantes' =>'3804',
    'deuda'=>'1247'
    );
$deuda[31][31043]=array(
    'nombre' =>'Azuelo',
    'habitantes' =>'37',
    'deuda'=>'8'
    );
$deuda[31][31044]=array(
    'nombre' =>'Bakaiku',
    'habitantes' =>'339',
    'deuda'=>'123'
    );
$deuda[31][31045]=array(
    'nombre' =>'Barásoain',
    'habitantes' =>'665',
    'deuda'=>'0'
    );
$deuda[31][31046]=array(
    'nombre' =>'Barbarin',
    'habitantes' =>'67',
    'deuda'=>'34'
    );
$deuda[31][31047]=array(
    'nombre' =>'Bargota',
    'habitantes' =>'292',
    'deuda'=>'85'
    );
$deuda[31][31048]=array(
    'nombre' =>'Barillas',
    'habitantes' =>'203',
    'deuda'=>'106'
    );
$deuda[31][31049]=array(
    'nombre' =>'Basaburua',
    'habitantes' =>'859',
    'deuda'=>'544'
    );
$deuda[31][31050]=array(
    'nombre' =>'Baztan',
    'habitantes' =>'7792',
    'deuda'=>'5069'
    );
$deuda[31][31051]=array(
    'nombre' =>'Beire',
    'habitantes' =>'296',
    'deuda'=>'0'
    );
$deuda[31][31052]=array(
    'nombre' =>'Belascoáin',
    'habitantes' =>'117',
    'deuda'=>'60'
    );
$deuda[31][31053]=array(
    'nombre' =>'Berbinzana',
    'habitantes' =>'633',
    'deuda'=>'410'
    );
$deuda[31][31054]=array(
    'nombre' =>'Bertizarana',
    'habitantes' =>'590',
    'deuda'=>'0'
    );
$deuda[31][31055]=array(
    'nombre' =>'Betelu',
    'habitantes' =>'347',
    'deuda'=>'390'
    );
$deuda[31][31056]=array(
    'nombre' =>'Biurrun-Olcoz',
    'habitantes' =>'219',
    'deuda'=>'123'
    );
$deuda[31][31057]=array(
    'nombre' =>'Buñuel',
    'habitantes' =>'2271',
    'deuda'=>'677'
    );
$deuda[31][31058]=array(
    'nombre' =>'Auritz/Burguete',
    'habitantes' =>'262',
    'deuda'=>'0'
    );
$deuda[31][31059]=array(
    'nombre' =>'Burgui/Burgi',
    'habitantes' =>'223',
    'deuda'=>'67'
    );
$deuda[31][31060]=array(
    'nombre' =>'Burlada/Burlata',
    'habitantes' =>'18336',
    'deuda'=>'341'
    );
$deuda[31][31061]=array(
    'nombre' =>'Busto, El',
    'habitantes' =>'71',
    'deuda'=>'23'
    );
$deuda[31][31062]=array(
    'nombre' =>'Cabanillas',
    'habitantes' =>'1414',
    'deuda'=>'357'
    );
$deuda[31][31063]=array(
    'nombre' =>'Cabredo',
    'habitantes' =>'104',
    'deuda'=>'14'
    );
$deuda[31][31064]=array(
    'nombre' =>'Cadreita',
    'habitantes' =>'2082',
    'deuda'=>'672'
    );
$deuda[31][31065]=array(
    'nombre' =>'Caparroso',
    'habitantes' =>'2773',
    'deuda'=>'197'
    );
$deuda[31][31066]=array(
    'nombre' =>'Cárcar',
    'habitantes' =>'1054',
    'deuda'=>'541'
    );
$deuda[31][31067]=array(
    'nombre' =>'Carcastillo',
    'habitantes' =>'2466',
    'deuda'=>'742'
    );
$deuda[31][31068]=array(
    'nombre' =>'Cascante',
    'habitantes' =>'3787',
    'deuda'=>'1343'
    );
$deuda[31][31069]=array(
    'nombre' =>'Cáseda',
    'habitantes' =>'989',
    'deuda'=>'454'
    );
$deuda[31][31070]=array(
    'nombre' =>'Castejón',
    'habitantes' =>'4062',
    'deuda'=>'7441'
    );
$deuda[31][31071]=array(
    'nombre' =>'Castillonuevo',
    'habitantes' =>'16',
    'deuda'=>'0'
    );
$deuda[31][31072]=array(
    'nombre' =>'Cintruénigo',
    'habitantes' =>'7779',
    'deuda'=>'4403'
    );
$deuda[31][31073]=array(
    'nombre' =>'Ziordia',
    'habitantes' =>'389',
    'deuda'=>'107'
    );
$deuda[31][31074]=array(
    'nombre' =>'Cirauqui/Zirauki',
    'habitantes' =>'483',
    'deuda'=>'104'
    );
$deuda[31][31075]=array(
    'nombre' =>'Ciriza/Ziritza',
    'habitantes' =>'131',
    'deuda'=>'70'
    );
$deuda[31][31076]=array(
    'nombre' =>'Cizur',
    'habitantes' =>'3751',
    'deuda'=>'670'
    );
$deuda[31][31077]=array(
    'nombre' =>'Corella',
    'habitantes' =>'7740',
    'deuda'=>'3870'
    );
$deuda[31][31078]=array(
    'nombre' =>'Cortes',
    'habitantes' =>'3192',
    'deuda'=>'408'
    );
$deuda[31][31079]=array(
    'nombre' =>'Desojo',
    'habitantes' =>'81',
    'deuda'=>'130'
    );
$deuda[31][31080]=array(
    'nombre' =>'Dicastillo',
    'habitantes' =>'637',
    'deuda'=>'138'
    );
$deuda[31][31081]=array(
    'nombre' =>'Donamaria',
    'habitantes' =>'443',
    'deuda'=>'0'
    );
$deuda[31][31082]=array(
    'nombre' =>'Etxalar',
    'habitantes' =>'801',
    'deuda'=>'150'
    );
$deuda[31][31083]=array(
    'nombre' =>'Echarri',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[31][31084]=array(
    'nombre' =>'Etxarri Aranatz',
    'habitantes' =>'2466',
    'deuda'=>'538'
    );
$deuda[31][31085]=array(
    'nombre' =>'Etxauri',
    'habitantes' =>'586',
    'deuda'=>'0'
    );
$deuda[31][31086]=array(
    'nombre' =>'Valle de Egüés',
    'habitantes' =>'19603',
    'deuda'=>'0'
    );
$deuda[31][31087]=array(
    'nombre' =>'Elgorriaga',
    'habitantes' =>'219',
    'deuda'=>'27'
    );
$deuda[31][31088]=array(
    'nombre' =>'Noáin (Valle de Elorz)/Noain (Elortzibar)',
    'habitantes' =>'7892',
    'deuda'=>'2220'
    );
$deuda[31][31089]=array(
    'nombre' =>'Enériz/Eneritz',
    'habitantes' =>'322',
    'deuda'=>'525'
    );
$deuda[31][31090]=array(
    'nombre' =>'Eratsun',
    'habitantes' =>'150',
    'deuda'=>'0'
    );
$deuda[31][31091]=array(
    'nombre' =>'Ergoiena',
    'habitantes' =>'397',
    'deuda'=>'0'
    );
$deuda[31][31092]=array(
    'nombre' =>'Erro',
    'habitantes' =>'792',
    'deuda'=>'0'
    );
$deuda[31][31093]=array(
    'nombre' =>'Ezcároz/Ezkaroze',
    'habitantes' =>'323',
    'deuda'=>'0'
    );
$deuda[31][31094]=array(
    'nombre' =>'Eslava',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[31][31095]=array(
    'nombre' =>'Esparza de Salazar/Espartza Zaraitzu',
    'habitantes' =>'87',
    'deuda'=>'0'
    );
$deuda[31][31096]=array(
    'nombre' =>'Espronceda',
    'habitantes' =>'114',
    'deuda'=>'33'
    );
$deuda[31][31097]=array(
    'nombre' =>'Estella-Lizarra',
    'habitantes' =>'13702',
    'deuda'=>'1777'
    );
$deuda[31][31098]=array(
    'nombre' =>'Esteribar',
    'habitantes' =>'2598',
    'deuda'=>'0'
    );
$deuda[31][31099]=array(
    'nombre' =>'Etayo',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[31][31100]=array(
    'nombre' =>'Eulate',
    'habitantes' =>'303',
    'deuda'=>'0'
    );
$deuda[31][31101]=array(
    'nombre' =>'Ezcabarte',
    'habitantes' =>'1834',
    'deuda'=>'886'
    );
$deuda[31][31102]=array(
    'nombre' =>'Ezkurra',
    'habitantes' =>'154',
    'deuda'=>'0'
    );
$deuda[31][31103]=array(
    'nombre' =>'Ezprogui',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[31][31104]=array(
    'nombre' =>'Falces',
    'habitantes' =>'2390',
    'deuda'=>'2064'
    );
$deuda[31][31105]=array(
    'nombre' =>'Fitero',
    'habitantes' =>'2022',
    'deuda'=>'636'
    );
$deuda[31][31106]=array(
    'nombre' =>'Fontellas',
    'habitantes' =>'961',
    'deuda'=>'768'
    );
$deuda[31][31107]=array(
    'nombre' =>'Funes',
    'habitantes' =>'2471',
    'deuda'=>'883'
    );
$deuda[31][31108]=array(
    'nombre' =>'Fustiñana',
    'habitantes' =>'2511',
    'deuda'=>'789'
    );
$deuda[31][31109]=array(
    'nombre' =>'Galar',
    'habitantes' =>'2074',
    'deuda'=>'0'
    );
$deuda[31][31110]=array(
    'nombre' =>'Gallipienzo/Galipentzu',
    'habitantes' =>'106',
    'deuda'=>'53'
    );
$deuda[31][31111]=array(
    'nombre' =>'Gallués/Galoze',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[31][31112]=array(
    'nombre' =>'Garaioa',
    'habitantes' =>'97',
    'deuda'=>'97'
    );
$deuda[31][31113]=array(
    'nombre' =>'Garde',
    'habitantes' =>'157',
    'deuda'=>'75'
    );
$deuda[31][31114]=array(
    'nombre' =>'Garínoain',
    'habitantes' =>'490',
    'deuda'=>'420'
    );
$deuda[31][31115]=array(
    'nombre' =>'Garralda',
    'habitantes' =>'185',
    'deuda'=>'274'
    );
$deuda[31][31116]=array(
    'nombre' =>'Genevilla',
    'habitantes' =>'75',
    'deuda'=>'11'
    );
$deuda[31][31117]=array(
    'nombre' =>'Goizueta',
    'habitantes' =>'736',
    'deuda'=>'0'
    );
$deuda[31][31118]=array(
    'nombre' =>'Goñi',
    'habitantes' =>'170',
    'deuda'=>'0'
    );
$deuda[31][31119]=array(
    'nombre' =>'Güesa/Gorza',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[31][31120]=array(
    'nombre' =>'Guesálaz/Gesalatz',
    'habitantes' =>'450',
    'deuda'=>'0'
    );
$deuda[31][31121]=array(
    'nombre' =>'Guirguillano',
    'habitantes' =>'81',
    'deuda'=>'33'
    );
$deuda[31][31122]=array(
    'nombre' =>'Huarte/Uharte',
    'habitantes' =>'6776',
    'deuda'=>'7500'
    );
$deuda[31][31123]=array(
    'nombre' =>'Uharte Arakil',
    'habitantes' =>'840',
    'deuda'=>'729'
    );
$deuda[31][31124]=array(
    'nombre' =>'Ibargoiti',
    'habitantes' =>'249',
    'deuda'=>'0'
    );
$deuda[31][31125]=array(
    'nombre' =>'Igúzquiza',
    'habitantes' =>'332',
    'deuda'=>'0'
    );
$deuda[31][31126]=array(
    'nombre' =>'Imotz',
    'habitantes' =>'432',
    'deuda'=>'308'
    );
$deuda[31][31127]=array(
    'nombre' =>'Irañeta',
    'habitantes' =>'172',
    'deuda'=>'207'
    );
$deuda[31][31128]=array(
    'nombre' =>'Isaba/Izaba',
    'habitantes' =>'473',
    'deuda'=>'365'
    );
$deuda[31][31129]=array(
    'nombre' =>'Ituren',
    'habitantes' =>'515',
    'deuda'=>'85'
    );
$deuda[31][31130]=array(
    'nombre' =>'Iturmendi',
    'habitantes' =>'388',
    'deuda'=>'241'
    );
$deuda[31][31131]=array(
    'nombre' =>'Iza/Itza',
    'habitantes' =>'1171',
    'deuda'=>'718'
    );
$deuda[31][31132]=array(
    'nombre' =>'Izagaondoa',
    'habitantes' =>'177',
    'deuda'=>'0'
    );
$deuda[31][31133]=array(
    'nombre' =>'Izalzu/Itzaltzu',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[31][31134]=array(
    'nombre' =>'Jaurrieta',
    'habitantes' =>'202',
    'deuda'=>'0'
    );
$deuda[31][31135]=array(
    'nombre' =>'Javier',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[31][31136]=array(
    'nombre' =>'Juslapeña',
    'habitantes' =>'553',
    'deuda'=>'0'
    );
$deuda[31][31137]=array(
    'nombre' =>'Beintza-Labaien',
    'habitantes' =>'231',
    'deuda'=>'0'
    );
$deuda[31][31138]=array(
    'nombre' =>'Lakuntza',
    'habitantes' =>'1257',
    'deuda'=>'530'
    );
$deuda[31][31139]=array(
    'nombre' =>'Lana',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[31][31140]=array(
    'nombre' =>'Lantz',
    'habitantes' =>'151',
    'deuda'=>'0'
    );
$deuda[31][31141]=array(
    'nombre' =>'Lapoblación',
    'habitantes' =>'127',
    'deuda'=>'23'
    );
$deuda[31][31142]=array(
    'nombre' =>'Larraga',
    'habitantes' =>'2034',
    'deuda'=>'32'
    );
$deuda[31][31143]=array(
    'nombre' =>'Larraona',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[31][31144]=array(
    'nombre' =>'Larraun',
    'habitantes' =>'985',
    'deuda'=>'0'
    );
$deuda[31][31145]=array(
    'nombre' =>'Lazagurría',
    'habitantes' =>'206',
    'deuda'=>'13'
    );
$deuda[31][31146]=array(
    'nombre' =>'Leache/Leatxe',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[31][31147]=array(
    'nombre' =>'Legarda',
    'habitantes' =>'110',
    'deuda'=>'54'
    );
$deuda[31][31148]=array(
    'nombre' =>'Legaria',
    'habitantes' =>'98',
    'deuda'=>'0'
    );
$deuda[31][31149]=array(
    'nombre' =>'Leitza',
    'habitantes' =>'2888',
    'deuda'=>'776'
    );
$deuda[31][31150]=array(
    'nombre' =>'Leoz/Leotz',
    'habitantes' =>'241',
    'deuda'=>'352'
    );
$deuda[31][31151]=array(
    'nombre' =>'Lerga',
    'habitantes' =>'73',
    'deuda'=>'56'
    );
$deuda[31][31152]=array(
    'nombre' =>'Lerín',
    'habitantes' =>'1665',
    'deuda'=>'1289'
    );
$deuda[31][31153]=array(
    'nombre' =>'Lesaka',
    'habitantes' =>'2742',
    'deuda'=>'3839'
    );
$deuda[31][31154]=array(
    'nombre' =>'Lezáun',
    'habitantes' =>'261',
    'deuda'=>'0'
    );
$deuda[31][31155]=array(
    'nombre' =>'Liédena',
    'habitantes' =>'303',
    'deuda'=>'117'
    );
$deuda[31][31156]=array(
    'nombre' =>'Lizoáin-Arriasgoiti',
    'habitantes' =>'318',
    'deuda'=>'0'
    );
$deuda[31][31157]=array(
    'nombre' =>'Lodosa',
    'habitantes' =>'4741',
    'deuda'=>'290'
    );
$deuda[31][31158]=array(
    'nombre' =>'Lónguida/Longida',
    'habitantes' =>'306',
    'deuda'=>'0'
    );
$deuda[31][31159]=array(
    'nombre' =>'Lumbier',
    'habitantes' =>'1349',
    'deuda'=>'1125'
    );
$deuda[31][31160]=array(
    'nombre' =>'Luquin',
    'habitantes' =>'135',
    'deuda'=>'0'
    );
$deuda[31][31161]=array(
    'nombre' =>'Mañeru',
    'habitantes' =>'432',
    'deuda'=>'13'
    );
$deuda[31][31162]=array(
    'nombre' =>'Marañón',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[31][31163]=array(
    'nombre' =>'Marcilla',
    'habitantes' =>'2800',
    'deuda'=>'1033'
    );
$deuda[31][31164]=array(
    'nombre' =>'Mélida',
    'habitantes' =>'729',
    'deuda'=>'352'
    );
$deuda[31][31165]=array(
    'nombre' =>'Mendavia',
    'habitantes' =>'3597',
    'deuda'=>'496'
    );
$deuda[31][31166]=array(
    'nombre' =>'Mendaza',
    'habitantes' =>'311',
    'deuda'=>'0'
    );
$deuda[31][31167]=array(
    'nombre' =>'Mendigorría',
    'habitantes' =>'1055',
    'deuda'=>'948'
    );
$deuda[31][31168]=array(
    'nombre' =>'Metauten',
    'habitantes' =>'291',
    'deuda'=>'36'
    );
$deuda[31][31169]=array(
    'nombre' =>'Milagro',
    'habitantes' =>'3290',
    'deuda'=>'2887'
    );
$deuda[31][31170]=array(
    'nombre' =>'Mirafuentes',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[31][31171]=array(
    'nombre' =>'Miranda de Arga',
    'habitantes' =>'847',
    'deuda'=>'159'
    );
$deuda[31][31172]=array(
    'nombre' =>'Monreal/Elo',
    'habitantes' =>'470',
    'deuda'=>'0'
    );
$deuda[31][31173]=array(
    'nombre' =>'Monteagudo',
    'habitantes' =>'1097',
    'deuda'=>'727'
    );
$deuda[31][31174]=array(
    'nombre' =>'Morentin',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[31][31175]=array(
    'nombre' =>'Mues',
    'habitantes' =>'88',
    'deuda'=>'46'
    );
$deuda[31][31176]=array(
    'nombre' =>'Murchante',
    'habitantes' =>'3842',
    'deuda'=>'0'
    );
$deuda[31][31177]=array(
    'nombre' =>'Murieta',
    'habitantes' =>'353',
    'deuda'=>'118'
    );
$deuda[31][31178]=array(
    'nombre' =>'Murillo el Cuende',
    'habitantes' =>'654',
    'deuda'=>'486'
    );
$deuda[31][31179]=array(
    'nombre' =>'Murillo el Fruto',
    'habitantes' =>'634',
    'deuda'=>'947'
    );
$deuda[31][31180]=array(
    'nombre' =>'Muruzábal',
    'habitantes' =>'266',
    'deuda'=>'104'
    );
$deuda[31][31181]=array(
    'nombre' =>'Navascués/Nabaskoze',
    'habitantes' =>'151',
    'deuda'=>'0'
    );
$deuda[31][31182]=array(
    'nombre' =>'Nazar',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[31][31183]=array(
    'nombre' =>'Obanos',
    'habitantes' =>'904',
    'deuda'=>'27'
    );
$deuda[31][31184]=array(
    'nombre' =>'Oco',
    'habitantes' =>'64',
    'deuda'=>'20'
    );
$deuda[31][31185]=array(
    'nombre' =>'Ochagavía/Otsagabia',
    'habitantes' =>'560',
    'deuda'=>'271'
    );
$deuda[31][31186]=array(
    'nombre' =>'Odieta',
    'habitantes' =>'370',
    'deuda'=>'0'
    );
$deuda[31][31187]=array(
    'nombre' =>'Oiz',
    'habitantes' =>'141',
    'deuda'=>'50'
    );
$deuda[31][31188]=array(
    'nombre' =>'Olaibar',
    'habitantes' =>'316',
    'deuda'=>'0'
    );
$deuda[31][31189]=array(
    'nombre' =>'Olazti/Olazagutía',
    'habitantes' =>'1520',
    'deuda'=>'499'
    );
$deuda[31][31190]=array(
    'nombre' =>'Olejua',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[31][31191]=array(
    'nombre' =>'Olite/Erriberri',
    'habitantes' =>'3907',
    'deuda'=>'4775'
    );
$deuda[31][31192]=array(
    'nombre' =>'Olóriz/Oloritz',
    'habitantes' =>'195',
    'deuda'=>'809'
    );
$deuda[31][31193]=array(
    'nombre' =>'Cendea de Olza/Oltza Zendea',
    'habitantes' =>'1822',
    'deuda'=>'1510'
    );
$deuda[31][31194]=array(
    'nombre' =>'Ollo',
    'habitantes' =>'409',
    'deuda'=>'0'
    );
$deuda[31][31195]=array(
    'nombre' =>'Orbaizeta',
    'habitantes' =>'202',
    'deuda'=>'435'
    );
$deuda[31][31196]=array(
    'nombre' =>'Orbara',
    'habitantes' =>'42',
    'deuda'=>'110'
    );
$deuda[31][31197]=array(
    'nombre' =>'Orísoain',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[31][31198]=array(
    'nombre' =>'Oronz/Orontze',
    'habitantes' =>'46',
    'deuda'=>'8'
    );
$deuda[31][31199]=array(
    'nombre' =>'Oroz-Betelu/Orotz-Betelu',
    'habitantes' =>'153',
    'deuda'=>'272'
    );
$deuda[31][31200]=array(
    'nombre' =>'Oteiza',
    'habitantes' =>'928',
    'deuda'=>'86'
    );
$deuda[31][31201]=array(
    'nombre' =>'Pamplona/Iruña',
    'habitantes' =>'195853',
    'deuda'=>'84727'
    );
$deuda[31][31202]=array(
    'nombre' =>'Peralta/Azkoien',
    'habitantes' =>'5863',
    'deuda'=>'2064'
    );
$deuda[31][31203]=array(
    'nombre' =>'Petilla de Aragón',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[31][31204]=array(
    'nombre' =>'Piedramillera',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[31][31205]=array(
    'nombre' =>'Pitillas',
    'habitantes' =>'511',
    'deuda'=>'0'
    );
$deuda[31][31206]=array(
    'nombre' =>'Puente la Reina/Gares',
    'habitantes' =>'2818',
    'deuda'=>'55'
    );
$deuda[31][31207]=array(
    'nombre' =>'Pueyo',
    'habitantes' =>'340',
    'deuda'=>'0'
    );
$deuda[31][31208]=array(
    'nombre' =>'Ribaforada',
    'habitantes' =>'3692',
    'deuda'=>'2267'
    );
$deuda[31][31209]=array(
    'nombre' =>'Romanzado',
    'habitantes' =>'173',
    'deuda'=>'0'
    );
$deuda[31][31210]=array(
    'nombre' =>'Roncal/Erronkari',
    'habitantes' =>'227',
    'deuda'=>'234'
    );
$deuda[31][31211]=array(
    'nombre' =>'Orreaga/Roncesvalles',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[31][31212]=array(
    'nombre' =>'Sada',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[31][31213]=array(
    'nombre' =>'Saldías',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[31][31214]=array(
    'nombre' =>'Salinas de Oro/Jaitz',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[31][31215]=array(
    'nombre' =>'San Adrián',
    'habitantes' =>'6196',
    'deuda'=>'4612'
    );
$deuda[31][31216]=array(
    'nombre' =>'Sangüesa/Zangoza',
    'habitantes' =>'5020',
    'deuda'=>'922'
    );
$deuda[31][31217]=array(
    'nombre' =>'San Martín de Unx',
    'habitantes' =>'372',
    'deuda'=>'554'
    );
$deuda[31][31219]=array(
    'nombre' =>'Sansol',
    'habitantes' =>'100',
    'deuda'=>'41'
    );
$deuda[31][31220]=array(
    'nombre' =>'Santacara',
    'habitantes' =>'891',
    'deuda'=>'171'
    );
$deuda[31][31221]=array(
    'nombre' =>'Doneztebe/Santesteban',
    'habitantes' =>'1658',
    'deuda'=>'672'
    );
$deuda[31][31222]=array(
    'nombre' =>'Sarriés/Sartze',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[31][31223]=array(
    'nombre' =>'Sartaguda',
    'habitantes' =>'1372',
    'deuda'=>'45'
    );
$deuda[31][31224]=array(
    'nombre' =>'Sesma',
    'habitantes' =>'1183',
    'deuda'=>'267'
    );
$deuda[31][31225]=array(
    'nombre' =>'Sorlada',
    'habitantes' =>'61',
    'deuda'=>'28'
    );
$deuda[31][31226]=array(
    'nombre' =>'Sunbilla',
    'habitantes' =>'648',
    'deuda'=>'156'
    );
$deuda[31][31227]=array(
    'nombre' =>'Tafalla',
    'habitantes' =>'10809',
    'deuda'=>'4426'
    );
$deuda[31][31228]=array(
    'nombre' =>'Tiebas-Muruarte de Reta',
    'habitantes' =>'617',
    'deuda'=>'0'
    );
$deuda[31][31229]=array(
    'nombre' =>'Tirapu',
    'habitantes' =>'51',
    'deuda'=>'76'
    );
$deuda[31][31230]=array(
    'nombre' =>'Torralba del Río',
    'habitantes' =>'118',
    'deuda'=>'64'
    );
$deuda[31][31231]=array(
    'nombre' =>'Torres del Río',
    'habitantes' =>'129',
    'deuda'=>'62'
    );
$deuda[31][31232]=array(
    'nombre' =>'Tudela',
    'habitantes' =>'35388',
    'deuda'=>'22948'
    );
$deuda[31][31233]=array(
    'nombre' =>'Tulebras',
    'habitantes' =>'118',
    'deuda'=>'0'
    );
$deuda[31][31234]=array(
    'nombre' =>'Ucar',
    'habitantes' =>'182',
    'deuda'=>'0'
    );
$deuda[31][31235]=array(
    'nombre' =>'Ujué',
    'habitantes' =>'187',
    'deuda'=>'89'
    );
$deuda[31][31236]=array(
    'nombre' =>'Ultzama',
    'habitantes' =>'1666',
    'deuda'=>'315'
    );
$deuda[31][31237]=array(
    'nombre' =>'Unciti',
    'habitantes' =>'219',
    'deuda'=>'0'
    );
$deuda[31][31238]=array(
    'nombre' =>'Unzué/Untzue',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[31][31239]=array(
    'nombre' =>'Urdazubi/Urdax',
    'habitantes' =>'402',
    'deuda'=>'126'
    );
$deuda[31][31240]=array(
    'nombre' =>'Urdiain',
    'habitantes' =>'681',
    'deuda'=>'76'
    );
$deuda[31][31241]=array(
    'nombre' =>'Urraul Alto',
    'habitantes' =>'152',
    'deuda'=>'0'
    );
$deuda[31][31242]=array(
    'nombre' =>'Urraul Bajo',
    'habitantes' =>'294',
    'deuda'=>'0'
    );
$deuda[31][31243]=array(
    'nombre' =>'Urroz-Villa',
    'habitantes' =>'408',
    'deuda'=>'0'
    );
$deuda[31][31244]=array(
    'nombre' =>'Urroz',
    'habitantes' =>'186',
    'deuda'=>'0'
    );
$deuda[31][31245]=array(
    'nombre' =>'Urzainqui/Urzainki',
    'habitantes' =>'95',
    'deuda'=>'144'
    );
$deuda[31][31246]=array(
    'nombre' =>'Uterga',
    'habitantes' =>'174',
    'deuda'=>'386'
    );
$deuda[31][31247]=array(
    'nombre' =>'Uztárroz/Uztarroze',
    'habitantes' =>'154',
    'deuda'=>'0'
    );
$deuda[31][31248]=array(
    'nombre' =>'Luzaide/Valcarlos',
    'habitantes' =>'377',
    'deuda'=>'253'
    );
$deuda[31][31249]=array(
    'nombre' =>'Valtierra',
    'habitantes' =>'2443',
    'deuda'=>'1976'
    );
$deuda[31][31250]=array(
    'nombre' =>'Bera',
    'habitantes' =>'3768',
    'deuda'=>'856'
    );
$deuda[31][31251]=array(
    'nombre' =>'Viana',
    'habitantes' =>'4048',
    'deuda'=>'0'
    );
$deuda[31][31252]=array(
    'nombre' =>'Vidángoz/Bidankoze',
    'habitantes' =>'94',
    'deuda'=>'17'
    );
$deuda[31][31253]=array(
    'nombre' =>'Bidaurreta',
    'habitantes' =>'160',
    'deuda'=>'0'
    );
$deuda[31][31254]=array(
    'nombre' =>'Villafranca',
    'habitantes' =>'2805',
    'deuda'=>'2206'
    );
$deuda[31][31255]=array(
    'nombre' =>'Villamayor de Monjardín',
    'habitantes' =>'128',
    'deuda'=>'97'
    );
$deuda[31][31256]=array(
    'nombre' =>'Hiriberri/Villanueva de Aezkoa',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[31][31257]=array(
    'nombre' =>'Villatuerta',
    'habitantes' =>'1137',
    'deuda'=>'1319'
    );
$deuda[31][31258]=array(
    'nombre' =>'Villava/Atarrabia',
    'habitantes' =>'10265',
    'deuda'=>'2341'
    );
$deuda[31][31259]=array(
    'nombre' =>'Igantzi',
    'habitantes' =>'618',
    'deuda'=>'242'
    );
$deuda[31][31260]=array(
    'nombre' =>'Valle de Yerri/Deierri',
    'habitantes' =>'1497',
    'deuda'=>'212'
    );
$deuda[31][31261]=array(
    'nombre' =>'Yesa',
    'habitantes' =>'285',
    'deuda'=>'0'
    );
$deuda[31][31262]=array(
    'nombre' =>'Zabalza/Zabaltza',
    'habitantes' =>'276',
    'deuda'=>'0'
    );
$deuda[31][31263]=array(
    'nombre' =>'Zubieta',
    'habitantes' =>'323',
    'deuda'=>'0'
    );
$deuda[31][31264]=array(
    'nombre' =>'Zugarramurdi',
    'habitantes' =>'227',
    'deuda'=>'484'
    );
$deuda[31][31265]=array(
    'nombre' =>'Zúñiga',
    'habitantes' =>'116',
    'deuda'=>'105'
    );
$deuda[31][31901]=array(
    'nombre' =>'Barañain',
    'habitantes' =>'20475',
    'deuda'=>'1224'
    );
$deuda[31][31902]=array(
    'nombre' =>'Berrioplano/Berriobeiti',
    'habitantes' =>'6527',
    'deuda'=>'2787'
    );
$deuda[31][31903]=array(
    'nombre' =>'Berriozar',
    'habitantes' =>'9625',
    'deuda'=>'0'
    );
$deuda[31][31904]=array(
    'nombre' =>'Irurtzun',
    'habitantes' =>'2194',
    'deuda'=>'0'
    );
$deuda[31][31905]=array(
    'nombre' =>'Beriáin',
    'habitantes' =>'3889',
    'deuda'=>'1155'
    );
$deuda[31][31906]=array(
    'nombre' =>'Orkoien',
    'habitantes' =>'3770',
    'deuda'=>'0'
    );
$deuda[31][31907]=array(
    'nombre' =>'Zizur Mayor/Zizur Nagusia',
    'habitantes' =>'14493',
    'deuda'=>'0'
    );
$deuda[31][31908]=array(
    'nombre' =>'Lekunberri',
    'habitantes' =>'1483',
    'deuda'=>'1896'
    );
$deuda[32][32001]=array(
    'nombre' =>'Allariz',
    'habitantes' =>'6049',
    'deuda'=>'5172'
    );
$deuda[32][32002]=array(
    'nombre' =>'Amoeiro',
    'habitantes' =>'2245',
    'deuda'=>'17'
    );
$deuda[32][32003]=array(
    'nombre' =>'Arnoia, A',
    'habitantes' =>'1040',
    'deuda'=>'66'
    );
$deuda[32][32004]=array(
    'nombre' =>'Avión',
    'habitantes' =>'1962',
    'deuda'=>'1984'
    );
$deuda[32][32005]=array(
    'nombre' =>'Baltar',
    'habitantes' =>'1002',
    'deuda'=>'311'
    );
$deuda[32][32006]=array(
    'nombre' =>'Bande',
    'habitantes' =>'1735',
    'deuda'=>'645'
    );
$deuda[32][32007]=array(
    'nombre' =>'Baños de Molgas',
    'habitantes' =>'1658',
    'deuda'=>'180'
    );
$deuda[32][32008]=array(
    'nombre' =>'Barbadás',
    'habitantes' =>'10463',
    'deuda'=>'0'
    );
$deuda[32][32009]=array(
    'nombre' =>'Barco de Valdeorras, O',
    'habitantes' =>'13785',
    'deuda'=>'1242'
    );
$deuda[32][32010]=array(
    'nombre' =>'Beade',
    'habitantes' =>'451',
    'deuda'=>'0'
    );
$deuda[32][32011]=array(
    'nombre' =>'Beariz',
    'habitantes' =>'1016',
    'deuda'=>'141'
    );
$deuda[32][32012]=array(
    'nombre' =>'Blancos, Os',
    'habitantes' =>'878',
    'deuda'=>'2387'
    );
$deuda[32][32013]=array(
    'nombre' =>'Boborás',
    'habitantes' =>'2510',
    'deuda'=>'306'
    );
$deuda[32][32014]=array(
    'nombre' =>'Bola, A',
    'habitantes' =>'1339',
    'deuda'=>'1322'
    );
$deuda[32][32015]=array(
    'nombre' =>'Bolo, O',
    'habitantes' =>'988',
    'deuda'=>'0'
    );
$deuda[32][32016]=array(
    'nombre' =>'Calvos de Randín',
    'habitantes' =>'922',
    'deuda'=>'472'
    );
$deuda[32][32017]=array(
    'nombre' =>'Carballeda de Valdeorras',
    'habitantes' =>'1698',
    'deuda'=>'0'
    );
$deuda[32][32018]=array(
    'nombre' =>'Carballeda de Avia',
    'habitantes' =>'1400',
    'deuda'=>'568'
    );
$deuda[32][32019]=array(
    'nombre' =>'Carballiño, O',
    'habitantes' =>'13999',
    'deuda'=>'2931'
    );
$deuda[32][32020]=array(
    'nombre' =>'Cartelle',
    'habitantes' =>'2852',
    'deuda'=>'291'
    );
$deuda[32][32021]=array(
    'nombre' =>'Castrelo do Val',
    'habitantes' =>'1079',
    'deuda'=>'225'
    );
$deuda[32][32022]=array(
    'nombre' =>'Castrelo de Miño',
    'habitantes' =>'1556',
    'deuda'=>'528'
    );
$deuda[32][32023]=array(
    'nombre' =>'Castro Caldelas',
    'habitantes' =>'1351',
    'deuda'=>'386'
    );
$deuda[32][32024]=array(
    'nombre' =>'Celanova',
    'habitantes' =>'5536',
    'deuda'=>'815'
    );
$deuda[32][32025]=array(
    'nombre' =>'Cenlle',
    'habitantes' =>'1189',
    'deuda'=>'0'
    );
$deuda[32][32026]=array(
    'nombre' =>'Coles',
    'habitantes' =>'3168',
    'deuda'=>'0'
    );
$deuda[32][32027]=array(
    'nombre' =>'Cortegada',
    'habitantes' =>'1184',
    'deuda'=>'198'
    );
$deuda[32][32028]=array(
    'nombre' =>'Cualedro',
    'habitantes' =>'1840',
    'deuda'=>'0'
    );
$deuda[32][32029]=array(
    'nombre' =>'Chandrexa de Queixa',
    'habitantes' =>'528',
    'deuda'=>'0'
    );
$deuda[32][32030]=array(
    'nombre' =>'Entrimo',
    'habitantes' =>'1251',
    'deuda'=>'195'
    );
$deuda[32][32031]=array(
    'nombre' =>'Esgos',
    'habitantes' =>'1220',
    'deuda'=>'89'
    );
$deuda[32][32032]=array(
    'nombre' =>'Xinzo de Limia',
    'habitantes' =>'10043',
    'deuda'=>'5851'
    );
$deuda[32][32033]=array(
    'nombre' =>'Gomesende',
    'habitantes' =>'829',
    'deuda'=>'58'
    );
$deuda[32][32034]=array(
    'nombre' =>'Gudiña, A',
    'habitantes' =>'1392',
    'deuda'=>'712'
    );
$deuda[32][32035]=array(
    'nombre' =>'Irixo, O',
    'habitantes' =>'1600',
    'deuda'=>'0'
    );
$deuda[32][32036]=array(
    'nombre' =>'Xunqueira de Ambía',
    'habitantes' =>'1498',
    'deuda'=>'462'
    );
$deuda[32][32037]=array(
    'nombre' =>'Xunqueira de Espadanedo',
    'habitantes' =>'818',
    'deuda'=>'884'
    );
$deuda[32][32038]=array(
    'nombre' =>'Larouco',
    'habitantes' =>'526',
    'deuda'=>'212'
    );
$deuda[32][32039]=array(
    'nombre' =>'Laza',
    'habitantes' =>'1424',
    'deuda'=>'189'
    );
$deuda[32][32040]=array(
    'nombre' =>'Leiro',
    'habitantes' =>'1630',
    'deuda'=>'0'
    );
$deuda[32][32041]=array(
    'nombre' =>'Lobeira',
    'habitantes' =>'813',
    'deuda'=>'59'
    );
$deuda[32][32042]=array(
    'nombre' =>'Lobios',
    'habitantes' =>'1988',
    'deuda'=>'102'
    );
$deuda[32][32043]=array(
    'nombre' =>'Maceda',
    'habitantes' =>'2957',
    'deuda'=>'868'
    );
$deuda[32][32044]=array(
    'nombre' =>'Manzaneda',
    'habitantes' =>'975',
    'deuda'=>'0'
    );
$deuda[32][32045]=array(
    'nombre' =>'Maside',
    'habitantes' =>'2879',
    'deuda'=>'362'
    );
$deuda[32][32046]=array(
    'nombre' =>'Melón',
    'habitantes' =>'1293',
    'deuda'=>'0'
    );
$deuda[32][32047]=array(
    'nombre' =>'Merca, A',
    'habitantes' =>'2021',
    'deuda'=>'100'
    );
$deuda[32][32048]=array(
    'nombre' =>'Mezquita, A',
    'habitantes' =>'1109',
    'deuda'=>'658'
    );
$deuda[32][32049]=array(
    'nombre' =>'Montederramo',
    'habitantes' =>'807',
    'deuda'=>'162'
    );
$deuda[32][32050]=array(
    'nombre' =>'Monterrei',
    'habitantes' =>'2758',
    'deuda'=>'50'
    );
$deuda[32][32051]=array(
    'nombre' =>'Muíños',
    'habitantes' =>'1622',
    'deuda'=>'664'
    );
$deuda[32][32052]=array(
    'nombre' =>'Nogueira de Ramuín',
    'habitantes' =>'2124',
    'deuda'=>'2204'
    );
$deuda[32][32053]=array(
    'nombre' =>'Oímbra',
    'habitantes' =>'2020',
    'deuda'=>'0'
    );
$deuda[32][32054]=array(
    'nombre' =>'Ourense',
    'habitantes' =>'106231',
    'deuda'=>'24834'
    );
$deuda[32][32055]=array(
    'nombre' =>'Paderne de Allariz',
    'habitantes' =>'1486',
    'deuda'=>'0'
    );
$deuda[32][32056]=array(
    'nombre' =>'Padrenda',
    'habitantes' =>'1912',
    'deuda'=>'222'
    );
$deuda[32][32057]=array(
    'nombre' =>'Parada de Sil',
    'habitantes' =>'605',
    'deuda'=>'0'
    );
$deuda[32][32058]=array(
    'nombre' =>'Pereiro de Aguiar, O',
    'habitantes' =>'6319',
    'deuda'=>'0'
    );
$deuda[32][32059]=array(
    'nombre' =>'Peroxa, A',
    'habitantes' =>'2038',
    'deuda'=>'206'
    );
$deuda[32][32060]=array(
    'nombre' =>'Petín',
    'habitantes' =>'953',
    'deuda'=>'821'
    );
$deuda[32][32061]=array(
    'nombre' =>'Piñor',
    'habitantes' =>'1232',
    'deuda'=>'537'
    );
$deuda[32][32062]=array(
    'nombre' =>'Porqueira',
    'habitantes' =>'901',
    'deuda'=>'954'
    );
$deuda[32][32063]=array(
    'nombre' =>'Pobra de Trives, A',
    'habitantes' =>'2245',
    'deuda'=>'397'
    );
$deuda[32][32064]=array(
    'nombre' =>'Pontedeva',
    'habitantes' =>'600',
    'deuda'=>'94'
    );
$deuda[32][32065]=array(
    'nombre' =>'Punxín',
    'habitantes' =>'760',
    'deuda'=>'0'
    );
$deuda[32][32066]=array(
    'nombre' =>'Quintela de Leirado',
    'habitantes' =>'629',
    'deuda'=>'124'
    );
$deuda[32][32067]=array(
    'nombre' =>'Rairiz de Veiga',
    'habitantes' =>'1430',
    'deuda'=>'785'
    );
$deuda[32][32068]=array(
    'nombre' =>'Ramirás',
    'habitantes' =>'1607',
    'deuda'=>'0'
    );
$deuda[32][32069]=array(
    'nombre' =>'Ribadavia',
    'habitantes' =>'5112',
    'deuda'=>'3218'
    );
$deuda[32][32070]=array(
    'nombre' =>'San Xoán de Río',
    'habitantes' =>'600',
    'deuda'=>'206'
    );
$deuda[32][32071]=array(
    'nombre' =>'Riós',
    'habitantes' =>'1683',
    'deuda'=>'563'
    );
$deuda[32][32072]=array(
    'nombre' =>'Rúa, A',
    'habitantes' =>'4595',
    'deuda'=>'2658'
    );
$deuda[32][32073]=array(
    'nombre' =>'Rubiá',
    'habitantes' =>'1473',
    'deuda'=>'205'
    );
$deuda[32][32074]=array(
    'nombre' =>'San Amaro',
    'habitantes' =>'1170',
    'deuda'=>'381'
    );
$deuda[32][32075]=array(
    'nombre' =>'San Cibrao das Viñas',
    'habitantes' =>'5036',
    'deuda'=>'0'
    );
$deuda[32][32076]=array(
    'nombre' =>'San Cristovo de Cea',
    'habitantes' =>'2346',
    'deuda'=>'1053'
    );
$deuda[32][32077]=array(
    'nombre' =>'Sandiás',
    'habitantes' =>'1307',
    'deuda'=>'100'
    );
$deuda[32][32078]=array(
    'nombre' =>'Sarreaus',
    'habitantes' =>'1283',
    'deuda'=>'14'
    );
$deuda[32][32079]=array(
    'nombre' =>'Taboadela',
    'habitantes' =>'1514',
    'deuda'=>'382'
    );
$deuda[32][32080]=array(
    'nombre' =>'Teixeira, A',
    'habitantes' =>'378',
    'deuda'=>'0'
    );
$deuda[32][32081]=array(
    'nombre' =>'Toén',
    'habitantes' =>'2426',
    'deuda'=>'43'
    );
$deuda[32][32082]=array(
    'nombre' =>'Trasmiras',
    'habitantes' =>'1410',
    'deuda'=>'55'
    );
$deuda[32][32083]=array(
    'nombre' =>'Veiga, A',
    'habitantes' =>'946',
    'deuda'=>'0'
    );
$deuda[32][32084]=array(
    'nombre' =>'Verea',
    'habitantes' =>'1042',
    'deuda'=>'0'
    );
$deuda[32][32085]=array(
    'nombre' =>'Verín',
    'habitantes' =>'14107',
    'deuda'=>'4231'
    );
$deuda[32][32086]=array(
    'nombre' =>'Viana do Bolo',
    'habitantes' =>'3037',
    'deuda'=>'0'
    );
$deuda[32][32087]=array(
    'nombre' =>'Vilamarín',
    'habitantes' =>'2026',
    'deuda'=>'0'
    );
$deuda[32][32088]=array(
    'nombre' =>'Vilamartín de Valdeorras',
    'habitantes' =>'1798',
    'deuda'=>'522'
    );
$deuda[32][32089]=array(
    'nombre' =>'Vilar de Barrio',
    'habitantes' =>'1455',
    'deuda'=>'70'
    );
$deuda[32][32090]=array(
    'nombre' =>'Vilar de Santos',
    'habitantes' =>'894',
    'deuda'=>'0'
    );
$deuda[32][32091]=array(
    'nombre' =>'Vilardevós',
    'habitantes' =>'2170',
    'deuda'=>'0'
    );
$deuda[32][32092]=array(
    'nombre' =>'Vilariño de Conso',
    'habitantes' =>'615',
    'deuda'=>'0'
    );
$deuda[33][33001]=array(
    'nombre' =>'Allande',
    'habitantes' =>'1826',
    'deuda'=>'0'
    );
$deuda[33][33002]=array(
    'nombre' =>'Aller',
    'habitantes' =>'11555',
    'deuda'=>'4352'
    );
$deuda[33][33003]=array(
    'nombre' =>'Amieva',
    'habitantes' =>'727',
    'deuda'=>'1438'
    );
$deuda[33][33004]=array(
    'nombre' =>'Avilés',
    'habitantes' =>'80880',
    'deuda'=>'23497'
    );
$deuda[33][33005]=array(
    'nombre' =>'Belmonte de Miranda',
    'habitantes' =>'1641',
    'deuda'=>'0'
    );
$deuda[33][33006]=array(
    'nombre' =>'Bimenes',
    'habitantes' =>'1768',
    'deuda'=>'453'
    );
$deuda[33][33007]=array(
    'nombre' =>'Boal',
    'habitantes' =>'1669',
    'deuda'=>'209'
    );
$deuda[33][33008]=array(
    'nombre' =>'Cabrales',
    'habitantes' =>'2094',
    'deuda'=>'1374'
    );
$deuda[33][33009]=array(
    'nombre' =>'Cabranes',
    'habitantes' =>'1056',
    'deuda'=>'44'
    );
$deuda[33][33010]=array(
    'nombre' =>'Candamo',
    'habitantes' =>'2055',
    'deuda'=>'0'
    );
$deuda[33][33011]=array(
    'nombre' =>'Cangas del Narcea',
    'habitantes' =>'13451',
    'deuda'=>'9282'
    );
$deuda[33][33012]=array(
    'nombre' =>'Cangas de Onís',
    'habitantes' =>'6498',
    'deuda'=>'919'
    );
$deuda[33][33013]=array(
    'nombre' =>'Caravia',
    'habitantes' =>'501',
    'deuda'=>'0'
    );
$deuda[33][33014]=array(
    'nombre' =>'Carreño',
    'habitantes' =>'10704',
    'deuda'=>'1657'
    );
$deuda[33][33015]=array(
    'nombre' =>'Caso',
    'habitantes' =>'1663',
    'deuda'=>'1118'
    );
$deuda[33][33016]=array(
    'nombre' =>'Castrillón',
    'habitantes' =>'22735',
    'deuda'=>'6395'
    );
$deuda[33][33017]=array(
    'nombre' =>'Castropol',
    'habitantes' =>'3638',
    'deuda'=>'1809'
    );
$deuda[33][33018]=array(
    'nombre' =>'Coaña',
    'habitantes' =>'3419',
    'deuda'=>'0'
    );
$deuda[33][33019]=array(
    'nombre' =>'Colunga',
    'habitantes' =>'3518',
    'deuda'=>'0'
    );
$deuda[33][33020]=array(
    'nombre' =>'Corvera de Asturias',
    'habitantes' =>'16088',
    'deuda'=>'811'
    );
$deuda[33][33021]=array(
    'nombre' =>'Cudillero',
    'habitantes' =>'5210',
    'deuda'=>'5918'
    );
$deuda[33][33022]=array(
    'nombre' =>'Degaña',
    'habitantes' =>'1082',
    'deuda'=>'0'
    );
$deuda[33][33023]=array(
    'nombre' =>'Franco, El',
    'habitantes' =>'3859',
    'deuda'=>'694'
    );
$deuda[33][33024]=array(
    'nombre' =>'Gijón',
    'habitantes' =>'274290',
    'deuda'=>'110476'
    );
$deuda[33][33025]=array(
    'nombre' =>'Gozón',
    'habitantes' =>'10588',
    'deuda'=>'9042'
    );
$deuda[33][33026]=array(
    'nombre' =>'Grado',
    'habitantes' =>'10309',
    'deuda'=>'3965'
    );
$deuda[33][33027]=array(
    'nombre' =>'Grandas de Salime',
    'habitantes' =>'927',
    'deuda'=>'0'
    );
$deuda[33][33028]=array(
    'nombre' =>'Ibias',
    'habitantes' =>'1473',
    'deuda'=>'0'
    );
$deuda[33][33029]=array(
    'nombre' =>'Illano',
    'habitantes' =>'389',
    'deuda'=>'0'
    );
$deuda[33][33030]=array(
    'nombre' =>'Illas',
    'habitantes' =>'1030',
    'deuda'=>'0'
    );
$deuda[33][33031]=array(
    'nombre' =>'Langreo',
    'habitantes' =>'41738',
    'deuda'=>'6961'
    );
$deuda[33][33032]=array(
    'nombre' =>'Laviana',
    'habitantes' =>'13582',
    'deuda'=>'3384'
    );
$deuda[33][33033]=array(
    'nombre' =>'Lena',
    'habitantes' =>'11654',
    'deuda'=>'4423'
    );
$deuda[33][33034]=array(
    'nombre' =>'Valdés',
    'habitantes' =>'12421',
    'deuda'=>'0'
    );
$deuda[33][33035]=array(
    'nombre' =>'Llanera',
    'habitantes' =>'13904',
    'deuda'=>'3613'
    );
$deuda[33][33036]=array(
    'nombre' =>'Llanes',
    'habitantes' =>'13694',
    'deuda'=>'6743'
    );
$deuda[33][33037]=array(
    'nombre' =>'Mieres',
    'habitantes' =>'40338',
    'deuda'=>'10861'
    );
$deuda[33][33038]=array(
    'nombre' =>'Morcín',
    'habitantes' =>'2746',
    'deuda'=>'610'
    );
$deuda[33][33039]=array(
    'nombre' =>'Muros de Nalón',
    'habitantes' =>'1883',
    'deuda'=>'0'
    );
$deuda[33][33040]=array(
    'nombre' =>'Nava',
    'habitantes' =>'5411',
    'deuda'=>'1273'
    );
$deuda[33][33041]=array(
    'nombre' =>'Navia',
    'habitantes' =>'8644',
    'deuda'=>'371'
    );
$deuda[33][33042]=array(
    'nombre' =>'Noreña',
    'habitantes' =>'5333',
    'deuda'=>'393'
    );
$deuda[33][33043]=array(
    'nombre' =>'Onís',
    'habitantes' =>'763',
    'deuda'=>'729'
    );
$deuda[33][33044]=array(
    'nombre' =>'Oviedo',
    'habitantes' =>'221870',
    'deuda'=>'70694'
    );
$deuda[33][33045]=array(
    'nombre' =>'Parres',
    'habitantes' =>'5490',
    'deuda'=>'885'
    );
$deuda[33][33046]=array(
    'nombre' =>'Peñamellera Alta',
    'habitantes' =>'559',
    'deuda'=>'0'
    );
$deuda[33][33047]=array(
    'nombre' =>'Peñamellera Baja',
    'habitantes' =>'1291',
    'deuda'=>'0'
    );
$deuda[33][33048]=array(
    'nombre' =>'Pesoz',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[33][33049]=array(
    'nombre' =>'Piloña',
    'habitantes' =>'7412',
    'deuda'=>'2909'
    );
$deuda[33][33050]=array(
    'nombre' =>'Ponga',
    'habitantes' =>'655',
    'deuda'=>'1090'
    );
$deuda[33][33051]=array(
    'nombre' =>'Pravia',
    'habitantes' =>'8667',
    'deuda'=>'3919'
    );
$deuda[33][33052]=array(
    'nombre' =>'Proaza',
    'habitantes' =>'786',
    'deuda'=>'0'
    );
$deuda[33][33053]=array(
    'nombre' =>'Quirós',
    'habitantes' =>'1250',
    'deuda'=>'54'
    );
$deuda[33][33054]=array(
    'nombre' =>'Regueras, Las',
    'habitantes' =>'1934',
    'deuda'=>'0'
    );
$deuda[33][33055]=array(
    'nombre' =>'Ribadedeva',
    'habitantes' =>'1836',
    'deuda'=>'1102'
    );
$deuda[33][33056]=array(
    'nombre' =>'Ribadesella',
    'habitantes' =>'5904',
    'deuda'=>'0'
    );
$deuda[33][33057]=array(
    'nombre' =>'Ribera de Arriba',
    'habitantes' =>'1890',
    'deuda'=>'0'
    );
$deuda[33][33058]=array(
    'nombre' =>'Riosa',
    'habitantes' =>'2061',
    'deuda'=>'0'
    );
$deuda[33][33059]=array(
    'nombre' =>'Salas',
    'habitantes' =>'5371',
    'deuda'=>'6927'
    );
$deuda[33][33060]=array(
    'nombre' =>'San Martín del Rey Aurelio',
    'habitantes' =>'17182',
    'deuda'=>'2766'
    );
$deuda[33][33061]=array(
    'nombre' =>'San Martín de Oscos',
    'habitantes' =>'422',
    'deuda'=>'0'
    );
$deuda[33][33062]=array(
    'nombre' =>'Santa Eulalia de Oscos',
    'habitantes' =>'471',
    'deuda'=>'0'
    );
$deuda[33][33063]=array(
    'nombre' =>'San Tirso de Abres',
    'habitantes' =>'473',
    'deuda'=>'0'
    );
$deuda[33][33064]=array(
    'nombre' =>'Santo Adriano',
    'habitantes' =>'263',
    'deuda'=>'0'
    );
$deuda[33][33065]=array(
    'nombre' =>'Sariego',
    'habitantes' =>'1276',
    'deuda'=>'0'
    );
$deuda[33][33066]=array(
    'nombre' =>'Siero',
    'habitantes' =>'52191',
    'deuda'=>'7536'
    );
$deuda[33][33067]=array(
    'nombre' =>'Sobrescobio',
    'habitantes' =>'855',
    'deuda'=>'0'
    );
$deuda[33][33068]=array(
    'nombre' =>'Somiedo',
    'habitantes' =>'1231',
    'deuda'=>'1781'
    );
$deuda[33][33069]=array(
    'nombre' =>'Soto del Barco',
    'habitantes' =>'3978',
    'deuda'=>'0'
    );
$deuda[33][33070]=array(
    'nombre' =>'Tapia de Casariego',
    'habitantes' =>'3906',
    'deuda'=>'3695'
    );
$deuda[33][33071]=array(
    'nombre' =>'Taramundi',
    'habitantes' =>'698',
    'deuda'=>'0'
    );
$deuda[33][33072]=array(
    'nombre' =>'Teverga',
    'habitantes' =>'1768',
    'deuda'=>'688'
    );
$deuda[33][33073]=array(
    'nombre' =>'Tineo',
    'habitantes' =>'10128',
    'deuda'=>'6048'
    );
$deuda[33][33074]=array(
    'nombre' =>'Vegadeo',
    'habitantes' =>'3960',
    'deuda'=>'182'
    );
$deuda[33][33075]=array(
    'nombre' =>'Villanueva de Oscos',
    'habitantes' =>'310',
    'deuda'=>'0'
    );
$deuda[33][33076]=array(
    'nombre' =>'Villaviciosa',
    'habitantes' =>'14690',
    'deuda'=>'681'
    );
$deuda[33][33077]=array(
    'nombre' =>'Villayón',
    'habitantes' =>'1366',
    'deuda'=>'0'
    );
$deuda[33][33078]=array(
    'nombre' =>'Yernes y Tameza',
    'habitantes' =>'159',
    'deuda'=>'0'
    );
$deuda[34][34001]=array(
    'nombre' =>'Abarca de Campos',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[34][34003]=array(
    'nombre' =>'Abia de las Torres',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[34][34004]=array(
    'nombre' =>'Aguilar de Campoo',
    'habitantes' =>'7033',
    'deuda'=>'2237'
    );
$deuda[34][34005]=array(
    'nombre' =>'Alar del Rey',
    'habitantes' =>'987',
    'deuda'=>'790'
    );
$deuda[34][34006]=array(
    'nombre' =>'Alba de Cerrato',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[34][34009]=array(
    'nombre' =>'Amayuelas de Arriba',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[34][34010]=array(
    'nombre' =>'Ampudia',
    'habitantes' =>'640',
    'deuda'=>'0'
    );
$deuda[34][34011]=array(
    'nombre' =>'Amusco',
    'habitantes' =>'440',
    'deuda'=>'0'
    );
$deuda[34][34012]=array(
    'nombre' =>'Antigüedad',
    'habitantes' =>'391',
    'deuda'=>'0'
    );
$deuda[34][34015]=array(
    'nombre' =>'Arconada',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[34][34017]=array(
    'nombre' =>'Astudillo',
    'habitantes' =>'1002',
    'deuda'=>'0'
    );
$deuda[34][34018]=array(
    'nombre' =>'Autilla del Pino',
    'habitantes' =>'232',
    'deuda'=>'0'
    );
$deuda[34][34019]=array(
    'nombre' =>'Autillo de Campos',
    'habitantes' =>'146',
    'deuda'=>'13'
    );
$deuda[34][34020]=array(
    'nombre' =>'Ayuela',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[34][34022]=array(
    'nombre' =>'Baltanás',
    'habitantes' =>'1273',
    'deuda'=>'234'
    );
$deuda[34][34023]=array(
    'nombre' =>'Venta de Baños',
    'habitantes' =>'6432',
    'deuda'=>'1488'
    );
$deuda[34][34024]=array(
    'nombre' =>'Baquerín de Campos',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[34][34025]=array(
    'nombre' =>'Bárcena de Campos',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[34][34027]=array(
    'nombre' =>'Barruelo de Santullán',
    'habitantes' =>'1275',
    'deuda'=>'1059'
    );
$deuda[34][34028]=array(
    'nombre' =>'Báscones de Ojeda',
    'habitantes' =>'154',
    'deuda'=>'0'
    );
$deuda[34][34029]=array(
    'nombre' =>'Becerril de Campos',
    'habitantes' =>'812',
    'deuda'=>'138'
    );
$deuda[34][34031]=array(
    'nombre' =>'Belmonte de Campos',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[34][34032]=array(
    'nombre' =>'Berzosilla',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[34][34033]=array(
    'nombre' =>'Boada de Campos',
    'habitantes' =>'18',
    'deuda'=>'0'
    );
$deuda[34][34034]=array(
    'nombre' =>'Boadilla del Camino',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[34][34035]=array(
    'nombre' =>'Boadilla de Rioseco',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[34][34036]=array(
    'nombre' =>'Brañosera',
    'habitantes' =>'247',
    'deuda'=>'94'
    );
$deuda[34][34037]=array(
    'nombre' =>'Buenavista de Valdavia',
    'habitantes' =>'320',
    'deuda'=>'0'
    );
$deuda[34][34038]=array(
    'nombre' =>'Bustillo de la Vega',
    'habitantes' =>'316',
    'deuda'=>'0'
    );
$deuda[34][34039]=array(
    'nombre' =>'Bustillo del Páramo de Carrión',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[34][34041]=array(
    'nombre' =>'Calahorra de Boedo',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[34][34042]=array(
    'nombre' =>'Calzada de los Molinos',
    'habitantes' =>'347',
    'deuda'=>'0'
    );
$deuda[34][34045]=array(
    'nombre' =>'Capillas',
    'habitantes' =>'79',
    'deuda'=>'18'
    );
$deuda[34][34046]=array(
    'nombre' =>'Cardeñosa de Volpejera',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[34][34047]=array(
    'nombre' =>'Carrión de los Condes',
    'habitantes' =>'2177',
    'deuda'=>'749'
    );
$deuda[34][34048]=array(
    'nombre' =>'Castil de Vela',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[34][34049]=array(
    'nombre' =>'Castrejón de la Peña',
    'habitantes' =>'398',
    'deuda'=>'112'
    );
$deuda[34][34050]=array(
    'nombre' =>'Castrillo de Don Juan',
    'habitantes' =>'234',
    'deuda'=>'0'
    );
$deuda[34][34051]=array(
    'nombre' =>'Castrillo de Onielo',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[34][34052]=array(
    'nombre' =>'Castrillo de Villavega',
    'habitantes' =>'196',
    'deuda'=>'0'
    );
$deuda[34][34053]=array(
    'nombre' =>'Castromocho',
    'habitantes' =>'234',
    'deuda'=>'0'
    );
$deuda[34][34055]=array(
    'nombre' =>'Cervatos de la Cueza',
    'habitantes' =>'300',
    'deuda'=>'0'
    );
$deuda[34][34056]=array(
    'nombre' =>'Cervera de Pisuerga',
    'habitantes' =>'2442',
    'deuda'=>'0'
    );
$deuda[34][34057]=array(
    'nombre' =>'Cevico de la Torre',
    'habitantes' =>'511',
    'deuda'=>'0'
    );
$deuda[34][34058]=array(
    'nombre' =>'Cevico Navero',
    'habitantes' =>'196',
    'deuda'=>'21'
    );
$deuda[34][34059]=array(
    'nombre' =>'Cisneros',
    'habitantes' =>'474',
    'deuda'=>'0'
    );
$deuda[34][34060]=array(
    'nombre' =>'Cobos de Cerrato',
    'habitantes' =>'146',
    'deuda'=>'0'
    );
$deuda[34][34061]=array(
    'nombre' =>'Collazos de Boedo',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[34][34062]=array(
    'nombre' =>'Congosto de Valdavia',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[34][34063]=array(
    'nombre' =>'Cordovilla la Real',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[34][34066]=array(
    'nombre' =>'Cubillas de Cerrato',
    'habitantes' =>'61',
    'deuda'=>'0'
    );
$deuda[34][34067]=array(
    'nombre' =>'Dehesa de Montejo',
    'habitantes' =>'136',
    'deuda'=>'0'
    );
$deuda[34][34068]=array(
    'nombre' =>'Dehesa de Romanos',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[34][34069]=array(
    'nombre' =>'Dueñas',
    'habitantes' =>'2741',
    'deuda'=>'695'
    );
$deuda[34][34070]=array(
    'nombre' =>'Espinosa de Cerrato',
    'habitantes' =>'177',
    'deuda'=>'0'
    );
$deuda[34][34071]=array(
    'nombre' =>'Espinosa de Villagonzalo',
    'habitantes' =>'201',
    'deuda'=>'0'
    );
$deuda[34][34072]=array(
    'nombre' =>'Frechilla',
    'habitantes' =>'176',
    'deuda'=>'73'
    );
$deuda[34][34073]=array(
    'nombre' =>'Fresno del Río',
    'habitantes' =>'205',
    'deuda'=>'0'
    );
$deuda[34][34074]=array(
    'nombre' =>'Frómista',
    'habitantes' =>'822',
    'deuda'=>'64'
    );
$deuda[34][34076]=array(
    'nombre' =>'Fuentes de Nava',
    'habitantes' =>'682',
    'deuda'=>'0'
    );
$deuda[34][34077]=array(
    'nombre' =>'Fuentes de Valdepero',
    'habitantes' =>'419',
    'deuda'=>'0'
    );
$deuda[34][34079]=array(
    'nombre' =>'Grijota',
    'habitantes' =>'2114',
    'deuda'=>'400'
    );
$deuda[34][34080]=array(
    'nombre' =>'Guardo',
    'habitantes' =>'6547',
    'deuda'=>'801'
    );
$deuda[34][34081]=array(
    'nombre' =>'Guaza de Campos',
    'habitantes' =>'61',
    'deuda'=>'0'
    );
$deuda[34][34082]=array(
    'nombre' =>'Hérmedes de Cerrato',
    'habitantes' =>'87',
    'deuda'=>'0'
    );
$deuda[34][34083]=array(
    'nombre' =>'Herrera de Pisuerga',
    'habitantes' =>'2132',
    'deuda'=>'0'
    );
$deuda[34][34084]=array(
    'nombre' =>'Herrera de Valdecañas',
    'habitantes' =>'147',
    'deuda'=>'0'
    );
$deuda[34][34086]=array(
    'nombre' =>'Hontoria de Cerrato',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[34][34087]=array(
    'nombre' =>'Hornillos de Cerrato',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[34][34088]=array(
    'nombre' =>'Husillos',
    'habitantes' =>'290',
    'deuda'=>'0'
    );
$deuda[34][34089]=array(
    'nombre' =>'Itero de la Vega',
    'habitantes' =>'179',
    'deuda'=>'0'
    );
$deuda[34][34091]=array(
    'nombre' =>'Lagartos',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[34][34092]=array(
    'nombre' =>'Lantadilla',
    'habitantes' =>'331',
    'deuda'=>'0'
    );
$deuda[34][34093]=array(
    'nombre' =>'Vid de Ojeda, La',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[34][34094]=array(
    'nombre' =>'Ledigos',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[34][34096]=array(
    'nombre' =>'Lomas',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[34][34098]=array(
    'nombre' =>'Magaz de Pisuerga',
    'habitantes' =>'975',
    'deuda'=>'54'
    );
$deuda[34][34099]=array(
    'nombre' =>'Manquillos',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[34][34100]=array(
    'nombre' =>'Mantinos',
    'habitantes' =>'156',
    'deuda'=>'0'
    );
$deuda[34][34101]=array(
    'nombre' =>'Marcilla de Campos',
    'habitantes' =>'40',
    'deuda'=>'12'
    );
$deuda[34][34102]=array(
    'nombre' =>'Mazariegos',
    'habitantes' =>'221',
    'deuda'=>'0'
    );
$deuda[34][34103]=array(
    'nombre' =>'Mazuecos de Valdeginate',
    'habitantes' =>'98',
    'deuda'=>'0'
    );
$deuda[34][34104]=array(
    'nombre' =>'Melgar de Yuso',
    'habitantes' =>'263',
    'deuda'=>'0'
    );
$deuda[34][34106]=array(
    'nombre' =>'Meneses de Campos',
    'habitantes' =>'121',
    'deuda'=>'14'
    );
$deuda[34][34107]=array(
    'nombre' =>'Micieces de Ojeda',
    'habitantes' =>'83',
    'deuda'=>'0'
    );
$deuda[34][34108]=array(
    'nombre' =>'Monzón de Campos',
    'habitantes' =>'623',
    'deuda'=>'0'
    );
$deuda[34][34109]=array(
    'nombre' =>'Moratinos',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[34][34110]=array(
    'nombre' =>'Mudá',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[34][34112]=array(
    'nombre' =>'Nogal de las Huertas',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[34][34113]=array(
    'nombre' =>'Olea de Boedo',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[34][34114]=array(
    'nombre' =>'Olmos de Ojeda',
    'habitantes' =>'213',
    'deuda'=>'0'
    );
$deuda[34][34116]=array(
    'nombre' =>'Osornillo',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[34][34120]=array(
    'nombre' =>'Palencia',
    'habitantes' =>'79595',
    'deuda'=>'31028'
    );
$deuda[34][34121]=array(
    'nombre' =>'Palenzuela',
    'habitantes' =>'208',
    'deuda'=>'0'
    );
$deuda[34][34122]=array(
    'nombre' =>'Páramo de Boedo',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[34][34123]=array(
    'nombre' =>'Paredes de Nava',
    'habitantes' =>'1981',
    'deuda'=>'1068'
    );
$deuda[34][34124]=array(
    'nombre' =>'Payo de Ojeda',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[34][34125]=array(
    'nombre' =>'Pedraza de Campos',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[34][34126]=array(
    'nombre' =>'Pedrosa de la Vega',
    'habitantes' =>'347',
    'deuda'=>'0'
    );
$deuda[34][34127]=array(
    'nombre' =>'Perales',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[34][34129]=array(
    'nombre' =>'Pino del Río',
    'habitantes' =>'192',
    'deuda'=>'0'
    );
$deuda[34][34130]=array(
    'nombre' =>'Piña de Campos',
    'habitantes' =>'229',
    'deuda'=>'0'
    );
$deuda[34][34131]=array(
    'nombre' =>'Población de Arroyo',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[34][34132]=array(
    'nombre' =>'Población de Campos',
    'habitantes' =>'135',
    'deuda'=>'0'
    );
$deuda[34][34133]=array(
    'nombre' =>'Población de Cerrato',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[34][34134]=array(
    'nombre' =>'Polentinos',
    'habitantes' =>'55',
    'deuda'=>'38'
    );
$deuda[34][34135]=array(
    'nombre' =>'Pomar de Valdivia',
    'habitantes' =>'462',
    'deuda'=>'0'
    );
$deuda[34][34136]=array(
    'nombre' =>'Poza de la Vega',
    'habitantes' =>'225',
    'deuda'=>'0'
    );
$deuda[34][34137]=array(
    'nombre' =>'Pozo de Urama',
    'habitantes' =>'30',
    'deuda'=>'0'
    );
$deuda[34][34139]=array(
    'nombre' =>'Prádanos de Ojeda',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[34][34140]=array(
    'nombre' =>'Puebla de Valdavia, La',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[34][34141]=array(
    'nombre' =>'Quintana del Puente',
    'habitantes' =>'277',
    'deuda'=>'0'
    );
$deuda[34][34143]=array(
    'nombre' =>'Quintanilla de Onsoña',
    'habitantes' =>'192',
    'deuda'=>'0'
    );
$deuda[34][34146]=array(
    'nombre' =>'Reinoso de Cerrato',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[34][34147]=array(
    'nombre' =>'Renedo de la Vega',
    'habitantes' =>'203',
    'deuda'=>'0'
    );
$deuda[34][34149]=array(
    'nombre' =>'Requena de Campos',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[34][34151]=array(
    'nombre' =>'Respenda de la Peña',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[34][34152]=array(
    'nombre' =>'Revenga de Campos',
    'habitantes' =>'162',
    'deuda'=>'0'
    );
$deuda[34][34154]=array(
    'nombre' =>'Revilla de Collazos',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[34][34155]=array(
    'nombre' =>'Ribas de Campos',
    'habitantes' =>'166',
    'deuda'=>'0'
    );
$deuda[34][34156]=array(
    'nombre' =>'Riberos de la Cueza',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[34][34157]=array(
    'nombre' =>'Saldaña',
    'habitantes' =>'3121',
    'deuda'=>'415'
    );
$deuda[34][34158]=array(
    'nombre' =>'Salinas de Pisuerga',
    'habitantes' =>'358',
    'deuda'=>'90'
    );
$deuda[34][34159]=array(
    'nombre' =>'San Cebrián de Campos',
    'habitantes' =>'446',
    'deuda'=>'28'
    );
$deuda[34][34160]=array(
    'nombre' =>'San Cebrián de Mudá',
    'habitantes' =>'160',
    'deuda'=>'0'
    );
$deuda[34][34161]=array(
    'nombre' =>'San Cristóbal de Boedo',
    'habitantes' =>'23',
    'deuda'=>'0'
    );
$deuda[34][34163]=array(
    'nombre' =>'San Mamés de Campos',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[34][34165]=array(
    'nombre' =>'San Román de la Cuba',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[34][34167]=array(
    'nombre' =>'Santa Cecilia del Alcor',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[34][34168]=array(
    'nombre' =>'Santa Cruz de Boedo',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[34][34169]=array(
    'nombre' =>'Santervás de la Vega',
    'habitantes' =>'479',
    'deuda'=>'0'
    );
$deuda[34][34170]=array(
    'nombre' =>'Santibáñez de Ecla',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[34][34171]=array(
    'nombre' =>'Santibáñez de la Peña',
    'habitantes' =>'1101',
    'deuda'=>'0'
    );
$deuda[34][34174]=array(
    'nombre' =>'Santoyo',
    'habitantes' =>'224',
    'deuda'=>'0'
    );
$deuda[34][34175]=array(
    'nombre' =>'Serna, La',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[34][34176]=array(
    'nombre' =>'Sotobañado y Priorato',
    'habitantes' =>'159',
    'deuda'=>'0'
    );
$deuda[34][34177]=array(
    'nombre' =>'Soto de Cerrato',
    'habitantes' =>'195',
    'deuda'=>'0'
    );
$deuda[34][34178]=array(
    'nombre' =>'Tabanera de Cerrato',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[34][34179]=array(
    'nombre' =>'Tabanera de Valdavia',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[34][34180]=array(
    'nombre' =>'Támara de Campos',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[34][34181]=array(
    'nombre' =>'Tariego de Cerrato',
    'habitantes' =>'526',
    'deuda'=>'0'
    );
$deuda[34][34182]=array(
    'nombre' =>'Torquemada',
    'habitantes' =>'1025',
    'deuda'=>'0'
    );
$deuda[34][34184]=array(
    'nombre' =>'Torremormojón',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[34][34185]=array(
    'nombre' =>'Triollo',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[34][34186]=array(
    'nombre' =>'Valbuena de Pisuerga',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[34][34189]=array(
    'nombre' =>'Valdeolmillos',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[34][34190]=array(
    'nombre' =>'Valderrábano',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[34][34192]=array(
    'nombre' =>'Valde-Ucieza',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[34][34196]=array(
    'nombre' =>'Valle de Cerrato',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[34][34199]=array(
    'nombre' =>'Velilla del Río Carrión',
    'habitantes' =>'1406',
    'deuda'=>'0'
    );
$deuda[34][34201]=array(
    'nombre' =>'Vertavillo',
    'habitantes' =>'208',
    'deuda'=>'0'
    );
$deuda[34][34202]=array(
    'nombre' =>'Villabasta de Valdavia',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[34][34204]=array(
    'nombre' =>'Villacidaler',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[34][34205]=array(
    'nombre' =>'Villaconancio',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[34][34206]=array(
    'nombre' =>'Villada',
    'habitantes' =>'1036',
    'deuda'=>'72'
    );
$deuda[34][34208]=array(
    'nombre' =>'Villaeles de Valdavia',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[34][34210]=array(
    'nombre' =>'Villahán',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[34][34211]=array(
    'nombre' =>'Villaherreros',
    'habitantes' =>'208',
    'deuda'=>'0'
    );
$deuda[34][34213]=array(
    'nombre' =>'Villalaco',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[34][34214]=array(
    'nombre' =>'Villalba de Guardo',
    'habitantes' =>'204',
    'deuda'=>'0'
    );
$deuda[34][34215]=array(
    'nombre' =>'Villalcázar de Sirga',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[34][34216]=array(
    'nombre' =>'Villalcón',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[34][34217]=array(
    'nombre' =>'Villalobón',
    'habitantes' =>'1573',
    'deuda'=>'0'
    );
$deuda[34][34218]=array(
    'nombre' =>'Villaluenga de la Vega',
    'habitantes' =>'565',
    'deuda'=>'0'
    );
$deuda[34][34220]=array(
    'nombre' =>'Villamartín de Campos',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[34][34221]=array(
    'nombre' =>'Villamediana',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[34][34222]=array(
    'nombre' =>'Villameriel',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[34][34223]=array(
    'nombre' =>'Villamoronta',
    'habitantes' =>'262',
    'deuda'=>'0'
    );
$deuda[34][34224]=array(
    'nombre' =>'Villamuera de la Cueza',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[34][34225]=array(
    'nombre' =>'Villamuriel de Cerrato',
    'habitantes' =>'6370',
    'deuda'=>'655'
    );
$deuda[34][34227]=array(
    'nombre' =>'Villanueva del Rebollar',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[34][34228]=array(
    'nombre' =>'Villanuño de Valdavia',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[34][34229]=array(
    'nombre' =>'Villaprovedo',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[34][34230]=array(
    'nombre' =>'Villarmentero de Campos',
    'habitantes' =>'21',
    'deuda'=>'0'
    );
$deuda[34][34231]=array(
    'nombre' =>'Villarrabé',
    'habitantes' =>'218',
    'deuda'=>'58'
    );
$deuda[34][34232]=array(
    'nombre' =>'Villarramiel',
    'habitantes' =>'860',
    'deuda'=>'361'
    );
$deuda[34][34233]=array(
    'nombre' =>'Villasarracino',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[34][34234]=array(
    'nombre' =>'Villasila de Valdavia',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[34][34236]=array(
    'nombre' =>'Villaturde',
    'habitantes' =>'167',
    'deuda'=>'0'
    );
$deuda[34][34237]=array(
    'nombre' =>'Villaumbrales',
    'habitantes' =>'686',
    'deuda'=>'0'
    );
$deuda[34][34238]=array(
    'nombre' =>'Villaviudas',
    'habitantes' =>'395',
    'deuda'=>'0'
    );
$deuda[34][34240]=array(
    'nombre' =>'Villerías de Campos',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[34][34241]=array(
    'nombre' =>'Villodre',
    'habitantes' =>'16',
    'deuda'=>'0'
    );
$deuda[34][34242]=array(
    'nombre' =>'Villodrigo',
    'habitantes' =>'122',
    'deuda'=>'0'
    );
$deuda[34][34243]=array(
    'nombre' =>'Villoldo',
    'habitantes' =>'364',
    'deuda'=>'0'
    );
$deuda[34][34245]=array(
    'nombre' =>'Villota del Páramo',
    'habitantes' =>'326',
    'deuda'=>'0'
    );
$deuda[34][34246]=array(
    'nombre' =>'Villovieco',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[34][34901]=array(
    'nombre' =>'Osorno la Mayor',
    'habitantes' =>'1298',
    'deuda'=>'0'
    );
$deuda[34][34902]=array(
    'nombre' =>'Valle del Retortillo',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[34][34903]=array(
    'nombre' =>'Loma de Ucieza',
    'habitantes' =>'232',
    'deuda'=>'0'
    );
$deuda[34][34904]=array(
    'nombre' =>'Pernía, La',
    'habitantes' =>'349',
    'deuda'=>'0'
    );
$deuda[35][35001]=array(
    'nombre' =>'Agaete',
    'habitantes' =>'5618',
    'deuda'=>'127'
    );
$deuda[35][35002]=array(
    'nombre' =>'Agüimes',
    'habitantes' =>'30294',
    'deuda'=>'5308'
    );
$deuda[35][35003]=array(
    'nombre' =>'Antigua',
    'habitantes' =>'11024',
    'deuda'=>'0'
    );
$deuda[35][35004]=array(
    'nombre' =>'Arrecife',
    'habitantes' =>'56940',
    'deuda'=>'17342'
    );
$deuda[35][35005]=array(
    'nombre' =>'Artenara',
    'habitantes' =>'1177',
    'deuda'=>'0'
    );
$deuda[35][35006]=array(
    'nombre' =>'Arucas',
    'habitantes' =>'37054',
    'deuda'=>'0'
    );
$deuda[35][35007]=array(
    'nombre' =>'Betancuria',
    'habitantes' =>'713',
    'deuda'=>'2588'
    );
$deuda[35][35008]=array(
    'nombre' =>'Firgas',
    'habitantes' =>'7486',
    'deuda'=>'3078'
    );
$deuda[35][35009]=array(
    'nombre' =>'Gáldar',
    'habitantes' =>'24235',
    'deuda'=>'16795'
    );
$deuda[35][35010]=array(
    'nombre' =>'Haría',
    'habitantes' =>'4755',
    'deuda'=>'0'
    );
$deuda[35][35011]=array(
    'nombre' =>'Ingenio',
    'habitantes' =>'30258',
    'deuda'=>'1412'
    );
$deuda[35][35012]=array(
    'nombre' =>'Mogán',
    'habitantes' =>'22277',
    'deuda'=>'0'
    );
$deuda[35][35013]=array(
    'nombre' =>'Moya',
    'habitantes' =>'7845',
    'deuda'=>'0'
    );
$deuda[35][35014]=array(
    'nombre' =>'Oliva, La',
    'habitantes' =>'25199',
    'deuda'=>'9731'
    );
$deuda[35][35015]=array(
    'nombre' =>'Pájara',
    'habitantes' =>'19271',
    'deuda'=>'16030'
    );
$deuda[35][35016]=array(
    'nombre' =>'Palmas de Gran Canaria, Las',
    'habitantes' =>'379766',
    'deuda'=>'62903'
    );
$deuda[35][35017]=array(
    'nombre' =>'Puerto del Rosario',
    'habitantes' =>'37363',
    'deuda'=>'3406'
    );
$deuda[35][35018]=array(
    'nombre' =>'San Bartolomé',
    'habitantes' =>'18402',
    'deuda'=>'9985'
    );
$deuda[35][35019]=array(
    'nombre' =>'San Bartolomé de Tirajana',
    'habitantes' =>'54932',
    'deuda'=>'819'
    );
$deuda[35][35020]=array(
    'nombre' =>'Aldea de San Nicolás, La',
    'habitantes' =>'7969',
    'deuda'=>'3644'
    );
$deuda[35][35021]=array(
    'nombre' =>'Santa Brígida',
    'habitantes' =>'18582',
    'deuda'=>'1454'
    );
$deuda[35][35022]=array(
    'nombre' =>'Santa Lucía de Tirajana',
    'habitantes' =>'69069',
    'deuda'=>'6097'
    );
$deuda[35][35023]=array(
    'nombre' =>'Santa María de Guía de Gran Canaria',
    'habitantes' =>'13890',
    'deuda'=>'3564'
    );
$deuda[35][35024]=array(
    'nombre' =>'Teguise',
    'habitantes' =>'21454',
    'deuda'=>'14720'
    );
$deuda[35][35025]=array(
    'nombre' =>'Tejeda',
    'habitantes' =>'2001',
    'deuda'=>'0'
    );
$deuda[35][35026]=array(
    'nombre' =>'Telde',
    'habitantes' =>'102078',
    'deuda'=>'101807'
    );
$deuda[35][35027]=array(
    'nombre' =>'Teror',
    'habitantes' =>'12499',
    'deuda'=>'3343'
    );
$deuda[35][35028]=array(
    'nombre' =>'Tías',
    'habitantes' =>'20019',
    'deuda'=>'15116'
    );
$deuda[35][35029]=array(
    'nombre' =>'Tinajo',
    'habitantes' =>'5824',
    'deuda'=>'3262'
    );
$deuda[35][35030]=array(
    'nombre' =>'Tuineje',
    'habitantes' =>'13797',
    'deuda'=>'834'
    );
$deuda[35][35031]=array(
    'nombre' =>'Valsequillo de Gran Canaria',
    'habitantes' =>'9276',
    'deuda'=>'6922'
    );
$deuda[35][35032]=array(
    'nombre' =>'Valleseco',
    'habitantes' =>'3856',
    'deuda'=>'0'
    );
$deuda[35][35033]=array(
    'nombre' =>'Vega de San Mateo',
    'habitantes' =>'7668',
    'deuda'=>'0'
    );
$deuda[35][35034]=array(
    'nombre' =>'Yaiza',
    'habitantes' =>'15815',
    'deuda'=>'11339'
    );
$deuda[36][36001]=array(
    'nombre' =>'Arbo',
    'habitantes' =>'2846',
    'deuda'=>'250'
    );
$deuda[36][36002]=array(
    'nombre' =>'Barro',
    'habitantes' =>'3726',
    'deuda'=>'1161'
    );
$deuda[36][36003]=array(
    'nombre' =>'Baiona',
    'habitantes' =>'12072',
    'deuda'=>'0'
    );
$deuda[36][36004]=array(
    'nombre' =>'Bueu',
    'habitantes' =>'12251',
    'deuda'=>'1656'
    );
$deuda[36][36005]=array(
    'nombre' =>'Caldas de Reis',
    'habitantes' =>'9834',
    'deuda'=>'1337'
    );
$deuda[36][36006]=array(
    'nombre' =>'Cambados',
    'habitantes' =>'13895',
    'deuda'=>'2046'
    );
$deuda[36][36007]=array(
    'nombre' =>'Campo Lameiro',
    'habitantes' =>'1931',
    'deuda'=>'0'
    );
$deuda[36][36008]=array(
    'nombre' =>'Cangas',
    'habitantes' =>'26520',
    'deuda'=>'14241'
    );
$deuda[36][36009]=array(
    'nombre' =>'Cañiza, A',
    'habitantes' =>'5230',
    'deuda'=>'964'
    );
$deuda[36][36010]=array(
    'nombre' =>'Catoira',
    'habitantes' =>'3368',
    'deuda'=>'4614'
    );
$deuda[36][36011]=array(
    'nombre' =>'Cerdedo',
    'habitantes' =>'1828',
    'deuda'=>'363'
    );
$deuda[36][36012]=array(
    'nombre' =>'Cotobade',
    'habitantes' =>'4332',
    'deuda'=>'0'
    );
$deuda[36][36013]=array(
    'nombre' =>'Covelo',
    'habitantes' =>'2617',
    'deuda'=>'0'
    );
$deuda[36][36014]=array(
    'nombre' =>'Crecente',
    'habitantes' =>'2252',
    'deuda'=>'123'
    );
$deuda[36][36015]=array(
    'nombre' =>'Cuntis',
    'habitantes' =>'4878',
    'deuda'=>'0'
    );
$deuda[36][36016]=array(
    'nombre' =>'Dozón',
    'habitantes' =>'1174',
    'deuda'=>'175'
    );
$deuda[36][36017]=array(
    'nombre' =>'Estrada, A',
    'habitantes' =>'21025',
    'deuda'=>'2634'
    );
$deuda[36][36018]=array(
    'nombre' =>'Forcarei',
    'habitantes' =>'3683',
    'deuda'=>'0'
    );
$deuda[36][36019]=array(
    'nombre' =>'Fornelos de Montes',
    'habitantes' =>'1794',
    'deuda'=>'82'
    );
$deuda[36][36020]=array(
    'nombre' =>'Agolada',
    'habitantes' =>'2585',
    'deuda'=>'1135'
    );
$deuda[36][36021]=array(
    'nombre' =>'Gondomar',
    'habitantes' =>'14056',
    'deuda'=>'368'
    );
$deuda[36][36022]=array(
    'nombre' =>'Grove, O',
    'habitantes' =>'10801',
    'deuda'=>'3549'
    );
$deuda[36][36023]=array(
    'nombre' =>'Guarda, A',
    'habitantes' =>'10193',
    'deuda'=>'515'
    );
$deuda[36][36024]=array(
    'nombre' =>'Lalín',
    'habitantes' =>'20005',
    'deuda'=>'4266'
    );
$deuda[36][36025]=array(
    'nombre' =>'Lama, A',
    'habitantes' =>'2670',
    'deuda'=>'189'
    );
$deuda[36][36026]=array(
    'nombre' =>'Marín',
    'habitantes' =>'25084',
    'deuda'=>'2238'
    );
$deuda[36][36027]=array(
    'nombre' =>'Meaño',
    'habitantes' =>'5382',
    'deuda'=>'0'
    );
$deuda[36][36028]=array(
    'nombre' =>'Meis',
    'habitantes' =>'5006',
    'deuda'=>'666'
    );
$deuda[36][36029]=array(
    'nombre' =>'Moaña',
    'habitantes' =>'19492',
    'deuda'=>'5977'
    );
$deuda[36][36030]=array(
    'nombre' =>'Mondariz',
    'habitantes' =>'4665',
    'deuda'=>'0'
    );
$deuda[36][36031]=array(
    'nombre' =>'Mondariz-Balneario',
    'habitantes' =>'652',
    'deuda'=>'0'
    );
$deuda[36][36032]=array(
    'nombre' =>'Moraña',
    'habitantes' =>'4358',
    'deuda'=>'0'
    );
$deuda[36][36033]=array(
    'nombre' =>'Mos',
    'habitantes' =>'15305',
    'deuda'=>'10244'
    );
$deuda[36][36034]=array(
    'nombre' =>'Neves, As',
    'habitantes' =>'4066',
    'deuda'=>'0'
    );
$deuda[36][36035]=array(
    'nombre' =>'Nigrán',
    'habitantes' =>'17619',
    'deuda'=>'909'
    );
$deuda[36][36036]=array(
    'nombre' =>'Oia',
    'habitantes' =>'3008',
    'deuda'=>'57'
    );
$deuda[36][36037]=array(
    'nombre' =>'Pazos de Borbén',
    'habitantes' =>'3067',
    'deuda'=>'0'
    );
$deuda[36][36038]=array(
    'nombre' =>'Pontevedra',
    'habitantes' =>'82539',
    'deuda'=>'12758'
    );
$deuda[36][36039]=array(
    'nombre' =>'Porriño, O',
    'habitantes' =>'18898',
    'deuda'=>'1628'
    );
$deuda[36][36040]=array(
    'nombre' =>'Portas',
    'habitantes' =>'3061',
    'deuda'=>'801'
    );
$deuda[36][36041]=array(
    'nombre' =>'Poio',
    'habitantes' =>'16842',
    'deuda'=>'6512'
    );
$deuda[36][36042]=array(
    'nombre' =>'Ponteareas',
    'habitantes' =>'22990',
    'deuda'=>'3047'
    );
$deuda[36][36043]=array(
    'nombre' =>'Ponte Caldelas',
    'habitantes' =>'5540',
    'deuda'=>'481'
    );
$deuda[36][36044]=array(
    'nombre' =>'Pontecesures',
    'habitantes' =>'3062',
    'deuda'=>'0'
    );
$deuda[36][36045]=array(
    'nombre' =>'Redondela',
    'habitantes' =>'29697',
    'deuda'=>'4910'
    );
$deuda[36][36046]=array(
    'nombre' =>'Ribadumia',
    'habitantes' =>'5087',
    'deuda'=>'0'
    );
$deuda[36][36047]=array(
    'nombre' =>'Rodeiro',
    'habitantes' =>'2700',
    'deuda'=>'0'
    );
$deuda[36][36048]=array(
    'nombre' =>'Rosal, O',
    'habitantes' =>'6406',
    'deuda'=>'0'
    );
$deuda[36][36049]=array(
    'nombre' =>'Salceda de Caselas',
    'habitantes' =>'8873',
    'deuda'=>'1171'
    );
$deuda[36][36050]=array(
    'nombre' =>'Salvaterra de Miño',
    'habitantes' =>'9619',
    'deuda'=>'4081'
    );
$deuda[36][36051]=array(
    'nombre' =>'Sanxenxo',
    'habitantes' =>'17391',
    'deuda'=>'10440'
    );
$deuda[36][36052]=array(
    'nombre' =>'Silleda',
    'habitantes' =>'8772',
    'deuda'=>'2951'
    );
$deuda[36][36053]=array(
    'nombre' =>'Soutomaior',
    'habitantes' =>'7317',
    'deuda'=>'0'
    );
$deuda[36][36054]=array(
    'nombre' =>'Tomiño',
    'habitantes' =>'13662',
    'deuda'=>'1281'
    );
$deuda[36][36055]=array(
    'nombre' =>'Tui',
    'habitantes' =>'17013',
    'deuda'=>'0'
    );
$deuda[36][36056]=array(
    'nombre' =>'Valga',
    'habitantes' =>'6062',
    'deuda'=>'0'
    );
$deuda[36][36057]=array(
    'nombre' =>'Vigo',
    'habitantes' =>'294098',
    'deuda'=>'12286'
    );
$deuda[36][36058]=array(
    'nombre' =>'Vilaboa',
    'habitantes' =>'6059',
    'deuda'=>'210'
    );
$deuda[36][36059]=array(
    'nombre' =>'Vila de Cruces',
    'habitantes' =>'5556',
    'deuda'=>'234'
    );
$deuda[36][36060]=array(
    'nombre' =>'Vilagarcía de Arousa',
    'habitantes' =>'37482',
    'deuda'=>'12504'
    );
$deuda[36][36061]=array(
    'nombre' =>'Vilanova de Arousa',
    'habitantes' =>'10422',
    'deuda'=>'6923'
    );
$deuda[36][36901]=array(
    'nombre' =>'Illa de Arousa, A',
    'habitantes' =>'4956',
    'deuda'=>'135'
    );
$deuda[37][37001]=array(
    'nombre' =>'Abusejo',
    'habitantes' =>'213',
    'deuda'=>'0'
    );
$deuda[37][37002]=array(
    'nombre' =>'Agallas',
    'habitantes' =>'157',
    'deuda'=>'0'
    );
$deuda[37][37003]=array(
    'nombre' =>'Ahigal de los Aceiteros',
    'habitantes' =>'136',
    'deuda'=>'0'
    );
$deuda[37][37004]=array(
    'nombre' =>'Ahigal de Villarino',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[37][37005]=array(
    'nombre' =>'Alameda de Gardón, La',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[37][37006]=array(
    'nombre' =>'Alamedilla, La',
    'habitantes' =>'146',
    'deuda'=>'0'
    );
$deuda[37][37007]=array(
    'nombre' =>'Alaraz',
    'habitantes' =>'502',
    'deuda'=>'483'
    );
$deuda[37][37008]=array(
    'nombre' =>'Alba de Tormes',
    'habitantes' =>'5309',
    'deuda'=>'1092'
    );
$deuda[37][37009]=array(
    'nombre' =>'Alba de Yeltes',
    'habitantes' =>'240',
    'deuda'=>'0'
    );
$deuda[37][37010]=array(
    'nombre' =>'Alberca, La',
    'habitantes' =>'1121',
    'deuda'=>'1590'
    );
$deuda[37][37011]=array(
    'nombre' =>'Alberguería de Argañán, La',
    'habitantes' =>'138',
    'deuda'=>'0'
    );
$deuda[37][37012]=array(
    'nombre' =>'Alconada',
    'habitantes' =>'160',
    'deuda'=>'0'
    );
$deuda[37][37013]=array(
    'nombre' =>'Aldeacipreste',
    'habitantes' =>'126',
    'deuda'=>'0'
    );
$deuda[37][37014]=array(
    'nombre' =>'Aldeadávila de la Ribera',
    'habitantes' =>'1264',
    'deuda'=>'0'
    );
$deuda[37][37015]=array(
    'nombre' =>'Aldea del Obispo',
    'habitantes' =>'313',
    'deuda'=>'0'
    );
$deuda[37][37016]=array(
    'nombre' =>'Aldealengua',
    'habitantes' =>'696',
    'deuda'=>'102'
    );
$deuda[37][37017]=array(
    'nombre' =>'Aldeanueva de Figueroa',
    'habitantes' =>'291',
    'deuda'=>'0'
    );
$deuda[37][37018]=array(
    'nombre' =>'Aldeanueva de la Sierra',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[37][37019]=array(
    'nombre' =>'Aldearrodrigo',
    'habitantes' =>'155',
    'deuda'=>'34'
    );
$deuda[37][37020]=array(
    'nombre' =>'Aldearrubia',
    'habitantes' =>'489',
    'deuda'=>'67'
    );
$deuda[37][37021]=array(
    'nombre' =>'Aldeaseca de Alba',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[37][37022]=array(
    'nombre' =>'Aldeaseca de la Frontera',
    'habitantes' =>'295',
    'deuda'=>'0'
    );
$deuda[37][37023]=array(
    'nombre' =>'Aldeatejada',
    'habitantes' =>'1724',
    'deuda'=>'10'
    );
$deuda[37][37024]=array(
    'nombre' =>'Aldeavieja de Tormes',
    'habitantes' =>'107',
    'deuda'=>'0'
    );
$deuda[37][37025]=array(
    'nombre' =>'Aldehuela de la Bóveda',
    'habitantes' =>'287',
    'deuda'=>'29'
    );
$deuda[37][37026]=array(
    'nombre' =>'Aldehuela de Yeltes',
    'habitantes' =>'213',
    'deuda'=>'13'
    );
$deuda[37][37027]=array(
    'nombre' =>'Almenara de Tormes',
    'habitantes' =>'250',
    'deuda'=>'30'
    );
$deuda[37][37028]=array(
    'nombre' =>'Almendra',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[37][37029]=array(
    'nombre' =>'Anaya de Alba',
    'habitantes' =>'219',
    'deuda'=>'0'
    );
$deuda[37][37030]=array(
    'nombre' =>'Añover de Tormes',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[37][37031]=array(
    'nombre' =>'Arabayona de Mógica',
    'habitantes' =>'396',
    'deuda'=>'0'
    );
$deuda[37][37032]=array(
    'nombre' =>'Arapiles',
    'habitantes' =>'644',
    'deuda'=>'0'
    );
$deuda[37][37033]=array(
    'nombre' =>'Arcediano',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[37][37034]=array(
    'nombre' =>'Arco, El',
    'habitantes' =>'94',
    'deuda'=>'36'
    );
$deuda[37][37035]=array(
    'nombre' =>'Armenteros',
    'habitantes' =>'281',
    'deuda'=>'0'
    );
$deuda[37][37036]=array(
    'nombre' =>'San Miguel del Robledo',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[37][37037]=array(
    'nombre' =>'Atalaya, La',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[37][37038]=array(
    'nombre' =>'Babilafuente',
    'habitantes' =>'877',
    'deuda'=>'100'
    );
$deuda[37][37039]=array(
    'nombre' =>'Bañobárez',
    'habitantes' =>'317',
    'deuda'=>'0'
    );
$deuda[37][37040]=array(
    'nombre' =>'Barbadillo',
    'habitantes' =>'398',
    'deuda'=>'47'
    );
$deuda[37][37041]=array(
    'nombre' =>'Barbalos',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[37][37042]=array(
    'nombre' =>'Barceo',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[37][37044]=array(
    'nombre' =>'Barruecopardo',
    'habitantes' =>'496',
    'deuda'=>'0'
    );
$deuda[37][37045]=array(
    'nombre' =>'Bastida, La',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[37][37046]=array(
    'nombre' =>'Béjar',
    'habitantes' =>'13724',
    'deuda'=>'1973'
    );
$deuda[37][37047]=array(
    'nombre' =>'Beleña',
    'habitantes' =>'220',
    'deuda'=>'0'
    );
$deuda[37][37049]=array(
    'nombre' =>'Bermellar',
    'habitantes' =>'148',
    'deuda'=>'44'
    );
$deuda[37][37050]=array(
    'nombre' =>'Berrocal de Huebra',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[37][37051]=array(
    'nombre' =>'Berrocal de Salvatierra',
    'habitantes' =>'87',
    'deuda'=>'0'
    );
$deuda[37][37052]=array(
    'nombre' =>'Boada',
    'habitantes' =>'298',
    'deuda'=>'56'
    );
$deuda[37][37054]=array(
    'nombre' =>'Bodón, El',
    'habitantes' =>'296',
    'deuda'=>'18'
    );
$deuda[37][37055]=array(
    'nombre' =>'Bogajo',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[37][37056]=array(
    'nombre' =>'Bouza, La',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[37][37057]=array(
    'nombre' =>'Bóveda del Río Almar',
    'habitantes' =>'242',
    'deuda'=>'0'
    );
$deuda[37][37058]=array(
    'nombre' =>'Brincones',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[37][37059]=array(
    'nombre' =>'Buenamadre',
    'habitantes' =>'136',
    'deuda'=>'0'
    );
$deuda[37][37060]=array(
    'nombre' =>'Buenavista',
    'habitantes' =>'265',
    'deuda'=>'314'
    );
$deuda[37][37061]=array(
    'nombre' =>'Cabaco, El',
    'habitantes' =>'244',
    'deuda'=>'14'
    );
$deuda[37][37062]=array(
    'nombre' =>'Cabezabellosa de la Calzada',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[37][37063]=array(
    'nombre' =>'Cabeza de Béjar, La',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[37][37065]=array(
    'nombre' =>'Cabeza del Caballo',
    'habitantes' =>'349',
    'deuda'=>'0'
    );
$deuda[37][37067]=array(
    'nombre' =>'Cabrerizos',
    'habitantes' =>'4198',
    'deuda'=>'321'
    );
$deuda[37][37068]=array(
    'nombre' =>'Cabrillas',
    'habitantes' =>'405',
    'deuda'=>'0'
    );
$deuda[37][37069]=array(
    'nombre' =>'Calvarrasa de Abajo',
    'habitantes' =>'1155',
    'deuda'=>'0'
    );
$deuda[37][37070]=array(
    'nombre' =>'Calvarrasa de Arriba',
    'habitantes' =>'620',
    'deuda'=>'0'
    );
$deuda[37][37071]=array(
    'nombre' =>'Calzada de Béjar, La',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[37][37072]=array(
    'nombre' =>'Calzada de Don Diego',
    'habitantes' =>'185',
    'deuda'=>'42'
    );
$deuda[37][37073]=array(
    'nombre' =>'Calzada de Valdunciel',
    'habitantes' =>'655',
    'deuda'=>'0'
    );
$deuda[37][37074]=array(
    'nombre' =>'Campillo de Azaba',
    'habitantes' =>'173',
    'deuda'=>'0'
    );
$deuda[37][37077]=array(
    'nombre' =>'Campo de Peñaranda, El',
    'habitantes' =>'278',
    'deuda'=>'0'
    );
$deuda[37][37078]=array(
    'nombre' =>'Candelario',
    'habitantes' =>'930',
    'deuda'=>'0'
    );
$deuda[37][37079]=array(
    'nombre' =>'Canillas de Abajo',
    'habitantes' =>'70',
    'deuda'=>'24'
    );
$deuda[37][37080]=array(
    'nombre' =>'Cantagallo',
    'habitantes' =>'270',
    'deuda'=>'49'
    );
$deuda[37][37081]=array(
    'nombre' =>'Cantalapiedra',
    'habitantes' =>'1027',
    'deuda'=>'260'
    );
$deuda[37][37082]=array(
    'nombre' =>'Cantalpino',
    'habitantes' =>'937',
    'deuda'=>'130'
    );
$deuda[37][37083]=array(
    'nombre' =>'Cantaracillo',
    'habitantes' =>'195',
    'deuda'=>'27'
    );
$deuda[37][37085]=array(
    'nombre' =>'Carbajosa de la Sagrada',
    'habitantes' =>'6740',
    'deuda'=>'53'
    );
$deuda[37][37086]=array(
    'nombre' =>'Carpio de Azaba',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[37][37087]=array(
    'nombre' =>'Carrascal de Barregas',
    'habitantes' =>'1086',
    'deuda'=>'43'
    );
$deuda[37][37088]=array(
    'nombre' =>'Carrascal del Obispo',
    'habitantes' =>'225',
    'deuda'=>'0'
    );
$deuda[37][37089]=array(
    'nombre' =>'Casafranca',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[37][37090]=array(
    'nombre' =>'Casas del Conde, Las',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[37][37091]=array(
    'nombre' =>'Casillas de Flores',
    'habitantes' =>'189',
    'deuda'=>'0'
    );
$deuda[37][37092]=array(
    'nombre' =>'Castellanos de Moriscos',
    'habitantes' =>'2322',
    'deuda'=>'339'
    );
$deuda[37][37096]=array(
    'nombre' =>'Castillejo de Martín Viejo',
    'habitantes' =>'238',
    'deuda'=>'0'
    );
$deuda[37][37097]=array(
    'nombre' =>'Castraz',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[37][37098]=array(
    'nombre' =>'Cepeda',
    'habitantes' =>'371',
    'deuda'=>'299'
    );
$deuda[37][37099]=array(
    'nombre' =>'Cereceda de la Sierra',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[37][37100]=array(
    'nombre' =>'Cerezal de Peñahorcada',
    'habitantes' =>'81',
    'deuda'=>'0'
    );
$deuda[37][37101]=array(
    'nombre' =>'Cerralbo',
    'habitantes' =>'178',
    'deuda'=>'0'
    );
$deuda[37][37102]=array(
    'nombre' =>'Cerro, El',
    'habitantes' =>'449',
    'deuda'=>'0'
    );
$deuda[37][37103]=array(
    'nombre' =>'Cespedosa de Tormes',
    'habitantes' =>'534',
    'deuda'=>'62'
    );
$deuda[37][37104]=array(
    'nombre' =>'Cilleros de la Bastida',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[37][37106]=array(
    'nombre' =>'Cipérez',
    'habitantes' =>'284',
    'deuda'=>'0'
    );
$deuda[37][37107]=array(
    'nombre' =>'Ciudad Rodrigo',
    'habitantes' =>'13052',
    'deuda'=>'2977'
    );
$deuda[37][37108]=array(
    'nombre' =>'Coca de Alba',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[37][37109]=array(
    'nombre' =>'Colmenar de Montemayor',
    'habitantes' =>'189',
    'deuda'=>'0'
    );
$deuda[37][37110]=array(
    'nombre' =>'Cordovilla',
    'habitantes' =>'132',
    'deuda'=>'0'
    );
$deuda[37][37112]=array(
    'nombre' =>'Cristóbal',
    'habitantes' =>'175',
    'deuda'=>'0'
    );
$deuda[37][37113]=array(
    'nombre' =>'Cubo de Don Sancho, El',
    'habitantes' =>'465',
    'deuda'=>'343'
    );
$deuda[37][37114]=array(
    'nombre' =>'Chagarcía Medianero',
    'habitantes' =>'95',
    'deuda'=>'0'
    );
$deuda[37][37115]=array(
    'nombre' =>'Dios le Guarde',
    'habitantes' =>'141',
    'deuda'=>'23'
    );
$deuda[37][37116]=array(
    'nombre' =>'Doñinos de Ledesma',
    'habitantes' =>'72',
    'deuda'=>'22'
    );
$deuda[37][37117]=array(
    'nombre' =>'Doñinos de Salamanca',
    'habitantes' =>'1952',
    'deuda'=>'0'
    );
$deuda[37][37118]=array(
    'nombre' =>'Ejeme',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[37][37119]=array(
    'nombre' =>'Encina, La',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[37][37120]=array(
    'nombre' =>'Encina de San Silvestre',
    'habitantes' =>'110',
    'deuda'=>'12'
    );
$deuda[37][37121]=array(
    'nombre' =>'Encinas de Abajo',
    'habitantes' =>'666',
    'deuda'=>'61'
    );
$deuda[37][37122]=array(
    'nombre' =>'Encinas de Arriba',
    'habitantes' =>'248',
    'deuda'=>'0'
    );
$deuda[37][37123]=array(
    'nombre' =>'Encinasola de los Comendadores',
    'habitantes' =>'194',
    'deuda'=>'0'
    );
$deuda[37][37124]=array(
    'nombre' =>'Endrinal',
    'habitantes' =>'238',
    'deuda'=>'77'
    );
$deuda[37][37125]=array(
    'nombre' =>'Escurial de la Sierra',
    'habitantes' =>'254',
    'deuda'=>'0'
    );
$deuda[37][37126]=array(
    'nombre' =>'Espadaña',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[37][37127]=array(
    'nombre' =>'Espeja',
    'habitantes' =>'252',
    'deuda'=>'0'
    );
$deuda[37][37128]=array(
    'nombre' =>'Espino de la Orbada',
    'habitantes' =>'283',
    'deuda'=>'0'
    );
$deuda[37][37129]=array(
    'nombre' =>'Florida de Liébana',
    'habitantes' =>'281',
    'deuda'=>'0'
    );
$deuda[37][37130]=array(
    'nombre' =>'Forfoleda',
    'habitantes' =>'187',
    'deuda'=>'0'
    );
$deuda[37][37131]=array(
    'nombre' =>'Frades de la Sierra',
    'habitantes' =>'214',
    'deuda'=>'0'
    );
$deuda[37][37132]=array(
    'nombre' =>'Fregeneda, La',
    'habitantes' =>'382',
    'deuda'=>'0'
    );
$deuda[37][37133]=array(
    'nombre' =>'Fresnedoso',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[37][37134]=array(
    'nombre' =>'Fresno Alhándiga',
    'habitantes' =>'247',
    'deuda'=>'36'
    );
$deuda[37][37135]=array(
    'nombre' =>'Fuente de San Esteban, La',
    'habitantes' =>'1376',
    'deuda'=>'0'
    );
$deuda[37][37136]=array(
    'nombre' =>'Fuenteguinaldo',
    'habitantes' =>'706',
    'deuda'=>'0'
    );
$deuda[37][37137]=array(
    'nombre' =>'Fuenteliante',
    'habitantes' =>'110',
    'deuda'=>'0'
    );
$deuda[37][37138]=array(
    'nombre' =>'Fuenterroble de Salvatierra',
    'habitantes' =>'252',
    'deuda'=>'0'
    );
$deuda[37][37139]=array(
    'nombre' =>'Fuentes de Béjar',
    'habitantes' =>'254',
    'deuda'=>'0'
    );
$deuda[37][37140]=array(
    'nombre' =>'Fuentes de Oñoro',
    'habitantes' =>'1070',
    'deuda'=>'829'
    );
$deuda[37][37141]=array(
    'nombre' =>'Gajates',
    'habitantes' =>'166',
    'deuda'=>'0'
    );
$deuda[37][37142]=array(
    'nombre' =>'Galindo y Perahuy',
    'habitantes' =>'710',
    'deuda'=>'0'
    );
$deuda[37][37143]=array(
    'nombre' =>'Galinduste',
    'habitantes' =>'452',
    'deuda'=>'0'
    );
$deuda[37][37144]=array(
    'nombre' =>'Galisancho',
    'habitantes' =>'395',
    'deuda'=>'0'
    );
$deuda[37][37145]=array(
    'nombre' =>'Gallegos de Argañán',
    'habitantes' =>'291',
    'deuda'=>'29'
    );
$deuda[37][37146]=array(
    'nombre' =>'Gallegos de Solmirón',
    'habitantes' =>'140',
    'deuda'=>'0'
    );
$deuda[37][37147]=array(
    'nombre' =>'Garcibuey',
    'habitantes' =>'185',
    'deuda'=>'79'
    );
$deuda[37][37148]=array(
    'nombre' =>'Garcihernández',
    'habitantes' =>'491',
    'deuda'=>'0'
    );
$deuda[37][37149]=array(
    'nombre' =>'Garcirrey',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[37][37150]=array(
    'nombre' =>'Gejuelo del Barro',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[37][37151]=array(
    'nombre' =>'Golpejas',
    'habitantes' =>'157',
    'deuda'=>'10'
    );
$deuda[37][37152]=array(
    'nombre' =>'Gomecello',
    'habitantes' =>'480',
    'deuda'=>'138'
    );
$deuda[37][37154]=array(
    'nombre' =>'Guadramiro',
    'habitantes' =>'152',
    'deuda'=>'0'
    );
$deuda[37][37155]=array(
    'nombre' =>'Guijo de Ávila',
    'habitantes' =>'87',
    'deuda'=>'20'
    );
$deuda[37][37156]=array(
    'nombre' =>'Guijuelo',
    'habitantes' =>'5673',
    'deuda'=>'3719'
    );
$deuda[37][37157]=array(
    'nombre' =>'Herguijuela de Ciudad Rodrigo',
    'habitantes' =>'81',
    'deuda'=>'0'
    );
$deuda[37][37158]=array(
    'nombre' =>'Herguijuela de la Sierra',
    'habitantes' =>'274',
    'deuda'=>'0'
    );
$deuda[37][37159]=array(
    'nombre' =>'Herguijuela del Campo',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[37][37160]=array(
    'nombre' =>'Hinojosa de Duero',
    'habitantes' =>'712',
    'deuda'=>'101'
    );
$deuda[37][37161]=array(
    'nombre' =>'Horcajo de Montemayor',
    'habitantes' =>'159',
    'deuda'=>'58'
    );
$deuda[37][37162]=array(
    'nombre' =>'Horcajo Medianero',
    'habitantes' =>'218',
    'deuda'=>'0'
    );
$deuda[37][37163]=array(
    'nombre' =>'Hoya, La',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[37][37164]=array(
    'nombre' =>'Huerta',
    'habitantes' =>'306',
    'deuda'=>'0'
    );
$deuda[37][37165]=array(
    'nombre' =>'Iruelos',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[37][37166]=array(
    'nombre' =>'Ituero de Azaba',
    'habitantes' =>'232',
    'deuda'=>'0'
    );
$deuda[37][37167]=array(
    'nombre' =>'Juzbado',
    'habitantes' =>'166',
    'deuda'=>'0'
    );
$deuda[37][37168]=array(
    'nombre' =>'Lagunilla',
    'habitantes' =>'507',
    'deuda'=>'263'
    );
$deuda[37][37169]=array(
    'nombre' =>'Larrodrigo',
    'habitantes' =>'191',
    'deuda'=>'0'
    );
$deuda[37][37170]=array(
    'nombre' =>'Ledesma',
    'habitantes' =>'1778',
    'deuda'=>'3267'
    );
$deuda[37][37171]=array(
    'nombre' =>'Ledrada',
    'habitantes' =>'507',
    'deuda'=>'208'
    );
$deuda[37][37172]=array(
    'nombre' =>'Linares de Riofrío',
    'habitantes' =>'983',
    'deuda'=>'0'
    );
$deuda[37][37173]=array(
    'nombre' =>'Lumbrales',
    'habitantes' =>'1735',
    'deuda'=>'0'
    );
$deuda[37][37174]=array(
    'nombre' =>'Macotera',
    'habitantes' =>'1184',
    'deuda'=>'331'
    );
$deuda[37][37175]=array(
    'nombre' =>'Machacón',
    'habitantes' =>'456',
    'deuda'=>'53'
    );
$deuda[37][37176]=array(
    'nombre' =>'Madroñal',
    'habitantes' =>'159',
    'deuda'=>'7'
    );
$deuda[37][37177]=array(
    'nombre' =>'Maíllo, El',
    'habitantes' =>'289',
    'deuda'=>'0'
    );
$deuda[37][37178]=array(
    'nombre' =>'Malpartida',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[37][37179]=array(
    'nombre' =>'Mancera de Abajo',
    'habitantes' =>'230',
    'deuda'=>'0'
    );
$deuda[37][37180]=array(
    'nombre' =>'Manzano, El',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[37][37181]=array(
    'nombre' =>'Martiago',
    'habitantes' =>'296',
    'deuda'=>'0'
    );
$deuda[37][37182]=array(
    'nombre' =>'Martinamor',
    'habitantes' =>'97',
    'deuda'=>'0'
    );
$deuda[37][37183]=array(
    'nombre' =>'Martín de Yeltes',
    'habitantes' =>'447',
    'deuda'=>'105'
    );
$deuda[37][37184]=array(
    'nombre' =>'Masueco',
    'habitantes' =>'348',
    'deuda'=>'34'
    );
$deuda[37][37185]=array(
    'nombre' =>'Castellanos de Villiquera',
    'habitantes' =>'684',
    'deuda'=>'0'
    );
$deuda[37][37186]=array(
    'nombre' =>'Mata de Ledesma, La',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[37][37187]=array(
    'nombre' =>'Matilla de los Caños del Río',
    'habitantes' =>'633',
    'deuda'=>'42'
    );
$deuda[37][37188]=array(
    'nombre' =>'Maya, La',
    'habitantes' =>'199',
    'deuda'=>'0'
    );
$deuda[37][37189]=array(
    'nombre' =>'Membribe de la Sierra',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[37][37190]=array(
    'nombre' =>'Mieza',
    'habitantes' =>'227',
    'deuda'=>'0'
    );
$deuda[37][37191]=array(
    'nombre' =>'Milano, El',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[37][37192]=array(
    'nombre' =>'Miranda de Azán',
    'habitantes' =>'423',
    'deuda'=>'0'
    );
$deuda[37][37193]=array(
    'nombre' =>'Miranda del Castañar',
    'habitantes' =>'450',
    'deuda'=>'346'
    );
$deuda[37][37194]=array(
    'nombre' =>'Mogarraz',
    'habitantes' =>'314',
    'deuda'=>'54'
    );
$deuda[37][37195]=array(
    'nombre' =>'Molinillo',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[37][37196]=array(
    'nombre' =>'Monforte de la Sierra',
    'habitantes' =>'89',
    'deuda'=>'28'
    );
$deuda[37][37197]=array(
    'nombre' =>'Monleón',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[37][37198]=array(
    'nombre' =>'Monleras',
    'habitantes' =>'245',
    'deuda'=>'0'
    );
$deuda[37][37199]=array(
    'nombre' =>'Monsagro',
    'habitantes' =>'148',
    'deuda'=>'42'
    );
$deuda[37][37200]=array(
    'nombre' =>'Montejo',
    'habitantes' =>'206',
    'deuda'=>'0'
    );
$deuda[37][37201]=array(
    'nombre' =>'Montemayor del Río',
    'habitantes' =>'301',
    'deuda'=>'0'
    );
$deuda[37][37202]=array(
    'nombre' =>'Monterrubio de Armuña',
    'habitantes' =>'1324',
    'deuda'=>'717'
    );
$deuda[37][37203]=array(
    'nombre' =>'Monterrubio de la Sierra',
    'habitantes' =>'182',
    'deuda'=>'0'
    );
$deuda[37][37204]=array(
    'nombre' =>'Morasverdes',
    'habitantes' =>'288',
    'deuda'=>'43'
    );
$deuda[37][37205]=array(
    'nombre' =>'Morille',
    'habitantes' =>'252',
    'deuda'=>'71'
    );
$deuda[37][37206]=array(
    'nombre' =>'Moríñigo',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[37][37207]=array(
    'nombre' =>'Moriscos',
    'habitantes' =>'354',
    'deuda'=>'0'
    );
$deuda[37][37208]=array(
    'nombre' =>'Moronta',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[37][37209]=array(
    'nombre' =>'Mozárbez',
    'habitantes' =>'512',
    'deuda'=>'0'
    );
$deuda[37][37211]=array(
    'nombre' =>'Narros de Matalayegua',
    'habitantes' =>'241',
    'deuda'=>'0'
    );
$deuda[37][37212]=array(
    'nombre' =>'Navacarros',
    'habitantes' =>'120',
    'deuda'=>'37'
    );
$deuda[37][37213]=array(
    'nombre' =>'Nava de Béjar',
    'habitantes' =>'98',
    'deuda'=>'0'
    );
$deuda[37][37214]=array(
    'nombre' =>'Nava de Francia',
    'habitantes' =>'138',
    'deuda'=>'0'
    );
$deuda[37][37215]=array(
    'nombre' =>'Nava de Sotrobal',
    'habitantes' =>'170',
    'deuda'=>'0'
    );
$deuda[37][37216]=array(
    'nombre' =>'Navales',
    'habitantes' =>'341',
    'deuda'=>'0'
    );
$deuda[37][37217]=array(
    'nombre' =>'Navalmoral de Béjar',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[37][37218]=array(
    'nombre' =>'Navamorales',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[37][37219]=array(
    'nombre' =>'Navarredonda de la Rinconada',
    'habitantes' =>'194',
    'deuda'=>'0'
    );
$deuda[37][37221]=array(
    'nombre' =>'Navasfrías',
    'habitantes' =>'475',
    'deuda'=>'108'
    );
$deuda[37][37222]=array(
    'nombre' =>'Negrilla de Palencia',
    'habitantes' =>'98',
    'deuda'=>'101'
    );
$deuda[37][37223]=array(
    'nombre' =>'Olmedo de Camaces',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[37][37224]=array(
    'nombre' =>'Orbada, La',
    'habitantes' =>'225',
    'deuda'=>'0'
    );
$deuda[37][37225]=array(
    'nombre' =>'Pajares de la Laguna',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[37][37226]=array(
    'nombre' =>'Palacios del Arzobispo',
    'habitantes' =>'170',
    'deuda'=>'0'
    );
$deuda[37][37228]=array(
    'nombre' =>'Palaciosrubios',
    'habitantes' =>'393',
    'deuda'=>'0'
    );
$deuda[37][37229]=array(
    'nombre' =>'Palencia de Negrilla',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[37][37230]=array(
    'nombre' =>'Parada de Arriba',
    'habitantes' =>'265',
    'deuda'=>'0'
    );
$deuda[37][37231]=array(
    'nombre' =>'Parada de Rubiales',
    'habitantes' =>'281',
    'deuda'=>'0'
    );
$deuda[37][37232]=array(
    'nombre' =>'Paradinas de San Juan',
    'habitantes' =>'421',
    'deuda'=>'0'
    );
$deuda[37][37233]=array(
    'nombre' =>'Pastores',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[37][37234]=array(
    'nombre' =>'Payo, El',
    'habitantes' =>'404',
    'deuda'=>'0'
    );
$deuda[37][37235]=array(
    'nombre' =>'Pedraza de Alba',
    'habitantes' =>'249',
    'deuda'=>'0'
    );
$deuda[37][37236]=array(
    'nombre' =>'Pedrosillo de Alba',
    'habitantes' =>'152',
    'deuda'=>'0'
    );
$deuda[37][37237]=array(
    'nombre' =>'Pedrosillo de los Aires',
    'habitantes' =>'385',
    'deuda'=>'17'
    );
$deuda[37][37238]=array(
    'nombre' =>'Pedrosillo el Ralo',
    'habitantes' =>'143',
    'deuda'=>'0'
    );
$deuda[37][37239]=array(
    'nombre' =>'Pedroso de la Armuña, El',
    'habitantes' =>'252',
    'deuda'=>'0'
    );
$deuda[37][37240]=array(
    'nombre' =>'Pelabravo',
    'habitantes' =>'1126',
    'deuda'=>'162'
    );
$deuda[37][37241]=array(
    'nombre' =>'Pelarrodríguez',
    'habitantes' =>'173',
    'deuda'=>'0'
    );
$deuda[37][37242]=array(
    'nombre' =>'Pelayos',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[37][37243]=array(
    'nombre' =>'Peña, La',
    'habitantes' =>'110',
    'deuda'=>'0'
    );
$deuda[37][37244]=array(
    'nombre' =>'Peñacaballera',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[37][37245]=array(
    'nombre' =>'Peñaparda',
    'habitantes' =>'375',
    'deuda'=>'0'
    );
$deuda[37][37246]=array(
    'nombre' =>'Peñaranda de Bracamonte',
    'habitantes' =>'6557',
    'deuda'=>'2461'
    );
$deuda[37][37247]=array(
    'nombre' =>'Peñarandilla',
    'habitantes' =>'214',
    'deuda'=>'0'
    );
$deuda[37][37248]=array(
    'nombre' =>'Peralejos de Abajo',
    'habitantes' =>'169',
    'deuda'=>'22'
    );
$deuda[37][37249]=array(
    'nombre' =>'Peralejos de Arriba',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[37][37250]=array(
    'nombre' =>'Pereña de la Ribera',
    'habitantes' =>'391',
    'deuda'=>'348'
    );
$deuda[37][37251]=array(
    'nombre' =>'Peromingo',
    'habitantes' =>'135',
    'deuda'=>'0'
    );
$deuda[37][37252]=array(
    'nombre' =>'Pinedas',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[37][37253]=array(
    'nombre' =>'Pino de Tormes, El',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[37][37254]=array(
    'nombre' =>'Pitiegua',
    'habitantes' =>'198',
    'deuda'=>'0'
    );
$deuda[37][37255]=array(
    'nombre' =>'Pizarral',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[37][37256]=array(
    'nombre' =>'Poveda de las Cintas',
    'habitantes' =>'251',
    'deuda'=>'0'
    );
$deuda[37][37257]=array(
    'nombre' =>'Pozos de Hinojo',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[37][37258]=array(
    'nombre' =>'Puebla de Azaba',
    'habitantes' =>'210',
    'deuda'=>'0'
    );
$deuda[37][37259]=array(
    'nombre' =>'Puebla de San Medel',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[37][37260]=array(
    'nombre' =>'Puebla de Yeltes',
    'habitantes' =>'153',
    'deuda'=>'0'
    );
$deuda[37][37261]=array(
    'nombre' =>'Puente del Congosto',
    'habitantes' =>'240',
    'deuda'=>'0'
    );
$deuda[37][37262]=array(
    'nombre' =>'Puertas',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[37][37263]=array(
    'nombre' =>'Puerto de Béjar',
    'habitantes' =>'385',
    'deuda'=>'0'
    );
$deuda[37][37264]=array(
    'nombre' =>'Puerto Seguro',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[37][37265]=array(
    'nombre' =>'Rágama',
    'habitantes' =>'242',
    'deuda'=>'0'
    );
$deuda[37][37266]=array(
    'nombre' =>'Redonda, La',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[37][37267]=array(
    'nombre' =>'Retortillo',
    'habitantes' =>'227',
    'deuda'=>'0'
    );
$deuda[37][37268]=array(
    'nombre' =>'Rinconada de la Sierra, La',
    'habitantes' =>'120',
    'deuda'=>'0'
    );
$deuda[37][37269]=array(
    'nombre' =>'Robleda',
    'habitantes' =>'526',
    'deuda'=>'0'
    );
$deuda[37][37270]=array(
    'nombre' =>'Robliza de Cojos',
    'habitantes' =>'211',
    'deuda'=>'0'
    );
$deuda[37][37271]=array(
    'nombre' =>'Rollán',
    'habitantes' =>'376',
    'deuda'=>'37'
    );
$deuda[37][37272]=array(
    'nombre' =>'Saelices el Chico',
    'habitantes' =>'155',
    'deuda'=>'0'
    );
$deuda[37][37273]=array(
    'nombre' =>'Sagrada, La',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[37][37274]=array(
    'nombre' =>'Salamanca',
    'habitantes' =>'146438',
    'deuda'=>'87593'
    );
$deuda[37][37275]=array(
    'nombre' =>'Saldeana',
    'habitantes' =>'125',
    'deuda'=>'0'
    );
$deuda[37][37276]=array(
    'nombre' =>'Salmoral',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[37][37277]=array(
    'nombre' =>'Salvatierra de Tormes',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[37][37278]=array(
    'nombre' =>'San Cristóbal de la Cuesta',
    'habitantes' =>'1017',
    'deuda'=>'213'
    );
$deuda[37][37279]=array(
    'nombre' =>'Sancti-Spíritus',
    'habitantes' =>'880',
    'deuda'=>'0'
    );
$deuda[37][37280]=array(
    'nombre' =>'Sanchón de la Ribera',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[37][37281]=array(
    'nombre' =>'Sanchón de la Sagrada',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[37][37282]=array(
    'nombre' =>'Sanchotello',
    'habitantes' =>'238',
    'deuda'=>'227'
    );
$deuda[37][37283]=array(
    'nombre' =>'Sando',
    'habitantes' =>'136',
    'deuda'=>'0'
    );
$deuda[37][37284]=array(
    'nombre' =>'San Esteban de la Sierra',
    'habitantes' =>'346',
    'deuda'=>'0'
    );
$deuda[37][37285]=array(
    'nombre' =>'San Felices de los Gallegos',
    'habitantes' =>'451',
    'deuda'=>'0'
    );
$deuda[37][37286]=array(
    'nombre' =>'San Martín del Castañar',
    'habitantes' =>'243',
    'deuda'=>'65'
    );
$deuda[37][37287]=array(
    'nombre' =>'San Miguel de Valero',
    'habitantes' =>'355',
    'deuda'=>'0'
    );
$deuda[37][37288]=array(
    'nombre' =>'San Morales',
    'habitantes' =>'288',
    'deuda'=>'71'
    );
$deuda[37][37289]=array(
    'nombre' =>'San Muñoz',
    'habitantes' =>'277',
    'deuda'=>'0'
    );
$deuda[37][37290]=array(
    'nombre' =>'San Pedro del Valle',
    'habitantes' =>'152',
    'deuda'=>'0'
    );
$deuda[37][37291]=array(
    'nombre' =>'San Pedro de Rozados',
    'habitantes' =>'307',
    'deuda'=>'0'
    );
$deuda[37][37292]=array(
    'nombre' =>'San Pelayo de Guareña',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[37][37293]=array(
    'nombre' =>'Santa María de Sando',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[37][37294]=array(
    'nombre' =>'Santa Marta de Tormes',
    'habitantes' =>'14970',
    'deuda'=>'1304'
    );
$deuda[37][37296]=array(
    'nombre' =>'Santiago de la Puebla',
    'habitantes' =>'366',
    'deuda'=>'0'
    );
$deuda[37][37297]=array(
    'nombre' =>'Santibáñez de Béjar',
    'habitantes' =>'488',
    'deuda'=>'0'
    );
$deuda[37][37298]=array(
    'nombre' =>'Santibáñez de la Sierra',
    'habitantes' =>'191',
    'deuda'=>'0'
    );
$deuda[37][37299]=array(
    'nombre' =>'Santiz',
    'habitantes' =>'254',
    'deuda'=>'0'
    );
$deuda[37][37300]=array(
    'nombre' =>'Santos, Los',
    'habitantes' =>'645',
    'deuda'=>'228'
    );
$deuda[37][37301]=array(
    'nombre' =>'Sardón de los Frailes',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[37][37302]=array(
    'nombre' =>'Saucelle',
    'habitantes' =>'324',
    'deuda'=>'217'
    );
$deuda[37][37303]=array(
    'nombre' =>'Sahugo, El',
    'habitantes' =>'188',
    'deuda'=>'60'
    );
$deuda[37][37304]=array(
    'nombre' =>'Sepulcro-Hilario',
    'habitantes' =>'186',
    'deuda'=>'0'
    );
$deuda[37][37305]=array(
    'nombre' =>'Sequeros',
    'habitantes' =>'239',
    'deuda'=>'0'
    );
$deuda[37][37306]=array(
    'nombre' =>'Serradilla del Arroyo',
    'habitantes' =>'286',
    'deuda'=>'277'
    );
$deuda[37][37307]=array(
    'nombre' =>'Serradilla del Llano',
    'habitantes' =>'171',
    'deuda'=>'0'
    );
$deuda[37][37309]=array(
    'nombre' =>'Sierpe, La',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[37][37310]=array(
    'nombre' =>'Sieteiglesias de Tormes',
    'habitantes' =>'214',
    'deuda'=>'0'
    );
$deuda[37][37311]=array(
    'nombre' =>'Sobradillo',
    'habitantes' =>'243',
    'deuda'=>'0'
    );
$deuda[37][37312]=array(
    'nombre' =>'Sorihuela',
    'habitantes' =>'270',
    'deuda'=>'214'
    );
$deuda[37][37313]=array(
    'nombre' =>'Sotoserrano',
    'habitantes' =>'606',
    'deuda'=>'236'
    );
$deuda[37][37314]=array(
    'nombre' =>'Tabera de Abajo',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[37][37315]=array(
    'nombre' =>'Tala, La',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[37][37316]=array(
    'nombre' =>'Tamames',
    'habitantes' =>'838',
    'deuda'=>'352'
    );
$deuda[37][37317]=array(
    'nombre' =>'Tarazona de Guareña',
    'habitantes' =>'334',
    'deuda'=>'25'
    );
$deuda[37][37318]=array(
    'nombre' =>'Tardáguila',
    'habitantes' =>'228',
    'deuda'=>'0'
    );
$deuda[37][37319]=array(
    'nombre' =>'Tejado, El',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[37][37320]=array(
    'nombre' =>'Tejeda y Segoyuela',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[37][37321]=array(
    'nombre' =>'Tenebrón',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[37][37322]=array(
    'nombre' =>'Terradillos',
    'habitantes' =>'3152',
    'deuda'=>'1175'
    );
$deuda[37][37323]=array(
    'nombre' =>'Topas',
    'habitantes' =>'552',
    'deuda'=>'0'
    );
$deuda[37][37324]=array(
    'nombre' =>'Tordillos',
    'habitantes' =>'395',
    'deuda'=>'0'
    );
$deuda[37][37325]=array(
    'nombre' =>'Tornadizo, El',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[37][37327]=array(
    'nombre' =>'Torresmenudas',
    'habitantes' =>'195',
    'deuda'=>'0'
    );
$deuda[37][37328]=array(
    'nombre' =>'Trabanca',
    'habitantes' =>'228',
    'deuda'=>'486'
    );
$deuda[37][37329]=array(
    'nombre' =>'Tremedal de Tormes',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[37][37330]=array(
    'nombre' =>'Valdecarros',
    'habitantes' =>'364',
    'deuda'=>'0'
    );
$deuda[37][37331]=array(
    'nombre' =>'Valdefuentes de Sangusín',
    'habitantes' =>'231',
    'deuda'=>'0'
    );
$deuda[37][37332]=array(
    'nombre' =>'Valdehijaderos',
    'habitantes' =>'86',
    'deuda'=>'62'
    );
$deuda[37][37333]=array(
    'nombre' =>'Valdelacasa',
    'habitantes' =>'236',
    'deuda'=>'0'
    );
$deuda[37][37334]=array(
    'nombre' =>'Valdelageve',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[37][37335]=array(
    'nombre' =>'Valdelosa',
    'habitantes' =>'454',
    'deuda'=>'0'
    );
$deuda[37][37336]=array(
    'nombre' =>'Valdemierque',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[37][37337]=array(
    'nombre' =>'Valderrodrigo',
    'habitantes' =>'153',
    'deuda'=>'0'
    );
$deuda[37][37338]=array(
    'nombre' =>'Valdunciel',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[37][37339]=array(
    'nombre' =>'Valero',
    'habitantes' =>'309',
    'deuda'=>'0'
    );
$deuda[37][37340]=array(
    'nombre' =>'Valsalabroso',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[37][37341]=array(
    'nombre' =>'Valverde de Valdelacasa',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[37][37342]=array(
    'nombre' =>'Valverdón',
    'habitantes' =>'282',
    'deuda'=>'0'
    );
$deuda[37][37343]=array(
    'nombre' =>'Vallejera de Riofrío',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[37][37344]=array(
    'nombre' =>'Vecinos',
    'habitantes' =>'273',
    'deuda'=>'0'
    );
$deuda[37][37345]=array(
    'nombre' =>'Vega de Tirados',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[37][37346]=array(
    'nombre' =>'Veguillas, Las',
    'habitantes' =>'288',
    'deuda'=>'124'
    );
$deuda[37][37347]=array(
    'nombre' =>'Vellés, La',
    'habitantes' =>'561',
    'deuda'=>'75'
    );
$deuda[37][37348]=array(
    'nombre' =>'Ventosa del Río Almar',
    'habitantes' =>'118',
    'deuda'=>'0'
    );
$deuda[37][37349]=array(
    'nombre' =>'Vídola, La',
    'habitantes' =>'121',
    'deuda'=>'0'
    );
$deuda[37][37350]=array(
    'nombre' =>'Vilvestre',
    'habitantes' =>'447',
    'deuda'=>'0'
    );
$deuda[37][37351]=array(
    'nombre' =>'Villaflores',
    'habitantes' =>'293',
    'deuda'=>'0'
    );
$deuda[37][37352]=array(
    'nombre' =>'Villagonzalo de Tormes',
    'habitantes' =>'216',
    'deuda'=>'0'
    );
$deuda[37][37353]=array(
    'nombre' =>'Villalba de los Llanos',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[37][37354]=array(
    'nombre' =>'Villamayor',
    'habitantes' =>'6962',
    'deuda'=>'1277'
    );
$deuda[37][37355]=array(
    'nombre' =>'Villanueva del Conde',
    'habitantes' =>'183',
    'deuda'=>'101'
    );
$deuda[37][37356]=array(
    'nombre' =>'Villar de Argañán',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[37][37357]=array(
    'nombre' =>'Villar de Ciervo',
    'habitantes' =>'298',
    'deuda'=>'0'
    );
$deuda[37][37358]=array(
    'nombre' =>'Villar de Gallimazo',
    'habitantes' =>'198',
    'deuda'=>'0'
    );
$deuda[37][37359]=array(
    'nombre' =>'Villar de la Yegua',
    'habitantes' =>'202',
    'deuda'=>'0'
    );
$deuda[37][37360]=array(
    'nombre' =>'Villar de Peralonso',
    'habitantes' =>'259',
    'deuda'=>'0'
    );
$deuda[37][37361]=array(
    'nombre' =>'Villar de Samaniego',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[37][37362]=array(
    'nombre' =>'Villares de la Reina',
    'habitantes' =>'6188',
    'deuda'=>'60'
    );
$deuda[37][37363]=array(
    'nombre' =>'Villares de Yeltes',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[37][37364]=array(
    'nombre' =>'Villarino de los Aires',
    'habitantes' =>'892',
    'deuda'=>'1773'
    );
$deuda[37][37365]=array(
    'nombre' =>'Villarmayor',
    'habitantes' =>'200',
    'deuda'=>'0'
    );
$deuda[37][37366]=array(
    'nombre' =>'Villarmuerto',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[37][37367]=array(
    'nombre' =>'Villasbuenas',
    'habitantes' =>'209',
    'deuda'=>'0'
    );
$deuda[37][37368]=array(
    'nombre' =>'Villasdardo',
    'habitantes' =>'17',
    'deuda'=>'0'
    );
$deuda[37][37369]=array(
    'nombre' =>'Villaseco de los Gamitos',
    'habitantes' =>'152',
    'deuda'=>'40'
    );
$deuda[37][37370]=array(
    'nombre' =>'Villaseco de los Reyes',
    'habitantes' =>'372',
    'deuda'=>'0'
    );
$deuda[37][37371]=array(
    'nombre' =>'Villasrubias',
    'habitantes' =>'299',
    'deuda'=>'77'
    );
$deuda[37][37372]=array(
    'nombre' =>'Villaverde de Guareña',
    'habitantes' =>'155',
    'deuda'=>'69'
    );
$deuda[37][37373]=array(
    'nombre' =>'Villavieja de Yeltes',
    'habitantes' =>'861',
    'deuda'=>'163'
    );
$deuda[37][37374]=array(
    'nombre' =>'Villoria',
    'habitantes' =>'1429',
    'deuda'=>'157'
    );
$deuda[37][37375]=array(
    'nombre' =>'Villoruela',
    'habitantes' =>'836',
    'deuda'=>'70'
    );
$deuda[37][37376]=array(
    'nombre' =>'Vitigudino',
    'habitantes' =>'2700',
    'deuda'=>'2573'
    );
$deuda[37][37377]=array(
    'nombre' =>'Yecla de Yeltes',
    'habitantes' =>'276',
    'deuda'=>'0'
    );
$deuda[37][37378]=array(
    'nombre' =>'Zamarra',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[37][37379]=array(
    'nombre' =>'Zamayón',
    'habitantes' =>'194',
    'deuda'=>'0'
    );
$deuda[37][37380]=array(
    'nombre' =>'Zarapicos',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[37][37381]=array(
    'nombre' =>'Zarza de Pumareda, La',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[37][37382]=array(
    'nombre' =>'Zorita de la Frontera',
    'habitantes' =>'194',
    'deuda'=>'0'
    );
$deuda[38][38001]=array(
    'nombre' =>'Adeje',
    'habitantes' =>'45405',
    'deuda'=>'17231'
    );
$deuda[38][38002]=array(
    'nombre' =>'Agulo',
    'habitantes' =>'1081',
    'deuda'=>'156'
    );
$deuda[38][38003]=array(
    'nombre' =>'Alajeró',
    'habitantes' =>'2025',
    'deuda'=>'0'
    );
$deuda[38][38004]=array(
    'nombre' =>'Arafo',
    'habitantes' =>'5499',
    'deuda'=>'3169'
    );
$deuda[38][38005]=array(
    'nombre' =>'Arico',
    'habitantes' =>'7327',
    'deuda'=>'21'
    );
$deuda[38][38006]=array(
    'nombre' =>'Arona',
    'habitantes' =>'79928',
    'deuda'=>'11137'
    );
$deuda[38][38007]=array(
    'nombre' =>'Barlovento',
    'habitantes' =>'1910',
    'deuda'=>'1981'
    );
$deuda[38][38008]=array(
    'nombre' =>'Breña Alta',
    'habitantes' =>'7170',
    'deuda'=>'0'
    );
$deuda[38][38009]=array(
    'nombre' =>'Breña Baja',
    'habitantes' =>'5362',
    'deuda'=>'200'
    );
$deuda[38][38010]=array(
    'nombre' =>'Buenavista del Norte',
    'habitantes' =>'4859',
    'deuda'=>'5670'
    );
$deuda[38][38011]=array(
    'nombre' =>'Candelaria',
    'habitantes' =>'26490',
    'deuda'=>'6722'
    );
$deuda[38][38012]=array(
    'nombre' =>'Fasnia',
    'habitantes' =>'2820',
    'deuda'=>'0'
    );
$deuda[38][38013]=array(
    'nombre' =>'Frontera',
    'habitantes' =>'3926',
    'deuda'=>'1384'
    );
$deuda[38][38014]=array(
    'nombre' =>'Fuencaliente de la Palma',
    'habitantes' =>'1730',
    'deuda'=>'649'
    );
$deuda[38][38015]=array(
    'nombre' =>'Garachico',
    'habitantes' =>'4966',
    'deuda'=>'508'
    );
$deuda[38][38016]=array(
    'nombre' =>'Garafía',
    'habitantes' =>'1590',
    'deuda'=>'160'
    );
$deuda[38][38017]=array(
    'nombre' =>'Granadilla de Abona',
    'habitantes' =>'44846',
    'deuda'=>'11429'
    );
$deuda[38][38018]=array(
    'nombre' =>'Guancha, La',
    'habitantes' =>'5433',
    'deuda'=>'828'
    );
$deuda[38][38019]=array(
    'nombre' =>'Guía de Isora',
    'habitantes' =>'20373',
    'deuda'=>'4908'
    );
$deuda[38][38020]=array(
    'nombre' =>'Güímar',
    'habitantes' =>'18777',
    'deuda'=>'1867'
    );
$deuda[38][38021]=array(
    'nombre' =>'Hermigua',
    'habitantes' =>'1950',
    'deuda'=>'0'
    );
$deuda[38][38022]=array(
    'nombre' =>'Icod de los Vinos',
    'habitantes' =>'22659',
    'deuda'=>'11269'
    );
$deuda[38][38023]=array(
    'nombre' =>'San Cristóbal de La Laguna',
    'habitantes' =>'152843',
    'deuda'=>'94402'
    );
$deuda[38][38024]=array(
    'nombre' =>'Llanos de Aridane, Los',
    'habitantes' =>'20227',
    'deuda'=>'2623'
    );
$deuda[38][38025]=array(
    'nombre' =>'Matanza de Acentejo, La',
    'habitantes' =>'8752',
    'deuda'=>'0'
    );
$deuda[38][38026]=array(
    'nombre' =>'Orotava, La',
    'habitantes' =>'41317',
    'deuda'=>'4836'
    );
$deuda[38][38027]=array(
    'nombre' =>'Paso, El',
    'habitantes' =>'7563',
    'deuda'=>'0'
    );
$deuda[38][38028]=array(
    'nombre' =>'Puerto de la Cruz',
    'habitantes' =>'29412',
    'deuda'=>'22371'
    );
$deuda[38][38029]=array(
    'nombre' =>'Puntagorda',
    'habitantes' =>'2027',
    'deuda'=>'415'
    );
$deuda[38][38030]=array(
    'nombre' =>'Puntallana',
    'habitantes' =>'2372',
    'deuda'=>'831'
    );
$deuda[38][38031]=array(
    'nombre' =>'Realejos, Los',
    'habitantes' =>'36276',
    'deuda'=>'3007'
    );
$deuda[38][38032]=array(
    'nombre' =>'Rosario, El',
    'habitantes' =>'17277',
    'deuda'=>'1119'
    );
$deuda[38][38033]=array(
    'nombre' =>'San Andrés y Sauces',
    'habitantes' =>'4265',
    'deuda'=>'304'
    );
$deuda[38][38034]=array(
    'nombre' =>'San Juan de la Rambla',
    'habitantes' =>'4958',
    'deuda'=>'99'
    );
$deuda[38][38035]=array(
    'nombre' =>'San Miguel de Abona',
    'habitantes' =>'17090',
    'deuda'=>'6201'
    );
$deuda[38][38036]=array(
    'nombre' =>'San Sebastián de la Gomera',
    'habitantes' =>'8591',
    'deuda'=>'0'
    );
$deuda[38][38037]=array(
    'nombre' =>'Santa Cruz de la Palma',
    'habitantes' =>'15900',
    'deuda'=>'9696'
    );
$deuda[38][38038]=array(
    'nombre' =>'Santa Cruz de Tenerife',
    'habitantes' =>'203811',
    'deuda'=>'87600'
    );
$deuda[38][38039]=array(
    'nombre' =>'Santa Úrsula',
    'habitantes' =>'14246',
    'deuda'=>'333'
    );
$deuda[38][38040]=array(
    'nombre' =>'Santiago del Teide',
    'habitantes' =>'10690',
    'deuda'=>'2290'
    );
$deuda[38][38041]=array(
    'nombre' =>'Sauzal, El',
    'habitantes' =>'8930',
    'deuda'=>'119'
    );
$deuda[38][38042]=array(
    'nombre' =>'Silos, Los',
    'habitantes' =>'4805',
    'deuda'=>'5308'
    );
$deuda[38][38043]=array(
    'nombre' =>'Tacoronte',
    'habitantes' =>'23893',
    'deuda'=>'0'
    );
$deuda[38][38044]=array(
    'nombre' =>'Tanque, El',
    'habitantes' =>'2698',
    'deuda'=>'1007'
    );
$deuda[38][38045]=array(
    'nombre' =>'Tazacorte',
    'habitantes' =>'4771',
    'deuda'=>'2529'
    );
$deuda[38][38046]=array(
    'nombre' =>'Tegueste',
    'habitantes' =>'11107',
    'deuda'=>'3756'
    );
$deuda[38][38047]=array(
    'nombre' =>'Tijarafe',
    'habitantes' =>'2596',
    'deuda'=>'0'
    );
$deuda[38][38048]=array(
    'nombre' =>'Valverde',
    'habitantes' =>'4870',
    'deuda'=>'0'
    );
$deuda[38][38049]=array(
    'nombre' =>'Valle Gran Rey',
    'habitantes' =>'4223',
    'deuda'=>'202'
    );
$deuda[38][38050]=array(
    'nombre' =>'Vallehermoso',
    'habitantes' =>'2913',
    'deuda'=>'837'
    );
$deuda[38][38051]=array(
    'nombre' =>'Victoria de Acentejo, La',
    'habitantes' =>'9026',
    'deuda'=>'1736'
    );
$deuda[38][38052]=array(
    'nombre' =>'Vilaflor de Chasna',
    'habitantes' =>'1671',
    'deuda'=>'56'
    );
$deuda[38][38053]=array(
    'nombre' =>'Villa de Mazo',
    'habitantes' =>'4863',
    'deuda'=>'0'
    );
$deuda[38][38901]=array(
    'nombre' =>'Pinar de El Hierro, El',
    'habitantes' =>'1791',
    'deuda'=>'447'
    );
$deuda[39][39001]=array(
    'nombre' =>'Alfoz de Lloredo',
    'habitantes' =>'2485',
    'deuda'=>'950'
    );
$deuda[39][39002]=array(
    'nombre' =>'Ampuero',
    'habitantes' =>'4184',
    'deuda'=>'325'
    );
$deuda[39][39003]=array(
    'nombre' =>'Anievas',
    'habitantes' =>'326',
    'deuda'=>'0'
    );
$deuda[39][39004]=array(
    'nombre' =>'Arenas de Iguña',
    'habitantes' =>'1752',
    'deuda'=>'0'
    );
$deuda[39][39005]=array(
    'nombre' =>'Argoños',
    'habitantes' =>'1744',
    'deuda'=>'327'
    );
$deuda[39][39006]=array(
    'nombre' =>'Arnuero',
    'habitantes' =>'2125',
    'deuda'=>'0'
    );
$deuda[39][39007]=array(
    'nombre' =>'Arredondo',
    'habitantes' =>'498',
    'deuda'=>'130'
    );
$deuda[39][39008]=array(
    'nombre' =>'Astillero, El',
    'habitantes' =>'18297',
    'deuda'=>'7031'
    );
$deuda[39][39009]=array(
    'nombre' =>'Bárcena de Cicero',
    'habitantes' =>'4127',
    'deuda'=>'0'
    );
$deuda[39][39010]=array(
    'nombre' =>'Bárcena de Pie de Concha',
    'habitantes' =>'728',
    'deuda'=>'0'
    );
$deuda[39][39011]=array(
    'nombre' =>'Bareyo',
    'habitantes' =>'2011',
    'deuda'=>'0'
    );
$deuda[39][39012]=array(
    'nombre' =>'Cabezón de la Sal',
    'habitantes' =>'8353',
    'deuda'=>'1253'
    );
$deuda[39][39013]=array(
    'nombre' =>'Cabezón de Liébana',
    'habitantes' =>'622',
    'deuda'=>'0'
    );
$deuda[39][39014]=array(
    'nombre' =>'Cabuérniga',
    'habitantes' =>'998',
    'deuda'=>'0'
    );
$deuda[39][39015]=array(
    'nombre' =>'Camaleño',
    'habitantes' =>'1008',
    'deuda'=>'247'
    );
$deuda[39][39016]=array(
    'nombre' =>'Camargo',
    'habitantes' =>'30766',
    'deuda'=>'4350'
    );
$deuda[39][39017]=array(
    'nombre' =>'Campoo de Yuso',
    'habitantes' =>'685',
    'deuda'=>'0'
    );
$deuda[39][39018]=array(
    'nombre' =>'Cartes',
    'habitantes' =>'5670',
    'deuda'=>'1705'
    );
$deuda[39][39019]=array(
    'nombre' =>'Castañeda',
    'habitantes' =>'2681',
    'deuda'=>'0'
    );
$deuda[39][39020]=array(
    'nombre' =>'Castro-Urdiales',
    'habitantes' =>'31833',
    'deuda'=>'12565'
    );
$deuda[39][39021]=array(
    'nombre' =>'Cieza',
    'habitantes' =>'560',
    'deuda'=>'32'
    );
$deuda[39][39022]=array(
    'nombre' =>'Cillorigo de Liébana',
    'habitantes' =>'1318',
    'deuda'=>'306'
    );
$deuda[39][39023]=array(
    'nombre' =>'Colindres',
    'habitantes' =>'8271',
    'deuda'=>'359'
    );
$deuda[39][39024]=array(
    'nombre' =>'Comillas',
    'habitantes' =>'2267',
    'deuda'=>'246'
    );
$deuda[39][39025]=array(
    'nombre' =>'Corrales de Buelna, Los',
    'habitantes' =>'11077',
    'deuda'=>'0'
    );
$deuda[39][39026]=array(
    'nombre' =>'Corvera de Toranzo',
    'habitantes' =>'2080',
    'deuda'=>'858'
    );
$deuda[39][39027]=array(
    'nombre' =>'Campoo de Enmedio',
    'habitantes' =>'3780',
    'deuda'=>'300'
    );
$deuda[39][39028]=array(
    'nombre' =>'Entrambasaguas',
    'habitantes' =>'4931',
    'deuda'=>'0'
    );
$deuda[39][39029]=array(
    'nombre' =>'Escalante',
    'habitantes' =>'758',
    'deuda'=>'426'
    );
$deuda[39][39030]=array(
    'nombre' =>'Guriezo',
    'habitantes' =>'2354',
    'deuda'=>'0'
    );
$deuda[39][39031]=array(
    'nombre' =>'Hazas de Cesto',
    'habitantes' =>'1520',
    'deuda'=>'270'
    );
$deuda[39][39032]=array(
    'nombre' =>'Hermandad de Campoo de Suso',
    'habitantes' =>'1679',
    'deuda'=>'0'
    );
$deuda[39][39033]=array(
    'nombre' =>'Herrerías',
    'habitantes' =>'657',
    'deuda'=>'100'
    );
$deuda[39][39034]=array(
    'nombre' =>'Lamasón',
    'habitantes' =>'302',
    'deuda'=>'0'
    );
$deuda[39][39035]=array(
    'nombre' =>'Laredo',
    'habitantes' =>'11643',
    'deuda'=>'3524'
    );
$deuda[39][39036]=array(
    'nombre' =>'Liendo',
    'habitantes' =>'1223',
    'deuda'=>'0'
    );
$deuda[39][39037]=array(
    'nombre' =>'Liérganes',
    'habitantes' =>'2386',
    'deuda'=>'127'
    );
$deuda[39][39038]=array(
    'nombre' =>'Limpias',
    'habitantes' =>'1815',
    'deuda'=>'147'
    );
$deuda[39][39039]=array(
    'nombre' =>'Luena',
    'habitantes' =>'634',
    'deuda'=>'37'
    );
$deuda[39][39040]=array(
    'nombre' =>'Marina de Cudeyo',
    'habitantes' =>'5203',
    'deuda'=>'2235'
    );
$deuda[39][39041]=array(
    'nombre' =>'Mazcuerras',
    'habitantes' =>'2127',
    'deuda'=>'209'
    );
$deuda[39][39042]=array(
    'nombre' =>'Medio Cudeyo',
    'habitantes' =>'7530',
    'deuda'=>'1483'
    );
$deuda[39][39043]=array(
    'nombre' =>'Meruelo',
    'habitantes' =>'1922',
    'deuda'=>'0'
    );
$deuda[39][39044]=array(
    'nombre' =>'Miengo',
    'habitantes' =>'4675',
    'deuda'=>'3521'
    );
$deuda[39][39045]=array(
    'nombre' =>'Miera',
    'habitantes' =>'410',
    'deuda'=>'99'
    );
$deuda[39][39046]=array(
    'nombre' =>'Molledo',
    'habitantes' =>'1595',
    'deuda'=>'0'
    );
$deuda[39][39047]=array(
    'nombre' =>'Noja',
    'habitantes' =>'2587',
    'deuda'=>'1138'
    );
$deuda[39][39048]=array(
    'nombre' =>'Penagos',
    'habitantes' =>'2017',
    'deuda'=>'163'
    );
$deuda[39][39049]=array(
    'nombre' =>'Peñarrubia',
    'habitantes' =>'351',
    'deuda'=>'100'
    );
$deuda[39][39050]=array(
    'nombre' =>'Pesaguero',
    'habitantes' =>'312',
    'deuda'=>'81'
    );
$deuda[39][39051]=array(
    'nombre' =>'Pesquera',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[39][39052]=array(
    'nombre' =>'Piélagos',
    'habitantes' =>'24360',
    'deuda'=>'11'
    );
$deuda[39][39053]=array(
    'nombre' =>'Polaciones',
    'habitantes' =>'241',
    'deuda'=>'0'
    );
$deuda[39][39054]=array(
    'nombre' =>'Polanco',
    'habitantes' =>'5705',
    'deuda'=>'634'
    );
$deuda[39][39055]=array(
    'nombre' =>'Potes',
    'habitantes' =>'1413',
    'deuda'=>'597'
    );
$deuda[39][39056]=array(
    'nombre' =>'Puente Viesgo',
    'habitantes' =>'2886',
    'deuda'=>'0'
    );
$deuda[39][39057]=array(
    'nombre' =>'Ramales de la Victoria',
    'habitantes' =>'2820',
    'deuda'=>'677'
    );
$deuda[39][39058]=array(
    'nombre' =>'Rasines',
    'habitantes' =>'990',
    'deuda'=>'0'
    );
$deuda[39][39059]=array(
    'nombre' =>'Reinosa',
    'habitantes' =>'9605',
    'deuda'=>'1541'
    );
$deuda[39][39060]=array(
    'nombre' =>'Reocín',
    'habitantes' =>'8382',
    'deuda'=>'3087'
    );
$deuda[39][39061]=array(
    'nombre' =>'Ribamontán al Mar',
    'habitantes' =>'4419',
    'deuda'=>'0'
    );
$deuda[39][39062]=array(
    'nombre' =>'Ribamontán al Monte',
    'habitantes' =>'2267',
    'deuda'=>'613'
    );
$deuda[39][39063]=array(
    'nombre' =>'Rionansa',
    'habitantes' =>'1051',
    'deuda'=>'66'
    );
$deuda[39][39064]=array(
    'nombre' =>'Riotuerto',
    'habitantes' =>'1638',
    'deuda'=>'399'
    );
$deuda[39][39065]=array(
    'nombre' =>'Rozas de Valdearroyo, Las',
    'habitantes' =>'282',
    'deuda'=>'0'
    );
$deuda[39][39066]=array(
    'nombre' =>'Ruente',
    'habitantes' =>'1037',
    'deuda'=>'0'
    );
$deuda[39][39067]=array(
    'nombre' =>'Ruesga',
    'habitantes' =>'903',
    'deuda'=>'439'
    );
$deuda[39][39068]=array(
    'nombre' =>'Ruiloba',
    'habitantes' =>'768',
    'deuda'=>'0'
    );
$deuda[39][39069]=array(
    'nombre' =>'San Felices de Buelna',
    'habitantes' =>'2408',
    'deuda'=>'0'
    );
$deuda[39][39070]=array(
    'nombre' =>'San Miguel de Aguayo',
    'habitantes' =>'164',
    'deuda'=>'0'
    );
$deuda[39][39071]=array(
    'nombre' =>'San Pedro del Romeral',
    'habitantes' =>'461',
    'deuda'=>'116'
    );
$deuda[39][39072]=array(
    'nombre' =>'San Roque de Riomiera',
    'habitantes' =>'394',
    'deuda'=>'185'
    );
$deuda[39][39073]=array(
    'nombre' =>'Santa Cruz de Bezana',
    'habitantes' =>'12560',
    'deuda'=>'2267'
    );
$deuda[39][39074]=array(
    'nombre' =>'Santa María de Cayón',
    'habitantes' =>'9090',
    'deuda'=>'2743'
    );
$deuda[39][39075]=array(
    'nombre' =>'Santander',
    'habitantes' =>'173957',
    'deuda'=>'87766'
    );
$deuda[39][39076]=array(
    'nombre' =>'Santillana del Mar',
    'habitantes' =>'4203',
    'deuda'=>'241'
    );
$deuda[39][39077]=array(
    'nombre' =>'Santiurde de Reinosa',
    'habitantes' =>'279',
    'deuda'=>'228'
    );
$deuda[39][39078]=array(
    'nombre' =>'Santiurde de Toranzo',
    'habitantes' =>'1619',
    'deuda'=>'115'
    );
$deuda[39][39079]=array(
    'nombre' =>'Santoña',
    'habitantes' =>'11088',
    'deuda'=>'3718'
    );
$deuda[39][39080]=array(
    'nombre' =>'San Vicente de la Barquera',
    'habitantes' =>'4247',
    'deuda'=>'0'
    );
$deuda[39][39081]=array(
    'nombre' =>'Saro',
    'habitantes' =>'511',
    'deuda'=>'0'
    );
$deuda[39][39082]=array(
    'nombre' =>'Selaya',
    'habitantes' =>'1922',
    'deuda'=>'658'
    );
$deuda[39][39083]=array(
    'nombre' =>'Soba',
    'habitantes' =>'1260',
    'deuda'=>'194'
    );
$deuda[39][39084]=array(
    'nombre' =>'Solórzano',
    'habitantes' =>'1010',
    'deuda'=>'548'
    );
$deuda[39][39085]=array(
    'nombre' =>'Suances',
    'habitantes' =>'8612',
    'deuda'=>'498'
    );
$deuda[39][39086]=array(
    'nombre' =>'Tojos, Los',
    'habitantes' =>'404',
    'deuda'=>'0'
    );
$deuda[39][39087]=array(
    'nombre' =>'Torrelavega',
    'habitantes' =>'53496',
    'deuda'=>'8719'
    );
$deuda[39][39088]=array(
    'nombre' =>'Tresviso',
    'habitantes' =>'71',
    'deuda'=>'164'
    );
$deuda[39][39089]=array(
    'nombre' =>'Tudanca',
    'habitantes' =>'154',
    'deuda'=>'0'
    );
$deuda[39][39090]=array(
    'nombre' =>'Udías',
    'habitantes' =>'895',
    'deuda'=>'177'
    );
$deuda[39][39091]=array(
    'nombre' =>'Valdáliga',
    'habitantes' =>'2309',
    'deuda'=>'0'
    );
$deuda[39][39092]=array(
    'nombre' =>'Valdeolea',
    'habitantes' =>'1020',
    'deuda'=>'0'
    );
$deuda[39][39093]=array(
    'nombre' =>'Valdeprado del Río',
    'habitantes' =>'331',
    'deuda'=>'250'
    );
$deuda[39][39094]=array(
    'nombre' =>'Valderredible',
    'habitantes' =>'1001',
    'deuda'=>'568'
    );
$deuda[39][39095]=array(
    'nombre' =>'Val de San Vicente',
    'habitantes' =>'2797',
    'deuda'=>'504'
    );
$deuda[39][39096]=array(
    'nombre' =>'Vega de Liébana',
    'habitantes' =>'793',
    'deuda'=>'220'
    );
$deuda[39][39097]=array(
    'nombre' =>'Vega de Pas',
    'habitantes' =>'814',
    'deuda'=>'37'
    );
$deuda[39][39098]=array(
    'nombre' =>'Villacarriedo',
    'habitantes' =>'1669',
    'deuda'=>'345'
    );
$deuda[39][39099]=array(
    'nombre' =>'Villaescusa',
    'habitantes' =>'3826',
    'deuda'=>'71'
    );
$deuda[39][39100]=array(
    'nombre' =>'Villafufre',
    'habitantes' =>'1032',
    'deuda'=>'69'
    );
$deuda[39][39101]=array(
    'nombre' =>'Valle de Villaverde',
    'habitantes' =>'336',
    'deuda'=>'0'
    );
$deuda[39][39102]=array(
    'nombre' =>'Voto',
    'habitantes' =>'2729',
    'deuda'=>'0'
    );
$deuda[40][40001]=array(
    'nombre' =>'Abades',
    'habitantes' =>'863',
    'deuda'=>'0'
    );
$deuda[40][40002]=array(
    'nombre' =>'Adrada de Pirón',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[40][40003]=array(
    'nombre' =>'Adrados',
    'habitantes' =>'155',
    'deuda'=>'0'
    );
$deuda[40][40004]=array(
    'nombre' =>'Aguilafuente',
    'habitantes' =>'639',
    'deuda'=>'7'
    );
$deuda[40][40005]=array(
    'nombre' =>'Alconada de Maderuelo',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[40][40006]=array(
    'nombre' =>'Aldealcorvo',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[40][40007]=array(
    'nombre' =>'Aldealengua de Pedraza',
    'habitantes' =>'83',
    'deuda'=>'0'
    );
$deuda[40][40008]=array(
    'nombre' =>'Aldealengua de Santa María',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[40][40009]=array(
    'nombre' =>'Aldeanueva de la Serrezuela',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[40][40010]=array(
    'nombre' =>'Aldeanueva del Codonal',
    'habitantes' =>'134',
    'deuda'=>'20'
    );
$deuda[40][40012]=array(
    'nombre' =>'Aldea Real',
    'habitantes' =>'332',
    'deuda'=>'0'
    );
$deuda[40][40013]=array(
    'nombre' =>'Aldeasoña',
    'habitantes' =>'61',
    'deuda'=>'0'
    );
$deuda[40][40014]=array(
    'nombre' =>'Aldehorno',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[40][40015]=array(
    'nombre' =>'Aldehuela del Codonal',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[40][40016]=array(
    'nombre' =>'Aldeonte',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[40][40017]=array(
    'nombre' =>'Anaya',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[40][40018]=array(
    'nombre' =>'Añe',
    'habitantes' =>'98',
    'deuda'=>'27'
    );
$deuda[40][40019]=array(
    'nombre' =>'Arahuetes',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[40][40020]=array(
    'nombre' =>'Arcones',
    'habitantes' =>'214',
    'deuda'=>'117'
    );
$deuda[40][40021]=array(
    'nombre' =>'Arevalillo de Cega',
    'habitantes' =>'30',
    'deuda'=>'0'
    );
$deuda[40][40022]=array(
    'nombre' =>'Armuña',
    'habitantes' =>'233',
    'deuda'=>'0'
    );
$deuda[40][40024]=array(
    'nombre' =>'Ayllón',
    'habitantes' =>'1268',
    'deuda'=>'0'
    );
$deuda[40][40025]=array(
    'nombre' =>'Barbolla',
    'habitantes' =>'200',
    'deuda'=>'0'
    );
$deuda[40][40026]=array(
    'nombre' =>'Basardilla',
    'habitantes' =>'137',
    'deuda'=>'30'
    );
$deuda[40][40028]=array(
    'nombre' =>'Bercial',
    'habitantes' =>'115',
    'deuda'=>'36'
    );
$deuda[40][40029]=array(
    'nombre' =>'Bercimuel',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[40][40030]=array(
    'nombre' =>'Bernardos',
    'habitantes' =>'547',
    'deuda'=>'0'
    );
$deuda[40][40031]=array(
    'nombre' =>'Bernuy de Porreros',
    'habitantes' =>'719',
    'deuda'=>'0'
    );
$deuda[40][40032]=array(
    'nombre' =>'Boceguillas',
    'habitantes' =>'793',
    'deuda'=>'74'
    );
$deuda[40][40033]=array(
    'nombre' =>'Brieva',
    'habitantes' =>'93',
    'deuda'=>'24'
    );
$deuda[40][40034]=array(
    'nombre' =>'Caballar',
    'habitantes' =>'96',
    'deuda'=>'14'
    );
$deuda[40][40035]=array(
    'nombre' =>'Cabañas de Polendos',
    'habitantes' =>'180',
    'deuda'=>'49'
    );
$deuda[40][40036]=array(
    'nombre' =>'Cabezuela',
    'habitantes' =>'674',
    'deuda'=>'70'
    );
$deuda[40][40037]=array(
    'nombre' =>'Calabazas de Fuentidueña',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[40][40039]=array(
    'nombre' =>'Campo de San Pedro',
    'habitantes' =>'281',
    'deuda'=>'212'
    );
$deuda[40][40040]=array(
    'nombre' =>'Cantalejo',
    'habitantes' =>'3693',
    'deuda'=>'2912'
    );
$deuda[40][40041]=array(
    'nombre' =>'Cantimpalos',
    'habitantes' =>'1346',
    'deuda'=>'0'
    );
$deuda[40][40043]=array(
    'nombre' =>'Carbonero el Mayor',
    'habitantes' =>'2540',
    'deuda'=>'88'
    );
$deuda[40][40044]=array(
    'nombre' =>'Carrascal del Río',
    'habitantes' =>'150',
    'deuda'=>'0'
    );
$deuda[40][40045]=array(
    'nombre' =>'Casla',
    'habitantes' =>'156',
    'deuda'=>'0'
    );
$deuda[40][40046]=array(
    'nombre' =>'Castillejo de Mesleón',
    'habitantes' =>'143',
    'deuda'=>'66'
    );
$deuda[40][40047]=array(
    'nombre' =>'Castro de Fuentidueña',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[40][40048]=array(
    'nombre' =>'Castrojimeno',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[40][40049]=array(
    'nombre' =>'Castroserna de Abajo',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[40][40051]=array(
    'nombre' =>'Castroserracín',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[40][40052]=array(
    'nombre' =>'Cedillo de la Torre',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[40][40053]=array(
    'nombre' =>'Cerezo de Abajo',
    'habitantes' =>'148',
    'deuda'=>'0'
    );
$deuda[40][40054]=array(
    'nombre' =>'Cerezo de Arriba',
    'habitantes' =>'145',
    'deuda'=>'0'
    );
$deuda[40][40055]=array(
    'nombre' =>'Cilleruelo de San Mamés',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[40][40056]=array(
    'nombre' =>'Cobos de Fuentidueña',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[40][40057]=array(
    'nombre' =>'Coca',
    'habitantes' =>'1896',
    'deuda'=>'0'
    );
$deuda[40][40058]=array(
    'nombre' =>'Codorniz',
    'habitantes' =>'351',
    'deuda'=>'0'
    );
$deuda[40][40059]=array(
    'nombre' =>'Collado Hermoso',
    'habitantes' =>'145',
    'deuda'=>'0'
    );
$deuda[40][40060]=array(
    'nombre' =>'Condado de Castilnovo',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[40][40061]=array(
    'nombre' =>'Corral de Ayllón',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[40][40062]=array(
    'nombre' =>'Cubillo',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[40][40063]=array(
    'nombre' =>'Cuéllar',
    'habitantes' =>'9477',
    'deuda'=>'3416'
    );
$deuda[40][40065]=array(
    'nombre' =>'Chañe',
    'habitantes' =>'887',
    'deuda'=>'0'
    );
$deuda[40][40068]=array(
    'nombre' =>'Domingo García',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[40][40069]=array(
    'nombre' =>'Donhierro',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[40][40070]=array(
    'nombre' =>'Duruelo',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[40][40071]=array(
    'nombre' =>'Encinas',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[40][40072]=array(
    'nombre' =>'Encinillas',
    'habitantes' =>'250',
    'deuda'=>'0'
    );
$deuda[40][40073]=array(
    'nombre' =>'Escalona del Prado',
    'habitantes' =>'558',
    'deuda'=>'86'
    );
$deuda[40][40074]=array(
    'nombre' =>'Escarabajosa de Cabezas',
    'habitantes' =>'327',
    'deuda'=>'20'
    );
$deuda[40][40075]=array(
    'nombre' =>'Escobar de Polendos',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[40][40076]=array(
    'nombre' =>'Espinar, El',
    'habitantes' =>'9486',
    'deuda'=>'1088'
    );
$deuda[40][40077]=array(
    'nombre' =>'Espirdo',
    'habitantes' =>'1107',
    'deuda'=>'115'
    );
$deuda[40][40078]=array(
    'nombre' =>'Fresneda de Cuéllar',
    'habitantes' =>'178',
    'deuda'=>'0'
    );
$deuda[40][40079]=array(
    'nombre' =>'Fresno de Cantespino',
    'habitantes' =>'277',
    'deuda'=>'153'
    );
$deuda[40][40080]=array(
    'nombre' =>'Fresno de la Fuente',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[40][40081]=array(
    'nombre' =>'Frumales',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[40][40082]=array(
    'nombre' =>'Fuente de Santa Cruz',
    'habitantes' =>'128',
    'deuda'=>'0'
    );
$deuda[40][40083]=array(
    'nombre' =>'Fuente el Olmo de Fuentidueña',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[40][40084]=array(
    'nombre' =>'Fuente el Olmo de Íscar',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[40][40086]=array(
    'nombre' =>'Fuentepelayo',
    'habitantes' =>'914',
    'deuda'=>'102'
    );
$deuda[40][40087]=array(
    'nombre' =>'Fuentepiñel',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[40][40088]=array(
    'nombre' =>'Fuenterrebollo',
    'habitantes' =>'369',
    'deuda'=>'0'
    );
$deuda[40][40089]=array(
    'nombre' =>'Fuentesaúco de Fuentidueña',
    'habitantes' =>'249',
    'deuda'=>'0'
    );
$deuda[40][40091]=array(
    'nombre' =>'Fuentesoto',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[40][40092]=array(
    'nombre' =>'Fuentidueña',
    'habitantes' =>'144',
    'deuda'=>'23'
    );
$deuda[40][40093]=array(
    'nombre' =>'Gallegos',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[40][40094]=array(
    'nombre' =>'Garcillán',
    'habitantes' =>'453',
    'deuda'=>'0'
    );
$deuda[40][40095]=array(
    'nombre' =>'Gomezserracín',
    'habitantes' =>'676',
    'deuda'=>'53'
    );
$deuda[40][40097]=array(
    'nombre' =>'Grajera',
    'habitantes' =>'234',
    'deuda'=>'0'
    );
$deuda[40][40099]=array(
    'nombre' =>'Honrubia de la Cuesta',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[40][40100]=array(
    'nombre' =>'Hontalbilla',
    'habitantes' =>'316',
    'deuda'=>'0'
    );
$deuda[40][40101]=array(
    'nombre' =>'Hontanares de Eresma',
    'habitantes' =>'1301',
    'deuda'=>'112'
    );
$deuda[40][40103]=array(
    'nombre' =>'Huertos, Los',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[40][40104]=array(
    'nombre' =>'Ituero y Lama',
    'habitantes' =>'375',
    'deuda'=>'0'
    );
$deuda[40][40105]=array(
    'nombre' =>'Juarros de Riomoros',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[40][40106]=array(
    'nombre' =>'Juarros de Voltoya',
    'habitantes' =>'238',
    'deuda'=>'0'
    );
$deuda[40][40107]=array(
    'nombre' =>'Labajos',
    'habitantes' =>'145',
    'deuda'=>'65'
    );
$deuda[40][40108]=array(
    'nombre' =>'Laguna de Contreras',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[40][40109]=array(
    'nombre' =>'Languilla',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[40][40110]=array(
    'nombre' =>'Lastras de Cuéllar',
    'habitantes' =>'407',
    'deuda'=>'0'
    );
$deuda[40][40111]=array(
    'nombre' =>'Lastras del Pozo',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[40][40112]=array(
    'nombre' =>'Lastrilla, La',
    'habitantes' =>'3669',
    'deuda'=>'914'
    );
$deuda[40][40113]=array(
    'nombre' =>'Losa, La',
    'habitantes' =>'535',
    'deuda'=>'0'
    );
$deuda[40][40115]=array(
    'nombre' =>'Maderuelo',
    'habitantes' =>'119',
    'deuda'=>'300'
    );
$deuda[40][40118]=array(
    'nombre' =>'Marazuela',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[40][40119]=array(
    'nombre' =>'Martín Miguel',
    'habitantes' =>'222',
    'deuda'=>'0'
    );
$deuda[40][40120]=array(
    'nombre' =>'Martín Muñoz de la Dehesa',
    'habitantes' =>'222',
    'deuda'=>'18'
    );
$deuda[40][40121]=array(
    'nombre' =>'Martín Muñoz de las Posadas',
    'habitantes' =>'337',
    'deuda'=>'0'
    );
$deuda[40][40122]=array(
    'nombre' =>'Marugán',
    'habitantes' =>'624',
    'deuda'=>'0'
    );
$deuda[40][40123]=array(
    'nombre' =>'Matabuena',
    'habitantes' =>'193',
    'deuda'=>'0'
    );
$deuda[40][40124]=array(
    'nombre' =>'Mata de Cuéllar',
    'habitantes' =>'280',
    'deuda'=>'56'
    );
$deuda[40][40125]=array(
    'nombre' =>'Matilla, La',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[40][40126]=array(
    'nombre' =>'Melque de Cercos',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[40][40127]=array(
    'nombre' =>'Membibre de la Hoz',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[40][40128]=array(
    'nombre' =>'Migueláñez',
    'habitantes' =>'153',
    'deuda'=>'0'
    );
$deuda[40][40129]=array(
    'nombre' =>'Montejo de Arévalo',
    'habitantes' =>'192',
    'deuda'=>'0'
    );
$deuda[40][40130]=array(
    'nombre' =>'Montejo de la Vega de la Serrezuela',
    'habitantes' =>'150',
    'deuda'=>'0'
    );
$deuda[40][40131]=array(
    'nombre' =>'Monterrubio',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[40][40132]=array(
    'nombre' =>'Moral de Hornuez',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[40][40134]=array(
    'nombre' =>'Mozoncillo',
    'habitantes' =>'932',
    'deuda'=>'138'
    );
$deuda[40][40135]=array(
    'nombre' =>'Muñopedro',
    'habitantes' =>'332',
    'deuda'=>'103'
    );
$deuda[40][40136]=array(
    'nombre' =>'Muñoveros',
    'habitantes' =>'159',
    'deuda'=>'0'
    );
$deuda[40][40138]=array(
    'nombre' =>'Nava de la Asunción',
    'habitantes' =>'2882',
    'deuda'=>'513'
    );
$deuda[40][40139]=array(
    'nombre' =>'Navafría',
    'habitantes' =>'324',
    'deuda'=>'0'
    );
$deuda[40][40140]=array(
    'nombre' =>'Navalilla',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[40][40141]=array(
    'nombre' =>'Navalmanzano',
    'habitantes' =>'1121',
    'deuda'=>'0'
    );
$deuda[40][40142]=array(
    'nombre' =>'Navares de Ayuso',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[40][40143]=array(
    'nombre' =>'Navares de Enmedio',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[40][40144]=array(
    'nombre' =>'Navares de las Cuevas',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[40][40145]=array(
    'nombre' =>'Navas de Oro',
    'habitantes' =>'1387',
    'deuda'=>'160'
    );
$deuda[40][40146]=array(
    'nombre' =>'Navas de San Antonio',
    'habitantes' =>'390',
    'deuda'=>'29'
    );
$deuda[40][40148]=array(
    'nombre' =>'Nieva',
    'habitantes' =>'300',
    'deuda'=>'30'
    );
$deuda[40][40149]=array(
    'nombre' =>'Olombrada',
    'habitantes' =>'605',
    'deuda'=>'0'
    );
$deuda[40][40150]=array(
    'nombre' =>'Orejana',
    'habitantes' =>'74',
    'deuda'=>'21'
    );
$deuda[40][40151]=array(
    'nombre' =>'Ortigosa de Pestaño',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[40][40152]=array(
    'nombre' =>'Otero de Herreros',
    'habitantes' =>'981',
    'deuda'=>'0'
    );
$deuda[40][40154]=array(
    'nombre' =>'Pajarejos',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[40][40155]=array(
    'nombre' =>'Palazuelos de Eresma',
    'habitantes' =>'4986',
    'deuda'=>'3725'
    );
$deuda[40][40156]=array(
    'nombre' =>'Pedraza',
    'habitantes' =>'416',
    'deuda'=>'0'
    );
$deuda[40][40157]=array(
    'nombre' =>'Pelayos del Arroyo',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[40][40158]=array(
    'nombre' =>'Perosillo',
    'habitantes' =>'18',
    'deuda'=>'0'
    );
$deuda[40][40159]=array(
    'nombre' =>'Pinarejos',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[40][40160]=array(
    'nombre' =>'Pinarnegrillo',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[40][40161]=array(
    'nombre' =>'Pradales',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[40][40162]=array(
    'nombre' =>'Prádena',
    'habitantes' =>'545',
    'deuda'=>'0'
    );
$deuda[40][40163]=array(
    'nombre' =>'Puebla de Pedraza',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[40][40164]=array(
    'nombre' =>'Rapariegos',
    'habitantes' =>'208',
    'deuda'=>'0'
    );
$deuda[40][40165]=array(
    'nombre' =>'Rebollo',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[40][40166]=array(
    'nombre' =>'Remondo',
    'habitantes' =>'296',
    'deuda'=>'0'
    );
$deuda[40][40168]=array(
    'nombre' =>'Riaguas de San Bartolomé',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[40][40170]=array(
    'nombre' =>'Riaza',
    'habitantes' =>'2290',
    'deuda'=>'0'
    );
$deuda[40][40171]=array(
    'nombre' =>'Ribota',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[40][40172]=array(
    'nombre' =>'Riofrío de Riaza',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[40][40173]=array(
    'nombre' =>'Roda de Eresma',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[40][40174]=array(
    'nombre' =>'Sacramenia',
    'habitantes' =>'429',
    'deuda'=>'225'
    );
$deuda[40][40176]=array(
    'nombre' =>'Samboal',
    'habitantes' =>'484',
    'deuda'=>'624'
    );
$deuda[40][40177]=array(
    'nombre' =>'San Cristóbal de Cuéllar',
    'habitantes' =>'159',
    'deuda'=>'0'
    );
$deuda[40][40178]=array(
    'nombre' =>'San Cristóbal de la Vega',
    'habitantes' =>'117',
    'deuda'=>'59'
    );
$deuda[40][40179]=array(
    'nombre' =>'Sanchonuño',
    'habitantes' =>'949',
    'deuda'=>'171'
    );
$deuda[40][40180]=array(
    'nombre' =>'Sangarcía',
    'habitantes' =>'336',
    'deuda'=>'65'
    );
$deuda[40][40181]=array(
    'nombre' =>'Real Sitio de San Ildefonso',
    'habitantes' =>'5403',
    'deuda'=>'6675'
    );
$deuda[40][40182]=array(
    'nombre' =>'San Martín y Mudrián',
    'habitantes' =>'258',
    'deuda'=>'0'
    );
$deuda[40][40183]=array(
    'nombre' =>'San Miguel de Bernuy',
    'habitantes' =>'154',
    'deuda'=>'0'
    );
$deuda[40][40184]=array(
    'nombre' =>'San Pedro de Gaíllos',
    'habitantes' =>'322',
    'deuda'=>'0'
    );
$deuda[40][40185]=array(
    'nombre' =>'Santa María la Real de Nieva',
    'habitantes' =>'1045',
    'deuda'=>'820'
    );
$deuda[40][40186]=array(
    'nombre' =>'Santa Marta del Cerro',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[40][40188]=array(
    'nombre' =>'Santiuste de Pedraza',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[40][40189]=array(
    'nombre' =>'Santiuste de San Juan Bautista',
    'habitantes' =>'599',
    'deuda'=>'0'
    );
$deuda[40][40190]=array(
    'nombre' =>'Santo Domingo de Pirón',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[40][40191]=array(
    'nombre' =>'Santo Tomé del Puerto',
    'habitantes' =>'293',
    'deuda'=>'15'
    );
$deuda[40][40192]=array(
    'nombre' =>'Sauquillo de Cabezas',
    'habitantes' =>'186',
    'deuda'=>'0'
    );
$deuda[40][40193]=array(
    'nombre' =>'Sebúlcor',
    'habitantes' =>'278',
    'deuda'=>'0'
    );
$deuda[40][40194]=array(
    'nombre' =>'Segovia',
    'habitantes' =>'52728',
    'deuda'=>'19738'
    );
$deuda[40][40195]=array(
    'nombre' =>'Sepúlveda',
    'habitantes' =>'1168',
    'deuda'=>'373'
    );
$deuda[40][40196]=array(
    'nombre' =>'Sequera de Fresno',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[40][40198]=array(
    'nombre' =>'Sotillo',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[40][40199]=array(
    'nombre' =>'Sotosalbos',
    'habitantes' =>'118',
    'deuda'=>'0'
    );
$deuda[40][40200]=array(
    'nombre' =>'Tabanera la Luenga',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[40][40201]=array(
    'nombre' =>'Tolocirio',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[40][40202]=array(
    'nombre' =>'Torreadrada',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[40][40203]=array(
    'nombre' =>'Torrecaballeros',
    'habitantes' =>'1288',
    'deuda'=>'901'
    );
$deuda[40][40204]=array(
    'nombre' =>'Torrecilla del Pinar',
    'habitantes' =>'219',
    'deuda'=>'0'
    );
$deuda[40][40205]=array(
    'nombre' =>'Torreiglesias',
    'habitantes' =>'328',
    'deuda'=>'0'
    );
$deuda[40][40206]=array(
    'nombre' =>'Torre Val de San Pedro',
    'habitantes' =>'196',
    'deuda'=>'23'
    );
$deuda[40][40207]=array(
    'nombre' =>'Trescasas',
    'habitantes' =>'1007',
    'deuda'=>'0'
    );
$deuda[40][40208]=array(
    'nombre' =>'Turégano',
    'habitantes' =>'1039',
    'deuda'=>'120'
    );
$deuda[40][40210]=array(
    'nombre' =>'Urueñas',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[40][40211]=array(
    'nombre' =>'Valdeprados',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[40][40212]=array(
    'nombre' =>'Valdevacas de Montejo',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[40][40213]=array(
    'nombre' =>'Valdevacas y Guijar',
    'habitantes' =>'107',
    'deuda'=>'0'
    );
$deuda[40][40214]=array(
    'nombre' =>'Valseca',
    'habitantes' =>'264',
    'deuda'=>'227'
    );
$deuda[40][40215]=array(
    'nombre' =>'Valtiendas',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[40][40216]=array(
    'nombre' =>'Valverde del Majano',
    'habitantes' =>'1063',
    'deuda'=>'0'
    );
$deuda[40][40218]=array(
    'nombre' =>'Valle de Tabladillo',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[40][40219]=array(
    'nombre' =>'Vallelado',
    'habitantes' =>'718',
    'deuda'=>'0'
    );
$deuda[40][40220]=array(
    'nombre' =>'Valleruela de Pedraza',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[40][40221]=array(
    'nombre' =>'Valleruela de Sepúlveda',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[40][40222]=array(
    'nombre' =>'Veganzones',
    'habitantes' =>'264',
    'deuda'=>'0'
    );
$deuda[40][40223]=array(
    'nombre' =>'Vegas de Matute',
    'habitantes' =>'285',
    'deuda'=>'0'
    );
$deuda[40][40224]=array(
    'nombre' =>'Ventosilla y Tejadilla',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[40][40225]=array(
    'nombre' =>'Villacastín',
    'habitantes' =>'1521',
    'deuda'=>'110'
    );
$deuda[40][40228]=array(
    'nombre' =>'Villaverde de Íscar',
    'habitantes' =>'623',
    'deuda'=>'306'
    );
$deuda[40][40229]=array(
    'nombre' =>'Villaverde de Montejo',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[40][40230]=array(
    'nombre' =>'Villeguillo',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[40][40231]=array(
    'nombre' =>'Yanguas de Eresma',
    'habitantes' =>'137',
    'deuda'=>'16'
    );
$deuda[40][40233]=array(
    'nombre' =>'Zarzuela del Monte',
    'habitantes' =>'548',
    'deuda'=>'0'
    );
$deuda[40][40234]=array(
    'nombre' =>'Zarzuela del Pinar',
    'habitantes' =>'473',
    'deuda'=>'0'
    );
$deuda[40][40901]=array(
    'nombre' =>'Ortigosa del Monte',
    'habitantes' =>'547',
    'deuda'=>'0'
    );
$deuda[40][40902]=array(
    'nombre' =>'Cozuelos de Fuentidueña',
    'habitantes' =>'134',
    'deuda'=>'0'
    );
$deuda[40][40903]=array(
    'nombre' =>'Marazoleja',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[40][40904]=array(
    'nombre' =>'Navas de Riofrío',
    'habitantes' =>'421',
    'deuda'=>'0'
    );
$deuda[40][40905]=array(
    'nombre' =>'Cuevas de Provanco',
    'habitantes' =>'140',
    'deuda'=>'0'
    );
$deuda[40][40906]=array(
    'nombre' =>'San Cristóbal de Segovia',
    'habitantes' =>'2964',
    'deuda'=>'1008'
    );
$deuda[41][41001]=array(
    'nombre' =>'Aguadulce',
    'habitantes' =>'2114',
    'deuda'=>'148'
    );
$deuda[41][41002]=array(
    'nombre' =>'Alanís',
    'habitantes' =>'1820',
    'deuda'=>'1699'
    );
$deuda[41][41003]=array(
    'nombre' =>'Albaida del Aljarafe',
    'habitantes' =>'3110',
    'deuda'=>'0'
    );
$deuda[41][41004]=array(
    'nombre' =>'Alcalá de Guadaíra',
    'habitantes' =>'74845',
    'deuda'=>'70477'
    );
$deuda[41][41005]=array(
    'nombre' =>'Alcalá del Río',
    'habitantes' =>'11745',
    'deuda'=>'4300'
    );
$deuda[41][41006]=array(
    'nombre' =>'Alcolea del Río',
    'habitantes' =>'3414',
    'deuda'=>'0'
    );
$deuda[41][41007]=array(
    'nombre' =>'Algaba, La',
    'habitantes' =>'16279',
    'deuda'=>'9110'
    );
$deuda[41][41008]=array(
    'nombre' =>'Algámitas',
    'habitantes' =>'1291',
    'deuda'=>'350'
    );
$deuda[41][41009]=array(
    'nombre' =>'Almadén de la Plata',
    'habitantes' =>'1480',
    'deuda'=>'1198'
    );
$deuda[41][41010]=array(
    'nombre' =>'Almensilla',
    'habitantes' =>'5861',
    'deuda'=>'1561'
    );
$deuda[41][41011]=array(
    'nombre' =>'Arahal',
    'habitantes' =>'19550',
    'deuda'=>'1796'
    );
$deuda[41][41012]=array(
    'nombre' =>'Aznalcázar',
    'habitantes' =>'4469',
    'deuda'=>'0'
    );
$deuda[41][41013]=array(
    'nombre' =>'Aznalcóllar',
    'habitantes' =>'6168',
    'deuda'=>'3521'
    );
$deuda[41][41014]=array(
    'nombre' =>'Badolatosa',
    'habitantes' =>'3147',
    'deuda'=>'1531'
    );
$deuda[41][41015]=array(
    'nombre' =>'Benacazón',
    'habitantes' =>'7163',
    'deuda'=>'2488'
    );
$deuda[41][41016]=array(
    'nombre' =>'Bollullos de la Mitación',
    'habitantes' =>'10199',
    'deuda'=>'2715'
    );
$deuda[41][41017]=array(
    'nombre' =>'Bormujos',
    'habitantes' =>'21362',
    'deuda'=>'1648'
    );
$deuda[41][41018]=array(
    'nombre' =>'Brenes',
    'habitantes' =>'12697',
    'deuda'=>'6690'
    );
$deuda[41][41019]=array(
    'nombre' =>'Burguillos',
    'habitantes' =>'6420',
    'deuda'=>'2766'
    );
$deuda[41][41020]=array(
    'nombre' =>'Cabezas de San Juan, Las',
    'habitantes' =>'16514',
    'deuda'=>'6711'
    );
$deuda[41][41021]=array(
    'nombre' =>'Camas',
    'habitantes' =>'26861',
    'deuda'=>'2022'
    );
$deuda[41][41022]=array(
    'nombre' =>'Campana, La',
    'habitantes' =>'5410',
    'deuda'=>'163'
    );
$deuda[41][41023]=array(
    'nombre' =>'Cantillana',
    'habitantes' =>'10717',
    'deuda'=>'4696'
    );
$deuda[41][41024]=array(
    'nombre' =>'Carmona',
    'habitantes' =>'28656',
    'deuda'=>'5353'
    );
$deuda[41][41025]=array(
    'nombre' =>'Carrión de los Céspedes',
    'habitantes' =>'2563',
    'deuda'=>'458'
    );
$deuda[41][41026]=array(
    'nombre' =>'Casariche',
    'habitantes' =>'5594',
    'deuda'=>'886'
    );
$deuda[41][41027]=array(
    'nombre' =>'Castilblanco de los Arroyos',
    'habitantes' =>'4946',
    'deuda'=>'3201'
    );
$deuda[41][41028]=array(
    'nombre' =>'Castilleja de Guzmán',
    'habitantes' =>'2855',
    'deuda'=>'1296'
    );
$deuda[41][41029]=array(
    'nombre' =>'Castilleja de la Cuesta',
    'habitantes' =>'17459',
    'deuda'=>'206'
    );
$deuda[41][41030]=array(
    'nombre' =>'Castilleja del Campo',
    'habitantes' =>'622',
    'deuda'=>'289'
    );
$deuda[41][41031]=array(
    'nombre' =>'Castillo de las Guardas, El',
    'habitantes' =>'1511',
    'deuda'=>'484'
    );
$deuda[41][41032]=array(
    'nombre' =>'Cazalla de la Sierra',
    'habitantes' =>'5007',
    'deuda'=>'3564'
    );
$deuda[41][41033]=array(
    'nombre' =>'Constantina',
    'habitantes' =>'6190',
    'deuda'=>'691'
    );
$deuda[41][41034]=array(
    'nombre' =>'Coria del Río',
    'habitantes' =>'30358',
    'deuda'=>'10377'
    );
$deuda[41][41035]=array(
    'nombre' =>'Coripe',
    'habitantes' =>'1359',
    'deuda'=>'1074'
    );
$deuda[41][41036]=array(
    'nombre' =>'Coronil, El',
    'habitantes' =>'4946',
    'deuda'=>'2588'
    );
$deuda[41][41037]=array(
    'nombre' =>'Corrales, Los',
    'habitantes' =>'4003',
    'deuda'=>'1221'
    );
$deuda[41][41038]=array(
    'nombre' =>'Dos Hermanas',
    'habitantes' =>'131317',
    'deuda'=>'3922'
    );
$deuda[41][41039]=array(
    'nombre' =>'Écija',
    'habitantes' =>'40320',
    'deuda'=>'49141'
    );
$deuda[41][41040]=array(
    'nombre' =>'Espartinas',
    'habitantes' =>'14909',
    'deuda'=>'4213'
    );
$deuda[41][41041]=array(
    'nombre' =>'Estepa',
    'habitantes' =>'12716',
    'deuda'=>'8257'
    );
$deuda[41][41042]=array(
    'nombre' =>'Fuentes de Andalucía',
    'habitantes' =>'7190',
    'deuda'=>'888'
    );
$deuda[41][41043]=array(
    'nombre' =>'Garrobo, El',
    'habitantes' =>'777',
    'deuda'=>'45'
    );
$deuda[41][41044]=array(
    'nombre' =>'Gelves',
    'habitantes' =>'9838',
    'deuda'=>'2613'
    );
$deuda[41][41045]=array(
    'nombre' =>'Gerena',
    'habitantes' =>'7404',
    'deuda'=>'6701'
    );
$deuda[41][41046]=array(
    'nombre' =>'Gilena',
    'habitantes' =>'3861',
    'deuda'=>'1606'
    );
$deuda[41][41047]=array(
    'nombre' =>'Gines',
    'habitantes' =>'13309',
    'deuda'=>'2049'
    );
$deuda[41][41048]=array(
    'nombre' =>'Guadalcanal',
    'habitantes' =>'2744',
    'deuda'=>'765'
    );
$deuda[41][41049]=array(
    'nombre' =>'Guillena',
    'habitantes' =>'12506',
    'deuda'=>'1997'
    );
$deuda[41][41050]=array(
    'nombre' =>'Herrera',
    'habitantes' =>'6467',
    'deuda'=>'4199'
    );
$deuda[41][41051]=array(
    'nombre' =>'Huévar del Aljarafe',
    'habitantes' =>'2791',
    'deuda'=>'2444'
    );
$deuda[41][41052]=array(
    'nombre' =>'Lantejuela',
    'habitantes' =>'3873',
    'deuda'=>'1395'
    );
$deuda[41][41053]=array(
    'nombre' =>'Lebrija',
    'habitantes' =>'27449',
    'deuda'=>'23982'
    );
$deuda[41][41054]=array(
    'nombre' =>'Lora de Estepa',
    'habitantes' =>'856',
    'deuda'=>'290'
    );
$deuda[41][41055]=array(
    'nombre' =>'Lora del Río',
    'habitantes' =>'19328',
    'deuda'=>'0'
    );
$deuda[41][41056]=array(
    'nombre' =>'Luisiana, La',
    'habitantes' =>'4674',
    'deuda'=>'2187'
    );
$deuda[41][41057]=array(
    'nombre' =>'Madroño, El',
    'habitantes' =>'305',
    'deuda'=>'141'
    );
$deuda[41][41058]=array(
    'nombre' =>'Mairena del Alcor',
    'habitantes' =>'22749',
    'deuda'=>'8701'
    );
$deuda[41][41059]=array(
    'nombre' =>'Mairena del Aljarafe',
    'habitantes' =>'44388',
    'deuda'=>'12940'
    );
$deuda[41][41060]=array(
    'nombre' =>'Marchena',
    'habitantes' =>'19878',
    'deuda'=>'6509'
    );
$deuda[41][41061]=array(
    'nombre' =>'Marinaleda',
    'habitantes' =>'2734',
    'deuda'=>'2441'
    );
$deuda[41][41062]=array(
    'nombre' =>'Martín de la Jara',
    'habitantes' =>'2756',
    'deuda'=>'843'
    );
$deuda[41][41063]=array(
    'nombre' =>'Molares, Los',
    'habitantes' =>'3467',
    'deuda'=>'937'
    );
$deuda[41][41064]=array(
    'nombre' =>'Montellano',
    'habitantes' =>'7088',
    'deuda'=>'7464'
    );
$deuda[41][41065]=array(
    'nombre' =>'Morón de la Frontera',
    'habitantes' =>'28223',
    'deuda'=>'31910'
    );
$deuda[41][41066]=array(
    'nombre' =>'Navas de la Concepción, Las',
    'habitantes' =>'1639',
    'deuda'=>'366'
    );
$deuda[41][41067]=array(
    'nombre' =>'Olivares',
    'habitantes' =>'9522',
    'deuda'=>'1929'
    );
$deuda[41][41068]=array(
    'nombre' =>'Osuna',
    'habitantes' =>'17801',
    'deuda'=>'10908'
    );
$deuda[41][41069]=array(
    'nombre' =>'Palacios y Villafranca, Los',
    'habitantes' =>'38157',
    'deuda'=>'37555'
    );
$deuda[41][41070]=array(
    'nombre' =>'Palomares del Río',
    'habitantes' =>'8211',
    'deuda'=>'3433'
    );
$deuda[41][41071]=array(
    'nombre' =>'Paradas',
    'habitantes' =>'7024',
    'deuda'=>'1262'
    );
$deuda[41][41072]=array(
    'nombre' =>'Pedrera',
    'habitantes' =>'5328',
    'deuda'=>'2395'
    );
$deuda[41][41073]=array(
    'nombre' =>'Pedroso, El',
    'habitantes' =>'2124',
    'deuda'=>'0'
    );
$deuda[41][41074]=array(
    'nombre' =>'Peñaflor',
    'habitantes' =>'3721',
    'deuda'=>'873'
    );
$deuda[41][41075]=array(
    'nombre' =>'Pilas',
    'habitantes' =>'13987',
    'deuda'=>'4008'
    );
$deuda[41][41076]=array(
    'nombre' =>'Pruna',
    'habitantes' =>'2696',
    'deuda'=>'327'
    );
$deuda[41][41077]=array(
    'nombre' =>'Puebla de Cazalla, La',
    'habitantes' =>'11241',
    'deuda'=>'0'
    );
$deuda[41][41078]=array(
    'nombre' =>'Puebla de los Infantes, La',
    'habitantes' =>'3100',
    'deuda'=>'303'
    );
$deuda[41][41079]=array(
    'nombre' =>'Puebla del Río, La',
    'habitantes' =>'12114',
    'deuda'=>'449'
    );
$deuda[41][41080]=array(
    'nombre' =>'Real de la Jara, El',
    'habitantes' =>'1581',
    'deuda'=>'894'
    );
$deuda[41][41081]=array(
    'nombre' =>'Rinconada, La',
    'habitantes' =>'38180',
    'deuda'=>'0'
    );
$deuda[41][41082]=array(
    'nombre' =>'Roda de Andalucía, La',
    'habitantes' =>'4282',
    'deuda'=>'1539'
    );
$deuda[41][41083]=array(
    'nombre' =>'Ronquillo, El',
    'habitantes' =>'1398',
    'deuda'=>'0'
    );
$deuda[41][41084]=array(
    'nombre' =>'Rubio, El',
    'habitantes' =>'3524',
    'deuda'=>'740'
    );
$deuda[41][41085]=array(
    'nombre' =>'Salteras',
    'habitantes' =>'5492',
    'deuda'=>'307'
    );
$deuda[41][41086]=array(
    'nombre' =>'San Juan de Aznalfarache',
    'habitantes' =>'21390',
    'deuda'=>'6424'
    );
$deuda[41][41087]=array(
    'nombre' =>'Sanlúcar la Mayor',
    'habitantes' =>'13451',
    'deuda'=>'2191'
    );
$deuda[41][41088]=array(
    'nombre' =>'San Nicolás del Puerto',
    'habitantes' =>'599',
    'deuda'=>'305'
    );
$deuda[41][41089]=array(
    'nombre' =>'Santiponce',
    'habitantes' =>'8453',
    'deuda'=>'4950'
    );
$deuda[41][41090]=array(
    'nombre' =>'Saucejo, El',
    'habitantes' =>'4399',
    'deuda'=>'732'
    );
$deuda[41][41091]=array(
    'nombre' =>'Sevilla',
    'habitantes' =>'693878',
    'deuda'=>'394224'
    );
$deuda[41][41092]=array(
    'nombre' =>'Tocina',
    'habitantes' =>'9728',
    'deuda'=>'1290'
    );
$deuda[41][41093]=array(
    'nombre' =>'Tomares',
    'habitantes' =>'24743',
    'deuda'=>'6136'
    );
$deuda[41][41094]=array(
    'nombre' =>'Umbrete',
    'habitantes' =>'8606',
    'deuda'=>'3958'
    );
$deuda[41][41095]=array(
    'nombre' =>'Utrera',
    'habitantes' =>'52558',
    'deuda'=>'18541'
    );
$deuda[41][41096]=array(
    'nombre' =>'Valencina de la Concepción',
    'habitantes' =>'7948',
    'deuda'=>'2198'
    );
$deuda[41][41097]=array(
    'nombre' =>'Villamanrique de la Condesa',
    'habitantes' =>'4503',
    'deuda'=>'1308'
    );
$deuda[41][41098]=array(
    'nombre' =>'Villanueva del Ariscal',
    'habitantes' =>'6395',
    'deuda'=>'855'
    );
$deuda[41][41099]=array(
    'nombre' =>'Villanueva del Río y Minas',
    'habitantes' =>'4944',
    'deuda'=>'1727'
    );
$deuda[41][41100]=array(
    'nombre' =>'Villanueva de San Juan',
    'habitantes' =>'1232',
    'deuda'=>'0'
    );
$deuda[41][41101]=array(
    'nombre' =>'Villaverde del Río',
    'habitantes' =>'7823',
    'deuda'=>'3481'
    );
$deuda[41][41102]=array(
    'nombre' =>'Viso del Alcor, El',
    'habitantes' =>'19149',
    'deuda'=>'2789'
    );
$deuda[41][41901]=array(
    'nombre' =>'Cañada Rosal',
    'habitantes' =>'3305',
    'deuda'=>'968'
    );
$deuda[41][41902]=array(
    'nombre' =>'Isla Mayor',
    'habitantes' =>'5938',
    'deuda'=>'1737'
    );
$deuda[41][41903]=array(
    'nombre' =>'Cuervo de Sevilla, El',
    'habitantes' =>'8694',
    'deuda'=>'4025'
    );
$deuda[42][42001]=array(
    'nombre' =>'Abejar',
    'habitantes' =>'336',
    'deuda'=>'591'
    );
$deuda[42][42003]=array(
    'nombre' =>'Adradas',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[42][42004]=array(
    'nombre' =>'Ágreda',
    'habitantes' =>'3053',
    'deuda'=>'121'
    );
$deuda[42][42006]=array(
    'nombre' =>'Alconaba',
    'habitantes' =>'195',
    'deuda'=>'0'
    );
$deuda[42][42007]=array(
    'nombre' =>'Alcubilla de Avellaneda',
    'habitantes' =>'130',
    'deuda'=>'0'
    );
$deuda[42][42008]=array(
    'nombre' =>'Alcubilla de las Peñas',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[42][42009]=array(
    'nombre' =>'Aldealafuente',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[42][42010]=array(
    'nombre' =>'Aldealices',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[42][42011]=array(
    'nombre' =>'Aldealpozo',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[42][42012]=array(
    'nombre' =>'Aldealseñor',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[42][42013]=array(
    'nombre' =>'Aldehuela de Periáñez',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[42][42014]=array(
    'nombre' =>'Aldehuelas, Las',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[42][42015]=array(
    'nombre' =>'Alentisque',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[42][42016]=array(
    'nombre' =>'Aliud',
    'habitantes' =>'17',
    'deuda'=>'0'
    );
$deuda[42][42017]=array(
    'nombre' =>'Almajano',
    'habitantes' =>'179',
    'deuda'=>'0'
    );
$deuda[42][42018]=array(
    'nombre' =>'Almaluez',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[42][42019]=array(
    'nombre' =>'Almarza',
    'habitantes' =>'587',
    'deuda'=>'65'
    );
$deuda[42][42020]=array(
    'nombre' =>'Almazán',
    'habitantes' =>'5734',
    'deuda'=>'1677'
    );
$deuda[42][42021]=array(
    'nombre' =>'Almazul',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[42][42022]=array(
    'nombre' =>'Almenar de Soria',
    'habitantes' =>'240',
    'deuda'=>'13'
    );
$deuda[42][42023]=array(
    'nombre' =>'Alpanseque',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[42][42024]=array(
    'nombre' =>'Arancón',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[42][42025]=array(
    'nombre' =>'Arcos de Jalón',
    'habitantes' =>'1661',
    'deuda'=>'147'
    );
$deuda[42][42026]=array(
    'nombre' =>'Arenillas',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[42][42027]=array(
    'nombre' =>'Arévalo de la Sierra',
    'habitantes' =>'76',
    'deuda'=>'0'
    );
$deuda[42][42028]=array(
    'nombre' =>'Ausejo de la Sierra',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[42][42029]=array(
    'nombre' =>'Baraona',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[42][42030]=array(
    'nombre' =>'Barca',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[42][42031]=array(
    'nombre' =>'Barcones',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[42][42032]=array(
    'nombre' =>'Bayubas de Abajo',
    'habitantes' =>'157',
    'deuda'=>'16'
    );
$deuda[42][42033]=array(
    'nombre' =>'Bayubas de Arriba',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[42][42034]=array(
    'nombre' =>'Beratón',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[42][42035]=array(
    'nombre' =>'Berlanga de Duero',
    'habitantes' =>'943',
    'deuda'=>'0'
    );
$deuda[42][42036]=array(
    'nombre' =>'Blacos',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[42][42037]=array(
    'nombre' =>'Bliecos',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[42][42038]=array(
    'nombre' =>'Borjabad',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[42][42039]=array(
    'nombre' =>'Borobia',
    'habitantes' =>'258',
    'deuda'=>'135'
    );
$deuda[42][42041]=array(
    'nombre' =>'Buberos',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[42][42042]=array(
    'nombre' =>'Buitrago',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[42][42043]=array(
    'nombre' =>'Burgo de Osma-Ciudad de Osma',
    'habitantes' =>'5066',
    'deuda'=>'0'
    );
$deuda[42][42044]=array(
    'nombre' =>'Cabrejas del Campo',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[42][42045]=array(
    'nombre' =>'Cabrejas del Pinar',
    'habitantes' =>'376',
    'deuda'=>'284'
    );
$deuda[42][42046]=array(
    'nombre' =>'Calatañazor',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[42][42048]=array(
    'nombre' =>'Caltojar',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[42][42049]=array(
    'nombre' =>'Candilichera',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[42][42050]=array(
    'nombre' =>'Cañamaque',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[42][42051]=array(
    'nombre' =>'Carabantes',
    'habitantes' =>'22',
    'deuda'=>'0'
    );
$deuda[42][42052]=array(
    'nombre' =>'Caracena',
    'habitantes' =>'15',
    'deuda'=>'0'
    );
$deuda[42][42053]=array(
    'nombre' =>'Carrascosa de Abajo',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[42][42054]=array(
    'nombre' =>'Carrascosa de la Sierra',
    'habitantes' =>'20',
    'deuda'=>'0'
    );
$deuda[42][42055]=array(
    'nombre' =>'Casarejos',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[42][42056]=array(
    'nombre' =>'Castilfrío de la Sierra',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[42][42057]=array(
    'nombre' =>'Castilruiz',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[42][42058]=array(
    'nombre' =>'Castillejo de Robledo',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[42][42059]=array(
    'nombre' =>'Centenera de Andaluz',
    'habitantes' =>'21',
    'deuda'=>'0'
    );
$deuda[42][42060]=array(
    'nombre' =>'Cerbón',
    'habitantes' =>'33',
    'deuda'=>'60'
    );
$deuda[42][42061]=array(
    'nombre' =>'Cidones',
    'habitantes' =>'333',
    'deuda'=>'16'
    );
$deuda[42][42062]=array(
    'nombre' =>'Cigudosa',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[42][42063]=array(
    'nombre' =>'Cihuela',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[42][42064]=array(
    'nombre' =>'Ciria',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[42][42065]=array(
    'nombre' =>'Cirujales del Río',
    'habitantes' =>'23',
    'deuda'=>'0'
    );
$deuda[42][42068]=array(
    'nombre' =>'Coscurita',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[42][42069]=array(
    'nombre' =>'Covaleda',
    'habitantes' =>'1779',
    'deuda'=>'174'
    );
$deuda[42][42070]=array(
    'nombre' =>'Cubilla',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[42][42071]=array(
    'nombre' =>'Cubo de la Solana',
    'habitantes' =>'193',
    'deuda'=>'0'
    );
$deuda[42][42073]=array(
    'nombre' =>'Cueva de Ágreda',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[42][42075]=array(
    'nombre' =>'Dévanos',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[42][42076]=array(
    'nombre' =>'Deza',
    'habitantes' =>'242',
    'deuda'=>'0'
    );
$deuda[42][42078]=array(
    'nombre' =>'Duruelo de la Sierra',
    'habitantes' =>'1175',
    'deuda'=>'893'
    );
$deuda[42][42079]=array(
    'nombre' =>'Escobosa de Almazán',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[42][42080]=array(
    'nombre' =>'Espeja de San Marcelino',
    'habitantes' =>'173',
    'deuda'=>'0'
    );
$deuda[42][42081]=array(
    'nombre' =>'Espejón',
    'habitantes' =>'188',
    'deuda'=>'0'
    );
$deuda[42][42082]=array(
    'nombre' =>'Estepa de San Juan',
    'habitantes' =>'7',
    'deuda'=>'0'
    );
$deuda[42][42083]=array(
    'nombre' =>'Frechilla de Almazán',
    'habitantes' =>'24',
    'deuda'=>'0'
    );
$deuda[42][42084]=array(
    'nombre' =>'Fresno de Caracena',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[42][42085]=array(
    'nombre' =>'Fuentearmegil',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[42][42086]=array(
    'nombre' =>'Fuentecambrón',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[42][42087]=array(
    'nombre' =>'Fuentecantos',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[42][42088]=array(
    'nombre' =>'Fuentelmonge',
    'habitantes' =>'76',
    'deuda'=>'0'
    );
$deuda[42][42089]=array(
    'nombre' =>'Fuentelsaz de Soria',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[42][42090]=array(
    'nombre' =>'Fuentepinilla',
    'habitantes' =>'97',
    'deuda'=>'0'
    );
$deuda[42][42092]=array(
    'nombre' =>'Fuentes de Magaña',
    'habitantes' =>'75',
    'deuda'=>'58'
    );
$deuda[42][42093]=array(
    'nombre' =>'Fuentestrún',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[42][42094]=array(
    'nombre' =>'Garray',
    'habitantes' =>'702',
    'deuda'=>'0'
    );
$deuda[42][42095]=array(
    'nombre' =>'Golmayo',
    'habitantes' =>'2484',
    'deuda'=>'0'
    );
$deuda[42][42096]=array(
    'nombre' =>'Gómara',
    'habitantes' =>'335',
    'deuda'=>'0'
    );
$deuda[42][42097]=array(
    'nombre' =>'Gormaz',
    'habitantes' =>'28',
    'deuda'=>'0'
    );
$deuda[42][42098]=array(
    'nombre' =>'Herrera de Soria',
    'habitantes' =>'11',
    'deuda'=>'0'
    );
$deuda[42][42100]=array(
    'nombre' =>'Hinojosa del Campo',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[42][42103]=array(
    'nombre' =>'Langa de Duero',
    'habitantes' =>'756',
    'deuda'=>'431'
    );
$deuda[42][42105]=array(
    'nombre' =>'Liceras',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[42][42106]=array(
    'nombre' =>'Losilla, La',
    'habitantes' =>'16',
    'deuda'=>'0'
    );
$deuda[42][42107]=array(
    'nombre' =>'Magaña',
    'habitantes' =>'87',
    'deuda'=>'137'
    );
$deuda[42][42108]=array(
    'nombre' =>'Maján',
    'habitantes' =>'13',
    'deuda'=>'0'
    );
$deuda[42][42110]=array(
    'nombre' =>'Matalebreras',
    'habitantes' =>'77',
    'deuda'=>'54'
    );
$deuda[42][42111]=array(
    'nombre' =>'Matamala de Almazán',
    'habitantes' =>'329',
    'deuda'=>'1310'
    );
$deuda[42][42113]=array(
    'nombre' =>'Medinaceli',
    'habitantes' =>'732',
    'deuda'=>'0'
    );
$deuda[42][42115]=array(
    'nombre' =>'Miño de Medinaceli',
    'habitantes' =>'76',
    'deuda'=>'0'
    );
$deuda[42][42116]=array(
    'nombre' =>'Miño de San Esteban',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[42][42117]=array(
    'nombre' =>'Molinos de Duero',
    'habitantes' =>'178',
    'deuda'=>'0'
    );
$deuda[42][42118]=array(
    'nombre' =>'Momblona',
    'habitantes' =>'23',
    'deuda'=>'0'
    );
$deuda[42][42119]=array(
    'nombre' =>'Monteagudo de las Vicarías',
    'habitantes' =>'218',
    'deuda'=>'0'
    );
$deuda[42][42120]=array(
    'nombre' =>'Montejo de Tiermes',
    'habitantes' =>'174',
    'deuda'=>'0'
    );
$deuda[42][42121]=array(
    'nombre' =>'Montenegro de Cameros',
    'habitantes' =>'70',
    'deuda'=>'37'
    );
$deuda[42][42123]=array(
    'nombre' =>'Morón de Almazán',
    'habitantes' =>'216',
    'deuda'=>'0'
    );
$deuda[42][42124]=array(
    'nombre' =>'Muriel de la Fuente',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[42][42125]=array(
    'nombre' =>'Muriel Viejo',
    'habitantes' =>'98',
    'deuda'=>'0'
    );
$deuda[42][42127]=array(
    'nombre' =>'Nafría de Ucero',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[42][42128]=array(
    'nombre' =>'Narros',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[42][42129]=array(
    'nombre' =>'Navaleno',
    'habitantes' =>'832',
    'deuda'=>'35'
    );
$deuda[42][42130]=array(
    'nombre' =>'Nepas',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[42][42131]=array(
    'nombre' =>'Nolay',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[42][42132]=array(
    'nombre' =>'Noviercas',
    'habitantes' =>'158',
    'deuda'=>'38'
    );
$deuda[42][42134]=array(
    'nombre' =>'Ólvega',
    'habitantes' =>'3715',
    'deuda'=>'1346'
    );
$deuda[42][42135]=array(
    'nombre' =>'Oncala',
    'habitantes' =>'82',
    'deuda'=>'145'
    );
$deuda[42][42139]=array(
    'nombre' =>'Pinilla del Campo',
    'habitantes' =>'23',
    'deuda'=>'0'
    );
$deuda[42][42140]=array(
    'nombre' =>'Portillo de Soria',
    'habitantes' =>'15',
    'deuda'=>'0'
    );
$deuda[42][42141]=array(
    'nombre' =>'Póveda de Soria, La',
    'habitantes' =>'115',
    'deuda'=>'18'
    );
$deuda[42][42142]=array(
    'nombre' =>'Pozalmuro',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[42][42144]=array(
    'nombre' =>'Quintana Redonda',
    'habitantes' =>'507',
    'deuda'=>'0'
    );
$deuda[42][42145]=array(
    'nombre' =>'Quintanas de Gormaz',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[42][42148]=array(
    'nombre' =>'Quiñonería',
    'habitantes' =>'9',
    'deuda'=>'0'
    );
$deuda[42][42149]=array(
    'nombre' =>'Rábanos, Los',
    'habitantes' =>'507',
    'deuda'=>'55'
    );
$deuda[42][42151]=array(
    'nombre' =>'Rebollar',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[42][42152]=array(
    'nombre' =>'Recuerda',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[42][42153]=array(
    'nombre' =>'Rello',
    'habitantes' =>'17',
    'deuda'=>'0'
    );
$deuda[42][42154]=array(
    'nombre' =>'Renieblas',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[42][42155]=array(
    'nombre' =>'Retortillo de Soria',
    'habitantes' =>'182',
    'deuda'=>'0'
    );
$deuda[42][42156]=array(
    'nombre' =>'Reznos',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[42][42157]=array(
    'nombre' =>'Riba de Escalote, La',
    'habitantes' =>'16',
    'deuda'=>'0'
    );
$deuda[42][42158]=array(
    'nombre' =>'Rioseco de Soria',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[42][42159]=array(
    'nombre' =>'Rollamienta',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[42][42160]=array(
    'nombre' =>'Royo, El',
    'habitantes' =>'305',
    'deuda'=>'0'
    );
$deuda[42][42161]=array(
    'nombre' =>'Salduero',
    'habitantes' =>'155',
    'deuda'=>'9'
    );
$deuda[42][42162]=array(
    'nombre' =>'San Esteban de Gormaz',
    'habitantes' =>'3070',
    'deuda'=>'210'
    );
$deuda[42][42163]=array(
    'nombre' =>'San Felices',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[42][42164]=array(
    'nombre' =>'San Leonardo de Yagüe',
    'habitantes' =>'2164',
    'deuda'=>'0'
    );
$deuda[42][42165]=array(
    'nombre' =>'San Pedro Manrique',
    'habitantes' =>'594',
    'deuda'=>'0'
    );
$deuda[42][42166]=array(
    'nombre' =>'Santa Cruz de Yanguas',
    'habitantes' =>'67',
    'deuda'=>'0'
    );
$deuda[42][42167]=array(
    'nombre' =>'Santa María de Huerta',
    'habitantes' =>'319',
    'deuda'=>'32'
    );
$deuda[42][42168]=array(
    'nombre' =>'Santa María de las Hoyas',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[42][42171]=array(
    'nombre' =>'Serón de Nágima',
    'habitantes' =>'135',
    'deuda'=>'24'
    );
$deuda[42][42172]=array(
    'nombre' =>'Soliedra',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[42][42173]=array(
    'nombre' =>'Soria',
    'habitantes' =>'39168',
    'deuda'=>'30009'
    );
$deuda[42][42174]=array(
    'nombre' =>'Sotillo del Rincón',
    'habitantes' =>'198',
    'deuda'=>'0'
    );
$deuda[42][42175]=array(
    'nombre' =>'Suellacabras',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[42][42176]=array(
    'nombre' =>'Tajahuerce',
    'habitantes' =>'30',
    'deuda'=>'0'
    );
$deuda[42][42177]=array(
    'nombre' =>'Tajueco',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[42][42178]=array(
    'nombre' =>'Talveila',
    'habitantes' =>'133',
    'deuda'=>'0'
    );
$deuda[42][42181]=array(
    'nombre' =>'Tardelcuende',
    'habitantes' =>'450',
    'deuda'=>'86'
    );
$deuda[42][42182]=array(
    'nombre' =>'Taroda',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[42][42183]=array(
    'nombre' =>'Tejado',
    'habitantes' =>'125',
    'deuda'=>'0'
    );
$deuda[42][42184]=array(
    'nombre' =>'Torlengua',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[42][42185]=array(
    'nombre' =>'Torreblacos',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[42][42187]=array(
    'nombre' =>'Torrubia de Soria',
    'habitantes' =>'75',
    'deuda'=>'0'
    );
$deuda[42][42188]=array(
    'nombre' =>'Trévago',
    'habitantes' =>'55',
    'deuda'=>'94'
    );
$deuda[42][42189]=array(
    'nombre' =>'Ucero',
    'habitantes' =>'61',
    'deuda'=>'0'
    );
$deuda[42][42190]=array(
    'nombre' =>'Vadillo',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[42][42191]=array(
    'nombre' =>'Valdeavellano de Tera',
    'habitantes' =>'203',
    'deuda'=>'0'
    );
$deuda[42][42192]=array(
    'nombre' =>'Valdegeña',
    'habitantes' =>'43',
    'deuda'=>'0'
    );
$deuda[42][42193]=array(
    'nombre' =>'Valdelagua del Cerro',
    'habitantes' =>'14',
    'deuda'=>'0'
    );
$deuda[42][42194]=array(
    'nombre' =>'Valdemaluque',
    'habitantes' =>'189',
    'deuda'=>'0'
    );
$deuda[42][42195]=array(
    'nombre' =>'Valdenebro',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[42][42196]=array(
    'nombre' =>'Valdeprado',
    'habitantes' =>'14',
    'deuda'=>'59'
    );
$deuda[42][42197]=array(
    'nombre' =>'Valderrodilla',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[42][42198]=array(
    'nombre' =>'Valtajeros',
    'habitantes' =>'23',
    'deuda'=>'61'
    );
$deuda[42][42200]=array(
    'nombre' =>'Velamazán',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[42][42201]=array(
    'nombre' =>'Velilla de la Sierra',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[42][42202]=array(
    'nombre' =>'Velilla de los Ajos',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[42][42204]=array(
    'nombre' =>'Viana de Duero',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[42][42205]=array(
    'nombre' =>'Villaciervos',
    'habitantes' =>'95',
    'deuda'=>'0'
    );
$deuda[42][42206]=array(
    'nombre' =>'Villanueva de Gormaz',
    'habitantes' =>'8',
    'deuda'=>'0'
    );
$deuda[42][42207]=array(
    'nombre' =>'Villar del Ala',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[42][42208]=array(
    'nombre' =>'Villar del Campo',
    'habitantes' =>'22',
    'deuda'=>'0'
    );
$deuda[42][42209]=array(
    'nombre' =>'Villar del Río',
    'habitantes' =>'159',
    'deuda'=>'124'
    );
$deuda[42][42211]=array(
    'nombre' =>'Villares de Soria, Los',
    'habitantes' =>'91',
    'deuda'=>'27'
    );
$deuda[42][42212]=array(
    'nombre' =>'Villasayas',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[42][42213]=array(
    'nombre' =>'Villaseca de Arciel',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[42][42215]=array(
    'nombre' =>'Vinuesa',
    'habitantes' =>'938',
    'deuda'=>'0'
    );
$deuda[42][42216]=array(
    'nombre' =>'Vizmanos',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[42][42217]=array(
    'nombre' =>'Vozmediano',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[42][42218]=array(
    'nombre' =>'Yanguas',
    'habitantes' =>'107',
    'deuda'=>'22'
    );
$deuda[42][42219]=array(
    'nombre' =>'Yelo',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[43][43001]=array(
    'nombre' =>'Aiguamúrcia',
    'habitantes' =>'912',
    'deuda'=>'340'
    );
$deuda[43][43002]=array(
    'nombre' =>'Albinyana',
    'habitantes' =>'2320',
    'deuda'=>'1432'
    );
$deuda[43][43003]=array(
    'nombre' =>'Albiol, L\'',
    'habitantes' =>'448',
    'deuda'=>'172'
    );
$deuda[43][43004]=array(
    'nombre' =>'Alcanar',
    'habitantes' =>'9603',
    'deuda'=>'3486'
    );
$deuda[43][43005]=array(
    'nombre' =>'Alcover',
    'habitantes' =>'5073',
    'deuda'=>'5316'
    );
$deuda[43][43006]=array(
    'nombre' =>'Aldover',
    'habitantes' =>'918',
    'deuda'=>'148'
    );
$deuda[43][43007]=array(
    'nombre' =>'Aleixar, L\'',
    'habitantes' =>'885',
    'deuda'=>'342'
    );
$deuda[43][43008]=array(
    'nombre' =>'Alfara de Carles',
    'habitantes' =>'378',
    'deuda'=>'228'
    );
$deuda[43][43009]=array(
    'nombre' =>'Alforja',
    'habitantes' =>'1883',
    'deuda'=>'86'
    );
$deuda[43][43010]=array(
    'nombre' =>'Alió',
    'habitantes' =>'419',
    'deuda'=>'75'
    );
$deuda[43][43011]=array(
    'nombre' =>'Almoster',
    'habitantes' =>'1410',
    'deuda'=>'36'
    );
$deuda[43][43012]=array(
    'nombre' =>'Altafulla',
    'habitantes' =>'5052',
    'deuda'=>'749'
    );
$deuda[43][43013]=array(
    'nombre' =>'Ametlla de Mar, L\'',
    'habitantes' =>'7183',
    'deuda'=>'17596'
    );
$deuda[43][43014]=array(
    'nombre' =>'Amposta',
    'habitantes' =>'20952',
    'deuda'=>'14810'
    );
$deuda[43][43015]=array(
    'nombre' =>'Arbolí',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[43][43016]=array(
    'nombre' =>'Arboç, L\'',
    'habitantes' =>'5513',
    'deuda'=>'5101'
    );
$deuda[43][43017]=array(
    'nombre' =>'Argentera, L\'',
    'habitantes' =>'147',
    'deuda'=>'194'
    );
$deuda[43][43018]=array(
    'nombre' =>'Arnes',
    'habitantes' =>'474',
    'deuda'=>'516'
    );
$deuda[43][43019]=array(
    'nombre' =>'Ascó',
    'habitantes' =>'1682',
    'deuda'=>'0'
    );
$deuda[43][43020]=array(
    'nombre' =>'Banyeres del Penedès',
    'habitantes' =>'3103',
    'deuda'=>'556'
    );
$deuda[43][43021]=array(
    'nombre' =>'Barberà de la Conca',
    'habitantes' =>'505',
    'deuda'=>'168'
    );
$deuda[43][43022]=array(
    'nombre' =>'Batea',
    'habitantes' =>'1945',
    'deuda'=>'0'
    );
$deuda[43][43023]=array(
    'nombre' =>'Bellmunt del Priorat',
    'habitantes' =>'303',
    'deuda'=>'193'
    );
$deuda[43][43024]=array(
    'nombre' =>'Bellvei',
    'habitantes' =>'2185',
    'deuda'=>'459'
    );
$deuda[43][43025]=array(
    'nombre' =>'Benifallet',
    'habitantes' =>'717',
    'deuda'=>'1353'
    );
$deuda[43][43026]=array(
    'nombre' =>'Benissanet',
    'habitantes' =>'1251',
    'deuda'=>'60'
    );
$deuda[43][43027]=array(
    'nombre' =>'Bisbal de Falset, La',
    'habitantes' =>'221',
    'deuda'=>'0'
    );
$deuda[43][43028]=array(
    'nombre' =>'Bisbal del Penedès, La',
    'habitantes' =>'3474',
    'deuda'=>'2739'
    );
$deuda[43][43029]=array(
    'nombre' =>'Blancafort',
    'habitantes' =>'413',
    'deuda'=>'0'
    );
$deuda[43][43030]=array(
    'nombre' =>'Bonastre',
    'habitantes' =>'641',
    'deuda'=>'193'
    );
$deuda[43][43031]=array(
    'nombre' =>'Borges del Camp, Les',
    'habitantes' =>'2087',
    'deuda'=>'262'
    );
$deuda[43][43032]=array(
    'nombre' =>'Bot',
    'habitantes' =>'618',
    'deuda'=>'48'
    );
$deuda[43][43033]=array(
    'nombre' =>'Botarell',
    'habitantes' =>'1101',
    'deuda'=>'206'
    );
$deuda[43][43034]=array(
    'nombre' =>'Bràfim',
    'habitantes' =>'665',
    'deuda'=>'41'
    );
$deuda[43][43035]=array(
    'nombre' =>'Cabacés',
    'habitantes' =>'330',
    'deuda'=>'17'
    );
$deuda[43][43036]=array(
    'nombre' =>'Cabra del Camp',
    'habitantes' =>'1109',
    'deuda'=>'0'
    );
$deuda[43][43037]=array(
    'nombre' =>'Calafell',
    'habitantes' =>'24256',
    'deuda'=>'33640'
    );
$deuda[43][43038]=array(
    'nombre' =>'Cambrils',
    'habitantes' =>'32915',
    'deuda'=>'44372'
    );
$deuda[43][43039]=array(
    'nombre' =>'Capafonts',
    'habitantes' =>'111',
    'deuda'=>'35'
    );
$deuda[43][43040]=array(
    'nombre' =>'Capçanes',
    'habitantes' =>'413',
    'deuda'=>'20'
    );
$deuda[43][43041]=array(
    'nombre' =>'Caseres',
    'habitantes' =>'258',
    'deuda'=>'0'
    );
$deuda[43][43042]=array(
    'nombre' =>'Castellvell del Camp',
    'habitantes' =>'2897',
    'deuda'=>'2505'
    );
$deuda[43][43043]=array(
    'nombre' =>'Catllar, El',
    'habitantes' =>'4215',
    'deuda'=>'917'
    );
$deuda[43][43044]=array(
    'nombre' =>'Sénia, La',
    'habitantes' =>'5799',
    'deuda'=>'1389'
    );
$deuda[43][43045]=array(
    'nombre' =>'Colldejou',
    'habitantes' =>'172',
    'deuda'=>'144'
    );
$deuda[43][43046]=array(
    'nombre' =>'Conesa',
    'habitantes' =>'120',
    'deuda'=>'0'
    );
$deuda[43][43047]=array(
    'nombre' =>'Constantí',
    'habitantes' =>'6416',
    'deuda'=>'0'
    );
$deuda[43][43048]=array(
    'nombre' =>'Corbera d\'Ebre',
    'habitantes' =>'1095',
    'deuda'=>'19'
    );
$deuda[43][43049]=array(
    'nombre' =>'Cornudella de Montsant',
    'habitantes' =>'981',
    'deuda'=>'1375'
    );
$deuda[43][43050]=array(
    'nombre' =>'Creixell',
    'habitantes' =>'3492',
    'deuda'=>'8207'
    );
$deuda[43][43051]=array(
    'nombre' =>'Cunit',
    'habitantes' =>'11883',
    'deuda'=>'29089'
    );
$deuda[43][43052]=array(
    'nombre' =>'Xerta',
    'habitantes' =>'1209',
    'deuda'=>'578'
    );
$deuda[43][43053]=array(
    'nombre' =>'Duesaigües',
    'habitantes' =>'236',
    'deuda'=>'167'
    );
$deuda[43][43054]=array(
    'nombre' =>'Espluga de Francolí, L\'',
    'habitantes' =>'3818',
    'deuda'=>'1521'
    );
$deuda[43][43055]=array(
    'nombre' =>'Falset',
    'habitantes' =>'2867',
    'deuda'=>'2296'
    );
$deuda[43][43056]=array(
    'nombre' =>'Fatarella, La',
    'habitantes' =>'1028',
    'deuda'=>'0'
    );
$deuda[43][43057]=array(
    'nombre' =>'Febró, La',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[43][43058]=array(
    'nombre' =>'Figuera, La',
    'habitantes' =>'117',
    'deuda'=>'21'
    );
$deuda[43][43059]=array(
    'nombre' =>'Figuerola del Camp',
    'habitantes' =>'349',
    'deuda'=>'354'
    );
$deuda[43][43060]=array(
    'nombre' =>'Flix',
    'habitantes' =>'3754',
    'deuda'=>'0'
    );
$deuda[43][43061]=array(
    'nombre' =>'Forès',
    'habitantes' =>'51',
    'deuda'=>'71'
    );
$deuda[43][43062]=array(
    'nombre' =>'Freginals',
    'habitantes' =>'399',
    'deuda'=>'91'
    );
$deuda[43][43063]=array(
    'nombre' =>'Galera, La',
    'habitantes' =>'770',
    'deuda'=>'0'
    );
$deuda[43][43064]=array(
    'nombre' =>'Gandesa',
    'habitantes' =>'3009',
    'deuda'=>'1698'
    );
$deuda[43][43065]=array(
    'nombre' =>'Garcia',
    'habitantes' =>'583',
    'deuda'=>'47'
    );
$deuda[43][43066]=array(
    'nombre' =>'Garidells, Els',
    'habitantes' =>'188',
    'deuda'=>'0'
    );
$deuda[43][43067]=array(
    'nombre' =>'Ginestar',
    'habitantes' =>'802',
    'deuda'=>'407'
    );
$deuda[43][43068]=array(
    'nombre' =>'Godall',
    'habitantes' =>'632',
    'deuda'=>'232'
    );
$deuda[43][43069]=array(
    'nombre' =>'Gratallops',
    'habitantes' =>'243',
    'deuda'=>'142'
    );
$deuda[43][43070]=array(
    'nombre' =>'Guiamets, Els',
    'habitantes' =>'277',
    'deuda'=>'166'
    );
$deuda[43][43071]=array(
    'nombre' =>'Horta de Sant Joan',
    'habitantes' =>'1217',
    'deuda'=>'154'
    );
$deuda[43][43072]=array(
    'nombre' =>'Lloar, El',
    'habitantes' =>'121',
    'deuda'=>'0'
    );
$deuda[43][43073]=array(
    'nombre' =>'Llorac',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[43][43074]=array(
    'nombre' =>'Llorenç del Penedès',
    'habitantes' =>'2323',
    'deuda'=>'673'
    );
$deuda[43][43075]=array(
    'nombre' =>'Margalef',
    'habitantes' =>'106',
    'deuda'=>'161'
    );
$deuda[43][43076]=array(
    'nombre' =>'Marçà',
    'habitantes' =>'596',
    'deuda'=>'333'
    );
$deuda[43][43077]=array(
    'nombre' =>'Mas de Barberans',
    'habitantes' =>'604',
    'deuda'=>'191'
    );
$deuda[43][43078]=array(
    'nombre' =>'Masdenverge',
    'habitantes' =>'1096',
    'deuda'=>'538'
    );
$deuda[43][43079]=array(
    'nombre' =>'Masllorenç',
    'habitantes' =>'501',
    'deuda'=>'178'
    );
$deuda[43][43080]=array(
    'nombre' =>'Masó, La',
    'habitantes' =>'290',
    'deuda'=>'0'
    );
$deuda[43][43081]=array(
    'nombre' =>'Maspujols',
    'habitantes' =>'786',
    'deuda'=>'165'
    );
$deuda[43][43082]=array(
    'nombre' =>'Masroig, El',
    'habitantes' =>'511',
    'deuda'=>'29'
    );
$deuda[43][43083]=array(
    'nombre' =>'Milà, El',
    'habitantes' =>'178',
    'deuda'=>'0'
    );
$deuda[43][43084]=array(
    'nombre' =>'Miravet',
    'habitantes' =>'747',
    'deuda'=>'353'
    );
$deuda[43][43085]=array(
    'nombre' =>'Molar, El',
    'habitantes' =>'291',
    'deuda'=>'36'
    );
$deuda[43][43086]=array(
    'nombre' =>'Montblanc',
    'habitantes' =>'7283',
    'deuda'=>'3803'
    );
$deuda[43][43088]=array(
    'nombre' =>'Montbrió del Camp',
    'habitantes' =>'2693',
    'deuda'=>'997'
    );
$deuda[43][43089]=array(
    'nombre' =>'Montferri',
    'habitantes' =>'378',
    'deuda'=>'0'
    );
$deuda[43][43090]=array(
    'nombre' =>'Montmell, El',
    'habitantes' =>'1373',
    'deuda'=>'2728'
    );
$deuda[43][43091]=array(
    'nombre' =>'Mont-ral',
    'habitantes' =>'176',
    'deuda'=>'0'
    );
$deuda[43][43092]=array(
    'nombre' =>'Mont-roig del Camp',
    'habitantes' =>'11877',
    'deuda'=>'10457'
    );
$deuda[43][43093]=array(
    'nombre' =>'Móra d\'Ebre',
    'habitantes' =>'5477',
    'deuda'=>'5400'
    );
$deuda[43][43094]=array(
    'nombre' =>'Móra la Nova',
    'habitantes' =>'3185',
    'deuda'=>'637'
    );
$deuda[43][43095]=array(
    'nombre' =>'Morell, El',
    'habitantes' =>'3524',
    'deuda'=>'2140'
    );
$deuda[43][43096]=array(
    'nombre' =>'Morera de Montsant, La',
    'habitantes' =>'147',
    'deuda'=>'109'
    );
$deuda[43][43097]=array(
    'nombre' =>'Nou de Gaià, La',
    'habitantes' =>'537',
    'deuda'=>'494'
    );
$deuda[43][43098]=array(
    'nombre' =>'Nulles',
    'habitantes' =>'448',
    'deuda'=>'29'
    );
$deuda[43][43099]=array(
    'nombre' =>'Palma d\'Ebre, La',
    'habitantes' =>'376',
    'deuda'=>'19'
    );
$deuda[43][43100]=array(
    'nombre' =>'Pallaresos, Els',
    'habitantes' =>'4547',
    'deuda'=>'611'
    );
$deuda[43][43101]=array(
    'nombre' =>'Passanant i Belltall',
    'habitantes' =>'173',
    'deuda'=>'186'
    );
$deuda[43][43102]=array(
    'nombre' =>'Paüls',
    'habitantes' =>'582',
    'deuda'=>'312'
    );
$deuda[43][43103]=array(
    'nombre' =>'Perafort',
    'habitantes' =>'1320',
    'deuda'=>'933'
    );
$deuda[43][43104]=array(
    'nombre' =>'Perelló, El',
    'habitantes' =>'2925',
    'deuda'=>'109'
    );
$deuda[43][43105]=array(
    'nombre' =>'Piles, Les',
    'habitantes' =>'209',
    'deuda'=>'111'
    );
$deuda[43][43106]=array(
    'nombre' =>'Pinell de Brai, El',
    'habitantes' =>'1053',
    'deuda'=>'308'
    );
$deuda[43][43107]=array(
    'nombre' =>'Pira',
    'habitantes' =>'494',
    'deuda'=>'142'
    );
$deuda[43][43108]=array(
    'nombre' =>'Pla de Santa Maria, El',
    'habitantes' =>'2333',
    'deuda'=>'343'
    );
$deuda[43][43109]=array(
    'nombre' =>'Pobla de Mafumet, La',
    'habitantes' =>'3675',
    'deuda'=>'4558'
    );
$deuda[43][43110]=array(
    'nombre' =>'Pobla de Massaluca, La',
    'habitantes' =>'341',
    'deuda'=>'78'
    );
$deuda[43][43111]=array(
    'nombre' =>'Pobla de Montornès, La',
    'habitantes' =>'2861',
    'deuda'=>'828'
    );
$deuda[43][43112]=array(
    'nombre' =>'Poboleda',
    'habitantes' =>'363',
    'deuda'=>'309'
    );
$deuda[43][43113]=array(
    'nombre' =>'Pont d\'Armentera, El',
    'habitantes' =>'545',
    'deuda'=>'7'
    );
$deuda[43][43114]=array(
    'nombre' =>'Porrera',
    'habitantes' =>'448',
    'deuda'=>'0'
    );
$deuda[43][43115]=array(
    'nombre' =>'Pradell de la Teixeta',
    'habitantes' =>'183',
    'deuda'=>'160'
    );
$deuda[43][43116]=array(
    'nombre' =>'Prades',
    'habitantes' =>'623',
    'deuda'=>'361'
    );
$deuda[43][43117]=array(
    'nombre' =>'Prat de Comte',
    'habitantes' =>'165',
    'deuda'=>'242'
    );
$deuda[43][43118]=array(
    'nombre' =>'Pratdip',
    'habitantes' =>'697',
    'deuda'=>'385'
    );
$deuda[43][43119]=array(
    'nombre' =>'Puigpelat',
    'habitantes' =>'1119',
    'deuda'=>'0'
    );
$deuda[43][43120]=array(
    'nombre' =>'Querol',
    'habitantes' =>'563',
    'deuda'=>'135'
    );
$deuda[43][43121]=array(
    'nombre' =>'Rasquera',
    'habitantes' =>'864',
    'deuda'=>'1429'
    );
$deuda[43][43122]=array(
    'nombre' =>'Renau',
    'habitantes' =>'151',
    'deuda'=>'0'
    );
$deuda[43][43123]=array(
    'nombre' =>'Reus',
    'habitantes' =>'103194',
    'deuda'=>'221486'
    );
$deuda[43][43124]=array(
    'nombre' =>'Riba, La',
    'habitantes' =>'605',
    'deuda'=>'0'
    );
$deuda[43][43125]=array(
    'nombre' =>'Riba-roja d\'Ebre',
    'habitantes' =>'1172',
    'deuda'=>'1242'
    );
$deuda[43][43126]=array(
    'nombre' =>'Riera de Gaià, La',
    'habitantes' =>'1679',
    'deuda'=>'543'
    );
$deuda[43][43127]=array(
    'nombre' =>'Riudecanyes',
    'habitantes' =>'1151',
    'deuda'=>'306'
    );
$deuda[43][43128]=array(
    'nombre' =>'Riudecols',
    'habitantes' =>'1216',
    'deuda'=>'372'
    );
$deuda[43][43129]=array(
    'nombre' =>'Riudoms',
    'habitantes' =>'6633',
    'deuda'=>'3071'
    );
$deuda[43][43130]=array(
    'nombre' =>'Rocafort de Queralt',
    'habitantes' =>'251',
    'deuda'=>'0'
    );
$deuda[43][43131]=array(
    'nombre' =>'Roda de Berà',
    'habitantes' =>'6352',
    'deuda'=>'4321'
    );
$deuda[43][43132]=array(
    'nombre' =>'Rodonyà',
    'habitantes' =>'501',
    'deuda'=>'152'
    );
$deuda[43][43133]=array(
    'nombre' =>'Roquetes',
    'habitantes' =>'8234',
    'deuda'=>'5101'
    );
$deuda[43][43134]=array(
    'nombre' =>'Rourell, El',
    'habitantes' =>'404',
    'deuda'=>'81'
    );
$deuda[43][43135]=array(
    'nombre' =>'Salomó',
    'habitantes' =>'539',
    'deuda'=>'137'
    );
$deuda[43][43136]=array(
    'nombre' =>'Sant Carles de la Ràpita',
    'habitantes' =>'14760',
    'deuda'=>'5149'
    );
$deuda[43][43137]=array(
    'nombre' =>'Sant Jaume dels Domenys',
    'habitantes' =>'2521',
    'deuda'=>'989'
    );
$deuda[43][43138]=array(
    'nombre' =>'Santa Bàrbara',
    'habitantes' =>'3734',
    'deuda'=>'146'
    );
$deuda[43][43139]=array(
    'nombre' =>'Santa Coloma de Queralt',
    'habitantes' =>'2850',
    'deuda'=>'1043'
    );
$deuda[43][43140]=array(
    'nombre' =>'Santa Oliva',
    'habitantes' =>'3283',
    'deuda'=>'3628'
    );
$deuda[43][43141]=array(
    'nombre' =>'Pontils',
    'habitantes' =>'121',
    'deuda'=>'8'
    );
$deuda[43][43142]=array(
    'nombre' =>'Sarral',
    'habitantes' =>'1585',
    'deuda'=>'1095'
    );
$deuda[43][43143]=array(
    'nombre' =>'Savallà del Comtat',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[43][43144]=array(
    'nombre' =>'Secuita, La',
    'habitantes' =>'1670',
    'deuda'=>'1135'
    );
$deuda[43][43145]=array(
    'nombre' =>'Selva del Camp, La',
    'habitantes' =>'5559',
    'deuda'=>'5067'
    );
$deuda[43][43146]=array(
    'nombre' =>'Senan',
    'habitantes' =>'47',
    'deuda'=>'0'
    );
$deuda[43][43147]=array(
    'nombre' =>'Solivella',
    'habitantes' =>'629',
    'deuda'=>'603'
    );
$deuda[43][43148]=array(
    'nombre' =>'Tarragona',
    'habitantes' =>'131255',
    'deuda'=>'176543'
    );
$deuda[43][43149]=array(
    'nombre' =>'Tivenys',
    'habitantes' =>'868',
    'deuda'=>'908'
    );
$deuda[43][43150]=array(
    'nombre' =>'Tivissa',
    'habitantes' =>'1751',
    'deuda'=>'1823'
    );
$deuda[43][43151]=array(
    'nombre' =>'Torre de Fontaubella, La',
    'habitantes' =>'129',
    'deuda'=>'37'
    );
$deuda[43][43152]=array(
    'nombre' =>'Torre de l\'Espanyol, La',
    'habitantes' =>'644',
    'deuda'=>'0'
    );
$deuda[43][43153]=array(
    'nombre' =>'Torredembarra',
    'habitantes' =>'15371',
    'deuda'=>'19529'
    );
$deuda[43][43154]=array(
    'nombre' =>'Torroja del Priorat',
    'habitantes' =>'164',
    'deuda'=>'0'
    );
$deuda[43][43155]=array(
    'nombre' =>'Tortosa',
    'habitantes' =>'33864',
    'deuda'=>'42616'
    );
$deuda[43][43156]=array(
    'nombre' =>'Ulldecona',
    'habitantes' =>'6637',
    'deuda'=>'3759'
    );
$deuda[43][43157]=array(
    'nombre' =>'Ulldemolins',
    'habitantes' =>'404',
    'deuda'=>'177'
    );
$deuda[43][43158]=array(
    'nombre' =>'Vallclara',
    'habitantes' =>'109',
    'deuda'=>'60'
    );
$deuda[43][43159]=array(
    'nombre' =>'Vallfogona de Riucorb',
    'habitantes' =>'95',
    'deuda'=>'91'
    );
$deuda[43][43160]=array(
    'nombre' =>'Vallmoll',
    'habitantes' =>'1651',
    'deuda'=>'397'
    );
$deuda[43][43161]=array(
    'nombre' =>'Valls',
    'habitantes' =>'24321',
    'deuda'=>'17091'
    );
$deuda[43][43162]=array(
    'nombre' =>'Vandellòs i l\'Hospitalet de l\'Infant',
    'habitantes' =>'6050',
    'deuda'=>'1900'
    );
$deuda[43][43163]=array(
    'nombre' =>'Vendrell, El',
    'habitantes' =>'36558',
    'deuda'=>'76510'
    );
$deuda[43][43164]=array(
    'nombre' =>'Vespella de Gaià',
    'habitantes' =>'425',
    'deuda'=>'117'
    );
$deuda[43][43165]=array(
    'nombre' =>'Vilabella',
    'habitantes' =>'803',
    'deuda'=>'279'
    );
$deuda[43][43166]=array(
    'nombre' =>'Vilallonga del Camp',
    'habitantes' =>'2228',
    'deuda'=>'1763'
    );
$deuda[43][43167]=array(
    'nombre' =>'Vilanova d\'Escornalbou',
    'habitantes' =>'538',
    'deuda'=>'573'
    );
$deuda[43][43168]=array(
    'nombre' =>'Vilanova de Prades',
    'habitantes' =>'121',
    'deuda'=>'62'
    );
$deuda[43][43169]=array(
    'nombre' =>'Vilaplana',
    'habitantes' =>'624',
    'deuda'=>'233'
    );
$deuda[43][43170]=array(
    'nombre' =>'Vila-rodona',
    'habitantes' =>'1276',
    'deuda'=>'661'
    );
$deuda[43][43171]=array(
    'nombre' =>'Vila-seca',
    'habitantes' =>'22332',
    'deuda'=>'4889'
    );
$deuda[43][43172]=array(
    'nombre' =>'Vilaverd',
    'habitantes' =>'469',
    'deuda'=>'21'
    );
$deuda[43][43173]=array(
    'nombre' =>'Vilella Alta, La',
    'habitantes' =>'135',
    'deuda'=>'56'
    );
$deuda[43][43174]=array(
    'nombre' =>'Vilella Baixa, La',
    'habitantes' =>'197',
    'deuda'=>'60'
    );
$deuda[43][43175]=array(
    'nombre' =>'Vilalba dels Arcs',
    'habitantes' =>'669',
    'deuda'=>'0'
    );
$deuda[43][43176]=array(
    'nombre' =>'Vimbodí i Poblet',
    'habitantes' =>'966',
    'deuda'=>'579'
    );
$deuda[43][43177]=array(
    'nombre' =>'Vinebre',
    'habitantes' =>'435',
    'deuda'=>'170'
    );
$deuda[43][43178]=array(
    'nombre' =>'Vinyols i els Arcs',
    'habitantes' =>'1931',
    'deuda'=>'1142'
    );
$deuda[43][43901]=array(
    'nombre' =>'Deltebre',
    'habitantes' =>'11676',
    'deuda'=>'7899'
    );
$deuda[43][43902]=array(
    'nombre' =>'Sant Jaume d\'Enveja',
    'habitantes' =>'3538',
    'deuda'=>'3140'
    );
$deuda[43][43903]=array(
    'nombre' =>'Camarles',
    'habitantes' =>'3476',
    'deuda'=>'2062'
    );
$deuda[43][43904]=array(
    'nombre' =>'Aldea, L\'',
    'habitantes' =>'4245',
    'deuda'=>'62'
    );
$deuda[43][43905]=array(
    'nombre' =>'Salou',
    'habitantes' =>'26459',
    'deuda'=>'13560'
    );
$deuda[43][43906]=array(
    'nombre' =>'Ampolla, L\'',
    'habitantes' =>'3473',
    'deuda'=>'1181'
    );
$deuda[43][43907]=array(
    'nombre' =>'Canonja, La',
    'habitantes' =>'5839',
    'deuda'=>'1079'
    );
$deuda[44][44001]=array(
    'nombre' =>'Ababuj',
    'habitantes' =>'73',
    'deuda'=>'25'
    );
$deuda[44][44002]=array(
    'nombre' =>'Abejuela',
    'habitantes' =>'54',
    'deuda'=>'25'
    );
$deuda[44][44003]=array(
    'nombre' =>'Aguatón',
    'habitantes' =>'19',
    'deuda'=>'0'
    );
$deuda[44][44004]=array(
    'nombre' =>'Aguaviva',
    'habitantes' =>'586',
    'deuda'=>'198'
    );
$deuda[44][44005]=array(
    'nombre' =>'Aguilar del Alfambra',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[44][44006]=array(
    'nombre' =>'Alacón',
    'habitantes' =>'293',
    'deuda'=>'0'
    );
$deuda[44][44007]=array(
    'nombre' =>'Alba',
    'habitantes' =>'210',
    'deuda'=>'0'
    );
$deuda[44][44008]=array(
    'nombre' =>'Albalate del Arzobispo',
    'habitantes' =>'2001',
    'deuda'=>'0'
    );
$deuda[44][44009]=array(
    'nombre' =>'Albarracín',
    'habitantes' =>'1049',
    'deuda'=>'370'
    );
$deuda[44][44010]=array(
    'nombre' =>'Albentosa',
    'habitantes' =>'270',
    'deuda'=>'21'
    );
$deuda[44][44011]=array(
    'nombre' =>'Alcaine',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[44][44012]=array(
    'nombre' =>'Alcalá de la Selva',
    'habitantes' =>'399',
    'deuda'=>'174'
    );
$deuda[44][44013]=array(
    'nombre' =>'Alcañiz',
    'habitantes' =>'16230',
    'deuda'=>'10591'
    );
$deuda[44][44014]=array(
    'nombre' =>'Alcorisa',
    'habitantes' =>'3374',
    'deuda'=>'1414'
    );
$deuda[44][44016]=array(
    'nombre' =>'Alfambra',
    'habitantes' =>'571',
    'deuda'=>'0'
    );
$deuda[44][44017]=array(
    'nombre' =>'Aliaga',
    'habitantes' =>'365',
    'deuda'=>'0'
    );
$deuda[44][44018]=array(
    'nombre' =>'Almohaja',
    'habitantes' =>'20',
    'deuda'=>'9'
    );
$deuda[44][44019]=array(
    'nombre' =>'Alobras',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[44][44020]=array(
    'nombre' =>'Alpeñés',
    'habitantes' =>'21',
    'deuda'=>'0'
    );
$deuda[44][44021]=array(
    'nombre' =>'Allepuz',
    'habitantes' =>'118',
    'deuda'=>'0'
    );
$deuda[44][44022]=array(
    'nombre' =>'Alloza',
    'habitantes' =>'604',
    'deuda'=>'110'
    );
$deuda[44][44023]=array(
    'nombre' =>'Allueva',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[44][44024]=array(
    'nombre' =>'Anadón',
    'habitantes' =>'25',
    'deuda'=>'0'
    );
$deuda[44][44025]=array(
    'nombre' =>'Andorra',
    'habitantes' =>'8065',
    'deuda'=>'179'
    );
$deuda[44][44026]=array(
    'nombre' =>'Arcos de las Salinas',
    'habitantes' =>'105',
    'deuda'=>'84'
    );
$deuda[44][44027]=array(
    'nombre' =>'Arens de Lledó',
    'habitantes' =>'206',
    'deuda'=>'70'
    );
$deuda[44][44028]=array(
    'nombre' =>'Argente',
    'habitantes' =>'214',
    'deuda'=>'0'
    );
$deuda[44][44029]=array(
    'nombre' =>'Ariño',
    'habitantes' =>'763',
    'deuda'=>'0'
    );
$deuda[44][44031]=array(
    'nombre' =>'Azaila',
    'habitantes' =>'116',
    'deuda'=>'34'
    );
$deuda[44][44032]=array(
    'nombre' =>'Bádenas',
    'habitantes' =>'19',
    'deuda'=>'0'
    );
$deuda[44][44033]=array(
    'nombre' =>'Báguena',
    'habitantes' =>'327',
    'deuda'=>'0'
    );
$deuda[44][44034]=array(
    'nombre' =>'Bañón',
    'habitantes' =>'150',
    'deuda'=>'45'
    );
$deuda[44][44035]=array(
    'nombre' =>'Barrachina',
    'habitantes' =>'133',
    'deuda'=>'0'
    );
$deuda[44][44036]=array(
    'nombre' =>'Bea',
    'habitantes' =>'26',
    'deuda'=>'20'
    );
$deuda[44][44037]=array(
    'nombre' =>'Beceite',
    'habitantes' =>'566',
    'deuda'=>'224'
    );
$deuda[44][44038]=array(
    'nombre' =>'Belmonte de San José',
    'habitantes' =>'117',
    'deuda'=>'374'
    );
$deuda[44][44039]=array(
    'nombre' =>'Bello',
    'habitantes' =>'238',
    'deuda'=>'38'
    );
$deuda[44][44040]=array(
    'nombre' =>'Berge',
    'habitantes' =>'246',
    'deuda'=>'477'
    );
$deuda[44][44041]=array(
    'nombre' =>'Bezas',
    'habitantes' =>'67',
    'deuda'=>'5'
    );
$deuda[44][44042]=array(
    'nombre' =>'Blancas',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[44][44043]=array(
    'nombre' =>'Blesa',
    'habitantes' =>'109',
    'deuda'=>'30'
    );
$deuda[44][44044]=array(
    'nombre' =>'Bordón',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[44][44045]=array(
    'nombre' =>'Bronchales',
    'habitantes' =>'423',
    'deuda'=>'0'
    );
$deuda[44][44046]=array(
    'nombre' =>'Bueña',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[44][44047]=array(
    'nombre' =>'Burbáguena',
    'habitantes' =>'254',
    'deuda'=>'0'
    );
$deuda[44][44048]=array(
    'nombre' =>'Cabra de Mora',
    'habitantes' =>'73',
    'deuda'=>'200'
    );
$deuda[44][44049]=array(
    'nombre' =>'Calaceite',
    'habitantes' =>'1052',
    'deuda'=>'233'
    );
$deuda[44][44050]=array(
    'nombre' =>'Calamocha',
    'habitantes' =>'4417',
    'deuda'=>'1632'
    );
$deuda[44][44051]=array(
    'nombre' =>'Calanda',
    'habitantes' =>'3893',
    'deuda'=>'616'
    );
$deuda[44][44052]=array(
    'nombre' =>'Calomarde',
    'habitantes' =>'87',
    'deuda'=>'0'
    );
$deuda[44][44053]=array(
    'nombre' =>'Camañas',
    'habitantes' =>'125',
    'deuda'=>'66'
    );
$deuda[44][44054]=array(
    'nombre' =>'Camarena de la Sierra',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[44][44055]=array(
    'nombre' =>'Camarillas',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[44][44056]=array(
    'nombre' =>'Caminreal',
    'habitantes' =>'659',
    'deuda'=>'0'
    );
$deuda[44][44059]=array(
    'nombre' =>'Cantavieja',
    'habitantes' =>'741',
    'deuda'=>'112'
    );
$deuda[44][44060]=array(
    'nombre' =>'Cañada de Benatanduz',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[44][44061]=array(
    'nombre' =>'Cañada de Verich, La',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[44][44062]=array(
    'nombre' =>'Cañada Vellida',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[44][44063]=array(
    'nombre' =>'Cañizar del Olivar',
    'habitantes' =>'103',
    'deuda'=>'379'
    );
$deuda[44][44064]=array(
    'nombre' =>'Cascante del Río',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[44][44065]=array(
    'nombre' =>'Castejón de Tornos',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[44][44066]=array(
    'nombre' =>'Castel de Cabra',
    'habitantes' =>'122',
    'deuda'=>'0'
    );
$deuda[44][44067]=array(
    'nombre' =>'Castelnou',
    'habitantes' =>'142',
    'deuda'=>'94'
    );
$deuda[44][44068]=array(
    'nombre' =>'Castelserás',
    'habitantes' =>'840',
    'deuda'=>'0'
    );
$deuda[44][44070]=array(
    'nombre' =>'Castellar, El',
    'habitantes' =>'58',
    'deuda'=>'94'
    );
$deuda[44][44071]=array(
    'nombre' =>'Castellote',
    'habitantes' =>'728',
    'deuda'=>'312'
    );
$deuda[44][44074]=array(
    'nombre' =>'Cedrillas',
    'habitantes' =>'619',
    'deuda'=>'0'
    );
$deuda[44][44075]=array(
    'nombre' =>'Celadas',
    'habitantes' =>'398',
    'deuda'=>'0'
    );
$deuda[44][44076]=array(
    'nombre' =>'Cella',
    'habitantes' =>'2776',
    'deuda'=>'0'
    );
$deuda[44][44077]=array(
    'nombre' =>'Cerollera, La',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[44][44080]=array(
    'nombre' =>'Codoñera, La',
    'habitantes' =>'365',
    'deuda'=>'0'
    );
$deuda[44][44082]=array(
    'nombre' =>'Corbalán',
    'habitantes' =>'110',
    'deuda'=>'0'
    );
$deuda[44][44084]=array(
    'nombre' =>'Cortes de Aragón',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[44][44085]=array(
    'nombre' =>'Cosa',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[44][44086]=array(
    'nombre' =>'Cretas',
    'habitantes' =>'573',
    'deuda'=>'56'
    );
$deuda[44][44087]=array(
    'nombre' =>'Crivillén',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[44][44088]=array(
    'nombre' =>'Cuba, La',
    'habitantes' =>'37',
    'deuda'=>'15'
    );
$deuda[44][44089]=array(
    'nombre' =>'Cubla',
    'habitantes' =>'54',
    'deuda'=>'0'
    );
$deuda[44][44090]=array(
    'nombre' =>'Cucalón',
    'habitantes' =>'104',
    'deuda'=>'14'
    );
$deuda[44][44092]=array(
    'nombre' =>'Cuervo, El',
    'habitantes' =>'87',
    'deuda'=>'76'
    );
$deuda[44][44093]=array(
    'nombre' =>'Cuevas de Almudén',
    'habitantes' =>'140',
    'deuda'=>'0'
    );
$deuda[44][44094]=array(
    'nombre' =>'Cuevas Labradas',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[44][44096]=array(
    'nombre' =>'Ejulve',
    'habitantes' =>'200',
    'deuda'=>'106'
    );
$deuda[44][44097]=array(
    'nombre' =>'Escorihuela',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[44][44099]=array(
    'nombre' =>'Escucha',
    'habitantes' =>'953',
    'deuda'=>'447'
    );
$deuda[44][44100]=array(
    'nombre' =>'Estercuel',
    'habitantes' =>'229',
    'deuda'=>'0'
    );
$deuda[44][44101]=array(
    'nombre' =>'Ferreruela de Huerva',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[44][44102]=array(
    'nombre' =>'Fonfría',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[44][44103]=array(
    'nombre' =>'Formiche Alto',
    'habitantes' =>'180',
    'deuda'=>'74'
    );
$deuda[44][44105]=array(
    'nombre' =>'Fórnoles',
    'habitantes' =>'86',
    'deuda'=>'81'
    );
$deuda[44][44106]=array(
    'nombre' =>'Fortanete',
    'habitantes' =>'203',
    'deuda'=>'0'
    );
$deuda[44][44107]=array(
    'nombre' =>'Foz-Calanda',
    'habitantes' =>'269',
    'deuda'=>'193'
    );
$deuda[44][44108]=array(
    'nombre' =>'Fresneda, La',
    'habitantes' =>'474',
    'deuda'=>'161'
    );
$deuda[44][44109]=array(
    'nombre' =>'Frías de Albarracín',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[44][44110]=array(
    'nombre' =>'Fuenferrada',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[44][44111]=array(
    'nombre' =>'Fuentes Calientes',
    'habitantes' =>'93',
    'deuda'=>'239'
    );
$deuda[44][44112]=array(
    'nombre' =>'Fuentes Claras',
    'habitantes' =>'528',
    'deuda'=>'0'
    );
$deuda[44][44113]=array(
    'nombre' =>'Fuentes de Rubielos',
    'habitantes' =>'121',
    'deuda'=>'68'
    );
$deuda[44][44114]=array(
    'nombre' =>'Fuentespalda',
    'habitantes' =>'285',
    'deuda'=>'0'
    );
$deuda[44][44115]=array(
    'nombre' =>'Galve',
    'habitantes' =>'167',
    'deuda'=>'32'
    );
$deuda[44][44116]=array(
    'nombre' =>'Gargallo',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[44][44117]=array(
    'nombre' =>'Gea de Albarracín',
    'habitantes' =>'387',
    'deuda'=>'0'
    );
$deuda[44][44118]=array(
    'nombre' =>'Ginebrosa, La',
    'habitantes' =>'203',
    'deuda'=>'0'
    );
$deuda[44][44119]=array(
    'nombre' =>'Griegos',
    'habitantes' =>'157',
    'deuda'=>'0'
    );
$deuda[44][44120]=array(
    'nombre' =>'Guadalaviar',
    'habitantes' =>'247',
    'deuda'=>'0'
    );
$deuda[44][44121]=array(
    'nombre' =>'Gúdar',
    'habitantes' =>'77',
    'deuda'=>'169'
    );
$deuda[44][44122]=array(
    'nombre' =>'Híjar',
    'habitantes' =>'1761',
    'deuda'=>'243'
    );
$deuda[44][44123]=array(
    'nombre' =>'Hinojosa de Jarque',
    'habitantes' =>'136',
    'deuda'=>'0'
    );
$deuda[44][44124]=array(
    'nombre' =>'Hoz de la Vieja, La',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[44][44125]=array(
    'nombre' =>'Huesa del Común',
    'habitantes' =>'73',
    'deuda'=>'31'
    );
$deuda[44][44126]=array(
    'nombre' =>'Iglesuela del Cid, La',
    'habitantes' =>'432',
    'deuda'=>'248'
    );
$deuda[44][44127]=array(
    'nombre' =>'Jabaloyas',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[44][44128]=array(
    'nombre' =>'Jarque de la Val',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[44][44129]=array(
    'nombre' =>'Jatiel',
    'habitantes' =>'48',
    'deuda'=>'4'
    );
$deuda[44][44130]=array(
    'nombre' =>'Jorcas',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[44][44131]=array(
    'nombre' =>'Josa',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[44][44132]=array(
    'nombre' =>'Lagueruela',
    'habitantes' =>'81',
    'deuda'=>'0'
    );
$deuda[44][44133]=array(
    'nombre' =>'Lanzuela',
    'habitantes' =>'29',
    'deuda'=>'35'
    );
$deuda[44][44135]=array(
    'nombre' =>'Libros',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[44][44136]=array(
    'nombre' =>'Lidón',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[44][44137]=array(
    'nombre' =>'Linares de Mora',
    'habitantes' =>'287',
    'deuda'=>'90'
    );
$deuda[44][44138]=array(
    'nombre' =>'Loscos',
    'habitantes' =>'151',
    'deuda'=>'61'
    );
$deuda[44][44141]=array(
    'nombre' =>'Lledó',
    'habitantes' =>'169',
    'deuda'=>'0'
    );
$deuda[44][44142]=array(
    'nombre' =>'Maicas',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[44][44143]=array(
    'nombre' =>'Manzanera',
    'habitantes' =>'510',
    'deuda'=>'58'
    );
$deuda[44][44144]=array(
    'nombre' =>'Martín del Río',
    'habitantes' =>'441',
    'deuda'=>'436'
    );
$deuda[44][44145]=array(
    'nombre' =>'Mas de las Matas',
    'habitantes' =>'1318',
    'deuda'=>'0'
    );
$deuda[44][44146]=array(
    'nombre' =>'Mata de los Olmos, La',
    'habitantes' =>'261',
    'deuda'=>'0'
    );
$deuda[44][44147]=array(
    'nombre' =>'Mazaleón',
    'habitantes' =>'534',
    'deuda'=>'0'
    );
$deuda[44][44148]=array(
    'nombre' =>'Mezquita de Jarque',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[44][44149]=array(
    'nombre' =>'Mirambel',
    'habitantes' =>'119',
    'deuda'=>'44'
    );
$deuda[44][44150]=array(
    'nombre' =>'Miravete de la Sierra',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[44][44151]=array(
    'nombre' =>'Molinos',
    'habitantes' =>'258',
    'deuda'=>'491'
    );
$deuda[44][44152]=array(
    'nombre' =>'Monforte de Moyuela',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[44][44153]=array(
    'nombre' =>'Monreal del Campo',
    'habitantes' =>'2611',
    'deuda'=>'1376'
    );
$deuda[44][44154]=array(
    'nombre' =>'Monroyo',
    'habitantes' =>'360',
    'deuda'=>'0'
    );
$deuda[44][44155]=array(
    'nombre' =>'Montalbán',
    'habitantes' =>'1327',
    'deuda'=>'242'
    );
$deuda[44][44156]=array(
    'nombre' =>'Monteagudo del Castillo',
    'habitantes' =>'52',
    'deuda'=>'6'
    );
$deuda[44][44157]=array(
    'nombre' =>'Monterde de Albarracín',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[44][44158]=array(
    'nombre' =>'Mora de Rubielos',
    'habitantes' =>'1585',
    'deuda'=>'253'
    );
$deuda[44][44159]=array(
    'nombre' =>'Moscardón',
    'habitantes' =>'58',
    'deuda'=>'13'
    );
$deuda[44][44160]=array(
    'nombre' =>'Mosqueruela',
    'habitantes' =>'593',
    'deuda'=>'231'
    );
$deuda[44][44161]=array(
    'nombre' =>'Muniesa',
    'habitantes' =>'635',
    'deuda'=>'85'
    );
$deuda[44][44163]=array(
    'nombre' =>'Noguera de Albarracín',
    'habitantes' =>'151',
    'deuda'=>'418'
    );
$deuda[44][44164]=array(
    'nombre' =>'Nogueras',
    'habitantes' =>'29',
    'deuda'=>'59'
    );
$deuda[44][44165]=array(
    'nombre' =>'Nogueruelas',
    'habitantes' =>'207',
    'deuda'=>'236'
    );
$deuda[44][44167]=array(
    'nombre' =>'Obón',
    'habitantes' =>'48',
    'deuda'=>'0'
    );
$deuda[44][44168]=array(
    'nombre' =>'Odón',
    'habitantes' =>'226',
    'deuda'=>'30'
    );
$deuda[44][44169]=array(
    'nombre' =>'Ojos Negros',
    'habitantes' =>'413',
    'deuda'=>'0'
    );
$deuda[44][44171]=array(
    'nombre' =>'Olba',
    'habitantes' =>'240',
    'deuda'=>'39'
    );
$deuda[44][44172]=array(
    'nombre' =>'Oliete',
    'habitantes' =>'412',
    'deuda'=>'61'
    );
$deuda[44][44173]=array(
    'nombre' =>'Olmos, Los',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[44][44174]=array(
    'nombre' =>'Orihuela del Tremedal',
    'habitantes' =>'535',
    'deuda'=>'60'
    );
$deuda[44][44175]=array(
    'nombre' =>'Orrios',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[44][44176]=array(
    'nombre' =>'Palomar de Arroyos',
    'habitantes' =>'182',
    'deuda'=>'0'
    );
$deuda[44][44177]=array(
    'nombre' =>'Pancrudo',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[44][44178]=array(
    'nombre' =>'Parras de Castellote, Las',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[44][44179]=array(
    'nombre' =>'Peñarroya de Tastavins',
    'habitantes' =>'477',
    'deuda'=>'45'
    );
$deuda[44][44180]=array(
    'nombre' =>'Peracense',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[44][44181]=array(
    'nombre' =>'Peralejos',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[44][44182]=array(
    'nombre' =>'Perales del Alfambra',
    'habitantes' =>'238',
    'deuda'=>'232'
    );
$deuda[44][44183]=array(
    'nombre' =>'Pitarque',
    'habitantes' =>'90',
    'deuda'=>'20'
    );
$deuda[44][44184]=array(
    'nombre' =>'Plou',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[44][44185]=array(
    'nombre' =>'Pobo, El',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[44][44187]=array(
    'nombre' =>'Portellada, La',
    'habitantes' =>'240',
    'deuda'=>'0'
    );
$deuda[44][44189]=array(
    'nombre' =>'Pozondón',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[44][44190]=array(
    'nombre' =>'Pozuel del Campo',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[44][44191]=array(
    'nombre' =>'Puebla de Híjar, La',
    'habitantes' =>'947',
    'deuda'=>'0'
    );
$deuda[44][44192]=array(
    'nombre' =>'Puebla de Valverde, La',
    'habitantes' =>'500',
    'deuda'=>'0'
    );
$deuda[44][44193]=array(
    'nombre' =>'Puertomingalvo',
    'habitantes' =>'119',
    'deuda'=>'95'
    );
$deuda[44][44194]=array(
    'nombre' =>'Ráfales',
    'habitantes' =>'133',
    'deuda'=>'37'
    );
$deuda[44][44195]=array(
    'nombre' =>'Rillo',
    'habitantes' =>'97',
    'deuda'=>'0'
    );
$deuda[44][44196]=array(
    'nombre' =>'Riodeva',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[44][44197]=array(
    'nombre' =>'Ródenas',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[44][44198]=array(
    'nombre' =>'Royuela',
    'habitantes' =>'221',
    'deuda'=>'0'
    );
$deuda[44][44199]=array(
    'nombre' =>'Rubiales',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[44][44200]=array(
    'nombre' =>'Rubielos de la Cérida',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[44][44201]=array(
    'nombre' =>'Rubielos de Mora',
    'habitantes' =>'661',
    'deuda'=>'202'
    );
$deuda[44][44203]=array(
    'nombre' =>'Salcedillo',
    'habitantes' =>'13',
    'deuda'=>'0'
    );
$deuda[44][44204]=array(
    'nombre' =>'Saldón',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[44][44205]=array(
    'nombre' =>'Samper de Calanda',
    'habitantes' =>'854',
    'deuda'=>'0'
    );
$deuda[44][44206]=array(
    'nombre' =>'San Agustín',
    'habitantes' =>'141',
    'deuda'=>'47'
    );
$deuda[44][44207]=array(
    'nombre' =>'San Martín del Río',
    'habitantes' =>'174',
    'deuda'=>'0'
    );
$deuda[44][44208]=array(
    'nombre' =>'Santa Cruz de Nogueras',
    'habitantes' =>'39',
    'deuda'=>'0'
    );
$deuda[44][44209]=array(
    'nombre' =>'Santa Eulalia',
    'habitantes' =>'1081',
    'deuda'=>'0'
    );
$deuda[44][44210]=array(
    'nombre' =>'Sarrión',
    'habitantes' =>'1167',
    'deuda'=>'99'
    );
$deuda[44][44211]=array(
    'nombre' =>'Segura de los Baños',
    'habitantes' =>'40',
    'deuda'=>'92'
    );
$deuda[44][44212]=array(
    'nombre' =>'Seno',
    'habitantes' =>'43',
    'deuda'=>'15'
    );
$deuda[44][44213]=array(
    'nombre' =>'Singra',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[44][44215]=array(
    'nombre' =>'Terriente',
    'habitantes' =>'178',
    'deuda'=>'91'
    );
$deuda[44][44216]=array(
    'nombre' =>'Teruel',
    'habitantes' =>'35590',
    'deuda'=>'23962'
    );
$deuda[44][44217]=array(
    'nombre' =>'Toril y Masegoso',
    'habitantes' =>'30',
    'deuda'=>'0'
    );
$deuda[44][44218]=array(
    'nombre' =>'Tormón',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[44][44219]=array(
    'nombre' =>'Tornos',
    'habitantes' =>'235',
    'deuda'=>'0'
    );
$deuda[44][44220]=array(
    'nombre' =>'Torralba de los Sisones',
    'habitantes' =>'157',
    'deuda'=>'40'
    );
$deuda[44][44221]=array(
    'nombre' =>'Torrecilla de Alcañiz',
    'habitantes' =>'407',
    'deuda'=>'45'
    );
$deuda[44][44222]=array(
    'nombre' =>'Torrecilla del Rebollar',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[44][44223]=array(
    'nombre' =>'Torre de Arcas',
    'habitantes' =>'81',
    'deuda'=>'0'
    );
$deuda[44][44224]=array(
    'nombre' =>'Torre de las Arcas',
    'habitantes' =>'29',
    'deuda'=>'0'
    );
$deuda[44][44225]=array(
    'nombre' =>'Torre del Compte',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[44][44226]=array(
    'nombre' =>'Torrelacárcel',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[44][44227]=array(
    'nombre' =>'Torre los Negros',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[44][44228]=array(
    'nombre' =>'Torremocha de Jiloca',
    'habitantes' =>'110',
    'deuda'=>'24'
    );
$deuda[44][44229]=array(
    'nombre' =>'Torres de Albarracín',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[44][44230]=array(
    'nombre' =>'Torrevelilla',
    'habitantes' =>'200',
    'deuda'=>'0'
    );
$deuda[44][44231]=array(
    'nombre' =>'Torrijas',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[44][44232]=array(
    'nombre' =>'Torrijo del Campo',
    'habitantes' =>'489',
    'deuda'=>'0'
    );
$deuda[44][44234]=array(
    'nombre' =>'Tramacastiel',
    'habitantes' =>'75',
    'deuda'=>'0'
    );
$deuda[44][44235]=array(
    'nombre' =>'Tramacastilla',
    'habitantes' =>'107',
    'deuda'=>'0'
    );
$deuda[44][44236]=array(
    'nombre' =>'Tronchón',
    'habitantes' =>'68',
    'deuda'=>'41'
    );
$deuda[44][44237]=array(
    'nombre' =>'Urrea de Gaén',
    'habitantes' =>'488',
    'deuda'=>'0'
    );
$deuda[44][44238]=array(
    'nombre' =>'Utrillas',
    'habitantes' =>'3110',
    'deuda'=>'0'
    );
$deuda[44][44239]=array(
    'nombre' =>'Valacloche',
    'habitantes' =>'27',
    'deuda'=>'0'
    );
$deuda[44][44240]=array(
    'nombre' =>'Valbona',
    'habitantes' =>'193',
    'deuda'=>'0'
    );
$deuda[44][44241]=array(
    'nombre' =>'Valdealgorfa',
    'habitantes' =>'664',
    'deuda'=>'17'
    );
$deuda[44][44243]=array(
    'nombre' =>'Valdecuenca',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[44][44244]=array(
    'nombre' =>'Valdelinares',
    'habitantes' =>'85',
    'deuda'=>'105'
    );
$deuda[44][44245]=array(
    'nombre' =>'Valdeltormo',
    'habitantes' =>'312',
    'deuda'=>'0'
    );
$deuda[44][44246]=array(
    'nombre' =>'Valderrobres',
    'habitantes' =>'2342',
    'deuda'=>'0'
    );
$deuda[44][44247]=array(
    'nombre' =>'Valjunquera',
    'habitantes' =>'358',
    'deuda'=>'0'
    );
$deuda[44][44249]=array(
    'nombre' =>'Vallecillo, El',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[44][44250]=array(
    'nombre' =>'Veguillas de la Sierra',
    'habitantes' =>'22',
    'deuda'=>'0'
    );
$deuda[44][44251]=array(
    'nombre' =>'Villafranca del Campo',
    'habitantes' =>'299',
    'deuda'=>'0'
    );
$deuda[44][44252]=array(
    'nombre' =>'Villahermosa del Campo',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[44][44256]=array(
    'nombre' =>'Villanueva del Rebollar de la Sierra',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[44][44257]=array(
    'nombre' =>'Villar del Cobo',
    'habitantes' =>'189',
    'deuda'=>'0'
    );
$deuda[44][44258]=array(
    'nombre' =>'Villar del Salz',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[44][44260]=array(
    'nombre' =>'Villarluengo',
    'habitantes' =>'189',
    'deuda'=>'238'
    );
$deuda[44][44261]=array(
    'nombre' =>'Villarquemado',
    'habitantes' =>'869',
    'deuda'=>'0'
    );
$deuda[44][44262]=array(
    'nombre' =>'Villarroya de los Pinares',
    'habitantes' =>'163',
    'deuda'=>'0'
    );
$deuda[44][44263]=array(
    'nombre' =>'Villastar',
    'habitantes' =>'526',
    'deuda'=>'0'
    );
$deuda[44][44264]=array(
    'nombre' =>'Villel',
    'habitantes' =>'342',
    'deuda'=>'35'
    );
$deuda[44][44265]=array(
    'nombre' =>'Vinaceite',
    'habitantes' =>'262',
    'deuda'=>'0'
    );
$deuda[44][44266]=array(
    'nombre' =>'Visiedo',
    'habitantes' =>'133',
    'deuda'=>'21'
    );
$deuda[44][44267]=array(
    'nombre' =>'Vivel del Río Martín',
    'habitantes' =>'83',
    'deuda'=>'0'
    );
$deuda[44][44268]=array(
    'nombre' =>'Zoma, La',
    'habitantes' =>'18',
    'deuda'=>'0'
    );
$deuda[45][45001]=array(
    'nombre' =>'Ajofrín',
    'habitantes' =>'2314',
    'deuda'=>'960'
    );
$deuda[45][45002]=array(
    'nombre' =>'Alameda de la Sagra',
    'habitantes' =>'3478',
    'deuda'=>'1521'
    );
$deuda[45][45003]=array(
    'nombre' =>'Albarreal de Tajo',
    'habitantes' =>'713',
    'deuda'=>'0'
    );
$deuda[45][45004]=array(
    'nombre' =>'Alcabón',
    'habitantes' =>'720',
    'deuda'=>'256'
    );
$deuda[45][45005]=array(
    'nombre' =>'Alcañizo',
    'habitantes' =>'292',
    'deuda'=>'0'
    );
$deuda[45][45006]=array(
    'nombre' =>'Alcaudete de la Jara',
    'habitantes' =>'1897',
    'deuda'=>'867'
    );
$deuda[45][45007]=array(
    'nombre' =>'Alcolea de Tajo',
    'habitantes' =>'830',
    'deuda'=>'193'
    );
$deuda[45][45008]=array(
    'nombre' =>'Aldea en Cabo',
    'habitantes' =>'184',
    'deuda'=>'56'
    );
$deuda[45][45009]=array(
    'nombre' =>'Aldeanueva de Barbarroya',
    'habitantes' =>'612',
    'deuda'=>'0'
    );
$deuda[45][45010]=array(
    'nombre' =>'Aldeanueva de San Bartolomé',
    'habitantes' =>'475',
    'deuda'=>'88'
    );
$deuda[45][45011]=array(
    'nombre' =>'Almendral de la Cañada',
    'habitantes' =>'339',
    'deuda'=>'0'
    );
$deuda[45][45012]=array(
    'nombre' =>'Almonacid de Toledo',
    'habitantes' =>'865',
    'deuda'=>'0'
    );
$deuda[45][45013]=array(
    'nombre' =>'Almorox',
    'habitantes' =>'2248',
    'deuda'=>'1392'
    );
$deuda[45][45014]=array(
    'nombre' =>'Añover de Tajo',
    'habitantes' =>'5191',
    'deuda'=>'839'
    );
$deuda[45][45015]=array(
    'nombre' =>'Arcicóllar',
    'habitantes' =>'833',
    'deuda'=>'316'
    );
$deuda[45][45016]=array(
    'nombre' =>'Argés',
    'habitantes' =>'6000',
    'deuda'=>'0'
    );
$deuda[45][45017]=array(
    'nombre' =>'Azután',
    'habitantes' =>'291',
    'deuda'=>'0'
    );
$deuda[45][45018]=array(
    'nombre' =>'Barcience',
    'habitantes' =>'747',
    'deuda'=>'175'
    );
$deuda[45][45019]=array(
    'nombre' =>'Bargas',
    'habitantes' =>'10008',
    'deuda'=>'1031'
    );
$deuda[45][45020]=array(
    'nombre' =>'Belvís de la Jara',
    'habitantes' =>'1663',
    'deuda'=>'0'
    );
$deuda[45][45021]=array(
    'nombre' =>'Borox',
    'habitantes' =>'3605',
    'deuda'=>'2761'
    );
$deuda[45][45022]=array(
    'nombre' =>'Buenaventura',
    'habitantes' =>'445',
    'deuda'=>'185'
    );
$deuda[45][45023]=array(
    'nombre' =>'Burguillos de Toledo',
    'habitantes' =>'3028',
    'deuda'=>'2868'
    );
$deuda[45][45024]=array(
    'nombre' =>'Burujón',
    'habitantes' =>'1399',
    'deuda'=>'600'
    );
$deuda[45][45025]=array(
    'nombre' =>'Cabañas de la Sagra',
    'habitantes' =>'1760',
    'deuda'=>'431'
    );
$deuda[45][45026]=array(
    'nombre' =>'Cabañas de Yepes',
    'habitantes' =>'272',
    'deuda'=>'0'
    );
$deuda[45][45027]=array(
    'nombre' =>'Cabezamesada',
    'habitantes' =>'433',
    'deuda'=>'59'
    );
$deuda[45][45028]=array(
    'nombre' =>'Calera y Chozas',
    'habitantes' =>'4691',
    'deuda'=>'510'
    );
$deuda[45][45029]=array(
    'nombre' =>'Caleruela',
    'habitantes' =>'234',
    'deuda'=>'264'
    );
$deuda[45][45030]=array(
    'nombre' =>'Calzada de Oropesa',
    'habitantes' =>'564',
    'deuda'=>'0'
    );
$deuda[45][45031]=array(
    'nombre' =>'Camarena',
    'habitantes' =>'3776',
    'deuda'=>'585'
    );
$deuda[45][45032]=array(
    'nombre' =>'Camarenilla',
    'habitantes' =>'553',
    'deuda'=>'225'
    );
$deuda[45][45033]=array(
    'nombre' =>'Campillo de la Jara, El',
    'habitantes' =>'405',
    'deuda'=>'989'
    );
$deuda[45][45034]=array(
    'nombre' =>'Camuñas',
    'habitantes' =>'1824',
    'deuda'=>'0'
    );
$deuda[45][45035]=array(
    'nombre' =>'Cardiel de los Montes',
    'habitantes' =>'372',
    'deuda'=>'85'
    );
$deuda[45][45036]=array(
    'nombre' =>'Carmena',
    'habitantes' =>'785',
    'deuda'=>'59'
    );
$deuda[45][45037]=array(
    'nombre' =>'Carpio de Tajo, El',
    'habitantes' =>'2038',
    'deuda'=>'178'
    );
$deuda[45][45038]=array(
    'nombre' =>'Carranque',
    'habitantes' =>'4545',
    'deuda'=>'6763'
    );
$deuda[45][45039]=array(
    'nombre' =>'Carriches',
    'habitantes' =>'294',
    'deuda'=>'0'
    );
$deuda[45][45040]=array(
    'nombre' =>'Casar de Escalona, El',
    'habitantes' =>'1986',
    'deuda'=>'803'
    );
$deuda[45][45041]=array(
    'nombre' =>'Casarrubios del Monte',
    'habitantes' =>'5319',
    'deuda'=>'665'
    );
$deuda[45][45042]=array(
    'nombre' =>'Casasbuenas',
    'habitantes' =>'208',
    'deuda'=>'0'
    );
$deuda[45][45043]=array(
    'nombre' =>'Castillo de Bayuela',
    'habitantes' =>'978',
    'deuda'=>'239'
    );
$deuda[45][45045]=array(
    'nombre' =>'Cazalegas',
    'habitantes' =>'1730',
    'deuda'=>'286'
    );
$deuda[45][45046]=array(
    'nombre' =>'Cebolla',
    'habitantes' =>'3527',
    'deuda'=>'839'
    );
$deuda[45][45047]=array(
    'nombre' =>'Cedillo del Condado',
    'habitantes' =>'3604',
    'deuda'=>'86'
    );
$deuda[45][45048]=array(
    'nombre' =>'Cerralbos, Los',
    'habitantes' =>'434',
    'deuda'=>'0'
    );
$deuda[45][45049]=array(
    'nombre' =>'Cervera de los Montes',
    'habitantes' =>'521',
    'deuda'=>'250'
    );
$deuda[45][45050]=array(
    'nombre' =>'Ciruelos',
    'habitantes' =>'564',
    'deuda'=>'128'
    );
$deuda[45][45051]=array(
    'nombre' =>'Cobeja',
    'habitantes' =>'2196',
    'deuda'=>'80'
    );
$deuda[45][45052]=array(
    'nombre' =>'Cobisa',
    'habitantes' =>'4154',
    'deuda'=>'1571'
    );
$deuda[45][45053]=array(
    'nombre' =>'Consuegra',
    'habitantes' =>'10437',
    'deuda'=>'2854'
    );
$deuda[45][45054]=array(
    'nombre' =>'Corral de Almaguer',
    'habitantes' =>'5677',
    'deuda'=>'445'
    );
$deuda[45][45055]=array(
    'nombre' =>'Cuerva',
    'habitantes' =>'1400',
    'deuda'=>'1061'
    );
$deuda[45][45056]=array(
    'nombre' =>'Chozas de Canales',
    'habitantes' =>'3763',
    'deuda'=>'0'
    );
$deuda[45][45057]=array(
    'nombre' =>'Chueca',
    'habitantes' =>'269',
    'deuda'=>'0'
    );
$deuda[45][45058]=array(
    'nombre' =>'Domingo Pérez',
    'habitantes' =>'461',
    'deuda'=>'371'
    );
$deuda[45][45059]=array(
    'nombre' =>'Dosbarrios',
    'habitantes' =>'2255',
    'deuda'=>'489'
    );
$deuda[45][45060]=array(
    'nombre' =>'Erustes',
    'habitantes' =>'225',
    'deuda'=>'0'
    );
$deuda[45][45061]=array(
    'nombre' =>'Escalona',
    'habitantes' =>'3306',
    'deuda'=>'346'
    );
$deuda[45][45062]=array(
    'nombre' =>'Escalonilla',
    'habitantes' =>'1470',
    'deuda'=>'0'
    );
$deuda[45][45063]=array(
    'nombre' =>'Espinoso del Rey',
    'habitantes' =>'507',
    'deuda'=>'99'
    );
$deuda[45][45064]=array(
    'nombre' =>'Esquivias',
    'habitantes' =>'5389',
    'deuda'=>'205'
    );
$deuda[45][45065]=array(
    'nombre' =>'Estrella, La',
    'habitantes' =>'260',
    'deuda'=>'390'
    );
$deuda[45][45066]=array(
    'nombre' =>'Fuensalida',
    'habitantes' =>'11068',
    'deuda'=>'1344'
    );
$deuda[45][45067]=array(
    'nombre' =>'Gálvez',
    'habitantes' =>'3187',
    'deuda'=>'684'
    );
$deuda[45][45068]=array(
    'nombre' =>'Garciotum',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[45][45069]=array(
    'nombre' =>'Gerindote',
    'habitantes' =>'2427',
    'deuda'=>'1294'
    );
$deuda[45][45070]=array(
    'nombre' =>'Guadamur',
    'habitantes' =>'1864',
    'deuda'=>'1217'
    );
$deuda[45][45071]=array(
    'nombre' =>'Guardia, La',
    'habitantes' =>'2329',
    'deuda'=>'400'
    );
$deuda[45][45072]=array(
    'nombre' =>'Herencias, Las',
    'habitantes' =>'823',
    'deuda'=>'0'
    );
$deuda[45][45073]=array(
    'nombre' =>'Herreruela de Oropesa',
    'habitantes' =>'357',
    'deuda'=>'177'
    );
$deuda[45][45074]=array(
    'nombre' =>'Hinojosa de San Vicente',
    'habitantes' =>'413',
    'deuda'=>'116'
    );
$deuda[45][45075]=array(
    'nombre' =>'Hontanar',
    'habitantes' =>'156',
    'deuda'=>'0'
    );
$deuda[45][45076]=array(
    'nombre' =>'Hormigos',
    'habitantes' =>'741',
    'deuda'=>'564'
    );
$deuda[45][45077]=array(
    'nombre' =>'Huecas',
    'habitantes' =>'661',
    'deuda'=>'0'
    );
$deuda[45][45078]=array(
    'nombre' =>'Huerta de Valdecarábanos',
    'habitantes' =>'1798',
    'deuda'=>'0'
    );
$deuda[45][45079]=array(
    'nombre' =>'Iglesuela, La',
    'habitantes' =>'430',
    'deuda'=>'0'
    );
$deuda[45][45080]=array(
    'nombre' =>'Illán de Vacas',
    'habitantes' =>'6',
    'deuda'=>'0'
    );
$deuda[45][45081]=array(
    'nombre' =>'Illescas',
    'habitantes' =>'25964',
    'deuda'=>'4960'
    );
$deuda[45][45082]=array(
    'nombre' =>'Lagartera',
    'habitantes' =>'1503',
    'deuda'=>'274'
    );
$deuda[45][45083]=array(
    'nombre' =>'Layos',
    'habitantes' =>'644',
    'deuda'=>'54'
    );
$deuda[45][45084]=array(
    'nombre' =>'Lillo',
    'habitantes' =>'2813',
    'deuda'=>'534'
    );
$deuda[45][45085]=array(
    'nombre' =>'Lominchar',
    'habitantes' =>'2342',
    'deuda'=>'1289'
    );
$deuda[45][45086]=array(
    'nombre' =>'Lucillos',
    'habitantes' =>'613',
    'deuda'=>'0'
    );
$deuda[45][45087]=array(
    'nombre' =>'Madridejos',
    'habitantes' =>'10876',
    'deuda'=>'4235'
    );
$deuda[45][45088]=array(
    'nombre' =>'Magán',
    'habitantes' =>'3202',
    'deuda'=>'857'
    );
$deuda[45][45089]=array(
    'nombre' =>'Malpica de Tajo',
    'habitantes' =>'1861',
    'deuda'=>'575'
    );
$deuda[45][45090]=array(
    'nombre' =>'Manzaneque',
    'habitantes' =>'391',
    'deuda'=>'24'
    );
$deuda[45][45091]=array(
    'nombre' =>'Maqueda',
    'habitantes' =>'476',
    'deuda'=>'0'
    );
$deuda[45][45092]=array(
    'nombre' =>'Marjaliza',
    'habitantes' =>'278',
    'deuda'=>'111'
    );
$deuda[45][45093]=array(
    'nombre' =>'Marrupe',
    'habitantes' =>'170',
    'deuda'=>'66'
    );
$deuda[45][45094]=array(
    'nombre' =>'Mascaraque',
    'habitantes' =>'479',
    'deuda'=>'223'
    );
$deuda[45][45095]=array(
    'nombre' =>'Mata, La',
    'habitantes' =>'917',
    'deuda'=>'0'
    );
$deuda[45][45096]=array(
    'nombre' =>'Mazarambroz',
    'habitantes' =>'1287',
    'deuda'=>'50'
    );
$deuda[45][45097]=array(
    'nombre' =>'Mejorada',
    'habitantes' =>'1294',
    'deuda'=>'0'
    );
$deuda[45][45098]=array(
    'nombre' =>'Menasalbas',
    'habitantes' =>'2814',
    'deuda'=>'0'
    );
$deuda[45][45099]=array(
    'nombre' =>'Méntrida',
    'habitantes' =>'4984',
    'deuda'=>'1595'
    );
$deuda[45][45100]=array(
    'nombre' =>'Mesegar de Tajo',
    'habitantes' =>'228',
    'deuda'=>'0'
    );
$deuda[45][45101]=array(
    'nombre' =>'Miguel Esteban',
    'habitantes' =>'5080',
    'deuda'=>'0'
    );
$deuda[45][45102]=array(
    'nombre' =>'Mocejón',
    'habitantes' =>'4874',
    'deuda'=>'0'
    );
$deuda[45][45103]=array(
    'nombre' =>'Mohedas de la Jara',
    'habitantes' =>'453',
    'deuda'=>'69'
    );
$deuda[45][45104]=array(
    'nombre' =>'Montearagón',
    'habitantes' =>'554',
    'deuda'=>'0'
    );
$deuda[45][45105]=array(
    'nombre' =>'Montesclaros',
    'habitantes' =>'440',
    'deuda'=>'103'
    );
$deuda[45][45106]=array(
    'nombre' =>'Mora',
    'habitantes' =>'10077',
    'deuda'=>'2437'
    );
$deuda[45][45107]=array(
    'nombre' =>'Nambroca',
    'habitantes' =>'4442',
    'deuda'=>'0'
    );
$deuda[45][45108]=array(
    'nombre' =>'Nava de Ricomalillo, La',
    'habitantes' =>'597',
    'deuda'=>'79'
    );
$deuda[45][45109]=array(
    'nombre' =>'Navahermosa',
    'habitantes' =>'3878',
    'deuda'=>'2666'
    );
$deuda[45][45110]=array(
    'nombre' =>'Navalcán',
    'habitantes' =>'2166',
    'deuda'=>'0'
    );
$deuda[45][45111]=array(
    'nombre' =>'Navalmoralejo',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[45][45112]=array(
    'nombre' =>'Navalmorales, Los',
    'habitantes' =>'2757',
    'deuda'=>'0'
    );
$deuda[45][45113]=array(
    'nombre' =>'Navalucillos, Los',
    'habitantes' =>'2357',
    'deuda'=>'527'
    );
$deuda[45][45114]=array(
    'nombre' =>'Navamorcuende',
    'habitantes' =>'668',
    'deuda'=>'0'
    );
$deuda[45][45115]=array(
    'nombre' =>'Noblejas',
    'habitantes' =>'3534',
    'deuda'=>'0'
    );
$deuda[45][45116]=array(
    'nombre' =>'Noez',
    'habitantes' =>'926',
    'deuda'=>'818'
    );
$deuda[45][45117]=array(
    'nombre' =>'Nombela',
    'habitantes' =>'946',
    'deuda'=>'0'
    );
$deuda[45][45118]=array(
    'nombre' =>'Novés',
    'habitantes' =>'2727',
    'deuda'=>'647'
    );
$deuda[45][45119]=array(
    'nombre' =>'Numancia de la Sagra',
    'habitantes' =>'4763',
    'deuda'=>'1215'
    );
$deuda[45][45120]=array(
    'nombre' =>'Nuño Gómez',
    'habitantes' =>'154',
    'deuda'=>'32'
    );
$deuda[45][45121]=array(
    'nombre' =>'Ocaña',
    'habitantes' =>'10795',
    'deuda'=>'13191'
    );
$deuda[45][45122]=array(
    'nombre' =>'Olías del Rey',
    'habitantes' =>'7229',
    'deuda'=>'3022'
    );
$deuda[45][45123]=array(
    'nombre' =>'Ontígola',
    'habitantes' =>'4232',
    'deuda'=>'1459'
    );
$deuda[45][45124]=array(
    'nombre' =>'Orgaz',
    'habitantes' =>'2738',
    'deuda'=>'590'
    );
$deuda[45][45125]=array(
    'nombre' =>'Oropesa',
    'habitantes' =>'2771',
    'deuda'=>'2193'
    );
$deuda[45][45126]=array(
    'nombre' =>'Otero',
    'habitantes' =>'371',
    'deuda'=>'186'
    );
$deuda[45][45127]=array(
    'nombre' =>'Palomeque',
    'habitantes' =>'902',
    'deuda'=>'395'
    );
$deuda[45][45128]=array(
    'nombre' =>'Pantoja',
    'habitantes' =>'3409',
    'deuda'=>'928'
    );
$deuda[45][45129]=array(
    'nombre' =>'Paredes de Escalona',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[45][45130]=array(
    'nombre' =>'Parrillas',
    'habitantes' =>'375',
    'deuda'=>'0'
    );
$deuda[45][45131]=array(
    'nombre' =>'Pelahustán',
    'habitantes' =>'349',
    'deuda'=>'236'
    );
$deuda[45][45132]=array(
    'nombre' =>'Pepino',
    'habitantes' =>'2714',
    'deuda'=>'1533'
    );
$deuda[45][45133]=array(
    'nombre' =>'Polán',
    'habitantes' =>'3851',
    'deuda'=>'1120'
    );
$deuda[45][45134]=array(
    'nombre' =>'Portillo de Toledo',
    'habitantes' =>'2187',
    'deuda'=>'354'
    );
$deuda[45][45135]=array(
    'nombre' =>'Puebla de Almoradiel, La',
    'habitantes' =>'5546',
    'deuda'=>'568'
    );
$deuda[45][45136]=array(
    'nombre' =>'Puebla de Montalbán, La',
    'habitantes' =>'8063',
    'deuda'=>'2106'
    );
$deuda[45][45137]=array(
    'nombre' =>'Pueblanueva, La',
    'habitantes' =>'2304',
    'deuda'=>'205'
    );
$deuda[45][45138]=array(
    'nombre' =>'Puente del Arzobispo, El',
    'habitantes' =>'1337',
    'deuda'=>'275'
    );
$deuda[45][45139]=array(
    'nombre' =>'Puerto de San Vicente',
    'habitantes' =>'192',
    'deuda'=>'657'
    );
$deuda[45][45140]=array(
    'nombre' =>'Pulgar',
    'habitantes' =>'1603',
    'deuda'=>'82'
    );
$deuda[45][45141]=array(
    'nombre' =>'Quero',
    'habitantes' =>'1084',
    'deuda'=>'372'
    );
$deuda[45][45142]=array(
    'nombre' =>'Quintanar de la Orden',
    'habitantes' =>'11604',
    'deuda'=>'5014'
    );
$deuda[45][45143]=array(
    'nombre' =>'Quismondo',
    'habitantes' =>'1568',
    'deuda'=>'514'
    );
$deuda[45][45144]=array(
    'nombre' =>'Real de San Vicente, El',
    'habitantes' =>'1031',
    'deuda'=>'0'
    );
$deuda[45][45145]=array(
    'nombre' =>'Recas',
    'habitantes' =>'4311',
    'deuda'=>'909'
    );
$deuda[45][45146]=array(
    'nombre' =>'Retamoso de la Jara',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[45][45147]=array(
    'nombre' =>'Rielves',
    'habitantes' =>'760',
    'deuda'=>'0'
    );
$deuda[45][45148]=array(
    'nombre' =>'Robledo del Mazo',
    'habitantes' =>'327',
    'deuda'=>'156'
    );
$deuda[45][45149]=array(
    'nombre' =>'Romeral, El',
    'habitantes' =>'706',
    'deuda'=>'671'
    );
$deuda[45][45150]=array(
    'nombre' =>'San Bartolomé de las Abiertas',
    'habitantes' =>'524',
    'deuda'=>'367'
    );
$deuda[45][45151]=array(
    'nombre' =>'San Martín de Montalbán',
    'habitantes' =>'800',
    'deuda'=>'665'
    );
$deuda[45][45152]=array(
    'nombre' =>'San Martín de Pusa',
    'habitantes' =>'741',
    'deuda'=>'219'
    );
$deuda[45][45153]=array(
    'nombre' =>'San Pablo de los Montes',
    'habitantes' =>'1910',
    'deuda'=>'1099'
    );
$deuda[45][45154]=array(
    'nombre' =>'San Román de los Montes',
    'habitantes' =>'1855',
    'deuda'=>'0'
    );
$deuda[45][45155]=array(
    'nombre' =>'Santa Ana de Pusa',
    'habitantes' =>'449',
    'deuda'=>'35'
    );
$deuda[45][45156]=array(
    'nombre' =>'Santa Cruz de la Zarza',
    'habitantes' =>'4426',
    'deuda'=>'2491'
    );
$deuda[45][45157]=array(
    'nombre' =>'Santa Cruz del Retamar',
    'habitantes' =>'2901',
    'deuda'=>'757'
    );
$deuda[45][45158]=array(
    'nombre' =>'Santa Olalla',
    'habitantes' =>'3277',
    'deuda'=>'642'
    );
$deuda[45][45159]=array(
    'nombre' =>'Sartajada',
    'habitantes' =>'102',
    'deuda'=>'0'
    );
$deuda[45][45160]=array(
    'nombre' =>'Segurilla',
    'habitantes' =>'1318',
    'deuda'=>'851'
    );
$deuda[45][45161]=array(
    'nombre' =>'Seseña',
    'habitantes' =>'21558',
    'deuda'=>'0'
    );
$deuda[45][45162]=array(
    'nombre' =>'Sevilleja de la Jara',
    'habitantes' =>'751',
    'deuda'=>'240'
    );
$deuda[45][45163]=array(
    'nombre' =>'Sonseca',
    'habitantes' =>'11289',
    'deuda'=>'3940'
    );
$deuda[45][45164]=array(
    'nombre' =>'Sotillo de las Palomas',
    'habitantes' =>'213',
    'deuda'=>'83'
    );
$deuda[45][45165]=array(
    'nombre' =>'Talavera de la Reina',
    'habitantes' =>'85150',
    'deuda'=>'35420'
    );
$deuda[45][45166]=array(
    'nombre' =>'Tembleque',
    'habitantes' =>'2149',
    'deuda'=>'888'
    );
$deuda[45][45167]=array(
    'nombre' =>'Toboso, El',
    'habitantes' =>'1964',
    'deuda'=>'639'
    );
$deuda[45][45168]=array(
    'nombre' =>'Toledo',
    'habitantes' =>'83226',
    'deuda'=>'44166'
    );
$deuda[45][45169]=array(
    'nombre' =>'Torralba de Oropesa',
    'habitantes' =>'227',
    'deuda'=>'83'
    );
$deuda[45][45170]=array(
    'nombre' =>'Torrecilla de la Jara',
    'habitantes' =>'262',
    'deuda'=>'82'
    );
$deuda[45][45171]=array(
    'nombre' =>'Torre de Esteban Hambrán, La',
    'habitantes' =>'1770',
    'deuda'=>'772'
    );
$deuda[45][45172]=array(
    'nombre' =>'Torrico',
    'habitantes' =>'827',
    'deuda'=>'0'
    );
$deuda[45][45173]=array(
    'nombre' =>'Torrijos',
    'habitantes' =>'13273',
    'deuda'=>'2186'
    );
$deuda[45][45174]=array(
    'nombre' =>'Totanés',
    'habitantes' =>'386',
    'deuda'=>'51'
    );
$deuda[45][45175]=array(
    'nombre' =>'Turleque',
    'habitantes' =>'818',
    'deuda'=>'18'
    );
$deuda[45][45176]=array(
    'nombre' =>'Ugena',
    'habitantes' =>'5282',
    'deuda'=>'1272'
    );
$deuda[45][45177]=array(
    'nombre' =>'Urda',
    'habitantes' =>'2830',
    'deuda'=>'759'
    );
$deuda[45][45179]=array(
    'nombre' =>'Valdeverdeja',
    'habitantes' =>'647',
    'deuda'=>'0'
    );
$deuda[45][45180]=array(
    'nombre' =>'Valmojado',
    'habitantes' =>'4079',
    'deuda'=>'921'
    );
$deuda[45][45181]=array(
    'nombre' =>'Velada',
    'habitantes' =>'2893',
    'deuda'=>'24'
    );
$deuda[45][45182]=array(
    'nombre' =>'Ventas con Peña Aguilera, Las',
    'habitantes' =>'1206',
    'deuda'=>'400'
    );
$deuda[45][45183]=array(
    'nombre' =>'Ventas de Retamosa, Las',
    'habitantes' =>'3382',
    'deuda'=>'1554'
    );
$deuda[45][45184]=array(
    'nombre' =>'Ventas de San Julián, Las',
    'habitantes' =>'238',
    'deuda'=>'0'
    );
$deuda[45][45185]=array(
    'nombre' =>'Villacañas',
    'habitantes' =>'10070',
    'deuda'=>'2623'
    );
$deuda[45][45186]=array(
    'nombre' =>'Villa de Don Fadrique, La',
    'habitantes' =>'3918',
    'deuda'=>'0'
    );
$deuda[45][45187]=array(
    'nombre' =>'Villafranca de los Caballeros',
    'habitantes' =>'5196',
    'deuda'=>'1015'
    );
$deuda[45][45188]=array(
    'nombre' =>'Villaluenga de la Sagra',
    'habitantes' =>'3857',
    'deuda'=>'3557'
    );
$deuda[45][45189]=array(
    'nombre' =>'Villamiel de Toledo',
    'habitantes' =>'872',
    'deuda'=>'83'
    );
$deuda[45][45190]=array(
    'nombre' =>'Villaminaya',
    'habitantes' =>'559',
    'deuda'=>'571'
    );
$deuda[45][45191]=array(
    'nombre' =>'Villamuelas',
    'habitantes' =>'671',
    'deuda'=>'671'
    );
$deuda[45][45192]=array(
    'nombre' =>'Villanueva de Alcardete',
    'habitantes' =>'3503',
    'deuda'=>'85'
    );
$deuda[45][45193]=array(
    'nombre' =>'Villanueva de Bogas',
    'habitantes' =>'774',
    'deuda'=>'36'
    );
$deuda[45][45194]=array(
    'nombre' =>'Villarejo de Montalbán',
    'habitantes' =>'81',
    'deuda'=>'0'
    );
$deuda[45][45195]=array(
    'nombre' =>'Villarrubia de Santiago',
    'habitantes' =>'2665',
    'deuda'=>'1602'
    );
$deuda[45][45196]=array(
    'nombre' =>'Villaseca de la Sagra',
    'habitantes' =>'1808',
    'deuda'=>'597'
    );
$deuda[45][45197]=array(
    'nombre' =>'Villasequilla',
    'habitantes' =>'2545',
    'deuda'=>'705'
    );
$deuda[45][45198]=array(
    'nombre' =>'Villatobas',
    'habitantes' =>'2515',
    'deuda'=>'374'
    );
$deuda[45][45199]=array(
    'nombre' =>'Viso de San Juan, El',
    'habitantes' =>'4263',
    'deuda'=>'2101'
    );
$deuda[45][45200]=array(
    'nombre' =>'Yébenes, Los',
    'habitantes' =>'6132',
    'deuda'=>'866'
    );
$deuda[45][45201]=array(
    'nombre' =>'Yeles',
    'habitantes' =>'5038',
    'deuda'=>'3614'
    );
$deuda[45][45202]=array(
    'nombre' =>'Yepes',
    'habitantes' =>'5055',
    'deuda'=>'2120'
    );
$deuda[45][45203]=array(
    'nombre' =>'Yuncler',
    'habitantes' =>'3594',
    'deuda'=>'211'
    );
$deuda[45][45204]=array(
    'nombre' =>'Yunclillos',
    'habitantes' =>'878',
    'deuda'=>'76'
    );
$deuda[45][45205]=array(
    'nombre' =>'Yuncos',
    'habitantes' =>'10607',
    'deuda'=>'0'
    );
$deuda[45][45901]=array(
    'nombre' =>'Santo Domingo-Caudilla',
    'habitantes' =>'1021',
    'deuda'=>'0'
    );
$deuda[46][46001]=array(
    'nombre' =>'Ademuz',
    'habitantes' =>'1149',
    'deuda'=>'177'
    );
$deuda[46][46002]=array(
    'nombre' =>'Ador',
    'habitantes' =>'1374',
    'deuda'=>'1361'
    );
$deuda[46][46003]=array(
    'nombre' =>'Atzeneta d\'Albaida',
    'habitantes' =>'1160',
    'deuda'=>'297'
    );
$deuda[46][46004]=array(
    'nombre' =>'Agullent',
    'habitantes' =>'2402',
    'deuda'=>'0'
    );
$deuda[46][46005]=array(
    'nombre' =>'Alaquàs',
    'habitantes' =>'29838',
    'deuda'=>'31384'
    );
$deuda[46][46006]=array(
    'nombre' =>'Albaida',
    'habitantes' =>'5987',
    'deuda'=>'9104'
    );
$deuda[46][46007]=array(
    'nombre' =>'Albal',
    'habitantes' =>'16029',
    'deuda'=>'2391'
    );
$deuda[46][46008]=array(
    'nombre' =>'Albalat de la Ribera',
    'habitantes' =>'3467',
    'deuda'=>'0'
    );
$deuda[46][46009]=array(
    'nombre' =>'Albalat dels Sorells',
    'habitantes' =>'3896',
    'deuda'=>'1056'
    );
$deuda[46][46010]=array(
    'nombre' =>'Albalat dels Tarongers',
    'habitantes' =>'1178',
    'deuda'=>'19'
    );
$deuda[46][46011]=array(
    'nombre' =>'Alberic',
    'habitantes' =>'10498',
    'deuda'=>'2632'
    );
$deuda[46][46012]=array(
    'nombre' =>'Alborache',
    'habitantes' =>'1136',
    'deuda'=>'527'
    );
$deuda[46][46013]=array(
    'nombre' =>'Alboraya',
    'habitantes' =>'23819',
    'deuda'=>'44271'
    );
$deuda[46][46014]=array(
    'nombre' =>'Albuixech',
    'habitantes' =>'3928',
    'deuda'=>'538'
    );
$deuda[46][46015]=array(
    'nombre' =>'Alcàsser',
    'habitantes' =>'9612',
    'deuda'=>'0'
    );
$deuda[46][46016]=array(
    'nombre' =>'Alcàntera de Xúquer',
    'habitantes' =>'1341',
    'deuda'=>'704'
    );
$deuda[46][46017]=array(
    'nombre' =>'Alzira',
    'habitantes' =>'44554',
    'deuda'=>'15364'
    );
$deuda[46][46018]=array(
    'nombre' =>'Alcublas',
    'habitantes' =>'727',
    'deuda'=>'0'
    );
$deuda[46][46019]=array(
    'nombre' =>'Alcúdia, l\'',
    'habitantes' =>'11691',
    'deuda'=>'8204'
    );
$deuda[46][46020]=array(
    'nombre' =>'Alcúdia de Crespins, l\'',
    'habitantes' =>'5282',
    'deuda'=>'2346'
    );
$deuda[46][46021]=array(
    'nombre' =>'Aldaia',
    'habitantes' =>'31120',
    'deuda'=>'9423'
    );
$deuda[46][46022]=array(
    'nombre' =>'Alfafar',
    'habitantes' =>'21125',
    'deuda'=>'5659'
    );
$deuda[46][46023]=array(
    'nombre' =>'Alfauir',
    'habitantes' =>'458',
    'deuda'=>'85'
    );
$deuda[46][46024]=array(
    'nombre' =>'Alfara de la Baronia',
    'habitantes' =>'526',
    'deuda'=>'216'
    );
$deuda[46][46025]=array(
    'nombre' =>'Alfara del Patriarca',
    'habitantes' =>'3228',
    'deuda'=>'891'
    );
$deuda[46][46026]=array(
    'nombre' =>'Alfarp',
    'habitantes' =>'1532',
    'deuda'=>'13'
    );
$deuda[46][46027]=array(
    'nombre' =>'Alfarrasí',
    'habitantes' =>'1247',
    'deuda'=>'0'
    );
$deuda[46][46028]=array(
    'nombre' =>'Algar de Palancia',
    'habitantes' =>'503',
    'deuda'=>'45'
    );
$deuda[46][46029]=array(
    'nombre' =>'Algemesí',
    'habitantes' =>'27633',
    'deuda'=>'9101'
    );
$deuda[46][46030]=array(
    'nombre' =>'Algimia de Alfara',
    'habitantes' =>'1048',
    'deuda'=>'275'
    );
$deuda[46][46031]=array(
    'nombre' =>'Alginet',
    'habitantes' =>'13144',
    'deuda'=>'407'
    );
$deuda[46][46032]=array(
    'nombre' =>'Almàssera',
    'habitantes' =>'7269',
    'deuda'=>'6688'
    );
$deuda[46][46033]=array(
    'nombre' =>'Almiserà',
    'habitantes' =>'272',
    'deuda'=>'0'
    );
$deuda[46][46034]=array(
    'nombre' =>'Almoines',
    'habitantes' =>'2302',
    'deuda'=>'562'
    );
$deuda[46][46035]=array(
    'nombre' =>'Almussafes',
    'habitantes' =>'8759',
    'deuda'=>'7460'
    );
$deuda[46][46036]=array(
    'nombre' =>'Alpuente',
    'habitantes' =>'679',
    'deuda'=>'155'
    );
$deuda[46][46037]=array(
    'nombre' =>'Alqueria de la Comtessa, l\'',
    'habitantes' =>'1504',
    'deuda'=>'1020'
    );
$deuda[46][46038]=array(
    'nombre' =>'Andilla',
    'habitantes' =>'362',
    'deuda'=>'0'
    );
$deuda[46][46039]=array(
    'nombre' =>'Anna',
    'habitantes' =>'2712',
    'deuda'=>'2687'
    );
$deuda[46][46040]=array(
    'nombre' =>'Antella',
    'habitantes' =>'1301',
    'deuda'=>'393'
    );
$deuda[46][46041]=array(
    'nombre' =>'Aras de los Olmos',
    'habitantes' =>'382',
    'deuda'=>'102'
    );
$deuda[46][46042]=array(
    'nombre' =>'Aielo de Malferit',
    'habitantes' =>'4705',
    'deuda'=>'1695'
    );
$deuda[46][46043]=array(
    'nombre' =>'Aielo de Rugat',
    'habitantes' =>'173',
    'deuda'=>'0'
    );
$deuda[46][46044]=array(
    'nombre' =>'Ayora',
    'habitantes' =>'5303',
    'deuda'=>'1255'
    );
$deuda[46][46045]=array(
    'nombre' =>'Barxeta',
    'habitantes' =>'1615',
    'deuda'=>'0'
    );
$deuda[46][46046]=array(
    'nombre' =>'Barx',
    'habitantes' =>'1264',
    'deuda'=>'457'
    );
$deuda[46][46047]=array(
    'nombre' =>'Bèlgida',
    'habitantes' =>'683',
    'deuda'=>'10'
    );
$deuda[46][46048]=array(
    'nombre' =>'Bellreguard',
    'habitantes' =>'4623',
    'deuda'=>'0'
    );
$deuda[46][46049]=array(
    'nombre' =>'Bellús',
    'habitantes' =>'326',
    'deuda'=>'342'
    );
$deuda[46][46050]=array(
    'nombre' =>'Benagéber',
    'habitantes' =>'217',
    'deuda'=>'157'
    );
$deuda[46][46051]=array(
    'nombre' =>'Benaguasil',
    'habitantes' =>'10936',
    'deuda'=>'2775'
    );
$deuda[46][46052]=array(
    'nombre' =>'Benavites',
    'habitantes' =>'626',
    'deuda'=>'307'
    );
$deuda[46][46053]=array(
    'nombre' =>'Beneixida',
    'habitantes' =>'690',
    'deuda'=>'1354'
    );
$deuda[46][46054]=array(
    'nombre' =>'Benetússer',
    'habitantes' =>'14436',
    'deuda'=>'4519'
    );
$deuda[46][46055]=array(
    'nombre' =>'Beniarjó',
    'habitantes' =>'1754',
    'deuda'=>'470'
    );
$deuda[46][46056]=array(
    'nombre' =>'Beniatjar',
    'habitantes' =>'240',
    'deuda'=>'10'
    );
$deuda[46][46057]=array(
    'nombre' =>'Benicolet',
    'habitantes' =>'612',
    'deuda'=>'107'
    );
$deuda[46][46058]=array(
    'nombre' =>'Benifairó de les Valls',
    'habitantes' =>'2239',
    'deuda'=>'74'
    );
$deuda[46][46059]=array(
    'nombre' =>'Benifairó de la Valldigna',
    'habitantes' =>'1622',
    'deuda'=>'1032'
    );
$deuda[46][46060]=array(
    'nombre' =>'Benifaió',
    'habitantes' =>'11913',
    'deuda'=>'5345'
    );
$deuda[46][46061]=array(
    'nombre' =>'Beniflá',
    'habitantes' =>'453',
    'deuda'=>'0'
    );
$deuda[46][46062]=array(
    'nombre' =>'Benigànim',
    'habitantes' =>'6120',
    'deuda'=>'2049'
    );
$deuda[46][46063]=array(
    'nombre' =>'Benimodo',
    'habitantes' =>'2229',
    'deuda'=>'1563'
    );
$deuda[46][46064]=array(
    'nombre' =>'Benimuslem',
    'habitantes' =>'658',
    'deuda'=>'83'
    );
$deuda[46][46065]=array(
    'nombre' =>'Beniparrell',
    'habitantes' =>'1922',
    'deuda'=>'454'
    );
$deuda[46][46066]=array(
    'nombre' =>'Benirredrà',
    'habitantes' =>'1592',
    'deuda'=>'547'
    );
$deuda[46][46067]=array(
    'nombre' =>'Benisanó',
    'habitantes' =>'2233',
    'deuda'=>'3336'
    );
$deuda[46][46068]=array(
    'nombre' =>'Benissoda',
    'habitantes' =>'431',
    'deuda'=>'59'
    );
$deuda[46][46069]=array(
    'nombre' =>'Benisuera',
    'habitantes' =>'191',
    'deuda'=>'272'
    );
$deuda[46][46070]=array(
    'nombre' =>'Bétera',
    'habitantes' =>'22349',
    'deuda'=>'2068'
    );
$deuda[46][46071]=array(
    'nombre' =>'Bicorp',
    'habitantes' =>'533',
    'deuda'=>'0'
    );
$deuda[46][46072]=array(
    'nombre' =>'Bocairent',
    'habitantes' =>'4357',
    'deuda'=>'1231'
    );
$deuda[46][46073]=array(
    'nombre' =>'Bolbaite',
    'habitantes' =>'1389',
    'deuda'=>'602'
    );
$deuda[46][46074]=array(
    'nombre' =>'Bonrepòs i Mirambell',
    'habitantes' =>'3566',
    'deuda'=>'991'
    );
$deuda[46][46075]=array(
    'nombre' =>'Bufali',
    'habitantes' =>'167',
    'deuda'=>'59'
    );
$deuda[46][46076]=array(
    'nombre' =>'Bugarra',
    'habitantes' =>'739',
    'deuda'=>'0'
    );
$deuda[46][46077]=array(
    'nombre' =>'Buñol',
    'habitantes' =>'9726',
    'deuda'=>'3173'
    );
$deuda[46][46078]=array(
    'nombre' =>'Burjassot',
    'habitantes' =>'37546',
    'deuda'=>'20186'
    );
$deuda[46][46079]=array(
    'nombre' =>'Calles',
    'habitantes' =>'391',
    'deuda'=>'179'
    );
$deuda[46][46080]=array(
    'nombre' =>'Camporrobles',
    'habitantes' =>'1322',
    'deuda'=>'159'
    );
$deuda[46][46081]=array(
    'nombre' =>'Canals',
    'habitantes' =>'13628',
    'deuda'=>'0'
    );
$deuda[46][46082]=array(
    'nombre' =>'Canet d\'En Berenguer',
    'habitantes' =>'6426',
    'deuda'=>'0'
    );
$deuda[46][46083]=array(
    'nombre' =>'Carcaixent',
    'habitantes' =>'20479',
    'deuda'=>'12796'
    );
$deuda[46][46084]=array(
    'nombre' =>'Càrcer',
    'habitantes' =>'1965',
    'deuda'=>'114'
    );
$deuda[46][46085]=array(
    'nombre' =>'Carlet',
    'habitantes' =>'15397',
    'deuda'=>'0'
    );
$deuda[46][46086]=array(
    'nombre' =>'Carrícola',
    'habitantes' =>'98',
    'deuda'=>'21'
    );
$deuda[46][46087]=array(
    'nombre' =>'Casas Altas',
    'habitantes' =>'146',
    'deuda'=>'33'
    );
$deuda[46][46088]=array(
    'nombre' =>'Casas Bajas',
    'habitantes' =>'188',
    'deuda'=>'0'
    );
$deuda[46][46089]=array(
    'nombre' =>'Casinos',
    'habitantes' =>'2785',
    'deuda'=>'1600'
    );
$deuda[46][46090]=array(
    'nombre' =>'Castelló de Rugat',
    'habitantes' =>'2287',
    'deuda'=>'2945'
    );
$deuda[46][46091]=array(
    'nombre' =>'Castellonet de la Conquesta',
    'habitantes' =>'133',
    'deuda'=>'35'
    );
$deuda[46][46092]=array(
    'nombre' =>'Castielfabib',
    'habitantes' =>'275',
    'deuda'=>'1057'
    );
$deuda[46][46093]=array(
    'nombre' =>'Catadau',
    'habitantes' =>'2761',
    'deuda'=>'0'
    );
$deuda[46][46094]=array(
    'nombre' =>'Catarroja',
    'habitantes' =>'27688',
    'deuda'=>'12267'
    );
$deuda[46][46095]=array(
    'nombre' =>'Caudete de las Fuentes',
    'habitantes' =>'724',
    'deuda'=>'195'
    );
$deuda[46][46096]=array(
    'nombre' =>'Cerdà',
    'habitantes' =>'361',
    'deuda'=>'282'
    );
$deuda[46][46097]=array(
    'nombre' =>'Cofrentes',
    'habitantes' =>'1097',
    'deuda'=>'141'
    );
$deuda[46][46098]=array(
    'nombre' =>'Corbera',
    'habitantes' =>'3233',
    'deuda'=>'25'
    );
$deuda[46][46099]=array(
    'nombre' =>'Cortes de Pallás',
    'habitantes' =>'993',
    'deuda'=>'0'
    );
$deuda[46][46100]=array(
    'nombre' =>'Cotes',
    'habitantes' =>'357',
    'deuda'=>'120'
    );
$deuda[46][46101]=array(
    'nombre' =>'Quart de les Valls',
    'habitantes' =>'1056',
    'deuda'=>'20'
    );
$deuda[46][46102]=array(
    'nombre' =>'Quart de Poblet',
    'habitantes' =>'24864',
    'deuda'=>'11531'
    );
$deuda[46][46103]=array(
    'nombre' =>'Quartell',
    'habitantes' =>'1557',
    'deuda'=>'382'
    );
$deuda[46][46104]=array(
    'nombre' =>'Quatretonda',
    'habitantes' =>'2378',
    'deuda'=>'383'
    );
$deuda[46][46105]=array(
    'nombre' =>'Cullera',
    'habitantes' =>'22236',
    'deuda'=>'32467'
    );
$deuda[46][46106]=array(
    'nombre' =>'Chelva',
    'habitantes' =>'1446',
    'deuda'=>'334'
    );
$deuda[46][46107]=array(
    'nombre' =>'Chella',
    'habitantes' =>'2604',
    'deuda'=>'525'
    );
$deuda[46][46108]=array(
    'nombre' =>'Chera',
    'habitantes' =>'527',
    'deuda'=>'488'
    );
$deuda[46][46109]=array(
    'nombre' =>'Cheste',
    'habitantes' =>'8459',
    'deuda'=>'50'
    );
$deuda[46][46110]=array(
    'nombre' =>'Xirivella',
    'habitantes' =>'28963',
    'deuda'=>'15878'
    );
$deuda[46][46111]=array(
    'nombre' =>'Chiva',
    'habitantes' =>'15004',
    'deuda'=>'7345'
    );
$deuda[46][46112]=array(
    'nombre' =>'Chulilla',
    'habitantes' =>'676',
    'deuda'=>'513'
    );
$deuda[46][46113]=array(
    'nombre' =>'Daimús',
    'habitantes' =>'3054',
    'deuda'=>'1045'
    );
$deuda[46][46114]=array(
    'nombre' =>'Domeño',
    'habitantes' =>'718',
    'deuda'=>'0'
    );
$deuda[46][46115]=array(
    'nombre' =>'Dos Aguas',
    'habitantes' =>'443',
    'deuda'=>'0'
    );
$deuda[46][46116]=array(
    'nombre' =>'Eliana, l\'',
    'habitantes' =>'17436',
    'deuda'=>'0'
    );
$deuda[46][46117]=array(
    'nombre' =>'Emperador',
    'habitantes' =>'687',
    'deuda'=>'0'
    );
$deuda[46][46118]=array(
    'nombre' =>'Enguera',
    'habitantes' =>'5083',
    'deuda'=>'3276'
    );
$deuda[46][46119]=array(
    'nombre' =>'Ènova, l\'',
    'habitantes' =>'941',
    'deuda'=>'1503'
    );
$deuda[46][46120]=array(
    'nombre' =>'Estivella',
    'habitantes' =>'1380',
    'deuda'=>'910'
    );
$deuda[46][46121]=array(
    'nombre' =>'Estubeny',
    'habitantes' =>'119',
    'deuda'=>'75'
    );
$deuda[46][46122]=array(
    'nombre' =>'Faura',
    'habitantes' =>'3477',
    'deuda'=>'692'
    );
$deuda[46][46123]=array(
    'nombre' =>'Favara',
    'habitantes' =>'2461',
    'deuda'=>'349'
    );
$deuda[46][46124]=array(
    'nombre' =>'Fontanars dels Alforins',
    'habitantes' =>'1003',
    'deuda'=>'667'
    );
$deuda[46][46125]=array(
    'nombre' =>'Fortaleny',
    'habitantes' =>'1039',
    'deuda'=>'0'
    );
$deuda[46][46126]=array(
    'nombre' =>'Foios',
    'habitantes' =>'7199',
    'deuda'=>'4038'
    );
$deuda[46][46127]=array(
    'nombre' =>'Font d\'En Carròs, la',
    'habitantes' =>'3761',
    'deuda'=>'594'
    );
$deuda[46][46128]=array(
    'nombre' =>'Font de la Figuera, la',
    'habitantes' =>'2139',
    'deuda'=>'83'
    );
$deuda[46][46129]=array(
    'nombre' =>'Fuenterrobles',
    'habitantes' =>'698',
    'deuda'=>'0'
    );
$deuda[46][46130]=array(
    'nombre' =>'Gavarda',
    'habitantes' =>'1113',
    'deuda'=>'0'
    );
$deuda[46][46131]=array(
    'nombre' =>'Gandia',
    'habitantes' =>'75514',
    'deuda'=>'250142'
    );
$deuda[46][46132]=array(
    'nombre' =>'Genovés',
    'habitantes' =>'2821',
    'deuda'=>'1401'
    );
$deuda[46][46133]=array(
    'nombre' =>'Gestalgar',
    'habitantes' =>'663',
    'deuda'=>'0'
    );
$deuda[46][46134]=array(
    'nombre' =>'Gilet',
    'habitantes' =>'3314',
    'deuda'=>'3340'
    );
$deuda[46][46135]=array(
    'nombre' =>'Godella',
    'habitantes' =>'13071',
    'deuda'=>'6316'
    );
$deuda[46][46136]=array(
    'nombre' =>'Godelleta',
    'habitantes' =>'3380',
    'deuda'=>'0'
    );
$deuda[46][46137]=array(
    'nombre' =>'Granja de la Costera, la',
    'habitantes' =>'331',
    'deuda'=>'74'
    );
$deuda[46][46138]=array(
    'nombre' =>'Guadasséquies',
    'habitantes' =>'466',
    'deuda'=>'145'
    );
$deuda[46][46139]=array(
    'nombre' =>'Guadassuar',
    'habitantes' =>'5927',
    'deuda'=>'4783'
    );
$deuda[46][46140]=array(
    'nombre' =>'Guardamar de la Safor',
    'habitantes' =>'489',
    'deuda'=>'0'
    );
$deuda[46][46141]=array(
    'nombre' =>'Higueruelas',
    'habitantes' =>'516',
    'deuda'=>'94'
    );
$deuda[46][46142]=array(
    'nombre' =>'Jalance',
    'habitantes' =>'914',
    'deuda'=>'0'
    );
$deuda[46][46143]=array(
    'nombre' =>'Xeraco',
    'habitantes' =>'5881',
    'deuda'=>'2835'
    );
$deuda[46][46144]=array(
    'nombre' =>'Jarafuel',
    'habitantes' =>'808',
    'deuda'=>'0'
    );
$deuda[46][46145]=array(
    'nombre' =>'Xàtiva',
    'habitantes' =>'29095',
    'deuda'=>'15425'
    );
$deuda[46][46146]=array(
    'nombre' =>'Xeresa',
    'habitantes' =>'2239',
    'deuda'=>'1623'
    );
$deuda[46][46147]=array(
    'nombre' =>'Llíria',
    'habitantes' =>'22745',
    'deuda'=>'7086'
    );
$deuda[46][46148]=array(
    'nombre' =>'Loriguilla',
    'habitantes' =>'1953',
    'deuda'=>'3108'
    );
$deuda[46][46149]=array(
    'nombre' =>'Losa del Obispo',
    'habitantes' =>'502',
    'deuda'=>'631'
    );
$deuda[46][46150]=array(
    'nombre' =>'Llutxent',
    'habitantes' =>'2422',
    'deuda'=>'558'
    );
$deuda[46][46151]=array(
    'nombre' =>'Llocnou d\'En Fenollet',
    'habitantes' =>'919',
    'deuda'=>'904'
    );
$deuda[46][46152]=array(
    'nombre' =>'Llocnou de la Corona',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[46][46153]=array(
    'nombre' =>'Llocnou de Sant Jeroni',
    'habitantes' =>'527',
    'deuda'=>'25'
    );
$deuda[46][46154]=array(
    'nombre' =>'Llanera de Ranes',
    'habitantes' =>'1058',
    'deuda'=>'127'
    );
$deuda[46][46155]=array(
    'nombre' =>'Llaurí',
    'habitantes' =>'1233',
    'deuda'=>'2170'
    );
$deuda[46][46156]=array(
    'nombre' =>'Llombai',
    'habitantes' =>'2765',
    'deuda'=>'109'
    );
$deuda[46][46157]=array(
    'nombre' =>'Llosa de Ranes, la',
    'habitantes' =>'3575',
    'deuda'=>'582'
    );
$deuda[46][46158]=array(
    'nombre' =>'Macastre',
    'habitantes' =>'1249',
    'deuda'=>'234'
    );
$deuda[46][46159]=array(
    'nombre' =>'Manises',
    'habitantes' =>'30807',
    'deuda'=>'16353'
    );
$deuda[46][46160]=array(
    'nombre' =>'Manuel',
    'habitantes' =>'2507',
    'deuda'=>'0'
    );
$deuda[46][46161]=array(
    'nombre' =>'Marines',
    'habitantes' =>'1859',
    'deuda'=>'551'
    );
$deuda[46][46162]=array(
    'nombre' =>'Massalavés',
    'habitantes' =>'1597',
    'deuda'=>'0'
    );
$deuda[46][46163]=array(
    'nombre' =>'Massalfassar',
    'habitantes' =>'2473',
    'deuda'=>'282'
    );
$deuda[46][46164]=array(
    'nombre' =>'Massamagrell',
    'habitantes' =>'15523',
    'deuda'=>'1012'
    );
$deuda[46][46165]=array(
    'nombre' =>'Massanassa',
    'habitantes' =>'9264',
    'deuda'=>'0'
    );
$deuda[46][46166]=array(
    'nombre' =>'Meliana',
    'habitantes' =>'10588',
    'deuda'=>'126'
    );
$deuda[46][46167]=array(
    'nombre' =>'Millares',
    'habitantes' =>'387',
    'deuda'=>'0'
    );
$deuda[46][46168]=array(
    'nombre' =>'Miramar',
    'habitantes' =>'2620',
    'deuda'=>'0'
    );
$deuda[46][46169]=array(
    'nombre' =>'Mislata',
    'habitantes' =>'43320',
    'deuda'=>'23463'
    );
$deuda[46][46170]=array(
    'nombre' =>'Mogente/Moixent',
    'habitantes' =>'4527',
    'deuda'=>'814'
    );
$deuda[46][46171]=array(
    'nombre' =>'Moncada',
    'habitantes' =>'21842',
    'deuda'=>'8110'
    );
$deuda[46][46172]=array(
    'nombre' =>'Montserrat',
    'habitantes' =>'7231',
    'deuda'=>'4073'
    );
$deuda[46][46173]=array(
    'nombre' =>'Montaverner',
    'habitantes' =>'1691',
    'deuda'=>'637'
    );
$deuda[46][46174]=array(
    'nombre' =>'Montesa',
    'habitantes' =>'1257',
    'deuda'=>'92'
    );
$deuda[46][46175]=array(
    'nombre' =>'Montitxelvo/Montichelvo',
    'habitantes' =>'665',
    'deuda'=>'60'
    );
$deuda[46][46176]=array(
    'nombre' =>'Montroi/Montroy',
    'habitantes' =>'2891',
    'deuda'=>'1280'
    );
$deuda[46][46177]=array(
    'nombre' =>'Museros',
    'habitantes' =>'6189',
    'deuda'=>'1554'
    );
$deuda[46][46178]=array(
    'nombre' =>'Náquera',
    'habitantes' =>'6204',
    'deuda'=>'2305'
    );
$deuda[46][46179]=array(
    'nombre' =>'Navarrés',
    'habitantes' =>'3104',
    'deuda'=>'2616'
    );
$deuda[46][46180]=array(
    'nombre' =>'Novelé/Novetlè',
    'habitantes' =>'856',
    'deuda'=>'1421'
    );
$deuda[46][46181]=array(
    'nombre' =>'Oliva',
    'habitantes' =>'26190',
    'deuda'=>'6632'
    );
$deuda[46][46182]=array(
    'nombre' =>'Olocau',
    'habitantes' =>'1670',
    'deuda'=>'1403'
    );
$deuda[46][46183]=array(
    'nombre' =>'Olleria, l\'',
    'habitantes' =>'8369',
    'deuda'=>'3767'
    );
$deuda[46][46184]=array(
    'nombre' =>'Ontinyent',
    'habitantes' =>'35621',
    'deuda'=>'13658'
    );
$deuda[46][46185]=array(
    'nombre' =>'Otos',
    'habitantes' =>'455',
    'deuda'=>'0'
    );
$deuda[46][46186]=array(
    'nombre' =>'Paiporta',
    'habitantes' =>'24810',
    'deuda'=>'3576'
    );
$deuda[46][46187]=array(
    'nombre' =>'Palma de Gandía',
    'habitantes' =>'1652',
    'deuda'=>'537'
    );
$deuda[46][46188]=array(
    'nombre' =>'Palmera',
    'habitantes' =>'992',
    'deuda'=>'0'
    );
$deuda[46][46189]=array(
    'nombre' =>'Palomar, el',
    'habitantes' =>'588',
    'deuda'=>'294'
    );
$deuda[46][46190]=array(
    'nombre' =>'Paterna',
    'habitantes' =>'67340',
    'deuda'=>'40406'
    );
$deuda[46][46191]=array(
    'nombre' =>'Pedralba',
    'habitantes' =>'2859',
    'deuda'=>'2176'
    );
$deuda[46][46192]=array(
    'nombre' =>'Petrés',
    'habitantes' =>'977',
    'deuda'=>'94'
    );
$deuda[46][46193]=array(
    'nombre' =>'Picanya',
    'habitantes' =>'11270',
    'deuda'=>'6189'
    );
$deuda[46][46194]=array(
    'nombre' =>'Picassent',
    'habitantes' =>'20427',
    'deuda'=>'3286'
    );
$deuda[46][46195]=array(
    'nombre' =>'Piles',
    'habitantes' =>'2740',
    'deuda'=>'1565'
    );
$deuda[46][46196]=array(
    'nombre' =>'Pinet',
    'habitantes' =>'170',
    'deuda'=>'39'
    );
$deuda[46][46197]=array(
    'nombre' =>'Polinyà de Xúquer',
    'habitantes' =>'2526',
    'deuda'=>'0'
    );
$deuda[46][46198]=array(
    'nombre' =>'Potries',
    'habitantes' =>'1020',
    'deuda'=>'540'
    );
$deuda[46][46199]=array(
    'nombre' =>'Pobla de Farnals, la',
    'habitantes' =>'7776',
    'deuda'=>'1540'
    );
$deuda[46][46200]=array(
    'nombre' =>'Pobla del Duc, la',
    'habitantes' =>'2556',
    'deuda'=>'2386'
    );
$deuda[46][46201]=array(
    'nombre' =>'Puebla de San Miguel',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[46][46202]=array(
    'nombre' =>'Pobla de Vallbona, la',
    'habitantes' =>'22994',
    'deuda'=>'6754'
    );
$deuda[46][46203]=array(
    'nombre' =>'Pobla Llarga, la',
    'habitantes' =>'4536',
    'deuda'=>'4943'
    );
$deuda[46][46204]=array(
    'nombre' =>'Puig de Santa Maria, el',
    'habitantes' =>'8844',
    'deuda'=>'5799'
    );
$deuda[46][46205]=array(
    'nombre' =>'Puçol',
    'habitantes' =>'19357',
    'deuda'=>'6476'
    );
$deuda[46][46206]=array(
    'nombre' =>'Quesa',
    'habitantes' =>'690',
    'deuda'=>'724'
    );
$deuda[46][46207]=array(
    'nombre' =>'Rafelbunyol',
    'habitantes' =>'8883',
    'deuda'=>'6806'
    );
$deuda[46][46208]=array(
    'nombre' =>'Rafelcofer',
    'habitantes' =>'1410',
    'deuda'=>'71'
    );
$deuda[46][46209]=array(
    'nombre' =>'Rafelguaraf',
    'habitantes' =>'2422',
    'deuda'=>'0'
    );
$deuda[46][46210]=array(
    'nombre' =>'Ráfol de Salem',
    'habitantes' =>'423',
    'deuda'=>'424'
    );
$deuda[46][46211]=array(
    'nombre' =>'Real de Gandía',
    'habitantes' =>'2286',
    'deuda'=>'1313'
    );
$deuda[46][46212]=array(
    'nombre' =>'Real',
    'habitantes' =>'2291',
    'deuda'=>'347'
    );
$deuda[46][46213]=array(
    'nombre' =>'Requena',
    'habitantes' =>'20621',
    'deuda'=>'9878'
    );
$deuda[46][46214]=array(
    'nombre' =>'Riba-roja de Túria',
    'habitantes' =>'21391',
    'deuda'=>'0'
    );
$deuda[46][46215]=array(
    'nombre' =>'Riola',
    'habitantes' =>'1838',
    'deuda'=>'48'
    );
$deuda[46][46216]=array(
    'nombre' =>'Rocafort',
    'habitantes' =>'6829',
    'deuda'=>'451'
    );
$deuda[46][46217]=array(
    'nombre' =>'Rotglà i Corberà',
    'habitantes' =>'1144',
    'deuda'=>'0'
    );
$deuda[46][46218]=array(
    'nombre' =>'Rótova',
    'habitantes' =>'1285',
    'deuda'=>'3037'
    );
$deuda[46][46219]=array(
    'nombre' =>'Rugat',
    'habitantes' =>'179',
    'deuda'=>'12'
    );
$deuda[46][46220]=array(
    'nombre' =>'Sagunto/Sagunt',
    'habitantes' =>'64944',
    'deuda'=>'25122'
    );
$deuda[46][46221]=array(
    'nombre' =>'Salem',
    'habitantes' =>'432',
    'deuda'=>'49'
    );
$deuda[46][46222]=array(
    'nombre' =>'Sant Joanet',
    'habitantes' =>'476',
    'deuda'=>'200'
    );
$deuda[46][46223]=array(
    'nombre' =>'Sedaví',
    'habitantes' =>'10180',
    'deuda'=>'3485'
    );
$deuda[46][46224]=array(
    'nombre' =>'Segart',
    'habitantes' =>'170',
    'deuda'=>'88'
    );
$deuda[46][46225]=array(
    'nombre' =>'Sellent',
    'habitantes' =>'401',
    'deuda'=>'101'
    );
$deuda[46][46226]=array(
    'nombre' =>'Sempere',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[46][46227]=array(
    'nombre' =>'Senyera',
    'habitantes' =>'1175',
    'deuda'=>'633'
    );
$deuda[46][46228]=array(
    'nombre' =>'Serra',
    'habitantes' =>'3142',
    'deuda'=>'3617'
    );
$deuda[46][46229]=array(
    'nombre' =>'Siete Aguas',
    'habitantes' =>'1282',
    'deuda'=>'400'
    );
$deuda[46][46230]=array(
    'nombre' =>'Silla',
    'habitantes' =>'18570',
    'deuda'=>'8209'
    );
$deuda[46][46231]=array(
    'nombre' =>'Simat de la Valldigna',
    'habitantes' =>'3362',
    'deuda'=>'25'
    );
$deuda[46][46232]=array(
    'nombre' =>'Sinarcas',
    'habitantes' =>'1168',
    'deuda'=>'67'
    );
$deuda[46][46233]=array(
    'nombre' =>'Sollana',
    'habitantes' =>'4941',
    'deuda'=>'371'
    );
$deuda[46][46234]=array(
    'nombre' =>'Sot de Chera',
    'habitantes' =>'424',
    'deuda'=>'119'
    );
$deuda[46][46235]=array(
    'nombre' =>'Sueca',
    'habitantes' =>'28252',
    'deuda'=>'6000'
    );
$deuda[46][46236]=array(
    'nombre' =>'Sumacàrcer',
    'habitantes' =>'1168',
    'deuda'=>'19'
    );
$deuda[46][46237]=array(
    'nombre' =>'Tavernes Blanques',
    'habitantes' =>'9244',
    'deuda'=>'1965'
    );
$deuda[46][46238]=array(
    'nombre' =>'Tavernes de la Valldigna',
    'habitantes' =>'17734',
    'deuda'=>'12598'
    );
$deuda[46][46239]=array(
    'nombre' =>'Teresa de Cofrentes',
    'habitantes' =>'675',
    'deuda'=>'15'
    );
$deuda[46][46240]=array(
    'nombre' =>'Terrateig',
    'habitantes' =>'300',
    'deuda'=>'0'
    );
$deuda[46][46241]=array(
    'nombre' =>'Titaguas',
    'habitantes' =>'473',
    'deuda'=>'372'
    );
$deuda[46][46242]=array(
    'nombre' =>'Torrebaja',
    'habitantes' =>'435',
    'deuda'=>'490'
    );
$deuda[46][46243]=array(
    'nombre' =>'Torrella',
    'habitantes' =>'156',
    'deuda'=>'397'
    );
$deuda[46][46244]=array(
    'nombre' =>'Torrent',
    'habitantes' =>'80107',
    'deuda'=>'49897'
    );
$deuda[46][46245]=array(
    'nombre' =>'Torres Torres',
    'habitantes' =>'642',
    'deuda'=>'0'
    );
$deuda[46][46246]=array(
    'nombre' =>'Tous',
    'habitantes' =>'1265',
    'deuda'=>'0'
    );
$deuda[46][46247]=array(
    'nombre' =>'Tuéjar',
    'habitantes' =>'1158',
    'deuda'=>'0'
    );
$deuda[46][46248]=array(
    'nombre' =>'Turís',
    'habitantes' =>'6528',
    'deuda'=>'3042'
    );
$deuda[46][46249]=array(
    'nombre' =>'Utiel',
    'habitantes' =>'11915',
    'deuda'=>'3106'
    );
$deuda[46][46250]=array(
    'nombre' =>'Valencia',
    'habitantes' =>'786189',
    'deuda'=>'711179'
    );
$deuda[46][46251]=array(
    'nombre' =>'Vallada',
    'habitantes' =>'3121',
    'deuda'=>'21610'
    );
$deuda[46][46252]=array(
    'nombre' =>'Vallanca',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[46][46253]=array(
    'nombre' =>'Vallés',
    'habitantes' =>'145',
    'deuda'=>'88'
    );
$deuda[46][46254]=array(
    'nombre' =>'Venta del Moro',
    'habitantes' =>'1376',
    'deuda'=>'131'
    );
$deuda[46][46255]=array(
    'nombre' =>'Vilallonga/Villalonga',
    'habitantes' =>'4352',
    'deuda'=>'1947'
    );
$deuda[46][46256]=array(
    'nombre' =>'Vilamarxant',
    'habitantes' =>'9208',
    'deuda'=>'885'
    );
$deuda[46][46257]=array(
    'nombre' =>'Villanueva de Castellón',
    'habitantes' =>'7270',
    'deuda'=>'1142'
    );
$deuda[46][46258]=array(
    'nombre' =>'Villar del Arzobispo',
    'habitantes' =>'3597',
    'deuda'=>'1736'
    );
$deuda[46][46259]=array(
    'nombre' =>'Villargordo del Cabriel',
    'habitantes' =>'650',
    'deuda'=>'0'
    );
$deuda[46][46260]=array(
    'nombre' =>'Vinalesa',
    'habitantes' =>'3284',
    'deuda'=>'630'
    );
$deuda[46][46261]=array(
    'nombre' =>'Yátova',
    'habitantes' =>'2117',
    'deuda'=>'188'
    );
$deuda[46][46262]=array(
    'nombre' =>'Yesa, La',
    'habitantes' =>'252',
    'deuda'=>'0'
    );
$deuda[46][46263]=array(
    'nombre' =>'Zarra',
    'habitantes' =>'463',
    'deuda'=>'123'
    );
$deuda[46][46902]=array(
    'nombre' =>'Gátova',
    'habitantes' =>'364',
    'deuda'=>'102'
    );
$deuda[46][46903]=array(
    'nombre' =>'San Antonio de Benagéber',
    'habitantes' =>'7981',
    'deuda'=>'4442'
    );
$deuda[46][46904]=array(
    'nombre' =>'Benicull de Xúquer',
    'habitantes' =>'993',
    'deuda'=>'0'
    );
$deuda[47][47001]=array(
    'nombre' =>'Adalia',
    'habitantes' =>'59',
    'deuda'=>'0'
    );
$deuda[47][47002]=array(
    'nombre' =>'Aguasal',
    'habitantes' =>'26',
    'deuda'=>'0'
    );
$deuda[47][47003]=array(
    'nombre' =>'Aguilar de Campos',
    'habitantes' =>'284',
    'deuda'=>'0'
    );
$deuda[47][47004]=array(
    'nombre' =>'Alaejos',
    'habitantes' =>'1418',
    'deuda'=>'14'
    );
$deuda[47][47005]=array(
    'nombre' =>'Alcazarén',
    'habitantes' =>'693',
    'deuda'=>'0'
    );
$deuda[47][47006]=array(
    'nombre' =>'Aldea de San Miguel',
    'habitantes' =>'227',
    'deuda'=>'0'
    );
$deuda[47][47007]=array(
    'nombre' =>'Aldeamayor de San Martín',
    'habitantes' =>'4968',
    'deuda'=>'0'
    );
$deuda[47][47008]=array(
    'nombre' =>'Almenara de Adaja',
    'habitantes' =>'31',
    'deuda'=>'22'
    );
$deuda[47][47009]=array(
    'nombre' =>'Amusquillo',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[47][47010]=array(
    'nombre' =>'Arroyo de la Encomienda',
    'habitantes' =>'18491',
    'deuda'=>'0'
    );
$deuda[47][47011]=array(
    'nombre' =>'Ataquines',
    'habitantes' =>'596',
    'deuda'=>'84'
    );
$deuda[47][47012]=array(
    'nombre' =>'Bahabón',
    'habitantes' =>'131',
    'deuda'=>'0'
    );
$deuda[47][47013]=array(
    'nombre' =>'Barcial de la Loma',
    'habitantes' =>'110',
    'deuda'=>'0'
    );
$deuda[47][47014]=array(
    'nombre' =>'Barruelo del Valle',
    'habitantes' =>'67',
    'deuda'=>'0'
    );
$deuda[47][47015]=array(
    'nombre' =>'Becilla de Valderaduey',
    'habitantes' =>'265',
    'deuda'=>'0'
    );
$deuda[47][47016]=array(
    'nombre' =>'Benafarces',
    'habitantes' =>'80',
    'deuda'=>'16'
    );
$deuda[47][47017]=array(
    'nombre' =>'Bercero',
    'habitantes' =>'218',
    'deuda'=>'0'
    );
$deuda[47][47018]=array(
    'nombre' =>'Berceruelo',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[47][47019]=array(
    'nombre' =>'Berrueces',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[47][47020]=array(
    'nombre' =>'Bobadilla del Campo',
    'habitantes' =>'311',
    'deuda'=>'0'
    );
$deuda[47][47021]=array(
    'nombre' =>'Bocigas',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[47][47022]=array(
    'nombre' =>'Bocos de Duero',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[47][47023]=array(
    'nombre' =>'Boecillo',
    'habitantes' =>'4016',
    'deuda'=>'1160'
    );
$deuda[47][47024]=array(
    'nombre' =>'Bolaños de Campos',
    'habitantes' =>'347',
    'deuda'=>'0'
    );
$deuda[47][47025]=array(
    'nombre' =>'Brahojos de Medina',
    'habitantes' =>'129',
    'deuda'=>'14'
    );
$deuda[47][47026]=array(
    'nombre' =>'Bustillo de Chaves',
    'habitantes' =>'91',
    'deuda'=>'37'
    );
$deuda[47][47027]=array(
    'nombre' =>'Cabezón de Pisuerga',
    'habitantes' =>'3605',
    'deuda'=>'1108'
    );
$deuda[47][47028]=array(
    'nombre' =>'Cabezón de Valderaduey',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[47][47029]=array(
    'nombre' =>'Cabreros del Monte',
    'habitantes' =>'67',
    'deuda'=>'0'
    );
$deuda[47][47030]=array(
    'nombre' =>'Campaspero',
    'habitantes' =>'1141',
    'deuda'=>'0'
    );
$deuda[47][47031]=array(
    'nombre' =>'Campillo, El',
    'habitantes' =>'223',
    'deuda'=>'0'
    );
$deuda[47][47032]=array(
    'nombre' =>'Camporredondo',
    'habitantes' =>'166',
    'deuda'=>'0'
    );
$deuda[47][47033]=array(
    'nombre' =>'Canalejas de Peñafiel',
    'habitantes' =>'264',
    'deuda'=>'0'
    );
$deuda[47][47034]=array(
    'nombre' =>'Canillas de Esgueva',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[47][47035]=array(
    'nombre' =>'Carpio',
    'habitantes' =>'1057',
    'deuda'=>'146'
    );
$deuda[47][47036]=array(
    'nombre' =>'Casasola de Arión',
    'habitantes' =>'275',
    'deuda'=>'0'
    );
$deuda[47][47037]=array(
    'nombre' =>'Castrejón de Trabancos',
    'habitantes' =>'194',
    'deuda'=>'48'
    );
$deuda[47][47038]=array(
    'nombre' =>'Castrillo de Duero',
    'habitantes' =>'133',
    'deuda'=>'0'
    );
$deuda[47][47039]=array(
    'nombre' =>'Castrillo-Tejeriego',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[47][47040]=array(
    'nombre' =>'Castrobol',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[47][47041]=array(
    'nombre' =>'Castrodeza',
    'habitantes' =>'176',
    'deuda'=>'9'
    );
$deuda[47][47042]=array(
    'nombre' =>'Castromembibre',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[47][47043]=array(
    'nombre' =>'Castromonte',
    'habitantes' =>'321',
    'deuda'=>'0'
    );
$deuda[47][47044]=array(
    'nombre' =>'Castronuevo de Esgueva',
    'habitantes' =>'393',
    'deuda'=>'0'
    );
$deuda[47][47045]=array(
    'nombre' =>'Castronuño',
    'habitantes' =>'889',
    'deuda'=>'0'
    );
$deuda[47][47046]=array(
    'nombre' =>'Castroponce',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[47][47047]=array(
    'nombre' =>'Castroverde de Cerrato',
    'habitantes' =>'233',
    'deuda'=>'0'
    );
$deuda[47][47048]=array(
    'nombre' =>'Ceinos de Campos',
    'habitantes' =>'247',
    'deuda'=>'0'
    );
$deuda[47][47049]=array(
    'nombre' =>'Cervillego de la Cruz',
    'habitantes' =>'95',
    'deuda'=>'0'
    );
$deuda[47][47050]=array(
    'nombre' =>'Cigales',
    'habitantes' =>'5071',
    'deuda'=>'1419'
    );
$deuda[47][47051]=array(
    'nombre' =>'Ciguñuela',
    'habitantes' =>'390',
    'deuda'=>'0'
    );
$deuda[47][47052]=array(
    'nombre' =>'Cistérniga',
    'habitantes' =>'8789',
    'deuda'=>'2758'
    );
$deuda[47][47053]=array(
    'nombre' =>'Cogeces de Íscar',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[47][47054]=array(
    'nombre' =>'Cogeces del Monte',
    'habitantes' =>'727',
    'deuda'=>'210'
    );
$deuda[47][47055]=array(
    'nombre' =>'Corcos',
    'habitantes' =>'216',
    'deuda'=>'0'
    );
$deuda[47][47056]=array(
    'nombre' =>'Corrales de Duero',
    'habitantes' =>'85',
    'deuda'=>'0'
    );
$deuda[47][47057]=array(
    'nombre' =>'Cubillas de Santa Marta',
    'habitantes' =>'296',
    'deuda'=>'0'
    );
$deuda[47][47058]=array(
    'nombre' =>'Cuenca de Campos',
    'habitantes' =>'243',
    'deuda'=>'85'
    );
$deuda[47][47059]=array(
    'nombre' =>'Curiel de Duero',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[47][47060]=array(
    'nombre' =>'Encinas de Esgueva',
    'habitantes' =>'279',
    'deuda'=>'0'
    );
$deuda[47][47061]=array(
    'nombre' =>'Esguevillas de Esgueva',
    'habitantes' =>'283',
    'deuda'=>'69'
    );
$deuda[47][47062]=array(
    'nombre' =>'Fombellida',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[47][47063]=array(
    'nombre' =>'Fompedraza',
    'habitantes' =>'118',
    'deuda'=>'0'
    );
$deuda[47][47064]=array(
    'nombre' =>'Fontihoyuelo',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[47][47065]=array(
    'nombre' =>'Fresno el Viejo',
    'habitantes' =>'946',
    'deuda'=>'255'
    );
$deuda[47][47066]=array(
    'nombre' =>'Fuensaldaña',
    'habitantes' =>'1518',
    'deuda'=>'0'
    );
$deuda[47][47067]=array(
    'nombre' =>'Fuente el Sol',
    'habitantes' =>'181',
    'deuda'=>'33'
    );
$deuda[47][47068]=array(
    'nombre' =>'Fuente-Olmedo',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[47][47069]=array(
    'nombre' =>'Gallegos de Hornija',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[47][47070]=array(
    'nombre' =>'Gatón de Campos',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[47][47071]=array(
    'nombre' =>'Geria',
    'habitantes' =>'519',
    'deuda'=>'35'
    );
$deuda[47][47073]=array(
    'nombre' =>'Herrín de Campos',
    'habitantes' =>'129',
    'deuda'=>'44'
    );
$deuda[47][47074]=array(
    'nombre' =>'Hornillos de Eresma',
    'habitantes' =>'169',
    'deuda'=>'0'
    );
$deuda[47][47075]=array(
    'nombre' =>'Íscar',
    'habitantes' =>'6536',
    'deuda'=>'361'
    );
$deuda[47][47076]=array(
    'nombre' =>'Laguna de Duero',
    'habitantes' =>'22601',
    'deuda'=>'3729'
    );
$deuda[47][47077]=array(
    'nombre' =>'Langayo',
    'habitantes' =>'268',
    'deuda'=>'0'
    );
$deuda[47][47078]=array(
    'nombre' =>'Lomoviejo',
    'habitantes' =>'185',
    'deuda'=>'17'
    );
$deuda[47][47079]=array(
    'nombre' =>'Llano de Olmedo',
    'habitantes' =>'67',
    'deuda'=>'0'
    );
$deuda[47][47080]=array(
    'nombre' =>'Manzanillo',
    'habitantes' =>'49',
    'deuda'=>'0'
    );
$deuda[47][47081]=array(
    'nombre' =>'Marzales',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[47][47082]=array(
    'nombre' =>'Matapozuelos',
    'habitantes' =>'1016',
    'deuda'=>'57'
    );
$deuda[47][47083]=array(
    'nombre' =>'Matilla de los Caños',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[47][47084]=array(
    'nombre' =>'Mayorga',
    'habitantes' =>'1689',
    'deuda'=>'539'
    );
$deuda[47][47085]=array(
    'nombre' =>'Medina del Campo',
    'habitantes' =>'21110',
    'deuda'=>'5334'
    );
$deuda[47][47086]=array(
    'nombre' =>'Medina de Rioseco',
    'habitantes' =>'4821',
    'deuda'=>'530'
    );
$deuda[47][47087]=array(
    'nombre' =>'Megeces',
    'habitantes' =>'447',
    'deuda'=>'0'
    );
$deuda[47][47088]=array(
    'nombre' =>'Melgar de Abajo',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[47][47089]=array(
    'nombre' =>'Melgar de Arriba',
    'habitantes' =>'181',
    'deuda'=>'0'
    );
$deuda[47][47090]=array(
    'nombre' =>'Mojados',
    'habitantes' =>'3135',
    'deuda'=>'261'
    );
$deuda[47][47091]=array(
    'nombre' =>'Monasterio de Vega',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[47][47092]=array(
    'nombre' =>'Montealegre de Campos',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[47][47093]=array(
    'nombre' =>'Montemayor de Pililla',
    'habitantes' =>'918',
    'deuda'=>'0'
    );
$deuda[47][47094]=array(
    'nombre' =>'Moral de la Reina',
    'habitantes' =>'191',
    'deuda'=>'0'
    );
$deuda[47][47095]=array(
    'nombre' =>'Moraleja de las Panaderas',
    'habitantes' =>'40',
    'deuda'=>'0'
    );
$deuda[47][47096]=array(
    'nombre' =>'Morales de Campos',
    'habitantes' =>'155',
    'deuda'=>'0'
    );
$deuda[47][47097]=array(
    'nombre' =>'Mota del Marqués',
    'habitantes' =>'392',
    'deuda'=>'18'
    );
$deuda[47][47098]=array(
    'nombre' =>'Mucientes',
    'habitantes' =>'699',
    'deuda'=>'204'
    );
$deuda[47][47099]=array(
    'nombre' =>'Mudarra, La',
    'habitantes' =>'166',
    'deuda'=>'0'
    );
$deuda[47][47100]=array(
    'nombre' =>'Muriel',
    'habitantes' =>'146',
    'deuda'=>'85'
    );
$deuda[47][47101]=array(
    'nombre' =>'Nava del Rey',
    'habitantes' =>'2125',
    'deuda'=>'312'
    );
$deuda[47][47102]=array(
    'nombre' =>'Nueva Villa de las Torres',
    'habitantes' =>'316',
    'deuda'=>'0'
    );
$deuda[47][47103]=array(
    'nombre' =>'Olivares de Duero',
    'habitantes' =>'317',
    'deuda'=>'16'
    );
$deuda[47][47104]=array(
    'nombre' =>'Olmedo',
    'habitantes' =>'3744',
    'deuda'=>'206'
    );
$deuda[47][47105]=array(
    'nombre' =>'Olmos de Esgueva',
    'habitantes' =>'226',
    'deuda'=>'15'
    );
$deuda[47][47106]=array(
    'nombre' =>'Olmos de Peñafiel',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[47][47109]=array(
    'nombre' =>'Palazuelo de Vedija',
    'habitantes' =>'206',
    'deuda'=>'0'
    );
$deuda[47][47110]=array(
    'nombre' =>'Parrilla, La',
    'habitantes' =>'502',
    'deuda'=>'31'
    );
$deuda[47][47111]=array(
    'nombre' =>'Pedraja de Portillo, La',
    'habitantes' =>'1143',
    'deuda'=>'529'
    );
$deuda[47][47112]=array(
    'nombre' =>'Pedrajas de San Esteban',
    'habitantes' =>'3432',
    'deuda'=>'681'
    );
$deuda[47][47113]=array(
    'nombre' =>'Pedrosa del Rey',
    'habitantes' =>'198',
    'deuda'=>'36'
    );
$deuda[47][47114]=array(
    'nombre' =>'Peñafiel',
    'habitantes' =>'5419',
    'deuda'=>'837'
    );
$deuda[47][47115]=array(
    'nombre' =>'Peñaflor de Hornija',
    'habitantes' =>'319',
    'deuda'=>'0'
    );
$deuda[47][47116]=array(
    'nombre' =>'Pesquera de Duero',
    'habitantes' =>'474',
    'deuda'=>'147'
    );
$deuda[47][47117]=array(
    'nombre' =>'Piña de Esgueva',
    'habitantes' =>'330',
    'deuda'=>'27'
    );
$deuda[47][47118]=array(
    'nombre' =>'Piñel de Abajo',
    'habitantes' =>'183',
    'deuda'=>'0'
    );
$deuda[47][47119]=array(
    'nombre' =>'Piñel de Arriba',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[47][47121]=array(
    'nombre' =>'Pollos',
    'habitantes' =>'623',
    'deuda'=>'96'
    );
$deuda[47][47122]=array(
    'nombre' =>'Portillo',
    'habitantes' =>'2441',
    'deuda'=>'159'
    );
$deuda[47][47123]=array(
    'nombre' =>'Pozal de Gallinas',
    'habitantes' =>'561',
    'deuda'=>'0'
    );
$deuda[47][47124]=array(
    'nombre' =>'Pozaldez',
    'habitantes' =>'499',
    'deuda'=>'0'
    );
$deuda[47][47125]=array(
    'nombre' =>'Pozuelo de la Orden',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[47][47126]=array(
    'nombre' =>'Puras',
    'habitantes' =>'55',
    'deuda'=>'0'
    );
$deuda[47][47127]=array(
    'nombre' =>'Quintanilla de Arriba',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[47][47128]=array(
    'nombre' =>'Quintanilla del Molar',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[47][47129]=array(
    'nombre' =>'Quintanilla de Onésimo',
    'habitantes' =>'1078',
    'deuda'=>'167'
    );
$deuda[47][47130]=array(
    'nombre' =>'Quintanilla de Trigueros',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[47][47131]=array(
    'nombre' =>'Rábano',
    'habitantes' =>'195',
    'deuda'=>'0'
    );
$deuda[47][47132]=array(
    'nombre' =>'Ramiro',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[47][47133]=array(
    'nombre' =>'Renedo de Esgueva',
    'habitantes' =>'3620',
    'deuda'=>'960'
    );
$deuda[47][47134]=array(
    'nombre' =>'Roales de Campos',
    'habitantes' =>'174',
    'deuda'=>'0'
    );
$deuda[47][47135]=array(
    'nombre' =>'Robladillo',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[47][47137]=array(
    'nombre' =>'Roturas',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[47][47138]=array(
    'nombre' =>'Rubí de Bracamonte',
    'habitantes' =>'236',
    'deuda'=>'74'
    );
$deuda[47][47139]=array(
    'nombre' =>'Rueda',
    'habitantes' =>'1312',
    'deuda'=>'0'
    );
$deuda[47][47140]=array(
    'nombre' =>'Saelices de Mayorga',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[47][47141]=array(
    'nombre' =>'Salvador de Zapardiel',
    'habitantes' =>'139',
    'deuda'=>'0'
    );
$deuda[47][47142]=array(
    'nombre' =>'San Cebrián de Mazote',
    'habitantes' =>'177',
    'deuda'=>'0'
    );
$deuda[47][47143]=array(
    'nombre' =>'San Llorente',
    'habitantes' =>'135',
    'deuda'=>'0'
    );
$deuda[47][47144]=array(
    'nombre' =>'San Martín de Valvení',
    'habitantes' =>'88',
    'deuda'=>'0'
    );
$deuda[47][47145]=array(
    'nombre' =>'San Miguel del Arroyo',
    'habitantes' =>'704',
    'deuda'=>'120'
    );
$deuda[47][47146]=array(
    'nombre' =>'San Miguel del Pino',
    'habitantes' =>'316',
    'deuda'=>'0'
    );
$deuda[47][47147]=array(
    'nombre' =>'San Pablo de la Moraleja',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[47][47148]=array(
    'nombre' =>'San Pedro de Latarce',
    'habitantes' =>'522',
    'deuda'=>'0'
    );
$deuda[47][47149]=array(
    'nombre' =>'San Pelayo',
    'habitantes' =>'44',
    'deuda'=>'0'
    );
$deuda[47][47150]=array(
    'nombre' =>'San Román de Hornija',
    'habitantes' =>'346',
    'deuda'=>'0'
    );
$deuda[47][47151]=array(
    'nombre' =>'San Salvador',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[47][47152]=array(
    'nombre' =>'Santa Eufemia del Arroyo',
    'habitantes' =>'108',
    'deuda'=>'0'
    );
$deuda[47][47153]=array(
    'nombre' =>'Santervás de Campos',
    'habitantes' =>'122',
    'deuda'=>'0'
    );
$deuda[47][47154]=array(
    'nombre' =>'Santibáñez de Valcorba',
    'habitantes' =>'173',
    'deuda'=>'69'
    );
$deuda[47][47155]=array(
    'nombre' =>'Santovenia de Pisuerga',
    'habitantes' =>'4203',
    'deuda'=>'0'
    );
$deuda[47][47156]=array(
    'nombre' =>'San Vicente del Palacio',
    'habitantes' =>'178',
    'deuda'=>'0'
    );
$deuda[47][47157]=array(
    'nombre' =>'Sardón de Duero',
    'habitantes' =>'634',
    'deuda'=>'225'
    );
$deuda[47][47158]=array(
    'nombre' =>'Seca, La',
    'habitantes' =>'1107',
    'deuda'=>'71'
    );
$deuda[47][47159]=array(
    'nombre' =>'Serrada',
    'habitantes' =>'1173',
    'deuda'=>'0'
    );
$deuda[47][47160]=array(
    'nombre' =>'Siete Iglesias de Trabancos',
    'habitantes' =>'488',
    'deuda'=>'0'
    );
$deuda[47][47161]=array(
    'nombre' =>'Simancas',
    'habitantes' =>'5265',
    'deuda'=>'1085'
    );
$deuda[47][47162]=array(
    'nombre' =>'Tamariz de Campos',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[47][47163]=array(
    'nombre' =>'Tiedra',
    'habitantes' =>'319',
    'deuda'=>'0'
    );
$deuda[47][47164]=array(
    'nombre' =>'Tordehumos',
    'habitantes' =>'443',
    'deuda'=>'165'
    );
$deuda[47][47165]=array(
    'nombre' =>'Tordesillas',
    'habitantes' =>'8936',
    'deuda'=>'1670'
    );
$deuda[47][47166]=array(
    'nombre' =>'Torrecilla de la Abadesa',
    'habitantes' =>'296',
    'deuda'=>'0'
    );
$deuda[47][47167]=array(
    'nombre' =>'Torrecilla de la Orden',
    'habitantes' =>'262',
    'deuda'=>'10'
    );
$deuda[47][47168]=array(
    'nombre' =>'Torrecilla de la Torre',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[47][47169]=array(
    'nombre' =>'Torre de Esgueva',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[47][47170]=array(
    'nombre' =>'Torre de Peñafiel',
    'habitantes' =>'42',
    'deuda'=>'0'
    );
$deuda[47][47171]=array(
    'nombre' =>'Torrelobatón',
    'habitantes' =>'456',
    'deuda'=>'150'
    );
$deuda[47][47172]=array(
    'nombre' =>'Torrescárcela',
    'habitantes' =>'167',
    'deuda'=>'0'
    );
$deuda[47][47173]=array(
    'nombre' =>'Traspinedo',
    'habitantes' =>'1076',
    'deuda'=>'17'
    );
$deuda[47][47174]=array(
    'nombre' =>'Trigueros del Valle',
    'habitantes' =>'315',
    'deuda'=>'0'
    );
$deuda[47][47175]=array(
    'nombre' =>'Tudela de Duero',
    'habitantes' =>'8683',
    'deuda'=>'2459'
    );
$deuda[47][47176]=array(
    'nombre' =>'Unión de Campos, La',
    'habitantes' =>'272',
    'deuda'=>'0'
    );
$deuda[47][47177]=array(
    'nombre' =>'Urones de Castroponce',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[47][47178]=array(
    'nombre' =>'Urueña',
    'habitantes' =>'191',
    'deuda'=>'0'
    );
$deuda[47][47179]=array(
    'nombre' =>'Valbuena de Duero',
    'habitantes' =>'475',
    'deuda'=>'0'
    );
$deuda[47][47180]=array(
    'nombre' =>'Valdearcos de la Vega',
    'habitantes' =>'91',
    'deuda'=>'0'
    );
$deuda[47][47181]=array(
    'nombre' =>'Valdenebro de los Valles',
    'habitantes' =>'208',
    'deuda'=>'0'
    );
$deuda[47][47182]=array(
    'nombre' =>'Valdestillas',
    'habitantes' =>'1732',
    'deuda'=>'780'
    );
$deuda[47][47183]=array(
    'nombre' =>'Valdunquillo',
    'habitantes' =>'158',
    'deuda'=>'0'
    );
$deuda[47][47184]=array(
    'nombre' =>'Valoria la Buena',
    'habitantes' =>'680',
    'deuda'=>'40'
    );
$deuda[47][47185]=array(
    'nombre' =>'Valverde de Campos',
    'habitantes' =>'106',
    'deuda'=>'64'
    );
$deuda[47][47186]=array(
    'nombre' =>'Valladolid',
    'habitantes' =>'303905',
    'deuda'=>'129000'
    );
$deuda[47][47187]=array(
    'nombre' =>'Vega de Ruiponce',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[47][47188]=array(
    'nombre' =>'Vega de Valdetronco',
    'habitantes' =>'120',
    'deuda'=>'0'
    );
$deuda[47][47189]=array(
    'nombre' =>'Velascálvaro',
    'habitantes' =>'171',
    'deuda'=>'0'
    );
$deuda[47][47190]=array(
    'nombre' =>'Velilla',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[47][47191]=array(
    'nombre' =>'Velliza',
    'habitantes' =>'122',
    'deuda'=>'0'
    );
$deuda[47][47192]=array(
    'nombre' =>'Ventosa de la Cuesta',
    'habitantes' =>'113',
    'deuda'=>'0'
    );
$deuda[47][47193]=array(
    'nombre' =>'Viana de Cega',
    'habitantes' =>'2015',
    'deuda'=>'0'
    );
$deuda[47][47194]=array(
    'nombre' =>'Viloria',
    'habitantes' =>'363',
    'deuda'=>'0'
    );
$deuda[47][47195]=array(
    'nombre' =>'Villabáñez',
    'habitantes' =>'549',
    'deuda'=>'0'
    );
$deuda[47][47196]=array(
    'nombre' =>'Villabaruz de Campos',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[47][47197]=array(
    'nombre' =>'Villabrágima',
    'habitantes' =>'1061',
    'deuda'=>'0'
    );
$deuda[47][47198]=array(
    'nombre' =>'Villacarralón',
    'habitantes' =>'78',
    'deuda'=>'19'
    );
$deuda[47][47199]=array(
    'nombre' =>'Villacid de Campos',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[47][47200]=array(
    'nombre' =>'Villaco',
    'habitantes' =>'83',
    'deuda'=>'0'
    );
$deuda[47][47203]=array(
    'nombre' =>'Villafrades de Campos',
    'habitantes' =>'72',
    'deuda'=>'0'
    );
$deuda[47][47204]=array(
    'nombre' =>'Villafranca de Duero',
    'habitantes' =>'307',
    'deuda'=>'0'
    );
$deuda[47][47205]=array(
    'nombre' =>'Villafrechós',
    'habitantes' =>'491',
    'deuda'=>'0'
    );
$deuda[47][47206]=array(
    'nombre' =>'Villafuerte',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[47][47207]=array(
    'nombre' =>'Villagarcía de Campos',
    'habitantes' =>'334',
    'deuda'=>'0'
    );
$deuda[47][47208]=array(
    'nombre' =>'Villagómez la Nueva',
    'habitantes' =>'71',
    'deuda'=>'0'
    );
$deuda[47][47209]=array(
    'nombre' =>'Villalán de Campos',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[47][47210]=array(
    'nombre' =>'Villalar de los Comuneros',
    'habitantes' =>'437',
    'deuda'=>'34'
    );
$deuda[47][47211]=array(
    'nombre' =>'Villalba de la Loma',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[47][47212]=array(
    'nombre' =>'Villalba de los Alcores',
    'habitantes' =>'420',
    'deuda'=>'98'
    );
$deuda[47][47213]=array(
    'nombre' =>'Villalbarba',
    'habitantes' =>'130',
    'deuda'=>'0'
    );
$deuda[47][47214]=array(
    'nombre' =>'Villalón de Campos',
    'habitantes' =>'1716',
    'deuda'=>'858'
    );
$deuda[47][47215]=array(
    'nombre' =>'Villamuriel de Campos',
    'habitantes' =>'58',
    'deuda'=>'16'
    );
$deuda[47][47216]=array(
    'nombre' =>'Villán de Tordesillas',
    'habitantes' =>'122',
    'deuda'=>'0'
    );
$deuda[47][47217]=array(
    'nombre' =>'Villanubla',
    'habitantes' =>'2565',
    'deuda'=>'0'
    );
$deuda[47][47218]=array(
    'nombre' =>'Villanueva de Duero',
    'habitantes' =>'1193',
    'deuda'=>'0'
    );
$deuda[47][47219]=array(
    'nombre' =>'Villanueva de la Condesa',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[47][47220]=array(
    'nombre' =>'Villanueva de los Caballeros',
    'habitantes' =>'188',
    'deuda'=>'0'
    );
$deuda[47][47221]=array(
    'nombre' =>'Villanueva de los Infantes',
    'habitantes' =>'113',
    'deuda'=>'0'
    );
$deuda[47][47222]=array(
    'nombre' =>'Villanueva de San Mancio',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[47][47223]=array(
    'nombre' =>'Villardefrades',
    'habitantes' =>'183',
    'deuda'=>'0'
    );
$deuda[47][47224]=array(
    'nombre' =>'Villarmentero de Esgueva',
    'habitantes' =>'104',
    'deuda'=>'113'
    );
$deuda[47][47225]=array(
    'nombre' =>'Villasexmir',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[47][47226]=array(
    'nombre' =>'Villavaquerín',
    'habitantes' =>'181',
    'deuda'=>'46'
    );
$deuda[47][47227]=array(
    'nombre' =>'Villavellid',
    'habitantes' =>'68',
    'deuda'=>'0'
    );
$deuda[47][47228]=array(
    'nombre' =>'Villaverde de Medina',
    'habitantes' =>'527',
    'deuda'=>'0'
    );
$deuda[47][47229]=array(
    'nombre' =>'Villavicencio de los Caballeros',
    'habitantes' =>'243',
    'deuda'=>'0'
    );
$deuda[47][47230]=array(
    'nombre' =>'Wamba',
    'habitantes' =>'343',
    'deuda'=>'0'
    );
$deuda[47][47231]=array(
    'nombre' =>'Zaratán',
    'habitantes' =>'6124',
    'deuda'=>'0'
    );
$deuda[47][47232]=array(
    'nombre' =>'Zarza, La',
    'habitantes' =>'115',
    'deuda'=>'0'
    );
$deuda[48][48001]=array(
    'nombre' =>'Abadiño',
    'habitantes' =>'7516',
    'deuda'=>'2216'
    );
$deuda[48][48002]=array(
    'nombre' =>'Abanto y Ciérvana-Abanto Zierbena',
    'habitantes' =>'9635',
    'deuda'=>'3087'
    );
$deuda[48][48003]=array(
    'nombre' =>'Amorebieta-Etxano',
    'habitantes' =>'18736',
    'deuda'=>'3343'
    );
$deuda[48][48004]=array(
    'nombre' =>'Amoroto',
    'habitantes' =>'410',
    'deuda'=>'0'
    );
$deuda[48][48005]=array(
    'nombre' =>'Arakaldo',
    'habitantes' =>'157',
    'deuda'=>'0'
    );
$deuda[48][48006]=array(
    'nombre' =>'Arantzazu',
    'habitantes' =>'382',
    'deuda'=>'0'
    );
$deuda[48][48007]=array(
    'nombre' =>'Munitibar-Arbatzegi Gerrikaitz',
    'habitantes' =>'461',
    'deuda'=>'0'
    );
$deuda[48][48008]=array(
    'nombre' =>'Artzentales',
    'habitantes' =>'730',
    'deuda'=>'64'
    );
$deuda[48][48009]=array(
    'nombre' =>'Arrankudiaga',
    'habitantes' =>'973',
    'deuda'=>'242'
    );
$deuda[48][48010]=array(
    'nombre' =>'Arrieta',
    'habitantes' =>'572',
    'deuda'=>'50'
    );
$deuda[48][48011]=array(
    'nombre' =>'Arrigorriaga',
    'habitantes' =>'12339',
    'deuda'=>'5364'
    );
$deuda[48][48012]=array(
    'nombre' =>'Bakio',
    'habitantes' =>'2589',
    'deuda'=>'4857'
    );
$deuda[48][48013]=array(
    'nombre' =>'Barakaldo',
    'habitantes' =>'100228',
    'deuda'=>'5592'
    );
$deuda[48][48014]=array(
    'nombre' =>'Barrika',
    'habitantes' =>'1539',
    'deuda'=>'0'
    );
$deuda[48][48015]=array(
    'nombre' =>'Basauri',
    'habitantes' =>'41304',
    'deuda'=>'6829'
    );
$deuda[48][48016]=array(
    'nombre' =>'Berango',
    'habitantes' =>'6961',
    'deuda'=>'1831'
    );
$deuda[48][48017]=array(
    'nombre' =>'Bermeo',
    'habitantes' =>'16947',
    'deuda'=>'8732'
    );
$deuda[48][48018]=array(
    'nombre' =>'Berriatua',
    'habitantes' =>'1220',
    'deuda'=>'384'
    );
$deuda[48][48019]=array(
    'nombre' =>'Berriz',
    'habitantes' =>'4778',
    'deuda'=>'0'
    );
$deuda[48][48020]=array(
    'nombre' =>'Bilbao',
    'habitantes' =>'345141',
    'deuda'=>'8384'
    );
$deuda[48][48021]=array(
    'nombre' =>'Busturia',
    'habitantes' =>'1687',
    'deuda'=>'272'
    );
$deuda[48][48022]=array(
    'nombre' =>'Karrantza Harana/Valle de Carranza',
    'habitantes' =>'2749',
    'deuda'=>'1166'
    );
$deuda[48][48023]=array(
    'nombre' =>'Artea',
    'habitantes' =>'768',
    'deuda'=>'0'
    );
$deuda[48][48024]=array(
    'nombre' =>'Zeanuri',
    'habitantes' =>'1258',
    'deuda'=>'296'
    );
$deuda[48][48025]=array(
    'nombre' =>'Zeberio',
    'habitantes' =>'1081',
    'deuda'=>'25'
    );
$deuda[48][48026]=array(
    'nombre' =>'Dima',
    'habitantes' =>'1424',
    'deuda'=>'886'
    );
$deuda[48][48027]=array(
    'nombre' =>'Durango',
    'habitantes' =>'28899',
    'deuda'=>'0'
    );
$deuda[48][48028]=array(
    'nombre' =>'Ea',
    'habitantes' =>'844',
    'deuda'=>'72'
    );
$deuda[48][48029]=array(
    'nombre' =>'Etxebarri',
    'habitantes' =>'10881',
    'deuda'=>'0'
    );
$deuda[48][48030]=array(
    'nombre' =>'Etxebarria',
    'habitantes' =>'787',
    'deuda'=>'0'
    );
$deuda[48][48031]=array(
    'nombre' =>'Elantxobe',
    'habitantes' =>'384',
    'deuda'=>'0'
    );
$deuda[48][48032]=array(
    'nombre' =>'Elorrio',
    'habitantes' =>'7271',
    'deuda'=>'1554'
    );
$deuda[48][48033]=array(
    'nombre' =>'Ereño',
    'habitantes' =>'252',
    'deuda'=>'0'
    );
$deuda[48][48034]=array(
    'nombre' =>'Ermua',
    'habitantes' =>'16048',
    'deuda'=>'430'
    );
$deuda[48][48035]=array(
    'nombre' =>'Fruiz',
    'habitantes' =>'547',
    'deuda'=>'0'
    );
$deuda[48][48036]=array(
    'nombre' =>'Galdakao',
    'habitantes' =>'29344',
    'deuda'=>'0'
    );
$deuda[48][48037]=array(
    'nombre' =>'Galdames',
    'habitantes' =>'813',
    'deuda'=>'0'
    );
$deuda[48][48038]=array(
    'nombre' =>'Gamiz-Fika',
    'habitantes' =>'1344',
    'deuda'=>'0'
    );
$deuda[48][48039]=array(
    'nombre' =>'Garai',
    'habitantes' =>'313',
    'deuda'=>'0'
    );
$deuda[48][48040]=array(
    'nombre' =>'Gatika',
    'habitantes' =>'1653',
    'deuda'=>'322'
    );
$deuda[48][48041]=array(
    'nombre' =>'Gautegiz Arteaga',
    'habitantes' =>'858',
    'deuda'=>'158'
    );
$deuda[48][48042]=array(
    'nombre' =>'Gordexola',
    'habitantes' =>'1710',
    'deuda'=>'0'
    );
$deuda[48][48043]=array(
    'nombre' =>'Gorliz',
    'habitantes' =>'5670',
    'deuda'=>'0'
    );
$deuda[48][48044]=array(
    'nombre' =>'Getxo',
    'habitantes' =>'78846',
    'deuda'=>'21540'
    );
$deuda[48][48045]=array(
    'nombre' =>'Güeñes',
    'habitantes' =>'6578',
    'deuda'=>'456'
    );
$deuda[48][48046]=array(
    'nombre' =>'Gernika-Lumo',
    'habitantes' =>'16763',
    'deuda'=>'3435'
    );
$deuda[48][48047]=array(
    'nombre' =>'Gizaburuaga',
    'habitantes' =>'213',
    'deuda'=>'315'
    );
$deuda[48][48048]=array(
    'nombre' =>'Ibarrangelu',
    'habitantes' =>'640',
    'deuda'=>'0'
    );
$deuda[48][48049]=array(
    'nombre' =>'Ispaster',
    'habitantes' =>'702',
    'deuda'=>'275'
    );
$deuda[48][48050]=array(
    'nombre' =>'Izurtza',
    'habitantes' =>'254',
    'deuda'=>'0'
    );
$deuda[48][48051]=array(
    'nombre' =>'Lanestosa',
    'habitantes' =>'271',
    'deuda'=>'0'
    );
$deuda[48][48052]=array(
    'nombre' =>'Larrabetzu',
    'habitantes' =>'2046',
    'deuda'=>'247'
    );
$deuda[48][48053]=array(
    'nombre' =>'Laukiz',
    'habitantes' =>'1145',
    'deuda'=>'0'
    );
$deuda[48][48054]=array(
    'nombre' =>'Leioa',
    'habitantes' =>'30715',
    'deuda'=>'0'
    );
$deuda[48][48055]=array(
    'nombre' =>'Lemoa',
    'habitantes' =>'3505',
    'deuda'=>'0'
    );
$deuda[48][48056]=array(
    'nombre' =>'Lemoiz',
    'habitantes' =>'1215',
    'deuda'=>'0'
    );
$deuda[48][48057]=array(
    'nombre' =>'Lekeitio',
    'habitantes' =>'7229',
    'deuda'=>'1898'
    );
$deuda[48][48058]=array(
    'nombre' =>'Mallabia',
    'habitantes' =>'1215',
    'deuda'=>'507'
    );
$deuda[48][48059]=array(
    'nombre' =>'Mañaria',
    'habitantes' =>'527',
    'deuda'=>'431'
    );
$deuda[48][48060]=array(
    'nombre' =>'Markina-Xemein',
    'habitantes' =>'4969',
    'deuda'=>'1095'
    );
$deuda[48][48061]=array(
    'nombre' =>'Maruri-Jatabe',
    'habitantes' =>'955',
    'deuda'=>'397'
    );
$deuda[48][48062]=array(
    'nombre' =>'Mendata',
    'habitantes' =>'381',
    'deuda'=>'0'
    );
$deuda[48][48063]=array(
    'nombre' =>'Mendexa',
    'habitantes' =>'463',
    'deuda'=>'141'
    );
$deuda[48][48064]=array(
    'nombre' =>'Meñaka',
    'habitantes' =>'734',
    'deuda'=>'0'
    );
$deuda[48][48065]=array(
    'nombre' =>'Ugao-Miraballes',
    'habitantes' =>'4122',
    'deuda'=>'0'
    );
$deuda[48][48066]=array(
    'nombre' =>'Morga',
    'habitantes' =>'420',
    'deuda'=>'31'
    );
$deuda[48][48067]=array(
    'nombre' =>'Muxika',
    'habitantes' =>'1450',
    'deuda'=>'0'
    );
$deuda[48][48068]=array(
    'nombre' =>'Mundaka',
    'habitantes' =>'1892',
    'deuda'=>'1028'
    );
$deuda[48][48069]=array(
    'nombre' =>'Mungia',
    'habitantes' =>'17131',
    'deuda'=>'1131'
    );
$deuda[48][48070]=array(
    'nombre' =>'Aulesti',
    'habitantes' =>'658',
    'deuda'=>'251'
    );
$deuda[48][48071]=array(
    'nombre' =>'Muskiz',
    'habitantes' =>'7601',
    'deuda'=>'0'
    );
$deuda[48][48072]=array(
    'nombre' =>'Otxandio',
    'habitantes' =>'1272',
    'deuda'=>'105'
    );
$deuda[48][48073]=array(
    'nombre' =>'Ondarroa',
    'habitantes' =>'8527',
    'deuda'=>'531'
    );
$deuda[48][48074]=array(
    'nombre' =>'Urduña/Orduña',
    'habitantes' =>'4186',
    'deuda'=>'1788'
    );
$deuda[48][48075]=array(
    'nombre' =>'Orozko',
    'habitantes' =>'2611',
    'deuda'=>'2277'
    );
$deuda[48][48076]=array(
    'nombre' =>'Sukarrieta',
    'habitantes' =>'373',
    'deuda'=>'0'
    );
$deuda[48][48077]=array(
    'nombre' =>'Plentzia',
    'habitantes' =>'4338',
    'deuda'=>'235'
    );
$deuda[48][48078]=array(
    'nombre' =>'Portugalete',
    'habitantes' =>'46718',
    'deuda'=>'2992'
    );
$deuda[48][48079]=array(
    'nombre' =>'Errigoiti',
    'habitantes' =>'507',
    'deuda'=>'600'
    );
$deuda[48][48080]=array(
    'nombre' =>'Valle de Trápaga-Trapagaran',
    'habitantes' =>'12093',
    'deuda'=>'0'
    );
$deuda[48][48081]=array(
    'nombre' =>'Lezama',
    'habitantes' =>'2406',
    'deuda'=>'0'
    );
$deuda[48][48082]=array(
    'nombre' =>'Santurtzi',
    'habitantes' =>'46284',
    'deuda'=>'21841'
    );
$deuda[48][48083]=array(
    'nombre' =>'Ortuella',
    'habitantes' =>'8415',
    'deuda'=>'861'
    );
$deuda[48][48084]=array(
    'nombre' =>'Sestao',
    'habitantes' =>'28052',
    'deuda'=>'1580'
    );
$deuda[48][48085]=array(
    'nombre' =>'Sopela',
    'habitantes' =>'13211',
    'deuda'=>'0'
    );
$deuda[48][48086]=array(
    'nombre' =>'Sopuerta',
    'habitantes' =>'2599',
    'deuda'=>'0'
    );
$deuda[48][48087]=array(
    'nombre' =>'Trucios-Turtzioz',
    'habitantes' =>'513',
    'deuda'=>'0'
    );
$deuda[48][48088]=array(
    'nombre' =>'Ubide',
    'habitantes' =>'179',
    'deuda'=>'30'
    );
$deuda[48][48089]=array(
    'nombre' =>'Urduliz',
    'habitantes' =>'4070',
    'deuda'=>'0'
    );
$deuda[48][48090]=array(
    'nombre' =>'Balmaseda',
    'habitantes' =>'7800',
    'deuda'=>'1851'
    );
$deuda[48][48091]=array(
    'nombre' =>'Atxondo',
    'habitantes' =>'1378',
    'deuda'=>'611'
    );
$deuda[48][48092]=array(
    'nombre' =>'Bedia',
    'habitantes' =>'1022',
    'deuda'=>'0'
    );
$deuda[48][48093]=array(
    'nombre' =>'Areatza',
    'habitantes' =>'1195',
    'deuda'=>'359'
    );
$deuda[48][48094]=array(
    'nombre' =>'Igorre',
    'habitantes' =>'4241',
    'deuda'=>'791'
    );
$deuda[48][48095]=array(
    'nombre' =>'Zaldibar',
    'habitantes' =>'3063',
    'deuda'=>'1231'
    );
$deuda[48][48096]=array(
    'nombre' =>'Zalla',
    'habitantes' =>'8477',
    'deuda'=>'0'
    );
$deuda[48][48097]=array(
    'nombre' =>'Zaratamo',
    'habitantes' =>'1613',
    'deuda'=>'40'
    );
$deuda[48][48901]=array(
    'nombre' =>'Derio',
    'habitantes' =>'6022',
    'deuda'=>'0'
    );
$deuda[48][48902]=array(
    'nombre' =>'Erandio',
    'habitantes' =>'24234',
    'deuda'=>'0'
    );
$deuda[48][48903]=array(
    'nombre' =>'Loiu',
    'habitantes' =>'2392',
    'deuda'=>'0'
    );
$deuda[48][48904]=array(
    'nombre' =>'Sondika',
    'habitantes' =>'4535',
    'deuda'=>'0'
    );
$deuda[48][48905]=array(
    'nombre' =>'Zamudio',
    'habitantes' =>'3244',
    'deuda'=>'0'
    );
$deuda[48][48906]=array(
    'nombre' =>'Forua',
    'habitantes' =>'947',
    'deuda'=>'206'
    );
$deuda[48][48907]=array(
    'nombre' =>'Kortezubi',
    'habitantes' =>'467',
    'deuda'=>'0'
    );
$deuda[48][48908]=array(
    'nombre' =>'Murueta',
    'habitantes' =>'310',
    'deuda'=>'0'
    );
$deuda[48][48909]=array(
    'nombre' =>'Nabarniz',
    'habitantes' =>'237',
    'deuda'=>'129'
    );
$deuda[48][48910]=array(
    'nombre' =>'Iurreta',
    'habitantes' =>'3753',
    'deuda'=>'1114'
    );
$deuda[48][48911]=array(
    'nombre' =>'Ajangiz',
    'habitantes' =>'459',
    'deuda'=>'0'
    );
$deuda[48][48912]=array(
    'nombre' =>'Alonsotegi',
    'habitantes' =>'2856',
    'deuda'=>'3868'
    );
$deuda[48][48913]=array(
    'nombre' =>'Zierbena',
    'habitantes' =>'1493',
    'deuda'=>'0'
    );
$deuda[48][48914]=array(
    'nombre' =>'Arratzu',
    'habitantes' =>'406',
    'deuda'=>'85'
    );
$deuda[48][48915]=array(
    'nombre' =>'Ziortza-Bolibar',
    'habitantes' =>'434',
    'deuda'=>'173'
    );
$deuda[49][49002]=array(
    'nombre' =>'Abezames',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[49][49003]=array(
    'nombre' =>'Alcañices',
    'habitantes' =>'1108',
    'deuda'=>'307'
    );
$deuda[49][49004]=array(
    'nombre' =>'Alcubilla de Nogales',
    'habitantes' =>'135',
    'deuda'=>'0'
    );
$deuda[49][49005]=array(
    'nombre' =>'Alfaraz de Sayago',
    'habitantes' =>'149',
    'deuda'=>'0'
    );
$deuda[49][49006]=array(
    'nombre' =>'Algodre',
    'habitantes' =>'167',
    'deuda'=>'0'
    );
$deuda[49][49007]=array(
    'nombre' =>'Almaraz de Duero',
    'habitantes' =>'398',
    'deuda'=>'197'
    );
$deuda[49][49008]=array(
    'nombre' =>'Almeida de Sayago',
    'habitantes' =>'500',
    'deuda'=>'399'
    );
$deuda[49][49009]=array(
    'nombre' =>'Andavías',
    'habitantes' =>'448',
    'deuda'=>'37'
    );
$deuda[49][49010]=array(
    'nombre' =>'Arcenillas',
    'habitantes' =>'415',
    'deuda'=>'0'
    );
$deuda[49][49011]=array(
    'nombre' =>'Arcos de la Polvorosa',
    'habitantes' =>'242',
    'deuda'=>'0'
    );
$deuda[49][49012]=array(
    'nombre' =>'Argañín',
    'habitantes' =>'82',
    'deuda'=>'0'
    );
$deuda[49][49013]=array(
    'nombre' =>'Argujillo',
    'habitantes' =>'283',
    'deuda'=>'152'
    );
$deuda[49][49014]=array(
    'nombre' =>'Arquillinos',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[49][49015]=array(
    'nombre' =>'Arrabalde',
    'habitantes' =>'252',
    'deuda'=>'0'
    );
$deuda[49][49016]=array(
    'nombre' =>'Aspariegos',
    'habitantes' =>'286',
    'deuda'=>'0'
    );
$deuda[49][49017]=array(
    'nombre' =>'Asturianos',
    'habitantes' =>'275',
    'deuda'=>'0'
    );
$deuda[49][49018]=array(
    'nombre' =>'Ayoó de Vidriales',
    'habitantes' =>'363',
    'deuda'=>'0'
    );
$deuda[49][49019]=array(
    'nombre' =>'Barcial del Barco',
    'habitantes' =>'276',
    'deuda'=>'0'
    );
$deuda[49][49020]=array(
    'nombre' =>'Belver de los Montes',
    'habitantes' =>'315',
    'deuda'=>'0'
    );
$deuda[49][49021]=array(
    'nombre' =>'Benavente',
    'habitantes' =>'18550',
    'deuda'=>'8517'
    );
$deuda[49][49022]=array(
    'nombre' =>'Benegiles',
    'habitantes' =>'332',
    'deuda'=>'27'
    );
$deuda[49][49023]=array(
    'nombre' =>'Bermillo de Sayago',
    'habitantes' =>'1104',
    'deuda'=>'188'
    );
$deuda[49][49024]=array(
    'nombre' =>'Bóveda de Toro, La',
    'habitantes' =>'781',
    'deuda'=>'18'
    );
$deuda[49][49025]=array(
    'nombre' =>'Bretó',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[49][49026]=array(
    'nombre' =>'Bretocino',
    'habitantes' =>'248',
    'deuda'=>'0'
    );
$deuda[49][49027]=array(
    'nombre' =>'Brime de Sog',
    'habitantes' =>'155',
    'deuda'=>'0'
    );
$deuda[49][49028]=array(
    'nombre' =>'Brime de Urz',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[49][49029]=array(
    'nombre' =>'Burganes de Valverde',
    'habitantes' =>'695',
    'deuda'=>'0'
    );
$deuda[49][49030]=array(
    'nombre' =>'Bustillo del Oro',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[49][49031]=array(
    'nombre' =>'Cabañas de Sayago',
    'habitantes' =>'153',
    'deuda'=>'0'
    );
$deuda[49][49032]=array(
    'nombre' =>'Calzadilla de Tera',
    'habitantes' =>'350',
    'deuda'=>'0'
    );
$deuda[49][49033]=array(
    'nombre' =>'Camarzana de Tera',
    'habitantes' =>'889',
    'deuda'=>'124'
    );
$deuda[49][49034]=array(
    'nombre' =>'Cañizal',
    'habitantes' =>'485',
    'deuda'=>'41'
    );
$deuda[49][49035]=array(
    'nombre' =>'Cañizo',
    'habitantes' =>'249',
    'deuda'=>'0'
    );
$deuda[49][49036]=array(
    'nombre' =>'Carbajales de Alba',
    'habitantes' =>'586',
    'deuda'=>'0'
    );
$deuda[49][49037]=array(
    'nombre' =>'Carbellino',
    'habitantes' =>'206',
    'deuda'=>'0'
    );
$deuda[49][49038]=array(
    'nombre' =>'Casaseca de Campeán',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[49][49039]=array(
    'nombre' =>'Casaseca de las Chanas',
    'habitantes' =>'378',
    'deuda'=>'0'
    );
$deuda[49][49040]=array(
    'nombre' =>'Castrillo de la Guareña',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[49][49041]=array(
    'nombre' =>'Castrogonzalo',
    'habitantes' =>'491',
    'deuda'=>'0'
    );
$deuda[49][49042]=array(
    'nombre' =>'Castronuevo',
    'habitantes' =>'247',
    'deuda'=>'0'
    );
$deuda[49][49043]=array(
    'nombre' =>'Castroverde de Campos',
    'habitantes' =>'349',
    'deuda'=>'79'
    );
$deuda[49][49044]=array(
    'nombre' =>'Cazurra',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[49][49046]=array(
    'nombre' =>'Cerecinos de Campos',
    'habitantes' =>'308',
    'deuda'=>'0'
    );
$deuda[49][49047]=array(
    'nombre' =>'Cerecinos del Carrizal',
    'habitantes' =>'121',
    'deuda'=>'0'
    );
$deuda[49][49048]=array(
    'nombre' =>'Cernadilla',
    'habitantes' =>'138',
    'deuda'=>'0'
    );
$deuda[49][49050]=array(
    'nombre' =>'Cobreros',
    'habitantes' =>'591',
    'deuda'=>'85'
    );
$deuda[49][49052]=array(
    'nombre' =>'Coomonte',
    'habitantes' =>'203',
    'deuda'=>'0'
    );
$deuda[49][49053]=array(
    'nombre' =>'Coreses',
    'habitantes' =>'1080',
    'deuda'=>'980'
    );
$deuda[49][49054]=array(
    'nombre' =>'Corrales del Vino',
    'habitantes' =>'1052',
    'deuda'=>'0'
    );
$deuda[49][49055]=array(
    'nombre' =>'Cotanes del Monte',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[49][49056]=array(
    'nombre' =>'Cubillos',
    'habitantes' =>'322',
    'deuda'=>'0'
    );
$deuda[49][49057]=array(
    'nombre' =>'Cubo de Benavente',
    'habitantes' =>'116',
    'deuda'=>'0'
    );
$deuda[49][49058]=array(
    'nombre' =>'Cubo de Tierra del Vino, El',
    'habitantes' =>'355',
    'deuda'=>'55'
    );
$deuda[49][49059]=array(
    'nombre' =>'Cuelgamures',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[49][49061]=array(
    'nombre' =>'Entrala',
    'habitantes' =>'165',
    'deuda'=>'0'
    );
$deuda[49][49062]=array(
    'nombre' =>'Espadañedo',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[49][49063]=array(
    'nombre' =>'Faramontanos de Tábara',
    'habitantes' =>'365',
    'deuda'=>'0'
    );
$deuda[49][49064]=array(
    'nombre' =>'Fariza',
    'habitantes' =>'570',
    'deuda'=>'203'
    );
$deuda[49][49065]=array(
    'nombre' =>'Fermoselle',
    'habitantes' =>'1335',
    'deuda'=>'182'
    );
$deuda[49][49066]=array(
    'nombre' =>'Ferreras de Abajo',
    'habitantes' =>'565',
    'deuda'=>'0'
    );
$deuda[49][49067]=array(
    'nombre' =>'Ferreras de Arriba',
    'habitantes' =>'414',
    'deuda'=>'0'
    );
$deuda[49][49068]=array(
    'nombre' =>'Ferreruela',
    'habitantes' =>'518',
    'deuda'=>'0'
    );
$deuda[49][49069]=array(
    'nombre' =>'Figueruela de Arriba',
    'habitantes' =>'405',
    'deuda'=>'9'
    );
$deuda[49][49071]=array(
    'nombre' =>'Fonfría',
    'habitantes' =>'837',
    'deuda'=>'0'
    );
$deuda[49][49075]=array(
    'nombre' =>'Fresno de la Polvorosa',
    'habitantes' =>'153',
    'deuda'=>'0'
    );
$deuda[49][49076]=array(
    'nombre' =>'Fresno de la Ribera',
    'habitantes' =>'381',
    'deuda'=>'0'
    );
$deuda[49][49077]=array(
    'nombre' =>'Fresno de Sayago',
    'habitantes' =>'204',
    'deuda'=>'0'
    );
$deuda[49][49078]=array(
    'nombre' =>'Friera de Valverde',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[49][49079]=array(
    'nombre' =>'Fuente Encalada',
    'habitantes' =>'119',
    'deuda'=>'0'
    );
$deuda[49][49080]=array(
    'nombre' =>'Fuentelapeña',
    'habitantes' =>'778',
    'deuda'=>'422'
    );
$deuda[49][49081]=array(
    'nombre' =>'Fuentesaúco',
    'habitantes' =>'1644',
    'deuda'=>'547'
    );
$deuda[49][49082]=array(
    'nombre' =>'Fuentes de Ropel',
    'habitantes' =>'416',
    'deuda'=>'0'
    );
$deuda[49][49083]=array(
    'nombre' =>'Fuentesecas',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[49][49084]=array(
    'nombre' =>'Fuentespreadas',
    'habitantes' =>'322',
    'deuda'=>'0'
    );
$deuda[49][49085]=array(
    'nombre' =>'Galende',
    'habitantes' =>'1190',
    'deuda'=>'3415'
    );
$deuda[49][49086]=array(
    'nombre' =>'Gallegos del Pan',
    'habitantes' =>'129',
    'deuda'=>'0'
    );
$deuda[49][49087]=array(
    'nombre' =>'Gallegos del Río',
    'habitantes' =>'550',
    'deuda'=>'0'
    );
$deuda[49][49088]=array(
    'nombre' =>'Gamones',
    'habitantes' =>'101',
    'deuda'=>'0'
    );
$deuda[49][49090]=array(
    'nombre' =>'Gema',
    'habitantes' =>'217',
    'deuda'=>'0'
    );
$deuda[49][49091]=array(
    'nombre' =>'Granja de Moreruela',
    'habitantes' =>'290',
    'deuda'=>'32'
    );
$deuda[49][49092]=array(
    'nombre' =>'Granucillo',
    'habitantes' =>'144',
    'deuda'=>'0'
    );
$deuda[49][49093]=array(
    'nombre' =>'Guarrate',
    'habitantes' =>'351',
    'deuda'=>'57'
    );
$deuda[49][49094]=array(
    'nombre' =>'Hermisende',
    'habitantes' =>'273',
    'deuda'=>'0'
    );
$deuda[49][49095]=array(
    'nombre' =>'Hiniesta, La',
    'habitantes' =>'333',
    'deuda'=>'0'
    );
$deuda[49][49096]=array(
    'nombre' =>'Jambrina',
    'habitantes' =>'179',
    'deuda'=>'0'
    );
$deuda[49][49097]=array(
    'nombre' =>'Justel',
    'habitantes' =>'99',
    'deuda'=>'0'
    );
$deuda[49][49098]=array(
    'nombre' =>'Losacino',
    'habitantes' =>'241',
    'deuda'=>'0'
    );
$deuda[49][49099]=array(
    'nombre' =>'Losacio',
    'habitantes' =>'144',
    'deuda'=>'10'
    );
$deuda[49][49100]=array(
    'nombre' =>'Lubián',
    'habitantes' =>'345',
    'deuda'=>'0'
    );
$deuda[49][49101]=array(
    'nombre' =>'Luelmo',
    'habitantes' =>'171',
    'deuda'=>'0'
    );
$deuda[49][49102]=array(
    'nombre' =>'Maderal, El',
    'habitantes' =>'214',
    'deuda'=>'0'
    );
$deuda[49][49103]=array(
    'nombre' =>'Madridanos',
    'habitantes' =>'478',
    'deuda'=>'0'
    );
$deuda[49][49104]=array(
    'nombre' =>'Mahide',
    'habitantes' =>'381',
    'deuda'=>'0'
    );
$deuda[49][49105]=array(
    'nombre' =>'Maire de Castroponce',
    'habitantes' =>'164',
    'deuda'=>'0'
    );
$deuda[49][49107]=array(
    'nombre' =>'Malva',
    'habitantes' =>'140',
    'deuda'=>'0'
    );
$deuda[49][49108]=array(
    'nombre' =>'Manganeses de la Lampreana',
    'habitantes' =>'519',
    'deuda'=>'16'
    );
$deuda[49][49109]=array(
    'nombre' =>'Manganeses de la Polvorosa',
    'habitantes' =>'719',
    'deuda'=>'0'
    );
$deuda[49][49110]=array(
    'nombre' =>'Manzanal de Arriba',
    'habitantes' =>'398',
    'deuda'=>'0'
    );
$deuda[49][49111]=array(
    'nombre' =>'Manzanal del Barco',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[49][49112]=array(
    'nombre' =>'Manzanal de los Infantes',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[49][49113]=array(
    'nombre' =>'Matilla de Arzón',
    'habitantes' =>'184',
    'deuda'=>'0'
    );
$deuda[49][49114]=array(
    'nombre' =>'Matilla la Seca',
    'habitantes' =>'46',
    'deuda'=>'0'
    );
$deuda[49][49115]=array(
    'nombre' =>'Mayalde',
    'habitantes' =>'207',
    'deuda'=>'0'
    );
$deuda[49][49116]=array(
    'nombre' =>'Melgar de Tera',
    'habitantes' =>'430',
    'deuda'=>'0'
    );
$deuda[49][49117]=array(
    'nombre' =>'Micereces de Tera',
    'habitantes' =>'490',
    'deuda'=>'0'
    );
$deuda[49][49118]=array(
    'nombre' =>'Milles de la Polvorosa',
    'habitantes' =>'230',
    'deuda'=>'0'
    );
$deuda[49][49119]=array(
    'nombre' =>'Molacillos',
    'habitantes' =>'269',
    'deuda'=>'0'
    );
$deuda[49][49120]=array(
    'nombre' =>'Molezuelas de la Carballeda',
    'habitantes' =>'86',
    'deuda'=>'3'
    );
$deuda[49][49121]=array(
    'nombre' =>'Mombuey',
    'habitantes' =>'427',
    'deuda'=>'0'
    );
$deuda[49][49122]=array(
    'nombre' =>'Monfarracinos',
    'habitantes' =>'992',
    'deuda'=>'0'
    );
$deuda[49][49123]=array(
    'nombre' =>'Montamarta',
    'habitantes' =>'604',
    'deuda'=>'310'
    );
$deuda[49][49124]=array(
    'nombre' =>'Moral de Sayago',
    'habitantes' =>'278',
    'deuda'=>'0'
    );
$deuda[49][49125]=array(
    'nombre' =>'Moraleja del Vino',
    'habitantes' =>'1660',
    'deuda'=>'17'
    );
$deuda[49][49126]=array(
    'nombre' =>'Moraleja de Sayago',
    'habitantes' =>'266',
    'deuda'=>'549'
    );
$deuda[49][49127]=array(
    'nombre' =>'Morales del Vino',
    'habitantes' =>'2955',
    'deuda'=>'2341'
    );
$deuda[49][49128]=array(
    'nombre' =>'Morales de Rey',
    'habitantes' =>'618',
    'deuda'=>'0'
    );
$deuda[49][49129]=array(
    'nombre' =>'Morales de Toro',
    'habitantes' =>'996',
    'deuda'=>'95'
    );
$deuda[49][49130]=array(
    'nombre' =>'Morales de Valverde',
    'habitantes' =>'198',
    'deuda'=>'0'
    );
$deuda[49][49131]=array(
    'nombre' =>'Moralina',
    'habitantes' =>'302',
    'deuda'=>'40'
    );
$deuda[49][49132]=array(
    'nombre' =>'Moreruela de los Infanzones',
    'habitantes' =>'372',
    'deuda'=>'46'
    );
$deuda[49][49133]=array(
    'nombre' =>'Moreruela de Tábara',
    'habitantes' =>'342',
    'deuda'=>'0'
    );
$deuda[49][49134]=array(
    'nombre' =>'Muelas de los Caballeros',
    'habitantes' =>'205',
    'deuda'=>'0'
    );
$deuda[49][49135]=array(
    'nombre' =>'Muelas del Pan',
    'habitantes' =>'705',
    'deuda'=>'158'
    );
$deuda[49][49136]=array(
    'nombre' =>'Muga de Sayago',
    'habitantes' =>'374',
    'deuda'=>'74'
    );
$deuda[49][49137]=array(
    'nombre' =>'Navianos de Valverde',
    'habitantes' =>'205',
    'deuda'=>'0'
    );
$deuda[49][49138]=array(
    'nombre' =>'Olmillos de Castro',
    'habitantes' =>'250',
    'deuda'=>'0'
    );
$deuda[49][49139]=array(
    'nombre' =>'Otero de Bodas',
    'habitantes' =>'182',
    'deuda'=>'0'
    );
$deuda[49][49141]=array(
    'nombre' =>'Pajares de la Lampreana',
    'habitantes' =>'383',
    'deuda'=>'121'
    );
$deuda[49][49142]=array(
    'nombre' =>'Palacios del Pan',
    'habitantes' =>'262',
    'deuda'=>'16'
    );
$deuda[49][49143]=array(
    'nombre' =>'Palacios de Sanabria',
    'habitantes' =>'261',
    'deuda'=>'0'
    );
$deuda[49][49145]=array(
    'nombre' =>'Pedralba de la Pradería',
    'habitantes' =>'306',
    'deuda'=>'0'
    );
$deuda[49][49146]=array(
    'nombre' =>'Pego, El',
    'habitantes' =>'327',
    'deuda'=>'63'
    );
$deuda[49][49147]=array(
    'nombre' =>'Peleagonzalo',
    'habitantes' =>'271',
    'deuda'=>'11'
    );
$deuda[49][49148]=array(
    'nombre' =>'Peleas de Abajo',
    'habitantes' =>'235',
    'deuda'=>'755'
    );
$deuda[49][49149]=array(
    'nombre' =>'Peñausende',
    'habitantes' =>'437',
    'deuda'=>'12'
    );
$deuda[49][49150]=array(
    'nombre' =>'Peque',
    'habitantes' =>'154',
    'deuda'=>'0'
    );
$deuda[49][49151]=array(
    'nombre' =>'Perdigón, El',
    'habitantes' =>'740',
    'deuda'=>'0'
    );
$deuda[49][49152]=array(
    'nombre' =>'Pereruela',
    'habitantes' =>'591',
    'deuda'=>'0'
    );
$deuda[49][49153]=array(
    'nombre' =>'Perilla de Castro',
    'habitantes' =>'182',
    'deuda'=>'0'
    );
$deuda[49][49154]=array(
    'nombre' =>'Pías',
    'habitantes' =>'143',
    'deuda'=>'0'
    );
$deuda[49][49155]=array(
    'nombre' =>'Piedrahita de Castro',
    'habitantes' =>'93',
    'deuda'=>'7'
    );
$deuda[49][49156]=array(
    'nombre' =>'Pinilla de Toro',
    'habitantes' =>'252',
    'deuda'=>'45'
    );
$deuda[49][49157]=array(
    'nombre' =>'Pino del Oro',
    'habitantes' =>'231',
    'deuda'=>'0'
    );
$deuda[49][49158]=array(
    'nombre' =>'Piñero, El',
    'habitantes' =>'240',
    'deuda'=>'0'
    );
$deuda[49][49159]=array(
    'nombre' =>'Pobladura del Valle',
    'habitantes' =>'313',
    'deuda'=>'120'
    );
$deuda[49][49160]=array(
    'nombre' =>'Pobladura de Valderaduey',
    'habitantes' =>'41',
    'deuda'=>'0'
    );
$deuda[49][49162]=array(
    'nombre' =>'Porto',
    'habitantes' =>'194',
    'deuda'=>'0'
    );
$deuda[49][49163]=array(
    'nombre' =>'Pozoantiguo',
    'habitantes' =>'262',
    'deuda'=>'0'
    );
$deuda[49][49164]=array(
    'nombre' =>'Pozuelo de Tábara',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[49][49165]=array(
    'nombre' =>'Prado',
    'habitantes' =>'60',
    'deuda'=>'0'
    );
$deuda[49][49166]=array(
    'nombre' =>'Puebla de Sanabria',
    'habitantes' =>'1484',
    'deuda'=>'78'
    );
$deuda[49][49167]=array(
    'nombre' =>'Pueblica de Valverde',
    'habitantes' =>'226',
    'deuda'=>'0'
    );
$deuda[49][49168]=array(
    'nombre' =>'Quintanilla del Monte',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[49][49169]=array(
    'nombre' =>'Quintanilla del Olmo',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[49][49170]=array(
    'nombre' =>'Quintanilla de Urz',
    'habitantes' =>'109',
    'deuda'=>'0'
    );
$deuda[49][49171]=array(
    'nombre' =>'Quiruelas de Vidriales',
    'habitantes' =>'710',
    'deuda'=>'124'
    );
$deuda[49][49172]=array(
    'nombre' =>'Rabanales',
    'habitantes' =>'576',
    'deuda'=>'0'
    );
$deuda[49][49173]=array(
    'nombre' =>'Rábano de Aliste',
    'habitantes' =>'414',
    'deuda'=>'145'
    );
$deuda[49][49174]=array(
    'nombre' =>'Requejo',
    'habitantes' =>'156',
    'deuda'=>'0'
    );
$deuda[49][49175]=array(
    'nombre' =>'Revellinos',
    'habitantes' =>'279',
    'deuda'=>'0'
    );
$deuda[49][49176]=array(
    'nombre' =>'Riofrío de Aliste',
    'habitantes' =>'747',
    'deuda'=>'0'
    );
$deuda[49][49177]=array(
    'nombre' =>'Rionegro del Puente',
    'habitantes' =>'306',
    'deuda'=>'0'
    );
$deuda[49][49178]=array(
    'nombre' =>'Roales',
    'habitantes' =>'848',
    'deuda'=>'0'
    );
$deuda[49][49179]=array(
    'nombre' =>'Robleda-Cervantes',
    'habitantes' =>'464',
    'deuda'=>'0'
    );
$deuda[49][49180]=array(
    'nombre' =>'Roelos de Sayago',
    'habitantes' =>'178',
    'deuda'=>'134'
    );
$deuda[49][49181]=array(
    'nombre' =>'Rosinos de la Requejada',
    'habitantes' =>'398',
    'deuda'=>'0'
    );
$deuda[49][49183]=array(
    'nombre' =>'Salce',
    'habitantes' =>'104',
    'deuda'=>'0'
    );
$deuda[49][49184]=array(
    'nombre' =>'Samir de los Caños',
    'habitantes' =>'191',
    'deuda'=>'13'
    );
$deuda[49][49185]=array(
    'nombre' =>'San Agustín del Pozo',
    'habitantes' =>'193',
    'deuda'=>'21'
    );
$deuda[49][49186]=array(
    'nombre' =>'San Cebrián de Castro',
    'habitantes' =>'272',
    'deuda'=>'0'
    );
$deuda[49][49187]=array(
    'nombre' =>'San Cristóbal de Entreviñas',
    'habitantes' =>'1481',
    'deuda'=>'0'
    );
$deuda[49][49188]=array(
    'nombre' =>'San Esteban del Molar',
    'habitantes' =>'125',
    'deuda'=>'18'
    );
$deuda[49][49189]=array(
    'nombre' =>'San Justo',
    'habitantes' =>'247',
    'deuda'=>'0'
    );
$deuda[49][49190]=array(
    'nombre' =>'San Martín de Valderaduey',
    'habitantes' =>'65',
    'deuda'=>'0'
    );
$deuda[49][49191]=array(
    'nombre' =>'San Miguel de la Ribera',
    'habitantes' =>'304',
    'deuda'=>'7'
    );
$deuda[49][49192]=array(
    'nombre' =>'San Miguel del Valle',
    'habitantes' =>'156',
    'deuda'=>'0'
    );
$deuda[49][49193]=array(
    'nombre' =>'San Pedro de Ceque',
    'habitantes' =>'513',
    'deuda'=>'93'
    );
$deuda[49][49194]=array(
    'nombre' =>'San Pedro de la Nave-Almendra',
    'habitantes' =>'379',
    'deuda'=>'24'
    );
$deuda[49][49197]=array(
    'nombre' =>'Santa Clara de Avedillo',
    'habitantes' =>'180',
    'deuda'=>'0'
    );
$deuda[49][49199]=array(
    'nombre' =>'Santa Colomba de las Monjas',
    'habitantes' =>'281',
    'deuda'=>'0'
    );
$deuda[49][49200]=array(
    'nombre' =>'Santa Cristina de la Polvorosa',
    'habitantes' =>'1105',
    'deuda'=>'110'
    );
$deuda[49][49201]=array(
    'nombre' =>'Santa Croya de Tera',
    'habitantes' =>'326',
    'deuda'=>'0'
    );
$deuda[49][49202]=array(
    'nombre' =>'Santa Eufemia del Barco',
    'habitantes' =>'197',
    'deuda'=>'0'
    );
$deuda[49][49203]=array(
    'nombre' =>'Santa María de la Vega',
    'habitantes' =>'352',
    'deuda'=>'0'
    );
$deuda[49][49204]=array(
    'nombre' =>'Santa María de Valverde',
    'habitantes' =>'65',
    'deuda'=>'12'
    );
$deuda[49][49205]=array(
    'nombre' =>'Santibáñez de Tera',
    'habitantes' =>'411',
    'deuda'=>'0'
    );
$deuda[49][49206]=array(
    'nombre' =>'Santibáñez de Vidriales',
    'habitantes' =>'1044',
    'deuda'=>'68'
    );
$deuda[49][49207]=array(
    'nombre' =>'Santovenia',
    'habitantes' =>'281',
    'deuda'=>'0'
    );
$deuda[49][49208]=array(
    'nombre' =>'San Vicente de la Cabeza',
    'habitantes' =>'427',
    'deuda'=>'0'
    );
$deuda[49][49209]=array(
    'nombre' =>'San Vitero',
    'habitantes' =>'563',
    'deuda'=>'144'
    );
$deuda[49][49210]=array(
    'nombre' =>'Sanzoles',
    'habitantes' =>'556',
    'deuda'=>'0'
    );
$deuda[49][49214]=array(
    'nombre' =>'Tábara',
    'habitantes' =>'832',
    'deuda'=>'0'
    );
$deuda[49][49216]=array(
    'nombre' =>'Tapioles',
    'habitantes' =>'166',
    'deuda'=>'0'
    );
$deuda[49][49219]=array(
    'nombre' =>'Toro',
    'habitantes' =>'9214',
    'deuda'=>'6485'
    );
$deuda[49][49220]=array(
    'nombre' =>'Torre del Valle, La',
    'habitantes' =>'155',
    'deuda'=>'0'
    );
$deuda[49][49221]=array(
    'nombre' =>'Torregamones',
    'habitantes' =>'304',
    'deuda'=>'0'
    );
$deuda[49][49222]=array(
    'nombre' =>'Torres del Carrizal',
    'habitantes' =>'431',
    'deuda'=>'0'
    );
$deuda[49][49223]=array(
    'nombre' =>'Trabazos',
    'habitantes' =>'1002',
    'deuda'=>'0'
    );
$deuda[49][49224]=array(
    'nombre' =>'Trefacio',
    'habitantes' =>'192',
    'deuda'=>'280'
    );
$deuda[49][49225]=array(
    'nombre' =>'Uña de Quintana',
    'habitantes' =>'157',
    'deuda'=>'0'
    );
$deuda[49][49226]=array(
    'nombre' =>'Vadillo de la Guareña',
    'habitantes' =>'285',
    'deuda'=>'0'
    );
$deuda[49][49227]=array(
    'nombre' =>'Valcabado',
    'habitantes' =>'361',
    'deuda'=>'10'
    );
$deuda[49][49228]=array(
    'nombre' =>'Valdefinjas',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[49][49229]=array(
    'nombre' =>'Valdescorriel',
    'habitantes' =>'148',
    'deuda'=>'17'
    );
$deuda[49][49230]=array(
    'nombre' =>'Vallesa de la Guareña',
    'habitantes' =>'106',
    'deuda'=>'0'
    );
$deuda[49][49231]=array(
    'nombre' =>'Vega de Tera',
    'habitantes' =>'385',
    'deuda'=>'0'
    );
$deuda[49][49232]=array(
    'nombre' =>'Vega de Villalobos',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[49][49233]=array(
    'nombre' =>'Vegalatrave',
    'habitantes' =>'93',
    'deuda'=>'0'
    );
$deuda[49][49234]=array(
    'nombre' =>'Venialbo',
    'habitantes' =>'480',
    'deuda'=>'29'
    );
$deuda[49][49235]=array(
    'nombre' =>'Vezdemarbán',
    'habitantes' =>'441',
    'deuda'=>'9'
    );
$deuda[49][49236]=array(
    'nombre' =>'Vidayanes',
    'habitantes' =>'92',
    'deuda'=>'0'
    );
$deuda[49][49237]=array(
    'nombre' =>'Videmala',
    'habitantes' =>'180',
    'deuda'=>'72'
    );
$deuda[49][49238]=array(
    'nombre' =>'Villabrázaro',
    'habitantes' =>'238',
    'deuda'=>'0'
    );
$deuda[49][49239]=array(
    'nombre' =>'Villabuena del Puente',
    'habitantes' =>'786',
    'deuda'=>'0'
    );
$deuda[49][49240]=array(
    'nombre' =>'Villadepera',
    'habitantes' =>'242',
    'deuda'=>'0'
    );
$deuda[49][49241]=array(
    'nombre' =>'Villaescusa',
    'habitantes' =>'276',
    'deuda'=>'85'
    );
$deuda[49][49242]=array(
    'nombre' =>'Villafáfila',
    'habitantes' =>'506',
    'deuda'=>'63'
    );
$deuda[49][49243]=array(
    'nombre' =>'Villaferrueña',
    'habitantes' =>'117',
    'deuda'=>'0'
    );
$deuda[49][49244]=array(
    'nombre' =>'Villageriz',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[49][49245]=array(
    'nombre' =>'Villalazán',
    'habitantes' =>'287',
    'deuda'=>'0'
    );
$deuda[49][49246]=array(
    'nombre' =>'Villalba de la Lampreana',
    'habitantes' =>'257',
    'deuda'=>'0'
    );
$deuda[49][49247]=array(
    'nombre' =>'Villalcampo',
    'habitantes' =>'476',
    'deuda'=>'115'
    );
$deuda[49][49248]=array(
    'nombre' =>'Villalobos',
    'habitantes' =>'261',
    'deuda'=>'0'
    );
$deuda[49][49249]=array(
    'nombre' =>'Villalonso',
    'habitantes' =>'101',
    'deuda'=>'0'
    );
$deuda[49][49250]=array(
    'nombre' =>'Villalpando',
    'habitantes' =>'1523',
    'deuda'=>'40'
    );
$deuda[49][49251]=array(
    'nombre' =>'Villalube',
    'habitantes' =>'174',
    'deuda'=>'0'
    );
$deuda[49][49252]=array(
    'nombre' =>'Villamayor de Campos',
    'habitantes' =>'337',
    'deuda'=>'0'
    );
$deuda[49][49255]=array(
    'nombre' =>'Villamor de los Escuderos',
    'habitantes' =>'422',
    'deuda'=>'101'
    );
$deuda[49][49256]=array(
    'nombre' =>'Villanázar',
    'habitantes' =>'299',
    'deuda'=>'0'
    );
$deuda[49][49257]=array(
    'nombre' =>'Villanueva de Azoague',
    'habitantes' =>'329',
    'deuda'=>'0'
    );
$deuda[49][49258]=array(
    'nombre' =>'Villanueva de Campeán',
    'habitantes' =>'122',
    'deuda'=>'0'
    );
$deuda[49][49259]=array(
    'nombre' =>'Villanueva de las Peras',
    'habitantes' =>'96',
    'deuda'=>'0'
    );
$deuda[49][49260]=array(
    'nombre' =>'Villanueva del Campo',
    'habitantes' =>'914',
    'deuda'=>'0'
    );
$deuda[49][49261]=array(
    'nombre' =>'Villaralbo',
    'habitantes' =>'1893',
    'deuda'=>'0'
    );
$deuda[49][49262]=array(
    'nombre' =>'Villardeciervos',
    'habitantes' =>'464',
    'deuda'=>'0'
    );
$deuda[49][49263]=array(
    'nombre' =>'Villar de Fallaves',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[49][49264]=array(
    'nombre' =>'Villar del Buey',
    'habitantes' =>'653',
    'deuda'=>'0'
    );
$deuda[49][49265]=array(
    'nombre' =>'Villardiegua de la Ribera',
    'habitantes' =>'134',
    'deuda'=>'0'
    );
$deuda[49][49266]=array(
    'nombre' =>'Villárdiga',
    'habitantes' =>'87',
    'deuda'=>'0'
    );
$deuda[49][49267]=array(
    'nombre' =>'Villardondiego',
    'habitantes' =>'99',
    'deuda'=>'73'
    );
$deuda[49][49268]=array(
    'nombre' =>'Villarrín de Campos',
    'habitantes' =>'450',
    'deuda'=>'16'
    );
$deuda[49][49269]=array(
    'nombre' =>'Villaseco del Pan',
    'habitantes' =>'256',
    'deuda'=>'0'
    );
$deuda[49][49270]=array(
    'nombre' =>'Villavendimio',
    'habitantes' =>'163',
    'deuda'=>'104'
    );
$deuda[49][49271]=array(
    'nombre' =>'Villaveza del Agua',
    'habitantes' =>'218',
    'deuda'=>'0'
    );
$deuda[49][49272]=array(
    'nombre' =>'Villaveza de Valverde',
    'habitantes' =>'89',
    'deuda'=>'0'
    );
$deuda[49][49273]=array(
    'nombre' =>'Viñas',
    'habitantes' =>'211',
    'deuda'=>'26'
    );
$deuda[49][49275]=array(
    'nombre' =>'Zamora',
    'habitantes' =>'63831',
    'deuda'=>'13293'
    );
$deuda[50][50001]=array(
    'nombre' =>'Abanto',
    'habitantes' =>'113',
    'deuda'=>'0'
    );
$deuda[50][50002]=array(
    'nombre' =>'Acered',
    'habitantes' =>'217',
    'deuda'=>'0'
    );
$deuda[50][50003]=array(
    'nombre' =>'Agón',
    'habitantes' =>'155',
    'deuda'=>'0'
    );
$deuda[50][50004]=array(
    'nombre' =>'Aguarón',
    'habitantes' =>'724',
    'deuda'=>'374'
    );
$deuda[50][50005]=array(
    'nombre' =>'Aguilón',
    'habitantes' =>'254',
    'deuda'=>'192'
    );
$deuda[50][50006]=array(
    'nombre' =>'Ainzón',
    'habitantes' =>'1143',
    'deuda'=>'1123'
    );
$deuda[50][50007]=array(
    'nombre' =>'Aladrén',
    'habitantes' =>'52',
    'deuda'=>'0'
    );
$deuda[50][50008]=array(
    'nombre' =>'Alagón',
    'habitantes' =>'7014',
    'deuda'=>'1367'
    );
$deuda[50][50009]=array(
    'nombre' =>'Alarba',
    'habitantes' =>'152',
    'deuda'=>'176'
    );
$deuda[50][50010]=array(
    'nombre' =>'Alberite de San Juan',
    'habitantes' =>'84',
    'deuda'=>'0'
    );
$deuda[50][50011]=array(
    'nombre' =>'Albeta',
    'habitantes' =>'145',
    'deuda'=>'56'
    );
$deuda[50][50012]=array(
    'nombre' =>'Alborge',
    'habitantes' =>'121',
    'deuda'=>'0'
    );
$deuda[50][50013]=array(
    'nombre' =>'Alcalá de Ebro',
    'habitantes' =>'279',
    'deuda'=>'34'
    );
$deuda[50][50014]=array(
    'nombre' =>'Alcalá de Moncayo',
    'habitantes' =>'186',
    'deuda'=>'247'
    );
$deuda[50][50015]=array(
    'nombre' =>'Alconchel de Ariza',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[50][50016]=array(
    'nombre' =>'Aldehuela de Liestos',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[50][50017]=array(
    'nombre' =>'Alfajarín',
    'habitantes' =>'2266',
    'deuda'=>'0'
    );
$deuda[50][50018]=array(
    'nombre' =>'Alfamén',
    'habitantes' =>'1466',
    'deuda'=>'77'
    );
$deuda[50][50019]=array(
    'nombre' =>'Alforque',
    'habitantes' =>'64',
    'deuda'=>'0'
    );
$deuda[50][50020]=array(
    'nombre' =>'Alhama de Aragón',
    'habitantes' =>'1077',
    'deuda'=>'210'
    );
$deuda[50][50021]=array(
    'nombre' =>'Almochuel',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[50][50022]=array(
    'nombre' =>'Almolda, La',
    'habitantes' =>'593',
    'deuda'=>'0'
    );
$deuda[50][50023]=array(
    'nombre' =>'Almonacid de la Cuba',
    'habitantes' =>'255',
    'deuda'=>'25'
    );
$deuda[50][50024]=array(
    'nombre' =>'Almonacid de la Sierra',
    'habitantes' =>'731',
    'deuda'=>'0'
    );
$deuda[50][50025]=array(
    'nombre' =>'Almunia de Doña Godina, La',
    'habitantes' =>'7680',
    'deuda'=>'3775'
    );
$deuda[50][50026]=array(
    'nombre' =>'Alpartir',
    'habitantes' =>'564',
    'deuda'=>'242'
    );
$deuda[50][50027]=array(
    'nombre' =>'Ambel',
    'habitantes' =>'256',
    'deuda'=>'0'
    );
$deuda[50][50028]=array(
    'nombre' =>'Anento',
    'habitantes' =>'105',
    'deuda'=>'37'
    );
$deuda[50][50029]=array(
    'nombre' =>'Aniñón',
    'habitantes' =>'761',
    'deuda'=>'514'
    );
$deuda[50][50030]=array(
    'nombre' =>'Añón de Moncayo',
    'habitantes' =>'206',
    'deuda'=>'316'
    );
$deuda[50][50031]=array(
    'nombre' =>'Aranda de Moncayo',
    'habitantes' =>'187',
    'deuda'=>'50'
    );
$deuda[50][50032]=array(
    'nombre' =>'Arándiga',
    'habitantes' =>'340',
    'deuda'=>'146'
    );
$deuda[50][50033]=array(
    'nombre' =>'Ardisa',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[50][50034]=array(
    'nombre' =>'Ariza',
    'habitantes' =>'1196',
    'deuda'=>'836'
    );
$deuda[50][50035]=array(
    'nombre' =>'Artieda',
    'habitantes' =>'81',
    'deuda'=>'0'
    );
$deuda[50][50036]=array(
    'nombre' =>'Asín',
    'habitantes' =>'104',
    'deuda'=>'27'
    );
$deuda[50][50037]=array(
    'nombre' =>'Atea',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[50][50038]=array(
    'nombre' =>'Ateca',
    'habitantes' =>'1968',
    'deuda'=>'1553'
    );
$deuda[50][50039]=array(
    'nombre' =>'Azuara',
    'habitantes' =>'606',
    'deuda'=>'0'
    );
$deuda[50][50040]=array(
    'nombre' =>'Badules',
    'habitantes' =>'95',
    'deuda'=>'0'
    );
$deuda[50][50041]=array(
    'nombre' =>'Bagüés',
    'habitantes' =>'13',
    'deuda'=>'1'
    );
$deuda[50][50042]=array(
    'nombre' =>'Balconchán',
    'habitantes' =>'13',
    'deuda'=>'0'
    );
$deuda[50][50043]=array(
    'nombre' =>'Bárboles',
    'habitantes' =>'340',
    'deuda'=>'0'
    );
$deuda[50][50044]=array(
    'nombre' =>'Bardallur',
    'habitantes' =>'282',
    'deuda'=>'21'
    );
$deuda[50][50045]=array(
    'nombre' =>'Belchite',
    'habitantes' =>'1562',
    'deuda'=>'84'
    );
$deuda[50][50046]=array(
    'nombre' =>'Belmonte de Gracián',
    'habitantes' =>'211',
    'deuda'=>'20'
    );
$deuda[50][50047]=array(
    'nombre' =>'Berdejo',
    'habitantes' =>'53',
    'deuda'=>'0'
    );
$deuda[50][50048]=array(
    'nombre' =>'Berrueco',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[50][50050]=array(
    'nombre' =>'Bijuesca',
    'habitantes' =>'100',
    'deuda'=>'0'
    );
$deuda[50][50051]=array(
    'nombre' =>'Biota',
    'habitantes' =>'1002',
    'deuda'=>'0'
    );
$deuda[50][50052]=array(
    'nombre' =>'Bisimbre',
    'habitantes' =>'97',
    'deuda'=>'21'
    );
$deuda[50][50053]=array(
    'nombre' =>'Boquiñeni',
    'habitantes' =>'871',
    'deuda'=>'341'
    );
$deuda[50][50054]=array(
    'nombre' =>'Bordalba',
    'habitantes' =>'62',
    'deuda'=>'0'
    );
$deuda[50][50055]=array(
    'nombre' =>'Borja',
    'habitantes' =>'4930',
    'deuda'=>'1870'
    );
$deuda[50][50056]=array(
    'nombre' =>'Botorrita',
    'habitantes' =>'484',
    'deuda'=>'17'
    );
$deuda[50][50057]=array(
    'nombre' =>'Brea de Aragón',
    'habitantes' =>'1719',
    'deuda'=>'595'
    );
$deuda[50][50058]=array(
    'nombre' =>'Bubierca',
    'habitantes' =>'76',
    'deuda'=>'0'
    );
$deuda[50][50059]=array(
    'nombre' =>'Bujaraloz',
    'habitantes' =>'1008',
    'deuda'=>'35'
    );
$deuda[50][50060]=array(
    'nombre' =>'Bulbuente',
    'habitantes' =>'236',
    'deuda'=>'0'
    );
$deuda[50][50061]=array(
    'nombre' =>'Bureta',
    'habitantes' =>'253',
    'deuda'=>'0'
    );
$deuda[50][50062]=array(
    'nombre' =>'Burgo de Ebro, El',
    'habitantes' =>'2348',
    'deuda'=>'0'
    );
$deuda[50][50063]=array(
    'nombre' =>'Buste, El',
    'habitantes' =>'66',
    'deuda'=>'29'
    );
$deuda[50][50064]=array(
    'nombre' =>'Cabañas de Ebro',
    'habitantes' =>'527',
    'deuda'=>'249'
    );
$deuda[50][50065]=array(
    'nombre' =>'Cabolafuente',
    'habitantes' =>'38',
    'deuda'=>'0'
    );
$deuda[50][50066]=array(
    'nombre' =>'Cadrete',
    'habitantes' =>'3602',
    'deuda'=>'14'
    );
$deuda[50][50067]=array(
    'nombre' =>'Calatayud',
    'habitantes' =>'19724',
    'deuda'=>'6342'
    );
$deuda[50][50068]=array(
    'nombre' =>'Calatorao',
    'habitantes' =>'2864',
    'deuda'=>'0'
    );
$deuda[50][50069]=array(
    'nombre' =>'Calcena',
    'habitantes' =>'79',
    'deuda'=>'13'
    );
$deuda[50][50070]=array(
    'nombre' =>'Calmarza',
    'habitantes' =>'77',
    'deuda'=>'0'
    );
$deuda[50][50071]=array(
    'nombre' =>'Campillo de Aragón',
    'habitantes' =>'141',
    'deuda'=>'0'
    );
$deuda[50][50072]=array(
    'nombre' =>'Carenas',
    'habitantes' =>'172',
    'deuda'=>'0'
    );
$deuda[50][50073]=array(
    'nombre' =>'Cariñena',
    'habitantes' =>'3389',
    'deuda'=>'1378'
    );
$deuda[50][50074]=array(
    'nombre' =>'Caspe',
    'habitantes' =>'9867',
    'deuda'=>'0'
    );
$deuda[50][50075]=array(
    'nombre' =>'Castejón de Alarba',
    'habitantes' =>'95',
    'deuda'=>'113'
    );
$deuda[50][50076]=array(
    'nombre' =>'Castejón de las Armas',
    'habitantes' =>'101',
    'deuda'=>'107'
    );
$deuda[50][50077]=array(
    'nombre' =>'Castejón de Valdejasa',
    'habitantes' =>'228',
    'deuda'=>'97'
    );
$deuda[50][50078]=array(
    'nombre' =>'Castiliscar',
    'habitantes' =>'280',
    'deuda'=>'709'
    );
$deuda[50][50079]=array(
    'nombre' =>'Cervera de la Cañada',
    'habitantes' =>'311',
    'deuda'=>'87'
    );
$deuda[50][50080]=array(
    'nombre' =>'Cerveruela',
    'habitantes' =>'33',
    'deuda'=>'0'
    );
$deuda[50][50081]=array(
    'nombre' =>'Cetina',
    'habitantes' =>'645',
    'deuda'=>'0'
    );
$deuda[50][50082]=array(
    'nombre' =>'Cimballa',
    'habitantes' =>'113',
    'deuda'=>'0'
    );
$deuda[50][50083]=array(
    'nombre' =>'Cinco Olivas',
    'habitantes' =>'113',
    'deuda'=>'0'
    );
$deuda[50][50084]=array(
    'nombre' =>'Clarés de Ribota',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[50][50085]=array(
    'nombre' =>'Codo',
    'habitantes' =>'194',
    'deuda'=>'0'
    );
$deuda[50][50086]=array(
    'nombre' =>'Codos',
    'habitantes' =>'185',
    'deuda'=>'0'
    );
$deuda[50][50087]=array(
    'nombre' =>'Contamina',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[50][50088]=array(
    'nombre' =>'Cosuenda',
    'habitantes' =>'396',
    'deuda'=>'403'
    );
$deuda[50][50089]=array(
    'nombre' =>'Cuarte de Huerva',
    'habitantes' =>'12141',
    'deuda'=>'0'
    );
$deuda[50][50090]=array(
    'nombre' =>'Cubel',
    'habitantes' =>'189',
    'deuda'=>'0'
    );
$deuda[50][50091]=array(
    'nombre' =>'Cuerlas, Las',
    'habitantes' =>'50',
    'deuda'=>'0'
    );
$deuda[50][50092]=array(
    'nombre' =>'Chiprana',
    'habitantes' =>'498',
    'deuda'=>'0'
    );
$deuda[50][50093]=array(
    'nombre' =>'Chodes',
    'habitantes' =>'132',
    'deuda'=>'0'
    );
$deuda[50][50094]=array(
    'nombre' =>'Daroca',
    'habitantes' =>'2113',
    'deuda'=>'1827'
    );
$deuda[50][50095]=array(
    'nombre' =>'Ejea de los Caballeros',
    'habitantes' =>'16754',
    'deuda'=>'3896'
    );
$deuda[50][50096]=array(
    'nombre' =>'Embid de Ariza',
    'habitantes' =>'47',
    'deuda'=>'1'
    );
$deuda[50][50098]=array(
    'nombre' =>'Encinacorba',
    'habitantes' =>'222',
    'deuda'=>'213'
    );
$deuda[50][50099]=array(
    'nombre' =>'Épila',
    'habitantes' =>'4545',
    'deuda'=>'2283'
    );
$deuda[50][50100]=array(
    'nombre' =>'Erla',
    'habitantes' =>'371',
    'deuda'=>'0'
    );
$deuda[50][50101]=array(
    'nombre' =>'Escatrón',
    'habitantes' =>'1084',
    'deuda'=>'0'
    );
$deuda[50][50102]=array(
    'nombre' =>'Fabara',
    'habitantes' =>'1227',
    'deuda'=>'262'
    );
$deuda[50][50104]=array(
    'nombre' =>'Farlete',
    'habitantes' =>'414',
    'deuda'=>'0'
    );
$deuda[50][50105]=array(
    'nombre' =>'Fayón',
    'habitantes' =>'355',
    'deuda'=>'300'
    );
$deuda[50][50106]=array(
    'nombre' =>'Fayos, Los',
    'habitantes' =>'151',
    'deuda'=>'102'
    );
$deuda[50][50107]=array(
    'nombre' =>'Figueruelas',
    'habitantes' =>'1229',
    'deuda'=>'0'
    );
$deuda[50][50108]=array(
    'nombre' =>'Fombuena',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[50][50109]=array(
    'nombre' =>'Frago, El',
    'habitantes' =>'104',
    'deuda'=>'2'
    );
$deuda[50][50110]=array(
    'nombre' =>'Frasno, El',
    'habitantes' =>'415',
    'deuda'=>'131'
    );
$deuda[50][50111]=array(
    'nombre' =>'Fréscano',
    'habitantes' =>'205',
    'deuda'=>'0'
    );
$deuda[50][50113]=array(
    'nombre' =>'Fuendejalón',
    'habitantes' =>'833',
    'deuda'=>'283'
    );
$deuda[50][50114]=array(
    'nombre' =>'Fuendetodos',
    'habitantes' =>'144',
    'deuda'=>'480'
    );
$deuda[50][50115]=array(
    'nombre' =>'Fuentes de Ebro',
    'habitantes' =>'4594',
    'deuda'=>'142'
    );
$deuda[50][50116]=array(
    'nombre' =>'Fuentes de Jiloca',
    'habitantes' =>'219',
    'deuda'=>'311'
    );
$deuda[50][50117]=array(
    'nombre' =>'Gallocanta',
    'habitantes' =>'160',
    'deuda'=>'0'
    );
$deuda[50][50118]=array(
    'nombre' =>'Gallur',
    'habitantes' =>'2695',
    'deuda'=>'434'
    );
$deuda[50][50119]=array(
    'nombre' =>'Gelsa',
    'habitantes' =>'1087',
    'deuda'=>'0'
    );
$deuda[50][50120]=array(
    'nombre' =>'Godojos',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[50][50121]=array(
    'nombre' =>'Gotor',
    'habitantes' =>'334',
    'deuda'=>'156'
    );
$deuda[50][50122]=array(
    'nombre' =>'Grisel',
    'habitantes' =>'74',
    'deuda'=>'0'
    );
$deuda[50][50123]=array(
    'nombre' =>'Grisén',
    'habitantes' =>'656',
    'deuda'=>'0'
    );
$deuda[50][50124]=array(
    'nombre' =>'Herrera de los Navarros',
    'habitantes' =>'550',
    'deuda'=>'1068'
    );
$deuda[50][50125]=array(
    'nombre' =>'Ibdes',
    'habitantes' =>'455',
    'deuda'=>'92'
    );
$deuda[50][50126]=array(
    'nombre' =>'Illueca',
    'habitantes' =>'3139',
    'deuda'=>'996'
    );
$deuda[50][50128]=array(
    'nombre' =>'Isuerre',
    'habitantes' =>'35',
    'deuda'=>'27'
    );
$deuda[50][50129]=array(
    'nombre' =>'Jaraba',
    'habitantes' =>'324',
    'deuda'=>'344'
    );
$deuda[50][50130]=array(
    'nombre' =>'Jarque',
    'habitantes' =>'473',
    'deuda'=>'42'
    );
$deuda[50][50131]=array(
    'nombre' =>'Jaulín',
    'habitantes' =>'260',
    'deuda'=>'32'
    );
$deuda[50][50132]=array(
    'nombre' =>'Joyosa, La',
    'habitantes' =>'1042',
    'deuda'=>'0'
    );
$deuda[50][50133]=array(
    'nombre' =>'Lagata',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[50][50134]=array(
    'nombre' =>'Langa del Castillo',
    'habitantes' =>'137',
    'deuda'=>'0'
    );
$deuda[50][50135]=array(
    'nombre' =>'Layana',
    'habitantes' =>'114',
    'deuda'=>'74'
    );
$deuda[50][50136]=array(
    'nombre' =>'Lécera',
    'habitantes' =>'729',
    'deuda'=>'0'
    );
$deuda[50][50137]=array(
    'nombre' =>'Leciñena',
    'habitantes' =>'1220',
    'deuda'=>'0'
    );
$deuda[50][50138]=array(
    'nombre' =>'Lechón',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[50][50139]=array(
    'nombre' =>'Letux',
    'habitantes' =>'359',
    'deuda'=>'80'
    );
$deuda[50][50140]=array(
    'nombre' =>'Litago',
    'habitantes' =>'174',
    'deuda'=>'149'
    );
$deuda[50][50141]=array(
    'nombre' =>'Lituénigo',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[50][50142]=array(
    'nombre' =>'Lobera de Onsella',
    'habitantes' =>'42',
    'deuda'=>'51'
    );
$deuda[50][50143]=array(
    'nombre' =>'Longares',
    'habitantes' =>'847',
    'deuda'=>'405'
    );
$deuda[50][50144]=array(
    'nombre' =>'Longás',
    'habitantes' =>'36',
    'deuda'=>'1'
    );
$deuda[50][50146]=array(
    'nombre' =>'Lucena de Jalón',
    'habitantes' =>'242',
    'deuda'=>'166'
    );
$deuda[50][50147]=array(
    'nombre' =>'Luceni',
    'habitantes' =>'1006',
    'deuda'=>'290'
    );
$deuda[50][50148]=array(
    'nombre' =>'Luesia',
    'habitantes' =>'334',
    'deuda'=>'410'
    );
$deuda[50][50149]=array(
    'nombre' =>'Luesma',
    'habitantes' =>'43',
    'deuda'=>'24'
    );
$deuda[50][50150]=array(
    'nombre' =>'Lumpiaque',
    'habitantes' =>'886',
    'deuda'=>'0'
    );
$deuda[50][50151]=array(
    'nombre' =>'Luna',
    'habitantes' =>'756',
    'deuda'=>'0'
    );
$deuda[50][50152]=array(
    'nombre' =>'Maella',
    'habitantes' =>'1953',
    'deuda'=>'737'
    );
$deuda[50][50153]=array(
    'nombre' =>'Magallón',
    'habitantes' =>'1174',
    'deuda'=>'340'
    );
$deuda[50][50154]=array(
    'nombre' =>'Mainar',
    'habitantes' =>'152',
    'deuda'=>'0'
    );
$deuda[50][50155]=array(
    'nombre' =>'Malanquilla',
    'habitantes' =>'113',
    'deuda'=>'0'
    );
$deuda[50][50156]=array(
    'nombre' =>'Maleján',
    'habitantes' =>'267',
    'deuda'=>'51'
    );
$deuda[50][50157]=array(
    'nombre' =>'Malón',
    'habitantes' =>'359',
    'deuda'=>'70'
    );
$deuda[50][50159]=array(
    'nombre' =>'Maluenda',
    'habitantes' =>'1034',
    'deuda'=>'326'
    );
$deuda[50][50160]=array(
    'nombre' =>'Mallén',
    'habitantes' =>'3292',
    'deuda'=>'20'
    );
$deuda[50][50161]=array(
    'nombre' =>'Manchones',
    'habitantes' =>'130',
    'deuda'=>'40'
    );
$deuda[50][50162]=array(
    'nombre' =>'Mara',
    'habitantes' =>'182',
    'deuda'=>'114'
    );
$deuda[50][50163]=array(
    'nombre' =>'María de Huerva',
    'habitantes' =>'5425',
    'deuda'=>'1074'
    );
$deuda[50][50164]=array(
    'nombre' =>'Mediana de Aragón',
    'habitantes' =>'457',
    'deuda'=>'52'
    );
$deuda[50][50165]=array(
    'nombre' =>'Mequinenza',
    'habitantes' =>'2311',
    'deuda'=>'7'
    );
$deuda[50][50166]=array(
    'nombre' =>'Mesones de Isuela',
    'habitantes' =>'291',
    'deuda'=>'35'
    );
$deuda[50][50167]=array(
    'nombre' =>'Mezalocha',
    'habitantes' =>'235',
    'deuda'=>'82'
    );
$deuda[50][50168]=array(
    'nombre' =>'Mianos',
    'habitantes' =>'31',
    'deuda'=>'0'
    );
$deuda[50][50169]=array(
    'nombre' =>'Miedes de Aragón',
    'habitantes' =>'479',
    'deuda'=>'119'
    );
$deuda[50][50170]=array(
    'nombre' =>'Monegrillo',
    'habitantes' =>'431',
    'deuda'=>'0'
    );
$deuda[50][50171]=array(
    'nombre' =>'Moneva',
    'habitantes' =>'112',
    'deuda'=>'0'
    );
$deuda[50][50172]=array(
    'nombre' =>'Monreal de Ariza',
    'habitantes' =>'222',
    'deuda'=>'123'
    );
$deuda[50][50173]=array(
    'nombre' =>'Monterde',
    'habitantes' =>'278',
    'deuda'=>'88'
    );
$deuda[50][50174]=array(
    'nombre' =>'Montón',
    'habitantes' =>'105',
    'deuda'=>'61'
    );
$deuda[50][50175]=array(
    'nombre' =>'Morata de Jalón',
    'habitantes' =>'1204',
    'deuda'=>'336'
    );
$deuda[50][50176]=array(
    'nombre' =>'Morata de Jiloca',
    'habitantes' =>'256',
    'deuda'=>'352'
    );
$deuda[50][50177]=array(
    'nombre' =>'Morés',
    'habitantes' =>'362',
    'deuda'=>'644'
    );
$deuda[50][50178]=array(
    'nombre' =>'Moros',
    'habitantes' =>'397',
    'deuda'=>'568'
    );
$deuda[50][50179]=array(
    'nombre' =>'Moyuela',
    'habitantes' =>'280',
    'deuda'=>'30'
    );
$deuda[50][50180]=array(
    'nombre' =>'Mozota',
    'habitantes' =>'121',
    'deuda'=>'22'
    );
$deuda[50][50181]=array(
    'nombre' =>'Muel',
    'habitantes' =>'1335',
    'deuda'=>'53'
    );
$deuda[50][50182]=array(
    'nombre' =>'Muela, La',
    'habitantes' =>'4980',
    'deuda'=>'11689'
    );
$deuda[50][50183]=array(
    'nombre' =>'Munébrega',
    'habitantes' =>'405',
    'deuda'=>'240'
    );
$deuda[50][50184]=array(
    'nombre' =>'Murero',
    'habitantes' =>'131',
    'deuda'=>'64'
    );
$deuda[50][50185]=array(
    'nombre' =>'Murillo de Gállego',
    'habitantes' =>'166',
    'deuda'=>'172'
    );
$deuda[50][50186]=array(
    'nombre' =>'Navardún',
    'habitantes' =>'41',
    'deuda'=>'103'
    );
$deuda[50][50187]=array(
    'nombre' =>'Nigüella',
    'habitantes' =>'78',
    'deuda'=>'0'
    );
$deuda[50][50188]=array(
    'nombre' =>'Nombrevilla',
    'habitantes' =>'34',
    'deuda'=>'0'
    );
$deuda[50][50189]=array(
    'nombre' =>'Nonaspe',
    'habitantes' =>'1008',
    'deuda'=>'747'
    );
$deuda[50][50190]=array(
    'nombre' =>'Novallas',
    'habitantes' =>'913',
    'deuda'=>'11'
    );
$deuda[50][50191]=array(
    'nombre' =>'Novillas',
    'habitantes' =>'578',
    'deuda'=>'0'
    );
$deuda[50][50192]=array(
    'nombre' =>'Nuévalos',
    'habitantes' =>'327',
    'deuda'=>'15'
    );
$deuda[50][50193]=array(
    'nombre' =>'Nuez de Ebro',
    'habitantes' =>'826',
    'deuda'=>'0'
    );
$deuda[50][50194]=array(
    'nombre' =>'Olvés',
    'habitantes' =>'117',
    'deuda'=>'69'
    );
$deuda[50][50195]=array(
    'nombre' =>'Orcajo',
    'habitantes' =>'56',
    'deuda'=>'0'
    );
$deuda[50][50196]=array(
    'nombre' =>'Orera',
    'habitantes' =>'127',
    'deuda'=>'0'
    );
$deuda[50][50197]=array(
    'nombre' =>'Orés',
    'habitantes' =>'112',
    'deuda'=>'40'
    );
$deuda[50][50198]=array(
    'nombre' =>'Oseja',
    'habitantes' =>'61',
    'deuda'=>'0'
    );
$deuda[50][50199]=array(
    'nombre' =>'Osera de Ebro',
    'habitantes' =>'407',
    'deuda'=>'154'
    );
$deuda[50][50200]=array(
    'nombre' =>'Paniza',
    'habitantes' =>'691',
    'deuda'=>'240'
    );
$deuda[50][50201]=array(
    'nombre' =>'Paracuellos de Jiloca',
    'habitantes' =>'590',
    'deuda'=>'192'
    );
$deuda[50][50202]=array(
    'nombre' =>'Paracuellos de la Ribera',
    'habitantes' =>'168',
    'deuda'=>'13'
    );
$deuda[50][50203]=array(
    'nombre' =>'Pastriz',
    'habitantes' =>'1280',
    'deuda'=>'167'
    );
$deuda[50][50204]=array(
    'nombre' =>'Pedrola',
    'habitantes' =>'3560',
    'deuda'=>'0'
    );
$deuda[50][50205]=array(
    'nombre' =>'Pedrosas, Las',
    'habitantes' =>'107',
    'deuda'=>'0'
    );
$deuda[50][50206]=array(
    'nombre' =>'Perdiguera',
    'habitantes' =>'597',
    'deuda'=>'0'
    );
$deuda[50][50207]=array(
    'nombre' =>'Piedratajada',
    'habitantes' =>'114',
    'deuda'=>'0'
    );
$deuda[50][50208]=array(
    'nombre' =>'Pina de Ebro',
    'habitantes' =>'2535',
    'deuda'=>'764'
    );
$deuda[50][50209]=array(
    'nombre' =>'Pinseque',
    'habitantes' =>'3606',
    'deuda'=>'804'
    );
$deuda[50][50210]=array(
    'nombre' =>'Pintanos, Los',
    'habitantes' =>'44',
    'deuda'=>'1'
    );
$deuda[50][50211]=array(
    'nombre' =>'Plasencia de Jalón',
    'habitantes' =>'342',
    'deuda'=>'0'
    );
$deuda[50][50212]=array(
    'nombre' =>'Pleitas',
    'habitantes' =>'45',
    'deuda'=>'200'
    );
$deuda[50][50213]=array(
    'nombre' =>'Plenas',
    'habitantes' =>'111',
    'deuda'=>'30'
    );
$deuda[50][50214]=array(
    'nombre' =>'Pomer',
    'habitantes' =>'32',
    'deuda'=>'0'
    );
$deuda[50][50215]=array(
    'nombre' =>'Pozuel de Ariza',
    'habitantes' =>'24',
    'deuda'=>'0'
    );
$deuda[50][50216]=array(
    'nombre' =>'Pozuelo de Aragón',
    'habitantes' =>'288',
    'deuda'=>'188'
    );
$deuda[50][50217]=array(
    'nombre' =>'Pradilla de Ebro',
    'habitantes' =>'560',
    'deuda'=>'40'
    );
$deuda[50][50218]=array(
    'nombre' =>'Puebla de Albortón',
    'habitantes' =>'124',
    'deuda'=>'0'
    );
$deuda[50][50219]=array(
    'nombre' =>'Puebla de Alfindén, La',
    'habitantes' =>'5948',
    'deuda'=>'1706'
    );
$deuda[50][50220]=array(
    'nombre' =>'Puendeluna',
    'habitantes' =>'51',
    'deuda'=>'0'
    );
$deuda[50][50221]=array(
    'nombre' =>'Purujosa',
    'habitantes' =>'37',
    'deuda'=>'0'
    );
$deuda[50][50222]=array(
    'nombre' =>'Quinto',
    'habitantes' =>'2020',
    'deuda'=>'0'
    );
$deuda[50][50223]=array(
    'nombre' =>'Remolinos',
    'habitantes' =>'1143',
    'deuda'=>'0'
    );
$deuda[50][50224]=array(
    'nombre' =>'Retascón',
    'habitantes' =>'79',
    'deuda'=>'0'
    );
$deuda[50][50225]=array(
    'nombre' =>'Ricla',
    'habitantes' =>'3122',
    'deuda'=>'184'
    );
$deuda[50][50227]=array(
    'nombre' =>'Romanos',
    'habitantes' =>'111',
    'deuda'=>'0'
    );
$deuda[50][50228]=array(
    'nombre' =>'Rueda de Jalón',
    'habitantes' =>'332',
    'deuda'=>'0'
    );
$deuda[50][50229]=array(
    'nombre' =>'Ruesca',
    'habitantes' =>'73',
    'deuda'=>'0'
    );
$deuda[50][50230]=array(
    'nombre' =>'Sádaba',
    'habitantes' =>'1404',
    'deuda'=>'1155'
    );
$deuda[50][50231]=array(
    'nombre' =>'Salillas de Jalón',
    'habitantes' =>'324',
    'deuda'=>'408'
    );
$deuda[50][50232]=array(
    'nombre' =>'Salvatierra de Esca',
    'habitantes' =>'215',
    'deuda'=>'0'
    );
$deuda[50][50233]=array(
    'nombre' =>'Samper del Salz',
    'habitantes' =>'123',
    'deuda'=>'0'
    );
$deuda[50][50234]=array(
    'nombre' =>'San Martín de la Virgen de Moncayo',
    'habitantes' =>'279',
    'deuda'=>'0'
    );
$deuda[50][50235]=array(
    'nombre' =>'San Mateo de Gállego',
    'habitantes' =>'3051',
    'deuda'=>'1392'
    );
$deuda[50][50236]=array(
    'nombre' =>'Santa Cruz de Grío',
    'habitantes' =>'135',
    'deuda'=>'0'
    );
$deuda[50][50237]=array(
    'nombre' =>'Santa Cruz de Moncayo',
    'habitantes' =>'136',
    'deuda'=>'51'
    );
$deuda[50][50238]=array(
    'nombre' =>'Santa Eulalia de Gállego',
    'habitantes' =>'110',
    'deuda'=>'63'
    );
$deuda[50][50239]=array(
    'nombre' =>'Santed',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[50][50240]=array(
    'nombre' =>'Sástago',
    'habitantes' =>'1217',
    'deuda'=>'0'
    );
$deuda[50][50241]=array(
    'nombre' =>'Sabiñán',
    'habitantes' =>'743',
    'deuda'=>'311'
    );
$deuda[50][50242]=array(
    'nombre' =>'Sediles',
    'habitantes' =>'105',
    'deuda'=>'0'
    );
$deuda[50][50243]=array(
    'nombre' =>'Sestrica',
    'habitantes' =>'402',
    'deuda'=>'80'
    );
$deuda[50][50244]=array(
    'nombre' =>'Sierra de Luna',
    'habitantes' =>'267',
    'deuda'=>'55'
    );
$deuda[50][50245]=array(
    'nombre' =>'Sigüés',
    'habitantes' =>'103',
    'deuda'=>'0'
    );
$deuda[50][50246]=array(
    'nombre' =>'Sisamón',
    'habitantes' =>'36',
    'deuda'=>'0'
    );
$deuda[50][50247]=array(
    'nombre' =>'Sobradiel',
    'habitantes' =>'1077',
    'deuda'=>'0'
    );
$deuda[50][50248]=array(
    'nombre' =>'Sos del Rey Católico',
    'habitantes' =>'614',
    'deuda'=>'1034'
    );
$deuda[50][50249]=array(
    'nombre' =>'Tabuenca',
    'habitantes' =>'352',
    'deuda'=>'43'
    );
$deuda[50][50250]=array(
    'nombre' =>'Talamantes',
    'habitantes' =>'58',
    'deuda'=>'0'
    );
$deuda[50][50251]=array(
    'nombre' =>'Tarazona',
    'habitantes' =>'10759',
    'deuda'=>'5215'
    );
$deuda[50][50252]=array(
    'nombre' =>'Tauste',
    'habitantes' =>'6941',
    'deuda'=>'2401'
    );
$deuda[50][50253]=array(
    'nombre' =>'Terrer',
    'habitantes' =>'520',
    'deuda'=>'107'
    );
$deuda[50][50254]=array(
    'nombre' =>'Tierga',
    'habitantes' =>'200',
    'deuda'=>'0'
    );
$deuda[50][50255]=array(
    'nombre' =>'Tobed',
    'habitantes' =>'243',
    'deuda'=>'0'
    );
$deuda[50][50256]=array(
    'nombre' =>'Torralba de los Frailes',
    'habitantes' =>'86',
    'deuda'=>'0'
    );
$deuda[50][50257]=array(
    'nombre' =>'Torralba de Ribota',
    'habitantes' =>'186',
    'deuda'=>'104'
    );
$deuda[50][50258]=array(
    'nombre' =>'Torralbilla',
    'habitantes' =>'63',
    'deuda'=>'0'
    );
$deuda[50][50259]=array(
    'nombre' =>'Torrehermosa',
    'habitantes' =>'69',
    'deuda'=>'0'
    );
$deuda[50][50260]=array(
    'nombre' =>'Torrelapaja',
    'habitantes' =>'35',
    'deuda'=>'0'
    );
$deuda[50][50261]=array(
    'nombre' =>'Torrellas',
    'habitantes' =>'269',
    'deuda'=>'24'
    );
$deuda[50][50262]=array(
    'nombre' =>'Torres de Berrellén',
    'habitantes' =>'1491',
    'deuda'=>'347'
    );
$deuda[50][50263]=array(
    'nombre' =>'Torrijo de la Cañada',
    'habitantes' =>'245',
    'deuda'=>'116'
    );
$deuda[50][50264]=array(
    'nombre' =>'Tosos',
    'habitantes' =>'205',
    'deuda'=>'18'
    );
$deuda[50][50265]=array(
    'nombre' =>'Trasmoz',
    'habitantes' =>'79',
    'deuda'=>'29'
    );
$deuda[50][50266]=array(
    'nombre' =>'Trasobares',
    'habitantes' =>'128',
    'deuda'=>'0'
    );
$deuda[50][50267]=array(
    'nombre' =>'Uncastillo',
    'habitantes' =>'684',
    'deuda'=>'155'
    );
$deuda[50][50268]=array(
    'nombre' =>'Undués de Lerda',
    'habitantes' =>'61',
    'deuda'=>'2'
    );
$deuda[50][50269]=array(
    'nombre' =>'Urrea de Jalón',
    'habitantes' =>'398',
    'deuda'=>'83'
    );
$deuda[50][50270]=array(
    'nombre' =>'Urriés',
    'habitantes' =>'37',
    'deuda'=>'1'
    );
$deuda[50][50271]=array(
    'nombre' =>'Used',
    'habitantes' =>'288',
    'deuda'=>'110'
    );
$deuda[50][50272]=array(
    'nombre' =>'Utebo',
    'habitantes' =>'18430',
    'deuda'=>'0'
    );
$deuda[50][50273]=array(
    'nombre' =>'Valdehorna',
    'habitantes' =>'30',
    'deuda'=>'0'
    );
$deuda[50][50274]=array(
    'nombre' =>'Val de San Martín',
    'habitantes' =>'70',
    'deuda'=>'0'
    );
$deuda[50][50275]=array(
    'nombre' =>'Valmadrid',
    'habitantes' =>'128',
    'deuda'=>'0'
    );
$deuda[50][50276]=array(
    'nombre' =>'Valpalmas',
    'habitantes' =>'142',
    'deuda'=>'0'
    );
$deuda[50][50277]=array(
    'nombre' =>'Valtorres',
    'habitantes' =>'66',
    'deuda'=>'0'
    );
$deuda[50][50278]=array(
    'nombre' =>'Velilla de Ebro',
    'habitantes' =>'250',
    'deuda'=>'150'
    );
$deuda[50][50279]=array(
    'nombre' =>'Velilla de Jiloca',
    'habitantes' =>'120',
    'deuda'=>'144'
    );
$deuda[50][50280]=array(
    'nombre' =>'Vera de Moncayo',
    'habitantes' =>'388',
    'deuda'=>'112'
    );
$deuda[50][50281]=array(
    'nombre' =>'Vierlas',
    'habitantes' =>'96',
    'deuda'=>'39'
    );
$deuda[50][50282]=array(
    'nombre' =>'Vilueña, La',
    'habitantes' =>'111',
    'deuda'=>'41'
    );
$deuda[50][50283]=array(
    'nombre' =>'Villadoz',
    'habitantes' =>'90',
    'deuda'=>'0'
    );
$deuda[50][50284]=array(
    'nombre' =>'Villafeliche',
    'habitantes' =>'195',
    'deuda'=>'236'
    );
$deuda[50][50285]=array(
    'nombre' =>'Villafranca de Ebro',
    'habitantes' =>'836',
    'deuda'=>'76'
    );
$deuda[50][50286]=array(
    'nombre' =>'Villalba de Perejil',
    'habitantes' =>'98',
    'deuda'=>'0'
    );
$deuda[50][50287]=array(
    'nombre' =>'Villalengua',
    'habitantes' =>'348',
    'deuda'=>'29'
    );
$deuda[50][50288]=array(
    'nombre' =>'Villanueva de Gállego',
    'habitantes' =>'4614',
    'deuda'=>'3904'
    );
$deuda[50][50289]=array(
    'nombre' =>'Villanueva de Jiloca',
    'habitantes' =>'57',
    'deuda'=>'0'
    );
$deuda[50][50290]=array(
    'nombre' =>'Villanueva de Huerva',
    'habitantes' =>'491',
    'deuda'=>'22'
    );
$deuda[50][50291]=array(
    'nombre' =>'Villar de los Navarros',
    'habitantes' =>'113',
    'deuda'=>'169'
    );
$deuda[50][50292]=array(
    'nombre' =>'Villarreal de Huerva',
    'habitantes' =>'247',
    'deuda'=>'0'
    );
$deuda[50][50293]=array(
    'nombre' =>'Villarroya de la Sierra',
    'habitantes' =>'503',
    'deuda'=>'0'
    );
$deuda[50][50294]=array(
    'nombre' =>'Villarroya del Campo',
    'habitantes' =>'80',
    'deuda'=>'0'
    );
$deuda[50][50295]=array(
    'nombre' =>'Vistabella',
    'habitantes' =>'45',
    'deuda'=>'0'
    );
$deuda[50][50296]=array(
    'nombre' =>'Zaida, La',
    'habitantes' =>'473',
    'deuda'=>'0'
    );
$deuda[50][50297]=array(
    'nombre' =>'Zaragoza',
    'habitantes' =>'664953',
    'deuda'=>'1069679'
    );
$deuda[50][50298]=array(
    'nombre' =>'Zuera',
    'habitantes' =>'7820',
    'deuda'=>'1792'
    );
$deuda[50][50901]=array(
    'nombre' =>'Biel',
    'habitantes' =>'148',
    'deuda'=>'4'
    );
$deuda[50][50902]=array(
    'nombre' =>'Marracos',
    'habitantes' =>'94',
    'deuda'=>'0'
    );
$deuda[50][50903]=array(
    'nombre' =>'Villamayor de Gállego',
    'habitantes' =>'2793',
    'deuda'=>'2566'
    );
$deuda[51][51001]=array(
    'nombre' =>'Ceuta',
    'habitantes' =>'84263',
    'deuda'=>'207826'
    );
$deuda[52][52001]=array(
    'nombre' =>'Melilla',
    'habitantes' =>'85584',
    'deuda'=>'91237'
    );
// print "<pre>\$deuda[48]:\n".print_r($deuda[48],true)."<pre>\n";
?>