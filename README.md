Mecadopago bundle para Symfony2
============

Este bundle te permite adaptar de manera rápida el api de Mercadopago a tu proyecto en Symfony.

[![Latest Stable Version](https://poser.pugx.org/fabilocky/mercadopago-bundle/v/stable)](https://packagist.org/packages/fabilocky/mercadopago-bundle) [![Total Downloads](https://poser.pugx.org/fabilocky/mercadopago-bundle/downloads)](https://packagist.org/packages/fabilocky/mercadopago-bundle) [![Latest Unstable Version](https://poser.pugx.org/fabilocky/mercadopago-bundle/v/unstable)](https://packagist.org/packages/fabilocky/mercadopago-bundle)

## Licencia
[![License](https://poser.pugx.org/fabilocky/mercadopago-bundle/license)](https://packagist.org/packages/fabilocky/mercadopago-bundle)

## Instalación con composer

**1**  Agrega en la llave `require` del composer.json

``` yml
    "require" : {
        "fabilocky/mercadopago-bundle": "dev-master",
    }
``` 

``` bash
$ composer update
```
**2** Agrega tus credenciales de mercadopago a tu proyecto:
### Configura tus credenciales

* Obtén tu **CLIENT_ID** y **CLIENT_SECRET** en las siguientes direcciones:
    * Venezuela: [https://www.mercadopago.com/mlv/herramientas/aplicaciones](https://www.mercadopago.com/mlv/herramientas/aplicaciones)
    * Brazil: [https://www.mercadopago.com/mlb/ferramentas/aplicacoes](https://www.mercadopago.com/mlb/ferramentas/aplicacoes)
    * Mexico: [https://www.mercadopago.com/mlm/herramientas/aplicaciones](https://www.mercadopago.com/mlm/herramientas/aplicaciones)
    * Colombia: [https://www.mercadopago.com/mco/herramientas/aplicaciones](https://www.mercadopago.com/mco/herramientas/aplicaciones)
    * Argentina: [https://www.mercadopago.com/mla/herramientas/aplicaciones](https://www.mercadopago.com/mla/herramientas/aplicaciones)
``` yaml
# app/config/config.yml

fabilocky_mercadopago:
    client_id: xxxxxx
    client_secret: xxxxxxx
    sandbox: true
```

**3** Registra el bundle en ``app/AppKernel.php``

``` php
    $bundles = array(
        // ...
        new Fabilocky\MercadopagoBundle\FabilockyMercadopagoBundle(),
    );
```

## Comienza

- Crea el objeto mercadopago:

``` php
<?php
// src/Acme/DemoBundle/Controller/DemoController.php

namespace Acme\DemoBundle\Controller;

// ...

class DemoController extends Controller
{

    public function indexAction()
    {
		// Crea el objeto MP
		$mp = $this->get('fabilocky_mercadopago')->getMp();
		// Crea un token
		$token = $mp->get_access_token();
	}
}
```
- Crea las entidades con la consola:

``` bash
$ php app/console doctrine:schema:update --force
```

## Para más información sobre el API
[https://developers.mercadopago.com/](https://developers.mercadopago.com/)
