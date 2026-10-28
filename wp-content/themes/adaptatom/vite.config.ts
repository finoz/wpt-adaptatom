import { defineConfig, loadEnv, Plugin } from 'vite'
import { resolve }                       from 'path'
import * as fs                           from 'fs'

/**
 * Plugin sentinel: crea .vite-dev quando il dev server parte (contiene la porta),
 * lo rimuove quando si ferma. PHP usa il file per rilevare dev mode e leggere
 * la porta senza bisogno di costanti in wp-config.php.
 */
const viteDevFlag = ( port: number, flagFile: string ): Plugin => ( {
    name: 'vite-dev-flag',
    configureServer() {
        fs.writeFileSync( flagFile, String( port ) )
        const cleanup = () => { try { fs.unlinkSync( flagFile ) } catch {} }
        process.once( 'exit',   cleanup )
        process.once( 'SIGINT', () => { cleanup(); process.exit( 0 ) } )
        process.once( 'SIGTERM',() => { cleanup(); process.exit( 0 ) } )
    },
} )

export default defineConfig( ( { mode, command } ) => {
    // Carica le variabili dal file .env nella root del tema.
    // Il terzo argomento '' rimuove il filtro sul prefisso VITE_,
    // così VITE_PORT è disponibile anche se non ha prefisso VITE_.
    const env      = loadEnv( mode, resolve( __dirname, '../../..' ), '' )
    const port     = parseInt( env.VITE_PORT ?? '5173', 10 )
    const flagFile = resolve( __dirname, '.vite-dev' )

    return {
        plugins: [ viteDevFlag( port, flagFile ) ],

        root: resolve( __dirname, 'assets' ),

        // In build gli url() del CSS devono essere relativi al file CSS (assets/dist/assets/),
        // altrimenti con base '/' puntano a /assets/... nella root del sito e vanno in 404.
        base: command === 'build' ? './' : '/',

        build: {
            outDir:      resolve( __dirname, 'assets/dist' ),
            emptyOutDir: true,
            manifest:    true,
            minify:      'esbuild',
            target:      'esnext',
            rollupOptions: {
                input: {
                    main: resolve( __dirname, 'assets/ts/main.ts' ),
                },
            },
        },

        css: {
            devSourcemap: true,
        },

        server: {
            port,
            strictPort: true,
            cors:       true,
            // gli url() nel CSS iniettato nella pagina WP (porta 8080) devono
            // puntare al dev server, altrimenti gli asset non inlinati vanno in 404
            origin:     `http://localhost:${port}`,
            watch:      { usePolling: true },
        },
    }
} )
