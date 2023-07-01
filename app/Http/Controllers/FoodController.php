<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Http\Resources\FoodCollection;
use App\Http\Resources\FoodResource;
use Image;
class FoodController extends Controller
{
    public function getAllFood()
    {
        $food = new FoodCollection(Food::all());
        
        $response = [
            'status' => 'Success',
            'data' => $food
        ];
        
        return response($response, 200);
    }

    public function getAndCountFood()
    {
        $food = new FoodCollection(Food::paginate(10));
        
        $response = [
            'status' => 'Success',
            'result' => $food->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getOneFood(Food $id)
    {
        $food = new FoodResource($id);

        $response = [
            'status' => 'Success',
            'data' => $food
        ];

        return response($response, 200);
    }

    public function createFood(Request $request)
    {
        // validate form
        $request->validate([
            'Food_Name' => 'required|string|max:100',
            'Food_Price' => 'required',
            'Food_Description' => 'string',
            'Food_Image' => 'required',
            'category_id' => 'required',
            'is_recommend' => 'required',
            'is_new' => 'required',
            'is_active' => 'required'
        ]);

        // รับค่าจาก form
        $data_food = array(
            'Food_Name' => $request->input('Food_Name'),
            'Food_Price' => $request->input('Food_Price'),
            'Food_Description' => $request->input('Food_Description'),
            'category_id' => $request->input('category_id'),
            'is_recommend' => $request->input('is_recommend'),
            'is_new' => $request->input('is_new'),
            'is_active' => $request->input('is_active'),
        );

        $image = $request->file('Food_Image');
        
        if (!empty($image)) {
            // อัพโหลดภาพ
            // เปลี่ยนชื่อรูปที่ได้
            $file_name = "food_".time().".".$image->getClientOriginalExtension(); // getClientOriginalExtension() เอาไว้ดึงนามสกุลไฟล์
            
            // กำหนดขนาด ความกว้างและความสูง
            $imageWidth = 400;
            $imageHeight = 400;
            $folderUpload = public_path("/images/food/thumbnail");
            $path = $folderUpload."/".$file_name;

            // อพโหลดสู้ folder thumbnail
            $img = Image::make($image->getRealPath());
            $img->orientate()->fit($imageWidth, $imageHeight, function($constraint){
                $constraint->upsize();
            });
            $img->save($path);

            // อัพโหลดภาพต้นฉบับเข้าสู่ folder original
            $destinationPath = public_path("/images/food/original");
            $image->move($destinationPath, $file_name);

            // กำหนด path รูปเพื่อใส่ในฐานข้อมูล
            $data_food["Food_Image"] = url('/').'/images/food/thumbnail/'.$file_name;

        } else {
            $data_food["Food_Image"] = url('/').'/images/food/thumbnail/no_img.jpg';
        }

        $food = Food::create($data_food);

        $response = [
            'status' => 'Success',
            'data' => $food
        ];
        
        return response($response, 200);
    }

    public function updateFood(Request $request, $id)
    {
        // รับค่าจาก form
        $data_food = array(
            'Food_Name' => $request->input('Food_Name'),
            'Food_Price' => $request->input('Food_Price'),
            'Food_Description' => $request->input('Food_Description'),
            'category_id' => $request->input('category_id'),
            'is_recommend' => $request->input('is_recommend'),
            'is_new' => $request->input('is_new'),
            'is_active' => $request->input('is_active'),
        );

        $image = $request->file('Food_Image');
        
        if (!empty($image)) {
            // อัพโหลดภาพ
            // เปลี่ยนชื่อรูปที่ได้
            $file_name = "food_".time().".".$image->getClientOriginalExtension(); // getClientOriginalExtension() เอาไว้ดึงนามสกุลไฟล์
            
            // กำหนดขนาด ความกว้างและความสูง
            $imageWidth = 400;
            $imageHeight = 400;
            $folderUpload = public_path("/images/food/thumbnail");
            $path = $folderUpload."/".$file_name;

            // อพโหลดสู้ folder thumbnail
            $img = Image::make($image->getRealPath());
            $img->orientate()->fit($imageWidth, $imageHeight, function($constraint){
                $constraint->upsize();
            });
            $img->save($path);

            // อัพโหลดภาพต้นฉบับเข้าสู่ folder original
            $destinationPath = public_path("/images/food/original");
            $image->move($destinationPath, $file_name);

            // กำหนด path รูปเพื่อใส่ในฐานข้อมูล
            $data_food["Food_Image"] = url('/').'/images/food/thumbnail/'.$file_name;

        }

        $food = Food::find($id);
        $food->update($data_food);

        $response = [
            'status' => 'Success',
            'data' => $food->get()
        ];
        
        return response($response, 200);
    }

    public function deleteFood($id)
    {
        Food::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchFood(Request $request)
    {
        $keyword = $request->query('keyword');
        if ($keyword) {
            $food = new FoodCollection(Food::where('Food_Name', 'like', '%' . $keyword . '%')
                ->orWhere('Food_Price', 'like', '%' . $keyword . '%')
                ->paginate(10));
        }
            
        $response = [
            'status' => 'Success',
            'result' => $food->response()->getData(true)
        ];

        return response($response, 200);
    }
}
