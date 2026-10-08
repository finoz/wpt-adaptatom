# wpt-adaptatom

Child theme WordPress per **Adapta-tom**.  
Basato su [wpt-ficus](https://github.com/finoz/wpt-ficus) come parent theme.

## Prerequisiti

- Docker Desktop
- nvm + Node 22 (`nvm use` nella cartella tema)
- `wpt-ficus` clonato nella stessa directory padre (`../wpt-ficus`)

## Avvio locale

```bash
# 1. Avvia WordPress
docker compose up -d
# → WP su http://localhost:8080
# → phpMyAdmin su http://localhost:8085

# 2. Setup WP (prima volta): http://localhost:8080/wp-admin
#    Attiva il tema "Adapta-tom" (il parent Ficus viene caricato automaticamente)

# 3. Avvia Vite in modalità dev
cd wp-content/themes/adaptatom
nvm use
npm install   # solo la prima volta
npm run dev
```

N.B. Per modificare le porte locali -nell'evenienza di far girare più progetti in parallelo- va creato e modificato il file .env (da .env.example).

## Build produzione

```bash
cd wp-content/themes/adaptatom
npm run build
# Output in assets/dist/ — già in .gitignore
```

## Brand

| Token         | Valore    | Uso                                  |
|---------------|-----------|--------------------------------------|
| primary       | `#dc2525` | Rosso pomodoro (bottoni, onde)       |
| primary-dark  | `#761414` | Fine gradiente bottoni               |
| secondary     | `#00790d` | Verde foglia (wordmark)              |
| accent        | `#ff9b00` | Arancio (card "Il progetto")         |
| sky           | `#8eb5e1` | Azzurro cielo (hero, card)           |
| blush         | `#ffd9d9` | Aloni rosa dello sfondo              |
| text          | `#000000` | Testo principale                     |

Gradienti: `brand` (footer), `button`, `sky` (hero home).

Font: **Sora** (testi e titoli, slug `sans` / `display`) + **IBM Plex Sans** (UI: nav, bottoni, meta, slug `ui`).  
File variable woff2 in `wp-content/themes/adaptatom/assets/fonts/`.

Scala tipografica (mobile / desktop da 769px): `base` 1.8/2.0, `md` 2.0/2.4, `lg` 2.2/2.8, `xl` 2.4/3.2, `xxl` 2.8/3.6, `display` 3.6/6.4, `headline` 4.8/8.0 rem (html al 62,5%: 1rem = 10px).

Layout: content 1280px, wide 1440px, reading 872px (soglie del grid in `_layout.scss`: 1032 / 1440 / 1600px).

## Logo e grafiche

`assets/images/logo.svg` (icona + wordmark) e' il logo di default caricato da ficus. In home l'header e' trasparente sul cielo e mostra solo il wordmark in bianco (CSS); dopo lo scroll torna bianco col logo completo.

Altre grafiche in `assets/images/`: `emblem.svg` (hero), `footer-emblem.svg`, `wave.svg` (separatore a onda, usato come maschera CSS), `wordmark.svg`, frecce del carousel, `placeholder.svg`.

## Home e pagine

- `templates/front-page.html`: header, `post-content`, footer.
- Pattern **Home completa** (categoria "Adapta-tom - Home"): inseriscilo nella pagina impostata come pagina iniziale. Le sezioni sono anche pattern separati (hero, card, notizie, partner, finanziamento).
- `templates/page-editorial.html`: pagina tipo (cerchio + titolo + lead, onda, contenuto a larghezza reading). Il pattern **Card CTA** chiude la pagina.
- `parts/footer.html`: override del footer di ficus (emblema, tagline, menu, onda, copyright).

---

## Aggiornamenti automatici (GitHub Updater)

Il tema si aggiorna da GitHub tramite `Ficus_GitHub_Updater`.  
Il repo di riferimento è `finoz/wpt-adaptatom`. Nessun plugin richiesto.

Per repo privati, aggiungi in `wp-config.php`:
```php
define( 'FICUS_GITHUB_TOKEN', 'ghp_...' );
```

### Procedura di rilascio

Un semplice push non innesca aggiornamenti WP: serve una **GitHub Release** con tag semver.

```bash
# 1. Bump versione in wp-content/themes/adaptatom/style.css
#    Version: 1.0.0 → 1.1.0

# 2. Commit e push
git add .
git commit -m "release: v1.1.0 - descrizione modifiche"
git push

# 3. Crea tag + release in un colpo solo
gh release create v1.1.0 --generate-notes
# --generate-notes popola automaticamente le note dai commit dall'ultima release
# oppure scrivi le note a mano: --notes "Descrizione modifiche"
```

Il tag deve corrispondere al valore `Version:` in `style.css`, preceduto da `v`.  
Esempio: `Version: 1.1.0` → tag `v1.1.0`.

## Struttura

```
wpt-adaptatom/
  docker-compose.yml
  wp-content/
    themes/
      adaptatom/          <- child theme (questo repo)
        assets/
          fonts/          <- woff2 self-hosted
          images/         <- svg del brand
          scss/           <- sorgenti SCSS (blocks/ per i block style)
          ts/             <- sorgenti TypeScript
          dist/           <- output Vite (gitignored)
        parts/            <- footer
        patterns/         <- home, card, post-card, query
        templates/        <- front-page, page-editorial
        functions.php
        style.css
        theme.json        <- brand token (colori, font, scale)
        vite.config.ts
        package.json
```

> Il parent `wpt-ficus` non e' incluso nel repo - viene montato via Docker da `../wpt-ficus`.
