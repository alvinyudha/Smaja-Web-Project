<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Pengunjung</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h1>Statistik Pengunjung</h1>
    <p>Total Pengunjung: {{ $totalVisitors }}</p>
    <p>Pengunjung Hari Ini: {{ $todayVisitors }}</p>

    @if ($todayVisitors > 0)
        <h2>Daftar Pengunjung Hari Ini:</h2>
        <table>
            <thead>
                <tr>
                    <th>IP Address</th>
                    <th>Browser</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todayEntries as $entry)
                    <tr>
                        <td>{{ $entry['ip'] }}</td>
                        <td>{{ $entry['browser'] }}</td>
                        <td>{{ $entry['date'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Belum ada pengunjung hari ini.</p>
    @endif
</body>

</html>
