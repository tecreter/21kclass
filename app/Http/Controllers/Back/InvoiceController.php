<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\Tutor;
use App\Models\Back\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;
use Tzsk\Payu\Models\PayuTransaction;

class InvoiceController extends Controller
{
    protected $requestParams = '';

    public function index()
    {
        return view('back.invoice.list');
    }

    public function getInvoicesList(Request $request)
    {
        if ($request->ajax()) {
            try {
                $this->requestParams = $request->all();
                $start = $this->requestParams['start'];
                $length = $this->requestParams['length'];

                $invoiceLists = array();
                if(isset($this->requestParams['order']) && count($this->requestParams['order']) > 0) {
                    foreach ($this->requestParams['order'] as $order) {
                        switch ($order['column']) {
                            case '4':
                                $invoiceLists = Invoice::orderBy('created_at', $order['dir'])->take($length)->skip($start)->get();
                                break;
                        }
                    }
                }
                else {
                    $invoiceLists = Invoice::orderBy('created_at', 'desc')->take($length)->skip($start)->get();
                }

                if(count($invoiceLists) > 0) {
                    $result['recordsTotal'] = count($invoiceLists);
                    $result['recordsFiltered'] = Invoice::count();
                    $result['data'] = $invoiceLists;
                }
                else {
                    $result['data'] = '';
                    $result['recordsTotal'] = $result['recordsFiltered'] = 0;
                }
                return response()->json($result);
            } catch (Exception $e) {
                Log::notice($e->getMessage());
            }
        }
        return response()->json(RESULT_BAD_REQUEST());
    }

}
