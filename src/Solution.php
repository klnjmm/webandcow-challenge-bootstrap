<?php

declare(strict_types=1);

namespace WebAndCow\ChallengeBootstrap;

use WebAndCow\Challenge\Response;
use WebAndCow\Challenge\SolutionInterface;

class Solution implements SolutionInterface
{
    /**
     * @param array $data : $data retrieve from the API to resolve the challenge
     * @return Response
     */
    public function apply(array $data): Response
    {
        // build your solution

        return new Response('PUT YOUR RESPONSE HERE');
    }
}
