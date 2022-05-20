name: inverse
class: center, middle, inverse
# Symfony Framework
# .red[PHP 8]
![Right-aligned image](https://ri7.fr/wp-content/uploads/2020/12/logo2-h-195x64-light.png)

---

class: middle
.left-column[
## Objectif
]
.right-column[

- Vous présenter le framework Symfony dans sa version 6. 

- Vous permettre d'apporter des solutions pertinantes aux projet.

- Vous permettre de repondre aux besoin de votre entreprise.

- Gagner en confiance et motivation

- Voir les bonnes pratiques developpement

- Travail en équipe et Pair programming
]

---

class: middle
.left-column[
## Objectif
## Au programme
]
.right-column[
- **Installation de notre environnement**
  - Docker
  - WSL 2 (Pour windows)
  - PHP 8.1
  - Composer
  - Node
  - Symfony cli

- **En route vers Symfony 6**
  - Nouveau projet symfony
  - Postgresql
  - Environnement de dev
  - Entité, Controller, Event
  - Messages
  - Redis
]

---
class: center, middle, inverse
# 1. Environnement de travail
---

class: middle
.left-column[
## Installations
### Docker
]
.right-column[
### Docker
* **Installation de docker sur Linux/Mac :** 
  * [engine ubuntu](https://https://docs.docker.com/engine/install/ubuntu/)
  * [deskstop mac](https://docs.docker.com/desktop/mac/install/)

* **Installation de docker desktop sur Windows** 
  * Télecharger [Windows Desktop](https://https://www.docker.com/products/docker-desktop)
  * Installer WSL (Ubuntu) via le store de Microsoft
  * Activer WSL 2 (Redemmarage necessaire)
  * Installer Windows terminal (facultatif)

Pour utiliser docker sans le mode `sudo` https://docs.docker.com/engine/install/linux-postinstall/
```sh
sudo groupadd docker

sudo usermod -aG docker $USER

newgrp docker 
```

### Docker-compose
Voir https://docs.docker.com/compose/install/

```sh
 curl -SL https://github.com/docker/compose/releases/download/v2.5.0/docker-compose-linux-x86_64 -o /usr/local/bin/docker-compose
 
 sudo chmod +x /usr/local/bin/docker-compose
 
 docker-compose --version

```
]

---

class: middle
.left-column[
## Installations
### Docker
### PHP 8.1
]
.right-column[
Récuperer les sources apt avec **ondrej/php**

```bash
sudo apt install software-properties-common
sudo add-apt-repository ppa:ondrej/php
```

Installation de php version 8.1
```bash
sudo apt install php8.1

# check php version
php -v
```

### Installation des extensions
Pour travailler sur notre projet symfony certaines extenxions nous seront necessaire.

```bash
sudo apt install php8.1-xsl php8.1-intl php8.1-amqp php8.1-curl  php8.1-gd \
  php8.1-redis php8.1-zip php8.1-mbstring

# verifier les extensions
php -m
```

]

---

class: middle
.left-column[
## Installations
### Docker
### PHP 8.1
### Composer
]
.right-column[
### Composer

Télecharger composer en local
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Installation globale
```bash
sudo mv composer.phar /usr/local/bin/composer
```
]

---

class: middle
.left-column[
## Installations
### Docker
### PHP 8.1
### Composer
### Node
]
.right-column[
### Node
Voir https://github.com/nodesource/distributions/blob/master/README.md

Procedure d'installation de npm
```bash
curl -fsSL https://deb.nodesource.com/setup_16.x | sudo -E bash -
sudo apt-get install -y nodejs

# verifier que nodejs et npm sont bien installé
node -v
npm -v 
```

Procedure d'installation de yarn via npm
```bash
sudo npm install --global yarn

# verifier que yarn est bien installé
yarn -v
```
]

---

class: middle
.left-column[
## Installations
### Docker
### PHP 8.1
### Composer
### Node
### Symfony
]
.right-column[
### Symfony
Procdure d'installation de symfony cli, on outil devenu essentielle lors de l'étape de developpement
```bash
# téléchargement du symfony cli
wget https://get.symfony.com/cli/installer -O - | bash

# Installion global
sudo mv /home/$USER/.symfony/bin/symfony /usr/local/bin/symfony

# Verifier que symfony cli est bien installé
symfony --version
```

Nous pouvons aussi installer un certificat en local pour avoir des urls en https
```bash
symfony server:ca:install
```

Verifier que votre environmement de travail à ce qui est requis pour travailler sur symfony framework
```bash
symfony book:check-requirements
```
]

---

.left-column[
## Installations
### Docker
### PHP 8.1
### Composer
### Node
### Symfony
### vscode extension
]
.right-column[
Nous aurons besoin de certaines extension sur Vscode pour travailler correctement et facilement.

Liste des extensions
- PHP Intelephense
- PHP Namespace Resolver
- DotENV
- YAML
- PHP 8 Getter & Setter
- Extension Twig Language 2

Si vous avez la possibilité de travailler sur phpstorm c'est encore plus simple, un seul plugin sera necessaire
- Symfony support
]

---
class: center, middle, inverse
# 2. En route vers symfony 6
---

class: middle
.left-column[
## Nouveau projet symfony 6
]
.right-column[
  ### Liens vers le tutoriel
  En entendnat le tutoriel sur la version 6, on s'appuyer sur la doc de la version 5.2 en utilisant symfony 6 et php 8.1
  https://symfony.com/doc/current/the-fast-track/fr/index.html

  ### New repository symfony
  La commande suivante va permettre de cloner symfony-skeleton en local, lancer composer ...

  Noter qu'il possible d'utiliser --full pour avoir symfony avec les composant essentiel pour developper un site web.
  ```bash
  # clone du repo symfony-skeleton
  symfony new guestbook --version=6.0

  # entrer dans le repertoire
  cd guestbook

  # afficher le contenu du repertoire
  ls -al

  # afficher le repertoire de travail sur vscode
  code .
  ```
]

---

class: middle
.left-column[
### Nouveau projet symfony
### Postgresql
#### Installation
]
.right-column[
  
#### Installation de Postegresql en local
Nous n'utiliserons pas postgresql en local, mais symfony cli aura besoin sur certaines commande.
```bash
sudo apt install postgresql postgresql-contrib
```

### Installation du Client pgcli
Le client pgcli qui nous aidera a nous connecter à notre base de donnée.
```bash
# Installation
sudo apt install pgcli
```

]

---

class: middle
.left-column[
### Nouveau projet symfony
### Postgresql
#### Installation
#### Connection
]
.right-column[
#### Connect to database
Via docker-compose exec
```bash
docker-compose exec database psql -U main -d main
```
Via pgcli, use value of DATABASE_URL
```bash
pgcli postgresql://localhost:49743/app?serverVersion=13&charset=utf8
```

#### Documentation 
##### Database
https://www.postgresql.org/docs/13/tutorial-accessdb.html

##### Table & query
https://www.postgresql.org/docs/13/tutorial-table.html
]

---

class: middle
.left-column[
### Nouveau projet symfony
### Postgresql
#### Installation
#### Connection
#### Commands
]
.right-column[
| Listing | Command | Argument |
|---|---|---|
| Table, index, view, or sequence | \d | name |
| Tables | \dt | name |
| Views | \dv | name |
| Permissions | \dp or \z | name |
| System tables | \dS | name |
| Types | \dT | name |
| Functions | \df | name |
| Operators | \do | name |
| Databases | \l | name |
]

---

class: middle
.left-column[
### Nouveau projet symfony
### Postgresql
### Environemment de dev
]
.right-column[
#### Si vous rencontrer des bugs
* **1 :** N'hesitez à demander au formateur, meme si il doit se repeter.
* **2 :** Demander au gens qui vous entoure
* **3 :** Demander à Google avec la bonne manière. En clair ne faite pas un copier coller bete de votre erreur, car il ne vous repondra certainement avec les bonnes solutions. La bonne manière c'est de prefixer par la technologie que vous utiliser, puis c'est un bug et ensuite un resumé bref de votre erreur. Utiliser l'anglais vous apportera de meilleur resultat.

_**example :**_ symfony bug monolog don't work

#### Variables
Pour afficher toutes les variables d'environnement exposées 
```bash
# affiche toutes les variables (server, .env, docker, ...)
symfony var:export --debug --multiline

# afficher seulement les variables .env.*
symfony console debug:dotenv
```
]

---

class: middle
.left-column[
### Nouveau projet symfony
### Postgresql
### Environemment de dev
### Doctrine ORM
]
.right-column[
Par defaut Doctrine ORM utilise les annotations, nous allons nous utiliser les attributes qui sont fournit depuis php 8.0
```
doctrine:
    orm:
        mappings:
            App:
                type: attribute
```

Verifions que notre database est toujours presente
```bash
symfony console doctrine:database:create
```
]