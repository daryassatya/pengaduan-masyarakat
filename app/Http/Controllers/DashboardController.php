<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\ComplaintCategory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        /* Complaint Chart Process Start*/
        $complaintMonths = DB::table('complaints')
            ->select(DB::raw('count(*) as count, MONTH(created_at) as month'))
            ->whereYear('created_at', '=', 2023)
            ->groupBy('month')
            ->get();

        $countsComplaintMonth = [];
        $tempMonth = 0;
        foreach ($complaintMonths as $key => $cm) {
            $tempMonthReduced = $cm->month - $tempMonth;
            if ($tempMonthReduced !== 1 || $key !== 0) {
                for ($i=1; $i < $tempMonthReduced; $i++) { 
                    $countsComplaintMonth[] = 0;
                }
            }
            $countsComplaintMonth[] = $cm->count;
            $tempMonth = $cm->month;
        }
        /* Complaint Chart Process End*/

        /* Donut Chart Process Start*/
        $complaintCategories = ComplaintCategory::all();
        $complaintCategoryNames = [];
        $complaintCategoryCounts = [];
        foreach ($complaintCategories as $cp) {
            $complaintCategoryNames[] = $cp->name;
            $complaintCategoryCounts[] = $cp->complaints->count();
        }
        /* Donut Chart Process End*/

        return view('dashboard.index', [
            'title' => 'Dashboard',
            'user' => User::count(),
            'post' => Post::count(),
            'complaints' => Complaint::all(),
            'countsComplaintMonth' => $countsComplaintMonth,
            'complaintCategories' => $complaintCategories,
            'complaintCategoryNames' => $complaintCategoryNames,
            'complaintCategoryCounts' => $complaintCategoryCounts,
        ]);
    }
    public function mainMenu()
    {
        return view('dashboard.main-menu', [
            'title' => 'Main Menu',
        ]);
    }
}
