<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use Image;
class CategoryController extends Controller
{
    public function getAllCategory()
    {
        $category = new CategoryCollection(Category::all());
        
        $response = [
            'status' => 'Success',
            'data' => $category
        ];
        
        return response($response, 200);
    }

    public function getAndCountCategory()
    {
        $category = new CategoryCollection(Category::paginate(10));

        $response = [
            'status' => 'Success',
            'result' => $category->response()->getData()
        ];
        
        return response($response, 200);
    }

    public function getOneCategory(Category $id)
    {
        $category = new CategoryResource($id);

        $response = [
            'status' => 'Success',
            'data' =>   $category
        ];

        return response($response, 200);
    }

    public function createCategory(Request $request)
    {
        $request->validate([
            'Category_Name' => 'required|string|max:100',
            'Category_Description' => 'required'
        ]);

        // รับค่าจาก form
        $data_category = array(
            'Category_Name' => $request->input('Category_Name'),
            'Category_Description' => $request->input('Category_Description')
        );

        $image = $request->file('Category_Image');
        
        if (!empty($image)) {
            // dd($image);
            // อัพโหลดภาพ
            // เปลี่ยนชื่อรูปที่ได้
            $file_name = "category_".time().".".$image->getClientOriginalExtension(); // getClientOriginalExtension() เอาไว้ดึงนามสกุลไฟล์
            
            // กำหนดขนาด ความกว้างและความสูง
            $imageWidth = 400;
            $imageHeight = 400;
            $folderUpload = public_path("/images/category/thumbnail");
            $path = $folderUpload."/".$file_name;

            // อพโหลดสู้ folder thumbnail
            $img = Image::make($image->getRealPath());
            $img->orientate()->fit($imageWidth, $imageHeight, function($constraint){
                $constraint->upsize();
            });
            $img->save($path);

            // อัพโหลดภาพต้นฉบับเข้าสู่ folder original
            $destinationPath = public_path("/images/category/original");
            $image->move($destinationPath, $file_name);

            // กำหนด path รูปเพื่อใส่ในฐานข้อมูล
            $data_category["Category_Image"] = url('/').'/images/category/thumbnail/'.$file_name;

        } else {
            $data_category["Category_Image"] = url('/').'/images/category/thumbnail/no_img.jpg';
        }

        $category = Category::create($data_category);

        $response = [
            'status' => 'Success',
            'data' => $category
        ];
        
        return response($response, 200);
    }

    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'Category_Name' => 'required|string|max:100',
            'Category_Description' => 'required'
        ]);
        // รับค่าจาก form
        $data_category = array(
            'Category_Name' => $request->input('Category_Name'),
            'Category_Description' => $request->input('Category_Description'),
        );

        $image = $request->file('Category_Image');

        if (!empty($image)) {
            // อัพโหลดภาพ
            // เปลี่ยนชื่อรูปที่ได้
            $file_name = "category_".time().".".$image->getClientOriginalExtension(); // getClientOriginalExtension() เอาไว้ดึงนามสกุลไฟล์
            
            // กำหนดขนาด ความกว้างและความสูง
            $imageWidth = 400;
            $imageHeight = 400;
            $folderUpload = public_path("/images/category/thumbnail");
            $path = $folderUpload."/".$file_name;

            // อพโหลดสู่ folder thumbnail
            $img = Image::make($image->getRealPath());
            $img->orientate()->fit($imageWidth, $imageHeight, function($constraint){
                $constraint->upsize();
            });
            $img->save($path);

            // อัพโหลดภาพต้นฉบับเข้าสู่ folder original
            $destinationPath = public_path("/images/category/original");
            $image->move($destinationPath, $file_name);

            // กำหนด path รูปเพื่อใส่ในฐานข้อมูล
            $data_category["Category_Image"] = url('/').'/images/category/thumbnail/'.$file_name;
        }

        $category = Category::find($id);
        $category->update($data_category);

        $response = [
            'status' => 'Success',
            'data' => $category
        ];

        return response($response, 200);
    }

    public function deleteCategory($id)
    {
        Category::destroy($id);

        $response = [
            'status' => 'Success',
        ];
        
        return response($response, 200);
    }

    public function searchCategory(Request $request)
    {
        $keyword = $request->query('keyword');
        if ($keyword) {
            $category = new CategoryCollection(Category::where('Category_Name', 'like', '%' . $keyword . '%')->paginate(10));
        }

        $response = [
            'status' => 'Success',
            'result' => $category->response()->getData(true)
        ];
        return response($response, 200);
    }
}