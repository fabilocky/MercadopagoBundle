<?php

namespace Fabilocky\MercadopagoBundle;

/**
 * Factory class
 *
 * @author Fabian Serafini <fdserafini@gmail.com>
 */
class Factory
{
	private $mp;

    public function __construct($client_id, $client_secret, $sandbox)
    {
        $mp = new \MP($client_id, $client_secret);
        $mp->sandbox_mode($sandbox);

        $this->mp = $mp;
    }

	public function getMp()
	{
		return $this->mp;
	}
}
