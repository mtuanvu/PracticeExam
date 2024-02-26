<?php
class EmployeePerformance
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function calculatePerformance($employeeId, $year)
    {

        return [
            'leavePoints' => 10, // Giả định
            'workPerformance' => 2000000 // Giả định
        ];
    }
}
