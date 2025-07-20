<?php

namespace MediaStoreNet\OpenImmo\Classes;

use MediaStoreNet\OpenImmo\Classes\Master\MasterAnonymousPHPType;

/**
 * Class representing Master
 *
 * Frei wählbare alphanumerische Kennung um Objekte einem Übergeordneten Objekt zuzuordnen. 
 * Das Eltern Objekte hat in "gruppen_kennung" die gleiche ID wie "master". Anwendung z.b. in Neubau Projekten.
 * Damit die Anzeige des Master Objektes gesteuert werden kann, wird im Master ein Flag
 *  visible eingesetzt. Das Attribut ist dann zwingend anzugeben
 */
class Master extends MasterAnonymousPHPType
{


}

