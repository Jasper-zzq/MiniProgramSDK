<?php

namespace Hillpy\MiniProgramSDK\Params;

class ImmediateDeliveryParam
{
    public static $immediateDelivery = [
        'reOrder' => [
            'access_token' => '',
            'delivery_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'openid' => '',
            'sender' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'receiver' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'cargo' => [
                'goods_value' => '',
                'goods_height' => '',
                'goods_length' => '',
                'goods_width' => '',
                'goods_weight' => '',
                'goods_detail' => [
                    'goods' => [
                        'good_count' => '',
                        'good_name' => '',
                        'good_price' => '',
                        'good_unit' => '',
                    ]
                ],
                'goods_pickup_info' => '',
                'goods_delivery_info' => '',
                'cargo_first_class' => '',
                'cargo_second_class' => '',
            ],
            'order_info' => [
                'delivery_service_code' => '',
                'order_type' => '',
                'expected_delivery_time' => '',
                'expected_finish_time' => '',
                'expected_pick_time' => '',
                'poi_seq' => '',
                'note' => '',
                'order_time' => '',
                'is_insured' => '',
                'declared_value' => '',
                'tips' => '',
                'is_direct_delivery' => '',
                'cash_on_delivery' => '',
                'cash_on_pickup' => '',
                'rider_pick_method' => '',
                'is_finish_code_needed' => '',
                'is_pickup_code_needed' => '',
            ],
            'shop' => [
                'wxa_path' => '',
                'img_url' => '',
                'goods_name' => '',
                'goods_count' => '',
                'wxa_appid' => '',
            ],
            'sub_biz_id' => '',
        ],
        'abnormalConfirm' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'waybill_id' => '',
            'remark' => '',
        ],
        'addOrder' => [
            'access_token' => '',
            'delivery_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'openid' => '',
            'sender' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'receiver' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'cargo' => [
                'goods_value' => '',
                'goods_height' => '',
                'goods_length' => '',
                'goods_width' => '',
                'goods_weight' => '',
                'goods_detail' => [
                    'goods' => [
                        'good_count' => '',
                        'good_name' => '',
                        'good_price' => '',
                        'good_unit' => '',
                    ]
                ],
                'goods_pickup_info' => '',
                'goods_delivery_info' => '',
                'cargo_first_class' => '',
                'cargo_second_class' => '',
            ],
            'order_info' => [
                'delivery_service_code' => '',
                'order_type' => '',
                'expected_delivery_time' => '',
                'expected_finish_time' => '',
                'expected_pick_time' => '',
                'poi_seq' => '',
                'note' => '',
                'order_time' => '',
                'is_insured' => '',
                'declared_value' => '',
                'tips' => '',
                'is_direct_delivery' => '',
                'cash_on_delivery' => '',
                'cash_on_pickup' => '',
                'rider_pick_method' => '',
                'is_finish_code_needed' => '',
                'is_pickup_code_needed' => '',
            ],
            'shop' => [
                'wxa_path' => '',
                'img_url' => '',
                'goods_name' => '',
                'goods_count' => '',
                'wxa_appid' => '',
            ],
            'sub_biz_id' => '',
        ],
        'addTip' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'waybill_id' => '',
            'openid' => '',
            'tips' => '',
            'remark' => '',
        ],
        'bindAccount' => [
            'access_token' => '',
            'delivery_id' => '',
        ],
        'cancelOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'waybill_id' => '',
            'cancel_reason_id' => '',
            'cancel_reason' => '',
        ],
        'getAllImmeDelivery' => [
            'access_token' => '',
        ],
        'getBindAccount' => [
            'access_token' => '',
        ],
        'getOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
        ],
        'mockUpdateOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'action_time' => '',
            'order_status' => '',
            'action_msg' => '',
        ],
        'openDelivery' => [
            'access_token' => '',
        ],
        'preAddOrder' => [
            'access_token' => '',
            'delivery_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'openid' => '',
            'sender' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'receiver' => [
                'name' => '',
                'city' => '',
                'address' => '',
                'address_detail' => '',
                'phone' => '',
                'lng' => '',
                'lat' => '',
                'coordinate_type' => '',
            ],
            'cargo' => [
                'goods_value' => '',
                'goods_height' => '',
                'goods_length' => '',
                'goods_width' => '',
                'goods_weight' => '',
                'goods_detail' => [
                    'goods' => [
                        'good_count' => '',
                        'good_name' => '',
                        'good_price' => '',
                        'good_unit' => '',
                    ]
                ],
                'goods_pickup_info' => '',
                'goods_delivery_info' => '',
                'cargo_first_class' => '',
                'cargo_second_class' => '',
            ],
            'order_info' => [
                'delivery_service_code' => '',
                'order_type' => '',
                'expected_delivery_time' => '',
                'expected_finish_time' => '',
                'expected_pick_time' => '',
                'poi_seq' => '',
                'note' => '',
                'order_time' => '',
                'is_insured' => '',
                'declared_value' => '',
                'tips' => '',
                'is_direct_delivery' => '',
                'cash_on_delivery' => '',
                'cash_on_pickup' => '',
                'rider_pick_method' => '',
                'is_finish_code_needed' => '',
                'is_pickup_code_needed' => '',
            ],
            'shop' => [
                'wxa_path' => '',
                'img_url' => '',
                'goods_name' => '',
                'goods_count' => '',
                'wxa_appid' => '',
            ],
            'sub_biz_id' => '',
        ],
        'preCancelOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'delivery_sign' => '',
            'delivery_id' => '',
            'waybill_id' => '',
            'cancel_reason_id' => '',
            'cancel_reason' => '',
        ],
        'realMockUpdateOrder' => [
            'access_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'action_time' => '',
            'order_status' => '',
            'action_msg' => '',
            'delivery_sign' => '',
        ],
        'updateOrder' => [
            'access_token' => '',
            'wx_token' => '',
            'shopid' => '',
            'shop_order_id' => '',
            'shop_no' => '',
            'waybill_id' => '',
            'action_time' => '',
            'order_status' => '',
            'action_msg' => '',
            'wxa_path' => '',
            'agent' => [
                'name' => '',
                'phone' => '',
                'is_phone_encrypted' => '',
            ],
            'expected_delivery_time' => '',
        ]
    ];
}
