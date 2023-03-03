name: inverse
class: center, middle, inverse
# Docker
# .red[PHP 8]
<div class="logo"><svg class="logo-1" fill="white" width="196" height="64" viewBox="0 0 196 64" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;"><g transform="matrix(0.101031,0,0,0.101031,2.39526,-0.329946)"><g transform="matrix(1.27705,0,0,1.27705,1143.65,155.404)"><path d="M320.958,94.576C320.958,107.301 317.357,117.884 310.155,126.323C302.952,134.763 293.386,140.971 281.456,144.947L331.695,223.685L290.072,223.685L246.727,150.647L230.025,150.647L230.025,223.685L193.837,223.685L193.837,40.361L247.787,40.361C296.568,40.361 320.958,58.433 320.958,94.576ZM283.312,94.576C283.312,84.855 280.462,77.764 274.762,73.301C269.062,68.838 260.38,66.607 248.715,66.607L230.025,66.607L230.025,124.931L249.908,124.931C260.954,124.931 269.283,122.501 274.895,117.641C280.506,112.78 283.312,105.092 283.312,94.576Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(1.27705,0,0,1.27705,1486.87,208.548)"><path d="M313.005,64.751L241.159,227.264L208.153,217.058L277.612,67.402L195.163,67.402L195.163,40.361L313.005,40.361L313.005,64.751Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(1.27705,0,0,1.27705,1335.53,155.404)"><path d="M253.752,12.524C257.994,12.524 261.75,13.43 265.019,15.241C268.289,17.053 270.852,19.55 272.708,22.731C274.563,25.912 275.491,29.447 275.491,33.335C275.491,37.224 274.563,40.758 272.708,43.94C270.852,47.121 268.289,49.64 265.019,51.495C261.75,53.351 257.994,54.279 253.752,54.279C249.51,54.279 245.733,53.351 242.419,51.495C239.105,49.64 236.52,47.121 234.664,43.94C232.808,40.758 231.88,37.224 231.88,33.335C231.88,29.447 232.808,25.912 234.664,22.731C236.52,19.55 239.105,17.053 242.419,15.241C245.733,13.43 249.51,12.524 253.752,12.524ZM201.658,83.309L276.419,83.309L276.419,198.897L313.402,198.897L313.402,223.685L200.332,223.685L200.332,198.897L241.424,198.897L241.424,108.097L201.658,108.097L201.658,83.309Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M261.043,177.319L211.622,177.319L211.622,218.681L254.382,218.681L254.382,228.302L211.622,228.302L211.622,271.803L264.332,271.803L264.332,280.93L201.096,280.93L201.096,167.944L262.441,167.944L261.043,177.319ZM213.76,150.758L245.501,134.23L250.682,143.851L216.72,156.432L213.76,150.758Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M312.861,273.201C321.248,273.201 329.06,270.651 336.297,265.553L341.642,272.46C337.969,275.53 333.501,277.984 328.238,279.82C322.975,281.657 317.987,282.575 313.272,282.575C304.994,282.575 297.922,280.766 292.056,277.148C286.191,273.529 281.723,268.376 278.653,261.688C275.583,255 274.048,247.133 274.048,238.088C274.048,229.426 275.583,221.696 278.653,214.898C281.723,208.101 286.218,202.756 292.139,198.863C298.059,194.971 305.131,193.025 313.354,193.025C323.935,193.025 333.282,196.287 341.395,202.81L335.968,210.129C328.128,204.757 320.426,202.07 312.861,202.07C307.488,202.07 302.733,203.441 298.594,206.182C294.455,208.923 291.22,212.993 288.89,218.393C286.561,223.793 285.396,230.358 285.396,238.088C285.396,245.927 286.547,252.465 288.849,257.7C291.152,262.935 294.373,266.828 298.512,269.377C302.65,271.926 307.434,273.201 312.861,273.201Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M386.388,193.025C394.118,193.025 400.641,194.834 405.959,198.452C411.277,202.07 415.251,207.224 417.883,213.912C420.514,220.6 421.83,228.549 421.83,237.759C421.83,246.421 420.473,254.137 417.759,260.907C415.046,267.677 411.003,272.981 405.63,276.819C400.258,280.656 393.761,282.575 386.141,282.575C378.412,282.575 371.874,280.725 366.529,277.024C361.184,273.324 357.168,268.13 354.482,261.441C351.796,254.753 350.453,246.914 350.453,237.923C350.453,228.987 351.81,221.148 354.523,214.405C357.237,207.662 361.294,202.413 366.694,198.658C372.093,194.903 378.658,193.025 386.388,193.025ZM386.388,201.988C369.887,201.988 361.636,213.967 361.636,237.923C361.636,261.661 369.805,273.529 386.141,273.529C402.478,273.529 410.646,261.606 410.646,237.759C410.646,213.912 402.56,201.988 386.388,201.988Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M463.945,261.359C463.945,265.635 465.301,268.76 468.015,270.734C470.729,272.707 474.443,273.694 479.157,273.694C483.982,273.694 489.053,272.652 494.37,270.569L497.33,278.463C494.973,279.669 492.136,280.656 488.82,281.424C485.503,282.191 481.953,282.575 478.171,282.575C473.566,282.575 469.413,281.739 465.713,280.067C462.012,278.395 459.093,275.955 456.955,272.748C454.817,269.541 453.748,265.745 453.748,261.359L453.748,168.52L426.94,168.52L426.94,159.639L463.945,159.639L463.945,261.359Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M520.121,241.87C520.231,248.833 521.491,254.657 523.904,259.345C526.316,264.032 529.509,267.513 533.483,269.788C537.458,272.063 541.885,273.201 546.764,273.201C551.15,273.201 555.11,272.57 558.646,271.309C562.182,270.048 565.979,268.02 570.035,265.224L575.38,272.872C571.433,275.942 566.952,278.326 561.936,280.026C556.919,281.725 551.999,282.575 547.175,282.575C539.336,282.575 532.552,280.725 526.823,277.024C521.094,273.324 516.722,268.102 513.707,261.359C510.692,254.616 509.184,246.777 509.184,237.841C509.184,229.125 510.705,221.381 513.748,214.611C516.791,207.84 521.08,202.55 526.617,198.74C532.154,194.93 538.486,193.025 545.613,193.025C552.52,193.025 558.496,194.711 563.539,198.082C568.583,201.454 572.434,206.278 575.093,212.555C577.751,218.832 579.081,226.246 579.081,234.798C579.081,236.059 578.999,238.417 578.834,241.87L520.121,241.87ZM545.859,202.564C541.09,202.564 536.855,203.674 533.155,205.894C529.454,208.114 526.48,211.472 524.232,215.967C521.985,220.463 520.669,226.027 520.285,232.66L569.377,232.66C569.158,222.793 566.938,215.31 562.717,210.211C558.496,205.113 552.876,202.564 545.859,202.564Z" style="fill-rule: nonzero;"></path></g><path d="M250.428,75.558C385.339,75.558 494.87,185.089 494.87,320C494.87,454.911 385.339,564.442 250.428,564.442C115.517,564.442 5.986,454.911 5.986,320C5.986,185.089 115.517,75.558 250.428,75.558ZM131.233,450.023L131.233,203.31L220.202,205.493C297.709,207.676 311.355,209.314 331.55,219.685C400.87,255.709 417.79,343.587 365.937,402.536L344.65,426.552L356.658,438.014L368.12,450.023L256.772,450.023L256.772,339.22L269.872,351.228L282.972,363.782L294.434,352.32C308.08,338.674 309.171,325.575 297.163,309.2C294.835,305.797 292.624,303.334 289.625,301.561C283.483,297.931 274.034,297.192 253.497,297.192L218.564,297.192L218.564,450.023L131.233,450.023Z"></path></g></svg></div>

---

class: middle
.left-column[
### Objectif
]
.right-column[

  **La formation Symfony** est destinée aux développeurs qui souhaitent améliorer leurs compétences en matière de développement web. Elle vise à fournir aux participants une compréhension approfondie du framework Symfony, ainsi qu'à leur donner les connaissances et les compétences nécessaires pour créer des applications web de qualité supérieure.

### 🧗 
Au cours de la formation, les participants apprendront comment utiliser les différents composants de Symfony pour construire des applications web robustes et évolutives. Ils découvriront également comment travailler avec les différents modèles de données, comment gérer les utilisateurs et les autorisations, et comment implémenter des fonctionnalités avancées telles que les formulaires, les validations, les routes, les contrôleurs, les vues, etc.

### 🤝 
En outre, la formation permettra aux participants de développer leur capacité à travailler en équipe, à communiquer avec d'autres développeurs et à gérer les défis du développement web. Les participants auront également l'opportunité de mettre en pratique leurs compétences en travaillant sur des projets concrets.

### 😎 
En somme, la formation Symfony est une occasion unique pour les développeurs de développer leurs compétences en développement web et de se faire remarquer sur le marché du travail. Les participants auront les outils et les connaissances nécessaires pour construire des applications web performantes et pour atteindre leurs objectifs professionnels.
]

---

class: middle
.left-column[
### Objectif
### Au programme
]
.right-column[
.pull-left[
* **Introduction à Docker**
  * Qu'est-ce que Docker?
  * Pourquoi utiliser Docker?
  * Architecture Docker
  * Les composants de Docker
  * Les machines virtuelles vs les conteneurs

* **Installation et configuration de Docker**
  * Les différents systèmes d'exploitation compatibles avec Docker
  * Installer Docker sur Windows, macOS, ou Linux
  * Configurer l'environnement Docker

* **Les bases de Docker**
  * Lancer un premier conteneur
  * Les commandes de base de Docker
  * Créer une image Docker personnalisée
  * Partager une image sur Docker Hub

]
.pull-right[
* **Docker Compose**
  * Présentation de Docker Compose
  * Installation de Docker Compose
  * Configuration de Docker Compose
  * Lancer des conteneurs avec Docker Compose
  * Utilisation des variables d'environnement dans Docker Compose

* **Les réseaux Docker**
  * Les réseaux Docker et leur fonctionnement
  * Création de réseaux Docker personnalisés
  * Connexion de conteneurs à un réseau Docker

* **Les volumes Docker**
  * Comprendre les volumes Docker
  * Création de volumes Docker personnalisés
  * Utilisation des volumes avec Docker Compose

* **Les stratégies de déploiement Docker**
  * Les différentes stratégies de déploiement Docker
  * Utilisation de Docker Swarm pour la mise à l'échelle et la haute disponibilité
]
]

---
class: center, middle, inverse
# 1. Introduction à Docker
---

.left-column[
<br />
#### Qu'est-ce que Docker?
]
.right-column[
  Docker est une technologie de conteneurisation open-source qui permet d'exécuter des applications dans un environnement isolé et portable appelé conteneur. Les conteneurs sont des instances légères et autonomes de systèmes d'exploitation et d'applications qui peuvent être déployées sur n'importe quelle infrastructure.
]

---

.left-column[
<br />
#### Qu'est-ce que Docker?
#### Pourquoi utiliser Docker?
]
.right-column[
  Docker offre de nombreux avantages par rapport aux méthodes traditionnelles de déploiement d'applications, tels que :

  * **Isolation:** les applications fonctionnent dans un environnement isolé qui empêche les conflits entre les différentes applications et garantit leur stabilité.
  
  * **Portabilité:** les conteneurs Docker sont indépendants du système d'exploitation et de l'infrastructure sous-jacente, ce qui permet de les déployer facilement sur n'importe quel environnement.
  
  * **Rapidité:** les conteneurs Docker sont légers et peuvent être créés rapidement, ce qui permet de réduire considérablement les temps de déploiement.
  
  * **Gestion des ressources:** Docker offre une gestion fine des ressources, ce qui permet d'optimiser l'utilisation des ressources du système et de réduire les coûts d'infrastructure.
]

---

.left-column[
<br />
#### Qu'est-ce que Docker?
#### Pourquoi utiliser Docker?
#### Architecture Docker
]
.right-column[
Docker utilise une architecture client-serveur, composée de plusieurs éléments clés :

* **Le Docker client:** interface en ligne de commande permettant d'interagir avec le daemon Docker.

* **Le Docker daemon:** processus en arrière-plan qui gère les opérations de base, telles que la création, le démarrage et l'arrêt des conteneurs Docker.

* **Les images Docker:** un modèle de base pour la création de conteneurs Docker, qui contient toutes les informations nécessaires à l'exécution d'une application.

* **Les conteneurs Docker:** une instance exécutable d'une image Docker.

* **Les registres Docker:** un service centralisé pour stocker et distribuer des images Docker.
]

---

.left-column[
<br />
#### Qu'est-ce que Docker?
#### Pourquoi utiliser Docker?
#### Architecture Docker
#### Les composants de Docker
]
.right-column[
Docker se compose de plusieurs composants, notamment :

* **Le Docker Engine:** le moteur principal de Docker qui gère les opérations de conteneurisation.

* **Docker Hub:** un service cloud de registre Docker public où les utilisateurs peuvent stocker et partager leurs images Docker.

* **Docker Compose:** un outil permettant de définir et de gérer des environnements multi-conteneurs avec une seule commande.

* **Docker Swarm:** un outil de clustering Docker qui permet de gérer des clusters de conteneurs sur plusieurs hôtes.

.center[
  <img src="img/docker.png" alt="Les composants de Docker" width="600px" />
]
]

---

.left-column[
<br />
#### Qu'est-ce que Docker?
#### Pourquoi utiliser Docker?
#### Architecture Docker
#### Les composants de Docker
#### Machines virtuelles vs les conteneurs
]
.right-column[
.center[
  <img src="img/virtualization-vs-containers.png" alt="Machines virtuelles vs les conteneurs" width="800px" />
]

Les conteneurs Docker et les machines virtuelles (VM) ont des différences clés. Les machines virtuelles émulent une pile complète de matériel, tandis que les conteneurs partagent les ressources du système hôte, ce qui les rend plus légers et plus rapides à créer et à déployer.

Les conteneurs sont également plus portables et plus adaptés aux architectures distribuées que les machines virtuelles.
]

---
class: center, middle, inverse
# 2. Installation et configuration de Docker

---

.left-column[
<br />
#### Les différents systèmes d'exploitation compatibles avec Docker
]
.right-column[
Docker est compatible avec différents systèmes d'exploitation. Voici une liste des systèmes d'exploitation compatibles avec Docker :

* **Linux :** Docker est natif sur les distributions Linux. Docker utilise le noyau Linux pour exécuter des conteneurs. Les distributions Linux les plus couramment utilisées pour Docker sont Ubuntu, Debian, CentOS, Red Hat Enterprise Linux, Fedora et Arch Linux.

* **macOS :** Docker Desktop est disponible pour les utilisateurs de macOS. Docker Desktop utilise une machine virtuelle pour exécuter des conteneurs. La machine virtuelle utilise le noyau Linux pour exécuter des conteneurs, mais elle est transparente pour l'utilisateur.

* **Windows :** Docker Desktop est également disponible pour les utilisateurs de Windows. Docker Desktop utilise également une machine virtuelle pour exécuter des conteneurs. La machine virtuelle utilise le noyau Linux pour exécuter des conteneurs, mais elle est également transparente pour l'utilisateur.

.center[
  <img src="img/docker-desktop.png" alt="Les systèmes d'exploitation compatibles avec Docker" width="300px" />
]

> Il est important de noter que pour exécuter des conteneurs Windows, vous devez utiliser des conteneurs Windows Server Core ou Nano Server, qui nécessitent une licence de Windows Server.
]
---

.left-column[
<br />
#### Les différents systèmes d'exploitation compatibles avec Docker
#### Installation de Docker
]
.right-column[
Avant de pouvoir utiliser Docker, vous devez installer et configurer Docker sur votre machine. Dans ce chapitre, nous allons couvrir les étapes pour installer et configurer Docker.

#### Installation de Docker
La première étape de l'installation de Docker consiste à télécharger le package d'installation de Docker pour votre système d'exploitation à partir du site Web officiel de Docker. Une fois le package d'installation téléchargé, suivez les instructions d'installation pour installer Docker sur votre système.

Après avoir terminé l'installation, vous pouvez vérifier que Docker est correctement installé en exécutant la commande suivante dans votre terminal :
```sh
docker --version
```

Cette commande affichera la version de Docker que vous avez installée sur votre machine.
]  
---

.left-column[
<br />
#### Les différents systèmes d'exploitation compatibles avec Docker
#### Installation de Docker
#### Configuration de Docker
]
.right-column[
Après l'installation de Docker, vous pouvez commencer à configurer Docker pour répondre à vos besoins. Les fichiers de configuration Docker se trouvent généralement dans le répertoire `/etc/docker` sur Linux, ou dans le menu Docker Desktop sur macOS ou Windows.

Les fichiers de configuration Docker les plus couramment utilisés sont :

* **daemon.json** : ce fichier de configuration permet de définir les paramètres du démon Docker, tels que la configuration du stockage, les limites de ressources, la sécurité, etc.

* **docker-compose.yml** : ce fichier permet de définir les services, les réseaux et les volumes pour une application multi-conteneurs.

* **Dockerfile** : ce fichier est utilisé pour créer une image personnalisée à partir de laquelle vous pouvez lancer des conteneurs.

Bien sûr ! Il est possible de configurer Docker pour que vous n'ayez pas besoin d'utiliser sudo à chaque fois que vous souhaitez exécuter une commande Docker.

Pour éviter d'utiliser sudo, vous pouvez ajouter votre utilisateur au groupe docker en utilisant la commande suivante :

```sh
sudo usermod -aG docker $USER
```
]  
---

.left-column[
<br />
#### Les différents systèmes d'exploitation compatibles avec Docker
#### Installation de Docker
#### Configuration de Docker
]
.right-column[
Après avoir ajouté votre utilisateur au groupe docker, vous devez vous déconnecter et vous reconnecter pour que les modifications prennent effet.

Une fois que vous avez effectué cette étape, vous pouvez exécuter des commandes Docker sans utiliser sudo. Par exemple, pour exécuter un conteneur, vous pouvez utiliser la commande suivante :
```sh
docker run hello-world
```
Il est important de noter que cette configuration est utile pour les utilisateurs qui travaillent seuls sur leur machine. Si plusieurs utilisateurs travaillent sur la même machine, il est recommandé de configurer l'accès à Docker de manière appropriée pour chaque utilisateur.
]
---

class: center, middle, inverse
# 3. Installation et configuration de Docker

---

.left-column[
<br />
#### Lancer votre premier conteneur
]
.right-column[
  Maintenant que nous avons installé Docker sur notre machine, nous allons explorer les bases de Docker. Nous allons apprendre à lancer notre premier conteneur, à utiliser les commandes de base de Docker, à créer une image Docker personnalisée et à partager une image sur Docker Hub.

#### Lancer votre premier conteneur
Pour lancer un premier conteneur, nous allons utiliser l'image Docker `hello-world`. Cette image est un exemple simple qui affiche un message dans la sortie standard.

Pour lancer un conteneur à partir de l'image `hello-world`, nous allons utiliser la commande suivante :
```sh
docker run hello-world
```
La commande docker run crée un nouveau conteneur à partir de l'image `hello-world` et exécute la commande par défaut de l'image. Dans ce cas, la commande par défaut de l'image hello-world affiche un message de bienvenue.


]

---

.left-column[
<br />
#### Lancer votre premier conteneur
#### Utiliser les commandes de base de Docker
]
.right-column[

Docker dispose de nombreuses commandes pour travailler avec des conteneurs, des images et des volumes. Voici quelques-unes des commandes les plus courantes :

* **docker run :** Cette commande crée un nouveau conteneur à partir d'une image Docker.

* docker ps : Cette commande affiche une liste des conteneurs en cours d'exécution.

* docker images : Cette commande affiche une liste des images Docker disponibles sur votre machine.

* docker stop : Cette commande arrête un ou plusieurs conteneurs en cours d'exécution.

* docker rm : Cette commande supprime un ou plusieurs conteneurs.

* docker rmi : Cette commande supprime une ou plusieurs images Docker.

* docker build : Cette commande crée une nouvelle image Docker à partir d'un fichier Dockerfile.
]




