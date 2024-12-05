<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StatisticController extends Controller
{
    public function stats()
    {
        // Ambil data dari file
        $visitorData = Storage::get('visitors.txt');
        $lines = explode("\n", trim($visitorData));

        // Hitung total pengunjung
        $totalVisitors = count($lines);

        // Hitung pengunjung hari ini
        $today = now()->format('Y-m-d');
        $todayVisitors = 0;
        $todayEntries = [];

        foreach ($lines as $line) {
            $data = explode(',', $line);
            if (isset($data[2]) && date('Y-m-d', strtotime($data[2])) == $today) {
                $todayVisitors++;
                $todayEntries[] = [
                    'ip' => $data[0],
                    'browser' => $data[1],
                    'date' => $data[2],
                ];
            }
        }

        return view('logvisitor', compact('totalVisitors', 'todayVisitors', 'todayEntries'));
    }
}
