<?php

namespace App\Http\Controllers\TenantPermission;

use App\Http\Controllers\Controller;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class TenantRoleController extends Controller
{
    public static function middleware(): array
    {
        return [
            new middleware('permission:can-create-tenant-role', only: ['create', 'store']),
            new Middleware('permission:can-edit-tenant-role', only: ['edit', 'update', 'changeStatus']),
            new Middleware('permission:can-view-tenant-role', only: ['index']),
            new Middleware('permission:can-view-details-tenant-role', only: ['show']),
        ];
    }
    public function index()
    {
        $breadcrumbs = Breadcrumbs::generate('tenantRoles');
        $responseData = [
            'breadcrumbs' => $breadcrumbs,
            'pageTitle' => 'Tenant Role List'
        ];
        return Inertia::render('TenantPermission/TenantRole/Index', $responseData);
    }

    public function create()
    {
        $breadcrumbs = Breadcrumbs::generate('addTenantRoles');
        $responseData = [
            'breadcrumbs' => $breadcrumbs,
            'pageTitle' => 'Add Tenant Role'
        ];
        return Inertia::render('TenantPermission/TenantRole/Create', $responseData);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
