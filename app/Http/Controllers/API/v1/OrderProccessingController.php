<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderProccessingController extends Controller
{
    public function get_order_info()
    {
        $orderObject = '{
            "success": 0,
            "message": "string",
            "order_info": {
              "id": null,
              "id_tariff_type": 0,
              "phone": "string",
              "date_create": "2022-12-01T05:26:23.184Z",
              "date_start": null,
              "route_points": [
                {
                  "latitude": 0,
                  "longitude": 0,
                  "address": "string"
                }
              ],
              "add_price": [
                {
                  "id": 0,
                  "name": "string",
                  "number": "string"
                }
              ],
              "sum_noncash": 0,
              "edit_count": 0,
              "point_start": {
                "latitude": 0,
                "longitude": 0,
                "address": "string"
              },
              "comment_start": "string",
              "comment_order": "string",
              "length": 0,
              "empty_length": 0,
              "length_out": 0,
              "duration": 0,
              "price": 0,
              "free_wait_time": 0,
              "need_time": 0,
              "need_distance": 0,
              "sum_add_prices_from_drv": 0,
              "id_organization_order": 0
            },
            "driver_info": {
              "id": "string",
              "name": "string",
              "nick_name": "string",
              "phone": "string"
            },
            "auto_info": {
              "model": "string",
              "color": "string",
              "number": "string"
            },
            "status": "New"
          }';
        $orderInfo = json_decode($orderObject);
        return response()->json($orderInfo);

    }
    public function createOrUpdate()
    {

    }
    public function set_status()
    {

    }
    public function client_coord()
    {

    }
    public function price()
    {

    }
    public function call()
    {

    }
}
