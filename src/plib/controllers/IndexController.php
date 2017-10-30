<?php
// Copyright 1999-2017. Plesk International GmbH.

use PleskX\Api\InternalClient as ApiClient;

class IndexController extends pm_Controller_Action
{
    public function indexAction()
    {
        $client = new ApiClient();

        $domain = reset(pm_Domain::getAllDomains());
        $this->view->domainName = $client->webspace()->get('id', $domain->getId())->name;

        $this->view->stats = $client->server()->getStatistics()->objects;
    }
}
