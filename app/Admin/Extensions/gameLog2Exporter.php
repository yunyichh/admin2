<?php

namespace App\Admin\Extensions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Parent_;
use Encore\Admin\Grid\Exporters\AbstractExporter;

class gameLog2Exporter extends AbstractExporter
{
    /**
     * {@inheritdoc}
     */
    public function export()
    {
        $filename = $this->getTable() . '.csv';

        $headers = [
            'Content-Encoding' => 'UTF-8',
            'Content-Type' => 'text/csv;charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        response()->stream(function () {
            $handle = fopen('php://output', 'w');

            $titles = [];

            $this->chunk(function ($records) use ($handle, &$titles) {
                if (empty($titles)) {
                    $titles = $this->getHeaderRowFromRecords($records);
                    foreach ($titles as $key => $title) {
//                        $titles[$key] = ___($title, 'utf-8', 'gbk');
                    }
                    // Add CSV headers
                    fputcsv($handle, $titles);
                }

                foreach ($records as $record) {
                    $_record = $this->getFormattedRecord($record);
                    foreach ($_record as $_rk => $_rv) {
                        $_record[$_rk] = iconv('utf-8', 'gbk', $_rv);
                    }
                    fputcsv($handle, $_record);
                }
            });

            // Close the output stream
            fclose($handle);
        }, 200, $headers)->send();

        exit;
    }

    /**
     * @param Collection $records
     *
     * @return array
     */
    public function getHeaderRowFromRecords(Collection $records): array
    {
        $titles = collect(Arr::dot($records->first()->toArray()))->keys()->map(
            function ($key) {
                $key = str_replace('.', ' ', $key);

                return (Str::ucfirst($key));
            }
        );
        return $titles->toArray();
    }

    /**
     * @param Model $record
     *
     * @return array
     */
    public function getFormattedRecord(Model $record)
    {
        return Arr::dot($record->getAttributes());
    }
}
