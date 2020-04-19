<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function registeredUsers()
    {
        $current_start_mouth = Carbon::now()->startOfMonth();
        $raw_data = User::where('created_at', '>', $current_start_mouth->subMonth(4))
            ->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->created_at)->formatLocalized('%B');
            });

        $result = [];
        for ($i = 0; $i < 5; $i++) {

            if ($raw_data->has($current_start_mouth->formatLocalized('%B'))) {
                $result[$current_start_mouth->formatLocalized('%B')] = $raw_data[$current_start_mouth->formatLocalized('%B')]->count();
            } else {
                $result[$current_start_mouth->formatLocalized('%B')] = 0;
            }
            $current_start_mouth->addMonth();
        }
        return response()->json($result);
    }

    public function articleTypeViews()
    {
        $raw_date = Article::where('created_at', '>', Carbon::now()->startOfMonth()->subMonth())->get()->groupBy('type');
        $result = [];
        foreach ($raw_date as $key => $typeArticles) {
            $sum = 0;
            foreach ($typeArticles as $article) {
                $sum += $article->impressions;
            }
            switch ($key) {
                case 'article':
                    $result[' Статьи'] = $sum;
                    break;
                case 'longread':
                    $result['Лонгриды'] = $sum;
                    break;
                case 'digest':
                    $result['Дайджест'] = $sum;
                    break;
                default:
                    $result[$key] = $sum;
                    break;
            }
        }
        asort($result);
        return response()->json($result);
    }
}
