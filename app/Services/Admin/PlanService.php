<?php

namespace App\Services\Admin;

use App\Models\Admin\Plan;
use Illuminate\Pagination\LengthAwarePaginator;

class PlanService 
{

	public function getAllPaginated(): LengthAwarePaginator
	{
		return Plan::orderBy('created_at', 'desc')->paginate(10);
	}

	public function getById($id): ?Plan
	{
		return Plan::findOrFail($id);
	}

	public function create(array $data): void
	{
		Plan::create($data);
	}

	public function update($id, array $data): void
	{
		$plan = Plan::findOrFail($id);
		$plan->update($data);
	}

	public function delete($id): void
	{
		Plan::destroy($id);
	}
}