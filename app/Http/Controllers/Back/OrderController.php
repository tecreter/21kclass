<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\OrderProduct;
use App\Models\Back\Tutor;
use App\Models\Back\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Mockery\Exception;
use Tzsk\Payu\Models\PayuTransaction;

class OrderController extends Controller
{
    protected $requestParams = '';

    public function index()
    {
        return view('back.order.list');
    }

    public function show(Request $request, Order $order)
    {
        if ($request->ajax()) {
            try {
                $order_products = OrderProduct::where('order_id', $order->id)->get();
                $products = array();
                foreach ($order_products as $item) {
                    $products[] = array(
                        'name' => $item->course_name,
                        'quantity' => $item->quantity,
                        'price' => number_format($item->course_price)
                    );
                }

                $data = array(
                    'name' => $order->first_name . ' ' . $order->last_name,
                    'email' => $order->email_address,
                    'phone' => $order->phone_number,
                    'address' => $order->apt_name . ' ' . $order->address . ' ' . $order->city . ' ' . $order->state . ' ' . $order->country . ' ' . $order->postcode,
                    'invoice' => $order->invoice,
                    'transaction_id' => $order->transaction_id,
                    'transaction_date' => ($order->paid_at != '') ? date('M d, Y h:i A', strtotime($order->paid_at)) : '',
                    'order' => array(
                        'sub_total' => number_format($order->sub_total),
                        'discounts' => number_format($order->discounts),
                        'tax' => number_format($order->tax),
                        'total' => number_format($order->total)
                    ),
                    'products' => $products
                );

//                echo '<pre>';
//                print_r( $result );
//                exit;

                /*
                Array
                    (
                        [name] => Senthil T
                        [email] => tecreter@gmail.com
                        [invoice] => LB00002
                        [transaction_id] => 7QhExgAaKk
                        [transaction_date] => 2021-03-15 10:43:32
                        [order] => Array
                            (
                                [total_products] => 1.00
                                [discounts] => 0.00
                                [tax] => 0.00
                                [total] => 888.00
                            )

                        [products] => Array
                            (
                                [0] => Array
                                    (
                                        [name] => Neet Coaching
                                        [quantity] => 1
                                        [price] => 888.00
                                    )

                            )

                    )
                 */

                $result = array(
                    getConstantsValue('JSON_KEY_STATUS') => 200,
                    getConstantsValue('JSON_KEY_RESULT') => true,
                    'data' => $data
                );

                return response()->json($result);

            } catch (Exception $e) {
                Log::notice($e->getMessage());
            }
        }
        return response()->json(RESULT_BAD_REQUEST());
    }

    public function getOrdersList(Request $request)
    {
        if ($request->ajax()) {
            try {
                $this->requestParams = $request->all();
                $start = $this->requestParams['start'];
                $length = $this->requestParams['length'];

                $orderLists = array();
                if(isset($this->requestParams['order']) && count($this->requestParams['order']) > 0) {
                    foreach ($this->requestParams['order'] as $order) {
                        switch ($order['column']) {
                            case '4':
                                $orderLists = Order::orderBy('created_at', $order['dir'])->take($length)->skip($start)->get();
                                break;
                        }
                    }
                }
                else {
                    $orderLists = Order::orderBy('created_at', 'desc')->take($length)->skip($start)->get();
                }

                if(count($orderLists) > 0) {
                    $result['recordsTotal'] = count($orderLists);
                    $result['recordsFiltered'] = Order::count();
                    $result['data'] = $orderLists;
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
