name: inverse
class: center, middle, inverse
# Modele Conceptuel - SQL
# .red[Methode Merise]
![Right-aligned image](https://ri7.fr/wp-content/uploads/2020/12/logo2-h-195x64-light.png)

---

class: middle
.left-column[
## Objectif
]
.right-column[
- Savoir analyser un context

- Apporter des solutions pertinantes

- Vous permettre de repondre aux besoin de votre entreprise

- Gagner en confiance et motivation
]

---

class: middle
.left-column[
## Objectif
## Au programme
]
.right-column[
- **Méthode MERISE**
- **Modele Conceptuel de Données**
  - Entité
  - Relations
  - Héritage
- **Modele Logique Relationnel**
- **SQL**
  - select
  - order by
  - limit
  - where
  - functions
]
---
class: center, middle, inverse
# 1. Méthode MERISE
---

class: middle
.left-column[
## Présentation
]
.right-column[
La conception d'un système d'information n'est pas évidente car il faut réfléchir à l'ensemble de l'organisation que l'on doit mettre en place. La phase de conception nécessite des méthodes permettant **de mettre en place un modèle** sur lequel on va s'appuyer. 

**La modélisation** consiste à créer une représentation virtuelle d'une réalité de telle façon à faire ressortir les points auxquels on s'intéresse.

Ce type de méthode est appelé **analyse**. Il existe plusieurs méthodes d'analyse, la méthode la plus utilisée en France est la méthode **MERISE**.

**MERISE** est une méthode de conception, de développement et de réalisation de projets informatiques. Le but de cette méthode est d'arriver à concevoir un système d'information. La méthode MERISE est basée sur **la séparation des données et des traitements à effectuer** en plusieurs modèles conceptuels et physiques.

La séparation des données et des traitements assure une longévité au modèle. En effet, l'agencement des données n'a pas à être souvent remanié, tandis que les traitements le sont plus fréquemment.
]

---

class: middle
.left-column[
## Présentation
## Cycle de Conception d'un Système d'information
]
.right-column[
.pull-left.center[
![Right-aligned image](img/cycle.gif)
]
.pull-right[
La conception du système d'information se fait par étapes, afin d'aboutir à un système d'information fonctionnel reflétant une réalité physique
* **Système d'information manuel :** Faire l'inventaire des éléments nécessaires au système
* **Expression des besoins :** Délimiter le système en s'informant auprès des futurs utilisateurs
Grâce à ses deux étapes nous avons ce que l'on attend du système d'informtion
* **Modèle conceptuel :** Décrit les règles et les contraintes à prendre en compte.
* **Modele Logique :** Représente le choix logiciel pour le système d'information.
* **Le modèle physique :** reflète le choix matériel pour le système d'information.
]
]

---
class: center, middle, inverse
# 2. Modèle Conceptuel de données
.red[MCD]
---

class: middle
.left-column[
## Presentation
]
.right-column[
Le modèle conceptuel des données **(MCD)** a pour but d'écrire de façon formelle les données qui seront utilisées par le système d'information. Il s'agit donc d'une représentation des données, facilement compréhensible, permettant de décrire le système d'information à l'aide d'entités.
]

---

.left-column[
## Presentation
## Entité
]

.right-column[
  **Le Modèle conceptuel des données (ou MCD),** schéma représentant la structure du système d'information, du point de vue des données, c'est-à-dire les dépendances ou relations entre les différentes données du système d'information (par exemple : le client, la commande, les produits, etc.),

  Le MCD repose sur les notions d'entité et d'association et sur les notions de relations. Le modèle conceptuel des données s'intéresse à décrire la sémantique du domaine (entity/relationship en anglais).
]
---

.left-column[
## Qu'est-ce que le MCD
## Entité
]

.right-column[
L'entité est définie comme un objet de gestion considéré d'intérêt pour représenter l'activité à modéliser (exemple : entité pays). À son tour, chaque entité (ou objet) est porteuse d'une ou plusieurs propriétés simples, dites atomiques (exemples : code, nom, capitale, population, superficie) dont l'une, unique et discriminante, est désignée comme identifiant (exemple : code).

]