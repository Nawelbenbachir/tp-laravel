<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
    <!-- raccourci pour inclure le menu du dossier component -->
   <x-menu/> 
   <!-- variable php qui remplit avec le  texte correspondant -->
   {{$slot}}
   <x-footer/>
</body>
</html>