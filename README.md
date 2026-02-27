## Laravel + Vue REST API gyakorlas

### Ez a repo csak arra keszult, hogy gyakoroljak par dolgot ami a vizsgaremekhez kell.
- Vue
- Laravel
- git
- markdown

### Miert public a repo?
- azert, hogy jelezze a github hogy dolgoztam es tele legyen zold kockakkal a contributions menu

### Szukseges szoftverek
- [composer](https://getcomposer.org/download/)
- [npm](https://nodejs.org/en/download)

### Hasznalat
1) Backend setup
    - Szerver inditasa
        ```bash
        cd basic-backend
        composer i
        php artisan serve
        ```
    - Adatbazis feltoltese
        - **Elso feltoltes** vagy full reset az alapokra
            ```bash
            php artisan migrate:fresh --seed
            ```
        - Plusz adatok betoltese seederbol
            ```bash
            php artisan db:seed
            ```
2) Frontend setup
    - Inditas
        ```bash
        cd basic-frontend
        npm i
        npm run dev
        ```