<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Images;

class CsvUploadController extends Controller
{
    public function uploadCSV(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        $csvFile = $request->file('csv_file');

        $handle = fopen($csvFile->getPathname(), 'r');

        fgetcsv($handle);

        Images::truncate();

        while (($row = fgetcsv($handle)) !== false) {

            $skuCode = $row[0];
            $image = $row[1];

            Images::updateOrCreate(
                ['sku_code' => $skuCode],
                ['image' => $image]
            );
        }

        fclose($handle);

        return redirect()->back()->with('success', 'CSV file has been successfully uploaded.');
    }
}

