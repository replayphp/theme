const elixir = require("laravel-elixir")

elixir(mix => {
    mix.sass("replay.scss")
    mix.webpack("replay.js")
})
