<?php
namespace App\Transformer;
use App\Models\Order;
use League\Fractal\TransformerAbstract;

class OrderTransformer extends TransformerAbstract
{
    public function transform(Order $Order) {

        return [
            'code' => $Order->code,
            'service' => [
                'code' => $Order->service_code,
                'vendor' => $Order->serviceOne == null ? "" : $Order->serviceOne->vendor
            ],
            'customer' => [
                'username' => $Order->user,
                'name' => $Order->userOne == null ? "" : $Order->userOne->name,
                'phone' => $Order->userOne == null ? "" : $Order->userOne->phone,
                'city' => $Order->userOne == null ? "" : $Order->userOne->city,
            ],
            'order' => [
                'date' => $Order->order_date,
                'time' => $Order->order_time,
            ],
            'end_date' => $Order->end_date,
            'days' => $Order->days,
            'address_order' => $Order->address_order,
            'city' => $Order->city,
            'car' => $Order->car,
            'description' => $Order->description,
            'price_total' => $Order->price_total,
            'status' => $Order->status,
        ];      
    }
}