<?php

namespace Github\Exception;

class TeamsAddOrUpdateProjectPermissionsLegacyForbiddenException extends ForbiddenException
{
    /**
     * @var \Github\Model\TeamsTeamIdProjectsProjectIdPutResponse403
     */
    private $teamsTeamIdProjectsProjectIdPutResponse403;
    public function __construct(\Github\Model\TeamsTeamIdProjectsProjectIdPutResponse403 $teamsTeamIdProjectsProjectIdPutResponse403)
    {
        parent::__construct('Response if the project is not owned by the organization');
        $this->teamsTeamIdProjectsProjectIdPutResponse403 = $teamsTeamIdProjectsProjectIdPutResponse403;
    }
    public function getTeamsTeamIdProjectsProjectIdPutResponse403() : \Github\Model\TeamsTeamIdProjectsProjectIdPutResponse403
    {
        return $this->teamsTeamIdProjectsProjectIdPutResponse403;
    }
}