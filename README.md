# Block Usercount

### Een AI product demonstratie

## Blocks developer documentatie
https://moodledev.io/docs/apis/plugintypes/blocks

## Code standaard
https://moodledev.io/general/development/policies/codingstyle

# Chat GPT's (GPT 3.5) interpretatie van een uitgebreidere prompt

![img](pix/1.png)
![img](pix/2.png)
![img](pix/3.png)

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
- `version.php` bevat de `MOODLE_INTERNAL` check
- De functie om de usercount daadwerkelijk op te halen in `block_usercount` is netjes in een eigen functie gezet.
- Het eindresultaat klopt.

## Wat is niet goed
- `block_usercount.php` bevat nu ook de `MOODLE_INTERNAL` check, echter is deze hier niet nodig.
  - Deze check was niet aanwezig bij de standaard prompt uitvoering van Chat GPT.
- Er wordt een meer SQL achtige query gebruikt dan noodzakelijk. Het ophalen van de data uit de database oogt netter in de GPT versie met de basis prompt.
- Moodle code standaard
    - De bestanden beginnen nog steeds niet met de vereiste documentatie.
    - Nergens zijn docblock comments geplaatst voor de classes/methods.

## Conclusie
De basis is vrij goed. De plug-in zal werken, maar ten opzichte van de basis-prompt zijn er ook wel dingen achteruit gegaan.\
Het blijft opletten met wat de AI teruggeeft.\
Basiskennis met betrekking tot de opzet van een Moodle plug-in lijkt voorlopig nog vereist.
