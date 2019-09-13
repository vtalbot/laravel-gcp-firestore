<?php

namespace TalbotNinja\LaravelGCPFirestore\Connectors;

use Illuminate\Database\Connectors\ConnectorInterface;

class FirestoreConnector implements ConnectorInterface
{
    /**
     * Establish a database connection.
     *
     * @param array $config
     * @return \PDO
     */
    public function connect(array $config)
    {
        // TODO: Implement connect() method.
    }
}
