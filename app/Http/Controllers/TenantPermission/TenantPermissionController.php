<?php

namespace App\Http\Controllers\TenantPermission;

use App\Http\Controllers\Controller;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Inertia\Inertia;

class TenantPermissionController extends Controller
{
    public static function middleware(): array
    {
        return [
            new middleware('permission:can-create-tenant-permission', only: ['create', 'store']),
            new Middleware('permission:can-edit-tenant-permission', only: ['edit', 'update', 'changeStatus']),
            new Middleware('permission:can-view-tenant-permission', only: ['index']),
        ];
    }
    public function index()
    {
        $breadcrumbs = Breadcrumbs::generate('tenantPermissions');
        $responseData = [
            'breadcrumbs' => $breadcrumbs,
            'pageTitle' => 'Tenant Permission List'
        ];
        return Inertia::render('TenantPermission/TenantPermission/Index', $responseData);
    }

    public function create()
    {
        $breadcrumbs = Breadcrumbs::generate('addTenantPermissions');
        $responseData = [
            'breadcrumbs' => $breadcrumbs,
            'pageTitle' => 'Add Tenant Permission'
        ];
        return Inertia::render('TenantPermission/TenantPermission/Create', $responseData);
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
