const mix = require('laravel-mix')

// BrowserSync というツールを組み合わせて、JavaScript や PHP ファイルが変更されたときに自動的にブラウザがリロードされるようになる
mix.browserSync('vuesplash.test')
  .js('resources/js/app.js', 'public/js')
  .version()
