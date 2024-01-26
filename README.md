# Block Usercount

### Een AI product demonstratie

## Blocks developer documentatie
https://moodledev.io/docs/apis/plugintypes/blocks

## Code standaard
https://moodledev.io/general/development/policies/codingstyle

# Microsoft Bing's (GPT 4.0) interpretatie van een uitgebreidere prompt

![img](pix/1.png)
![img](pix/2.png)
![img](pix/3.png)
![img](pix/4.png)
![img](pix/5.png)

## Welke benodigde bestanden zijn aanwezig
- `block_usercount.php` ✅
- `db/access.php` ✅
- `lang/en/block_usercount.php` ✅
- `version.php` ✅

## Welke nuttige bestanden zijn extra aanwezig
- Geen

## Welke bestanden zijn aanwezig maar overbodig
- Geen

## Wat is goed
- De functie om de usercount daadwerkelijk op te halen in `block_usercount.php` is netjes in een eigen functie gezet.
- Ook is er bij deze prompt in `block_usercount.php` een boilerplate comment te vinden.
  - Deze is wel vertaald naar het Nederlands door de Nederlandstalige prompt, maar de tekst is technisch correct.
- De gevonden capabilities waarvan de permissies in `access.php` gecloned worden zijn goed gevonden.
- Het eindresultaat klopt.

## Wat is niet goed
- `version.php` bevat geen `MOODLE_INTERNAL` check.
- `block_usercount.php` bevat nu ook de `MOODLE_INTERNAL` check, echter is deze hier niet nodig.
- Moodle code standaard
    - Enkel `block_usercount.php` bevat een boilerplate, de overige bestanden ontbreekt het nog steeds.
    - Nergens zijn docblock comments geplaatst voor de classes/methods.

## Conclusie
Deze basis is zeer goed. De plug-in werkt, en de opzet is prima.\
Er is nog ruimte voor verbetering, welke mogelijk met wat aanvullende input aangevuld kan worden.\
