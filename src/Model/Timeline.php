<?php
namespace PlanetaSoftware\Coinbase\Commerce\Model;

/**
 * Description of Timeline
 *
 * This Model class represents the input data used to identify the status update objects
 * according to the charge timeline
 *
 * @author sain <sain@planetasoftware.com>
 */
class Timeline {

    /**
     * @var STATUS_NEW
     */
    const STATUS_NEW = 'NEW';

    /**
     * @var STATUS_PENDING
     */
    const STATUS_PENDING = 'PENDING';

    /**
     * @var STATUS_COMPLETED
     */
    const STATUS_COMPLETED = 'COMPLETED';

    /**
     * @var STATUS_EXPIRED
     */
    const STATUS_EXPIRED = 'EXPIRED';

    /**
     * @var STATUS_UNRESOLVED
     */
    const STATUS_UNRESOLVED = 'UNRESOLVED';

    /**
     * @var STATUS_RESOLVED
     */
    const STATUS_RESOLVED = 'RESOLVED';

    /**
     * @var CONTEXT_UNRESOLVED_UNDERPAID
     */
    const CONTEXT_UNRESOLVED_UNDERPAID = 'UNDERPAID';

    /**
     * @var CONTEXT_UNRESOLVED_OVERPAID
     */
    const CONTEXT_UNRESOLVED_OVERPAID = 'OVERPAID';

    /**
     * @var CONTEXT_UNRESOLVED_DELAYED
     */
    const CONTEXT_UNRESOLVED_DELAYED = 'DELAYED';

    /**
     * @var CONTEXT_UNRESOLVED_MULTIPLE
     */
    const CONTEXT_UNRESOLVED_MULTIPLE = 'MULTIPLE';

    /**
     * @var CONTEXT_UNRESOLVED_MANUAL
     */
    const CONTEXT_UNRESOLVED_MANUAL = 'MANUAL';

    /**
     * @var CONTEXT_UNRESOLVED_OTHER
     */
    const CONTEXT_UNRESOLVED_OTHER = 'OTHER';


	/**
     * Time
     * Time of the status update
     *
     * @var string 
     */
    public $time;

    /**
     * Status
     * Status of the charge
     *
     * @var string 
     */
    public $status;

    /**
     * Context
     * For charges with UNRESOLVED status, additional context is provided.
     *
     * @var string 
     */
    public $context;

    /**
     * Get time
     * 
     * @return string
     */
    public function getTime() {
        return $this->time;
    }

    /**
     * Get status
     * 
     * @return string
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Get context
     * 
     * @return string
     */
    public function getContext() {
        return $this->context;
    }


    /**
     * Set time
     *
     * @param string $time
     * @return $this
     */
    public function setTime(string $time){
        $this->time = $time;
        return $this;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status){
        $this->status = $status;
        return $this;
    }

    /**
     * Set context
     *
     * @param string $context
     * @return $this
     */
    public function setContext(string $context){
        $this->context = $context;
        return $this;
    }

}