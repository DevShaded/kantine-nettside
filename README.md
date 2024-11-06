# Kantine Nettside

## Beskrivelse
Dette er en nettside for en kantine som viser dagens meny oh utvalg.

## Teknologier
Prosjektet er laget med [Laravel](https://laravel.com) og [Nuxt.js](https://nuxt.com).

# Teknologi Krav
- [PHP](https://php.net) >= 8.2
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org) >= 20.x
- [NPM](https://npmjs.com) >= 10.x

## Installasjon
1. Klon prosjektet
```bash
git clone https://github.com/DevShaded/kantine-nettside.git
``` 
2. Installer PHP avhengigheter
```bash
cd /server && composer install
```

3. Lag Filament Dashbord bruker
```bash
cd /server
php artisan make:filament-user
```
> Følg instruksjoner for å lage en bruker

4. Installer Node.js avhengigheter
```bash
cd /frontend && npm install
```

5. Bygg frontend
```bash
cd /frontend
npm run dev
```

6. Start backend server
```bash
cd /server
php artisan serve
```

## Bruk
- Gå til [localhost:8000](http://localhost:8000/admin) for å se dashbordet. 
Gå til [localhost:3000](http://localhost:3000) for å se kantine nettsiden.


## Lisens
Dette prosjektet er lisensiert under MIT lisensen. Se [LICENSE](LICENSE) for mer informasjon.
```
