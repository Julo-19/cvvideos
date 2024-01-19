<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * Les cookies qui ne doivent pas être chiffrés.
     *
     * @var array
     */
    protected $except = [
        // Ajoutez ici les noms des cookies que vous ne voulez pas chiffrer.
    ];

    /**
     * Les chemins qui ne doivent pas être chiffrés.
     *
     * @var array
     */
    protected $exceptPaths = [
        // Ajoutez ici les chemins que vous ne voulez pas chiffrer.
        'video/*', // Exemple de chemin à exclure pour les vidéos
    ];
}
