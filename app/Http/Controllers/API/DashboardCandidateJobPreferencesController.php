<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\API\SalaryTypeModel;
use App\Models\API\CurrencyListModel;

class DashboardCandidateJobPreferencesController extends Controller
{
    public function getSalaryType()
    {
        $salary_type = SalaryTypeModel::all();

        return response()->json($salary_type);
    }

    public function getCurrencyList()
    {
        $currency_list = CurrencyListModel::all();

        return response()->json($currency_list);
    }
}
