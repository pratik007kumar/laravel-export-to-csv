<?php

//laravel controller code
//...
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
