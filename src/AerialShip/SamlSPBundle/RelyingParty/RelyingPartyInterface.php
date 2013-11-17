<?php

namespace AerialShip\SamlSPBundle\RelyingParty;

use AerialShip\SamlSPBundle\Bridge\SamlSpResponse;
use Symfony\Component\HttpFoundation\Request;

interface RelyingPartyInterface
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return bool
     */
    function supports(Request $request);

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @throws \InvalidArgumentException if cannot manage the Request
     * @return \Symfony\Component\HttpFoundation\Response|SamlSpResponse
     */
    function manage(Request $request);
}