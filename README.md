# laravel-export-to-csv
Export data  from database to CSV
How to export data form database to CSV in Laravel?
  
    public function get_export()
    {
        $table = StudentModel::all();
        $file = fopen('file.csv', 'w');
        foreach ($table as $row) {
            fputcsv($file, $row->to_array());
        }
        fclose($file);
        return Redirect::to('/');
    }
