<?php
/**
 * Created by PhpStorm.
 * User: zhalnin
 * Date: 16/06/14
 * Time: 20:24
 */

namespace dmn\mapper;
error_reporting( E_ALL & ~E_NOTICE );

require_once( "dmn/mapper/Collection.php" );

class NewsCollection
    extends Collection
    implements \dmn\domain\NewsCollection {

    function targetClass() {
        return "\\dmn\\domain\\News";
    }
}

class DefferredNewsCollection extends NewsCollection {
    private $stmt;
    private $valueArray;
    private $run=false;

    function __construct( DomainObjectFactory $dofact, \PDOStatement $stmt_handle, array $valueArray ) {
        parent::__construct( null, $dofact );
        $this->stmt = $stmt_handle;
        $this->valueArray = $valueArray;
    }

    function notifyAccess() {
        if( ! $this->run ) {
            $this->stmt->execute( $this->valueArray );
            $this->raw = $this->stmt->fetchAll();
            $this->total = count( $this->raw );
        }
        $this->run = true;
    }
}


class UnlockDetailsCollection
    extends Collection
    implements \dmn\domain\UnlockDetailsCollection {

    function targetClass() {
        return "\\dmn\\domain\\UnlockDetails";
    }
}

class UnlockCollection
    extends Collection
    implements \dmn\domain\UnlockCollection {

    function targetClass() {
        return "\\dmn\\domain\\Unlock";
    }
}

class ContactsCollection
    extends Collection
    implements \dmn\domain\ContactsCollection {

    function targetClass() {
        return "\\dmn\\domain\\Contacts";
    }
}

class GuestbookCollection
    extends Collection
    implements \dmn\domain\GuestbookCollection {

    function targetClass() {
        return "\\dmn\\domain\\Guestbook";
    }
}


class UdidCollection
    extends Collection
    implements \dmn\domain\UdidCollection {

    function targetClass() {
        return "\\dmn\\domain\\Udid";
    }
}


class CarrierCheckCollection
    extends Collection
    implements \dmn\domain\CarrierCheckCollection {

    function targetClass() {
        return "\\dmn\\domain\\CarrierCheck";
    }
}



class FastCheckCollection
    extends Collection
    implements \dmn\domain\FastCheckCollection {

    function targetClass() {
        return "\\dmn\\domain\\FastCheck";
    }
}



class BlacklistCheckCollection
    extends Collection
    implements \dmn\domain\BlacklistCheckCollection {

    function targetClass() {
        return "\\dmn\\domain\\BlacklistCheck";
    }
}



class FaqCollection
    extends Collection
    implements \dmn\domain\FaqCollection {

    function targetClass() {
        return "\\dmn\\domain\\Faq";
    }
}


class FaqPositionCollection
    extends Collection
    implements \dmn\domain\FaqPositionCollection {

    function targetClass() {
        return "\\dmn\\domain\\FaqPosition";
    }
}


class FaqParagraphCollection
    extends Collection
    implements \dmn\domain\FaqParagraphCollection {

    function targetClass() {
        return "\\dmn\\domain\\FaqParagraph";
    }
}


class FaqParagraphImageCollection
    extends Collection
    implements \dmn\domain\FaqParagraphImageCollection {

    function targetClass() {
        return "\\dmn\\domain\\FaqParagraphImage";
    }
}


?>