<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jaro:opsz@6..72&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/stylesCharacter.css?v=' . time()) ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
  <body>
  <div class="header" style="background-color: black; color: white;padding: 0px;">
    <a href="http://localhost/rick-api/public/" class="logo" style="background-color: black;">
      <img src="https://www.logolynx.com/images/logolynx/1b/1b8f07176d1ff1f7b9128b2b44bab24f.png" class="responsive" alt=""></a>
    <div class="header-right " style="color: white !important;">
      <a style="color: white; background-color: black;padding-top: 20px;" href="http://localhost/rick-api/public/characters/page/1">Characters</a>
      <a style="color: white; background-color: black;padding-top: 20px;" href="<?= base_url('404/') ?>">Locations</a>
      <a style="color: white; background-color: black;padding-top: 20px;" href="http://localhost/rick-api/public/seasons">Episodes</a>
    </div>
</div>
