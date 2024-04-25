<?php

use Interfaces\Employee;

class UserEmployee extends AbstractUser	implements Employee
{
	private $salary;

	/*
	 * функция расчёта зарплаты
	 */
	public function salaryCalculator()
	{
		// TODO: Implement salaryCalculator() method.
	}

	/*
	 * функция расчёта отпускных
	 */
	public function vacationСalculator()
	{
		// TODO: Implement vacationСalculator() method.
	}

	/**
	 * @param mixed $salary
	 */
	private function setSalary($salary)
	{
		$this->salary = $salary;
	}

}
