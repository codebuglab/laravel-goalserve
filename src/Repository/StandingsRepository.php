<?php

namespace CodeBugLab\Goalserve\Repository;

use CodeBugLab\GoalServe\Repository\AbstractRepository;

class StandingsRepository extends AbstractRepository
{
    private $mainPage = 'standings';

    /**
     * @link https://www.goalserve.com/getfeed/---------/standings/1205.xml
     */
    public function league(int $leagueId): self
    {
        $this->apiGenerator->api("{$this->mainPage}/{$leagueId}.xml");
        return $this;
    }
}
