# Block Usercount

### Een AI product demonstratie

## Blocks developer documentatie
https://moodledev.io/docs/apis/plugintypes/blocks

## Code standaard
https://moodledev.io/general/development/policies/codingstyle

## Gebruikte prompts:

### Eenvoudig:
```
Ik wil een plug-in voor Moodle ontwikkelen.
Ik wil graag een block, waarin het totale aantal gebruikers binnen de Moodle omgeving wordt getoont.
Dit block gaat block_usercount heten.

Deze gebruikers moeten actief zijn, en niet geschorst of verwijderd.

Kan je mij voorzien van de bestanden die nodig zijn om een eenvoudig block werkend te krijgen binnen Moodle?
Ik wil dat je hierbij rekening houdt met de Moodle code-standaard.
Ik wil dat je zoveel mogelijk gebruik maakt van bestaande functies binnen Moodle om de data te vergaren, en zo min mogelijk leunt op directe SQL queries.
```

### Uitgebreid:
Hierin wordt aan de hand van de basis die uitgelegd wordt in de developer documentatie een prompt opgebouwd.
Zo vertellen we welke bestanden we in ieder geval nodig hebben, en vragen we om uitgebreidere documentatie binnen de geschreven code.
```
Ik wil een plug-in voor Moodle ontwikkelen.
De Moodle versie die ik gebruik is Moodle 4.3
Ik wil graag een block, waarin het totale aantal gebruikers binnen de Moodle omgeving wordt getoont.
Dit block gaat block_usercount heten.

Deze gebruikers moeten actief zijn, en niet geschorst of verwijderd.

Ik wil dat je hierbij rekening houdt met de Moodle code-standaard.
Denk hierbij bijvoorbeeld aan de beginnende boilerplate comment binnen php bestanden, doc-blocks voor classes en methods (inclusief parameter en return type declaraties waar nodig), comments die beginnen met een hoofdletter en eindigen met een leesteken (!, ?, .), variabele benaming enkel in kleine letters direct aan elkaar geschreven (geen camelcase of underscores)

Ik wil dat je zoveel mogelijk gebruik maakt van bestaande functies binnen Moodle om de data te vergaren, en zo min mogelijk leunt op directe SQL queries.

De volgende bestanden zijn verplicht bij het ontwikkelen van een block:

block_usercount.php
db/access.php
lang/en/block_usercount.php
version.php

Kan je voor elk bestand netjes de code schrijven en deze in aparte code-blokken aan mij terugkoppelen?
Als ik bestanden heb gemist in bovenstaand, kan je die dan ook toevoegen in aparte code-blokken?
```

## Uitwerkingen

De verschillende responses die kunnen volgen hebben we uitgewerkt in aparte branches.
We hebben hier de meest bekende 3 AI's uitgewerkt, ChatGPT (GPT3.5), Microsoft BING (GPT4.0) en Google Bard (Pathways Language Model).
Voor alle drie is er een branch met de eenvoudige prompt, en de uitgebreide prompt.
