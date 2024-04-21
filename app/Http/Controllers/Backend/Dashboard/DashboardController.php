<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $previousYear = date('Y')-1;
        $currentYear = date('Y');
        $numberSubscriptionPreviousYear = Profile::where('name', '=', 'CUSTOMER')
            ->where('created_at', 'like', '%' . $previousYear . '%')
            ->count()
        ;
        $numberSubscriptionCurrentYear = Profile::where('name', '=', 'CUSTOMER')
            ->where('created_at', 'like', '%' . $currentYear . '%')
            ->count()
        ;
        $numberTotalCustomer = Profile::where('name', '=', 'CUSTOMER')->count();

        return view('backend.dashboard.index', [
            'previousYear' => $previousYear,
            'currentYear' => $currentYear,
            'numberSubscriptionPreviousYear' => $numberSubscriptionPreviousYear,
            'numberSubscriptionCurrentYear' => $numberSubscriptionCurrentYear,
            'numberTotalCustomer' => $numberTotalCustomer
        ]);
    }
}
