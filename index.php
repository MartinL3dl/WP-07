<html>
  <head>
    <title> bla bla </title>
  </head>
  <body>
 <?php
$gamename[0] = "kokpiště";
$gamename[1] = "konopiště";
$gamename[2] = "koksoypisteD";
$gamename[3] = "Friendzone 2 HD edition";
$gamename[4] = "The Dankness";
$gamename[5] = "The many of us whole II";

$genre[0] = "FPS";
$genre[1] = "RPG";
$genre[2] = "Tahovka";
$genre[3] = "Third Person";
$genre[4] = "RTS";

$subgenre[0] = "Military shooter";
$subgenre[1] = "survival";
$subgenre[2] = "history";
$subgenre[3] = "open world";
$subgenre[4] = "Stealth";

$platform[0] = "PC";
$platform[1] = "Playstation";
$platform[2] = "Nintendo if-else";
$platform[3] = "Philips CD-I";
$platform[4] = "Retro Soulja boy mini";
 
$skill[0] = "důchodce za kompem lol";
$skill[1] = "víkendoví hráč";
$skill[2] = "nic moc";
$skill[3] = "umí";
$skill[4] = "game god";

$timeplayed[0] = "teprv to zapl";
$timeplayed[1] = "víc jak 2 hodiny";
$timeplayed[2] = "víc jak 12 hodin";
$timeplayed[3] = "víc jak tři dny (času dohromady)";
$timeplayed[4] = "víc jak týden (času dohromady)";

$gamer[0] = "XXX_pUsiDestroyer_XXX";
$gamer[1] = "第五章 第四章 第九章 第六章 第二章 第十章";
$gamer[2] = "Zyklo25nBen48";
$gamer[3] = "Bezdomovec2000";
$gamer[4] = "legendarySucc_er";
$gamer[5] = "Gucciganger";

$array[0]['Nick'] = $gamer[0];
$array[0]['Game'] = $gamename[5];
$array[0]['Genre'] = $genre[3];
$array[0]['Subgenre'] = $subgenre[2];
$array[0]['Platform'] = $platform[1];
$array[0]['Skill'] = $skill[2];
$array[0]['Timeplayed'] = $timeplayed[0];

$array[1]['Nick'] = $gamer[3];
$array[1]['Game'] = $gamename[3];
$array[1]['Genre'] = $genre[3];
$array[1]['Subgenre'] = $subgenre[3];
$array[1]['Platform'] = $platform[1];
$array[1]['Skill'] = $skill[3];
$array[1]['Timeplayed'] = $timeplayed[1];

$array[2]['Nick'] = $gamer[4];
$array[2]['Game'] = $gamename[4];
$array[2]['Genre'] = $genre[0];
$array[2]['Subgenre'] = $subgenre[4];
$array[2]['Platform'] = $platform[4];
$array[2]['Skill'] = $skill[4];
$array[2]['Timeplayed'] = $timeplayed[4];

$array[3]['Nick'] = $gamer[1];
$array[3]['Game'] = $gamename[2];
$array[3]['Genre'] = $genre[3];
$array[3]['Subgenre'] = $subgenre[4];
$array[3]['Platform'] = $platform[2];
$array[3]['Skill'] = $skill[2];
$array[3]['Timeplayed'] = $timeplayed[1];

$array[4]['Nick'] = $gamer[3];
$array[4]['Game'] = $gamename[2];
$array[4]['Genre'] = $genre[3];
$array[4]['Subgenre'] = $subgenre[4];
$array[4]['Platform'] = $platform[0];
$array[4]['Skill'] = $skill[1];
$array[4]['Timeplayed'] = $timeplayed[4];

$array[5]['Nick'] = $gamer[5];
$array[5]['Game'] = $gamename[0];
$array[5]['Genre'] = $genre[2];
$array[5]['Subgenre'] = $subgenre[0];
$array[5]['Platform'] = $platform[4];
$array[5]['Skill'] = $skill[4];
$array[5]['Timeplayed'] = $timeplayed[0];
?>

<h1> Videogames </h1>
<?php
foreach($array[0] as $a => $a_value) {
  echo $a . ": " . $a_value;
  echo "<br>";
} ?>
<br>
<?php
foreach ($array[1] as $b => $b_value) {
  echo $b . ":" . $b_value;
  echo "<br>";
} ?>
<br>

<?php
foreach ($array[2] as $c => $c_value) {
  echo $c . ":" . $c_value;
  echo "<br>";
} ?>
<br>

<?php
foreach ($array[3] as $d => $d_value) {
  echo $d . ":" . $d_value;
  echo "<br>";
} ?>
<br>

<?php
foreach ($array[4] as $e => $e_value) {
  echo $e . ":" . $e_value;
  echo "<br>";
} ?>
<br>

<?php
foreach ($array[5] as $f => $f_value) {
  echo $f . ":" . $f_value;
  echo "<br>";
} ?>
<br>
  </body>
</html>