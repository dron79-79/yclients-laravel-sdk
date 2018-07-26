<?php


namespace nikitin\YClientsSDK\Requests;


class Companies extends Request
{

    public function setGroupId($groupId){
        $this->params['group_id'] = $groupId;
        return $this;
    }

    protected function request()
    {
        return $this->requestApi('companies', 'get', false);
    }
}