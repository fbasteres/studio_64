<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Enums\Admin\PlanText;
use App\Services\Admin\PlanService;

class PlanController extends Controller
{
    protected $planService;

    public function __construct(PlanService $planService)
    {
        $this->planService = $planService;
    }

    public function index()
    {
        $planes = $this->planService->getAllPaginated();
        return view('admin.planes.index', compact('planes'));
    }

    public function create():View
    {
        return view('admin.planes.create');
    }

    public function store(PlanRequest $request)
    {
        $this->planService->create($request->validated());
        return redirect()->route('admin.planes.index')->with('success', PlanText::PLAN_CREADO->value);
    }

    public function edit($id)
    {
        $plan = $this->planService->getById($id);
        return view('admin.planes.edit', compact('plan'));
    }

    public function update(PlanRequest $request, $id)
    {
        $this->planService->update($id, $request->validated());
        return redirect()->route('admin.planes.index')->with('success', PlanText::PLAN_ACTUALIZADO->value);
    }

    public function destroy($id)
    {
        $this->planService->delete($id);
        return redirect()->route('admin.planes.index')->with('success', PlanText::PLAN_ELIMINADO->value);
    }

}
