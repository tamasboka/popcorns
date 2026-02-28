## Laravel + Vue REST API gyakorlas

### Ez a repo csak arra keszult, hogy gyakoroljak par dolgot ami a vizsgaremekhez kell.
- Vue
- Laravel
- git
- markdown

### Miert public a repo?
- azert, hogy jelezze a github hogy dolgoztam es tele legyen zold kockakkal a contributions menu

### Mik a terveim?
- Egy filmkezelo oldalt tervezek kesziteni, mint az [IMDb](https://www.imdb.com/) vagy [Rotten Tomatoes](https://www.rottentomatoes.com/) stb
- Miket lehet csinalni mint felhasznalo?
    - Profilt csinalni
    - Watchlistet csinalni
    - Filmet ertekelni
    - Megnezettnek jelolni egy filmet
    - Filmek listajat bongeszni

### Szukseges szoftverek
- [composer](https://getcomposer.org/download/)
- [npm](https://nodejs.org/en/download)

### Hasznalat
1) Backend setup
    - Dependencyk letoltese
        ```bash
        cd basic-backend
        composer i
        ```
    - Szerver inditasa
        ```bash
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