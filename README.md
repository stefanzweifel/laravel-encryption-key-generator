# Laravel Encryption Key Generator

This is a very simple application which generates a new [Laravel](https://laravel.com) [encryption key](https://laravel.com/docs/master/encryption#configuration) on each page request.

Perfect for when you need a Laravel encryption key but don't have access to a Laravel application yourself.

→ [laravel-encryption-key-generator.vercel.app/](https://laravel-encryption-key-generator.vercel.app/)

## Why

I built this app, as I wanted to have a better experience for users which want to self-host one of my sideprojects: [screeenly](https://github.com/stefanzweifel/screeenly).

The [selfhosting guide](https://github.com/stefanzweifel/screeenly/wiki/Deploy-to-Heroku) mentions, that you have to generate a new encryption key. But people, who do not have experience with Laravel or PHP can get stuck pretty quickly.

This app solves this problem. People can now just open the URL and copy and paste a fresh encryption key.

## Thanks

Thanks to [Caleb Porzio](https://twitter.com/calebporzio) for [documenting](https://calebporzio.com/easy-free-serverless-laravel-with-vercel) how to deploy Laravel apps to Vercel.
