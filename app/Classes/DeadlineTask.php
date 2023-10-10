<?php
namespace app\Classes;

use app\Classes\Task;
use app\Traits\HasAssigneeTrait;
use app\Interfaces\HasDueDateInterface;
use app\Interfaces\HasStartDateInterface;

class DeadlineTask extends Task implements HasStartDateInterface, HasDueDateInterface{

    use HasAssigneeTrait;

    protected $startDate;
    protected $dueDate;

    //methods
    public function __construct($title, $description, $startDate, $dueDate){
        parent::__construct($title, $description);
        $this->startDate = $startDate;
        $this->dueDate = $dueDate;
    }
    
    //getters
    public function getStartDate(){
        return $this->startDate;
    }

    public function getDueDate(){
        return $this->dueDate;
    }

    public function getPriority(){
        return "High";
    }

    public function markAsCompleted(){
        $this->completed = true;
    }

}


?>