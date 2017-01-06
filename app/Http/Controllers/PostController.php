<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
use Validator;

class PostController extends Controller {

    public function category($category) {
        $post = array("category" => trim(preg_replace("/[^a-zA-Z0-9\-]/", "", $category)));

        $validator = Validator::make($post, [
                    'category' => 'required|min:3'
        ]);
        $data = array(
            "status" => 405,
            "msg" => $validator->messages()
        );
        if (!$validator->fails()) {
            $data = Category::with(['PostCategory' => function ($e) {
                            $e->with(['PostToComment' => function ($r) {
                                    $r->where("show", ">", 0);
                                    $r->orderBy('created_at', "ASC");
                                }]);
                            $e->where('publish', ">", 0);
                        }])->where("seo_link", $post['category'])->first();

            if (!$data) {
                $data = array(
                    "status" => 405,
                    "msg" => "Post not found!"
                );
            }
        }

        return response()->json($data);
    }
    

}
