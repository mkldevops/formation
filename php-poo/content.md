name: inverse
class: center, middle, inverse
# Programmation Orientée Objet
# .red[PHP]
<div class="logo"><svg class="logo-1" fill="white" width="196" height="64" viewBox="0 0 196 64" style="fill-rule: evenodd; clip-rule: evenodd; stroke-linejoin: round; stroke-miterlimit: 2;"><g transform="matrix(0.101031,0,0,0.101031,2.39526,-0.329946)"><g transform="matrix(1.27705,0,0,1.27705,1143.65,155.404)"><path d="M320.958,94.576C320.958,107.301 317.357,117.884 310.155,126.323C302.952,134.763 293.386,140.971 281.456,144.947L331.695,223.685L290.072,223.685L246.727,150.647L230.025,150.647L230.025,223.685L193.837,223.685L193.837,40.361L247.787,40.361C296.568,40.361 320.958,58.433 320.958,94.576ZM283.312,94.576C283.312,84.855 280.462,77.764 274.762,73.301C269.062,68.838 260.38,66.607 248.715,66.607L230.025,66.607L230.025,124.931L249.908,124.931C260.954,124.931 269.283,122.501 274.895,117.641C280.506,112.78 283.312,105.092 283.312,94.576Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(1.27705,0,0,1.27705,1486.87,208.548)"><path d="M313.005,64.751L241.159,227.264L208.153,217.058L277.612,67.402L195.163,67.402L195.163,40.361L313.005,40.361L313.005,64.751Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(1.27705,0,0,1.27705,1335.53,155.404)"><path d="M253.752,12.524C257.994,12.524 261.75,13.43 265.019,15.241C268.289,17.053 270.852,19.55 272.708,22.731C274.563,25.912 275.491,29.447 275.491,33.335C275.491,37.224 274.563,40.758 272.708,43.94C270.852,47.121 268.289,49.64 265.019,51.495C261.75,53.351 257.994,54.279 253.752,54.279C249.51,54.279 245.733,53.351 242.419,51.495C239.105,49.64 236.52,47.121 234.664,43.94C232.808,40.758 231.88,37.224 231.88,33.335C231.88,29.447 232.808,25.912 234.664,22.731C236.52,19.55 239.105,17.053 242.419,15.241C245.733,13.43 249.51,12.524 253.752,12.524ZM201.658,83.309L276.419,83.309L276.419,198.897L313.402,198.897L313.402,223.685L200.332,223.685L200.332,198.897L241.424,198.897L241.424,108.097L201.658,108.097L201.658,83.309Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M261.043,177.319L211.622,177.319L211.622,218.681L254.382,218.681L254.382,228.302L211.622,228.302L211.622,271.803L264.332,271.803L264.332,280.93L201.096,280.93L201.096,167.944L262.441,167.944L261.043,177.319ZM213.76,150.758L245.501,134.23L250.682,143.851L216.72,156.432L213.76,150.758Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M312.861,273.201C321.248,273.201 329.06,270.651 336.297,265.553L341.642,272.46C337.969,275.53 333.501,277.984 328.238,279.82C322.975,281.657 317.987,282.575 313.272,282.575C304.994,282.575 297.922,280.766 292.056,277.148C286.191,273.529 281.723,268.376 278.653,261.688C275.583,255 274.048,247.133 274.048,238.088C274.048,229.426 275.583,221.696 278.653,214.898C281.723,208.101 286.218,202.756 292.139,198.863C298.059,194.971 305.131,193.025 313.354,193.025C323.935,193.025 333.282,196.287 341.395,202.81L335.968,210.129C328.128,204.757 320.426,202.07 312.861,202.07C307.488,202.07 302.733,203.441 298.594,206.182C294.455,208.923 291.22,212.993 288.89,218.393C286.561,223.793 285.396,230.358 285.396,238.088C285.396,245.927 286.547,252.465 288.849,257.7C291.152,262.935 294.373,266.828 298.512,269.377C302.65,271.926 307.434,273.201 312.861,273.201Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M386.388,193.025C394.118,193.025 400.641,194.834 405.959,198.452C411.277,202.07 415.251,207.224 417.883,213.912C420.514,220.6 421.83,228.549 421.83,237.759C421.83,246.421 420.473,254.137 417.759,260.907C415.046,267.677 411.003,272.981 405.63,276.819C400.258,280.656 393.761,282.575 386.141,282.575C378.412,282.575 371.874,280.725 366.529,277.024C361.184,273.324 357.168,268.13 354.482,261.441C351.796,254.753 350.453,246.914 350.453,237.923C350.453,228.987 351.81,221.148 354.523,214.405C357.237,207.662 361.294,202.413 366.694,198.658C372.093,194.903 378.658,193.025 386.388,193.025ZM386.388,201.988C369.887,201.988 361.636,213.967 361.636,237.923C361.636,261.661 369.805,273.529 386.141,273.529C402.478,273.529 410.646,261.606 410.646,237.759C410.646,213.912 402.56,201.988 386.388,201.988Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M463.945,261.359C463.945,265.635 465.301,268.76 468.015,270.734C470.729,272.707 474.443,273.694 479.157,273.694C483.982,273.694 489.053,272.652 494.37,270.569L497.33,278.463C494.973,279.669 492.136,280.656 488.82,281.424C485.503,282.191 481.953,282.575 478.171,282.575C473.566,282.575 469.413,281.739 465.713,280.067C462.012,278.395 459.093,275.955 456.955,272.748C454.817,269.541 453.748,265.745 453.748,261.359L453.748,168.52L426.94,168.52L426.94,159.639L463.945,159.639L463.945,261.359Z" style="fill-rule: nonzero;"></path></g><g transform="matrix(2.01117,0,0,2.01117,165.834,-128.735)"><path d="M520.121,241.87C520.231,248.833 521.491,254.657 523.904,259.345C526.316,264.032 529.509,267.513 533.483,269.788C537.458,272.063 541.885,273.201 546.764,273.201C551.15,273.201 555.11,272.57 558.646,271.309C562.182,270.048 565.979,268.02 570.035,265.224L575.38,272.872C571.433,275.942 566.952,278.326 561.936,280.026C556.919,281.725 551.999,282.575 547.175,282.575C539.336,282.575 532.552,280.725 526.823,277.024C521.094,273.324 516.722,268.102 513.707,261.359C510.692,254.616 509.184,246.777 509.184,237.841C509.184,229.125 510.705,221.381 513.748,214.611C516.791,207.84 521.08,202.55 526.617,198.74C532.154,194.93 538.486,193.025 545.613,193.025C552.52,193.025 558.496,194.711 563.539,198.082C568.583,201.454 572.434,206.278 575.093,212.555C577.751,218.832 579.081,226.246 579.081,234.798C579.081,236.059 578.999,238.417 578.834,241.87L520.121,241.87ZM545.859,202.564C541.09,202.564 536.855,203.674 533.155,205.894C529.454,208.114 526.48,211.472 524.232,215.967C521.985,220.463 520.669,226.027 520.285,232.66L569.377,232.66C569.158,222.793 566.938,215.31 562.717,210.211C558.496,205.113 552.876,202.564 545.859,202.564Z" style="fill-rule: nonzero;"></path></g><path d="M250.428,75.558C385.339,75.558 494.87,185.089 494.87,320C494.87,454.911 385.339,564.442 250.428,564.442C115.517,564.442 5.986,454.911 5.986,320C5.986,185.089 115.517,75.558 250.428,75.558ZM131.233,450.023L131.233,203.31L220.202,205.493C297.709,207.676 311.355,209.314 331.55,219.685C400.87,255.709 417.79,343.587 365.937,402.536L344.65,426.552L356.658,438.014L368.12,450.023L256.772,450.023L256.772,339.22L269.872,351.228L282.972,363.782L294.434,352.32C308.08,338.674 309.171,325.575 297.163,309.2C294.835,305.797 292.624,303.334 289.625,301.561C283.483,297.931 274.034,297.192 253.497,297.192L218.564,297.192L218.564,450.023L131.233,450.023Z"></path></g></svg></div>

---

class: middle
.left-column[
### Objectif
]
.right-column[
- Découvrir un peu plus PHP

- Maitriser les bases de la POO

- Vous permettre de répondre aux besoins de votre entreprise

- Gagner en confiance et motivation
]

---
class: middle
.left-column[
### Objectif
### Prérequis

]
.right-column[
- Version **PHP >=7.4** (avec laragon, lamp, wamp, ...)

- Avoir les bases de PHP (variable, if, for, while, ...)

- Éditeur de texte (vs-code, phpstorm, sublime-text, ...)

- Shell terminal avec le client `php-cli`

- clone du repo git pour les TP, qui vous permettra de faire le suivi du cours à differente étape.

```sh
git clone https://github.com/mkldevops/php-poo-tp.git -b 1.0
```
]

---

class: middle
.left-column[
### Objectif
### Requis
### Pourquoi la POO ?
]
.right-column[
La programmation orientée objet (POO) est devenue **l'un des éléments constitutifs de la programmation**, qui remplace ou améliore la programmation procédurale. Alors que l'idée plus traditionnelle de la programmation procédurale place l'action et la logique au centre, **la POO utilise des objets et des données pour produire des résultats.**

Au niveau le plus simple, la POO se concentre sur les objets qu'un programmeur souhaite modifier plutôt que sur les actions nécessaires pour effectuer ce changement. Cela **facilite l'exécution d'analyses de code** par les programmeurs et ces objets sont **réutilisables dans d'autres projets.**

La majorité des langages de programmation modernes tels que C++, Object Pascal, Java, Python et PHP combinent à la fois la programmation orientée objet et la programmation procédurale, ce qui signifie que la programmation orientée objet est devenue une évolution très importante dans le monde de la programmation.
]

---

class: middle
.left-column[
### Objectif
### Requis
### Pourquoi la POO ?
### Stats des versions PHP
]

.right-column[
  📊 La dernière version de PHP à ce jour est la version 8.1 qui à été publié en Novembre 2021

| Version | juillet 2021 (%) | janvier 2022 (%) |
|-------------|------------------|------------------|
| **8.1**     | 0,1              | 9.1              |
| **8.0**     | 14.7             | 23,9             |
| **7.4**     | 46,8             | 43,9             |
| **7.3**     | 19.2             | 12.0             |
| **7.2**     | 10.4             | 6.6              |
| **7.1**     | 3.8              | 2.4              |
| **7.0**     | 1.3              | 0,8              |

On remarque que la communauté utilisant PHP suivent et migre vers les derniers versions.
]

---

class: middle
.left-column[
### Objectif
### Requis
### Pourquoi la POO ?
### Stats des versions PHP
### Au programme
]

.right-column[
- **Organisation du code**
  - Les classes
  - Propriétés d'une classe
  - Méthodes d'une classe

* **L'encapsulation, Sécurité du code (intégrité)**
  - Visibilité Private
  - Accesseurs & Mutateurs
  - Le constructeur
  - Méthodes magiques
  - Propriétés et Méthodes static
  - Constante

- **Réutilisation du code et gain de temps**
  - Héritage
  - Mot clé extends
  - Visibilité protected
  - Mot clé final
  - Trait

* **Plus de contrôle sur votre développement**
  - Interfaces
  - Abstraction
  - Polymorphisme
  - Namespace
  - Exceptions

* **L'auto-chargement des classes**
  - Autoloader
  - Composer

* **Le typage de données**
  - PHP Doc
  - Typage de données
  - Type callable
  - Types d'Union
  - Arguments nommées

* **PHP 8** (nouveautés)
  ]

---

class: middle

### Analysons un cas

**La société R** souhaite un programme afin d'organiser son personnel, elle fait appel à un développeur qui écrit le code suivant :

.pull-left[

```php
$nom1 = 'Hamada';
$prenom1 = 'Fahari';
$age1 = 35;
$anciennete1 = 12;

$nom2 = 'Dupont';
$prenom2 = 'Michel';
$age2 = 50;
$anciennete2 = 20;

function presentation($nom, $prenom, $age, $anciennete)
{
  echo "Mon nom est $nom, mon prenom est $prenom,
    j'ai $age ans
    je travail depuis $anciennete ans.\n\r";
}

presentation($nom1, $prenom1, $age1, $anciennete1);
presentation($nom2, $prenom2, $age2, $anciennete2);
```

]
.pull-right[
]
---

class: middle

### Analysons un cas

La société R souhaite un programme afin d'organiser son personnel, elle fait appel à un développeur qui écrit le code suivant :

.pull-left[

```php
$nom1 = 'Hamada';
$prenom1 = 'Fahari';
$age1 = 35;
$anciennete1 = 12;

$nom2 = 'Dupont';
$prenom2 = 'Michel';
$age2 = 50;
$anciennete2 = 20;

function presentation($nom, $prenom, $age, $anciennete)
{
  echo "Mon nom est $nom, mon prenom est $prenom,
    j'ai $age ans
    je travail depuis $anciennete ans.\n\r";
}

presentation($nom1, $prenom1, $age1, $anciennete1);
presentation($nom2, $prenom2, $age2, $anciennete2);
```

]
.pull-right[
On remarque qu'avec le code presenté :

- Nous avons **beaucoup de variables** pour représenter les données d'un employé.

- Une gestion de **nouveaux employés qui se complique.**

- Il est aussi possible que nous puissions** mélanger les variables.**

- Au final, **un code surchargé et difficile à maintenir**
]

---

class: middle, center, inverse

# 1. Organisation du code

---

.left-column[
### Les classes
]
.right-column[
**Une classe est une définition ou une représentation de quelque chose**. La classe va contenir des propriétés qu’on pourra manipuler ainsi que des méthodes.

[![](https://mermaid.ink/img/pako:eNpNj8sKAjEMRX-lZKWoP9C1foHgqpvYZsZAH5Kmggzz785L9K7CuYeEDOBLILDgI9Z6ZuwFk8tmykLMrbA2ITOscM6Js5oXK9VKf7SqcO6NR7k3way_6iClRZLd3qzO2oxwhESSkMN0f9nvQB-UyIGdxkAdtqgOXJ7V9gyodAmsRcB2GCsdAZuW6zt7sCqNvtL2xmaNH2-nSos)](https://mermaid-js.github.io/mermaid-live-editor/edit#pako:eNpNj8sKAjEMRX-lZKWoP9C1foHgqpvYZsZAH5Kmggzz785L9K7CuYeEDOBLILDgI9Z6ZuwFk8tmykLMrbA2ITOscM6Js5oXK9VKf7SqcO6NR7k3way_6iClRZLd3qzO2oxwhESSkMN0f9nvQB-UyIGdxkAdtqgOXJ7V9gyodAmsRcB2GCsdAZuW6zt7sCqNvtL2xmaNH2-nSos)

- **Les propriétés (attributs),** ce sont des variables internes à cette définition dans lesquelles on stocke des valeurs.

- **Une classe a aussi des méthodes,** il s’agit de fonctions internes à la classe. Les methode represente le comportement qu'aura notre définition.

Ainsi **La classe détermine ce qu'il sera possible de faire** avec ce qu'elle représente. 

Elle va donc nous permettre de structurer et d'organiser l’ensemble de notre code pour le rendre plus solide et facile à entretenir ou à faire évoluer.
]

---

.left-column[
### Les classes
#### Déclaration de la classe
]
.right-column[
Une classe se déclare de la manière suivante :

```php
<?php

class Voiture
{

}
```



_**Note : **_ 
>* Le mot clé **`class`** est suivi d'un nom en **`PascalCase`**, Prenez soin de nommer votre classe de manière pertinente.
>
>* Le **`PascalCase`** est une convention de dénomination dans laquelle la première lettre de chaque mot d'un mot composé est en majuscule. C'est utilisé pour nommer des fonctions , des classes et d'autres objets.<br/>
> `PascalCase` est similaire à `camelCase`, sauf que la première lettre de `PascalCase` est toujours en majuscule. Voici quelques exemples.

>   * **`PascalCase`** : `NomDeMaClasse` ;
>   * **`camelCase`** : `nomDeMaClasse` ;
]

---

.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
]
.right-column[
**Créer une instance**, c'est créer un objet à partir d'une classe. 

On utilise le mot `new` pour instancier une classe. Cette instanciation sera alors affecter à une variable qui deviendra donc notre objet de type `Voiture` 🚘. 

**Exemple d’instanciation:**

```php
# cours/index.php
<?php

class Voiture
{

}

$mercedes = new Voiture();

var_dump($mercedes);

```

Lançons le script via la commande PHP
```sh
php cours/index.php
# object(Voiture)#1 (0) { }
```

📌 A savoir qu'au moment d'une nouvelle instanciation de classe, une **réference d'objet** est mise en place par PHP.
]
---

.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
]

.right-column[
Une **« référence »** en PHP ou plus précisément un **alias** est un moyen d’accéder au contenu d’une même variable en utilisant un autre nom. 

Pour le dire simplement, créer un alias signifie déclarer un autre nom de variable qui va partager la même valeur que la variable de départ.

Notez qu’en PHP le nom d’une variable et son contenu ou sa valeur sont identifiés comme deux choses distinctes par le langage. Cela permet donc de donner plusieurs noms à un même contenu.

Ainsi, lorsque l’on modifie la valeur de l’alias, on modifie également la valeur de la variable de base puisque ces deux éléments partagent la même valeur.

.pull-left[
**Déclaration par référence avec `&`**

```php
function foo(&$var)
{
    $var = 2;
}

$a = 1;
foo($a);

// $a vaut 2 maintenant
var_dump(compact('a'));
```

]
.pull-right[
**Déclaration par reference avec l'instanciation**

```php
$date1 = new DateTime();
$date2 = $date1;
$date3 = clone $date1;
$date2->modify('+1 day');

var_dump(compact('date1', 'date2', 'date3'));
```

`$date1` et `$date2` désignent le même objet en mémoire. Ils sont donc tous les deux au lendemain.
]
]
---


.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
### Propriétés d'une classe
]

.right-column[
**Les propriétés** (Appelé parfois attribut) sont les variables membres de la classe. Ils constituent les caractéristiques de l'objet. En quelque sorte c’est ce qui le définit.

```php
class Voiture
{
  $vitesse = 100;
  $carburant = 'diesel';
}
```
]

---

.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
### Propriétés d'une classe
]

.right-column[
**Les propriétés** (Appelé parfois attribut) sont les variables membres de la classe. Ils constituent les caractéristiques de l'objet. En quelque sorte c’est ce qui le définit.

```php
class Voiture
{
  $vitesse = 100;
  $carburant = 'diesel';
}
```

⚡ Pour déclarer un attribut il faut le précéder par sa **visibilité**.

👀 **La visibilité** d'un attribut indique à partir d'où on peut y avoir accès.
**`public`** est un type de visibilité qui permet à l'attribut d'être accessible de partout (de l'intérieur de la classe dont il est membre comme de l'extérieur).

```php
class Voiture
{
  public $vitesse = 100;
  public $carburant = 'diesel';
}

$mercedes = new Voiture();
var_dump($mercedes);

$mercedes->vitesse = 120;
$mercedes->carburant = 'ethanol';
var_dump($mercedes);
```

On utilise l’opérateur `->` pour avoir accès **aux propriétés et méthodes** de l'objets instancié.
]

---


.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
### Propriétés d'une classe
### Méthodes d'une classe
]
.right-column[
Nous allons également pouvoir déclarer des fonctions à l’intérieur de nos classes. 

Les fonctions définies à l’intérieur d’une classe sont appelées des **méthodes**. Les méthodes de classes vont donc être ce qui défini le comportement de notre objet.

```php
class Voiture
{
  public $vitesse = 100;
  public $carburant = 'diesel';

  public function rouler()
  {
    echo 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h';
  }
}

$mercedes  = new Voiture();
$mercedes->rouler();
```

🔵 Vous remarquez que pour utiliser les propriété de la classe nous utilise le mot clé `$this`. La pseudo-variable `$this` est disponible lorsqu'une méthode est appelée depuis un contexte objet. `$this` est la valeur de l'objet appelant.

**Note :** 
> Par défaut la méthode à une visibilité `public`, on pourrait donc ne pas le mentionner mais par convention il est mieux de le définir.
]
---

.left-column[
### Les classes
#### Déclaration de la classe
#### Instanciation d'une classe
#### Référence d'objet
### Propriétés (attributs) d'une classe
### Méthodes d'une classe
### .red[**🏗 T. P.**]
]

.right-column[

Lors des travaux pratique nous utiliserons le dossier `/societe-r` comme repertoire racine.

Un fichier `index.php` y est présent avec le code que nous avons analysé lors du début de la formation.

- Lancer notre serveur PHP avec `php -S localhost:8000 societe-r/index.php`

Une fois notre serveur prêt, appliquons le POO sur le cas analysé appartenant à la **Société R**

- Définir une nouvelle classe `Employe` et ses propriétés public `id`, `nom`, `prenom`, `age` et `anciennete`

- Faite en sorte que l'employé puisse se présenter avec une méthode `presentation()`

- Définir 3 instances d'employés differentes avec un `id` unique. Chaque instance se presentera avec la methode `presentation()`
  
- Ajouter aleatoirement à chaque instance d'employé entre 5 et 10 ans d'ancienneté.

- Ajouter une classe `Equipe` qui aura une propriété public `nom` et `employes` qui sera un tableau de `Employe`

- Ajouter nos employés instancié dans une Equipe nommé `Dream Team`
]

---

class: middle, center, inverse

# 2. L'encapsulation

---

.left-column[
### Visibilité private
]
.right-column[
Nous avons définit les attributs avec un visibilité `public` et peuvent être modifié par n'importe qui et n'importe où, à un autre endroit dans le code.

Pour remédier à cela on va utiliser le concept **d'encapsulation** afin de protéger certaines données des interférences extérieures en se forçant à utiliser les méthodes définies pour manipuler les données. 

🛡 **L’encapsulation** va ici être très intéressante pour empêcher que certaines propriétés ne soient manipulées depuis l’extérieur de la classe.

Nous allons donc utiliser la visibilité **`private`** au niveau de nos propriétés.

```php
class Voiture
{
  private $vitesse = 100;
  private $carburant = 'diesel';

  ...
}
```

🔵 La propriété `private` ne va être uniquement accessibles depuis l’intérieur de la classe. Pour y avoir acces on utilisera **les accesseurs** et pour modifier **les mutateurs**.
]

---

.left-column[
### Visibilité private
### Les accesseurs et mutateurs
]
.right-column[
.pull-left[
Ayant modifié la visibilité des propriétés de la classe sur la valeur **`private`**. Il n'est plus possible d'accèder directement aux propriété d'un objet instancié en dehors de la classe.

Pour y remedier et pouvoir lire et modifier leurs valeurs, on passe par des méthodes publiques.

Ces méthodes se nommes :
* **accesseurs** (**`getter`**) pour lire leurs valeurs 
* **mutateurs** (**`setter`**) pour modifier leurs valeurs.

Une des conventions souvent utilisée est de reprendre le nom de la propriété pour définir le nom des méthodes, en ajoutant `get` pour les accesseurs et `set` pour les mutateurs. Tout en en utilisant le `camelCase` comme convention de nommage.
]
.pull-right[

```php
class Voiture
{
  private $vitesse = 100;
  private $carburant = 'diesel';

  ...

  public function setVitesse($vitesse)
  {
    $this->vitesse = $vitesse;
  }

  public function getVitesse()
  {
    return $this->vitesse;
  }

  public function setCarburant($carburant)
  {
    $this->carburant = $carburant;
  }

  public function getCarburant()
  {
    return $this->carburant;
  }
}
```
]
]

---

.left-column[
### Visibilité private
### Les accesseurs et mutateurs
]
.right-column[
Pour pouvoir donc modifier les information de notre objet, on passera par les accesseurs et mutateurs, qui sont méthodes déclaré public de l'objet.

```php
$mercedes = new Voiture();
$mercedes->setCarburant('essence');
$mercedes->setVitesse(120);
$mercedes->rouler();
```

Nous pouvons ainsi sécuriser la modification de nos propriétés.

**Exemple :** On ne souhaite modifier le carburant que si la nouvel valeur est parmi "`diesel`", "`essence`" ou "`ethanol`".

```php
class Voiture
{
  ...

  public function setCarburant($carburant)
  {
    if(in_array($carburant, ['diesel', 'essence', 'ethanol'])) {
      $this->carburant = $carburant;
    }
  }
}

$mercedes = new Voiture();
$mercedes->setCarburant('eau');
var_dump($mercedes);
```
]

---

.left-column[
### Visibilité private
### Les accesseurs et mutateurs
### Le constructeur
]
.right-column[
  PHP permet de déclarer des constructeurs pour les classes via la fonction magique `__construct()`. 
  
  Les classes qui possèdent cette méthode l'appellent à chaque initition de nouvel instance d'objet, ce qui est intéressant pour toutes les initialisations dont l'objet a besoin avant d'être utilisé.

  ```php
  class Voiture
  {
    private $vitesse = 100;
    private $carburant = 'diesel';

    public function __construct($vitesse = null, $carburant = null)
    {
      if($vitesse !== null) {
        $this->vitesse = $vitesse;
      }
      
      $this->setCarburant($carburant);
    }

    # getters & setters ...
  }

  $mercedes = new Voiture();
  $scenic = new Voiture(90, 'ethanol');

  var_dump(compact('scenic', 'mercedes'));
  ```
]
---

.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**🏗 T. P.**]
]
.right-column[
  .left[
  Reprenons le projet de la **Société R**. Continuons à améliorer le code en appliquant ce qu'on a appris sur les chapitres précedents

  - Déplacer les classes `Employe` et `Equipe` dans des fichiers php spécifique `Employe.php` et `Equipe.php` et faire un `require_once`  des 2 fichiers.

  - Appliquer le pricinpe d'encapsulation sur les classes `Employe` et `Equipe`

  - Définir les constructeur pour pouvoir aussi y définir directement les valeurs des propriétés lors de l'instanciation

  - Generer automatiquement l'`id` lors de l'instanciation.
  
  - Ajouter 3 nouveaux employés qui seront dans un nouvelle équipe `Rocket Team` en utilisant seulement le constructeur.

  - Sécuriser nos méthodes afin de respecter les regles suivantes :
  
    - Un employé doit avoir par defaut 18 ans et 0 années d'ancienneté.
    
    - Un employé doit avoir entre **0** et **47** années d'anciennetés

    - Un employé doit avoir entre **18 ans** minimum et **65 ans** maximum


  .center[💻💻💻💻]
  ]
]

---

.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**🏗 T. P.**]
  ### Méthodes magiques
]
.right-column[
  Les méthodes magiques sont des méthodes qui, si elles sont déclarées dans une classe, ont une fonction déjà prévue par le langage.

  - **`__construct()` :** Methode appelé lors de la construction de l'objet (instanciation).
  - **`__destruct()` :** Methode appelé lors de la destruction de l'objet (`unset()`).
  - **`__set()` :** Déclenchée lors de l'accès en écriture à une propriété de l'objet.
  - **`__get()` :** Déclenchée lors de l'accès en lecture à une propriété de l'objet.
  - **`__call()` :** Déclenchée lors de l'appel d'une méthode inexistante de la classe (appel non statique).
  - **`__callstatic()` :** Déclenchée lors de l'appel d'une méthode inexistante de la classe (appel statique).
  - **`__isset()` :** Déclenchée si on applique `isset()` à une propriété de l'objet.
  - **`__unset()` :** Déclenchée si on applique `unset()` à une propriété de l'objet.
  - **`__sleep()` :** Exécutée si la fonction `serialize()` est appliquée à l'objet.
  - **`__wakeup()` :** Exécutée si la fonction `unserialize()` est appliquée à l'objet.
  - **`__toString()` :** Appelée lorsque l'on essaie d'afficher directement l'objet : `echo $object.`
  - **`__set_state()` :** Méthode statique lancée lorsque l'on applique la fonction `var_export()` à l'objet
  - **`__clone()` :** Appelés lorsque l'on essaie de cloner l'objet ;
  - **`__autoload()` :** Cette fonction n'est pas une méthode, elle est déclarée dans le scope global et permet d'automatiser les `"include/require"` de classes PHP.
]

---

.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**🏗 T. P.**]
  ### Méthodes magiques
  ### Propriétés et Méthodes static
]
.right-column[
  **Les propriétés et méthodes statiques appartiennent à la classe et non à l'objet**. Par conséquent on ne peut pas y accéder par l'opérateur `->` mais plutôt par l'opérateur de résolution de portée `::` précédé par le nom de la classe dans laquelle ils sont définis.

  Pour **spécifier si une propriété est statique** on déclare le mot clé `static` après la visibilité.
  La valeur d'une propriété statique peut être modifié, tout au long du processus, après l'avoir défini dans la classe.

  Par exemple:

  ```php
  class Voiture
  {
    public static $nbPortes = 5;

    ...

    public static function ajouterPortes()
    {
      self::$nbPortes++;
      return sprintf("Une voiture avec %d portes", self::$nbPortes);
    }
  }

  var_dump([Voiture::$nbPortes, Voiture::ajouterPortes()]);
  ```

  **Note :** On utilise un nouveau mot clé **`self`**. Dans la définition d’une classe, « `$this` » se réfère à l’objet actuel, tandis que « `self` » se réfère à la classe actuelle.
]

---

.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**🏗 T. P.**]
  ### Méthodes magiques
  ### Propriétés et Méthodes static
  ### Constante
]
.right-column[
  Une constante de classe est un élément statique par défaut. Son rôle est le même que celui d'une constante classique déclarée à l'aide de la fonction `define()`. **Sa valeur est inchangée, contrairement à la propriété statique** et elle appartient aussi à la classe dans laquelle est elle déclaré et non à l'objet qui constitue l'instance de classe.

  Pour définir une **constante**, on utilise le mot clé **`const`** suivi du nom de la constante à laquelle on affecte la valeur souhaitée. Par convention l'identifiant de la constante est déclaré en **majuscule**.

  La constante de classe peut être appelée de l'intérieur comme de l'extérieur de la classe grâce à l'opérateur de résolution de portée **`::`**

  ```php
  class Voiture
  {
    const NB_ROUES = 4;

    ...

    public function rouler()
    {
      return 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h avec '.
      self::NB_ROUES.' roues';
    }
  }

  $mercedes = new Voiture();

  var_dump([Voiture::NB_ROUES, $mercedes->rouler()]);
  ```
]

---

.left-column[
  ### Visibilité private
  ### Les accesseurs et mutateurs
  ### Le constructeur
  ### .red[**🏗 T. P.**]
  ### Méthodes magiques
  ### Propriétés et Méthodes static
  ### Constante
  ### .red[**🏗 T. P.**]
]
.right-column[
  Reprenons notre projet fil rouge avec la société R.

  - Ajouter à la classe `Equipe` une constante `NB_EMPLOYE_MAX` qui aura comme valeur 5, qui correspond à la limite du nombre d'employé dans une équipe.

  - Modifier la methode `setEmployes` pour `ajouterEmploye` :
    - Elle pendra en parametre un seul `Employe`.
    - Elle devra verifier que le nombre maximum d'employé n'est pas atteint pour ajouter un employe
    - Etre utilisé au niieau du constructeur avec un `foreach`

  - Ajouter une propriété privé statique `$nbHeuresTravails` dans les classe `Equipe` qui aura comme valeur 0.

  - Ajouter une fonction `travailler` à la classe `Equipe` : 
    - Qui aura en parametre le nombre d'heure `$nbHeures` travaillé par personnes.
    - Elle ajoutera pour chaque `Employe` dans l'équipe, le nombre d'heure dans `$nbHeuresTravails`
    - Faire travailler l'équipe "Rocket Team" 8 heures / employes
    - Faire travailler l'équipe "Dream Team" 7 heures / employes
    - Afficher le nombre d'heures travaillé par les deux équipes via une methode static `getbHeuresTravails`.

  - Pour chaque équipe, afficher le pourcentage d'employé par rapport à la limite max.
]

---

class: middle, center, inverse

# 3. Réutilisation du code et gain de temps

---

.left-column[
  ## Héritage
]
.right-column[
  L'héritage est un concept fondamental de la POO. C'est d'ailleurs l'un des plus importants puisqu'il permet de réutiliser le code d'une classe autant de fois que l'on souhaite tout en ayant la liberté d'en modifier certaines parties.

  **Voyons notre exemple :**

  Nous disposons d'une classe du nom de **`Vehicule`**. Si on crée une classe du nom de **`Voiture`** qui hérite de **`Vehicule`**, alors **`Voiture`** hérite de tous les membres (attributs et méthodes) qui constituent **`Vehicule`**.

  Autrement dit, si on instancie **`Voiture`**, alors tous les attributs et méthodes de **`Vehicule`** peuvent être appelés à partir de l'objet créé (l'instance de **`Voiture`**). Bien entendu, il faut que les membres appelés soient publiques.

  Dans ce cas on dit que **`Vehicule`** est la classe **mère** et **`Voiture`** est la classe **fille**.

  .center[
    ![image](https://1.bp.blogspot.com/-cXfyqZkLIMM/XhGG_h1bdnI/AAAAAAAAIJ4/p9eNBPXn8AMFgwjboNiqqYE4uQVYgIyLACNcBGAsYHQ/s1600/poo.png)
  ]
]

---

.left-column[
  ## Héritage
  ### Mot clé extends
]
.right-column[
  Pour procéder à l'héritage, on fait appel au mot clé **`extends`**, après le nom de la classe comme ceci:

  ```php
  class Vehicule 
  { 
    
  }

  class Voiture extends Vehicule 
  { 
    # codes
  }

  class Camion extends Vehicule 
  { 
    
  }
  ```
  Nos classes **`Voiture`** et **`Camion`** étendent de la classe **`Vehicule`**. 
  
  Elles héritent et vont pouvoir accéder à toutes les méthodes et aux propriétés de la classe `Vehicule` qui n’ont pas été définies avec le mot clé **`private`**.
]

---

.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
]
.right-column[
  Avec la visibilité **`protected`:** l'attribut est accessible seulement de l'intérieur de la classe dont-il est membre ainsi que de l'intérieur des classes fille qui héritent de cette classe.

  ```php
  class Vehicule
  {
      private $vitesse = 120;
      protected $carburant = 'diesel';
  }

  class Voiture extends Vehicule
  {
      # methods, getters & setters
  }

  $mercedes = new Voiture();

  var_dump([
      'carburant' => $mercedes->getCarburant()
      'vitesse' => $mercedes->getVitesse()
  ]);
  # PHP Warning:  Undefined property: Voiture::$vitesse
  ```

  La methode `getVitesse` va avoir une valeur `null` car elle n'a pas accesà la propriété `$vitesse` qui est défini en `private`.
  
  Elle ne peut donc pas etre accessible hors de la classe `Voiture` contraiement à la propriété `$carburant`.
]
---


.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
]
.right-column[
  Déplaçons maintenant les propriétés, constantes, constructeur et méthodes vers la classe `Vehicule`. Ainsi nous pourront voir comment nous les utiliser dans les classes filles `Voiture` et `Camion`.

  ```php
  class Vehicule
  {
    const NB_ROUES = 4;
    protected $vitesse = 100;
    protected $carburant = 'diesel';
    public static $nbPortes = 5;

    public function __construct($vitesse, $carburant)
    {
      $this->vitesse = $vitesse;
      $this->carburant = $carburant;
    }

    public function rouler() { ... }
    public static function ajouterPortes() { ... }
  }

  class Voiture extends Vehicule { }
  class Camion extends Vehicule { }
  ```
]

---

.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
]
.right-column[
  **Instanciation et utilisation :**

  ```php
  $suziki = new Vehicule(120, 'diesel');
  $volvoTruck = new Camion(150, 'essence');
  $mercedes = new Voiture(90, 'ethanol');

  $suziki->rouler();
  $volvoTruck->rouler();
  $mercedes->rouler();

  var_dump(compact('mercedes', 'volvoTruck', 'suziki'));
  ```

  Lorsqu’une **classe fille hérite d’une classe mère**, elle peut accéder et utiliser tous les membres non privés de la classe mère. Nous le savons, mais est-ce qu'une classe fille peut avoir ses propres propriétés et méthodes ? Oui, elle peut en avoir.

  ```php
  class Vehicule { ... }

  class Voiture extends Vehicule
  {
    public function conduire()
    {
      return 'Bonne conduite à '.$this->vitesse.' Km/h  ...';
    }
  }

  $volvoTruck = new Camion(150, 'essence');
  $mercedes = new Voiture(90, 'ethanol');
  var_dump($mercedes->conduire());
  var_dump($volvoTruck->conduire());
  # PHP Fatal error:  Uncaught Error: Call to undefined method Camion::conduire()
   ```
]

---

.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
  ### Mot clé Final
]
.right-column[
  Le mot-clé **`final`** empêche les classes enfants de surcharger une méthode en préfixant la définition avec final. Si la classe elle-même est définie comme **`final`**, elle ne pourra pas être étendue.

  Cela peut être utile si vous souhaitez empêcher explicitement certains développeurs de surcharger certaines méthodes ou d’étendre certaines classes dans le cas d’un projet Open Source par exemple.

  ```php
  class Vehicule 
  { 
    final public function rouler() { ... }
  }

  final class Voiture extends Vehicule
  {

  }

  ```
  * La methode `Vehicule::rouler()` ne pourra pas etre redefini par les classes enfants

  * La classe `Voiture` ne pourra pas étendre à d'autres classes
]
---

.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
  ### Mot clé Final
  ### Trait
]
.right-column[
  PHP ne supporte que l’héritage simple, c’est à dire, une classe fille ne peut hériter que d’une seul classe mère. Donc, que faire si une classe a besoin d’hériter de plusieurs classes mères ? Les **traits** résolvent ce problème.

  Les **traits** sont utilisés pour déclarer les méthodes qui peuvent être utilisées dans plusieurs classes. Les **traits** peuvent avoir des propriétés, méthodes simple et abstraites qui peuvent être utilisées dans plusieurs classes, et les méthodes peuvent avoir n’importe quel modificateur d’accès (`public`, `private`, or `protected`).

  Les traits sont déclarés avec le mot-clé **`trait`** :

  ```php
  trait VitesseTrait
  {
    protected $vitesse = 120;

    public function setVitesse($vitesse)
    {
      $this->vitesse = $vitesse;
    }

    public function getVitesse()
    {
      return $this->vitesse;
    }
  }
  ```
]

---

.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
  ### Mot clé Final
  ### Trait
]
.right-column[
  **Utilisation de trait dans une classe**

  ```php
  class Vehicule
  {
    use vitesseTrait;
    ...
  }

  $vehicule = new Vehicule();
  $vehicule->setVitesse(170);
  ```

  Si d’autres classes ont besoin d’utiliser la propriété **`vitesse`** et ses **accesseurs**, utilisez simplement le trait « `VitesseTrait` » dans ces classes. Cela réduit la duplication du code, car il n’est pas nécessaire de déclarer à nouveau la même propriété et méthodes encore et encore.

  Un trait peut aussi inclure d'autres traits.
  ```php
  trait PropVitesseTrait { 
    protected $vitesse = 120;

    abstract public function setVitesse($vitesse); 
  }

  trait VitesseTrait {
    use PropVitesseTrait;

    public function setVitesse($vitesse) { ... }
    public function getVitesse() { ... }
  }
  ```
]

---

.left-column[
  ## Héritage
  ### Mot clé extends
  ### Visibilité protected
  ### Mot clé Final
  ### Trait
  ### .red[**🏗 T. P.**]
]
.right-column[
Continuons à améliorer l'outils de gestion de la **société R**. En effet elle souhaiterai maintenant gérer **les responsables**. 

**Le responsable** est un employé mais avec des privilèges.

- Ajouter une nouvelle classe `Responsable` qui étendra de `Employe`.

  - Faire en sorte qu'on ne puisse plus étendre de la classe `Responsable`
  - Cette nouvelle classe aura comme nouvelle propriété `equipe` qui sera de type classe `Equipe`.
  - Ajouter à la classe `Equipe` une propriété `responsable`
  - Faire en sorte dans le mutateur de la propriété `Equipe.responsable` d'affecter au responsable l'equipe actuel.
  - Ajouter deux nouveaux reponsables à affecter dans les deux équipes.

- Ajouter des traits pour le code qui est dupliqué.

- Ajouter une methode `supressionEmploye` à la classe `Equipe` qui s'occupera de supprimer un employé de la liste via son `id`

**Note :** Il est possible depuis PHP5 de typer les variable de type classe comme ce qui suit

```php
public function test(ClassName $var) { ... }
```
]

---

class: middle, center, inverse
# 4. Plus de contrôle

---

.left-column[
### Interfaces
#### Déclaration
]
.right-column[
  **Une interface** permet aux utilisateurs de créer des programmes, en spécifiant les méthodes publiques qu’une classe doit implémenter, sans impliquer la complexité et les détails de l’implémentation des méthodes. 
  
  .small[
    💁 En clair une interface permet de spécifier un contrat qu'une classe doit implémenter.
  ]
  
  Une interface est définie comme une classe, mais avec le mot-clé **`interface`**.

  ```php
  interface RoulerInterface
  {
    const NB_ROUES = 4;
    public function rouler();
  }
  ```

  - L’interface **ne contient pas de propriétés ou de variables** comme le cas dans une classe.
  - Les interfaces **peuvent contenir des constantes.** Les constantes d'interfaces fonctionnent exactement comme les constantes de classe.
  - Une interface **se compose de méthodes qui ne contiennent aucune implémentation.** En d'autres termes, toutes les méthodes de l'interface sont des méthodes abstraites.
  - Les interfaces ne peuvent pas être instanciés, ni définir des méthodes privées ou protégées pour une classe et ne peut définir les propriétés d'une classe.


  .small[
    🚨 Notez que toutes les méthodes de l'interface doivent être publiques.
  ]
]

---

.left-column[
  ### Interfaces
  #### Déclaration
  #### Implementation
]
.right-column[

Pour implémenter une interface, l'opérateur `implements` est utilisé. Lorsqu'une classe implémente une interface, elle doit implementer toutes les méthodes de l'interface.

  ```php
  class Vehicule implements RoulerInterface
  {
    # codes 

    final public function rouler()
    {
        return 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h avec '.
        self::NB_ROUES.' roues';
    }
  }
  ```

  La classe implémentant l'interface doit déclarer toutes les méthodes dans l'interface avec une signature compatible.
]

---

.left-column[
  ### Interfaces
  #### Déclaration
  #### Implementation
  #### Implementation multiple
]
.right-column[
  Une classe ne peut hériter que d'une seule classe. Cependant, elle peut implémenter plusieurs interfaces, en séparant chaque interface par une virgule.

  ```php
  interface PorteInterface
  {
    public static function getNbPortes();

  }

  class Vehicule implements RoulerInterface, PorteInterface
  { 
    # codes

    final public function rouler()
    {
        return 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h avec '.
        self::NB_ROUES.' roues';
    }

    public static function getNbPortes() 
    {
        return self::$nbPortes;
    }
  }
  ```

  Ainsi la classe `Vehicule` doit implementer les deux contrats.
]

---

.left-column[
  ### Interfaces
  #### Déclaration
  #### Implementation
  #### Implementation multiple
  #### Héritage, avantage
]
.right-column[
  Comme une classe , une interface peut étendre d'autres interfaces en utilisant le mot-clé `extends`. 
  
  L'exemple suivant montre comment `VehiculeInterface` etend de `PorteInterface`, `RoulerInterface`
  ```php
  interface VehiculeInterface extends PorteInterface, RoulerInterface
  {

  }
  ```

  #### Pourquoi utiliser les interfaces PHP ?
Voici les raisons d'utiliser les interfaces :

- En implémentant une interface, l'appelant de l'objet doit se soucier uniquement de l'interface de l'objet, pas des implémentations des méthodes de l'objet. Par conséquent, vous pouvez modifier les implémentations sans affecter l'appelant de l'interface.
- Une interface permet à des classes non liées d'implémenter le même ensemble de méthodes, quelle que soit leur position dans la hiérarchie d'héritage de classe.
- Une interface vous permet de modéliser plusieurs héritages car une classe peut implémenter plusieurs interfaces.
]

---

.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
]
.right-column[
Dans le projet de la société R pour avoir plus de controle sur le code et les classes, nous allons utiliser les interfaces.

  - Ajouter une interface pour les classes
   - `Employe` avec ses méthodes accesseurs et `presentation()`

   - `Responsable` avec ses méthodes accesseurs (héritage compris)
   
   - `Equipe` avec ses méthodes accesseurs, `travailler()`, `percent()` et `getNbHeuresTravails` .

  - Deplacer les constantes aux niveaux des interfaces. 
  - Ajouter les constantes `AGE_MIN`, `AGE_MAX`, `ANCIENNETE_MIN`, `ANCIENNETE_MAX` puis les utiliser.

  - Déplacer les fichiers de type :
    - `interface` dans un nouveau répertoire `Interface`.

    - `trait` dans un nouveau répertoire `Traits`.

    - `class` dans un nouveau répertoire `Model`.
]

---

.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
  ### Abstraction
  #### Déclaration
]
.right-column[
  **Les classes abstraites** sont très similaires aux interfaces. Ils ne sont pas conçus pour **être instanciés seuls** et fournissent une implémentation de base à partir de laquelle vous pouvez vous étendre.
  
  Toute classe contenant au moins une méthode abstraite doit elle-aussi être abstraite. **Les méthodes définies comme abstraites** déclarent simplement la signature de la méthode ; elles ne peuvent définir son implémentation.

  Lors de l'héritage d'une classe abstraite, toutes les méthodes marquées comme abstraites dans la déclaration de la classe parente doivent être définies par la classe enfant et suivre les règles habituelles d'[héritage](https://www.php.net/manual/fr/language.oop5.inheritance.php) et de [compatibilité de signature](https://www.php.net/manual/fr/language.oop5.basic.php#language.oop.lsp).

  ```php
  abstract class AbstractVehicule
  {
    use VitesseTrait;

    private $dimensions;
    protected $carburant;

    abstract public function rouler();
    public function getDimensions() 
    {
      return $this->dimensions;
    }
  }
  ```

  La classe `AbstractVehicule` est abstraite, ce qui signifie que nous ne pouvons pas l'instancier directement. Pour pouvoir l'utiliser, il faudrait en hériter.
]

---

.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
  ### Abstraction
  #### Déclaration
  #### Héritage
]
.right-column[
  #### Héritage de la classe abstraite

  ```php
  class Voiture extends AbstractVehicule implements VehiculeInterface
  {
    private $dimensions = 90; // !== AbstractVehicule::$vitesse
    protected $carburant = 'diesel';

    public function rouler()
    {
      echo 'Voiture '.$this->carburant.', roulant à '.$this->vitesse.' KM/h avec '.
      self::NB_ROUES.' roues';
    }
  }
  ```

  Vous avez peut-être remarqué que dans la classe `AbstractVehicule` que nous avons déclarée, a une méthode **publique abstraite** appelée `rouler()`. 
  
  Cela nous permet essentiellement de définir la signature d'une méthode qu'une classe enfant doit inclure de la même manière que nous le ferions avec une interface. 
  
  C'est très pratique si vous souhaitez partager certaines fonctionnalités avec vos classes enfants, mais aussi imposer qu'elles incluent leurs propres implémentations de certaines méthodes.
]

---

.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
  ### Abstraction
  ### Abstract Vs Interface
]
.right-column[
  | Classe d'interface | Classe abstraite |
|-----|------|
| ✅ Prend en charge la fonctionnalité d'héritage multiple | ❌ Prend pas en charge les héritages multiples.|
| ❌ Ne contient pas de propriétés | La classe abstraite contient un membre de données.|
| L'interface n'autorise pas les constructeurs. | La classe abstraite prend en charge les constructeurs. |
| ❌ Ne contient que des méthodes abstraites qui font référence à la signature du membre. | ✅ Contient à la fois des methodes abstraits et completes. |
| Puisque tout est supposé être public, une classe d'interface n'a pas de modificateurs d'accès par défaut.  | Une classe abstraite peut contenir des modificateurs d'accès dans des sous-titres, des fonctions et des propriétés. |
| Tout membre d'une interface ne peut pas être statique. | Seul un membre complet de la classe abstraite peut être statique. |
]

---

.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
  ### Abstraction
  ### Abstract Vs Interface
  ### .red[**🏗 T. P.**]
]
.right-column[
  Pour mieux assimiler l'abstraction nous allons concevoir un programme a partir de module UML suivant:

  [![](https://mermaid.ink/img/pako:eNq1k8FuwyAMhl8FsUunJlK7Y7Ttsm7nabsiVS64KVIClQNSoy7vPkKSNk2m3sYJff7Bv7E5c2kV8ozLAqpqoyEnKIURhoUVGfu02rinDTt3sF0pC4id2AtbTWF9C5dsZ32OtGhj6pREjaofx4rt1tlvR9rki543g4MPSyWy5580ZV8oHZi8wFnkDUneYsFXiRGcpelr2K-Tddj3ZYxlGXuIfrSa0qFmicYR3kaX8UzlwGnJpC2PDj1dq46yVgW7yhHIIPW0B4lDcXPBEUmXGBLNJPceb9yjy-NcmtRVVgDlwd0EWpP71vOA_2pBSyfGWzSz2szNdP24zks3GAS1Nf-VEYhGCe-O1OWp-uGJR-PiCS-RStAq_Id4meDugCUKnoWtwj34wgkuTBOk_qjA4bvSzhLP9lBUmHDwIW9tJM8ceRxE_bfqVc0vHHwHTw)](https://mermaid.live/edit#pako:eNq1k8FuwyAMhl8FsUunJlK7Y7Ttsm7nabsiVS64KVIClQNSoy7vPkKSNk2m3sYJff7Bv7E5c2kV8ozLAqpqoyEnKIURhoUVGfu02rinDTt3sF0pC4id2AtbTWF9C5dsZ32OtGhj6pREjaofx4rt1tlvR9rki543g4MPSyWy5580ZV8oHZi8wFnkDUneYsFXiRGcpelr2K-Tddj3ZYxlGXuIfrSa0qFmicYR3kaX8UzlwGnJpC2PDj1dq46yVgW7yhHIIPW0B4lDcXPBEUmXGBLNJPceb9yjy-NcmtRVVgDlwd0EWpP71vOA_2pBSyfGWzSz2szNdP24zks3GAS1Nf-VEYhGCe-O1OWp-uGJR-PiCS-RStAq_Id4meDugCUKnoWtwj34wgkuTBOk_qjA4bvSzhLP9lBUmHDwIW9tJM8ceRxE_bfqVc0vHHwHTw)
]


---

.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
  ### Abstraction
  ### Abstract Vs Interface
  ### .red[**🏗 T. P.**]
]
.right-column[
1. Définir chaque classe, puis les propriété, ensuite les accesseurs, mutateurs et les constrcuteurs.

2. La fonction magique **`Point2D::__toString`** permet d’afficher les propriétés sous la forme : **"Point(x =10,y =3)"**

3. La méthode **`Point2D::bouger`** prenant en paramètre les deux entiers `dx` et `dy` et qui permet de translater le point vers le point  `x + dx` ,`y + dy`.

4. Lors de l'instanciation d’une Forme, son id est incrémenté selon le nombre de Formes instanciés.

5. Définir la méthode **`Rectangle::surface`** qui renvoie la surface d’un objet rectangle : **largeur x longueur**.

6. Définir la méthode **`Rectangle::perimetre`** qui renvoie le périmètre d’un objet rectangle : **2 x (largeur + longueur)**.

7. Définir la méthode **`Cercle::surface`** qui renvoie la surface d’un objet cercle : **π x r²**

8. Définir la méthode **`Cercle::perimetre`** qui renvoie le périmètre d’un objet rectangle : **2 x π x r**

9. Chaque methode __toString affichera `{ NomClasse: id, ... liste des propriétés }` 
  
  _**Exemple :**_ `{ Rectangle: 1, Centre: Point(x=2, y=3), Largeur: 1, Longueur: 2, surface: 2, perimetre: 6 }`
10. Instancier 3 formes : cercle(x=1, y=3, rayon=2), rectangle(x=2, y=3, longueur=3, largeur=2), carre(x=4, y=6, longueur=3)

11. Appliquer une déplacement du cercle par (dx=2,dy=1), rectangle (dx=3, dy=4), carre (dx=1, y=5)

]
---

.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
  ### Abstraction
  ### Abstract Vs Interface
  ### .red[**🏗 T. P.**]
  ### Polymorphisme
  #### Qu'est-ce que c'est ?
]
.right-column[
  **Le polymorphisme** est un outil puissant et fondamental dans la programmation orientée objet. Il décrit un modèle dans lequel **les classes ont des fonctionnalités différentes tout en partageant une interface commune.**

  La beauté du polymorphisme réside dans le fait que le code travaillant avec les différentes classes n'a **pas besoin de savoir quelle classe il utilise**, car elles sont toutes utilisées de la même manière.

  Dans le monde de la programmation, le polymorphisme est utilisé pour rendre les applications plus modulaires et extensibles. 
  
  Au lieu d'instructions conditionnelles compliquées décrivant différents plans d'action, vous créez des objets interchangeables que vous sélectionnez en fonction de vos besoins. C'est l'objectif de base du polymorphisme.
]

---

.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
  ### Abstraction
  ### Abstract Vs Interface
  ### .red[**🏗 T. P.**]
  ### Polymorphisme
  #### Qu'est-ce que c'est ?
  #### Exemple
]
.right-column[
```php
interface TransportInterface {
  public function voyager(Voyageur $voyageur);
}

class Voiture implements TransportInterface {
  public function voyager(Voyageur $voyageur) {
    return $voyageur->getNom().' voyage en voiture' ;
  }
}

class Avion implements TransportInterface {
  public function voyager(Voyageur $voyageur) {
    return $voyageur->getNom().' voyage en avion' ;
  }
}

class Voyageur {
  private $nom;
  public function __construct($nom){
      $this->nom = $nom;
  }

  public function getNom(){
      return $this->nom;
  }

  public function voyager(TransportInterface $transport){
      return $transport->voyager($this);
  }
}
```
]

---
.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
  ### Abstraction
  ### Abstract Vs Interface
  ### .red[**🏗 T. P.**]
  ### Polymorphisme
  #### Qu'est-ce que c'est ?
  #### Exemple
]
.right-column[
```php
# cours/index.php

$dany = new Voyageur('Daniel');

$voiture = new Voiture();
var_dump($dany->voyager($voiture));
# string(24) "Daniel voyage en voiture"

$avion = new Avion();
var_dump($dany->voyager($avion));
# string(22) "Daniel voyage en avion"
```

Cet exemple illustre bien le concept de polymorphisme via les interfaces. 

🙋 Un voyageur (`$dany`) à la choix entre deux transport : voiture 🚙 ou avion 🛫. 

→ Quel que soit le transport, l’action sera appelée par la même méthode : dans notre cas, `voyager()`. 

📌 La méthode ne se soucie pas des détails de chaque voyage. En effet chaque type de transport devient une classe qui définit les données de du voyage. 

On pourra ainsi ajouter autant de type de transport que l'on souhaite si l'interface `TransportInterface` y est implementé.
]

---

.left-column[
  ### Interfaces
  ### .red[**🏗 T. P.**]
  ### Abstraction
  ### Abstract Vs Interface
  ### .red[**🏗 T. P.**]
  ### Polymorphisme
  ### .red[**🏗 T. P.**]
]
.right-column[
**La société R** pense à l'éducation des jeunes et souhaite mettre en place la gestion des stagiaires.

Ainsi les enfants stagiaire ne seront pas consideré comme des employéss mais pourront tout de meme travailler.

- Ajoutons une nouvelle classe **`Stagiaire`** qui n'etendra pas de la classe **`Employe`**

  - Le stagiaire aura un id, nom, prenom, age (entre 12 et 18 ans) (Vous pouvez utiliser les traits)

- Ajouter un interface **`TravailleurInterface`** qui aura une fonction `travailler()` qui retournera un entier representant le nombre d'heures travaillés.

- Implementer cette interface aux classes `Employe` et `Stagiaire`. Un stagiaire travail entre 5 et 7 heures et un employé entre 6 et 9.

- Définir une méthode `faireTravailler` à la classe `Responsable` qui pourra faire travailler un objet qui implemente `TravailleurInterface`.

- Une équipe aura dorenavant des `travailleurs` au lieu d'`employes`.
 
- Modifier la methode `Equipe::travailler` pour demander au responsable de faire travailler les membres de son équipe.

- Un Stagiaire fera parti d'une équipe. Ajouter donc 5 nouveaux stagiaires repartie dans les deux équipe.

- Faire en sorte que chaque responsable d'équipe fasse travailler son équipe.
]

---

.left-column[
  ### Namespace
]
.right-column[
Dans ce tutoriel nous allons apprendre les espaces de noms en PHP. En PHP, lorsque nous créons de grandes applications ou lorsque nous intégrons des applications/bibliothèques tierces, il peut y avoir des risques de conflits entre les noms de classes, les noms de fonctions. Donc pour éviter ces problèmes, les « espaces de noms » en PHP fournissent un moyen de regrouper les classes, interfaces, fonctions et constantes.

Pour définir un namespace, rien de plus simple. On va utiliser le mot clé `namespace` juste avant la définition de la classe :

```php
# Interfaces/Vehicule.php
namespace Interfaces;
interface Vehicule {}

# Classes/Vehicule.php
require 'Interfaces/Vehicule.php';
namespace Classes;
use Interfaces\Vehicule as VehiculeInterface;
class Vehicule implements VehiculeInterface {}
```

L’espace de noms est utilisé pour éviter des conflits et introduire plus de flexibilité et d’organisation dans le code. Tout comme les répertoires, l’espace de noms peut contenir une hiérarchie connue sous le nom de sous-espaces. PHP utilise la barre oblique inverse « `\` » comme séparateur d’espace de noms.
]
---

.left-column[
  ### Namespace
]
.right-column[
**Conclusion**

- Un espace de noms peut être considéré comme un concept abstrait. Il permet de redéclarer les mêmes fonctions/classes/interfaces dans un espace de noms séparé sans obtenir l’erreur fatale.

- Un espace de noms est un bloc de code hiérarchiquement étiqueté contenant un code PHP régulier.

- Un espace de noms peut contenir du code PHP valide.

- Un espace de noms concerne les types de code suivants : classes (y compris les classes abstraits et les traits), interfaces, fonctions et constantes.

- Les espaces de noms sont déclarés en utilisant le mot-clé **`namespace`**.
]
---

.left-column[
  ### Namespace
  ### .red[**🏗 T. P.**]
]
.right-column[
- Ajouter un répertoires `Classes/`, `Traits/`, `Abstracts/` et `Interfaces/` pour stocker nos différentes classes.

- Réorganiser les classes, traits, abstracts et interfaces dans les dossiers respectifs  

- Pour chaque fichier, y définir les namespace 

  - **`namespace Classes;`**

  - **`namespace Interfaces`**

  - **`namespace Traits`**

  - **`namespace Abstracts`**

- Faire une `require_once` de chaque fichier dans `index.php`

- Utiliser le mot clé `use` pour resoudre les erreurs de classe indefini dans chaque fichier
]

---

.left-column[
  ### Namespace
  ### .red[**🏗 T. P.**]
  ### Les exceptions
]
.right-column[
  PHP a introduit une nouvelle façon de gérer la plupart des erreurs en utilisant ce qu’on appelle les **exceptions**. Cette nouvelle façon de procéder se base sur le PHP orienté objet et sur la classe **`\Exception`**.

  L’idée ici va être de créer ou de **« lancer (`throw`)»** un nouvel objet `\Exception` lorsqu’une erreur spécifique est détectée. Dès qu’une exception est lancée, le script va suspendre son exécution et le PHP va chercher un endroit dans le script où l’exception va être **« attrapée (`catch`) ».**

  Utiliser des exceptions va nous permettre de gérer les erreurs de manière plus fluide et de personnaliser la façon dont un script doit gérer certaines erreurs.

  Notez que quasiment tous les langages serveurs utilisent le concept d’exceptions pour prendre en charge les erreurs car c’est la meilleure façon de procéder à ce jour.

  #### Comment utiliser les excepetions

  Une exception peut être lancée `throw` et attrapée `catch` dans PHP. Le code devra être entouré d'un bloc `try` pour faciliter la saisie d'une exception potentielle.
]
---

.left-column[
  ### Namespace
  ### .red[**🏗 T. P.**]
  ### Les exceptions
]
.right-column[
On va ameliorer l'accesseur `setCarburant` de notre classe `Vehicule`, en utilisant la gestions des erreurs via les exceptions.

```php
class Voiture
{
  ...

  public function setCarburant($carburant)
  {
    if(!in_array($carburant, ['diesel', 'essence', 'ethanol'])) {
      throw new \Exception("La voiture ne supporte pas le carburant ".$carbrant, 1);
    }

    $this->carburant = $carburant;
  }
}

try {
  $voiture = new Voiture();
  $voiture->setCarburant('eau');
} catch (\Exception $e) {
  echo 'Message d\'erreur : ' .$e->getMessage();
  echo 'Code d\'erreur : ' .$e->getCode();
  echo $e->getFile();
}
```

L’idée derrière les exceptions va être d’anticiper les situations problématiques (situations qui vont pouvoir causer une erreur) et de lancer une exception si la situation est rencontrée.
]

---

.left-column[
  ### Namespace
  ### .red[**🏗 T. P.**]
  ### Les exceptions
  ### .red[**🏗 T. P.**]
]
.right-column[
  Nous allons appliquer la gestion d'erreur sur notre application de la société R.
  1. Ajouter une nouveau repertoire `Exceptions`
  
  2. Y définir une nouvelle classe `RException` dans le namespace `Exceptions`
  
  3. Dans la methode `Employe::setAnciennete` gerer les cas de plus de 40 ans
  
  4. Dans la methode `Employe::setAge` gerer les cas des personnes n'entrant pas dans la tranche d'age de 18 - 65 ans.
  
  5. Utiliser un `try-catch` lors du set de l'age ou de l'anciennété (present dans le constructeur)

  6. Dans la methode `Employe::incrementeEmploye` gerer par une exception lorsque le quota max est atteint
]

---

.left-column[
  ### Classe anonyme
]
.right-column[
Lors de la création d'un nouvel objet, une classe est d'abord définie, puis un objet de cette classe est créé. En PHP 7, une classe dite anonyme a été introduite pour permettre aux classes d'être définies sans nom à la volée.

On définit une classe anonyme en utilisant le mot-clé `new class`.

```php
  $obj1 = new class() {};

  $obj2 = new class($x, $y) {
     private $x;
     private $y;
     public function __construct($x, $y) {
           $this->x = $x;
           $this->y = $y;
     }
  };
```

Elles peuvent prendre des arguments via le constructeur, hériter d’autres classes, implémenter des interfaces, et utiliser des traits comme dans une classe normale.

  ```php
    $classX = new class extends Avion implements Transport {
      use VitesseTrait;
    };

    $classX->setVitesse(120);
    var_dump($classX);
  ```
  
  Les objets instanciés par une classe anonyme ne sont pas différentes de celle des objets instanciés par une classe normale.
]

---

.left-column[
  ### Classe anonyme
  ### Methode anonyme
]
.right-column[
  **Les fonctions anonymes**, qu’on appelle également **des closures**, sont des fonctions qui ne possèdent pas de nom.

```php
  $squ = function(float $x){
      return $x**2;
  };

  var_dump($squ(3));
  # int(9)
```
Lorsqu’on assigne une fonction anonyme en valeur de variable, notre variable va automatiquement devenir un objet de la classe prédéfinie Closure.

Les classes anonymes vont être utiles dans le cas ou des objets simples et uniques ont besoin d’être créés à la volée.

Créer des classes anonymes va donc principalement nous faire gagner du temps et améliorer in-fine la clarté de notre code.
]
---

.left-column[
  ### Classe anonyme
  ### Methode anonyme
  ### Reflection de classe
  #### Qu'est-ce que c'est ?
]
.right-column[
**La réflexion** dans le développement logiciel est quelque chose qui est utilisé assez souvent.

**La réflexion** est l'endroit où un objet est capable de s'examiner de manière introspective pour vous informer de ses méthodes et propriétés au moment de l'exécution.

À première vue, cela ne semble pas être quelque chose qui serait particulièrement utile. Cependant, `Reflection` est en fait un aspect vraiment intéressant du développement logiciel et c'est quelque chose que vous aborderez probablement souvent.

L'une des façons les plus courantes d'utiliser Reflection consiste à déboguer votre code. Vous avez probablement utilisé les fonctions `get_class()` et `get_class_methods()` lorsque vous travaillez avec un objet dont le nom est ambigu. La possibilité d'obtenir le type ou les méthodes d'un objet lorsque vous ne savez pas de quel type d'objet il s'agit est la réflexion.

Une autre utilisation courante de `Reflection` est la création de documentation. Il serait extrêmement laborieux d'écrire une documentation sur chaque méthode de chaque classe d'un grand framework ou d'une application. Au lieu de cela, `Reflection` peut générer automatiquement la documentation pour vous. Pour ce faire, il inspecte chaque méthode, constructeur et classe pour déterminer ce qui entre et ce qui sort.

Inspectons la classe `Voiture`.
```php

$mercedes = new Voiture(90, 'ethanol');
$reflection = new \ReflectionClass($mercedes);
```
]
---

.left-column[
  ### Classe anonyme
  ### Methode anonyme
  ### Reflection de classe
  #### Qu'est-ce que c'est ?
  #### Cas d'utilisation
]
.right-column[
#### Obtenir le nom de la classe
```php
var_dump($reflection->getName());
# App\Model\Voiture

var_dump($reflection->getShortName());
# Voiture

var_dump($reflection->getNamespaceName());
# App\Model
```

#### Obtenir la classe parent
```php
$parent = $reflection->getParentClass();
var_dump($parent->getName());
# App\Model\Vehicule
```

#### Obtenir les interfaces
```php
$interfaces = $reflection->getInterfaceNames();
var_dump(interfaces);
/* array(3) {
[0] => string(28) "App\Interfaces\VehiculeInterface"
[1] => string(26) "App\Interfaces\TransportInterface"
} */
```

d'autres possibilités à voir sur https://www.php.net/manual/fr/class.reflectionclass.php
]
---

class: middle, center, inverse

## 5. L'auto-chargement des classes

---

.left-column[
  ### L'autoloader
]
.right-column[
  Jusqu'ici, nous avons défini les classes et nous les avons instancié pour nous servir des objets qui en sont les instances, et tout ceci dans la même page PHP. Bien que ça marche, ce n'est cependant pas une méthode de travail propre et organisée.

  **On conseille donc toujours de séparer les classes dans différents fichiers. **

  Le problème c'est que l'on est obligé ensuite de faire beaucoup de **`require`** pour charger nos différentes classes. Heureusement l'**autoloading** nous permet de remédier à ce problème en incluant les classes dès que l'on en a besoin.

  Le principe de base est de créer une fonction **`__autoload`** qui permettra à PHP de savoir comment include nos classes.

  ```php
  function __autoload($className){
      require_once './' . str_replace('\\', '/', $className) . '.php';
  }
  ```

  Le problème de cette méthode c'est qu'on ne peut pas avoir plusieurs fois la même fonction et on ne peut donc pas créer plusieurs autoloader.
]

---

.left-column[
  ### L'autoloader
]
.right-column[
  Heureusement, il est possible de créer et d'enregistrer des fonctions manuellement en utilisant **`spl_autoload_register`**

  ```php
  # Autoloader.php
  class Autoloader
  {
    /** Enregistre notre autoloader */
    public static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param string $class Le nom de la classe à charger
     */
    public static function autoload($className)
    {
        require_once str_replace('\\', '/', $className) . '.php';
    }
  }
  ```

  On utilise ici une classe avec des méthodes statique pour une meilleur organisation. On peut alors lancer notre autoloader simplement.

  ```php
  # index.php
  require 'Autoloader.php';
  Autoloader::register();
  ```
]


---

.left-column[
  ### L'autoloader
  ### Composer
  #### Gestionnaire de dépendence ?
]
.right-column[
  <img src="https://getcomposer.org/img/logo-composer-transparent5.png" height="100" style="display:block; margin: 0 auto">

  Composer est un outil mis en place pour la communauté des développeurs de PHP. A l’image de « `npm` » pour nodejs ou « `bundler` » pour ruby, il sert de gestionnaire de dépendance entre applications et librairies.

  **Qu'est-ce qu'un gestionnaire de dépendence ?**

  Le gestionnaire de dépendances est un outil qui peut être utilisé pour gérer les dépendances d’un projet. Le gestionnaire de dépendances est un excellent concept. C’est principalement un outil pour installer, désinstaller et mettre à jour ces dépendances. Grosso-modo, un ensemble de mécanismes et permet également la création de packages (vos projets) qui peuvent être distribués. 

  De façon plus précise, Composer permet de gérer pour chaque projet, la liste des modules et bibliothèques nécessaires à son fonctionnement ainsi que leurs versions. Il est utilisable via la console en ligne de commande. De plus, il permet de mettre en place un système d’autoload pour les bibliothèques compatibles.

  url : https://getcomposer.org/
]

---

.left-column[
  ### L'autoloader
  ### Composer
  #### Gestionnaire de dépendence ?
  #### Installation
]
.right-column[
### Installer composer

Vous pouvez installer composer sur n'importe quel système d'exploitation.

**Via curl**
```shell
curl -sS https://getcomposer.org/installer | php -- \
  --install-dir=/usr/local/bin \
  --filename=composer
```

**Via getcomposer.org**

Sinon vous pouvez aussi passer par la page de download de composer : https://getcomposer.org/download/

**Mettre à jour composer**
```sh
composer self-update
# Upgrading to version 2.3.4 (stable channel).
   
# Use composer self-update --rollback to return to version 2.2.7
```
]

---

.left-column[
  ### L'autoloader
  ### Composer
  #### Gestionnaire de dépendence ?
  #### Installation
  #### Implementation
]
.right-column[

Pour initialiser `composer` dans un projet, c'est avec la commande suivante :
```bash
composer init
```

Cette commande, vous demande certaines informations concernant votre projet et génère le répertoire `vendor`, `src` et un fichier `composer.json` contenant les différentes configurations de notre projet. Vous pouvez ouvrir ce dernier et voir, c'est le même contenu que vous venez de remplir.

```json
{
    "name": "formation/composer",
    "description": "test",
    "type": "project",
    "autoload": {
        "psr-4": {
            "Formation\\Composer\\": "src/"
        }
    },
    "authors": [
        {
            "name": "Fahari Hamada Sidi",
            "email": "mkl.devops@gmail.com"
        }
    ],
    "minimum-stability": "stable",
    "require": {}
}
```

C'est dans ce fichier que nous allons définir nos dépendances et leurs différentes versions, voyons tout de suite donc comment ajouter une dépendance à notre projet.
]

---

.left-column[
  ### L'autoloader
  ### Composer
  #### Gestionnaire de dépendence ?
  #### Installation
  #### Implementation
  #### Autoload
]
.right-column[

Nous avions precedement fait notre propre autoloader, mais composer peut en generer un aussi, qui comprendra tout aussi les namespaces des composant que l'on pourant installer.
Ajouter une section `autoload` au fichier `composer.json`
  ```json
  "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    },
  ```

  Apres avoir ajouter notre section d'autoload vers notre répertoire `src`, génerer le fichier autoload composer via la commande

  ```bash
  composer dump-autoload
  ```

  Inclure à notre fichier index.php l'inclusion de l'autoloader genéré par composer
  ```php
    # index.php
    require_once 'vendor/autoload.php';

  ```
]

---

.left-column[
  ### L'autoloader
  ### Composer
  #### Gestionnaire de dépendence ?
  #### Installation
  #### Implementation
  #### Autoload
  #### Gestion de packages
]
.right-column[
  Le site https://packagist.org/ permet d’enregistrer vos propres packages mais aussi de chercher tous les packages disponible, avec une page complète qui liste les différentes versions du packages.

  #### Installer une package

  ```bash
  composer require symfony/http-client symfony/var-dumper
  ```

  Après l’exécution de la commande, votre projet contiendra un nouveau fichier `composer.lock`

  #### Mettre à jour les packages installés
  Vous devez savoir comment mettre à jour vos paquets. Cela peut se faire de deux manières :

  * **Mise à jour universelle**. Vérifie et installe les mises à jour de tous vos paquets et dépendances en même temps :
  ```bash
  composer update
  ```

  * **Mise à jour spécifique au paquet.** Vérifier les mises à jour d’un ou de plusieurs paquets spécifiques :
  ```bash
  composer update symfony/http-client symfony/*
  ```


  #### Supprimer les packages installés
  ```bash
  composer remove symfony/http-client symfony/var-dumper
  ```
]
---

class: middle, center, inverse

## 6. Le typage de données

---

.left-column[
  ### PHP Doc
]
.right-column[
  C'est une transposition de Javadoc au langage PHP. Il s'agit d'un standard formalisé pour commenter le code PHP. Il permet aussi à certains IDE de connaître le type des variables et de lever d'autres ambiguïtés dues au typage faible, améliorant ainsi la complétion de code

  ```php
  class Vehicule
  {
    ...

    /**
     * @var int Vitesse du véhicule
     */
    protected $vitesse = 100;

    /**
     * @param int $vitesse Vitesse du véhicule
     * @param string $carburant Carburant du véhicule
     */
    public function __construct($vitesse, $carburant)
    { ... }

    /**
     * @return int Vitesse du véhicule
   */
    public function getVitesse()
    { ...  }
    ...
  }
  ```
]
---

.left-column[
  ### PHP Doc
  ### Typage de données
  #### Pourquoi ?
]
.right-column[
  PHP est un langage typé dynamiquement. Lorsque vous définissez une fonction , vous n'avez pas besoin de déclarer des types pour les paramètres . Par example:

  ```php
  function add($x, $y) {
      return $x + $y;
  }

  var_dump(add(1,2)); # int(3)
  var_dump(add(1.0,2.3)); # int(3.3)
  var_dump(add(1.0,'3')); # int(4)

  var_dump(add('un','deux')); 
  # PHP Fatal error: Uncaught TypeError: Unsupported operand types: string + string
  ```

  Pour appliquer les types pour les paramètres de fonction et la valeur de retour, vous pouvez utiliser des indications de type.
  ```php
  function add(int $x, int $y): int {
      return $x + $y;
  }

  var_dump(add(1,2)); # int(3)
  var_dump(add(1.0,2.3)); # int(3)
  var_dump(add(1.0,'3')); # int(4)

  var_dump(add('un','deux')); 
  # PHP Fatal error:  Uncaught TypeError: 
  # add(): Argument #1 ($x) must be of type int, string given
  ```
]
---

.left-column[
  ### PHP Doc
  ### Typage de données
  #### Pourquoi ?
  #### Utilisation
]
.right-column[
  Si vous souhaitez utiliser cette fonctionnalité, je vous conseille de **toujours activer** le **`declare(strict_types=1);`** dans chacun de vos fichiers `.php`.

  ```php
  declare(strict_types=1);

  class Vehicule
  {
    private ?int $vitesse = null;
    private ?string $carburant = null;
    public function rouler(?int $hour) : int
    {
      return $hour ? $hour * $vitesse : null;
    }
  }

  class Conducteur
  {
    private ?Vehicule $vehicule = null;
    public function __construct(Vehicule $vehicule)
    {
      $this->vehicule = $vehicule;
    }
  }
  ```
]

---

.left-column[
  ### PHP Doc
  ### Typage de données
  ### Type callable
]
.right-column[
```php
  $classX = new class extends Avion implements Transport {
    use VitesseTrait;
  };

  $classX->setVitesse(120);
  var_dump($classX);
```
]
---

.left-column[
  ### PHP Doc
  ### Typage de données
  ### Type callable
  ### Types d'Union
]
.right-column[
  Vous pouvez utiliser plusieurs types d'entrée pour la même fonction au lieu d'un seul, ce qui permet un plus grand degré de réutilisation du code.
  ```php
  class Vehicule
  {
    private int|float|null $vitesse = null;

    public function setVitesse(int|float|null $vitesse) : self
    {
      $vitesse = $vitesse;
      return $this;
    }
  }
  ```

  Vous pouvez aussi utiliser des classes et interfaces définies
  
  ```php
  class Conducteur 
  {
    public function conduire(Voiture|Camion $vehicule) 
    {
      ...
    }  
  }
  ```
]

---

.left-column[
  ### PHP Doc
  ### Typage de données
  ### Type callable
  ### Types d'Union
  ### Arguments nommées
]
.right-column[
  **Les arguments nommés** vous donnent plus de souplesse pour appeler les fonctions. Jusqu'à présent, vous deviez appeler une fonction et passer chaque argument dans l'ordre spécifié par la fonction.

  Un exemple d'utilisation avec la methode `number_format` : https://www.php.net/manual/en/function.number-format.php

  ```php
  // avec php 7.4, si je veux modifier le separateur des centaines
  number_format(1063, 0, ".", " ");
  ```

  Les arguments nommés vous permettent de définir un nom pour chaque paramètre. Et maintenant, ils peuvent être rappelés dans l'ordre ou le desordre, comme décrit ci-dessous : 
  ```php
  // En utilisant le nom des arguments
  number_format(num: 1063, decimals: 0, decimal_separator: ".", thousands_separator: " ");

  // En utilisant le nom des arguments sur ceux que modifié
  number_format(num: 1063, thousands_separator: " ");
  ```
]

---

.left-column[
  ### PHP Doc
  ### Typage de données
  ### Type callable
  ### Types d'Union
  ### Arguments nommées
  ### .red[**🏗 T. P.**]
]
.right-column[
### Implementer composer

Avec tous ce que l'on a appris et vu sur l'autoloader, composer et le typage de données, nous allons l'appliquer sur le projet de la société R.

- Installer composer et definir l'autoloader
- Deplacer les classes dans le repertoire `/src`
- Redefinir le bon namespace de chaque classe / interfaces, ... avec `App`
- Appliqué le typage le plus strict sur toute nos classes
- Installer le package `php-cs-fixer` via https://packagist.org/packages/friendsofphp/php-cs-fixer

```sh
# installer
composer require friendsofphp/php-cs-fixer --dev

# utiliser
./vendor/bin/php-cs-fixer fix --allow-risky=yes
```
- Installer le package `php-stan` via https://packagist.org/packages/phpstan/phpstan

```sh
# installer
composer require phpstan/phpstan --dev

# utiliser
./vendor/bin/phpstan analyse -l 9 src
```
]

---

class: middle, center, inverse

## PHP 8

PHP 8 a été officiellement mis à la disposition du public le 26 novembre 2020 !

### Cette nouvelle mise à jour majeure apporte tout un tas d’optimisations et de puissantes fonctionnalités au langage. Ce sont des changements très intéressants qui nous permettront d’écrire un meilleur code et de construire des applications plus puissantes.

---

.left-column[
  ### Promotion de propriétés de constructeur
]
.right-column[
  Cette fonction devrait vous aider à accélérer votre processus de développement et à réduire les erreurs. En effet moins de code redondant pour définir et initialiser les propriétés.

  ```php
  # with php 7.4
  class Vehicule 
  {
    private ?int $vitesse = 120,
    protected ?string $carburant = 'essence'

    public function __construct(?int $vitesse, ?string $carburant)
    {
      $this->vitesse = $vitesse;
      $this->carburant = $carburant;
    }
  }

  # with php 8
  class Vehicule 
  {
    public function __construct(
      private ?int $vitesse = 120,
      protected ?string $carburant = 'essence'
    ) { }
  }
  ```
]

---

.left-column[
  ### Promotion de propriétés de constructeur
  ### visibilité pour les constantes
]
.right-column[


  Depuis la version 7.1 de PHP, on peut définir une visibilité pour nos constantes (public, protected ou private).

  Par défaut (si rien n’est précisé), une constante sera considérée comme publique et on pourra donc y accéder depuis l’intérieur et depuis l’extérieur de la classe dans laquelle elle a été définie.

  ```php
  interface Vehicule
  {
    # accessible uniquement dans la classe/interface déclaré
    private const CONST_PRIVATE = 'private';

    # accessible uniquement dans la classe/interface déclaré et ceux qui héritent
    protected const CONST_PROTECTED = 'protected';
    
    # Accessible de partout
    public const CONST_PUBLIC = 'public';
    
    # Accessible de partout
    const CONST_DEFAULT_PUBLIC = 'default_public';

    # Accessible de partout, mais ne peut etre redefini dans les classes qui héritent
    final public const CONST_PUBLIC = 'public';
    
  }


  ```
]

---

.left-column[
  ### Promotion de propriétés de constructeur
  ### visibilité pour les constantes
  ### Fonction str_contains
]
.right-column[
  Cette nouvelle fonction plutôt sympathique renvoie une valeur booléenne (vrai/faux) si une chaîne est trouvée dans une autre chaîne. Il faut deux arguments, la chaîne de caractères à rechercher et la chaîne de caractères à rechercher.
  ```php
  str_contains('php8', '8'); // true

  str_contains('php8', 'wordpress'); // false
  ```

  Pour des filtres de chaînes encore plus utiles, découvrez ces nouvelles fonctionnalités :

  ```php
  str_starts_with('haystack', 'hay'); // true

  str_ends_with('haystack', 'stack'); // true
  ```
]

---

.left-column[
  ### Promotion de propriétés de constructeur
  ### visibilité pour les constantes
  ### Fonction str_contains
  ### Null safe
]
.right-column[

  Dans l’évaluation de null-safe `$a?->value`, le second opérateur n’est évalué que si le premier opérateur n’évalue pas à null. Si un opérateur d’une chaîne est évalué à null, l’exécution de la chaîne entière s’arrête et est évaluée à null

**Exemple**
  ```php
  class Category {
    public __construct(public string $name) {}
  }

  class Vehicule
  {
    public ?Category $category = null;
  }

  $mercedes = new Voiture();
  var_dump($mercedes->category?->name); // affiche null

  $berline = new Category(name: 'Berline');
  $mercedes->category = $berline;
  var_dump($mercedes->category?->name); // affiche "Berline"
  ```
]

---

.left-column[
  ### Promotion de propriétés de constructeur
  ### visibilité pour les constantes
  ### Fonction str_contains
  ### Null safe
  ### Énumérations
]
.right-column[
  Le support intégré pour les énumérations est disponible depuis la version PHP 8.1
  ```php
  enum Status
  {
      case DRAFT;
      case PUBLISHED;
      case ARCHIVED;
  }
  ```
  L'avantage des énumérations est qu'elles représentent une collection de valeurs constantes, mais surtout ces valeurs peuvent être typées, comme ceci.
  ```php
  class BlogPost
  {
      public function __construct(
          public Status $status, 
      ) {}
  }
  ```
  Dans cet exemple, la création d'une énumération et sa transmission à `BlogPost` ressemble à ceci.

  ```php
  $post = new BlogPost(Status::DRAFT);
  ```

  Pour en savoir plus https://www.php.net/manual/fr/language.types.enumerations.php
]

---

.left-column[
  ### Promotion de propriétés de constructeur
  ### visibilité pour les constantes
  ### Fonction str_contains
  ### Null safe
  ### Enum
  ### Propriétés readonly
]
.right-column[
  PHP 8.1 prend en charge les propriétés de classe en lecture seule. Une propriété de classe déclarée en lecture seule ne peut être initialisée qu'une seule fois, et d'autres modifications de la propriété ne sont pas autorisées.

  Les propriétés de classe en lecture seule sont déclarées avec le mot-clé `readonly` dans une propriété typée .
  ```php
  class User 
  {
      public readonly int $uid;

      public function __construct(int $uid) 
      {
          $this->uid = $uid;
      }
  }

  $user = new User(42);
  $user->uid = 56; # Error: Cannot modify readonly property User::$uid in ...:...
  ```

  Les valeurs de propriétés en lecture seule ne peuvent être définies qu'à partir de la classe elle-même, soit à partir du constructeur, soit d'une autre méthode. Une fois définie, aucune autre modification n'est autorisée sur cette propriété, même à l'intérieur de la classe.
]

---

.left-column[
  ### Promotion de propriétés de constructeur
  ### visibilité pour les constantes
  ### Fonction str_contains
  ### Null safe
  ### Enum
  ### Propriétés readonly
  ### Les attributes
]
.right-column[
  L'un des plus grands changements de **PHP 8** est la prise en charge des attributs. Les attributs aident à ajouter des métadonnées aux fonctions, paramètres, classes, méthodes de classe, constantes, propriétés, fermetures et même aux classes anonymes PHP. 
  
  Ces métadonnées peuvent être récupérées par programmation et fournissent une approche pragmatique pour résoudre les attributs ailleurs dans le code.

  #### Syntaxe et utilisation
  Les attributs sont déclarés avec `#[` et des `]`.
  ```php
  #[ExampleAttribute('foo', 'bar')]
  function example() {}
  ```

  Chaque attribut peut avoir zéro ou plusieurs paramètres. Ils seront transmis au constructeur de la classe Attribute si vous tentez d'obtenir un objet instancié de l'attribut.
]

---

.left-column[
  ### .red[**Bilan Travaux Pratique**]
]
.right-column[
### TP commun

Avec tous ce que l'on a appris et vu, nous allons l'appliquer sur l'outils de la société R à repartant de zero

- Recuperer le repo git
- Structure du projet
  - dossier `public`, `public/css`, `public/js` (tous nos fichiers public)
  - dossier `src` (Toutes nos classes)
  - fichier `public/index.php`
  - dossiers `pages`
- Base de données ou Fichier JSON
- Essayons ensemble de mettre en place
  - Un formulaire d'ajout d'employé
  - Un formulaire pour responsable
  - Une page qui liste tout les employés
  - Page du responsable avec son équipe
]