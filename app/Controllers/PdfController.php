<?php

namespace App\Controllers;

use App\Models\UserModel;
use Dompdf\Dompdf as Dompdf;
use Exception;
use PhpParser\Node\Stmt\TryCatch;

class PdfController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index($id)
    {
        $data = [
            'data' => $this->userModel->find($id),
        ];

        return view('print/print_data', $data);
    }

    public function printPdf($id)
    {
        try {
            $data = [
                "data" => $this->userModel->find($id),
            ];

            $dompdf = new Dompdf();
            $dompdf->loadHtml(view('print/print_data', $data));
            $dompdf->setPaper('A4', 'landscape');
            $dompdf->render();
            $dompdf->stream();
        } catch (\Exception $e) {
            session()->setFlashdata('gagal', $e);
        }

        return redirect()->back();
    }
}
