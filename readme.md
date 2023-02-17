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