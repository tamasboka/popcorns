## Popcorns! :popcorn:

### Ez a repository eredetileg csak azért készült, hogy gyakoroljak pár dolgot ami a [vizsgaremekhez](https://api.ikk.hu/v1/media/documents/7013?filename=Szoftverfejleszt%C5%91-%C3%A9s--tesztel%C5%91-2022.09.12.-v2.pdf) kell.

- Vue
- Laravel
- git
- markdown
- Ezért **basic**-backend és **basic**-frontend a mappák neve

### Jelenleg a projekt célja más, mint aminek eredetileg terveztem.

- Most ez egy 'passion project'
- Terveim szerint ez lesz a [Magnum Opus](https://en.wikipedia.org/wiki/Masterpiece)-om

### Mik a terveim?
#### Ez a bekezdés még nincs kész :warning:

- Egy filmportál oldalt tervezek készíteni, kb mint az [IMDb](https://www.imdb.com/)
  vagy [Rotten Tomatoes](https://www.rottentomatoes.com/) stb
- Mit lehet csinálni?
    - Profilt csinalni
    - Watchlistet csinalni
    - Filmet értékelni
    - Megnézettnek jelölni egy filmet
    - Filmek listajat bongeszni

### Szükséges szoftverek

- [php](https://www.php.net/downloads.php)
- [composer](https://getcomposer.org/download/)
- [npm](https://nodejs.org/en/download)

### Hasznalat

> [!TIP]
> Linux shortcut: ```./run.sh```

1) Backend setup
    - Step 0
        ```bash
        cd basic-backend
        ```
    - Dependencyk letoltese
        ```bash
        composer i
        ```
    - .env keszitese (Linux)
        ```bash
        mv .env.example .env
        ```
      VAGY
        ```bash
        cp .env.example .env
        ```
    - App kulcs készítése
        ```bash
      php artisan key:generate
      ```
    - Adatbázis
        - Adatbázis elkészítése
            ```bash
            php artisan migrate
            ```
        - Adatok betöltése seederből (ismételhető)
          ```bash
          php artisan db:seed
          ```
        - Adatbázis reset basic adatokkal
            ```bash
            php artisan migrate:fresh --seed
            ```
    - Szerver inditasa
      ```bash
      php artisan serve
      ```
2) Frontend setup
    - Step 0
      ```bash
      cd basic-frontend
      ```
    - Inditas
        ```bash
        npm i
        npm run dev
        ```

### API endpointok és adatbázis

- [README.md](basic-backend/README.md)

### static.gif source
- https://i.sstatic.net/sIIwU.gif
