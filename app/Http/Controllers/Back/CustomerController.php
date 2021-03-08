<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\Tutor;
use App\Models\Front\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;

class CustomerController extends Controller
{
    protected $requestParams = '';

    public function index()
    {
        return view('back.customer.list');
    }

    public function getCustomersList(Request $request)
    {
        if ($request->ajax()) {
            try {
                $this->requestParams = $request->all();
                $start = $this->requestParams['start'];
                $length = $this->requestParams['length'];

                $customerLists = array();
                if(isset($this->requestParams['order']) && count($this->requestParams['order']) > 0) {
                    foreach ($this->requestParams['order'] as $order) {
                        switch ($order['column']) {
                            case '4':
                                $customerLists = Customer::orderBy('created_at', $order['dir'])->take($length)->skip($start)->get();
                                break;
                        }
                    }
                }
                else {
                    $customerLists = Customer::orderBy('created_at', 'desc')->take($length)->skip($start)->get();
                }

                if(count($customerLists) > 0) {
                    $result['recordsTotal'] = count($customerLists);
                    $result['recordsFiltered'] = Customer::count();
                    $result['data'] = $customerLists;
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
