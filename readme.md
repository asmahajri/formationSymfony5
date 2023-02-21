* creation de projet symfony 
symfony new nomProjet --full

* initialiser dépot gitlub 
git init
git remote add origin url
git add .
git commit  -m "commentaire"
git push -u <remote><bransh>

* creation de test unitaire 
symfony console make:unit-test
*lancer les testes unitaires 
php bin/phpunit --testdox

* methodes utilisées pour tester les getters et les setters
  $this->assertFalse()
  $this->assertTrue()
  $this->assertEmpty()

* lancer la migration
symfony console make:migration
symfony console d:m:m

* integration template bootstrap 5

1) importer les fichies css dans 
assets/styles/app.scss
2)importer les fichier js dans assets/app.js sans ajouter a la fin de fichier l'extention js 
3) ajouter dans package.json
dans "dependencies":{
  "jquery":"12.1.4"
}